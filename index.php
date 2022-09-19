<?php get_template_part('header-home'); ?>

<body>
<div class="navbar" id="navbar">
      <div class="navbar-brand">
        <a href="/">
          <img src="./assets/logo.svg" alt="Brand Logo" id="brandLogo" />
        </a>
      </div>
      <div class="navbar-toggler"></div>
      <div class="collapse" >
        <div class="me-auto nav" id="nav" navbar>
          <div class="nav-item">
            <div class="nav-link">
              <a href="/" id="buttonLink">Start</a>
            </div>
          </div>
          <div class="nav-item">
           <div class="nav-link">
              <a href="/AboutView" id="buttonLink">O nas</a>
           </div>
          </div>
          <div class="nav-item">
           <div class="nav-link">
              <a href="/ContactView" id="buttonLink">Kontakt</a>
            </div>
          </div>

          <ul class="uncontrolled-dropdown nav inNavbar" >
            <div class="dropdown-toggle nav" id="buttonLinkMore">
              Obiekty           
            </div>
            <ul class="dropdownMenu down">
              <ul class="uncontrolled-dropdown">
                <button class="dropdown-toggle nav" id="buttonLinkMore">Hydrofornie</button>
                <ul class="dropdownMenu down">
                  <li class="dropdown-item">
                    <a href="/HydroLwView" id="buttonLinkMoreItem">Lidzbark Warmiński</a>
                  </li>
                  <li class="dropdown-item">
                    <a href="/HydroGiView" id="buttonLinkMoreItem">Górowo Iławeckie</a>
                  </li >
                  <li class="dropdown-item">
                    <a href="/HydroKolView" id="buttonLinkMoreItem">Kolno</a>
                  </li>
                  <li class="dropdown-item">
                    <a href="/HydroLubView" id="buttonLinkMoreItem">Lubomino</a>
                  </li >
                </li>
              </ul>

              <ul class="uncontrolled-dropdown">
                <button class="dropdown-toggle nav" id="buttonLinkMore">
                  Oczyszczalnie ścieków
                  <ArrowDropDown
                    id="iconDropDown"
                    style="margin-left: -7px"
                  />
                </button >
                <ul class="dropdown-menu down">
                  <li class="dropdown-item">
                    <a href="/OczyszczLwView" id="buttonLinkMoreItem">
                      Lidzbark Warmiński
                    </a>
                  </li >
                  <li class="dropdown-item">
                    <a href="/OczyszczGiView" id="buttonLinkMoreItem">
                      Górowo Iławeckie
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a href="/OczyszczKolView" id="buttonLinkMoreItem">
                      Kolno
                    </a>
                  </li >
                  <li class="dropdown-item">
                    <a href="/OczyszczLubView" id="buttonLinkMoreItem">
                      Lubomino
                    </a>
                  </li>
                </ul>
              </ul>
            </ul>
          </ul>
</div>
        <div>
          <button type="submit" id="accessibleIconButton"></button>
          <button type="submit" id="accessibleIconButton"></button>
          <button type="submit" id="accessibleIconButton"></button>
          <button type="submit" id="accessibleIconButton"></button>
        </div>
        <div>
          <a
            href="http://lidzbarkwarminski-ekowod.bip-wm.pl"
            target="_blank"
            rel="noopener noreferrer"
            id="linkFooter">
            <img
              src="./assets/bip.png"
              alt="bip logo"
              style="height: 30px"
              title="Biuletyn Informacji Publicznej"
            />
          </a>
        </div>
      </div>
</div>
    <main>
    


    </main>

    <?php get_footer(); ?>