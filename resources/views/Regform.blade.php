<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form method="post" action="{{url('/Insert_rout')}}" enctype="multipart/form-data">
    @csrf
    Title : <input type="text" name="Title"><br>
    Description : <input type="textarea" name="Description"><br>
    <button>Submit</button>

    </form>
</body>
</html>