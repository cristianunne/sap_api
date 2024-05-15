<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcForestalElaborador Model
 *
 * @method \App\Model\Entity\ZcForestalElaborador newEmptyEntity()
 * @method \App\Model\Entity\ZcForestalElaborador newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalElaborador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalElaborador get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcForestalElaborador findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcForestalElaborador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalElaborador[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcForestalElaborador|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalElaborador saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcForestalElaborador[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalElaborador[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalElaborador[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcForestalElaborador[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcForestalElaboradorTable extends Table
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

        $this->setTable('prd.zc_forestal_elaborador');
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
            ->scalar('idelaborador')
            ->maxLength('idelaborador', 100)
            ->allowEmptyString('idelaborador');

        $validator
            ->scalar('txtelaborador')
            ->maxLength('txtelaborador', 100)
            ->allowEmptyString('txtelaborador');

        return $validator;
    }
}
