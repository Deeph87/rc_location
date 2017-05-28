<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RentingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RentingsTable Test Case
 */
class RentingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RentingsTable
     */
    public $Rentings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rentings',
        'app.products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Rentings') ? [] : ['className' => 'App\Model\Table\RentingsTable'];
        $this->Rentings = TableRegistry::get('Rentings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Rentings);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
