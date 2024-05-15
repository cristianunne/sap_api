<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcEmpresaRodalFixture
 */
class ZcEmpresaRodalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'zc_empresa_rodal';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'objnr' => 'Lorem ipsum dolor sit amet',
                'idempresa' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
