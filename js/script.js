$(function () {

    $('.nav-item.dropdown').mouseenter(function () {
        $(this).addClass('show');
        $(this).children('.dropdown-menu').addClass('show');
        $(this).children('.dropdown-toggle').attr('aria-expanded', 'true');
    }).mouseleave(function () {
        $(this).removeClass('show');
        $(this).children('.dropdown-menu').removeClass('show');
        $(this).children('.dropdown-toggle').attr('aria-expanded', 'false');
    });

    $('.img-small').on('mouseenter click', function () {
        var src = $(this).data('src');
        $('.img-large').css("background-image", "url('" + src + "')");
    });

    var imgLarge = $('.img-large');

    imgLarge.mousemove(function () {
        var relX = event.pageX - $(this).offset().left;
        var relY = event.pageY - $(this).offset().top;
        var width = $(this).width();
        var height = $(this).height();
        var x = (relX / width) * 100;
        var y = (relY / height) * 100;
        $(this).css("background-position", x + "% " + y + "%");
    });

    imgLarge.mouseout(function () {
        $(this).css("background-position", "center");
    });

    $(window).resize(function () {
        setImgLarge();
        setImgSmall();
    });

    setImgLarge();
    setImgSmall();

});

function setImgLarge() {
    var imgLarge = $('.img-large');
    var width = imgLarge.width();
    imgLarge.height(width * 2 / 3);
}

function setImgSmall() {
    var imgSmall = $('.img-small');
    var width = imgSmall.width();
    imgSmall.height(width);
}
// AJAX 
const url = "http://localhost/project/api/products.php";
$.ajax({
    url: url,
    method: "GET",
    success: function (e) {
        e.data.forEach(function (product) {
            let stacher = `<div class="col-xl-2 col-lg-3 col-sm-6 my-3">
<div class="col-12 bg-white text-center h-100 product-item">
    <div class="row h-100">
        <div class="col-12 p-0 mb-3">
            <a href="">
                <img src="../project/admin/assets/product/${product.img}" class="img-fluid" />
            </a>
        </div>
        <div class="col-12 mb-3">
            <a href="product.html" id="p_title" class="product-name">${product.title}</a>
        </div>
        <div class="col-12 mb-3 align-self-end">
            <button class="btn cart_btn btn-outline-dark" type="button">
                <i class="fas fa-cart-plus mr-2"></i>Add to cart
            </button>
        </div>
    </div>
</div>
</div>`;
            $(".product_container").append(stacher);
        })
    }
});

// localStorage 
$(document).on("click", ".cart_btn", function (e) {
    var new_data = e.target.parentNode.parentNode.childNodes[3].childNodes[1].innerText;
    if (localStorage.getItem('data') == null) {
        localStorage.setItem('data', '[]');
    }

    var old_data = JSON.parse(localStorage.getItem('data'));
    old_data.push(new_data);
    localStorage.setItem('data', JSON.stringify(old_data));
});

var value = localStorage.getItem('data');

jQuery.post("cart.php", { product: value }, function (data) {
     console.log(data);
}).fail(function () {
     alert("Damn, something broke");
}); 
