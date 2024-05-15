<?php
declare(strict_types=1);

namespace App\Controller\API;

use App\Controller\AppController;
use Cake\Event\EventInterface;

/**
 * Api Controller
 *
 * @method \App\Model\Entity\Api[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApiController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: *");
        parent::beforeFilter($event); // TODO: Change the autogenerated stub
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $empresas_model = $this->getTableLocator()->get('ZcCabeceraco');

        $empresas = $empresas_model->find('all', [])
            ->limit(50)
            ->toArray();

        return $this->json($empresas);


    }

    public function getRodales()
    {
        $rodales_model = $this->getTableLocator()->get('ZcRodales');

        $rodales = $rodales_model->find('all', [])
            ->order(['rodal ASC'])
            ->distinct(['objnr'])
            ->toArray();


        return $this->json($rodales);
    }

    public function getEmpresas()
    {
        $empresas_model = $this->getTableLocator()->get('ZcEmpresas');
        $empresas = $empresas_model->find('all', [])
            ->order(['nombre ASC'])
            ->toArray();


        return $this->json($empresas);
    }

    public function getRodalesIdByEmpresa()
    {
        $idempresa = $this->request->getQuery('idempresa');
        /*$rodales_model = $this->getTableLocator()->get('ZcRodales');
        $cabeceraco_model = $this->getTableLocator()->get('ZcCabeceraco');

        //traigo los rodales by empresa
        $rodales_by_empresa = $cabeceraco_model->find('all', [
            'fields' => ['idrodal' => 'objnr']
        ])
            ->distinct(['objnr'])
            ->where(['idempresa LIKE' => $idempresa])
            ->toArray();*/


        $rodales_empresas_model = $this->getTableLocator()->get('ZcRodalesWithEmpresas');

        $rodales_by_empresa = $rodales_empresas_model->find('all', [

        ]);





        return $this->json($rodales_by_empresa);

    }


    public function getRodalesWithEmpresas()
    {
        $rodales_empresas_model = $this->getTableLocator()->get('ZcRodalesWithEmpresas');

        $rodal_empresa = $rodales_empresas_model->find('all', [])
            ->toArray();


        return $this->json($rodal_empresa);

    }


    public function getYears()
    {
        $years_model = $this->getTableLocator()->get('ZcYearsDistinct');

        $years = $years_model->find('all', [])
            ->order(['years ASC'])
            ->toArray();


        return $this->json($years);
    }


    public function getDataByYears()
    {
        //recibo los yearsy tmb puedo recibir meses
        $data = $this->request->getData();
        //$years = $data['years'];

        //debug($data['years']);


        //return $this->json($years);
        $costos_model = $this->getTableLocator()->get('ZcCostosCompleto');
        $data_by_years = [];
        if(!empty($data['years'])){
            $data_by_years = $costos_model->find('all', [])
                ->where(['gjahr IN' => $data['years']])
                ->order('gjahr ASC')
                ->toArray();
        }



        /*$data_by_years = $cabeceraco_model->find('all',
            []
            )
            ->limit(5000)
            ->where(['gjahr IN' => $arr])->first();*/

        //debug($data_by_years);

        return $this->json($data_by_years);
    }

    public function getEmsefors()
    {
        $model_proveedores = $this->getTableLocator()->get('ZcProveedores');

        $emsefors = $model_proveedores->find('all', )
            ->order(['name ASC'])
            ->toArray();


        return $this->json($emsefors);

    }

    public function getYearsByIdRodal()
    {

        $data = $this->request->getData();
        $idrodales = $data['rodales'];

        if($idrodales == null or $idrodales == ''){
            return $this->json(false);
        } else {
            //traigo el modelo
            $cabeceraco_model = $this->getTableLocator()->get('ZcCabeceraco');
            $years = $cabeceraco_model->find('all', [
                'fields' => ['year' => 'gjahr']
            ])
                ->distinct(['gjahr'])
                ->order(['gjahr ASC'])
                ->where(['objnr IN' => $idrodales])
            ->toArray();

            return $this->json($years);
        }
    }

    public function getMonthsByRodales()
    {
        $data = $this->request->getData();
        $idrodales = $data['rodales'];

        if($idrodales == null or $idrodales == ''){
            return $this->json(false);
        } else {
            //traigo el modelo
            $cabeceraco_model = $this->getTableLocator()->get('ZcCabeceraco');
            $years = $cabeceraco_model->find('all', [
                'fields' => ['month' => 'mesfinanciero']
            ])
                ->distinct(['mesfinanciero'])
                ->order(['mesfinanciero ASC'])
                ->where(['objnr IN' => $idrodales])
                ->toArray();

            return $this->json($years);
        }
    }

    public function getMonthsByYears()
    {
        $data = $this->request->getData();


        if(empty($data)){
            return $this->json(false);
        } else {
            //traigo el modelo
            $cabeceraco_model = $this->getTableLocator()->get('ZcCabeceraco');
            $years = $cabeceraco_model->find('all', [
                'fields' => ['month' => 'mesfinanciero']
            ])
                ->distinct(['mesfinanciero'])
                ->order(['mesfinanciero ASC'])
                ->where(['gjahr IN' => $data['years']])
                ->toArray();

            return $this->json($years);
        }
    }

    private $number_page = 10000;

    public function getMetadataForQueryData()
    {
        $cabeceraco_model = $this->getTableLocator()->get('ZcCostosCompleto');

        $data = $this->request->getData();
        $rodales = $data['filter']['rodales'];
        $years = $data['filter']['years'];
        $months = $data['filter']['months'];
        $materiales = $data['filter']['materiales'];



        $conditions = $this->constructQuery($rodales, $years, $months, $materiales);

        $cantidad_data = $cabeceraco_model->find('all',
            [
                'fields' => ['cantidad' => 'count(*)'],
                'conditions' => $conditions
            ]
        )->first();

        //Calculo las paginas utilizando un number page de 5000
        $cantidad = intval($cantidad_data->cantidad);
        $resto_mod = $cantidad % $this->number_page;
        $cantidad_sin_mod = $cantidad - $resto_mod;
        $number_pages = $resto_mod != 0 ? ($cantidad_sin_mod / $this->number_page) + 1 : ($cantidad_sin_mod / $this->number_page);

        $array_res = [
            'cantidad' => $cantidad,
            'pages' => $number_pages
        ];

        return $this->json($array_res);

    }

    public function getResumenCostos()
    {
        $costos_completo_model = $this->getTableLocator()->get('ZcCostosCompleto');

        $data = $this->request->getData();
        $rodales = $data['filter']['rodales'];
        $years = $data['filter']['years'];
        $months = $data['filter']['months'];
        $materiales = $data['filter']['materiales'];


        $conditions = $this->constructQuery($rodales, $years, $months, $materiales);

        $data_costos = $costos_completo_model->find('all',
            [
                'fields' => ['suma_imputado' => 'sum(dmbtr)', 'suma_unidades' => 'sum(mbgbtr)'],
                'conditions' => $conditions
            ]
        )

            ->toArray();

        return $this->json($data_costos);

    }

    public function getResumenCostosByYears()
    {

        $costos_completo_model = $this->getTableLocator()->get('ZcCostosCompleto');

        $data_costos = $costos_completo_model->find('all',
            [
                'fields' => ['year' => 'gjahr', 'costo' => 'sum(dmbtr)']
            ]
        )
            ->group(['gjahr'])
            ->order(['gjahr ASC'])

            ->toArray();

        return $this->json($data_costos);


    }



    /*
     * Este metodo trae los materiales usando la query pasada en las consultas
     */
    public function getMaterialesByQuery()
    {
        $costos_completo_model = $this->getTableLocator()->get('ZcCostosCompleto');

        $data = $this->request->getData();
        $rodales = $data['filter']['rodales'];
        $years = $data['filter']['years'];
        $months = $data['filter']['months'];

        $conditions = $this->constructQuery($rodales, $years, $months);

        $data_costos = $costos_completo_model->find('all',
            [
                'fields' => ['matnr', 'maktx'],
                'conditions' => $conditions
            ]
        )
            ->distinct(['matnr'])
            ->toArray();

        return $this->json($data_costos);


    }



    public function getDataCostosCompleto()
    {
        $costos_completo_model = $this->getTableLocator()->get('ZcCostosCompleto');

        $data = $this->request->getData();
        $rodales = $data['filter']['rodales'];
        $years = $data['filter']['years'];
        $months = $data['filter']['months'];
        $materiales = $data['filter']['materiales'];
        $pagina = $data['filter']['page'];

        //utilizo el -1 para traer todos

        //limite
        $limite_sup = $pagina *  $this->number_page;
        $limite_inferior = $limite_sup - $this->number_page;

        //return $this->json($pagina * $this->number_page);

        $conditions = $this->constructQuery($rodales, $years, $months, $materiales);

        $data_costos = null;

        if($pagina != -1){

            $data_costos = $costos_completo_model->find('all',
                [
                    'conditions' => $conditions
                ]
            )
                ->limit($this->number_page)
                ->offset($limite_inferior)
                ->order(['budat ASC'])
                ->toArray();

        } else {
            $data_costos = $costos_completo_model->find('all',
                [
                    'conditions' => $conditions
                ]
            )
                ->order(['budat ASC'])
                ->toArray();
        }

        //todavia falta arreglar el numero de paginas

        return $this->json($data_costos);

    }


    public function getMateriales()
    {
        //utilizo datos completos para poder filtrar
        $materiales_model = $this->getTableLocator()->get('ZcTxtMateriales');

        $materiales = $materiales_model->find('all', [])
            ->order('maktg ASC')
            ->toArray();


        return $this->json($materiales);


    }





    private function constructQuery($rodales, $years, $months, $materiales = null)
    {
        $options = [];

        if(!empty($rodales)){
            $options['objnr IN'] = $rodales;
        }
        if(!empty($years)){
            $options['gjahr IN'] = $years;
        }
        if(!empty($months)){
            $options['mesfinanciero IN'] = $months;
        }

        if(!empty($materiales)){
            $options['matnr IN'] = $materiales;
        }

        return $options;

    }


    /*
        METODOS DE LA APP FORESTAL
    */

    public function getElaborador()
    {

        //utilizo datos completos para poder filtrar
        $elaborador_model = $this->getTableLocator()->get('ZcForestalElaborador');

        $elaborador = $elaborador_model->find('all', [

            'conditions' => ['idelaborador IS NOT' => null]

        ])
            ->order('txtelaborador ASC')
            ->toArray();


        return $this->json($elaborador);

    }


    public function getChoferes()
    {

        //utilizo datos completos para poder filtrar
        $choferes_model = $this->getTableLocator()->get('ZcForestalChoferes');

        $choferes = $choferes_model->find('all', [

            'conditions' => ['idchofer IS NOT' => null]

        ])
            ->distinct(['idchofer'])
            ->order('txtchofer ASC')
            ->toArray();


        return $this->json($choferes);

    }

    public function getTransportistas()
    {

        //utilizo datos completos para poder filtrar
        $transportistas_model = $this->getTableLocator()->get('ZcForestalTransportistas');

        $transport = $transportistas_model->find('all', [

            'conditions' => ['idtransporte IS NOT' => null]

        ])
            ->distinct(['idtransporte'])
            ->order('txttransporte ASC')
            ->toArray();

        return $this->json($transport);

    }

    public function getCompradores()
    {

        //utilizo datos completos para poder filtrar
        $compradores_model = $this->getTableLocator()->get('ZcForestalComprador');

        $comprador = $compradores_model->find('all', [
        ])
            ->order('comprador ASC')
            ->toArray();


        return $this->json($comprador);

    }

    public function getYearsForestal()
    {

        //utilizo datos completos para poder filtrar
        $year_model = $this->getTableLocator()->get('ZcForestalFechas');

        $years = $year_model->find('all', [

            'fields' => ['year']
        ])
            ->order('year')
            ->distinct(['year'])
            ->toArray();

        asort($years);

        //creo otro arreglo
        $array = [];

        foreach ($years as $y){
            $array[] = $y->year;
        }
        return $this->json($array);

    }

    public function getYearsPresentForestal() {

        //capturo las variables de filtro
        $data = $this->request->getData();
        $rodales =  isset($data['filter']['rodales']) ? $data['filter']['rodales'] : null;
        $materiales = isset($data['filter']['materiales']) ? $data['filter']['materiales'] : null;
        $elaborador = isset($data['filter']['elaborador']) ? $data['filter']['elaborador'] : null;
        $chofer = isset($data['filter']['chofer']) ? $data['filter']['chofer'] : null;
        $transportista = isset($data['filter']['transportista']) ? $data['filter']['transportista'] : null;
        $comprador = isset($data['filter']['comprador']) ? $data['filter']['comprador'] : null;

        $conditions = $this->constructQueryForestal($rodales, $materiales, $elaborador, $chofer, $transportista, $comprador,
        null, null, null);

        //taigoel modelo
        $zc_forestal_completo_model = $this->getTableLocator()->get('ZcForestalCompleto');

        $years_present = $zc_forestal_completo_model->find('all', [
            'conditions' => $conditions,
            'fields' => ['year']
        ])
            ->distinct(['year'])
            ->toArray();
        asort($years_present);
        //creo otro arreglo
        $array = [];

        foreach ($years_present as $y){
            $array[] = $y->year;
        }

        return $this->json($array);

    }

    public function getMaterialesPresentForestal() {

        //capturo las variables de filtro
        $data = $this->request->getData();
        $rodales = isset($data['filter']['rodales']) ? $data['filter']['rodales'] : null;
        $materiales = isset($data['filter']['materiales']) ? $data['filter']['materiales'] : null;
        $elaborador = isset($data['filter']['elaborador']) ? $data['filter']['elaborador'] : null;
        $chofer = isset($data['filter']['chofer']) ? $data['filter']['chofer'] : null;
        $transportista = isset($data['filter']['transportista']) ? $data['filter']['transportista'] : null;
        $comprador = isset($data['filter']['comprador']) ? $data['filter']['comprador'] : null;

        $years = isset($data['filter']['years']) ? $data['filter']['years'] : null;

        $conditions = $this->constructQueryForestal($rodales, $materiales, $elaborador, $chofer, $transportista, $comprador,
            $years, null,null);

        //taigoel modelo
        $zc_forestal_completo_model = $this->getTableLocator()->get('ZcForestalCompleto');

        $mat_present = $zc_forestal_completo_model->find('all', [
            'conditions' => $conditions,
            'fields' => ['material']
        ])
            ->distinct(['material'])
            ->toArray();


        return $this->json($mat_present);

    }

    public function getElaboradorPresentForestal() {

        //capturo las variables de filtro
        $data = $this->request->getData();
        $rodales = isset($data['filter']['rodales']) ? $data['filter']['rodales'] : null;
        $materiales = isset($data['filter']['materiales']) ? $data['filter']['materiales'] : null;
        $elaborador = isset($data['filter']['elaborador']) ? $data['filter']['elaborador'] : null;
        $chofer = isset($data['filter']['chofer']) ? $data['filter']['chofer'] : null;
        $transportista = isset($data['filter']['transportista']) ? $data['filter']['transportista'] : null;
        $comprador = isset($data['filter']['comprador']) ? $data['filter']['comprador'] : null;

        $years = isset($data['filter']['years']) ? $data['filter']['years'] : null;

        $conditions = $this->constructQueryForestal($rodales, $materiales, $elaborador, $chofer, $transportista, $comprador,
        $years, null, null);

        //taigoel modelo
        $zc_forestal_completo_model = $this->getTableLocator()->get('ZcForestalCompleto');

        $el_present = $zc_forestal_completo_model->find('all', [
            'conditions' => $conditions,
            'fields' => ['idelaborador']
        ])
            ->distinct(['idelaborador'])
            ->toArray();


        return $this->json($el_present);

    }


    public function getChoferesPresentForestal() {

        //capturo las variables de filtro
        $data = $this->request->getData();
        $rodales = isset($data['filter']['rodales']) ? $data['filter']['rodales'] : null;
        $materiales = isset($data['filter']['materiales']) ? $data['filter']['materiales'] : null;
        $elaborador = isset($data['filter']['elaborador']) ? $data['filter']['elaborador'] : null;
        $chofer = isset($data['filter']['chofer']) ? $data['filter']['chofer'] : null;
        $transportista = isset($data['filter']['transportista']) ? $data['filter']['transportista'] : null;
        $comprador = isset($data['filter']['comprador']) ? $data['filter']['comprador'] : null;

        $years = isset($data['filter']['years']) ? $data['filter']['years'] : null;

        $conditions = $this->constructQueryForestal($rodales, $materiales, $elaborador, $chofer, $transportista, $comprador,
        $years, null, null);

        //taigoel modelo
        $zc_forestal_completo_model = $this->getTableLocator()->get('ZcForestalCompleto');

        $chof_present = $zc_forestal_completo_model->find('all', [
            'conditions' => $conditions,
            'fields' => ['idchofer']
        ])
            ->distinct(['idchofer'])
            ->toArray();


        return $this->json($chof_present);

    }

    public function getTransportistasPresentForestal() {

        //capturo las variables de filtro
        $data = $this->request->getData();
        $rodales = isset($data['filter']['rodales']) ? $data['filter']['rodales'] : null;
        $materiales = isset($data['filter']['materiales']) ? $data['filter']['materiales'] : null;
        $elaborador = isset($data['filter']['elaborador']) ? $data['filter']['elaborador'] : null;
        $chofer = isset($data['filter']['chofer']) ? $data['filter']['chofer'] : null;
        $transportista = isset($data['filter']['transportista']) ? $data['filter']['transportista'] : null;
        $comprador = isset($data['filter']['comprador']) ? $data['filter']['comprador'] : null;

        $years = isset($data['filter']['years']) ? $data['filter']['years'] : null;

        $conditions = $this->constructQueryForestal($rodales, $materiales, $elaborador, $chofer, $transportista, $comprador,
        $years, null, null);

        //taigoel modelo
        $zc_forestal_completo_model = $this->getTableLocator()->get('ZcForestalCompleto');

        $trans_present = $zc_forestal_completo_model->find('all', [
            'conditions' => $conditions,
            'fields' => ['idtransporte']
        ])
            ->distinct(['idtransporte'])
            ->toArray();


        return $this->json($trans_present);

    }

    public function getCompradorPresentForestal() {

        //capturo las variables de filtro
        $data = $this->request->getData();
        $rodales = isset($data['filter']['rodales']) ? $data['filter']['rodales'] : null;
        $materiales = isset($data['filter']['materiales']) ? $data['filter']['materiales'] : null;
        $elaborador = isset($data['filter']['elaborador']) ? $data['filter']['elaborador'] : null;
        $chofer = isset($data['filter']['chofer']) ? $data['filter']['chofer'] : null;
        $transportista = isset($data['filter']['transportista']) ? $data['filter']['transportista'] : null;
        $comprador = isset($data['filter']['comprador']) ? $data['filter']['comprador'] : null;

        $years = isset($data['filter']['years']) ? $data['filter']['years'] : null;

        $conditions = $this->constructQueryForestal($rodales, $materiales, $elaborador, $chofer, $transportista, $comprador,
        $years, null, null);

        //taigoel modelo
        $zc_forestal_completo_model = $this->getTableLocator()->get('ZcForestalCompleto');

        $trans_present = $zc_forestal_completo_model->find('all', [
            'conditions' => $conditions,
            'fields' => ['comprador']
        ])
            ->distinct(['comprador'])
            ->toArray();


        return $this->json($trans_present);

    }

    public function getMonthsPresentForestal() {

        //capturo las variables de filtro
        $data = $this->request->getData();
        $rodales = isset($data['filter']['rodales']) ? $data['filter']['rodales'] : null;
        $materiales = isset($data['filter']['materiales']) ? $data['filter']['materiales'] : null;
        $elaborador = isset($data['filter']['elaborador']) ? $data['filter']['elaborador'] : null;
        $chofer = isset($data['filter']['chofer']) ? $data['filter']['chofer'] : null;
        $transportista = isset($data['filter']['transportista']) ? $data['filter']['transportista'] : null;
        $comprador = isset($data['filter']['comprador']) ? $data['filter']['comprador'] : null;

        $years = isset($data['filter']['years']) ? $data['filter']['years'] : null;

        $conditions = $this->constructQueryForestal($rodales, $materiales, $elaborador, $chofer, $transportista, $comprador,
            $years, null, null);

        //taigoel modelo
        $zc_forestal_completo_model = $this->getTableLocator()->get('ZcForestalCompleto');

        $month_present = $zc_forestal_completo_model->find('all', [
            'conditions' => $conditions,
            'fields' => ['month']
        ])
            ->distinct(['month'])
            ->toArray();


        return $this->json($month_present);

    }

    public function getDaysPresentForestal() {

        //capturo las variables de filtro
        $data = $this->request->getData();
        $rodales = isset($data['filter']['rodales']) ? $data['filter']['rodales'] : null;
        $materiales = isset($data['filter']['materiales']) ? $data['filter']['materiales'] : null;
        $elaborador = isset($data['filter']['elaborador']) ? $data['filter']['elaborador'] : null;
        $chofer = isset($data['filter']['chofer']) ? $data['filter']['chofer'] : null;
        $transportista = isset($data['filter']['transportista']) ? $data['filter']['transportista'] : null;
        $comprador = isset($data['filter']['comprador']) ? $data['filter']['comprador'] : null;

        $years = isset($data['filter']['years']) ? $data['filter']['years'] : null;
        $months = isset($data['filter']['months']) ? $data['filter']['months'] : null;

        $conditions = $this->constructQueryForestal($rodales, $materiales, $elaborador, $chofer, $transportista, $comprador,
            $years, $months, null);

        //taigoel modelo
        $zc_forestal_completo_model = $this->getTableLocator()->get('ZcForestalCompleto');

        $day_present = $zc_forestal_completo_model->find('all', [
            'conditions' => $conditions,
            'fields' => ['day']
        ])
            ->distinct(['day'])
            ->toArray();


        return $this->json($day_present);

    }
    private function constructQueryForestal($rodales, $materiales, $elaborador, $chofer, $transportista, $comprador, $years, $months, $days)
    {
        $options = [];

        if(!empty($rodales)){
            $options['rodal IN'] = $rodales;
        }
        if(!empty($materiales)){
            $options['material IN'] = $materiales;
        }
        if(!empty($elaborador)){
            $options['idelaborador IN'] = $elaborador;
        }

        if(!empty($chofer)){
            $options['idchofer IN'] = $chofer;
        }

        if(!empty($transportista)){
            $options['idtransporte IN'] = $transportista;
        }

        if(!empty($comprador)){
            $options['comprador IN'] = $comprador;
        }

        if(!empty($years)){
            $options['year IN'] = $years;
        }

        if(!empty($months)){
            $options['month IN'] = $months;
        }

        if(!empty($days)){
            $options['day IN'] = $days;
        }

        return $options;

    }

}