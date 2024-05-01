<template>
  <nav>
     <div class="left">
      <router-link to="/"><img src="../assets/logo-000.png" alt="" srcset=""></router-link>
     </div>
     <div class="center">
        <router-link to="/">Home</router-link>
        <router-link to="/forsale">For Sale</router-link>
        <router-link to="/forrent">For Rent</router-link>
        <router-link to="/contactus">Contact Us</router-link>
     </div>
     <div class="right">
       <div class="img"><img src="../assets/fav-000.png" alt="" srcset=""></div>
       <h3>Administrator</h3>
       <div class="dropdown-menu">
          <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
          <path d="M4.9902344 3.9902344 A 1.0001 1.0001 0 0 0 4.2929688 5.7070312L10.585938 12L4.2929688 18.292969 A 1.0001 1.0001 0 1 0 5.7070312 19.707031L12 13.414062L18.292969 19.707031 A 1.0001 1.0001 0 1 0 19.707031 18.292969L13.414062 12L19.707031 5.7070312 A 1.0001 1.0001 0 0 0 18.980469 3.9902344 A 1.0001 1.0001 0 0 0 18.292969 4.2929688L12 10.585938L5.7070312 4.2929688 A 1.0001 1.0001 0 0 0 4.9902344 3.9902344 z" />
          </svg>
          <div class="drop-profile">
            <div class="pp"><img src="../assets/fav-000.png" alt="" srcset="">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" width="52" height="52">
                <path d="M20.09375 0.25C19.5 0.246094 18.917969 0.457031 18.46875 0.90625L17.46875 1.9375L24.0625 8.5625L25.0625 7.53125C25.964844 6.628906 25.972656 5.164063 25.0625 4.25L21.75 0.9375C21.292969 0.480469 20.6875 0.253906 20.09375 0.25 Z M 16.34375 2.84375L14.78125 4.34375L21.65625 11.21875L23.25 9.75 Z M 13.78125 5.4375L2.96875 16.15625C2.71875 16.285156 2.539063 16.511719 2.46875 16.78125L0.15625 24.625C0.0507813 24.96875 0.144531 25.347656 0.398438 25.601563C0.652344 25.855469 1.03125 25.949219 1.375 25.84375L9.21875 23.53125C9.582031 23.476563 9.882813 23.222656 10 22.875L20.65625 12.3125L19.1875 10.84375L8.25 21.8125L3.84375 23.09375L2.90625 22.15625L4.25 17.5625L15.09375 6.75 Z M 16.15625 7.84375L5.1875 18.84375L6.78125 19.1875L7 20.65625L18 9.6875Z"/>
              </svg>
            </div>
          </div>
          <h3>Hi, Admin!</h3>
          <RouterLink to="ManageAccount">Manage Your Account</RouterLink>
          <div class="btns">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="64" height="64">
                <path d="M16 4C9.382813 4 4 9.382813 4 16C4 22.617188 9.382813 28 16 28C20.050781 28 23.640625 25.988281 25.8125 22.90625L24.1875 21.75C22.378906 24.320313 19.390625 26 16 26C10.464844 26 6 21.535156 6 16C6 10.464844 10.464844 6 16 6C19.390625 6 22.375 7.679688 24.1875 10.25L25.8125 9.09375C23.640625 6.011719 20.050781 4 16 4 Z M 23.34375 11.28125L21.90625 12.71875L24.1875 15L12 15L12 17L24.1875 17L21.90625 19.28125L23.34375 20.71875L27.34375 16.71875L28.03125 16L27.34375 15.28125Z" />
              </svg>
              <p>Sign Out</p>
            </button>
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48">
              <path d="M24 4C12.972066 4 4 12.972074 4 24C4 35.027926 12.972066 44 24 44C35.027934 44 44 35.027926 44 24C44 12.972074 35.027934 4 24 4 z M 24 7C33.406615 7 41 14.593391 41 24C41 33.406609 33.406615 41 24 41C14.593385 41 7 33.406609 7 24C7 14.593391 14.593385 7 24 7 z M 23.976562 13.978516 A 1.50015 1.50015 0 0 0 22.5 15.5L22.5 22.5L15.5 22.5 A 1.50015 1.50015 0 1 0 15.5 25.5L22.5 25.5L22.5 32.5 A 1.50015 1.50015 0 1 0 25.5 32.5L25.5 25.5L32.5 25.5 A 1.50015 1.50015 0 1 0 32.5 22.5L25.5 22.5L25.5 15.5 A 1.50015 1.50015 0 0 0 23.976562 13.978516 z" />
              </svg>
              <p>Terms and Conditions</p>
            </button>
          </div>
       </div>
     </div>
   </nav>
  <div class="home">
    <h1>This is a Home Page</h1>
  </div>
</template>
<!-- <script>
  export default {
    name: 'Home',
    data(){
      return {
        isLoged: false,
      }
    },
    methods: {
      signOut(){
        if(!this.isLoged){
          this.isLoged = this.$router.push('/signin');
        }
      }
    },
    mounted(){
      this.signOut();
    }
  }
</script> -->
