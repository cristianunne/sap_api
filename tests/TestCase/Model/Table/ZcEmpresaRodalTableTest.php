<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcEmpresaRodalTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcEmpresaRodalTable Test Case
 */
class ZcEmpresaRodalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcEmpresaRodalTable
     */
    protected $ZcEmpresaRodal;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcEmpresaRodal',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcEmpresaRodal') ? [] : ['className' => ZcEmpresaRodalTable::class];
        $this->ZcEmpresaRodal = $this->getTableLocator()->get('ZcEmpresaRodal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcEmpresaRodal);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcEmpresaRodalTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
