<?php
App::uses('AppModel', 'Model');
class User extends AppModel {
    public $useDbConfig = 'wordpress';

    public $primaryKey = 'ID';

    public $displayField = 'display_name';

    // hasMany associations
    public $hasMany = array(
        'Post' => array(
            'className'    => 'Post',
            'foreignKey'   => 'ID',
            'dependent'    => false,
        ),
    );
}