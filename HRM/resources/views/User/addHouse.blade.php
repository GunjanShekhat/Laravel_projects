<!DOCTYPE html>
<html lang="en">

<head>
     <title>Add House</title>
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
                              <li class="active">Add House</li>
                         </ul>
                    </div>
               </div>
          </section>
          <section class="section-md bg-default">
               <div class="container">
                    <div class="row row-50">

                         <div class="col-md-12 col-lg-12">
                              <h4>House Details</h4>
                              <p class="xsmall">Required fields are followed by *</p>
                              @if(Session::has('houseAdded'))
                              <div class="alert alert-success" role="alert">
                                   {{ Session::get('houseAdded') }}
                              </div>
                              @endif
                              <!-- RD Mailform-->
                              <form action="{{route('newHouse')}}" class="rd-mailform rd-mailform_style-1"
                                   method="post">
                                   @csrf
                                   <div class="form-wrap">
                                        <label class="form-label-outside" for="houseName">House
                                             Name:*</label>
                                        <input class="form-input" id="houseName" type="text" name="houseName"
                                             data-constraints="@Required" placeholder="House Name" />
                                   </div>

                                   <div class="form-wrap">
                                        <label class="form-label-outside" for="rentPerMonth">Monthly Rent:*</label>
                                        <input class="form-input" id="rentPerMonth" type="text" name="rentPerMonth"
                                             data-constraints="@Required" placeholder="Enter Monthly Rent" />
                                   </div>

                                   <div class="form-wrap">
                                        <label class="form-label-outside" for="rentPerDay">Daily Rent:*</label>
                                        <input class="form-input" id="rentPerDay" type="text" name="rentPerDay"
                                             data-constraints="@Required" placeholder="Enter Daily Rent" />
                                   </div>

                                   <div class="form-wrap">
                                        <label class="form-label-outside" for="totalBedroom">Count of Bedrooms:*</label>
                                        <input class="form-input" id="totalBedroom" type="number" name="totalBedroom"
                                             data-constraints="@Required" placeholder="Enter Total Number of Bedrooms"
                                             min="1" max="5" />
                                   </div>

                                   <div class="form-wrap">
                                        <label class="form-label-outside" for="totalBathroom">Count of
                                             Bathrooms:*</label>
                                        <input class="form-input" id="totalBathroom" type="number" name="totalBathroom"
                                             data-constraints="@Required" placeholder="Enter Total Number of Bathrooms"
                                             min="1" max="5" />
                                   </div>

                                   <div class="form-wrap">
                                        <label class="form-label-outside" for="houseArea">House Area:*</label>
                                        <input class="form-input" id="houseArea" type="text" name="houseArea"
                                             data-constraints="@Required" placeholder="House Area Location" />
                                   </div>

                                   <div class="form-wrap">
                                        <label class="form-label-outside" for="houseCity">House City:*</label>
                                        <input class="form-input" id="houseCity" type="text" name="houseCity"
                                             data-constraints="@Required" placeholder="House City Name" />
                                   </div>

                                   <div class="form-wrap">
                                        <label class="form-label-outside" for="houseState">House State:*</label>
                                        <input class="form-input" id="houseState" type="text" name="houseState"
                                             data-constraints="@Required" placeholder="House State Name" />
                                   </div>

                                   <button class="button button-primary" type="submit">Submit</button>
                              </form>
                         </div>
                    </div>
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