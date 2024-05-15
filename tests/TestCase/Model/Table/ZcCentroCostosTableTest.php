<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcCentroCostosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcCentroCostosTable Test Case
 */
class ZcCentroCostosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcCentroCostosTable
     */
    protected $ZcCentroCostos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcCentroCostos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcCentroCostos') ? [] : ['className' => ZcCentroCostosTable::class];
        $this->ZcCentroCostos = $this->getTableLocator()->get('ZcCentroCostos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcCentroCostos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcCentroCostosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
