<?php
use Orm\Model;

class Model_Member extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'user_id',
		'group_id',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_belongs_to = [
		'group' => [
			'key_from' => 'group_id',
			'model_to' => 'Model_Group',
			'key_to' => 'id',
			'cascade_save'   => true,
      'cascade_delete' => false,
		],
		'user' => [
			'key_from' => 'user_id',
			'model_to' => 'Model_User',
			'key_to' => 'id',
			'cascade_save'   => true,
			'cascade_delete' => false,
		]
	];

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[50]');
		$val->add_field('user_id', 'User Id', 'required|valid_string[numeric]');
		$val->add_field('group_name', 'Group Name', 'required|valid_string[100]');

		return $val;
	}

}
