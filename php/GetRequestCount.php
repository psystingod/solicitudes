<?php
    require('database.php');
    /**
     * Clase para capturar los datos de la solicitud
     */
    class GetRequestCount extends ConectionDB
    {
        public function GetRequestCount()
        {
            parent::__construct ();
        }
        public function getRequestCountData()
        {
                // SQL query para datos del vendedor
                $query = "SELECT count(*) FROM solicitudes";
                // Prepare statement
                $statement = $this->dbConnect->prepare($query);
                $statement->execute();
                $numberOfRows = $statement->fetchColumn();

                $this->dbConnect = NULL;
                return $numberOfRows;

        }
    }
?>
