<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nusantara</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- font goggle -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="icon" href="./img/store.png" type="imgae/png" size="20x20">
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
          <li><a href="./index.php">home</a></li>
          <li><a href="./shop.php" >shop</a></li>
          <li><a href="./blogg2.php" >blog</a></li>
          <li><a href="./aboutss.php" >about</a></li>
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
    <form id="loginForm" class="login-form" method="POST" autocomplete="off" action="./shop.php" onsubmit="return validasiLogin();">
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


  <!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/service/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free on order over $300</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/service/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Returns accepted within 30 days with receipt.</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/service/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>We are here for you 24/7.</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/service/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Secure Payment for Safe Transactions</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

  <!-- Start category Area -->
	<section class="category-area">
		<div class="container3 text-center mt-5 py-5">
			<h2 class="font-weight-bold">Our Gallery</h2>
			<hr class="mx-auto">
			<p>Enjoy a unique shopping experience by taking a closer look at each handcrafted product in our gallery <br>where every detail is meticulously crafted with high quality</p>
		</div>
		<div class="container1">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/gallery/c1.jpg" alt="">
								<a href="img/gallery/c1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/gallery/c2.jpg" alt="">
								<a href="img/gallery/c2.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/gallery/c3.jpg" alt="">
								<a href="img/gallery/c3.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Product for Couple</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/gallery/c4.jpg" alt="">
								<a href="img/gallery/c4.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="img/gallery/c5.jpg" alt="">
						<a href="img/gallery/c5.jpg" class="img-pop-up" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Sneaker for Sports</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	 <!-- produk -->
   <section class="product">
    <div class="container3 text-center mt-5 py-5">
      <h2 class="font-weight-bold">Deals of the Week</h2>
      <hr class="mx-auto">
      <p>Don't Miss the Shopping Opportunity at Temanusa Store This Week! <br>Enjoy Exclusive Discounts and Attractive Offers Available Only During This Week!</p>
    </div>
    <div class="product-container">
			<div class="product-card">
				<div class="product-image">
					<span class="discount-tag">20% Off</span>
					<img src="img/shop/rattan.jpg" class="product-thumb" alt="">
					<button class="card-btn">ADD TO CART</button>
				</div>
				<div class="product-info">
					<h2 class="product-brand">Kamoro Necklace</h2>
					<p class="product-desk">Handcrafted, natural materials, cultural heritage, Papua.</p>
					<span class="price"> $18.00</span><span class="actual-price">$23.00</span>
				</div>
			</div>

			<div class="product-card">
				<div class="product-image">
					<span class="discount-tag">50% Off</span>
					<img src="img/shop/batik.jpg" class="product-thumb" alt="">
					<button class="card-btn">ADD TO CART</button>
				</div>
				<div class="product-info">
					<h2 class="product-brand">batik bag</h2>
					<p class="product-desk">Stylish, eco-friendly batik bag for everyone.</p>
					<span class="price"> $20.00 </span><span class="actual-price">$37.00</span>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image">
					<span class="discount-tag">30% Off</span>
					<img src="img/shop/troso.jpg" class="product-thumb" alt="">
					<button class="card-btn">ADD TO CART</button>
				</div>
				<div class="product-info">
					<h2 class="product-brand">tenun troso</h2>
					<p class="product-desk">Traditional handwoven fabric from Troso, Indonesia.</p>
					<span class="price"> $47.00 </span><span class="actual-price">$52.00</span>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image">
					<span class="discount-tag">10% Off</span>
					<img src="img/shop/borne.jpg" class="product-thumb" alt="">
					<button class="card-btn">ADD TO CART</button>
				</div>
				<div class="product-info">
					<h2 class="product-brand">Burneo Beads</h2>
					<p class="product-desk">Burneo beads have a radiant and vibrant sheen</p>
					<span class="price"> $19.58 </span><span class="actual-price">$20.00</span>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image">
					<span class="discount-tag">20% Off</span>
					<img src="img/shop/dayak.jpg" class="product-thumb" alt="">
					<button class="card-btn">ADD TO CART</button>
				</div>
				<div class="product-info">
					<h2 class="product-brand">Dayak Delight</h2>
					<p class="product-desk">Dayak Delight offers unique, handcrafted cultural items</p>
					<span class="price"> $15.99 </span><span class="actual-price">$17.00</span>
				</div>
			</div>
      <div class="product-card">
				<div class="product-image">
					<span class="discount-tag">40% Off</span>
					<img src="img/shop/noken.jpg" class="product-thumb" alt="">
					<button class="card-btn">ADD TO CART</button>
				</div>
				<div class="product-info">
					<h2 class="product-brand">Noken Etnik</h2>
					<p class="product-desk">Traditional noken ethnic designs reflect cultural heritage.</p>
					<span class="price"> $28.54 </span><span class="actual-price">$33.00</span>
				</div>
			</div>
      <div class="product-card">
				<div class="product-image">
					<span class="discount-tag">50% Off</span>
					<img src="img/shop/anjat.jpg" class="product-thumb" alt="">
					<button class="card-btn">ADD TO CART</button>
				</div>
				<div class="product-info">
					<h2 class="product-brand">Anjat Dayak Bag</h2>
					<p class="product-desk">Handcrafted from rattan, Anjat Dayak bag endures.</p>
					<span class="price"> $25.98 </span><span class="actual-price">$56.00</span>
				</div>
			</div>
      <div class="product-card">
				<div class="product-image">
					<span class="discount-tag">20% Off</span>
					<img src="img/shop/manik.jpg" class="product-thumb" alt="">
					<button class="card-btn">ADD TO CART</button>
				</div>
				<div class="product-info">
					<h2 class="product-brand">Manik-Manik Dayak</h2>
					<p class="product-desk">Crafted with skill, Dayak bead bags shine.</p>
					<span class="price"> $30.36 </span><span class="actual-price">$32.00</span>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image">
					<span class="discount-tag">70% Off</span>
					<img src="img/shop/garut.jpg" class="product-thumb" alt="">
					<button class="card-btn">ADD TO CART</button>
				</div>
				<div class="product-info">
					<h2 class="product-brand">Garutan Splendor</h2>
					<p class="product-desk">Garutan Splendor Bag: elegant, handcrafted and stylish.</p>
					<span class="price"> $20.00 </span><span class="actual-price">$45.00</span>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image">
					<span class="discount-tag">5% Off</span>
					<img src="img/shop/batu.jpg" class="product-thumb" alt="">
					<button class="card-btn">ADD TO CART</button>
				</div>
				<div class="product-info">
					<h2 class="product-brand">Dayak Bracelet</h2>
					<p class="product-desk">Crafted from beads, Dayak bracelets symbolize cultural heritage.</p>
					<span class="price"> $16.99 </span><span class="actual-price">$18.00</span>
				</div>
			</div>
		</div>
	  </section>

<!-- Start brand Area -->
<section class="brand-area section_gap">
  <div class="container">
      <div class="row">
          <a class="col single-img" href="#">
              <img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
          </a>
          <a class="col single-img" href="#">
              <img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
          </a>
          <a class="col single-img" href="#">
              <img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
          </a>
          <a class="col single-img" href="#">
              <img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
          </a>
          <a class="col single-img" href="#">
              <img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
          </a>
      </div>
  </div>
</section>
<!-- End brand Area -->

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
function validasiLogin() {
    var email = $('#email').val();    
    if (email == "") {
        alert("Email masih kosong");
        $('#email').focus();
        return false;    
    }
    
    var password = $('#password').val();    
    if (password == "") {
        alert("Kata sandi masih kosong");
        $('#password').focus();
        return false;    
    }
    return true; // Melanjutkan pengiriman form jika validasi berhasil
}

$(document).ready(function() {
    $('#checkbox').click(function() {
        if ($(this).is(':checked')) {
            $('#password').attr('type', 'text');
        } else {
            $('#password').attr('type', 'password');
        }
    });
});

document.querySelector('a').addEventListener('click', function(e) {
  window.location.href = this.href;
});

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
 <!-- js file link -->
 <script src="script.js"></script>
</html>