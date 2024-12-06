<style>
    /* Container styling */
    .nav-item {
      position: relative;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    /* Image styling */
    .nav-item img {
      border-radius: 50%;
    }

    /* Dropdown menu styling */
    .dropdown-menu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      min-width: 120px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 10;
    }

    /* Individual dropdown items */
    .dropdown-menu a,
    .dropdown-menu button {
      display: block;
      width: 100%;
      padding: 10px;
      text-align: left;
      color: #333;
      text-decoration: none;
      background: none;
      border: none;
      cursor: pointer;
    }

    .dropdown-menu a:hover,
    .dropdown-menu button:hover {
      background-color: #f0f0f0;
    }

    /* Show dropdown menu when .show is added */
    .dropdown-menu.show {
      display: block;
    }
  </style>


<header id="sochead" class="site-header social-header user-nav-active">
    <nav class="navbar beehive-navbar social fixed-top">
        <div class="container">
            <div id="beehive-ajax-search" class="beehive-ajax-search">
                <form role="search" method="GET" class="ajax-search-form form-inline" action="{{ route('find-people') }}">
                    <div class="search-field" style="display: flex">
                        <i class="fa fa-search"></i>
                        <input
                            id="ajax-search-textfield"
                            type="text"
                            name="s"
                            placeholder="Search..."
                            value="{{ request('s') }}"
                            autocomplete="off"
                            required
                        />
                        <button style="font-size: 12px; padding: .3rem .5rem;">Search</button>
                    </div>
                </form>
            </div>

            <ul id="navbar-user" class="navbar-nav navbar-user">
                @if (Auth::guard('web')->check())
                <li class="nav-item">
                    <img width="30" height="30" src="{{ asset(Auth::guard('web')->user()->profile_picture) }}" alt="User Profile Picture">
                    <a href="#" class="nav-link login" onclick="toggleDropdown(event)">
                      {{ Auth::guard('web')->user()->first_name }} {{ Auth::guard('web')->user()->last_name }}
                    </a>

                    <!-- Custom dropdown menu -->
                    <div class="dropdown-menu" id="userDropdown">
                      <a href="/profile">Profile</a>
                      <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                        @csrf
                        <button type="submit" style="border-radius: 0px">Logout</button>
                      </form>
                    </div>
                  </li>

                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link login">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>


<script>
    // Function to toggle the dropdown visibility
    function toggleDropdown(event) {
      event.preventDefault();
      document.getElementById("userDropdown").classList.toggle("show");
    }

    // Close the dropdown if clicked outside
    window.onclick = function(event) {
      if (!event.target.closest('.nav-item')) {
        document.getElementById("userDropdown").classList.remove("show");
      }
    };
  </script>
