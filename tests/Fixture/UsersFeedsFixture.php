<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFeedsFixture
 *
 */
class UsersFeedsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'feed_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'feed_key' => ['type' => 'index', 'columns' => ['feed_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['user_id', 'feed_id'], 'length' => []],
            'users_feeds_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_id', 'user_id'], 'references' => ['users', '1' => ['id', 'id']], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'users_feeds_ibfk_2' => ['type' => 'foreign', 'columns' => ['feed_id', 'feed_id'], 'references' => ['feeds', '1' => ['id', 'id']], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
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
            'user_id' => 1,
            'feed_id' => 1
        ],
    ];
}
