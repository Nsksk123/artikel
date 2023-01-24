<?php get_header();?>

    <section class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>Berita Terkini</h1>
            </div>
            <div class="col">
                <h4>Pilih Kategori</h4>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">News Updates</option>
                    <option value="2">Covid-19 Evens</option>
                    <option value="3">Each selected editor</option>
                </select>
            </div>
        </div>
        <div class="row">
            
            <?php 
        $content = new WP_Query([
            'post_type' => 'add_content',
            'post_status' => 'publish',
            'post_per_page' => -1,
            'orederby' => 'publish_date',
            'oreder' => 'ASC'
        ]);
        
        if($content->have_posts()):
            while($content->have_posts()):
                $content->the_post();
                ?>

<div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card mt-5 mb-5">
      <div class="card-body">
        <h5 class="card-title"><?php the_title();?></h5>
        <p class="card-text"><?php the_content();?></p>
        <a href="#" class="btn btn-primary">Lihat Berita</a>
      </div>
    </div>
</div>

    <?php 
    
            endwhile;
        endif;
        wp_reset_postdata();

    ?>

</div>
        </div>
    </section>

    <?php
    $db = mysqli_connect("127.0.0.1", "admin1", "1admin", "artikel");


    $id = mysqli_query($db, 'SELECT * FROM wp_posts');
    $id_1 = mysqli_fetch_assoc($id);
    echo $id_1['id']
    ?>

<?php get_footer();?>