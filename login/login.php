<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">

    <style>
        body {
            background: url(./img/fondo.png);
            background-size: cover;
        }

        .login {
            margin-top: 200px;
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>

</head>

<body>
    <div class="container">
        <?php
        $host = "127.0.0.1";
        $port = 3306;
        $socket = "";
        $user = "root";
        $password = "";
        $dbname = "php";

        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
            or die('Could not connect to the database server' . mysqli_connect_error());

        $usuario = $_POST['nombre'];
        $password = $_POST['password'];

        $query = "select * from login where usuario ='$usuario' and password = '$password'";

        // if ($usuario == 'Gerardo' & $password == "1234") {
        //     echo "<h2 class='red-text'>Bienvenido " . $usuario . "</h2>";
        // } else {
        //     echo "<h2 class='red-text'>Usuario o contraseña incorrecta.</h2>";
        // }

        if ($stmt = $con->prepare($query)) {
            $stmt->execute();
            $stmt->bind_result($field1, $field2);
            if ($stmt->fetch()) {
                echo "<h2 class='red-text'>Bienvenido $usuario </h2>";
            } else {
                echo "<h2 class='red-text'>Contraseña incorrecta</h2>";
            }
            $stmt->close();
        }
        ?>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>