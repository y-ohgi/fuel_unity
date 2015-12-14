<?php

class Model_Block extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'stage_id',
		'position',
		'scale',
		'rotation',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'blocks';

    protected static $_primary_key = array('id');
    
    protected static $_belongs_to = array('stage' => array(
        'model_to' => 'Model_Stage',
        'key_from' => 'stage_id',
        'key_to' => 'id',
        'cascade_save' => true,
        'cascade_delete' => false,
    ));

}
