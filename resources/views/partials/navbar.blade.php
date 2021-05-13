<header class="main-header">
      <a href="{{ url('/') }}" class="logo-holder ajax"><img src="{{asset('images/iso.png') }}" alt="" /></a>
      <!-- nav-button-wrap-->
      <div class="nav-button but-hol">
        <span class="nos"></span>
        <span class="ncs"></span>
        <span class="nbs"></span>
        <div class="menu-button-text">Menu</div>
      </div>
      <!-- nav-button-wrap end-->
      <div class="header-social">
        <ul>
          <li class="tooltip-i">
            <a href="{{ url('/carreers') }}"> <i class="fa fa-briefcase" aria-hidden="true"></i>
            </a>
             <span class="tooltip-i_txt">Carrers</span>
          </li>
          <li class="tooltip-i">
            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <span class="tooltip-i_txt">Linkedin</span>
          </li>
          <li class="linea"></li>
          <li class="tooltip-i">
            <a href="tel:12345678" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i>
            </a>
            <span class="tooltip-i_txt">Phone</span>
          </li>
          <li class="tooltip-i">
            <a href="mailto:lorem@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i>
            </a>
            <span class="tooltip-i_txt">Contact</span>
          </li>
        </ul>
      </div>
      <div class="folio-btn">
        <a class="folio-btn-item aja " href="{{ url('/contact') }}"><i class="fa fa-industry" aria-hidden="true"></i>
        </a>
        <span class="folio-btn-tooltip">Contact  / Our branches</span>
      </div>
    </header>