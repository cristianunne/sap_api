<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcForestalChoferesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcForestalChoferesTable Test Case
 */
class ZcForestalChoferesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcForestalChoferesTable
     */
    protected $ZcForestalChoferes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcForestalChoferes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcForestalChoferes') ? [] : ['className' => ZcForestalChoferesTable::class];
        $this->ZcForestalChoferes = $this->getTableLocator()->get('ZcForestalChoferes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcForestalChoferes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcForestalChoferesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
