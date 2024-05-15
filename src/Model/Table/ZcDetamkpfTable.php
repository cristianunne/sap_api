<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZcDetamkpf Model
 *
 * @method \App\Model\Entity\ZcDetamkpf newEmptyEntity()
 * @method \App\Model\Entity\ZcDetamkpf newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZcDetamkpf[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZcDetamkpf get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZcDetamkpf findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZcDetamkpf patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZcDetamkpf[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZcDetamkpf|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcDetamkpf saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZcDetamkpf[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcDetamkpf[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcDetamkpf[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZcDetamkpf[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZcDetamkpfTable extends Table
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

        $this->setTable('prd.zc_detamkpf');
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
            ->scalar('iddetalle')
            ->maxLength('iddetalle', 304)
            ->allowEmptyString('iddetalle');

        $validator
            ->scalar('matnr')
            ->maxLength('matnr', 100)
            ->allowEmptyString('matnr');

        $validator
            ->decimal('menge')
            ->allowEmptyString('menge');

        $validator
            ->decimal('dmbtr')
            ->allowEmptyString('dmbtr');

        $validator
            ->scalar('bwart')
            ->maxLength('bwart', 100)
            ->allowEmptyString('bwart');

        $validator
            ->scalar('sgtxt')
            ->maxLength('sgtxt', 100)
            ->allowEmptyString('sgtxt');

        $validator
            ->scalar('lifnr')
            ->maxLength('lifnr', 100)
            ->allowEmptyString('lifnr');

        $validator
            ->scalar('ebeln')
            ->maxLength('ebeln', 100)
            ->allowEmptyString('ebeln');

        $validator
            ->scalar('ebelp')
            ->maxLength('ebelp', 100)
            ->allowEmptyString('ebelp');

        return $validator;
    }
}
