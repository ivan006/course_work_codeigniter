<?php

class Product extends DataMapper {

	public $has_one = array(
	);

	public $has_many = array(
		'event',
	);

	public function insert_name()
	{
	}
}