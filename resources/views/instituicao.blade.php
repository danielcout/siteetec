<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituição - ETEC Zona Leste</title>
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
            <h1>Conheça Nossa Infraestrutura</h1>
            <img src={{ asset('img/banner.webp') }} alt="adm" class="banner">
            <p><b>Nossa História</b> <br> <br>
                Implantada no ano de 2008, na Avenida Águia de Haia, localizada na Zona Leste da cidade de São Paulo, a ETEC Zona Leste, atualmente se destaca como um ponto de referência em educação e infraestrutura. Sua história, desde o início, contou com o apoio e o compromisso da comunidade que a permeia.
        <br><br> 
                Inicialmente abandonado, o espaço que hoje comporta as respectivas instituições de ensino ETEC e FATEC Zona Leste, seria utilizado para a construção de um presídio. A comunidade ao redor, ao receber a informação, logo prontificou-se a ir contra a ideia. Como moradores das redondezas, sentiam a necessidade da implantação de um ambiente voltado à educação, pela valorização do local e, conclusivamente pela possibilidade de ingresso de seus filhos em uma escola próxima, caso o pedido fosse realizado. Abaixo-assinados percorreram as proximidades de todo o terreno que, graças ao bom número de assinaturas colhidas, atualmente são localizadas as duas instituições pertencentes ao Centro Paula Souza.
                <br><br>
                Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, nossa escola oferece uma variedade de cursos técnicos, proporcionando aos alunos uma formação sólida e atualizada.
                
                </p>
                <a href="#" class="btn">Saiba Mais</a> <br><br> <br><br><br><br><br><br> <br><br><br><br>
               
                
                <h1>Pátio</h1>
            <img src={{ asset('img/patio.jfif') }} alt="ds" class="banner"> 
           <p><B>Pátio</B><br><br>
            O pátio da instituição é um verdadeiro refúgio. Árvores, flores e plantas dão ao ambiente 
            uma atmosfera de serenidade e frescor. É um espaço que convida os alunos a desfrutarem do ar livre
             enquanto se dedicam às suas atividades acadêmicas e sociais. O pátio principal também foi projetado
              para promover a interação e o convívio entre os estudantes. Com mesas distribuídas, o espaço oferece
               oportunidades para uma variedade de atividades sociais e recreativas, desde jogos de tabuleiro que
                estimulam o raciocínio e a cooperação, até partidas acirradas de pingue-pongue e pebolim que promovem 
                a competição saudável e o espírito de equipe.
                <br><br>
            Cozinha
            <br><br>
            Salas de Aula
            <br><br>
            Biblioteca
            <br><br>
            Laboratórios
            <br><br>
            Prédio Administrativo
            
            </p>
                <a href="#" class="btn">Saiba Mais</a> <br><br> <br><br><br><br> <br><br> <br><br><br><br>

                <h1>Sala Maker</h1>
                <img src={{ asset('img/sala.jfif') }} alt="adm" class="banner">
                <p>
                    Com seu espaço voltado à tecnologia e construção de projetos, a Sala Maker possui notebooks, 
                    impressoras 3D, drones, óculos de realidade aumentada e ferramentas para a construção de projetos manuais. 
                    Além de ser um ótimo ambiente para estudar com os colegas, o ambiente possui uma diversidade de mesas e
                     cadeiras dispostas, assim comportando um bom número de alunos e seus respectivos projetos.
                    </p>
                    <a href="#" class="btn">Saiba Mais</a> <br><br> <br><br><br><br><br><br> <br><br><br><br>

                    <h1>Quadras</h1>
                <img src={{ asset('img/quadra.jfif') }} alt="adm" class="banner">
                <p>
                    O espaço oferece duas quadras poliesportivas aos estudantes, sendo uma ao ar livre,
                     para o aproveitamento de dias ensolarados e, outra coberta, garantindo a prática das 
                     atividades mesmo em condições climáticas não-favoráveis. Essas instalações são utilizadas 
                     de maneira versátil, servindo como cenário nas aulas dinâmicas de Educação Física ou em eventos
                      como gincanas, interclasses, festas juninas, pós-aulas e feiras tecnológicas.</p>
                    <a href="#" class="btn">Saiba Mais</a> <br><br> <br><br><br><br><br><br> <br><br><br><br>

                
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