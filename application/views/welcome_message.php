<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/product.css">
</head>
<body style="overflow-x: hidden;">
<!-- example 1 - using absolute position for center -->
<!-- 4 - contained in center example -->
<div class="" style="padding: 10px;">
  <div class="row ">
    <div class="col-lg-4 hidden-xs-down hidden-xs">
      <span><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;(+51) 955-341-496</span><span>&nbsp;|&nbsp;</span>
      <span><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;pedidos@giancarlomarket.com</span>
    </div>
    <div class="col-lg-4 text-center">
     <center> <img src="img/logo.png" class="img-fluid" style="    width: 265px;"></center>
    </div>
    <div class="col-lg-4 hidden-xs ">
      <div class="pull-right">
        <span><i class="fa fa-shopping-cart " aria-hidden="true"></i> 0</span><span>&nbsp;|&nbsp;</span>
      <span><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;Ingresar </span><span>&nbsp;|&nbsp;</span>
      <span><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Regístrate</span>
    </div>
  </div>
  </div>
</div>

<nav class="navbar navbar-expand-sm navbar-light bg-red">
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarsExample11">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">ABARROTES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BEBIDAS, CERVEZAS Y LICORES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CUIDADO PERSONAL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CUIDADO DEL BEBÉ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LÁCTEOS, EMBUTIDOS Y HUEVOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LIMPIEZA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MASCOTAS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

  <div class="row">
    <div class="col-lg-12">
      <img src="img/bg-1.jpg" class="img-fluid" style="width: 100%;">
    </div>
  </div>

