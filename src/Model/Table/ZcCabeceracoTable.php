<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcCabeceraco Model
 *
 * @method \App\Model\Entity\ZcCabeceraco newEmptyEntity()
 * @method \App\Model\Entity\ZcCabeceraco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcCabeceraco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcCabeceraco get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcCabeceraco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcCabeceraco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcCabeceraco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcCabeceraco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcCabeceraco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcCabeceraco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCabeceraco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCabeceraco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCabeceraco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcCabeceracoTable extends Table
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

        $this->setTable('prd.zc_cabeceraco');
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

        return $validator;
    }
}
