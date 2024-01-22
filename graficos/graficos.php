<?php
    include '../bancoDados/conexaoFilmes/conexaoFilmes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficos Filmes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stayle.css">
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand nav-style" style="font-family: Arial, Helvetica, sans-serif;" href="#">NetFilmes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="../../calendario/calendario.html">Calendario</a>
                    <a class="nav-link" href="../../graficos/graficos.php">Graficos</a>
                </div>
            </div>
        </div>
    </nav>


<div class="style-grafico">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Element", "Bilheteria", { role: "style" } ], // Topo da tabela

          <?php

              $sql = "SELECT * FROM filmes";
              $busca = mysqli_query($connFilme, $sql);

              while($dados = mysqli_fetch_array($busca)){ // buscando na tabela clubes
                $nomeFilme = $dados['nome_filme'];
                $bilheteria = $dados['bilheteria'];
              

          ?>

          ["<?php echo $nomeFilme ?>", <?php echo $bilheteria ?>, "#0066cc"], 
          

          <?php } ?> // fechando as chaves do while

        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                          sourceColumn: 1,
                          type: "string",
                          role: "annotation" },
                        2]);

        var options = {
          title: "Grafico Maiores bilheterias do ano 2024",
          width: 600,
          height: 400,
          bar: {groupWidth: "95%"},
          legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }
    </script>
  <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
</div>   

<!-- Tabela dos filmes mais assistidos -->
<div>

</div>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- Footer -->
    <div>
        <div class="footer-basic">
          <footer>
              <div class="social" style="margin-left: 45%;">
                  <a href="https://www.instagram.com/leo.cortarelli/"><img src="../img/instagram.png" width="5%"></a>
                  <a href="https://www.linkedin.com/in/leonardocortarelli/" style="padding-left: 20px;"><img src="../img/linkedin.png" width="5%"></a>
                  <a href="https://github.com/LeoCortarelli" style="padding-left: 20px;"><img src="../img/github.png" width="5%"></a>   
              </div>
              <br>
              <ul class="list-inline">
                  <li class="list-inline-item"><a href="#">Home</a></li>
                  <li class="list-inline-item"><a href="#">Services</a></li>
                  <li class="list-inline-item"><a href="#">About</a></li>
                  <li class="list-inline-item"><a href="#">Terms</a></li>
                  <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
              </ul>
              <p class="copyright">Company LeoCortarelli © 2023</p>
          </footer>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>