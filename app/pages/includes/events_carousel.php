<!-- Events in carousel using Swiper-->
<section id="tales_carousel" class="carousel_container">
  <div class="card__container swiper">
    <div class="card__content">
      <div class="swiper-wrapper">

<?php 
	$query = "select * from events";
	$rows = db_query($query);
?>

<!-- Events (original display) -->
<section class="announcement" id="events"> 
    <div data-aos="flip-down" class="ctn-wrapper">
    	<div class="text">

		<?php 
			$slug = 1;
			$query = "select * from events where active = :active limit 1";
			$row = db_query_one($query,['active'=>$slug]);
		?>
		<?php if(!empty($row)):?>
			<h1>Come visit us at - </h1>
			<h1><?=esc($row['name'])?></h1>
			<p>We will be at the <?=esc($row['name'])?> located in <?=esc($row['location'])?> (<?=esc($row['address'])?>)</p>
			<p><?=esc($row['date'])?> <?=esc($row['time'])?></p>
			<p><?=esc($row['details'])?></p></p>
		<?php else:?>
			<h1>Come visit us at - </h1>
			<p>Throughout the year we will be attending many local fairs and shows.  Keep an eye here to see where we will be next and be sure to drop by and take home some of your favourite treats.</p>
		<?php endif;?>
    	</div>
    </div>
</section>

<?php if(!empty($rows)):?>
	<?php foreach($rows as $row):?>

        <article class="card__article swiper-slide">
          <div class="card__image">
            <img src="<?=ROOT?>/<?=$row['image']?>" alt="image" class="card__img">
            <div class="card__shadow"></div>
          </div>

          <div class="card__data">
            <h3 class="card__name"><?=$row['name']?></h3>
            <p class="card__description">
              <?=$row['tale']?> 
            </p>
          </div>
        </article>
    <?php endforeach;?>
<?php endif;?>

      </div>
    </div>

    <!-- Navigation buttons -->
    <div class="swiper-button-prev">
      <i class="ri-arrow-left-s-line"></i>
    </div>

    <div class="swiper-button-next">
      <i class="ri-arrow-right-s-line"></i>
    </div> 

    <!-- Pagination -->
    <div class="swiper-pagination"></div> 

  </div>
</section>

