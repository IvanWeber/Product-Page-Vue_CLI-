<template>
  <div id="app">
    <Header/>
    <div class="container main-content">

      <div class="row row-1">
        <Slider/>
        <Tabs/>
      </div>

      <div class="row row-2">
        <OrderForm/>
      </div>

    </div>
  </div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
import Header from './components/Header.vue'
import Slider from './components/Slider.vue'
import Tabs from './components/Tabs.vue'
import OrderForm from './components/OrderForm.vue'

export default {
  name: 'app',
  components: {
    Header,
    Slider,
    Tabs,
    OrderForm
  }
}
</script>

<style>
#app {
  font-family:  "Helvetica Neue", Helvetica, Arial, sans-serif;
  /*font-family: 'Avenir', Helvetica, Arial, sans-serif;*/
  /*-webkit-font-smoothing: antialiased;*/
  /*-moz-osx-font-smoothing: grayscale;*/
  /*color: #2c3e50;*/
  /*margin-top: 60px;*/
}


</style>
