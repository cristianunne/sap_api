<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcForestalChoferesFixture
 */
class ZcForestalChoferesFixture extends TestFixture
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
                'idchofer' => 'Lorem ipsum dolor sit amet',
                'txtchofer' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
