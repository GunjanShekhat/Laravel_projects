<!DOCTYPE html>
<html lang="en">

<head>
     <title>Browse Houses</title>
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
     <section class="section-lg bg-default text-center">
          <div class="container">
               <div class="row justify-content-lg-center">
                    <div class="col-lg-10 col-xl-8">
                         <h4>Featured Properties</h4>
                    </div>
               </div>
               <div class="row row-30">
                    @foreach($house as $house)
                    <div class="col-sm-6 col-lg-4">
                         <!-- Post-->
                         <article class="product">
                              <div class="product-media"><img class="product-img" src="images/home-01-370x290.jpg"
                                        alt="" width="370" height="290" />
                                   <div class="product-price">{{ $house->houseRentPerMonth }}/mo</div>
                              </div>
                              <div class="product-body">
                                   <div class="product-title">
                                        <h5><a href="single-property.html">{{ $house->houseArea }},
                                                  {{ $house->houseCity }}</a></h5>
                                   </div>
                                   <div class="product-meta">
                                        <div class="group"><span>{{ $house->totalBathrooms }}
                                                  Bathrooms</span><span>{{ $house->totalBedrooms }} Bedrooms</span>
                                        </div>
                                   </div>
                              </div>
                         </article>
                    </div>
                    @endforeach
               </div>
          </div>
     </section>

     <section class="section-lg bg-default text-center">
          <div class="container">
               <div class="row justify-content-lg-center">
                    <div class="col-lg-10 col-xl-8">
                         <h4>Budget Properties</h4>
                    </div>
               </div>
               <div class="row row-30">
                    @foreach($cheapHouse as $cheapHouse)
                    <div class="col-sm-6 col-lg-4">
                         <!-- Post-->
                         <article class="product">
                              <div class="product-media"><img class="product-img" src="images/home-01-370x290.jpg"
                                        alt="" width="370" height="290" />
                                   <div class="product-price">{{ $cheapHouse->houseRentPerMonth }}/mo</div>
                              </div>
                              <div class="product-body">
                                   <div class="product-title">
                                        <h5><a href="single-property.html">{{ $cheapHouse->houseArea }},
                                                  {{ $cheapHouse->houseCity }}</a></h5>
                                   </div>
                                   <div class="product-meta">
                                        <div class="group"><span>{{ $cheapHouse->totalBathrooms }}
                                                  Bathrooms</span><span>{{ $cheapHouse->totalBedrooms }} Bedrooms</span>
                                        </div>
                                   </div>
                              </div>
                         </article>
                    </div>
                    @endforeach
               </div>
          </div>
     </section>
     @include('User.footer')
     <div class="snackbars" id="form-output-global"></div>
     <!-- Javascript-->
     <script src="js/core.min.js"> </script>
     <script src="js/script.js"></script>
</body>

</html>