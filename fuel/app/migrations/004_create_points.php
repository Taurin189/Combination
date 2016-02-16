<?php

namespace Fuel\Migrations;

class Create_points
{
	public function up()
	{
		\DBUtil::create_table('points', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id1' => array('constraint' => 11, 'type' => 'int'),
			'user_id2' => array('constraint' => 11, 'type' => 'int'),
			'point' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('points');
	}
}
