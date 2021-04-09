<!DOCTYPE html>
<html lang="en">

<head>
     <title>My Booked Houses</title>
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
     <style>
     table {
          border-collapse: collapse;
          width: 100%;
     }

     table td,
     th {
          border: 1px solid #ddd;
          padding: 10px;
     }
     </style>
</head>

<body>
     @include('User/header')

     <section class="section-lg bg-default text-center">
          <div class="container">

               @if(count($house) === 0)
               <div class="row justify-content-lg-center">
                    <div class="col-lg-10 col-xl-8">
                         <h4>Oops!!! You haven't booked any house for Rent... <br><br><a href="/browse_houses">Click
                                   here</a>
                              to Browse
                              House
                         </h4>
                    </div>
               </div>
               @else
               <div class="row row-30">
                    <table>
                         <thead>
                              <tr>
                                   <th>Contract ID</th>
                                   <th>House ID</th>
                                   <th>Starting Date</th>
                                   <th>Ending Date</th>
                                   <th>Total Rent</th>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach($house as $house)
                              <tr>
                                   <td>{{ $house->contractId }}</td>
                                   <td>{{ $house->houseIdForeign }}</td>
                                   <td>{{ $house->startOfContract }}</td>
                                   <td>{{ $house->endOfContract }}</td>
                                   <td>{{ $house->totalRent }}</td>
                              </tr>
                              @endforeach
                         </tbody>
                    </table>

                    <!-- <div class="col-sm-6 col-lg-4">
                         
                    <article class="product">
                         <div class="product-media"><img class="product-img" src="images/home-01-370x290.jpg" alt=""
                                   width="370" height="290" />
                              <div class="product-price">{{ $house->houseRentPerMonth }}/mo</div>
                         </div>
                         <div class="product-body">
                              <div class="product-title">
                                   <h5><a href="/singleHouse?id={{ $house->houseId }}">{{ $house->houseArea }},
                                             {{ $house->houseCity }}</a></h5>
                              </div>
                              <div class="product-meta">
                                   <div class="group"><span>{{ $house->totalBathrooms }}
                                             Bathrooms</span><span style="float:right;">{{ $house->totalBedrooms }}
                                             Bedrooms</span>
                                   </div>
                              </div>
                         </div>
                    </article>
               </div> -->

               </div>
               @endif
          </div>
     </section>

     @include('User/footer')

     <div class="snackbars" id="form-output-global"></div>
     <!-- Javascript-->
     <script src="js/core.min.js"> </script>
     <script src="js/script.js"></script>
</body>

</html>