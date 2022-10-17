<?php get_header(); ?>
<body>
        <header class="header">
        <nav>
            <div class="logo">
                <a class="brand" href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Brand Logo" class="brandLogo" width="150px">
                </a>
            </div>
            <label for="btn" class="icon">
                <span class="fa fa-bars"></span>
            </label>
            <input type="checkbox" id="btn">
            <ul>
                <li><a href="/">Start</a></li>
                <li><a href="/o-nas">O nas</a></li>
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
                                <li><a href="/h-lidzbark-warminski">Lidzbark Warmiński</a></li>
                                <li><a href="/h-gorowo-ilaweckie">Górowo Iławeckie</a></li>
                                <li><a href="/h-gmina-kolno">Kolno</a></li>
                                <li><a href="/h-lubomino">Lubomino</a></li>
                            </ul>
                        </li>
                        <li>
                            <label for="btn-4" class="show">Oczyszczalnie +</label>
                            <a href="#">Oczyszczalnie <span class="fa fa-plus"></span></a>
                            <input type="checkbox" id="btn-4">
                            <ul>
                                <li><a href="/o-lidzbark-warminski">Lidzbark Warmiński</a></li>
                                <li><a href="/o-gorowo-ilaweckie">Górowo Iławeckie</a></li>
                                <li><a href="/o-kolno">Kolno</a></li>
                                <li><a href="/o-lubomino">Lubomino</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="/kontakt">Kontakt</a></li>
                <li class="end-menu-link">
                    <div class="end-menu">
                        <a href="http://lidzbarkwarminski-ekowod.bip-wm.pl/public/" target="_blank" rel="noopener noreferrer"> <img src="<?php echo get_template_directory_uri(); ?>/assets/bip.png" alt="BIP" /> </a>
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
    <section id="menuVertical">
        <div class="asideMenu">
            <button class="wrapperAsideMenuItem">
                <a href="/cennik" class="buttonNaviAside" style="font-size: 30px">
                    <span class="fa fa-euro-sign"></span>
                    Cennik
                </a>
            </button>
            <button class="wrapperAsideMenuItem">
                <a href="/pobieranie" class="buttonNaviAside" style="font-size: 30px">
                    <span class="fa fa-download iconMenu"></span>
                    Do pobrania
                </a>
            </button>
            <button class="wrapperAsideMenuItem">
                <a href="/kontakt" class="buttonNaviAside" style="font-size: 30px">
                    <span class="fa fa-user"></span>
                    Kontakt
                </a>
            </button>
        </div>
    </section> 
<section class="contentArticle">	
    <div>
       <?php
        $current_page = get_queried_object();
        $category     = $current_page->post_name;
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( 
            array(
                'paged'         => $paged, 
                'category_name' => 'news',
                'order'         => 'desc',
                'post_type'     => 'post',
                'post_status'   => 'publish',
            )
        );
        if ($query->have_posts()) {
               while ($query->have_posts()) { 
               $query->the_post(); ?>
        <article class="ct-card sp-cardBorderBottom">
            <div class="root ct-cardHeight">
                <div class="cardHeader">
                    <div class="headerCard">
                        <div class="avatarWrapper">
                            <div class="avatar" aria-label="recipe">
                                <?php the_title_excerpt('', '', true, '2'); ?>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="sp-titleCard"><?php the_title(); ?></div>
                            </div>
                            <div>
                                <div class="subheaderData"><?php the_time('d.m.Y'); ?>r.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ct-cardMain">
                    <div class="ct-cardImage ct-cardWrapperImage">
                        <a href="#" target="_blank" rel="noreferrer">
                        <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
                        </a>
                    </div>                                
                    <div class="sp-cardContent"> 
                        <div>
                            <?php echo the_excerpt(); ?>
                        </div>                     
                        <div>
                            <?php $content = get_the_content();$trimmed_content = wp_trim_words( $content, 40, '<a href="'. get_permalink() .'">...</a>' ); ?>
                            <?php echo $trimmed_content; ?>
                        </div> 
                    </div>
                </div>                        
                <div class="ct-cardFooter">      
                    <div class="ct-wrapperButtonMore">
                        <button class="ct-buttonMore">
                        <a class="buttonLink" href="<?php the_permalink(); ?>">więcej</a>
                    </button>
                </div>             
                </div>        
            </div>
        </article>
    </div>   
        <?php
            }
            next_posts_link( '<-- Starsze wpisy   ', $query->max_num_pages );
            previous_posts_link( '    Nowsze wpisy -->' );
            wp_reset_postdata();
        }
        ?>
 
</section>  


<?php get_footer(); ?>
