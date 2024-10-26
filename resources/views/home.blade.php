<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.homecss')
   </head>
   <body>
      
      <!-- header section start -->
      <div class="header_section">
         
         @include('include.header')
         
            <div class="containers">
               <svg class="wave-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
                  <!-- Wave svg -->
                  <path stroke="#ffffff" stroke-width="4" fill="none" d="M0,60L48,80C96,100,192,140,288,150C384,160,480,120,576,130C672,140,768,180,864,175C960,170,1056,130,1152,130C1248,130,1344,160,1392,180L1440,200"></path>
                  </svg>
            <img src="images/Picture1-removebg-preview.png" alt="Flexing Arm" class="logon">
          </div>
            <div class="arm-container">
              <img src="images/arm-flex.png" alt="Flexing Arm" class="flexing-arm">
            </div>
          
         <!-- banner section start -->
         @include('include.banner')
         
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- our strongest section start -->
      @include('include.ourStrongest')
      <!-- our strongest section end -->
      
      @include('include.about')
      
      <!-- videos section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="blog_taital">See Our  Video</h1>
            <p class="blog_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which</p>
            <div class="play_icon_main">
               <div class="play_icon"><a href="https://www.youtube.com/@bertumedia1/videos"><img src="images/play-icon.png"></a></div>
            </div>
         </div>
      </div>
      <!-- videos section end -->
      @include('include.aboutus')
      <!-- footer section start -->
      @include('include.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
       
   </body>
</html>