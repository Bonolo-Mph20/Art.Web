<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/> 
    <title>Art.Web</title>
</head>
<body>
  <section class="showcase">
    <header>
      <h2 class="logo">Art.Web</h2>
      <div class="toggle"></div>
    </header>
    <video src="pexels_videos_2310761 (1080p).mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>Enter The Magical World Of Art</h2> 
      <h3>Developed by young and passionate artists</h3>
      <p>
        In this website, we have collections of amazing artwork of young artists that can take your breath away.
        This art is from creative young artists who creates amazing artwork out of their passion.
        Click the Explore button below to enter the magical world of these young stars.
      </p>
      <a href="Explore.html">Explore</a>
    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <div class="menu">
      <ul>
           <li><a href="#">Home</a></li>
           <li><a href="#">News</a></li>
           <li><a href="#">About us</a></li>
           <li><a href="#">Blog</a></li>
           <li><a href="#">Contact</a></li>
    </ul>
  </div>
</body>
<script>
   const menuToggle = document.querySelector('.toggle');
      const showcase = document.querySelector('.showcase');

      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
      })
</script>
</html>