<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <linkrel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="shop.css">
    <!-- header -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- font goggle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
:root{
    --cream:#ea9321;
    --black:#000;
    --light-color:#666;
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
    --border:.2rem solid rgba(0,0,0,.1);
    --outline:.1rem solid rgba(0,0,0,.1);
    --outline-hover:.2rem solid var(--black);
}
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

body{
    background: #eee;
    min-height: 200vh;
}

/* NAVBARR */
.header{
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
    box-shadow: var(--box-shadow);
    transition: 0.6s;
}
.header.active {
    background: #fff;
}
.menu ul {
    list-style-type: none; 
    padding: 0; 
    position: relative;
    display: flex;
}
.menu li {
    display: inline; 
    margin-right: 10px;
    transition: color 0.5s; 
}
.header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: var(--black);
    text-decoration: none;
}
.header.active .logo {
    color: #000; 
}
.header .logo i{
    color: #f5693e;
}
.logo .teman {
    background: linear-gradient(to right, #fe6640, #feb47b);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.header .navbar{
    margin-top: 16px;
}
.header .navbar a{
    font-size: 1.7rem;
    margin: 0 1rem;
    color: #fff;
    text-decoration: none;
}
.header .navbar a:hover{
    color: #f5693e;
}
.header.active .navbar a {
    color: #000; /* Ubah warna navbar menjadi hitam */
}
.header.active .navbar a:hover{
    color: #f5693e;
}
.menu .sidebarClose{
    display: none;
    color: #fff;
}
.logo .sidebarOpen{
    color: #fff;
    font-size: 25px;
    cursor: pointer;
    display: none;
}
.header.active .logo .sidebarOpen{
    color: #000; 
}
.header .icons {
    display: flex;
    gap: 0.3rem;    
}
.header .icons div {
    height: 4.5rem;
    width: 4.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 2rem;
    text-align: center;
}
.header .icons div i {
   transition: color 0.3s, transform 0.3s;
}
.header .icons div i:hover {
    color: #f5693e; 
    transform: scale(1.2); 
}
.header.active .icons div {
    color: #000; /* Ubah warna ikon menjadi hitam */
}

/* media query navbar*/
@media (max-width: 770px) {
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .header .logo {
        display: flex;
        align-items: center;
        justify-content: center;
        text-transform: none;
        width: 100%; /* Tambahkan ini */
    }
    .logo .sidebarOpen {
        display: block;
        display: block;
        position: absolute;
        left: 30px;
    }
    .header .menu {
        position: fixed;
        height: 100%;
        width: 260px; /* Lebar diperlebar dari 220px ke 260px */
        left: -100%;
        top: 0;
        background: #676464;
        z-index: 100;
        transition: all 0.4s ease;
    }
    .menu.active {
        left: 0;
    }
    .menu .sidebarClose {
        display: block;
        width: 100%;
        display: flex;
        align-items: center;
        padding: 0.5rem 1.2rem;
        justify-content: flex-end;
    }

    .menu .sidebarClose {
        display: block;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start; 
        font-size: 24px;
        padding: 20px;
        cursor: pointer;
    }
    .menu .navbar {
        flex-direction: column;
        padding: 0;
        margin: 0;
    }
    .menu .navbar li a {
        display: block;
        margin-top: 20px;
    }
    html {
        font-size: 55%;
    }
    .fa-store {
        margin-right: 5px; /* Tambahkan jarak antara ikon dan teks */
    }

    .usa {
        text-transform: lowercase; /* Pastikan huruf "usa" ditampilkan dalam huruf kecil */
    }
}

/* Menghapus margin yang tidak diinginkan dari elemen sidebarOpen */
.sidebarOpen {
    margin: 0 !important;
    padding: 0 !important;
}

/* Memastikan header tidak memiliki margin yang tidak diinginkan */
.header {
    margin: 0 !important;
}



  
/* SEARCH */
.header .search-form {
    position: absolute;
    top: 110%;
    right: -110%;
    width: 50rem; /* Ini akan diubah dalam media queries */
    height: 5rem;
    background: #fff;
    border-radius: .5rem;
    overflow: hidden;
    display: flex;
    align-items: center;
    box-shadow: var(--box-shadow);
}

.header .search-form.active {
    right: 2rem;
    transition: .4s linear;
}

.header .search-form input {
    height: 100%;
    width: 100%;
    background: none;
    text-transform: none;
    font-size: 1.6rem;
    color: var(--black);
    padding: 0 1.5rem;
}

.header .search-form label {
    font-size: 2.2rem;
    padding-right: 1.5rem;
    color: var(--black);
    cursor: pointer;
}

.header .search-form label:hover {
    color: #ea9321;
}

/* Media Queries */
@media (max-width: 768px) {
    .header .search-form {
        width: 50%;
    }
}

@media (max-width: 550px) {
    .header .search-form {
        width: 60%;
    }
}

@media (max-width: 400px) {
    .header .search-form {
        width: 70%;
    }
}

@media (max-width: 320px) {
    .header .search-form {
        width: 60%;
    }
}


/* SHOP CART */
.header .shopping-cart{
    position: absolute;
    top: 110%; right:-110%;
    padding: 1rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width: 35rem;
    background: #fff;
}
.header .shopping-cart.active{
    right: 2rem;
    transition: .4s linear;
}
.header .shopping-cart .box{
    display: flex;
    align-items: center;
    gap: 1rem;
    position: relative;
    margin: 1rem 0;
}
.header .shopping-cart .box img{
    height: 10rem;
}
.header .shopping-cart .box .fa-trash{
    font-size: 2rem;
    position: absolute;
    top: 50%; right: 2rem;
    cursor: pointer;
    color: var(--light-color);
    transform: translateY(-50%);
}
.header .shopping-cart .box .fa-trash:hover{
    color: #ea9321;
}
.header .shopping-cart .box .content h3{
    font-size: 1.7rem;
    padding-bottom: 1rem;
}
.header .shopping-cart .box .content span{
    font-size: 1.6rem;
    padding-bottom: 1rem;
    color: var(--light-color);
}
.header .shopping-cart .box .content .quantity{
    padding-left: 1rem;
}
.header .shopping-cart .total{
    font-size: 2.5rem;
    padding: 1rem 0;
    text-align: center;
    color: var(--black);
}
.header .shopping-cart .btn{
    display: block;
    text-align: center;
    margin: 1rem 0;
}
.checkout{
    margin-top: 1rem;
    display: block;
    padding: .8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border: .2rem solid var(--cream);
    color: #fff;
    cursor: pointer;
    background: var(--cream);
    text-decoration: none;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
.checkout:hover{
    background: rgba(255, 165, 0,.2);
    color: var(--cream);
}

/* LOGIN */
.login{
    margin-top: 1rem;
    display: inline-block;
    padding: .8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border: .2rem solid var(--cream);
    color: #fff;
    cursor: pointer;
    background: var(--cream);
}
.login:hover{
    background: rgba(255, 165, 0,.2);
    color: var(--cream);
}
.login-form-container {
    position: fixed;
    top: -120%;
    left: 0;
    min-height: 100vh;
    z-index: 1000;
    width: 100%;
    background: rgba(0,0,0,.7);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: top 0.3s ease;
}
.login-form-container.active {
    top: 0;
}
.login-form-container form {
    margin: 2rem;
    padding: 1.5rem 2rem;
    border-radius: .5rem;
    background: #fff;
    width: 50rem;
    position: relative;
}
.login-form-container h3 {
    font-size: 3rem;
    color: #444;
    text-transform: uppercase;
    text-align: center;
    padding: 1rem 0;
}
.login-form-container form .box {
    width: 100%;
    padding: 1rem;
    font-size: 1.7rem;
    color: #333;
    margin: .6rem 0;
    border: .1rem solid rgba(0,0,0,.3);
    border-radius: 4px;
    text-transform: none;
}
.login-form-container form .box:focus {
    border-color: var(--cream);
}
.login-form-container form .remember{
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin: 2rem 0;
}
.login-form-container form label {
    font-size: 1.5rem;
    color: #666;
}
.login-form-container form .login {
    display: block;
    width: 50%;
    border-radius: 50px;
    margin: 0 auto;
    margin-top: 10px;
    margin-bottom: 10px;
}
.login-form-container form p {
    margin-top: 0px;
    margin-bottom: 0;
    font-size: 1.5rem;
    color: #666;
    text-align: center;
}
.login-form-container form p a {
    color: var(--cream);
    text-decoration: none;
}
.login-form-container form p a:hover {
    color: #333;
    text-decoration: underline;
}
.login-form-container #form-close {
    position: absolute;
    top: 2rem;
    right: 3rem;
    font-size: 4rem;
    color: #fff;
    cursor: pointer;
}

/* SLIDER */
.carousel-item img {
    height: 100vh;
    object-fit: cover;
}

.carousel-inner {
    position: relative;
}

.carousel-inner .banner-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    height: 100vh; /* Mengambil tinggi penuh dari layar */
    padding: 0 5px; /* Padding horizontal */
    box-sizing: border-box;
}

