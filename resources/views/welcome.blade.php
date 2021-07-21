@extends('layouts.app')

@section('content')
  <v-container class="app-full-height-page d-flex align-center">
    <v-row>
      <v-col class="col-md-6">
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

      <v-col class="col-md-6 d-flex justify-end align-center">
        <v-avatar width="200px" height="200px">
          <v-img
            src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png"
          ></v-img>
        </v-avatar>
      </v-col>
    </v-row>
  </v-container>

  <v-container>
    <v-row>
      <v-col>
        <h1>Sobre mi</h1>
      </v-col>
    </v-row>
  </v-container>
@stop
