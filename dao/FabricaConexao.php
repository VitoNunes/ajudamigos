<?php
class FabricaConexao {
    private $host = "localhost";
    private $user = "root";
    private $pass = "usbw";
    private $banco = "ajudamigos";
    private $conexao = NULL;

    function obterConexao() {
        if(!is_null(self::$conexao)) {
            self::$conexao = mysqli_connect(self::$host, self::$user, self::$pass, self::$banco) or die ("Não foi possível se conectar ao banco.");
        }
        return self::$conexao;
    }
}

?>