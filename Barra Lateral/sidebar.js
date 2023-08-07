 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>
  <script>
    $('html, body').animate({
      scrollTop: 0
    }, 'slow');
    $(".menu > ul > li").click(function(e) {

      $(this).siblings().removeClass("active");

      $(this).toggleClass("active");

      $(this).find("ul").slideToggle();

      $(this).siblings().find("ul").slideUp();

      $(this).siblings().find("ul").find("li").removeCLass("active");
    });

    $(".menu-btn").click(function() {
      $(".sidebar").toggleClass("active");
    });
 </script>