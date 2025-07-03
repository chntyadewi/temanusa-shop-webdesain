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
        text.classList.add('text');

        const filter = item.getAttribute('data-filter');
        if (filter === 'All') {
            blogSection.style.display = 'block';
            text.style.display = '';
        } else if (filter === 'Blog') {
            blogSection.style.display = 'block';
        } else {
            blogSection.style.display = 'none';
            text.style.display = 'none';
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