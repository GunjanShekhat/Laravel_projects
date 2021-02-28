<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Browse Houses</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800" rel='stylesheet' type='text/css'>

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


     input,
     textarea,
     button {
          height: 25px;
          margin: 0;
          padding: 10px;
          font-family: Raleway, sans-serif;
          font-weight: normal;
          font-size: 12pt;
          outline: none;
          border-radius: 0;
          background: none;
          border: 1px solid #282B33;
     }

     button,
     select {
          height: 45px;
          padding: 0 15px;
          cursor: pointer;
     }

     button {
          background: none;
          border: 1px solid black;
          margin: 25px 0;
     }

     button:hover {
          background-color: #282B33;
          color: white;
     }


     .tools {
          overflow: auto;
          zoom: 1;
     }

     .search-area {
          float: left;
          width: 60%;
     }

     .settings {
          display: none;
          float: right;
          width: 40%;
          text-align: right;
     }

     #view {
          display: none;
          width: auto;
          height: 47px;
     }

     #searchbutton {
          width: 60px;
          height: 47px;
     }

     input#search {
          width: 30%;
          width: calc(100% - 90px);
          padding: 10px;
          border: 1px solid #282B33;
     }

     @media screen and (max-width:400px) {
          .search-area {
               width: 100%;
          }
     }

     .products {
          width: 100%;
          font-family: Raleway;
     }

     .product {
          display: inline-block;
          width: calc(24% - 13px);
          margin: 10px 10px 30px 10px;
          vertical-align: top;
     }

     .product img {
          display: block;
          margin: 0 auto;
          width: auto;
          height: 200px;
          max-width: calc(100% - 20px);
          background-cover: fit;
          box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.8);
          border-radius: 2px;
     }

     .product-content {
          text-align: center;
     }

     .product h3 {
          font-size: 20px;
          font-weight: 600;
          margin: 10px 0 0 0;
     }

     .product h3 small {
          display: block;
          font-size: 16px;
          font-weight: 400;
          font-style: italic;
          margin: 7px 0 0 0;
     }

     .product .product-text {
          margin: 7px 0 0 0;
          color: #777;
     }

     .product .price {
          font-family: sans-serif;
          font-size: 16px;
          font-weight: 700;
     }

     .product .genre {
          font-size: 14px;
     }


     @media screen and (max-width:1150px) {
          .product {
               width: calc(33% - 23px);
          }
     }

     @media screen and (max-width:700px) {
          .product {
               width: calc(50% - 43px);
          }
     }

     @media screen and (max-width:400px) {
          .product {
               width: 100%;
          }
     }

     /* TABLE VIEW */
     @media screen and (min-width:401px) {
          .settings {
               display: block;
          }

          #view {
               display: inline;
          }

          .products-table .product {
               display: block;
               width: auto;
               margin: 10px 10px 30px 10px;
          }

          .products-table .product .product-img {
               display: inline-block;
               margin: 0;
               width: 120px;
               height: 120px;
               vertical-align: middle;
          }

          .products-table .product img {
               width: auto;
               height: 120px;
               max-width: 120px;
          }

          .products-table .product-content {
               text-align: left;
               display: inline-block;
               margin-left: 20px;
               vertical-align: middle;
               width: calc(100% - 145px);
          }

          .products-table .product h3 {
               margin: 0;
          }
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
               <a href=" contact">Contact</a>
               <a href="#about">About</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
               </a>
          </div>
     </div>

     <div>
          <center>
               <b>
                    <h3>My Houses</h3>
               </b>
          </center>
     </div>

     <div style="align:right;float:right;">
          <a href="addHouseDetail"><button class="btn btn-success">Post New House</button></a>
     </div>


     <div class="tools">
          <div class="search-area">
               <input type="text" id="search" placeholder="Search" /> <button id="searchbutton">Go</button>
          </div>
     </div>

     @foreach($house as $house)
     <div class="products products-table">
          <div class="product">
               <div class="product-img">
                    <img src="http://placehold.it/400x650">
               </div>
               <div class="product-content">
                    <div style="float:left;">
                         <h3>
                              {{ $house->house_name }}
                              <small>{{ $house->address }}</small>
                         </h3>
                         <p class="product-text price">{{ $house->rent_per_month }} Rs.</p>
                         <p class="product-text genre">{{ $house->city }}</p>
                         <p class="product-text genre">{{ $house->state }}</p>
                    </div>
                    <div style="float:right;">
                         <a href="edit-house/{{ $house->house_id }}"><button class="btn btn-success">Edit</button></a>
                         <a href="delet-house/{{ $house->house_id }}"><button class="btn btn-danger">Delete</button></a>
                    </div>
               </div>
          </div>
     </div>
     @endforeach



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
     </script>

</body>

</html>