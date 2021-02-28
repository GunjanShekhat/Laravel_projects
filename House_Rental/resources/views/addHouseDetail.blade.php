<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>New House Details</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

     <style>
     .header {
          overflow: hidden;
          background-color: #f1f1f1;
          padding: 5px 10px;
     }

     .header a {
          float: left;
          color: black;
          text-align: center;
          text-decoration: none;
          font-size: 18px;
          line-height: 25px;
          border-radius: 4px;
     }

     .header a.logo {
          padding: 2px;
          font-size: 25px;
          font-weight: bold;
     }

     .header a:hover {
          background-color: #ddd;
          color: black;
     }

     .header a.active {
          background-color: dodgerblue;
          color: white;
     }

     .header-right {
          float: right;
          border-right: 3px solid black;
     }

     .header-right a {
          margin: 5px;
          padding: 12px;
     }

     .header-right .icon {
          display: none;
     }

     @media screen and (max-width: 700px) {
          .header a {
               float: left;
               display: block;
               text-align: left;
          }

          .header-right {
               float: right;
          }

          .header-right a {
               display: none;
          }

          .header-right a.icon {
               float: right;
               display: block;
          }

          .header-right.responsive {
               position: relative;
               overflow-y: overlay;
          }

          .header-right.responsive .icon {
               position: absolute;
               right: 0;
               top: 0;
          }

          .header-right.responsive a {
               float: none;
               display: block;
               text-align: left;
          }
     }


     .my-form {
          background: #efefef;
          padding: 20px;
          max-width: 800px;
          margin: 0 auto;
     }

     .my-form p {
          background: #ffffff;
          cursor: pointer;
          font-weight: bold;
     }

     .my-form p label {
          cursor: pointer;
          display: block;
          padding: 10px 10px 0px;
     }

     .my-form p .meta {
          font-style: italic;
          font-weight: normal;
          padding: 0px 10px;
     }

     .my-form p span.wrap {
          display: block;
          margin-left: 10px;
     }

     .my-form p span input,
     .my-form p span textarea {
          background: rgba(0, 0, 0, 0);
          border: 0px none;
          color: #666666;
          cursor: pointer;
          font-size: 1em;
          padding: 10px 0;
          width: 100%;
     }

     .my-form .cta-holder {
          background: rgba(0, 0, 0, 0);
          overflow: auto;
     }

     p.focus {
          background-color: #d7edef;
     }

     .cta-box {
          overflow: auto;
          padding: 30px 0 0 20px;
     }

     .cta-button,
     #submit {
          background: #0096cc;
          border: 0 none;
          color: #ffffff;
          cursor: pointer;
          display: block;
          float: left;
          font-size: 1.6em;
          font-weight: bold;
          padding: 12px 30px 8px;
          text-decoration: none;
     }

     .cta-button:visited {}

     .cta-button:hover,
     #submit:hover {
          background: #666;
     }

     .cta-button:active,
     #submit:active {
          background: #bbbbbb;
     }
     </style>
</head>

<body>
     <div class="header">
          <a href="/" class="logo"><img src="{{url('/images/xento.jpg')}}" alt="Image" height="50px"
                    width="100px;" /></a>

          <div class="header-right">

               <!-- <a href="profile">{{session('user')}}</a> -->
               <a href="login" style="background-color:lightblue;">Login / Sign Up</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
               </a>
          </div>
          <div class="header-right" id="myTopnav">
               <a href="home">Home</a>
               <a class="active">My Houses</a>
               <a href="browseHouse">Browse Houses</a>
               <a href="contact">Contact</a>
               <a href="#about">About</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
               </a>
          </div>
     </div>

     <div>
          <center>
               <b>
                    <h3>Add House Details</h3>
               </b>
          </center>
     </div>

     @if(Session::has('house_added'))
     <div class="alert-success" role="alert" style="margin-top:50px;">
          <center>
               {{Session::get('house_added')}}
          </center>
     </div>
     @endif
     <form class="my-form" action="{{ route('house.create')}}" method="post" style="margin-top:70px;">
          @csrf
          <p>
               <label for="houseName">House Name *</label>
               <span class="wrap">
                    <input type="text" name="houseName" placeholder="Enter House Name" class="form-control text"
                         id="houseName" required />
               </span>
          </p>
          <p>
               <label for="address">Address:</label>
               <span class="wrap">
                    <textarea name="address" cols="40" rows="5" placeholder="Enter House Address" class="textarea"
                         id="address" aria-invalid="false" required></textarea>
               </span>
          </p>
          <p>
               <label for="city">City *</label>
               <span class="wrap">
                    <input type="text" name="city" placeholder="Enter City" class="form-control text" id="city"
                         required />
               </span>
          </p>
          <p>
               <label for="state">State *</label>
               <span class="wrap">
                    <input type="text" name="state" placeholder="Enter House Name" class="form-control text" id="state"
                         required />
               </span>
          </p>
          <p>
               <label for="rent">Rent per Month *</label>
               <span class="wrap">
                    <input type="text" name="rent" placeholder="Enter House Name" class="form-control text" id="rent"
                         required />
               </span>
          </p>
          <!-- <p>
               <label for="e-mail">E-mail *</label>
               <span class="wrap">
                    <input type="text" name="your-e-mail" value="" size="40" class="form-control text" id="e-mail" />
               </span>
          </p>
          <p>
               <label for="phone">Phone * <span class="meta">Please enter your phone
                         number including country code.</span></label>
               <span class="wrap">
                    <input type="text" name="your-phone" value="" size="40" class="form-control text" id="phone" />
               </span>
          </p> -->
          <p class="cta-holder">
               <input type="submit" value="Submit" class="cta-button" />
          </p>
     </form>



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
     </script>

</body>

</html>