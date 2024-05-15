<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcForestalElaboradorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcForestalElaboradorTable Test Case
 */
class ZcForestalElaboradorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcForestalElaboradorTable
     */
    protected $ZcForestalElaborador;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcForestalElaborador',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcForestalElaborador') ? [] : ['className' => ZcForestalElaboradorTable::class];
        $this->ZcForestalElaborador = $this->getTableLocator()->get('ZcForestalElaborador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcForestalElaborador);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcForestalElaboradorTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
