<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="application/views/main/bootstrap-grid.css">
	 <link rel="stylesheet" type="text/css" href="application/views/main/indexStyle.css">
	 <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	 <script type="text/javascript" src="application/views/main/headerSelect.js"></script>
	<title></title>
</head>
<body>
	<div class="row">
	  	<div class="col-md-8"><h1>Product list</h1></div>
	  	<div class="col-md-2">
	  		<select id="headerSelect" onchange="changeButton()">
	  			<option></option>
				<option value="add">Add new product</option>
				<option value="delete">Delete action</option>
			</select>
	  	</div>
	  	<div class="col-md-2" id="apply"><button>Apply</button></div>
	</div>
	<hr>
	<div class="container">
		<form method="POST" action="/product/delete" name="deleteProduct" id="deleteProduct">
			<?php $cols = 4; ?>
			<?php $counter = 1; ?>
			<?php foreach ($books as $key => $book) {?>
				<?php if(($counter % $cols) == 1) echo '<div class="row">'; ?>
				<?php echo '<div class="col-md-3">' ?>
				<input type="checkbox" name="delete[]" class="delete" value="<?php echo $book['sku']; ?>">
				<div class="content">
					<?php echo $book['name'];?>
				</div>
				<div class="content">
					<?php echo $book['price'].'$';?>
				</div>
				<div class="content">
					<?php echo $book['weight'].'kg';?>
				</div>
				<div class="content">
					<?php echo 'SKU: '.$book['sku'];?>
				</div>
				<?php echo '</div>' ?>
				<?php if(($counter % $cols) == 0) echo '</div>'; ?>
				<?php $counter++; ?>
			<?php } ?>
			<?php foreach ($disks as $key => $disk) {?>
				<?php if(($counter % $cols) == 1) echo '<div class="row">'; ?>
				<?php echo '<div class="col-md-3">' ?>
				<input type="checkbox" name="delete[]" class="delete" value="<?php echo $disk['sku']; ?>">
				<div class="content">
					<?php echo $disk['name'];?>
				</div>
				<div class="content">
					<?php echo $disk['price'].'$';?>
				</div>
				<div class="content">
					<?php echo $disk['size'].'MB';?>
				</div>
				<div class="content">
					<?php echo 'SKU: '.$disk['sku'];?>
				</div>
				<?php echo '</div>' ?>
				<?php if(($counter % $cols) == 0) echo '</div>'; ?>
				<?php $counter++; ?>
			<?php } ?>
			<?php foreach ($furniture as $key => $currentFurniture) {?>
				<?php if(($counter % $cols) == 1) echo '<div class="row">'; ?>
				<?php echo '<div class="col-md-3">' ?>
				<input type="checkbox" name="delete[]" class="delete" value="<?php echo $currentFurniture['sku']; ?>">
				<div class="content">
					<?php echo $currentFurniture['name'];?>
				</div>
				<div class="content">
					<?php echo $currentFurniture['price'].'$';?>
				</div>
				<div class="content">
					<?php echo 'Dimensions: '.$currentFurniture['height'].'X'.$currentFurniture['width'].'X'.$currentFurniture['length'];?>
				</div>
				<div class="content">
					<?php echo 'SKU: '.$currentFurniture['sku'];?>
				</div>
				<?php echo '</div>' ?>
				<?php if(($counter % $cols) == 0) echo '</div>'; ?>
				<?php $counter++; ?>
			<?php } ?>
		</form>
	</div>
</body>
</html>