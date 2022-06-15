<?php 
include_once '../../Controller/SessionController.php';

if(!isset($_SESSION['usuario']))
{
    header('Location: http://'. $_SERVER['HTTP_HOST'].'/FUBU/Visual/TelaDeLoginAluno/login', true, 303);
    die();
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

    <title>Tela do Aluno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" 
    src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  
    </script>
	
	
	<script type = "text/javascript">

		function mostrarToken() {  
		
		document.getElementById("Token").hidden = false;
		document.getElementById("Certificados").hidden = true;
		document.getElementById("Documentos").hidden = true;
		
        }
        
        function mostrarCertificados() {  

		
		document.getElementById("Token").hidden = true;
		document.getElementById("Certificados").hidden = false;
		document.getElementById("Documentos").hidden = true;
		
        }
        
        function mostrarDocumentos() {  
		
		document.getElementById("Token").hidden = true;
		document.getElementById("Certificados").hidden = true;
		document.getElementById("Documentos").hidden = false;
		
        }
        
        
        

</script>
	
</head>
<body>
<link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="osahan-account-page-left shadow-sm bg-white h-100">
                <div class="border-bottom p-4">
                    <div class="osahan-user text-center">
                        <div class="osahan-user-media">
                            <img class="mb-3 rounded-pill shadow-sm mt-1" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="gurdeep singh osahan">
                            <div class="osahan-user-media-body">
                                <h6 class="mb-2"><?php echo $_SESSION['usuario']['nome']?></h6>
                                <p class="mb-1"><?php echo $_SESSION['usuario']['telefone']?></p>
                                <p><?php echo $_SESSION['usuario']['email']?></p>
                                <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#edit-profile-modal" href="#"><i class="icofont-ui-edit"></i> Editar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" onclick="mostrarToken()" id="offers-tab" data-toggle="tab" href="" role="tab" aria-controls="offers" aria-selected="false"><i class="icofont-sale-discount"></i> Token</a>
                    	
                    </li>
                    <li class="nav-item-1">
                        <a class="nav-link" onclick="mostrarCertificados()" id="offers-tab" data-toggle="tab" href="" role="tab" aria-controls="" aria-selected="false"><i class="icofont-sale-discount"></i> Certificados </a>
                    </li>
                    <li class="nav-item-2">
                        <a class="nav-link" onclick="mostrarDocumentos()" id="offers-tab" data-toggle="tab" href="" role="tab" aria-controls="" aria-selected="false"><i class="icofont-sale-discount"></i> Relatórios </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane  fade  active show" id="offers" role="tabpanel" aria-labelledby="offers-tab">
                        <h4 class="font-weight-bold mt-0 mb-4"></h4>
    
    						<div id='Token'>
    					
    						<label for="tokenID">Token: </label>
							<div id='tokenID'> <?php echo $_SESSION['usuario']['token']?> </div>
							<a href='https://www.impactmarket.com/pt-BR'>Checar fundos</a>
							</div>
							
							<div id='Certificados' hidden>
							<a href='//forms.gle/xAQgpgDP66hq7EzL8' target="_blank">Enviar documentos</a>
							</div>
							
							<div id='Documentos' hidden>
							<h1>teste</h1>
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

<style type="text/css">
body{
    margin-top:20px;
    background:#eee;
}
/* My Account */
.payments-item img.mr-3 {
    width: 47px;
}
.order-list .btn {
    border-radius: 2px;
    min-width: 121px;
    font-size: 13px;
    padding: 7px 0 7px 0;
}
.osahan-account-page-left .nav-link {
    padding: 18px 20px;
    border: none;
    font-weight: 600;
    color: #535665;
}
.osahan-account-page-left .nav-link i {
    width: 28px;
    height: 28px;
    background: #535665;
    display: inline-block;
    text-align: center;
    line-height: 29px;
    font-size: 15px;
    border-radius: 50px;
    margin: 0 7px 0 0px;
    color: #fff;
}
.osahan-account-page-left .nav-link.active {
    background: #f3f7f8;
    color: #282c3f !important;
}
.osahan-account-page-left .nav-link.active i {
    background: #282c3f !important;
}
.osahan-user-media img {
    width: 90px;
}
.card offer-card h5.card-title {
    border: 2px dotted #000;
}
.card.offer-card h5 {
    border: 1px dotted #daceb7;
    display: inline-table;
    color: #17a2b8;
    margin: 0 0 19px 0;
    font-size: 15px;
    padding: 6px 10px 6px 6px;
    border-radius: 2px;
    background: #fffae6;
    position: relative;
}
.card.offer-card h5 img {
    height: 22px;
    object-fit: cover;
    width: 22px;
    margin: 0 8px 0 0;
    border-radius: 2px;
}
.card.offer-card h5:after {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-bottom: 4px solid #daceb7;
    content: "";
    left: 30px;
    position: absolute;
    bottom: 0;
}
.card.offer-card h5:before {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid #daceb7;
    content: "";
    left: 30px;
    position: absolute;
    top: 0;
}
.payments-item .media {
    align-items: center;
}
.payments-item .media img {
    margin: 0 40px 0 11px !important;
}
.reviews-members .media .mr-3 {
    width: 56px;
    height: 56px;
    object-fit: cover;
}
.order-list img.mr-4 {
    width: 70px;
    height: 70px;
    object-fit: cover;
    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
    border-radius: 2px;
}
.osahan-cart-item p.text-gray.float-right {
    margin: 3px 0 0 0;
    font-size: 12px;
}
.osahan-cart-item .food-item {
    vertical-align: bottom;
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    color: #000000;
}

.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}

.rounded-pill {
    border-radius: 50rem!important;
}
a:hover{
    text-decoration:none;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>

