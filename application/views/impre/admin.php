<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Opitas printers daes</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
<link rel="stylesheet" href=>
  </head>
  <body>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">PRINTERS DAES</h4>
            <p class="text-muted">Es una iniciativa empresarial que estará dedicada a la prestación de servicios del alquiler de impresoras y asesorías de estas, donde se enfocaran principalmente en las macroempresas  en la ciudad de Neiva. </p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Información</h4>
            <ul class="list-unstyled">
              <li><a href="http://localhost/opitas_printers/index.php/Controller/menu" class="text-white">Inicio</a></li>
              <li><a href="http://localhost/opitas_printers/index.php/Controller" class="text-white">Menu</a></li>
              <li><a href="http://localhost/opitas_printers/index.php/Controller/contactanos" class="text-white">Contactanos</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="http://localhost/opitas_printers/asset/img/uno_log.png" width="200" height="200" alt="">
          <strong>OPITAS PRINTERS DAES</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>
	<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

    </header>
<body>
    <main>
        <div class="container py-3">
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Historial de tus Clientes</h1>
            </div>
        </div>
        <div class="container">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">fecha</th>
                                    <th scope="col">cliente</th>
                                    <th scope="col">producto</th>
                                    <th scope="col">precio</th>
                                    <th scope="col">cantidad</th>
                                    <th scope="col">metodo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tb as $t ) { ?>
                                    <tr>
                                        <td><?=$t->fecha?></td>
                                        <td><?=$t->cliente?></td>
                                        <td><?=$t->nombre?></td>
                                        <td>$<?=number_format($t->precio_total,0) ?></td>
                                        <td><?=$t->cantidad?></td>
                                        <td><?=$t->metodo?></td>
                                    </tr>
                                <?php  } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </main><br><br>
    <center><a href="http://localhost/opitas_printers/index.php/Controller" type="button" class="btn btn-sm btn-outline-info">Volver al inicio</a>
</center>
    <div style="background-color:#1e1f26">

<footer style="margin-top:2rem;" class="row">

  <div style="margin-top:2rem;margin-left:2rem;" class="col mb-3">
    <a href="http://localhost/opitas_printers/index.php/Controller" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
    <img src="http://localhost/opitas_printers/asset/img/uno_log.png" width="200" height="200" alt="">
        <use xlink:href="#bootstrap" />
      </svg>
    </a>
    <p class="text-muted">&copy; 2022</p>
  </div>

  <div class="col mb-3">

  </div>

  <div style="margin-top:2rem;" class="col mb-3">
    <h5>Section</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="http://localhost/opitas_printers/index.php/Controller/menu" class="nav-link p-0 text-muted">INICIO</a></li>
      <li class="nav-item mb-2"><a href="http://localhost/opitas_printers/index.php/Controller/marcas" class="nav-link p-0 text-muted">Marcas</a></li>
      <li class="nav-item mb-2"><a href="http://localhost/opitas_printers/index.php/Controller/acerca_de_nosotros" class="nav-link p-0 text-muted">Acerca de nosotros</a></li>
      <li class="nav-item mb-2"><a href="http://localhost/opitas_printers/index.php/Controller/contactanos" class="nav-link p-0 text-muted">Contactanos</a></li>
      <li class="nav-item mb-2"><a href="http://localhost/opitas_printers/index.php/Controller/asesorias" class="nav-link p-0 text-muted">Asesorias</a></li>
    </ul>
  </div>

  <div style="margin-top:2rem;" class="col mb-3">
    <h5>Section</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="http://localhost/opitas_printers/index.php/Controller/marcas" class="nav-link p-0 text-muted">MARCAS</a></li>
      <li class="nav-item mb-2"><a  class="nav-link p-0 text-muted">Lexmark</a></li>
      <li class="nav-item mb-2"><a  class="nav-link p-0 text-muted">Hp</a></li>
      <li class="nav-item mb-2"><a  class="nav-link p-0 text-muted">Canon</a></li>
      <li class="nav-item mb-2"><a  class="nav-link p-0 text-muted">Maxify</a></li>
      <li class="nav-item mb-2"><a  class="nav-link p-0 text-muted">Ricoh</a></li>
      <li class="nav-item mb-2"><a  class="nav-link p-0 text-muted">Epson</a></li>

    </ul>
  </div>

  <div style="margin-top:2rem;" class="col mb-3">
    <h5>Section</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a  class="nav-link p-0 text-muted">CONTACTANOS</a></li>
      <li class="nav-item mb-2"><a class="nav-link p-0 text-muted">Telefonos</a></li>
      <li class="nav-item mb-2"><a href="https://web.whatsapp.com" class="nav-link p-0 text-muted">whatsapp</a></li>
      <li class="nav-item mb-2"><a href="https://web.facebook.com/estefania.fierromedina/?_rdc=1&_rdr" class="nav-link p-0 text-muted">Red social Facebook</a></li>
      <li class="nav-item mb-2"><a href="https://www.instagram.com/estefa_medina_/" class="nav-link p-0 text-muted">Red social Instagram</a></li>
    </ul>
  </div>
</footer>

</div>



  <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>