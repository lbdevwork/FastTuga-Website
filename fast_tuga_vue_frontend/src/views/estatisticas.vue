<template>
  <div class="estatisticas-container"></div>
</template>

<script>
export default {
  name: 'Estatisticas',
  metaInfo: {
    title: 'Estatisticas - FastTuga',
    meta: [
      {
        property: 'og:title',
        content: 'Estatisticas - FastTuga',
      },
    ],
  },
}
</script>

<style scoped>
.estatisticas-container {
  width: 100%;
  display: flex;
  overflow: auto;
  min-height: 100vh;
  align-items: center;
  flex-direction: column;
}
</style>
