<?php
App::uses('AppModel', 'Model');
class Postmeta extends AppModel {
    public $useDbConfig = 'wordpress';

    public $primaryKey = 'meta_id';

    public $useTable = 'postmeta';

    // belongsTo associations
    public $belongsTo = array(
        'Post' => array(
            'className'  => 'Post',
            'foreignKey' => 'post_id',
        )
    );
}