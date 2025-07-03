<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="css/aboutss.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- font goggle -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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


<!-- about -->
    <div class="container">
        <h1>Our Abouts</h1>
        <p>Temanusa is an e-commerce platform that connects consumers with Nusantara products, supporting local Indonesian artisans.</p>
    </div>
    <section class="industry">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Temanusa: A Nusantara Marketplace for Local Products</h5>
              <p class="card-text">Temanusa is a marketplace that facilitates the sale of local Nusantara products. With a wide range of products such as handicrafts and traditional fashion. We support small and medium local artisans.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Temanusa: Shop Local Products with a Nusantara Touch</h5>
              <p class="card-text">Temanusa is an e-commerce platform offering unique and high-quality products from across the Nusantara. We provide a wide range of options, including handicrafts and traditional clothing.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Temanusa: A Local E-Commerce for Nusantara's Unique Products</h5>
              <p class="card-text">Temanusa is an e-commerce platform that offers a variety of unique Nusantara products, including traditional handicrafts. We are committed to advancing SMEs and local artisans.</p>
            </div>
        </div>
    </section>
    <section class="clients">
        <h2>2000+ Happy Client</h2>
        <p>We worked with Enormous that represented us were personable and highly professional.<br>
            Enormous made a number of incredibly valuable recommendations that we’ve happily adopted.</p>
        <div class="client-reviews">
            <img src="img/abouts/fo2.jpg" alt="Client 1">
            <img src="img/abouts/fo4.jpg" alt="Client 2">
            <img src="img/abouts/fo11.jpg" alt="Client 3">
        </div>
    </section>
    <section class="advice">
        <h2>We advise you, you call the right decision!</h2>
        <div class="stats">
            <div class="stat">
                <i class="fas fa-box-open"></i>
                <p>1000+</p>
                <p>Produk Terjual</p>
            </div>
            <div class="stat">
                <i class="fas fa-store"></i>
                <p>200</p>
                <p>Toko Terdaftar</p>
            </div>
            <div class="stat">
                <i class="fas fa-award"></i>
                <p>150</p>
                <p>Penghargaan</p>
            </div>
            <div class="stat">
                <i class="fas fa-users"></i>
                <p>5000+</p>
                <p>Pelanggan Puas</p>
            </div>
        </div>
    </section>
    <section class="latest-news">
        <h2>Latest News</h2>
        <div class="news-item">
            <img src="img/abouts/nun1.jpg" alt="News 1">
            <p>Festival Menenun Massal di Lombok</p>
        </div>
        <div class="news-item">
            <img src="img/abouts/bambu2.jpg" alt="News 1">
            <p>Kerajinan Bambu Ciakar dari Banten</p>
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
<script>
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

document.addEventListener('DOMContentLoaded', function() {
    const filterItems = document.querySelectorAll('.filter-item');

    filterItems.forEach(item => {
        item.addEventListener('click', function() {
            // Menghapus kelas 'active-filter' dari item yang aktif saat ini
            filterItems.forEach(i => i.classList.remove('active-filter'));

            // Menambahkan kelas 'active-filter' pada item yang diklik
            this.classList.add('active-filter');
        });
    });
});

const filterItems = document.querySelectorAll('.filter-item');
const blogSection = document.querySelector('.section-blog');

filterItems.forEach(item => {
    item.addEventListener('click', () => {
        filterItems.forEach(el => el.classList.remove('active-filter'));
        item.classList.add('active-filter');

        const filter = item.getAttribute('data-filter');
        if (filter === 'All') {
            blogSection.style.display = 'block';
        } else if (filter === 'Blog') {
            blogSection.style.display = 'block';
        } else {
            blogSection.style.display = 'none';
        }
    });
});

// Trigger click on "All" filter on page load
document.querySelector('.filter-item[data-filter="Blog"]').click();


document.addEventListener("DOMContentLoaded", function() {
    const filterItems = document.querySelectorAll('.filter-item');
    const allPosts = document.querySelectorAll('.post-box');
    const blogContainer = document.querySelector('.container.Blog');
    const wrapperr = document.querySelector('.wrapperr');
    const text = document.querySelector('.text');
    
    // Function to show/hide posts
    const filterPosts = (filter) => {
        allPosts.forEach(post => {
            if (filter === 'Blog') {
                post.style.display = 'block';
                blogContainer.style.display = 'none';
                wrapperr.style.display = '';
                text.style.display = '';
            } else if (filter === 'Review') {
                if (post.classList.contains('Review')) {
                    post.style.display = 'none';
                    wrapperr.style.display = 'none';
                } else {
                    post.style.display = 'none';
                }
                blogContainer.style.display = 'block';
                wrapperr.style.display = 'none';
                text.style.display = 'none';
            }
        });
    };

    // Initial display setup
    filterPosts('Blog');

    // Event listener for filter items
    filterItems.forEach(item => {
        item.addEventListener('click', () => {
            // Remove active class from all filter items
            filterItems.forEach(i => i.classList.remove('active-filter'));
            // Add active class to clicked filter item
            item.classList.add('active-filter');

            // Get filter value
            const filter = item.getAttribute('data-filter');
            // Filter posts
            filterPosts(filter);
        });
    });


    // validasi login
    function validasilogin()
	{
		var Email=$('#email').val();	
		if(Email=="")
		{
			alert("Email masih kosong");
			$('#email').focus();
			return false;	
		}
		
		var Password=$('#password').val();	
		if(Password=="")
		{
			alert("Password masih kosong");
			$('#password').focus();
			return false;	
		}
		$('#loginForm').submit();
	}
});
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    <script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
 <!-- js file link -->
 <script src="script.js"></script>
</body>
</html>
