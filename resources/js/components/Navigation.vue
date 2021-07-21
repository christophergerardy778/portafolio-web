<template>
  <div>
    <v-navigation-drawer v-model="isActive" temporary app>
      <v-list-item class="mt-2">
        <div class="d-flex flex-column">
          <span class="app-logo-title">
            Christopher Gerardy
          </span>
          <span class="app-bar-subhead">
            Desarrollador web
          </span>
        </div>
      </v-list-item>

      <v-list>
        <v-divider />

        <v-list-item v-for="(item, i) of menuLinks" :key="i" link>
          <v-list-item-content>
            <v-list-item-title class="app-font-size">
              {{ item.title }}
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar elevation="0" class="app-bar-style" color="white" fixed>
      <div class="container app-bar-content">
        <div class="d-flex flex-column">
          <span class="app-logo-title">
            Christopher Gerardy
          </span>

          <span class="app-bar-subhead">
            Desarrollador web
          </span>
        </div>

        <div class="d-none d-md-flex">
          <v-btn
            v-for="(item, j) of menuLinks" :key="j"
            depressed class="menu-links"
            plain
            :ripple="false"
            :to="item.route"
          >
            {{ item.title }}
          </v-btn>
        </div>

        <div class="d-flex d-md-none">
          <v-btn icon @click="openDrawer">
            <v-icon>
              menu
            </v-icon>
          </v-btn>
        </div>
      </div>
    </v-app-bar>
  </div>
</template>

<script>
export default {
  name: "Navigation",

  data: () => ({
    isActive: null,
    menuLinks: [
      {
        title: 'Inicio',
        route: '',
      },
      {
        title: 'Contacto',
        route: '',
      },
      {
        title: 'Portafolio',
        route: '',
      },
      {
        title: 'Sobre mi',
        route: '',
      },
    ]
  }),

  methods: {
    openDrawer() {
      this.isActive = true;
    }
  }
}
</script>

<style scoped>
  .app-bar-style {
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25) !important;
  }

  .app-bar-content {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
  }

  .app-logo-title {
    font-weight: bold;
    font-size: 18px;
  }

  .app-bar-subhead {
    font-weight: 300;
    font-size: 12px;
    letter-spacing: 0.25em;
  }

  .app-font-size {
    font-size: 14px;
  }

  /deep/ .v-toolbar__content {
    padding: 0 !important;
  }
</style>
