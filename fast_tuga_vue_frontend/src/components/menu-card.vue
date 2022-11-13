<template>
  <div class="menu-card-gallery-card">
    <img
      :alt="image_alt"
      :src="image_src"
      class="menu-card-imagem-item-dinamica"
    />
    <div class="menu-card-container-iterativo-item">
      <div class="menu-card-container-descricoes">
        <h2 class="menu-card-nome-item-dinamico texto texto-menu-card">
          {{ nomeItemDinamico }}
        </h2>
        <span class="menu-card-descricao-item-dinamico texto texto-menu-card">
          {{ descricaoItemDinamico }}
        </span>
      </div>
      <div class="menu-card-container-compra">
        <div class="menu-card-container-gerir-quantidade-item">
          <button class="menu-card-botao-menos-quantidade button">
            <svg
              viewBox="0 0 804.5714285714286 1024"
              class="icons-botoes-menuCard"
            >
              <path
                d="M804.571 420.571v109.714c0 30.286-24.571 54.857-54.857 54.857h-694.857c-30.286 0-54.857-24.571-54.857-54.857v-109.714c0-30.286 24.571-54.857 54.857-54.857h694.857c30.286 0 54.857 24.571 54.857 54.857z"
              ></path>
            </svg>
          </button>
          <span class="menu-card-quantidade-item texto">
            {{ quantidadeItem }}
          </span>
          <button class="menu-card-botao-mais-quantidadee button">
            <svg
              viewBox="0 0 804.5714285714286 1024"
              class="icons-botoes-menuCard"
            >
              <path
                d="M804.571 420.571v109.714c0 30.286-24.571 54.857-54.857 54.857h-237.714v237.714c0 30.286-24.571 54.857-54.857 54.857h-109.714c-30.286 0-54.857-24.571-54.857-54.857v-237.714h-237.714c-30.286 0-54.857-24.571-54.857-54.857v-109.714c0-30.286 24.571-54.857 54.857-54.857h237.714v-237.714c0-30.286 24.571-54.857 54.857-54.857h109.714c30.286 0 54.857 24.571 54.857 54.857v237.714h237.714c30.286 0 54.857 24.571 54.857 54.857z"
              ></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'MenuCard',
  props: {
    nomeItemDinamico: {
      type: String,
      default: 'hamburger',
    },
    image_src: {
      type: String,
      default:
        'https://images.unsplash.com/photo-1418065460487-3e41a6c84dc5?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDEyfHxmb3Jlc3R8ZW58MHx8fHwxNjI2MjUxMjg4&ixlib=rb-1.2.1&w=1500',
    },
    quantidadeItem: {
      type: String,
      default: '1',
    },
    image_alt: {
      type: String,
      default: 'image',
    },
    descricaoItemDinamico: {
      type: String,
      default: 'carne de vaca, xxxxxxxx, yyyyyyy',
    },
  },
}
</script>

<style scoped>
.menu-card-gallery-card {
  width: 100%;
  height: auto;
  display: flex;
  position: relative;
  align-items: center;
  border-color: var(--dl-color-pimary-laranjavivo);
  flex-direction: column;
  justify-content: center;
  background-color: white;
}
.menu-card-imagem-item-dinamica {
  width: 100%;
  height: 100%;
  object-fit: cover;
  background-color: white;
}
.menu-card-container-iterativo-item {
  flex: 0 0 auto;
  width: 100%;
  display: flex;
  align-items: flex-start;
}
.menu-card-container-descricoes {
  flex: 0 0 auto;
  width: 50%;
  height: auto;
  display: flex;
  align-self: flex-start;
  align-items: flex-start;
  flex-direction: column;
}
.menu-card-nome-item-dinamico {
  font-size: 1.5rem;
  align-self: center;
}
.menu-card-descricao-item-dinamico {
  margin-left: 15%;
}
.menu-card-container-compra {
  flex: 0 0 auto;
  width: 50%;
  height: 100%;
  display: flex;
  align-self: center;
  flex-direction: column;
  justify-content: center;
  background-color: white;
}
.menu-card-container-gerir-quantidade-item {
  flex: 0 0 auto;
  width: 100%;
  height: 100%;
  display: flex;
  padding: 0px;
  padding-left: var(--dl-space-space-unit);
  padding-right: var(--dl-space-space-unit);
  justify-content: space-around;
}
.menu-card-botao-menos-quantidade {
  display: flex;
  flex-direction: row;
}
.menu-card-quantidade-item {
  color: black;
  font-size: 1.5rem;
  font-weight: 700;
}
.menu-card-botao-mais-quantidadee {
  display: flex;
  flex-direction: row;
}






@media(max-width: 991px) {
  .menu-card-gallery-card {
    border-radius: var(--dl-radius-radius-radius50);
  }
}
@media(max-width: 767px) {
  .menu-card-gallery-card {
    flex-direction: column;
  }
  .menu-card-container-gerir-quantidade-item {
    padding: 0px;
  }
  .menu-card-quantidade-item {
    font-size: 1rem;
  }
}
</style>
