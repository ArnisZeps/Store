<?php 

namespace application\controllers;

use application\core\Controller;

class FurnitureController extends Controller{
	
	public function insertAction(){
		$this->model->insertFurniture($_POST);
		$this->view->redirect('/');
	}
	
}