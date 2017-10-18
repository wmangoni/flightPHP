<?php
namespace App\Controllers;

class HomeController extends Controller {

	public function __construct() {
		$this->arr['title'] = 'Home';
	}

	public function index() {
		$this->arr['var'] = 'MAH OEE!!!';
		return $this->arr;
	}
}