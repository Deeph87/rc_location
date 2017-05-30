<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $mail
 * @property string $city
 * @property int $zip_code
 * @property string $address
 * @property string $address_add
 * @property string $phone
 * @property string $password
 * @property int $role
 */
class User extends Entity
{

    const ADMIN = 1;
    const USER = 0;

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
