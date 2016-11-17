<footer class="section sfooter" >
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-4 font-mbtx cont-info-footer">
        <p style="font-size: 18px;line-height: 19px;">  We are a Passion Driven Community! <br> Medellín, Colombia, Sur América</p>
      </div>
      <div class="col-sm-4 col-md-4 cont-info-footer" style="text-align: center;">
        <a href="https://github.com/colombia-dev/codigo-de-conducta" target="_blank" style="color:#fff;font-size: 14px;" class="font-mbtx enlace-footer">Adoptamos el código de conducta de ColombiaDev</a>
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

<?php wp_footer();?>

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

    <!---js del instagram---->
    <script type="text/javascript">

      jQuery(function() {
        jQuery('#grid-1').gridrotator({
          rows    : 1,
          columns   : 5,
          animType  : 'fadeInOut',
          onhover : false,
          interval    : 7000,
          preventClick    : false,
          w1400           : {
    rows    : 1,
    columns : 5},
          w1024           : {
    rows    : 1,
    columns : 5},

w768            : {
    rows    : 1,
    columns : 5},

w480            : {
    rows    : 1,
    columns : 5},

w320            : {
    rows    : 1,
    columns : 5},

w240            : {
    rows    : 1,
    columns : 5}
        });

      jQuery('#grid-1').fadeIn('1000');


      });

    </script>

<script type="text/javascript">
 $('.owl-carousel').owlCarousel({
    rtl:false,
    loop:true,
    margin:10,
    nav:true,
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

</body></html>