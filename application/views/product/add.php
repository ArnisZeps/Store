 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="../application/views/product/styleAddPage.css">
 	<link rel="stylesheet" type="text/css" href="../application/views/product/bootstrap-grid.css">
 	<script type="text/javascript" src="../application/views/product/changeForm.js"></script>
 	<script type="text/javascript" src="../application/views/product/checkForm.js"></script>
 	<title></title>
 </head>
 <body>
 	<div class="row">
	  	<div class="col-md-8"><h1>Product add</h1></div>
	  	<div class="col-md-2"></div>
	  	<div class="col-md-2"><button type="submit" form="productForm" id="save">Save</button></div>
	</div>
	<hr>
 	<form method="POST" onsubmit="return checkForm()" action="" id="productForm"> 
 		<div class="addProduct"><label for="name">Name</label>
 		<input type="text" name="name" id="name"></div>
 		<div class="addProduct"><label for="sku">SKU</label>
 		<input type="text" name="sku" id="sku"></div>
 		<div class="addProduct"><label for="price">Price</label>
 		<input type="text" name="price" id="price"></div>
 		<div class="addProduct"><label for="type">Type</label>
 		<select id="type" name="type" onchange="changeForm()">
		  <option></option>
		  <option value="dvd">DVD - disc</option>
		  <option value="furniture">Furniture</option>
		  <option value="book">Book</option>
		</select></div>
		<div id="dependsOnType"></div>
 	</form>
 </body>
 </html>
