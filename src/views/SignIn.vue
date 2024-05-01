<template>
  <div class="wrapper">

    <form action="" method="post">
        <img src="../assets/fav-000.png" alt="" srcset="">
        <div class="field">
            <label for="username">Username</label>
                <input type="text" id="username" name="username" value="" placeholder="User123">
        </div>
        
        <div class="field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="" placeholder="Password">
        </div>
        <div class="field">
            <button type="submit" name="submit">Create account</button>
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
  form{
    width: 350px;
  }
</style>
  