.carousel-inner .banner-content h1 {
    font-size: 50px;
    margin-bottom: 20px;
    margin-top: 150px;
    font-weight: bold;
    text-align: center; /* Memastikan teks rata tengah */
}

.carousel-inner .banner-content img {
    width: 400px; /* Atur lebar gambar sesuai kebutuhan */
    height: auto;
}
/* Media query untuk layar dengan lebar maksimum 1200px */
@media (max-width: 1200px) {
    .carousel-inner .banner-content h1 {
        font-size: 3.5vw; /* Menggunakan vw untuk ukuran responsif */
        margin: 0; /* Menghapus margin untuk menggunakan flex centering */
    }

    .carousel-inner .banner-content img {
        width: 25vw; /* Menggunakan vw untuk lebar responsif */
    }
}

/* Media query untuk layar dengan lebar maksimum 992px */
@media (max-width: 992px) {
    .carousel-inner .banner-content {
        left: 5%;
        width: 90%;
    }

    .carousel-inner .banner-content h1 {
        font-size: 4vw; /* Menggunakan vw untuk ukuran responsif */
        margin: 0; /* Menghapus margin untuk menggunakan flex centering */
    }

    .carousel-inner .banner-content img {
        width: 30vw; /* Menggunakan vw untuk lebar responsif */
    }
}

