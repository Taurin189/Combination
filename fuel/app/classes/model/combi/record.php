<?php
use Orm\Model;

class Model_Combi_Record extends Model
{
	protected static $_properties = array(
		'id',
		'table_id',
		'member_id',
	);

	protected static $_table_name = 'combi_records';

	protected static $_belongs_to = [
		'table' => [
			'key_from' => 'table_id',
			'model_to' => 'Model_Group',
			'key_to' => 'id',
			'cascade_save'   => true,
			'cascade_delete' => false,
		],
		'member' => [
			'key_from' => 'member_id',
			'model_to' => 'Model_Member',
			'key_to' => 'id',
			'cascade_save'   => true,
			'cascade_delete' => false,
		],
	]
}
