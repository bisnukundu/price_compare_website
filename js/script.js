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


// localStorage 
// $(document).on("click", ".cart_btn", function (e) {
//     var new_data = e.target.parentNode.parentNode.childNodes[3].childNodes[1].innerText;
//     if (localStorage.getItem('data') == null) {
//         localStorage.setItem('data', '[]');
//     }

//     var old_data = JSON.parse(localStorage.getItem('data'));
//     old_data.push(new_data);
//     localStorage.setItem('data', JSON.stringify(old_data));
// });

// var value = localStorage.getItem('data');

// jQuery.post("cart.php", { product: value }, function (data) {
//     console.log(data);
// }).fail(function () {
//     alert("Damn, something broke");
// });
