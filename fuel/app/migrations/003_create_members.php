<?php

namespace Fuel\Migrations;

class Create_members
{
	public function up()
	{
		\DBUtil::create_table('members', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 50, 'type' => 'varchar'),
			'user_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'group_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));

		\DBUtil::add_foreign_key('members', [
			'constraint' => 'index_members_to_user',
			'key' => 'user_id',
			'reference' => [
				'table' => 'users',
				'column' => 'id',
			],
			'on_update' => 'CASCADE',
      'on_delete' => 'RESTRICT'
		]);

		\DBUtil::add_foreign_key('members', [
      'constraint' => 'index_members_to_group',
			'key' => 'group_id',
			'reference' => [
				'table' => 'groups',
				'column' => 'id',
			],
			'on_update' => 'CASCADE',
      'on_delete' => 'RESTRICT'
		]);
	}

	public function down()
	{
		\DBUtil::drop_table('members');
	}
}
