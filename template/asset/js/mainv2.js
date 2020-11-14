$(document).ready(function() {

  $('.modal-login .bg').click( function() {
		$('.modal-login').removeClass('visible')
	})
	$('.modal-login .cerrar').click( function() {
    $('.modal-login').removeClass('visible');
    $("#password-error").text("");
    $("#password-error").hide();
  })

  $('header .item-user-xs').click( function() {
    $('.modal-login').toggleClass('visible')
  })

  $('.user').click( function() {
    $('.cuenta-float-old').toggleClass('open')
  })

  $('.cuenta-float-close').click( function () {
    $('.cuenta-float-old').removeClass('open')
  })

  $('header .item-user-out').click( function() {
    $('.modal-login').toggleClass('visible');
    $("#password-error").text("");
    $("#password-error").hide();
  })

  $('header .item-user, header .item-user-xs').click( function() {
    $('.cuenta-float').toggleClass('open')
  })

  $('.cuenta-float-close').click( function () {
    $('.cuenta-float').removeClass('open')
  })
  
  $(document).click(function (e) {
    if (!$(e.target).parents().andSelf().is('.head-login-nav__items')) {
      $('.cuenta-float').removeClass('open')
    }
  })

  /*$(window).on("load", function (e) {
    $(".cont-loader").fadeOut("slow");
  });*/

  setTimeout(function(){ $(".cont-loader").fadeOut("slow") }, 1000);

	$(window).scroll(function() {
		if($(this).scrollTop() > 150) {
			$('header').addClass('fixed')
		} else if ($(this).scrollTop() < 10) {
			$('header').removeClass('fixed')
		}
  })
  
  $(window).scroll(function() {
		if($(this).scrollTop() > 200) {
			$('.btn-cyber-fixed').addClass('scroll-btn')
		} else if ($(this).scrollTop() < 100) {
			$('.btn-cyber-fixed').removeClass('scroll-btn')
		}
  })

  $('.bttn-collapse').click(function() {
    $(this).toggleClass('open')
    $('.nav-menu-collapse').slideToggle()
  })

  $('.no-age').click(function(){
		$('.no-message').fadeIn();
		$('.login-filter').hide();
	});

  $('.bttn-collapse button').click(function() {
    $('body').toggleClass('fixed-menu')
  })

  $('.close-layer').click( function() {
    $('.layer-content').fadeOut();
  })
  

	$('.bttn-more').click(function(){
      $('.drop').slideUp()
      $(this).parent().toggleClass('open').siblings().removeClass('open')
      if($(this).next().is(':visible')){
          $(this).next().slideUp()
      } else {
          $(this).next().slideDown()
      }
  })

  if($(window).innerWidth() >= 1025) {
    $('.login-btn .cerrar').click( function() {
      $('.login-btn').removeClass('open')
    })
    $('header #btnLogin').mouseover(function() {
      $(this).addClass('open')
      $('header #btnRegister').removeClass('open')
    })
    $('header #btnRegister').mouseover(function() {
      $(this).addClass('open')
      $('header #btnLogin').removeClass('open')
    })
    $(document).click(function (e) {
      if (!$(e.target).parents().andSelf().is('header .nav-right')) {
         $('header #btnLogin').removeClass('open');
         $('header #btnRegister').removeClass('open');
      }
    })
    $('.login-btn .cerrar').click( function() {
      $('.login-btn').removeClass('open')
    })
  } else {
    $('header #btnLoginxs').click( function() {
      $('#login-form').addClass('open')
      $('#registercheck').removeClass('open')
      $('.btn-cyber-fixed').addClass('scroll-btn-rg')
    })
    $('header #btnRegisterxs').click( function() {
      $('#registercheck').addClass('open')
      $('#login-form').removeClass('open')
    })

    $('.login-btn .cerrar').click( function() {
      $('#login-form').removeClass('open')
      $('#registercheck').removeClass('open')
      $('.btn-cyber-fixed').removeClass('scroll-btn-rg')
    })
  }

  $('.barra-user .cerrar').click( function(){
    $('.barra-user').slideUp('fast')
  })

  $('.tabs-despacho .nav-tabs li a').click( function() {
    $('a').removeClass('active');
    $(this).addClass('active');
  })

  $('.tabs-news .nav-tabs li a').click( function() {
    $('a').removeClass('active');
    $(this).addClass('active');
  })

  $('.tabs-blade .nav-tabs li a').click( function() {
    $('a').removeClass('active');
    $(this).addClass('active');
  })

  $('.smooth-goto').on('click', function() {      
    if($(this).scrollTop() > 150) {
			$('html, body').animate({scrollTop: $(this.hash).offset().top - 50}, 1000);
    return false;
		} else if ($(this).scrollTop() < 149) {
			$('html, body').animate({scrollTop: $(this.hash).offset().top - 250}, 1000);
    return false;
		}
  });

  $('#headingOne').click(function(){
    $('#collapseOne').toggleClass('open');    
    $('#collapseTwo').removeClass('open');
    $('#collapseThree').removeClass('open');
    $('#collapseFour').removeClass('open');
    $('#collapseFive').removeClass('open');
    $('#collapseSix').removeClass('open');
  });
  $('#headingTwo').click(function(){
    $('#collapseTwo').toggleClass('open');
    $('#collapseOne').removeClass('open');
    $('#collapseThree').removeClass('open');
    $('#collapseFour').removeClass('open');
    $('#collapseFive').removeClass('open');
    $('#collapseSix').removeClass('open');
  });
  $('#headingThree').click(function(){
    $('#collapseThree').toggleClass('open');
    $('#collapseOne').removeClass('open');
    $('#collapseTwo').removeClass('open');
    $('#collapseFour').removeClass('open');
    $('#collapseFive').removeClass('open');
    $('#collapseSix').removeClass('open');
  });
  $('#headingFour').click(function(){
    $('#collapseFour').toggleClass('open');
    $('#collapseOne').removeClass('open');
    $('#collapseTwo').removeClass('open');
    $('#collapseThree').removeClass('open');
    $('#collapseFive').removeClass('open');
    $('#collapseSix').removeClass('open');
  });
  $('#headingFive').click(function(){
    $('#collapseFive').toggleClass('open');    
    $('#collapseOne').removeClass('open');
    $('#collapseTwo').removeClass('open');
    $('#collapseThree').removeClass('open');
    $('#collapseFour').removeClass('open');
    $('#collapseSix').removeClass('open');    
  });
  $('#headingSix').click(function(){
    $('#collapseSix').toggleClass('open');
    $('#collapseOne').removeClass('open');
    $('#collapseTwo').removeClass('open');
    $('#collapseThree').removeClass('open');
    $('#collapseFour').removeClass('open');
    $('#collapseFive').removeClass('open'); 
  });

	$('.drop-category__btn').click( function() {
    $(this).toggleClass('open')
    $('.drop-category__list').slideToggle()
  })


  $('.acordion .acordion__card .card-btn').click(function(){
    $('.card-content').slideUp()
    $(this).parent().toggleClass('open').siblings().removeClass('open')
    if($(this).next().is(':visible')){
        $(this).next().slideUp()
    } else {
        $(this).next().slideDown()
    }
  })

  $('.menu-icon .search').click( function () {
    $(this).toggleClass('open')
    $('.menu-icon .input-txt').toggleClass('open');
  })

  if ($.isFunction($.fn.slick)) {
      
  $('.slide-ofertas').slick({
		infinite: true,
		slidesToShow: 2,
    slidesToScroll: 2,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

  $('.img-slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    customPaging : function(slider, i) {
      var title = $(slider.$slides[i]).data('title');
      return '<a class="dots-item"> '+title+' </a>';
    },
    dotsClass: 'dots-slide',
    pauseOnFocus: false,
    pauseOnHover: false
  })

  $('.img-slide-xs').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    customPaging : function(slider, i) {
      var title = $(slider.$slides[i]).data('title');
      return '<a class="dots-item"><span>'+title+'</span></a>';
    },
    dotsClass: 'dots-slide',
    pauseOnFocus: false,
    pauseOnHover: false
  })

  $('.slide-home div').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1000
  })

  $('.slide-home-xs div').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1000,
    arrows: false,
    dots: true
  })

  /*$('.video-slide div').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 1000
  })*/

  $('.slide-prduct').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

  $('.slide-product-carro').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  })

  $('.slide-prduct-xs').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 9999,
        settings: "unslick"
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

  $('.slide-mix').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 9999,
        settings: "unslick"
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 620,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

   $('.slide-brand-salient').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 9999,
        settings: "unslick"
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 620,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

   $('.box-gallery').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 9999,
        settings: "unslick"
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

  $('.box-slide').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1000,
    fade: true
  })

  $('.tips-slide').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    responsive: [
      {
        breakpoint: 9999,
        settings: "unslick"
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

  $('.tips-circles-xs').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

  $('.learn-slide').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
        }
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }
    ]
  })

  $('.slide-experience').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  })

  $('.tab-slide').slick({
      infinite: false,
      slidesToShow: 4,
      slidesToScroll: 4,
      arrows: false,
      asNavFor: '.content-slide',
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 992,
          settings: "unslick"
        }
      ]
    })
    $('.content-slide').slick({
      infinite: false,
      fade: true,
      arrows: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.tab-slide',
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            arrows: true
          }
        }
      ]
    })
      
  }   

  $('.contract').click( function() {
    $('#form-contact-empresa').slideUp()
    $('#form-contact').slideDown()
    $('html, body').animate({
        scrollTop: $("#form-contact").offset().top
    }, 500);
  })

  $('.contract-matri').click( function() {
    $('#form-contact').slideUp()
    $('#form-contact-empresa').slideDown()
    $('html, body').animate({
        scrollTop: $("#form-contact-empresa").offset().top
    }, 500);
  })

  $('.bttn-down').click( function() {
    $('html, body').animate({
        scrollTop: $(".more-product").offset().top -350
    }, 600);
  })
  

  // $('.bttn-continue').attr('disabled','disabled')
  // $('.input-mix').keyup( function() {
  //   var empty = false;
  //   $('.input-mix').each( function() {
  //     if ($(this).val() == '') {
  //       empty = true
  //     }
  //   })
  //   if (empty) {
  //     $('.bttn-continue').attr('disabled', 'disabled');
  //     } else {
  //     $('.bttn-continue').removeAttr('disabled');
  //   }
  // })

  $('.bttn-cupon').click(function() {
    $('.cont-cupon').slideToggle();
  })

  $('.navbar-toggle-main').click(function() {
    $('.nav-menu-collapse').toggleClass('active');    
    $('.nav-main').toggleClass('active');
    $('.new-logo').toggleClass('open');
  })

  $('.mi-cuenta .btn-address-new').click( function(){
    $(this).toggleClass('open')
    $('.mi-cuenta .btn-address-edit').removeClass('open')
    $('.add-address.new').slideToggle()
    $('.add-address.edit').hide()
  })
  $('.mi-cuenta .btn-address-edit').click( function(){
    $(this).toggleClass('open')
    $('.mi-cuenta .btn-address-new').removeClass('open')
    $('.add-address.edit').slideToggle()
    $('.add-address.new').hide()
  })
  $('.mi-cuenta .cerrar').click( function(){
    $('.add-address').slideUp()
  })

  $('.page-list li').click(function(){
      $("html, body").scrollTop(0);
      var pag = window.location;
      if(pag.indexOf("busqueda") == -1){
          window.location.reload();
      }
  });
    
    $("#products").on("click", ".select-relevance", function(){
        if(!$(this).parents().find('.dropdown-menu-relevance').is(':visible')){
            $(this).parents().find('.dropdown-menu-relevance').show();
            $(this).parents().find('.dropdown-menu-products').hide();
        }
        else $(this).parents().find('.dropdown-menu-relevance').hide();
    });

    $("#products").on("click", ".select-products", function(){
        if(!$(this).parents().find('.dropdown-menu-products').is(':visible')){
            $(this).parents().find('.dropdown-menu-products').show();
            $(this).parents().find('.dropdown-menu-relevance').hide();
        }
        else $(this).parents().find('.dropdown-menu-products').hide();
    });
    
    /*$(".box-select .dropdown-menu").on("click", "a", function(){
        var url = $(this).prop("href");
        window.location.href = url;
    });*/

	$('.light-promo .cerrar').click( function(){
		$('.light-promo').fadeOut()
	})
    
    $('.filter-button').click(function() {
        $('.icon-filter').click();
        /* Aqui se esconden los menus que esten visibles*/
        //$(".box-select .select-order").parents().find('.dropdown-menu').hide();
    });
    
    $('.brands').on("change", "#marcas", function(e){
        e.preventDefault();
        //var pag = window.location;
        if($(this).val() != "")
            window.location.href = "https://ventas.ccu.cl/37-marcas"+$(this).val();
        else window.location.href = "https://ventas.ccu.cl/37-marcas";
        /* Aqui se esconden los menus que esten visibles*/
        //$(".box-select .select-order").parents().find('.dropdown-menu').hide();
    });

    $('.modal-encuesta .bg').click( function() {
		$('.modal-encuesta').fadeOut()
	})
	$('.modal-encuesta .cerrar').click( function() {
		$('.modal-encuesta').fadeOut()
  	})

	$('.modal-encuesta input:radio').click( function() {
		$(this).parent().addClass('open').siblings().removeClass('open')
		if($(this).next().is(':checked')){
	        $(this).next().fadeOut()
	    } else {
	        $(this).next().fadeIn()
	    }
	})

  $('.btn-contacto').addClass('open')
    $('.btn-contacto').click( function () {
      $('.form-contacto').toggleClass('open')
    })
    $('.cerrar-form').click( function () {
      $('.form-contacto').removeClass('open')
    })

    $('[data-toggle="tooltip"]').tooltip();
    
  if ($.isFunction($.fn.lightGallery)) {
    $('#lightgallery').lightGallery({
        selector: '.box'
    });
  }  

  $('.btn-contacto2').addClass('open')
$('.btn-contacto2').click( function () {
	$('.form-contacto').toggleClass('open')
})

})