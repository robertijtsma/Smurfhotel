<?php
define('IN_INDEX', 1);
require_once 'global.php';
?>
<div id="paypal">
        <h3>Buy More</h3>
        <h5>Minimum of 1,000 points -- 1,000 points is $1.00 USD</h5>
<form action="paypal/paypal.php" method="post" name="paypal">
<label for="name"><b>Username:</b></label><br />
<input id="name" name="name" onclick="changeName()" type="text" readonly value="<?php echo $_SESSION['points']['username']; ?>" /><br />
<label for="number"><b>Points:</b></label><br />
<input id="number" autocomplete="off" onkeypress="return isNumberKey(event)" onkeyup="updatePoints()" name="points" maxlength="5" type="text" value="" /><br />
<b>Total:</b> <b id="total">$0.00</b><br>
<button name="submit" type="submit" name="buy" value="  Buy Points  " class="button" style="float:left; left:90px;" onclick="return submitForm()">Pay!</button></form>