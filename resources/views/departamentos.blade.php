<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos - ETEC Zona Leste</title>
    <link rel="stylesheet" href="vestibulinho.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

    <main>
        <div class="container">
            <h1>Coordenação de Cursos</h1>
            <img src={{ asset('img/cursos.webp') }} alt="adm" class="banner">
            <p>
                As Coordenações de Curso são responsáveis pelo conjunto de ações destinadas ao planejamento
                 do ensino, à supervisão de sua execução, ao controle das atividades docentes em relação às
                  diretrizes didáticas pedagógicas e administrativas, bem como pela otimização dos recursos físicos
                 e didáticos disponíveis para os cursos mantidos pelas Etecs.</p>
                 <br><br> <br><br><br><br><br><br> <br><br><br><br>
               
                
                <h1>Coordenador Novotec</h1> <br><br><br>
           
           <p>Giovanna Littiere (Novotec Administração)<br><br>
            Leandro (Novotec Logística)<br><br>
            Marcelo Collado (Novotec Desenvolvimento de Sistemas)<br><br>
            Cibelle Ferreria Francoso (Novotec RH)<br><br>
            Jeferson Roberto de Lima (Novotec Desenvolvimento de Sistemas AMS)<br><br>
            </p>
                 <br><br> <br><br><br><br> <br><br> <br><br><br><br>

                <h1>Coordenador Curso Técnico</h1> <br><br><br>
           
                <p>Monyse Tesser Panacci (Técnico em Adminstração / Técnico em Contabilidade)<br><br>
                    Ediney Ciasi Barreto (Técnico em Desenvolvimento de Sistemas)<br><br>
                    Silvano Lack de Brito (Técnico em Logística / Técnico em Serviços Jurídicos)<br><br>
                 </p>
                     <br><br> <br><br><br><br> <br><br> <br><br><br><br>

                     <h1>Contato</h1> <br>

                     <p><b>Telefones:</b> (11) 2045-4018</p> <br><br><br>
               
        </div>
    </main>

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
    background-color: #9c0707;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

header {
    background-color: #fffdfd;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

header .header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header .logo img {
    max-width: 100px;
}

nav ul {
    list-style: none;
}

nav ul li {
    display: inline-block;
    margin-left: 20px;
}

nav ul li:first-child {
    margin-left: 0;
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

main {
    padding: 40px 0;
    text-align: center;
}

main h1 {
    background-color: #fff;
    border-radius: 20px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}

main p {
    background-color: #fff;
    border-radius: 20px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: left;

}

.banner {
    background-color: #fff;
    border-radius: 20px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 400px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ffffff;
    color: #000000;
    text-decoration: none;
    border-radius: 5px;
}

.btn:hover {
    background-color: #555;
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
