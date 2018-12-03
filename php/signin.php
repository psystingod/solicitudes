<?php
    require('database.php');
    /**
     * Clase para iniciar sesión de los usuarios
     */
    class Login extends ConectionDB
    {
        public function Login()
        {
            parent::__construct ();
        }
        public function sessionStart()
        {
                /**
                 * Datos del usuario
                 */
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                // SQL query para obtener datos del usuario
                $query = "SELECT * FROM Usuarios WHERE user=:user AND pass=:pass";
                // Prepare statement
                $statement = $this->dbConnect->prepare($query);
                $statement->execute(array(
                    ':user' => $user,
                    ':pass' => $pass
                ));

                $loginRow = $statement->fetch(PDO::FETCH_ASSOC);

                if ($loginRow != false) {
                    // Inicia sesión solo si el usuario existe en la base de datos
                    session_start();
                    // Almacenamos los datos del usuario en la sesión
                    $_SESSION['id_usuario'] = $loginRow['id_usuario'];
                    $_SESSION['nombres'] = $loginRow['nombres'];
                    $_SESSION['apellidos'] = $loginRow['apellidos'];
                    $_SESSION['user'] = $loginRow['user'];
                    $_SESSION['pass'] = $loginRow['pass'];
                    $_SESSION['rol'] = $loginRow['rol'];

                    $this->dbConnect = NULL;
                    header("Location: ../solicitudes.php");
                }
                else {
                    header("Location: ../login.php");
                }

        }
    }

    $login = new Login();
    $login->sessionStart();
?>
