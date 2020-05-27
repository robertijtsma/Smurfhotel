<style>
label
{
width: 5em;
float: left;
text-align: right;
margin-right: 0.5em;
display: block
}
</style>
<?php
define('IN_INDEX', 1);
require_once '../global.php';
if(isset($_GET['type']) && $_SESSION['points']['rank'] >= $_CONFIG['admin']['add'])
{
switch($_GET['type'])
{
	
	case 'vip':
	?>
    <label for="credits">Credits:</label>
    <input onkeypress="return isNumberKey(event)" type="text" id="credits" /> The amount of Credits they get<br>
    <label for="cost">Cost:</label>
    <input onkeypress="return isNumberKey(event)" type="text" id="cost" /> The cost in points<br>
    <label for="time">Time</label>
    <input onkeypress="return isNumberKey(event)" type="text" id="time" /> The amount of Unix time (0 for PERM) Check <a href="http://www.epochconverter.com/" target="_blank">Epochconverter.com</a> for more info.<br>
    <input type="button" class="button" style="float:left" id="submit" value="Add VIP">
    <script type="text/javascript">
	$('#submit').click(function() {
	type = 'vip';
	cost = $('#cost').val();
	time = $('#time').val();
	credits = $('#credits').val();
	if(cost.length > 0 && time.length > 0 && credits.length > 0)
	{
	data = 'type=' + type + '&coins=' + credits + '&cost=' + cost + '&time=' + time;
	submitAdd(data);
	}
	else
	{
		alert('please fill in ALL fields');
	}
	});
	</script>
	<?php
	break;
	
	case 'credits':
	?>
    <label for="credits">Credits:</label>
    <input onkeypress="return isNumberKey(event)" type="text" id="credits" /> The amount of Credits they get<br>
    <label for="cost">Cost:</label>
    <input onkeypress="return isNumberKey(event)" type="text" id="cost" /> The cost in points<br>
    <input type="button" class="button" style="float:left" id="submit" value="Add Credits">
    <script type="text/javascript">
	$('#submit').click(function(){
	coins = $('#credits').val();
	cost = $('#cost').val();
	if(cost.length > 0 && coins.length > 0)
	{
	data = 'type=coins' + '&coins=' + coins + '&cost=' + cost;
	submitAdd(data);
	}
	else
	{
		alert('Please fill in ALL fields');
	}
	});
	</script>
	<?php
	break;
	
	case 'pixels':
	?>
    <label for="pixels">Pixels:</label>
    <input onkeypress="return isNumberKey(event)" type="text" id="pixels" /> The amount of Pixels they get<br>
    <label for="cost">Cost:</label>
    <input onkeypress="return isNumberKey(event)"t type="text" id="cost" /> The cost in points<br>
    <input type="button" class="button" style="float:left" id="submit" value="Add Pixels">
    <script type="text/javascript">
	$('#submit').click(function(){
	pixels = $('#pixels').val();
	cost = $('#cost').val();
	if(cost.length > 0 && pixels.length > 0)
	{
	data = 'type=pixels' + '&pixels=' + pixels + '&cost=' + cost;
	submitAdd(data);
	}
	else
	{
		alert('Please fill in ALL fields');
	}
	});
	</script>
	<?php
	break;
	
	case 'furni':
	?>
    <label for="cost">Cost:</label>
    <input onkeypress="return isNumberKey(event)" type="text" id="cost" /> The amount the rare will cost.<br>
    <label for="name">Name:</label>
    <input type="text" id="name" /> The name of the rare.<br>
    <label for="item_id">Item ID:</label>
    <input onkeypress="return isNumberKey(event)" type="text" id="item_id" />The ID for the item.<br>
    <label for="img">IMG</label>
    <input type="text" id="img" />The image name of the furni in your "rares" folder no ending .png or .gif such as "holoduck"<br>
    <input type="button" class="button" style="float:left" id="submit" value="Add Rare">
    <script type="text/javascript">
	$('#submit').click(function(){
		cost = $('#cost').val();
		name = $('#name').val();
		itemid = $('#item_id').val();
		img = $('#img').val();
		if(cost.length > 0 && name.length > 0 && itemid.length > 0 && img.length > 0)
		{
		data = 'type=furni&cost=' + cost + '&item=' + itemid + '&name=' + name + '&img=' + img;
		submitAdd(data);
		}
		else
	{
		alert('Please fill in ALL fields');
	}
	});
	</script>
	<?php
	break;
	
	case 'badges':
	?>
    <label for="cost">Cost:</label>
    <input onkeypress="return isNumberKey(event)" type="text" id="cost" /> The cost of the badge<br>
    <label for="code">Code:</label>
    <input type="text" id="code" /> The code of the badge such as TUU<br>
    <input type="button" class="button" style="float:left" id="submit" value="Add Badge">
    <script type="text/javascript">
	$('#submit').click(function(){
		cost = $('#cost').val();
		code = $('#code').val();
		if(code.length > 0 && cost.length > 0)
		{
			data = 'type=badge&cost=' + cost + '&code=' + code;
			submitAdd(data);
		}
		else
	{
		alert('Please fill in ALL fields');
	}
	});
	</script>
	<?php
	break;
	
	case 'cmd':
	?>
    <label for="cost">Cost:</label>
    <input onkeypress="return isNumberKey(event)" type="text" id="cost" /> The cost of the command<br>
    <label for="cmd">Command:</label>
    <input type="text" id="cmd" /> The name of the command such as cmd_setspeed<br>
    <label for="name">Name:</label>
    <input type="text" id="name" /> The name of the badge what ever you want such as setspeed<br>
    <label for="desc">Desc:</label>
    <input type="text" id="desc" /> A description of the command.<br>
    <input type="button" class="button" style="float:left" id="submit" value="Add Command">
    <script type="text/javascript">
	$('#submit').click(function(){
		cost = $('#cost').val();
		cmd = $('#cmd').val();
		name = $('#name').val();
		desc = $('#desc').val();
		if(cost.length > 0 && cmd.length > 0 && name.length > 0 && desc.length > 0)
		{
			data = 'type=cmd&cost=' + cost + '&cmd=' + cmd + '&name=' + name + '&desc=' + desc;
			submitAdd(data);
		}
		else
	{
		alert('Please fill in ALL fields');
	}
		
	});
	</script>
	<?php
	break;
	
	default:
	break;
}
?>
<script type="text/javascript">

</script>

<?php
}
?>