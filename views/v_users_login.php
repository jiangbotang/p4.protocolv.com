<!-- login view -->
<div class="body3">
  <div class="main">
    <section id="content_top">
      <article class="pad_left2 col3">
        <h2>Login Here</h2>
        <form id="loginForm" action="/users/p_login" method="POST">
          <label for="email"><strong>Email: </strong></label>
          <input type="text" name="email" id="email" data-validation="email">
          <label for="password"><strong>Password: </strong></label>
          <input type="password" name="password" id="password" data-validation="required" data-validation-error-msg="Please enter your password">
          <input type="submit" value="Log In" class="btn">
        </form>
        <div class="errorMessage">
          <?php if(isset($loginErrorMessage)) echo $loginErrorMessage; ?>
        </div>
      </article>
    </section>
  </div>
</div>
<!-- signup view -->
<div class="main">
  <section id="content">
    <article class="pad_left2 col4">
      <h2>Sign Up</h2>
      <p>Please sign up to access user only information, e.g. available research reagents, protocol information. </p>
      <form id="signupForm" action="/users/p_signup" method="POST">
        <div>
        <label for="firstName"><strong>First Name: </strong></label>
        <input type="text" name="first_name" id="firstName" data-validation="length alphanumeric" data-validation-length="2-25" 
              data-validation-error-msg="First name has to be an alphanumeric value between 2-25 characters">
        </div>
        <div>
        <label for="lastName"><strong>Last Name: </strong></label>
        <input type="text" name="last_name" id="lastName" id="firstName" data-validation="length alphanumeric" data-validation-length="2-25" 
              data-validation-error-msg="Last name has to be an alphanumeric value between 2-25 characters">
        </div>
        <div>
        <label for="signupEmail"><strong>Email: </strong></label>
        <input type="text" name="email" id="signupEmail" data-validation="email">
        </div>
        <div>
        <label for="signupPassword"><strong>Password: </strong></label>
        <input type="password" name="pass_confirmation" id="signupPassword" data-validation="strength" data-validation-strength="2">
        </div>
        <div>
        <label for="signupPasswordRep"><strong>Repeat Password: </strong></label>
        <input type="password" name="pass" id="signupPasswordRep" data-validation="confirmation">
        </div>
        <input type="submit" value="Sign Up" class="btn">
        <div class="errorMessage">
          <p><?php if(isset($signupErrorMessage)) echo $signupErrorMessage; ?></p>
        </div>

      </form>      
    </article>
  </section>
</div>