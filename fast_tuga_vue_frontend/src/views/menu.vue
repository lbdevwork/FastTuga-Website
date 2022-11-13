<template>
  <div class="menu-container">
      <menu-list ></menu-list>
  </div>
</template>

<script>
import HeaderSimples from '../components/header-simples'
import AppSidebar from '../components/sidebar'
import MenuList from '../components/menu-list'

export default {
  name: 'Menu',
  components: {
    HeaderSimples,
    AppSidebar,
    MenuList,
  },
  metaInfo: {
    title: 'Menu - FastTuga',
    meta: [
      {
        property: 'og:title',
        content: 'Menu - FastTuga',
      },
    ],
  },
}
</script>

<style scoped>
.menu-container {
  width: 100%;
  display: flex;
  overflow: auto;
  min-height: 100vh;
  align-items: flex-start;
  flex-direction: column;
  justify-content: flex-start;
  background-color: rebeccapurple;
}
.menu-container1 {
  flex-grow: 0;
}
</style>
