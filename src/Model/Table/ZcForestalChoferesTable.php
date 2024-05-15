<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcForestalChoferes Model
 *
 * @method \App\Model\Entity\ZcForestalChofere newEmptyEntity()
 * @method \App\Model\Entity\ZcForestalChofere newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalChofere[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalChofere get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcForestalChofere findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcForestalChofere patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalChofere[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalChofere|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalChofere saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalChofere[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalChofere[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalChofere[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalChofere[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcForestalChoferesTable extends Table
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

        $this->setTable('prd.zc_forestal_choferes');
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
            ->scalar('idchofer')
            ->maxLength('idchofer', 100)
            ->allowEmptyString('idchofer');

        $validator
            ->scalar('txtchofer')
            ->maxLength('txtchofer', 100)
            ->allowEmptyString('txtchofer');

        return $validator;
    }
}
