<template>
  <div class="item-pedido-container" >
    <div class="item-pedido-container-lista-user container-listas">
      <div class="container-listas-info item-pedido-container-pedido">
        <span class="item-pedido-n-pedido-dinamico texto">{{ pedido_nr }}</span>
      </div>
      <div class="container-listas-info item-pedido-container-estado">
        <span class="item-pedido-estado-pedido-dinamico texto">
          {{ pedido_estado }}
        </span>
      </div>
      <div class="item-pedido-container-acoes">
        <button class="listas-botoes button">
          <svg viewBox="0 0 1024 1024" class="icons-listas">
            <path
              d="M634 492l-62 62 294 294-60 60-294-294-294 294-60-60 416-416q-24-48-7-112t67-114q62-62 138-71t122 37 37 123-71 139q-50 50-114 66t-112-8zM346 570l-180-180q-50-50-50-120t50-120l300 298z"
            ></path>
          </svg>
          <span class="texto item-pedido-text">Preparar</span>
        </button>
        <button class="listas-botoes button">
          <svg viewBox="0 0 1024 1024" class="icons-listas">
            <path d="M384 692l452-454 60 60-512 512-238-238 58-60z"></path>
          </svg>
          <span class="texto item-pedido-text1">Pronto</span>
        </button>
        <button class="listas-botoes button">
          <svg viewBox="0 0 1024 1024" class="icons-listas">
            <path
              d="M18 572l60-60 238 238-60 60zM948 238l62 60-512 512-240-238 62-60 178 178zM768 298l-270 272-60-60 270-272z"
            ></path>
          </svg>
          <span class="texto item-pedido-text2">Levantar</span>
        </button>
        <button class="listas-botoes button">
          <svg viewBox="0 0 1024 1024" class="icons-listas">
            <path
              d="M844 94l180 180-664 664-360-360 180-180 180 180zM844 214l-484 484-180-178-60 58 240 240 544-544z"
            ></path>
          </svg>
          <span class="texto item-pedido-text3">
            Finalizar
            <span v-html="rawe8w5"></span>
          </span>
        </button>
        <button class="listas-botoes button">
          <svg viewBox="0 0 1024 1024" class="icons-listas">
            <path
              d="M512 170.667c-188.544 0-341.333 152.832-341.333 341.333s152.789 341.333 341.333 341.333 341.333-152.832 341.333-341.333-152.789-341.333-341.333-341.333zM670.165 609.835c16.683 16.683 16.683 43.648 0 60.331-8.32 8.32-19.243 12.501-30.165 12.501s-21.845-4.181-30.165-12.501l-97.835-97.835-97.835 97.835c-8.32 8.32-19.243 12.501-30.165 12.501s-21.845-4.181-30.165-12.501c-16.683-16.683-16.683-43.648 0-60.331l97.835-97.835-97.835-97.835c-16.683-16.683-16.683-43.648 0-60.331s43.648-16.683 60.331 0l97.835 97.835 97.835-97.835c16.683-16.683 43.648-16.683 60.331 0s16.683 43.648 0 60.331l-97.835 97.835 97.835 97.835z"
            ></path>
          </svg>
          <span class="texto item-pedido-text4">Cancelar</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ItemPedido',
  props: {
    pedido_nr: {
      type: String,
      default: '42',
    },
    pedido_estado: {
      type: String,
      default: 'Pronto',
    },
  },

  data() {
    return {
      rawe8w5: ' ',
    }
  },
}
</script>

<style scoped>
.item-pedido-container {
  width: 100%;
  height: 4rem;
  display: flex;
  position: relative;
  align-items: flex-start;
  border-radius: 1rem;
  flex-direction: row;
  justify-content: flex-start;
}
.item-pedido-container-lista-user {
  height: 4rem;
}
.item-pedido-n-pedido-dinamico {
  color: var(--dl-color-gray-white);
  font-size: 1.75rem;
}
.item-pedido-estado-pedido-dinamico {
  color: var(--dl-color-gray-white);
  display: flex;
  font-size: 1rem;
}
.item-pedido-container-acoes {
  flex: 0 0 auto;
  width: 50%;
  height: auto;
  display: flex;
  border-radius: 1rem;
  justify-content: space-between;
  background-color: var(--dl-color-pimary-laranjavivo);
}
.item-pedido-root-class-name {
  height: 100%;
}
@media(max-width: 767px) {
  .item-pedido-container-pedido {
    width: 20%;
  }
  .item-pedido-container-estado {
    width: 40%;
  }
  .item-pedido-container-acoes {
    width: 40%;
  }
  .item-pedido-text {
    display: none;
  }
  .item-pedido-text1 {
    display: none;
  }
  .item-pedido-text2 {
    display: none;
  }
  .item-pedido-text3 {
    display: none;
  }
  .item-pedido-text4 {
    display: none;
  }
}
</style>
