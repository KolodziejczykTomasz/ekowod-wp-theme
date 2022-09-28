<?php get_template_part('header-home'); ?>

<body>
<header class="header">
<nav>
    <div class="logo">
        <a class="brand" href="#">
            <img src="./assets/logo.svg" alt="Brand Logo" class="brandLogo" width= "150px">
        </a>
    </div>
    <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul>
        <li ><a href="#">Home</a></li>
        <li ><a href="#">O nas</a></li>
        <li >
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
        <li ><a href="#">Kontakt</a></li>
        <li class="end-menu-link">
            <div class="end-menu">
                <a href="#"> <img src="assets/bip.png" alt="" /> </a>
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
      <a href="/TariffView" class="buttonNaviAside" style="font-size: 30px">
          <span class="fa fa-euro-sign"></span>
        Cennik
      </a>
    </button>
    <button class="wrapperAsideMenuItem" >
      <a href="/DownloadView" class="buttonNaviAside" style="font-size: 30px">
          <span class="fa fa-download iconMenu" ></span>
        Do pobrania
      </a>
    </button>
    <button class="wrapperAsideMenuItem">
      <a href="/ContactView" class="buttonNaviAside" style="font-size: 30px">
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
    <div class="mainWrapper" >
        <div class="wrapperWidgetCard">
            <div class="wrapperNotice">
               <div class="card">
                <div class="root">
                    <div class="cardHeader">
                        <div class="headerCard">
                            <div class="avatarWrapper">
                                <div class="avatar" aria-label="recipe">
                                   TK
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div class="titleCard">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </div>
                                </div>
                                <div>
                                    <div class="subheaderData">12.12.2022r.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardContent" >
                        <a href="#" target="_blank" rel="noreferrer">
                            <img src="./assets/gallery/building1.jpg" alt={title} />
                        </a>
                <div class="subtitleCard">It is along established fact that a
                    reader will be distracted by the readable content of a page when looking at its layout. </div>
                <div class="paragraphFirst"> There are many variations of
                    passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.  </div>
                </div>
                <div class="cardActions disableSpacing">
                    <IconButton
                            className={clsx(classes.expand, {
                            [classes.expandOpen]: expanded,
                            })}
                            onClick={handleExpandClick}
                            aria-expanded={expanded}
                            aria-label="Zobacz więcej">
                        <ExpandMoreIcon />
                    </IconButton>
                </div>
                <div class="collapse">
                    <div class="cardContent">
                        <div class="paragraph"> {content2} </div>
                        <div class="paragraph"> {content3} </div>
                        <div class="paragraph"> {content4} </div>
                        <div class="downloadFiles">
                            <div class="linkWrapper">
                                <a href={LinkTo} class="linkFooter"> {LinkName} </a> </div>
                        <div class="footerTitle" > Pliki do pobrania: </div>
                        <ul>
                            <li>
                                <a href={fileLink1} target="_blank" rel="noopener noreferrer"> {fileName1} </a>
                            </li>
                            <li>
                                <a href={fileLink2} target="_blank" rel="noopener noreferrer"> {fileName2} </a>
                            </li>
                            <li>
                                <a href={fileLink3} target="_blank" rel="noopener noreferrer"> {fileName3} </a>
                            </li>
                        </ul>
                   <div class="footerTitle" > Pobierz - całość </div>
                        <ul>
                            <li>
                                <a href={zipLink} target="_blank" rel="noopener noreferrer"> {zipName} </a>
                            </li>
                        </ul>
                     </div>
                    </div>
                </div>
                </div>
                    <button class="buttonMore">
                        <a class="buttonLink" href="/AllNewsView">więcej</a>
                    </button>
                </div>
                <div class="card">
                    <div class="root">
                        <div class="cardHeader">
                            <div class="headerCard">
                                <div class="avatarWrapper">
                                    <div class="avatar" aria-label="recipe">
                                        TK
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div class="titleCard">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </div>
                                    </div>
                                    <div>
                                        <div class="subheaderData">12.12.2022r.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cardContent" >
                            <a href="#" target="_blank" rel="noreferrer">
                                <img src="./assets/gallery/building1.jpg" alt={title} />
                            </a>
                            <div class="subtitleCard">It is along established fact that a
                                reader will be distracted by the readable content of a page when looking at its layout. </div>
                            <div class="paragraphFirst"> There are many variations of
                                passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.  
                            </div>
                        </div> 
                    </div>
                    <button class="buttonMore">
                        <a class="buttonLink" href="/AllNewsView">więcej</a>
                    </button>
                </div>
                 <div class="card">
                    <div class="root">
                        <div class="cardHeader">
                            <div class="headerCard">
                                <div class="avatarWrapper">
                                    <div class="avatar" aria-label="recipe">
                                        TK
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div class="titleCard">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </div>
                                    </div>
                                    <div>
                                        <div class="subheaderData">12.12.2022r.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cardContent" >
                            <a href="#" target="_blank" rel="noreferrer">
                                <img src="./assets/gallery/building1.jpg" alt={title} />
                            </a>
                            <div class="subtitleCard">It is along established fact that a
                                reader will be distracted by the readable content of a page when looking at its layout. </div>
                            <div class="paragraphFirst"> There are many variations of
                                passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.  
                            </div>
                        </div> 
                    </div>
                    <button class="buttonMore">
                        <a class="buttonLink" href="/AllNewsView">więcej</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="wrapperButtonAllNews">
            <button class="buttonAllNews">
                <a class="buttonALlNewsLink" href="/AllNewsView">Pozostałe
                    aktualności</a>
            </button>
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
        <img src="./assets/smlogo.svg" alt="Small Brand mark" style="height: 80px; margin-top: -20px;" />
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
          <a
            href="http://gminalidzbark.com/"
            target="_blank"
            rel="noopener noreferrer">
            <img
              src="./assets/herb/uglw.png"
              alt="Herg Gminy Lidzbark Warmiński"
              title="Gmina Lidzbark Warmiński"
              class="partnersWrapperItemPhoto"
            />
          </a>
        </div>
        <div class="partnersWrapperItem">
          <a
            href="http://www.lubomino.ug.gov.pl/"
            target="_blank"
            rel="noopener noreferrer">
            <img
              src="./assets/herb/uglub.png"
              alt="Herg Gminy Lubomino"
              title="Gmina Lubomino"
              class="partnersWrapperItemPhoto"
            />
          </a>
        </div>
        <div class="partnersWrapperItem">
          <a
            href="https://www.kolno-gmina.pl/"
            target="_blank"
            rel="noopener noreferrer">
            <img
              src="./assets/herb/ugkol.jpg"
              alt="Herg Gminy Kolno"
              title="Gmina Kolno"
              class="partnersWrapperItemPhoto"
            />
          </a>
        </div>
        <div class="partnersWrapperItem">
          <a
            href="https://gorowoilaweckie.eu/"
            target="_blank"
            rel="noopener noreferrer">
            <img
              src="./assets/herb/uggi.jpg"
              alt="Herg Gminy Górowo Iławeckie"
              title="Gmina Górowo Iławeckie"
              class="partnersWrapperItemPhoto"
            />
          </a>
        </div>
      </div>
</section>

    <?php get_footer(); ?>