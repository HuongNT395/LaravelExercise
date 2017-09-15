
<!DOCTYPE html>
<html>
<head>
    <title>users</title>
</head>
<body>
<div class="container">
    <form class="form-group" enctype="multipart/form-data" action="{{route('add.user')}}">
        {{csrf_field()}}
       Name <input type="text" name="name"><br>
       Email <input type="email" name="email"><br>
       Password <input type="password" name="password"><br>
       Avatar <input type="file" name="avatar"><br>
        <input type="submit" value="submit">
    </form>
</div>
</body>
</html>
