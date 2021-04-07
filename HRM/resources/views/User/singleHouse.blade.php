<!DOCTYPE html>
<html lang="en">

<head>
     <title>Single Property</title>
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
     <link rel="stylesheet" href="../css/bootstrap.css" />
     <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
     @include('User.header')
     <section class="breadcrumbs-custom">
          <div class="container">
               <div class="breadcrumbs-custom__inner">
                    <ul class="breadcrumbs-custom__path">
                         <li><a href="index-2.html">Home</a></li>
                         <li><a href="properties.html">Properties</a></li>
                         <li class="active">Single Property</li>
                    </ul>
               </div>
          </div>
     </section>

     @foreach($house as $house)
     <section class="section-md section-md_smaller bg-default">
          <div class="container">
               <div class="row row-30">
                    <div class="col-md-6 col-xl-7">
                         <div class="slick-gallery">
                              <!-- Slick Carousel-->
                              <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false"
                                   data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel"
                                   data-for="#child-carousel" data-lightgallery="group">
                                   <div class="item"><img src="images/single-property-01-670x480.jpg" alt="" width="670"
                                             height="480" />
                                   </div>
                                   <div class="item"><img src="images/single-property-02-670x480.jpg" alt="" width="670"
                                             height="480" />
                                   </div>
                                   <div class="item"><img src="images/single-property-03-670x480.jpg" alt="" width="670"
                                             height="480" />
                                   </div>
                                   <div class="item"><img src="images/single-property-04-670x480.jpg" alt="" width="670"
                                             height="480" />
                                   </div>
                                   <div class="item"><img src="images/single-property-05-670x480.jpg" alt="" width="670"
                                             height="480" />
                                   </div>
                              </div>
                              <div class="slick-slider carousel-child" id="child-carousel" data-for=".carousel-parent"
                                   data-arrows="true" data-loop="false" data-dots="false" data-swipe="true"
                                   data-items="3" data-xs-items="3" data-sm-items="3" data-md-items="3"
                                   data-lg-items="4" data-slide-to-scroll="1">
                                   <div class="item">
                                        <div class="thumb thumb_rect-2">
                                             <div class="thumb__inner"><img src="images/single-property-01-670x480.jpg"
                                                       alt="" width="670" height="480" />
                                             </div>
                                        </div>
                                   </div>
                                   <div class="item">
                                        <!-- Thumb-->
                                        <div class="thumb thumb_rect-2">
                                             <div class="thumb__inner"><img src="images/single-property-02-670x480.jpg"
                                                       alt="" width="670" height="480" />
                                             </div>
                                        </div>
                                   </div>
                                   <div class="item">
                                        <!-- Thumb-->
                                        <div class="thumb thumb_rect-2">
                                             <div class="thumb__inner"><img src="images/single-property-03-670x480.jpg"
                                                       alt="" width="670" height="480" />
                                             </div>
                                        </div>
                                   </div>
                                   <div class="item">
                                        <!-- Thumb-->
                                        <div class="thumb thumb_rect-2">
                                             <div class="thumb__inner"><img src="images/single-property-04-670x480.jpg"
                                                       alt="" width="670" height="480" />
                                             </div>
                                        </div>
                                   </div>
                                   <div class="item">
                                        <!-- Thumb-->
                                        <div class="thumb thumb_rect-2">
                                             <div class="thumb__inner"><img src="images/single-property-05-670x480.jpg"
                                                       alt="" width="670" height="480" />
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-6 col-xl-5">
                         <h4>{{ $house->houseName }}</h4>
                         <p class="small">{{ $house->houseArea }},
                              {{ $house->houseCity }}</p>
                         <h5>Features</h5>
                         <div class="row row-15 row-content">
                              <div class="col-6 col-xl-5">
                                   <ul class="list-marked xsmall">
                                        <li>Sprinklers</li>
                                        <li>Basketball Court</li>
                                        <li>Private Space</li>
                                        <li>Lawn</li>
                                   </ul>
                              </div>
                              <div class="col-6">
                                   <ul class="list-marked xsmall">
                                        <li>Gym</li>
                                        <li>Fireplace</li>
                                        <li>Balcony</li>
                                        <li>Laundry</li>
                                   </ul>
                              </div>
                         </div>
                         <h5>Prices start at</h5>
                         <div class="price"><span class="price__aside-top">$</span><span
                                   class="price__main">{{ $house->houseRentPerDay }}</span><span
                                   class="price__aside-bottom">/per night</span>
                         </div>
                         <ul class="list-inline-md text-style">
                              <li>
                                   <div class="unit flex-row unit-spacing-xs align-items-center">
                                        <div class="unit-left"><span
                                                  class="icon icon-black icon-md-1 custom-font-bedroom"></span></div>
                                        <div class="unit-body">
                                             <p>One single bed</p>
                                        </div>
                                   </div>
                              </li>
                              <li>
                                   <div class="unit flex-row unit-spacing-xs align-items-center">
                                        <div class="unit-left"><span
                                                  class="icon icon-black icon-md-1 custom-font-shower"></span></div>
                                        <div class="unit-body">
                                             <p>Shower and hair dryer</p>
                                        </div>
                                   </div>
                              </li>
                         </ul>
                    </div>
               </div>
          </div>
     </section>

     <!-- Room details-->
     <section class="section-lg bg-default">
          <div class="container">
               <div class="row row-30">
                    <div class="col-md-6 col-xl-8">
                         <h4>Availability</h4>
                         <div class="rd-calendar calendar-availability" data-days="Sun, Mon, Tue, Wed, Thu, Fri, Sat">
                              <div class="rdc-panel text-center"><a class="rdc-prev"></a>
                                   <h5><span class="rdc-month"></span> <span class="rdc-fullyear"></span>
                                   </h5><a class="rdc-next"></a>
                              </div>
                              <div class="rdc-table"></div>
                              <div class="rdc-events"><a class="rdc-events_close"></a>
                                   <ul class="list-unstyled">
                                        <li class="rdc-event" data-date="06/15/2020"><span class="rd-calendar-info">3
                                                  available</span></li>
                                        <li class="rdc-event" data-date="07/14/2020"><span class="rd-calendar-info">2
                                                  available</span></li>
                                        <li class="rdc-event" data-date="08/14/2020"><span class="rd-calendar-info">5
                                                  available</span></li>
                                        <li class="rdc-event" data-date="09/14/2020"><span class="rd-calendar-info">1
                                                  available</span></li>
                                        <li class="rdc-event" data-date="10/14/2020"><span class="rd-calendar-info">5
                                                  available</span></li>
                                        <li class="rdc-event" data-date="11/14/2020"><span class="rd-calendar-info">3
                                                  available</span></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                         <h4>Reservation Form</h4>
                         <p class="xsmall">Required fields are followed by *</p>
                         <!-- RD Mailform-->
                         <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                              method="post" action="/bookHouse">
                              @csrf
                              <input type="hidden" name="id" value="{{$house->houseId}}">
                              <div class=" form-wrap">
                                   <label class="form-label-outside" for="reservation-arrival">Date In:*</label>
                                   <input class="form-input" id="reservation-arrival" name="arrival" type="date"
                                        data-constraints="@Required" />
                              </div>
                              <div class="form-wrap">
                                   <label class="form-label-outside" for="reservation-departure">Date Out:*</label>
                                   <input class="form-input" id="reservation-departure" name="departure" type="date"
                                        data-constraints="@Required" />
                              </div>
                              <!-- <div class="form-wrap">
                                   <label class="form-label-outside" for="reservation-adults-count">Adults:*</label>

                                   <select class="form-input select-filter" id="reservation-adults-count"
                                        data-placeholder="1" name="adults-count"
                                        data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                        <option>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                   </select>
                              </div>
                              <div class="form-wrap">
                                   <label class="form-label-outside" for="reservation-children">Children:*</label>

                                   <select class="form-input select-filter" id="reservation-children"
                                        data-placeholder="0" name="children-count"
                                        data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                        <option>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                   </select>
                              </div> 
                              <a class="button button-primary button-block" href="#">Book now</a> -->
                              <input type="submit" class="button button-primary button-block" value="Book Now">
                         </form>
                    </div>
               </div>
          </div>
     </section>
     @endforeach
     @include('User.footer')
     <div class="snackbars" id="form-output-global"></div>
     <!-- Javascript-->
     <script src="../js/core.min.js"> </script>
     <script src="../js/script.js"></script>
</body>

</html>