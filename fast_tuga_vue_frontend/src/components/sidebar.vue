<template>
  <div class="sidebar-container">
    <div class="sidebar-perfil">
      <img
        :alt="imagemUserDinamica_alt"
        :src="imagemUserDinamica_src"
        class="sidebar-imagem-user-dinamica"
      />
      <span class="sidebar-nome-user-dinamico">{{ nomeUserDinamico }}</span>
      <div class="sidebar-container-acesso-login">
        <router-link
          to="/"
          class="sidebar-navlink botoes-com-border button botoes-sidebar-perfil"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-perfil">
            <path
              d="M768 640v-128h-320v-128h320v-128l192 192zM704 576v256h-320v192l-384-192v-832h704v320h-64v-256h-512l256 128v576h256v-192z"
            ></path>
          </svg>
          <span class="texto-botoes-perfil-sidebar">Logout</span>
        </router-link>
        <button class="botoes-com-border button botoes-sidebar-perfil" @click.prevent="$emit('perfil-toggle')">
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-perfil">
            <path
              d="M512 0c282.857 0 512 229.143 512 512 0 281.143-228 512-512 512-283.429 0-512-230.286-512-512 0-282.857 229.143-512 512-512zM865.714 772c53.143-73.143 85.143-162.857 85.143-260 0-241.714-197.143-438.857-438.857-438.857s-438.857 197.143-438.857 438.857c0 97.143 32 186.857 85.143 260 20.571-102.286 70.286-186.857 174.857-186.857 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c104.571 0 154.286 84.571 174.857 186.857zM731.429 402.286c0-121.143-98.286-219.429-219.429-219.429s-219.429 98.286-219.429 219.429 98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429z"
            ></path>
          </svg>
          <span class="texto-botoes-perfil-sidebar">Perfil</span>
        </button>
        <button class="botoes-com-border button botoes-sidebar-perfil" @click.prevent="$emit('login-toggle')">
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-perfil">
            <path
              d="M470 682v-128h-428v-84h428v-128l170 170zM896 128q36 0 61 25t25 61v598q0 34-26 59t-60 25h-768q-34 0-60-25t-26-59v-172h86v172h768v-600h-768v172h-86v-170q0-34 26-60t60-26h768z"
            ></path>
          </svg>
          <span class="texto-botoes-perfil-sidebar">Login</span>
        </button>
      </div>
    </div>
    <nav class="sidebar-navegacao">
      <div class="sidebar-container-utilizadores">
        <router-link
          to="/menu"
          class="sidebar-navlink01 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M224 0c-106.040 0-192 100.288-192 224 0 105.924 63.022 194.666 147.706 217.998l-31.788 518.124c-2.154 35.132 24.882 63.878 60.082 63.878h32c35.2 0 62.236-28.746 60.082-63.878l-31.788-518.124c84.684-23.332 147.706-112.074 147.706-217.998 0-123.712-85.96-224-192-224zM869.334 0l-53.334 320h-40l-26.666-320h-26.668l-26.666 320h-40l-53.334-320h-26.666v416c0 17.672 14.326 32 32 32h83.338l-31.42 512.122c-2.154 35.132 24.882 63.878 60.082 63.878h32c35.2 0 62.236-28.746 60.082-63.878l-31.42-512.122h83.338c17.674 0 32-14.328 32-32v-416h-26.666z"
            ></path>
          </svg>
          <span class="texto sidebar-text03">Menu</span>
        </router-link>
        <router-link
          to="/gestao-pedidos"
          class="sidebar-navlink02 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M918 490l64 64-298 300-194-192 64-64 130 128zM86 682v-84h340v84h-340zM598 256v86h-512v-86h512zM598 426v86h-512v-86h512z"
            ></path>
          </svg>
          <span class="texto sidebar-text04">Pedidos Prontos</span>
        </router-link>
      </div>
      <div class="sidebar-container-permissoes-utlizadores">
        <router-link
          to="/gestao-pedidos"
          class="sidebar-navlink03 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M634 492l-62 62 294 294-60 60-294-294-294 294-60-60 416-416q-24-48-7-112t67-114q62-62 138-71t122 37 37 123-71 139q-50 50-114 66t-112-8zM346 570l-180-180q-50-50-50-120t50-120l300 298z"
            ></path>
          </svg>
          <span class="texto sidebar-text05">Cozinha</span>
        </router-link>
        <router-link
          to="/gestao-pedidos"
          class="sidebar-navlink04 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M810 726q18 0 31-13t13-31-13-30-31-12-30 12-12 30 12 31 30 13zM810 554q52 0 90 38t38 90-38 90-90 38-90-38-38-90 38-90 90-38zM214 256h212v86h-212v-86zM298 726q18 0 31-13t13-31h-86q0 18 12 31t30 13zM810 298v144l-192 240h-192q0 52-38 90t-90 38-90-38-38-90h-84v-128q0-70 50-120t120-50h170v214h150l150-186v-114h-128v-84h128q34 0 59 25t25 59z"
            ></path>
          </svg>
          <span class="texto sidebar-text06">Entrega</span>
        </router-link>
      </div>
      <div class="sidebar-container-manager">
        <router-link
          to="/gestao-pedidos"
          class="sidebar-navlink05 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M585.143 804.571h365.714v-73.143h-365.714v73.143zM365.714 512h585.143v-73.143h-585.143v73.143zM731.429 219.429h219.429v-73.143h-219.429v73.143zM1024 694.857v146.286c0 20-16.571 36.571-36.571 36.571h-950.857c-20 0-36.571-16.571-36.571-36.571v-146.286c0-20 16.571-36.571 36.571-36.571h950.857c20 0 36.571 16.571 36.571 36.571zM1024 402.286v146.286c0 20-16.571 36.571-36.571 36.571h-950.857c-20 0-36.571-16.571-36.571-36.571v-146.286c0-20 16.571-36.571 36.571-36.571h950.857c20 0 36.571 16.571 36.571 36.571zM1024 109.714v146.286c0 20-16.571 36.571-36.571 36.571h-950.857c-20 0-36.571-16.571-36.571-36.571v-146.286c0-20 16.571-36.571 36.571-36.571h950.857c20 0 36.571 16.571 36.571 36.571z"
            ></path>
          </svg>
          <span class="texto sidebar-text07">Gestão de Pedidos</span>
        </router-link>
        <router-link
          to="/gestao-utilizadores"
          class="sidebar-navlink06 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1097.142857142857 1024" class="icons-sidebar-nav">
            <path
              d="M338.857 512c-59.429 1.714-113.143 27.429-151.429 73.143h-76.571c-57.143 0-110.857-27.429-110.857-90.857 0-46.286-1.714-201.714 70.857-201.714 12 0 71.429 48.571 148.571 48.571 26.286 0 51.429-4.571 76-13.143-1.714 12.571-2.857 25.143-2.857 37.714 0 52 16.571 103.429 46.286 146.286zM950.857 876c0 92.571-61.143 148-152.571 148h-499.429c-91.429 0-152.571-55.429-152.571-148 0-129.143 30.286-327.429 197.714-327.429 19.429 0 90.286 79.429 204.571 79.429s185.143-79.429 204.571-79.429c167.429 0 197.714 198.286 197.714 327.429zM365.714 146.286c0 80.571-65.714 146.286-146.286 146.286s-146.286-65.714-146.286-146.286 65.714-146.286 146.286-146.286 146.286 65.714 146.286 146.286zM768 365.714c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429zM1097.143 494.286c0 63.429-53.714 90.857-110.857 90.857h-76.571c-38.286-45.714-92-71.429-151.429-73.143 29.714-42.857 46.286-94.286 46.286-146.286 0-12.571-1.143-25.143-2.857-37.714 24.571 8.571 49.714 13.143 76 13.143 77.143 0 136.571-48.571 148.571-48.571 72.571 0 70.857 155.429 70.857 201.714zM1024 146.286c0 80.571-65.714 146.286-146.286 146.286s-146.286-65.714-146.286-146.286 65.714-146.286 146.286-146.286 146.286 65.714 146.286 146.286z"
            ></path>
          </svg>
          <span class="texto sidebar-text08">Gestão de Utilizadores</span>
        </router-link>
        <router-link
          to="/estatisticas"
          class="sidebar-navlink07 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M128 896h896v128h-1024v-1024h128zM288 832c-53.020 0-96-42.98-96-96s42.98-96 96-96c2.828 0 5.622 0.148 8.388 0.386l103.192-171.986c-9.84-15.070-15.58-33.062-15.58-52.402 0-53.020 42.98-96 96-96s96 42.98 96 96c0 19.342-5.74 37.332-15.58 52.402l103.192 171.986c2.766-0.238 5.56-0.386 8.388-0.386 2.136 0 4.248 0.094 6.35 0.23l170.356-298.122c-10.536-15.408-16.706-34.036-16.706-54.11 0-53.020 42.98-96 96-96s96 42.98 96 96c0 53.020-42.98 96-96 96-2.14 0-4.248-0.094-6.35-0.232l-170.356 298.124c10.536 15.406 16.706 34.036 16.706 54.11 0 53.020-42.98 96-96 96s-96-42.98-96-96c0-19.34 5.74-37.332 15.578-52.402l-103.19-171.984c-2.766 0.238-5.56 0.386-8.388 0.386s-5.622-0.146-8.388-0.386l-103.192 171.986c9.84 15.068 15.58 33.060 15.58 52.4 0 53.020-42.98 96-96 96z"
            ></path>
          </svg>
          <span class="texto sidebar-text09">Estatisticas</span>
        </router-link>
      </div>
    </nav>
    <nav class="sidebar-navegacao1">
      <div class="sidebar-container-utilizadores1">
        <router-link
          to="/menu"
          class="sidebar-navlink08 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M224 0c-106.040 0-192 100.288-192 224 0 105.924 63.022 194.666 147.706 217.998l-31.788 518.124c-2.154 35.132 24.882 63.878 60.082 63.878h32c35.2 0 62.236-28.746 60.082-63.878l-31.788-518.124c84.684-23.332 147.706-112.074 147.706-217.998 0-123.712-85.96-224-192-224zM869.334 0l-53.334 320h-40l-26.666-320h-26.668l-26.666 320h-40l-53.334-320h-26.666v416c0 17.672 14.326 32 32 32h83.338l-31.42 512.122c-2.154 35.132 24.882 63.878 60.082 63.878h32c35.2 0 62.236-28.746 60.082-63.878l-31.42-512.122h83.338c17.674 0 32-14.328 32-32v-416h-26.666z"
            ></path>
          </svg>
          <span class="texto sidebar-text10">Menu</span>
        </router-link>
        <router-link
          to="/gestao-pedidos"
          class="sidebar-navlink09 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M918 490l64 64-298 300-194-192 64-64 130 128zM86 682v-84h340v84h-340zM598 256v86h-512v-86h512zM598 426v86h-512v-86h512z"
            ></path>
          </svg>
          <span class="texto sidebar-text11">Pedidos Prontos</span>
        </router-link>
      </div>
      <div class="sidebar-container-permissoes-utlizadores1">
        <router-link
          to="/gestao-pedidos"
          class="sidebar-navlink10 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M634 492l-62 62 294 294-60 60-294-294-294 294-60-60 416-416q-24-48-7-112t67-114q62-62 138-71t122 37 37 123-71 139q-50 50-114 66t-112-8zM346 570l-180-180q-50-50-50-120t50-120l300 298z"
            ></path>
          </svg>
          <span class="texto sidebar-text12">Cozinha</span>
        </router-link>
        <router-link
          to="/gestao-pedidos"
          class="sidebar-navlink11 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M810 726q18 0 31-13t13-31-13-30-31-12-30 12-12 30 12 31 30 13zM810 554q52 0 90 38t38 90-38 90-90 38-90-38-38-90 38-90 90-38zM214 256h212v86h-212v-86zM298 726q18 0 31-13t13-31h-86q0 18 12 31t30 13zM810 298v144l-192 240h-192q0 52-38 90t-90 38-90-38-38-90h-84v-128q0-70 50-120t120-50h170v214h150l150-186v-114h-128v-84h128q34 0 59 25t25 59z"
            ></path>
          </svg>
          <span class="texto sidebar-text13">Entrega</span>
        </router-link>
      </div>
      <div class="sidebar-container-manager1">
        <router-link
          to="/gestao-pedidos"
          class="sidebar-navlink12 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M585.143 804.571h365.714v-73.143h-365.714v73.143zM365.714 512h585.143v-73.143h-585.143v73.143zM731.429 219.429h219.429v-73.143h-219.429v73.143zM1024 694.857v146.286c0 20-16.571 36.571-36.571 36.571h-950.857c-20 0-36.571-16.571-36.571-36.571v-146.286c0-20 16.571-36.571 36.571-36.571h950.857c20 0 36.571 16.571 36.571 36.571zM1024 402.286v146.286c0 20-16.571 36.571-36.571 36.571h-950.857c-20 0-36.571-16.571-36.571-36.571v-146.286c0-20 16.571-36.571 36.571-36.571h950.857c20 0 36.571 16.571 36.571 36.571zM1024 109.714v146.286c0 20-16.571 36.571-36.571 36.571h-950.857c-20 0-36.571-16.571-36.571-36.571v-146.286c0-20 16.571-36.571 36.571-36.571h950.857c20 0 36.571 16.571 36.571 36.571z"
            ></path>
          </svg>
          <span class="texto sidebar-text14">Gestão de Pedidos</span>
        </router-link>
        <router-link
          to="/gestao-utilizadores"
          class="sidebar-navlink13 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1097.142857142857 1024" class="icons-sidebar-nav">
            <path
              d="M338.857 512c-59.429 1.714-113.143 27.429-151.429 73.143h-76.571c-57.143 0-110.857-27.429-110.857-90.857 0-46.286-1.714-201.714 70.857-201.714 12 0 71.429 48.571 148.571 48.571 26.286 0 51.429-4.571 76-13.143-1.714 12.571-2.857 25.143-2.857 37.714 0 52 16.571 103.429 46.286 146.286zM950.857 876c0 92.571-61.143 148-152.571 148h-499.429c-91.429 0-152.571-55.429-152.571-148 0-129.143 30.286-327.429 197.714-327.429 19.429 0 90.286 79.429 204.571 79.429s185.143-79.429 204.571-79.429c167.429 0 197.714 198.286 197.714 327.429zM365.714 146.286c0 80.571-65.714 146.286-146.286 146.286s-146.286-65.714-146.286-146.286 65.714-146.286 146.286-146.286 146.286 65.714 146.286 146.286zM768 365.714c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429zM1097.143 494.286c0 63.429-53.714 90.857-110.857 90.857h-76.571c-38.286-45.714-92-71.429-151.429-73.143 29.714-42.857 46.286-94.286 46.286-146.286 0-12.571-1.143-25.143-2.857-37.714 24.571 8.571 49.714 13.143 76 13.143 77.143 0 136.571-48.571 148.571-48.571 72.571 0 70.857 155.429 70.857 201.714zM1024 146.286c0 80.571-65.714 146.286-146.286 146.286s-146.286-65.714-146.286-146.286 65.714-146.286 146.286-146.286 146.286 65.714 146.286 146.286z"
            ></path>
          </svg>
          <span class="texto sidebar-text15">Gestão de Utilizadores</span>
        </router-link>
        <router-link
          to="/estatisticas"
          class="sidebar-navlink14 button botoes-sidebar-nav botoes-troca-cor-efeito-hover-sidebar"
        >
          <svg viewBox="0 0 1024 1024" class="icons-sidebar-nav">
            <path
              d="M128 896h896v128h-1024v-1024h128zM288 832c-53.020 0-96-42.98-96-96s42.98-96 96-96c2.828 0 5.622 0.148 8.388 0.386l103.192-171.986c-9.84-15.070-15.58-33.062-15.58-52.402 0-53.020 42.98-96 96-96s96 42.98 96 96c0 19.342-5.74 37.332-15.58 52.402l103.192 171.986c2.766-0.238 5.56-0.386 8.388-0.386 2.136 0 4.248 0.094 6.35 0.23l170.356-298.122c-10.536-15.408-16.706-34.036-16.706-54.11 0-53.020 42.98-96 96-96s96 42.98 96 96c0 53.020-42.98 96-96 96-2.14 0-4.248-0.094-6.35-0.232l-170.356 298.124c10.536 15.406 16.706 34.036 16.706 54.11 0 53.020-42.98 96-96 96s-96-42.98-96-96c0-19.34 5.74-37.332 15.578-52.402l-103.19-171.984c-2.766 0.238-5.56 0.386-8.388 0.386s-5.622-0.146-8.388-0.386l-103.192 171.986c9.84 15.068 15.58 33.060 15.58 52.4 0 53.020-42.98 96-96 96z"
            ></path>
          </svg>
          <span class="texto sidebar-text16">Estatisticas</span>
        </router-link>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: 'sidebarnav',
  props: {
    imagemUserDinamica_src: {
      type: String,
      default:
        'https://images.unsplash.com/photo-1562159278-1253a58da141?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDIyfHxtYW4lMjBwb3J0dHJhaXR8ZW58MHx8fHwxNjI3MjkzNTM1&ixlib=rb-1.2.1&w=1500',
    },
    imagemUserDinamica_alt: {
      type: String,
      default: 'image',
    },
    nomeUserDinamico: {
      type: String,
      default: 'John Doe',
    },
  }
}
</script>

