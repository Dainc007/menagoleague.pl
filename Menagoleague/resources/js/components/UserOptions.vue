<template>
  <div class="user-options">
    <div class="user-options__info">
      <p class="user-options__lvl user__option">LVL: {{lvl}}</p>
      <p class="user-options__exp user__option">{{exp}} XP</p>
      <p class="user-options__cash user__option">{{cash}} M$</p>
    </div>
    <div class="user-options__links-container">
      <a class="user-options__cart  user__option" href="#">
        <img :src="cartimage" alt="Shop">
      </a>
      <a class="user-options__profile  user__option" href="#">
        <img :src="profileimage" alt="Profile">
      </a>
    </div>
    
  </div>
</template>

<script>
export default {
  name: "UserOptions",
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

.user-options__info{
  display: flex;
  flex-direction: row;
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
  background-color: rgba(64, 64, 64, 1);
}

.user-options__cart{
  background-color: $component-bg;
}

.user-options__links-container{
  display: flex;
  flex-direction: row;
}

@media (max-width: 1440px){
  .user-options{
    height: 50px;

    font-size: 14px;

    &::before{
      content: '';
      border-bottom: 50px solid $component-bg;
      border-left: 25px solid transparent;
    }
  }

  .user__option{
    width: 100px;
  }

  .user-options__profile, .user-options__cart{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 80px;
  }

  img{
    width: 25px;
    height: auto;
  }
}

@media (max-width: 1024px) {
  .user-options{
    margin-top: 20px;
  }
}

@media (max-width: 600px) {
  .user-options{
    height: 70px;
    font-size: 12px;
    flex-direction: column;

    &::before{
      all: unset
    }
  }

  .user__option{
    width: calc(100% / 3);
    height: 35px;
  }

  .user-options__cart, .user-options__profile {
    width: 50%;
  }


  img{
    width: 20px;
    height: auto;
  }
}

</style>