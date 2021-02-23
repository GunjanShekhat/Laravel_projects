<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- BOOTSTRAP CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
     </script> <!-- Latest compiled and minified CSS -->
     <!-- BOOTSTRAP CDN END-->

     <style>
     * {
          box-sizing: border-box;
     }

     body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
     }

     .header {
          overflow: hidden;
          background-color: #f1f1f1;
          padding: 5px 10px;
     }

     .header a {
          float: left;
          color: black;
          text-align: center;
          text-decoration: none;
          font-size: 18px;
          line-height: 25px;
          border-radius: 4px;
     }

     .header a.logo {
          padding: 2px;
          font-size: 25px;
          font-weight: bold;
     }

     .header a:hover {
          background-color: #ddd;
          color: black;
     }

     .header a.active {
          background-color: dodgerblue;
          color: white;
     }

     .header-right {
          float: right;
          border-right: 3px solid black;
     }

     .header-right a {
          margin: 5px;
          padding: 12px;
     }

     .header-right .icon {
          display: none;
     }

     @media screen and (max-width: 700px) {
          .header a {
               float: left;
               display: block;
               text-align: left;
          }

          .header-right {
               float: right;
          }

          .header-right a {
               display: none;
          }

          .header-right a.icon {
               float: right;
               display: block;
          }

          .header-right.responsive {
               position: relative;
               overflow-y: overlay;
          }

          .header-right.responsive .icon {
               position: absolute;
               right: 0;
               top: 0;
          }

          .header-right.responsive a {
               float: none;
               display: block;
               text-align: left;
          }
     }

     /* Slideshow container */
     .slideshow-container {
          position: relative;
          margin: auto;
     }

     .mySlides img {
          height: 630px;
     }

     /* Caption text */
     .text {
          color: black;
          font-family: "Times New Roman", Times, serif;
          font-size: 55px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
     }


     /* The dots/bullets/indicators */
     .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
     }

     .active {
          background-color: #717171;
     }

     /* Fading animation */
     .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 3.5s;
          animation-name: fade;
          animation-duration: 3.5s;
     }

     @-webkit-keyframes fade {
          from {
               opacity: .4
          }

          to {
               opacity: 1
          }
     }

     @keyframes fade {
          from {
               opacity: .4
          }

          to {
               opacity: 1
          }
     }

     /* On smaller screens, decrease text size */
     @media only screen and (max-width: 200px) {
          .text {
               font-size: 10px;
          }

          .dot {
               height: 7px;
               width: 7px;
               background-color: #bbb;
               border-radius: 50%;
               display: inline-block;
               transition: background-color 0.6s ease;
          }
     }

     @media only screen and (max-width: 300px) and (min-width: 200px) {
          .text {
               font-size: 20px;
          }

          .dot {
               height: 10px;
               width: 10px;
               background-color: #bbb;
               border-radius: 50%;
               display: inline-block;
               transition: background-color 0.6s ease;
          }


          .mySlides img {
               height: 200px;
          }
     }

     @media only screen and (max-width: 700px) and (min-width:301px) {
          .text {
               font-size: 30px;
          }

          .dot {
               height: 10px;
               width: 10px;
               background-color: #bbb;
               border-radius: 50%;
               display: inline-block;
               transition: background-color 0.6s ease;
          }



          .mySlides img {
               height: 300px;
          }
     }
     </style>
</head>

<body>

     <div class="header">
          <a href="/" class="logo"><img src="{{url('/images/xento.jpg')}}" alt="Image" height="50px"
                    width="100px;" /></a>

          <div class="header-right">

               <!-- <a href="profile">{{session('user')}}</a> -->
               <a href="login" style="background-color:lightblue;">Login / Sign Up</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
               </a>
          </div>
          <div class="header-right" id="myTopnav">
               <a class="active">Home</a>
               <a href="#browse_houses">Browse Houses</a>
               <a href="contact">Contact</a>
               <a href="#about">About</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
               </a>
          </div>
     </div>

     <div class="slideshow-container">

          <div class="mySlides fade">
               <img src="{{url('/images/slider-1.jpg')}}" alt="Image1" width=" 100%" />
               <div class="text">Feel Like Own Home</div>
          </div>

          <div class="mySlides fade">
               <img src="{{url('/images/slider-2.jpg')}}" alt="Image2" width="100%" />
               <div class="text">Feel Like Own Home</div>
          </div>

          <div class="mySlides fade">
               <img src="{{url('/images/slider-3.jpg')}}" alt="Image3" width="100%" />
               <div class="text">Feel Like Own Home</div>
          </div>

     </div>
     <br>

     <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
     </div>

     <div style="margin-top:20px;">
          <div>
          </div>
     </div>
     <script>
     var slideIndex = 0;
     showSlides();

     function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex >
               slides.length) {
               slideIndex = 1
          }
          for (i = 0; i < dots.length; i++) {
               dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
          setTimeout(showSlides, 4000); // Change image every 2 seconds 
     }

     function myFunction() {
          var
               x = document.getElementById("myTopnav");
          if (x.className === "header-right") {
               x.className += " responsive";
          } else {
               x.className = "header-right";
          }
     }
     </script>

</body>

</html>