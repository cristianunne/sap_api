<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcRodales Model
 *
 * @method \App\Model\Entity\ZcRodale newEmptyEntity()
 * @method \App\Model\Entity\ZcRodale newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcRodale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcRodale get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcRodale findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcRodale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcRodale[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcRodale|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcRodale saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcRodale[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcRodale[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcRodale[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcRodale[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcRodalesTable extends Table
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

        $this->setTable('prd.zc_rodales');
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
            ->scalar('rodal')
            ->maxLength('rodal', 100)
            ->allowEmptyString('rodal');

        $validator
            ->scalar('txtrodal')
            ->maxLength('txtrodal', 100)
            ->allowEmptyString('txtrodal');

        $validator
            ->scalar('objnr')
            ->maxLength('objnr', 100)
            ->allowEmptyString('objnr');

        $validator
            ->scalar('gruporodal')
            ->maxLength('gruporodal', 100)
            ->allowEmptyString('gruporodal');

        $validator
            ->scalar('empresa')
            ->maxLength('empresa', 100)
            ->allowEmptyString('empresa');

        return $validator;
    }
}
