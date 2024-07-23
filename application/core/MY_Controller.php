<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	/**
	 * General Variable
	 * @var Array
	 */
	protected $vars = [];

	/**
	 * Class constructor
	 * @return	Void
	 */
	public function __construct()
	{
		parent::__construct();
        $this->vars['title'] = 'Blog Edukasi';

    }

}