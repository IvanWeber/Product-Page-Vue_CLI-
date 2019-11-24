<template>
  <div id="app">
    <div class="container main-content">
      <div class="row row-1">
        <Slider/>
        <Tabs/>
      </div>
    </div>
  </div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
import Slider from './components/Slider.vue'
import Tabs from './components/Tabs.vue'

export default {
  name: 'app',
  components: {
    Slider,
    Tabs
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
