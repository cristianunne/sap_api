<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcForestalCompletoFixture
 */
class ZcForestalCompletoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'prd.zc_forestal_completo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'mandt' => 'Lorem ipsum dolor sit amet',
                'pedido' => 'Lorem ipsum dolor sit amet',
                'remito' => 'Lorem ipsum dolor sit amet',
                'posicion' => 'Lorem ipsum dolor sit amet',
                'material' => 'Lorem ipsum dolor sit amet',
                'lote' => 'Lorem ipsum dolor sit amet',
                'cantidad' => 1,
                'rodfecha' => 'Lorem ipsum dolor sit amet',
                'rodal' => 'Lorem ipsum dolor sit amet',
                'numnotificacion' => 'Lorem ipsum dolor sit amet',
                'numentrega' => 'Lorem ipsum dolor sit amet',
                'idtransporte' => 1,
                'txttransporte' => 'Lorem ipsum dolor sit amet',
                'idchofer' => 'Lorem ipsum dolor sit amet',
                'txtchofer' => 'Lorem ipsum dolor sit amet',
                'chapa1' => 'Lorem ipsum dolor sit amet',
                'chapa2' => 'Lorem ipsum dolor sit amet',
                'numingreso' => 'Lorem ipsum dolor sit amet',
                'almacen' => 'Lorem ipsum dolor sit amet',
                'pospedido' => 'Lorem ipsum dolor sit amet',
                'posentrega' => 'Lorem ipsum dolor sit amet',
                'ubicacion' => 'Lorem ipsum dolor sit amet',
                'idelaborador' => 'Lorem ipsum dolor sit amet',
                'txtelaborador' => 'Lorem ipsum dolor sit amet',
                'cerrado' => 'Lorem ipsum dolor sit amet',
                'docanulado' => 'Lorem ipsum dolor sit amet',
                'costoelab' => 1.5,
                'costotrans' => 1.5,
                'fechaliqelab' => 'Lorem ipsum dolor sit amet',
                'fechaliqtran' => 'Lorem ipsum dolor sit amet',
                'distanciatrans' => 1,
                'ordencompelab' => 'Lorem ipsum dolor sit amet',
                'ordencomtrans' => 'Lorem ipsum dolor sit amet',
                'aclasificadora' => 'Lorem ipsum dolor sit amet',
                'fechaingreso' => 'Lorem ipsum dolor sit amet',
                'qrfecha' => 'Lorem ipsum dolor sit amet',
                'qrpuesto' => 'Lorem ipsum dolor sit amet',
                'year' => 'Lo',
                'month' => 'Lo',
                'day' => 'Lo',
                'id' => 'Lorem ipsum dolor sit amet',
                'entrega' => 'Lorem ipsum dolor sit amet',
                'comprador' => 'Lorem ipsum dolor sit amet',
                'vendedor' => 'Lorem ipsum dolor sit amet',
                'activo' => 'Lorem ipsum dolor sit amet',
                'fecha_intemp' => 'Lorem ipsum dolor sit amet',
                'grupo' => 'Lorem ipsum dolor sit amet',
                'bprodal' => 'Lorem ipsum dolor sit amet',
                'circuito' => 'Lorem ipsum dolor sit amet',
                'idpuesto' => 1,
                'fechaven' => 'Lorem ipsum dolor sit amet',
                'objnr' => 'Lorem ipsum dolor sit amet',
                'idempresa' => 'Lorem ipsum dolor sit amet',
                'txtmaterial' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