/* Media query untuk layar dengan lebar maksimum 827px */
@media (max-width: 827px) {
    .carousel-inner .banner-content h1 {
        font-size: 4.5vw; /* Menggunakan vw untuk ukuran responsif */
        margin: 0; /* Menghapus margin untuk menggunakan flex centering */
    }

    .carousel-inner .banner-content img {
        width: 30vw; /* Menggunakan vw untuk lebar responsif */
    }
}

/* Media query untuk layar dengan lebar maksimum 795px */
@media (max-width: 795px) {
    .carousel-inner .banner-content h1 {
        font-size: 5vw; /* Menggunakan vw untuk ukuran responsif */
        margin: 0; /* Menghapus margin untuk menggunakan flex centering */
    }

    .carousel-inner .banner-content img {
        width: 35vw; /* Menggunakan vw untuk lebar responsif */
    }
}

/* Media query untuk layar dengan lebar maksimum 590px */
@media (max-width: 590px) {
    .carousel-inner .banner-content h1 {
        font-size: 6.5vw; /* Menggunakan vw untuk ukuran responsif */
        margin: 0; /* Menghapus margin untuk menggunakan flex centering */
    }

    .carousel-inner .banner-content img {
        width: 40vw; /* Menggunakan vw untuk lebar responsif */
    }
}

/* Media query untuk layar dengan lebar maksimum 470px */
@media (max-width: 470px) {
    .carousel-inner .banner-content h1 {
        font-size: 7vw; /* Menggunakan vw untuk ukuran responsif */
        margin: 0; /* Menghapus margin untuk menggunakan flex centering */
    }

    .carousel-inner .banner-content img {
        width: 45vw; /* Menggunakan vw untuk lebar responsif */
    }
}

