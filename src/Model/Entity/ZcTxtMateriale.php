<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ZcTxtMateriale Entity
 *
 * @property string|null $mandt
 * @property string|null $matnr
 * @property string|null $spras
 * @property string|null $maktx
 * @property string|null $maktg
 */
class ZcTxtMateriale extends Entity
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
        'mandt' => true,
        'matnr' => true,
        'spras' => true,
        'maktx' => true,
        'maktg' => true,
    ];
}
