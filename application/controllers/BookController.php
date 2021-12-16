<?php 

namespace application\controllers;

use application\core\Controller;

class BookController extends Controller{
	
	public function insertAction(){
		$this->model->insertBook($_POST);
		$this->view->redirect('/');
	}

}