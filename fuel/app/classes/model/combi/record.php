<?php
use Orm\Model;

class Model_Combi_Record extends Model
{
	protected static $_properties = array(
		'id',
		'num',
		'member_id',
	);

	protected static $_table_name = 'combi_records';

	protected static $_belongs_to = [
		'member' => [
			'key_from' => 'member_id',
			'model_to' => 'Model_Member',
			'key_to' => 'id',
			'cascade_save'   => true,
			'cascade_delete' => false,
		],
	];
	public static function get_table($num) {
		if (!$table = static::find($num)) {

		}
		var_dump($table);

		return $table;
	}
}
