<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcCabeceracoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcCabeceracoTable Test Case
 */
class ZcCabeceracoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcCabeceracoTable
     */
    protected $ZcCabeceraco;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcCabeceraco',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcCabeceraco') ? [] : ['className' => ZcCabeceracoTable::class];
        $this->ZcCabeceraco = $this->getTableLocator()->get('ZcCabeceraco', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcCabeceraco);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcCabeceracoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
