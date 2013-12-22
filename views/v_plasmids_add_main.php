<div class="main">
  <section id="content">
    <article class="pad_left2">
      <h2>Fill out new plasmid information (* required):</h2>

      <form id="newPlasmidForm">
        <div class="inputEle">
          <strong>Plasmid Name: *</strong><br>
          <input type="text" name="name" id="name" data-validation="required" data-validation-error-msg="This field is required.">
        </div>
        <div class="inputEle">
          <strong>Backbone: </strong><br>
          <input type="text" name="backbone" id="backbone">
        </div>
        <div class="inputEle">
          <strong>Insertion: *</strong><br>
          <input type="text" name="insertion" id="insertion" data-validation="required" data-validation-error-msg="This field is required.">
        </div>
        <div class="inputEle">
          <strong>Clone #: </strong><br>
          <input type="text" name="clone_num" id="clone_num">
        </div>
        <div class="inputEle">
          <strong>Purpose: *</strong><br>
          <input type="text" name="purpose" id="purpose" data-validation="required" data-validation-error-msg="This field is required.">
        </div>
        <div class="inputEle">
          <strong>Cloning RE: </strong><br>
          <input type="text" name="cloning_sites" id="cloning_sites">
        </div>
        <div class="inputEle">
          <strong>Mammalian selection: </strong><br>
          <input type="text" name="mammalian_selec" id="mammalian_selec">
        </div>
        <div class="inputEle">
          <strong>Bacterial selection: </strong><br>
          <input type="text" name="bacterial_selec" id="bacterial_selec">
        </div>
        <div class="inputEle">
          <strong>Source: *</strong><br>
          <input type="text" name="source" id="source" data-validation="required" data-validation-error-msg="This field is required.">
        </div>      
        <div class="inputEle"><strong>Additional Info: </strong><br>
          <textarea cols="70" rows="10" name="additional_info" id="additional_info"></textarea>
        </div>
      </form>  
        <button class="btn_2" id="submitNewPlasmid">Submit</button>
             
      <div id="results"></div>  
    </article>
  </section>
</div>