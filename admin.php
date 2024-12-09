<?php
include("ver_sessaoRestrito.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Fleur de Sucre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fffee1; /* Cor de fundo */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background-color: #fa8cb1; /* Cor do menu flutuante */
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .menu {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 0 20px;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo img {
            height: 50px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            flex-grow: 1;
            margin-left: 20px;
            margin-right: 20px;
        }

        .search-bar input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            flex-grow: 1;
            margin-right: 10px;
        }

        .search-bar button {
            background-color: #fa8cb1; /* Cor do botão de busca */
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 23px;
            cursor: pointer;
            color: white;
        }

        .icon-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .icon {
            font-size: 1.5em;
            color: white;
            cursor: pointer;
        }

        nav {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-top: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        nav ul li {
            margin: 0 30px; /* Aumento do espaço entre os itens do menu */
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 0.9em;
        }

        main {
            padding: 120px 20px 20px; /* Ajuste do padding para dar espaço ao menu flutuante maior */
            text-align: center;
            min-height: calc(100vh - 160px); /* Altura mínima para incluir o rodapé */
        }

        table {
            width: 40%;
            border: 0;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            color: #fa8cb1; /* Cor do título */
            margin-bottom: 20px;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        td.header {
            background-color: #cfb699; /* Cor da célula de cabeçalho */
            color: #ffffff;
            font-size: 18px;
        }

        td.button-cell {
            background-color: #fdc5c9; /* Cor das células dos botões */
        }

        input[type="button"] {
            background-color: #fa8cb1; /* Cor do botão */
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="button"]:hover {
            background-color: #9e6d4e; /* Cor do botão ao passar o mouse */
        }

        #sair {
            width: 150px;
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            z-index: 999; /* Garante que o botão fique acima de outros elementos */
        }

        #sair:hover {
            background-color: #cc0000;
        }

        footer {
    background-color: #4b3230; /* Cor do rodapé */
    color: white;
    padding: 30px 0;
    text-align: center;
    width: 100%;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.footer-section {
    flex: 1;
    min-width: 200px;
    margin: 10px;
}

.footer-section h3 {
    margin-bottom: 10px;
}

.footer-section p {
    margin: 5px 0;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.social-icons a {
    font-size: 1.5em;
    color: white;
    text-decoration: none;
}

        .contacts p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="menu">
            <div class="container">
                <div class="logo">
                    <img src="logo1.png" alt="Logo Fleur de Sucre">
                </div>
                <div class="search-bar">
                    <button type="submit"><i class='bx bx-search'></i></button>
                    <input type="text" placeholder="O que você procura?">
                </div>
                <div class="icon-container">
                    <div class="icon">
                        <a href="login.php"><i class='bx bx-user' style="color: white;"></i></a>
                    </div>
                    <div class="icon">
                        <a href="admin.php"><i class='bx bx-cog' style="color: white;"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="inicial.php">Página Inicial</a></li>
                <li><a href="todososprodutos.php">Todos os Produtos</a></li>
                <li><a href="#">Novidades</a></li>
                <li><a href="sobrenos.php">Sobre Nós</a></li>
            </ul>
        </nav>
    </header>
    <input type="button" value="Sair do sistema" id="sair" onClick="location.href='fechar_sessao.php'">
    <main>
        <h1>SESSÃO ADMINISTRATIVA</h1>
        <table>
            <tr>
                <td class="header">
                  Página de Opções
                </td>
            </tr>
            <tr>
                <td class="button-cell">
                    <input type="button" value="Ver Pedidos" onClick="location.href='VerPedidos.php'">
                </td>
            </tr>
            <tr>
                <td class="button-cell">
                    <input type="button" value="Excluir Pedidos" onClick="location.href='delete.php'">
                </td>
            </tr>
            <tr>
                <td class="button-cell">
                    <input type="button" value="Ver mensagens" onClick="location.href='verMensagens.php'">
                </td>
            </tr>
            <tr>
                <td class="button-cell">
                    <input type="button" value="Cadastrar Produtos" onClick="location.href='cadastroproduto.php'">
                </td>
            </tr>
            <tr>
                <td class="button-cell">
                    <input type="button" value="Visualizar Produtos" onClick="location.href='VerProdutos.php'">
                </td>
            </tr>
            <tr>
                <td class="button-cell">
                    <input type="button" value="Alterar Produtos" onClick="location.href='editar1.php'">
                </td>
            </tr>
            <tr>
                <td class="button-cell">
                    <input type="button" value="Excluir Produtos" onClick="location.href='delete.php'">
                </td>
            </tr>
        </table>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
            <h3>Ajuda e Suporte</h3>
                <p>Reembolsos</p><br>
                <p>Dúvidas</p>            </div>
            <div class="footer-section">
                <h3>Contatos</h3>
                <p>Telefone: (00) 1234-5678</p>
                <p>Email: email@fleuredesucre.com</p>
            </div>
            <div class="footer-section">
                <h3>Siga-nos</h3>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>