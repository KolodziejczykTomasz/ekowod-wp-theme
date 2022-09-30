<?php get_template_part('header-home'); ?>
<body>
    <header class="header">
        <nav>
            <div class="logo">
                <a class="brand" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Brand Logo" class="brandLogo" width="150px">
                </a>
            </div>
            <label for="btn" class="icon">
                <span class="fa fa-bars"></span>
            </label>
            <input type="checkbox" id="btn">
            <ul>
                <li><a href="#">Aktualności</a></li>
                <li><a href="/home">O nas</a></li>
                <li>
                    <label for="btn-2" class="show">Obiekty</label>
                    <a href="#">Obiekty</a>
                    <input type="checkbox" id="btn-2">
                    <ul>
                        <li>
                            <label for="btn-3" class="show">Hydrofornie +</label>
                            <a href="#">Hydrofornie <span class="fa fa-plus"></span></a>
                            <input type="checkbox" id="btn-3">
                            <ul>
                                <li><a href="#">Lidzbark Warmiński</a></li>
                                <li><a href="#">Górowo Iławeckie</a></li>
                                <li><a href="#">Kolno</a></li>
                                <li><a href="#">Lubomino</a></li>
                            </ul>
                        </li>
                        <li>
                            <label for="btn-4" class="show">Oczyszczalnie +</label>
                            <a href="#">Oczyszczalnie <span class="fa fa-plus"></span></a>
                            <input type="checkbox" id="btn-4">
                            <ul>
                                <li><a href="#">Lidzbark Warmiński</a></li>
                                <li><a href="#">Górowo Iławeckie</a></li>
                                <li><a href="#">Kolno</a></li>
                                <li><a href="#">Lubomino</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Kontakt</a></li>
                <li class="end-menu-link">
                    <div class="end-menu">
                        <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/assets/bip.png" alt="" /> </a>
                    </div>
                </li>
            </ul>

        </nav>
    </header>
    <section class="hero">
        <div class="hero-body">
            <div class="heroTextWrapper">
                <div class="wrapperHero">
                    <span class="title">Zakład Budżetowy Związku Gmin</span>
                    <span class="subtitle">Gospodarka wodno-ściekowa</span>
                </div>
            </div>
        </div>
    </section>
   
<section class="contentArticle">	
		

<?php 
global $post;
 $args = array(
    'category'       => get_queried_object()->term_id,
    'posts_per_page' => get_option( 'posts_per_page' ) );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

 <article class="card">
                        <div class="root">
                            <div class="cardHeader">
                                <div class="headerCard">
                                    <div class="avatarWrapper">
                                        <div class="avatar" aria-label="recipe">
                                            <?php the_title_excerpt('', '', true, '2'); ?>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <div class="titleCard"><?php the_title(); ?></div>
                                        </div>
                                        <div>
                                            <div class="subheaderData"><?php the_time('d.m.Y'); ?>r.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cardContent">
                                <a href="#" target="_blank" rel="noreferrer">
                                  <?php the_post_thumbnail();?>
                                </a>
                                <div class="subtitleCard"><?php the_excerpt(); ?></div>
                                <div class="paragraphFirst"> <?php the_content(); ?> 
                                </div>
                            </div>                        
                        <button class="buttonMore">
                            <a class="buttonLink" href="<?php the_permalink(); ?>">więcej</a>
                        </button>
                        </div>
                    </article>

<?php endforeach;
wp_reset_postdata();?>

</section>  


<?php get_footer(); ?>
