<?php
App::uses('AppModel', 'Model');
class TermRelationship extends AppModel {
    public $useDbConfig = 'wordpress';

    public $primaryKey = 'object_id';

    // belongsTo associations
    public $belongsTo = array(
        'TermTaxonomy' => array(
            'className'  => 'TermTaxonomy',
            'foreignKey' => 'term_taxonomy_id',
        )
    );
}