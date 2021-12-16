function changeForm() {
var formContent = document.getElementById("dependsOnType"); 
var formController = document.getElementById("productForm");
var type = document.getElementById("type").value; 

if (type == "book") {
	formContent.innerHTML = "<div class='addProduct'><label for='weight'>Weight</label> <input type='text' name='weight' id='weigth'></div><div class='help'>Please provide book weigth in Kg!</div>";
	formController.action = "/book/insert";
	}
else if (type == "dvd") {
	formContent.innerHTML = "<div class='addProduct'><label for='size'>Size</label> <input type='text' name='size' id='size'></div><div class='help'>Please provide disc size in MB!</div>";
	formController.action = "/dvd/insert";
	}
else if (type == "furniture"){
	formContent.innerHTML = "<div class='addProduct'><label for='height'>Height</label> <input type='text' name='height' id='heigth'></div><div class='furniture'><label for='width'>Width</label> <input type='text' name='width' id='width'></div> <div class='furniture'><label for='length'>Length</label> <input type='text' name='length' id='length'></div><div class='help'>Please provide dimensions in HxWxL format!</div>";
	formController.action = "/furniture/insert";	
	}
}

