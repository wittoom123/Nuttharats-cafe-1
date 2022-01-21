 <!--sidebar start-->
 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
        <li class="active">
            <a class="" href="{{route('admin')}}">
            <img src="https://img.icons8.com/ios-glyphs/30/000000/home.png"/>
                          <span>Dashboard</span>
                      </a>
          </li>
         <!-- <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="form_component.html">Form Elements</a></li>
              <li><a class="" href="form_validation.html">Form Validation</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="general.html">Elements</a></li>
              <li><a class="" href="buttons.html">Buttons</a></li>
              <li><a class="" href="grids.html">Grids</a></li>
            </ul>
          </li> -->
          
            

          </li>

          <li>
            <a class="" href="{{route('product')}}">
            <img src="https://img.icons8.com/ios-glyphs/30/000000/coffee.png"/>
                          <span>หน้าสินค้า</span>
                      </a>
          </li>
          <li>
            <a class="" href="{{route('coffee_history')}}">
            <img src="https://img.icons8.com/ios-glyphs/30/000000/coffee-break.png"/>
                          <span>ประวัติของกาแฟ</span>

                      </a>

          </li>

          <li>
            <a class="" href="{{route('product_introduction')}}">
            <img src="https://img.icons8.com/material-outlined/35/000000/good-quality--v1.png"/>
                          <span>สินค้าเเนะนำ</span>
                      </a>
          </li>
          <li>
            <a class="" href="{{route('address')}}">
            <img src="https://img.icons8.com/pastel-glyph/30/000000/treasure-map.png"/>
                          <span>ติดต่อ</span>
                      </a>
          </li>
          <li>
          <li>
            <a class="" href="{{route('user')}}">
            <img src="https://img.icons8.com/ios-glyphs/30/000000/user-male.png"/>
                          <span>หน้าผู้ใช้</span>

                      </a>

          </li>
         


          
          <li>
            <a class="fa fa-home"href="/" >Home</a>
            <a  class="fa fa-sign-out" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                    
                      </a>

          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    