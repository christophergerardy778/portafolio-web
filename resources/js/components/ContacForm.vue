<template>
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

    <v-btn
      large
      depressed
      block
      color="primary"
      class="text-transformation-none"
    >
      Enviar
    </v-btn>
  </v-form>
</template>

<script>
export default {
  name: "ContacForm"
}
</script>

<style scoped>

</style>
