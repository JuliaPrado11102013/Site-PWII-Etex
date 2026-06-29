<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etec Zona Leste</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .conteudo-principal {
            text-align: center;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .conteudo-principal p {
            text-align: center;
        }

        .conteudo-principal img {
            display: block;
            margin: 15px auto;
            max-width: 100%;
            height: auto;
        }

        .cards-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .card {
            flex: 1;
            min-width: 250px;
            text-align: center;
        }
    </style>

</head>

<body>

    <nav class="nav-top">

        <img src="imagens/etec_zona_leste.png" alt="Logo Etec" class="logo">
        <h2>Etec Zona Leste</h2>

    </nav>

    <nav class="nav-menu">

        <ul>

            <li><a href="index.php">Home</a></li>
            <li><a href="cursos.php">Cursos</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="gestao.php">Gestão</a></li>

        </ul>

    </nav>

    <section class="carrossel">

        <img src="imagens/escola.jpg" class="slide">
        <img src="imagens/entrada.jpg" class="slide">
        <img src="imagens/escola de cima.jpg" class="slide">

    </section>

    <section class="conteudo-principal">

        <h1>Bem-vindo à Etec Zona Leste</h1>

        <p>

            A Escola Técnica Estadual da Zona Leste (Etec Zona Leste) é uma instituição pública de ensino
            vinculada ao Centro Paula Souza que oferece cursos técnicos gratuitos e de alta qualidade.
            Com infraestrutura moderna, laboratórios equipados e professores qualificados, a escola
            tem como objetivo formar profissionais preparados para o mercado de trabalho e para os
            desafios do mundo tecnológico. Além do ensino técnico, a Etec incentiva o desenvolvimento
            de projetos, a inovação e a participação dos alunos em eventos acadêmicos e tecnológicos,
            contribuindo para a formação completa de seus estudantes.

        </p>

    </section>

    <section class="conteudo-principal">

        <h2>Conheça nossa Sala Maker</h2>
        <img src="imagens/salaMaker.jpg" alt="Sala Maker" class="img-sala-maker">

        <p>

           A Sala Maker da Etec Zona Leste é um espaço de inovação e criatividade projetado
           para que os alunos possam tirar as ideias do papel e transformá-las em projetos reais.
           Baseado no conceito do "aprendizado na prática" (faça você mesmo), 
           o ambiente estimula o trabalho em equipe, o pensamento crítico e o desenvolvimento de soluções 
           tecnológicas para desafios do mundo real.

        </p>
        <p>

           O laboratório é equipado com recursos modernos que dão suporte aos estudantes 
           de diversas áreas, incluindo ferramentas para prototipagem, kits de robótica e 
           componentes eletrônicos. É o local ideal para o desenvolvimento de projetos interdisciplinares, 
           oficinas práticas e suporte na criação de protótipos para os Trabalhos de Conclusão de Curso (TCC), 
           unindo tecnologia, criatividade e empreendedorismo em um único lugar.

        </p>

    </section>

    <section class="conteudo-principal">

        <h2>Conheça nosso Auditório</h2>
        <img src="imagens/auditorio.jpeg" alt="Auditório da Etec Zona Leste" class="img-sala-maker">

        <p>

         O auditório da Etec Zona Leste é um espaço moderno, 
         totalmente climatizado e planejado para ser o centro das grandes ideias da nossa unidade.
         Com foco no conforto e na acessibilidade, o ambiente é ideal para a realização de palestras, workshops, 
         congressos acadêmicos e eventos culturais, recebendo com excelência alunos, professores, 
         palestrantes convidados e toda a comunidade escolar.

        </p>
        <p>

         Equipado com o que há de melhor em tecnologia audiovisual, 
         o espaço conta com um sistema de som profissional e projeção de alta definição,
         garantindo clareza total tanto na voz de quem palestras quanto na exibição de slides e vídeos.
         É o palco perfeito para momentos marcantes da trajetória dos estudantes, como as tradicionais defesas de TCC, feiras de tecnologia, 
         mostras culturais e premiações, unindo infraestrutura de ponta a um ambiente dinâmico que respira inovação e conhecimento.

        </p>

    </section>

    <section class="conteudo-principal">

        <h2>Destaques</h2>

        <div class="cards-container">

            <div class="card">

                <h3>Vestibulinho Etec</h3>
                <p>Processo seletivo para ingresso nos cursos técnicos da Etec. Inscrições abertas anualmente.</p>
            
            </div>

            <div class="card">

                <h3>Projetos desenvolvidos pelos alunos</h3>
                <p>Inovação e criatividade em ação: conheça os projetos práticos criados pelos estudantes.</p>
           
            </div>

            <div class="card">

                <h3>Feira Tecnológica</h3>
                <p>Evento anual que reuni as melhores ideias tecnológicas desenvolvidas na escola.</p>
           
            </div>

        </div>

    </section>

    <footer>

        <img src="imagens/etec_zona_leste.png" class="logo-footer" alt="Logo">
        <p>Etec Zona Leste</p>
        <p>Av. Águia de Haia, 2633 - São Paulo/SP</p>

    </footer>

    <script src="script.js"></script>
    
</body>

</html>