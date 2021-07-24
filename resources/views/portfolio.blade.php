@extends('layouts.simple')

@section('content')
  <v-container class="app-portfolio-space mb-10">
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
