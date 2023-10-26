@extends('layouts.main')

@section('title', 'Reserva Unifil')

@section('content')
    <h1>Bem vindo a pagina de login do Reserva Unifil</h1>
    <head>
        <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
      </head>
      <body>
        <div id="my-signin2"></div>
        <script>
          function onSuccess(googleUser) {
            console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
          }
          function onFailure(error) {
            console.log(error);
          }
          function renderButton() {
            gapi.signin2.render('my-signin2', {
              'scope': 'profile email',
              'width': 300,
              'height': 50,
              'longtitle': true,
              'theme': 'dark',
              'onsuccess': onSuccess,
              'onfailure': onFailure

            });
          }
        </script>

        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
      </body>
      </html>





@endsection

