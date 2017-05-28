<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->requirePresence('username', 'create')
            ->notEmpty('username', 'Un pseudo est nécessaire.');

        $validator
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname', 'Un prénom est nécessaire.');

        $validator
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname', 'Un nom est nécessaire.');

        $validator
            ->requirePresence('mail', 'create')
            ->notEmpty('mail', 'Une adresse mail est nécessaire.');

        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city', 'Un ville est nécessaire.');

        $validator
            ->integer('zip_code')
            ->requirePresence('zip_code', 'create')
            ->notEmpty('zip_code', 'Un code postal est nécessaire.');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address', 'Une adresse est nécessaire.');

        $validator
            ->allowEmpty('address_add');

        $validator
            ->allowEmpty('phone');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password', 'Un mot de passe est nécessaire.');

        $validator
            ->integer('role')
            ->requirePresence('role', 'create')
            ->notEmpty('role', 'Un rôle est nécessaire.')
            ->add('role', 'inList',
                ['rule' => ['inList', [1, 2]],
                'message' => 'Merci de rentrer un role valide',
            ]);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
