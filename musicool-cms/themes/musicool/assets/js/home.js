
$(document).ready(function() {

  var mainslider = $("#mainslider");

  mainslider.owlCarousel({
      items : 1,
      margin: 0,
      dots: false,
      center: true,
      autoplay: false,
      autoplayTimeOut: 5000,
      loop: false,
      nav: true,
      navText: ['<a class="arrow-prev noselect"></a>','<a class="arrow-next noselect"></a>']
  });

  mainslider.on("changed.owl.carousel", function(event){
      // selecting the current active item
      var item = event.item.index - 2;
      // first removing animation for all captions
      $('.slide-caption').removeClass('animated fadeInUp');
      $('.owl-item').not('.cloned').eq(item).find('.slide-caption').addClass('animated fadeInUp');
  });

  $(".arrow-next").click(function(){
    mainslider.trigger('next.owl.carousel');
  })
  $(".arrow-prev").click(function(){
    mainslider.trigger('prev.owl.carousel');
  })


  var tslider = $("#tslider");

  tslider.owlCarousel({
      items : 1,
      loop: true,
      margin: 0,
      dots: false,
      center : true
  });

  $(".tarrow-next").click(function(){
    tslider.trigger('next.owl.carousel');
  })
  $(".tarrow-prev").click(function(){
    tslider.trigger('prev.owl.carousel');
  })

});

