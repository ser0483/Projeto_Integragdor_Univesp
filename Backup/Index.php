<?php include_once './Partes/Head.php';?>
<body>
<div class="container">
    <h1>Pedidos de Compras - CM Soluções</h1>

    <?php include'./Paginas/Login.php';?>

    <div id="pedidoContent" style="display: none;">
        <form id="pedidoForm">
            <label for="condominio">Selecione o Condomínio:</label>
            <select id="condominio" name="condominio" required>
                <option value="">Selecione...</option>
                <option value="Condomínio Venezia">Condomínio Venezia</option>
                <option value="Condomínio Delta">Condomínio Delta</option>
                <option value="Condomínio Marianas Garden">Condomínio Marianas Garden</option>
                <option value="Condomínio Simone">Condomínio Simone</option>
                <option value="Condomínio Mirella">Condomínio Mirella</option>
                <option value="Condomínio Nove de Julho">Condomínio Nove de Julho</option>
                <option value="Condomínio Solar das Palmeiras">Condomínio Solar das Palmeiras</option>
                <option value="Condomínio Gran Palazzo Teompompo">Condomínio Gran Palazzo Teompompo</option>
                <option value="Condomínio Solar dos Colibris e Andorinhas">Condomínio Solar dos Colibris e Andorinhas</option>
                <option value="Condomínio Inconfidência">Condomínio Inconfidência</option>
                <option value="Condomínio Itapema">Condomínio Itapema</option>
                <option value="Condomínio Cabo Frio">Condomínio Cabo Frio</option>
                <option value="Condomínio Maria Nice">Condomínio Maria Nice</option>
                <!-- Outras opções de condomínio aqui -->
            </select>

            <h2>Lista de Produtos Disponíveis</h2>
            <ul id="listaProdutosDisponiveis">
                <li>Limpador Multiuso <input type="number" min="0" id="qtdLimpadorEstoque"></li>
                <li>Álcool <input type="number" min="0" id="qtdAlcoolEstoque"></li>
                <li>Desinfetante <input type="number" min="0" id="qtdDesinfetanteEstoque"></li>
                <li>Detergente Neutro <input type="number" min="0" id="qtdDetergenteEstoque"></li>
                <li>Saco de Lixo <input type="number" min="0" id="qtdSacoLixoEstoque"></li>
                <li>Pano de Chão <input type="number" min="0" id="qtdPanoChaoEstoque"></li>
                <li>Água Sanitária <input type="number" min="0" id="qtdAguaSanitariaEstoque"></li>
                <li>Pedra Sanitária <input type="number" min="0" id="qtdPedraSanitariaEstoque"></li>
                <li>Luvas <input type="number" min="0" id="qtdLuvasEstoque"></li>
                <li>Vassoura <input type="number" min="0" id="qtdVassouraEstoque"></li>
                <li>Mop/Bruxa <input type="number" min="0" id="qtdMopBruxaEstoque"></li>
                <!-- Lista de produtos disponíveis -->
            </ul>

            <h2>Lista de Produtos no Pedido</h2>
            <ul id="listaProdutos"></ul>

            <button id="gerarLista" type="button">Gerar Lista</button>
            <button id="enviarRelatorio" type="button">Enviar Relatório</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();

        let username = document.getElementById('username').value;
        let password = document.getElementById('password').value;

        if ((username === 'joao@cms.com.br' && password === 'senhaJoao') ||
            (username === 'maria@cms.com.br' && password === 'senhaMaria') ||
            (username === 'sergio@cms.com.br' && password === '123')) {
            document.getElementById('loginContent').style.display = 'none';
            document.getElementById('pedidoContent').style.display = 'block';
        } else {
            alert('Usuário ou senha incorretos.');
        }
    });

    document.getElementById('gerarLista').addEventListener('click', function() {
        gerarLista();
    });

    function gerarLista() {
        let listaProdutos = document.getElementById('listaProdutos');
        listaProdutos.innerHTML = '';

        let qtdLimpador = document.getElementById('qtdLimpadorEstoque').value;
        let qtdAlcool = document.getElementById('qtdAlcoolEstoque').value;
        let qtdDesinfetante = document.getElementById('qtdDesinfetanteEstoque').value;
        let qtdDetergente = document.getElementById('qtdDetergenteEstoque').value;
        let qtdSacoLixo = document.getElementById('qtdSacoLixoEstoque').value;
        let qtdPanoChao = document.getElementById('qtdPanoChaoEstoque').value;
        let qtdAguaSanitaria = document.getElementById('qtdAguaSanitariaEstoque').value;
        let qtdPedraSanitaria = document.getElementById('qtdPedraSanitariaEstoque').value;
        let qtdLuvas = document.getElementById('qtdLuvasEstoque').value;
        let qtdVassoura = document.getElementById('qtdVassouraEstoque').value;
        let qtdMopBruxa = document.getElementById('qtdMopBruxaEstoque').value;

        if (qtdLimpador > 0) {
            let li = document.createElement('li');
            li.textContent = `Limpador Multiuso - Quantidade: ${qtdLimpador}`;
            listaProdutos.appendChild(li);
        }
        if (qtdAlcool > 0) {
            let li = document.createElement('li');
            li.textContent = `Álcool - Quantidade: ${qtdAlcool}`;
            listaProdutos.appendChild(li);
        }
        if (qtdDetergente > 0) {
            let li = document.createElement('li');
            li.textContent = `Detergente Neutro - Quantidade: ${qtdDetergente}`;
            listaProdutos.appendChild(li);
        }
        if (qtdSacoLixo > 0) {
            let li = document.createElement('li');
            li.textContent = `Saco de Lixo - Quantidade: ${qtdSacoLixo}`;
            listaProdutos.appendChild(li);
        }
        if (qtdPanoChao > 0) {
            let li = document.createElement('li');
            li.textContent = `Pano de Chão - Quantidade: ${qtdPanoChao}`;
            listaProdutos.appendChild(li);
        }
        if (qtdAguaSanitaria > 0) {
            let li = document.createElement('li');
            li.textContent = `Água Sanitária - Quantidade: ${qtdAguaSanitaria}`;
            listaProdutos.appendChild(li);
        }
        if (qtdPedraSanitaria > 0) {
            let li = document.createElement('li');
            li.textContent = `Pedra Sanitária - Quantidade: ${qtdPedraSanitaria}`;
            listaProdutos.appendChild(li);
        }
        if (qtdLuvas > 0) {
            let li = document.createElement('li');
            li.textContent = `Luvas - Quantidade: ${qtdLuvas}`;
            listaProdutos.appendChild(li);
        }
        if (qtdVassoura > 0) {
            let li = document.createElement('li');
            li.textContent = `Vassoura - Quantidade: ${qtdVassoura}`;
            listaProdutos.appendChild(li);
        }
        if (qtdMopBruxa > 0) {
            let li = document.createElement('li');
            li.textContent = `Mop/Bruxa - Quantidade: ${qtdMopBruxa}`;
            listaProdutos.appendChild(li);
        }
    }

    document.getElementById('enviarRelatorio').addEventListener('click', function() {
        enviarEmail();
    });

    function enviarEmail() {
        // Simulação de envio de email (substituir com a lógica real de envio de email)
        let relatorio = document.getElementById('listaProdutos').innerHTML;
        let emailDestino = 'ser_s.n@hotmail.com';
        let assunto = 'Relatório de Pedido de Compra';
        let corpoEmail = `Olá, segue o relatório de pedido de compra:<br>${relatorio}`;

        // Aqui você deve implementar a lógica real para enviar o email
        alert('Email enviado para ' + emailDestino + '\nAssunto: ' + assunto + '\nCorpo do Email:\n' + corpoEmail);
    }


</script>
</body>
</html>
