<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcRodalesFixture
 */
class ZcRodalesFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'prd.zc_rodales';
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
                'empresa' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
