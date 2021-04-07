<!DOCTYPE html>
<html lang="en">

<head>
     <title>Contacts</title>
     <meta name="format-detection" content="telephone=no" />
     <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta charset="utf-8" />
     <script src="../../cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
     <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
     <!-- Stylesheets-->
     <link rel="stylesheet" type="text/css"
          href="http://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400&amp;display=swap" />
     <link rel="stylesheet" href="css/bootstrap.css" />
     <link rel="stylesheet" href="css/style.css" />
</head>

<body>
     @include('User.header')
     <div class="page">
          <div id="page-loader">
               <div class="cssload-container">
                    <div class="cssload-speeding-wheel"> </div>
               </div>
          </div>
          <section class="breadcrumbs-custom">
               <div class="container">
                    <div class="breadcrumbs-custom__inner">
                         <ul class="breadcrumbs-custom__path">
                              <li><a href="index-2.html">Home</a></li>
                              <li class="active">Contacts</li>
                         </ul>
                    </div>
               </div>
          </section>
          <section class="section-md bg-default">
               <div class="container">
                    <div class="row row-50">
                         <div class="col-md-5 col-lg-4">
                              <ul class="list-sm contact-info">
                                   <li>
                                        <h4>Address:</h4>
                                        <a href="https://www.google.com/maps/place/Xento+Systems/@18.5169091,73.9221283,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2c18df4a41197:0xa8d02fcea99cd3d4!8m2!3d18.5169091!4d73.924317"
                                             target="_blank">
                                             Xento Systems <br> Magarpatta, Pune
                                        </a>
                                   </li>
                                   <li>
                                        <h4>General enquiries:</h4>
                                        <ul class="list">
                                             <li><a
                                                       href="mailto:shekhatgunjan98@gmail.com">shekhatgunjan98@gmail.com</a>
                                             </li>
                                             <li>
                                                  <p>
                                                       Toll Free phone number:<a href="tel:+917887675978">+91
                                                            7887675978</a></p>
                                             </li>
                                        </ul>
                                   </li>
                                   <li>
                                        <h4>Other enquiries:</h4>
                                        <ul class="list">
                                             <li><a href="mailto:patelgunjan98@gmail.com">patelgunjan98@gmail.com</a>
                                             </li>
                                             <li>
                                                  <p>Toll Free phone number:<a href="tel:+917228035555">+91
                                                            7228035555</a></p>
                                             </li>
                                        </ul>
                                   </li>
                              </ul>
                         </div>
                         <div class="col-md-7 col-lg-8">
                              <h4>Get in Touch</h4>
                              <p class="xsmall">Required fields are followed by *</p>
                              @if(Session::has('mailSent'))
                              <div class="alert alert-success" role="alert">
                                   {{ Session::get('mailSent') }}
                              </div>
                              @endif
                              <!-- RD Mailform-->
                              <form action="{{route('contactFormMail')}}" class="rd-mailform rd-mailform_style-1"
                                   method="post">
                                   @csrf
                                   <div class="form-wrap">
                                        <label class="form-label-outside" for="contact-first-name">Full
                                             Name:*</label>
                                        <input class="form-input" id="contact-first-name" type="text" name="name"
                                             data-constraints="@Required" placeholder="First Name" />
                                   </div>
                                   <div class="form-wrap">
                                        <label class="form-label-outside" for="contact-email">Email:*</label>
                                        <input class="form-input" id="contact-email" type="email" name="email"
                                             data-constraints="@Email @Required" placeholder="Email" />
                                   </div>
                                   <div class="form-wrap">
                                        <label class="form-label-outside" for="contact-message">Message:*</label>
                                        <textarea class="form-input" id="contact-message" name="message"
                                             data-constraints="@Required" placeholder="Message"></textarea>
                                   </div>
                                   <button class="button button-primary" type="submit">Submit</button>
                              </form>
                         </div>
                    </div>
               </div>
          </section>
          <section class="breadcrumbs-custom">
               <div class="container">
                    <iframe width="100%" height="500" id="gmap_canvas"
                         src="https://maps.google.com/maps?q=Xento%20Systems&t=&z=15&ie=UTF8&iwloc=&output=embed"
                         frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
               </div>
          </section>
     </div>
     @include('User.footer')
     <div class="snackbars" id="form-output-global"></div>
     <!-- Javascript-->
     <script src="js/core.min.js"> </script>
     <script src="js/script.js"></script>
</body>

</html>