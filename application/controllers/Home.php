<?php 

namespace Application\Controllers;

use Acffdev\PhpCore\Controller as Controller;

class Home extends Controller
{
	public function index($req, $res)
	{
		$res->send(200, $this->view('index'));
	}
}