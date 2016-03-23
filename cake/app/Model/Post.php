<?php
App::uses('AppModel', 'Model');

class Post extends AppModel {
    public $useDbConfig = 'wordpress';

    public $primaryKey = 'ID';

    public $displayField = 'post_title';

    // hasMany associations
    public $hasMany = array(
        'Postmeta' => array(
            'className'    => 'Postmeta',
            'foreignKey'   => 'post_id',
            'dependent'    => false,
        ),
        'TermRelationship' => array(
            'className'    => 'TermRelationship',
            'foreignKey'   => 'object_id',
            'dependent'    => false,
        )
    );
}