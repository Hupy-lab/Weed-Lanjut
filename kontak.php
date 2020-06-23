<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="header.css"/>
	<title>Beranda Sekolah Alam Ar-Ridho</title>
	<script src="prefixfree.min.js"></script>
	<!-- leaflet maps -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
		
</head>
<div class="header">
		<img src="sekolahalam.png"/>
			<div class="header-right">
				
			<a href="./Beranda.php">Home</a>
	  		<a href="./About.php">About Us</a>
	  		<a href="./SD.php">SD</a>
	  		<a href="./SMP.php">SMP</a>
			<a href="./SMM.php">SMM</a>
			<a href="./Input.php">Absen</a>
			<div id="demo"></div>
			  
	</div>
</div>
	<body>

		<canvas style="position:absolute;z-index:-1;"></canvas>
		<script src="stats.js"></script>
		<script src="zepto.min.js"></script>
		<script src="index.js"></script>
	<center>
		<img class="mySlides" src="Untitled1.png">
		<img class="mySlides" src="Untitled2.png">
		<img class="mySlides" src="Untitled3.png">
	</center>


	<script>
		var slideIndex = 0;
		carousel();

		function carousel() {
 		 var i;
 		 var x = document.getElementsByClassName("mySlides");
 		 for (i = 0; i < x.length; i++) {
 		 x[i].style.display = "none";
 		 }
 		 slideIndex++;
 		 if (slideIndex > x.length) {slideIndex = 1}
  		x[slideIndex-1].style.display = "block";
 		 setTimeout(carousel, 2000);
		}
	</script>

	<div class="mycontent">
	<table>
		<td width="15%" class="content" valign="top">
<!-- CONTENT SATU -->
			<table>
				<tr>

				</tr>
				<tr>
					<tr>
						<div class="ja-moduletable moduletable  clearfix">
							<h3><span>+	Log In + </span></h3>
							<img src="sekolahalam.png" alt="Trulli" width="140" height="100">
							<button onclick="myFunctionx()" class="button button4" style="width:85%" >Log in</button>
							<p id="demo"></p>
							<script>
							function myFunctionx() {
							var txt;
							var person1 = prompt("Please enter your name:");
							var person2 = prompt("Please enter your password");
									if (person1 == null || person2 == null) {
										txt = "User cancelled the prompt.";
									} else {
										txt = "Hello " + person1 + "! How are you today?";
									}
									document.getElementById("demo").innerHTML = txt;
								}
							</script>
						</div>
					</tr>
				</tr>
				<tr>
					<h3><span>+ Map + </span></h3>
					<div id="mapid" style="width: auto; height: 400px;"></div>
				</tr>
			</table>
		</td>
		<td class="content" valign="top">
<!-- CONTENT DUA -->
			<table>
				<tr>
					<center>
					<h3><span>+ Click Link Di Bawah Ini  +</span></h3>
					</center>
                </tr>
                <center>
                        <p>http://sekolahalamarridho.sch.id</p>
                </center>
				
			</table>
		</td>
		<td width="15%" class="content" valign="top">
