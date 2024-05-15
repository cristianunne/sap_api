<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ZcRodalesWithEmpresa Entity
 *
 * @property string|null $rodal
 * @property string|null $txtrodal
 * @property string|null $objnr
 * @property string|null $gruporodal
 * @property string|null $idempresa
 * @property string|null $nombre
 */
class ZcRodalesWithEmpresa extends Entity
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
        'rodal' => true,
        'txtrodal' => true,
        'objnr' => true,
        'gruporodal' => true,
        'idempresa' => true,
        'nombre' => true,
    ];
}
