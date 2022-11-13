<template>
  <div class="carrinho-modal-container modals">
    <div class="carrinho-modal-container-item">
      <carrinho-card></carrinho-card>
    </div>
    <div class="carrinho-modal-container-descontos-e-total">
      <div class="carrinho-modal-container-pontos-acumulados">
        <span class="carrinho-modal-pontos-acumulados-estatico texto">
          <span>Pontos Acumulados:</span>
          <br />
        </span>
        <span class="carrinho-modal-pontos-acumulados-dinamico texto">
          {{ pontosAcumulados }}
        </span>
      </div>
      <div class="carrinho-modal-container-desconto">
        <span class="carrinho-modal-desconto-estatico texto">
          <span>Desconto 5$:</span>
          <br />
        </span>
        <input
          type="checkbox"
          checked="true"
          class="carrinho-modal-checkbox-desconto"
        />
      </div>
      <div class="carrinho-modal-container-total">
        <span class="carrinho-modal-total-estatico texto">Total:</span>
        <span class="carrinho-modal-total-dinamico texto">{{ text }}</span>
      </div>
    </div>
    <div class="carrinho-modal-container-botoes containers-modals-botoes">
      <button class="botoes-modals button botoes-modals-cancelar">
        <span class="carrinho-modal-text04 texto containers-modals-botoes-texto">
          <span>Cancelar</span>
          <br />
        </span>
      </button>
      <button class="botoes-modals botoes-modals-confirmar button" @click.prevent="$emit('pagamento-toggle')">
        <span class="carrinho-modal-text07 texto containers-modals-botoes-texto">
          <span>Confirmar</span>
          <br />
        </span>
      </button>
    </div>
  </div>
</template>

<script>
import CarrinhoCard from './carrinho-card'
import pagamentoModal from './metodo-pagamento-modal'


export default {
  name: 'CarrinhoModal',
  props: {
    text: {
      type: String,
      default: 'Text',
    },
    pontosAcumulados: {
      type: String,
      default: '1',
    },
    pagamentoModalState: false
  },
  components: {
    CarrinhoCard,
    carrinhoPagamentoModal: pagamentoModal
  },
  methods: {
    showModalPagamento() {
      this.pagamentoModalState = !this.pagamentoModalState
    }
  },
}
</script>

<style scoped>
.carrinho-modal-container {
  height: 50%;
  display: flex;
  align-items: flex-start;
  flex-direction: column;
}
.carrinho-modal-container-item {
  flex: 0 0 auto;
  width: 100%;
  display: flex;
  align-items: flex-start;
  flex-direction: column;
}
.carrinho-modal-container-descontos-e-total {
  flex: 0 0 auto;
  width: 100%;
  height: 30%;
  display: flex;
  align-items: flex-start;
  border-radius: var(--dl-radius-radius-radius50);
  flex-direction: column;
  background-color: var(--dl-color-pimary-laranjavivo);
}
.carrinho-modal-container-pontos-acumulados {
  flex: 0 0 auto;
  width: 100%;
  height: 33%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.carrinho-modal-pontos-acumulados-estatico {
  margin-left: var(--dl-space-space-halfunit);
}
.carrinho-modal-pontos-acumulados-dinamico {
  align-self: end;
  margin-right: var(--dl-space-space-halfunit);
}
.carrinho-modal-container-desconto {
  flex: 0 0 auto;
  width: 100%;
  height: 33%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.carrinho-modal-desconto-estatico {
  margin-left: var(--dl-space-space-halfunit);
}
.carrinho-modal-checkbox-desconto {
  width: 1.25rem;
  height: 1.25rem;
  align-self: center;
  margin-right: var(--dl-space-space-halfunit);
}
.carrinho-modal-container-total {
  flex: 0 0 auto;
  width: 100%;
  height: 33%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.carrinho-modal-total-estatico {
  margin-left: var(--dl-space-space-halfunit);
}
.carrinho-modal-total-dinamico {
  margin-right: var(--dl-space-space-halfunit);
}
.carrinho-modal-container-botoes {
  width: 100%;
  height: 10%;
  margin: 0;
  border-radius: var(--dl-radius-radius-radius50);
  background-color: var(--dl-color-pimary-laranjavivo);
}
.carrinho-modal-text04 {
  color: var(--dl-color-gray-white);
}
.carrinho-modal-text07 {
  color: var(--dl-color-gray-white);
}
@media(max-width: 767px) {
  .carrinho-modal-text07 {
    width: auto;
  }
}
</style>