<!-- CONTENT TIGA -->
			<table>
				<tr>
					<h3><span>+ Hotline PSB +</span></h3>
					<div class="custom _badge badge-hot"  >
							<p>Kantor : 024-76484001<br />Arsy : <span style="font-size: 12.16px;">0838-3829-1880</span><br /><br /><img src="5931f-whatsapp-icon.png" border="0" alt="" width="17" height="17" /> : 0838-3829-1880</p>
						<p><a href="https://twitter.com/arridhoofficial" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAlwSFlzAABcRQAAXEUBuS1iLAAAAsdJREFUWEftVk1rE1EUTf5KC7aJ2tZabVEEEQUXQjdSqlJ0KagIIkhX1ZW4FLoQdeNCRLvowkURN0UsuFBEFERsWmsVbbUfdjIfmUzmek6a0Wkz896MCgHJg0fCm3n3nXvuuedNtrtg+JlsNptp1OieKUojZ6aRh/PsJoD/i4EdqGlHoShdKYT9zxjYioNzmHtm03WVEkAnAm7DZGaqbsnjnaPzloyvleW55cmNZVf2zZrShXVdl8UC4KH7P5hyeM6UtmlD2jGjqCXlh/DOjFsRjiXPlzsrrhys7ftjANsR+ORnSxYR8N4PV4Y+WcK1LQDSGWKEaw+ReTD82p85ADrzxZbctJoFJQM9qOfj4nrwMiI/MctyDkHJBAOzPKcAcj33+mHhAZPge3FMKDXA7AaR+bvSxiOmTE+GELj1vSETxu/so0C8tCuys9YdjLdZT0oARH59qRSZnVHxZXS5JCv4VQ0+JUsU9JGPpvSB1bCWlAD44gEI8RGytDQHqUDMQw+TKN/Vb47sRszEAFg39vcJlsGJq7SSgF8Pn6E9Ly040sv2DIlYa0Ss24WvtjhqppUo3jpetZPOQsA9ODysAy0AskAQx8HCGIKU/HRI2D0DMKlWtG+uYOhFGOV6XGuB4m9CdGnHU1BPR4xz0zoGeqFSWitVG+5ddgTdjXabVI8Wsj8G5hL7AMXRj1ah2fRBLHQ92jB/CeY01l+hr5OOy4tO9YJS2XGkBkawkQZCi70FX3+A2r9O0QU2Mr+CliOTuousDgA35GGz56F89m/a8cL2qsbDy0t3eOw3ITcywF6U4dp3R94ge9xJsWMNopiC0Qwv2LKrtjfJ4dqP0uD2Y1CaEUtzGyW5j5LcXXVlFDZ9EYf2o82Cd3k9667g8PNEPsCOICOBKCnMYHItj/5O8xmWGsDmjEhvUop1bCRiQBfkb543ATQZ+Al8km6HVlJPiwAAAABJRU5ErkJggg==" border="0" width="17" height="17" /></a> : @arridhoofficial<br /><a href="https://www.facebook.com/alamarridho.official" target="_blank"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAPAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAEAAQAwERAAIRAQMRAf/EAGYAAQEAAAAAAAAAAAAAAAAAAAYFAQEBAQAAAAAAAAAAAAAAAAAEBgMQAAICAgICAwEAAAAAAAAAAAECAwQRBQAGIRIxQXETEQABBAEEAwAAAAAAAAAAAAABABECA5EhQXESMfEE/9oADAMBAAIRAxEAPwAtFFYtWEiiR57M7hI40Bd3dzgAAZLMxPKkkAKaAdMu4dKqda69qLJi2Q3NyOCxZnkjEdKL+quxrhsCRbCFBlSfjJ4am82TI06jPPCTdSIRHlzj2oNfWRwSRzLslrWoirj1IDxyKc+GDggq32ObGT7I40Srvu2h30GlgrbtrYqaytFYrs7FXvRhw7kOwBkb2x7+f3hvnr6GRIZ5HCRfZ2ZjsMr/2Q==" border="0" /></a> : SA Ar-Ridho Official<br /><a href="https://www.facebook.com/profile.php?id=100008936469169" target="_blank"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAPAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAEAAQAwERAAIRAQMRAf/EAGYAAQEAAAAAAAAAAAAAAAAAAAYFAQEBAQAAAAAAAAAAAAAAAAAEBgMQAAICAgICAwEAAAAAAAAAAAECAwQRBQAGIRIxQXETEQABBAEEAwAAAAAAAAAAAAABABECA5EhQXESMfEE/9oADAMBAAIRAxEAPwAtFFYtWEiiR57M7hI40Bd3dzgAAZLMxPKkkAKaAdMu4dKqda69qLJi2Q3NyOCxZnkjEdKL+quxrhsCRbCFBlSfjJ4am82TI06jPPCTdSIRHlzj2oNfWRwSRzLslrWoirj1IDxyKc+GDggq32ObGT7I40Srvu2h30GlgrbtrYqaytFYrs7FXvRhw7kOwBkb2x7+f3hvnr6GRIZ5HCRfZ2ZjsMr/2Q==" border="0" /></a> : PAUD Alam Ar-Ridho<br /><a href="https://www.facebook.com/smpalam.arridho" target="_blank"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAPAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAEAAQAwERAAIRAQMRAf/EAGYAAQEAAAAAAAAAAAAAAAAAAAYFAQEBAQAAAAAAAAAAAAAAAAAEBgMQAAICAgICAwEAAAAAAAAAAAECAwQRBQAGIRIxQXETEQABBAEEAwAAAAAAAAAAAAABABECA5EhQXESMfEE/9oADAMBAAIRAxEAPwAtFFYtWEiiR57M7hI40Bd3dzgAAZLMxPKkkAKaAdMu4dKqda69qLJi2Q3NyOCxZnkjEdKL+quxrhsCRbCFBlSfjJ4am82TI06jPPCTdSIRHlzj2oNfWRwSRzLslrWoirj1IDxyKc+GDggq32ObGT7I40Srvu2h30GlgrbtrYqaytFYrs7FXvRhw7kOwBkb2x7+f3hvnr6GRIZ5HCRfZ2ZjsMr/2Q==" border="0" /></a> : SMP Alam Ar-Ridho<br /><br /><strong>Alamat :</strong><br />Jl. Kelapa Sawit I Blok AA Bukit Kencana Jaya Meteseh Tembalang <br />Semarang Jawa tengah 50271<br />sekolahalamarridho@<br />yahoo.com</p></div>
								</div>
							</div></div></div>
							</div>
				</tr>
				<tr>
						<h3><span>+ Quote +</span></h3>
    				"Ilmu itu berkembang biak dengan menginfakkannya. Jika orang berilmu memberikan ilmunya kepada manusia dan menginfakkannya pada mereka, maka mata air ilmunya memancar kemudian ilmunya bertambah banyak, kuat, dan menonjol. Ilmu yang dipelajarinya terjaga dengan ia mengajarkannya kepada orang lain, bahkan ia mendapat pasokan ilmu baru yang sebelumnya belum ia ketahui"
					<br><br>
					<b>-- Ali bin Abu Thalib ra --</b>
				</tr>
			</table>
		</td>
	</table>
	</div>			
	</div>
	<script src="map.js"></script>
	<script src="Ajax.js"></script>
	</body> 
</html>