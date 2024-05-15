<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcCostosCompleto Model
 *
 * @method \App\Model\Entity\ZcCostosCompleto newEmptyEntity()
 * @method \App\Model\Entity\ZcCostosCompleto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcCostosCompleto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcCostosCompleto get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcCostosCompleto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcCostosCompleto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcCostosCompleto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcCostosCompleto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcCostosCompleto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcCostosCompleto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCostosCompleto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCostosCompleto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCostosCompleto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcCostosCompletoTable extends Table
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

        $this->setTable('prd.zc_costos_completo');
        $this->setDisplayField('name');
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
            ->scalar('mesfinanciero')
            ->maxLength('mesfinanciero', 100)
            ->allowEmptyString('mesfinanciero');

        $validator
            ->scalar('awtyp')
            ->maxLength('awtyp', 100)
            ->allowEmptyString('awtyp');

        $validator
            ->decimal('wtgbtr')
            ->allowEmptyString('wtgbtr');

        $validator
            ->decimal('pagbtr')
            ->allowEmptyString('pagbtr');

        $validator
            ->decimal('mbgbtr')
            ->allowEmptyString('mbgbtr');

        $validator
            ->scalar('objnr')
            ->maxLength('objnr', 100)
            ->allowEmptyString('objnr');

        $validator
            ->scalar('wrttp')
            ->maxLength('wrttp', 100)
            ->allowEmptyString('wrttp');

        $validator
            ->scalar('kstar')
            ->maxLength('kstar', 100)
            ->allowEmptyString('kstar');

        $validator
            ->scalar('hrkft')
            ->maxLength('hrkft', 100)
            ->allowEmptyString('hrkft');

        $validator
            ->scalar('idempresa')
            ->maxLength('idempresa', 100)
            ->allowEmptyString('idempresa');

        $validator
            ->scalar('belnr')
            ->maxLength('belnr', 100)
            ->allowEmptyString('belnr');

        $validator
            ->scalar('gjahr')
            ->maxLength('gjahr', 100)
            ->allowEmptyString('gjahr');

        $validator
            ->scalar('bltxt')
            ->maxLength('bltxt', 100)
            ->allowEmptyString('bltxt');

        $validator
            ->scalar('budat')
            ->maxLength('budat', 100)
            ->allowEmptyString('budat');

        $validator
            ->scalar('refbk')
            ->maxLength('refbk', 100)
            ->allowEmptyString('refbk');

        $validator
            ->scalar('refbn')
            ->maxLength('refbn', 100)
            ->allowEmptyString('refbn');

        $validator
            ->scalar('refgj')
            ->maxLength('refgj', 100)
            ->allowEmptyString('refgj');

        $validator
            ->scalar('iddetalle')
            ->maxLength('iddetalle', 401)
            ->allowEmptyString('iddetalle');

        $validator
            ->decimal('menge')
            ->allowEmptyString('menge');

        $validator
            ->decimal('dmbtr')
            ->allowEmptyString('dmbtr');

        $validator
            ->scalar('bwart')
            ->maxLength('bwart', 100)
            ->allowEmptyString('bwart');

        $validator
            ->scalar('sgtxt')
            ->maxLength('sgtxt', 100)
            ->allowEmptyString('sgtxt');

        $validator
            ->scalar('ebeln')
            ->maxLength('ebeln', 100)
            ->allowEmptyString('ebeln');

        $validator
            ->scalar('ebelp')
            ->maxLength('ebelp', 100)
            ->allowEmptyString('ebelp');

        $validator
            ->scalar('rodal')
            ->maxLength('rodal', 100)
            ->allowEmptyString('rodal');

        $validator
            ->scalar('txtrodal')
            ->maxLength('txtrodal', 100)
            ->allowEmptyString('txtrodal');

        $validator
            ->scalar('gruporodal')
            ->maxLength('gruporodal', 100)
            ->allowEmptyString('gruporodal');

        $validator
            ->scalar('emp_name')
            ->maxLength('emp_name', 100)
            ->allowEmptyString('emp_name');

        $validator
            ->scalar('mandt')
            ->maxLength('mandt', 100)
            ->allowEmptyString('mandt');

        $validator
            ->scalar('matnr')
            ->maxLength('matnr', 100)
            ->allowEmptyString('matnr');

        $validator
            ->scalar('spras')
            ->maxLength('spras', 100)
            ->allowEmptyString('spras');

        $validator
            ->scalar('maktx')
            ->maxLength('maktx', 100)
            ->allowEmptyString('maktx');

        $validator
            ->scalar('maktg')
            ->maxLength('maktg', 100)
            ->allowEmptyString('maktg');

        $validator
            ->scalar('cuentacontable')
            ->maxLength('cuentacontable', 100)
            ->allowEmptyString('cuentacontable');

        $validator
            ->scalar('lifnr')
            ->maxLength('lifnr', 100)
            ->allowEmptyString('lifnr');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        return $validator;
    }
}
