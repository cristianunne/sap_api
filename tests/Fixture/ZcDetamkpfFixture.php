<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcDetamkpfFixture
 */
class ZcDetamkpfFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'zc_detamkpf';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'iddetalle' => 'Lorem ipsum dolor sit amet',
                'matnr' => 'Lorem ipsum dolor sit amet',
                'menge' => 1.5,
                'dmbtr' => 1.5,
                'bwart' => 'Lorem ipsum dolor sit amet',
                'sgtxt' => 'Lorem ipsum dolor sit amet',
                'lifnr' => 'Lorem ipsum dolor sit amet',
                'ebeln' => 'Lorem ipsum dolor sit amet',
                'ebelp' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
