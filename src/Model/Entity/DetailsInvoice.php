<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DetailsInvoice Entity
 *
 * @property int $id
 * @property int $day_range
 * @property \Cake\I18n\FrozenDate $date_start
 * @property \Cake\I18n\FrozenDate $date_end
 * @property float $price
 * @property int $users_id
 * @property int $invoices_id
 * @property int $rentings_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Invoice $invoice
 * @property \App\Model\Entity\Renting $renting
 */
class DetailsInvoice extends Entity
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
