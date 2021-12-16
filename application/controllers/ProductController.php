<?php 

namespace application\controllers;

use application\models\Book;
use application\models\Disk;
use application\models\Furniture;
use application\core\Controller;

class ProductController extends Controller{
	
	public function addAction(){
		$this->view->render('Product add page');
	}
	
	public function deleteAction(){
		extract($_POST); 
		$bookModel = new Book;
		$diskModel = new Disk;
		$furnitureModel = new Furniture;

		$books = $bookModel->getBooks();
		$disks = $diskModel->getDisks();
		$furniture = $furnitureModel->getFurniture();

		foreach ($delete as $key => $sku) {
			foreach ($books as $key => $book) {
				if ($sku == $book['sku']) {
					$bookModel->deleteBook($sku); 
					break; 
				}
			}
		}
		foreach ($delete as $key => $sku) {
			foreach ($disks as $key => $disk) {
				if ($sku == $disk['sku']) {
					$diskModel->deleteDisk($sku); 
					break; 
				}
			}
		}
		foreach ($delete as $key => $sku) {
			foreach ($furniture as $key => $current) {
				if ($sku == $current['sku']) {
					$furnitureModel->deleteFurniture($sku); 
					break; 
				}
			}
		}
		$this->view->redirect('/');
	}
}