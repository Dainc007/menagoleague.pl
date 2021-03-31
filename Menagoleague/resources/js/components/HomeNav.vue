<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="nav-container">
      <ul class="navbar-nav">
        <li class="nav-item" v-for="item in items" :key="item.name">
          <a class="nav-link" :href="item.link">
            {{item.name}}
          </a>
        </li>
      </ul>
    </div>
</nav>
</template>

<script>
export default {
  props: {
    items: Array
  }
}
</script>

<style lang="scss" scoped>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

nav{
  padding: 0;
  margin-top: 20px;
  align-self: flex-start;
}

.nav-container{
  padding: 0;
}

li{
  padding: 0 15px;
}

a{
  text-transform: uppercase;
  padding: 15px 0;
  font-size: 18px;
  font-weight: 600;
  color: rgba(73, 73, 73, 1) !important;
}
</style>