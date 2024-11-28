<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Oriental Food</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="home.html" class="logo">Ori<span>ental </span>Fo<span>od</span></a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="home.html">Home</a></li>
                <li class="nav-item"><a href="card.html">Cardápio</a></li>
                <li class="nav-item"><a href="login.php">Login</a></li>
                <i class='bx bx-cart'></i>
            </ul>
            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <br><br><br><br>
    <main>
        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Bem Vindo a Oriental Food</h4>
                <h1 class="text-h1">O sabor do oriente na sua mesa</h1>
                <p>O restaurante Oriental Food foi o primeiro restaurante com culinária tipicamentechinesa da cidade, o cardápio conta com pratos tradicionais de diversas regiões, além de ingredientes exóticos sem abrir mão dos temperos típicos e a essência da culinária oriental, o cardápio sempre traz novidades acompanhando as mudanças da culinária oriental e tendências da gastronomia moderna.</p>
                <a href="card.html" class="home-btn">Ver Cardápio</a>
            </div>
            </div>
            <div class="home-img">
                <img src="img/Banner.png" alt="sushi">
            </div>
        </section>
    </main>
    <br><br><br><br><br><br>

    <footer>Integrantes: Thalita dos Santos, Thais dos Santos, Luiz Fernando, Jeferson Amaral, Ruan Gabriel <br>
        Curso:ADS <br>
        Disciplina: Linguagem Técnica de Programação I <br>
    </footer>

    <!--JS-->
    <script>
        const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.nav-menu');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})
    </script>

</body>
</html>