<?php
class Conexion {
    static public function conectar() {
        $host = "localhost"; // Reemplaza con el nombre del servidor de MySQL proporcionado por Hostinger
        $dbname = "u912617504_inventario"; // Reemplaza con el nombre de tu base de datos
        $username = "u912617504_inventario"; // Reemplaza con tu nombre de usuario de MySQL en Hostinger
        $password = "Stihlmiranchito2024!"; // Reemplaza con tu contraseña de MySQL en Hostinger

        try {
            $link = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $link->exec("set names utf8");
            return $link;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            die();
        }
    }
}
