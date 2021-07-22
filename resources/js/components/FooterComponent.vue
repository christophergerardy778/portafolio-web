<template>
  <footer>
    <div class="app-bg-primary py-4">
      <v-container>
        <v-row>
          <v-col class="white--text">
            <div class="d-flex flex-column">
              <span class="app-logo-title">
                Christopher Gerardy
              </span>

              <span class="app-bar-subhead">
                Desarrollador web
              </span>
            </div>
          </v-col>
        </v-row>
        <v-row>
          <v-col class="col-md-6">
            <h4 class="white--text">
              Navegacion
            </h4>

            <ul class="mt-2" style="list-style-type: none; padding: 0; font-size: 14px">
              <li class="white--text font-weight-light mt-4">Inicio</li>
              <li class="white--text font-weight-light mt-4">Contacto</li>
              <li class="white--text font-weight-light mt-4">Portafolio</li>
              <li class="white--text font-weight-light mt-4">Sobre mi</li>
            </ul>
          </v-col>

          <v-col class="col-md-6">
            <h4 class="white--text">
              Contacto
            </h4>

            <ul class="mt-2" style="list-style-type: none; padding: 0; font-size: 14px">
              <li class="white--text font-weight-light mt-4">Facebook</li>
              <li class="white--text font-weight-light mt-4">Instagram</li>
              <li class="white--text font-weight-light mt-4">Twitter</li>
              <li class="white--text font-weight-light mt-4">Linkedin</li>
            </ul>
          </v-col>
        </v-row>
      </v-container>
    </div>

    <div class="app-bg-secondary">
      <v-container>
        <v-row>
          <v-col class="text-center">
            <span class="white--text ma-0" style="font-size: 14px">
              Aprender, Crear y Enseñar
            </span>
          </v-col>
        </v-row>
      </v-container>
    </div>

  </footer>
</template>

<script>
  export default {
    name: "FooterComponent"
  }
</script>

<style scoped>
  .app-logo-title {
    font-weight: bold;
    font-size: 18px;
  }

  .app-bar-subhead {
    font-weight: 300;
    font-size: 12px;
    letter-spacing: 0.25em;
  }
</style>
