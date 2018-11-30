<?php
    require('database.php');
    /**
     * Clase para capturar los datos de la solicitud
     */
    class RequestData extends ConectionDB
    {
        public function RequestData()
        {
            parent::__construct ();
        }
        public function sendRequest()
        {


                /**
                 * Datos del cliente
                 */
                $velocidad = $_POST['velocidad'];
                $servicio = $_POST['servicio'];
                $fecha = $_POST['fecha'];
                $periodo_de_contrato = $_POST['periodo_de_contrato'];
                $tecnologia = $_POST['tecnologia'];
                $codigo = $_POST['codigo'];
                $nombre = $_POST['nombre'];
                $direccion = $_POST['direccion'];
                $telefono = $_POST['telefono'];
                $whatsapp = $_POST['whatsapp'];
                $facebook = $_POST['facebook'];
                $ocupacion = $_POST['ocupacion'];
                $direccion_de_trabajo = $_POST['direccion_de_trabajo'];
                $estado_civil = $_POST['estado_civil'];
                $nombre_conyugue = $_POST['nombre_conyugue'];
                $telefono_conyugue = $_POST['telefono_conyugue'];
                $ocupacion_conyugue = $_POST['ocupacion_conyugue'];
                /**
                 * Contácto adicional #1
                 */
                $nombre1 = $_POST['nombre1'];
                $telefono1 = $_POST['telefono1'];
                $direccion1 = $_POST['direccion1'];
                $parentesco1 = $_POST['parentesco1'];
                /**
                 * Contácto adicional #2
                 */
                $nombre2 = $_POST['nombre2'];
                $telefono2 = $_POST['telefono2'];
                $direccion2 = $_POST['direccion2'];
                $parentesco2 = $_POST['parentesco2'];
                /**
                 * Contácto adicional #3
                 */
                $nombre3 = $_POST['nombre3'];
                $telefono3 = $_POST['telefono3'];
                $direccion3 = $_POST['direccion3'];
                $parentesco3 = $_POST['parentesco3'];
                /**
                 * Datos del vendedor
                 */
                $vendedor = $_POST['vendedor'];
                $dependencia = $_POST['dependencia'];

                // SQL query para datos de la solicitud
                $query = "INSERT INTO solicitud(fecha, servicio, velocidad, periodo, tecnologia)
                          VALUES(:fecha, :servicio, :velocidad, :periodo, :tecnologia)";
                // Prepare statement
                $statement = $this->dbConnect->prepare($query);
                $statement->execute(array(
                    ':fecha' => $fecha,
                    ':servicio' => $servicio,
                    ':velocidad' => $velocidad,
                    ':periodo' => $periodo_de_contrato,
                    ':tecnologia' => $tecnologia
                ));

                // SQL query para datos del cliente
                $query = "INSERT INTO cliente(codigo, nombre, direccion, telefono, whatsapp, facebook, ocupacion, direccion_de_trabajo, estado_civil, nombre_conyugue, telefono_conyugue, ocupacion_conyugue)
                          VALUES(:codigo, :nombre, :direccion, :telefono, :whatsapp, :facebook, :ocupacion, :direccion_de_trabajo, estado_civil, nombre_conyugue, telefono_conyugue, ocupacion_conyugue)";
                // Prepare statement
                $statement = $this->dbConnect->prepare($query);
                $statement->execute(array(
                    ':codigo' => $codigo,
                    ':nombre' => $nombre,
                    ':direccion' => $direccion,
                    ':telefono' => $telefono,
                    ':whatsapp' => $whatsapp,
                    ':facebook' => $facebook,
                    ':ocupacion' => $ocupacion,
                    ':direccion_de_trabajo' => $direccion_de_trabajo,
                    ':estado_civil' => $estado_civil,
                    ':nombre_conyugue' => $nombre_conyugue,
                    ':telefono_conyugue' => $telefono_conyugue,
                    ':ocupacion_conyugue' => $ocupacion_conyugue
                ));

                // SQL query para los contactos
                $query = "INSERT INTO contactos(nombre1, telefono1, direccion1, parentesco1, nombre2, telefono2, direccion2, parentesco2, nombre3, telefono3, direccion3, parentesco3)
                          VALUES(:nombre1, :telefono1, :direccion1, :parentesco1, :nombre2, :telefono2, :direccion2, :parentesco2, :nombre3, :telefono3, :direccion3, :parentesco3,)";
                // Prepare statement
                $statement = $this->dbConnect->prepare($query);
                $statement->execute(array(
                    ':nombre1' => $nombre1,
                    ':telefono1' => $telefono1,
                    ':direccion1' => $direccion1,
                    ':parentesco1' => $parentesco1,
                    ':nombre2' => $nombre2,
                    ':telefono2' => $telefono2,
                    ':direccion2' => $direccion2,
                    ':parentesco2' => $parentesco2,
                    ':nombre3' => $nombre3,
                    ':telefono3' => $telefono3,
                    ':direccion3' => $direccion3,
                    ':parentesco3' => $parentesco3
                ));

                // SQL query para datos del vendedor
                $query = "INSERT INTO vendedor(vendedor, dependencia)
                          VALUES(:vendedor, :dependencia)";
                // Prepare statement
                $statement = $this->dbConnect->prepare($query);
                $statement->execute(array(
                    ':vendedor' => $this->vendedor,
                    ':dependencia' => $this->dependencia
                ));

                $this->dbConnect = NULL;
                header("Location: ../index.html");

        }
    }

    $send = new RequestData();
    $send->sendRequest();
?>
