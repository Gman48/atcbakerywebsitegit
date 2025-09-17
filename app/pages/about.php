<?php require page('includes/header');?>

<div class="about-heading">
    <h1>About Us</h1>
    <p>If you are craving handmade all natural goodies then you have found them and they are</p>
    <p>AROUND THE CORNER!</p>
</div>

<div class="about-page-container">
    <section class="about">
        <img class="baker-img" src="<?=ROOT?>/assets/images/02.jpg" alt="">
        <div class="about-content">
            <h2>Audrey Murphy - Baker Genius</h2>
            <p>I’m a mother of one, or rather, I gave birth to one although I tell people I have the equivalent of three children.  I am married after all.  😊  After more than 30 years in the retail industry, I retired to a quieter, simpler life or so I thought.  That lasted all of three weeks (insert face palm here!).  I can’t sit still and after so many decades of what seemed to be running in place, I went to the one joy that gave me a sense of accomplishment – baking.  The one place that I could start my day with nothing and have something to show for it by the time I was done.  How it all started……</p>
            <p>I can remember helping my Godmother & Grandmothers bake at a very young age although I think they would have redefined what helping meant at that time.  Baking and being in the kitchen for me has always meant home, family, love.  Putting something in front of someone that makes them light up is as rewarding as anything can be.  To know you’ve brought a smile to their face is a precious gift.  As I grew, that aspiration never changed although it manifested itself in different ways.  I began cooking as an early teen and liked to experiment, but I always came back to the little indulgences that make the day brighter when you’re not having a good one.  I’ve run the gamut of simple recipes like a basic cake to a chocolate chip cookie.  However, 4 decades ago, those were indeed very basic by today’s standards.  I’ve tried learning new techniques, experimenting with flavours and textures whether it be a truffles course (that we almost got thrown out of thank you very much [you know who you are] LOL) to attempting mirror glaze in my own kitchen to somewhat surprising and satisfying results.  The one thing that has stayed constant through the years however is fudge.  A singular treat that evokes memories of being in Niagara Falls where everyone stopped to get a slice.  It’s a shame that it generally can only be purchased by visiting a major tourist attraction.   So here I am, offering a guilty pleasure that you don’t have to drive hours for.  One bite and your eyes widen, and you look to the sky thinking how creamy and delightful and sinfully good as you reach for the next piece…… I hope you enjoy.  It’s been decades in the making!  </p>
            <p>Does the story end there???  Of course not!!!  </p>
            <img class="mid-img" src="<?=ROOT?>/assets/images/Dog Cookies - Sweet Pawtato.jpg" alt="">
            <p>And now for the puppers….</p>
            <p>In my  neighbourhood, having a dog is almost a requirement.   Dogs draw people together….complete strangers will strike up conversation when it comes to their furbabies.  I am no exception, on my many walks I’ve learned the names of all the dogs in the neighbourhood as well as their families.  I jokingly asked if I should rent one so I fit in.  There were so many dogs within 6 houses in any direction from me, I started buying dog treats.  Who buys dog treats when you don’t have a dog???  I DO!  So I started thinking….maybe I could make something for my furry friends and fur-nieces.  And yes, I do realize most dogs will eat anything you put in front of them, it’s knowing that what they are eating is safe, wholesome and all natural without any additives/preservatives, salt or sugar.  And let’s be honest, some of us treat our pets better than our spouses!  So let’s get Fido something tasty!</p>
        </div>
    </section>
</div>

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