<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcForestalTransportistasFixture
 */
class ZcForestalTransportistasFixture extends TestFixture
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
                'idtransporte' => 1,
                'txttransporte' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
