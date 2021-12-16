<?php  

namespace application\models;

use application\core\Model;

class Book extends Model{

	public function insertBook($params){
		$this->db->insertProduct($params);
	}

	public function deleteBook($sku){
		$this->db->deleteProduct($sku, 'books'); 
	}

	public function getBooks(){
		$result = $this->db->getData('books');
		return $result; 
	}
} 