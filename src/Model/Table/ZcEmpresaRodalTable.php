<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcEmpresaRodal Model
 *
 * @method \App\Model\Entity\ZcEmpresaRodal newEmptyEntity()
 * @method \App\Model\Entity\ZcEmpresaRodal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcEmpresaRodal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcEmpresaRodal get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcEmpresaRodal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcEmpresaRodal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcEmpresaRodal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcEmpresaRodal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcEmpresaRodal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcEmpresaRodal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcEmpresaRodal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcEmpresaRodal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcEmpresaRodal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcEmpresaRodalTable extends Table
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

        $this->setTable('prd.zc_empresa_rodal');
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
            ->scalar('objnr')
            ->maxLength('objnr', 100)
            ->allowEmptyString('objnr');

        $validator
            ->scalar('idempresa')
            ->maxLength('idempresa', 100)
            ->allowEmptyString('idempresa');

        return $validator;
    }
}
