<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cursos - Etec Zona Leste</title>

<link rel="stylesheet" href="style.css">

<style>
    body {
        margin: 0;
        padding: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('imagens/etecdecima.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }

    .nav-top {
        background-color: #ffffff !important;
    }

    .nav-menu {
        background-color: #b00000 !important;
    }

    .secao-tabela-premium {
        max-width: 1100px;
        margin: 50px auto;
        padding: 0 20px;
    }

    .titulo-etec {
        color: #ffffff;
        font-size: 2.5rem;
        text-align: center;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 40px;
        letter-spacing: -1px;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
    }

    .grade-container {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.4);
        border: 1px solid #dcdcdc;
        background: #ffffff;
    }

    .tabela-xadrez {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Segoe UI', Roboto, sans-serif;
    }

    .tabela-xadrez thead th {
        background: linear-gradient(135deg, #b00000 0%, #800000 100%);
        color: #ffffff;
        text-align: left;
        padding: 25px;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .tabela-xadrez tbody tr {
        transition: 0.3s ease;
    }

    .tabela-xadrez tbody tr:nth-child(even) {
        background-color: #f8f8f8;
    }

    .tabela-xadrez td {
        padding: 20px 25px;
        color: #444;
        font-size: 1rem;
        border-bottom: 1px solid #eee;
    }

    .tabela-xadrez td:nth-child(2) {
        background-color: rgba(176, 0, 0, 0.02);
        font-weight: 500;
    }

    .tabela-xadrez tbody tr:hover {
        background-color: #fff0f0;
        transform: scale(1.002);
    }

    .nome-curso {
        font-weight: 700;
        color: #b00000;
    }

    .periodo-badge {
        font-weight: 600;
        color: #333;
    }

    .detalhe-ceu {
        display: block;
        font-size: 0.8rem;
        color: #888;
        font-style: italic;
        margin-top: 4px;
    }

    footer {
        background-color: #333333 !important;
        color: white;
        padding: 20px;
        text-align: center;
    }
</style>

</head>

<body>

<nav class="nav-top">
    <img src="imagens/etec_zona_leste.png" class="logo" alt="Logo Etec">
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

<main class="secao-tabela-premium">
    <h1 class="titulo-etec">Cursos oferecidos</h1>

    <div class="grade-container">
        <table class="tabela-xadrez">
            <thead>
                <tr>
                    <th>Curso Técnico</th>
                    <th>Modalidade</th>
                    <th>Período / Turno</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="nome-curso">Administração</td>
                    <td>Ensino Médio Integrado</td>
                    <td class="periodo-badge">Manhã</td>
                </tr>
                <tr>
                    <td class="nome-curso">Desenvolvimento de Sistemas</td>
                    <td>Ensino Médio Integrado</td>
                    <td class="periodo-badge">Manhã</td>
                </tr>
                <tr>
                    <td class="nome-curso">Recursos Humanos</td>
                    <td>Ensino Médio Integrado</td>
                    <td class="periodo-badge">Manhã</td>
                </tr>
                <tr>
                    <td class="nome-curso">Administração</td>
                    <td>Ensino Médio Integrado</td>
                    <td class="periodo-badge">Tarde</td>
                </tr>
                <tr>
                    <td class="nome-curso">Recursos Humanos AMS</td>
                    <td>Médio + Superior Integrado</td>
                    <td class="periodo-badge">Tarde</td>
                </tr>
                <tr>
                    <td class="nome-curso">Desenvolvimento de Sistemas AMS</td>
                    <td>Médio + Superior Integrado</td>
                    <td class="periodo-badge">Tarde</td>
                </tr>
                <tr>
                    <td class="nome-curso">Logística</td>
                    <td>Ensino Médio Integrado</td>
                    <td class="periodo-badge">Tarde</td>
                </tr>
                <tr>
                    <td class="nome-curso">Serviços Jurídicos</td>
                    <td>Técnico Modular</td>
                    <td class="periodo-badge">Noite</td>
                </tr>
                <tr>
                    <td class="nome-curso">Contabilidade</td>
                    <td>Técnico Modular</td>
                    <td class="periodo-badge">Noite</td>
                </tr>
                <tr>
                    <td class="nome-curso">Logística</td>
                    <td>Técnico Modular</td>
                    <td class="periodo-badge">Noite</td>
                </tr>
                <tr>
                    <td class="nome-curso">Desenvolvimento de Sistemas</td>
                    <td>Técnico Modular</td>
                    <td class="periodo-badge">Noite</td>
                </tr>
                <tr>
                    <td class="nome-curso">Administração</td>
                    <td>
                        Classe Descentralizada
                        <span class="detalhe-ceu">Curso feito no CEU</span>
                    </td>
                    <td class="periodo-badge">Noite</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<footer>
    <img src="imagens/etec_zona_leste.png" class="logo-footer" alt="Logo">
    <p>Etec Zona Leste</p>
    <p>Av. Águia de Haia, 2633 - São Paulo/SP</p>
</footer>

</body>
</html>