<?php
session_start();

if (isset($_POST['entrar'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'blog_sl');

    if (!$conn) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM user WHERE name = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $name, $password);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $nr = mysqli_num_rows($result);

    if ($nr == 1) {
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;

        if ($_SESSION['name'] == 'admin') {
            echo '<script type="text/javascript">
        window.location.href="../vista/home.php";
        </script>';
        } else {
            echo '<script type="text/javascript">
        alert("algun dato es incorrecto");
        window.location.href="login.php";
        </script>';
        }
    } else {
        echo '<script type="text/javascript">
        alert("Nombre de usuario o contraseña incorrectos.");
        window.location.href="login.php";
        </script>';
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    echo '<script type="text/javascript">
        alert("Error en la solicitud de inicio de sesión.");
        window.location.href="login.php";
        </script>';
}
