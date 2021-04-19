<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profile</title>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css"
          href="http://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400&amp;display=swap" />
     <link rel="stylesheet" href="css/bootstrap.css" />
     <link rel="stylesheet" href="css/style.css" />
     <style>
     .input-icons i {
          position: absolute;
     }

     .input-icons {
          width: 100%;
          margin-bottom: 10px;
     }

     .icon {
          padding: 10px;
          min-width: 40px;
     }

     .input-field {
          width: 100%;
          min-height: 50px;
          font-size: 12px;
          font-weight: 400;
          line-height: 1.1;
          color: #8c8c8c;
          background-color: #f5f5f5;
          background-image: none;
          border: 1px solid #f5f5f5;
          border-radius: 0;
          -webkit-appearance: none;
          transition: .3s ease-in-out;
          box-shadow: none;
          border: 1px solid #f5f5f5;
          padding: 10px;
     }
     </style>

</head>

<body>
     @include('User.header');
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
                              <li class="active">Sign Up</li>
                         </ul>
                    </div>
               </div>
          </section>
          <section class="section-md bg-default">
               @if(Session::has('user_error'))
               <div class="alert-danger" role="alert" style="margin-top:50px;">
                    <center>
                         {{Session::get('user_error')}}
                    </center>
               </div>
               @endif
               @if(Session::has('pass_error'))
               <div class="alert-danger" role="alert" style="margin-top:50px;">
                    <center>
                         {{Session::get('pass_error')}}
                    </center>
               </div>
               @endif

               <div style="display:flex;justify-content:center;">

                    <form action="userUpdate" style="width:40%;" method="POST">
                         <center>
                              <h4>Edit Profile Information</h4>
                         </center>
                         @csrf

                         @if($errors->has('u_name'))
                         <span id="nameresponse" style="color:red;">{{ $errors->first('u_name') }}</span>
                         @endif
                         <span id="nameresponse" style="color:red;">{{ $errors->first('u_name') }}</span>
                         <div class="form-wrap">
                              <label for="u_name" class="form-label-outside">UserName:*</label>
                              <input type="text" class="form-input" id="u_name" name="u_name"
                                   value="{{ $userDetail->userName}}" required />
                         </div>

                         @if($errors->has('u_password'))
                         <span id=" passwordresponse" style="color:red;">{{ $errors->first('u_password') }}</span>
                         @endif
                         <div class="form-wrap">
                              <label class="form-label-outside" for="u_password">Password:*</label>
                              <span class="input-icons">
                                   <input type="password" class=" input-field" name="u_password" id="u_password"
                                        value="{{ $userDetail->userPassword}}" disabled required>
                                   <i id="p_eye" class="fas fa-eye icon"></i>
                              </span>


                         </div>

                         @if($errors->has('u_email'))
                         <span id="emailresponse" style="color:red;">{{ $errors->first('u_email') }}</span>
                         @endif
                         <span id="emailresponse" style="color:red;"></span>
                         <div class="form-wrap">
                              <label class="form-label-outside" for="u_email">Email:*</label>
                              <input class="form-input" type="email" id="u_email" name="u_email"
                                   value="{{ $userDetail->userEmail}}" readonly required />
                         </div>

                         @if($errors->has('u_contact'))
                         <span id="contactresponse" style="color:red;">{{ $errors->first('u_contact') }}</span>
                         @endif
                         <span id="contactresponse" style="color:red;"></span>
                         <div class="form-wrap">
                              <label class="form-label-outside" for="u_contact">Contact Number:*</label>
                              <input type="text" class="form-input" id="u_contact" name="u_contact"
                                   value="{{ $userDetail->userContactNo}}" required>
                         </div>

                         @if($errors->has('u_address'))
                         <span id="addressresponse" style="color:red;">{{ $errors->first('u_address') }}</span>
                         @endif
                         <div class="form-wrap">
                              <label class="form-label-outside" for="u_address">Address:*</label>
                              <input type="text" class="form-input" id="u_address" name="u_address"
                                   value="{{ $userDetail->userAddress}}" required>
                         </div>

                         @if($errors->has('u_area'))
                         <span id="arearesponse" style="color:red;">{{ $errors->first('u_area') }}</span>
                         @endif
                         <div class="form-wrap">
                              <label class="form-label-outside" for="u_area">Area:*</label>
                              <input type="text" class="form-input" id="u_area" name="u_area"
                                   value="{{ $userDetail->userArea}}" required>
                         </div>

                         @if($errors->has('u_city'))
                         <span id="cityresponse" style="color:red;">{{ $errors->first('u_city') }}</span>
                         @endif
                         <div class="form-wrap">
                              <label class="form-label-outside" for="u_city">City:*</label>
                              <input type="text" class="form-input" id="u_city" name="u_city"
                                   value="{{ $userDetail->userCity}}" required>
                         </div>

                         @if($errors->has('u_state'))
                         <span id="stateresponse" style="color:red;">{{ $errors->first('u_state') }}</span>
                         @endif
                         <div class="form-wrap">
                              <label class="form-label-outside" for="u_state">State:*</label>
                              <input type="text" class="form-input" id="u_state" name="u_state"
                                   value="{{ $userDetail->userState}}" required>
                         </div>

                         @if($errors->has('u_occupation'))
                         <span id="occupationresponse" style="color:red;">{{ $errors->first('u_occupation') }}</span>
                         @endif
                         <div class="form-wrap">
                              <label class="form-label-outside" for="u_occupation">Occupation:*</label>
                              <input type="text" class="form-input" id="u_occupation" name="u_occupation"
                                   value="{{ $userDetail->userOccupation}}" required>
                         </div>

                         <input type="submit" id="submitbtn" class="button button-primary" value="Update"
                              style="width:30%;margin:20px;">
                         <a href="/"><input type="button" value="Cancel" class="button button-primary"
                                   style="margin:20px;"></a>


                    </form>


               </div>


          </section>
     </div>
     @include('User.footer');

     <!-- Javascript-->
     <script src="js/core.min.js"> </script>
     <script src="js/script.js"></script>

     <script>
     $(document).on('click', '#p_eye', function() {
          var txtPassword = document.getElementById('u_password');
          if (txtPassword.type === "password") {
               txtPassword.type = "text";

               var p1 = document.getElementById('p_eye');
               p1.setAttribute('class', 'fa fa-eye-slash icon');
          } else {
               txtPassword.type = "password";

               var p1 = document.getElementById('p_eye');
               p1.setAttribute('class', 'fa fa-eye icon');
          }
     });

     var uname = 0,
          uemail = 0,
          ucontact = 0;
     $('#u_email').on('keyup blur', function() {
          var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
          if ($('#u_email').val() == '') {
               uemail = 0;
               validate();
               $("#emailresponse").html("This field cannot be left empty");
          } else if (!($('#u_email').val().match(mailformat))) {
               uemail = 0;
               validate();
               $("#emailresponse").html("Invalid Email Address");
          } else {
               uemail = 1;
               validate();
               $("#emailresponse").html("");
          }
     });

     $('#u_contact').on('keyup blur', function() {
          var phoneno = /^\d{10}$/;
          if ($('#u_contact').val() == '') {
               ucontact = 0;
               validate();
               $("#contactresponse").html("This field cannot be left empty");
          } else if (!($('#u_contact').val().match(phoneno))) {
               ucontact = 0;
               validate();
               $("#contactresponse").html("Invalid Mobile Number");
          } else {
               ucontact = 1;
               validate();
               $("#contactresponse").html("");
          }
     });

     $('#u_name').on('keyup blur', function() {
          if ($('#u_name').val() == '') {
               uname = 0;
               validate();
               $("#nameresponse").html("This field cannot be left empty");

          } else {
               uname = 1;
               validate();
               $("#nameresponse").html("");
          }
     });

     function validate() {
          if (uname == 0 || uemail == 0 || ucontact == 0) {
               $("#submitbtn").attr("disabled", true);
               if ($("#submitbtn").hasClass("button-primary")) {
                    $("#submitbtn").removeClass("button-primary");
               }
          } else {
               $("#submitbtn").attr("disabled", false);
               if (!($("#submitbtn").hasClass("button-primary"))) {
                    $("#submitbtn").addClass("button-primary");
               }
          }
     }
     </script>
</body>

</html>