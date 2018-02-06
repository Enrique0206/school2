<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Grades Model
 *
 * @property \App\Model\Table\CoursesTable|\Cake\ORM\Association\HasMany $Courses
 * @property \App\Model\Table\InscriptionsTable|\Cake\ORM\Association\HasMany $Inscriptions
 *
 * @method \App\Model\Entity\Grade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Grade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Grade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Grade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Grade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Grade findOrCreate($search, callable $callback = null, $options = [])
 */
class GradesTable extends Table
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

        $this->setTable('grades');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Courses', [
            'foreignKey' => 'grade_id'
        ]);
        $this->hasMany('Inscriptions', [
            'foreignKey' => 'grade_id'
        ]);
		
		$this->setDisplayField('section'); //esto permite como visualizar la option de course, como id o section
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
            ->scalar('section')
            ->maxLength('section', 10)
            ->requirePresence('section', 'create')
            ->notEmpty('section');

        $validator
            ->scalar('level')
            ->maxLength('level', 10)
            ->requirePresence('level', 'create')
            ->notEmpty('level');

        return $validator;
    }
}
