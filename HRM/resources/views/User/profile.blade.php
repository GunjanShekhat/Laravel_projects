<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profile</title>
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
                         <h3>Edit Profile Details</h3>
                    </div>

                    <div class="card-body">
                         <form action="userUpdate" method="POST">
                              @csrf
                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_name"
                                        value="{{ $userDetail->userName}}" required>

                              </div>
                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                   </div>
                                   <input type="password" class="form-control" name="u_password"
                                        value="{{ $userDetail->userPassword}}" disabled required>
                              </div>

                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_email"
                                        value="{{ $userDetail->userEmail}}" readonly required>
                              </div>

                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_contact"
                                        value="{{ $userDetail->userContactNo}}" required>
                              </div>

                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_address"
                                        value="{{ $userDetail->userAddress}}" required>
                              </div>

                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_area"
                                        value="{{ $userDetail->userArea}}" required>
                              </div>

                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_city"
                                        value="{{ $userDetail->userCity}}" required>
                              </div>

                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-city"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_state"
                                        value="{{ $userDetail->userState}}" required>
                              </div>

                              <div class="input-group form-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                   </div>
                                   <input type="text" class="form-control" name="u_occupation"
                                        value="{{ $userDetail->userOccupation}}" required>
                              </div>
                              <div class="form-group">
                                   <input type="submit" value="Update" class="btn login_btn">
                                   <a href="/"><input type="button" value="Cancel" class="btn login_btn"></a>
                              </div>
                         </form>
                    </div>
                    <div class="card-footer">
                         <div class="d-flex justify-content-center links">
                              <a href="/">Back to home</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>

</body>

</html>