<template>
  <div class="user-options">
    <p class="user-options__lvl user__option">LVL: {{lvl}}</p>
    <p class="user-options__exp user__option">{{exp}} XP</p>
    <p class="user-options__cash user__option">{{cash}} M$</p>
    <a class="user-options__cart" href="#">
      <img :src="cartimage" alt="Shop">
    </a>
    <a class="user-options__profile" href="#">
      <img :src="profileimage" alt="Profile">
    </a>
  </div>
</template>

<script>
export default {
  props: {
    lvl: Number,
    exp: Number,
    cash: Number,
    cartimage: String,
    profileimage: String,
  }
}
</script>

<style lang="scss" scoped>
$component-bg: rgba(255, 253, 253, 0.7);

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.user-options{
  height: 60px;
  display: flex;
  justify-content: flex-end;
  line-height: 1.4;
  font-size: 16px;
  font-weight: 600;

  &::before{
    content: '';
    width: 20px;
    height: 0;
    border-bottom: 60px solid $component-bg;
    border-left: 40px solid transparent;
  }
}

.user__option{
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;

  width: 120px;
  background-color: $component-bg;
}

.user-options__profile, .user-options__cart{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 80px;
}

.user-options__profile{
  background-color: rgba(64, 64, 64, 1);;
}

.user-options__cart{
  background-color: $component-bg;
}

@media (max-width: 1200px){
  .user-options{
    transform: scale(0.8);
    transform-origin: 100% 0%;
  }
}
</style>