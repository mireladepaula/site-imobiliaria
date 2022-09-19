<?php require '../config/URL.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<title>Imobiliária Nailton - O melhor negócio para sua casa.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="<?php echo CSS_URL . 'style.css';?>" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_URL . 'layout.css';?>" rel="stylesheet" type="text/css" />
<!--[if lt IE 8]>
	<link href="<?php echo CSS_URL . 'ie_style.css';?>" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if lte IE 7]>
   <script type="text/javascript" src="<?php echo JS_URL . 'js/ie_png.js';?>"></script>
   <script type="text/javascript">
     ie_png.fix('.png, .box .bg, .box .extra-bg, .box .bottom, #content.top-bg')
   </script>
<![endif]-->
</head>

<body id="page1">
	<div class="tail-top">
      <div class="tail-bottom">
         <div id="main">
            <!-- header -->
            <div id="header">
            	<div class="row-1">
               	<ul class="nav">
                  	 <li><a href="<?php echo BASE_URL . 'controle/redirecionamento/redir.php?menu=1'?>" class="first">Home</a></li>
                     <li><a href="<?php echo BASE_URL . 'controle/redirecionamento/redir.php?menu=2'?>">Sobre</a></li>
                     <li><a href="<?php echo BASE_URL . 'controle/redirecionamento/redir.php?menu=3'?>">Casas</a></li>
                     <li><a href="<?php echo BASE_URL . 'controle/redirecionamento/redir.php?menu=4'?>">Contato</a></li>
                     <li><a href="<?php echo BASE_URL . 'controle/redirecionamento/redir.php?menu=5'?>" class="last">Logar</a></li>
                  </ul>
               </div>
                <br />
               <div class="row-1">
               	<div class="indent">
                  	<a href="<?php echo BASE_URL . 'controle/redirecionamento/redir.php?menu=1'?>" class="first"><img alt="" src="<?php echo BASE_URL . 'recursos/imagens/logo.jpg'?>" /></a>
                  </div>
               </div>
               <br />
                  <div class="row-3" >
               		<form action= "<?php echo BASE_URL . 'controle/redirecionamento/redirAdm.php?menu=1'?>" method="post">
               		 <div class="slogan">
               		 	<span class="login">Login: </span>
               		 	<input type="text" class="login" id="login" name="login" />
               		 	<span class="senha">Senha: </span>
               		 	<input type="password" class="senha" id="senha" name="senha" />
               		 	<br />               		 	
               		 	<input type="submit" value="Entrar" class="botaoLogin"/>
               		 </div>
               		</form>
               </div>
            </div>
            <!-- content -->
            <br />
            <br />
            <br />        
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />        
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
<?php require 'mestre/rodape.php';?>