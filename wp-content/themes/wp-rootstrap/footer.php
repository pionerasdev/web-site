<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rootstrap
 */
?>


<footer class="section sfooter" >
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-4 font-mbtx cont-info-footer">
        <p style="font-size: 18px;line-height: 19px;">  We are a Passion Driven Community! <br> Medellín, Colombia, Sur América</p>
      </div>
      <div class="col-sm-4 col-md-4 cont-info-footer" style="text-align: center;">
        <a href="https://github.com/colombia-dev/codigo-de-conducta" target="_blank" style="color:#fff;font-size: 14px;" class="font-mbtx enlace-footer">Adoptamos el código de conducta de <a href="https://github.com/colombia-dev/codigo-de-conducta" target="_blank" style="text-decoration: underline;
color:#fff;font-size: 14px">ColombiaDev</a>
        <p class="font-mbtx">© PionerasDevelopers 2016. All rights reserved.</p>
      </div>
      <div class="col-sm-4 col-md-4 cont-info-footer" style="text-align: center;margin-top: -9px;">
        <p style="font-size: 18px;/* text-align: left; */margin-bottom: 0px;" class="font-mbtx">Síguenos en:</p>
        <a href="https://twitter.com/pionerasdev" target="_blank"><i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a>
        <a href="https://github.com/pionerasdevelopers" target="_blank"><i class="fa fa-2x fa-fw fa-github text-inverse"></i></a>
        <a href="https://www.instagram.com/pionerasdev/" target="_blank"><i class="fa fa-2x fa-fw fa-instagram text-inverse"></i></a>
        <a href="https://es.pinterest.com/piodev/" target="_blank"><i class="fa fa-2x fa-fw fa-pinterest-p text-inverse"></i></a>
        <a href="https://www.flickr.com/photos/141169078@N06/" target="_blank"><i class="fa fa-2x fa-fw fa-flickr text-inverse"></i></a>
        <a href="https://pionerasdevelopers.slack.com" target="_blank"><i class="fa fa-2x fa-fw fa-slack text-inverse"></i></a>
      </div>
    </div>
  </div>
</footer>
			
<?php wp_footer(); ?>

 <script type="text/javascript">
    $(window).scroll(function(){
     if ($(window).scrollTop()> 300)
     {
      $('a.back-to-top').fadeIn('fast');
     } else
     {
      $('a.back-to-top').fadeOut('fast');
     }
    })


    $('a.back-to-top').click(function(){
       $('body').animate({
        scrollTop:0
     },1000);

      return false;
    })
    </script>

<script type="text/javascript">
 $('.owl-carousel').owlCarousel({
    rtl:false,
    loop:true,
    margin:10,
    nav:true,
    autoWidth:true,
    items:4,
    autoplay:true,
    autoplayTimeout:1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
        
</script>
<script type="text/javascript">
  
  var current = 0;
    $(document).on('keyup', function (e) {
        switch (e.which) {
          case 27:
                 $('.close-popup-trayectoria')[current].click();
                break;
            case 37:
                $('.prev')[--current].click();
                break;
      
            case 39:
                $('.next')[++current].click();
                break;


    }
});

</script>

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52786953-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>