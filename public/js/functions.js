x=$(document);							//creo el obj jquery
x.ready(inicializoFunctions);
setInterval('clearmsg()',10000);
var idDOM='';

function inicializoFunctions(){
    
   $( "li" ).draggable();
   $( "#toolbar1" ).draggable();
   $( "#resizable" ).resizable();
   $( "#content" ).resizable();
   $( "#datepicker" ).datepicker();
   //$("#edit").keydown(setTexto);
   // inicializo();
   
   $("#destinatario").keyup(autocomplete);
   $("#destinatario").focus(function(){
                                        $("#destinatario").val('');
                                    });
   $("#rubro").keyup(autocomplete);
   $("#rubro").focusout(function(){
                                        if($("#ulautocomplete li").size()>0){
                                         
           //document.getElementById('nombre').focus();
           //setTimeout(document.getElementById('nombre').focus(), 10000);
           setTimeout(function(){document.getElementById("rubro").focus()},10);

                                        }
                                    });
    $("#enlace").focusout(function(){
                                        
                                        addEnlace();
                                        
                                    });
    
    
    
    startTime();
     
     viewnotify();
  jQuery('#direccion').focusout(function(){
      
       codeAddress();
       return false;
  });
  jQuery('#localidad').focusout(function(){
       codeAddress();
       return false;
  });
   
   
   
    RANGE_CAL_2 = new Calendar({
                           
                          inputField: "f_rangeEnd",
                          dateFormat: "%Y-%m-%d",
                          trigger: "f_rangeEnd_trigger",
                          bottomBar: false,
                          onSelect: function() {
                                  var date = Calendar.intToDate(this.selection.get());
                                  LEFT_CAL.args.max = date;
                                  LEFT_CAL.redraw();
                                  this.hide();                                  
                          }
                     
                  });
    var LEFT_CAL = Calendar.setup({
                            
                            weekNumbers: true,
                            selectionType: Calendar.SEL_MULTIPLE,
                            showTime: 12
                            })                      
}
function setdir(dir){
    //document.getElementById('direccion').val(dir);
    $("#direccion").val(dir);
    codeAddress();
}
var initialLocation;
var browserSupportFlag =  new Boolean();
var map;
var infowindow = new google.maps.InfoWindow();
  
  if(navigator.geolocation) {
    browserSupportFlag = true;
    navigator.geolocation.getCurrentPosition(function(position) {
      initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
	 
      contentString = 'Usted Est&amp;aacute; Aqu&amp;iacute;';
      map.setCenter(initialLocation);
      infowindow.setContent(contentString);
      infowindow.setPosition(initialLocation);
      infowindow.open(map);
    }, function() {
      handleNoGeolocation(browserSupportFlag);
    });
  }
  else{ alert('Hola, busca la direccion  donde quieres que aparezca tu anuncio en el mapa. ');}

  var geocoder;
  
  
 
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng;
    if(document.getElementById('gmap_lat11').value!='' && document.getElementById('gmap_lng11').value!=''){
         latlng = new google.maps.LatLng(document.getElementById('gmap_lat11').value, document.getElementById('gmap_lng11').value);
    
        }else{
        
         latlng = new google.maps.LatLng(-34.898770881497114, -56.16672411586916);
    }
    var myOptions = {
      zoom: 12,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById('map_canvas11'), myOptions);
    codeAddress();
    geolocemp();
  }
function addressCode(lat,lng) {
 //Obtener direccion mediante las coordenadas
 
 latlng=new google.maps.LatLng(lat, lng);
 geocoder.geocode({ 'latLng': latlng},function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            
                            resultado=results[0].address_components;
                             for (var j=0; j<resultado.length; j++){
                                 if(resultado[j].types[0]=='neighborhood'){
                                //alert(resultado[j].long_name);
                                document.getElementById('localidad').value = resultado[j].long_name;}
                                if(resultado[j].types[0]=='locality' || resultado[j].types[0]=='neighborhood'){
                                    //alert(resultado[j].long_name);
                                    document.getElementById('departamento').value = resultado[j].long_name;}
                                if(resultado[j].types[0]=='route'){
                                    //alert(resultado[j].long_name);
                                    document.getElementById('direccion').value = resultado[j].long_name;
                                }
                                if(resultado[j].types[0]=='street_number'){
                                    //alert(resultado[j].long_name);
                                    //$("#direccion").append(appendChild(resultado[j].long_name));
                                }
                                if(resultado[j].types[0]=='country'){
                                    //alert(resultado[j].long_name);
                                    document.getElementById('pais').value = resultado[j].long_name;
                                }
                            }
                        }})
 } 
