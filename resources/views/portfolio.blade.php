@extends('layouts.simple')

@section('content')
  <v-container class="app-portfolio-space mb-10">
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
    </v-row>
  </v-container>
@stop
