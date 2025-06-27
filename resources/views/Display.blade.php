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
        @php $i=1  @endphp
        @foreach($Alldata as $data)
        <tr> 
            <td>{{ $i }}</td>
            <td>{{$data->title}}</td> 
            <td>{{$data->description}}</td>
            <td> <a href="{{url('/Edit_rout')}}{{$data->id}}"> <button>Edit</button></a>
                 <a href="{{url('/Delete_rout')}}{{$data->id}}"> <button>Delete</button> </a>     </td>              
        </tr>
         @php  $i++ @endphp
        @endforeach
    </table>
@endif    
</body>
</html>