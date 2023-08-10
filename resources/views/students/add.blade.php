<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style= 'display: flex;
  justify-content: center; color:purple'>Add a Student</h1>
<form method="post" action="{{route(students.school)}}">
@csrf
@method('post')
    <div>
        <label for="">Name</label>
        <input type="text" name="name" placeholder= "name">
    </div>

    <div>
        <label for="">student id</label>
        <input type="number" name="student id" placeholder= "student id">
    </div>

    <div>
        <label for="">Email</label>
        <input type="email" name="email" placeholder= "email">
    </div>

    <div>
        <label for="">Address</label>
        <input type="text" name="address" placeholder= "address">
    </div>

    <div>
        <label for="">Phone</label>
        <input type="number" name="phone" placeholder= "phone">
    </div>

    <div>
        <input type="submit" value="save new student">
    </div>
</form>
</body>
</html>
