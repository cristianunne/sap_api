<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ZcDetallecaja Entity
 *
 * @property string|null $iddetalle
 * @property string|null $p_payments
 * @property string|null $position_text
 */
class ZcDetallecaja extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'iddetalle' => true,
        'p_payments' => true,
        'position_text' => true,
    ];
}
