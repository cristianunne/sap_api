<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcYearsDistinctFixture
 */
class ZcYearsDistinctFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'zc_years_distinct';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'years' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
