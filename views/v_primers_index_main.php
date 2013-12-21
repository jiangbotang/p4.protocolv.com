<div id="primerDisplay">
  <div class="main">
    <section id="content">
      <article class="pad_left2">
        <a href="/primers/add"><button class="btn_2" id="addNewPrimer">Add A New Primer</button><a/>
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

      <article class="pad_left2">
      <?php if(isset($item_nav)) echo $item_nav; ?>
      </article>

    </section>
  </div>
</div>

