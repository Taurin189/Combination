<?php
use Orm\Model;

class Model_Combi_Table extends Model
{
	protected static $_properties = array(
		'id',
		'num',
	);

	protected static $_table_name = 'combi_tables';

	protected static $_has_many = [
		'records' => [
			'key_from'       => 'id',
			'model_to'       => 'Model_Combi_Record',
			'key_to'         => 'table_id',
			'cascade_save'   => false,
			'cascade_delete' => false,
		],
	];
}
