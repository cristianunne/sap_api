<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ZcCosto Entity
 *
 * @property string|null $mesfinanciero
 * @property string|null $awtyp
 * @property string|null $wtgbtr
 * @property string|null $pagbtr
 * @property string|null $mbgbtr
 * @property string|null $objnr
 * @property string|null $wrttp
 * @property string|null $kstar
 * @property string|null $hrkft
 * @property string|null $idempresa
 * @property string|null $belnr
 * @property string|null $gjahr
 * @property string|null $bltxt
 * @property string|null $budat
 * @property string|null $refbk
 * @property string|null $refbn
 * @property string|null $refgj
 * @property string|null $iddetalle
 * @property string|null $menge
 * @property string|null $dmbtr
 * @property string|null $bwart
 * @property string|null $sgtxt
 * @property string|null $lifnr
 * @property string|null $ebeln
 * @property string|null $ebelp
 * @property string|null $txtrodal
 * @property string|null $gruporodal
 * @property string|null $nombre
 * @property string|null $mandt
 * @property string|null $matnr
 * @property string|null $spras
 * @property string|null $maktx
 * @property string|null $maktg
 * @property string|null $cuentacontable
 */
class ZcCosto extends Entity
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
        'mesfinanciero' => true,
        'awtyp' => true,
        'wtgbtr' => true,
        'pagbtr' => true,
        'mbgbtr' => true,
        'objnr' => true,
        'wrttp' => true,
        'kstar' => true,
        'hrkft' => true,
        'idempresa' => true,
        'belnr' => true,
        'gjahr' => true,
        'bltxt' => true,
        'budat' => true,
        'refbk' => true,
        'refbn' => true,
        'refgj' => true,
        'iddetalle' => true,
        'menge' => true,
        'dmbtr' => true,
        'bwart' => true,
        'sgtxt' => true,
        'lifnr' => true,
        'ebeln' => true,
        'ebelp' => true,
        'txtrodal' => true,
        'gruporodal' => true,
        'nombre' => true,
        'mandt' => true,
        'matnr' => true,
        'spras' => true,
        'maktx' => true,
        'maktg' => true,
        'cuentacontable' => true,
    ];
}
