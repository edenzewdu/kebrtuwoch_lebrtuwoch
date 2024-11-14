<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.homecss')
    <script>
        async function fetchLatestVideos() {
            const apiKey = 'AIzaSyByv2zCRUDpnqB8Vhc5JJJrEKsK5t5NfEw'; // Replace with your YouTube API key
            const channelId = ''; // Replace with your YouTube channel ID
            const maxResults = 5; // Number of videos to fetch

            const response = await fetch(`https://www.googleapis.com/youtube/v3/search?key=${apiKey}&channelId=${channelId}&part=snippet,id&order=date&maxResults=${maxResults}`);
            const data = await response.json();

            const videoContainer = document.getElementById('video-container');

            data.items.forEach(item => {
                if (item.id.kind === 'youtube#video') {
                    const videoId = item.id.videoId;
                    const iframe = document.createElement('iframe');
                    iframe.width = '560';
                    iframe.height = '315';
                    iframe.src = `https://www.youtube.com/embed/${videoId}`;
                    iframe.frameBorder = '0';
                    iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
                    iframe.allowFullscreen = true;

                    videoContainer.appendChild(iframe);
                }
            });
        }

        // Fetch latest videos on page load
        window.onload = fetchLatestVideos;
    </script>
</head>
<body>
   
   <!-- header section start -->
   <div class="header_section">
      @include('include.header')
   </div>
   <!-- header section end -->
   
   <!-- videos section start -->
   <div class="blog_section layout_padding">
      <div class="container">
         <h1 class="blog_taital">See Our Video</h1>
         <p class="blog_text">Many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
         
         <div id="video-container" class="video_container">
            <!-- YouTube videos will be embedded here -->
         </div>

         <div class="play_icon_main">
            <div class="play_icon"><a href="https://www.youtube.com/@bertumedia1"><img src="images/play-icon.png"></a></div>
         </div>
      </div>
   </div>
   <!-- videos section end -->

   <!-- footer section start -->
   @include('include.footer')
   <!-- footer section end -->
   <!-- copyright section start -->

</body>
</html>
