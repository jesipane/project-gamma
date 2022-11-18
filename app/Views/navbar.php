<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--import to make website responsive-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamma pharmacy</title> 

    <!--link our css file-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<section class="navbar bg-success mb-4">
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-light ml-auto  ">
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/assets/images/logogamma.png" alt="logo" width="120" height="55" ml-4>
    </a>
  </div>
<br>
<div class="right">
<ul class="navbar-nav ml-3">
        <li class="nav-item ml-3">
          <form action="/Sessions/logout" method="post">
            <button type="submit" class="btn btn-primary nav-link"><?= current_user() == NULL ? "-" : current_user()['name'] ?> |Logout</button>
          </form>
        </li>
      </ul>
</div>
 <ul class="dropdown-menu">
 <div class="row ">
    <div class="bg-info ">
    <ul class="nav flex-column ">
  <li class="nav-item">
    <a class="nav-link active text-dark" aria-current="page" href="/pages/dashboard"><img src="/assets/images/home.png" alt="" width="18px" height="18px"> Dashboard</a><hr sty="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="/items"><img src="/assets/images/item.png" alt="" width="18px" height="18px"> item</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="users"><img src="/assets/images/user.jpg" alt="" width="18px" height="18px">User</a><hr class="bg-secondary">
</li>
<li class="nav-item">
  <a class="nav-link text-dark" href="/customers"><img src="/assets/images/customer.png" alt="" width="18px" height="18px">Customer</a><hr class="bg-secondary">
  <li class="nav-item">
    <a class="nav-link text-dark" href="/suppliers"><img src="/assets/images/supplier.jpg" alt="" width="18px" height="18px"> supplier</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="/sales"><img src="/assets/images/penjualan.png" alt="" width="18px" height="18px"> penjualan</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="/purchases"><img src="/assets/images/pembelian.png" alt="" width="20px" height="20px"> pembelian</a>
  </li>
</ul>  
</div>
    </button>
</section>
</div>
</nav>
</body>
</html>