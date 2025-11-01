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
        <h2>Edit Product</h2>
        <form method="POST" action="{{ route('product.update', ['product' => $product->id]) }}">
            @csrf
            @method('PUT')

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Product name" value="{{ $product->name }}">
            </div>

            <div>
                <label for="qty">Quantity</label>
                <input type="text" name="qty" id="qty" placeholder="Quantity" value="{{ $product->qty }}">
            </div>

            <div>
                <label for="price">Price</label>
                <input type="text" name="price" id="price" placeholder="Price" value="{{ $product->price }}">
            </div>

            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" placeholder="Description" value="{{ $product->description }}">
            </div>

            <div>
                <input type="submit" value="Update Product">
            </div>
        </form>
    </div>

</body>
</html>