<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcCuentaContable Model
 *
 * @method \App\Model\Entity\ZcCuentaContable newEmptyEntity()
 * @method \App\Model\Entity\ZcCuentaContable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcCuentaContable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcCuentaContable get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcCuentaContable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcCuentaContable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcCuentaContable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcCuentaContable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcCuentaContable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcCuentaContable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCuentaContable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCuentaContable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCuentaContable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcCuentaContableTable extends Table
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

        $this->setTable('prd.zc_cuenta_contable');
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
            ->scalar('kstar')
            ->maxLength('kstar', 100)
            ->allowEmptyString('kstar');

        $validator
            ->scalar('cuentacontable')
            ->maxLength('cuentacontable', 100)
            ->allowEmptyString('cuentacontable');

        return $validator;
    }
}
