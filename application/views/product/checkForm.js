function checkForm(){

	var name = document.getElementById('name');
	var sku = document.getElementById('sku');
	var price = document.getElementById('price');
	var type = document.getElementById('type');
	var size = document.getElementById('size');
	var weigth = document.getElementById('weigth');
	var heigth = document.getElementById('heigth');
	var length = document.getElementById('length');
	var width = document.getElementById('width');

	if (name.value == "") {
		alert("Please fill all fields");
		return false;
	}else if (sku.value == "") {
		alert("Please fill all fields");
		return false;
	}else if (price.value == "") {
		alert("Please fill all fields");
		return false;
	}else if (type.value == "") {
		alert("Please fill all fields");
		return false;
	}else if (type.value == "book") {
		if (weigth.value == "") {
			alert("Please fill all fields");
			return false;
		}
	}else if (type.value == "dvd") {
		if (size.value == "") {
			alert("Please fill all fields");
			return false;
		}
	}else if (type.value == "furniture") {
		if (heigth.value == "") {
			alert("Please fill all fields");
			return false;
		}else if (length.value == "") {
			alert("Please fill all fields");
			return false;
		}else if (width.value == "") {
			alert("Please fill all fields");
			return false;
		}
	}else{
		return true;
	}
	
}