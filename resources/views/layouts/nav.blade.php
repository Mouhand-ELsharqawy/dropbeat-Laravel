<body>
    <!-- header section start -->
    <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ (request()->is('/')) ? ' active' : '' }}">
              <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item {{ (request()->is('training')) ? 'active' : '' }}">
              <a class="nav-link" href="/training">TRAININGS</a>
            </li>
            <li class="nav-item {{ (request()->is('class')) ? 'active' : '' }}">
              <a class="nav-link" href="/class">CLASSES</a>
            </li>
            <li class="nav-item {{ (request()->is('show')) ? ' active' : '' }}">
              <a class="nav-link" href="/show">SHOWS</a>
            </li>
            <li class="nav-item {{ (request()->is('short')) ? ' active' : '' }}">
              <a class="nav-link" href="/short">SHORTCODES</a>
            </li>
            <li class="{{ (request()->is('contact')) ? 'active' : '' }}">
              <a class="nav-link" href="/contact">CONTACT</a>
            </li>
          </ul>                                          
          
        </div>
      </nav>
    </div>
    <!-- header section end -->
    