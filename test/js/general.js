var idu = 0;
var cont = 0;
var idActual;
var kekoG = 'Baronet';
var hotelG = 'es';
var usuariosGen = new Array();

var car = new Array('nor','sml','sad','agr','srp','eyb','spk');
var acc = new Array('wav','sit','wlk','lay','wav,sit','wlk,wav','wav,crr=0','wav,crr=1','wav,crr=2','wav,crr=3','wav,crr=5','wav,crr=6','wav,crr=9','wav,crr=33','wav,crr=42','wav,crr=43','wav,crr=44','wav,drk=0','wav,drk=1','wav,drk=2','wav,drk=3','wav,drk=5','wav,drk=6','wav,drk=9','wav,drk=33','wav,drk=42','wav,drk=43','wav,drk=44','sit,crr=0','sit,crr=1','sit,crr=2','sit,crr=3','sit,crr=5','sit,crr=6','sit,crr=9','sit,crr=33','sit,crr=42','sit,crr=43','sit,crr=44','sit,drk=0','sit,drk=1','sit,drk=2','sit,drk=3','sit,drk=5','sit,drk=6','sit,drk=9','sit,drk=33','sit,drk=42','sit,drk=43','sit,drk=44','wlk,crr=0','wlk,crr=1','wlk,crr=2','wlk,crr=3','wlk,crr=5','wlk,crr=6','wlk,crr=9','wlk,crr=33','wlk,crr=42','wlk,crr=43','wlk,crr=44','wlk,drk=0','wlk,drk=1','wlk,drk=2','wlk,drk=3','wlk,drk=5','wlk,drk=6','wlk,drk=9','wlk,drk=33','wlk,drk=42','wlk,drk=43','wlk,drk=44');
var tam = new Array('l','b','s');

$(document).ready(function(){
	$('input#habbo').keyup(reBuscar);
	$('input#habbo, select#hotel').change(reBuscar);
	nuevoUsuario();
});
function reBuscar(){
	var habbo = $('input#habbo').val();
	var hotel = $('select#hotel').val();
	usuariosGen[idActual]['habboname'] = habbo;
	usuariosGen[idActual]['hotel'] = hotel;
	$('#usuario-'+idActual).text(habbo);
	cargarHabbo();
}
function comprobarBtn(){
	if(cont >= 3)
		$('#nuevo_us').hide();
	else
		$('#nuevo_us').show();
	if(cont > 1)
		$('#borrar_us').show();
	else
		$('#borrar_us').hide();
	$('#cont_usuarios').text(cont+'/3');
}
function nuevoUsuario(){
	if(cont < 3){
		usuariosGen[idu] = new Array();
		usuariosGen[idu]['action'] = 0;
		usuariosGen[idu]['head_direction'] = 3;
		usuariosGen[idu]['direction'] = 3;
		usuariosGen[idu]['gesture'] = 0;
		usuariosGen[idu]['size'] = 0;
		usuariosGen[idu]['habboname'] = kekoG;
		usuariosGen[idu]['hotel'] = hotelG;
		$('#lista_usuarios').append('<div id="usuario-'+idu+'" class="usuarios" onclick="cambiarUsuario('+idu+');">'+usuariosGen[idu]['habboname']+'<div class=""></div></div>');
		cambiarUsuario(idu);
		idu++;
		cont++;
	}
	comprobarBtn();
}
function borrarUsuario(){
	if(cont > 0){
		var idNueva;
		usuariosGen[idActual] = '';
		$('#usuario-'+idActual).remove();
		for(i=0;i<usuariosGen.length;i++){
			if (usuariosGen[i] instanceof Array) {
				idNueva = i;
			}
		}
		cont--;
		cambiarUsuario(idNueva);
		comprobarBtn();
	}
}
function cambiarUsuario(id){
	$('.usuarios').removeClass('select');
	$('#usuario-'+id).addClass('select');
	$('input#habbo').val(usuariosGen[id]['habboname']);
	$('select#hotel').val(usuariosGen[id]['hotel']);
	idActual = id;
	cargarHabbo();
}
function cargarHabbo(){
	var imgHabbo = new Image();
	imgHabbo.src = 'http://smurfhotel.nl/avatarimage.php?user='+usuariosGen[idActual]['habboname']+'&direction='+usuariosGen[idActual]['direction']+'&head_direction='+usuariosGen[idActual]['head_direction']+'&gesture='+car[usuariosGen[idActual]['gesture']]+'&action='+acc[usuariosGen[idActual]['action']]+'&size='+tam[usuariosGen[idActual]['size']];
	$(imgHabbo).load(function() {
		$('#prev_ghabbo').css('background-image','url('+imgHabbo.src+')');
	}).error(function(){
		var imgHabboError = new Image();
		imgHabboError.src = 'http://smurfhotel.nl/avatarimage.php?user='+usuariosGen[idActual]['habboname']+'&direction='+usuariosGen[idActual]['direction']+'&head_direction='+usuariosGen[idActual]['head_direction']+'&gesture='+car[usuariosGen[idActual]['gesture']]+'&action='+acc[usuariosGen[idActual]['action']]+'&size='+tam[usuariosGen[idActual]['size']];
		$(imgHabboError).load(function() {
			$('#prev_ghabbo').css('background-image','url('+imgHabboError.src+')');
		}).error(function(){
			$('#prev_ghabbo').css('background-image','url(img/error.png)');
		});
	});
}
function cambiarHabbo(dir, tipo){
	if(dir == 'd'){
		if(tipo == 'body')
			(usuariosGen[idActual]['direction'] == 1) ? usuariosGen[idActual]['direction'] = 8 : usuariosGen[idActual]['direction']--;
		else if(tipo == 'head')
			(usuariosGen[idActual]['head_direction'] == 1) ? usuariosGen[idActual]['head_direction'] = 8 : usuariosGen[idActual]['head_direction']--;
		else if(tipo=='gesture')
			(usuariosGen[idActual]['gesture'] == 0) ? usuariosGen[idActual]['gesture'] = car.length-1 : usuariosGen[idActual]['gesture']--;
		else if(tipo=='action')
			(usuariosGen[idActual]['action'] == 0) ? usuariosGen[idActual]['action'] = acc.length-1 : usuariosGen[idActual]['action']--;
		else if(tipo == 'size')
			(usuariosGen[idActual]['size'] == 0) ? usuariosGen[idActual]['size'] = tam.length-1 : usuariosGen[idActual]['size']--;
	}else if(dir == 'i'){
		if(tipo == 'body')
			(usuariosGen[idActual]['direction'] == 8) ? usuariosGen[idActual]['direction'] = 1 : usuariosGen[idActual]['direction']++;
		else if(tipo == 'head')
			(usuariosGen[idActual]['head_direction'] == 8) ? usuariosGen[idActual]['head_direction'] = 1 : usuariosGen[idActual]['head_direction']++;
		else if(tipo == 'gesture')
			(usuariosGen[idActual]['gesture'] == car.length-1) ? usuariosGen[idActual]['gesture'] = 0 : usuariosGen[idActual]['gesture']++;
		else if(tipo == 'action')
			(usuariosGen[idActual]['action'] == acc.length-1) ? usuariosGen[idActual]['action'] = 0 : usuariosGen[idActual]['action']++;
		else if(tipo == 'size')
			(usuariosGen[idActual]['size'] == tam.length-1) ? usuariosGen[idActual]['size'] = 0 : usuariosGen[idActual]['size']++;
	}
	cargarHabbo();
}