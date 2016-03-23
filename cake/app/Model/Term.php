<?php
App::uses('AppModel', 'Model');
class Term extends AppModel {
    public $useDbConfig = 'wordpress';

    public $primaryKey = 'term_id';

    public $displayField = 'name';

    // hasMany associations
    public $hasMany = array(
        'TermTaxonomy' => array(
            'className'    => 'TermTaxonomy',
            'foreignKey'   => 'term_id',
            'dependent'    => false,
        )
    );
}