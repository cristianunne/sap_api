<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcProveedoresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcProveedoresTable Test Case
 */
class ZcProveedoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcProveedoresTable
     */
    protected $ZcProveedores;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcProveedores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcProveedores') ? [] : ['className' => ZcProveedoresTable::class];
        $this->ZcProveedores = $this->getTableLocator()->get('ZcProveedores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcProveedores);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcProveedoresTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
