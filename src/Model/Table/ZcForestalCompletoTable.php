<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcForestalCompleto Model
 *
 * @method \App\Model\Entity\ZcForestalCompleto newEmptyEntity()
 * @method \App\Model\Entity\ZcForestalCompleto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalCompleto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalCompleto get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcForestalCompleto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcForestalCompleto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalCompleto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalCompleto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalCompleto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalCompleto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalCompleto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalCompleto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalCompleto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcForestalCompletoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('prd.zc_forestal_completo');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('mandt')
            ->maxLength('mandt', 100)
            ->allowEmptyString('mandt');

        $validator
            ->scalar('pedido')
            ->maxLength('pedido', 100)
            ->allowEmptyString('pedido');

        $validator
            ->scalar('remito')
            ->maxLength('remito', 100)
            ->allowEmptyString('remito');

        $validator
            ->scalar('posicion')
            ->maxLength('posicion', 100)
            ->allowEmptyString('posicion');

        $validator
            ->scalar('material')
            ->maxLength('material', 100)
            ->allowEmptyString('material');

        $validator
            ->scalar('lote')
            ->maxLength('lote', 100)
            ->allowEmptyString('lote');

        $validator
            ->numeric('cantidad')
            ->allowEmptyString('cantidad');

        $validator
            ->scalar('rodfecha')
            ->maxLength('rodfecha', 100)
            ->allowEmptyString('rodfecha');

        $validator
            ->scalar('rodal')
            ->maxLength('rodal', 100)
            ->allowEmptyString('rodal');

        $validator
            ->scalar('numnotificacion')
            ->maxLength('numnotificacion', 100)
            ->allowEmptyString('numnotificacion');

        $validator
            ->scalar('numentrega')
            ->maxLength('numentrega', 100)
            ->allowEmptyString('numentrega');

        $validator
            ->integer('idtransporte')
            ->allowEmptyString('idtransporte');

        $validator
            ->scalar('txttransporte')
            ->maxLength('txttransporte', 100)
            ->allowEmptyString('txttransporte');

        $validator
            ->scalar('idchofer')
            ->maxLength('idchofer', 100)
            ->allowEmptyString('idchofer');

        $validator
            ->scalar('txtchofer')
            ->maxLength('txtchofer', 100)
            ->allowEmptyString('txtchofer');

        $validator
            ->scalar('chapa1')
            ->maxLength('chapa1', 100)
            ->allowEmptyString('chapa1');

        $validator
            ->scalar('chapa2')
            ->maxLength('chapa2', 100)
            ->allowEmptyString('chapa2');

        $validator
            ->scalar('numingreso')
            ->maxLength('numingreso', 100)
            ->allowEmptyString('numingreso');

        $validator
            ->scalar('almacen')
            ->maxLength('almacen', 100)
            ->allowEmptyString('almacen');

        $validator
            ->scalar('pospedido')
            ->maxLength('pospedido', 100)
            ->allowEmptyString('pospedido');

        $validator
            ->scalar('posentrega')
            ->maxLength('posentrega', 100)
            ->allowEmptyString('posentrega');

        $validator
            ->scalar('ubicacion')
            ->maxLength('ubicacion', 100)
            ->allowEmptyString('ubicacion');

        $validator
            ->scalar('idelaborador')
            ->maxLength('idelaborador', 100)
            ->allowEmptyString('idelaborador');

        $validator
            ->scalar('txtelaborador')
            ->maxLength('txtelaborador', 100)
            ->allowEmptyString('txtelaborador');

        $validator
            ->scalar('cerrado')
            ->maxLength('cerrado', 100)
            ->allowEmptyString('cerrado');

        $validator
            ->scalar('docanulado')
            ->maxLength('docanulado', 100)
            ->allowEmptyString('docanulado');

        $validator
            ->decimal('costoelab')
            ->allowEmptyString('costoelab');

        $validator
            ->decimal('costotrans')
            ->allowEmptyString('costotrans');

        $validator
            ->scalar('fechaliqelab')
            ->maxLength('fechaliqelab', 100)
            ->allowEmptyString('fechaliqelab');

        $validator
            ->scalar('fechaliqtran')
            ->maxLength('fechaliqtran', 100)
            ->allowEmptyString('fechaliqtran');

        $validator
            ->integer('distanciatrans')
            ->allowEmptyString('distanciatrans');

        $validator
            ->scalar('ordencompelab')
            ->maxLength('ordencompelab', 100)
            ->allowEmptyString('ordencompelab');

        $validator
            ->scalar('ordencomtrans')
            ->maxLength('ordencomtrans', 100)
            ->allowEmptyString('ordencomtrans');

        $validator
            ->scalar('aclasificadora')
            ->maxLength('aclasificadora', 100)
            ->allowEmptyString('aclasificadora');

        $validator
            ->scalar('fechaingreso')
            ->maxLength('fechaingreso', 100)
            ->allowEmptyString('fechaingreso');

        $validator
            ->scalar('qrfecha')
            ->maxLength('qrfecha', 100)
            ->allowEmptyString('qrfecha');

        $validator
            ->scalar('qrpuesto')
            ->maxLength('qrpuesto', 100)
            ->allowEmptyString('qrpuesto');

        $validator
            ->scalar('year')
            ->maxLength('year', 4)
            ->allowEmptyString('year');

        $validator
            ->scalar('month')
            ->maxLength('month', 2)
            ->allowEmptyString('month');

        $validator
            ->scalar('day')
            ->maxLength('day', 2)
            ->allowEmptyString('day');

        $validator
            ->scalar('id')
            ->maxLength('id', 100)
            ->allowEmptyString('id');

        $validator
            ->scalar('entrega')
            ->maxLength('entrega', 100)
            ->allowEmptyString('entrega');

        $validator
            ->scalar('comprador')
            ->maxLength('comprador', 100)
            ->allowEmptyString('comprador');

        $validator
            ->scalar('vendedor')
            ->maxLength('vendedor', 100)
            ->allowEmptyString('vendedor');

        $validator
            ->scalar('activo')
            ->maxLength('activo', 100)
            ->allowEmptyString('activo');

        $validator
            ->scalar('fecha_intemp')
            ->maxLength('fecha_intemp', 100)
            ->allowEmptyString('fecha_intemp');

        $validator
            ->scalar('grupo')
            ->maxLength('grupo', 100)
            ->allowEmptyString('grupo');

        $validator
            ->scalar('bprodal')
            ->maxLength('bprodal', 100)
            ->allowEmptyString('bprodal');

        $validator
            ->scalar('circuito')
            ->maxLength('circuito', 100)
            ->allowEmptyString('circuito');

        $validator
            ->integer('idpuesto')
            ->allowEmptyString('idpuesto');

        $validator
            ->scalar('fechaven')
            ->maxLength('fechaven', 100)
            ->allowEmptyString('fechaven');

        $validator
            ->scalar('objnr')
            ->maxLength('objnr', 100)
            ->allowEmptyString('objnr');

        $validator
            ->scalar('idempresa')
            ->maxLength('idempresa', 100)
            ->allowEmptyString('idempresa');

        $validator
            ->scalar('txtmaterial')
            ->maxLength('txtmaterial', 100)
            ->allowEmptyString('txtmaterial');

        return $validator;
    }
}
