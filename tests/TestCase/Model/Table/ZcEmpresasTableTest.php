<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcEmpresasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcEmpresasTable Test Case
 */
class ZcEmpresasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcEmpresasTable
     */
    protected $ZcEmpresas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcEmpresas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcEmpresas') ? [] : ['className' => ZcEmpresasTable::class];
        $this->ZcEmpresas = $this->getTableLocator()->get('ZcEmpresas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcEmpresas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcEmpresasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
