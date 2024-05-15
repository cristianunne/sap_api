<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcForestalTransportistas Model
 *
 * @method \App\Model\Entity\ZcForestalTransportista newEmptyEntity()
 * @method \App\Model\Entity\ZcForestalTransportista newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalTransportista[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalTransportista get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcForestalTransportista findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcForestalTransportista patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalTransportista[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalTransportista|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalTransportista saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalTransportista[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalTransportista[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalTransportista[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalTransportista[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcForestalTransportistasTable extends Table
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

        $this->setTable('prd.zc_forestal_transportistas');
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
            ->integer('idtransporte')
            ->allowEmptyString('idtransporte');

        $validator
            ->scalar('txttransporte')
            ->maxLength('txttransporte', 100)
            ->allowEmptyString('txttransporte');

        return $validator;
    }
}
