<template>
  <div class="user-shield">
    <div class="user-shield__image-container">
      <img v-if="image !== null" :src="image" :alt="team" class="user-shield__image">
    </div>
    <div class="user-shield__names">
      <p>
        {{username}}
      </p>
      <p>
        {{team}}
      </p>
    </div>
    <div class="user-shield__overall-container">
      <p class="user-shield__overall">
        {{overall}}
      </p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    team: String,
    image: String,
    username: String,
    overall: Number
  },
}
</script>

<style lang="scss" scoped>
$component-bg: rgba(255, 253, 253, 0.7);

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.user-shield{
  height: 80px;
  display: flex;
  line-height: 1.4;

  > * {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  &::before{
    content: '';
    width: 20px;
    height: 0;
    border-bottom: 80px solid $component-bg;
    border-left: 40px solid transparent;
  }

  &::after{
    content: '';
    width: 20px;
    height: 0;
    border-top: 80px solid rgba(64, 64, 64, 1);
    border-right: 50px solid transparent;
  }
}

.user-shield__image-container{
  width: 80px;
  flex-direction: row;
  background-color: $component-bg;

  img{
    align-self: center;

    width: 50px;
    height: auto;
    max-height: 70px;
  }
}

.user-shield__names{
  width: 250px;
  padding-left: 10px;
  background-color: $component-bg;

  :nth-child(1){
    font-size: 18px;
    font-weight: 700;
  }

  :nth-child(2){
    font-size: 16px;
    font-weight: 600;
  }
}

.user-shield__overall-container{
  background-color: rgba(64, 64, 64, 1);
  color: rgba(219, 219, 219, 1);
  width: 80px;
  
  font-size: 38px;
  font-weight: 500;

  font-family: "EA Font", "Nunito", "Montserrat", "Arial", sans-serif;

  p{
    text-align: center;
    padding-left: 5px;
  }
}

@media (max-width: 500px) {
  .user-shield{
  height: 60px;
  display: flex;
  line-height: 1.4;

  > * {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  &::before{
    content: '';
    width: 20px;
    height: 0;
    border-bottom: 60px solid $component-bg;
    border-left: 40px solid transparent;
  }

  &::after{
    content: '';
    width: 20px;
    height: 0;
    border-top: 60px solid rgba(64, 64, 64, 1);
    border-right: 30px solid transparent;
  }
}

.user-shield__image-container{
  width: 50px;
  flex-direction: row;
  background-color: $component-bg;

  img{
    align-self: center;

    width: 30px;
    height: auto;
    max-height: 40px;
  }
}

.user-shield__names{
  width: 250px;
  padding-left: 10px;
  background-color: $component-bg;

  :nth-child(1){
    font-size: 14px;
    font-weight: 700;
  }

  :nth-child(2){
    font-size: 12px;
    font-weight: 600;
  }
}

.user-shield__overall-container{
  background-color: rgba(64, 64, 64, 1);
  color: rgba(219, 219, 219, 1);
  width: 50px;
  
  font-size: 22px;
  font-weight: 500;

  font-family: "EA Font", "Nunito", "Montserrat", "Arial", sans-serif;

  p{
    text-align: center;
    padding-left: 5px;
  }
}
}
</style>