/* Media query untuk layar dengan lebar maksimum 430px */
@media (max-width: 430px) {
    
    .carousel-inner .banner-content h1 {
        font-size: 8vw; /* Menggunakan vw untuk ukuran responsif */

    }

    .carousel-inner .banner-content img {
        width: 50vw; /* Menggunakan vw untuk lebar responsif */
    }
}
        h6{
            color: gainsboro;
            font-size: 20px;
        }
        .small-img-group{
            display: flex;
            justify-content: space-between;
        }
        .small-img-col{
            flex-basis: 24%;
            cursor: pointer;
        }
        .buy-btn{
            background-color: coral;
            color: white;
            width: 25%;
            opacity: 1;
            transition: 0.3s all;
            border: none;
            outline: none;
            border-radius: 5px;
            padding: 5px;
        }
        .s-product select{
            display: block;
            padding: 5px 10px;
        }
        .s-product input{
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }
        .s-product input:focus{
            outline: none;
        }
        .text{
            font-size: 17px;
        }
        .number{
            border: 1px solid black;
        }
        .detail{
            font-size: 25px;
        }
        /* product */
        hr{
            width: 80px;
            height: 5px;
            border-radius: 5px;
            background-color: black;
        }
        .star{
            padding: 10px 0;
        }
        .star i{
            font-size: 1.3rem;
            color: rgb(241, 159, 50);
        }
        .product{
            cursor: pointer;
            margin-bottom: 2rem;
        }
        .product img{
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
            transition: 0.3s all;
        }
        .product:hover img{
            opacity: 0.7;
        }
        .buyy-btn{
            border: none;
            outline: none;
            border-radius: 5px;
            padding: 5px;
            width: 40%;
            color: white;
        }
        .product .buyy-btn{
            background-color: chocolate;
            transform: translateY(20px);
            opacity: 0;
            transition: 0.3s all;
        }
        .product:hover .buyy-btn{
            transform: translateY(0px);
            opacity: 1;
        }

/* Footer */
.footer {
    background: #f4f4f9;
    padding: 2rem;
}

.footer .box-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
    width: 90%; /* Misalnya 80% dari elemen induk */
    margin: 0 auto; /* Mengatur margin untuk membuat container berada di tengah */
}

.footer .box-container .box h3 {
    font-size: 2.7rem; 
    color: black;
    padding: 0.5rem 0; 
    margin-bottom: -2px;
    margin-top: -10px;
}

.footer .box-container .box h3 i {
    color: orange;
}
.footer .box-container .box h2{
    padding-left: 50px;
    font-size: 2.7rem;
}
.footer .box-container .box a {
    display: block;
    font-size: 1.2rem; 
    color: black;
    padding: 0.1rem 0; 
    text-decoration: none;
    display: flex; /* Tambahkan ini untuk membuat teks dan ikon sejajar */
    align-items: center;
}

.footer .box-container .box a i {
    color: black;
    padding-right: .5rem;
    justify-content: center;
    align-items: center;
    line-height: 2rem;
    font-size: 2.5rem;
}
.footer .box-container .box .links{
    font-size: 1.5rem;
    line-height: 2.5rem;
    align-items: center;
    padding: 0.1rem 0; /* Mengurangi padding */
    display: flex;
    margin-left: 50px;
}
.footer .box-container .box .contact .quick h3{
    margin-left: 50px;
    
}
.footer .box-container .box a:hover i{
    padding-right: 0.7rem; /* Mengurangi padding saat hover */
    color: orange;
}

.footer .box-container .box p {
    line-height: 1.4; /* Menurunkan line-height */
    font-size: 1.5rem; /* Menurunkan ukuran font sedikit */
    color: black;
    padding: 0.1rem 0; /* Mengurangi padding */
    margin: 0; /* Menghapus margin */
}

.footer .box-container .box .share {
    display: flex; /* Menambahkan display flex agar berjajar horizontal */
    gap: 1rem; 
    margin: 0.5rem 0; 
}

