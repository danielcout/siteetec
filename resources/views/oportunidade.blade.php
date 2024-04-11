<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oportunidades - ETEC Zona Leste</title>
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
            <h1>Concurso Público</h1>
            <img src={{ asset('img/concurso.webp') }} alt="adm" class="banner">
            <p>Estão em andamento concursos públicos para contratação de 2,7 mil docentes e servidores administrativos
                para atuar em Escolas Técnicas (Etecs), Faculdades de Tecnologia (Fatecs) do Estado e na Administração 
                Central do Centro Paula Souza (CPS). Os certames foram autorizados em junho de 2022 e as admissões ocorrem em 2023.
                O calendário do concurso para os cargos administrativos e os editais para docentes, que são liberados em lotes,
                estão disponíveis nos links abaixo. <br> <br>
                A previsão é contratar 993 professores de Ensino Médio e Técnico, 594 docentes de Ensino Superior, 887 agentes técnicos
                 e administrativos, 227 bibliotecários e 6 especialistas em planejamento educacional. Foi autorizado, ainda, o aproveitamento
                  de 80 vagas de professores remanescentes de concursos anteriores.</p>
                <a href="#" class="btn">Saiba Mais</a> <br><br> <br><br><br><br><br><br> <br><br><br><br>
               
                
                <h1>Processo Seletivo Simplificado para Auxiliar de Docente</h1>
            <img src={{ asset('img/predio.webp') }} alt="ds" class="banner"> 
           <p>Prepare-se para embarcar em uma jornada de ensino e aprendizado! O Processo Seletivo Simplificado para Auxiliar 
            de Docente nas renomadas Escolas Técnicas Estaduais (ETECs) ou Faculdades de Tecnologia (FATECs) está com inscrições abertas. <br> <br>
            Participe deste processo seletivo e compartilhe seu conhecimento, experiência e paixão pelo ensino. As inscrições 
            estão disponíveis para aqueles que desejam desempenhar um papel fundamental na educação técnica do Estado de São Paulo.</p>
                <a href="#" class="btn">Saiba Mais</a> <br><br> <br><br><br><br> <br><br> <br><br><br><br>

                <h1>Programa Aprendiz Paulista</h1>
            <img src={{ asset('img/jovem.webp') }} alt="ds" class="banner"> 
           <p>sua chance de ingressar no mercado de trabalho! Se você tem entre 14 e 24 anos, está matriculado em cursos técnicos 
            profissionalizantes do Centro Estadual de Educação Tecnológica Paula Souza e reside em São Paulo, esta é a sua chance
             de conquistar uma vaga de aprendizagem em empresas parceiras. <br> <br>
            Benefícios incluem salário mínimo por hora, vale transporte, férias remuneradas, 
            FGTS e registro em carteira. Esteja preparado para uma jornada de aprendizado prático e teórico. 
            Junte-se a nós e construa o seu futuro!</p>
                <a href="#" class="btn">Saiba Mais</a> <br><br> <br><br><br><br> <br><br> <br><br><br><br>
                
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
