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
        <a href="/plasmids/add"><button class="btn_2" id="addNewplasmid">Add A New Plasmid</button><a/>
      </article>
    </section>
  </div>
</div>

<div class="main">
  <section id="content">
    <article class="pad_left2">
      <h2>Fill out new plasmid information:</h2>

      <div id="newPlasmidForm">
        <div class="inputEle"><strong>Plasmid Name: </strong><br><input type="text" name="name" id="name"></div>
        <div class="inputEle"><strong>Backbone: </strong><br><input type="text" name="backbone" id="backbone"></div>
        <div class="inputEle"><strong>Insertion: </strong><br><input type="text" name="insertion" id="insertion"></div>
        <div class="inputEle"><strong>Clone #: </strong><br><input type="text" name="clone_num" id="clone_num"></div>
        <div class="inputEle"><strong>Purpose: </strong><br><input type="text" name="purpose" id="purpose"></div>
        <div class="inputEle"><strong>Cloning RE: </strong><br><input type="text" name="cloning_sites" id="cloning_sites"></div>
        <div class="inputEle"><strong>Mammalian selection: </strong><br><input type="text" name="mammalian_selec" id="mammalian_selec"></div>
        <div class="inputEle"><strong>Bacterial selection: </strong><br><input type="text" name="bacterial_selec" id="bacterial_selec"></div>
        <div class="inputEle"><strong>Source: </strong><br><input type="text" name="source" id="source"></div>
        <div class="inputEle"><strong>Additional Info: </strong><br><textarea cols="70" rows="10" name="additional_info" id="additional_info"></textarea></div>
        <button class="btn_2" id="submitNewPlasmid">Submit</button>
      </div>       
      <div id="results"></div>  
    </article>
  </section>
</div>