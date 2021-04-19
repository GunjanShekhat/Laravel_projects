<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sign In</title>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css"
          href="http://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400&amp;display=swap" />
     <link rel="stylesheet" href="css/bootstrap.css" />
     <link rel="stylesheet" href="css/style.css" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
                              <li class="active">Login</li>
                         </ul>
                    </div>
               </div>
          </section>
          <section class="section-md bg-default">
               <div class="container">
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
                    @if(Session::has('user_created'))
                    <div class="alert-success" role="alert" style="margin-top:50px;">
                         <center>
                              {{ Session::get('user_created') }}
                         </center>
                    </div>
                    @endif

                    <div style="display:flex;justify-content:center;">

                         <form action="loginCheck" style="width:40%;" method="POST">
                              <center>
                                   <h4>Login</h4>
                              </center>
                              @csrf
                              <span id="emailresponse" style="color:red;"></span>
                              <div class="form-wrap">
                                   <label class="form-label-outside" for="Email">Email:*</label>
                                   <input class="form-input" type="email" id="Email" name="Email" placeholder="Email" />
                              </div>

                              <span id="passwordresponse" style="color:red;"></span>
                              <div class="form-wrap">
                                   <label class="form-label-outside" for="Password">Password:*</label>
                                   <span class="input-icons">
                                        <input type="password" class=" input-field" id="Password" name="Password"
                                             required>
                                        <i id="p_eye" class="fas fa-eye icon"></i>
                                   </span>
                              </div>

                              <input type="submit" id="submitbtn" class="button" value="Login" style="width:100%;"
                                   disabled>
                              <div>
                                   <div>
                                        Don't have an account?<a href="signup">Sign Up</a>
                                   </div>
                              </div>
                         </form>

                    </div>
               </div>
          </section>

     </div>

     @include('User.footer');

     <!-- Javascript-->
     <script src="js/core.min.js"> </script>
     <script src="js/script.js"></script>

     <script>
     $(document).on('click', '.eye', function() {
          var txtPassword = document.getElementById('Password');
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

     var varEmail = 0,
          varPassword = 0;
     $('#Email').on('keyup blur', function() {
          var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
          if ($('#Email').val() == '') {
               varEmail = 0;
               validate();
               $("#emailresponse").html("This field cannot be left empty");
          } else if (!($('#Email').val().match(mailformat))) {
               varEmail = 0;
               validate();
               $("#emailresponse").html("Invalid Email Address");
          } else {
               varEmail = 1;
               validate();
               $("#emailresponse").html("");
          }
     });

     $('#Password').on('keyup blur', function() {
          if ($('#Password').val() == '') {
               varPassword = 0;
               validate();
               $("#passwordresponse").html("This field cannot be left empty");
          } else {
               varPassword = 1;
               validate();
               $("#passwordresponse").html("");
          }
     });

     function validate() {
          if (varEmail == 0 || varPassword == 0) {
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