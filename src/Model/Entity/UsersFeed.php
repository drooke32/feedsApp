<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsersFeed Entity.
 */
class UsersFeed extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user' => true,
        'feed' => true,
    ];
}
