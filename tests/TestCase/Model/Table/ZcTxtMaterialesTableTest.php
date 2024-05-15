<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcTxtMaterialesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcTxtMaterialesTable Test Case
 */
class ZcTxtMaterialesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcTxtMaterialesTable
     */
    protected $ZcTxtMateriales;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcTxtMateriales',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcTxtMateriales') ? [] : ['className' => ZcTxtMaterialesTable::class];
        $this->ZcTxtMateriales = $this->getTableLocator()->get('ZcTxtMateriales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcTxtMateriales);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcTxtMaterialesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
