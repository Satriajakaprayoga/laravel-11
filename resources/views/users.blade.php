<?php 
// @dd($kunam, 
// $users->toArray(),
// $index, 
// $method) 
@dd($users->toArray(), $dataUser->toArray())
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>
</head>
<body>
    <h1>Daftar Pengguna</h1>
    <table border="1">
        <tr>
            <th>no</th>
            <th>id</th>
            <th>Nama</th>
        </tr>
        @foreach ($users as $index => $p)
        <tr>
            <td>{{ $index+1 }}</td>
            <td>{{ $p['id'] }}</td>
            <td>{{ $p['name'] }}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>
