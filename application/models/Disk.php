<?php  

namespace application\models;

use application\core\Model;

class Disk extends Model{
	
	public function insertDisk($params){
		$this->db->insertProduct($params);
	}
	
	public function deleteDisk($sku){
		$this->db->deleteProduct($sku, 'disks'); 
	}

	public function getDisks(){
		$result = $this->db->getData('disks');
		return $result;
	}
} 