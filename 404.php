<?php get_header(); ?>
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
     <section>
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
    <section >
        <div class="page-404">
            <div>404. Wystąpił błąd.</div>
            <div>Nie można znaleźć żądanego adresu URL na tym serwerze. </div>
            <div>To wszystko, co wiemy.</div>
        </div>
    </section>
    
<?php get_footer(); ?>