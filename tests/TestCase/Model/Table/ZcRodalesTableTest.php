<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcRodalesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcRodalesTable Test Case
 */
class ZcRodalesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcRodalesTable
     */
    protected $ZcRodales;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcRodales',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcRodales') ? [] : ['className' => ZcRodalesTable::class];
        $this->ZcRodales = $this->getTableLocator()->get('ZcRodales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcRodales);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcRodalesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
