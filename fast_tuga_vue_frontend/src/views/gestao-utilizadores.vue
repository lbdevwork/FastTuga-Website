<template>
  <div class="gestao-utilizadores-container">
      <lista-users ></lista-users>
  </div>
</template>

<script>
import HeaderSimples from '../components/header-simples'
import AppSidebar from '../components/sidebar'
import ListaUsers from '../components/lista-users'

export default {
  name: 'GestaoUtilizadores',
  components: {
    HeaderSimples,
    AppSidebar,
    ListaUsers,
  },
  metaInfo: {
    title: 'GestaoUtilizadores - FastTuga',
    meta: [
      {
        property: 'og:title',
        content: 'GestaoUtilizadores - FastTuga',
      },
    ],
  },
}
</script>

<style scoped>
.gestao-utilizadores-container {
  width: 100%;
  display: flex;
  overflow: auto;
  min-height: 100vh;
  align-items: center;
  flex-direction: column;
}
</style>
