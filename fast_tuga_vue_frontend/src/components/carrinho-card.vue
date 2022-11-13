<template>
  <div class="carrinho-card-container">
    <div class="carrinho-card-item-carrinho">
      <h2 class="carrinho-card-titulo-item-carrinho">Lorem ipsum</h2>
      <img
        alt="image"
        src="https://images.unsplash.com/photo-1512295767273-ac109ac3acfa?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fHllbGxvdyUyMHRlY2h8ZW58MHx8fHwxNjI2MjU1NDk0&amp;ixlib=rb-1.2.1&amp;w=1500"
        class="carrinho-card-imagem-item-carrinho"
      />
      <div class="carrinho-card-container-gerir-quantidade-item">
        <button class="carrinho-card-botao-menos-quantidade button">
          <svg viewBox="0 0 804.5714285714286 1024" class="carrinho-card-icon">
            <path
              d="M804.571 420.571v109.714c0 30.286-24.571 54.857-54.857 54.857h-694.857c-30.286 0-54.857-24.571-54.857-54.857v-109.714c0-30.286 24.571-54.857 54.857-54.857h694.857c30.286 0 54.857 24.571 54.857 54.857z"
            ></path>
          </svg>
        </button>
        <span class="texto">{{ QuantidadeItem }}</span>
        <button class="carrinho-card-botao-mais-quantidadee button">
          <svg viewBox="0 0 804.5714285714286 1024" class="carrinho-card-icon2">
            <path
              d="M804.571 420.571v109.714c0 30.286-24.571 54.857-54.857 54.857h-237.714v237.714c0 30.286-24.571 54.857-54.857 54.857h-109.714c-30.286 0-54.857-24.571-54.857-54.857v-237.714h-237.714c-30.286 0-54.857-24.571-54.857-54.857v-109.714c0-30.286 24.571-54.857 54.857-54.857h237.714v-237.714c0-30.286 24.571-54.857 54.857-54.857h109.714c30.286 0 54.857 24.571 54.857 54.857v237.714h237.714c30.286 0 54.857 24.571 54.857 54.857z"
            ></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CarrinhoCard',
  props: {
    QuantidadeItem: {
      type: String,
      default: '111',
    },
  },
}
</script>

<style scoped>
.carrinho-card-container {
  flex: 0 0 auto;
  width: 100%;
  height: auto;
  display: flex;
  position: relative;
  align-items: center;
  flex-direction: row;
}
.carrinho-card-item-carrinho {
  width: 100%;
  height: 50%;
  display: flex;
  padding: var(--dl-space-space-unit);
  box-shadow: 5px 5px 10px 0px rgba(18, 18, 18, 0.1);
  transition: 0.3s;
  align-items: center;
  border-radius: var(--dl-radius-radius-radius50);
  flex-direction: column;
  justify-content: center;
  background-color: var(--dl-color-pimary-laranjavivo);
}
.carrinho-card-item-carrinho:hover {
  transform: scale(1.02);
}
.carrinho-card-titulo-item-carrinho {
  height: 20%;
  align-self: center;
  justify-content: center;
}
.carrinho-card-imagem-item-carrinho {
  width: 5rem;
  height: 5rem;
  align-self: center;
  object-fit: cover;
  border-radius: 4px;
}
.carrinho-card-container-gerir-quantidade-item {
  flex: 0 0 auto;
  width: 50%;
  height: var(--dl-size-size-tripleunit);
  display: flex;
  align-self: center;
  align-items: center;
  justify-content: space-between;
}
.carrinho-card-botao-menos-quantidade {
  display: flex;
  flex-direction: row;
}
.carrinho-card-icon {
  width: 24px;
  height: 24px;
}
.carrinho-card-botao-mais-quantidadee {
  display: flex;
  flex-direction: row;
}
.carrinho-card-icon2 {
  width: 24px;
  height: 24px;
}
@media(max-width: 991px) {
  .carrinho-card-titulo-item-carrinho {
    align-self: center;
  }
  .carrinho-card-container-gerir-quantidade-item {
    width: auto;
    height: auto;
  }
}
@media(max-width: 767px) {
  .carrinho-card-titulo-item-carrinho {
    align-self: center;
  }
}
</style>
