<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetailsInvoicesFixture
 *
 */
class DetailsInvoicesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'date_start' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'date_end' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'users_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'invoices_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rentings_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'users_id' => ['type' => 'index', 'columns' => ['users_id'], 'length' => []],
            'factures_id' => ['type' => 'index', 'columns' => ['invoices_id'], 'length' => []],
            'rentings_id' => ['type' => 'index', 'columns' => ['rentings_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'details_invoices_ibfk_1' => ['type' => 'foreign', 'columns' => ['users_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'details_invoices_ibfk_3' => ['type' => 'foreign', 'columns' => ['invoices_id'], 'references' => ['invoices', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'details_invoices_ibfk_4' => ['type' => 'foreign', 'columns' => ['rentings_id'], 'references' => ['rentings', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'date_start' => '2017-06-01 20:21:10',
            'date_end' => '2017-06-01 20:21:10',
            'users_id' => 1,
            'invoices_id' => 1,
            'rentings_id' => 1
        ],
    ];
}
