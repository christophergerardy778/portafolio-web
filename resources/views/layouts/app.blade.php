<!doctype html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="follow"/>
  <meta name="robots" content="index"/>
  <meta name="author" content="Christopher Gerardy" />
  <meta name="description" content="Aprender, Crear y Enseñar ¡Hola! Soy Christopher Gerardy soy un desarrollador web me gusta mucho trabajar en backend y frontend " />
  <meta name="keywords" content="Desarrollador web, Desarrollo web, Angular, Node.js, Vue, PHP, Laravel, Figma, Fullstack, Javascript, Diseño"/>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>Christopher Gerardy - Desarrollador web 💻</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons" />
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
</head>
<body>
  <div id="app">
    <v-app>
      <navigation></navigation>
      <v-main>@yield('content')</v-main>
      <footer-component></footer-component>
    </v-app>
  </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