function codeAddress() {
    var lati;
    var adre;

    if((document.getElementById('direccion').value) ===''){
        lati=new google.maps.LatLng(document.getElementById('gmap_lat11').value, document.getElementById('gmap_lng11').value);
        adre='latLng';
    }else{
       $dir="";
       $loc="";
       $dep="";
       if($("#direccion").length ){
            $dir= document.getElementById('direccion').value;
        }
        if($("#localidad").length ){
            $loc=","+document.getElementById('localidad').value;
        }
         if($("#departamento").length ){
            $dep=","+document.getElementById('departamento').value;
        }
       lati=$dir+$loc+$dep; 
       adre='address'; 
    }
    adre='address' ;
    adre ={ 'address': lati};
    geocoder.geocode(adre , function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        resultado=results[0].address_components;

        for (var j=0; j<resultado.length; j++){
            if(resultado[j].types[0]=='neighborhood'){
           //alert(resultado[j].long_name);
           //document.getElementById('localidad').value = resultado[j].long_name;
           }
           if(resultado[j].types[0]=='locality' || resultado[j].types[0]=='neighborhood'){
               //alert(resultado[j].long_name);
               //document.getElementById('departamento').value = resultado[j].long_name;
           }
           if(resultado[j].types[0]=='route'){
               //alert(resultado[j].long_name);
               //document.getElementById('direccion').value = resultado[j].long_name;
           }
           if(resultado[j].types[0]=='street_number'){
               //alert(resultado[j].long_name);
               //$("#direccion").append(appendChild(resultado[j].long_name));
           }
           if(resultado[j].types[0]=='country'){
               //alert(resultado[j].long_name);
               //document.getElementById('pais').value = resultado[j].long_name;
           }
        }
        map.setCenter(results[0].geometry.location);
        var logo = new google.maps.MarkerImage('/img/icomaps.png'
                    );
        var marker = new google.maps.Marker({
                                            map: map, 
                                            animation: google.maps.Animation.DROP,draggable:true,
                                            icon:logo,
                                            position: results[0].geometry.location
                                            });

        var markerLatLngAct = marker.getPosition();

        marker.addListener('dragend', function manipulacoordenadas(){
            var markerLatLng = marker.getPosition();
            lat=markerLatLng.lat();
            lng=markerLatLng.lng();
            document.getElementById('gmap_lat11').value = lat;
            document.getElementById('gmap_lng11').value = lng;
            addressCode(lat,lng);
            exit;
            });
    }else{
        info('Google no pudo localizar la siguiente direcci\xF3n: ' + lati);
    }
    });
}

function geolocemp(){
   //identifico en el mapa la lista de resultados
   var str=$("#direcciones").attr("value");
   
   var res = str.split(";");
   for (i = 0; i < res.length; i++) {
       
        $dir=res[i];
        $("#direccion").val($dir);
        codeAddress();
   }
  
}
function salirautocomplete(){
    $("#ulautocomplete").remove();
}
function startTime(){
    
    var dias_semana = new Array("Domingo","Lunes","Martes","Mi\xE9rcoles","Jueves","Viernes","S\xE1bado");
    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre", "Diciembre");

    today=new Date();
    nomdia= dias_semana[today.getDay()];
    numdia= today.getDate();
    mes = meses[parseInt(today.getMonth())];
    h=today.getHours();
    m=today.getMinutes();
    s=today.getSeconds();
    m=checkTime(m);
    s=checkTime(s);
    i=0;
    
    document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
    document.getElementById('fecha').innerHTML=nomdia+" "+numdia+" de "+mes;
    
    t=setTimeout('startTime()',500);
}
function checkTime(i){
        if (i<10) {i="0" + i;}return i;
    }

