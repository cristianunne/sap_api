<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZcDetamkpfTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZcDetamkpfTable Test Case
 */
class ZcDetamkpfTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZcDetamkpfTable
     */
    protected $ZcDetamkpf;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZcDetamkpf',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZcDetamkpf') ? [] : ['className' => ZcDetamkpfTable::class];
        $this->ZcDetamkpf = $this->getTableLocator()->get('ZcDetamkpf', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZcDetamkpf);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZcDetamkpfTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
