<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students - CRUD App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-bottom: 30px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .message {
            padding: 10px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .create-btn, .logout-btn {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .logout-btn {
            background-color: #dc3545;
            float: right;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f1f1f1;
        }

        a.edit-link, form input[type="submit"] {
            padding: 6px 10px;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        a.edit-link {
            background-color: #28a745;
            color: white;
        }

        form input[type="submit"] {
            background-color: #dc3545;
            color: white;
        }

        .actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>All Students</h1>

        @if(session()->has('success'))
            <div class="message">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('student.create') }}" class="create-btn">+ Add a new student</a>
        <a href="{{ route('login') }}" class="logout-btn">Logout</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Batch</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->batch }}</td>

                    <td>
                        <a href="{{ route('student.edit', ['student' => $student]) }}" class="edit-link"><i class="fa fa-edit" style="font-size:24px"></i>Edit</a>
                    </td>/
                    
                    <td>
                        <form method="POST" action="{{ route('student.destroy', ['student' => $student->id]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Are you sure?')" style="background: none; border: none; cursor: pointer;">
                                <i class="fa fa-trash-o" style="font-size:24px; color: rgb(228, 34, 50);"></i>
                            </button>
                        </form>
                    </td>
                                     
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>