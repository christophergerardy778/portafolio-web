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

            <ul class="mt-2 app-list-style">
              <li
                class="white--text font-weight-light mt-4 app-cursor-pointer"
                v-for="(item, i) in menuLinks"
                :key="i"
                @click="scrollToSection(item.route)"
              >
                {{ item.title }}
              </li>
            </ul>
          </v-col>

          <v-col class="col-md-6">
            <h4 class="white--text">
              Contacto
            </h4>

            <ul class="mt-2 app-list-style">
              <li class="mt-4">
                <a
                  href="https://www.facebook.com/christopher.gerardy.7399"
                  target="_blank"
                  class="white--text white--text font-weight-light text-decoration-none"
                >
                  Facebook
                </a>
              </li>
              <li class="white--text font-weight-light mt-4">
                <a
                  href="https://www.instagram.com/christopher.web.developer"
                  target="_blank"
                  class="white--text white--text font-weight-light text-decoration-none"
                >
                  Instagram
                </a>
              </li>
              <li class="white--text font-weight-light mt-4">
                <a
                  href="https://twitter.com/christopherge77"
                  target="_blank"
                  class="white--text white--text font-weight-light text-decoration-none"
                >
                  Twitter
                </a>
              </li>
              <li class="white--text font-weight-light mt-4">
                <a
                  href="https://www.linkedin.com/in/christopher-gerardy"
                  target="_blank"
                  class="white--text white--text font-weight-light text-decoration-none"
                >
                  Linkedin
                </a>
              </li>
              <li class="white--text font-weight-light mt-4">
                <a
                  href="https://github.com/christophergerardy778"
                  class="white--text white--text font-weight-light text-decoration-none"
                  target="_blank"
                >
                  Github
                </a>
              </li>
            </ul>
          </v-col>
        </v-row>
      </v-container>
    </div>

    <div class="app-bg-secondary">
      <v-container>
        <v-row>
          <v-col class="text-center">
            🔥
            <span class="white--text ma-0 app-font-size-thin">
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
    name: "FooterComponent",

    data: () => ({
      isActive: null,
      menuLinks: [
        {
          title: 'Inicio',
          route: 'inicio',
        },
        {
          title: 'Sobre mi',
          route: 'sobre_mi',
        },
        {
          title: 'Portafolio',
          route: 'portafolio',
        },
        {
          title: 'Contacto',
          route: 'contacto',
        }
      ]
    }),

    methods: {
      openDrawer() {
        this.isActive = true;
      },

      scrollToSection(elementName) {
        window.scrollTo({
          top: document.getElementById(elementName).offsetTop,
          behavior: 'smooth'
        });

        this.isActive = false;
      }
    }
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

  .app-list-style {
    list-style-type: none;
    padding: 0;
    font-size: 14px;
  }

  .app-font-size-thin {
    font-size: 14px;
  }
</style>
