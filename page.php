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
    <div  class="cardWrapper">
        <div class="cardHeader">
        <div class="cardHeaderDate"><?php the_time('d-m-Y'); ?></div>
        <div class="cardHeaderTitle"><?php the_title(); ?></div>
        </div>
        <div>
        <div class="cardMainPhoto">
            <?php the_post_thumbnail();?> 
        </div>
        <div class="cardMainContent">
        <?php the_content(); ?> 
        </div>
        </div>
        <div class="cardFooter">
            Kategoria: <?php the_category(); ?>
        </div>
    </div>
    </section>  
<?php get_footer(); ?>