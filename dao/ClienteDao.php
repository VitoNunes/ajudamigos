<?php
class ClienteDao extends FabricaConexao {
    // AQUI FICA OS COMANDOS SQL


    function inserir($cliente) {
        $query = "INSERT INTO usuario(user, email, senha) VALUES ('$cliente->nome', '$cliente->email', '$cliente->senha')";
        $data = mysqli_query(parent::$obterConexao, $query);
    }
}

// Como que eu chamo um método da classe pai "FabricaConexao" ?
// Ai é foda, me ajuda a pesquisar kkkkkkkk
// Tipo, o cara vai fazer um comando aq, dai ele vai pedir ao banco uma conexão nova (rlx q n vai ter várias)
?>



