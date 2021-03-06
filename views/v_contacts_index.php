<div class="body3">
  <div class="main">
    <section id="content_top">
      <article class="pad_left2 col3">
        <h2>Our Contacts</h2>
        <p class="marg_top"> <strong>Country:</strong>USA<br>
          <strong>State:</strong>Pennsylvania<br>
          <strong>City:</strong>Philadelphia<br>
          <strong>Telephone:</strong>412-361-zero135<br>
          <strong>Email:</strong><a href="#" id="cont_email">protocolvservice@gmail.com</a> </p>
      </article>
      <article class="pad_left1 col2">
        <h2>Miscellaneous Info:</h2>
        <p class="marg_top">Please send me an email if you any  questions, suggestions, or anything else.<br>
          You could also use the form below to send me a message.<br>
          I try my best to get back to you A.S.A.P.</p>
      </article>
    </section>
  </div>
</div>
<div class="main">
  <section id="content">
    <article class="pad_left2">
      <h2>Contact Form (* required)</h2>
      <form id="ContactForm" action="/contacts/p_send" method="POST">
        <div class="wrapper">
          <div class="wrapper">
            <p>Your Name: *</p>
            <input type="text" name="name" class="input" data-validation="required" data-validation-error-msg="This field is required.">
          </div>
          <div class="wrapper">
            <p>Your E-mail: *</p>
            <input type="text" name="email" class="input" data-validation="email">
          </div>
          <div class="wrapper">
            <p>Your Message:</p>
            <textarea name="msg" cols="1" rows="1"></textarea>
          </div>
          <div class="wrapper">
            <input type="submit" value="Send" class="btn_2 right"> 
          </div>
        </div>
      </form>
    </article>
  </section>
</div>