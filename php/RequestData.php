<?php
    /**
     * Clase para capturar los datos de la solicitud
     */
    class RequestData
    {
        /**
         * Datos del cliente
         */
        public $fecha;
        public $servicio;
        public $velocidad;
        public $periodo_de_contrato;
        public $tecnologia;
        public $codigo;
        public $nombre;
        public $direccion;
        public $telefono;
        public $whatsapp;
        public $facebook;
        public $ocupacion;
        public $direccion_de_trabajo;
        public $estado_civil;
        public $nombre_conyugue;
        public $telefono_conyugue;
        public $ocupacion_conyugue;
        /**
         * Contácto adicional #1
         */
        public $nombre1;
        public $telefono1;
        public $direccion1;
        public $parentesco1;
        /**
         * Contácto adicional #2
         */
        public $nombre2;
        public $telefono2;
        public $direccion2;
        public $parentesco2;
        /**
         * Contácto adicional #3
         */
        public $nombre3;
        public $telefono3;
        public $direccion3;
        public $parentesco3;

        function __construct()
        {
            /**
             * Datos del cliente
             */
            $this->fecha = $_POST['fecha'];
            $this->servicio = $_POST['servicio'];
            $this->velocidad = $_POST['velocidad'];
            $this->periodo_de_contrato = $_POST['periodo_de_contrato'];
            $this->tecnologia = $_POST['tecnologia'];
            $this->codigo = $_POST['codigo'];
            $this->nombre = $_POST['nombre'];
            $this->direccion = $_POST['direccion'];
            $this->telefono = $_POST['telefono'];
            $this->whatsapp = $_POST['whatsapp'];
            $this->facebook = $_POST['facebook'];
            $this->ocupacion = $_POST['ocupacion'];
            $this->direccion_de_trabajo = $_POST['direccion_de_trabajo'];
            $this->estado_civil = $_POST['estado_civil'];
            $this->nombre_conyugue = $_POST['nombre_conyugue'];
            $this->telefono_conyugue = $_POST['telefono_conyugue'];
            $this->ocupacion_conyugue = $_POST['ocupacion_conyugue'];
            /**
             * Contácto adicional #1
             */
            $this->nombre1 = $_POST['nombre1'];
            $this->telefono1 = $_POST['telefono1'];
            $this->direccion1 = $_POST['direccion1'];
            $this->parentesco1 = $_POST['parentesco1'];
            /**
             * Contácto adicional #2
             */
            $this->nombre2 = $_POST['nombre2'];
            $this->telefono2 = $_POST['telefono2'];
            $this->direccion2 = $_POST['direccion2'];
            $this->parentesco2 = $_POST['parentesco2'];
            /**
             * Contácto adicional #3
             */
            $this->nombre3 = $_POST['nombre3'];
            $this->telefono3 = $_POST['telefono3'];
            $this->direccion3 = $_POST['direccion3'];
            $this->parentesco3 = $_POST['parentesco3'];

        }
        public function sendRequest()
        {
            if (!empty($_POST['submit'])) {
                $query = "INSERT INTO Clientes()"
            }
        }
    }
?>
