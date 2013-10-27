<?php
/**
 * Description of usuarioModel
 *
 * @author aquino
 */
class usuarioModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function GRABAR($codigo,$user,$pass,$idperfil,$status,$idpersona,$nivel,$inscripcion,$ultimasession){
        $this->_db->prepare('Call(:code,:user,:pass,:idperfil,:status,:persona,:nivel,:insc,:ultima)')
        ->execute(
                array(
                    ':code'=>$codigo,
                    ':user'=>$user,
                    ':pass'=>$pass,
                    ':idperfil'=>$idperfil,
                    ':status'=>$status,
                    ':persona'=>$idpersona,
                    ':nivel'=>$nivel,
                    ':insc'=>$inscripcion,
                    ':ultima'=>$ultimasession
                ));
        return $this->_db->errno;
    }
    
    public function Validar($user,$pass) {
        $sql="select codigo,usuario,contrasena,idperfil,estado,idpersona,nivel,inscripcion,ultimasesion from Usuario
            where usuario='$user' and contrasena=md5('$pass')";
        $result=  $this->_db->query($sql);
        return $result->num_rows;
    }
    
    public function deleteuser($code) {
        $code = (int) $code;
        $this->_db->query('update Usuario set estado=0 where codigo='.$code);
        return $this->_db->errno;
    }
    
    public function setsession($usuario){
        $code = (int) $code;
        $fecha= date("Y-m-d H:i:s");
        $this->_db->query("Update Usuario set ultimasesion='".$fecha."' where usuario='".$usuario."'");
        return $this->_db->errno;
    }
    
    public function Inputsystembyuser($user) {
        $lista=$this->_db->query("SELECT  uh.codigo,
                    CONCAT(pe.paterno,' ',pe.materno,' ,',pe.nombres) as USER,
                    uh.accion,
                    uh.descripcion,
                    user.estado
                    FROM User_history uh
                    inner join Usuario user on uh.usuario=user.usuario
                    inner join Persona pe on user.idpersona=pe.codigo
                    where user.usuario='$user'
                    ORDER BY uh.codigo DESC;");
        return $lista->fetchall();
    }
    
    public function WhoIs($dni){
        $consulta = $this->_db->query("Select * from Persona where dni='".$dni."';");
        return $consulta->fetchall();
    }


}
?>
