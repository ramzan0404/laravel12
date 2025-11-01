<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Login to CRUD App</h1>

        <div class="text-sm text-gray-500 mb-4 text-center">
            <p>Demo Login:</p>
            <p><strong>Email:</strong> admin@admin.com</p>
            <p><strong>Password:</strong> 1234</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" placeholder="Enter your email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" placeholder="Enter your password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
                Login
            </button>
        </form>
    </div>

</body>
</html>
