<template>
  <div class="menu-list-container" >
    <span class="texto-logo">
      <span>Menu</span>
      <br />
    </span>
    <div class="menu-list-gallery">
      <menu-card ></menu-card>
      <menu-card
        image_src="https://images.unsplash.com/photo-1579551053957-ee77f9b970c7?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDQ2fHx3b29kc3xlbnwwfHx8fDE2MjY0NDc1ODg&amp;ixlib=rb-1.2.1&amp;w=1000"
        
      ></menu-card>
      <menu-card
        image_src="https://images.unsplash.com/photo-1425913397330-cf8af2ff40a1?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDN8fHdvb2RzfGVufDB8fHx8MTYyNjQ0NzU3Mw&amp;ixlib=rb-1.2.1&amp;w=1000"
        
      ></menu-card>
      <menu-card
        image_src="https://images.unsplash.com/photo-1439853949127-fa647821eba0?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDE4fHxuYXR1cmV8ZW58MHx8fHwxNjI2NDQ3ODAw&amp;ixlib=rb-1.2.1&amp;w=1000"
        
      ></menu-card>
      <menu-card
        image_src="https://images.unsplash.com/photo-1529948723647-8b7bd77b441c?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDExfHxjbGlmZnxlbnwwfHx8fDE2MjY0NDc4MjQ&amp;ixlib=rb-1.2.1&amp;w=1000"
        
      ></menu-card>
      <menu-card
        image_src="https://images.unsplash.com/photo-1553570739-330b8db8a925?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDI0fHxvY2VhbnxlbnwwfHx8fDE2MjY0NDc4ODQ&amp;ixlib=rb-1.2.1&amp;w=1000"
      
      ></menu-card>
    </div>
  </div>
</template>

<script>
import MenuCard from './menu-card'

export default {
  name: 'MenuList',
  props: {
  },
  components: {
    MenuCard,
  },
}
</script>

<style scoped>
.menu-list-container {
  width: 100%;
  height: 100%;
  display: flex;
  position: relative;
  flex-grow: 1;
  align-self: center;
  align-items: flex-start;
  flex-direction: column;
  background-color: rebeccapurple;
}
.menu-list-gallery {
  width: 100%;
  display: grid;
  padding: var(--dl-space-space-fiveunits);
  grid-gap: var(--dl-space-space-unit);
  position: relative;
  max-width: 1400px;
  align-self: center;
  border-color: var(--dl-color-pimary-laranjavivo);
  border-width: 0.25rem;
  border-radius: 5rem;
  grid-template-columns: 1fr 1fr;
}
.menu-list-root-class-name {
  right: -165px;
  width: 80%;
  bottom: -77px;
  position: static;
  align-self: flex-end;
}
@media(max-width: 991px) {
  .menu-list-gallery {
    grid-template-columns: 1fr 1fr;
  }
  .menu-list-root-class-name {
    top: -57px;
    left: -26px;
    width: 100%;
    height: auto;
    align-self: center;
  }
}
@media(max-width: 767px) {
  .menu-list-gallery {
    padding-left: 32px;
    padding-right: 32px;
    grid-template-columns: 1fr;
  }
}
@media(max-width: 479px) {
  .menu-list-gallery {
    padding-top: 32px;
    padding-left: var(--dl-space-space-unit);
    padding-right: var(--dl-space-space-unit);
    padding-bottom: 32px;
  }
}
</style>
