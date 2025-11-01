<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a new student</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
            color: #444;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Add a new Student</h2>
        <form method="POST" action="{{ route('student.store') }}">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder=" Enter Student name">
            </div>

            <div>
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" placeholder="Enter phone number">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter Student Email">
            </div>

            <div>
                <label for="batch">Batch</label>
                <input type="text" name="batch" id="batch" placeholder="Enter Student Batch">
            </div>

            <div>
                <input type="submit" value="Save New Student">
            </div>
        </form>

        <div class="back-link">
            <a href="{{ route('student.index') }}">← Back to all students List</a>
        </div>
    </div>

</body>
</html>
