<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcForestalTransportistasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcForestalTransportistasTable Test Case
 */
class ZcForestalTransportistasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcForestalTransportistasTable
     */
    protected $ZcForestalTransportistas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcForestalTransportistas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcForestalTransportistas') ? [] : ['className' => ZcForestalTransportistasTable::class];
        $this->ZcForestalTransportistas = $this->getTableLocator()->get('ZcForestalTransportistas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcForestalTransportistas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcForestalTransportistasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
