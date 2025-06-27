<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display_Alldata</title>
</head>
<body>
    @if(isset($Alldata))
    <table>
        <tr> <th>SL No</th> <th>Title</th> <th>Description</th> <th>Action</th> </tr>
        @foreach($Alldata as $data)
        <tr> @php $i=1 
            <td>{{ $i }}</td>
            <td>{{$data->title}}</td> 
            <td>{{$data->description}}</td>
            <td> <a href="{{url('/Edit_rout')}}{{$data->id}}"> <button>Edit</button></a>
                 <a href="{{url('/Delete_rout')}}{{$data->id}}"> <button>Delete</button> </a>      </td>
        </tr>
        @endforeach
    </table>
</body>
</html>