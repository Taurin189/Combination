<?php

namespace Fuel\Migrations;

class Create_combi_records
{
	public function up()
	{
		\DBUtil::create_table('combi_records', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'num' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'member_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),

		), array('id'));

		\DBUtil::add_foreign_key('combi_records', [
			'constraint' => 'index_records_to_member',
			'key' => 'member_id',
			'reference' => [
				'table' => 'members',
				'column' => 'id',
			],
			'on_update' => 'CASCADE',
			'on_delete' => 'RESTRICT'
		]);
	}

	public function down()
	{
		\DBUtil::drop_table('combi_records');
	}
}
