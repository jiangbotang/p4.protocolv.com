<!-- login view -->
<div class="body3">
  <div class="main">
    <section id="content_top">
      <article class="pad_left2 col3">
        <h2>Login Here</h2>
        <form id="loginForm" action="/users/p_login" method="POST">
          <label for="email"><strong>Email: </strong></label>
          <input type="text" name="email" id="email">
          <label for="password"><strong>Password: </strong></label>
          <input type="text" name="password" id="password">
          <input type="submit" value="Log In" class="btn">
        </form>
        <div class="errorMessage">
          <?php if(isset($loginErrorMessage)) echo $loginErrorMessage; ?>
        </div>
      </article>
    </section>
  </div>
</div>
<!-- signup success view -->
<div class="main">
  <section id="content">
    <article class="pad_left2 col4">
      <h2>Sign Up</h2>
      <p>You have successfully signed up.</p>
      <p>Please log in to access user only areas. </p>   
    </article>
  </section>
</div>