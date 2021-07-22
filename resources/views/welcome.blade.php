@extends('layouts.app')

@section('content')
  <v-container class="app-full-height-page d-flex align-center">
    <v-row>
      <v-col class="col-md-6 col-sm-12">
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

      <v-col class="col-md-6 d-none d-md-flex justify-end align-center">
        <v-avatar width="200px" height="200px">
          <v-img
            src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png"
          ></v-img>
        </v-avatar>
      </v-col>

    </v-row>
  </v-container>

  <div class="mt-4 app-full-height-page d-flex align-center" style="background-color: #edf1ff;">
    <v-container>
      <v-row>
        <v-col class="col-md-6" style="font-size: 14px; color: #7B7B7B;">
          <h1 class="app-sub-title-section font-weight-black" style="color: #424242">
            Sobre mi
          </h1>

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

  <v-container class="mt-8">
    <v-row>
      <v-col class="col-md-12" style="font-size: 14px; color: #7B7B7B;">
        <h1 class="app-sub-title-section font-weight-black" style="color: #424242">
          Sobre mi
        </h1>

        <p>
          Tengo conocimientos de programación web con Angular, Vue, servidores con Node js,
          MongoDB y MYSQL me dedico al desarrollo aplicaciones web funcionales y amigables con el
          usuario con ayuda del diseño de interfaces con otras herramientas como Figma
        </p>

        <v-chip-group>
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
  </v-container>
@stop
