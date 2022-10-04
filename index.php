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
    <section class="breakSectionTop">
        <div class="wrapperBreakLine">
            <div class="wrapperItemLeft">
                <hr style="border-top: 1.5px solid #1680BC" />
            </div>
            <div class="wrapperItemCentral">
                <div class="wrapperText"> Aktualności </div>
            </div>
            <div class="wrapperItemRight">
                <hr style="border-top: 1.5px solid #1680BC" />
            </div>
        </div>
    </section>
    <section id="news">
        <div class="mainWrapper">
            <div class="wrapperWidgetCard">
                <div class="wrapperNotice">
                    <?php while (have_posts()) : the_post(); ?>
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
                                <div class="cardWrapperImage">
                                <a href="#" target="_blank" rel="noreferrer">
                                  <?php the_post_thumbnail();?>
                                </a>
                                </div>
                                <div class="cardMainContent">
                                    <div class="subtitleCard"><?php echo get_excerpt(); ?></div>
                                    <div class="paragraphFirst"> <?php echo technig_content(50); ?>  
                                </div>
                                </div>
                            </div>                        
                        <button class="buttonMore">
                            <a class="buttonLink" href="<?php the_permalink(); ?>">więcej</a>
                        </button>
                        </div>
                    </article>
                <?php endwhile ?>                               
                </div>
                <div class="wrapperButtonAllNews">
                    <button class="buttonAllNews">
                        <a class="buttonALlNewsLink" href="/category/news/">Pozostałe aktualności</a>
                    </button>
                </div> 
            </div>
        </div> 
    </section>
        <section class="breakSection">
            <div class="wrapperBreakLine">
                <div class="wrapperItemLeft">
                    <hr style="border-top: 1.5px solid #1680BC" />
                </div>
                <div class="wrapperItemCentral">
                    <div class="wrapperText">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/smlogo.svg" alt="Small Brand mark"
                            style="height: 80px; margin-top: -20px;" />
                    </div>
                </div>
                <div class="wrapperItemRight">
                    <hr style="border-top: 1.5px solid #1680BC" />
                </div>
            </div>
        </section>
        <section id="partners">
            <div class="partnersWrapper">
                <div class="partnersWrapperItem">
                    <a href="http://gminalidzbark.com/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/herb/uglw.png" alt="Herg Gminy Lidzbark Warmiński"
                            title="Gmina Lidzbark Warmiński" class="partnersWrapperItemPhoto" />
                    </a>
                </div>
                <div class="partnersWrapperItem">
                    <a href="http://www.lubomino.ug.gov.pl/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/herb/uglub.png" alt="Herg Gminy Lubomino" title="Gmina Lubomino"
                            class="partnersWrapperItemPhoto" />
                    </a>
                </div>
                <div class="partnersWrapperItem">
                    <a href="https://www.kolno-gmina.pl/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/herb/ugkol.jpg" alt="Herg Gminy Kolno" title="Gmina Kolno"
                            class="partnersWrapperItemPhoto" />
                    </a>
                </div>
                <div class="partnersWrapperItem">
                    <a href="https://gorowoilaweckie.eu/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/herb/uggi.jpg" alt="Herg Gminy Górowo Iławeckie"
                            title="Gmina Górowo Iławeckie" class="partnersWrapperItemPhoto" />
                    </a>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>