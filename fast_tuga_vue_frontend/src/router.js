import Vue from 'vue'
import Router from 'vue-router'
import Meta from 'vue-meta'

import GestaoPedidos from './views/gestao-pedidos'
import Menu from './views/menu'
import Home from './views/home'
import Estatisticas from './views/estatisticas'
import GestaoUtilizadores from './views/gestao-utilizadores'
import './style.css'

Vue.use(Router)
Vue.use(Meta)
export default new Router({
  mode: 'history',
  routes: [
    {
      name: 'GestaoPedidos',
      path: '/gestao-pedidos',
      component: GestaoPedidos,
    },
    {
      name: 'Menu',
      path: '/menu',
      component: Menu,
    },
    {
      name: 'Home',
      path: '/',
      component: Home,
    },
    {
      name: 'Estatisticas',
      path: '/estatisticas',
      component: Estatisticas,
    },
    {
      name: 'GestaoUtilizadores',
      path: '/gestao-utilizadores',
      component: GestaoUtilizadores,
    },
  ],
})
