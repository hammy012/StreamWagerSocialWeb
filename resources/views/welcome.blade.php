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
                      <h1 class="title h3">Activity</h1>
                    </div>
                  </div>
                </div>

                <article
                  id="post-0"
                  class="bp_activity type-bp_activity post-0 page type-page status-publish hentry beehive-post"
                >
                  <div class="entry-content clearfix">
                    <div
                      id="buddypress"
                      class="buddypress-wrap beehive bp-dir-hori-nav alignwide"
                    >
                      <nav
                        class="activity-type-navs main-navs bp-navs dir-navs"
                        role="navigation"
                        aria-label="Directory menu"
                      >
                        <ul class="component-navigation activity-nav">
                          <li
                            id="activity-all"
                            class="dynamic"
                            data-bp-scope="all"
                            data-bp-object="activity"
                          >
                            <a
                              href="https://mythemestore.com/beehive-preview/activity/"
                            >
                              Recent Activity
                            </a>
                          </li>
                        </ul>
                        <!-- .component-navigation -->
                      </nav>
                      <!-- .bp-navs -->
                      <div class="screen-content hide-filter">
                        <div
                          class="subnav-filters filters no-ajax"
                          id="subnav-filters"
                        >
                          <div class="subnav-search clearfix">
                            <div id="activity-rss-feed" class="feed">
                              <a
                                href="https://mythemestore.com/beehive-preview/activity/feed/"
                                class="bp-tooltip"
                                data-bp-tooltip="RSS Feed"
                              >
                                <span class="bp-screen-reader-text"
                                  >RSS Feed</span
                                >
                              </a>
                            </div>

                            <div
                              class="dir-search activity-search bp-search"
                              data-bp-search="activity"
                            >
                              <form
                                action=""
                                method="get"
                                class="bp-dir-search-form"
                                id="dir-activity-search-form"
                                role="search"
                              >
                                <label
                                  for="dir-activity-search"
                                  class="bp-screen-reader-text"
                                  >Search Activity...</label
                                >

                                <input
                                  id="dir-activity-search"
                                  name="activity_search"
                                  type="search"
                                  placeholder="Search Activity..."
                                />

                                <button
                                  type="submit"
                                  id="dir-activity-search-submit"
                                  class="nouveau-search-submit"
                                  name="dir_activity_search_submit"
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

                          <div
                            id="dir-filters"
                            class="component-filters clearfix"
                          >
                            <div
                              id="activity-filter-select"
                              class="last filter"
                            >
                              <label
                                class="bp-screen-reader-text"
                                for="activity-filter-by"
                              >
                                <span>Show:</span>
                              </label>
                              <div class="select-wrap">
                                <select
                                  id="activity-filter-by"
                                  data-bp-filter="activity"
                                >
                                  <option value="0">— Everything —</option>
                                  <option value="new_member">
                                    New Members
                                  </option>
                                  <option value="updated_profile">
                                    Profile Updates
                                  </option>
                                  <option value="activity_update">
                                    Updates
                                  </option>
                                  <option value="rtmedia_update">
                                    rtMedia Updates
                                  </option>
                                  <option
                                    value="friendship_accepted,friendship_created"
                                  >
                                    Friendships
                                  </option>
                                  <option value="created_group">
                                    New Groups
                                  </option>
                                  <option value="joined_group">
                                    Group Memberships
                                  </option>
                                  <option value="group_details_updated">
                                    Group Updates
                                  </option>
                                  <option value="bbp_topic_create">
                                    Topics
                                  </option>
                                  <option value="bbp_reply_create">
                                    Replies
                                  </option>
                                </select>
                                <span
                                  class="select-arrow"
                                  aria-hidden="true"
                                ></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- search & filters -->

                        <div
                          id="activity-stream"
                          class="activity"
                          data-bp-list="activity"
                          style=""
                        >
                          <ul class="activity-list item-list bp-list">
                            <li
                              class="activity rtmedia_update activity-item has-comments date-recorded-1730305712 animate-item slideInUp text-rendered"
                              id="activity-16180"
                              data-bp-activity-id="16180"
                              data-bp-timestamp="1730305712"
                              style="
                                visibility: visible;
                                animation-name: slideInUp;
                              "
                                >
                              <div class="activity-avatar item-avatar">
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
                                    17 hours, 59 minutes ago
                                  </div>

                                  <div class="activity-options dropleft">
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
                                      <div class="activity-meta action">
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
                                  <div class="rtmedia-activity-container">
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
                                              frontend Php Laravel dark mode
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
                                      ><span class="bp-screen-reader-text"
                                        >Comment</span
                                      >
                                      <span class="comment-count"
                                        >1</span
                                      ></a
                                    >
                                  </div>
                                  <div class="generic-button reactions">
                                    <a
                                      href="#"
                                      data-reaction-type="like"
                                      class="button react-to-activity"
                                      ><span class="bp-screen-reader-text"
                                        >Like</span
                                      ></a
                                    >
                                    <div class="pick-reaction">
                                      <span class="reaction like"
                                        ><span class="reaction-tooltip"
                                          >Like</span
                                        ></span
                                      ><span class="reaction love"
                                        ><span class="reaction-tooltip"
                                          >Love</span
                                        ></span
                                      ><span class="reaction care"
                                        ><span class="reaction-tooltip"
                                          >Care</span
                                        ></span
                                      ><span class="reaction haha"
                                        ><span class="reaction-tooltip"
                                          >Haha</span
                                        ></span
                                      ><span class="reaction wow"
                                        ><span class="reaction-tooltip"
                                          >Wow</span
                                        ></span
                                      ><span class="reaction sad"
                                        ><span class="reaction-tooltip"
                                          >Sad</span
                                        ></span
                                      ><span class="reaction angry"
                                        ><span class="reaction-tooltip"
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
                                      ><span class="bp-screen-reader-text"
                                        >Share</span
                                      ></a
                                    >
                                    <ul
                                      class="share-activity-options"
                                      aria-labelledby="activity-share-16180"
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
                                          >13 hours, 41 minutes ago</time
                                        ></a
                                      >
                                    </div>

                                    <div class="acomment-content">
                                      <div
                                        class="rtmedia-activity-container"
                                      >
                                        <div class="rtmedia-activity-text">
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
                              class="members new_avatar activity-item mini date-recorded-1730269944 animate-item slideInUp"
                              id="activity-16179"
                              data-bp-activity-id="16179"
                              data-bp-timestamp="1730269944"
                              style="
                                visibility: visible;
                                animation-name: slideInUp;
                              "
                                >
                              <div class="activity-avatar item-avatar">
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
                                      changed their profile picture
                                    </p>
                                  </div>

                                  <div class="date mute">
                                    1 day, 3 hours ago
                                  </div>

                                  <div class="activity-options dropleft">
                                    <a
                                      class="dropdown-toggle"
                                      href="#"
                                      role="button"
                                      id="activity-action-dropdown-16179"
                                      data-toggle="dropdown"
                                      aria-expanded="false"
                                      ><i class="uil-ellipsis-v"></i
                                    ></a>
                                    <div
                                      class="dropdown-menu"
                                      aria-labelledby="activity-action-dropdown-16179"
                                    >
                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            href="https://mythemestore.com/beehive-preview/activity/favorite/16179/?_wpnonce=9bedea944d"
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
                                            href="https://mythemestore.com/beehive-preview/activity/delete/16179/?_wpnonce=13fca8171e"
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
                                  <div class="beehive-mini-activity member">
                                    <div class="mini-activity-inner">
                                      <div
                                        class="mini-cover"
                                        style="
                                          background-image: url('https://mythemestore.com/beehive-preview/wp-content/uploads/buddypress/members/3/cover-image/672269584c769-bp-cover-image.jpg');
                                        "
                                      ></div>
                                      <div class="mini-content">
                                        <div class="mini-avatar">
                                          <a
                                            href="https://mythemestore.com/beehive-preview/members/user/"
                                          >
                                            <img
                                              loading="lazy"
                                              src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                              class="avatar user-3-avatar avatar-200 photo"
                                              width="200"
                                              height="200"
                                              alt="Profile Photo"
                                            />
                                          </a>
                                        </div>
                                        <div class="mini-info">
                                          <h5 class="mini-title">
                                            <a
                                              href="https://mythemestore.com/beehive-preview/members/user/"
                                              class="ellipsis"
                                              >Tum Yeto</a
                                            >
                                          </h5>
                                          <div class="mini-meta">
                                            <span class="ellipsis"
                                              ><i class="uil-at"></i
                                              >user</span
                                            >
                                          </div>
                                        </div>
                                        <div class="mini-actions"></div>
                                      </div>
                                    </div>
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
                                      id="acomment-comment-16179"
                                      class="button acomment-reply bp-primary-action bp-tooltip"
                                      data-bp-tooltip="Comment"
                                      aria-expanded="false"
                                      href="https://mythemestore.com/beehive-preview/activity/?ac=16179/#ac-form-16179"
                                      role="button"
                                      ><span class="bp-screen-reader-text"
                                        >Comment</span
                                      >
                                      <span class="comment-count"
                                        >0</span
                                      ></a
                                    >
                                  </div>
                                  <div class="generic-button reactions">
                                    <a
                                      href="#"
                                      data-reaction-type="like"
                                      class="button react-to-activity"
                                      ><span class="bp-screen-reader-text"
                                        >Like</span
                                      ></a
                                    >
                                    <div class="pick-reaction">
                                      <span class="reaction like"
                                        ><span class="reaction-tooltip"
                                          >Like</span
                                        ></span
                                      ><span class="reaction love"
                                        ><span class="reaction-tooltip"
                                          >Love</span
                                        ></span
                                      ><span class="reaction care"
                                        ><span class="reaction-tooltip"
                                          >Care</span
                                        ></span
                                      ><span class="reaction haha"
                                        ><span class="reaction-tooltip"
                                          >Haha</span
                                        ></span
                                      ><span class="reaction wow"
                                        ><span class="reaction-tooltip"
                                          >Wow</span
                                        ></span
                                      ><span class="reaction sad"
                                        ><span class="reaction-tooltip"
                                          >Sad</span
                                        ></span
                                      ><span class="reaction angry"
                                        ><span class="reaction-tooltip"
                                          >Angry</span
                                        ></span
                                      >
                                    </div>
                                  </div>
                                  <div class="generic-button">
                                    <a
                                      href="#"
                                      id="activity-share-16179"
                                      class="button share-activity"
                                      ><span class="bp-screen-reader-text"
                                        >Share</span
                                      ></a
                                    >
                                    <ul
                                      class="share-activity-options"
                                      aria-labelledby="activity-share-16179"
                                    >
                                      <li>
                                        <a
                                          href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16179/"
                                          class="share-item share-on-facebook"
                                          target="_blank"
                                          >Share on Facebook</a
                                        >
                                      </li>
                                      <li>
                                        <a
                                          href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16179/"
                                          class="share-item share-on-twitter"
                                          target="_blank"
                                          >Share on Twitter</a
                                        >
                                      </li>
                                      <li>
                                        <a
                                          href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16179/"
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
                                  id="ac-form-16179"
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
                                        for="ac-input-16179"
                                        class="bp-screen-reader-text"
                                      >
                                        Comment
                                      </label>
                                      <textarea
                                        id="ac-input-16179"
                                        class="ac-input bp-suggestions"
                                        name="ac_input_16179"
                                      ></textarea>
                                    </div>
                                    <input
                                      type="hidden"
                                      name="comment_form_id"
                                      value="16179"
                                    />

                                    <input
                                      type="submit"
                                      name="ac_form_submit"
                                      value="Post"
                                    /><input
                                      type="hidden"
                                      id="_wpnonce_new_activity_comment_16179"
                                      name="_wpnonce_new_activity_comment_16179"
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
                              class="groups rtmedia_update activity-item has-comments date-recorded-1730269743 animate-item slideInUp text-rendered"
                              id="activity-16177"
                              data-bp-activity-id="16177"
                              data-bp-timestamp="1730269743"
                              style="
                                visibility: hidden;
                                animation-name: none;
                              "
                                >
                              <div class="activity-avatar item-avatar">
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
                                    1 day, 3 hours ago
                                  </div>

                                  <div class="activity-options dropleft">
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
                                      <div class="activity-meta action">
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
                                  <div class="rtmedia-activity-container">
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
                                              _Vehicle Inspection and Report
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
                                      ><span class="bp-screen-reader-text"
                                        >Comment</span
                                      >
                                      <span class="comment-count"
                                        >1</span
                                      ></a
                                    >
                                  </div>
                                  <div class="generic-button reactions">
                                    <a
                                      href="#"
                                      data-reaction-type=""
                                      class="button react-to-activity"
                                      ><span class="bp-screen-reader-text"
                                        >Like</span
                                      ></a
                                    >
                                    <div class="pick-reaction">
                                      <span class="reaction like"
                                        ><span class="reaction-tooltip"
                                          >Like</span
                                        ></span
                                      ><span class="reaction love"
                                        ><span class="reaction-tooltip"
                                          >Love</span
                                        ></span
                                      ><span class="reaction care"
                                        ><span class="reaction-tooltip"
                                          >Care</span
                                        ></span
                                      ><span class="reaction haha"
                                        ><span class="reaction-tooltip"
                                          >Haha</span
                                        ></span
                                      ><span class="reaction wow"
                                        ><span class="reaction-tooltip"
                                          >Wow</span
                                        ></span
                                      ><span class="reaction sad"
                                        ><span class="reaction-tooltip"
                                          >Sad</span
                                        ></span
                                      ><span class="reaction angry"
                                        ><span class="reaction-tooltip"
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
                                      ><span class="bp-screen-reader-text"
                                        >Share</span
                                      ></a
                                    >
                                    <ul
                                      class="share-activity-options"
                                      aria-labelledby="activity-share-16177"
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
                                          >1 day, 3 hours ago</time
                                        ></a
                                      >
                                    </div>

                                    <div class="acomment-content">
                                      <div
                                        class="rtmedia-activity-container"
                                      >
                                        <div class="rtmedia-activity-text">
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
                              class="groups joined_group activity-item mini date-recorded-1730269713 animate-item slideInUp"
                              id="activity-16175"
                              data-bp-activity-id="16175"
                              data-bp-timestamp="1730269713"
                              style="
                                visibility: hidden;
                                animation-name: none;
                              "
                                >
                              <div class="activity-avatar item-avatar">
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
                                      joined the group
                                      <a
                                        href="https://mythemestore.com/beehive-preview/groups/backpakers-club/"
                                        ><img
                                          loading="lazy"
                                          src="https://mythemestore.com/beehive-preview/wp-content/uploads/group-avatars/4/5e2cc339c9d04-bpthumb.jpg"
                                          class="avatar group-4-avatar avatar-20 photo"
                                          width="20"
                                          height="20"
                                          alt="Group logo of Backpakers Club"
                                        />Backpakers Club</a
                                      >
                                    </p>
                                  </div>

                                  <div class="date mute">
                                    1 day, 3 hours ago
                                  </div>

                                  <div class="activity-options dropleft">
                                    <a
                                      class="dropdown-toggle"
                                      href="#"
                                      role="button"
                                      id="activity-action-dropdown-16175"
                                      data-toggle="dropdown"
                                      aria-expanded="false"
                                      ><i class="uil-ellipsis-v"></i
                                    ></a>
                                    <div
                                      class="dropdown-menu"
                                      aria-labelledby="activity-action-dropdown-16175"
                                    >
                                      <div class="activity-meta action">
                                        <div class="generic-button">
                                          <a
                                            href="https://mythemestore.com/beehive-preview/activity/favorite/16175/?_wpnonce=9bedea944d"
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
                                            href="https://mythemestore.com/beehive-preview/activity/delete/16175/?_wpnonce=13fca8171e"
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
                                  <div class="beehive-mini-activity group">
                                    <div class="mini-activity-inner">
                                      <div
                                        class="mini-cover"
                                        style="
                                          background-image: url('https://mythemestore.com/beehive-preview/wp-content/uploads/buddypress/groups/4/cover-image/5e2cc36891950-bp-cover-image.jpg');
                                        "
                                      ></div>
                                      <div class="mini-content">
                                        <div class="mini-avatar">
                                          <a
                                            href="https://mythemestore.com/beehive-preview/groups/backpakers-club/"
                                          >
                                            <img
                                              loading="lazy"
                                              src="https://mythemestore.com/beehive-preview/wp-content/uploads/group-avatars/4/5e2cc339c7b56-bpfull.jpg"
                                              class="avatar group-4-avatar avatar-200 photo"
                                              width="200"
                                              height="200"
                                              alt="Profile Photo"
                                            />
                                          </a>
                                        </div>
                                        <div class="mini-info">
                                          <h5 class="mini-title">
                                            <a
                                              href="https://mythemestore.com/beehive-preview/groups/backpakers-club/"
                                              class="ellipsis"
                                              >Backpakers Club</a
                                            >
                                          </h5>
                                          <div class="mini-meta">
                                            <span class="ellipsis"
                                              ><i class="uil-globe"></i
                                              >public</span
                                            >
                                          </div>
                                        </div>
                                        <div class="mini-actions">
                                          <div
                                            class="group-button public generic-button"
                                            id="groupbutton-4"
                                          >
                                            <a
                                              href="https://mythemestore.com/beehive-preview/groups/backpakers-club/leave-group/?_wpnonce=1effb69a41"
                                              class="group-button leave-group"
                                              title="Leave Group"
                                              data-bp-btn-action="leave_group"
                                              >Leave Group</a
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="activity-meta action">
                                  <div class="generic-button">
                                    <a
                                      id="acomment-comment-16175"
                                      class="button acomment-reply bp-primary-action bp-tooltip"
                                      data-bp-tooltip="Comment"
                                      aria-expanded="false"
                                      href="https://mythemestore.com/beehive-preview/activity/?ac=16175/#ac-form-16175"
                                      role="button"
                                      ><span class="bp-screen-reader-text"
                                        >Comment</span
                                      >
                                      <span class="comment-count"
                                        >0</span
                                      ></a
                                    >
                                  </div>
                                  <div class="generic-button reactions">
                                    <a
                                      href="#"
                                      data-reaction-type=""
                                      class="button react-to-activity"
                                      ><span class="bp-screen-reader-text"
                                        >Like</span
                                      ></a
                                    >
                                    <div class="pick-reaction">
                                      <span class="reaction like"
                                        ><span class="reaction-tooltip"
                                          >Like</span
                                        ></span
                                      ><span class="reaction love"
                                        ><span class="reaction-tooltip"
                                          >Love</span
                                        ></span
                                      ><span class="reaction care"
                                        ><span class="reaction-tooltip"
                                          >Care</span
                                        ></span
                                      ><span class="reaction haha"
                                        ><span class="reaction-tooltip"
                                          >Haha</span
                                        ></span
                                      ><span class="reaction wow"
                                        ><span class="reaction-tooltip"
                                          >Wow</span
                                        ></span
                                      ><span class="reaction sad"
                                        ><span class="reaction-tooltip"
                                          >Sad</span
                                        ></span
                                      ><span class="reaction angry"
                                        ><span class="reaction-tooltip"
                                          >Angry</span
                                        ></span
                                      >
                                    </div>
                                  </div>
                                  <div class="generic-button">
                                    <a
                                      href="#"
                                      id="activity-share-16175"
                                      class="button share-activity"
                                      ><span class="bp-screen-reader-text"
                                        >Share</span
                                      ></a
                                    >
                                    <ul
                                      class="share-activity-options"
                                      aria-labelledby="activity-share-16175"
                                    >
                                      <li>
                                        <a
                                          href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16175/"
                                          class="share-item share-on-facebook"
                                          target="_blank"
                                          >Share on Facebook</a
                                        >
                                      </li>
                                      <li>
                                        <a
                                          href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16175/"
                                          class="share-item share-on-twitter"
                                          target="_blank"
                                          >Share on Twitter</a
                                        >
                                      </li>
                                      <li>
                                        <a
                                          href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16175/"
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
                                  id="ac-form-16175"
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
                                        for="ac-input-16175"
                                        class="bp-screen-reader-text"
                                      >
                                        Comment
                                      </label>
                                      <textarea
                                        id="ac-input-16175"
                                        class="ac-input bp-suggestions"
                                        name="ac_input_16175"
                                      ></textarea>
                                    </div>
                                    <input
                                      type="hidden"
                                      name="comment_form_id"
                                      value="16175"
                                    />

                                    <input
                                      type="submit"
                                      name="ac_form_submit"
                                      value="Post"
                                    /><input
                                      type="hidden"
                                      id="_wpnonce_new_activity_comment_16175"
                                      name="_wpnonce_new_activity_comment_16175"
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
                          </ul>
                        </div>
                        <!-- .activity -->
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
                id="activity_sidebar"
                class="widget-area sidebar-widget-area sticky-sidebar"
              >
                <div
                  id="buddy_bridge_members_widget-2"
                  class="widget buddy-bridge-dynamic-members-list buddypress"
                >
                  <h5 class="widget-title">Members</h5>

                  <div
                    class="item-options"
                    id="buddy-bridge-members-list-options"
                  >
                    <a
                      href="#"
                      id="buddy-bridge-newest-members"
                      >Newest</a
                    >
                  </div>

                  <ul
                    id="buddy-bridge-members-list"
                    class="item-list"
                    aria-live="polite"
                    aria-relevant="all"
                    aria-atomic="true"
                  >
                    @foreach ($all_users as $user)
                    <li class="vcard">
                        <div class="item-avatar">
                          <a
                            href="https://mythemestore.com/beehive-preview/members/user/"
                            ><img
                              loading="lazy"
                              loading="lazy"
                              src="{{ asset($user->profile_picture) }}"
                              class="avatar user-3-avatar avatar-50 photo"
                              width="50"
                              height="50"
                              alt="Profile picture"
                          /></a>
                        </div>

                        <div class="item">
                          <div class="item-title fn">
                            <a
                              href="https://mythemestore.com/beehive-preview/members/user/"
                              >{{$user->first_name}} {{$user->last_name}}</a
                            >
                          </div>
                          <div class="item-meta">
                            <span
                              class=""
                              >{{$user->type}}</span
                            >
                          </div>
                        </div>
                      </li>
                    @endforeach
                  </ul>

                  <input
                    type="hidden"
                    id="_wpnonce-members"
                    name="_wpnonce-members"
                    value="485486bda4"
                  />
                  <input
                    type="hidden"
                    name="members_widget_max"
                    id="members_widget_max"
                    value="7"
                  />
                </div>

                <nav class="sidebar-nav-menu">
                  <ul id="menu-sidebar-menu" class="aside-navbar">
                    <li
                      id="menu-item-115"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-115"
                    >
                      <a href="/"
                        >Home</a
                      >
                    </li>
                    <li
                      id="menu-item-114"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114"
                    >
                      <a
                        href="{{ route('about') }}"
                        >About Us</a
                      >
                    </li>
                    <li
                      id="menu-item-113"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113"
                    >
                      <a
                        href="{{ route('faq') }}"
                        >FAQs</a
                      >
                    </li>
                    <li
                      id="menu-item-112"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112"
                    >
                      <a
                        href="{{ route('contact') }}"
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
