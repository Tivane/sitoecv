<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Styles/estilos.css">
    <title>Línguas & Competências</title>
    <script type="text/javascript"
            src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

</head>
<body>


<nav>
    <div class="handle">Menu</div>
    <ul class="showing">
        <a href="index.php"><li>Inicio</li></a>
        <a href="dadosBiometricos.php"><li>Dados Biométricos</li></a>
        <a href="pAcademicoEprofissionais.php"><li>P. Académico</li></a>
        <a href="linguasCompetencias.php"> <li>Línguas & Competências</li></a>
        <a href="mais.php"><li>Mais</li></a>
        <a href="contactos.php"><li>Contactos</li></a>
    </ul>

</nav>

<section>

    <!-- RESPONSIVE TABLE -->
    <table class="table table-responsive">

        <thead>
        <tr>
            <th>Línguas</th>
            <th>Changana</th>
            <th>Português</th>
            <th>Inglês</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Fala</td>
            <td>Excelente</td>
            <td>Excelente</td>
            <td>Razoável</td>

        </tr>
        <tr>
            <td>Escrita</td>
            <td>Razoável</td>
            <td>Excelente</td>
            <td>Razoável</td>

        </tr>
        <tr>
            <td>Pronúncia</td>
            <td>Excelente</td>
            <td>Excelente</td>
            <td>Razoável</td>

        </tr>


        </tbody>

    </table>
    <!-- END RESPONSIVE TABLE -->

    <h3>COMPETÊNCIAS:</h3>
    <h1><pre>
             Alto sentido de responsabilidade;
             Capacidade de trabalhar em equipe;
             Criatividade alta;
             Trabalhar sob pressão;
             Comunicativo;
             Espírito de trabalho em equipe;
    </pre></h1>
</section>


<footer>
    <pre><p>Produzido por ILAS                      Copyright &#169;</p></pre>
</footer>




<script>
    $('.handle').on('click', function () {
        $('nav ul').toggleClass('showing');
    });
</script>

</body>
</html>