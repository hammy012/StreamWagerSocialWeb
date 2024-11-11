@extends('layouts.app')
@section('header', 'Page Heading')
@section('content')

    <style>
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
            text-align: center;
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }

        textarea {
            width: 100%;
            height: 80px;
            margin-bottom: 10px;
        }

        .upload-section {
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .gallery-icon {
            width: 24px;
            height: 24px;
            cursor: pointer;
        }

        #preview img,
        #preview video {
            max-width: 100%;
            margin-top: 10px;
            border-radius: 8px;
        }
        .gallery-icon {
            font-size: 24px;
            color: #333; /* Icon color */
            cursor: pointer;
          }
    </style>


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

                                <article id="post-0"
                                    class="bp_members type-bp_members post-0 page type-page status-publish hentry beehive-post">
                                    <div class="entry-content clearfix">
                                        <div id="buddypress" class="buddypress-wrap beehive bp-dir-hori-nav alignwide">
                                            <div id="item-header" role="complementary" data-bp-item-id="3"
                                                data-bp-item-component="members" class="users-header single-headers">
                                                <div id="cover-image-container">
                                                    <div id="header-cover-image"></div>

                                                    <div id="item-header-cover-image">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div id="item-header-avatar">
                                                                    <div class="item-avatar">
                                                                        <a
                                                                            href="https://mythemestore.com/beehive-preview/members/user/">
                                                                            <img loading="lazy" decoding="async"
                                                                                src="{{ asset($user->profile_picture) }}"
                                                                                class="avatar user-3-avatar avatar-200 photo"
                                                                                width="200" height="200"
                                                                                alt="Profile picture of Tum Yeto" />
                                                                        </a>
                                                                    </div>
                                                                    <h3 class="profile-name">
                                                                        {{ $user->first_name . ' ' . $user->last_name }}
                                                                    </h3>
                                                                </div>
                                                                <!-- #item-header-avatar -->
                                                            </div>

                                                            <div class="col-lg-9">
                                                                <div id="item-header-content">
                                                                    <h2 class="user-nicename">{{ $user->username }}</h2>

                                                                    <ul class="member-header-actions action">
                                                                        <li class="generic-button">
                                                                            <a class="edit-profile"
                                                                                href="https://mythemestore.com/beehive-preview/members/user/profile/edit/#item-body">Edit
                                                                                profile</a>
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
                                                <nav class="main-navs no-ajax bp-navs single-screen-navs horizontal users-nav"
                                                    id="object-nav" role="navigation" aria-label="Member menu">
                                                    <div class="row">
                                                        <div class="col-lg-6 ml-auto mr-auto">
                                                            <div class="nav-container">
                                                                <ul class="profile-nav">
                                                                    <li id="activity-personal-li"
                                                                        class="bp-personal-tab current selected">
                                                                        <a href="https://mythemestore.com/beehive-preview/members/user/activity/"
                                                                            id="user-activity" title="Activity">
                                                                            <span class="nav-link-text">Activity</span>
                                                                        </a>
                                                                    </li>

                                                                    <li id="friends-personal-li" class="bp-personal-tab">
                                                                        <a href="https://mythemestore.com/beehive-preview/members/user/friends/"
                                                                            id="user-friends" title="Friends">
                                                                            <span class="nav-link-text">Friends</span>
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
                                                                class="widget-area profile-widget-area displayed-profile-info">
                                                                <div class="widget">
                                                                    <ul class="connections">
                                                                        <li>
                                                                            <span class="count color-primary">0</span>
                                                                            <p>Friends</p>
                                                                        </li>
                                                                        <li>
                                                                            <span class="count color-primary">5</span>
                                                                            <p>Groups</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="widget">
                                                                    <h5 class="widget-title">My photos</h5>
                                                                    <ul class="member-photo-list">
                                                                        <li
                                                                            class="rtmedia-list-media rtm-gallery-list member-photo">
                                                                            <div class="inner">
                                                                                <a
                                                                                    href="https://mythemestore.com/beehive-preview/members/user/media/3530/">
                                                                                    <img decoding="async"
                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/frontend-Php-Laravel-dark-mode-250x250.png"
                                                                                        alt="frontend Php Laravel dark mode" />
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li
                                                                            class="rtmedia-list-media rtm-gallery-list member-photo">
                                                                            <div class="inner">
                                                                                <a
                                                                                    href="https://mythemestore.com/beehive-preview/members/user/media/3528/">
                                                                                    <img decoding="async"
                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6076-250x250.jpeg"
                                                                                        alt="IMG_6076" />
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li
                                                                            class="rtmedia-list-media rtm-gallery-list member-photo">
                                                                            <div class="inner">
                                                                                <a
                                                                                    href="https://mythemestore.com/beehive-preview/members/user/media/3527/">
                                                                                    <img decoding="async"
                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6083-250x250.jpeg"
                                                                                        alt="IMG_6083" />
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li
                                                                            class="rtmedia-list-media rtm-gallery-list member-photo">
                                                                            <div class="inner">
                                                                                <a
                                                                                    href="https://mythemestore.com/beehive-preview/members/user/media/3526/">
                                                                                    <img decoding="async"
                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6080-250x250.png"
                                                                                        alt="IMG_6080" />
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li
                                                                            class="rtmedia-list-media rtm-gallery-list member-photo">
                                                                            <div class="inner">
                                                                                <a
                                                                                    href="https://mythemestore.com/beehive-preview/members/user/media/3525/">
                                                                                    <img decoding="async"
                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6079-250x250.jpeg"
                                                                                        alt="IMG_6079" />
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li
                                                                            class="rtmedia-list-media rtm-gallery-list member-photo">
                                                                            <div class="inner">
                                                                                <a
                                                                                    href="https://mythemestore.com/beehive-preview/members/user/media/3524/">
                                                                                    <img decoding="async"
                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6078-250x250.png"
                                                                                        alt="IMG_6078" />
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li
                                                                            class="rtmedia-list-media rtm-gallery-list member-photo">
                                                                            <div class="inner">
                                                                                <a
                                                                                    href="https://mythemestore.com/beehive-preview/members/user/media/3523/">
                                                                                    <img decoding="async"
                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6081-250x250.jpeg"
                                                                                        alt="IMG_6081" />
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li
                                                                            class="rtmedia-list-media rtm-gallery-list member-photo">
                                                                            <div class="inner">
                                                                                <a
                                                                                    href="https://mythemestore.com/beehive-preview/members/user/media/3522/">
                                                                                    <img decoding="async"
                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/IMG_6082-250x250.png"
                                                                                        alt="IMG_6082" />
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li
                                                                            class="rtmedia-list-media rtm-gallery-list member-photo">
                                                                            <div class="inner">
                                                                                <a
                                                                                    href="https://mythemestore.com/beehive-preview/members/user/media/3521/">
                                                                                    <img decoding="async"
                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/EFE_6726-250x250.jpg"
                                                                                        alt="EFE_6726" />
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </aside>
                                                        </div>




                                                        <div class="col-lg-9 profile-col-main">

                                                            <button id="openModalBtn" style="width: 100%">Create a
                                                                Post</button>



                                                            <div id="bp-nouveau-activity-form"
                                                                class="activity-update-form"></div>

                                                            <input type="hidden" id="rt_upload_hf_activity"
                                                                value="1" name="activity" />

                                                            <div id="activity-stream" class="activity single-user"
                                                                data-bp-list="activity" style="">
                                                                <ul class="activity-list item-list bp-list">
                                                                    <li class="activity activity_comment activity-item animate-item slideInUp"
                                                                        id="activity-16181" data-bp-activity-id="16181"
                                                                        data-bp-timestamp="1730321202"
                                                                        style="
                                                                            visibility: visible;
                                                                            animation-name: slideInUp;
                                                                            ">
                                                                        <div class="activity-avatar item-avatar">
                                                                            <a
                                                                                href="https://mythemestore.com/beehive-preview/members/user/">
                                                                                <img loading="lazy"
                                                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                                                                    class="avatar user-3-avatar avatar-200 photo"
                                                                                    width="200" height="200"
                                                                                    alt="Profile picture of Tum Yeto" />
                                                                            </a>
                                                                        </div>

                                                                        <div class="activity-content">
                                                                            <div class="activity-header">
                                                                                <div class="posted-meta">
                                                                                    <p>
                                                                                        <a
                                                                                            href="https://mythemestore.com/beehive-preview/members/user/">Tum
                                                                                            Yeto</a>
                                                                                        posted a new activity comment
                                                                                    </p>
                                                                                </div>

                                                                                <div class="date mute">
                                                                                    13 hours, 49 minutes ago
                                                                                </div>
                                                                            </div>

                                                                            <div class="activity-inner">
                                                                                <div class="rtmedia-activity-container">
                                                                                    <div class="rtmedia-activity-text">
                                                                                        <span
                                                                                            data-reaction-type="like">this
                                                                                            is fucked up<br />
                                                                                        </span>
                                                                                    </div>
                                                                                    <ul
                                                                                        class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered">
                                                                                    </ul>
                                                                                </div>
                                                                            </div>

                                                                            <div class="activity-meta action">
                                                                                <div class="generic-button">
                                                                                    <a class="button view bp-secondary-action bp-tooltip"
                                                                                        data-bp-tooltip="View Conversation"
                                                                                        href="https://mythemestore.com/beehive-preview/activity/p/16180/#acomment-16181"
                                                                                        role="button"><span
                                                                                            class="bp-screen-reader-text">View
                                                                                            Conversation</span></a>
                                                                                </div>
                                                                                <div class="generic-button reactions">
                                                                                    <a href="#"
                                                                                        data-reaction-type=""
                                                                                        class="button react-to-activity"><span
                                                                                            class="bp-screen-reader-text">Like</span></a>
                                                                                    <div class="pick-reaction">
                                                                                        <span class="reaction like"><span
                                                                                                class="reaction-tooltip">Like</span></span><span
                                                                                            class="reaction love"><span
                                                                                                class="reaction-tooltip">Love</span></span><span
                                                                                            class="reaction care"><span
                                                                                                class="reaction-tooltip">Care</span></span><span
                                                                                            class="reaction haha"><span
                                                                                                class="reaction-tooltip">Haha</span></span><span
                                                                                            class="reaction wow"><span
                                                                                                class="reaction-tooltip">Wow</span></span><span
                                                                                            class="reaction sad"><span
                                                                                                class="reaction-tooltip">Sad</span></span><span
                                                                                            class="reaction angry"><span
                                                                                                class="reaction-tooltip">Angry</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="generic-button">
                                                                                    <a href="#"
                                                                                        id="activity-share-16181"
                                                                                        class="button share-activity"><span
                                                                                            class="bp-screen-reader-text">Share</span></a>
                                                                                    <ul class="share-activity-options"
                                                                                        aria-labelledby="activity-share-16181"
                                                                                        style="display: none">
                                                                                        <li>
                                                                                            <a id="share-on-activity-16181"
                                                                                                href="#"
                                                                                                class="share-item share-on-activity"
                                                                                                data-share-id="16181">Share
                                                                                                on Activity</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16180/#acomment-16181"
                                                                                                class="share-item share-on-facebook"
                                                                                                target="_blank">Share on
                                                                                                Facebook</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16180/#acomment-16181"
                                                                                                class="share-item share-on-twitter"
                                                                                                target="_blank">Share on
                                                                                                Twitter</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16180/#acomment-16181"
                                                                                                class="share-item share-on-linkedin"
                                                                                                target="_blank">Share on
                                                                                                Linkedin</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="activity rtmedia_update activity-item has-comments animate-item slideInUp text-rendered"
                                                                        id="activity-16180" data-bp-activity-id="16180"
                                                                        data-bp-timestamp="1730305712"
                                                                        style="
                                                            visibility: visible;
                                                            animation-name: slideInUp;
                                                            ">
                                                                        <div class="activity-avatar item-avatar">
                                                                            <a
                                                                                href="https://mythemestore.com/beehive-preview/members/user/">
                                                                                <img loading="lazy"
                                                                                    src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpfull.jpg"
                                                                                    class="avatar user-3-avatar avatar-200 photo"
                                                                                    width="200" height="200"
                                                                                    alt="Profile picture of Tum Yeto" />
                                                                            </a>
                                                                        </div>

                                                                        <div class="activity-content">
                                                                            <div class="activity-header">
                                                                                <div class="posted-meta">
                                                                                    <p>
                                                                                        <a
                                                                                            href="https://mythemestore.com/beehive-preview/members/user/">Tum
                                                                                            Yeto</a>
                                                                                        posted an update
                                                                                    </p>
                                                                                </div>

                                                                                <div class="date mute">
                                                                                    18 hours, 7 minutes ago
                                                                                </div>

                                                                                <div class="activity-options dropleft">
                                                                                    <a class="dropdown-toggle"
                                                                                        href="#" role="button"
                                                                                        id="activity-action-dropdown-16180"
                                                                                        data-toggle="dropdown"
                                                                                        aria-expanded="false"><i
                                                                                            class="uil-ellipsis-v"></i></a>
                                                                                    <div class="dropdown-menu"
                                                                                        aria-labelledby="activity-action-dropdown-16180">
                                                                                        <div class="activity-meta action">
                                                                                            <div class="generic-button">
                                                                                                <a href="https://mythemestore.com/beehive-preview/activity/favorite/16180/?_wpnonce=9bedea944d"
                                                                                                    class="button fav bp-secondary-action bp-tooltip"
                                                                                                    data-bp-tooltip="Mark as Favorite"
                                                                                                    aria-pressed="false"><span
                                                                                                        class="bp-screen-reader-text">Mark
                                                                                                        as
                                                                                                        Favorite</span></a>
                                                                                            </div>
                                                                                            <div class="generic-button">
                                                                                                <a href="https://mythemestore.com/beehive-preview/activity/delete/16180/?_wpnonce=13fca8171e"
                                                                                                    class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                                                                    data-bp-tooltip="Delete"><span
                                                                                                        class="bp-screen-reader-text">Delete</span></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="activity-inner">
                                                                                <div class="rtmedia-activity-container">
                                                                                    <ul
                                                                                        class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-1 rtm-activity-photo-list">
                                                                                        <li
                                                                                            class="rtmedia-list-item media-type-photo">
                                                                                            <a href="https://mythemestore.com/beehive-preview/members/user/media/3530/"
                                                                                                rel="nofollow ugc">
                                                                                                <div
                                                                                                    class="rtmedia-item-thumbnail">
                                                                                                    <img loading="lazy"
                                                                                                        alt="frontend Php Laravel dark mode"
                                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/rtMedia/users/3/2024/10/frontend-Php-Laravel-dark-mode-450x320.png" />
                                                                                                </div>
                                                                                                <div class="rtmedia-item-title"
                                                                                                    style="max-width: 320px">
                                                                                                    <p>
                                                                                                        frontend Php Laravel
                                                                                                        dark mode
                                                                                                    </p>
                                                                                                </div>
                                                                                            </a>
                                                                                            <p>
                                                                                                <a href="https://mythemestore.com/beehive-preview/members/user/media/3530/"
                                                                                                    rel="nofollow ugc"
                                                                                                    class="no-popup">
                                                                                                </a>
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>

                                                                            <div class="who-reacted">
                                                                                <span class="top-reactions"><span
                                                                                        class="like"></span></span>You
                                                                                reacted to this!
                                                                            </div>
                                                                            <div class="activity-meta action">
                                                                                <div class="generic-button">
                                                                                    <a id="acomment-comment-16180"
                                                                                        class="button acomment-reply bp-primary-action bp-tooltip"
                                                                                        data-bp-tooltip="Comment"
                                                                                        aria-expanded="false"
                                                                                        href="https://mythemestore.com/beehive-preview/activity/?ac=16180/#ac-form-16180"
                                                                                        role="button"><span
                                                                                            class="bp-screen-reader-text">Comment</span>
                                                                                        <span
                                                                                            class="comment-count">1</span></a>
                                                                                </div>
                                                                                <div class="generic-button reactions">
                                                                                    <a href="#"
                                                                                        data-reaction-type="like"
                                                                                        class="button react-to-activity"><span
                                                                                            class="bp-screen-reader-text">Like</span></a>
                                                                                    <div class="pick-reaction">
                                                                                        <span class="reaction like"><span
                                                                                                class="reaction-tooltip">Like</span></span><span
                                                                                            class="reaction love"><span
                                                                                                class="reaction-tooltip">Love</span></span><span
                                                                                            class="reaction care"><span
                                                                                                class="reaction-tooltip">Care</span></span><span
                                                                                            class="reaction haha"><span
                                                                                                class="reaction-tooltip">Haha</span></span><span
                                                                                            class="reaction wow"><span
                                                                                                class="reaction-tooltip">Wow</span></span><span
                                                                                            class="reaction sad"><span
                                                                                                class="reaction-tooltip">Sad</span></span><span
                                                                                            class="reaction angry"><span
                                                                                                class="reaction-tooltip">Angry</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="generic-button">
                                                                                    <a href="#"
                                                                                        id="activity-share-16180"
                                                                                        class="button share-activity"><span
                                                                                            class="bp-screen-reader-text">Share</span></a>
                                                                                    <ul class="share-activity-options"
                                                                                        aria-labelledby="activity-share-16180"
                                                                                        style="display: none">
                                                                                        <li>
                                                                                            <a id="share-on-activity-16180"
                                                                                                href="#"
                                                                                                class="share-item share-on-activity"
                                                                                                data-share-id="16180">Share
                                                                                                on Activity</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://mythemestore.com/beehive-preview/activity/p/16180/"
                                                                                                class="share-item share-on-facebook"
                                                                                                target="_blank">Share on
                                                                                                Facebook</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="https://twitter.com/intent/tweet?url=https://mythemestore.com/beehive-preview/activity/p/16180/"
                                                                                                class="share-item share-on-twitter"
                                                                                                target="_blank">Share on
                                                                                                Twitter</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://mythemestore.com/beehive-preview/activity/p/16180/"
                                                                                                class="share-item share-on-linkedin"
                                                                                                target="_blank">Share on
                                                                                                Linkedin</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="activity-comments">
                                                                            <ul>
                                                                                <li id="acomment-16181"
                                                                                    class="comment-item"
                                                                                    data-bp-activity-comment-id="16181">
                                                                                    <div
                                                                                        class="acomment-avatar item-avatar">
                                                                                        <a
                                                                                            href="https://mythemestore.com/beehive-preview/members/user/">
                                                                                            <img loading="lazy"
                                                                                                src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                                                                                class="avatar user-3-avatar avatar-50 photo"
                                                                                                width="50"
                                                                                                height="50"
                                                                                                alt="Profile picture of Tum Yeto" />
                                                                                        </a>
                                                                                    </div>

                                                                                    <div class="acomment-meta">
                                                                                        <a
                                                                                            href="https://mythemestore.com/beehive-preview/members/user/">Tum
                                                                                            Yeto</a>
                                                                                        replied
                                                                                        <a href="https://mythemestore.com/beehive-preview/activity/p/16180/#acomment-16181"
                                                                                            class="activity-time-since"><time
                                                                                                class="time-since"
                                                                                                datetime="2024-10-30 20:46:42"
                                                                                                data-bp-timestamp="1730321202">13
                                                                                                hours, 49 minutes
                                                                                                ago</time></a>
                                                                                    </div>

                                                                                    <div class="acomment-content">
                                                                                        <div
                                                                                            class="rtmedia-activity-container">
                                                                                            <div
                                                                                                class="rtmedia-activity-text">
                                                                                                <span>this is fucked
                                                                                                    up<br />
                                                                                                </span>
                                                                                            </div>
                                                                                            <ul
                                                                                                class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-0 rtm-activity-mixed-list rtm-activity-list-rendered">
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="activity-meta action">
                                                                                        <div class="generic-button">
                                                                                            <a class="acomment-reply bp-primary-action"
                                                                                                id="acomment-reply-16180-from-16181"
                                                                                                href="#acomment-16181">Reply</a>
                                                                                        </div>
                                                                                        <div class="generic-button">
                                                                                            <a class="delete acomment-delete confirm bp-secondary-action"
                                                                                                rel="nofollow"
                                                                                                href="https://mythemestore.com/beehive-preview/activity/delete/16181/?cid=16181&amp;_wpnonce=13fca8171e">Delete</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>

                                                                            <form
                                                                                action="https://mythemestore.com/beehive-preview/activity/reply/"
                                                                                method="post" id="ac-form-16180"
                                                                                class="ac-form">
                                                                                <div class="ac-reply-avatar">
                                                                                    <img loading="lazy"
                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                                                                        class="avatar user-3-avatar avatar-50 photo"
                                                                                        width="50" height="50"
                                                                                        alt="Profile picture of Tum Yeto" />
                                                                                </div>
                                                                                <div class="ac-reply-content">
                                                                                    <div class="ac-textarea">
                                                                                        <label for="ac-input-16180"
                                                                                            class="bp-screen-reader-text">
                                                                                            Comment
                                                                                        </label>
                                                                                        <textarea id="ac-input-16180" class="ac-input bp-suggestions" name="ac_input_16180"></textarea>
                                                                                    </div>
                                                                                    <input type="hidden"
                                                                                        name="comment_form_id"
                                                                                        value="16180" />

                                                                                    <input type="submit"
                                                                                        name="ac_form_submit"
                                                                                        value="Post" /><input
                                                                                        type="hidden"
                                                                                        id="_wpnonce_new_activity_comment_16180"
                                                                                        name="_wpnonce_new_activity_comment_16180"
                                                                                        value="b7ba7da908" /><input
                                                                                        type="hidden"
                                                                                        name="_wp_http_referer"
                                                                                        value="/beehive-preview/wp-admin/admin-ajax.php" />&nbsp;
                                                                                    <button type="button"
                                                                                        class="ac-reply-cancel">
                                                                                        Cancel
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
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

    <div id="postModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Create Post</h2>

            <!-- Post Form -->
            <textarea id="postText" placeholder="What's on your mind?"></textarea>

            <div class="upload-section">
                <label for="fileInput">
                  <i class="fas fa-photo-video gallery-icon"></i> <!-- Font Awesome icon for gallery -->
                </label>
                <input type="file" id="fileInput" accept="image/*,video/*" style="display: none;">
              </div>

            <!-- Preview Section -->
            <div id="preview"></div>

            <button id="submitPost" style="margin-top: 25px;">Post</button>
        </div>
    </div>



    <script>
        // Modal open and close functionality
        const openModalBtn = document.getElementById("openModalBtn");
        const postModal = document.getElementById("postModal");
        const closeModal = document.querySelector(".close");
        const fileInput = document.getElementById("fileInput");
        const preview = document.getElementById("preview");

        openModalBtn.addEventListener("click", () => {
            postModal.style.display = "flex";
        });

        closeModal.addEventListener("click", () => {
            postModal.style.display = "none";
            clearPreview();
        });

        window.addEventListener("click", (event) => {
            if (event.target == postModal) {
                postModal.style.display = "none";
                clearPreview();
            }
        });

        // Image/Video preview functionality
        fileInput.addEventListener("change", () => {
            clearPreview();
            const file = fileInput.files[0];

            if (file) {
                const fileType = file.type;
                const reader = new FileReader();

                reader.onload = function(e) {
                    if (fileType.startsWith("image")) {
                        const img = document.createElement("img");
                        img.src = e.target.result;
                        preview.appendChild(img);
                    } else if (fileType.startsWith("video")) {
                        const video = document.createElement("video");
                        video.src = e.target.result;
                        video.controls = true;
                        preview.appendChild(video);
                    }
                };
                reader.readAsDataURL(file);
            }
        });

        // Clear preview
        function clearPreview() {
            preview.innerHTML = "";
        }
    </script>

@endsection



@section('seo')
    <meta name="keywords" content="STREAM WAGER">
    <meta name="description" content="">
    <title>Stream Wager</title>
@endsection
