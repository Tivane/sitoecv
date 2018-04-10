<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Styles/estilos.css">
    <title>Perfil Académico</title>
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
    <h1><pre>2012 - Conclusão do Nível Médio na Escola Secundária do Noroeste 1</pre></h1>
    <h1><pre>2018 - Frequentando o ensino superior em licenciatura em Informática na UEM</pre></h1>

    <h3>EXPERIÊNCIAS PROFISSIONAIS</h3>

    <h1><pre>2017 à --- Trabalhando como Técnico de Informática na Direcção de Cultura da Universidade Eduardo Mondlane</pre></h1>


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