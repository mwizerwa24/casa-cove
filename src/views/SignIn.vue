<template>
  <div class="wrapper">

    <form action="" method="post" @submit.prevent="formsubmit">
        <img src="../assets/fav-000.png" alt="" srcset="">
        <div class="field">
            <label for="username">Username</label>
            <input type="text" placeholder="User123" v-model="username" required>
        </div>
        
        <div class="field">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" v-model="passkey" required>
        </div>
        <div class="field">
            <button>Create account</button>
        </div>
        <p>New Here? <RouterLink to="/signup">Sign Up</RouterLink></p>
    </form>

    <div class="slogan">
        <h4>Opening Doors to Your Dream Home!</h4>
        <p>&copy;Copyright Mwizerwa Johnson 2024</p>
    </div>

  </div>
</template>
<style scoped>
  input{
    border: 1px red solid;
    width: 300px;
  }
</style>
<script>
  export default{
    data() {
      return{
        username: "",
        passkey: ""
      }
    },
    methods: {
      formsubmit(){
        let vm = this
        this.axios.post('http://localhost/casa-cove/php/signin.php', {username: this.username, passkey: this.passkey})
        .then(function(res){
            // vm.$notify(res.data.message);
            if(res.data.status == 'success'){
              vm.$notify({
                title: res.data.message,
                type: 'success',
              })
            }else{
              vm.$notify({
                title: res.data.message,
                type: 'error',
              })
            }
          })
      }
    }
  }
</script>
