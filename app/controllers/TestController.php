<?php
namespace App\Controllers;

class TestController extends Controller {

	public function __construct() {
		$this->arr['title'] = 'Teste';
	}

	public function index() {
		$this->arr['var'] = 'Página de teste!!!';
		return $this->arr;
	}
}