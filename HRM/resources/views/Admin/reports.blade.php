<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.css" />
     <style>
     .card {
          margin: 35px;
          background-color: lightgrey;
          color: black;
          font-weight: bold;
          font-size: 24px;
     }

     body {
          margin: 0;
          font-family: "Lato", sans-serif;
     }

     .sidebar {
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #f1f1f1;
          position: fixed;
          height: 100%;
          overflow: auto;
     }

     .sidebar a {
          display: block;
          color: black;
          padding: 16px;
          text-decoration: none;
     }

     .sidebar a.active {
          background-color: #4CAF50;
          color: white;
     }

     .sidebar a:hover:not(.active) {
          background-color: #555;
          color: white;
     }

     div.content {
          margin-left: 200px;
          padding: 1px 16px;
          height: 1000px;
     }

     @media screen and (max-width: 700px) {
          .sidebar {
               width: 100%;
               height: auto;
               position: relative;
          }

          .sidebar a {
               float: left;
          }

          div.content {
               margin-left: 0;
          }
     }

     @media screen and (max-width: 400px) {
          .sidebar a {
               text-align: center;
               float: none;
          }
     }
     </style>
</head>

<body>

     <div class="sidebar">
          <a href="/dashboard">Home</a>
          <a class="active" href="/reports">Reports</a>
          <a href="/users">Users</a>
          <a href="/houses">Houses</a>
     </div>

     <div class="content">
          <div class="container">
               <div class="row">
                    <div class="card col-lg-3">
                         <a href="/usersPDF">
                              <div class="card-body">
                                   <p>All Users</p>
                              </div>
                         </a>
                    </div>
                    <div class="card col-lg-3">
                         <a href="/latestUsersPDF">
                              <div class="card-body">
                                   <p>Latest Registered Users</p>
                              </div>
                         </a>
                    </div>
                    <div class="card col-lg-3">
                         <a href="/housesPDF">
                              <div class="card-body">
                                   <p>All Houses</p>
                              </div>
                         </a>
                    </div>
                    <div class="card col-lg-3">
                         <a href="/latestHousesPDF">
                              <div class="card-body">
                                   <p>Latest Houses</p>
                              </div>
                         </a>
                    </div>
               </div>
          </div>
     </div>

</body>

</html>