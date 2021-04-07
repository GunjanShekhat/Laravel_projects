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
                    <th>Email</th>
                    <th>Occupation</th>
                    <th>Contact</th>
               </tr>
          </thead>
          <tbody>
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

</body>

</html>