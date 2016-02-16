<?php
use Orm\Model;

class Model_Latest extends Model
{
	protected static $_properties = array(
		'id',
		'num',
	);

	protected static $_table_name = 'latests';

}