<div class="container v1">
  <div class="row">
    <div class="col-lg-6">
      <div class="buscador">
        <div class="input-group input-group-sm">
          <input type="search" id="buscar" name="buscar" value="" class="form-control " placeholder="Buscar...">
          <span class="input-group-append">
            <a href="#;" id="buscarProductos" class="btn btn-outline-primary">
              <div class="svg-icon baseline">
                <i class="fa fa-search" aria-hidden="true"></i>
              </div>
            </a>
          </span>
        </div>
        <div class="buscador-autocomplete"></div>
      </div>
    </div>
    <div class="col-lg-6">

      <div class="btn-group btn-group-sm mr-0 ml-auto show pull-right">
        <button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btn1">Ordenar</button>
        <button type="button" id="btn1" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu show" x-placement="bottom-start"  style="position: absolute; transform: translate3d(68px, 30px, 0px); top: 0px; left: 0px; will-change: transform;">
          <a class="dropdown-item" href="#">Nombre</a>
          <a class="dropdown-item" href="#">Menor precio</a>
          <a class="dropdown-item" href="#">Mayor precio</a>
          <a class="dropdown-item" href="#">Más nuevo</a>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-3 hidden-xs">
      <div class="col-lg-12">
          <div id="categorias" class="filtro categorias mb-4">         
           <h5 class="text-uppercase"><strong>Categorías</strong></h5>
    <ul class="categorias ">
                <li class="categoria">
          <a class="current" href="">Abarrotes <span class="nowrap">( 301)</span></a>
            <ul class="subcategorias">                      
              <li class="subcategoria">
                        <a href="#">
                          Aceite <span class="nowrap">( 19 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="#">
                          Arroz  <span class="nowrap">( 11 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="#">
                          Azucar <span class="nowrap">( 5 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="#">
                          Comidas instantáneas  <span class="nowrap">( 10 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="#-">
                          Confitería  <span class="nowrap">( 50 )</span>
                        </a>
                      </li>                    
                       <li class="subcategoria">
                        <a href="#">
                          Conservas <span class="nowrap">( 22 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="#">
                          Desayuno <span class="nowrap">( 93 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="#">
                          Fideos y Pastas <span class="nowrap">( 21 )</span>
                        </a>
                      </li>   
                       <li class="subcategoria">
                        <a href="#">
                          Menestras <span class="nowrap">( 17 )</span>
                        </a>
                      </li>
                      <li class="subcategoria">
                        <a href="#">
                          Panadería, Pastelería y Comidas <span class="nowrap">( 8 )</span>
                        </a>
                      </li>
                       <li class="subcategoria">
                        <a href="#">
                          Repostería <span class="nowrap">( 20 )</span>
                        </a>
                      </li>          
                       <li class="subcategoria">
                        <a href="#">
                          Salsas, Cremas y Condimentos <span class="nowrap">( 18 )</span>
                        </a>
                      </li>                
                        <li class="subcategoria">
                        <a href="#">
                          Snacks y Piqueos <span class="nowrap">( 4 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="#">
                          Té e Infusiones <span class="nowrap">( 3 )</span>
                        </a>
                      </li>          
                       </ul>
          </li>     
              <li class="categoria">
          <a class="current" href="#">Bebidas, Cervezas y Licores <span class="nowrap">( 51)</span></a>
            <ul class="subcategorias">                  
                <li class="subcategoria">
                        <a href="#">
                          Aguas y Bebidas <span class="nowrap">( 9 )</span>
                        </a>
                      </li>                  
                         <li class="subcategoria">
                        <a href="#">
                          Bebidas Regeneradoras <span class="nowrap">( 3 )</span>
                        </a>
                      </li>                  
                      <li class="subcategoria">
                        <a href="#">
                          Cervezas <span class="nowrap">( 7 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="#">
                          Gaseosas <span class="nowrap">( 13 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="#">
                          Jugos y Té <span class="nowrap">( 2 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="">
                          Licores y Tabaco <span class="nowrap">( 7 )</span>
                        </a>
                      </li>                    
                       <li class="subcategoria">
                        <a href="#">
                          Vinos <span class="nowrap">( 10 )</span>
                        </a>
                      </li>           
                    </ul>
                 </li>        
           <li class="categoria">
          <a class="current" href="#">Cuidado del bebé <span class="nowrap">( 27)</span></a>
            <ul class="subcategorias">                      <li class="subcategoria">
                        <a href="#">
                          Pañales y Toallitas Húmedas <span class="nowrap">( 8 )</span>
                        </a>
                      </li>                   
                        <li class="subcategoria">
                        <a href="">
                          Cuidado y Aseo del Bebé <span class="nowrap">( 19 )</span>
                        </a>
                      </li>         
                        </ul>
                   </li>   
                <li class="categoria">
          <a class="current" href="#">Cuidado personal <span class="nowrap">( 163)</span></a>
            <ul class="subcategorias">                    
              <li class="subcategoria">
                        <a href="#">
                          Cuidado del Cabello <span class="nowrap">( 57 )</span>
                        </a>
                      </li>                    
                       <li class="subcategoria">
                        <a href="">
                          Cuidado Bucal <span class="nowrap">( 17 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="#">
                          Cuidado de la Piel <span class="nowrap">( 5 )</span>
                        </a>
                      </li>                     
                      <li class="subcategoria">
                        <a href="#">
                          Jabones y Perfumería <span class="nowrap">( 69 )</span>
                        </a>
                      </li>                    
                       <li class="subcategoria">
                        <a href="#">
                          Protección Femenina <span class="nowrap">( 13 )</span>
                        </a>
                      </li>                    
                       <li class="subcategoria">
                        <a href="#">
                          Pañales y Toallas para Adulto <span class="nowrap">( 2 )</span>
                        </a>
                      </li>       
                    </ul>
                </li>       
               <li class="categoria">
                  <a class="current" href="#">Lacteos, Embutidos y huevos <span class="nowrap">( 34)</span></a>
                     <ul class="subcategorias">                  
                      <li class="subcategoria">
                        <a href="#">
                          Leche <span class="nowrap">( 18 )</span>
                        </a>
                      </li>                    
                       <li class="subcategoria">
                        <a href="#">
                          Quesos Procesados <span class="nowrap">( 1 )</span>
                        </a>
                      </li>                    
                       <li class="subcategoria">
                        <a href="#">
                          Quesos <span class="nowrap">( 1 )</span>
                        </a>
                      </li>                     <li class="subcategoria">
                        <a href="#">
                          Mantequilla y Margarina  <span class="nowrap">( 4 )</span>
                        </a>
                      </li>                     <li class="subcategoria">
                        <a href="#">
                          Yogurt <span class="nowrap">( 10 )</span>
                        </a>
                      </li>           </ul>
                   </li> 
                  <li class="categoria">
                    <a class="current" href="">Limpieza <span class="nowrap">( 80)</span></a>
                   <ul class="subcategorias">                     
                    <li class="subcategoria">
                        <a href="">
                          Cuidado de la Ropa <span class="nowrap">( 39 )</span>
                        </a>
                      </li>                     <li class="subcategoria">
                        <a href="#">
                          Cuidado y limpieza del Hogar <span class="nowrap">( 23 )</span>
                        </a>
                      </li>                     <li class="subcategoria">
                        <a href="#">
                          Limpieza de Baño y Cocina <span class="nowrap">( 18 )</span>
                        </a>
                      </li>           
                    </ul>
                </li>  
             </ul>
        

    </div>

</div>
    </div>
    <div class="col-lg-9">
      <div class="row">
        
    <div class="col-lg-4">
<div class="bd-example">
<div class="card">
  <img src="img/7.jpg" class="img-fluid">
  <div class="card-block">
    <p class="card-title"><b>Aceite de Oliva CARBONELL Puro,</b></p>
    <p>Lata 500ml</p>
    <p>S/ 19.60</p>
   </div>
  <div class="row text-center">
  <div class="col-lg-6">
     <div class="def-number-input number-input safari_only">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="1" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
  </div>
  <div class="col-lg-6">
     <a href="javascript:;" class="button">
AGREGAR
<i class="fa fa-shopping-cart c1" aria-hidden="true"></i>
  </svg>
</a>
  </div>
</div>
</div>
</div>
</div>

    <div class="col-lg-4">
<div class="bd-example">
<div class="card">
  <img src="img/8.jpg" class="img-fluid">
  <div class="card-block">
    <p class="card-title"><b>Aceite de Oliva CARBONELL Puro,</b></p>
    <p>Spray 200ml</p>
    <p>S/ 14.00</p>
   </div>
  <div class="row text-center">
  <div class="col-lg-6">
     <div class="def-number-input number-input safari_only">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="1" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
  </div>
  <div class="col-lg-6">
     <a href="javascript:;" class="button">
AGREGAR
<i class="fa fa-shopping-cart c1" aria-hidden="true"></i>
  </svg>
</a>
  </div>
</div>

    </div>
</div>
</div>
    <div class="col-lg-4">
<div class="bd-example">
<div class="card">
  <img src="img/4.jpg" class="img-fluid">
  <div class="card-block">
   <p class="card-title"><b>Aceite de Oliva CARBONELL Extra</b></p>
    <p>Virgen, Botella 1L</p>
    <p>S/ 36.00</p>
   </div>
  <div class="row text-center">
  <div class="col-lg-6">
     <div class="def-number-input number-input safari_only">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="1" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
  </div>
  <div class="col-lg-6">
     <a href="javascript:;" class="button">
AGREGAR
<i class="fa fa-shopping-cart c1" aria-hidden="true"></i>
  </svg>
</a>
  </div>
</div>
</div>
</div>

    </div>
</div>
 <div class="row">
        
    <div class="col-lg-4">
<div class="bd-example">
<div class="card">
  <img src="img/5.jpg" class="img-fluid">
  <div class="card-block">
    <p class="card-title"><b>Aceite de Oliva CARBONELL</b></p>
    <p>Clásico, Botella 1L</p>
    <p>S/ 34.00</p>
   </div>
  <div class="row text-center">
  <div class="col-lg-6">
     <div class="def-number-input number-input safari_only">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="1" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
  </div>
  <div class="col-lg-6">
     <a href="javascript:;" class="button">
AGREGAR
<i class="fa fa-shopping-cart c1" aria-hidden="true"></i>
  </svg>
</a>
  </div>
</div>
</div>
</div>
</div>

    <div class="col-lg-4">
<div class="bd-example">
<div class="card">
  <img src="img/3.jpg" class="img-fluid">
  <div class="card-block">
    <p class="card-title"><b>Aceite de Oliva CARBONELL Extra</b></p>
    <p>Virgen, Botella 250ml</p>
    <p>S/ 18.00</p>
   </div>
  <div class="row text-center">
  <div class="col-lg-6">
     <div class="def-number-input number-input safari_only">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="1" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
  </div>
  <div class="col-lg-6">
     <a href="javascript:;" class="button">
AGREGAR
<i class="fa fa-shopping-cart c1" aria-hidden="true"></i>
  </svg>
</a>
  </div>
</div>

    </div>
</div>
</div>
    <div class="col-lg-4">
<div class="bd-example">
<div class="card">
  <img src="img/6.jpg" class="img-fluid">
  <div class="card-block">
   <p class="card-title"><b>Aceite de Oliva CARBONELL Extra</b></p>
    <p>Virgen, Spray 200ml</p>
    <p>S/ 14.00</p>
   </div>
  <div class="row text-center">
  <div class="col-lg-6">
     <div class="def-number-input number-input safari_only">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="1" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
  </div>
  <div class="col-lg-6">
     <a href="javascript:;" class="button">
AGREGAR
<i class="fa fa-shopping-cart c1" aria-hidden="true"></i>
  </svg>
</a>
  </div>
</div>
</div>
</div>
</div>
</div>
  </div>
 </div>
</div>
 </div>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>GIANCARLO MARKET</h4>
          <p>Empresa distribuidora de productos de consumo masivo y artículos de limpieza. DELIVERY GRATIS.</p>
          <small>marketabarrotesMarket Huancayodistribuidor abarrotesautoservicio huancayotienda de abarrotesmarket on line huancayo</small>
        </div>
        <div class="col-lg-4">
          <h4>DISTRIBUIDORA GIANCARLO SAC</h4>
          <p>Jr. Santa Isabel N°670</p>
          <small>El Tambo, Huancayo, Junin , Perú</small><hr>
          <small><i class="fa fa-phone" aria-hidden="true"></i>
 (+51) 955-341-496</small>
        </div>
        <div class="col-lg-4">
          <h4>CONTÁCTANOS</h4>
          <div class="container">

  <form action="/action_page.php">
    <div class="form-group">  
      <input type="email" class="form-control" id="email" placeholder="Nombre" name="email">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="Correo Electrónico" name="pswd">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="Teléfono" name="pswd">
    </div>

    <div class="form-group">
      <textarea id="input-2" name="message2" class="form-control" required="" placeholder="Comentario" rows=""></textarea>
    </div>

     <div class="form-group">
     <div class="row">
       <div class="col-lg-6">
         <input type="password" class="form-control" id="pwd" placeholder="Texto de la imagen" name="pswd">
       </div>
       <div class="col-lg-6">
         <input type="password" class="form-control" id="pwd" placeholder="xyz " name="pswd">
       </div>
     </div>
    </div>

    <button type="submit" class="btn btn-primary" id="btn1">Enviar</button>
  </form>
</div>

        </div>
      </div>
    </div>
  </footer>
</body>
</html>