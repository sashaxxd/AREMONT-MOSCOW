   
   $(document).ready(function()
   {
      $("a[href*='#header']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#site_header').offset().top }, 600, 'linear');
      });
      $("#site_menu_header ul li a").click(function(event)
      {
         $("#site_menu_header input").prop("checked", false);
      });
      $(".Shape4").DrawPolygon(
      {
         points: [0,0,22,0,0,30,-1,-1],
         strokeStyle: '#245580',
         lineWidth: 0,
         fillStyle: '#B22222'
      });
      $("#Shape5").DrawPolygon(
      {
         points: [0,0,22,0,0,30,-1,-1],
         strokeStyle: '#245580',
         lineWidth: 0,
         fillStyle: '#B22222'
      });
      $("#Shape6").DrawPolygon(
      {
         points: [0,0,22,0,0,30,-1,-1],
         strokeStyle: '#245580',
         lineWidth: 0,
         fillStyle: '#B22222'
      });



      $("#SlideShow1").slideshow(
      {
         interval: 3000,
         type: 'sequence',
         effect: 'none',
         direction: '',
         pagination: false,
         fullscreen: 4,
         maxWidth: 1920,
         effectlength: 2000
      });
      $("#SlideShow1_back a").click(function()
      {
         $('#SlideShow1').slideshow('previmage');
      });
      $("#SlideShow1_next a").click(function()
      {
         $('#SlideShow1').slideshow('nextimage');
      });
      $("#SlideShow2").slideshow(
      {
         interval: 3000,
         type: 'sequence',
         effect: 'none',
         direction: '',
         pagination: false,
         fullscreen: 4,
         maxWidth: 1920,
         effectlength: 2000
      });
      $("#SlideShow2_back a").click(function()
      {
         $('#SlideShow2').slideshow('previmage');
      });
      $("#SlideShow2_next a").click(function()
      {
         $('#SlideShow2').slideshow('nextimage');
      });
      $("#SlideShow3").slideshow(
      {
         interval: 3000,
         type: 'sequence',
         effect: 'none',
         direction: '',
         pagination: false,
         fullscreen: 4,
         maxWidth: 1920,
         effectlength: 2000
      });
      $("#SlideShow3_back a").click(function()
      {
         $('#SlideShow3').slideshow('previmage');
      });
      $("#SlideShow3_next a").click(function()
      {
         $('#SlideShow3').slideshow('nextimage');
      });
      $("#SlideShow4").slideshow(
      {
         interval: 3000,
         type: 'sequence',
         effect: 'none',
         direction: '',
         pagination: false,
         fullscreen: 4,
         maxWidth: 1920,
         effectlength: 2000
      });
      $("#SlideShow4_back a").click(function()
      {
         $('#SlideShow4').slideshow('previmage');
      });
      $("#SlideShow4_next a").click(function()
      {
         $('#SlideShow4').slideshow('nextimage');
      });
      $("#SlideShow5").slideshow(
      {
         interval: 3000,
         type: 'sequence',
         effect: 'none',
         direction: '',
         pagination: false,
         fullscreen: 4,
         maxWidth: 1920,
         effectlength: 2000
      });
      $("#SlideShow5_back a").click(function()
      {
         $('#SlideShow5').slideshow('previmage');
      });
      $("#SlideShow5_next a").click(function()
      {
         $('#SlideShow5').slideshow('nextimage');
      });
      $("#SlideShow6").slideshow(
      {
         interval: 3000,
         type: 'sequence',
         effect: 'none',
         direction: '',
         pagination: false,
         fullscreen: 4,
         maxWidth: 1920,
         effectlength: 2000
      });
      $("#SlideShow6_back a").click(function()
      {
         $('#SlideShow6').slideshow('previmage');
      });
      $("#SlideShow6_next a").click(function()
      {
         $('#SlideShow6').slideshow('nextimage');
      });
      $("#SlideShow7").slideshow(
      {
         interval: 3000,
         type: 'sequence',
         effect: 'none',
         direction: '',
         pagination: false,
         fullscreen: 4,
         maxWidth: 1920,
         effectlength: 2000
      });
      $("#SlideShow7_back a").click(function()
      {
         $('#SlideShow7').slideshow('previmage');
      });
      $("#SlideShow7_next a").click(function()
      {
         $('#SlideShow7').slideshow('nextimage');
      });
      $("#SlideShow8").slideshow(
      {
         interval: 3000,
         type: 'sequence',
         effect: 'none',
         direction: '',
         pagination: false,
         fullscreen: 4,
         maxWidth: 1920,
         effectlength: 2000
      });
      $("#SlideShow8_back a").click(function()
      {
         $('#SlideShow8').slideshow('previmage');
      });
      $("#SlideShow8_next a").click(function()
      {
         $('#SlideShow8').slideshow('nextimage');
      });

   });


   $(document).ready(function()
   {

   $(".SlideShow_array").slideshow(
       {
           interval: 3000,
           type: 'sequence',
           effect: 'none',
           direction: '',
           pagination: false,
           fullscreen: 4,
           maxWidth: 1920,
           effectlength: 2000
       });
   $(".SlideShow_array_back").click(function()
   {
       $(this).parent('.SlideShow_array').slideshow('previmage');
   });
   $(".SlideShow_array_next").click(function()
   {
       $(this).parent('.SlideShow_array').slideshow('nextimage');
   });

   });


   /**
    * Сообщения флеш
    */
   $("#mess_message_close").on('click', function () {
       $("#mess_msg-cntain").hide();
   });

   $("#message_message_close_error").on('click', function () {
       $("#message_msg-cntain-error").hide();
   });

   $('.modal_button').click(function (){

       if ($(".error-modal").find('*').length == 0) {
           if(!$('div').is("#appen")){
               $(".close").after('<div id="appen"></div>');
           }
           $('#site_uid25').hide();
       }
   });

