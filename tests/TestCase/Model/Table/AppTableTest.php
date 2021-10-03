<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppTable Test Case
 */
class AppTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AppTable
     */
    protected $App;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.App',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('App') ? [] : ['className' => AppTable::class];
        $this->App = $this->getTableLocator()->get('App', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->App);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AppTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AppTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
