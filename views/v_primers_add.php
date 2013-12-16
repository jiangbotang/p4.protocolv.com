<div class="body3">
  <div class="main">
    <section id="content_top">
      <article class="pad_left2 col3">
        <h2>Select Category:</h2>
        <a href="/primers/index">primers</a>
        <a href="/plasmids/index">plasmids</a>        
        <a href="/sirna/index">siRNAs</a>
      </article>
      <article class="pad_left1 col2">
        <h2>Display Control:</h2>
        <a href="/primers/add"><button class="btn_2" id="addNewPrimer">Add A New Primer</button><a/>
      </article>
    </section>
  </div>
</div>

<div class="main">
  <section id="content">
    <article class="pad_left2">
      <h2>Fill out new primer information:</h2>

      <div id="newPrimerForm">
        <div class="inputEle"><strong>Primer Name: </strong><br><input type="text" name="name" id="name"></div>
        <div class="inputEle"><strong>Sequence: </strong><br><input type="text" name="sequence" id="sequence"></div>
        <div class="inputEle"><strong>Purpose: </strong><br><input type="text" name="purpose" id="purpose"></div>
        <div class="inputEle"><strong>Restriction Enzyme: </strong><br><input type="text" name="restriction_enzyme" id="restriction_enzyme"></div>
        <div class="inputEle"><strong>Additional Info: </strong><br><textarea cols="70" rows="10" name="additional_info" id="additional_info"></textarea></div>
        <button class="btn_2" id="submitNewPrimer">Submit</button>
      </div>       
      <div id="results"></div>  
    </article>
  </section>
</div>