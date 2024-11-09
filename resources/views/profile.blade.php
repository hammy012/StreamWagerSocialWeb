@extends('layouts.app')
@section('header', 'Page Heading')
@section('content')




<div id="content" class="site-content" style="margin-top: 200px !important;">

    <div id="primary" class="content-area">
      <div class="layout social-wide">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-main">
              <main id="main" class="main-content">
                <div class="beehive-title-bar social">
                  <div class="title-bar-wrapper">
                    <div class="title-wrapper screen-reader-text">
                      <h1 class="title h3">{{ $user->first_name . ' ' . $user->last_name }}</h1>
                    </div>
                  </div>
                </div>

                <article
                  id="post-0"
                  class="bp_members type-bp_members post-0 page type-page status-publish hentry beehive-post"
                >
                  <div class="entry-content clearfix">
                    <div
                      id="buddypress"
                      class="buddypress-wrap beehive bp-dir-hori-nav alignwide"
                    >
                      <div
                        id="item-header"
                        role="complementary"
                        data-bp-item-id="3"
                        data-bp-item-component="members"
                        class="users-header single-headers"
                      >
                        <div id="cover-image-container">
                          <div id="header-cover-image"></div>

                          <div id="item-header-cover-image">
                            <div class="row">
                              <div class="col-lg-3">
                                <div id="item-header-avatar">
                                  <div class="item-avatar">
                                    <a
                                      href="https://mythemestore.com/beehive-preview/members/user/"
                                    >
                                        <img
                                            loading="lazy"
                                            decoding="async"
                                            src="{{ asset($user->profile_picture) }}"
                                            class="avatar user-3-avatar avatar-200 photo"
                                            width="200"
                                            height="200"
                                            alt="Profile picture of Tum Yeto"
                                        />
                                    </a>
                                  </div>
                                  <h3 class="profile-name">{{ $user->first_name . ' ' . $user->last_name }}</h3>
                                </div>
                                <!-- #item-header-avatar -->
                              </div>

                              <div class="col-lg-9">
                                <div id="item-header-content">
                                  <h2 class="user-nicename">{{ $user->username }}</h2>

                                  <ul class="member-header-actions action">
                                    <li class="generic-button">
                                      <a
                                        class="edit-profile"
                                        href="https://mythemestore.com/beehive-preview/members/user/profile/edit/#item-body"
                                        >Edit profile</a
                                      >
                                    </li>
                                    <li></li>
                                    {{--  <li class="generic-button">
                                      <a
                                        class="update-cover"
                                        href="https://mythemestore.com/beehive-preview/members/user/profile/change-cover-image/#item-body"
                                        >Update cover</a
                                      >
                                    </li>  --}}
                                  </ul>
                                </div>
                                <!-- #item-header-content -->
                              </div>
                            </div>
                          </div>
                          <!-- #item-header-cover-image -->
                        </div>
                        <!-- #cover-image-container -->
                      </div>
                      <!-- #item-header -->

                      <div class="bp-wrap">
                        <nav
                          class="main-navs no-ajax bp-navs single-screen-navs horizontal users-nav"
                          id="object-nav"
                          role="navigation"
                          aria-label="Member menu"
                        >
                          <div class="row">
                            <div class="col-lg-6 ml-auto mr-auto">
                              <div class="nav-container">
                                <ul class="profile-nav">
                                  <li
                                    id="activity-personal-li"
                                    class="bp-personal-tab current selected"
                                    >
                                    <a
                                      href="https://mythemestore.com/beehive-preview/members/user/activity/"
                                      id="user-activity"
                                      title="Activity"
                                    >
                                      <span class="nav-link-text"
                                        >Activity</span
                                      >
                                    </a>
                                  </li>

                                  <li
                                    id="friends-personal-li"
                                    class="bp-personal-tab"
                                    >
                                    <a
                                      href="https://mythemestore.com/beehive-preview/members/user/friends/"
                                      id="user-friends"
                                      title="Friends"
                                    >
                                      <span class="nav-link-text"
                                        >Friends</span
                                      >
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </nav>

                        <div id="item-body" class="item-body">
                          <div class="row">
                            <div class="col-lg-3 profile-col-aside left">
                              <aside
                                class="widget-area profile-widget-area displayed-profile-info"
                              >
                                <div class="widget">
                                  <ul class="connections">
                                    <li>
                                      <span class="count color-primary"
                                        >0</span
                                      >
                                      <p>Friends</p>
                                    </li>
                                    <li>
                                      <span class="count color-primary"
                                        >5</span
                                      >
                                      <p>Groups</p>
                                    </li>
                                  </ul>
                                </div>

                                <div class="widget">
                                  <h5 class="widget-title">My photos</h5>
                                  <ul class="member-photo-list">
                                    <li
                                      class="rtmedia-list-media rtm-gallery-list member-photo"
                                    >
                                      <div class="inner">
                                        <a
                                          href="https://mythemestore.com/beehive-preview/members/user/media/3530/"
                                        >
                                          <img
                                            decoding="async"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/frontend-Php-Laravel-dark-mode-250x250.png"
                                            alt="frontend Php Laravel dark mode"
                                          />
                                        </a>
                                      </div>
                                    </li>
                                    <li
                                      class="rtmedia-list-media rtm-gallery-list member-photo"
                                    >
                                      <div class="inner">
                                        <a
                                          href="https://mythemestore.com/beehive-preview/members/user/media/3528/"
                                        >
                                          <img
                                            decoding="async"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6076-250x250.jpeg"
                                            alt="IMG_6076"
                                          />
                                        </a>
                                      </div>
                                    </li>
                                    <li
                                      class="rtmedia-list-media rtm-gallery-list member-photo"
                                    >
                                      <div class="inner">
                                        <a
                                          href="https://mythemestore.com/beehive-preview/members/user/media/3527/"
                                        >
                                          <img
                                            decoding="async"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6083-250x250.jpeg"
                                            alt="IMG_6083"
                                          />
                                        </a>
                                      </div>
                                    </li>
                                    <li
                                      class="rtmedia-list-media rtm-gallery-list member-photo"
                                    >
                                      <div class="inner">
                                        <a
                                          href="https://mythemestore.com/beehive-preview/members/user/media/3526/"
                                        >
                                          <img
                                            decoding="async"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6080-250x250.png"
                                            alt="IMG_6080"
                                          />
                                        </a>
                                      </div>
                                    </li>
                                    <li
                                      class="rtmedia-list-media rtm-gallery-list member-photo"
                                    >
                                      <div class="inner">
                                        <a
                                          href="https://mythemestore.com/beehive-preview/members/user/media/3525/"
                                        >
                                          <img
                                            decoding="async"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6079-250x250.jpeg"
                                            alt="IMG_6079"
                                          />
                                        </a>
                                      </div>
                                    </li>
                                    <li
                                      class="rtmedia-list-media rtm-gallery-list member-photo"
                                    >
                                      <div class="inner">
                                        <a
                                          href="https://mythemestore.com/beehive-preview/members/user/media/3524/"
                                        >
                                          <img
                                            decoding="async"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6078-250x250.png"
                                            alt="IMG_6078"
                                          />
                                        </a>
                                      </div>
                                    </li>
                                    <li
                                      class="rtmedia-list-media rtm-gallery-list member-photo"
                                    >
                                      <div class="inner">
                                        <a
                                          href="https://mythemestore.com/beehive-preview/members/user/media/3523/"
                                        >
                                          <img
                                            decoding="async"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6081-250x250.jpeg"
                                            alt="IMG_6081"
                                          />
                                        </a>
                                      </div>
                                    </li>
                                    <li
                                      class="rtmedia-list-media rtm-gallery-list member-photo"
                                    >
                                      <div class="inner">
                                        <a
                                          href="https://mythemestore.com/beehive-preview/members/user/media/3522/"
                                        >
                                          <img
                                            decoding="async"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6082-250x250.png"
                                            alt="IMG_6082"
                                          />
                                        </a>
                                      </div>
                                    </li>
                                    <li
                                      class="rtmedia-list-media rtm-gallery-list member-photo"
                                    >
                                      <div class="inner">
                                        <a
                                          href="https://mythemestore.com/beehive-preview/members/user/media/3521/"
                                        >
                                          <img
                                            decoding="async"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/EFE_6726-250x250.jpg"
                                            alt="EFE_6726"
                                          />
                                        </a>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </aside>
                            </div>

                            <div class="col-lg-9 profile-col-main">

                              <h2 class="bp-screen-reader-text">
                                Member Activities
                              </h2>

                              <h2 class="bp-screen-reader-text">
                                Post Update
                              </h2>

                              <div
                                id="bp-nouveau-activity-form"
                                class="activity-update-form"
                              ></div>

                              <input
                                type="hidden"
                                id="rt_upload_hf_activity"
                                value="1"
                                name="activity"
                              />

                              <div
                                class="rtmedia-container rtmedia-uploader-div"
                              >
                                <div class="rtmedia-uploader no-js">
                                  <div id="rtmedia-uploader-form">
                                    <div class="rtm-tab-content-wrapper">
                                      <div
                                        id="rtm-file_upload-ui"
                                        class="rtm-tab-content"
                                      >
                                        <div
                                          class="rtmedia-plupload-container rtmedia-container clearfix"
                                        >
                                          <div
                                            id="rtmedia-action-update"
                                            class="clearfix"
                                          >
                                            <div
                                              class="rtm-upload-button-wrapper"
                                            >
                                              <div
                                                id="rtmedia-whts-new-upload-container"
                                              ></div>
                                              <button
                                                type="button"
                                                class="rtmedia-add-media-button"
                                                id="rtmedia-add-media-button-post-update"
                                                title="Attach Media"
                                              >
                                                <span
                                                  class="dashicons dashicons-admin-media"
                                                ></span>
                                              </button>
                                            </div>
                                          </div>
                                        </div>
                                        <div
                                          class="rtmedia-plupload-notice"
                                        >
                                          <ul
                                            class="plupload_filelist_content ui-sortable rtm-plupload-list clearfix"
                                            id="rtmedia_uploader_filelist"
                                          ></ul>
                                        </div>
                                        <input
                                          type="hidden"
                                          name="mode"
                                          value="file_upload"
                                        />
                                      </div>
                                    </div>

                                    <input
                                      type="hidden"
                                      name="rtmedia_upload_nonce"
                                      value="4646fd4202"
                                    />

                                    <input
                                      type="submit"
                                      id="rtMedia-start-upload"
                                      name="rtmedia-upload"
                                      value="Upload"
                                    />
                                  </div>
                                </div>
                              </div>

                              <!-- search & filters -->

                              <div
                                id="activity-stream"
                                class="activity single-user"
                                data-bp-list="activity"
                                style=""
                              >
                                <ul class="activity-list item-list bp-list">
                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16181"
                                    data-bp-activity-id="16181"
                                    data-bp-timestamp="1730321202"
                                    style="
                                      visibility: visible;
                                      animation-name: slideInUp;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          13 hours, 49 minutes ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16181"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16181"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16181/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16181/?cid=16181&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <div
                                            class="rtmedia-activity-text"
                                          >
                                            <span data-reaction-type="like"
                                              >this is fucked up<br />
                                            </span>
                                          </div>
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                          ></ul>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/16180/#acomment-16181"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16181"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16181"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16181"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16181"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16180/#acomment-16181"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16180/#acomment-16181"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16180/#acomment-16181"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  <li
                                    class="activity rtmedia_update activity-item has-comments animate-item slideInUp text-rendered"
                                    id="activity-16180"
                                    data-bp-activity-id="16180"
                                    data-bp-timestamp="1730305712"
                                    style="
                                      visibility: visible;
                                      animation-name: slideInUp;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted an update
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          18 hours, 7 minutes ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16180"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16180"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16180/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16180/?_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-1 rtm-activity-photo-list"
                                          >
                                            <li
                                              class="rtmedia-list-item media-type-photo"
                                            >
                                              <a
                                                href="https://mythemestore.com/beehive-preview/members/user/media/3530/"
                                                rel="nofollow ugc"
                                              >
                                                <div
                                                  class="rtmedia-item-thumbnail"
                                                >
                                                  <img
                                                    loading="lazy"
                                                    alt="frontend Php Laravel dark mode"
                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/frontend-Php-Laravel-dark-mode-450x320.png"
                                                  />
                                                </div>
                                                <div
                                                  class="rtmedia-item-title"
                                                  style="max-width: 320px"
                                                >
                                                  <p>
                                                    frontend Php Laravel
                                                    dark mode
                                                  </p>
                                                </div>
                                              </a>
                                              <p>
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/members/user/media/3530/"
                                                  rel="nofollow ugc"
                                                  class="no-popup"
                                                >
                                                </a>
                                              </p>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>

                                      <div class="who-reacted">
                                        <span class="top-reactions"
                                          ><span class="like"></span></span
                                        >You reacted to this!
                                      </div>
                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            id="acomment-comment-16180"
                                            class="button acomment-reply bp-primary-action bp-tooltip"
                                            data-bp-tooltip="Comment"
                                            aria-expanded="false"
                                            href="https://mythemestore.com/beehive-preview/activity/?ac=16180/#ac-form-16180"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Comment</span
                                            >
                                            <span class="comment-count"
                                              >1</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type="like"
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16180"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16180"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16180"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16180"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16180/"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16180/"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16180/"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="activity-comments">
                                      <ul>
                                        <li
                                          id="acomment-16181"
                                          class="comment-item"
                                          data-bp-activity-comment-id="16181"
                                        >
                                          <div
                                            class="acomment-avatar item-avatar"
                                          >
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                            >
                                              <img
                                                loading="lazy"
                                                src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                                class="avatar user-3-avatar avatar-50 photo"
                                                width="50"
                                                height="50"
                                                alt="Profile picture of Tum Yeto"
                                              />
                                            </a>
                                          </div>

                                          <div class="acomment-meta">
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            replied
                                            <a
                                              href="https://mythemestore.com/beehive-preview/activity/p/16180/#acomment-16181"
                                              class="activity-time-since"
                                              ><time
                                                class="time-since"
                                                datetime="2024-10-30 20:46:42"
                                                data-bp-timestamp="1730321202"
                                                >13 hours, 49 minutes
                                                ago</time
                                              ></a
                                            >
                                          </div>

                                          <div class="acomment-content">
                                            <div
                                              class="rtmedia-activity-container"
                                            >
                                              <div
                                                class="rtmedia-activity-text"
                                              >
                                                <span
                                                  >this is fucked up<br />
                                                </span>
                                              </div>
                                              <ul
                                                class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                              ></ul>
                                            </div>
                                          </div>

                                          <div class="activity-meta action">
                                            <div class="generic-button">
                                              <a
                                                class="acomment-reply bp-primary-action"
                                                id="acomment-reply-16180-from-16181"
                                                href="#acomment-16181"
                                                >Reply</a
                                              >
                                            </div>
                                            <div class="generic-button">
                                              <a
                                                class="delete acomment-delete confirm bp-secondary-action"
                                                rel="nofollow"
                                                href="https://mythemestore.com/beehive-preview/activity/delete/16181/?cid=16181&amp;_wpnonce=13fca8171e"
                                                >Delete</a
                                              >
                                            </div>
                                          </div>
                                        </li>
                                      </ul>

                                      <form
                                        action="https://mythemestore.com/beehive-preview/activity/reply/"
                                        method="post"
                                        id="ac-form-16180"
                                        class="ac-form"
                                      >
                                        <div class="ac-reply-avatar">
                                          <img
                                            loading="lazy"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                            class="avatar user-3-avatar avatar-50 photo"
                                            width="50"
                                            height="50"
                                            alt="Profile picture of Tum Yeto"
                                          />
                                        </div>
                                        <div class="ac-reply-content">
                                          <div class="ac-textarea">
                                            <label
                                              for="ac-input-16180"
                                              class="bp-screen-reader-text"
                                            >
                                              Comment
                                            </label>
                                            <textarea
                                              id="ac-input-16180"
                                              class="ac-input bp-suggestions"
                                              name="ac_input_16180"
                                            ></textarea>
                                          </div>
                                          <input
                                            type="hidden"
                                            name="comment_form_id"
                                            value="16180"
                                          />

                                          <input
                                            type="submit"
                                            name="ac_form_submit"
                                            value="Post"
                                          /><input
                                            type="hidden"
                                            id="_wpnonce_new_activity_comment_16180"
                                            name="_wpnonce_new_activity_comment_16180"
                                            value="b7ba7da908"
                                          /><input
                                            type="hidden"
                                            name="_wp_http_referer"
                                            value="/beehive-preview/wp-admin/admin-ajax.php"
                                          />&nbsp;
                                          <button
                                            type="button"
                                            class="ac-reply-cancel"
                                          >
                                            Cancel
                                          </button>
                                        </div>
                                      </form>
                                    </div>
                                  </li>


                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16178"
                                    data-bp-activity-id="16178"
                                    data-bp-timestamp="1730269754"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                    >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          1 day, 4 hours ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16178"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16178"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16178/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16178/?cid=16178&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <div
                                            class="rtmedia-activity-text"
                                          >
                                            <span>asdas</span>
                                          </div>
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                          ></ul>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/16177/#acomment-16178"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16178"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16178"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16178"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16178"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16177/#acomment-16178"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16177/#acomment-16178"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16177/#acomment-16178"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  <li
                                    class="groups rtmedia_update activity-item has-comments animate-item slideInUp text-rendered"
                                    id="activity-16177"
                                    data-bp-activity-id="16177"
                                    data-bp-timestamp="1730269743"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted an update in the group
                                            <a
                                              href="https://mythemestore.com/beehive-preview/groups/backpakers-club/"
                                              class=""
                                              ><img
                                                loading="lazy"
                                                src="https://mythemestore.com/beehive-preview/wp-content/uploads/group-avatars/4/5e2cc339c9d04-bpthumb.jpg"
                                                class="avatar group-4-avatar avatar-20 photo"
                                                width="20"
                                                height="20"
                                                alt="Group logo of Backpakers Club" /></a
                                            ><a
                                              href="https://mythemestore.com/beehive-preview/groups/backpakers-club/"
                                              >Backpakers Club</a
                                            >
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          1 day, 4 hours ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16177"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16177"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16177/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16177/?_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-1 rtm-activity-photo-list"
                                          >
                                            <li
                                              class="rtmedia-list-item media-type-photo"
                                            >
                                              <a
                                                href="https://mythemestore.com/beehive-preview/groups/backpakers-club/media/3529/"
                                                rel="nofollow ugc"
                                              >
                                                <div
                                                  class="rtmedia-item-thumbnail"
                                                >
                                                  <img
                                                    loading="lazy"
                                                    alt="_Vehicle Inspection and Report"
                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/groups/4/2024/10/Vehicle-Inspection-and-Report-450x320.jpg"
                                                  />
                                                </div>
                                                <div
                                                  class="rtmedia-item-title"
                                                  style="max-width: 320px"
                                                >
                                                  <p>
                                                    _Vehicle Inspection and
                                                    Report
                                                  </p>
                                                </div>
                                              </a>
                                              <p>
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/groups/backpakers-club/media/3529/"
                                                  rel="nofollow ugc"
                                                  class="no-popup"
                                                >
                                                </a>
                                              </p>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            id="acomment-comment-16177"
                                            class="button acomment-reply bp-primary-action bp-tooltip"
                                            data-bp-tooltip="Comment"
                                            aria-expanded="false"
                                            href="https://mythemestore.com/beehive-preview/activity/?ac=16177/#ac-form-16177"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Comment</span
                                            >
                                            <span class="comment-count"
                                              >1</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16177"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16177"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16177"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16177"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16177/"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16177/"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16177/"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="activity-comments">
                                      <ul>
                                        <li
                                          id="acomment-16178"
                                          class="comment-item"
                                          data-bp-activity-comment-id="16178"
                                        >
                                          <div
                                            class="acomment-avatar item-avatar"
                                          >
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                            >
                                              <img
                                                loading="lazy"
                                                src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                                class="avatar user-3-avatar avatar-50 photo"
                                                width="50"
                                                height="50"
                                                alt="Profile picture of Tum Yeto"
                                              />
                                            </a>
                                          </div>

                                          <div class="acomment-meta">
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            replied
                                            <a
                                              href="https://mythemestore.com/beehive-preview/activity/p/16177/#acomment-16178"
                                              class="activity-time-since"
                                              ><time
                                                class="time-since"
                                                datetime="2024-10-30 06:29:14"
                                                data-bp-timestamp="1730269754"
                                                >1 day, 4 hours ago</time
                                              ></a
                                            >
                                          </div>

                                          <div class="acomment-content">
                                            <div
                                              class="rtmedia-activity-container"
                                            >
                                              <div
                                                class="rtmedia-activity-text"
                                              >
                                                <span>asdas</span>
                                              </div>
                                              <ul
                                                class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                              ></ul>
                                            </div>
                                          </div>

                                          <div class="activity-meta action">
                                            <div class="generic-button">
                                              <a
                                                class="acomment-reply bp-primary-action"
                                                id="acomment-reply-16177-from-16178"
                                                href="#acomment-16178"
                                                >Reply</a
                                              >
                                            </div>
                                            <div class="generic-button">
                                              <a
                                                class="delete acomment-delete confirm bp-secondary-action"
                                                rel="nofollow"
                                                href="https://mythemestore.com/beehive-preview/activity/delete/16178/?cid=16178&amp;_wpnonce=13fca8171e"
                                                >Delete</a
                                              >
                                            </div>
                                          </div>
                                        </li>
                                      </ul>

                                      <form
                                        action="https://mythemestore.com/beehive-preview/activity/reply/"
                                        method="post"
                                        id="ac-form-16177"
                                        class="ac-form"
                                      >
                                        <div class="ac-reply-avatar">
                                          <img
                                            loading="lazy"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                            class="avatar user-3-avatar avatar-50 photo"
                                            width="50"
                                            height="50"
                                            alt="Profile picture of Tum Yeto"
                                          />
                                        </div>
                                        <div class="ac-reply-content">
                                          <div class="ac-textarea">
                                            <label
                                              for="ac-input-16177"
                                              class="bp-screen-reader-text"
                                            >
                                              Comment
                                            </label>
                                            <textarea
                                              id="ac-input-16177"
                                              class="ac-input bp-suggestions"
                                              name="ac_input_16177"
                                            ></textarea>
                                          </div>
                                          <input
                                            type="hidden"
                                            name="comment_form_id"
                                            value="16177"
                                          />

                                          <input
                                            type="submit"
                                            name="ac_form_submit"
                                            value="Post"
                                          /><input
                                            type="hidden"
                                            id="_wpnonce_new_activity_comment_16177"
                                            name="_wpnonce_new_activity_comment_16177"
                                            value="b7ba7da908"
                                          /><input
                                            type="hidden"
                                            name="_wp_http_referer"
                                            value="/beehive-preview/wp-admin/admin-ajax.php"
                                          />&nbsp;
                                          <button
                                            type="button"
                                            class="ac-reply-cancel"
                                          >
                                            Cancel
                                          </button>
                                        </div>
                                      </form>
                                    </div>
                                  </li>

                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16176"
                                    data-bp-activity-id="16176"
                                    data-bp-timestamp="1730269732"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          1 day, 4 hours ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16176"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16176"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16176/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16176/?cid=16176&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <div
                                            class="rtmedia-activity-text"
                                          >
                                            <span>dsad</span>
                                          </div>
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                          ></ul>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/166/#acomment-16176"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16176"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16176"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16176"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16176"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/166/#acomment-16176"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/166/#acomment-16176"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/166/#acomment-16176"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>


                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16173"
                                    data-bp-activity-id="16173"
                                    data-bp-timestamp="1730266870"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          1 day, 4 hours ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16173"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16173"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16173/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16173/?cid=16173&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <div
                                            class="rtmedia-activity-text"
                                          >
                                            <span>test</span>
                                          </div>
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                          ></ul>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/16170/#acomment-16173"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16173"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16173"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16173"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16173"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16170/#acomment-16173"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16170/#acomment-16173"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16170/#acomment-16173"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16172"
                                    data-bp-activity-id="16172"
                                    data-bp-timestamp="1730190030"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          2 days, 2 hours ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16172"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16172"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16172/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16172/?cid=16172&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <p>fdfg🤗</p>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/16170/#acomment-16172"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16172"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16172"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16172"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16172"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16170/#acomment-16172"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16170/#acomment-16172"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16170/#acomment-16172"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16171"
                                    data-bp-activity-id="16171"
                                    data-bp-timestamp="1730164014"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          2 days, 9 hours ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16171"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16171"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16171/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16171/?cid=16171&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <div
                                            class="rtmedia-activity-text"
                                          >
                                            <span>Hi</span>
                                          </div>
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                          ></ul>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/7/#acomment-16171"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16171"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16171"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16171"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16171"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/7/#acomment-16171"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/7/#acomment-16171"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/7/#acomment-16171"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  <li
                                    class="activity rtmedia_update activity-item has-comments animate-item slideInUp text-rendered"
                                    id="activity-16170"
                                    data-bp-activity-id="16170"
                                    data-bp-timestamp="1730163873"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted an update
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          2 days, 9 hours ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16170"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16170"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16170/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16170/?_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <div
                                            class="rtmedia-activity-text activity-inner-text"
                                          >
                                            <span>Chào ngày mới</span>
                                          </div>
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-7 rtm-activity-photo-list rtm-activity-list-rendered"
                                          >
                                            <li
                                              class="rtmedia-list-item media-type-photo"
                                            >
                                              <a
                                                href="https://mythemestore.com/beehive-preview/members/user/media/3528/"
                                                rel="nofollow ugc"
                                              >
                                                <div
                                                  class="rtmedia-item-thumbnail"
                                                >
                                                  <img
                                                    loading="lazy"
                                                    alt="IMG_6076"
                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6076-450x320.jpeg"
                                                  />
                                                </div>
                                                <div
                                                  class="rtmedia-item-title"
                                                  style="max-width: 320px"
                                                >
                                                  <p>IMG_6076</p>
                                                </div>
                                              </a>
                                              <p>
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/members/user/media/3528/"
                                                  rel="nofollow ugc"
                                                  class="no-popup"
                                                >
                                                </a>
                                              </p>
                                            </li>
                                            <li
                                              class="rtmedia-list-item media-type-photo"
                                            >
                                              <a
                                                href="https://mythemestore.com/beehive-preview/members/user/media/3527/"
                                                rel="nofollow ugc"
                                              >
                                                <div
                                                  class="rtmedia-item-thumbnail"
                                                >
                                                  <img
                                                    loading="lazy"
                                                    alt="IMG_6083"
                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6083-450x320.jpeg"
                                                  />
                                                </div>
                                                <div
                                                  class="rtmedia-item-title"
                                                  style="max-width: 320px"
                                                >
                                                  <p>IMG_6083</p>
                                                </div>
                                              </a>
                                              <p>
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/members/user/media/3527/"
                                                  rel="nofollow ugc"
                                                  class="no-popup"
                                                >
                                                </a>
                                              </p>
                                            </li>
                                            <li
                                              class="rtmedia-list-item media-type-photo"
                                            >
                                              <a
                                                href="https://mythemestore.com/beehive-preview/members/user/media/3526/"
                                                rel="nofollow ugc"
                                              >
                                                <div
                                                  class="rtmedia-item-thumbnail"
                                                >
                                                  <img
                                                    loading="lazy"
                                                    alt="IMG_6080"
                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6080-450x320.png"
                                                  />
                                                </div>
                                                <div
                                                  class="rtmedia-item-title"
                                                  style="max-width: 320px"
                                                >
                                                  <p>IMG_6080</p>
                                                </div>
                                              </a>
                                              <p>
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/members/user/media/3526/"
                                                  rel="nofollow ugc"
                                                  class="no-popup"
                                                >
                                                </a>
                                              </p>
                                            </li>
                                            <li
                                              class="rtmedia-list-item media-type-photo more"
                                            >
                                              <a
                                                href="https://mythemestore.com/beehive-preview/members/user/media/3525/"
                                                rel="nofollow ugc"
                                              >
                                                <div
                                                  class="rtmedia-item-thumbnail"
                                                >
                                                  <img
                                                    loading="lazy"
                                                    alt="IMG_6079"
                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6079-450x320.jpeg"
                                                  />
                                                </div>
                                                <div
                                                  class="rtmedia-item-title"
                                                  style="max-width: 320px"
                                                >
                                                  <p>IMG_6079</p>
                                                </div>
                                              </a>
                                              <p>
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/members/user/media/3525/"
                                                  rel="nofollow ugc"
                                                  class="no-popup"
                                                >
                                                </a>
                                              </p>
                                            </li>
                                            <li
                                              class="rtmedia-list-item media-type-photo"
                                              style="display: none"
                                            >
                                              <a
                                                href="https://mythemestore.com/beehive-preview/members/user/media/3524/"
                                                rel="nofollow ugc"
                                              >
                                                <div
                                                  class="rtmedia-item-thumbnail"
                                                >
                                                  <img
                                                    loading="lazy"
                                                    alt="IMG_6078"
                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6078-450x320.png"
                                                  />
                                                </div>
                                                <div
                                                  class="rtmedia-item-title"
                                                  style="max-width: 320px"
                                                >
                                                  <p>IMG_6078</p>
                                                </div>
                                              </a>
                                              <p>
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/members/user/media/3524/"
                                                  rel="nofollow ugc"
                                                  class="no-popup"
                                                >
                                                </a>
                                              </p>
                                            </li>
                                            <li
                                              class="rtmedia-list-item media-type-photo"
                                              style="display: none"
                                            >
                                              <a
                                                href="https://mythemestore.com/beehive-preview/members/user/media/3523/"
                                                rel="nofollow ugc"
                                              >
                                                <div
                                                  class="rtmedia-item-thumbnail"
                                                >
                                                  <img
                                                    loading="lazy"
                                                    alt="IMG_6081"
                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6081-450x320.jpeg"
                                                  />
                                                </div>
                                                <div
                                                  class="rtmedia-item-title"
                                                  style="max-width: 320px"
                                                >
                                                  <p>IMG_6081</p>
                                                </div>
                                              </a>
                                              <p>
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/members/user/media/3523/"
                                                  rel="nofollow ugc"
                                                  class="no-popup"
                                                >
                                                </a>
                                              </p>
                                            </li>
                                            <li
                                              class="rtmedia-list-item media-type-photo"
                                              style="display: none"
                                            >
                                              <a
                                                href="https://mythemestore.com/beehive-preview/members/user/media/3522/"
                                                rel="nofollow ugc"
                                              >
                                                <div
                                                  class="rtmedia-item-thumbnail"
                                                >
                                                  <img
                                                    loading="lazy"
                                                    alt="IMG_6082"
                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6082-450x320.png"
                                                  />
                                                </div>
                                                <div
                                                  class="rtmedia-item-title"
                                                  style="max-width: 320px"
                                                >
                                                  <p>IMG_6082</p>
                                                </div>
                                              </a>
                                              <p>
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/members/user/media/3522/"
                                                  rel="nofollow ugc"
                                                  class="no-popup"
                                                >
                                                </a>
                                              </p>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>

                                      <div class="who-reacted">
                                        <span class="top-reactions"
                                          ><span class="like"></span></span
                                        >You reacted to this!
                                      </div>
                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            id="acomment-comment-16170"
                                            class="button acomment-reply bp-primary-action bp-tooltip"
                                            data-bp-tooltip="Comment"
                                            aria-expanded="false"
                                            href="https://mythemestore.com/beehive-preview/activity/?ac=16170/#ac-form-16170"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Comment</span
                                            >
                                            <span class="comment-count"
                                              >2</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type="like"
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16170"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16170"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16170"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16170"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16170/"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16170/"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16170/"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="activity-comments">
                                      <ul>
                                        <li
                                          id="acomment-16172"
                                          class="comment-item"
                                          data-bp-activity-comment-id="16172"
                                        >
                                          <div
                                            class="acomment-avatar item-avatar"
                                          >
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                            >
                                              <img
                                                loading="lazy"
                                                src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                                class="avatar user-3-avatar avatar-50 photo"
                                                width="50"
                                                height="50"
                                                alt="Profile picture of Tum Yeto"
                                              />
                                            </a>
                                          </div>

                                          <div class="acomment-meta">
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            replied
                                            <a
                                              href="https://mythemestore.com/beehive-preview/activity/p/16170/#acomment-16172"
                                              class="activity-time-since"
                                              ><time
                                                class="time-since"
                                                datetime="2024-10-29 08:20:30"
                                                data-bp-timestamp="1730190030"
                                                >2 days, 2 hours ago</time
                                              ></a
                                            >
                                          </div>

                                          <div class="acomment-content">
                                            <p>fdfg🤗</p>
                                          </div>

                                          <div class="activity-meta action">
                                            <div class="generic-button">
                                              <a
                                                class="acomment-reply bp-primary-action"
                                                id="acomment-reply-16170-from-16172"
                                                href="#acomment-16172"
                                                >Reply</a
                                              >
                                            </div>
                                            <div class="generic-button">
                                              <a
                                                class="delete acomment-delete confirm bp-secondary-action"
                                                rel="nofollow"
                                                href="https://mythemestore.com/beehive-preview/activity/delete/16172/?cid=16172&amp;_wpnonce=13fca8171e"
                                                >Delete</a
                                              >
                                            </div>
                                          </div>
                                        </li>

                                        <li
                                          id="acomment-16173"
                                          class="comment-item"
                                          data-bp-activity-comment-id="16173"
                                        >
                                          <div
                                            class="acomment-avatar item-avatar"
                                          >
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                            >
                                              <img
                                                loading="lazy"
                                                src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                                class="avatar user-3-avatar avatar-50 photo"
                                                width="50"
                                                height="50"
                                                alt="Profile picture of Tum Yeto"
                                              />
                                            </a>
                                          </div>

                                          <div class="acomment-meta">
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            replied
                                            <a
                                              href="https://mythemestore.com/beehive-preview/activity/p/16170/#acomment-16173"
                                              class="activity-time-since"
                                              ><time
                                                class="time-since"
                                                datetime="2024-10-30 05:41:10"
                                                data-bp-timestamp="1730266870"
                                                >1 day, 4 hours ago</time
                                              ></a
                                            >
                                          </div>

                                          <div class="acomment-content">
                                            <div
                                              class="rtmedia-activity-container"
                                            >
                                              <div
                                                class="rtmedia-activity-text"
                                              >
                                                <span>test</span>
                                              </div>
                                              <ul
                                                class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                              ></ul>
                                            </div>
                                          </div>

                                          <div class="activity-meta action">
                                            <div class="generic-button">
                                              <a
                                                class="acomment-reply bp-primary-action"
                                                id="acomment-reply-16170-from-16173"
                                                href="#acomment-16173"
                                                >Reply</a
                                              >
                                            </div>
                                            <div class="generic-button">
                                              <a
                                                class="delete acomment-delete confirm bp-secondary-action"
                                                rel="nofollow"
                                                href="https://mythemestore.com/beehive-preview/activity/delete/16173/?cid=16173&amp;_wpnonce=13fca8171e"
                                                >Delete</a
                                              >
                                            </div>
                                          </div>
                                        </li>
                                      </ul>

                                      <form
                                        action="https://mythemestore.com/beehive-preview/activity/reply/"
                                        method="post"
                                        id="ac-form-16170"
                                        class="ac-form"
                                      >
                                        <div class="ac-reply-avatar">
                                          <img
                                            loading="lazy"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                            class="avatar user-3-avatar avatar-50 photo"
                                            width="50"
                                            height="50"
                                            alt="Profile picture of Tum Yeto"
                                          />
                                        </div>
                                        <div class="ac-reply-content">
                                          <div class="ac-textarea">
                                            <label
                                              for="ac-input-16170"
                                              class="bp-screen-reader-text"
                                            >
                                              Comment
                                            </label>
                                            <textarea
                                              id="ac-input-16170"
                                              class="ac-input bp-suggestions"
                                              name="ac_input_16170"
                                            ></textarea>
                                          </div>
                                          <input
                                            type="hidden"
                                            name="comment_form_id"
                                            value="16170"
                                          />

                                          <input
                                            type="submit"
                                            name="ac_form_submit"
                                            value="Post"
                                          /><input
                                            type="hidden"
                                            id="_wpnonce_new_activity_comment_16170"
                                            name="_wpnonce_new_activity_comment_16170"
                                            value="b7ba7da908"
                                          /><input
                                            type="hidden"
                                            name="_wp_http_referer"
                                            value="/beehive-preview/wp-admin/admin-ajax.php"
                                          />&nbsp;
                                          <button
                                            type="button"
                                            class="ac-reply-cancel"
                                          >
                                            Cancel
                                          </button>
                                        </div>
                                      </form>
                                    </div>
                                  </li>

                                  <li
                                    class="activity activity_update activity-item animate-item slideInUp text-rendered"
                                    id="activity-16168"
                                    data-bp-activity-id="16168"
                                    data-bp-timestamp="1730141485"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted an update
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          2 days, 15 hours ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16168"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16168"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16168/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16168/?_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div class="activity-inner-text">
                                          <p>hello there</p>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            id="acomment-comment-16168"
                                            class="button acomment-reply bp-primary-action bp-tooltip"
                                            data-bp-tooltip="Comment"
                                            aria-expanded="false"
                                            href="https://mythemestore.com/beehive-preview/activity/?ac=16168/#ac-form-16168"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Comment</span
                                            >
                                            <span class="comment-count"
                                              >0</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16168"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16168"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16168"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16168"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16168/"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16168/"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16168/"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="activity-comments">
                                      <form
                                        action="https://mythemestore.com/beehive-preview/activity/reply/"
                                        method="post"
                                        id="ac-form-16168"
                                        class="ac-form"
                                      >
                                        <div class="ac-reply-avatar">
                                          <img
                                            loading="lazy"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                            class="avatar user-3-avatar avatar-50 photo"
                                            width="50"
                                            height="50"
                                            alt="Profile picture of Tum Yeto"
                                          />
                                        </div>
                                        <div class="ac-reply-content">
                                          <div class="ac-textarea">
                                            <label
                                              for="ac-input-16168"
                                              class="bp-screen-reader-text"
                                            >
                                              Comment
                                            </label>
                                            <textarea
                                              id="ac-input-16168"
                                              class="ac-input bp-suggestions"
                                              name="ac_input_16168"
                                            ></textarea>
                                          </div>
                                          <input
                                            type="hidden"
                                            name="comment_form_id"
                                            value="16168"
                                          />

                                          <input
                                            type="submit"
                                            name="ac_form_submit"
                                            value="Post"
                                          /><input
                                            type="hidden"
                                            id="_wpnonce_new_activity_comment_16168"
                                            name="_wpnonce_new_activity_comment_16168"
                                            value="b7ba7da908"
                                          /><input
                                            type="hidden"
                                            name="_wp_http_referer"
                                            value="/beehive-preview/wp-admin/admin-ajax.php"
                                          />&nbsp;
                                          <button
                                            type="button"
                                            class="ac-reply-cancel"
                                          >
                                            Cancel
                                          </button>
                                        </div>
                                      </form>
                                    </div>
                                  </li>


                                  <li
                                    class="activity activity_share activity-item mini animate-item slideInUp text-rendered"
                                    id="activity-16166"
                                    data-bp-activity-id="16166"
                                    data-bp-timestamp="1730065641"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                    >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            shared a post
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          3 days, 12 hours ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16166"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16166"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16166/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16166/?_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="shared-activity-content"
                                        >
                                          <div
                                            class="activity-avatar item-avatar"
                                          >
                                            <a href="#"
                                              ><img
                                                loading="lazy"
                                                src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                                class="avatar user-3-avatar avatar-50 photo"
                                                width="50"
                                                height="50"
                                                alt="Profile picture of Tum Yeto"
                                            /></a>
                                          </div>
                                          <div class="activity-content">
                                            <div class="activity-header">
                                              <div class="posted-meta">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/members/user/"
                                                  >Bangladesh</a
                                                >
                                                posted a new activity
                                                comment
                                              </div>
                                              <div class="date mute">
                                                2 months, 1 week ago
                                              </div>
                                            </div>
                                            <div class="activity-wrapper">
                                              <div class="activity-inner">
                                                <div
                                                  class="activity-inner-text"
                                                >
                                                  <p>polich</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            id="acomment-comment-16166"
                                            class="button acomment-reply bp-primary-action bp-tooltip"
                                            data-bp-tooltip="Comment"
                                            aria-expanded="false"
                                            href="https://mythemestore.com/beehive-preview/activity/?ac=16166/#ac-form-16166"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Comment</span
                                            >
                                            <span class="comment-count"
                                              >0</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-15876"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-15876"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16166/"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16166/"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16166/"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="activity-comments">
                                      <form
                                        action="https://mythemestore.com/beehive-preview/activity/reply/"
                                        method="post"
                                        id="ac-form-16166"
                                        class="ac-form"
                                      >
                                        <div class="ac-reply-avatar">
                                          <img
                                            loading="lazy"
                                            src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                            class="avatar user-3-avatar avatar-50 photo"
                                            width="50"
                                            height="50"
                                            alt="Profile picture of Tum Yeto"
                                          />
                                        </div>
                                        <div class="ac-reply-content">
                                          <div class="ac-textarea">
                                            <label
                                              for="ac-input-16166"
                                              class="bp-screen-reader-text"
                                            >
                                              Comment
                                            </label>
                                            <textarea
                                              id="ac-input-16166"
                                              class="ac-input bp-suggestions"
                                              name="ac_input_16166"
                                            ></textarea>
                                          </div>
                                          <input
                                            type="hidden"
                                            name="comment_form_id"
                                            value="16166"
                                          />

                                          <input
                                            type="submit"
                                            name="ac_form_submit"
                                            value="Post"
                                          /><input
                                            type="hidden"
                                            id="_wpnonce_new_activity_comment_16166"
                                            name="_wpnonce_new_activity_comment_16166"
                                            value="b7ba7da908"
                                          /><input
                                            type="hidden"
                                            name="_wp_http_referer"
                                            value="/beehive-preview/wp-admin/admin-ajax.php"
                                          />&nbsp;
                                          <button
                                            type="button"
                                            class="ac-reply-cancel"
                                          >
                                            Cancel
                                          </button>
                                        </div>
                                      </form>
                                    </div>
                                  </li>

                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16106"
                                    data-bp-activity-id="16106"
                                    data-bp-timestamp="1728192668"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          3 weeks, 4 days ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16106"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16106"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16106/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16106/?cid=16106&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <div
                                            class="rtmedia-activity-text"
                                          >
                                            <span>ppp<br /> </span>
                                          </div>
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                          ></ul>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/12455/#acomment-16106"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16106"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16106"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16106"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16106"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/12455/#acomment-16106"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/12455/#acomment-16106"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/12455/#acomment-16106"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16097"
                                    data-bp-activity-id="16097"
                                    data-bp-timestamp="1727765679"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          1 month ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16097"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16097"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16097/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16097/?cid=16097&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <p>😴😎</p>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/7/#acomment-16097"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16097"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16097"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16097"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16097"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/7/#acomment-16097"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/7/#acomment-16097"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/7/#acomment-16097"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16078"
                                    data-bp-activity-id="16078"
                                    data-bp-timestamp="1727386893"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          1 month ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16078"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16078"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16078/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16078/?cid=16078&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <div
                                            class="rtmedia-activity-text"
                                          >
                                            <span>Nice </span>
                                          </div>
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                          ></ul>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/89/#acomment-16078"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16078"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16078"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16078"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16078"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/89/#acomment-16078"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/89/#acomment-16078"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/89/#acomment-16078"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16076"
                                    data-bp-activity-id="16076"
                                    data-bp-timestamp="1727379949"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          1 month ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16076"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16076"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16076/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16076/?cid=16076&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <div
                                            class="rtmedia-activity-text"
                                          >
                                            <span>n</span>
                                          </div>
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                          ></ul>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16076"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16076"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16076"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16076"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16076"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16076"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16076"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16076"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16048"
                                    data-bp-activity-id="16048"
                                    data-bp-timestamp="1727146927"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          1 month, 1 week ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16048"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16048"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16048/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16048/?cid=16048&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <div
                                            class="rtmedia-activity-text"
                                          >
                                            <span>what</span>
                                          </div>
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                          ></ul>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16048"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16048"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16048"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16048"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16048"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16048"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16048"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16048"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  <li
                                    class="activity activity_comment activity-item animate-item slideInUp"
                                    id="activity-16043"
                                    data-bp-activity-id="16043"
                                    data-bp-timestamp="1727127275"
                                    style="
                                      visibility: hidden;
                                      animation-name: none;
                                    "
                                  >
                                    <div
                                      class="activity-avatar item-avatar"
                                    >
                                      <a
                                        href="https://mythemestore.com/beehive-preview/members/user/"
                                      >
                                        <img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                          class="avatar user-3-avatar avatar-200 photo"
                                          width="200"
                                          height="200"
                                          alt="Profile picture of Tum Yeto"
                                        />
                                      </a>
                                    </div>

                                    <div class="activity-content">
                                      <div class="activity-header">
                                        <div class="posted-meta">
                                          <p>
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              >Tum Yeto</a
                                            >
                                            posted a new activity comment
                                          </p>
                                        </div>

                                        <div class="date mute">
                                          1 month, 1 week ago
                                        </div>

                                        <div
                                          class="activity-options dropleft"
                                        >
                                          <a
                                            class="dropdown-toggle"
                                            href="#"
                                            role="button"
                                            id="activity-action-dropdown-16043"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                            ><i class="uil-ellipsis-v"></i
                                          ></a>
                                          <div
                                            class="dropdown-menu"
                                            aria-labelledby="activity-action-dropdown-16043"
                                          >
                                            <div
                                              class="activity-meta action"
                                            >
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/favorite/16043/?_wpnonce=9bedea944d"
                                                  class="button fav bp-secondary-action bp-tooltip"
                                                  data-bp-tooltip="Mark as Favorite"
                                                  aria-pressed="false"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Mark as Favorite</span
                                                  ></a
                                                >
                                              </div>
                                              <div class="generic-button">
                                                <a
                                                  href="https://mythemestore.com/beehive-preview/activity/delete/16043/?cid=16043&amp;_wpnonce=13fca8171e"
                                                  class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                  data-bp-tooltip="Delete"
                                                  ><span
                                                    class="bp-screen-reader-text"
                                                    >Delete</span
                                                  ></a
                                                >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="activity-inner">
                                        <div
                                          class="rtmedia-activity-container"
                                        >
                                          <div
                                            class="rtmedia-activity-text"
                                          >
                                            <span>okay</span>
                                          </div>
                                          <ul
                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered"
                                          ></ul>
                                        </div>
                                      </div>

                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            class="button view bp-secondary-action bp-tooltip"
                                            data-bp-tooltip="View Conversation"
                                            href="https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16043"
                                            role="button"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >View Conversation</span
                                            ></a
                                          >
                                        </div>
                                        <div
                                          class="generic-button reactions"
                                        >
                                          <a
                                            href="#"
                                            data-reaction-type=""
                                            class="button react-to-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Like</span
                                            ></a
                                          >
                                          <div class="pick-reaction">
                                            <span class="reaction like"
                                              ><span
                                                class="reaction-tooltip"
                                                >Like</span
                                              ></span
                                            ><span class="reaction love"
                                              ><span
                                                class="reaction-tooltip"
                                                >Love</span
                                              ></span
                                            ><span class="reaction care"
                                              ><span
                                                class="reaction-tooltip"
                                                >Care</span
                                              ></span
                                            ><span class="reaction haha"
                                              ><span
                                                class="reaction-tooltip"
                                                >Haha</span
                                              ></span
                                            ><span class="reaction wow"
                                              ><span
                                                class="reaction-tooltip"
                                                >Wow</span
                                              ></span
                                            ><span class="reaction sad"
                                              ><span
                                                class="reaction-tooltip"
                                                >Sad</span
                                              ></span
                                            ><span class="reaction angry"
                                              ><span
                                                class="reaction-tooltip"
                                                >Angry</span
                                              ></span
                                            >
                                          </div>
                                        </div>
                                        <div class="generic-button">
                                          <a
                                            href="#"
                                            id="activity-share-16043"
                                            class="button share-activity"
                                            ><span
                                              class="bp-screen-reader-text"
                                              >Share</span
                                            ></a
                                          >
                                          <ul
                                            class="share-activity-options"
                                            aria-labelledby="activity-share-16043"
                                            style="display: none"
                                          >
                                            <li>
                                              <a
                                                id="share-on-activity-16043"
                                                href="#"
                                                class="share-item share-on-activity"
                                                data-share-id="16043"
                                                >Share on Activity</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16043"
                                                class="share-item share-on-facebook"
                                                target="_blank"
                                                >Share on Facebook</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16043"
                                                class="share-item share-on-twitter"
                                                target="_blank"
                                                >Share on Twitter</a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/12468/#acomment-16043"
                                                class="share-item share-on-linkedin"
                                                target="_blank"
                                                >Share on Linkedin</a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  <li class="load-more">
                                    <a
                                      href="https://mythemestore.com/beehive-preview/members/user/?acpage=2&amp;offset_lower=16181"
                                      >Load More</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- #item-body -->
                      </div>
                      <!-- // .bp-wrap -->
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
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .layout -->
    </div>
  </div>







  @endsection



@section('seo')
    <meta name="keywords"
        content="STREAM WAGER">
    <meta name="description"
        content="">
    <title>Stream Wager</title>
@endsection
