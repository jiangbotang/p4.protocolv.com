<div class="main">
  <section id="content">
    <article class="pad_left2">
      <h2>Fill out new siRNA information (* required):</h2>

      <form id="newSirnaForm">
        <div class="inputEle">
          <strong>siRNA Name: *</strong><br>
          <input type="text" name="name" id="name" data-validation="required" data-validation-error-msg="This field is required.">
        </div>
        <div class="inputEle">
          <strong>Target Gene: *</strong><br>
          <input type="text" name="target_gene" id="target_gene" data-validation="required" data-validation-error-msg="This field is required.">
        </div>
        <div class="inputEle">
          <strong>Target Region: </strong><br>
          <input type="text" name="target_region" id="target_region">
        </div>
        <div class="inputEle">
          <strong>Target Sequence: *</strong><br>
          <input type="text" name="target_seq" id="target_seq" data-validation="required" data-validation-error-msg="This field is required.">
        </div>
        <div class="inputEle">
          <strong>siRNA Sequence: *</strong><br>
          <input type="text" name="sirna_seq" id="sirna_seq" data-validation="required" data-validation-error-msg="This field is required.">
        </div>
        <div class="inputEle">
          <strong>Additional Info: </strong><br>
          <textarea cols="70" rows="10" name="additional_info" id="additional_info"></textarea>
        </div>
      </form>    
        <button class="btn_2" id="submitNewSirna">Submit</button>
           
      <div id="results"></div>  
    </article>
  </section>
</div>