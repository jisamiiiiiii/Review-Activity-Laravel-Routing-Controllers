<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student System</title>
</head>
<body>
    <h1>Student List</h1>

    <hr>

    <h3>Update Student</h3>
    <form action="/student/update" method="POST">
        @csrf
        @method('PUT')
        
        <input type="text" name="name" placeholder="Enter Student Name">
        <button type="submit">Update</button>
    </form>

</body>
</html>