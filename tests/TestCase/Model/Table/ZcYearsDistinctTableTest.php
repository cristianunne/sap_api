<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcYearsDistinctTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcYearsDistinctTable Test Case
 */
class ZcYearsDistinctTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcYearsDistinctTable
     */
    protected $ZcYearsDistinct;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcYearsDistinct',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcYearsDistinct') ? [] : ['className' => ZcYearsDistinctTable::class];
        $this->ZcYearsDistinct = $this->getTableLocator()->get('ZcYearsDistinct', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcYearsDistinct);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcYearsDistinctTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
