function validateForm() {
    let x = document.forms["login"]["username"].value;
    let y = document.forms["login"]["pass"].value;
  
    if ( x == "" && y == "") 
    {
        alert( "Empty submission");
        document.getElementById('message').innerHTML =" **please fill the name field";
        document.getElementById('message2').innerHTML =" **please fill the password field";
        return false;
        
    }
    else if (x == "") {
      alert("Username is empty");
      document.getElementById('message').innerHTML =" **please fill the name field";
      return false;
    }
    else if (y== "") 
    {
        alert("Password is empty");
        document.getElementById('message2').innerHTML =" **please fill the password field";
        return false;
    }
  }
  function validateForm2() {
    let y = document.forms["login"]["phn"].value;
    let z = document.forms["login"]["amnt"].value;
  
    if (  y == "" && z == "" ) 
    {
        alert( "Empty submission");
       
        document.getElementById('message2').innerHTML =" **please fill the password field";
        document.getElementById('message3').innerHTML =" **please fill the name field";
        document.getElementById('message4').innerHTML =" **please fill the password field";
        return false;
        
    }
    else if (y== "") 
    {
        alert("Account number not given");
        document.getElementById('message2').innerHTML =" **please fill the password field";
        return false;
            }
            else if (z== "") 
    {
        alert("Donation Amount not given");
        document.getElementById('message3').innerHTML =" **please fill the password field";
        return false;
    }
    
  }