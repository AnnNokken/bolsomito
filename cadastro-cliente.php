<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Cadastro de Clientes - Fleur de Sucre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fffee1; /* Cor de fundo */
            margin: 0;
            padding: 0;
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
    padding: 100px 20px 20px; /* Ajuste do padding para dar espaço ao menu flutuante maior */
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 160px); /* Altura mínima para incluir o rodapé */
}

.cadastro-container {
    width: 100%;
    max-width: 500px;
}

h2 {
    color: #fa8cb1; /* Cor do título */
    text-align: center;
}

label {
    display: block;
    margin-top: 10px;
    color: #cfb699; /* Cor dos rótulos */
}

input[type="text"],
input[type="tel"],
input[type="email"] {
    width: calc(100% - 22px);
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #9e6d4e; /* Cor do botão de submit */
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
    display: block;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #cfb699; /* Cor do botão de submit ao passar o mouse */
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
    <main>
        <div class="cadastro-container">
            <h2>Cadastro de Clientes</h2>
            <form method="post" action="recebe_cadastro.php">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
                
                <label for="telefone">Número de Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>

                <label for="senha">Senha:</label> 
                <input type="password" id="senha" name="senha" required>
                
                <input type="submit" value="Cadastrar">
            </form>
        </div>
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
