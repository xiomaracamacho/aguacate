<?php
require_once ("Autoload.php");

class Aguacate extends Conexion{
    
    private $strCliente;
    private $intDocumento;
    private $strMarca;
    private $strPlaca;
    private $strColor;
    private $strUbicacion;
    private $strHoraSalida;

    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function insertRegistro(string $nombre, int $documento, string $marca, string $placa, string $color){

        try {
            $this->strCliente = $nombre;
            $this->intDocumento = $documento;
            $this->strMarca = $marca;
            $this->strPlaca = $placa;
            $this->strColor = $color;
   

            $sql = "INSERT INTO aguacate(nombreCliente,documentoCliente,marcaVehiculo,placaVehiculo,color) VALUES(:nom, :doc, :marca, :placa, :color)";
            $insert = $this->conexion->prepare($sql);

            $arrData = array(
                ":nom" => $this->strCliente,
                ":doc" =>   $this->intDocumento,
                ":marca" => $this->strMarca,
                ":placa" => $this->strPlaca,
                ":color" => $this->strColor,
            );

            $resInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            $insert->closeCursor();
            return $idInsert;
        } catch (Exception $e) {
            echo "Error: ". $e->getMessage();
        }
    }

    // public function getAguacate(){
    //     try {
    //         $sql = "SELECT * FROM aguacate";
    //         $execute = $this->conexion->query($sql);
    //         $request = $execute->fetchall(PDO::FETCH_ASSOC); //ARRAY
    //         //$request = $execute->fetchall(PDO::FETCH_CLASS); //OBJETOS
    //         $execute->closeCursor();
    //         return $request;
    //     } catch (Exception $e) {
    //         echo "Error: ". $e->getMessage();
    //     }

    // }

    // public function getIdpuesto(int $id){
    //     try {
    //         $this->intId = $id;
    //         $sql = "SELECT * FROM aguacate WHERE idpuesto = :id";
    //         $arrData = array(":id" => $this->intId);
    //         $query = $this->conexion->prepare($sql);
    //         $query->execute($arrData);
    //         $request = $query->fetch(PDO::FETCH_ASSOC); //ARRAY
    //         $query->closeCursor();
    //         return $request;
    //     } catch (Exception $e) {
    //         echo "Error: ". $e->getMessage();
    //     }
    // }
    // public function updateAguacate(string $nombre, int $documento, string $marca, string $placa, string $color, string $ubicacion, string $horaSalida){

    //     try {
    //         $this->strCliente = $nombre;
    //         $this->intDocumento = $documento;
    //         $this->strMarca = $marca;
    //         $this->strPlaca = $placa;
    //         $this->strColor = $color;
    //         $this->strUbicacion = $ubicacion;
    //         $this->strHoraSalida = $horaSalida;

    //         $sql = "UPDATE aguacate SET nombre = :nom, documento = :doc, marca = :marca, color = :color, ubicacion = :ubic, horaSalida = :horaSa WHERE idpuesto = :id";
    //         $update = $this->conexion->prepare($sql);
    //         $arrData = array(
    //             ":doc" =>   $this->intDocumento,
    //             ":marca" => $this->strMarca,
    //             ":placa" => $this->strPlaca,
    //             ":color" => $this->strColor,
    //             ":ubic" => $this->strUbicacion,
    //             ":horaSa" => $this->strHoraSalida
    //         );
    //         $resUpdate = $update->execute($arrData);
    //         //$idInsert = $this->conexion->lastInsertId(); // retorna el id del usuario
    //         $update->closeCursor();//se cierra la conexion
    //         return $resUpdate;
    //     } catch (Exception $e) {
    //         echo "Error: ". $e->getMessage();
    //     }

    // }

    // public function deleteUbicacion(int $ubicacion){
    //     try {
    //         $this->strUbicacion = $ubicacion;

    //         $sql = "DELETE FROM aguacate WHERE ubicacion = :ubic";
    //         $delete = $this->conexion->prepare($sql);

    //         $arrData =  [
    //             ":ubic" => $this->strUbicacion
    //         ];
    //         //ejecutar la consulta
    //         $del = $delete->execute($arrData);

    //         return $del;
    //     }catch (Throwable $th) {
    //         echo "Error: ". $e->getMessage();
    //     }

    // }

}
?>