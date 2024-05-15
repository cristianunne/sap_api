<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcCuentaContableFixture
 */
class ZcCuentaContableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'zc_cuenta_contable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'kstar' => 'Lorem ipsum dolor sit amet',
                'cuentacontable' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
