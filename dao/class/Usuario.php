<?php

class Usuario{

    private $idUsuario;
    private $desLogin;
    private $desSenha;
    private $dtCadastro;

    public function getIdUsuario(){
        return $this->idUsuario ;
    }
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getDesLogin(){
       return $this->desLogin ;
    }
    public function setDesLogin($desLogin){
        $this->desLogin = $desLogin;

    }

    public function getDesSenha(){
       return $this->desSenha ;
    }
    public function setDesSenha($desSenha){
        $this->desSenha = $desSenha;
    }

    public function getDtCadastro(){
       return $this->dtCadastro ;
    }
    public function setDtCadastro($dtCadastro){
        $this->dtCadastro = $dtCadastro;
    }

    public function __construct($desLogin = "", $desSenha = ""){
        $this->setDesLogin($desLogin);
        $this->setDesSenha($desSenha);

    }


    public function loadByID($id){

        $sql = new Sql();
        $results= $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID" , array(
            ":ID"=>$id
        ));

        if(count($results) > 0){
            $this->setData($results[0]);

        }
    }

    public function __toString(){

        return json_encode(array(
            "idusuario"=>$this->getIdUsuario(),
            "deslogin"=>$this->getDesLogin(),
            "dessenha"=>$this->getDesSenha(),
            "dtcadastro"=>$this->getDtCadastro()->format("d/m/y :H:i:s")        
        ));
   
    }


    public static function getList(){
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }

    
    public static function search($login){
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH 
            ORDER BY deslogin", array(
                ':SEARCH'=>"%" . $login . "%"
            ));
    }


    public function login($login , $password){

         $sql = new Sql();
        $results= $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND 
        dessenha = :PASSWORD" , array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        
        if(count($results) > 0){

            $this->setData($results[0]);

        }else{
            throw new Exception("LOGIN E/OU SENHA INVALIDO");
            
        }

    }

    public function setData($data){

         $this->setIdUsuario($data['idusuario']);
         $this->setDesLogin($data['deslogin']);
         $this->setDesSenha($data['dessenha']);
         $this->setDtCadastro(new DateTime($data['dtcadastro']));
    }

    public function limpaObjeto(){
        
         $this->setIdUsuario(0);
         $this->setDesLogin("");
         $this->setDesSenha("");
         $this->setDtCadastro(new DateTime());
    }


    /**
     * PROCEDURE PARA MYSQL
     * 
     * CREATE PROCEDURE `SP_USUARIOS_INSERT` (
     * PDESLOGIN VARCHAR(64),
     * PDESSENHA VARCHAR(256)
     * )
     * 
     * INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (PDESLOGIN, PDESSENHA);
     * 
     * SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();
     * 
     * BEGIN
     * 
     * END
     * 
     */

     public function insert(){

         $sql = new Sql();

         $login = $this->getDesLogin();
         $senha = $this->getDesSenha();

         if($login === "" || $senha === ""){
                echo "Usuario e/ou senha invalido";            
         }else{
             $sql->select("CALL SP_USUARIOS_INSERT(:LOGIN,:SENHA)",array(
                ":LOGIN"=>$login,
                ":SENHA"=>$senha
        ));

        }
        unset($sql);

         $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario DESC limit 1");

        if(count($results) > 0){
                $this->setData($results[0]);
        }

    }

    public function update($login ,$senha){
        $this->setDesLogin($login);
        $this->setDesSenha($senha);
        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin= :LOGIN , dessenha= :PASSWORD
                    WHERE idusuario = :ID",array(
                ":ID" => $this->getIdUsuario(),
                ":LOGIN" => $this->getDesLogin(), 
                ":PASSWORD" => $this->getDesSenha()
            ));
    }

    public function delete(){
        $sql = new Sql();
        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array
        (":ID"=>$this->getIdUsuario()
         ));

         $this->limpaObjeto();
    }





}

?>