<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ZcDetamkpf Entity
 *
 * @property string|null $iddetalle
 * @property string|null $matnr
 * @property string|null $menge
 * @property string|null $dmbtr
 * @property string|null $bwart
 * @property string|null $sgtxt
 * @property string|null $lifnr
 * @property string|null $ebeln
 * @property string|null $ebelp
 */
class ZcDetamkpf extends Entity
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
        'matnr' => true,
        'menge' => true,
        'dmbtr' => true,
        'bwart' => true,
        'sgtxt' => true,
        'lifnr' => true,
        'ebeln' => true,
        'ebelp' => true,
    ];
}
