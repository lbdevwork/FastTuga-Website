<template>
  <div class="gestao-pedidos-container">
      <lista-pedidos
      ></lista-pedidos>
  </div>
</template>

<script>
import HeaderSimples from '../components/header-simples'
import AppSidebar from '../components/sidebar'
import ListaPedidos from '../components/lista-pedidos'

export default {
  name: 'GestaoPedidos',
  components: {
    HeaderSimples,
    AppSidebar,
    ListaPedidos,
  },
  metaInfo: {
    title: 'GestaoPedidos - FastTuga',
    meta: [
      {
        property: 'og:title',
        content: 'GestaoPedidos - FastTuga',
      },
    ],
  },
}
</script>

<style scoped>
.gestao-pedidos-container {
  width: 100%;
  display: flex;
  overflow: auto;
  background: rebeccapurple;
  min-height: 100vh;
  flex-direction: column;
}
@media(max-width: 479px) {
  .gestao-pedidos-container1 {
    overflow: hidden;
  }
}
</style>
