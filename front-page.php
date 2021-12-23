<?php get_header(); ?>


<?php $hero_header = get_field('hero_header'); ?>

<section class="banner" id="banner">
  <div class="content">
    <h2><?php echo $hero_header['large_header']; ?></h2>
    <p><?php echo $hero_header['header_description']; ?></p>

    <?php if ($hero_header['link']) : ?>
    <a href="<?php echo $hero_header['link']; ?>" class="btn">

      <?php echo $hero_header['link_text']; ?>

    </a>
    <?php endif; ?>

  </div>
</section>

<?php $about = get_field('about'); ?>

<section class="about" id="about">
  <div class="row">
    <div class="col50">
      <h2 class="titleText">
        <span><?php echo $about['about_header_span']; ?></span><?php echo $about['about_header']; ?></h2>
      <p>
        <?php echo $about['about_us_paragraph']; ?>
        <br><br>
        <?php echo $about['about_us_paragraph_part_2']; ?>
      </p>
    </div>
    <div class="col50">
      <div class="imgBx">
        <img src="<?php bloginfo('template_directory'); ?>/images/menu4.webp">
      </div>
    </div>
  </div>
</section>

<?php $menu = get_field('menu'); ?>
<section class="menu" id="menu">
  <div class="title">
    <h2 class="titleText"><?php echo $menu['title_first_part']; ?>
      <span><?php echo $menu['title_span']; ?></span><?php echo $menu['title_second_part']; ?></h2>
    <p><?php echo $menu['menu_description']; ?></p>
  </div>
  <div class="content">

    <?php if (have_rows('menu_items')) : ?>

    <?php while (have_rows('menu_items')) : the_row();

          $image = get_sub_field('image');
          $text = get_sub_field('text');
          ?> 

    <div class="box">
      <div class="imgBx">
        <img src="<?php echo $image; ?>">
      </div>
      <div class="text">
        <h3><?php echo $text; ?></h3>
      </div>
    </div>

    <?php endwhile; ?>

    <?php endif; ?>

  </div>

  <?php $menu_download = get_field('menu_download'); ?>

  <?php if ($menu_download['link']) : ?>
  <div class="title">

    <a href="<?php echo $menu_download['link']; ?>" class="btn">

      <?php echo $menu_download['text']; ?>

    </a>

  </div>
  <?php endif; ?>

</section>


<?php $kitchen_staff_header = get_field('kitchen_staff_header'); ?>

<section class="expert" id="expert">
  <div class="title">
    <h2 class="titleText">
      <?php echo $kitchen_staff_header['header_first_part'];?><span><?php echo $kitchen_staff_header['header_span'];?></span><?php echo $kitchen_staff_header['header_second_part'];?>
    </h2>
    <p>
      <?php echo $kitchen_staff_header['header_description']; ?>
    </p>
  </div>

  <div class="content">

    <?php if (have_rows('kitchen_staff')) : ?>

    <?php while (have_rows('kitchen_staff')) : the_row();
          $image = get_sub_field('image');
          $text = get_sub_field('text');
          ?>

    <div class="box">
      <div class="imgBx">
        <img src="<?php echo $image; ?>">
      </div>
      <div class="text">
        <h3><?php echo $text; ?></h3>
      </div>
    </div>

    <?php endwhile; ?>

    <?php endif; ?>

  </div>
</section>


<?php $review_header = get_field('review_header'); ?>

<section class="testimonials" id="testimonials">
  <div class="title white">
    <h2 class="titleText"><?php echo $review_header['header_first_part']; ?> <span><?php echo $review_header['header_span']; ?></span><?php echo $review_header['header_second_part']; ?></h2>
    <p>
    <?php echo $review_header['header_description']; ?>
    </p>
  </div>
  <div class="content">

    <?php if (have_rows('reviews')) : ?>

    <?php while (have_rows('reviews')) : the_row();
          $image = get_sub_field('image');
          $text = get_sub_field('text');
          $name = get_sub_field('name');
          ?>
    <div class="box">
      <div class="imgBx">
        <img src="<?php echo $image; ?>">
      </div>
      <div class="text">
        <p>

          <?php echo $text; ?>

        </p>
        <h3>
          <?php echo $name; ?>
        </h3>
      </div>
    </div>

    <?php endwhile; ?>

    <?php endif; ?>

  </div>
</section>

<?php $contact_us_header = get_field('contact_us_header'); ?>

<section class="contact" id="contact">
  <div class="title">
    <h2 class="titleText"><span><?php echo $contact_us_header['span_letter']; ?></span><?php echo $contact_us_header['header']; ?></h2>
    <p><?php echo $contact_us_header['description']; ?></p>
  </div>
  <div class="contactForm">
    <h3>Send Message</h3>
    <div class="inputBx">
      <input type="text" name="" placeholder="Name">
    </div>
    <div class="inputBx">
      <input type="text" name="" placeholder="Email">
    </div>
    <div class="inputBx">
      <textarea placeholder="Message"></textarea>
    </div>
    <div class="inputBx">
      <input type="submit" value="Send">
    </div>
  </div>

</section>

<?php get_footer(); ?>