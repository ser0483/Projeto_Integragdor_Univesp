<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos de Compra - CM Soluções</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Verde claro de fundo */
            color: #333; /* Cor do texto */
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        #content {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #333; /* Cor dos títulos */
        }

        form, ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            color: #333; /* Cor dos rótulos */
        }

        form input[type="text"],
        form input[type="password"],
        form select,
        form button,
        form input[type="number"] {
            margin-bottom: 10px;
            padding: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50; /* Verde escuro para botões */
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049; /* Verde mais claro ao passar o mouse */
        }

        ul {
            margin-bottom: 20px;
        }

        ul li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        ul li input[type="number"] {
            margin-left: auto;
            width: 50px;
        }

        /* Estilo para a lista de produtos selecionados */
        #listaProdutos {
            border: 1px solid #ccc; /* Borda cinza para a lista */
            padding: 10px;
            background-color: #fff; /* Fundo branco */
            border-radius: 5px;
        }

        /* Estilo para a lista de condomínios */
        #condominio {
            font-size: 18px; /* Tamanho maior de fonte para a lista de condomínios */
        }
    </style>

</head>