window.onload=function(){startTime();
}
function confirmar(url, msg){
    r = confirm(msg);
    if(r){
            window.location = url;
    }
}
function cargarUser(){
    
    cadena="ajax=1";
    $.ajax({
		async:false,
		type:"GET",
		dataType:"text",
		contentType:"application/x-www-form-urlencoded",
		url:"http://www.guiadigital.com.uy:8181/user/index?",
		data:cadena,
		beforeSend: inicioEnvio,
		success: envioOk,
		timeout: 10000,
		error: errorEnvio
	})
}
function autocomplete(event){
    $controller=$("#controller").attr("value");
    if($(this).attr("value").length ){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode==39){
        alert(keycode);
        $("#destinatario2").focus();   
    }
    if(keycode==13){
       if(validarEmail($(this).attr("value"))){
           $textid=$(this).attr("value");
           $id = $textid.replace(/[@.-_]/gi,'e');
           
           addTo($(this).attr("value"),$id,'b');
           return;   
       }
    }
        cadena="ajax=1";
        x=$(this).attr("value");
        cadena="ajax=1&param="+x;
        $.ajax({
                async:true,
                type:"GET",
                dataType:"html",
                contentType:"application/x-www-form-urlencoded",
                url:"http://www.guiadigital.com.uy:8181/"+$controller+"/autocomplete?",
                data:cadena,
                beforeSend: inicioEnvio,
                success: envioautcom,
                timeout: 10000,
                error: errorEnvio
            })
    }
}
function divshow($tipo,$id){
  
    capas=document.getElementsByTagName('div');
	for (i=0;i<capas.length;i++){
		if(capas[i].id == $tipo+$id){
			if(capas[i].style.display=='none'){
				$x=$("#"+$tipo+$id);
				$x.show("fast");
			}else{
				$x=$("#"+$tipo+$id);
				$x.hide("slow");
			}			
		}
	}	
    
}
function eliminarli($nom,$elemento,$campo){   
    $("#"+$nom).remove();
    texto = $("#all"+$campo).text();
    texto = texto.replace(";"+$elemento, "");
    $("#all"+$campo).text(texto);
    }
function addTo($x,$y,$z){
     if(validarEmail($x)){
           
            $campo='to';
            $id=$y+$z;
            $id = $id.replace(" ","");
            $destino=$y+" "+$z;
            if($z=='b'){
                $id=$y;
                $destino=$x
            }

            if ( $("#"+$id).length  ){
                $("#destinatario").val($x);
                $("#destinatario").focus();
                alert("Ya es destnatario del mail");
            }else{
                $html="<span class='email' id='"+$id+"'><li>"+$destino+" <img  src='/img/eliminarmails.png' width='15' height='15' onclick='eliminarli(\""+$id+"\",\""+$x+"\",\""+$campo+"\")'></li></span>";

                $("#destinatario2").prepend($html);
                $("#allto").append(";"+$x);
                $("#autocompletar").html('');
                $("#destinatario").focus();
            }
        }
}
function addRubro($x,$idRub){
            $campo='rubro';
            if($idRub=='0'){
                $id =$("#"+$campo).attr("value");
                $x  =$id;
            }else{
                $id=$idRub;
            }
            
            $id = $id.replace(/[ ]/gi,"");
            if ( $("#"+$id).length  ){
                $("#"+$campo).val($x);
                $("#"+$campo).focus();
                alert("Rubro ya cargado");
            }else{
                $html="<span class='email' id='"+$id+"'><li>"+$x+" <img  src='/img/eliminarmails.png' width='15' height='15' onclick='eliminarli(\""+$id+"\",\""+$x+"\",\""+$campo+"\")'></li></span>";

                $("#rubro2").prepend($html);
                $("#allrubro").append(";"+$x);
                $("#autocompletar").html('');
                $("#"+$campo).focus();
                $("#"+$campo).val('');
                
            }
        }
