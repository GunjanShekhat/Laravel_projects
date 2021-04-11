<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.css" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>
     <script src="{{asset('js/ddtf.js')}}"></script>
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

     form.example input[type=text] {
          margin-top: 20px;
          padding: 10px;
          font-size: 17px;
          border: 1px solid grey;
          float: left;
          width: 80%;
          background: #f1f1f1;
     }

     form.example button {
          margin-top: 20px;
          float: left;
          width: 20%;
          padding: 10px;
          background: #4CAF50;
          color: white;
          font-size: 17px;
          border: 1px solid grey;
          border-left: none;
          cursor: pointer;
     }

     form.example button:hover {
          background: darkgreen;
     }

     form.example::after {
          content: "";
          clear: both;
          display: table;
     }

     table {
          margin-top: 20px;
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
          <a class="active" href="/users">Users</a>
          <a href="/houses">Houses</a>
     </div>

     <div class="content">
          <form class="example">
               <input type="text" placeholder="Search using User Names or User Emails" class="searchTextBox" id="search"
                    name="search">
               <button id="searchButton" onClick="searchh()"><i class="fa fa-search"></i></button>
          </form>

          <table id="tableFormat">
               <thead>
                    <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Occupation</th>
                         <th>Contact</th>
                    </tr>
               </thead>
               <tbody id="tableBody">
                    @foreach($users as $user)
                    <tr>
                         <td>{{ $user->userId }}</td>
                         <td>{{ $user->userName }}</td>
                         <td>{{ $user->userEmail }}</td>
                         <td>{{ $user->userOccupation }}</td>
                         <td>{{ $user->userContactNo }}</td>
                    </tr>
                    @endforeach
               </tbody>
          </table>
     </div>
     <script>
     jQuery('#tableFormat').ddTableFilter();
     </script>

     <script type=" text/javascript">
     function searchh() {
          var searchKey = $('#search').val();
          console.log(searchKey);
          $.ajax({
               url: "{{route('search')}}",
               type: "get",
               data: {
                    'searchKey': searchKey
               },
               success: function(data) {
                    $('#tableBody').html(data);
               }
          })
     }


     $('#search').on('keyup', function() {
          var searchKey = $('#search').val();
          console.log(searchKey);
          $.ajax({
               url: "{{route('search')}}",
               type: "get",
               data: {
                    'searchKey': searchKey
               },
               success: function(data) {
                    $('#tableBody').html(data);
               }
          })
     });
     </script>
</body>

</html>