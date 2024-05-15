<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcDetallecajaFixture
 */
class ZcDetallecajaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'zc_detallecaja';
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
                'p_payments' => 1.5,
                'position_text' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
