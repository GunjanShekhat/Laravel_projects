<!DOCTYPE html>
<html lang="en">

<head>

     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <title>House Detail</title>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
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

     body {
          font-family: 'open sans';
          overflow-x: hidden;
     }

     img {
          max-width: 100%;
     }

     .preview {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -webkit-flex-direction: column;
          -ms-flex-direction: column;
          flex-direction: column;
     }

     @media screen and (max-width: 996px) {
          .preview {
               margin-bottom: 20px;
          }
     }

     .preview-pic {
          -webkit-box-flex: 1;
          -webkit-flex-grow: 1;
          -ms-flex-positive: 1;
          flex-grow: 1;
     }

     .preview-thumbnail.nav-tabs {
          border: none;
          margin-top: 15px;
     }

     .preview-thumbnail.nav-tabs li {
          width: 18%;
          margin-right: 2.5%;
     }

     .preview-thumbnail.nav-tabs li img {
          max-width: 100%;
          display: block;
     }

     .preview-thumbnail.nav-tabs li a {
          padding: 0;
          margin: 0;
     }

     .preview-thumbnail.nav-tabs li:last-of-type {
          margin-right: 0;
     }

     .tab-content {
          overflow: hidden;
     }

     .tab-content img {
          width: 100%;
          -webkit-animation-name: opacity;
          animation-name: opacity;
          -webkit-animation-duration: .3s;
          animation-duration: .3s;
     }

     .card {
          margin-top: 50px;
          background: #eee;
          padding: 3em;
          line-height: 1.5em;
     }

     @media screen and (min-width: 997px) {
          .wrapper {
               display: -webkit-box;
               display: -webkit-flex;
               display: -ms-flexbox;
               display: flex;
          }
     }

     .details {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -webkit-flex-direction: column;
          -ms-flex-direction: column;
          flex-direction: column;
     }

     .colors {
          -webkit-box-flex: 1;
          -webkit-flex-grow: 1;
          -ms-flex-positive: 1;
          flex-grow: 1;
     }

     .product-title,
     .price,
     .sizes,
     .colors {
          text-transform: UPPERCASE;
          font-weight: bold;
     }

     .checked,
     .price span {
          color: #A44DD8;
     }

     .product-title,
     .rating,
     .product-description,
     .price,
     .vote,
     .sizes {
          margin-bottom: 15px;
     }

     .product-title {
          margin-top: 0;
     }

     .size {
          margin-right: 10px;
     }

     .size:first-of-type {
          margin-left: 40px;
     }

     .color {
          display: inline-block;
          vertical-align: middle;
          margin-right: 10px;
          height: 2em;
          width: 2em;
          border-radius: 2px;
     }

     .color:first-of-type {
          margin-left: 20px;
     }

     .add-to-cart,
     .like {
          background: #A44DD8;
          padding: 1.2em 1.5em;
          border: none;
          text-transform: UPPERCASE;
          font-weight: bold;
          color: #fff;
          -webkit-transition: background .3s ease;
          transition: background .3s ease;
     }

     .add-to-cart:hover,
     .like:hover {
          background: #A44DD8;
          color: #fff;
     }

     .not-available {
          text-align: center;
          line-height: 2em;
     }

     .not-available:before {
          font-family: fontawesome;
          content: "\f00d";
          color: #fff;
     }

     .orange {
          background: #ff9f1a;
     }

     .green {
          background: #85ad00;
     }

     .blue {
          background: #0076ad;
     }

     .tooltip-inner {
          padding: 1.3em;
     }

     @-webkit-keyframes opacity {
          0% {
               opacity: 0;
               -webkit-transform: scale(3);
               transform: scale(3);
          }

          100% {
               opacity: 1;
               -webkit-transform: scale(1);
               transform: scale(1);
          }
     }

     @keyframes opacity {
          0% {
               opacity: 0;
               -webkit-transform: scale(3);
               transform: scale(3);
          }

          100% {
               opacity: 1;
               -webkit-transform: scale(1);
               transform: scale(1);
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
               <a class="active">Home</a>
               <a href="#browse_houses">Browse Houses</a>
               <a href="contact">Contact</a>
               <a href="#about">About</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
               </a>
          </div>
     </div>

     <div class="container">
          <div class="card">
               <div class="container-fliud">
                    <div class="wrapper row">
                         <div class="preview col-md-6">

                              <div class="preview-pic tab-content">
                                   <div class="tab-pane active" id="pic-1"><img src="{{url('/images/h1.jpg')}}"
                                             alt="Image" height="400px" />
                                   </div>
                                   <div class="tab-pane" id="pic-2"><img src="{{url('/images/h2.jpg')}}" alt="Image" />
                                   </div>
                                   <div class="tab-pane" id="pic-3"><img src="{{url('/images/h1.jpg')}}" alt="Image" />
                                   </div>
                                   <div class="tab-pane" id="pic-4"><img src="{{url('/images/h2.jpg')}}" alt="Image" />
                                   </div>
                                   <div class="tab-pane" id="pic-5"><img src="{{url('/images/h1.jpg')}}" alt="Image" />
                                   </div>
                              </div>
                              <ul class="preview-thumbnail nav nav-tabs">
                                   <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                                  src="{{url('/images/h1.jpg')}}" alt="Image" height="50px"
                                                  width="100px;" /></a></li>
                                   <li><a data-target="#pic-2" data-toggle="tab"><img src="{{url('/images/h2.jpg')}}"
                                                  alt="Image" height="50px" width="100px;" /></a></li>
                                   <li><a data-target="#pic-3" data-toggle="tab"><img src="{{url('/images/h1.jpg')}}"
                                                  alt="Image" height="50px" width="100px;" /></a></li>
                                   <li><a data-target="#pic-4" data-toggle="tab"><img src="{{url('/images/h2.jpg')}}"
                                                  alt="Image" height="50px" width="100px;" /></a></li>
                                   <li><a data-target="#pic-5" data-toggle="tab"><img src="{{url('/images/h1.jpg')}}"
                                                  alt="Image" height="50px" width="100px;" /></a></li>
                              </ul>

                         </div>
                         <div class="details col-md-6">
                              <h3 class="product-title">1 BHK Flat near Beach</h3>
                              <div class="rating">
                                   <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                   </div>
                                   <span class="review-no">41 reviews</span>
                              </div>
                              <p class="product-description">Description f House like location ,weather,rent price etc.
                              </p>
                              <h4 class="price">current rent per month: <span>$180</span></h4>
                              <p class="vote"><strong>91%</strong> of buyers enjoyed this location! <strong>(87
                                        votes)</strong></p>
                              <h5 class="sizes">Duration:
                                   <span class="size" data-toggle="tooltip" title="small">1 month</span>
                                   <span class="size" data-toggle="tooltip" title="medium">3months </span>
                                   <span class="size" data-toggle="tooltip" title="large">6 months</span>
                                   <span class="size" data-toggle="tooltip" title="xtra large">12 months</span>
                              </h5>

                              <div class="action">
                                   <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                                   <button class="like btn btn-default" type="button"><span
                                             class="fa fa-heart"></span></button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</body>

</html>