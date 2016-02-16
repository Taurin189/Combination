<?php

namespace Fuel\Migrations;

class Create_points
{
	public function up()
	{
		\DBUtil::create_table('points', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'member_id1' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'member_id2' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'point' => array('constraint' => 11, 'type' => 'int'),
		), array('id'));

		\DBUtil::add_foreign_key('points', [
			'constraint' => 'index_points_to_member1',
			'key' => 'member_id1',
			'reference' => [
				'table' => 'members',
				'column' => 'id',
			],
			'on_update' => 'CASCADE',
			'on_delete' => 'RESTRICT'
		]);

		\DBUtil::add_foreign_key('points', [
			'constraint' => 'index_points_to_member2',
			'key' => 'member_id2',
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
		\DBUtil::drop_table('points');
	}
}
