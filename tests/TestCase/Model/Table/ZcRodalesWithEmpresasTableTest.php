<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcRodalesWithEmpresasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcRodalesWithEmpresasTable Test Case
 */
class ZcRodalesWithEmpresasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcRodalesWithEmpresasTable
     */
    protected $ZcRodalesWithEmpresas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcRodalesWithEmpresas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcRodalesWithEmpresas') ? [] : ['className' => ZcRodalesWithEmpresasTable::class];
        $this->ZcRodalesWithEmpresas = $this->getTableLocator()->get('ZcRodalesWithEmpresas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcRodalesWithEmpresas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcRodalesWithEmpresasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
