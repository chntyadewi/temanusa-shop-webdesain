<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nusantara</title>
  <link rel="stylesheet" href="css/blog.css">
  <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- font goggle -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

<!-- post filter -->
<section>
    <div class="container6">
        <span class="filter-item active-filter" data-filter='Blog'>Blog</span>
        <span class="filter-item" data-filter="Review">Review</span>
    </div>
    <!-- Container untuk post-boxes -->
    <div class="container-posts All">
        <div class="blog">
            <div class="post-box All">
                <img src="img/all/fashionn.jpg" alt="" class="post-img">
                <a href="./uassss/page01.php" class="page">
                    Indonesian Batik Steals the Show at Paris <br>Fashion Week
                </a>
                <span class="post-date">12 feb 2024</span>
                <p class="post-description">Indonesian batik once again stole the show at Paris Fashion Week. With innovative designs and still maintaining traditional motifs.</p>
                <!-- profile -->
                <div class="profile">
                    <img src="img/all/baru aja.jpg" alt="" class="profile-img">
                    <span class="profile-name">Senzi Mayzah</span>
                </div>
            </div>  
            <div class="post-box Blog">
                <img src="img/all/tenun.vr.jpg" alt="" class="post-img">
                <a href="./uassss/page02.php" class="page">
                    East Nusa Tenggara Ikat Weaving Showcased at Milan Design Week
                </a>
                <span class="post-date">12 feb 2024</span>
                <p class="post-description">Ikat weaving from East Nusa Tenggara was showcased at Milan Design Week, one of the most prestigious design events in the world.</p>
                <!-- profile -->
                <div class="profile">
                    <img src="img/all/koreaa.jpg" alt="" class="profile-img">
                    <span class="profile-name">Kevin Preyen</span>
                </div>
            </div>
            <div class="post-box Blog">
                <img src="img/all/rotann.jpg" alt="" class="post-img">
                <a href="./uassss/page03.php" class="page">
                    Indonesian rattan handicrafts become a favorite in the European market
                </a>
                <span class="post-date">12 feb 2024</span>
                <p class="post-description">Rattan handicraft products from Indonesia, such as furniture and home decor, are increasingly popular in Europe.</p>
                <!-- profile -->
                <div class="profile">
                    <img src="img/all/cewe.jpg" alt="" class="profile-img">
                    <span class="profile-name">Xaviera Shakira</span>
                </div>
            </div>
            <div class="post-box Blog">
                <img src="img/all/kulit.vr.jpg" alt="" class="post-img">
                <a href="" class="page">
                    Javanese shadow puppets exhibited at the Asian Art Museum in the United States
                </a>
                <span class="post-date">12 feb 2024</span>
                <p class="post-description">Javanese shadow puppets are on display at the Asian Art Museum in San Francisco, USA. The exhibition features various types of shadow puppets</p>
                <!-- profile -->
                <div class="profile">
                    <img src="img/all/tehyung.jpg" alt="" class="profile-img">
                    <span class="profile-name">Julian Zakry</span>
                </div>
            </div>
            <div class="post-box Blog">
                <img src="img/all/perak.vr.jpg" alt="" class="post-img">
                <a href="" class="page">
                    Balinese Silver Jewelry Receives Award at London Craft Week
                </a>
                <span class="post-date">12 feb 2024</span>
                <p class="post-description">Silver jewelry made by Balinese artisans won an award at the London Craft Week. Beauty of design and precision.</p>
                <!-- profile -->
                <div class="profile">
                    <img src="img/all/jung.jpg" alt="" class="profile-img">
                    <span class="profile-name">Ryan Wayna</span>
                </div>
            </div>
            <div class="post-box Blog">
                <img src="img/all/ukiranjepara.hr.jpg" alt="" class="post-img">
                <a href="" class="page">
                    Jepara wood carvings become a collection at Tokyo Art Gallery
                </a>
                <span class="post-date">12 feb 2024</span>
                <p class="post-description">Wood carvings from Jepara, Central Java, on display at one of the leading art galleries in Tokyo, Japan.</p>
                <!-- profile -->
                <div class="profile">
                    <img src="img/all/amin.jpg" alt="" class="profile-img">
                    <span class="profile-name">Lanza Kralza</span>
                </div>
            </div>
            <!-- review -->
        <div class="container Blog">
            <div class="slider">
                <div class="box">
                    <div class="test">
                        <p>The craft products from this store are truly impressive. I bought a few items for my home decor and they add a wonderful artistic touch. The quality of workmanship is very high and the details are stunning. I am also happy to see that they support local artisans and use sustainable materials. Additionally, the unique designs and vibrant colors make each piece stand out. The customer service was exceptional, making the shopping experience even more enjoyable.</p>
                        <div class="user">
                            <div class="image">
                                <img src="img/all/jungkok.jpg" alt="">
                            </div>
                            <div class="name1">
                                <h3>Jungkok Quenzo</h3>
                                <span>King's College London</span>
                            </div>
                        </div>
                        <div class="black">
                            <div class="user">
                                <div class="image">
                                    <img src="img/all/jungkok.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Jungkok Quenzo</h3>
                                    <span>King's College London</span>
                                </div>
                                <div class="star">
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star-half' style='color:rgba(245,144,4,0.92)' ></i>
                                </div>
                                
                                <p>After visiting several regions in Indonesia, <br>I would like to bring home handicrafts as  a memento.</p>
                            </div>
                        </div>
                    </div>
                    <div class="test">
                        <p>The crafts I bought were absolutely amazing! I could see and feel the love and craftsmanship poured into each piece. The designs are both beautiful and functional, something that is hard to find elsewhere. I also appreciate their efforts in using eco-friendly materials. This is something that is very important to me. The vibrant colors and intricate details make each item a unique addition to my home. Moreover, knowing that my purchase supports.</p>
                        <div class="user">
                            <div class="image">
                                <img src="img/all/irene.jpg" alt="">
                            </div>
                            <div class="name1">
                                <h3>Irene Sawhak</h3>
                                <span>Yale University</span>
                            </div>
                        </div>
                        <div class="black">
                            <div class="user">
                                <div class="image">
                                    <img src="img/all/irene.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Irene Sawhak</h3>
                                    <span>Yale University</span>
                                </div>
                                <div class="star">
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star-half' style='color:rgba(245,144,4,0.92)' ></i>
                                </div>
                                <p>This craft e-commerce helps in the work as interior designer. The products offered are perfect for various projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="test">
                        <p>The shopping experience at this store is one of the best I have ever had. The craft products they offer are very diverse and all of them are of high quality. I am very happy with my purchases - they are not only beautiful but also durable. The neat packaging and prompt delivery added more value to my shopping experience. The customer service was exceptional, with staff readily available to assist and answer questions. Each item feels thoughtfully curated.</p>
                        <div class="user">
                            <div class="image">
                                <img src="img/all/oniel.jpg" alt="">
                            </div>
                            <div class="name1">
                                <h3>Oniel Jaztar</h3>
                                <span>California Institute of Technology</span>
                            </div>
                        </div>
                        <div class="black">
                            <div class="user">
                                <div class="image">
                                    <img src="img/all/oniel.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Oniel Jaztar</h3>
                                    <span>California Institute of Technology</span>
                                </div>
                                <div class="star">
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                    <i class='bx bxs-star-half' style='color:rgba(245,144,4,0.92)' ></i>
                                </div>
                                <p>I once bought some rattan furniture and textiles from <br>here, and all of them got compliments from my clients. Easy ordering system</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- review -->
       <div class="container-Blog">
        <div class="slider">
            <div class="box">
                <div class="test">
                    <p>I was very impressed with the quality of the handicrafts I bought from this shop. Every detail is so fine and shows the high skill of the maker. Not only that, the packaging of the products is also very neat and secure, ensuring that the goods arrive in perfect condition. The buying process is also very easy, with a user-friendly and responsive site interface on my phone. Additionally, the swift and reliable delivery exceeded my expectations. </p>
                    <div class="user">
                        <div class="image">
                            <img src="img/all/jaehyun.jpg" alt="">
                        </div>
                        <div class="name1">
                            <h3>Jaehyun Karzra</h3>
                            <span>University of California</span>
                        </div>
                    </div>
                    <div class="black">
                        <div class="user">
                            <div class="image">
                                <img src="img/all/jaehyun.jpg" alt="">
                            </div>
                            <div class="name">
                                <h3>Jaehyun Karzra</h3>
                                <span>University of California</span>
                            </div>
                            <div class="star">
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star-half' style='color:rgba(245,144,4,0.92)' ></i>
                            </div>
                            <p>I highly recommend <br>this shop for anyone looking for quality handicrafts.</p>
                        </div>
                    </div>
                </div>
                <div class="test">
                    <p>As a handicraft collector, I am always on the lookout for unique and high-quality products. This shop did not disappoint. I bought a few items, and they were all amazing. The beautiful details and uniqueness of each product really stood out. The craftsmanship and artistry were evident in every piece, showcasing the skill and dedication of the makers. I also appreciate how they explain each product in detail on their site, providing me with enough information.</p>
                    <div class="user">
                        <div class="image">
                            <img src="img/all/chan.jpg" alt="">
                        </div>
                        <div class="name1">
                            <h3>Haechan Lee</h3>
                            <span>Stanford University</span>
                        </div>
                    </div>
                    <div class="black">
                        <div class="user">
                            <div class="image">
                                <img src="img/all/chan.jpg" alt="">
                            </div>
                            <div class="name">
                                <h3>Haechan Lee</h3>
                                <span>Stanford University</span>
                            </div>
                            <div class="star">
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star-half' style='color:rgba(245,144,4,0.92)' ></i>
                            </div>
                            <p>Fast shipping and the items arrived <br>in excellent <condition class="br"></condition> I am very satisfied with this experience and will definitely return to shop more.</p>
                        </div>
                    </div>
                </div>
                <div class="test">
                    <p>I ordered some handicrafts as gifts for my family, and they absolutely loved them! They were very well made and looked much more expensive than the price I paid. The shopping experience on their site was also very positive. They provide plenty of pictures and clear descriptions for each item, making it easy to choose with confidence. The process was smooth and efficient, with prompt confirmation and updates on my order craftsmanship.</p>
                    <div class="user">
                        <div class="image">
                            <img src="img/all/yoona.jpg">
                        </div>
                        <div class="name1">
                            <h3>Yoona Zayran</h3>
                            <span>Harvard University</span>
                        </div>
                    </div>
                    <div class="black">
                        <div class="user">
                            <div class="image">
                                <img src="img/all/yoona.jpg" alt="">
                            </div>
                            <div class="name">
                                <h3>Yoona Zayran</h3>
                                <span>Harvard University</span>
                            </div>
                            <div class="star">
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star' style='color:rgba(245,144,4,0.92)' ></i>
                                <i class='bx bxs-star-half' style='color:rgba(245,144,4,0.92)' ></i>
                            </div>
                            <p>Overall, a very satisfying shopping experience, and I will definitely <br> 
                                be back to buy more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
  </div>
        </div>
   <!-- card -->
    <div class="text">
        <h1>DO YOU KNOW THE DIFFERENCE?</h1>
    </div>
   <div class="wrapperr">
    <div class="kartu">
        <img src="img/all/card1.jpg" alt="">
        <div class="info">
            <p>Songket is a woven fabric that is handwoven using gold or silver threads. The process of making songket involves adding metal threads into the base fabric which is usually made of silk or cotton.</p>
            <a href="#" class="btn">SONGKET</a> 
        </div>
    </div>

    <div class="kartu">
        <img src="img/all/card2.jpg" alt="">
        <div class="info">
            <p>Weaving is a fabric made by manually weaving threads using traditional looms. The process involves weaving threads vertically (warp) and horizontally (weft) to form a fabric.</p>
            <a href="#" class="btn">TENUN</a> 
        </div>
    </div>
    <div class="kartu">
        <img src="img/all/caerd3.jpg" alt="">
        <div class="info">
            <p>Batik is a fabric made by dyeing techniques using malam (wax) to cover certain parts of the fabric from being exposed to color. The process involves dipping the fabric into the dye, removing the night.</p>
            <a href="#" class="btn">BATIK</a> 
        </div>
    </div>
    
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

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
 <!-- js file link -->
 <script src="script.js"></script>
</html>