<?php
class FabricaConexao {
    private $host = "localhost";
    private $user = "root";
    private $pass = "usbw";
    private $banco = "ajudamigos";
    private $conexao;

    function obterConexao() {
        if(!is_null(self::$conexao)) {
            $this->conexao = mysqli_connect(self::$host, self::$user, self::$pass, self::$banco) or die ("Não foi possível se conectar ao banco.");
        }
        return $this->conexao;
    }
}

?>