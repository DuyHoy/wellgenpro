<!DOCTYPE html>
<html lang="en">
  {{--head--}}
  @include('frontend.static.head')
  <link rel="stylesheet" href={{asset('/template/frontend/pc/css/newscategory_style.css')}}>
  {{--end head--}}
   <body>
      {{-- <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-70478340-1', 'auto');
         ga('send', 'pageview');
         
      </script>  --}}

       <!-- NAVBAR-->
       @include('frontend.static.menu')
       <!-- END  NAVBAR -->
    {{-- Content for all --}}
    @yield('content')
    <!-- FOOTER -->
    @include('frontend.static.footer')
    <!-- END-FOOTER -->
   </body>
   <script type="text/javascript"></script>
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