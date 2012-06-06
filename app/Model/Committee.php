<?php
App::uses('AppModel', 'Model');
/**
 * Committee Model
 *
 * @property Person $Person
 */
class Committee extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'head' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Person' => array(
			'className' => 'Person',
			'joinTable' => 'committees_people',
			'foreignKey' => 'committee_id',
			'associationForeignKey' => 'person_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
    
    public $belongsTo = array(
        'Head' => array(
            'className' => 'Person',
            'foreignKey' => 'head'
        )
    );

}
