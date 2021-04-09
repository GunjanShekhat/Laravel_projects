<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sign Up</title>
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="styles.css">
     <style>
     @import url('https://fonts.googleapis.com/css?family=Numans');

     html,
     body {
          background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
          background-size: cover;
          background-repeat: no-repeat;
          height: auto;
          font-family: 'Numans', sans-serif;
     }

     .container {
          height: 100%;
          align-content: center;
     }

     .card {
          height: auto;
          margin-top: 20px;
          margin-bottom: auto;
          width: 400px;
          background-color: rgba(0, 0, 0, 0.5) !important;
     }

     .card-header h3 {
          color: white;
     }

     .input-group-prepend span {
          width: 50px;
          background-color: #FFC312;
          color: black;
          border: 0 !important;
     }

     input:focus {
          outline: 0 0 0 0 !important;
          box-shadow: 0 0 0 0 !important;

     }

     .login_btn {
          color: black;
          background-color: #FFC312;
          width: 100%;
          margin-top: 10px;
     }

     .login_btn:hover {
          color: black;
          background-color: white;
     }

     .links {
          color: white;
     }

     .links a {
          margin-left: 4px;
     }

     /* .eye {
          top: 30%;
          padding: 10px;
          background-color: #FFC312;
          color: black;
     } */
     </style>
</head>

<body>

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
     <div class="container">
          <div class="d-flex justify-content-center h-100">
               <div class="card">
                    <div class="card-header">
                         <h3>Sign Up</h3>
                    </div>

                    <div class="card-body">
                         <form action="userCreate" method="POST">
                              @csrf
                              @if($errors->has('u_name'))
                              <span id="nameresponse" style="color:red;">{{ $errors->first('u_name') }}</span>
                              @endif
                              <span id="nameresponse" style="color:red;"></span>
                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                   </div>
                                   <input type="text" class="form-control" id="u_name" name="u_name"
                                        placeholder="username" required>
                              </div>

                              @if($errors->has('u_password'))
                              <span id="passwordresponse" style="color:red;">{{ $errors->first('u_password') }}</span>
                              @endif
                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                   </div>
                                   <input type="password" class="form-control" name="u_password" id="u_password"
                                        placeholder=" password" required>
                                   <div class="input-group-prepend">
                                        <span class="input-group-text eye"><i id="p_eye" class="fas fa-eye"></i></span>
                                   </div>
                              </div>

                              @if($errors->has('u_email'))
                              <span id="emailresponse" style="color:red;">{{ $errors->first('u_email') }}</span>
                              @endif
                              <span id="emailresponse" style="color:red;"></span>
                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                   </div>
                                   <input type="text" class="form-control" id="u_email" name="u_email"
                                        placeholder="Enter your Email (use for login)" required>

                              </div>

                              @if($errors->has('u_contact'))
                              <span id="contactresponse" style="color:red;">{{ $errors->first('u_contact') }}</span>
                              @endif
                              <span id="contactresponse" style="color:red;"></span>
                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                   </div>
                                   <input type="text" class="form-control" id="u_contact" name="u_contact"
                                        placeholder="Contact Number" required>
                              </div>

                              @if($errors->has('u_address'))
                              <span id="addressresponse" style="color:red;">{{ $errors->first('u_address') }}</span>
                              @endif
                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_address"
                                        placeholder="Permanent Address Here" required>
                              </div>

                              @if($errors->has('u_area'))
                              <span id="arearesponse" style="color:red;">{{ $errors->first('u_area') }}</span>
                              @endif
                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_area" placeholder="Area Here"
                                        required>
                              </div>

                              @if($errors->has('u_city'))
                              <span id="cityresponse" style="color:red;">{{ $errors->first('u_city') }}</span>
                              @endif
                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_city" placeholder="City Here"
                                        required>
                              </div>

                              @if($errors->has('u_state'))
                              <span id="stateresponse" style="color:red;">{{ $errors->first('u_state') }}</span>
                              @endif
                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-city"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_state" placeholder="State" required>
                              </div>

                              @if($errors->has('u_occupation'))
                              <span id="occupationresponse"
                                   style="color:red;">{{ $errors->first('u_occupation') }}</span>
                              @endif
                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_occupation"
                                        placeholder="Your Occupation Here" required>
                              </div>

                              <div class="form-group">
                                   <input type="submit" id="submitbtn" value="Sign up" class="btn login_btn" disabled>
                              </div>
                         </form>
                    </div>
                    <div class="card-footer">
                         <div class="d-flex justify-content-center links">
                              <a href="/">Back to Home</a>
                         </div>
                         <div class="d-flex justify-content-center links">
                              Already have an account?<a href="login">Sign in</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <script>
     $(document).on('click', '.eye', function() {
          var txtPassword = document.getElementById('u_password');
          if (txtPassword.type === "password") {
               txtPassword.type = "text";

               var p1 = document.getElementById('p_eye');
               p1.setAttribute('class', 'fa fa-eye-slash');
          } else {
               txtPassword.type = "password";

               var p1 = document.getElementById('p_eye');
               p1.setAttribute('class', 'fa fa-eye');
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
          } else {
               $("#submitbtn").attr("disabled", false);
          }
     }
     </script>
</body>

</html>