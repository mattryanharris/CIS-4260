<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<script>
function myFunction(){
var firstInput = document.getElementById("credit_card_no").value;
var secondInput = document.getElementById("repeat_credit_card_no").value;

if (firstInput === secondInput) {
return true;
} else {
document.getElementById("error").innerHTML = "Credit Card numbers do not match.";
   return false;
}
}
</script>


<form method="post" action="display.php" name="myForm" id="myForm" onsubmit="return myFunction(this);"> <table>
<tr>
<td colspan="2" style="text-align: center;">
<h2 >Order Form</h2>
</td>
</tr>
<tr>
<td colspan="2" style="text-align: center; ">
<h3 id="error" style="color:red;"></h2>
</td>
</tr>
<tr>
<th style="text-align: right;">Product: </th>
<td> <input type="text" name="product" value="" required></td>
</tr>
<tr>
<th style="text-align: right;">Quantity: </th>
<td>
<select name="quantity" required>
<?php for($i=1; $i<=10; $i++){ ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
</select>
</td>
</tr>
<tr>
<th style="text-align: right;">Unit price: </th>
<td> <input type="number" maxlength="4" name="unit_price" required></td>
</tr>
<tr>
<th style="text-align: right;">Name: </th>
<td><input type="text" name="name" value="" required></td>
</tr>
<tr>
<th style="text-align: right;">Shipping Address: </th>
<td><textarea name="shipping_address" rows="5" cols="40" required></textarea></td>
</tr>
<tr>
<th style="text-align: right;">Credit Card: </th>
<td><input type="radio" name="credit_card" value="visa" required>Visa</td>
</tr>
</tr>
<tr>
<th style="text-align: right;"> </th>
<td><input type="radio" name="credit_card" value="master card" required>Master Card</td>
</tr>
</tr>
<tr>
<th style="text-align: right;"> </th>
<td> <input type="radio" name="credit_card" value="american express" required>American Express </td>
</tr>
</tr>
<tr>
<th style="text-align: right;"> </th>
<td> <input type="radio" name="credit_card" value="discover" required>Discover </td>
</tr>
<tr>
<th style="text-align: right;">Credit Card Number: </th>
<td><input type="password" id="credit_card_no" name="credit_card_no" value="" required></td>
</tr>
<tr>
<th style="text-align: right;">Repeat Credit Card Number: </th>
<td><input type="password" id="repeat_credit_card_no" name="repeat_credit_card_no" value="" required></td>
</tr>
<tr>
<td colspan="2" style="text-align: center; padding-top:20px;">
<input type="submit" id="submit" name="submit" value="Submit Order">
</td>
</tr>

  

</table>


  
</form>

</body>
</html>