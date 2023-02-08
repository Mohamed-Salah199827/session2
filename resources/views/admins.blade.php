<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/style.css")}}">

</head>
<body>
 <table>
<thead>
    <th>name</th>
    <th>email</th>
    <th>edit</th>
</thead>

<tbody>
@foreach ($admins as $admin)
<tr>
    <td>{{ $admin->name }}</td>
    <td>{{ $admin->email }}</td>
    <td>
        <form action="{{ route("admin.destroy",$admin->id) }}" method="POST">
             @method("DELETE")
             @csrf
            <button>delete</button>

        </form>
        <form action="{{ route("admin.update",$admin->id) }}" >
            <button>update</button>
        </form>
    </td>
</tr>

@endforeach
</tbody>

 </table>
</body>
</html>


