<html>
<head>
<title>
The Pizza Shop
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body onLoad="typee();">
<div class="navmain">
<img src="hut.png">
<div class="nav">
<a href="pizza.php">Home</a>
<a href="about.php">About Us</a>
<a href="menu.php">Menu</a>
<a href="reviews.php">Reviews</a>
</div>
</div>
<div class="p1">
<div class="tag">
<p id="demo"></p>
</div>
</div>
<div class="contact">
<center>
<div class="loc">LOCATION<br>
6705 W Highway 290,<br> Ste 601
Austin, Texas<br>Pincode-78735</div>
<div class="hours">
HOURS<br>
Mon - Fri: 10:30 am - 6:30 pm<br>
Sat: 10:00 am - 5:00 pm</div>

<div class="con">
CONTACT<br>
Ph. (512) 892-2233

For weddings: weddings@pizzahut.com<br><br>

All other inquiries:<br>

info@pizzahut.com
</div>
</div>
	<div class="links">
		<br><br>
		<img src="fb.png">
		<img src="in.png">
		<img src="tw.png">
	</div>
<br><br><br><br><br><br><br><br><br><br>
<div class="chefs">
<center>
<h1>OUR CHEFS</h1><hr width="60%"><br><br>
<div class="container" style="float: left;">
  <img src="c1.jpg" class="image">
  <div class="middle">
    <div class="text">Rosie Doe</div>
  </div>
</div>
<div class="container" style="float: left;">
  <img src="c2.jpg" class="image">
  <div class="middle">
    <div class="text">Melvin Soni</div>
  </div>
</div>
<div class="container" style="float: right;">
  <img src="c3.jpg" class="image">
  <div class="middle">
    <div class="text">William Louis</div>
  </div>
</div>

	</div>
	<div class="p2">
</div>
	<div class="aboutus">
		<img src="about.jpg" height="450px" width="50%">
		<div class="matter">
			<h1>ABOUT US</h1><hr width="60%" color="white">
		<p>Hut swag is an American restaurant chain and international franchise which was founded in 1958 by Dan and Frank Carney.</p><p> The company is known for its Italian-American cuisine menu, including pizza and pasta, as well as side dishes and desserts. Hut swag has 16,796 restaurants worldwide as of March 2018, making it the world's largest pizza chain in terms of locations. It is a subsidiary of Yum! Brands, Inc., one of the world's largest restaurant companies.</p>
	</div>
</div>
</center>
	</div>
</div>
	<div class="quote">
		<h2>"Count the memories, not the calories! "</h2>
	</div>
	<table width="100%" cellpadding="0" cellspacing="0" class="gallery">
<tr>
<td><img src="g-1.jpg" /></td>
<td><img src="g-2.jpg" /></td>
<td><img src="g-3.jpg" /></td>
<td><img src="g-4.jpg" /></td>
</tr>
</table>
<div class="services">
	<center>
<h1>OUR SERVICES</h1><hr width="60%" color="white"><br><br>
	<table cellpadding="0" cellspacing="20">
<tr>
<td align="center"><img src="s6.png" /><h3>HEALTHY FOODS</h3>
We provide best quality of pizza. There are many pizza 
recipes available with us.You can also modify toppings,
 pizza base according to your pereference.
</td>
<td align="center">
<img src="express.png" /><h3>FASTEST DELIVERY</h3>
Have your pizza with fastest delivery provided by us. 
Your hunger, now does not have to wait for long. Get 
your pizza at home or at work place.
</td>
<td align="center">
<img src="health.png" /><h3>ORIGINAL RECIPIES</h3>
We use best quality and fresh Vegetables. Our recipies 
are not copied. They are unique in each and every way.
There are many pizza recipes available with us.
</td>
</tr>
</table>
</div>
<div class="footer">ALL RIGHTS RESERVED</div>
</center>
</body>
</html>
<script>
var j=0;
var text=' Discover the real PIZZAAA!'
var speed=150;
function typee(){
if(j<text.length){
document.getElementById("demo").innerHTML += text.charAt(j);
j++;
setTimeout(typee,speed);
}
}
</script>