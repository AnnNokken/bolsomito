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
            margin: 0;
            padding: 0;
            background-color: #fffee1; /* Cor de fundo */
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
            font-size: 150%;
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
            margin: 0 70px; /* Aumento do espaço entre os itens do menu */
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 0.9em;
        }

        main {
            padding: 120px 20px 20px; /* Ajuste do padding para dar espaço ao menu flutuante maior */
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            min-height: calc(100vh - 160px); /* Altura mínima para incluir o rodapé */
        }

        .carousel {
            width: 48%; /* Ocupa até metade da tela */
            display: flex;
            overflow: hidden;
            position: relative;
            margin-right: 4%; /* Espaço entre o carrossel e o texto */
            margin-top: 4%;
        }

        .carousel img {
            width: 100%;
            border-radius: 10px;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel-inner .carousel-item {
            min-width: 100%;
            transition: transform 0.5s ease;
        }

        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            color: #fa8cb1; /* Cor rosa dos botões */
            font-size: 3em; /* Aumenta o tamanho dos botões */
            cursor: pointer;
            background: none; /* Sem background */
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            color: #cfb699; /* Cor rosa claro ao passar o mouse */
        }

        .carousel-control-prev {
            left: 10px;
        }

        .carousel-control-next {
            right: 10px;
        }

        .story {
            width: 48%; /* Ocupa até metade da tela */
            padding: 20px;
            margin-top: 4%;
            color: #4b3230;
            border-radius: 10px;
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
        <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="img2.jpg" alt="Imagem 1">
                </div>
                <div class="carousel-item">
                    <img src="img1.jpg" alt="Imagem 2">
                </div>
                <div class="carousel-item">
                    <img src="img3.jpg" alt="Imagem 3">
                </div>
            </div>
            <button class="carousel-control-prev" onclick="prevSlide()">‹</button>
            <button class="carousel-control-next" onclick="nextSlide()">›</button>
        </div>
        <div class="story">
            <h2>História da Nossa Empresa</h2>
            <p>Fundada em 2021, a Fleur de Sucre surgiu com a missão de trazer ao público os mais deliciosos e refinados doces franceses. Desde o início, nossa paixão pela confeitaria francesa nos motivou a criar receitas autênticas, utilizando apenas os melhores ingredientes.</p>
            <p>Com o tempo, conquistamos o coração de nossos clientes, tornando-nos uma referência em qualidade e sabor. Nossa equipe é composta por confeiteiros talentosos que se dedicam a inovar e criar novas delícias para encantar nossos consumidores.</p>
            <p>Venha nos visitar e experimente a magia da pâtisserie francesa na Fleur de Sucre!</p>
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
            <h3>Ajuda e Suporte</h3>
                <p>Reembolsos</p>
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
    <script>
        let currentIndex = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.carousel-item');
            if (index >= slides.length) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = slides.length - 1;
            } else {
                currentIndex = index;
            }
            document.querySelector('.carousel-inner').style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        setInterval(nextSlide, 5000); // Muda a cada 5 segundos
    </script>
</body>
</html>