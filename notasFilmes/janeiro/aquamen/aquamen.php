<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../css/notasFilmes/janeiro/aquamen.css">
    <title>Aquamen</title>
</head>
<body>
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
                    <a class="nav-link" href="#">Graficos</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Card -->

    <div class="div-container-config">
        <div class="container">
            <div class="card">
                <div class="img">
                    <span></span>
                </div>

                <div class="content">
                    <span class="title">Aquaman 2: O Reino Perdido</span>
                    <p class="desc">
                        Um antigo poder é libertado e o herói Aquaman precisa fazer um perigoso acordo com um aliado improvável para proteger Atlântida e o mundo de uma devastação irreversível.
                    </p>
                </div>
                <div class="arrow">
                    <span>&#8673;</span>
                </div>
            </div>
        </div>


        <!-- Avaliação -->
        <div class="div-avaliacao-config">
            <h3>Faça sua Avaliação</h3>
            <form action="processo.php" method="post">
                <div class="estrela">
                    <input type="radio" name="estrela" id="vazio" value="" checked>

                    <label for="estrela1"><i class="opcao fa"></i></label>
                    <input type="radio" name="estrela" id="estrela1" id="vazio" value="1">

                    <label for="estrela2"><i class="opcao fa"></i></label>
                    <input type="radio" name="estrela" id="estrela2" id="vazio" value="2">

                    <label for="estrela3"><i class="opcao fa"></i></label>
                    <input type="radio" name="estrela" id="estrela3" id="vazio" value="3">

                    <label for="estrela4"><i class="opcao fa"></i></label>
                    <input type="radio" name="estrela" id="estrela4" id="vazio" value="4">

                    <label for="estrela5"><i class="opcao fa"></i></label>
                    <input type="radio" name="estrela" id="estrela5" id="vazio" value="5">

                    <label for="estrela6"><i class="opcao fa"></i></label>
                    <input type="radio" name="estrela" id="estrela6" id="vazio" value="6">

                    <label for="estrela7"><i class="opcao fa"></i></label>
                    <input type="radio" name="estrela" id="estrela7" id="vazio" value="7">

                    <label for="estrela8"><i class="opcao fa"></i></label>
                    <input type="radio" name="estrela" id="estrela8" id="vazio" value="8">

                    <label for="estrela9"><i class="opcao fa"></i></label>
                    <input type="radio" name="estrela" id="estrela9" id="vazio" value="9">

                    <label for="estrela10"><i class="opcao fa"></i></label>
                    <input type="radio" name="estrela" id="estrela10" id="vazio" value="10">
                    <br>    
                    <br>

                    <!-- CAMPO ENVIAR COMENTARIO -->
                    <textarea name="comentario"rows="3" cols="30" placeholder="Digite seu Comentario"></textarea>
                    <br>
                    <br>
                    <button type="submit">Avaliar</button>
                </div>
            </form>
        </div>
            
    </div>

    


    <div>
        <div class="footer-basic">
          <footer>
              <div class="social" style="margin-left: 45%;">
                  <a href="https://www.instagram.com/leo.cortarelli/"><img src="../../../img/instagram.png" width="5%"></a>
                  <a href="https://www.linkedin.com/in/leonardocortarelli/" style="padding-left: 20px;"><img src="../../../img/linkedin.png" width="5%"></a>
                  <a href="https://github.com/LeoCortarelli" style="padding-left: 20px;"><img src="../../../img/github.png" width="5%"></a>   
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
</body>
</html>