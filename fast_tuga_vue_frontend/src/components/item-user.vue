<template>
  <div class="item-user-container" >
    <div class="container-listas">
      <div class="container-listas-info item-user-container-email">
        <span class="item-user-email-user-dinamico texto">
          {{ utilizador_email }}
        </span>
        <button class="item-user-botao-copiar-email button">
          <svg viewBox="0 0 1024 1024" class="item-user-icon">
            <path
              d="M469.333 341.333c-35.328 0-67.413 14.379-90.496 37.504s-37.504 55.168-37.504 90.496v384c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h384c35.328 0 67.413-14.379 90.496-37.504s37.504-55.168 37.504-90.496v-384c0-35.328-14.379-67.413-37.504-90.496s-55.168-37.504-90.496-37.504zM469.333 426.667h384c11.776 0 22.4 4.736 30.165 12.501s12.501 18.389 12.501 30.165v384c0 11.776-4.736 22.4-12.501 30.165s-18.389 12.501-30.165 12.501h-384c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-384c0-11.776 4.736-22.4 12.501-30.165s18.389-12.501 30.165-12.501zM213.333 597.333h-42.667c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-384c0-11.776 4.736-22.4 12.501-30.165s18.389-12.501 30.165-12.501h384c11.776 0 22.4 4.736 30.165 12.501s12.501 18.389 12.501 30.165v42.667c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-42.667c0-35.328-14.379-67.413-37.504-90.496s-55.168-37.504-90.496-37.504h-384c-35.328 0-67.413 14.379-90.496 37.504s-37.504 55.168-37.504 90.496v384c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h42.667c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667z"
            ></path>
          </svg>
        </button>
      </div>
      <div class="container-listas-info">
        <img
          :alt="image_alt"
          :src="image_src"
          class="item-user-foto-user-dinamica"
        />
      </div>
      <div class="item-user-container-admin containers-acoes-individuais">
        <button class="listas-botoes button">
          <svg viewBox="0 0 1024 1024" class="item-user-icon2 icons-listas">
            <path
              d="M512 854q140 0 241-101t101-241q0-48-21-110t-51-100l-480 480q90 72 210 72zM170 512q0 48 21 110t51 100l480-480q-90-72-210-72-140 0-241 101t-101 241zM512 86q176 0 301 125t125 301-125 301-301 125-301-125-125-301 125-301 301-125z"
            ></path>
          </svg>
          <span class="texto item-user-text">Bloquear</span>
        </button>
        <button class="listas-botoes button">
          <svg viewBox="0 0 1024 1024" class="item-user-icon4 icons-listas">
            <path
              d="M660 874l-148-148 60-60 88 88 218-220 60 60zM470 512q-70 0-121-50t-51-120 51-121 121-51 120 51 50 121-50 120-120 50zM384 726l128 128h-384v-86q0-76 117-123t225-47q30 0 42 2z"
            ></path>
          </svg>
          <span class="texto item-user-text1">Desbloquear</span>
        </button>
        <button class="listas-botoes button">
          <svg viewBox="0 0 1024 1024" class="item-user-icon6 icons-listas">
            <path
              d="M512 170.667c-188.544 0-341.333 152.832-341.333 341.333s152.789 341.333 341.333 341.333 341.333-152.832 341.333-341.333-152.789-341.333-341.333-341.333zM670.165 609.835c16.683 16.683 16.683 43.648 0 60.331-8.32 8.32-19.243 12.501-30.165 12.501s-21.845-4.181-30.165-12.501l-97.835-97.835-97.835 97.835c-8.32 8.32-19.243 12.501-30.165 12.501s-21.845-4.181-30.165-12.501c-16.683-16.683-16.683-43.648 0-60.331l97.835-97.835-97.835-97.835c-16.683-16.683-16.683-43.648 0-60.331s43.648-16.683 60.331 0l97.835 97.835 97.835-97.835c16.683-16.683 43.648-16.683 60.331 0s16.683 43.648 0 60.331l-97.835 97.835 97.835 97.835z"
            ></path>
          </svg>
          <span class="texto item-user-text2">Eliminar</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ItemUser',
  props: {
    utilizador_email: {
      type: String,
      default: '@my.ipleiria.pt',
    },
    image_alt: {
      type: String,
      default: 'image_cliente_id',
    },
    image_src: {
      type: String,
      default: 'https://play.teleporthq.io/static/svg/default-img.svg',
    },
  },
}
</script>

<style scoped>
.item-user-container {
  width: 100%;
  height: 5rem;
  display: flex;
  position: relative;
  align-items: flex-start;
  border-radius: 1rem;
  flex-direction: row;
  justify-content: flex-start;
}
.item-user-email-user-dinamico {
  width: 75%;
  display: flex;
  justify-content: center;
}
.item-user-botao-copiar-email {
  width: var(--dl-size-size-unit);
  height: var(--dl-size-size-unit);
  display: flex;
  flex-direction: row;
}
.item-user-icon {
  width: 100%;
  height: 100%;
  align-self: center;
}
.item-user-foto-user-dinamica {
  width: 4rem;
  height: 4rem;
  align-self: center;
  object-fit: cover;
  border-radius: var(--dl-radius-radius-round);
}
.item-user-container-admin {
  width: 50%;
  justify-content: center;
  background-color: var(--dl-color-pimary-laranjavivo);
}
.item-user-icon2 {
  fill: var(--dl-color-pimary-900);
}
.item-user-icon4 {
  fill: var(--dl-color-pimary-900);
}
.item-user-icon6 {
  fill: var(--dl-color-pimary-900);
}
.item-user-root-class-name {
  left: 0px;
  bottom: 69px;
  position: absolute;
}

@media(max-width: 767px) {
  .item-user-icon2 {
    margin-left: 0;
  }
  .item-user-text {
    display: none;
  }
  .item-user-icon4 {
    margin-left: 0;
  }
  .item-user-text1 {
    display: none;
  }
  .item-user-icon6 {
    margin-left: 0;
  }
  .item-user-text2 {
    display: none;
  }
}
@media(max-width: 479px) {
  .item-user-container-email {
    width: 40%;
  }
  .item-user-container-admin {
    width: 35%;
  }
}
</style>
