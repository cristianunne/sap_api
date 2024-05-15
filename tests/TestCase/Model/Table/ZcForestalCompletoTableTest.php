<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcForestalCompletoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcForestalCompletoTable Test Case
 */
class ZcForestalCompletoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcForestalCompletoTable
     */
    protected $ZcForestalCompleto;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcForestalCompleto',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcForestalCompleto') ? [] : ['className' => ZcForestalCompletoTable::class];
        $this->ZcForestalCompleto = $this->getTableLocator()->get('ZcForestalCompleto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcForestalCompleto);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcForestalCompletoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
