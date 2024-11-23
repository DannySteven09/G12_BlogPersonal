<?php

require_once('../BD/conexionBD.php');

class blogModel {
    public static function into_blog($data) {
        try {
            $sql = "'" . $data['Titulo'] . "'," .
                   "'" . $data['Resumen'] . "'," .
                   "'" . $data['Contenido'] . "'," .
                   "'" . $data['Autor'] . "'";
                   
            $resultado = conexionBD::execute("call sp_into_blogs($sql);");
            conexionBD::getNotificaciones($resultado, "Inserción realizada correctamente");
    
            ?>
            <script>
                window.location.href='../View/home.html';
            </script>
            <?php

            } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    public static function get_blogs() {
        try {
            return conexionBD::getData("call sp_get_blogs();");
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    
    
}
?>
