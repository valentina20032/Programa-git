<?php
class consultas extends dbconexion{
    public function select_paciente(){
        $sqlp = dbconexion::conexion()->prepare("select * from paciente;");
        $sqlp -> execute();
        return $array = $sqlp->fetchALL(PDO::FETCH_ASSOC);
    }
    public function insert_paciente($tipo_doc,$documento,$fecha,$nombre,$apellidos,$sexo){
        $sqlp = dbconexion::conexion()->prepare("INSERT INTO paciente(tipo_doc,documento,fecha,nombre,apellidos,sexo) VALUES ('$tripo_doc','$documento','$fecha','$nombre',$apellidos','$sexo')");
        if($sqlp->execute()){
            $resultado = self::select_paciente();
            return $resultado;
        }
    }
    public function obtener_paciente($cons){
        $sqlp = dbconexion::conexion()->prepare("SELECT * FROM paciente WHERE consecutivo ='".$cons."'");
        if($sqlp->execute()){
           return $array = $sqlp->fetchALL(PDO::FETCH_ASSOC);
        }else{
            return "error de base de datos";
        }
    }
        public function uptade_paciente($cons,$tipo_de_documento,$doc,$fecha,$apellido,$nombre,$sexo){
            $sqlp = dbconexion::conexion()->prepare("UPDATE paciente SET tipo_doc='",$tipo."',documento'".$doc."',fecha'".$fecha."',nombre'".$nom."',apellidos'".$ape."',sexo'".$sexo."'WHERE consecutivo='".$cons."'");
            $sqlp->execute();
            if($sqlp->rowCount()> 0){
                $resultado = self::select_paciente();
                return $resultado;
}else{
                return"error de base de datos";
            }
        }
 public function eliminar_paciente($cons){
            $sqlp = dbconexion::conexion()->prepare("DELETE FROM paciente WHERE consecutivo ='".$tcons."'");  
            $sqlp->execute();
            if($sqlp->rowCount()> 0){
                $resultado = self::select_paciente();
                return $resultado;
            }else{
                return"error de base de datos";
            }
        }


}
?>

    