<template>
  <div class="flex flex-column">
      <appHeader v-on:sidebar-toggle="sideToggle" v-on:cart-toggle="cartModalToggle"></appHeader>
      <div class="flex">
        <appSidebar v-if="sidebarstate" @login-toggle="loginModalToggle" @perfil-toggle="perfilModalToggle"></appSidebar>
        <router-view/>
        <appCarrinhoModal v-if="cartModalState" @pagamento-toggle="pagamentoModalToggle"/>
        <appLoginModal v-if="loginModalState" @registar-toggle="registarModalToggle"/>
        <appPagamentoModal v-if="pagamentoModalState"/>
        <appRegistarModal v-if="registoModalState"/>
      </div>
  </div>
</template>

<script>
import { ref } from 'vue'
import sidebarnav from './components/sidebar.vue'
import HeaderSimples from './components/header-simples.vue'
import LoginModal from './components/login-modal.vue'
import carrinhoModal from './components/carrinho-modal.vue'
import registarModal from './components/registar-modal.vue'
import perfilModal from './components/perfil-modal.vue'
import pagamentoModal from './components/metodo-pagamento-modal.vue'


export default {
  name: 'FasTuga',
  components: {
    appHeader: HeaderSimples,
    appSidebar: sidebarnav,
    appLoginModal: LoginModal,
    appCarrinhoModal: carrinhoModal,
    appRegistarModal: registarModal,
    appPerfilModal: perfilModal,
    appPagamentoModal: pagamentoModal
  },
  data() {
    return {
      sidebarstate: false,
      loginModalState: false,
      cartModalState: false,
      registarModalState: false,
      perfilModalState: false,
      pagamentoModalState: false
    }
  },
  methods: {
    sideToggle() {
      this.sidebarstate = !this.sidebarstate 
    },
    cartModalToggle() {
      this.cartModalState = !this.cartModalState
    },
    loginModalToggle() {
      this.loginModalState = !this.loginModalState
    },
    registarModalToggle(){
      this.registarModalState = !this.registarModalState
    },
    perfilModalToggle() {
      this.perfilModalState = !this.perfilModalState
    },
    pagamentoModalToggle() {
      this.pagamentoModalState = !this.pagamentoModalState
    }
  },
}
</script>

