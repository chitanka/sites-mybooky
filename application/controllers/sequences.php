<?php
class_exists('Crud_Controller') || require __DIR__.'/crud.php';

class Sequences_Controller extends Crud_Controller {

	protected $model = 'Sequence';

	protected $formFields = array(
		'name' => array('required,max:100'),
	);
}
