<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeoStates Model
 *
 * @method \App\Model\Entity\GeoState newEmptyEntity()
 * @method \App\Model\Entity\GeoState newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\GeoState[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeoState get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeoState findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\GeoState patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeoState[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeoState|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoState saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoState[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\GeoState[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\GeoState[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\GeoState[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class GeoStatesTable extends Table
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

        $this->setTable('geo_states');
        $this->setDisplayField('name');
        $this->setPrimaryKey(['abv', 'country']);
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
            ->scalar('name')
            ->maxLength('name', 50)
            ->notEmptyString('name');

        $validator
            ->scalar('abv')
            ->maxLength('abv', 2)
            ->allowEmptyString('abv', null, 'create');

        $validator
            ->scalar('country')
            ->maxLength('country', 2)
            ->allowEmptyString('country', null, 'create');

        $validator
            ->scalar('is_state')
            ->maxLength('is_state', 1)
            ->allowEmptyString('is_state');

        $validator
            ->scalar('is_lower48')
            ->maxLength('is_lower48', 1)
            ->allowEmptyString('is_lower48');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 50)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');

        $validator
            ->numeric('latitude')
            ->allowEmptyString('latitude');

        $validator
            ->numeric('longitude')
            ->allowEmptyString('longitude');

        $validator
            ->allowEmptyString('population');

        $validator
            ->numeric('area')
            ->greaterThanOrEqual('area', 0)
            ->allowEmptyString('area');

        return $validator;
    }
}
