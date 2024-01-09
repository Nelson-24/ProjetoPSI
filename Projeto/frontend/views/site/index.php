<?php
$this->title = 'CRM';
?>
<!DOCTYPE html>
<html lang="pt-pt">

<body>
<!-- banner bg main start -->
<div class="banner_bg_main">
    <!-- header top section start -->
    <div class="container">
        <div class="header_section_top">
            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>
        </div>
    </div>
    <!-- header top section start -->

    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            <div class="containt_main">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="index.html">Home</a>
                    <a href="Fasion.html">Artigos</a>
                    <a href="electronic.html">About us</a> <!-- Alterar os Links-->
                    <a href="jewellery.html">Perfil</a>    <!-- COLOCARA BOTÃO DE LOGOUT-->
                </div>
                <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                <div class="main">
                    <!-- Another variation with a button -->
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Procurar Artigos...">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header_box">
                    <div class="login_menu">
                        <ul>
                            <li><a href="#">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="padding_10">Carrinho</span></a>
                            </li>
                            <li><a href="#">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span class="padding_10">Perfil</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="banner_taital">Loja CRM <br>Loja de Materiais de Construção</h1>
                                <div class="buynow_bt"><a href="artigo.php">Comprar agora</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="banner_taital">Loja CRM <br>Loja de Materiais de Construção</h1>
                                <div class="buynow_bt"><a href="#">Comprar agora</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="banner_taital">Loja CRM <br>Loja de Materiais de Construção</h1>
                                <div class="buynow_bt"><a href="#">Comprar agora</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->
</div>
<!-- banner bg main end -->
<!-- fashion section start -->
<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <h1 class="fashion_taital">Materiais de Construção</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Madeira</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">5€</span></p>
                                    <div class="tshirt_img"><img src="images/materiais/madeira"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Cimento</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">5€</span></p>
                                    <div class="tshirt_img"><img src="images/materiais/cimento"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Tijolo</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">2€</span></p>
                                    <div class="tshirt_img"><img src="images/materiais/tijolo"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <h1 class="fashion_taital">Brita</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Brita Nº1</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">5€</span></p>
                                    <div class="tshirt_img"><img src="images/materiais/brita-01"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Brita Nº2</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">5€</span></p>
                                    <div class="tshirt_img"><img src="images/materiais/brita-02"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Brita Nº3</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">2€</span></p>
                                    <div class="tshirt_img"><img src="images/materiais/brita-03"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <h1 class="fashion_taital">Tijolos</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Tijolo 04</h4>
                                    <p class="price_text">Preço <span style="color: #262626;">$ 30</span></p>
                                    <div class="tshirt_img"><img src="images/materiais/tijolo-04"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Tijolo 07</h4>
                                    <p class="price_text">Preço <span style="color: #262626;">$ 30</span></p>
                                    <div class="tshirt_img"><img src="images/materiais/tijolo-07"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Tijolo 11</h4>
                                    <p class="price_text">Preço <span style="color: #262626;">$ 30</span></p>
                                    <div class="tshirt_img"><img src="images/materiais/tijolo-11"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>
<!-- fashion section end -->
<!-- electronic section start -->

<!-- electronic section end -->
<!-- jewellery  section start -->
<div class="jewellery_section">
    <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <h1 class="fashion_taital">Blocos de Cimento</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Bloco de 7</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">$ 100</span></p>
                                    <div class="jewellery_img"><img src="images/materiais/bloco-07"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Bloco de 10</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">$ 100</span></p>
                                    <div class="jewellery_img"><img src="images/materiais/bloco-10"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Bloco de 15</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">$ 100</span></p>
                                    <div class="jewellery_img"><img src="images/materiais/bloco-15"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <h1 class="fashion_taital">Sanitaria</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Tubos PVC</h4>
                                    <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                    <div class="jewellery_img"><img src="images/materiais/tubos-pvc"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Curvas PVC</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">$ 100</span></p>
                                    <div class="jewellery_img"><img src="images/materiais/curvas-pvc"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Tubo de Esgoto</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">$ 100</span></p>
                                    <div class="jewellery_img"><img src="images/materiais/tubo-esgoto>"</div>
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <h1 class="fashion_taital">Telhas</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Telha F</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">$ 100</span></p>
                                    <div class="jewellery_img"><img src="images/materiais/telha-f"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Telha F2</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">$ 100</span></p>
                                    <div class="jewellery_img"><img src="images/materiais/telha-f2"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Telha Marselha</h4>
                                    <p class="price_text">Preço  <span style="color: #262626;">$ 100</span></p>
                                    <div class="jewellery_img"><img src="images/materiais/telha-marselha"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Adicionar ao Carrinho</a></div>
                                        <div class="seemore_bt"><a href="#">Detalhes</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
        <div class="loader_main">
            <div class="loader"></div>
        </div>
    </div>
</div>
<!-- jewellery  section end -->
</body>
