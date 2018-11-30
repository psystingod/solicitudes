<?php
    require("database.php");

    /**
     * Clase para insertar datos de solicitud de instalación
     */

    class sendRequest
    {
        /**
         * Datos del cliente
         */
        public $fecha = $_POST[];
        public $servicio = $_POST[];
        public $velocidad = $_POST[];
        public $periodo_de_contrato = $_POST[];
        public $tecnologia = $_POST[];
        public $codigo = $_POST[];
        public $nombre = $_POST[];
        public $direccion = $_POST[];
        public $telefono = $_POST[];
        public $whatsapp = $_POST[];
        public $facebook = $_POST[];
        public $ocupacion = $_POST[];
        public $direccion_de_trabajo = $_POST[];
        public $estado_civil = $_POST[];
        public $nombre_conyugue = $_POST[];
        public $telefono_conyugue = $_POST[];
        public $ocupacion_conyugue = $_POST[];
        /**
         * Contácto adicional #1
         */
        public $nombre1 = $_POST[];
        public $telefono1 = $_POST[];
        public $direccion1 = $_POST[];
        public $parentesco1 = $_POST[];
        /**
         * Contácto adicional #2
         */
        public $nombre2 = $_POST[];
        public $telefono2 = $_POST[];
        public $direccion2 = $_POST[];
        public $parentesco2 = $_POST[];
        /**
         * Contácto adicional #3
         */
        public $nombre3 = $_POST[];
        public $telefono3 = $_POST[];
        public $direccion3 = $_POST[];
        public $parentesco3 = $_POST[];

        function __construct()
        {
            // code...
        }
    }

?>
