<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcTxtMateriales Model
 *
 * @method \App\Model\Entity\ZcTxtMateriale newEmptyEntity()
 * @method \App\Model\Entity\ZcTxtMateriale newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcTxtMateriale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcTxtMateriale get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcTxtMateriale findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcTxtMateriale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcTxtMateriale[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcTxtMateriale|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcTxtMateriale saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcTxtMateriale[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcTxtMateriale[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcTxtMateriale[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcTxtMateriale[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcTxtMaterialesTable extends Table
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

        $this->setTable('prd.zc_txt_materiales');
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
            ->scalar('mandt')
            ->maxLength('mandt', 100)
            ->allowEmptyString('mandt');

        $validator
            ->scalar('matnr')
            ->maxLength('matnr', 100)
            ->allowEmptyString('matnr');

        $validator
            ->scalar('spras')
            ->maxLength('spras', 100)
            ->allowEmptyString('spras');

        $validator
            ->scalar('maktx')
            ->maxLength('maktx', 100)
            ->allowEmptyString('maktx');

        $validator
            ->scalar('maktg')
            ->maxLength('maktg', 100)
            ->allowEmptyString('maktg');

        return $validator;
    }
}
