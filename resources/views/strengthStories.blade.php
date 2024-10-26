<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.homecss')
   </head>
   <body>
      
      <!-- header section start -->
      <div class="header_section">
         @include('include.header')
      </div>
      
      <!-- Hero Section -->
      <div class="header_section" id="home">
         <h1>Share Your Strength Stories</h1>
         <p>Let’s inspire each other by sharing stories of resilience and strength that can uplift our community.</p>
         <a href="#stories" class="btn">Start Sharing</a>
         <svg style="position: relative; bottom: -30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 350">
            <path fill="#ffffff" d="M0,0L48,26.7C96,53,192,107,288,122.7C384,139,480,117,576,133.3C672,149,768,203,864,202.7C960,203,1056,149,1152,149.3C1248,149,1344,203,1392,229.3L1440,256L1440,350L1392,350C1344,350,1248,350,1152,350C1056,350,960,350,864,350C768,350,672,350,576,350C480,350,384,350,288,350C192,350,96,350,48,350L0,350Z" transform="translate(0, 50)"></path>
         </svg>
      </div>

      <!-- Our Strongest Section -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Our Strongest</h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div><img src="images/dr.AbiyAhmed.jpg" class="services_img"></div>
                     <div class="btn_main"><a href="#">Dr. Abiy Ahmed</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/haileGebreslase.jpg" class="services_img"></div>
                     <div class="btn_main active"><a href="#">Haile Gebrselassie</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/ansalegualu.jpg" class="services_img"></div>
                     <div class="btn_main"><a href="#">Pilot Amsale Gualu</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Share Stories Section -->
      <section class="header_section" id="stories">
         <svg class="footer_wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,0L48,32C96,64,192,128,288,138.7C384,149,480,107,576,112C672,117,768,171,864,181.3C960,192,1056,160,1152,160C1248,160,1344,192,1392,208L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
         </svg>
         <h2>Share Your Strength Stories</h2>
         <p>What’s one story of strength you’d like to share with the world today?</p>
         <textarea rows="5" placeholder="Write your story here..."></textarea>
         <button class="btn" style="margin-bottom: 12%;">Submit</button>
         <svg style="position: relative; bottom: -130px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 350">
            <path fill="#ffffff" d="M0,0L48,26.7C96,53,192,107,288,122.7C384,139,480,117,576,133.3C672,149,768,203,864,202.7C960,203,1056,149,1152,149.3C1248,149,1344,203,1392,229.3L1440,256L1440,350L1392,350C1344,350,1248,350,1152,350C1056,350,960,350,864,350C768,350,672,350,576,350C480,350,384,350,288,350C192,350,96,350,48,350L0,350Z" transform="translate(0, -90)"></path>
         </svg>
      </section>

      <!-- Best Shared Stories Section -->
      <section class="best_stories_section layout_padding" style="padding: 40px 0; background-color: #f9f9f9;">
        <div class="container" style="max-width: 1200px; margin: auto; text-align: center;">
            <h1 class="stories_title" style="font-size: 2.5em; margin-bottom: 20px; color: #333;">Best Shared Strength Stories</h1>
            <div class="stories_list" style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
                <div class="story_item" style="background-color: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 90%; max-width: 600px;">
                    <h3 style="font-size: 1.8em; color: #007bff;">Story Title 1</h3>
                    <p style="font-size: 1em; color: #555;">A brief description of the story shared by someone.</p>
                </div>
                <div class="story_item" style="background-color: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 90%; max-width: 600px;">
                    <h3 style="font-size: 1.8em; color: #007bff;">Story Title 2</h3>
                    <p style="font-size: 1em; color: #555;">A brief description of another inspiring story shared.</p>
                </div>
                <div class="story_item" style="background-color: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 90%; max-width: 600px;">
                    <h3 style="font-size: 1.8em; color: #007bff;">Story Title 3</h3>
                    <p style="font-size: 1em; color: #555;">A brief description of yet another uplifting story.</p>
                </div>
            </div>
        </div>
    </section>

      <!-- Share Your Funniest Story Ever Section -->
      <section class="header_section" id="stories">
        <svg class="footer_wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
           <path fill="#ffffff" fill-opacity="1" d="M0,0L48,32C96,64,192,128,288,138.7C384,149,480,107,576,112C672,117,768,171,864,181.3C960,192,1056,160,1152,160C1248,160,1344,192,1392,208L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
        <h2>Share Your Funniest Story Ever</h2>
            <p>What’s the funniest story you have that can make everyone laugh?</p>
            <textarea rows="5" placeholder="Write your story here..."></textarea>
         <button class="btn" style="margin-bottom: 12%;">Submit</button>
         <svg style="position: relative; bottom: -130px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 350">
            <path fill="#ffffff" d="M0,0L48,26.7C96,53,192,107,288,122.7C384,139,480,117,576,133.3C672,149,768,203,864,202.7C960,203,1056,149,1152,149.3C1248,149,1344,203,1392,229.3L1440,256L1440,350L1392,350C1344,350,1248,350,1152,350C1056,350,960,350,864,350C768,350,672,350,576,350C480,350,384,350,288,350C192,350,96,350,48,350L0,350Z" transform="translate(0, -90)"></path>
         </svg>
      </section>

      <!-- Funny Stories Shared Section -->
      <section class="funniest_stories_section layout_padding" style="padding: 40px 0; background-color: #f0f8ff;">
        <div class="container" style="max-width: 1200px; margin: auto; text-align: center;">
            <h1 class="stories_title" style="font-size: 2.5em; margin-bottom: 20px; color: #333;">Funniest Stories shared</h1>
            <div class="stories_list" style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
                <div class="story_item" style="background-color: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 90%; max-width: 600px;">
                    <h3 style="font-size: 1.8em; color: #ff4500;">Funny Story Title 1</h3>
                    <p style="font-size: 1em; color: #555;">A brief description of a funny story shared by someone.</p>
                </div>
                <div class="story_item" style="background-color: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 90%; max-width: 600px;">
                    <h3 style="font-size: 1.8em; color: #ff4500;">Funny Story Title 2</h3>
                    <p style="font-size: 1em; color: #555;">A brief description of another funny story shared.</p>
                </div>
                <div class="story_item" style="background-color: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 90%; max-width: 600px;">
                    <h3 style="font-size: 1.8em; color: #ff4500;">Funny Story Title 3</h3>
                    <p style="font-size: 1em; color: #555;">A brief description of yet another funny story.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Register Here Section -->
<section class="register_section" style="background-image: url('../images/youtube.jpg');background-position: center;background-repeat: no-repeat;height: 60vh; padding: 80px 20px;">
    <div class="container" style="max-width: 1200px; margin: auto; text-align: center; padding: 40px 20px; background-color: rgba(255, 255, 255, 0.8); border-radius: 10px;">
        <h1 class="register_title" style="font-size: 2.5em; margin-bottom: 20px; color: #000000;">Join Our Channel!</h1>
        <p style="font-size: 1.2em; color: #000000; margin-bottom: 20px;">Be part of our community and share your stories of strength and laughter!</p>
        <a href="YOUR_REGISTRATION_LINK" class="btn" style="padding: 10px 20px; font-size: 1.1em; color: white; background-color: #C4D832; border-radius: 5px; text-decoration: none;">Register Here</a>
    </div>
</section>



      <!-- footer section start -->
      @include('include.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
    
   </body>
</html>
