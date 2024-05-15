<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcForestalCompradorFixture
 */
class ZcForestalCompradorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'zc_forestal_comprador';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'comprador' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
