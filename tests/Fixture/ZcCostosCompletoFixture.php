<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcCostosCompletoFixture
 */
class ZcCostosCompletoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'zc_costos_completo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'mesfinanciero' => 'Lorem ipsum dolor sit amet',
                'awtyp' => 'Lorem ipsum dolor sit amet',
                'wtgbtr' => 1.5,
                'pagbtr' => 1.5,
                'mbgbtr' => 1.5,
                'objnr' => 'Lorem ipsum dolor sit amet',
                'wrttp' => 'Lorem ipsum dolor sit amet',
                'kstar' => 'Lorem ipsum dolor sit amet',
                'hrkft' => 'Lorem ipsum dolor sit amet',
                'idempresa' => 'Lorem ipsum dolor sit amet',
                'belnr' => 'Lorem ipsum dolor sit amet',
                'gjahr' => 'Lorem ipsum dolor sit amet',
                'bltxt' => 'Lorem ipsum dolor sit amet',
                'budat' => 'Lorem ipsum dolor sit amet',
                'refbk' => 'Lorem ipsum dolor sit amet',
                'refbn' => 'Lorem ipsum dolor sit amet',
                'refgj' => 'Lorem ipsum dolor sit amet',
                'iddetalle' => 'Lorem ipsum dolor sit amet',
                'menge' => 1.5,
                'dmbtr' => 1.5,
                'bwart' => 'Lorem ipsum dolor sit amet',
                'sgtxt' => 'Lorem ipsum dolor sit amet',
                'ebeln' => 'Lorem ipsum dolor sit amet',
                'ebelp' => 'Lorem ipsum dolor sit amet',
                'rodal' => 'Lorem ipsum dolor sit amet',
                'txtrodal' => 'Lorem ipsum dolor sit amet',
                'gruporodal' => 'Lorem ipsum dolor sit amet',
                'emp_name' => 'Lorem ipsum dolor sit amet',
                'mandt' => 'Lorem ipsum dolor sit amet',
                'matnr' => 'Lorem ipsum dolor sit amet',
                'spras' => 'Lorem ipsum dolor sit amet',
                'maktx' => 'Lorem ipsum dolor sit amet',
                'maktg' => 'Lorem ipsum dolor sit amet',
                'cuentacontable' => 'Lorem ipsum dolor sit amet',
                'lifnr' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
