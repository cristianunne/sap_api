<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcRodalesWithEmpresas Model
 *
 * @method \App\Model\Entity\ZcRodalesWithEmpresa newEmptyEntity()
 * @method \App\Model\Entity\ZcRodalesWithEmpresa newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcRodalesWithEmpresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcRodalesWithEmpresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcRodalesWithEmpresa findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcRodalesWithEmpresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcRodalesWithEmpresa[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcRodalesWithEmpresa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcRodalesWithEmpresa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcRodalesWithEmpresa[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcRodalesWithEmpresa[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcRodalesWithEmpresa[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcRodalesWithEmpresa[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcRodalesWithEmpresasTable extends Table
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

        $this->setTable('prd.zc_rodales_with_empresas');
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
