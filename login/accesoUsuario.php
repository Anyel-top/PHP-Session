<?php
// receive form data
$user = $_POST ['usuario'];
$contra = $_POST ['contrasena'];

if ((isset ($user) && isset ($contra)) &&
    ($user!='' && $contra!='')){
        define  ('SEVERMAME', 'localhost');
        define ('USERNAME', 'root');
        define ('PASSWORD', 'root');
        define ('DBNAME', 'login');

        // create connection with MySQL
        $conn = new mysqli(SEVERMAME, USERNAME, PASSWORD, DBNAME);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        session_start();

        // ...

        // generate the query to check if data in the database exists
        $sql = "SELECT * FROM usuario WHERE usuario=? AND contra=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $user, $contra);
        $stmt->execute();

        // run query
        $resultados = $stmt->get_result();

        // ...


        if (!$resultados) {
            die("Error en la consulta: " . $conn->error);
        }

        if (!$resultados) {
            die("Error en la consulta: " . mysqli_error($conn));
        }

        // save data in array 
        $filas = mysqli_fetch_array($resultados);
        

        if ($filas['IDUsuario']== null){
            header("location:index.html");
        }
        else{
            $_SESSION["id"]=$filas['IDUsuario'];
            $_SESSION["usuario"]=$filas['usuario'];
            header("location: paginausuario.php");
        }

    }
    else{
        header("location: index.html");
    }
    
?>