.footer .box-container .box .share a {
    height: 2.5rem; 
    width: 2.5rem;
    line-height: 2.5rem;
    border-radius: .5rem;
    font-size: 1.2rem; 
    color: black;
    margin: 0 0.2rem; /* Menambahkan margin untuk jarak antar ikon */
    text-align: center;
    display: inline-flex;
    align-items: center; /* Memastikan ikon berada di tengah vertikal */
    justify-content: center; /* Memastikan ikon berada di tengah horizontal */
}


.footer .box-container .box .email {
    margin: .5rem 0; 
    padding: 1rem; 
    border-radius: .5rem;
    border: 0.5px solid black;
    background: #eee;
    font-size: 1.2rem; /* Menurunkan ukuran font sedikit */
    color: black;
    text-transform: none;
    width: 100%;
    box-sizing: border-box;
}

.footer .box-container .box .btn {
    margin-top: 0.5rem; /* Meningkatkan margin-top */
    padding: 0.5rem 1rem;
    font-size: 1.2rem; /* Menurunkan ukuran font sedikit */
    color: white;
    background: orange;
    border: none;
    border-radius: .5rem;
    cursor: pointer;
    width: 100%;
}

.footer .box-container .box .payment-img {
    margin-top: 0.5rem; /* Meningkatkan margin-top */
    height: auto;
    max-width: 100%;
    align-self: flex-start;
}

.footer .newsletter p {
    text-align: center; /* Memusatkan teks */
    margin: 0.5rem 0; /* Mengatur margin untuk merapikan */
    font-size: 1.2rem; /* Menurunkan ukuran font sedikit */
    line-height: 1.4; /* Menurunkan line-height */
}

.footer .newsletter .subscribe-text {
    font-size: 1.3rem; /* Menurunkan ukuran font sedikit */
    text-align: center;
    margin: 1rem 0; /* Mengatur margin untuk merapikan */
}

.footer-bottom {
    text-align: center;
    padding-top: 10px;
    padding-bottom: 10px;
    background: #f4f4f9;
    border-top: 1px solid #b2acad;
  }
  
  .footer-bottom p {
    margin: 0;
    font-size: 1rem;
  } 

