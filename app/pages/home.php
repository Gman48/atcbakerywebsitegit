<?php require page('includes/header');?>
<?php require page('includes/hero');?>

<!-- <div class="page-container construction">
    <h1>We are currently baking up a new website</h1>
    <h1>It should be frosted soon</h1>
</div> -->

<!-- Featured Products Section -->
<div id="favourites" class="sec-title">Featured Products</div>
<section class="content">
	<?php 
		$rows = db_query("select * from products where featured = 1 order by id asc limit 3");
	?>
	<?php if(!empty($rows)):?>
		<?php foreach($rows as $row):?>
			<?php include page('includes/product_card')?> 
		<?php endforeach;?>
	<?php else:?>
		<div class="m-2">No featured products found</div>
	<?php endif;?>
</section>

<!-- orders banner -->
<section id="cta" class="container">
<div class="cta-box" data-aos="zoom-out" aos-duration="2500">
	<p>email <span class="order-pop">orders@atcbakery.ca</span> or call us at <span class="order-pop">289-325-4771</span></p>
	<p> to place your order today!</p>
	<p class="confirm">* Orders are not confirmed until you receive a reply from us. *</p>
	<p class="confirm">* Orders over $50 require a 50% deposit at time of order. *</p>
	<p class="confirm">** Allow 48 hours from time order is confirmed for fulfillment **</p>
	<p class="confirm">*** All products may contain or  have come into contact with nuts ***</p>
</div>
</section>

<!-- Tasty Tales Section -->

<!-- NEW CAROUSEL -->
<div class="testimonial-heading">Tasty Tales</div>
<?php include ('includes/tales_carousel.php'); ?>

<!-- Events -->
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

<?php require page('includes/footer');?>
