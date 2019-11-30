<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php 
        $nivelAcesso = mt_rand(0,1);
        //$key é 0, 1 e 2
        //$values é imagem, titulo e sinopse

        $filmes = [
            "0" => [
                "imagem" => "assets/img/fargo.jpg",
                "titulo" => "Fargo",
                "sinopse" => "Série baseada no filme homônimo"
            ],
            "1" => [
                "imagem" => "assets/img/o-mundo-sombrio-da-sabrina.jpg",
                "titulo" => "O mundo sombrio de Sabrina",
                "sinopse" => "Série sobre a bruxa adolescente Sabrina"
            ],
            "2" => [
                "imagem" => "assets/img/sherlock.jpg",
                "titulo" => "Sherlock",
                "sinopse" => "Série sobre o famoso detetive Sherlock Holmes"
            ],
            "3" => [
                "imagem" => "assets/img/stranger-things.jpg",
                "titulo" => "Stranger Things",
                "sinopse" => "Série sobre crianças vivendo aventuras nos anos 80"
            ],
            "4" => [
                "imagem" => "assets/img/orphan-black.jpg",
                "titulo" => "Orphan Black",
                "sinopse" => "Série sobre uma mulher que descobre possuir várias sósias"
            ],
            "5" => [
                "imagem" => "assets/img/la-casa-de-papel.jpg",
                "titulo" => "La casa de papel",
                "sinopse" => "Série sobre um assalto ao banco central da Espanha"
            ]
             
        ];
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php if($nivelAcesso == 1){ ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li> -->
                    <?php } else { ?>
                         <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Olá, logado</a>
                        </li> 
                    <?php } ?>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="assets/img/fargo.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="assets/img/o-mundo-sombrio-da-sabrina.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="assets/img/sherlock.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="assets/img/stranger-things.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="assets/img/orphan-black.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="assets/img/la-casa-de-papel.jpg" alt="...">
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
        <section class="mt-5 container">
            <h1>Encontre as melhores séries</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos temporibus dolorem enim, inventore asperiores saepe officia dignissimos impedit suscipit possimus perspiciatis eaque illum consectetur, necessitatibus tempora et minus? Cum, aliquam.</p>
            <div class="row">
                <?php foreach($filmes as $key => $value): ?>
                <div class="border mb-5 col-12 col-md-4 col-lg-4">
                    <img class="card-img-top" src="<?php echo $value["imagem"]; ?>"  alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $value["titulo"]; ?></h5>
                    <p class="card-text"><?php echo $value["sinopse"]; ?></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div> 
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>