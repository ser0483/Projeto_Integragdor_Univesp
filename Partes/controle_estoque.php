<?php include '../Partes/Head.php';?>
<body>
<div class="container">
    <h1>Controle de Estoque - CM Soluções</h1>

    <!-- Filtro para selecionar o condomínio -->
    <label for="filtroCondominio">Filtrar por Condomínio:</label>
    <select id="filtroCondominio">
        <option value="all">Todos</option>
        <?php
        $condominios = [
            "Condomínio Venezia",
            "Condomínio Delta",
            "Condomínio Marianas Garden",
            "Condomínio Simone",
            "Condomínio Mirella",
            "Condomínio Nove de Julho",
            "Condomínio Solar das Palmeiras",
            "Condomínio Gran Palazzo Teompompo",
            "Condomínio Solar dos Colibris e Andorinhas",
            "Condomínio Inconfidência",
            "Condomínio Itapema",
            "Condomínio Cabo Frio",
            "Condomínio Maria Nice"
        ];

        foreach ($condominios as $condominio) {
            echo "<option value='$condominio'>$condominio</option>";
        }
        ?>
    </select>

    <!-- Lista de Produtos no Estoque -->
    <h2>Lista de Produtos no Estoque</h2>
    <ul id="listaProdutosEstoque">
        <?php
        $produtosEstoque = [
            "Limpador Multiuso",
            "Álcool",
            "Desinfetante",
            "Detergente Neutro",
            "Saco de Lixo",
            "Pano de Chão",
            "Água Sanitária",
            "Pedra Sanitária",
            "Luvas",
            "Vassoura",
            "Mop/Bruxa"
        ];

        foreach ($produtosEstoque as $produto) {
            echo "<li>$produto <input type='number' min='0'></li>";
        }
        ?>
    </ul>



        <button id="voltarPedido" type="button">Voltar</button>


</div>
<script>
    document.getElementById('voltarPedido').addEventListener('click', function() {
        // Retorna para a página anterior
        window.location.href = document.referrer;

    });
</script>


</body>
</html>
