<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <title>Wellgen | Sinh trắc dấu vân tay | Bí ẩn dấu vân tay | Khoa học dấu vân tay | Tư vấn giáo dục | 0967 1441 30</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="icon"  type="image/png"   href="" />
      <link rel="stylesheet" href={{asset('/template/frontend/pc/css/reset-min.css')}}>
      <link rel="stylesheet" href={{asset('/template/frontend/pc/css/bootstrap.min.css')}}>
      <link href={{asset('/template/frontend/pc/css/jasny-bootstrap.min.css')}} rel="stylesheet">
      <link rel="stylesheet" href={{asset('/template/frontend/pc/css/common.css')}}>
      <link rel="stylesheet" href={{asset('/template/frontend/pc/css/navmenu-push.css')}}>
      <link rel="stylesheet" href={{asset('/template/frontend/pc/css/home_style.css')}}>
      <link rel="stylesheet" href={{asset('/template/frontend/pc/css/font-awesome.min.css')}}>
      <link rel="stylesheet" href={{asset('/template/frontend/pc/css/font-awesome.css')}}>
      <link rel="stylesheet" href={{asset('/template/frontend/pc/css/microfiche.css')}}>
      <link rel="stylesheet" href={{asset('/template/frontend/pc/css/microfiche.demo.css')}}>
      <link rel="stylesheet" media="only screen and (max-device-width: 768px)" href={{asset('/template/frontend/pc/css/common_phone.css')}} />
      <script type="text/javascript" src={{asset('/template/frontend/pc/js/jquery.js')}}></script>
      <script type="text/javascript" src={{asset('/template/frontend/pc/js/bootstrap.min.js')}}></script>
      <script src={{asset('/template/frontend/pc/js/jasny-bootstrap.min.js')}}></script>
      <style type="text/css">.logo-container {  background: url('public/assets/image/logo/original/wellgen-logo-v2-png_1441701176.png')  !important ;  width: 315px !important ; height: 99px !important  ;   }   </style>
   </head>
   <body>
      {{-- <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-70478340-1', 'auto');
         ga('send', 'pageview');
         
      </script> --}}
      <!-- NAVBAR-->
      @include('frontend.static.menu')
      <!-- END  NAVBAR -->
      <!-- SLIDER-WRAPPER -->
      @include('frontend.static.slider_wrapper')
      <!-- END-SLIDER-WRAPPER -->
      <!-- CONTENT-WRAPPER -->
      @include('frontend.static.content_wrapper')
      <!-- END-CONTENT-WRAPPER -->
      <!-- BOTTOM-WRAPPER -->
      @include('frontend.static.bottom_wrapper')
      <!-- END-BOTTOM-WRAPPER -->
      <!-- FOOTER -->
      @include('frontend.static.footer')
      <!-- END-FOOTER -->
      <script type="text/javascript" src={{asset('/template/frontend/pc/js/microfiche.js')}}></script>
      <script>$('#default').microfiche({ autoplay: 3, cyclic: true});</script>
      <script></script>
   </body>
   <script type="text/javascript">
      $(document).ready(function(){
          $('.block-video p iframe').attr('allowfullscreen', 'allowfullscreen');
          $('.video .list-video a').on('click',function(e){
              e.preventDefault();
              var position = $(this).attr('value');
              var position_active = $('.video .block-active').attr('value');
              var arrVideo = $('.video .block-video');
              if(position == position_active){
      
              }
              else{
                  $('.video .block-video').removeClass('block-active');
                  $(arrVideo[position]).addClass('block-active');
                  $('.video > div.block-video:not(.block-active) p iframe').each(function(e){
                      $(this).attr('src', $(this).attr('src'));
                  });
              }
      
          });
      
      });
      $('.carousel').carousel({
              interval: 6000
      });
   </script>
</html>
{{-- <script type="text/javascript">
   var xmlhttp;
   if (window.XMLHttpRequest)
     {// code for IE7+, Firefox, Chrome, Opera, Safari
     xmlhttp=new XMLHttpRequest();
     }
   else
     {// code for IE6, IE5
     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
     }
   xmlhttp.open("POST","http://wellgen.vn/adminstat/index/clientstat/1/screenwidth/"+window.screen.availWidth+"/screenheight/"+window.screen.availHeight,true);
   xmlhttp.send();
</script> --}}