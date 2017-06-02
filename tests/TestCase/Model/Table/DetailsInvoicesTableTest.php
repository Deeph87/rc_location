<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetailsInvoicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetailsInvoicesTable Test Case
 */
class DetailsInvoicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DetailsInvoicesTable
     */
    public $DetailsInvoices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.details_invoices',
        'app.users',
        'app.invoices',
        'app.rentings',
        'app.products',
        'app.categories',
        'app.images'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DetailsInvoices') ? [] : ['className' => 'App\Model\Table\DetailsInvoicesTable'];
        $this->DetailsInvoices = TableRegistry::get('DetailsInvoices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DetailsInvoices);

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
