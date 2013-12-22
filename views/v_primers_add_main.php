<div class="main">
  <section id="content">
    <article class="pad_left2">
      <h2>Fill out new primer information (* required):</h2>

      <form id="newPrimerForm">
        <div class="inputEle">
          <strong>Primer Name: *</strong><br>
          <input type="text" name="name" id="name" data-validation="required" data-validation-error-msg="This field is required.">
        </div>
        <div class="inputEle">
          <strong>Sequence: *</strong><br>
          <input type="text" name="sequence" id="sequence" data-validation="required" data-validation-error-msg="This field is required.">
        </div>
        <div class="inputEle">
          <strong>Purpose: *</strong><br>
          <input type="text" name="purpose" id="purpose" data-validation="required" data-validation-error-msg="This field is required.">
        </div>
        <div class="inputEle">
          <strong>Restriction Enzyme: </strong><br>
          <input type="text" name="restriction_enzyme" id="restriction_enzyme">
        </div>
        <div class="inputEle">
          <strong>Additional Info: </strong><br>
          <textarea cols="70" rows="10" name="additional_info" id="additional_info"></textarea>
        </div>
      </form>
        <button class="btn_2" id="submitNewPrimer">Submit</button>
                     
      <div id="results"></div>  
    </article>
  </section>
</div>