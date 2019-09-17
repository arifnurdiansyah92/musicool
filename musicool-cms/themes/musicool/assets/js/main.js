
    $(document).ready(function() {

      $('#header').affix({
        // offset: {top: $('.abovebrandnav').height() + 190}
          // offset: {top: 81}
      }).on('affix.bs.affix', function () {
          $('#header').removeClass("animated header-fadeInUpDown");
          $('#header').addClass("animated02 header-fadeInDown");
          // $('#header .header-nav').removeClass("animated headernav-fadeInUpDown");
          // $('#header .header-logo a').removeClass("animated headerlogo-fadeInUpDown");
      }).on('affix-top.bs.affix', function () {
          $('#header').removeClass("animated02 header-fadeInDown");
          $('#header').addClass("animated header-fadeInUpDown");
          // $('#header .header-nav').addClass("animated headernav-fadeInUpDown");
          // $('#header .header-logo a').addClass("animated headerlogo-fadeInUpDown");
      });


      //BUTTON CLOSE MOBILE MENU

      $('.btn-close').on('click', function() {
        $("#js-bootstrap-offcanvas").trigger("offcanvas.close");
      });

    
    });

    $(function() {
        $('.mh').matchHeight();
    });





 



