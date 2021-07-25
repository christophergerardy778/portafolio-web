<template>
  <v-form @submit.prevent="sendEmail" v-model="valid" ref="form">
    <v-alert
      :value="showSuccessAlert"
      color="green"
      dark
      transition="scale-transition"
    >
      Email enviado correctamente
    </v-alert>

    <v-alert
      :value="showErrorAlert"
      color="primady"
      dark
      transition="scale-transition"
    >
      Error al enviar email
    </v-alert>

    <v-text-field
      outlined
      label="Nombre"
      v-model="email.name"
      :rules="[rules.required]"
    />

    <v-text-field
      outlined
      type="email"
      label="Email"
      v-model="email.email"
      :rules="[rules.required, rules.email]"
    />

    <v-textarea
      outlined
      label="Mensaje"
      v-model="email.message"
      :rules="[rules.required, rules.min]"
    />

    <v-btn
      large
      depressed
      block
      color="primary"
      type="submit"
      class="text-transformation-none"
      :disabled="!valid"
      :loading="isLoading"
    >
      Enviar
    </v-btn>
  </v-form>
</template>

<script>
export default {
  name: "ContacForm",

  props: ["token"],

  data: () => ({
    email: {
      name: '',
      email: '',
      message: ''
    },

    valid: false,
    isLoading: false,
    showErrorAlert: false,
    showSuccessAlert: false,

    rules: {
      required: value => !!value || 'Campo requerido.',
      min: value => value.length >= 20 || 'Minimo 20 caracteres',
      email: value => {
        const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        return pattern.test(value) || 'Email no valido'
      },
    },
  }),

  methods: {
    async sendEmail() {
      if (this.valid) {
        try {
          this.isLoading = true;

          await fetch('http://127.0.0.1:8000/contact', {
            method: 'POST',
            body: JSON.stringify(this.email),
            headers: {
              'X-CSRF-TOKEN': this.token
            }
          });
          this.$refs.form.reset();
          this.showSuccessAlert = true;
        } catch (e) {
          console.log(e);
          this.showErrorAlert = true;
        } finally {
          this.isLoading = false;
          setTimeout(() => {
            this.showSuccessAlert = false;
            this.showErrorAlert = false;
          }, 1500);
        }
      }
    }
  }
}
</script>

<style scoped>

</style>
