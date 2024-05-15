<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcDetallecajaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcDetallecajaTable Test Case
 */
class ZcDetallecajaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcDetallecajaTable
     */
    protected $ZcDetallecaja;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcDetallecaja',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcDetallecaja') ? [] : ['className' => ZcDetallecajaTable::class];
        $this->ZcDetallecaja = $this->getTableLocator()->get('ZcDetallecaja', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcDetallecaja);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcDetallecajaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
