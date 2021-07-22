@extends('layouts.app')

@section('content')
  <v-container class="app-full-height-page d-flex align-center">
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
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu a
          proin vitae vitae, consectetur lacus in ultricies nulla.
        </p>

        <v-btn depressed large class="text-transformation-none mt-2" color="primary">
          Contactame
        </v-btn>
      </v-col>

      <v-col class="col-md-6 d-flex justify-center justify-md-end align-center app-image-center">
        <v-avatar width="200px" height="200px" class="app-image-me">
          <v-img
            src="https://media-exp1.licdn.com/dms/image/C4E03AQFKNou5AErvKA/profile-displayphoto-shrink_200_200/0/1616812083033?e=1631750400&v=beta&t=daRxzZbO05nvbLyZAX2X9O4lTCov7W23eSmXViLkAJw"
          ></v-img>
        </v-avatar>
      </v-col>

    </v-row>
  </v-container>

  <div class="mt-4 app-full-height-page d-flex align-center app-background">
    <v-container>
      <v-row>
        <v-col class="col-md-6 app-text-secondary">
          <h2 class="app-sub-title-section font-weight-black text-black">
            Sobre mi 🤔
          </h2>

          <p>
            ¡Hola! mi nombre es  Christopher Gerardy Andrade Lazcano
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
            Tengo conocimientos de programación web con Angular,
            Vue, servidores con Node js, MongoDB y MYSQL me dedico al desarrollo aplicaciones web
          </p>

          <p>
            me dedico al desarrollo aplicaciones web funcionales y amigables
            con el usuario con ayuda del diseño de interfaces con otras herramientas como Figma 💻
          </p>
        </v-col>
      </v-row>
    </v-container>
  </div>

  <v-container class="app-full-height-page mt-6 d-flex align-center">
    <v-row>
      <v-col class="col-md-12">
        <h2 class="app-sub-title-section font-weight-black">
          Portafolio 💼
        </h2>

        <p class="app-text-secondary mt-2">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
          dignissimos distinctio eligendi error illum in laboriosam minima nihil
          perspiciatis possimus qui quisquam, sed sequi sit sunt velit voluptates. Aspernatur, temporibus?
        </p>
      </v-col>

      <v-col class="col-12 col-md-4">
        <img
          class="rounded"
          src="https://pbs.twimg.com/media/E6sa_aiWQAI_FvX?format=jpg&name=medium"
          style="max-width: 100%"
          alt="proyect_image"
        >
      </v-col>

      <v-col class="col-12 col-md-4">
        <img
          class="rounded"
          src="https://pbs.twimg.com/media/E6sbEGaXIAAgHT_?format=jpg&name=medium"
          style="max-width: 100%"
          alt="proyect_image"
        >
      </v-col>

      <v-col class="col-12 col-md-4">
        <img
          class="rounded"
          src="https://pbs.twimg.com/media/E6SKl5pXEAkwSbb?format=jpg&name=4096x4096"
          style="max-width: 100%"
          alt="proyect_image"
        >
      </v-col>

      <v-col class="col-md-12 d-flex align-center justify-center">
        <v-btn outlined color="primary" class="text-transformation-none" large>
          Ver mas
        </v-btn>
      </v-col>
    </v-row>
  </v-container>

  <v-container class="app-full-height-page d-flex align-center justify-center">
    <v-row>
      <v-col class="col-12 col-md-6 d-flex justify-center flex-column">
        <h2 class="app-sub-title-section font-weight-black">
          Contactame 👋
        </h2>

        <p class="app-text-secondary">
          Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Accusamus at autem consequatur cumque,
          dolor doloribus eos error et
        </p>

        <div class="app-icon-social">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-linkedin-in"></i>
          <i class="fab fa-git-alt"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </v-col>

      <v-col class="col-md-6">
        <v-form>
          <v-text-field
            outlined
            label="Nombre"
          ></v-text-field>

          <v-text-field
            outlined
            label="Email"
          ></v-text-field>

          <v-textarea outlined label="Mensaje">
          </v-textarea>

          <v-btn large depressed block color="primary" class="text-transformation-none">
            Enviar
          </v-btn>
        </v-form>
      </v-col>
    </v-row>
  </v-container>

<!--  <v-container class="app-full-height-page d-flex align-center justify-center mt-8">
    <v-row>
      <v-col class="col-md-12 app-text-secondary">
        <h2 class="app-sub-title-section font-weight-black text-black">
          Habilidades tecnicas
        </h2>

        <p>
          Tengo conocimientos de programación web con Angular, Vue, servidores con Node js,
          MongoDB y MYSQL me dedico al desarrollo aplicaciones web funcionales y amigables con el
          usuario con ayuda del diseño de interfaces con otras herramientas como Figma
        </p>

        <v-chip-group column>
          <v-chip color="primary">
            Angular
          </v-chip>

          <v-chip color="primary">
            Vue js
          </v-chip>

          <v-chip color="primary">
            Laravel
          </v-chip>

          <v-chip color="primary">
            Angular
          </v-chip>

          <v-chip color="primary">
            Vue js
          </v-chip>

          <v-chip color="primary">
            Laravel
          </v-chip>

          <v-chip color="primary">
            Angular
          </v-chip>

          <v-chip color="primary">
            Vue js
          </v-chip>

          <v-chip color="primary">
            Laravel
          </v-chip>

          <v-chip color="primary">
            Angular
          </v-chip>

          <v-chip color="primary">
            Vue js
          </v-chip>

          <v-chip color="primary">
            Laravel
          </v-chip>
          <v-chip color="primary">
            Angular
          </v-chip>

          <v-chip color="primary">
            Vue js
          </v-chip>

          <v-chip color="primary">
            Laravel
          </v-chip>

        </v-chip-group>
      </v-col>
    </v-row>
  </v-container>-->
@stop
