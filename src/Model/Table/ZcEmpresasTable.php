<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcEmpresas Model
 *
 * @method \App\Model\Entity\ZcEmpresa newEmptyEntity()
 * @method \App\Model\Entity\ZcEmpresa newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcEmpresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcEmpresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcEmpresa findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcEmpresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcEmpresa[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcEmpresa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcEmpresa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcEmpresa[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcEmpresa[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcEmpresa[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcEmpresa[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcEmpresasTable extends Table
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

        $this->setTable('prd.zc_empresas');
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
            ->scalar('idempresa')
            ->maxLength('idempresa', 100)
            ->allowEmptyString('idempresa');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->allowEmptyString('nombre');

        return $validator;
    }
}
