<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 30px;
        }

        .form-container {
            max-width: 600px;
            background: white;
            padding: 30px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #444;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Edit Student</h2>
        <form method="POST" action="{{ route('student.update', ['student' => $student->id]) }}">
            @csrf
            @method('PUT')

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Student name" value="{{ $student->name }}">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" value="{{ $student->email }}">
            </div>

            <div>
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="Phone" value="{{ $student->phone }}">
            </div>            

            <div>
                <label for="batch">Batch</label>
                <input type="text" name="batch" id="batch" placeholder="Batch" value="{{ $student->batch }}">
            </div>
            <div>
                <input type="submit" value="Update Student">
            </div>
            <div class="back-link">
                <a href="{{ route('student.index') }}">← Back to all students List</a>
            </div>
        </form>
    </div>

</body>
</html>