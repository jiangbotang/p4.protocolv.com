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
<div class="main">
  <section id="content">
    <article class="pad_left2 col4">
      <h2>Sign Up</h2>
      <p>Please sign up to access user only information, e.g. available research reagents, protocol information. </p>
      <form id="signupForm" action="/users/p_signup" method="POST">
        <div>
        <label for="firstName"><strong>First Name: </strong></label>
        <input type="text" name="firstName" id="firstName">
        </div>
        <div>
        <label for="lastName"><strong>Last Name: </strong></label>
        <input type="text" name="lastName" id="lastName">
        </div>
        <div>
        <label for="signupEmail"><strong>Email: </strong></label>
        <input type="text" name="signupEmail" id="signupEmail">
        </div>
        <div>
        <label for="signupPassword"><strong>Password: </strong></label>
        <input type="text" name="signupPassword" id="signupPassword">
        </div>
        <input type="submit" value="Sign Up" class="btn">


      </form>      
    </article>
  </section>
</div>