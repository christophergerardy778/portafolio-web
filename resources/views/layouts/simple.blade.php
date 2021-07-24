<!doctype html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="follow"/>
  <meta name="robots" content="index"/>
  <meta name="author" content="Christopher Gerardy" />
  <meta name="description" content="Aprender, Crear y Enseñar ¡Hola! Soy Christopher Gerardy soy un desarrollador web me gusta mucho trabajar en backend y frontend..." />
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
      <v-app-bar class="app-bar-style" color="white" fixed app>
        <div class="container app-bar-content">
          <a href="/" class="d-flex flex-column text-decoration-none">
            <span class="app-logo-title text-black font-weight-bold">
              Christopher Gerardy
            </span>

            <span class="app-bar-subhead app-text-secondary">
              Desarrollador web
            </span>
          </a>
        </div>
      </v-app-bar>

      <v-main>@yield('content')</v-main>

      <v-footer color="white" class="app-footer-style">
        <v-container>
          <v-row justify="center">
            <v-col class="col-12 col-md-6 d-flex justify-space-between">
             <a href="https://www.facebook.com/christopher.gerardy.7399" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/christopherge77" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.linkedin.com/in/christopher-gerardy" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://github.com/christophergerardy778" target="_blank">
                <i class="fab fa-git-alt"></i>
              </a>
              <a href="https://www.instagram.com/christopher.web.developer" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </v-col>
          </v-row>
        </v-container>
      </v-footer>
    </v-app>
  </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
