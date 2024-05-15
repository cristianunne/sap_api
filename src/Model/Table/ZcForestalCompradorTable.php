<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcForestalComprador Model
 *
 * @method \App\Model\Entity\ZcForestalComprador newEmptyEntity()
 * @method \App\Model\Entity\ZcForestalComprador newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalComprador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalComprador get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcForestalComprador findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcForestalComprador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalComprador[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalComprador|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalComprador saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalComprador[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalComprador[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalComprador[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalComprador[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcForestalCompradorTable extends Table
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

        $this->setTable('prd.zc_forestal_comprador');
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
            ->scalar('comprador')
            ->maxLength('comprador', 100)
            ->allowEmptyString('comprador');

        return $validator;
    }
}
