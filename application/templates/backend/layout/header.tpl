<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>{$Tr->_("nombre_aplicacion")|capitalize}</title>
<link rel="stylesheet" type="text/css" href="/css/backend.css" />
<link rel="stylesheet" type="text/css" href="/css/{$css}.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script type='text/javascript' src='/js/jquery-1.4.2.min.js'></script>
<script src="/js/unicode-letter.js"></script>
<script src="/js/es.js"></script>
<script src="http://maps.google.com/maps?file=api&amp;v=3&amp;sensor=false&amp;key=AIzaSyDWD08m2rubm2lSiEdfQb0szx806bLVhX8" type="text/javascript"></script>  
<script src="/js/functions.js"></script>
<script src="/js/{$js}.js"></script>
<link rel="stylesheet" href="/js/jquery-ui-1.11.1.custom/jquery-ui.css">
<script src="/js/jquery-ui-1.11.1.custom/jquery-ui.js"></script>
<link rel="stylesheet" href="/js/jquery-ui-1.11.1.custom/style.css">
 <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true'></script>
<script type='text/javascript'  src='http://code.google.com/apis/gears/gears_init.js'></script>   

<style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; z-index: 12}
  #resizable h3 { text-align: center; margin: 0; }
</style>
</head>
<body  class="backend" onLoad="Start()">
    
<div id='msg' class='msg'>

{include file = 'backend/layout/messages.tpl'}
</div>



<div id="main">

<ul class="navigationMenu">
    <li id="home">
        <a class="home" href="/index/"><br><img src="/img/home.png" >
            <span>Inicio</span>
        </a>
        
    </li>
    
    <li>
        <a class="about" ><br><img src="/img/user.png" onclick="location.href='/user/crear'" >
            <span>User</span>
        </a>
    </li>
    {if $user_data->role=='ADM'}
    <!--
    <li>
	     <a class="services"><br><img src="/img/reporte.png" >
            <span>Reporte</span>
         </a>
    </li>
    -->
    <li>
    	<a class="portfolio" ><br><img src="/img/herramientas.png"  onclick="location.href='/empresa/'">
            <span>Empresa</span>
        </a>
    </li>
    
    <li>
    	<a class="contact"><br><img src="/img/mail.png" onclick="location.href='/mail/'">
                    <span>Contacto</span>
                    <div id="notify" class="notify" style="display: none">{$mailrec}</div>
        </a>
    </li>
        {/if}
</ul>
    
</div>
    





