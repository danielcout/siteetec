<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC Zona Leste</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite("resources/css/app.css")
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src={{ asset('img/etecc.png') }} alt="Logo ETEC Zona Leste">

            </div>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Início</a></li>
                    <li><a href="{{ url('/cursos') }}">Cursos</a></li>
                    <li><a href="{{ url('/instituicao') }}">Instituição</a></li>
                    <li><a href="{{ url('/departamentos') }}">Departamentos</a></li>
                    <li><a href="{{ url('/oportunidade') }}">Oportunidades</a></li>
                    <li><a href="{{ url('/vestibulinho') }}">Vestibulinho</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <section class="banner">
        <img src={{ asset('img/banner.webp') }} alt="Banner ETEC Zona Leste">

        
    </section>

    <section class="cursos">
        <h2>Cursos Oferecidos</h2>
        <div class="cursos-container">
            <div class="curso">
                <img src={{ asset('img/cursods.jpg') }} alt="Curso 1"> <br>

                <h3>Desenvolvimento de Sistemas</h3>
            </div>
            <div class="curso">
                <img src={{ asset('img/cursoadm.jpg') }} alt="Curso 2">

             
                <h3>Administração</h3>
            </div>
            
            <div class="curso">
                <img src={{ asset('img/cursorh.jpg') }} alt="Curso 3"><br><br>
                <h3>Recursos Humanos</h3>
               
            </div>
        </div>
    </section>
    <br><br><br><br><br><br>
    <footer>
       
        <h3>2024 ETEC Zona Leste </h3>
            
    </footer>
</body>


<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: rgb(255, 255, 255);
}

.logo img {
    max-width: 200px;
    height: auto;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li:last-child {
    margin-right: 0;
}

nav ul li a {
    color: #ff0000;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

nav ul li a:hover {
    background-color: #555;
}

.banner img {
    width: 100%;
    height: auto;
}

.cursos {
    text-align: center;
    padding: 20px;
}

.cursos h2 {
    margin-bottom: 20px;
}

.cursos-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.curso {
    margin: 0 10px;
}

.curso img {
    max-width: 200px;
    height: auto;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 8px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

</style>

</html>


