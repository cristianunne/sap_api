<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcCabeceracoFixture
 */
class ZcCabeceracoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'zc_cabeceraco';
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
            ],
        ];
        parent::init();
    }
}
