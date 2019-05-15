
var models = ["hourglasse", "PigShip", "DemonGirl"];

function createButton(value) {
	var context = document.getElementById("myDropdown");
    var button = document.createElement("input");
    button.type = "button";
    button.classList.add("btn");
    button.classList.add("btn-info");
    button.value = value;
    button.onclick = function() { doFunction(this.value); };
    context.appendChild(button);
}

window.onload = function() {
	makeDropdown();
	models.forEach(createButton);

};


function makeDropdown(){
	var dropDiv = document.createElement("div");
	dropDiv.classList.add("dropdown");
	//dropDiv.classList.add("col-md-4");
	var container = document.getElementById("modelsPicker");
	container.appendChild(dropDiv);
	var dropBtn = document.createElement("input");
	dropBtn.type = "button";
	dropBtn.classList.add("dropbtn");
	dropBtn.classList.add("btn");
	dropBtn.classList.add("btn-info");
	dropBtn.classList.add("btn-block");
	dropBtn.value = "Models";
	dropBtn.onclick = myFunction;
	dropDiv.appendChild(dropBtn);
	var contentBtn = document.createElement("div");
	contentBtn.classList.add("dropdown-content");
	contentBtn.id = "myDropdown";
	dropDiv.appendChild(contentBtn);


}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
