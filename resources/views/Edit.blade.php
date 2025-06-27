<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_Data</title>
</head>
<body>
    @if(isset($Edit_Data))
    <form method="post" action="{{url('/Update_rout')}}" enctype="multipart/form-data">
    @csrf
    ID: <input type="text" readonly name="ID" value="{{$Edit_Data->id}}">
    Title : <input type="text" name="Title" value="{{$Edit_Data->title}}"><br>
    Description : <input type="textarea" name="Description" value="{{$Edit_Data->description}}"><br>
    <button>Submit</button>
    </form>
    @endif
</body>
</html>