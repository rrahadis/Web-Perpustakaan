<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Sistem Perpustakaan SMA BBS</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Questrial');

		body{
			font-family: 'Questrial', sans-serif;
			font-size: 14px;
			vertical-align: middle;
		}
		
		#header{
			font-size: 40px;
			padding: 0px;
			background-color: #da251c;
			color : #fff;
			font-family: 'Questrial', sans-serif;
			position: relative;
		}
				#menu{
			background-color: #ff9a09;
			margin-top: -20px;
			margin-left: 20%;
			padding-left: 300px;
			padding-right: 300px;
			position: absolute;
			}
			#menu ul{				/*untuk tulisan dimenu semua*/
				list-style: none;
				margin: 0px;		
				padding: 0px;
				text-align-last: center;
				font-size: 16px;

			}
			#menu ul li.utama{
				display: inline-table;

			}
			#menu ul li:hover{
				background: #865816;
			}
			#menu ul li a{
				display: block;
				text-decoration: none;
				line-height: 40px;
				padding:0 10px;
				color: #fff;

			}
			.utama ul{
				display: none;
				position: absolute;
				z-index: 2;
			}
			.utama:hover ul{
				display: block;
			}
			.utama ul li{
				display: block;
				background-color: #ff9a09;  /*untuk tulisan dihover*/
				width: 140px;
				font-size: 14px;
			}
			.utama ul li a:hover{
				background-color: #865816;
			}

		#isi{
			padding: 20px;
			border: 100px solid white;
			padding-bottom: 70px;
		
		}
		#footer{
			text-align: center;
			padding-bottom: -20px;
			padding: 15px;
			color: white;
			background-color: #ff9a09; 
		}
		#utama{
	width: 300px;
	margin: 0px auto;
	margin-top: 0%;
	}

	#judul{
	padding: 15px;
	text-align: center;
	color: #fff;
	font-size: 20px;
	background-color: #ff9a09;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
	border-bottom: 3px solid #ff9a09;
	}
	#isilogin{
	background-color: #eaeaec;
	padding: 20px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;

}
input{
	padding: 10px;
	margin-bottom: 10px;
}
.as{
	width: 230px;
}
.ase{
	background-color: Red;
	border-radius: 10px;
	color: #fff;

}

	</style>
</head>
<body>
		<div id ="header">
				<img src="https://1.bp.blogspot.com/-PJVt4x5hjEw/XO972lliiYI/AAAAAAAAF5Q/hshIUvLurWcUI15QBVStInjAWUo2KXOeQCLcBGAs/s1600/headersa.png" width="100%" height="100%" >
		</div>
	
		<div id = "menu">
			<ul>
			   <li class="utama">
			   	<a href="{{route(('index'))}}">Profile</a>
			   </li>
			   <li class="utama">
			   	<a href="{{route(('data-buku'))}}">Data Buku</a>
			   	 <ul>
			   		<li class="kelas"><a href="{{route(('kelas-1'))}}">Kelas 1</a></li>
			   		<li class="kelas"><a href="{{route(('kelas-2'))}}">Kelas 2</a></li>
			   		<li class="kelas"><a href="{{route(('kelas-3'))}}">Kelas 3</a></li>
			   	</ul>
			   </li>
			   <li class="utama">
			   	<a href="{{route(('login'))}}">admin</a>
			   </li>
			</ul>
		
		</div>

		
	
		<div id ="isi">
		<div id="utama">
		<div id="judul">
			Halaman login admin
		</div>
		<div id="isilogin">
					<form action="" method="post">
				<div>
					<input type="text" name="user" placeholder="Username" class="as">
				</div>
				<div style="margin-top: 10px;">
					<input type="password" name="pass" placeholder="Password" class="as">
				</div>
				<div class="butin">
				<button type="button" class="btn btn-warning" ><a href ="{{route(('get'))}}">login</a></button>
				</div>


			</form>
   	
		</div>
		
	</div>
		</div>
		<div id ="footer">
		Copyright 2018 - Perpustakaan IT SMA Bina Bangsa Sejahtera Bogor
		</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  </body>

</body>
</html>



