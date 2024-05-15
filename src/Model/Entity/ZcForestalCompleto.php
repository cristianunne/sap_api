<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ZcForestalCompleto Entity
 *
 * @property string|null $mandt
 * @property string|null $pedido
 * @property string|null $remito
 * @property string|null $posicion
 * @property string|null $material
 * @property string|null $lote
 * @property float|null $cantidad
 * @property string|null $rodfecha
 * @property string|null $rodal
 * @property string|null $numnotificacion
 * @property string|null $numentrega
 * @property int|null $idtransporte
 * @property string|null $txttransporte
 * @property string|null $idchofer
 * @property string|null $txtchofer
 * @property string|null $chapa1
 * @property string|null $chapa2
 * @property string|null $numingreso
 * @property string|null $almacen
 * @property string|null $pospedido
 * @property string|null $posentrega
 * @property string|null $ubicacion
 * @property string|null $idelaborador
 * @property string|null $txtelaborador
 * @property string|null $cerrado
 * @property string|null $docanulado
 * @property string|null $costoelab
 * @property string|null $costotrans
 * @property string|null $fechaliqelab
 * @property string|null $fechaliqtran
 * @property int|null $distanciatrans
 * @property string|null $ordencompelab
 * @property string|null $ordencomtrans
 * @property string|null $aclasificadora
 * @property string|null $fechaingreso
 * @property string|null $qrfecha
 * @property string|null $qrpuesto
 * @property string|null $year
 * @property string|null $month
 * @property string|null $day
 * @property string|null $id
 * @property string|null $entrega
 * @property string|null $comprador
 * @property string|null $vendedor
 * @property string|null $activo
 * @property string|null $fecha_intemp
 * @property string|null $grupo
 * @property string|null $bprodal
 * @property string|null $circuito
 * @property int|null $idpuesto
 * @property string|null $fechaven
 * @property string|null $objnr
 * @property string|null $idempresa
 * @property string|null $txtmaterial
 */
class ZcForestalCompleto extends Entity
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
        'pedido' => true,
        'remito' => true,
        'posicion' => true,
        'material' => true,
        'lote' => true,
        'cantidad' => true,
        'rodfecha' => true,
        'rodal' => true,
        'numnotificacion' => true,
        'numentrega' => true,
        'idtransporte' => true,
        'txttransporte' => true,
        'idchofer' => true,
        'txtchofer' => true,
        'chapa1' => true,
        'chapa2' => true,
        'numingreso' => true,
        'almacen' => true,
        'pospedido' => true,
        'posentrega' => true,
        'ubicacion' => true,
        'idelaborador' => true,
        'txtelaborador' => true,
        'cerrado' => true,
        'docanulado' => true,
        'costoelab' => true,
        'costotrans' => true,
        'fechaliqelab' => true,
        'fechaliqtran' => true,
        'distanciatrans' => true,
        'ordencompelab' => true,
        'ordencomtrans' => true,
        'aclasificadora' => true,
        'fechaingreso' => true,
        'qrfecha' => true,
        'qrpuesto' => true,
        'year' => true,
        'month' => true,
        'day' => true,
        'id' => true,
        'entrega' => true,
        'comprador' => true,
        'vendedor' => true,
        'activo' => true,
        'fecha_intemp' => true,
        'grupo' => true,
        'bprodal' => true,
        'circuito' => true,
        'idpuesto' => true,
        'fechaven' => true,
        'objnr' => true,
        'idempresa' => true,
        'txtmaterial' => true,
    ];
}
