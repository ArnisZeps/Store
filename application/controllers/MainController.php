<?php 
namespace application\controllers;

use application\models\Book;
use application\models\Disk;
use application\models\Furniture;
use application\core\Controller;

class MainController extends Controller{

	public function indexAction(){
		$bookModel = new Book;
		$diskModel = new Disk;
		$furnitureModel = new Furniture;

		$books = $bookModel->getBooks();
		$disks = $diskModel->getDisks();
		$furniture = $furnitureModel->getFurniture();

		$vars['books'] = $books;
		$vars['disks'] = $disks;
		$vars['furniture'] = $furniture;
		$this->view->render('Main page', $vars);
	}

}