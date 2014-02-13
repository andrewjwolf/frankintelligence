<?php

class Swimline extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'field_id' => 'required'
	);
}
