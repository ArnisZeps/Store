function changeButton(){
	var selected = document.getElementById("headerSelect").value;
	var button = document.getElementById("apply"); 
	if (selected == "add"){
		button.innerHTML = "<a href='product/add'><button>Apply</button></a>"; 
	}else if (selected == "delete") {
		button.innerHTML = "<button type='submit' form='deleteProduct' id='delete'>Delete</button>"; 
	}
}