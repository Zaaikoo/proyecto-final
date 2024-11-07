<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tienda</title>
    <script src="https://kit.fontawesome.com/28c762fe61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/Principal.css">
    <link rel="stylesheet" href="./assets/css/Blog.css">


    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minimum-scale=1.0">

</head>

<body>

    <!--header - menu-->
    <?php include './components/header.php';?>


   <!-- <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="Buscar...">
    </div>

    <ul id="box-search">
        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>HTML</a></li>
        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>CSS</a></li>
        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>JAVA</a></li>
        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>PHP</a></li>
        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>NODEJS</a></li>
        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>VUEJS</a></li>
        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>PAPAS</a></li>
        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>DOMICILIOS</a></li>
    </ul>
    <div id="cover-ctn-search"></div>

-->


    <!--portada - menu-->

<div class="container-all" id="move-content">

    
    <div class="blog-container-cover">
        <div class="container-info-cover">
         <h1>¡Encuentra Tus Productos!</h1>
         <p> Tu supermercado de confianza, siempre a tu servicio  <i class="fa-solid fa-motorcycle"></i></p>    
        </div>
    </div>

    <div class="container-post">

        <input type="radio" id="TODOS" name="categories" value="TODOS" checked>
        <input type="radio" id="DESPENSA" name="categories" value="DESPENSA">
        <input type="radio" id="ASEO" name="categories" value="ASEO">
        <input type="radio" id="MECATO" name="categories" value="MECATO">
        <input type="radio" id="BEBIDAS" name="categories" value="BEBIDAS">
        <input type="radio" id="LICORES" name="categories" value="LICORES">
        <input type="radio" id="OTROS" name="categories" value="OTROS">

        <div class="container-category">
            <label for="TODOS">TODOS</label>
            <label for="DESPENSA">DESPENSA</label>
            <label for="ASEO">ASEO</label>
            <label for="MECATO">MECATO</label>
            <label for="BEBIDAS">BEBIDAS</label>
            <label for="LICORES">LICORES</label>
            <label for="OTROS">OTROS</label>

        </div>

        <div class="posts">

            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/ACEITE 800ml.png" alt="">
                </div>
                <h2>ACEITE DE GIRASOL</h2>
                <h3>$990</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('ACEITE DE GIRASOL', 990, './assets/img/imagenes/ACEITE 800ml.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
                

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/agucate.png" alt="">
                </div>
                <h2>AGUCATE UNIDAD</h2>
                <h3>$4.990</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('AGUACATE UNIDAD', 4.990, './assets/img/imagenes/agucate.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
                

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/ajo.png" alt="">
                </div>
                <h2>AJO MALLA 3 UNIDADES</h2>
                <h3>$1.400</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('AJO MALLA', 1.400, './assets/img/imagenes/ajo.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/arepa mais 400g.png" alt="">
                </div>
                <h2>AREPA DE MAIZ 400g</h2>
                <h3>$6.850</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('AREPA DE MAIZ', 6.850, './assets/img/imagenes/arepa mais 400g.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
                

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/arveja 500g.png" alt="">
                </div>
                <h2>ARVEJAS 500g</h2>
                <h3>$3.990</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('ARVEJAS 500g', 3.990, './assets/img/imagenes/arveja 500g.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/atun en aceite.png" alt="">
                </div>
                <h2>ATUN EN ACEITE</h2>
                <h3>$11.690</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('ATUN EN ACEITE', 11.690, './assets/img/imagenes/atun en aceite.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/cabello angel doria.png" alt="">
                </div>
                <h2>CABELLO DE ANGEL</h2>
                <h3>$7.550</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('CABELLO DE ANGEL', 7.550, './assets/img/imagenes/cabello angel doria.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/cebolla cabezona.png" alt="">
                </div>
                <h2>CEBOLLA CABEZONA</h2>
                <h3>$2.800</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('CEBOLLA CABEZONA', 2.800, './assets/img/imagenes/cebolla cabezona.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/cebolla rama.png" alt="">
                </div>
                <h2>CEBOLLA LARGA 500g</h2>
                <h3>$2.990</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('CEBOLLA LARGA', 2.990, './assets/img/imagenes/cebolla rama.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/ARANDANOS.png" alt="">
                </div>
                <h2>ARANDANOS 125g</h2>
                <h3>$6.300</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('ARANDANOS 125g', 6.300, './assets/img/imagenes/ARANDANOS.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/ducales.png" alt="">
                </div>
                <h2>DUCALES NOEL 2 TACOS</h2>
                <h3>$5.450</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('DUCALES NOEL 2 TACOS', 5.450, './assets/img/imagenes/ducales.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/frijoles.png" alt="">
                </div>
                <h2>FRIJOLES 500g</h2>
                <h3>$6.450</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('FRIGOLES 500g', 6.450, './assets/img/imagenes/frijoles.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/garbanzo.png" alt="">
                </div>
                <h2>GARBANZOS 500g</h2>
                <h3>$3.400</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('GARBANZOS 500g', 3.400, './assets/img/imagenes/garbanzo.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/lentejas.png" alt="">
                </div>
                <h2>LENTEJAS 500g</h2>
                <h3>$5.350</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('LENTEJAS 500g', 5.350, './assets/img/imagenes/lentejas.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/pan tajado.png" alt="">
                </div>
                <h2>PAN TAJADO<h2>
                <h3>$5.200</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('PAN TAJADO', 5.200, './assets/img/imagenes/pan tajado.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="DESPENSA">

                <div class="ctn-img">

                    <img src="./assets/img/imagenes/12000038.png" alt="">
                </div>
                <h2>PAPA CAPIRA 2000grs<h2>
                <h3>$8.300</h3>
                <ul class="ctn-tag">
                    <li>DESPENSA</li>
                </ul>
                <button onclick="addToCart('PAPA CAPIRA 2000grs', 8.300, './assets/img/imagenes/12000038.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>







            

            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/ambientador hosh.png" alt="">
                </div>
                <h2>AMBIENTADOR HOSH</h2>
                <h3>$5.990</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('AMBIENTADOR HOSH', 5.990, './assets/img/imgAseo/ambientador hosh.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/blanqueador.png" alt="">
                </div>
                <h2>BLANQUEADOR LIQUIDO</h2>
                <h3>$8.990</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('BLANQUEADOR LIQUIDO', 8.990, './assets/img/imgAseo/blanqueador.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/bonaropa.png" alt="">
                </div>
                <h2>DETERGENTE EN POLVO</h2>
                <h3>$10.850</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('DETERGENTE EN POLVO', 10.850, './assets/img/imgAseo/bonaropa.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/cepillo.png" alt="">
                </div>
                <h2>CEPILLO DE ESTREGAR</h2>
                <h3>$4.990</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('CEPILLO DE ESTREGAR', 4.990, './assets/img/imgAseo/cepillo.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/esponja multiusos.png" alt="">
                </div>
                <h2>ESPONJA MULTIUSOS X3</h2>
                <h3>$3.650</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('ESPONJA MULTIUSOS X3', 3.650, './assets/img/imgAseo/esponja multiusos.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/guantes domesticos.png" alt="">
                </div>
                <h2>GUANTES DOMESTICOS</h2>
                <h3>$5.300</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('GUANTES DOMESTICOS', 5.300, './assets/img/imgAseo/guantes domesticos.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/insecticida.png" alt="">
                </div>
                <h2>INSECTICIDA 2 EN 1</h2>
                <h3>$9.200</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('INSECTICIDA', 9.200, './assets/img/imgAseo/insecticida.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/jabon en barra.png" alt="">
                </div>
                <h2>JABON EN BARRA</h2>
                <h3>$5.000</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('JABON EN BARRA', 5.000, './assets/img/imgAseo/jabon en barra.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/lava loza barra.png" alt="">
                </div>
                <h2>CREMA LAVALOZA </h2>
                <h3>$8.650</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('CREMA LAVALOZA', 8.650, './assets/img/imgAseo/lava loza barra.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/lavaloza liquido.png" alt="">
                </div>
                <h2>LAVALOZA LIQUIDO</h2>
                <h3>$7.990</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('LAVALOZA LIQUIDO', 7.990, './assets/img/imgAseo/lavaloza liquido.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/papel aluminio.png" alt="">
                </div>
                <h2>PAPEL ALUMINIO 13m</h2>
                <h3>$3.750</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('PAPEL ALUMINIO', 3.750, './assets/img/imgAseo/papel aluminio.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/papel higienico.png" alt="">
                </div>
                <h2>PAPEL HIGIENICO</h2>
                <h3>$15.200</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('PAPEL HIGIENICO', 5.300, './assets/img/imgAseo/papel higienico.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/quitamanchas.png" alt="">
                </div>
                <h2>QUITA MANCHAS</h2>
                <h3>$7.500</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('QUITA MANCHAS', 7.500, './assets/img/imgAseo/quitamanchas.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/ropa color.png" alt="">
                </div>
                <h2>ROPA COLOR 450ml</h2>
                <h3>$5.450</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('ROPA COLOR', 5.450, './assets/img/imgAseo/ropa color.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="ASEO">

                <div class="ctn-img">

                    <img src="./assets/img/imgAseo/servilletas.png" alt="">
                </div>
                <h2>SERVILLETAS DE COCINA</h2>
                <h3>$3.600</h3>
                <ul class="ctn-tag">
                    <li>ASEO</li>
                </ul>
                <button onclick="addToCart('GUASERVILLETAS DE COCINA', 3.600, './assets/img/imgAseo/servilletas.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>












            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/almendras naturales.png" alt="">
                </div>
                <h2>ALMENDRAS NATURALES</h2>
                <h3>$4.500</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('ALMENDRAS NATURALES', 4.500, './assets/img/imgMecato/almendras naturales.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/chicharrones de cerdo.png" alt="">
                </div>
                <h2>CHICHARRONES </h2>
                <h3>$5.950</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('CHICHARRONES', 5.950, './assets/img/imgMecato/chicharrones de cerdo.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/crispeta de caramelo.png" alt="">
                </div>
                <h2>CRISPETA CARAMELUDA</h2>
                <h3>$2.990</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('CRISPETA CARAMELUDA', 2.990, './assets/img/imgMecato/crispeta de caramelo.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/de todito bbq.png" alt="">
                </div>
                <h2>DE TODITO BBQ</h2>
                <h3>$9.750</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('DE TODITO BBQ', 9.750, './assets/img/imgMecato/de todito bbq.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/lonchera 10 pqts.png" alt="">
                </div>
                <h2>LONCHERA MIXTA</h2>
                <h3>$10.650</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('LONCHERA MIXTA', 10.650, './assets/img/imgMecato/lonchera 10 pqts.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/mani con pasas.png" alt="">
                </div>
                <h2>MANI CON PASAS</h2>
                <h3>$5.600</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('MANI CON PASAS', 5.600, './assets/img/imgMecato/mani con pasas.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    

            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/mani con sal.png" alt="">
                </div>
                <h2>MANI CON SAL</h2>
                <h3>$6.600</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('MANI CON SAL', 6.600, './assets/img/imgMecato/mani con sal.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/mani mixto x5.png" alt="">
                </div>
                <h2>MANI MIXTO X5 UND</h2>
                <h3>$4.600</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('MANI MIXTO X5 UND', 5.600, './assets/img/imgMecato/mani mixto x5.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/nachos de maiz.png" alt="">
                </div>
                <h2>NACHOS DE MAIZ</h2>
                <h3>$5.850</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('NACHOS DE MAIZ', 5.850, './assets/img/imgMecato/nachos de maiz.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/papas de bbq.png" alt="">
                </div>
                <h2>PAPAS SABOR BBQ</h2>
                <h3>$3.590</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('PAPAS SABOR BBQ', 3.590, './assets/img/imgMecato/papas de bbq.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/papas de limon.png" alt="">
                </div>
                <h2>PAPAS SABOR LIMON</h2>
                <h3>$3.950</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('PAPAS SABOR LIMON', 3.950, './assets/img/imgMecato/papas de limon.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/papas familiares.png" alt="">
                </div>
                <h2>PAPAS MEGA FAMILIAR</h2>
                <h3>$8.750</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                               <button onclick="addToCart('PAPAS MEGA FAMILIAR', 8.750, './assets/img/imgMecato/papas familiares.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/patacon pisao.png" alt="">
                </div>
                <h2>PATACON PISAO</h2>
                <h3>$5.200</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('PATACON PISAO', 5.200 , './assets/img/imgMecato/patacon pisao.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/tocineticas.png" alt="">
                </div>
                <h2>TOCINETICAS</h2>
                <h3>$2.390</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('TOCINETICAS', 2.390, './assets/img/imgMecato/tocineticas.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="MECATO">

                <div class="ctn-img">

                    <img src="./assets/img/imgMecato/tostacos.png" alt="">
                </div>
                <h2>TOSTACOS</h2>
                <h3>$5.450</h3>
                <ul class="ctn-tag">
                    <li>MECATO</li>
                </ul>
                <button onclick="addToCart('TOSTACOS', 5.450, './assets/img/imgMecato/tostacos.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
            </div>






            
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/agua 300ml.png" alt="">
                </div>
                <h2>AGUA NATURAL</h2>
                <h3>$2.000</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('AGUA NATURAL', 2.000, './assets/img/imgBebidas/agua natural.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/agua con gas.png" alt="">
                </div>
                <h2>AGUA CON GAS</h2>
                <h3>$3.450</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('AGUA CON GAS', 3.450, './assets/img/imgBebidas/agua con gas.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/aloe vera.png" alt="">
                </div>
                <h2>ALOE VERA</h2>
                <h3>$4.750</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('ALOE VERA', 4.750, './assets/img/imgBebidas/aloe vera.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/bebida energixzante.png" alt="">
                </div>
                <h2>ENERGIZANTE TROPICAL</h2>
                <h3>$4.790</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('ENERGIZANTE TROPICAL', 4.790, './assets/img/imgBebidas/energixzante.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/bebida energizante naranja.png" alt="">
                </div>
                <h2>ENERGIZANTE NARANJA</h2>
                <h3>$5.450</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('ENERGIZANTE NARANJA', 5.450, './assets/img/imgBebidas/bebida energizante naranja.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/coacola x2 packs.png" alt="">
                </div>
                <h2>COMBO GASEOSA X2</h2>
                <h3>$13.700</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('COMOBO GASEOSA X2', 13.700, './assets/img/imgBebidas/coacolax2 packs.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/cocacola zero.png" alt="">
                </div>
                <h2>COCACOLA ZERO </h2>
                <h3>$3.500</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('COCACOLA ZERO', 3.500, './assets/img/imgBebidas/coacola zero.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/cocacola.png" alt="">
                </div>
                <h2>COCACOLA</h2>
                <h3>$2.300</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('COCACOLA', 2.300, './assets/img/imgBebidas/cocacola.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/colombiana.png" alt="">
                </div>
                <h2>GASEOSA COLOMBIANA</h2>
                <h3>$2.700</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('GASEOSA COLOMBIANA', 2.700, './assets/img/imgBebidas/colombiana.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/gatorade.png" alt="">
                </div>
                <h2>GATORADE</h2>
                <h3>$4.150</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('GATORADE', 4.150, './assets/img/imgBebidas/gatorade.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/jugo d naranja.png" alt="">
                </div>
                <h2>JUGO DE NARANJA</h2>
                <h3>$6.700</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('JUGO DE NARANJA', 6.700, './assets/img/imgBebidas/jugo d naranja.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/limon panela.png" alt="">
                </div>
                <h2>LIMONADA DE PANELA</h2>
                <h3>$7.550</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('LIMONADA DE PANELA', 7.550, './assets/img/imgBebidas/limon panela.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/manzana.png" alt="">
                </div>
                <h2>MANZANA POSTOBON</h2>
                <h3>$2.850</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('MANZANA POSTOBON', 2.850, './assets/img/imgBebidas/manzana.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/ponymalta.png" alt="">
                </div>
                <h2>PONY MALTA</h2>
                <h3>$3.000</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('PONY MALTA', 3.000, './assets/img/imgBebidas/ponymalta.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="BEBIDAS">

                <div class="ctn-img">

                    <img src="./assets/img/imgBebidas/zumo de uva.png" alt="">
                </div>
                <h2>ZUMO DE UVA</h2>
                <h3>$7.450</h3>
                <ul class="ctn-tag">
                    <li>BEBIDA</li>
                </ul>
                <button onclick="addToCart('ZUMO DE UVA', 7.450, './assets/img/imgBebidas/zumo de uva.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>







            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/aguardiente nectar.png" alt="">
                </div>
                <h2>AGUARDIENTE NECTAR</h2>
                <h3>$32.650</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('AGUARDIENTE NECTAR', 32.650, './assets/img/imgLicores/aguardiente nectar.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/aguardiente.png" alt="">
                </div>
                <h2>AGUARDIENTE AZUL</h2>
                <h3>$47.890</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('AGUARDIENTE AZUL', 47.890, './assets/img/imgLicores/aguardiente.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/cerveza bahia.png" alt="">
                </div>
                <h2>CERVEZA BAHIA</h2>
                <h3>$6.300</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('CERVEZA BAHIA', 6.300, './assets/img/imgLicores/cerveza bahia.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/cerveza brunonia.png" alt="">
                </div>
                <h2>CERVEZA BRUNONIA</h2>
                <h3>$7.650</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('CERVEZA BRUNONIA', 7.650, './assets/img/imgLicores/cerveza brunonia.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/cerveza club colombia.png" alt="">
                </div>
                <h2>CERVEZA CLUB COL</h2>
                <h3>$5.750</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('CERVEZA CLUB COL', 5.750, './assets/img/imgLicores/cerveza club colombia.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/cerveza coronita.png" alt="">
                </div>
                <h2>CERVEZA CORONITA</h2>
                <h3>$7.000</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('CERVEZA CORONITA', 7.000, './assets/img/imgLicores/cerveza coronita.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/ginebra dafne.png" alt="">
                </div>
                <h2>GINEBRA DAFNE</h2>
                <h3>$67.500</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('GINEBRA DAFNE', 67.500, './assets/img/imgLicores/ginebra dafne.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>
    
            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/ron añejo.png" alt="">
                </div>
                <h2>RON AÑEJO</h2>
                <h3>$83.400</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('RON ANEJO', 5.600, './assets/img/imgLicores/ron añejo.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/TEQUILA NEWTON.png" alt="">
                </div>
                <h2>TEQUILA NEWTON</h2>
                <h3>$57.600</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('TEQUILA NEWTON', 57.600, './assets/img/imgLicores/TEQUILA NEWTON.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/tequila reposado.png" alt="">
                </div>
                <h2>TEQUILA REPOSADO</h2>
                <h3>$68.000</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('TEQUILA REPOSADO', 68.000, './assets/img/imgLicores/tequila reposado.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/vino blanco.png" alt="">
                </div>
                <h2>VINO BLANCO</h2>
                <h3>$34.000</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('VINO BLANCO', 34.000, './assets/img/imgLicores/vino blanco.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/vino frances.png" alt="">
                </div>
                <h2>VINO FRANCES</h2>
                <h3>$43.600</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('VINO FRANCES', 43.600, './assets/img/imgLicores/vino frances.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/vino italiano.png" alt="">
                </div>
                <h2>VINO ITALIANO</h2>
                <h3>$89.000</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('VINO ITALIANO', 89.000, './assets/img/imgLicores/vino italiano.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="LICORES">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/vino portugal.png" alt="">
                </div>
                <h2>VINO PORTUGAL</h2>
                <h3>$47.500</h3>
                <ul class="ctn-tag">
                    <li>LICOR</li>
                </ul>
                <button onclick="addToCart('VINO PORTUGAL', 47.500, './assets/img/imgLicores/vino portugal.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>








            <div class="post" data-category="OTROS">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/ciagarro 1.png" alt="">
                </div>
                <h2>CIGARRO LUCKY STRIKE GIN X10 UND</h2>
                <h3>$47.500</h3>
                <ul class="ctn-tag">
                    <li>OTRO</li>
                </ul>
                <button onclick="addToCart('CIGARRO LUCKY STRIKE GIN X10 UND', 47.500, './assets/img/imgLicores/ciagarro 1.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="OTROS">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/cigarro 2.png" alt="">
                </div>
                <h2>CIGARRO ROTHMAN BLUE X10 UND</h2>
                <h3>$47.500</h3>
                <ul class="ctn-tag">
                    <li>OTRO</li>
                </ul>
                <button onclick="addToCart('CIGARRO ROTHMAN BLUE X10 UND', 47.500, './assets/img/imgLicores/cigarro 2.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>
            <div class="post" data-category="OTROS">

                <div class="ctn-img">

                    <img src="./assets/img/imgLicores/cigarro 3.png" alt="">
                </div>
                <h2>CIGARRO ROTHMAN WHITE X10 UND</h2>
                <h3>$47.500</h3>
                <ul class="ctn-tag">
                    <li>OTRO</li>
                </ul>
                <button onclick="addToCart('CIGARRO ROTHMAN WHITE X10 UND', 47.500, './assets/img/imgLicores/cigarro 3.png')"> 
        AGREGAR <i class="fa-solid fa-cart-shopping"></i>
    </button>

            </div>


        </div>

    </div>

    <div class="container-footer">

        <footer>
            <div class="logo-footer">
                <img src="./assets/img/imagenes/DomiPrado.png" alt="">
            </div>

            <div class="redes-footer">
                <a href="#"><i class="fa-brands fa-instagram icon-redes-footer"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp icon-redes-footer"></i></a>
                <a href="#"><i class="fa-brands fa-google-plus-g icon-redes-footer"></i></a>
            </div>

            <hr>
            <h4>2024 DomiPrado - Todos Los Derechos Reservados</h4>

        </footer>



    </div>

</div>
<script>
    function addToCart(name, price, image) {
    // Obtener el carrito actual o inicializarlo si no existe
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Crear un objeto de producto
    const product = { name, price, image };

    // Añadir el producto al carrito
    cart.push(product);

    // Guardar el carrito actualizado en localStorage
    localStorage.setItem("cart", JSON.stringify(cart));

    // Confirmación de que el producto fue añadido
    alert(`${name} ha sido añadido al carrito.`);
}

</script>
    
<script> scr="/domiprado/src/assets/js/script.js" </script>

</body>   
</html>