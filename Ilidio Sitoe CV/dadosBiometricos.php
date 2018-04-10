<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Styles/estilos.css">
    <title>Dados Biométricos</title>
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


        <h1><pre>Apelido          : Sitoe</pre></h1>
        <h1><pre>Outros           : Ilídio</pre></h1>
        <h1><pre>Data Nasc.       : 24 de Maio de 1920</pre></h1>
        <h1><pre>Natural          : Maputo</pre></h1>
        <h1><pre>Filiação         : ---- e de Anatércia José Sitoe</pre></h1>
        <h1><pre>Nacionalidade    : Moçambicana</pre></h1>
        <h1><pre>Endereço         : Bairro Maxaquene "C", Q. 24, Casa Nº 40</pre></h1>


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