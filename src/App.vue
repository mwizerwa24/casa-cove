<template>
  <router-view/>
</template>
<script>

</script>
<style lang="scss">
::-webkit-scrollbar {
  width: 10px; /* width of the scrollbar */
}

::-webkit-scrollbar-track {
  background: #f1f1f1; /* color of the track */
}

::-webkit-scrollbar-thumb {
  border-radius: 20px;
  background: #888; /* color of the scrollbar handle */
}
#app {
  font-family: gabarito;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  width: 100%;
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
      font-weight: 500;
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
    &:hover{
      .dropdown-menu{
        opacity: 1;
        pointer-events: all;
      }
    }
    .all{
      display: flex;
      align-items: center;
      padding: 10px 20px;
      gap: 20px;
      cursor: pointer;
      justify-content: center;
      transition: .3s;
      border-radius: 10px;
      &:hover{
        background: #aaaaaa23;
        .dropdown-menu{
          z-index: 100;
          opacity: 1;
        }
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
    }
    .dropdown-menu{
      opacity: 0;
      transition: .3s;
      pointer-events: none;
      padding: 30px;
      position: absolute;
      top: 100%;
      right: 0;
      border-radius: 10px;
      background: rgb(42, 42, 42);
      height: fit-content;
      .close{
        width: 20px;
        border-radius: 50%;
        height: 20px;
        position: absolute;
        right: 10px;
        top: 10px;
        fill: #fff;

      }
      .drop-profile{
        padding: 20px 0;
        display: flex;
        justify-content: center;
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
          cursor: pointer;
          bottom: 0;
          fill: #fff;
          background: #000;
          border-radius: 50%;
          padding: 4px;
        }
      }
      h3{
        color: #fff;
        text-align: center;
      }
      .btns{
        display: flex;
        margin: 20px 0;
        gap: 5px;
        button{
          display: flex;
          justify-content: center;
          background: rgb(22, 22, 22);
          align-items: center;
          width: 180px;
          padding: 18px 7px;
          gap: 10px;
          border: none;
          cursor: pointer;
          &:hover{
            background: rgb(51, 51, 51);
          }
          svg{
            width: 20px;
          height: 20px;
            fill: #2067ae;
            border-radius: 50%;
          }
          p{
            color: #fff;
          }
        }
        .signout{
          border-radius: 30px 0 0 30px;
        }
        .terms{
          border-radius: 0 30px 30px 0 ;
        }
        .manage{
          border: 1px solid #fff;
          padding: 12px 30px;
          color: #2067ae;
          background: rgb(42, 42, 42);
          border-radius: 20px;
          display: block;
          font-size: .9rem;
          border: 1px #fff solid;
          margin: auto;
          &:hover{
            background: rgb(51, 51, 51);
          }
        }
      }
    }
  }
}
</style>
