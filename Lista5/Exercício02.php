<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carro</title>
</head>
<body>
    <h2>Insira as informações do carro</h2>
    <form method="post">
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br><br>
        
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required><br><br>
        
        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" required><br><br>
        
        <input type="submit" name="criar" value="Criar Carro">
    </form>

    <?php
    class Carro {
        private $marca;
        private $modelo;
        private $ano;

        public function __construct($marca, $modelo, $ano) {
            $this->setMarca($marca);
            $this->setModelo($modelo);
            $this->setAno($ano);
        }

        public function getMarca() {
            return $this->marca;
        }

        public function setMarca($marca) {
            $this->marca = htmlspecialchars($marca);
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($modelo) {
            $this->modelo = htmlspecialchars($modelo);
        }

        public function getAno() {
            return $this->ano;
        }

        public function setAno($ano) {
            $this->ano = htmlspecialchars($ano);
        }

        public function exibirDetalhes() {
            return "Carro: " . $this->getMarca() . ", " . $this->getModelo() . ", " . $this->getAno();
        }
    }
    
    session_start();
    
    if (!isset($_SESSION['carro']) && isset($_POST["criar"])) {
        $carro = new Carro($_POST["marca"], $_POST["modelo"], $_POST["ano"]);
        $_SESSION['carro'] = serialize($carro);
    } elseif (isset($_SESSION['carro'])) {
        $carro = unserialize($_SESSION['carro']);
    }
    
    if (isset($carro)) {
        echo "<h3>Detalhes do carro</h3>";
        echo "<p>" . $carro->exibirDetalhes() . "</p>";
    }
    ?>

    <?php if (isset($carro)) : ?>
    <h2>Alterar Informações do Carro</h2>
    <form method="post">
        <label for="nova_marca">Nova Marca:</label>
        <input type="text" id="nova_marca" name="nova_marca"><br><br>
        
        <label for="novo_modelo">Novo Modelo:</label>
        <input type="text" id="novo_modelo" name="novo_modelo"><br><br>
        
        <label for="novo_ano">Novo Ano:</label>
        <input type="number" id="novo_ano" name="novo_ano"><br><br>
        
        <input type="submit" name="alterar" value="Alterar">
    </form>
    <?php endif; ?>

    <?php
    if (isset($_POST["alterar"]) && isset($carro)) {
        if (!empty($_POST["nova_marca"])) $carro->setMarca($_POST["nova_marca"]);
        if (!empty($_POST["novo_modelo"])) $carro->setModelo($_POST["novo_modelo"]);
        if (!empty($_POST["novo_ano"])) $carro->setAno($_POST["novo_ano"]);
        $_SESSION['carro'] = serialize($carro);
        echo "<h3>Carro atualizado!</h3>";
        echo "<p>" . $carro->exibirDetalhes() . "</p>";
    }
    ?>
</body>
</html>
