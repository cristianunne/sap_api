<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcCentroCostosFixture
 */
class ZcCentroCostosFixture extends TestFixture
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
                'centrocosto' => 'Lorem ipsum dolor sit amet',
                'txt_centrocosto' => 'Lorem ipsum dolor sit amet',
                'objnr' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
