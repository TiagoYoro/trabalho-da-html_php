<?php
class Dao {
    private $pdo;
    
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    // Função para inserir um novo produto
    public function inserirProduto($nome, $descricao) {
        $sql = "INSERT INTO tb_produtos (nome, descricao) VALUES (?, ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$nome, $descricao]);
    }
    
    // Função para mostrar todos os produtos
    public function mostrarProdutos() {
        $sql = "SELECT * FROM tb_produtos";
        $statement = $this->pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Função para alterar um produto existente
    public function alterarProduto($id, $nome, $descricao) {
        $sql = "UPDATE tb_produtos SET nome = ?, descricao= ? WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$nome, $descricao, $id]);
    }
    
    // Função para deletar um produto
    public function deletarProduto($id) {
        $sql = "DELETE FROM tb_produtos WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$id]);
    }
}
?>
