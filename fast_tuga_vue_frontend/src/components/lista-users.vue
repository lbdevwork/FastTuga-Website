<template>
  <div class="componentes-litas" >
    <h1 class="lista-users-titulo-estatico">Lista de Utilizadores:</h1>
    <div class="lista-users-container1 container-listas-info">
      <div class="container-listas-info"><span class="texto">Email:</span></div>
      <div class="container-listas-info"><span class="texto">Foto:</span></div>
      <div class="lista-users-container-admin containers-acoes-individuais">
        <span class="texto">Acções:</span>
      </div>
    </div>
    <ul class="list">
      <li class="list-item">
        <item-user ></item-user>
      </li>
    </ul>
  </div>
</template>

<script>
import ItemUser from './item-user'

export default {
  name: 'ListaUsers',
  props: {
    image_alt: {
      type: String,
      default: 'image_cliente_id',
    },
    image_src: {
      type: String,
      default: 'https://play.teleporthq.io/static/svg/default-img.svg',
    },
  },
  components: {
    ItemUser,
  },
}
</script>

<style scoped>
.lista-users-titulo-estatico {
  color: var(--dl-color-gray-white);
  text-align: center;
}
.lista-users-container1 {
  width: 100%;
  height: 4rem;
}
.lista-users-container-admin {
  width: 50%;
  background-color: var(--dl-color-pimary-laranjavivo);
}

.lista-users-root-class-name1 {
  top: 3rem;
  left: 15rem;
  right: 15rem;
  bottom: 3rem;
  position: absolute;
  align-self: flex-start;
}
@media(max-width: 479px) {
  .lista-users-container1 {
    flex-direction: row;
  }
}
</style>
