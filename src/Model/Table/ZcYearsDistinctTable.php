<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcYearsDistinct Model
 *
 * @method \App\Model\Entity\ZcYearsDistinct newEmptyEntity()
 * @method \App\Model\Entity\ZcYearsDistinct newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcYearsDistinct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcYearsDistinct get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcYearsDistinct findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcYearsDistinct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcYearsDistinct[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcYearsDistinct|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcYearsDistinct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcYearsDistinct[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcYearsDistinct[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcYearsDistinct[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcYearsDistinct[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcYearsDistinctTable extends Table
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

        $this->setTable('prd.zc_years_distinct');
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
            ->scalar('years')
            ->maxLength('years', 100)
            ->allowEmptyString('years');

        return $validator;
    }
}
