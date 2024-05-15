<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcTxtMaterialesFixture
 */
class ZcTxtMaterialesFixture extends TestFixture
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
                'mandt' => 'Lorem ipsum dolor sit amet',
                'matnr' => 'Lorem ipsum dolor sit amet',
                'spras' => 'Lorem ipsum dolor sit amet',
                'maktx' => 'Lorem ipsum dolor sit amet',
                'maktg' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
