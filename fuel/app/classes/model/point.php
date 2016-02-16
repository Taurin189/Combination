<?php

class Model_Point extends \Model_Crud
{
	protected static $_properties = array(
		'id',
		'member_id1',
		'member_id2',
		'point',
	);

	protected static $_table_name = 'points';

}
