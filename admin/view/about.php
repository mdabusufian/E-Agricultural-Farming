<?php include './header.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 50%;
  margin-bottom: 16px;
  padding: 0 8px;
  
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color: #c4d0d8;
  
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: #d47b00;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p>Some text about who we are and what we do.</p>
 
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../../images/tanvir.jpg" alt="Jane" style="width: 250px; ;height:50%">
      <div class="container">
        <h2>Tanvir Ahmed</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>tanvir@gmail.com</p>
      </div>
    </div>
  </div>

  
  <div class="column">
    <div class="card">
      <img src="../../images/naser.jpg" alt="John" style="width: 282px; height:50% ;">
      <div class="container">
        <h2>Abdullah Al Nasser</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>naser@gmail.com</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
