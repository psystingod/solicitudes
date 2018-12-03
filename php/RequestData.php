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
                $date=date_create($_POST['fecha']);

                $velocidad = $_POST['velocidad'];
                $servicio = $_POST['servicio'];
                $fecha = date_format($date,"Y-m-d");
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
                $query = "INSERT INTO Solicitudes(fecha, servicio, velocidad, periodo, tecnologia)
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
                $query = "INSERT INTO Clientes(codigo, nombre, direccion, telefono, whatsapp, facebook, ocupacion, direccion_de_trabajo, estado_civil, nombre_conyugue, telefono_conyugue, ocupacion_conyugue, Solicitudes_id_solicitud)
                          VALUES(:codigo, :nombre, :direccion, :telefono, :whatsapp, :facebook, :ocupacion, :direccion_de_trabajo, :estado_civil, :nombre_conyugue, :telefono_conyugue, :ocupacion_conyugue, (SELECT id_solicitud FROM Solicitudes WHERE id_solicitud = LAST_INSERT_ID()))";
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
                $query = "INSERT INTO Contactos(nombre1, telefono1, direccion1, parentesco1, nombre2, telefono2, direccion2, parentesco2, nombre3, telefono3, direccion3, parentesco3, Clientes_id_cliente)
                          VALUES(:nombre1, :telefono1, :direccion1, :parentesco1, :nombre2, :telefono2, :direccion2, :parentesco2, :nombre3, :telefono3, :direccion3, :parentesco3, (SELECT id_cliente FROM Clientes WHERE id_cliente = LAST_INSERT_ID()))";
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
                $query = "INSERT INTO Vendedores(vendedor, dependencia, Contactos_id_contacto)
                          VALUES(:vendedor, :dependencia, (SELECT id_contacto FROM Contactos WHERE id_contacto = LAST_INSERT_ID()))";
                // Prepare statement
                $statement = $this->dbConnect->prepare($query);
                $statement->execute(array(
                    ':vendedor' => $vendedor,
                    ':dependencia' => $dependencia
                ));

                $this->dbConnect = NULL;
                header("Location: ../index.html");

        }
    }

    $send = new RequestData();
    $send->sendRequest();
?>
