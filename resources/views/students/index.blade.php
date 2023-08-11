<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        .animated-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #FFD700; /* Yellow */
            z-index: -1;
            opacity: 0.5;
            animation: colorChange 5s infinite alternate;
        }

        @keyframes colorChange {
            0% {
                background-color: #FFD700; /* Yellow */
            }
            100% {
                background-color: #8A2BE2; /* Purple */
            }
        }

        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="animated-background"></div>

<div class="center-content">
    <div class="form-container">
        <h1>Students</h1>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <table class="table table-bordered">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->phone}}</td>
                        <td><a href="{{route('students.edit',['student' => $student])}}" class="btn btn-dark">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('students.destroy' ,['student' => $student])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div style="text-align: right; margin-top: 20px;">
            <a href="{{route('students.add')}}" class="btn btn-primary">Add new Student</a>
        </div>
    </div>
</div>
</body>
</html>
