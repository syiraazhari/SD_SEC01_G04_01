{{-- VOTER JOIN MPP PAYMENT CONTENT --}}
@extends('layouts.voter')
@extends('layouts.app')

@section('content4')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Accept a payment</title>
    <meta name="description" content="A demo of a payment on Stripe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    

  </head>
  <body>
    <!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>

<!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
<button
  style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em;cursor:pointer"
  id="checkout-button-price_1M2qrwB1kXhthdzD5gVz2YKE"
  role="link"
  type="button"
>
  Checkout
</button>

<div id="error-message"></div>

<script>
(function() {
  var stripe = Stripe('pk_test_51M2qqKB1kXhthdzDeT7TA69OwQXfkMKhRuRoCtTBUpl3yLyUS2ANqdLNj6ktBrQFuM3IUhlG9mIUIvaI0VoD5WTz00nv7OZgKs');

  var checkoutButton = document.getElementById('checkout-button-price_1M2qrwB1kXhthdzD5gVz2YKE');
  checkoutButton.addEventListener('click', function () {
    /*
     * When the customer clicks on the button, redirect
     * them to Checkout.
     */
    stripe.redirectToCheckout({
      lineItems: [{price: 'price_1M2qrwB1kXhthdzD5gVz2YKE', quantity: 1}],
      mode: 'subscription',
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