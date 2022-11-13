<template>
  <div class="componentes-litas" >
    <h1 class="lista-pedidos-titulo-estatico">{{ tituloListaPedidos }}</h1>
    <div class="lista-pedidos-container1 container-listas-info">
      <div class="container-listas-info">
        <span class="texto">{{ text }}</span>
      </div>
      <div class="container-listas-info">
        <span class="texto">{{ text1 }}</span>
      </div>
      <div class="lista-pedidos-container-acoes container-listas-info">
        <span class="texto">Acções:</span>
      </div>
    </div>
    <ul class="lista-pedidos-ul list">
      <li class="list-item">
        <item-pedido ></item-pedido>
      </li>
    </ul>
  </div>
</template>

<script>
import ItemPedido from './item-pedido'

export default {
  name: 'ListaPedidos',
  props: {
    tituloListaPedidos: {
      type: String,
      default: 'Lista de Pedidos:',
    },
    text: {
      type: String,
      default: 'Pedido:',
    },
    text1: {
      type: String,
      default: 'Estado:',
    },
  },
  components: {
    ItemPedido,
  },
}
</script>

<style scoped>
.lista-pedidos-titulo-estatico {
  color: var(--dl-color-gray-white);
  text-align: center;
}
.lista-pedidos-container1 {
  flex: 0 0 auto;
  width: 100%;
  height: 4rem;
  display: flex;
  align-items: flex-start;
}
.lista-pedidos-container-acoes {
  width: 50%;
}
.lista-pedidos-ul {
  padding-left: 0px;
}
.lista-pedidos-root-class-name1 {
  top: 0px;
  right: 0px;
  width: 100%;
  height: auto;
  position: static;
  align-self: flex-start;
  background-color: var(--dl-color-pimary-900);
}
.lista-pedidos-root-class-name2 {
  top: 0px;
  right: 0px;
  width: 100%;
  height: auto;
  position: static;
  align-self: flex-start;
  background-color: var(--dl-color-pimary-900);
}
</style>