function addEnlace(){
            
            
            $campo='enlace';
            $enlace=$("#enlace").attr('value');
            $id=$enlace.replace(/[^A-Za-z0-9]/gi,"");
            
            if ( $("#"+$id).length  ){
                $("#"+$campo).val($enlace);
                
                alert("Enlace ya cargado");
                $("#"+$campo).focus();
            }else{
                $img="enlace.png";
                if ($enlace.indexOf('facebook')!=-1) {
                    $img="facebook.png";
                }else if($enlace.indexOf('twitter')!=-1){
                    $img="twitter.png";
                }else if($enlace.indexOf('google')!=-1){
                    $img="google+.png";
                }else if($enlace.indexOf('linkedin')!=-1){
                    $img="linkedin.png";
                }else if($enlace.indexOf('youtube')!=-1){
                    $img="youtube.png";
                }
                
                $html="<span class='enlace' id='"+$id+"'><li><img  src='/img/"+$img+"' width='20' height='20'>"+$enlace+" <img  src='/img/eliminarmails.png' width='15' height='15' onclick='eliminarli(\""+$id+"\",\""+$enlace+"\",\""+$campo+"\")'></li></span>";
                $("#enlace2").prepend($html);
                $("#allenlace").append(";"+$enlace);
                $("#enlace").val("");
                document.getElementById("enlace").placeholder = "Ingrese un nuevo Enlace";
        
                $("#enlace").focus();
                
            }
            
        }

function inicioEnvio(){
     $("#autocomplete").html("<img src='/img/cargando.gif'>");
}
function errorEnvio(){
    alert("No pudimos acceder al servidor.");
}
function envioOk($retorno){
    $("#contenido").html($retorno);
}

function envioautcom($retorno){
    //alert($("#controller").attr("value"));
    if(($retorno)){
     $("#autocompletar").html(($retorno));}
}
function clearmsg(){
    $("#msg").html('');
}
function info($text){
   
    $("#msg").html("<div class='alert-info'><img src='/img/info.png' width='25' height='25'>"+$text+"</div>");
}

function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) ){
        alert("Error: La direcci\xF3n de correo " + email + " es incorrecta.");
        $("#destinatario").focus();
        $("#destinatario").val(email);
        
    }else{
        return true;
    }
}


//Mensaje emergente-----------------------------------------------------------------------------------------------------------------
function mostrarmsj(event,id){
	//determina un margen de pixels del div al raton

        margin=5;
	//La variable IE determina si estamos utilizando IE
	var IE = document.all?true:false;
	//Si no utilizamos IE capturamos el evento del mouse
	if (!IE) document.captureEvents(Event.mousemove)
	//variables de ubicación
	var tempX = 0;
	var tempY = 0;
	if(IE){ //para IE
		tempX = event.clientX + document.body.scrollLeft;
		tempY = event.clientY + document.body.scrollTop;
	}else{ //para netscape
		tempX = event.pageX;
		tempY = event.pageY;
	}if(tempX <0){tempX =0;}
		if (tempY < 0){tempY = 0;}
	
	var divFlot=document.getElementById('flotante');
        divFlot.style.position= 'absolute';
        divFlot.style.zIndex=12;
	divFlot.style.top= (tempY+margin)+"px";
	divFlot.style.left =(tempX+margin)+"px";
	divFlot.style.display='block';
        $text=$("#"+id).html();
       
	$("#flotante").html(text);
	
    
    return;
}
function cargarMail($id,$email){
    
    cadena="ajax=1&id="+$id+"&email="+$email;
    $.ajax({
		async:false,
		type:"GET",
		dataType:"text",
		contentType:"application/x-www-form-urlencoded",
		url:"http://www.guiadigital.com.uy:8181/mail/visualizar?",
		data:cadena,
		beforeSend: inicioEnvio,
		success: envioOkmail,
		timeout: 10000,
		error: errorEnvio
	})
}
function envioOkmail(retorno){
     var iFrame = document.getElementById('edit');
    
    iFrame.contentWindow.document.body.innerHTML= retorno; 
    viewnotify();
}
function viewnotify(){
  
    cadena="ajax=1";
    $.ajax({
		async:false,
		type:"GET",
		dataType:"text",
		contentType:"application/x-www-form-urlencoded",
		url:"http://www.guiadigital.com.uy:8181/mail/viewnotify?",
		data:cadena,
		beforeSend: inicioEnvio,
		success: envioOkviewnotify,
		timeout: 10000,
		error: errorEnvio
	})
}
function envioOkviewnotify(retorno){
    if(retorno>0){
     $("#notify").html(retorno);
     $("#notify").show("fast");}else{ $("#notify").hide(5);}
}