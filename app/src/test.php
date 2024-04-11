<?php
/* Template Name: test page */
?>



<style>
   .rmbt-video-block-full-width {
      height: 420px;
      overflow: hidden;
      padding: 0px 0px 0px 0px;
      position: relative;

   }

   .rmbt-video-block-full-width ::after {
      content: '';

      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: 2;
      background-color: rgba(0, 0, 0, 0.3);
   }

   .rmbt-video-block-full-width iframe {
      max-width: 1000%;
      margin-left: 0px;
      margin-top: -337px;
      width: 1970px;
      height: 1070.44px;
   }
</style>



<div class="wrapper-section">
   <div id="rmbt-promo-video" class="rmbt-full-width rmbt-video-block-full-width">
      <section class="rmbt-video-block">
         <!-- <iframe src="https://www.youtube.com/embed/off7w3-tptA?controls=0&autoplay=0&mute=1&loop=1&playlist=off7w3-tptA" frameborder="0" allow="autoplay; loop;" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->

         <iframe frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="Impexmash - PROMO" src="https://www.youtube.com/embed/off7w3-tptA?playlist=off7w3-tptA&amp;iv_load_policy=3&amp;enablejsapi=1&amp;disablekb=1&amp;autoplay=1&amp;mute=1&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;wmode=transparent&amp;origin=<?php echo get_site_url(); ?>"></iframe>


      </section>


   </div>
</div>

<script>
   /* Start the video when it is scrolled into view to the viewport */
   // Function to check element visibility
   function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
         rect.top >= 0 &&
         rect.left >= 0 &&
         rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
         rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
   }

   // Function to start video
   function playVideoWhenVisible() {
      var videoBlock = document.getElementById('rmbt-promo-video'); // замените 'video-block' на id вашего блока с видео
      if (isElementInViewport(videoBlock)) {
         var video = videoBlock.querySelector('iframe');
         video.src = video.src.replace('autoplay=0', 'autoplay=1'); // замените 'autoplay=0' на 'autoplay=1'
         window.removeEventListener('scroll', playVideoWhenVisible);
      }
   }

   window.addEventListener('scroll', playVideoWhenVisible);
</script>