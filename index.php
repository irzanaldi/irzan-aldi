<!DOCTYPE html>
<html>
<head>
	<title>Pemuda Muhamadiyah</title>
	<link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>
	<section>
	<div class="nav">
	<a href="" style="float: left;margin-left:  10px;">LOGO</a>
	<a href="">About</a>
	<a href="">Contact</a>
	<a href="">Event</a>
	<a href="">Galery</a>
	<a href="">Home</a>
</div>
	<div class="slide ">
		<img src="rotating-coffee-beans-1920x1080-full-hd_snia02oo__F0000.png" style="width: 100%;">
	</div>
	<div class="slide ">
		<img src="Cafe-Wallpapers-HD-1920x1080.jpg" style="width: 100%;">
	</div>

	<div class="slide ">
		<img src="0952e9d8c44d9e1fcc1e9b6da06ca49c.jpg" style="width: 100%;">
	</div>
</section>
<div class="teks">

	<h1>
		Pemuda Muhamadiyah 
	</h1>
<p>
	Pemuda Muhamadiyah<br><br>

VISI <br><br>


MISI <br><br>
</p>	
</div>

<h2 style="margin-left: 10%;">Galery</h2>
 <div class="tab">
 	<h1 style="text-align: center;">Galery Kegiatan</h1>
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Kegiatan 1</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Kegiatan 2</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Kegiatan 3</button>
</div>

<div id="London" class="tabcontent">
  <h3>kegiatan 1</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<br><br>

<h2 style="margin-left: 10%;">EVENT</h2>







<script type="text/javascript">
	var index = 0;
	tampil();


	function tampil(){
		var i;
		var slide = document.getElementsByClassName("slide");

		for (var i = 0; i < slide.length; i++) {
			slide[i].style.display = "none";
		} index++;
		if(index>slide.length){index=1}
			slide[index-1].style.display="block";
		setTimeout(tampil,5000);


	}



function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
} 
document.getElementById("defaultOpen").click();
</script>
</body>
</html>