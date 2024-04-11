<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestibulinho - ETEC Zona Leste</title>
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
            <h1>Sobre o Vestibulhinho</h1>
            <img src={{ asset('img/vestibulinho.webp') }} alt="Banner Vestibulinho" class="banner">
            <p>O processo de vestibulinho na ETEC, segue um padrão definido pelo Centro Paula Souza. Primeiramente, 
                é divulgado um edital contendo todas as informações essenciais, como datas, locais de prova, cursos oferecidos,
                 requisitos de inscrição e documentação necessária. <br> <br> Os candidatos devem então se inscrever dentro do prazo estipulado, 
                 geralmente de forma online através do site oficial do vestibulinho da ETEC, e pagar uma taxa de inscrição conforme especificado no edital.</p> <br><br> <br><br><br><br> <br><br> <br><br><br><br>
            
                 <h1>A Prova</h1>
                 <img src={{ asset('img/vestibulinho2.webp') }}  alt="Banner Vestibulinho" class="banner">
            <p>A prova do Vestibulhinho tem duração de quatro horas. Os candidatos devem responder a 50 questões-teste, cada uma valendo um ponto, com cinco opções de respostas: A, B, C, D, E, das quais apenas uma é correta.

                A prova prestada para as vagas remanescentes, as quais dão acesso direto ao segundo módulo do Ensino Técnico, é constituída de 30 questões-teste, também com cinco opções de respostas: A, B, C, D, E, das quais apenas uma é correta.
                
                Informações Importantes sobre o exame do Vestibulinho ETEC <br> <br>
                01 – A prova avalia conhecimentos nas principais matérias da Base Nacional Comum Curricular (BNCC) do Ensino Fundamental II, incluindo Linguagens (Língua Portuguesa), Matemática, Ciências Humanas (Geografia e História) e Ciências da Natureza; <br>
                <br>
                02 – As questões não são separadas por disciplinas, podendo ser multidisciplinares ou específicas; <br> <br>
                <br>
                03 – Valores e ações que promovam uma sociedade mais humana, justa e sustentável são avaliados, exigindo atenção a temas atuais relacionados a esses tópicos;
                <br><br>
                04 – As questões abordam competências como interpretação de diversos tipos de texto, aplicação de conhecimentos do Ensino Fundamental para resolver problemas, análise crítica de argumentos, reconhecimento de diferentes formas de linguagem e avaliação de ações de acordo com critérios estabelecidos.
                <br><br>
                </p>
           <a href="#" class="btn">Saiba Mais</a> <br><br> <br><br><br><br>  
        </div>
    </main>

    <footer>
      <footer>
       
        <h3>2024 ETEC Zona Leste </h3>
            
    </footer>
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