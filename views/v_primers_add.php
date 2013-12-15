<div class="body3">
  <div class="main">
    <section id="content_top">
      <article class="pad_left2 col3">
        <h2>Select Category:</h2>
        <a href="/plasmids/index">plasmids</a>
        <a href="/primers/index">primers</a>
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

      <form id="newPrimerForm" action="/primers/p_add" method="POST">
        <div><strong>Plasmid Name: </strong><input type="text" name="plasmidName"></div>
        <div><strong>Sequence: </strong><input type="text" name="plasmidSequence"></div>
        <div><strong>Purpose: </strong><input type="text" name="plasmidPurpose"></div>
        <div><strong>Restriction Enzyme: </strong><input type="text" name="plasmidRE"></div>
        <div><strong>Additional Info: </strong><textarea name="plasmidInfo"></textarea></div>          
      </form>
    </article>
  </section>
</div>