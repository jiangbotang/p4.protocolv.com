<div class="body3">
  <div class="main">
    <section id="content_top">
      <article class="pad_left2 col3">
        <h2>Select Category:</h2>
        <a href="/primers/index">primers</a>
        <a href="/plasmids/index">plasmids</a>        
        <a href="/sirnas/index">siRNAs</a>
      </article>
      <article class="pad_left1 col2">
        <h2>Display Control:</h2>
        <a href="/sirnas/add"><button class="btn_2" id="addNewSirna">Add A New siRNA</button><a/>
      </article>
    </section>
  </div>
</div>

<div class="main">
  <section id="content">
    <article class="pad_left2">
      <h2>Fill out new siRNA information:</h2>

      <div id="newSirnaForm">
        <div class="inputEle"><strong>siRNA Name: </strong><br><input type="text" name="name" id="name"></div>
        <div class="inputEle"><strong>Target Gene: </strong><br><input type="text" name="target_gene" id="target_gene"></div>
        <div class="inputEle"><strong>Target Region: </strong><br><input type="text" name="target_region" id="target_region"></div>
        <div class="inputEle"><strong>Target Sequence: </strong><br><input type="text" name="target_seq" id="target_seq"></div>
        <div class="inputEle"><strong>siRNA Sequence: </strong><br><input type="text" name="sirna_seq" id="sirna_seq"></div>
        <div class="inputEle"><strong>Additional Info: </strong><br><textarea cols="70" rows="10" name="additional_info" id="additional_info"></textarea></div>
        <button class="btn_2" id="submitNewSirna">Submit</button>
      </div>       
      <div id="results"></div>  
    </article>
  </section>
</div>