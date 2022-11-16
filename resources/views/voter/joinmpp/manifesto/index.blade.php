{{-- VOTER SUBMIT MANIFESTO --}}
@extends('layouts.voter')
@extends('layouts.app')

@section('content4')
<!DOCTYPE html>
<html>
<head>
<style>
  .button {
    background-color: #f8a617;
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .box {
  background-color: whitesmoke;
  border: 1px solid lightgrey;
  padding: 20px;
  margin: auto;
  margin-bottom: 50px;
  width: 80%;
  border-radius: 5px;
}

form {
  margin-left: 50px;
}


</style>
</head>
<body>
  <script src="https://js.stripe.com/v3"></script>
  <div class="content-margin" style="width:100%">
    <div class="row" style="padding-top: 1.5rem;margin: auto; width:100%">
      <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <h2 class="card-title" style="text-align: center;">Submit Manifesto</h2><br>
          </div>
          <div class="card-body">
            <form method="post" action="{{url('upload')}}" enctype="multipart/form-data">
              @csrf
            <ol type="A" start="3" style="padding-bottom: 10px;">
            <b><li style="padding-bottom: 10px;">Attach Documents</li></b><br>

              <div class="form-group row">
                <label for="formalPhoto" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem; padding-top: 0px">Formal Passport Photo</label>
                <div class="custom-file col-sm-10">
                  {{-- <input type="file" class="custom-file-input col-sm-2 col-form-label" name="formalPhoto" id="formalPhoto"> --}}
                  <input type="file" name="formalPhoto" id="formalPhoto">
                  <label class="custom-file-label" for="formalPhoto">Choose file</label>
                </div>
              </div>

              <div class="form-group row">
                
                <label for="matricsCard" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem; padding-top: 0px">Copy of Matrics Card</label>
                
                <div class="custom-file col-sm-10">
                  {{-- <input type="file" class="custom-file-input col-sm-2 col-form-label" name="matricCardPhoto" id="matricsCardPhoto"> --}}
                  <input type="file" name="matricCardPhoto" id="matricsCardPhoto">
                  <label class="custom-file-label" for="matricsCard">Choose file</label>
                </div>
              </div>

              <div class="form-group row">
                <label for="manifesto" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Manifesto</label>
                <div class="col-sm-10" style="padding-left: 0px; padding-right: 0px">
                  <textarea class="form-control" name="manifesto" id="manifesto" rows="10"></textarea>
                </div>
              </div>

              <div style="text-align: center; margin-right: 50px; margin-top:50px;">
                <a href= "{{ url('voter/joinmpp/register') }}" class ="button"> < Previous Page </a>
                <a href= "#" class ="button" id="checkout-button-price_1M3PO6B1kXhthdzDtW7h2DDI"> Proceed to Payment Page > </a>
              </div>

              <div id="error-message"></div>
              </ol>
            </form>
        </div>
      </div>
    </div>
</div>
<script>

(function() {
  var stripe = Stripe('pk_test_51M2qqKB1kXhthdzDeT7TA69OwQXfkMKhRuRoCtTBUpl3yLyUS2ANqdLNj6ktBrQFuM3IUhlG9mIUIvaI0VoD5WTz00nv7OZgKs');

  var checkoutButton = document.getElementById('checkout-button-price_1M3PO6B1kXhthdzDtW7h2DDI');
  checkoutButton.addEventListener('click', function () {
    /*
     * When the customer clicks on the button, redirect
     * them to Checkout.
     */
    stripe.redirectToCheckout({
      lineItems: [{price: 'price_1M3PO6B1kXhthdzDtW7h2DDI', quantity: 1}],
      mode: 'payment',
      /*
       * Do not rely on the redirect to the successUrl for fulfilling
       * purchases, customers may not always reach the success_url after
       * a successful payment.
       * Instead use one of the strategies described in
       * https://stripe.com/docs/payments/checkout/fulfill-orders
       */
      successUrl: 'http://127.0.0.1:8000/voter/joinmpp/payment/success',
      cancelUrl: 'http://127.0.0.1:8000/voter/joinmpp/payment/canceled',
    })
    .then(function (result) {
      if (result.error) {
        /*
         * If `redirectToCheckout` fails due to a browser or network
         * error, display the localized error message to your customer.
         */
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
})();


</script>
    
</body>
</html>
@endsection