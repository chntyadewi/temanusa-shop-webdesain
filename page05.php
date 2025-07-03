<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nusantara</title>
  <link rel="stylesheet" href="css/page.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- font google -->
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
          <li><a href="./uassss/index.php" target="_blank">home</a></li>
          <li><a href="./uassss/shop.php" target="_blank">shop</a></li>
          <li><a href="./uassss/blogg2.php" target="_blank">blog</a></li>
          <li><a href="./uassss/aboutss.php" target="_blank">about</a></li>
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
  

<!-- post content -->
 <div class="post-header">
  <div class="header-content post-container">
      <a href="blogg2.html" class="href"></a>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h1 class="header-title">Balinese Silver Jewelry Receives Award at London Craft Week</h1>
      <br>
      <br>
      <img src="img/all/perak.png" alt="header-img">

  </div>
</div>
<!-- pootsts -->
 <section class="post-content post-container">
 

  <p class="post-text">
    <br>
    <br>
    <br>
    <br>
    <h2>Bali, Indonesia – July 21, 2024</h2>
  Silver jewelry from Bali recently won a prestigious award at London Craft Week 2024, an annual event celebrating the finest arts and crafts from around the world. This award highlights the quality and uniqueness of Balinese jewelry on the international stage and brings pride to Indonesia's craft industry.
  <h2>Category "Excellence in Silver Craft"</h2>
  At London Craft Week 2024, Balinese silver jewelry received the award in the "Excellence in Silver Craft" category for its outstanding design and craftsmanship. The event, held from July 10 to 16, 2024, brought together various crafts from leading artisans worldwide, including jewelry, textiles, and furniture.
  <h2>The Beauty of Balinese Silver Jewelry</h2>
  Balinese silver jewelry is known for its beauty and intricate design that reflects local culture and art. Its characteristics include detailed craftsmanship, deep carving techniques, and the use of traditional motifs that tell stories of mythology and daily life in Bali. The award-winning pieces at London Craft Week showcased an innovative combination of traditional techniques and modern design.
  <h2>Collaborative Efforts and Support</h2>
  This award is the result of collaboration between Balinese silver artisans, international designers, and support from Indonesia's Ministry of Tourism and Creative Economy. The exhibition featured various collections of jewelry, including rings, necklaces, bracelets, and earrings, all designed with meticulous detail and high-quality silver materials.
  <h2>Positive Impact and Future Hopes</h2>
  This award is expected to have a positive impact on the Balinese jewelry industry and increase international interest in Indonesian craft products. Additionally, the award serves as an encouragement for Balinese artisans to continue innovating and expanding their reach in the global market.
  <h2>"Shadow Puppets: The Art of Javanese Wayang Kulit" Exhibition</h2>
    This exhibition is hosted by the Asian Art Museum located in San Francisco, California, and runs from July to December 2024. The exhibition features over 150 Wayang Kulit pieces, including various characters and stories from the Ramayana and Mahabharata epics. Additionally, it highlights the process of making Wayang Kulit, from cutting the leather to painting and assembling the sticks.
    <h2>Efforts in Preservation and Cultural Introduction</h2>
    The exhibition is part of efforts to preserve and introduce Javanese culture to the international community. Wayang Kulit, recognized by UNESCO as an Intangible Cultural Heritage, is one of the oldest performing arts in Indonesia. In Wayang Kulit performances, the puppeteer plays leather puppets behind a screen, creating shadows that tell epic stories.
    <h2>Support from Government and Cultural Institutions</h2>
</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
 <!-- js file link -->
 <script src="script.js"></script>
</html>