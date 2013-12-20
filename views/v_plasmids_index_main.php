<div id="plasmidDisplay">
  <div class="main">
    <section id="content">
      <article class="pad_left2">
        <a href="/plasmids/add"><button class="btn_2" id="addNewPlasmid">Add A New Plasmid</button><a/>
      </article>
      
      <?php foreach($plasmids as $plasmid): ?>
      <article class="pad_left2">
        <h4>ID: <?=$plasmid['plasmid_id']?>; Name: <?=$plasmid['name']?>
            <br>
            Clone #: <?=$plasmid['clone_num']?>; Backbone: <?=$plasmid['backbone']?>; Insertion: <?=$plasmid['insertion']?>; Purpose: <?=$plasmid['purpose']?>
            <br>
            Mammalian selection: <?=$plasmid['mammalian_selec']?>; Bacterial Selection: <?=$plasmid['bacterial_selec']?>; Cloning sites: <?=$plasmid['cloning_sites']?>; 
            Source: <?=$plasmid['source']?>
        </h4>
        <p3>Additional information: <?=$plasmid['additional_info']?><br>
          <time datetime="<?=Time::display($plasmid['created'], 'Y-m-d G:i')?>">
            <?=Time::display($plasmid['created'])?>
          </time>
          by <?=$plasmid['first_name']?> <?=$plasmid['last_name']?>.
        </p>
      </article>
      <?php endforeach; ?>

    </section>
  </div>
</div>

