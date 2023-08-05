<body>
    <main>
        <div class="container py-3">
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Escoja sus impresoras</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($tb as $t) { ?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h4 class="card-title"><?= $t->nombre ?></h4>
                                <center>
                                    <img src="<?= $t->img ?>" alt="" width="200px" height="200px">
                                </center>
                                <h6>Descripcion:<br>
                                    <?= $t->descripcion ?>
                                </h6>
                                <h6>precio:$ <?= number_format($t->precio, 0) ?></h6>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#comprar<?= $t->id ?>">
                                    Comprar
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="comprar<?= $t->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?= base_url() ?>/Impresoras/inserthisto/<?= $t->id ?>" method="post">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Estas seguro de comprar <?= $t->nombre ?></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="">Cantidad:</label>
                                                            <input type="number" class="form-control  form-control-sm" name="cantidad">
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="">Metodo de pago:</label>
                                                            <select class="form-select" aria-label="Default select example" name="metodo">
                                                                <option value="Efectvo">Efectivo</option>
                                                                <option value="Transferencia">Transferencia</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary btn-sm">Comprar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php   } ?>
            </div>
        </div>



    </main>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">

            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>