<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcCuentaContableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcCuentaContableTable Test Case
 */
class ZcCuentaContableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcCuentaContableTable
     */
    protected $ZcCuentaContable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcCuentaContable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcCuentaContable') ? [] : ['className' => ZcCuentaContableTable::class];
        $this->ZcCuentaContable = $this->getTableLocator()->get('ZcCuentaContable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcCuentaContable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcCuentaContableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
