<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Renting Entity
 *
 * @property int $id
 * @property int $products_id
 * @property \Cake\I18n\FrozenTime $date_freeze_start
 * @property int $date_freeze_end
 * @property string $reference
 * @property int $status
 *
 * @property \App\Model\Entity\Product $product
 */
class Renting extends Entity
{

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
}
