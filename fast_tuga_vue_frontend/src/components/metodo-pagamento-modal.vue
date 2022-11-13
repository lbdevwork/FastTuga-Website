<template>
  <div class="modals metodo-pagamento-modal-container">
    <div class="header-modals">
      <span class="texto-logo">
        <span>FasTuga</span>
        <br />
        <span><span v-html="rawhv98"></span></span>
      </span>
      <span class="metodo-pagamento-modal-login">Portal Pagamento</span>
    </div>
    <div class="metodo-pagamento-modal-container-metodos-pagamento">
      <button class="metodo-pagamento-modal-button button">
        <img
          :alt="visacard_image"
          src="https://seeklogo.com/images/V/visa-logo-6F4057663D-seeklogo.com.png"
          class="containers-metodoPagamento-imagens"
        />
      </button>
      <button class="metodo-pagamento-modal-button1 button">
        <img
          :alt="paypal_image"
          src="https://play-lh.googleusercontent.com/bDCkDV64ZPT38q44KBEWgicFt2gDHdYPgCHbA3knlieeYpNqbliEqBI90Wr6Tu8YOw"
          class="containers-metodoPagamento-imagens"
        />
      </button>
      <button class="metodo-pagamento-modal-button2 button">
        <img
          :alt="mbway_image"
          src="https://play-lh.googleusercontent.com/nDKhDELMEjag8qJ9aKAjfTSzWZKVg3tY2OZ-eo8Jp8hxYDgifCFQoNOqxDwTaAW-O8o"
          class="containers-metodoPagamento-imagens"
        />
      </button>
    </div>
    <div class="metodo-pagamento-modal-container-inputs-metodos-pagamento">
      <span class="metodo-pagamento-modal-text03 texto">
        <span>Selecione o método de pagamento.</span>
        <br />
        <span>De seguida introduza a informação pedida.</span>
        <br />
      </span>
      <div class="containers-modals-inputs">
        <label class="labels-modals">Nº Cartão VISA:</label>
        <input
          type="text"
          :placeholder="metodoPagamento_visa_input"
          class="input inputs-modals"
        />
      </div>
      <div class="containers-modals-inputs">
        <label class="labels-modals">Email:</label>
        <input
          type="text"
          :placeholder="metodoPagamento_email_input"
          class="input inputs-modals"
        />
      </div>
      <div class="containers-modals-inputs">
        <label class="labels-modals">Nº Telemóvel:</label>
        <input
          type="text"
          :placeholder="metodoPagamento_telemovel_input"
          class="input inputs-modals"
        />
      </div>
      <div class="containers-modals-botoes">
        <button class="botoes-modals button botoes-modals-cancelar">
          <span
            class="metodo-pagamento-modal-text08 texto containers-modals-botoes-texto"
          >
            <span>Cancelar</span>
            <br />
          </span>
        </button>
        <button class="botoes-modals botoes-modals-confirmar button">
          <span
            class="metodo-pagamento-modal-text11 texto containers-modals-botoes-texto"
          >
            <span>Confirmar</span>
            <br />
          </span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'MetodoPagamentoModal',
  props: {
    visacard_image: {
      type: String,
      default: 'image',
    },
    metodoPagamento_visa_input: String,
    paypal_image: {
      type: String,
      default: 'image',
    },
    mbway_image: {
      type: String,
      default: 'image',
    },
    metodoPagamento_email_input: String,
    metodoPagamento_telemovel_input: String,
  },

  data() {
    return {
      rawhv98: ' ',
    }
  },
}
</script>

<style scoped>
.metodo-pagamento-modal-login {
  color: var(--dl-color-pimary-900);
  align-self: center;
}
.metodo-pagamento-modal-container-metodos-pagamento {
  flex: 0 0 auto;
  width: 20rem;
  height: 5rem;
  display: flex;
  align-self: center;
  margin-top: var(--dl-space-space-unit);
  align-items: center;
  justify-content: space-between;
}
.metodo-pagamento-modal-button {
  width: 5rem;
  height: 5rem;
  display: flex;
  flex-direction: row;
  background-color: rebeccapurple;
}
.metodo-pagamento-modal-button1 {
  width: 5rem;
  height: 5rem;
  display: flex;
  flex-direction: row;
  background-color: rebeccapurple;
}
.metodo-pagamento-modal-button2 {
  width: 5rem;
  height: 5rem;
  display: flex;
  flex-direction: row;
  background-color: rebeccapurple;
}
.metodo-pagamento-modal-container-inputs-metodos-pagamento {
  width: 100%;
  height: 80%;
  display: flex;
  position: relative;
  align-self: center;
  align-items: center;
  flex-direction: column;
  justify-content: center;
}
.metodo-pagamento-modal-text03 {
  align-self: start;
  margin-left: 10%;
}
.metodo-pagamento-modal-text08 {
  color: var(--dl-color-gray-white);
}
.metodo-pagamento-modal-text11 {
  color: var(--dl-color-gray-white);
}
@media(max-width: 767px) {
  .metodo-pagamento-modal-container-metodos-pagamento {
    width: 80%;
  }
  .metodo-pagamento-modal-text11 {
    width: auto;
  }
}
@media(max-width: 479px) {
  .metodo-pagamento-modal-container {
    width: auto;
    height: auto;
  }
  .metodo-pagamento-modal-text03 {
    color: var(--dl-color-gray-white);
    width: 80%;
  }
}
</style>
