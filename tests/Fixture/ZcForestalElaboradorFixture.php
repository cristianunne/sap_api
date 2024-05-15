<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcForestalElaboradorFixture
 */
class ZcForestalElaboradorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'zc_forestal_elaborador';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idelaborador' => 'Lorem ipsum dolor sit amet',
                'txtelaborador' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
