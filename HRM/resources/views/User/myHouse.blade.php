<!DOCTYPE html>
<html lang="en">

<head>
     <title>My Houses</title>
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
     @include('User/header')
     <a href="/addHouse" style="float:right;">
          <div class="button button-link">Add House</div>
     </a>

     <section class="section-lg bg-default text-center">
          <div class="container">
               @if(Session::has('house_deleted'))
               <div class="alert alert-success" role="alert">
                    {{ Session::get('house_deleted') }}
               </div>
               @endif
               @if(Session::has('house_updated'))
               <div class="alert alert-success" role="alert">
                    {{ Session::get('house_updated') }}
               </div>
               @endif
               @if(count($house) === 0)
               <div class="row justify-content-lg-center">
                    <div class="col-lg-10 col-xl-8">
                         <h4>Oops!!! You haven't posted any house for Rent... <br><br><a href="/addHouse">Click here</a>
                              to add
                              House
                         </h4>
                    </div>
               </div>
               @else
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
                                        <h5><a href="/singleHouse?id={{ $house->houseId }}">{{ $house->houseArea }},
                                                  {{ $house->houseCity }}</a></h5>
                                   </div>
                                   <div class="product-meta">
                                        <div class="group"><span>{{ $house->totalBathrooms }}
                                                  Bathrooms</span><span style="float:right;">{{ $house->totalBedrooms }}
                                                  Bedrooms</span>
                                        </div>
                                   </div>
                                   <div class="product-meta">
                                        <div class="group">
                                             <button class="btn btn-primary" data-toggle="modal"
                                                  data-target="#myModal{{$house->houseId}}"
                                                  onClick="location.href='/editHouse?id={{$house->houseId}}'">Edit</button>
                                             <button class="btn btn-danger delete" style="float:right;"
                                                  onClick="location.href='/deleteHouse?id={{$house->houseId}}'">Delete</button>
                                        </div>
                                   </div>
                              </div>
                         </article>
                    </div>

                    <!-- <div class="modal fade" id="myModal{{$house->houseId}}" role="dialog">
                         <div class="modal-dialog">

                              <div class="modal-content">
                                   <div class="modal-header">
                                        <h4 class="modal-title">Create Custom Model List</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   </div>

                                   <form action="controller/custommodellistcontroller.php" method="post"
                                        enctype="multipart/form-data">
                                        <div class="modal-body">
                                             <label class="bmd-label-floating">Custom Model List Name</label><br><br>
                                             <input class="form-control" type="text" name="custommodelname"
                                                  value="{{$house->houseName}}" required><br>

                                             <div class="form-group">
                                                  <label class="bmd-label-floating">Select Class</label>
                                                  <select class="custom-select" name="slClass" id="classmasterid" onchange=""
                                                       required>
                                                       <option value="">Choose..</option>


                                                       <option value="">

                                                       </option>
                                                  </select>
                                             </div>

                                             <div class="form-group">
                                                  <label class="bmd-label-floating">Select Subject</label>
                                                  <select class="custom-select" name="slSubject" id="slSubject" disabled required>
                                                  </select>
                                             </div>


                                             <div class="row" id="modelCheckbox">
                                             </div>
                                        </div>
                                        <div class="modal-footer">
                                             <button type="submit" class="btn btn-default">Create</button>
                                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                   </form>

                              </div>

                         </div>
                    </div>-->
                    @endforeach
               </div>
               @endif
          </div>
     </section>

     @include('User/footer')

     <div class="snackbars" id="form-output-global"></div>
     <!-- Javascript-->
     <script>
     $(document).ready(function() {
          $(".delete").on("submit", function() {
               return confirm("Are you sure?");
          });
     });
     </script>
     <script src="js/core.min.js"> </script>
     <script src="js/script.js"></script>
</body>

</html>