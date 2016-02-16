<?php

namespace Fuel\Migrations;

class Create_combi_tables
{
	public function up()
	{
		\DBUtil::create_table('combi_tables', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'num' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('combi_tables');
	}
}
