<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Todos os Produtos - Fleur de Sucre</title>
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
    min-height: calc(100vh - 160px); /* Altura mínima para incluir o rodapé */
    text-align: center;
}

#subtitulo {
    color: black;
    font-size: 2em;
    font-weight: bold;
    margin-bottom: 40px;
    text-align: center;
    text-transform: uppercase;
}

.menu-section {
    margin: 40px 0;
}

.menu-section h2 {
    color: #fa8cb1; /* Cor do título da seção */
    font-weight: bold;
    text-align: center;
    font-size: 1.8em;
    margin-bottom: 20px;
}

.menu-category {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.menu-item {
    background-color: #fff; /* Cor de fundo dos produtos individuais */
    border-radius: 15px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    width: 350px;
    text-align: center;
}

.menu-item img {
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-bottom: 5px solid #fa8cb1; /* Cor da borda inferior da imagem */
}

.menu-item h3 {
    color: #333;
    margin: 15px 0 10px;
    font-size: 1.2em;
}

.menu-item p {
    font-size: 1.1em;
    color: #555;
    margin-bottom: 15px;
}

.menu-item input[type="button"] {
    background-color: #fa8cb1; /* Cor do botão */
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s;
    margin-bottom: 15px;
}

.menu-item input[type="button"]:hover {
    background-color: #9e6d4e; /* Cor do botão ao passar o mouse */
}

.menu-item:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
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
        <section>
            <h1 id="subtitulo">TODOS OS PRODUTOS</h1>

            <div class="menu-section">
                <h2>Doces</h2>
                <div class="menu-category">
                    <div class="menu-item">
                        <img src="produto1.jpg" alt="Produto 1">
                        <h3>Produto 1</h3>
                        <p>R$ 29,90</p>
                        <input type="button" value="Comprar">
                    </div>
                    <div class="menu-item">
                        <img src="produto2.jpg" alt="Produto 2">
                        <h3>Produto 2</h3>
                        <p>R$ 35,00</p>
                        <input type="button" value="Comprar">
                    </div>
                    <div class="menu-item">
                        <img src="produto3.jpg" alt="Produto 3">
                        <h3>Produto 3</h3>
                        <p>R$ 45,50</p>
                        <input type="button" value="Comprar">
                    </div>
                    <div class="menu-item">
                        <img src="produto4.jpg" alt="Produto 4">
                        <h3>Produto 4</h3>
                        <p>R$ 22,30</p>
                        <input type="button" value="Comprar">
                    </div>
                    <div class="menu-item">
                        <img src="produto5.jpg" alt="Produto 5">
                        <h3>Produto 5</h3>
                        <p>R$ 19,90</p>
                        <input type="button" value="Comprar">
                    </div>
                </div>
            </div>
    
            <div class="menu-section">
                <h2>Bolos</h2>
                <div class="menu-category">
                    <div class="menu-item">
                        <img src="produto6.jpg" alt="Produto 6">
                        <h3>Produto 6</h3>
                        <p>R$ 50,00</p>
                        <input type="button" value="Comprar">
                    </div>
                    <div class="menu-item">
                        <img src="produto7.jpg" alt="Produto 7">
                        <h3>Produto 7</h3>
                        <p>R$ 39,90</p>
                        <input type="button" value="Comprar">
                    </div>
                    <div class="menu-item">
                        <img src="produto8.jpg" alt="Produto 8">
                        <h3>Produto 8</h3>
                        <p>R$ 27,50</p>
                        <input type="button" value="Comprar">
                    </div>
                    <div class="menu-item">
                        <img src="produto9.jpg" alt="Produto 9">
                        <h3>Produto 9</h3>
                        <p>R$ 31,80</p>
                        <input type="button" value="Comprar">
                    </div>
                    <div class="menu-item">
                        <img src="produto10.jpg" alt="Produto 10">
                        <h3>Produto 10</h3>
                        <p>R$ 33,00</p>
                        <input type="button" value="Comprar">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Ajuda e Suporte</h3>
                <p>Reembolsos</p><br>
                <p>Dúvidas</p>
            </div>
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