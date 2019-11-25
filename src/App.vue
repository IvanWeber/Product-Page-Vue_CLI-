<template>
  <div id="app">
    <Header/>
    <div class="wrapper">
      <div class="container main-content">

        <div class="row row-1">
          <Slider/>
          <Tabs/>
        </div>

        <div class="row row-2">
          <OrderForm/>
        </div>

      </div>

      <Footer/>
    </div>
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Slider from './components/Slider.vue'
import Tabs from './components/Tabs.vue'
import OrderForm from './components/OrderForm.vue'
import Footer from './components/Footer.vue'

export default {
  name: 'app',
  components: {
    Header,
    Slider,
    Tabs,
    OrderForm,
    Footer
  }
}
</script>

<style>
#app {
}
</style>
