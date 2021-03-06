<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.css" />
     <style>
     .card {
          margin: 5px;
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

     <div class="sidebar">
          <a href="/dashboard">Home</a>
          <a href="/reports">Reports</a>
          <a href="/users">Users</a>
          <a class="active" href="/houses">Houses</a>
     </div>

     <div class="content">
          <table>
               <thead>
                    <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Address</th>
                         <th>Monthly Rent</th>
                         <th>Daily Rent</th>
                         <th>Status</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach($houses as $house)
                    <tr>
                         <td>{{ $house->houseId }}</td>
                         <td>{{ $house->houseName }}</td>
                         <td>{{ $house->houseArea }}</td>
                         <td>{{ $house->houseRentPerMonth }}</td>
                         <td>{{ $house->houseRentPerDay }}</td>
                         <td>{{ $house->houseStatus }}</td>
                    </tr>
                    @endforeach
               </tbody>
          </table>
     </div>

</body>

</html>