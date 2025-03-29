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
        
        <input type="submit" value="Enviar">
    </form>

    <?php
    class Carro {
        public $marca;
        public $modelo;
        public $ano;

        public function __construct($marca, $modelo, $ano) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }

        public function exibirDetalhes() {
            return "Carro: $this->marca, $this->modelo, $this->ano";
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $marca = htmlspecialchars($_POST["marca"]);
        $modelo = htmlspecialchars($_POST["modelo"]);
        $ano = htmlspecialchars($_POST["ano"]);
        
        $carro = new Carro($marca, $modelo, $ano);
        echo "<h3>Detalhes do carro</h3>";
        echo "<p>" . $carro->exibirDetalhes() . "</p>";
    }
    ?>
</body>
</html>
