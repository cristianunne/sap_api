<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcCentroCostos Model
 *
 * @method \App\Model\Entity\ZcCentroCosto newEmptyEntity()
 * @method \App\Model\Entity\ZcCentroCosto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcCentroCosto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcCentroCosto get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcCentroCosto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcCentroCosto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcCentroCosto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcCentroCosto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcCentroCosto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcCentroCosto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCentroCosto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCentroCosto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcCentroCosto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcCentroCostosTable extends Table
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

        $this->setTable('prd.zc_centro_costos');
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
            ->scalar('centrocosto')
            ->maxLength('centrocosto', 100)
            ->allowEmptyString('centrocosto');

        $validator
            ->scalar('txt_centrocosto')
            ->maxLength('txt_centrocosto', 100)
            ->allowEmptyString('txt_centrocosto');

        $validator
            ->scalar('objnr')
            ->maxLength('objnr', 100)
            ->allowEmptyString('objnr');

        return $validator;
    }
}
