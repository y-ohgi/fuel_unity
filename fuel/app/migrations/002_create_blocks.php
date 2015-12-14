<?php

namespace Fuel\Migrations;

class Create_blocks
{
	public function up()
	{
		\DBUtil::create_table('blocks', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'stage_id' => array('constraint' => 11, 'type' => 'int'),
			'position' => array('constraint' => 255, 'type' => 'varchar'),
			'scale' => array('constraint' => 255, 'type' => 'varchar'),
			'rotation' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('blocks');
	}
}