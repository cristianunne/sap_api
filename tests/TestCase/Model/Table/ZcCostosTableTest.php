<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcCostosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcCostosTable Test Case
 */
class ZcCostosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcCostosTable
     */
    protected $ZcCostos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcCostos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcCostos') ? [] : ['className' => ZcCostosTable::class];
        $this->ZcCostos = $this->getTableLocator()->get('ZcCostos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcCostos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcCostosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
