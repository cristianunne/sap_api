<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcForestalFechas Model
 *
 * @method \App\Model\Entity\ZcForestalFecha newEmptyEntity()
 * @method \App\Model\Entity\ZcForestalFecha newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalFecha[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalFecha get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcForestalFecha findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcForestalFecha patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalFecha[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalFecha|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalFecha saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalFecha[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalFecha[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalFecha[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalFecha[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcForestalFechasTable extends Table
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

        $this->setTable('prd.zc_forestal_fechas');
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

        return $validator;
    }
}
