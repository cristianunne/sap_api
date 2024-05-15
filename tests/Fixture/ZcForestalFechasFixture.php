<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZcForestalFechasFixture
 */
class ZcForestalFechasFixture extends TestFixture
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
                'year' => 'Lo',
                'month' => 'Lo',
                'day' => 'Lo',
            ],
        ];
        parent::init();
    }
}
