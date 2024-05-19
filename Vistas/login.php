<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-80">
        <h2 class="text-2xl mb-4">Iniciar sesión</h2>
        <form action="login.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Usuario:</label>
                <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Contraseña:</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>

<?php
//Get data form
if(isset($_POST['username']) && $_POST['password']){
    $username = $_POST['username'];
    $password = $_POST['password'];


    //Connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'login');
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        header("Location: index.php");
    }else{
        echo "Usuario o contraseña incorrectos";
    }    
}
?>