<style scoped>
.sidebar-container {
  width: 20%;
  height: calc(100vh - 4rem);
  display: flex;
  position: sticky;
  flex-grow: 1;
  align-self: stretch;
  background: rebeccapurple;
  flex-direction: column;
  top: 4rem;
}
.sidebar-perfil {
  width: 100%;
  height: 25%;
  display: flex;
  align-items: center;
  flex-direction: column;
  background-color: rebeccapurple;
  
}
.sidebar-imagem-user-dinamica {
  width: 5rem;
  height: 5rem;
  margin-top: var(--dl-space-space-unit);
  object-fit: cover;
  border-radius: var(--dl-radius-radius-round);
}
.sidebar-nome-user-dinamico {
  color: var(--dl-color-pimary-900);
  font-size: 1.15rem;
  font-style: normal;
  font-weight: 600;
  margin-bottom: 0.25rem;
}
.sidebar-container-acesso-login {
  width: 90%;
  height: 33%;
  margin: var(--dl-space-space-halfunit);
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.sidebar-navlink {
  text-decoration: none;
}
.sidebar-navegacao {
  width: 100%;
  height: 75%;
  display: flex;
  padding-top: var(--dl-space-space-unit);
  flex-direction: column;
  justify-content: flex-start;
  background-color: rebeccapurple;
}
.sidebar-container-utilizadores {
  flex: 0 0 auto;
  width: 100%;
  display: flex;
  flex-direction: column;
}
.sidebar-navlink01 {
  text-decoration: none;
}
.sidebar-navlink02 {
  text-decoration: none;
}
.sidebar-container-permissoes-utlizadores {
  flex: 0 0 auto;
  width: 100%;
  display: flex;
  flex-direction: column;
}
.sidebar-navlink03 {
  text-decoration: none;
}
.sidebar-navlink04 {
  text-decoration: none;
}
.sidebar-container-manager {
  flex: 0 0 auto;
  width: 100%;
  display: flex;
  flex-direction: column;
}
.sidebar-navlink05 {
  text-decoration: none;
}
.sidebar-navlink06 {
  text-decoration: none;
}
.sidebar-navlink07 {
  text-decoration: none;
}
.sidebar-navegacao1 {
  width: 100%;
  height: 75%;
  display: none;
  padding-top: var(--dl-space-space-unit);
  flex-direction: column;
  justify-content: flex-start;
  background-color: rebeccapurple;
}
.sidebar-container-utilizadores1 {
  flex: 0 0 auto;
  width: 100%;
  display: flex;
  flex-direction: column;
}
.sidebar-navlink08 {
  text-decoration: none;
}
.sidebar-navlink09 {
  text-decoration: none;
}
.sidebar-container-permissoes-utlizadores1 {
  flex: 0 0 auto;
  width: 100%;
  display: flex;
  flex-direction: column;
}
.sidebar-navlink10 {
  text-decoration: none;
}
.sidebar-navlink11 {
  text-decoration: none;
}
.sidebar-container-manager1 {
  flex: 0 0 auto;
  width: 100%;
  display: flex;
  flex-direction: column;
}
.sidebar-navlink12 {
  text-decoration: none;
}
.sidebar-navlink13 {
  text-decoration: none;
}
.sidebar-navlink14 {
  text-decoration: none;
}


@media(max-width: 991px) {
  .sidebar-container {
    padding: 1rem;
  }
  .sidebar-perfil {
    width: auto;
    height: 25%;
    padding: var(--dl-space-space-halfunit);
    border-color: var(--dl-color-gray-black);
    border-width: 0.25rem;
    border-radius: 2rem;
    flex-direction: column;
  }
  .sidebar-imagem-user-dinamica {
    display: none;
  }
  .sidebar-nome-user-dinamico {
    display: none;
  }
  .sidebar-container-acesso-login {
    width: auto;
    height: auto;
    margin: 0;
    flex-direction: column;
  }
  .sidebar-navegacao {
    width: auto;
    padding: var(--dl-space-space-halfunit);
    margin-top: 1rem;
    border-color: var(--dl-color-gray-black);
    border-width: 0.25rem;
    border-radius: 2rem;
  }
  .sidebar-container-utilizadores {
    width: auto;
    height: auto;
    align-self: center;
    flex-direction: column;
  }
  .sidebar-text03 {
    display: none;
  }
  .sidebar-text04 {
    display: none;
  }
  .sidebar-container-permissoes-utlizadores {
    width: auto;
    height: 100%;
    align-self: center;
    flex-direction: column;
  }
  .sidebar-text05 {
    display: none;
  }
  .sidebar-text06 {
    display: none;
  }
  .sidebar-container-manager {
    width: auto;
    height: auto;
    align-self: center;
    flex-direction: column;
  }
  .sidebar-text07 {
    display: none;
  }
  .sidebar-text08 {
    display: none;
  }
  .sidebar-text09 {
    display: none;
  }
  .sidebar-navegacao1 {
    flex: 1 1 auto;
    width: auto;
    padding: var(--dl-space-space-halfunit);
    border-color: var(--dl-color-gray-black);
    border-width: 0.25rem;
    align-content: center;
    border-radius: 2rem;
    flex-direction: row;
    justify-content: center;
  }
  .sidebar-container-utilizadores1 {
    width: auto;
    height: auto;
    align-self: center;
    flex-direction: row;
  }
  .sidebar-text10 {
    display: none;
  }
  .sidebar-text11 {
    display: none;
  }
  .sidebar-container-permissoes-utlizadores1 {
    width: auto;
    height: 100%;
    align-self: center;
    flex-direction: row;
  }
  .sidebar-text12 {
    display: none;
  }
  .sidebar-text13 {
    display: none;
  }
  .sidebar-container-manager1 {
    width: auto;
    height: auto;
    align-self: center;
    flex-direction: row;
  }
  .sidebar-text14 {
    display: none;
  }
  .sidebar-text15 {
    display: none;
  }
  .sidebar-text16 {
    display: none;
  }
}
@media(max-width: 479px) {
  .sidebar-container {
    padding: 0.2rem;
  }
  .sidebar-perfil {
    padding: 0.15rem;
  }
  .sidebar-navegacao {
    padding: 0.15rem;
  }
  .sidebar-navegacao1 {
    padding: 0.15rem;
  }
}
</style>
