<template>
  <div id="app">
    <top-header></top-header>

    <div class="container">
      <home></home>
    </div>
  </div>
</template>

<script>

import TopHeader from './components/TopHeader'
import Home from './components/Home'

export default {
  name: 'App',
  components: {
    TopHeader, Home
  }

}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
