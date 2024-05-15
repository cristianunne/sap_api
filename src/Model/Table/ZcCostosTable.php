<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcCostos Model
 *
 * @method \App\Model\Entity\ZcCosto newEmptyEntity()
 * @method \App\Model\Entity\ZcCosto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcCosto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcCosto get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcCosto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcCosto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcCosto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcCosto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcCosto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcCosto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCosto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCosto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCosto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcCostosTable extends Table
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

        $this->setTable('prd.zc_costos');
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
            ->scalar('lifnr')
            ->maxLength('lifnr', 100)
            ->allowEmptyString('lifnr');

        $validator
            ->scalar('ebeln')
            ->maxLength('ebeln', 100)
            ->allowEmptyString('ebeln');

        $validator
            ->scalar('ebelp')
            ->maxLength('ebelp', 100)
            ->allowEmptyString('ebelp');

        $validator
            ->scalar('txtrodal')
            ->maxLength('txtrodal', 100)
            ->allowEmptyString('txtrodal');

        $validator
            ->scalar('gruporodal')
            ->maxLength('gruporodal', 100)
            ->allowEmptyString('gruporodal');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->allowEmptyString('nombre');

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

        return $validator;
    }
}
