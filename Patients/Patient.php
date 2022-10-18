    <?php
        include('../config/config.php');
    include('../config/Database.php');

    class Patient{
        public $conn;

       
        function __construct(){
            $db= new Database(); /* LA CONEXION A LA BD SIEMPRE SE RENUEVE O ESTE EN LINEA */
            $this->conn = $db->connectToDatabase();
        }

        function save($params){
            $firstName = $params['firstName'];
            $lastName = $params['lastName'];
            $email = $params['email'];
            $Telefono = $params['Telefono'];
            $Tipodepedido = $params['Tipodepedido'];
            $Fechadeentrega = $params['Fechadeentrega'];
            $Observaciones = $params['Observaciones'];

            $insert = " INSERT INTO clientess VALUES (NULL, '$firstName', '$lastName', '$email', '$Telefono', '$Tipodepedido', '$Fechadeentrega', '$Observaciones') ";
            return mysqli_query($this->conn, $insert);
        }

        function getAll(){
            $sql = " SELECT * FROM clientess ORDER BY Fechadeentrega ASC ";
            return mysqli_query($this->conn, $sql);
        }

        function getOne($id){
            $sql = "SELECT * FROM clientess WHERE id = $id";
            return mysqli_query($this->conn, $sql);
        }

        function update($params){
            $firstName = $params['firstName'];
            $lastName = $params['lastName'];
            $email = $params['email'];
            $Telefono = $params['Telefono'];
            $Tipodepedido = $params['Tipodepedido'];
            $Fechadeentrega = $params['Fechadeentrega'];
            $Observaciones = $params['Observaciones'];
            $id = $params['id'];

            $update = " UPDATE clientess SET firstName='$firstName', lastName='$lastName', email='$email', Telefono='$Telefono', Tipodepedido='$Tipodepedido', Fechadeentrega='$Fechadeentrega', Observaciones='$Observaciones' WHERE id = $id";
            return mysqli_query($this->conn, $update);
        }

        function remove($id){
            $remove = "DELETE FROM clientess WHERE id = $id";
            return mysqli_query($this->conn, $remove);
        }


    }
