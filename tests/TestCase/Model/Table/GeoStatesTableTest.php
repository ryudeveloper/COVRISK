<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoStatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoStatesTable Test Case
 */
class GeoStatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoStatesTable
     */
    protected $GeoStates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.GeoStates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('GeoStates') ? [] : ['className' => GeoStatesTable::class];
        $this->GeoStates = $this->getTableLocator()->get('GeoStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->GeoStates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GeoStatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
