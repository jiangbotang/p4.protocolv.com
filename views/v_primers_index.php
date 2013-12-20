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
        <a href="/primers/add"><button class="btn_2" id="addNewPrimer">Add A New Primer</button><a/>
      </article>
    </section>
  </div>
</div>


<div id="primerDisplay">
  <div class="main">
    <section id="content">
      <article class="pad_left2">
        <h2>primers list</h2>
      </article>

      <?php foreach($primers as $primer): ?>
      <article class="pad_left2">
        <h4>ID: <?=$primer['primer_id']?>; Name: <?=$primer['name']?>
            <br>
            Sequence: <?php echo strtoupper($primer['sequence']); ?>
        </h4>
        <p>Additional information: <?=$primer['additional_info']?><br>
          <time datetime="<?=Time::display($primer['created'], 'Y-m-d G:i')?>">
            <?=Time::display($primer['created'])?>
          </time>
          by <?=$primer['first_name']?> <?=$primer['last_name']?>.
        </p>
      </article>
      <?php endforeach; ?>

    </section>
  </div>
</div>

