function validateForm() {
    let x = document.forms["reg"]["username"].value;
    let y = document.forms["reg"]["pass"].value;
    let a = document.forms["reg"]["firstname"].value;
    let b = document.forms["reg"]["lastname"].value;
    let c = document.forms["reg"]["gender"].value;
    let d = document.forms["reg"]["dob"].value;
    let e = document.forms["reg"]["add"].value;
    let f = document.forms["reg"]["mail"].value;
  
  
  
    if ( x == "" && y == "" && a == "" && b == "" && c == "" && d == "" && e == "" && f == "") 
    {
        alert( "Empty submission");
        document.getElementById('message').innerHTML =" **please fill the username field";
        document.getElementById('message1').innerHTML =" **please fill the password field";
        document.getElementById('message2').innerHTML =" **please fill the first name field";
        document.getElementById('message3').innerHTML =" **please fill the last name field";
        document.getElementById('message4').innerHTML =" **please fill the date of birth field";
        document.getElementById('message5').innerHTML =" **please fill the address field";
        document.getElementById('message6').innerHTML =" **please fill the email field";
        return false;
    }
    else if (x == "") {
      alert("Username is empty");
      document.getElementById('message').innerHTML =" **please fill the username field";
      return false;
    }
    else if (y== "") 
    {
        alert("Password is empty");
        document.getElementById('message1').innerHTML =" **please fill the password field";
        return false;
    }
    else if (a== "") 
    {
        alert("First Name is empty");
        document.getElementById('message2').innerHTML =" **please fill the first name field";
        return false;
    }
    else if (b== "") 
    {
        alert("Last Name is empty");
        document.getElementById('message3').innerHTML =" **please fill the last name field";
        return false;
    }
    else if (c== "") 
    {
        alert("Gender is not selected");
        return false;
    }
    else if (d== "") 
    {
        alert("Date of birth is not given");
        document.getElementById('message4').innerHTML =" **please fill the date of birth field";
        return false;
    }
    else if (e== "") 
    {
        alert("Address is empty");
        document.getElementById('message5').innerHTML =" **please fill the address field";
        return false;
    }
    else if (f== "") 
    {
        alert("Email is empty");
        document.getElementById('message6').innerHTML =" **please fill the email field";
        return false;
    }
  
  }