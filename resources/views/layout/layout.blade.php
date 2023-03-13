<!DOCTYPE html>
<html><head>
   <meta charset="utf-8">
   <link rel="icon" href="/favicon.ico">
   <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
   <meta name="theme-color" content="#000000">
   <meta name="description" content="Web site created using create-php-starter-app using laravel">
   <link rel="apple-touch-icon" href="/icon/icon-192x192.png">
   <link href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">
   <title>Contentstack-PHP-Starter-App</title>
   <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>
  <body>
    <div id="root">
      <div class="App">
         <div class="layout">
  	@include('layout.header')
 
  		@yield('content') 
 
  	@include('layout.footer')
     </div>
      </div>
   </div>
  <script type="text/javascript">
        function codeAddress() {
            var d = document.getElementById(window.location.pathname);
            d.className += " active active";
        }
        window.onload = codeAddress;
   </script>
  </body>
</html>