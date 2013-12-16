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


<div id="sirnaDisplay">
  <div class="main">
    <section id="content">
      <article class="pad_left2">
        <h2>siRNA list</h2>
      </article>

      <?php foreach($sirnas as $sirna): ?>
      <article class="pad_left2">
        <h4>ID: <?=$sirna['sirna_id']?>; Name: <?=$sirna['name']?>
            <br>
            Target Gene: <?=$sirna['target_gene']?>; Target Region: <?=$sirna['target_region']?>
            <br> 
            Target Sequence: <?=$sirna['target_seq']?>; siRNA Sequence: <?=$sirna['sirna_seq']?>
        </h4>
        <p3>Additional information: <?=$sirna['additional_info']?><br>
          <time datetime="<?=Time::display($sirna['created'], 'Y-m-d G:i')?>">
            <?=Time::display($sirna['created'])?>
          </time>
          by <?=$sirna['first_name']?> <?=$sirna['last_name']?>.
        </p>
      </article>
      <?php endforeach; ?>

    </section>
  </div>
</div>

