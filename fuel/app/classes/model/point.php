<?php

class Model_Point extends \Model_Crud
{
	protected static $_properties = array(
		'id',
		'user_id1',
		'nuser_id2',
		'point',
	);

	protected static $_table_name = 'points';

}
