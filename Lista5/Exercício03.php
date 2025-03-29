<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículo</title>
    <script>
        function mostrarCampos() {
            var tipo = document.getElementById("tipo_veiculo").value;
            document.getElementById("form_carro").style.display = (tipo == "carro") ? "block" : "none";
            document.getElementById("form_moto").style.display = (tipo == "moto") ? "block" : "none";
        }
    </script>
</head>
<body>
    <h2>Escolha o tipo de veículo</h2>
    <form method="post">
        <label for="tipo_veiculo">Tipo:</label>
        <select id="tipo_veiculo" name="tipo_veiculo" onchange="mostrarCampos()" required>
            <option value="">Selecione</option>
            <option value="carro">Carro</option>
            <option value="moto">Moto</option>
        </select><br><br>
        
        <div id="form_carro" style="display: none;">
            <label for="marca_carro">Marca:</label>
            <input type="text" id="marca_carro" name="marca_carro"><br><br>
            
            <label for="modelo_carro">Modelo:</label>
            <input type="text" id="modelo_carro" name="modelo_carro"><br><br>
            
            <label for="ano_carro">Ano:</label>
            <input type="number" id="ano_carro" name="ano_carro"><br><br>
        </div>
        
        <div id="form_moto" style="display: none;">
            <label for="marca_moto">Marca:</label>
            <input type="text" id="marca_moto" name="marca_moto"><br><br>
            
            <label for="modelo_moto">Modelo:</label>
            <input type="text" id="modelo_moto" name="modelo_moto"><br><br>
            
            <label for="ano_moto">Ano:</label>
            <input type="number" id="ano_moto" name="ano_moto"><br><br>
        </div>
        
        <input type="submit" name="criar" value="Criar Veículo">
    </form>

    <?php
    class Veiculo {
        protected $marca;
        protected $modelo;
        protected $ano;

        public function __construct($marca, $modelo, $ano) {
            $this->marca = htmlspecialchars($marca);
            $this->modelo = htmlspecialchars($modelo);
            $this->ano = htmlspecialchars($ano);
        }

        public function exibirDetalhes() {
            return "Veículo: " . $this->marca . ", " . $this->modelo . ", " . $this->ano;
        }
    }

    class Carro extends Veiculo {
        public function abrirPorta() {
            return "Porta aberta!";
        }
    }

    class Moto extends Veiculo {
        public function empinar() {
            return "Empinando a moto!";
        }
    }

    if (isset($_POST['criar'])) {
        if ($_POST['tipo_veiculo'] == "carro") {
            $veiculo = new Carro($_POST['marca_carro'], $_POST['modelo_carro'], $_POST['ano_carro']);
            echo "<h3>Detalhes do carro</h3>";
            echo "<p>" . $veiculo->exibirDetalhes() . "</p>";
            echo "<p>" . $veiculo->abrirPorta() . "</p>";
        } elseif ($_POST['tipo_veiculo'] == "moto") {
            $veiculo = new Moto($_POST['marca_moto'], $_POST['modelo_moto'], $_POST['ano_moto']);
            echo "<h3>Detalhes da moto</h3>";
            echo "<p>" . $veiculo->exibirDetalhes() . "</p>";
            echo "<p>" . $veiculo->empinar() . "</p>";
        }
    }
    ?>
</body>
</html>
