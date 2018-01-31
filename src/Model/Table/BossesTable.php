<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bosses Model
 *
 * @property \App\Model\Table\StudentsTable|\Cake\ORM\Association\HasMany $Students
 *
 * @method \App\Model\Entity\Boss get($primaryKey, $options = [])
 * @method \App\Model\Entity\Boss newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Boss[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Boss|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Boss patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Boss[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Boss findOrCreate($search, callable $callback = null, $options = [])
 */
class BossesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('bosses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Students', [
            'foreignKey' => 'boss_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 45)
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->scalar('dni')
            ->maxLength('dni', 45)
            ->requirePresence('dni', 'create')
            ->notEmpty('dni');

        return $validator;
    }
}
