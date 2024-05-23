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
        </select><br>

        <h2>Lista de Produtos Disponíveis</h2>
        <ul id="listaProdutosDisponiveis">
            <li>Limpador Multiuso <input type="number" min="1" id="qtdLimpador"></li>
            <li>Álcool <input type="number" min="1" id="qtdAlcool"></li>
            <li>Desinfetante <input type="number" min="1" id="qtdDesinfetante"></li>
            <li>Detergente Neutro <input type="number" min="1" id="qtdDetergente"></li>
            <li>Saco de Lixo <input type="number" min="1" id="qtdSacoLixo"></li>
            <li>Pano de Chão <input type="number" min="1" id="qtdPanoChao"></li>
            <li>Água Sanitária <input type="number" min="1" id="qtdAguaSanitaria"></li>
            <li>Luvas <input type="number" min="1" id="qtdLuvas"></li>
            <li>Vassoura <input type="number" min="1" id="qtdVassoura"></li>
            <li>Mop/Bruxa <input type="number" min="1" id="qtdMopBruxa"></li>
        </ul>

        <h2>Lista de Produtos no Pedido</h2>
        <ul id="listaProdutos"></ul>

        <button id="gerarLista" type="button">Gerar Lista</button>
        <button id="enviarRelatorio" type="button">Enviar Relatório</button>
        <button id="abrirEstoque" type="button">Abrir Estoque</button>
    </form>
</div>
