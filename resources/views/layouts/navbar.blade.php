<header id="sochead" class="site-header social-header user-nav-active">
    <nav class="navbar beehive-navbar social fixed-top">
      <div class="container">
        <div id="beehive-ajax-search" class="beehive-ajax-search">
          <form
            role="search"
            method="get"
            id="ajax-search-form"
            class="ajax-search-form form-inline"
            action="https://mythemestore.com/beehive-preview/"
          >
            <div class="search-field">
              <i class="icon ion-android-search"></i>
              <input
                id="ajax-search-textfield"
                type="text"
                name="s"
                placeholder="Search..."
                value=""
                autocomplete="off"
                required
              />
              <span class="beehive-loading-ring"></span>
            </div>
            <div class="search-button">
              <button type="submit" class="search-submit">
                <i class="icon ion-android-search"></i>
              </button>
            </div>
          </form>
          <div id="ajax-search-result"></div>
        </div>

        <ul id="navbar-user" class="navbar-nav navbar-user">
          <li class="mini-cart nav-item">
            <a
              href="https://mythemestore.com/beehive-preview/cart/"
              class="cart-contents nav-link"
              title="View Cart"
              ><i class="uil-cart"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              href="#"
              class="nav-link login"
              data-toggle="modal"
              data-target="#login-modal"
              >Login</a
            >
          </li>
        </ul>
      </div>
    </nav>
  </header>
