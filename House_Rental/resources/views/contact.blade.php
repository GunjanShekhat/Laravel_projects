<!DOCTYPE html>
<html lang="en">

<head>
     <!-- BOOTSTRAP CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
     </script> <!-- Latest compiled and minified CSS -->
     <!-- BOOTSTRAP CDN END-->
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Contact Us</title>
     <style>
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


     * {
          margin: 0px;
          padding: 0px;
     }

     *,
     *:after,
     *:before {
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          -ms-box-sizing: border-box;
          -o-box-sizing: border-box;
          box-sizing: border-box;
     }

     .clearfix:before,
     .clearfix:after {
          display: table;
          content: '';
     }

     .clearfix:after {
          clear: both;
     }


     body {
          background: #ffffff;
          color: #333;
          font-weight: normal;
          font-size: 1em;
          font-family: 'Roboto', Arial, sans-serif;
     }

     input:focus,
     textarea:focus,
     keygen:focus,
     select:focus {
          outline: none;
     }

     ::-moz-placeholder {
          color: #666;
          font-weight: 300;
          opacity: 1;
     }

     ::-webkit-input-placeholder {
          color: #666;
          font-weight: 300;
     }


     /* Contact Form Styling */
     .container {
          padding: 0 50px 70px;
     }

     .textcenter {
          text-align: center;
     }

     .section1 {
          text-align: center;
          display: table;
          width: 100%;
     }

     .section1 .shtext {
          display: block;
          margin-top: 20px;
     }

     .section1 .seperator {
          border-bottom: 1px solid #a2a2a2;
          width: 50%;
          display: inline-block;
          margin: 20px;
     }

     .section1 h1 {
          font-size: 40px;
          color: #A44DD8;
          font-weight: normal;
     }

     .section2 {
          margin-top: 30px;
          width: 1200px;
          margin: 25px auto;
     }

     .section2 .col2 {
          width: 48.71%;
     }

     .section2 .col2.first {
          float: left;
          padding-top: 35px;
     }

     .section2 .col2.last {
          float: right;
     }

     .section2 .col2.column2 {
          padding: 0 30px;
     }

     .section2 .sec2contactform input[type="text"],
     .section2 .sec2contactform input[type="email"],
     .section2 .sec2contactform textarea {
          padding: 18px;
          border: 0;
          background: #EDEDED;
          margin: 7px 0;
     }

     .section2 .sec2contactform textarea {
          width: 100%;
          display: block;
          color: #666;
          resize: none;
     }

     .section2 .sec2contactform input[type="button"] {
          padding: 15px 40px;
          color: #fff;
          border: 0;
          background: #A44DD8;
          font-size: 16px;
          text-transform: uppercase;
          margin: 7px 0;
          cursor: pointer;
     }

     .section2 .sec2contactform h3 {
          font-weight: normal;
          margin: 20px 0;
          margin-top: 30px;
          border-bottom: 1px solid #ddd;
          padding-bottom: 19px;
          color: #A44DD8;
     }

     /* @media querries */

     @media only screen and (max-width: 1266px) {
          .section2 {
               width: 100%;
          }
     }

     @media only screen and (max-width: 960px) {
          .container {
               padding: 0 30px 70px;
          }

          .section2 .col2 {
               width: 100%;
               display: block;
          }

          .section2 .col2.first {
               margin-bottom: 10px;
          }

          .section2 .col2.column2 {
               padding: 0;
          }

          body .sec2map {
               height: 250px !important;
          }
     }

     @media only screen and (max-width: 768px) {


          .section2 .sec2contactform h3 {
               font-size: 16px;
          }

          .section2 .sec2contactform input[type="text"],
          .section2 .sec2contactform input[type="email"],
          .section2 .sec2contactform textarea {
               padding: 10px;
               margin: 3px 0;
          }

          .section2 .sec2contactform input[type="submit"] {
               padding: 10px 30px;
               font-size: 14px;
          }
     }

     @media only screen and (max-width: 420px) {
          .section1 h1 {
               font-size: 28px;
          }
     }

     .c_items {
          height: 200px;
          padding: 50px;
          border: 1px solid black;
          float: left;
          margin: 40px;
          padding: 20px;
          border-radius: 15px;
          text-align: center;
          justify-content: center;
          display: flex;
          align-items: center;
     }

     .c_items:hover {
          -webkit-box-shadow: 3px 3px 5px 6px grey;
          -moz-box-shadow: 3px 3px 5px 6px grey;
          box-shadow: 3px 3px 5px 6px grey;
          border-color: transparent;
          background-color: lightgrey;
     }

     .c_items a {
          padding: 5px;
          display: block;
          color: black;
          text-decoration: none;
     }

     .c_items a:hover {
          color: blue;
          text-decoration: underline;
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
               <a href="home">Home</a>
               <a href="#browse_houses">Browse Houses</a>
               <a class="active">Contact</a>
               <a href="#about">About</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
               </a>
          </div>
     </div>


     <div class="container">
          <div class="innerwrap">

               <section class="section1 clearfix">
                    <div class="textcenter">
                         <span class="shtext">Contact Us</span>
                         <h1>Drop Us a Mail</h1>
                         <span class="seperator"></span>

               </section>


               <div class="col-3 c_items">
                    <h5><i style='font-size:48px' class='fas'>&#xf3c5;</i><br><br>
                         <a href="https://www.google.com/maps/place/Xento+Systems/@18.5169091,73.9221283,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2c18df4a41197:0xa8d02fcea99cd3d4!8m2!3d18.5169091!4d73.924317"
                              target="_blank">
                              Xento Systems <br> Magarpatta, Pune
                         </a>
                    </h5>
               </div>
               <div class="col-3 c_items">
                    <h5><i style='font-size:48px' class='fas'>&#xf095;</i><br><br>
                         <a href="tel:+917887675978">+91 7887675978</a>
                         <a href="tel:+917228035555">+91 7228035555</a>
                    </h5>
               </div>
               <div class="col-3 c_items">
                    <h5><i style="font-size:48px" class="fa">&#xf0e0;</i><br><br>
                         <a href="mailto:mail@example.com">shekhatgunjan98@gmail.com</a>
                         <a href="mailto:info@example.com">patelgunjan98@gmail.com</a>
                    </h5>
               </div>

               <section class=" section2 clearfix">
                    <div class="col2 column1 first">
                         <iframe width="600" height="500" id="gmap_canvas"
                              src="https://maps.google.com/maps?q=Xento%20Systems&t=&z=15&ie=UTF8&iwloc=&output=embed"
                              frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                    <div class="col2 column2 last">

                         <div class="sec2contactform">
                              <h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
                              <form>
                                   <div class="clearfix">
                                        <input class="col2 first" type="text" placeholder="FirstName">
                                        <input class="col2 last" type="text" placeholder="LastName">
                                   </div>
                                   <div class="clearfix">
                                        <input class="col2 first" type="Email" placeholder="Email">
                                        <input class="col2 last" type="text" placeholder="Contact Number">
                                   </div>
                                   <div class="clearfix">
                                        <textarea name="textarea" id="" cols="30"
                                             rows="7">Your message here...</textarea>
                                   </div>
                                   <div class="clearfix"><input type="button" value="Send"></div>
                              </form>
                         </div>

                    </div>
               </section>

          </div>
     </div>
</body>

</html>