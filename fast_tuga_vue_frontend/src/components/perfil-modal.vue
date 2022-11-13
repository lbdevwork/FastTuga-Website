<template>
  <div class="modals">
    <div class="header-modals">
      <div class="perfil-modal-container1">
        <span class="texto-logo">
          <span>FasTuga</span>
          <br />
          <span><span v-html="rawibhx"></span></span>
        </span>
      </div>
      <span class="perfil-modal-login">
        <span>Perfil</span>
        <br />
      </span>
    </div>
    <div class="containers-modals-inputs">
      <label class="labels-modals">Nome:</label>
      <input
        type="text"
        :placeholder="nome_perfil_input"
        class="input inputs-modals"
      />
    </div>
    <div class="containers-modals-inputs">
      <label class="labels-modals">Email:</label>
      <input
        type="text"
        :placeholder="email_perfil_input"
        class="input inputs-modals"
      />
    </div>
    <div class="containers-modals-inputs">
      <label class="labels-modals">Password:</label>
      <input
        type="text"
        :placeholder="password_perfil_input"
        class="input inputs-modals"
      />
    </div>
    <div class="containers-modals-botoes">
      <button class="botoes-modals button botoes-modals-cancelar">
        <span class="perfil-modal-text05 texto containers-modals-botoes-texto">
          <span>Cancelar</span>
          <br />
        </span>
      </button>
      <button class="botoes-modals botoes-modals-confirmar button">
        <span class="perfil-modal-text08 texto containers-modals-botoes-texto">
          <span>Confirmar</span>
          <br />
        </span>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'PerfilModal',
  props: {
    email_perfil_input: String,
    nome_perfil_input: String,
    password_perfil_input: String,
  },

  data() {
    return {
      rawibhx: ' ',
    }
  },
}
</script>

<style scoped>
.perfil-modal-container1 {
  flex: 0 0 auto;
  width: 100%;
  height: 75%;
  display: flex;
  align-items: flex-start;
}
.perfil-modal-login {
  color: var(--dl-color-pimary-900);
  align-self: center;
}
.perfil-modal-text05 {
  color: var(--dl-color-gray-white);
}
.perfil-modal-text08 {
  color: var(--dl-color-gray-white);
}
@media(max-width: 767px) {
  .perfil-modal-text08 {
    width: auto;
  }
}
</style>
