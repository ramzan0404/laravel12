<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            text-align: center;
        }

        h1 {
            margin-bottom: 30px;
        }

        .card {
            display: inline-block;
            width: 200px;
            padding: 20px;
            margin: 15px;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.1);
        }

        .card a {
            text-decoration: none;
            color: white;
        }

        .btn {
            display: block;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            background-color: #3490dc;
        }

        .btn:hover {
            background-color: #2779bd;
        }

        .logout-btn {
            background-color: #e3342f;
        }

        .logout-btn:hover {
            background-color: #cc1f1a;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Admin Dashboard</h1>

    {{-- Add New Student --}}
    <div class="card">
        <h3>Add Student</h3>
        <a href="{{ route('student.create') }}" class="btn">
            Add New Student
        </a>
    </div>

    {{-- View Students --}}
    <div class="card">
        <h3>All Students</h3>
        <a href="{{ route('student.index') }}" class="btn">
            View Students
        </a>
    </div>

    {{-- Trash Students --}}    
    <div class="card">
        <h3>Trash</h3>
        <a href="{{ url('student/trash') }}" class="btn">
            Go To Trash
        </a>
    </div>

    {{-- Logout --}}
    <div class="card">
        <h3>Logout</h3>
        <form action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="btn logout-btn" style="border:none; width:100%;">
                Logout
            </button>
        </form>
    </div>

    {{-- Student View --}}    
    <div class="card">
        <h3>Student View</h3>
        <a href="" class="btn">
            Student View
        </a>
    </div>

    {{-- Student View --}}    
    <div class="card">
        <h3>Student View</h3>
        <a href="" class="btn">
            Student View
        </a>
    </div>

    {{-- Student View --}}    
    <div class="card">
        <h3>Student View</h3>
        <a href="" class="btn">
            Student View
        </a>
    </div>

    {{-- Student View --}}    
    <div class="card">
        <h3>Student View</h3>
        <a href="" class="btn">
            Student View
        </a>
    </div>

</div>

</body>
</html>
