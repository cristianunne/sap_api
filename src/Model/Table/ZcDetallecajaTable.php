<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcDetallecaja Model
 *
 * @method \App\Model\Entity\ZcDetallecaja newEmptyEntity()
 * @method \App\Model\Entity\ZcDetallecaja newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcDetallecaja[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcDetallecaja get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcDetallecaja findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcDetallecaja patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcDetallecaja[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcDetallecaja|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcDetallecaja saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcDetallecaja[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcDetallecaja[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcDetallecaja[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcDetallecaja[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcDetallecajaTable extends Table
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

        $this->setTable('prd.zc_detallecaja');
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
            ->scalar('iddetalle')
            ->maxLength('iddetalle', 204)
            ->allowEmptyString('iddetalle');

        $validator
            ->decimal('p_payments')
            ->allowEmptyString('p_payments');

        $validator
            ->scalar('position_text')
            ->maxLength('position_text', 100)
            ->allowEmptyString('position_text');

        return $validator;
    }
}
