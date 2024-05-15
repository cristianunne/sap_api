<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcForestalCompradorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcForestalCompradorTable Test Case
 */
class ZcForestalCompradorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcForestalCompradorTable
     */
    protected $ZcForestalComprador;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcForestalComprador',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcForestalComprador') ? [] : ['className' => ZcForestalCompradorTable::class];
        $this->ZcForestalComprador = $this->getTableLocator()->get('ZcForestalComprador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcForestalComprador);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcForestalCompradorTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
