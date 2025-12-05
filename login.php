<?php 
require 'config.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sqlCheck = $pdo->prepare("SELECT COUNT(email) as Temail, COUNT(pass) as Tpass FROM regiser WHERE email = ?");
    $sqlCheck->execute([$email]);
    $count = $sqlCheck->fetch(PDO::FETCH_ASSOC);
    if($count['Temail'] > 0 && $count['Tpass'] > 0){
        header('Location: dashboard.php');
        exit;
    }else{
        echo "Email ou Mot de passe Incorrect";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md w-full max-w-md">
              <h2 class="text-2xl font-bold mb-6 text-center text-gray-900 dark:text-white">Login</h2>
              <form action="#" method="POST">
                <div class="mb-4">
                  <label for="email" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Email</label>
                  <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline bg-gray-50 dark:bg-gray-700 border-gray-300 dark:border-gray-600" placeholder="Your Email">
                </div>
                <div class="mb-6">
                  <label for="password" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Password</label>
                  <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline bg-gray-50 dark:bg-gray-700 border-gray-300 dark:border-gray-600" placeholder="Password">
                </div>
                <div class="flex items-center justify-between">
                  <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Login
                  </button>
                </div>
              </form>
            </div>
        </div>
    </main>
</body>
</html>