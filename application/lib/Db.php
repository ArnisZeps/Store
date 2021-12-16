<?php 

namespace application\lib;
use PDO;
class Db{
	protected $db;

	function __construct(){
		$config = require 'application/config/db.php';
		$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['user'], $config['password']); 
	}

	public function query($sql){
		$query = $this->db->query($sql);
		return $query;
	}

	public function insertProduct($params){
		extract($params);
		$sql = '';
		switch ($type) {
			case 'book':
				$sql = "INSERT INTO books (id, name, weight, price, sku, type) VALUES (NULL, '$name','$weight','$price','$sku','$type');";
				break;
			case 'dvd':
				$sql = "INSERT INTO disks (id, name, size, price, sku, type) VALUES (NULL, '$name','$size','$price','$sku','$type');";
				break;
			case 'furniture':
				$sql = "INSERT INTO furniture (id, name, height, width, length, price, sku, type) VALUES (NULL, '$name', '$height', '$width', '$length', '$price', '$sku', '$type');";
				break;
			default:
				break;
		}
		$this->db->query($sql);
	}


	public function deleteProduct($sku, $tableName){
		$sql = "DELETE FROM $tableName WHERE sku='$sku'";
		$this->db->query($sql); 
	}


	public function getData($tableName){
		$sql = "SELECT * FROM $tableName";
		$result = $this->query($sql);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

}