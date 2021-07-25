@extends('layouts.app')

@section('content')
  <v-container class="app-full-height-page d-flex align-center" id="inicio">
    <v-row class="app-header">
      <v-col class="col-md-6 col-sm-12 text-center text-md-left">
        <h2 class="app-sub-title font-weight-thin mb-2">
          ¡Hola! Soy
        </h2>

        <h1 class="app-title-head font-weight-bold">
          Christopher Gerardy
        </h1>

        <h2 class="app-sub-title-2 font-weight-thin app-letter-space">
          Desarrollador web 💻
        </h2>

        <p class="app-description mt-4">
          Fullstack developer con pasión por la tecnología y resolver
          problemas con ayuda de la web y el diseño
        </p>

        <v-btn depressed large class="text-transformation-none mt-2" color="primary">
          Contactame
        </v-btn>
      </v-col>

      <v-col class="col-md-6 d-flex justify-center justify-md-end align-center app-image-center">
        <v-avatar width="200px" height="200px" class="app-image-me">
          <v-img src="{{ asset('/img/me.jpg') }}"></v-img>
        </v-avatar>
      </v-col>

    </v-row>
  </v-container>

  <div class="app-full-height-page d-flex align-center app-background" id="sobre_mi">
    <v-container>
      <v-row>
        <v-col class="col-md-6 app-text-secondary">
          <h2 class="app-sub-title-section font-weight-black text-black">
            Sobre mi 🤔
          </h2>

          <p>
            ¡Hola! mi nombre es Christopher Gerardy Andrade Lazcano
            <br>
            Soy desarrollador web fullstack 🚀
          </p>

          <p>
            Tengo conocimientos de programación web con Angular, Vue,
            servidores con Node js, MongoDB y MYSQL me dedico al desarrollo aplicaciones web
            funcionales y amigables con el usuario con ayuda
            del diseño de interfaces con otras herramientas como Figma 💻
          </p>

          <p>
            Soy mexicano y me gusta la tecnología en general
            todo lo que tiene que ver con programación web y móvil
          </p>

          <p>
            Estoy en la universidad estudio Ingeniería en
            sistemas computacionales me encanta aprender cosas nuevas sobre
            tecnología para luego enseñar sobre ella a mis
            amigos y compañeros de ahí viene mi frase celebre
            <i class="font-weight-black">"Aprender, Crear, Enseñar"</i>
          </p>
        </v-col>
      </v-row>
    </v-container>
  </div>

  <div class="app-full-height-page d-flex align-center justify-center my-10 my-md-0" id="portafolio">
    <v-container>
      <v-row>
        <v-col class="col-md-12">
          <h2 class="app-sub-title-section font-weight-black">
            Portafolio 💼
          </h2>

          <p class="app-text-secondary mt-2">
            Estos son algunos de los proyectos que he hecho yo solo como también algunos en los
            que he participado o he sido parte del equipo de desarrollo puede que sean muchos o pocos
            al momento trato de subirlos todos, pero de no poder hacerlo puedes verlos en mi
            <a href="https://github.com/christophergerardy778" class="text-decoration-none">GitHub</a>
          </p>
        </v-col>

        @foreach($projects as $project)
          <v-col class="col-12 col-md-4">
            <a href="{{ $project->project_url }}" target="_blank">
              <v-img
                class="rounded app-image"
                src="{{ asset($project->file_path) }}"
                alt="{{ asset($project->file_path) }}"
              ></v-img>
            </a>
          </v-col>
        @endforeach

        <v-col class="col-md-12 d-flex align-center justify-center">
          <a href="/portafolio" class="text-decoration-none">
            <v-btn outlined color="primary" class="text-transformation-none">
              Ver mas
            </v-btn>
          </a>
        </v-col>
      </v-row>
    </v-container>
  </div>

  <v-container class="app-full-height-page d-flex align-center justify-center mb-10 mb-md-10" id="contacto">
    <v-row>
      <v-col class="col-12 col-md-6 d-flex justify-center flex-column">
        <h2 class="app-sub-title-section font-weight-black">
          Contactame 👋
        </h2>

        <p class="app-text-secondary">
          Me gustaría participar en tus proyectos y ayudarte a ti y
          al mundo con esa gran idea o producto que tienes en mente
          (recuerda seguirme en Instagram es gratis 😏)
        </p>

        <div class="app-icon-social">
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
        </div>
      </v-col>

      <v-col class="col-md-6">
        <contact-form token="{{ csrf_token() }}"></contact-form>
      </v-col>
    </v-row>
  </v-container>
@stop
