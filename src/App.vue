<template>
  <router-view/>
</template>
<script>

</script>
<style lang="scss">
#app {
  font-family: gabarito;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  width: 100vw;
}
nav {
  padding: 10px 30px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0 2px 16px 12px #00000017;
  background: #ffffffb5;
  backdrop-filter: blur(3px);
  .left{
    width: 270px;
    img{
      width: 100%;
      height: 100%;
    }
  }
  .center{
    display: flex;
    gap: 20px;
    a {
      font-weight: bold;
      padding: 10px;
      color: #000;
      transition: .3s ease-in-out;
      &.router-link-exact-active {
        color: #2067ae;
      }
      &:hover{
        color: #2067ae;
      }
    }
  }
  .right{
    position: relative;
    display: flex;
    align-items: center;
    padding: 10px;
    gap: 20px;
    justify-content: center;
    cursor: pointer;
    transition: .3s;
    border-radius: 10px;
    &:hover{
      background: #aaaaaa10;
    }
    .img{
      border: 1px gray solid;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      img{
          width: 100%;
          height: 100%;
          border-radius: 50%;
      }
    }
    .dropdown-menu{
      border: 1px red solid;
      position: absolute;
      top: 100%;
      background: rgb(42, 42, 42);
      .close{
        border: 1px red solid;
        width: 20px;
        height: 20px;
        position: absolute;
        right: 0;
        fill: #fff;
      }
      .drop-profile{
        border: 1px red solid;
        padding: 30px 4rem;
        .pp{
          border: 1px gray solid;
          border-radius: 50%;
          width: 80px;
          height: 80px;
          position: relative;
          background: #fff;
          img{
              width: 100%;
              height: 100%;
              border-radius: 50%;
          }
        }
        svg{
          width: 20px;
          height: 20px;
          position: absolute;
          right: 10px;
          bottom: 0;
          fill: #000;
        }
      }
      .btns{
        border: 1px red solid;
        button{
          svg{
            width: 20px;
          height: 20px;
          }
          p{}
        }
      }
    }
  }
}
</style>
