<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcCostosCompletoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcCostosCompletoTable Test Case
 */
class ZcCostosCompletoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcCostosCompletoTable
     */
    protected $ZcCostosCompleto;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcCostosCompleto',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcCostosCompleto') ? [] : ['className' => ZcCostosCompletoTable::class];
        $this->ZcCostosCompleto = $this->getTableLocator()->get('ZcCostosCompleto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcCostosCompleto);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcCostosCompletoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
