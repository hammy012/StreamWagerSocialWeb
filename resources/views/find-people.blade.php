@extends('layouts.app')
@section('header', 'Page Heading')
@section('content')



<div id="content" class="site-content">
    <div id="primary" class="content-area">
      <div class="layout social">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 col-main">
              <main id="main" class="main-content">
                <div class="beehive-title-bar social">
                  <div class="title-bar-wrapper">
                    <div class="title-wrapper screen-reader-text">
                      <h1 class="title h3">Members</h1>
                    </div>
                  </div>
                </div>

                <article
                  id="post-0"
                  class="post-0 page type-page status-publish hentry beehive-post"
                >
                  <div class="entry-content clearfix">
                    <div
                      id="buddypress"
                      class="buddypress-wrap beehive bp-dir-hori-nav alignwide"
                    >
                      <nav
                        class="members-type-navs main-navs bp-navs dir-navs"
                        role="navigation"
                        aria-label="Directory menu"
                      >
                        <ul class="component-navigation members-nav">
                          <li
                            id="members-all"
                            class=""
                            data-bp-scope="all"
                            data-bp-object="members"
                          >
                            <a
                              href="https://mythemestore.com/beehive-preview/members/"
                            >
                              All Members
                              <span class="count">15</span>
                            </a>
                          </li>
                        </ul>
                        <!-- .component-navigation -->
                      </nav>
                      <!-- .bp-navs -->

                      <div class="screen-content">
                        <div
                          class="subnav-filters filters no-ajax"
                          id="subnav-filters"
                        >
                          <div class="subnav-search clearfix">
                            <div
                              class="dir-search members-search bp-search"
                              data-bp-search="members"
                            >
                              <form
                                action=""
                                method="get"
                                class="bp-dir-search-form"
                                id="dir-members-search-form"
                                role="search"
                              >
                                <label
                                  for="dir-members-search"
                                  class="bp-screen-reader-text"
                                  >Search Members...</label
                                >

                                <input
                                  id="dir-members-search"
                                  name="members_search"
                                  type="search"
                                  placeholder="Search Members..."
                                />

                                <button
                                  type="submit"
                                  id="dir-members-search-submit"
                                  class="nouveau-search-submit"
                                  name="dir_members_search_submit"
                                >
                                  <span
                                    class="dashicons dashicons-search"
                                    aria-hidden="true"
                                  ></span>
                                  <span
                                    id="button-text"
                                    class="bp-screen-reader-text"
                                    >Search</span
                                  >
                                </button>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- search & filters -->

                        <div
                          id="members-dir-list"
                          class="members dir-list"
                          data-bp-list="members"
                          style=""
                        >
                          <ul
                            id="members-list"
                            class="item-list members-list bp-list grid two"
                          >
                            <li
                              class="item-entryanimate-itemslideInUp odd is-online is-current-user"
                              data-bp-item-id="3"
                              data-bp-item-component="members"
                            >
                              <div class="list-wrap">
                                <div class="item-avatar">
                                  <a
                                    href="https://mythemestore.com/beehive-preview/members/user/"
                                    ><img
                                      loading="lazy"
                                      src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                      class="avatar user-3-avatar avatar-200 photo"
                                      width="200"
                                      height="200"
                                      alt="Profile picture of Tum Yeto"
                                  /></a>
                                </div>

                                <div class="item">
                                  <div class="item-block">
                                    <h4 class="list-title member-name">
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                        >Tum Yeto</a
                                      >
                                    </h4>

                                    <p class="item-meta last-activity mute">
                                      Active 4 minutes ago
                                    </p>
                                    <!-- .item-meta -->

                                    <ul class="connections">
                                      <li>
                                        <span class="count">0</span>
                                        <p class="mute">Friends</p>
                                      </li>
                                      <li>
                                        <span class="count">5</span>
                                        <p class="mute">Groups</p>
                                      </li>
                                    </ul>

                                    <p class="latest-update">&nbsp;</p>

                                    <ul class="members-meta action">
                                      <li class="generic-button">
                                        <a
                                          href="https://mythemestore.com/beehive-preview/members/user/"
                                          >My Profile</a
                                        >
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- // .item -->
                              </div>
                            </li>

                            <li
                              class="item-entryanimate-itemslideInUp even"
                              data-bp-item-id="1"
                              data-bp-item-component="members"
                            >
                              <div class="list-wrap">
                                <div class="item-avatar">
                                  <a
                                    href="https://mythemestore.com/beehive-preview/members/razor/"
                                    ><img
                                      loading="lazy"
                                      src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/1/6005b5c330c63-bpfull.png"
                                      class="avatar user-1-avatar avatar-200 photo"
                                      width="200"
                                      height="200"
                                      alt="Profile picture of Sephiroth"
                                  /></a>
                                </div>

                                <div class="item">
                                  <div class="item-block">
                                    <h4 class="list-title member-name">
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/razor/"
                                        >Sephiroth</a
                                      >
                                    </h4>

                                    <p class="item-meta last-activity mute">
                                      Active 4 days, 19 hours ago
                                    </p>
                                    <!-- .item-meta -->

                                    <ul class="connections">
                                      <li>
                                        <span class="count">10</span>
                                        <p class="mute">Friends</p>
                                      </li>
                                      <li>
                                        <span class="count">6</span>
                                        <p class="mute">Groups</p>
                                      </li>
                                    </ul>

                                    <p class="latest-update"></p>

                                    <ul class="members-meta action">
                                      <li
                                        id="friendship-button-1"
                                        class="friendship-button pending_friend generic-button"
                                      >
                                        <button
                                          id="friend-1"
                                          class="friendship-button pending_friend requested"
                                          rel="remove"
                                          title="Cancel Friendship Requested"
                                          data-bp-nonce="https://mythemestore.com/beehive-preview/members/user/friends/requests/cancel/1/?_wpnonce=971b339e3f"
                                          data-bp-btn-action="pending"
                                        >
                                          Cancel Friendship Request
                                        </button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- // .item -->
                              </div>
                            </li>

                            <li
                              class="item-entryanimate-itemslideInUp odd"
                              data-bp-item-id="8"
                              data-bp-item-component="members"
                            >
                              <div class="list-wrap">
                                <div class="item-avatar">
                                  <a
                                    href="https://mythemestore.com/beehive-preview/members/linda/"
                                    ><img
                                      loading="lazy"
                                      src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/8/5e2cd470750a5-bpfull.jpg"
                                      class="avatar user-8-avatar avatar-200 photo"
                                      width="200"
                                      height="200"
                                      alt="Profile picture of Linda Lohan"
                                  /></a>
                                </div>

                                <div class="item">
                                  <div class="item-block">
                                    <h4 class="list-title member-name">
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/linda/"
                                        >Linda Lohan</a
                                      >
                                    </h4>

                                    <p class="item-meta last-activity mute">
                                      Active 9 months, 2 weeks ago
                                    </p>
                                    <!-- .item-meta -->

                                    <ul class="connections">
                                      <li>
                                        <span class="count">6</span>
                                        <p class="mute">Friends</p>
                                      </li>
                                      <li>
                                        <span class="count">5</span>
                                        <p class="mute">Groups</p>
                                      </li>
                                    </ul>

                                    <p class="latest-update">
                                      At vero eos et accusamus et iusto odio
                                      dignis...
                                    </p>

                                    <ul class="members-meta action">
                                      <li
                                        id="friendship-button-8"
                                        class="friendship-button not_friends generic-button"
                                      >
                                        <button
                                          id="friend-8"
                                          class="friendship-button not_friends add"
                                          rel="add"
                                          title="Add Friend"
                                          data-bp-nonce="https://mythemestore.com/beehive-preview/members/user/friends/add-friend/8/?_wpnonce=852b58f735"
                                          data-bp-btn-action="not_friends"
                                        >
                                          Add Friend
                                        </button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- // .item -->
                              </div>
                            </li>

                            <li
                              class="item-entryanimate-itemslideInUp even"
                              data-bp-item-id="4"
                              data-bp-item-component="members"
                            >
                              <div class="list-wrap">
                                <div class="item-avatar">
                                  <a
                                    href="https://mythemestore.com/beehive-preview/members/natashya/"
                                    ><img
                                      loading="lazy"
                                      src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/4/5e2cc15a922f4-bpfull.jpg"
                                      class="avatar user-4-avatar avatar-200 photo"
                                      width="200"
                                      height="200"
                                      alt="Profile picture of Irina Petrova"
                                  /></a>
                                </div>

                                <div class="item">
                                  <div class="item-block">
                                    <h4 class="list-title member-name">
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/natashya/"
                                        >Irina Petrova</a
                                      >
                                    </h4>

                                    <p class="item-meta last-activity mute">
                                      Active 9 months, 2 weeks ago
                                    </p>
                                    <!-- .item-meta -->

                                    <ul class="connections">
                                      <li>
                                        <span class="count">10</span>
                                        <p class="mute">Friends</p>
                                      </li>
                                      <li>
                                        <span class="count">3</span>
                                        <p class="mute">Groups</p>
                                      </li>
                                    </ul>

                                    <p class="latest-update">
                                      At vero eos et accusamus et iusto odio
                                      dignis...
                                    </p>

                                    <ul class="members-meta action">
                                      <li
                                        id="friendship-button-4"
                                        class="friendship-button pending_friend generic-button"
                                      >
                                        <button
                                          id="friend-4"
                                          class="friendship-button pending_friend requested"
                                          rel="remove"
                                          title="Cancel Friendship Requested"
                                          data-bp-nonce="https://mythemestore.com/beehive-preview/members/user/friends/requests/cancel/4/?_wpnonce=971b339e3f"
                                          data-bp-btn-action="pending"
                                        >
                                          Cancel Friendship Request
                                        </button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- // .item -->
                              </div>
                            </li>

                            <li
                              class="item-entryanimate-itemslideInUp odd"
                              data-bp-item-id="16"
                              data-bp-item-component="members"
                            >
                              <div class="list-wrap">
                                <div class="item-avatar">
                                  <a
                                    href="https://mythemestore.com/beehive-preview/members/jennie/"
                                    ><img
                                      loading="lazy"
                                      src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/16/5e2d07dbc43f2-bpfull.jpg"
                                      class="avatar user-16-avatar avatar-200 photo"
                                      width="200"
                                      height="200"
                                      alt="Profile picture of Jennie Ferguson"
                                  /></a>
                                </div>

                                <div class="item">
                                  <div class="item-block">
                                    <h4 class="list-title member-name">
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/jennie/"
                                        >Jennie Ferguson</a
                                      >
                                    </h4>

                                    <p class="item-meta last-activity mute">
                                      Active 1 year, 10 months ago
                                    </p>
                                    <!-- .item-meta -->

                                    <ul class="connections">
                                      <li>
                                        <span class="count">1</span>
                                        <p class="mute">Friends</p>
                                      </li>
                                      <li>
                                        <span class="count">1</span>
                                        <p class="mute">Groups</p>
                                      </li>
                                    </ul>

                                    <p class="latest-update">
                                      It is a long established fact that a
                                      reader w...
                                    </p>

                                    <ul class="members-meta action">
                                      <li
                                        id="friendship-button-16"
                                        class="friendship-button pending_friend generic-button"
                                      >
                                        <button
                                          id="friend-16"
                                          class="friendship-button pending_friend requested"
                                          rel="remove"
                                          title="Cancel Friendship Requested"
                                          data-bp-nonce="https://mythemestore.com/beehive-preview/members/user/friends/requests/cancel/16/?_wpnonce=971b339e3f"
                                          data-bp-btn-action="pending"
                                        >
                                          Cancel Friendship Request
                                        </button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- // .item -->
                              </div>
                            </li>

                            <li
                              class="item-entryanimate-itemslideInUp even"
                              data-bp-item-id="5"
                              data-bp-item-component="members"
                            >
                              <div class="list-wrap">
                                <div class="item-avatar">
                                  <a
                                    href="https://mythemestore.com/beehive-preview/members/robert/"
                                    ><img
                                      loading="lazy"
                                      src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/5/5e2cc51a2a79d-bpfull.jpg"
                                      class="avatar user-5-avatar avatar-200 photo"
                                      width="200"
                                      height="200"
                                      alt="Profile picture of Robert Cook"
                                  /></a>
                                </div>

                                <div class="item">
                                  <div class="item-block">
                                    <h4 class="list-title member-name">
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/robert/"
                                        >Robert Cook</a
                                      >
                                    </h4>

                                    <p class="item-meta last-activity mute">
                                      Active 1 year, 10 months ago
                                    </p>
                                    <!-- .item-meta -->

                                    <ul class="connections">
                                      <li>
                                        <span class="count">5</span>
                                        <p class="mute">Friends</p>
                                      </li>
                                      <li>
                                        <span class="count">4</span>
                                        <p class="mute">Groups</p>
                                      </li>
                                    </ul>

                                    <p class="latest-update">
                                      Lorem ipsum dolor sit amet,
                                      consectetur adipi...
                                    </p>

                                    <ul class="members-meta action">
                                      <li
                                        id="friendship-button-5"
                                        class="friendship-button pending_friend generic-button"
                                      >
                                        <button
                                          id="friend-5"
                                          class="friendship-button pending_friend requested"
                                          rel="remove"
                                          title="Cancel Friendship Requested"
                                          data-bp-nonce="https://mythemestore.com/beehive-preview/members/user/friends/requests/cancel/5/?_wpnonce=971b339e3f"
                                          data-bp-btn-action="pending"
                                        >
                                          Cancel Friendship Request
                                        </button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- // .item -->
                              </div>
                            </li>

                            <li
                              class="item-entryanimate-itemslideInUp odd"
                              data-bp-item-id="6"
                              data-bp-item-component="members"
                            >
                              <div class="list-wrap">
                                <div class="item-avatar">
                                  <a
                                    href="https://mythemestore.com/beehive-preview/members/sophia/"
                                    ><img
                                      loading="lazy"
                                      src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/6/5e2cccd55d57d-bpfull.jpg"
                                      class="avatar user-6-avatar avatar-200 photo"
                                      width="200"
                                      height="200"
                                      alt="Profile picture of Sophia Lee"
                                  /></a>
                                </div>

                                <div class="item">
                                  <div class="item-block">
                                    <h4 class="list-title member-name">
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/sophia/"
                                        >Sophia Lee</a
                                      >
                                    </h4>

                                    <p class="item-meta last-activity mute">
                                      Active 1 year, 10 months ago
                                    </p>
                                    <!-- .item-meta -->

                                    <ul class="connections">
                                      <li>
                                        <span class="count">3</span>
                                        <p class="mute">Friends</p>
                                      </li>
                                      <li>
                                        <span class="count">5</span>
                                        <p class="mute">Groups</p>
                                      </li>
                                    </ul>

                                    <p class="latest-update">
                                      There are many variations of passages
                                      of Lore...
                                    </p>

                                    <ul class="members-meta action">
                                      <li
                                        id="friendship-button-6"
                                        class="friendship-button pending_friend generic-button"
                                      >
                                        <button
                                          id="friend-6"
                                          class="friendship-button pending_friend requested"
                                          rel="remove"
                                          title="Cancel Friendship Requested"
                                          data-bp-nonce="https://mythemestore.com/beehive-preview/members/user/friends/requests/cancel/6/?_wpnonce=971b339e3f"
                                          data-bp-btn-action="pending"
                                        >
                                          Cancel Friendship Request
                                        </button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- // .item -->
                              </div>
                            </li>

                            <li
                              class="item-entryanimate-itemslideInUp even"
                              data-bp-item-id="14"
                              data-bp-item-component="members"
                            >
                              <div class="list-wrap">
                                <div class="item-avatar">
                                  <a
                                    href="https://mythemestore.com/beehive-preview/members/jonathon/"
                                    ><img
                                      loading="lazy"
                                      src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/14/5e2d01291542c-bpfull.jpg"
                                      class="avatar user-14-avatar avatar-200 photo"
                                      width="200"
                                      height="200"
                                      alt="Profile picture of John Thompson"
                                  /></a>
                                </div>

                                <div class="item">
                                  <div class="item-block">
                                    <h4 class="list-title member-name">
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/jonathon/"
                                        >John Thompson</a
                                      >
                                    </h4>

                                    <p class="item-meta last-activity mute">
                                      Active 3 years, 12 months ago
                                    </p>
                                    <!-- .item-meta -->

                                    <ul class="connections">
                                      <li>
                                        <span class="count">6</span>
                                        <p class="mute">Friends</p>
                                      </li>
                                      <li>
                                        <span class="count">4</span>
                                        <p class="mute">Groups</p>
                                      </li>
                                    </ul>

                                    <p class="latest-update">
                                      It is a long established fact that a
                                      reader w...
                                    </p>

                                    <ul class="members-meta action">
                                      <li
                                        id="friendship-button-14"
                                        class="friendship-button pending_friend generic-button"
                                      >
                                        <button
                                          id="friend-14"
                                          class="friendship-button pending_friend requested"
                                          rel="remove"
                                          title="Cancel Friendship Requested"
                                          data-bp-nonce="https://mythemestore.com/beehive-preview/members/user/friends/requests/cancel/14/?_wpnonce=971b339e3f"
                                          data-bp-btn-action="pending"
                                        >
                                          Cancel Friendship Request
                                        </button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- // .item -->
                              </div>
                            </li>

                            <li
                              class="item-entryanimate-itemslideInUp odd"
                              data-bp-item-id="12"
                              data-bp-item-component="members"
                            >
                              <div class="list-wrap">
                                <div class="item-avatar">
                                  <a
                                    href="https://mythemestore.com/beehive-preview/members/alexis/"
                                    ><img
                                      loading="lazy"
                                      src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/12/5e2cfd5d18ea0-bpfull.jpg"
                                      class="avatar user-12-avatar avatar-200 photo"
                                      width="200"
                                      height="200"
                                      alt="Profile picture of Alexis Clark"
                                  /></a>
                                </div>

                                <div class="item">
                                  <div class="item-block">
                                    <h4 class="list-title member-name">
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/alexis/"
                                        >Alexis Clark</a
                                      >
                                    </h4>

                                    <p class="item-meta last-activity mute">
                                      Active 4 years ago
                                    </p>
                                    <!-- .item-meta -->

                                    <ul class="connections">
                                      <li>
                                        <span class="count">4</span>
                                        <p class="mute">Friends</p>
                                      </li>
                                      <li>
                                        <span class="count">1</span>
                                        <p class="mute">Groups</p>
                                      </li>
                                    </ul>

                                    <p class="latest-update">
                                      On the other hand, we denounce with
                                      righteous...
                                    </p>

                                    <ul class="members-meta action">
                                      <li
                                        id="friendship-button-12"
                                        class="friendship-button pending_friend generic-button"
                                      >
                                        <button
                                          id="friend-12"
                                          class="friendship-button pending_friend requested"
                                          rel="remove"
                                          title="Cancel Friendship Requested"
                                          data-bp-nonce="https://mythemestore.com/beehive-preview/members/user/friends/requests/cancel/12/?_wpnonce=971b339e3f"
                                          data-bp-btn-action="pending"
                                        >
                                          Cancel Friendship Request
                                        </button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- // .item -->
                              </div>
                            </li>
                          </ul>

                          <div
                            class="bp-pagination bottom"
                            data-bp-pagination="upage"
                          >
                            <div class="pag-count bottom">
                              <p class="pag-data">
                                Viewing 1 - 15 of 15 active members
                              </p>
                            </div>
                          </div>
                        </div>
                        <!-- #members-dir-list -->
                      </div>

                      <!-- // .screen-content -->
                    </div>
                    <!-- #buddypress -->
                  </div>
                  <!-- .entry-contents -->
                </article>
                <!-- #post-0 -->
              </main>
              <!-- #main -->
            </div>
            <!-- .col-main -->

            <div class="col-lg-4 col-aside">
              <aside
                id="buddypress_sidebar"
                class="widget-area sidebar-widget-area sticky-sidebar"
              >
                <div
                  id="buddy_bridge_members_widget-3"
                  class="widget buddy-bridge-dynamic-members-list buddypress"
                >
                  <h5 class="widget-title">Members</h5>

                  <div
                    class="item-options"
                    id="buddy-bridge-members-list-options"
                  >
                    <a
                      href="https://mythemestore.com/beehive-preview/members/"
                      id="buddy-bridge-newest-members"
                      >Newest</a
                    >
                    <span class="bp-separator" role="separator">|</span>
                    <a
                      href="https://mythemestore.com/beehive-preview/members/"
                      id="buddy-bridge-active-members"
                      class="selected"
                      >Active</a
                    >

                    <span class="bp-separator" role="separator">|</span>
                    <a
                      href="https://mythemestore.com/beehive-preview/members/"
                      id="buddy-bridge-popular-members"
                      >Popular</a
                    >
                  </div>

                  <ul
                    id="buddy-bridge-members-list"
                    class="item-list"
                    aria-live="polite"
                    aria-relevant="all"
                    aria-atomic="true"
                  >
                    <li class="vcard">
                      <div class="item-avatar">
                        <a
                          href="https://mythemestore.com/beehive-preview/members/user/"
                          ><img
                            loading="lazy"
                            loading="lazy"
                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                            class="avatar user-3-avatar avatar-50 photo"
                            width="50"
                            height="50"
                            alt="Profile picture of Tum Yeto"
                        /></a>
                      </div>

                      <div class="item">
                        <div class="item-title fn">
                          <a
                            href="https://mythemestore.com/beehive-preview/members/user/"
                            >Tum Yeto</a
                          >
                        </div>
                        <div class="item-meta">
                          <span
                            class="activity"
                            data-livestamp="2024-11-01T13:12:35+0000"
                            >Active 4 minutes ago</span
                          >
                        </div>
                      </div>
                    </li>

                    <li class="vcard">
                      <div class="item-avatar">
                        <a
                          href="https://mythemestore.com/beehive-preview/members/razor/"
                          ><img
                            loading="lazy"
                            loading="lazy"
                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/1/6005b5c352343-bpthumb.png"
                            class="avatar user-1-avatar avatar-50 photo"
                            width="50"
                            height="50"
                            alt="Profile picture of Sephiroth"
                        /></a>
                      </div>

                      <div class="item">
                        <div class="item-title fn">
                          <a
                            href="https://mythemestore.com/beehive-preview/members/razor/"
                            >Sephiroth</a
                          >
                        </div>
                        <div class="item-meta">
                          <span
                            class="activity"
                            data-livestamp="2024-10-27T17:59:23+0000"
                            >Active 4 days, 19 hours ago</span
                          >
                        </div>
                      </div>
                    </li>

                    <li class="vcard">
                      <div class="item-avatar">
                        <a
                          href="https://mythemestore.com/beehive-preview/members/linda/"
                          ><img
                            loading="lazy"
                            loading="lazy"
                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/8/5e2cd47076cdb-bpthumb.jpg"
                            class="avatar user-8-avatar avatar-50 photo"
                            width="50"
                            height="50"
                            alt="Profile picture of Linda Lohan"
                        /></a>
                      </div>

                      <div class="item">
                        <div class="item-title fn">
                          <a
                            href="https://mythemestore.com/beehive-preview/members/linda/"
                            >Linda Lohan</a
                          >
                        </div>
                        <div class="item-meta">
                          <span
                            class="activity"
                            data-livestamp="2024-01-18T18:01:36+0000"
                            >Active 9 months, 2 weeks ago</span
                          >
                        </div>
                      </div>
                    </li>

                    <li class="vcard">
                      <div class="item-avatar">
                        <a
                          href="https://mythemestore.com/beehive-preview/members/natashya/"
                          ><img
                            loading="lazy"
                            loading="lazy"
                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/4/5e2cc15a94152-bpthumb.jpg"
                            class="avatar user-4-avatar avatar-50 photo"
                            width="50"
                            height="50"
                            alt="Profile picture of Irina Petrova"
                        /></a>
                      </div>

                      <div class="item">
                        <div class="item-title fn">
                          <a
                            href="https://mythemestore.com/beehive-preview/members/natashya/"
                            >Irina Petrova</a
                          >
                        </div>
                        <div class="item-meta">
                          <span
                            class="activity"
                            data-livestamp="2024-01-18T18:00:27+0000"
                            >Active 9 months, 2 weeks ago</span
                          >
                        </div>
                      </div>
                    </li>

                    <li class="vcard">
                      <div class="item-avatar">
                        <a
                          href="https://mythemestore.com/beehive-preview/members/jennie/"
                          ><img
                            loading="lazy"
                            loading="lazy"
                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/16/5e2d07dbca09a-bpthumb.jpg"
                            class="avatar user-16-avatar avatar-50 photo"
                            width="50"
                            height="50"
                            alt="Profile picture of Jennie Ferguson"
                        /></a>
                      </div>

                      <div class="item">
                        <div class="item-title fn">
                          <a
                            href="https://mythemestore.com/beehive-preview/members/jennie/"
                            >Jennie Ferguson</a
                          >
                        </div>
                        <div class="item-meta">
                          <span
                            class="activity"
                            data-livestamp="2022-12-31T17:50:38+0000"
                            >Active 1 year, 10 months ago</span
                          >
                        </div>
                      </div>
                    </li>

                    <li class="vcard">
                      <div class="item-avatar">
                        <a
                          href="https://mythemestore.com/beehive-preview/members/robert/"
                          ><img
                            loading="lazy"
                            loading="lazy"
                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/5/5e2cc51a2d057-bpthumb.jpg"
                            class="avatar user-5-avatar avatar-50 photo"
                            width="50"
                            height="50"
                            alt="Profile picture of Robert Cook"
                        /></a>
                      </div>

                      <div class="item">
                        <div class="item-title fn">
                          <a
                            href="https://mythemestore.com/beehive-preview/members/robert/"
                            >Robert Cook</a
                          >
                        </div>
                        <div class="item-meta">
                          <span
                            class="activity"
                            data-livestamp="2022-12-31T17:40:57+0000"
                            >Active 1 year, 10 months ago</span
                          >
                        </div>
                      </div>
                    </li>

                    <li class="vcard">
                      <div class="item-avatar">
                        <a
                          href="https://mythemestore.com/beehive-preview/members/sophia/"
                          ><img
                            loading="lazy"
                            loading="lazy"
                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/6/5e2cccd55f95b-bpthumb.jpg"
                            class="avatar user-6-avatar avatar-50 photo"
                            width="50"
                            height="50"
                            alt="Profile picture of Sophia Lee"
                        /></a>
                      </div>

                      <div class="item">
                        <div class="item-title fn">
                          <a
                            href="https://mythemestore.com/beehive-preview/members/sophia/"
                            >Sophia Lee</a
                          >
                        </div>
                        <div class="item-meta">
                          <span
                            class="activity"
                            data-livestamp="2022-12-31T17:33:18+0000"
                            >Active 1 year, 10 months ago</span
                          >
                        </div>
                      </div>
                    </li>
                  </ul>

                  <input
                    type="hidden"
                    id="_wpnonce-members"
                    name="_wpnonce-members"
                    value="51de541be9"
                  />
                  <input
                    type="hidden"
                    name="members_widget_max"
                    id="members_widget_max"
                    value="7"
                  />
                </div>
                <div
                  id="buddy_bridge_activity_hashtags_widget-3"
                  class="widget buddy-bridge-hashtags-widget buddypress"
                >
                  <h5 class="widget-title">Hashtags</h5>
                  <div class="hashtags activity-hashtags">
                    <a
                      href="https://mythemestore.com/beehive-preview/activity/?activity_search=%23beehive"
                      class="hashtag"
                      rel="nofollow"
                    >
                      <span class="text">#beehive</span>
                      <span class="count">4</span>
                    </a>
                    <a
                      href="https://mythemestore.com/beehive-preview/activity/?activity_search=%23social"
                      class="hashtag"
                      rel="nofollow"
                    >
                      <span class="text">#social</span>
                      <span class="count">3</span>
                    </a>
                    <a
                      href="https://mythemestore.com/beehive-preview/activity/?activity_search=%23wordpress"
                      class="hashtag"
                      rel="nofollow"
                    >
                      <span class="text">#wordpress</span>
                      <span class="count">1</span>
                    </a>
                    <a
                      href="https://mythemestore.com/beehive-preview/activity/?activity_search=%23theme"
                      class="hashtag"
                      rel="nofollow"
                    >
                      <span class="text">#theme</span>
                      <span class="count">1</span>
                    </a>
                    <a
                      href="https://mythemestore.com/beehive-preview/activity/?activity_search=%23community"
                      class="hashtag"
                      rel="nofollow"
                    >
                      <span class="text">#community</span>
                      <span class="count">1</span>
                    </a>
                    <a
                      href="https://mythemestore.com/beehive-preview/activity/?activity_search=%23videos"
                      class="hashtag"
                      rel="nofollow"
                    >
                      <span class="text">#videos</span>
                      <span class="count">1</span>
                    </a>
                    <a
                      href="https://mythemestore.com/beehive-preview/activity/?activity_search=%23shop"
                      class="hashtag"
                      rel="nofollow"
                    >
                      <span class="text">#shop</span>
                      <span class="count">1</span>
                    </a>
                    <a
                      href="https://mythemestore.com/beehive-preview/activity/?activity_search=%23network"
                      class="hashtag"
                      rel="nofollow"
                    >
                      <span class="text">#network</span>
                      <span class="count">1</span>
                    </a>
                    <a
                      href="https://mythemestore.com/beehive-preview/activity/?activity_search=%23photos"
                      class="hashtag"
                      rel="nofollow"
                    >
                      <span class="text">#photos</span>
                      <span class="count">1</span>
                    </a>
                  </div>
                </div>
                <nav class="sidebar-nav-menu">
                  <ul id="menu-sidebar-menu" class="aside-navbar">
                    <li
                      id="menu-item-115"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-115"
                    >
                      <a href="https://mythemestore.com/beehive-preview/"
                        >Home</a
                      >
                    </li>
                    <li
                      id="menu-item-114"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114"
                    >
                      <a
                        href="https://mythemestore.com/beehive-preview/about-us/"
                        >About Us</a
                      >
                    </li>
                    <li
                      id="menu-item-113"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113"
                    >
                      <a
                        href="https://mythemestore.com/beehive-preview/faqs/"
                        >FAQs</a
                      >
                    </li>
                    <li
                      id="menu-item-116"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-116"
                    >
                      <a
                        href="https://mythemestore.com/beehive-preview/blog/"
                        >Blog</a
                      >
                    </li>
                    <li
                      id="menu-item-112"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112"
                    >
                      <a
                        href="https://mythemestore.com/beehive-preview/contact/"
                        >Contact</a
                      >
                    </li>
                  </ul>
                </nav>
              </aside>
            </div>
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .layout -->
    </div>
    <!-- #primary -->
  </div>



@endsection



@section('seo')
    <meta name="keywords"
        content="STREAM WAGER">
    <meta name="description"
        content="">
    <title>Stream Wager</title>
@endsection
