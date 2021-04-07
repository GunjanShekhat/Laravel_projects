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
                    @if($house->userIdForeign != session()->get('user_id'))
                    <div class="col-sm-6 col-lg-4">
                         <!-- Post-->
                         <a href="/singleHouse?id={{ $house->houseId }}">
                              <article class="product">
                                   <div class="product-media"><img class="product-img" src="images/home-01-370x290.jpg"
                                             alt="" width="370" height="290" />
                                        <div class="product-price">{{ $house->houseRentPerMonth }}/mo</div>
                                   </div>
                                   <div class="product-body">
                                        <div class="product-title">
                                             <h3>{{ $house->houseName }}
                                             </h3>
                                             <h6>{{ $house->houseArea }},
                                                  {{ $house->houseCity }}</h6>
                                        </div>
                                        <div class="product-meta">
                                             <div class="group"><span>{{ $house->totalBedrooms }}
                                                       Bedrooms</span><span
                                                       style="float:right;">{{ $house->totalBathrooms }}
                                                       Bathrooms</span>
                                             </div>
                                        </div>
                                   </div>
                              </article>
                         </a>
                    </div>
                    @endif
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
                    @if($cheapHouse->userIdForeign != session()->get('user_id'))
                    <div class="col-sm-6 col-lg-4">
                         <!-- Post-->
                         <a href="/singleHouse?id={{ $cheapHouse->houseId }}">
                              <article class="product">
                                   <div class="product-media"><img class="product-img" src="images/home-01-370x290.jpg"
                                             alt="" width="370" height="290" />
                                        <div class="product-price">{{ $cheapHouse->houseRentPerMonth }}/mo</div>
                                   </div>
                                   <div class="product-body">
                                        <div class="product-title">
                                             <h3>{{ $cheapHouse->houseName }}
                                             </h3>
                                             <h6>{{ $cheapHouse->houseArea }},
                                                  {{ $cheapHouse->houseCity }}</h6>
                                        </div>
                                        <div class="product-meta">
                                             <div class="group"><span>{{ $cheapHouse->totalBedrooms }}
                                                       Bedrooms</span>
                                                  <span style="float:right;">{{ $cheapHouse->totalBathrooms }}
                                                       Bathrooms</span>
                                             </div>
                                        </div>
                                   </div>
                              </article>
                         </a>
                    </div>
                    @endif
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