<?php  

namespace application\models;

use application\core\Model;

class Furniture extends Model{

	public function insertFurniture($params){
		$this->db->insertProduct($params);
	}

	public function deleteFurniture($sku){
		$this->db->deleteProduct($sku, 'furniture'); 
	}

	public function getFurniture(){
		$result = $this->db->getData('furniture');
		return $result;
	}
} 