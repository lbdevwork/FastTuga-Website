<template>
  <div class="home-container">
    <div class="home-hero">
      <div class="home-container1">
        <div class="home-container2">
          <h1 class="home-text texto-logo">FasTuga Website</h1>
          <span class="home-text1">
            <span class="home-text2">
              Visite o nosso menu faça a sua compra online !
            </span>
            <br />
          </span>
          <router-link to="/menu" class="home-navlink button">
            <span class="home-text4">
              <span>Menu</span>
              <br />
            </span>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import HeaderSimples from '../components/header-simples'

export default {
  name: 'Home',
  components: {
    HeaderSimples,
  },
  metaInfo: {
    title: 'FastTuga',
    meta: [
      {
        property: 'og:title',
        content: 'FastTuga',
      },
    ],
  },
}
</script>

<style scoped>
.home-container {
  width: 100%;
  height: auto;
  display: flex;
  min-height: 100vh;
  align-items: flex-start;
  flex-direction: column;
}
.home-hero {
  flex: 1 1 auto;
  width: 100%;
  height: 80vh;
  display: flex;
  position: relative;
  align-items: center;
  flex-direction: column;
  background-size: cover;
  background-image: url("/playground_assets/pexels-pixabay-260922-1500h.jpg");
}
.home-container1 {
  left: 0px;
  width: 100%;
  bottom: 0px;
  height: 100%;
  display: flex;
  position: absolute;
  align-items: center;
  flex-direction: column;
  justify-content: center;
}
.home-container2 {
  width: 40%;
  height: 40%;
  display: flex;
  opacity: 0.85;
  align-self: center;
  padding-left: var(--dl-space-space-tripleunit);
  border-radius: var(--dl-radius-radius-round);
  padding-right: var(--dl-space-space-tripleunit);
  flex-direction: column;
  justify-content: center;
  background-color: rebeccapurple;
  border-top-left-radius: var(--dl-radius-radius-round);
  border-top-right-radius: var(--dl-radius-radius-round);
  border-bottom-left-radius: var(--dl-radius-radius-round);
  border-bottom-right-radius: var(--dl-radius-radius-round);
}
.home-text {
  color: var(--dl-color-gray-white);
  text-align: center;
}
.home-text1 {
  color: rgb(255, 255, 255);
  max-width: 600px;
  align-self: center;
  text-align: center;
  padding-top: var(--dl-space-space-triplequarter);
  padding-bottom: var(--dl-space-space-triplequarter);
}
.home-navlink {
  color: #ffffff;
  width: 35%;
  height: 20%;
  display: flex;
  position: relative;
  text-align: center;
  font-family: Arial;
  border-width: 0px;
  border-radius: 60%;
  flex-direction: row;
  text-decoration: none;
  background-color: #e92b2b;
}
.home-text4 {
  left: 0px;
  right: 0px;
  margin: auto;
  position: absolute;
  align-self: center;
  font-style: normal;
  text-align: center;
  font-weight: 700;
  line-height: -2;
}
@media(max-width: 767px) {
  .home-container2 {
    width: 55%;
  }
  .home-navlink {
    width: 50%;
  }
}
@media(max-width: 479px) {
  .home-container2 {
    width: 70%;
  }
  .home-text1 {
    display: none;
  }
  .home-text2 {
    display: none;
  }
  .home-navlink {
    width: 50%;
  }
}
</style>
