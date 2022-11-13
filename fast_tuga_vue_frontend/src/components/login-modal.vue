<template>
  <div class="modals">
    <div class="header-modals">
      <div class="login-modal-container1">
        <span class="login-modal-logo LogoFastuga texto-logo">
          <span>FasTuga</span>
          <br />
          <span><span v-html="rawz15r"></span></span>
        </span>
      </div>
      <span class="login-modal-login-estatico">
        <span>Login</span>
        <br />
      </span>
    </div>
    <div class="containers-modals-inputs">
      <label class="labels-modals">Email:</label>
      <input
        type="text"
        :placeholder="email_login_input"
        class="input inputs-modals"
      />
    </div>
    <div class="containers-modals-inputs">
      <label class="labels-modals">Password:</label>
      <input
        type="text"
        :placeholder="password_login_input"
        class="input inputs-modals"
      />
    </div>
    <button class="login-modal-botao-recuperar-password button">
      <span class="login-modal-text05 texto">Esqueceu-se da password?</span>
    </button>
    <button class="login-modal-botao-recuperar-password button">
      <span class="login-modal-text05 texto">Registo</span>
    </button>
    <div class="containers-modals-botoes">
      <button class="botoes-modals button botoes-modals-cancelar">
        <span class="login-modal-text06 texto containers-modals-botoes-texto">
          <span>Cancelar</span>
          <br />
        </span>
      </button>
      <button class="botoes-modals botoes-modals-confirmar button">
        <span class="login-modal-text09 texto containers-modals-botoes-texto">
          <span>Confirmar</span>
          <br />
        </span>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LoginModal',
  props: {
    password_login_input: String,
    email_login_input: String,
  },

  data() {
    return {
      rawz15r: ' ',
    }
  },
}
</script>

<style scoped>
.login-modal-container1 {
  flex: 0 0 auto;
  width: 100%;
  height: 75%;
  display: flex;
  align-items: flex-start;
}
.login-modal-logo {
  color: var(--dl-color-pimary-900);
  width: 100%;
  align-self: stretch;
  font-style: normal;
  text-align: center;
}
.login-modal-login-estatico {
  color: var(--dl-color-pimary-900);
  align-self: center;
}
.login-modal-botao-recuperar-password {
  display: flex;
  flex-direction: row;
}
.login-modal-text05 {
  font-size: 1rem;
}
.login-modal-text06 {
  color: var(--dl-color-gray-white);
}
.login-modal-text09 {
  color: var(--dl-color-gray-white);
}
@media(max-width: 767px) {
  .login-modal-text09 {
    width: auto;
  }
}
</style>
