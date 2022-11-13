<template>
  <div class="modals">
    <div class="header-modals">
      <div class="registar-modal-container1">
        <span class="texto-logo">
          <span>FasTuga</span>
          <br />
          <span><span v-html="raw9sh0"></span></span>
        </span>
      </div>
      <span class="registar-modal-login">
        <span>Registo</span>
        <br />
      </span>
    </div>
    <div class="containers-modals-inputs">
      <label class="labels-modals">Nome:</label>
      <input
        type="text"
        :placeholder="nome_registar_input"
        class="input inputs-modals"
      />
    </div>
    <div class="containers-modals-inputs">
      <label class="labels-modals">Email:</label>
      <input
        type="text"
        :placeholder="email_registar_input"
        class="input inputs-modals"
      />
    </div>
    <div class="containers-modals-inputs">
      <label class="labels-modals">Password:</label>
      <input
        type="text"
        :placeholder="password_registar_input"
        class="input inputs-modals"
      />
    </div>
    <div class="containers-modals-botoes">
      <button class="botoes-modals button botoes-modals-cancelar">
        <span class="registar-modal-text05 texto containers-modals-botoes-texto">
          <span>Cancelar</span>
          <br />
        </span>
      </button>
      <button class="botoes-modals botoes-modals-confirmar button">
        <span class="registar-modal-text08 texto containers-modals-botoes-texto">
          <span>Confirmar</span>
          <br />
        </span>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'RegistarModal',
  props: {
    email_registar_input: String,
    nome_registar_input: String,
    password_registar_input: String,
  },

  data() {
    return {
      raw9sh0: ' ',
    }
  },
}
</script>

<style scoped>
.registar-modal-container1 {
  flex: 0 0 auto;
  width: 100%;
  height: 75%;
  display: flex;
  align-items: flex-start;
}
.registar-modal-login {
  color: var(--dl-color-pimary-900);
  align-self: center;
}
.registar-modal-text05 {
  color: var(--dl-color-gray-white);
}
.registar-modal-text08 {
  color: var(--dl-color-gray-white);
}
@media(max-width: 767px) {
  .registar-modal-text08 {
    width: auto;
  }
}
</style>