/* media kueri */
@media (max-width: 1200px) {
    .footer .box-container {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 992px) {
    .footer .box-container {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .footer .box-container {
        grid-template-columns: 1fr;
    }

    .footer .box-container .box {
        text-align: left;
    }

    .footer .box-container .box h2, .footer .box-container .box h3 {
        padding-left: 0;
    }

    .footer .box-container .box .links {
        margin-left: 0;
    }

    .footer .box-container .box .contact .quick h3 {
        margin-left: 0;
    }
}

    </style>
</head>
<body>
<!-- HEADER -->
<header class="header">
      
      <a href="#" class="logo">
        <div class="fas fa-bars sidebarOpen"></div> 
          <i class="fa-solid fa-store"></i>
          <span class="teman">Temanusa</span>
      </a>
      
      <div class="menu">
            <i class="fa-solid fa-xmark sidebarClose"></i>
        <ul class="navbar">
          <li><a href="./index.php" target="_blank">home</a></li>
          <li><a href="./shop.php" target="_blank">shop</a></li>
          <li><a href="./blogg2.php" target="_blank">blog</a></li>
          <li><a href="./aboutss.php" target="_blank">about</a></li>
        </ul>
      </div>
  
      <div class="icons">
          <div><i class="fas fa-search" id="search-btn"></i></div>
          <div><i class="fas fa-shopping-cart" id="cart-btn"></i></div>
          <div><i class="fas fa-user" id="login-btn"></i></div>
      </div>
  
      <!-- search -->
      <form action="" class="search-form">
          <input type="search" id="search-box" placeholder="search here...">
          <label for="search-box" class="fas fa-search"></label>
      </form>
  
      <!-- cart -->
      <div class="shopping-cart">
            <div class="box">
              <i class="fas fa-trash"></i>
              <img src="img/shop/anjat.jpg" alt="">
              <div class="content">
                  <h3>Anjat Bag</h3>
                  <span class="price">$58.63/-</span>
                  <span class="quantity">qty : 1</span>
              </div>
            </div>
  
            <div class="box">
              <i class="fas fa-trash"></i>
              <img src="img/shop/rattan.jpg" alt="">
              <div class="content">
                  <h3>Kamoro Necklace</h3>
                  <span class="price">$37.26/-</span>
                  <span class="quantity">qty : 2</span>
              </div>
            </div>
  
            <div class="box">
              <i class="fas fa-trash"></i>
              <img src="img/shop/batik.jpg" alt="">
              <div class="content">
                  <h3>Batik Bag</h3>
                  <span class="price">$40.00/-</span>
                  <span class="quantity">qty : 1</span>
              </div>
            </div>
  
            <div class="total"> Total :  $135,89/- </div>
            <a href="#" class="checkout">checkout</a>
      </div>
  </header>

  <!-- login -->
  <div class="login-form-container">
    <i class="fa-solid fa-xmark" id="form-close"></i>
    <form id="loginForm" class="login-form" method="POST" autocomplete="off" action="http://localhost/uassss/shop.php" onsubmit="return validasiLogin();">
        <h3>Login</h3>
        <input type="email" id="email" placeholder="your email" class="box">
        <input type="password" id="password" placeholder="your password" class="box">
        <input type="checkbox" id="checkbox">
        <label for="checkbox">Tampilkan Kata Sandi</label>
        <button type="submit" class="login">Login</button>
        <p>Forget your password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">register now</a></p>
    </form>
</div>
  <!-- SLIDER -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/slider/slider1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <div class="banner-content">
                    <h1>Welcome to the world of Archipelago crafts, each work reflects the beauty of Indonesian culture</h1>
					<img src="img/ukiran (2).png" alt="">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/slider/slider2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <div class="banner-content">
                    <h1>Each artwork from various regions in Indonesia holds a unique story and deep traditional values</h1>
					<img src="img/ukiran (2).png" alt="">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/slider/slider3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <div class="banner-content">
                    <h1>Nusantara handicraft products are not only aesthetically pleasing, but have functional and historical value</h1>
					<img src="img/ukiran (2).png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- produk -->
<section class=" container s-product my-5 pt-5">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img class="img-fluid w-100 pb-1" src="img/shop/rattan.jpg" id="mainimg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/shop/rattan.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/shop/rattann1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/shop/rattann2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/shop/rattann3.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
            <h6>Shop / Accessories </h6>
            <h2 class="detail py-3">Traditional Accessories</h2>
            <h2 class="detail mb-4">$23.00</h2>
            <input type="number" class="number" value="1">
            <a href="./payment.php"><button class="buy-btn">Payment</button></a>
            <h4 class=" detail mt-4 mb-3">Product Details</h4>
            <span class="text">Kalung Kamoro adalah perhiasan tradisional dari suku Kamoro di Papua, yang terbuat dari kerang, tulang, dan manik-manik. Desainnya yang unik mencerminkan keindahan dan kekayaan budaya serta memiliki makna spiritual mendalam. Digunakan dalam upacara adat, kalung ini menjadi simbol identitas dan kebanggaan budaya, menyoroti keterampilan artistik dan kreativitas masyarakat Kamoro.
            </span>
        </div>
    </div>
</section>
<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h3 class="font-weight-bold">Related Products</h3>
        <hr class="mx-auto">
    </div>
    <div class="row mx-auto container">
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="img/shop/dayak.jpg" alt="">
            <div class="star">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
            </div>
            <h5 class="p-name">Dayak Delight</h5>
            <h4 class="p-price">$17.00</h4>
            <button class="buyy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="img/shop/wamena.jpg" alt="">
            <div class="star">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bx-star'></i>
            </div>
            <h5 class="p-name">Kendi Wamena</h5>
            <h4 class="p-price">$57.00</h4>
            <button class="buyy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="img/shop/noken.jpg" alt="">
            <div class="star">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <h5 class="p-name">Noken Etnik</h5>
            <h4 class="p-price">$33.00</h4>
            <button class="buyy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="img/shop/boba.jpg" alt="">
            <div class="star">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <h5 class="p-name">Boba Necklace</h5>
            <h4 class="p-price">$20.00</h4>
            <button class="buyy-btn">Buy Now</button>
        </div>
    </div>
</section>

<!-- Footer -->
<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3>Temanusa</h3>
			<p>Selamat datang di Temanusa, platform e-commerce terdepan yang menghadirkan produk-produk autentik dan berkualitas tinggi dari seluruh Indonesia. 
			   Setiap produk adalah cerita dan budaya yang berharga.
			</p>
			<div class="share">
				<a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
				<a href="https://x.com/Taniaaani?t=8VE2dcAneuhfCquTexMfFg&s=08"><i class='bx bxl-twitter'></i></a>
				<a href="#"><i class='bx bxl-instagram'></i></a>
				<a href="#"><i class='bx bxl-linkedin' ></i></a>
			</div>
		</div>
		
		<div class="box">
			<h2 class="contact">Contact Info</h2>
			<a href="#" class="links"><i class='bx bx-phone-call'></i>62+ 85747234890</a>
			<a href="#" class="links"><i class='bx bx-envelope'></i>temanusa@gmail.com</a>
			<a href="#" class="links"><i class='bx bx-map-pin'></i>Jln.Raya Canggu</a>
		</div>

		<div class="box">
			<h2 class="quick">Quick links</h2>
			<a href="./index.php" class="links"><i class='bx bx-right-arrow-alt'></i>Home</a>
			<a href="./shop.php" class="links"><i class='bx bx-right-arrow-alt'></i>Shop</a>
			<a href="./blogg2.php" class="links"><i class='bx bx-right-arrow-alt'></i>Blog</a>
			<a href="./aboutss.php" class="links"><i class='bx bx-right-arrow-alt'></i>About</a>   
		</div>

		<div class="box">
			<h3>NewsLetter</h3>
			<p>give message For Latest Updates</p>
			<input type="email" placeholder="your email" class="email">
			<input type="submit" value="submit" class="btn">
			<img src="img/footer/paymentt.png" class="payment-img">
		</div>
	</div>
</section>
<div class="footer-bottom">
	<p>&copy; 2024 Teman<span>usa</span>. Project UAS Kelompok 6</p>
</div>

<div class="footer-bottom">
	<p>&copy; 2024 Teman<span>usa</span>. Project UAS Kelompok 6</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  

<script>
    var mainimg = document.getElementById('mainimg');
    var smallimg = document.getElementsByClassName('small-img');
    smallimg[0].onclick = function(){
        mainimg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function(){
        mainimg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function(){
        mainimg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function(){
        mainimg.src = smallimg[3].src;
    }

    // header
    let searchForm = document.querySelector('.search-form');
let shoppingCart = document.querySelector('.shopping-cart');
let loginForm = document.querySelector('.login-form-container');
let navbar = document.querySelector('.navbar');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

document.querySelector('#cart-btn').onclick = () => {
    shoppingCart.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let formBtn = document.querySelector('#login-btn');
let formClose = document.querySelector('#form-close');

formBtn.addEventListener('click', () => {
    loginForm.classList.add('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
});

formClose.addEventListener('click', () => {
    loginForm.classList.remove('active');
});

// sidebar
document.addEventListener('DOMContentLoaded', function() {
    const sidebarOpen = document.querySelector('.sidebarOpen');
    const sidebarClose = document.querySelector('.sidebarClose');
    const menu = document.querySelector('.menu');
    const body = document.querySelector('body');

    sidebarOpen.addEventListener('click', () => {
        menu.classList.add('active');
    });

    sidebarClose.addEventListener('click', () => {
        menu.classList.remove('active');
    });

    body.addEventListener('click', e => {
        let clickedElm = e.target;
    
        if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
            menu.classList.remove('active');
        }
    
    });
});


// navbar
var header = document.querySelector(".header");
window.addEventListener('scroll', scrollFunction);

function scrollFunction(){
    if(window.scrollY > 150){
        header.classList.add('active');
    }
    else{
        header.classList.remove('active');
    }
}




window.onscroll = () => {
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}
</script>

</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</html>