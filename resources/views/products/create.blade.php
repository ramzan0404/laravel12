<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
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
        <h2>Create a New Product</h2>
        <form method="POST" action="{{ route('product.store') }}">
            @csrf
            @method('POST')

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Product name">
            </div>

            <div>
                <label for="qty">Quantity</label>
                <input type="text" name="qty" id="qty" placeholder="Enter quantity">
            </div>

            <div>
                <label for="price">Price</label>
                <input type="text" name="price" id="price" placeholder="Enter price">
            </div>

            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" placeholder="Product description (optional)">
            </div>

            <div>
                <input type="submit" value="Save New Product">
            </div>
        </form>

        <div class="back-link">
            <a href="{{ route('product.index') }}">← Back to Product List</a>
        </div>
    </div>

</body>
</html>
