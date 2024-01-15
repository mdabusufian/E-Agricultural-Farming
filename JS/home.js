var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); 
}
function validateForm() {
  let x = document.forms["post"]["details"].value;
  let y = document.forms["post"]["photo"].value;

  if ( x== "" && y == "")
   {
   	alert("Empty submission");
    return false;
   }
   else if (x == "") {
    alert("write something ");
    return false;
  }
  else if (y == "") {
    alert("Upload a photo");
    return false;
  }
 }
 function validateForm2() {
  let x = document.forms["post"]["pname"].value;
  let y = document.forms["post"]["photo"].value;
  let z = document.forms["post"]["price"].value;

  if ( x== "" && y == "" && z == "")
   {
   	alert("Empty submission");
    return false;
   }
   else if (x == "") {
    alert("Enter A name ");
    return false;
  }
  else if (y == "") {
    alert("Upload a photo");
    return false;
  }
  else if (z == "") {
    alert("Give a price");
    return false;
  }
 }