<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>livre</title>
</head>
<body>
    <div>
        <a href="{{route('livers.create')}}">Create new livre</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>title</th>
                <th>price</th>
                <th>date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($livres as $liver)
                <td>{{$liver->name}}</td>
                <td>{{$liver->title}}</td>*
                <td>{{$liver->price}}</td>
                <td>{{$liver->date}}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</body>
</html>
