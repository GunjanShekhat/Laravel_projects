<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.css" />
     <style>
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

</body>

</html>