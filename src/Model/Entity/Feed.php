<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Feed Entity.
 */
class Feed extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'sitename' => true,
        'url' => true,
        'users_favourites' => true,
        'users' => true,
    ];
}
