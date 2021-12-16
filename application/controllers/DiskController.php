<?php 

namespace application\controllers;

use application\core\Controller;

class DiskController extends Controller{
	
	public function insertAction(){
		$this->model->insertDisk($_POST);
		$this->view->redirect('/');
	}
	
}