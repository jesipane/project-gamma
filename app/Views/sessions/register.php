<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="\assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        body{
	font-family: sans-serif;
	background: #d5f0f3;
}
 
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_label{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
</style>
</head>
<body>
<div class="kotak_login">
	<p class="tulisan_login">REGISTER</p>
	<div class="col-12 col-md-6">
		<div class="container mt-5">
			<form action="/sessions" method="post">
            <div class="mb-3">	
    <label for="Nama" class="form-label">Nama</label>
    <input type="text" class="form-label" id="Nama" placeholder="Nama">
  </div>  
<div class="mr-auto">	
    <label for="text" class="form-label">No.telp</label>
    <input type="text" class="form-label" name="text" id="No.telp" placeholder="No.telp">
  </div>             
  <div class="mb-3">	
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-label" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="@gmail.com">
  </div>
<div class="mb-3 mr-3">	
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-label" name="password" id="password" placeholder="password">
  </div>
	</div>
	</div>
	</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="tombol login btn btn-primary">Login</button>
</form>
</div>

<script src="\assets/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>