<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('bg.jpg');

}

.header {
  overflow: hidden;
  background: rgba(0, 0, 0, 0.9);
  padding: 20px 10px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 70px;
  font-weight: bold;
  font-family: "Brush Script MT";

}
.header a.logo:hover {

    background-color: black;
  color: white;
}

.header a:hover {
  background-color: dodgerblue;
  color: white;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
  border-radius: 4px;

}

.header-right {
  float: right;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font-family: "Arial";
  opacity:1.0;

}
.intro {
    background: white;
  opacity: 0.7;
  border: 2px solid black;
  margin: 430px;
  margin-top:150px;
  border-radius: 20px;
  font-family: "Brush Script MT";

  font-size:65px;


}
.intro p{
    margin: 10%;
  font-weight: bold;
  color: #000000;
  font-family: "Brush Script MT";
  font-size:75px;

}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">Thunderbolt</a>
  <div class="header-right">
    <a class="active" href="#home">Login</a>
    <a href="#contact">Sign Up</a>
    <a href="#about">About</a>
    <a href="#about">Why Thunderbolt?</a>
    <a href="#about">Contact Us</a>

  </div>
</div>

<div class="intro">
<center>
  <p>Thunderbolt helps you stay connected !</p>

</center>

</div>


</body>
</html>