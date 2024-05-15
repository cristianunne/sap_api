<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcRodalesWithEmpresasFixture
 */
class ZcRodalesWithEmpresasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'rodal' => 'Lorem ipsum dolor sit amet',
                'txtrodal' => 'Lorem ipsum dolor sit amet',
                'objnr' => 'Lorem ipsum dolor sit amet',
                'gruporodal' => 'Lorem ipsum dolor sit amet',
                'idempresa' => 'Lorem ipsum dolor sit amet',
                'nombre' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
