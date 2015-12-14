<?php

class Model_Stage extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'title',
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

	protected static $_table_name = 'stages';

    protected static $_primary_key = array('id');

    protected static $_has_many = array('blocks' => array(
        'model_to' => 'Model_Block',
        'key_from' => 'id',
        'key_to' => 'stage_id',
        'cascade_save' => true,
        'cascade_delete' => false,
    ));


    /* protected static $_has_many = array('scores' => array( */
    /*     'model_to' => 'Model_Score', */
    /*     'key_from' => 'id', */
    /*     'key_to' => 'stage_id', */
    /*     'cascade_save' => true, */
    /*     'cascade_delete' => false, */
    /* )); */
    
}
