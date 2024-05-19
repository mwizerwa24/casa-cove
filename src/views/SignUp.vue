<template>
<div class="wrapper">
  <form action="" method="post">
      <img src="../assets/fav-000.png" alt="" srcset="">
      <div class="double">
          <div class="field">
              <label for="firstname">First name</label>
                  <input type="text" id="firstname" name="firstname" value="" placeholder="John">
          </div>
          <div class="field">
              <label for="lastname">Last name</label>
                  <input type="text" id="lastname" name="lastname" value="" placeholder="Doe">
          </div>
      </div>
      
      <div class="double">    
          <div class="field">
              <label for="username">User name</label>
                  <input type="text" id="username" name="username" value="" placeholder="JohnDoe12">
          </div>
          <div class="field">
              <label for="phoneno">Phone Number</label>
                  <input type="text" id="phoneno" name="phoneno" value="" placeholder="Eg: 0788888888">
          </div>
      </div>
      <div class="field">
          <label for="email">Email</label>
                  <input type="email" id="email" name="email" value="" placeholder="johndoe@example.com">
      </div>
      <div class="double">    
          <div class="field">
              <label for="password">Password</label>
                  <input type="password" id="password" name="password" value="" placeholder="Password">
          </div>
          <div class="field">
              <label for="re_password">Confirm Password</label>
                  <input type="password" id="re_password" name="re_password" value="" placeholder="Confirm Password">
          </div>
      </div>
      <div class="field">
          <button type="submit" name="submit">Create account</button>
      </div>
      <p>Already have an account? <RouterLink to="/signin">Sign In</RouterLink></p>
  </form>
  <div class="slogan">
      <h4>Opening Doors to Your Dream Home!</h4>
      <p>&copy;Copyright Mwizerwa Johnson 2024</p>
  </div>
</div>
</template>
<style type="scss">

:root{
        --primary-color: #2067ae;
    }
*{
    margin: 0;
    padding: 0;
    text-decoration: none;
    box-sizing: border-box;
    font-family: Gabarito;
}
body{
    position: relative;
}
.slogan{
    position: absolute;
    bottom: 5%;
    right: 5%;
    padding: 20px;
    text-align: center;
    color: #000;
    p{
        font-size: .8rem;
    }
}
.success{
    width: 100%;
    position: absolute;
    background: rgb(165, 243, 191);
    color: darkgreen;
    font-size: .8rem;
    height: 40px;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    animation: error 3s;
}
.error{
    width: 100%;
    position: absolute;
    background: rgb(229, 155, 155);
    color: darkred;
    font-size: .8rem;
    height: 40px;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    animation: error 3s;
}
@keyframes error {
    0%{
        opacity: 1;
    }
    90%{
        opacity: 1;
    }
}
.wrapper{
    height: 100vh;
    width: 100vw;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    background: url('../assets/logo-000.png') no-repeat center;
    background-size: contain;
    form{
        width: fit-content;
        padding: 1.5rem 2rem;
        border-radius: 5px;
        background: #ffffffa4;
        display: flex;
        flex-direction: column;
        row-gap: 1rem;
        box-shadow: 0 20px 20px -10px #0000007d;
        backdrop-filter: blur(3px);
        p{
            text-align: center;
        }
        img{
          height: 50px;
          width: 50px;
          display: block;
          margin: auto;
        }
        .double{
            
            display: grid;
            grid-template-columns: 220px 220px ;
            column-gap: 1rem;
        }
        .field{
            display: flex;
            flex-direction: column;
            row-gap: 5px;
            label{
                font-size: .9rem;
            }
            input{
                padding: 10px;
                outline: 0;
                border: 1px solid #ccc;
                border-radius: 5px;
                &:focus{
                    outline: 2px solid dodgerblue;
                }
            }
            button{
                padding: 1rem;
                color: #fff;
                background: #333;
                border: 0;
                border-radius: 5px;
                display: block;
                margin: 2rem auto 0 auto;
                width: 150px;
                &:hover{
                    background: #444;
                }
            }
        }
    }
}
</style>
  