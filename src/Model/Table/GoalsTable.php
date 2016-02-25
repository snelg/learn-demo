<?php
namespace App\Model\Table;

use App\Model\Entity\Goal;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Goals Model
 *
 */
class GoalsTable extends Table
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

        $this->table('goals');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->requirePresence('category', 'create')
            ->notEmpty('category');

        $validator
            ->requirePresence('goal', 'create')
            ->notEmpty('goal');

        $validator
            ->boolean('complete')
            ->requirePresence('complete', 'create')
            ->notEmpty('complete');

        return $validator;
    }

    public function findCategorized()
    {
        $goals = $this->find()->orderAsc('category');
        $categorized = [];
        foreach ($goals as $goal) {
            $categorized[$goal->category][] = $goal;
        }
        return $categorized;
    }
}
