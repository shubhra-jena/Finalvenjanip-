<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/form.css">

</head>
<body>

<h2 style="text-align:center;color:white"> Complete the payment to access the Study Material</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="#">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input required  type="text" id="fname" name="firstname" placeholder="Aaryan Raina">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input required  type="email" id="email" name="email" placeholder="abcd@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input required  type="text" id="adr" name="address" placeholder="RoopNagar">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input required  type="text" id="city" name="city" placeholder="Jammu">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input required  type="text" id="state" name="state" placeholder="J&K">
              </div>
              <div class="col-50">
                <label for="zip">Pin Code</label>
                <input required  type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input required  type="text" id="cname" name="cardname" placeholder="Aaryan">
            <label for="ccnum">Credit card number</label>
            <input required  type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Expiry Month</label>
            <input required  type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Expiry Year</label>
                <input required  type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input required  type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox"  name="sameadr" required> I have filled all the details correctly
		  <br>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>
</html>
