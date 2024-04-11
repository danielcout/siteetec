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
            <h1>Administração</h1>
            <img src={{ asset('img/cursoadm.jpg') }} alt="adm" class="banner">
            <p>O aluno vai aprender ainda a analisar as chances de um negócio ou produto ser bem-sucedido e o 
                comportamento do consumidor. Estudará também técnicas de atendimento ao cliente, empreendedorismo 
                (iniciativas para realizar novos negócios) e como uma organização planeja alcançar seus objetivos e define suas metas para o futuro.</p>
                <a href="#" class="btn">Saiba Mais</a> <br><br> <br><br><br><br><br><br> <br><br><br><br>
               
                
                <h1>Desenvolvimento de Sistemas</h1>
            <img src={{ asset('img/cursods.jpg') }} alt="ds" class="banner"> 
           <p>O curso Novotec em Desenvolvimento de Sistemas AMS é oferecido na Etec e Fatec Zona Leste desde o ano de 2019, 
                sendo esta escola pioneira na implantação deste novo modelo não só no Centro Paula Souza (CPS) como em São Paulo
                 e no Brasil e conta com parceria com a IBM, que propicia mentorias aos alunos durante o Ensino Médio-Técnico assim 
                 como possibilita estágio aos alunos durante o Ensino Superior. <br> <br> <br>
                O aluno ingressa no Ensino Médio com Habilitação Profissional de Técnico no curso de Desenvolvimento de Sistemas (DS) 
                na Etec da Zona Leste, cursa os 3 anos de Ensino Médio-Técnico já na Fatec Zona Leste, podendo, após concluir esta fase, 
                ingressar diretamente sem processo seletivo (vestibular) no Curso Superior em Análise e Desenvolvimento de Sistemas (ADS-AMS) na Fatec Zona Leste</p>
                <a href="#" class="btn">Saiba Mais</a> <br><br> <br><br><br><br> <br><br> <br><br><br><br>
                
                
                <h1>Recursos Humanos</h1>
                <img src={{ asset('img/cursorh.jpg') }} alt="rh" class="banner"> 
                <p>Anuncia vagas de emprego, descrevendo as atribuições do cargo a ser preenchido; aplica testes em processos seletivos; 
                    realiza cálculos para determinar os valores que serão descontados no salário dos funcionários, como o Imposto de Renda
                     e a contribuição ao INSS, além de porcentagem referente a benefícios, como vale-transporte, plano de saúde etc.;
                      insere informações no sistema para a geração de demonstrativos de pagamentos (holerites ou contracheques); 
                      cuida da documentação necessária para aposentadoria, contratação e demissão de profissionais, 
                      inclusive preenchendo informações na carteira de trabalho; organiza e arquiva documentos do setor;
                       registra e controla período de férias e afastamento de funcionários; e auxilia no treinamento e capacitação dos empregados.</p>

                      
           <a href="#" class="btn">Saiba Mais</a> <br><br> <br><br><br><br>  
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
