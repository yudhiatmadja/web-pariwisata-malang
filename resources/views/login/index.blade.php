<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/admin.css','resources/js/admin.js'])
    <title>Admin Login</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <section class="bg-white rounded-lg shadow-lg max-w-md w-full p-8 space-y-6">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800">Admin Login</h1>
            <p class="text-gray-600 mt-2">Sign in to access the admin dashboard</p>
        </div>
        <form class="space-y-6" action="/admin" method="POST">
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="username" placeholder="username" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-medium rounded-lg text-sm py-2.5 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300">Sign in</button>
        </form>

    </section>
</body>
</html>
