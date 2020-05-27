$(document).ready(function () {

	$('#headbox #button').click(function() {
		if($('#button_image').attr('title') == "Close")
		{
		$('#headbox').stop(true,true).animate({
			top: "-=45px"
	
		},'slow');
		$('#button_image').attr('title','Open');
		$('#button_image').attr('src','images/down.png');
		}
		else
		{
		$('#headbox').stop(true,true).animate({
			top: "+=45px"
	
		},'slow');
		$('#button_image').attr('title','Close');
		$('#button_image').attr('src','images/up.png');
		}
	});
	
	$('#tools-button').click(function(){
		$('#tools').focus().slideToggle('slow');
		$('#tools_add').slideUp('slow');
		$('#tools_rem').slideUp('slow');
	});
	
	$('.daily').click(function() {
		$.ajax({
			type: "POST",
			url: "manage/daily.php",
			data: "",
			success: function(msg){
				$('.daily').html(msg).delay(1000).hide('slow');
			}
		});
	});
	
	$('.exitbutton').click(function() { 
	    $('.page').css('display', 'none');
	    $('.overlay').css('display', 'none');
	});
	
	$('.paypal_button').click(function() {
		loadPage('yes=yes', 'POST', 'paypal.php');
	});


});

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
// -->

function buy(id, type)
{
	$.ajax({
		type: "POST",
		url: "manage/buy.php",
		data: type + '=yes' + '&id=' + id,
		success: function(msg){
			if(msg == 'Success')
			{
				$('#msg_' + type).html(msg).addClass('success').delay(100).slideDown('slow');
				$('#msg_' + type).delay(3000).slideUp('slow');
			}
			else
			{
				$('#msg_' + type).html(msg).addClass('fail').delay(100).slideDown('slow');
				$('#msg_' + type).delay(3000).slideUp('slow');
			}
		}
	})
}

function addTool(type)
{
	$.ajax({
		type: "GET",
		url: "pages/add.php",
		data: "type=" + type,
		success: function(msg){
			$('#tools_add').html(msg).delay(100).slideDown('slow')
		}
	});
}

function submitAdd(data)
{
	$.ajax({
		type: "POST",
		url: 'manage/add.php',
		data: data,
		success: function(msg){

				$('#tools_msg').attr('class','success').slideDown('slow').html('Success');
				$('#tools_add').slideUp('slow').html('');
				$('#tools_msg').delay(3000).slideUp('slow');

		}
	});
}

function submitRem(type, id)
{
	$('#' + type + '_' + id).html('Removing...');
	$.ajax({
		type: "POST",
		url: 'manage/rem.php',
		data: 'type=' + type + '&id=' + id,
		success: function(msg){
			$('#' + type + '_' + id).html('Removed!');
			$('#' + type + '_form_' + id).delay(2000).fadeOut('slow');

		}
	});
}

function changeName()
		{
			if(document.getElementById('name').readOnly)
			{
				var answer = confirm("Are you sure you want to change this name? Click OK if you want to GIFT points to another user.");
				if(answer)
				{
					document.getElementById('name').removeAttribute('readonly',0);
				}
			}
		}
		
function submitForm()
		{
			if(document.getElementById('number').value >= 1000)
			{
				return true;
			}
			else
			{
				alert('Minimum to buy is 1000');
				return false;
			}
		}
		
function updatePoints(){
			var points = document.getElementById('number').value;
			if(points >= 1000)
			{
			var percent = 0.001;
			var total = percent * points;
			var money = total.toFixed(2);

			document.getElementById('total').innerHTML = '$' + money;
			
			}
			else
			{
				document.getElementById('total').innerHTML = 'Minimum to buy is 1000';
			}
}

function loadPage(data, type, url){
	$.ajax({
		type: type,
		url: url,
		data: data,
		success: function(msg){
			$('.loadPage').html(msg);
			$('.overlay').fadeIn();
	    	$('.page').fadeIn("slow");
		}
	});
}