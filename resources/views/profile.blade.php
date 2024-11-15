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
            color: #333;
            /* Icon color */
            cursor: pointer;
        }
    </style>

    <style>
        /* Style for the container */
        .nav-container {
            display: flex;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        /* Style for each tab */
        .tab {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 15px 20px;
            margin: 5px;
            border-radius: 10px;
            cursor: pointer;
        }

        /* Style for Activity tab */
        .activity-tab {
            background-color: #8224E3;
            /* Purple background */
            color: white;
        }

        .activity-tab a {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
        }

        .activity-tab i {
            font-size: 15px;
            margin-bottom: 8px;
        }

        /* Style for Friends tab */
        .friend-tab {
            background-color: transparent;
            /* No background */
            color: black;
            border: 2px solid #555;
        }

        .friend-tab a {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #555;
        }

        .friend-tab i {
            font-size: 15px;
            margin-bottom: 8px;
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
                                                                            href="{{ route('profile') }}">
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
                                                                    <p style="margin:0; padding:0">{{ $user->type }}</p>
                                                                </div>
                                                                <!-- #item-header-avatar -->
                                                            </div>

                                                            <div class="col-lg-9">
                                                                <div id="item-header-content">
                                                                    <h2 class="user-nicename">{{ $user->username }}</h2>

                                                                    <ul class="member-header-actions action">
                                                                        <li class="generic-button">
                                                                            <a class="edit-profile"
                                                                                href="">Edit
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
                                                                <li class="tab activity-tab">
                                                                    <a href="{{ route('profile') }}"><i
                                                                            class="fa fa-chart-line"></i>Activity</a>
                                                                </li>
                                                                <li class="tab friend-tab">
                                                                    <a href="{{ route('your-friends') }}"><i
                                                                            class="fas fa-user-friends"></i>Friends</a>
                                                                </li>
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
                                                                            <span class="count color-primary">{{ $posts->count() }}</span>
                                                                            <p>Posts</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="widget">
                                                                    <h5 class="widget-title">My photos</h5>
                                                                    <ul class="member-photo-list" style="gap: 8px;">
                                                                        @foreach ($posts as $post)
                                                                            @php
                                                                                $media = App\Models\Media::where(
                                                                                    'post_id',
                                                                                    $post->id,
                                                                                )->first();
                                                                            @endphp

                                                                            @if ($media)
                                                                                @if (str_contains($media->media_type, 'image'))
                                                                                    <div class="inner">
                                                                                        <img style="width: 60px; height: 60px; border-radius: 5px; margin-top: 8px;"
                                                                                            decoding="async"
                                                                                            src="{{ asset($media->media_url) }}"
                                                                                            alt="Photo" />
                                                                                    </div>
                                                                                @endif
                                                                            @endif
                                                                        @endforeach

                                                                    </ul>
                                                                </div>
                                                            </aside>
                                                        </div>




                                                        <div class="col-lg-9 profile-col-main">

                                                            <button id="openModalBtn" style="width: 100%">Create a
                                                                Post</button>



                                                            <div id="bp-nouveau-activity-form" class="activity-update-form">
                                                            </div>

                                                            <input type="hidden" id="rt_upload_hf_activity" value="1"
                                                                name="activity" />

                                                            <div id="activity-stream" class="activity single-user"
                                                                data-bp-list="activity" style="">
                                                                <ul class="activity-list item-list bp-list">
                                                                    {{--  <li class="activity activity_comment activity-item animate-item slideInUp"
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
                                                                    </li>  --}}

                                                                    @foreach ($posts as $post)
                                                                        <li class="activity rtmedia_update activity-item has-comments animate-item slideInUp text-rendered"
                                                                            id="activity-16180" data-bp-activity-id="16180"
                                                                            data-bp-timestamp="1730305712"
                                                                            style="
                                                                                visibility: visible;
                                                                                animation-name: slideInUp;
                                                                                ">
                                                                            <div class="activity-avatar item-avatar">
                                                                                <a href="{{ route('profile') }}">
                                                                                    <img loading="lazy"
                                                                                        src="{{ asset($user->profile_picture) }}"
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
                                                                                                href="{{ route('profile') }}">{{ $user->first_name }}
                                                                                                {{ $user->last_name }}</a>
                                                                                            posted
                                                                                        </p>
                                                                                    </div>

                                                                                    <div class="date mute">
                                                                                        {{ $post->created_at->diffForHumans() }}
                                                                                    </div>

                                                                                    <div class="activity-options dropleft">
                                                                                        <a class="dropdown-toggle"
                                                                                            href="#" role="button"
                                                                                            id="activity-action-dropdown-16180"
                                                                                            data-toggle="dropdown"
                                                                                            aria-expanded="false"><i
                                                                                                class="fa fa-ellipsis-h"></i></a>
                                                                                        <div class="dropdown-menu"
                                                                                            aria-labelledby="activity-action-dropdown-16180">
                                                                                            <div
                                                                                                class="activity-meta action">
                                                                                                <div
                                                                                                    class="generic-button">
                                                                                                    <a href=""
                                                                                                        class="button item-button bp-secondary-action bp-tooltip delete-activity confirm"
                                                                                                        data-bp-tooltip="Delete"><span
                                                                                                            class="bp-screen-reader-text">Delete</span></a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="activity-inner">
                                                                                    <div
                                                                                        class="rtmedia-activity-container">
                                                                                        <ul
                                                                                            class="rtmedia-list rtm-activity-media-list rtmedia-activity-media-length-1 rtm-activity-photo-list">
                                                                                            <li
                                                                                                class="rtmedia-list-item media-type-photo">
                                                                                                <span
                                                                                                    style="color: #444; font-weight: 600;">{{ $post->content }}</span>
                                                                                                @php
                                                                                                    $media = App\Models\Media::where(
                                                                                                        'post_id',
                                                                                                        $post->id,
                                                                                                    )->first();
                                                                                                @endphp

                                                                                                @if ($media)
                                                                                                    @if (str_contains($media->media_type, 'image'))
                                                                                                        <div
                                                                                                            class="rtmedia-item-thumbnail">
                                                                                                            <img loading="lazy"
                                                                                                                alt="{{ $media->media_url }}"
                                                                                                                src="{{ asset($media->media_url) }}" />
                                                                                                        </div>
                                                                                                    @elseif(str_contains($media->media_type, 'video'))
                                                                                                        <div
                                                                                                            class="rtmedia-item-thumbnail">
                                                                                                            <video
                                                                                                                loading="lazy"
                                                                                                                controls>
                                                                                                                <source
                                                                                                                    src="{{ asset($media->media_url) }}"
                                                                                                                    type="{{ $media->media_url }}">
                                                                                                            </video>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                @endif


                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="who-reacted">
                                                                                    <span class="top-reactions"><span
                                                                                            class="like"></span></span>
                                                                                    You reacted to this!
                                                                                </div>
                                                                                <div class="activity-meta action">
                                                                                    <div class="generic-button">
                                                                                        <a id="acomment-comment-16180"
                                                                                            class="button acomment-reply bp-primary-action bp-tooltip"
                                                                                            data-bp-tooltip="Comment"
                                                                                            aria-expanded="false"
                                                                                            href=""
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
                                                                    @endforeach
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
            <form id="createPostForm" action="/create-post" method="POST" enctype="multipart/form-data">
                @csrf <!-- Laravel CSRF Token -->
                <textarea id="postText" name="content" placeholder="What's on your mind?"></textarea>

                <div class="upload-section">
                    <label for="fileInput">
                        {{--  <i class="fas fa-photo-video gallery-icon"></i>  --}}
                    </label>
                    <input type="file" id="fileInput" name="file" accept="image/*,video/*">
                </div>

                <!-- Preview Section -->
                <div id="preview"></div>

                <button type="submit" id="submitPost" style="margin-top: 25px;">Post</button>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Modal open and close functionality
        const openModalBtn = document.getElementById("openModalBtn");
        const postModal = document.getElementById("postModal");
        const closeModal = document.querySelector(".close");
        const fileInput = document.getElementById("fileInput");
        const preview = document.getElementById("preview");

        // Open the modal when the button is clicked
        openModalBtn.addEventListener("click", () => {
            postModal.style.display = "flex";
        });

        // Close the modal when the close button is clicked
        closeModal.addEventListener("click", () => {
            postModal.style.display = "none";
            clearPreview();
        });

        // Close the modal if clicked outside of it
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
                        img.style.height = "100px"; // Set the height to 100px
                        img.style.objectFit = "cover"; // Optional: makes sure the image covers the space
                        preview.appendChild(img);
                    } else if (fileType.startsWith("video")) {
                        const video = document.createElement("video");
                        video.src = e.target.result;
                        video.controls = true;
                        video.style.height = "100px"; // Set the height to 100px
                        video.style.objectFit = "cover"; // Optional: makes sure the video covers the space
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

        // Handle form submission
        {{--  document.getElementById("createPostForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form from submitting normally

            const postText = document.getElementById("postText").value;
            const file = document.getElementById("fileInput").files[0];

            // Create a FormData object to send text and file data
            const formData = new FormData();
            formData.append("content", postText);
            if (file) {
                formData.append("file", file);
            }

            // Send AJAX request to Laravel route
            fetch("/create-post", {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute(
                            "content")
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Post created successfully!");
                        postModal.style.display = "none";
                        clearPreview();
                    } else {
                        alert("Failed to create post. Please try again.");
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                });
        });  --}}
    </script>

@endsection



@section('seo')
    <meta name="keywords" content="STREAM WAGER">
    <meta name="description" content="">
    <title>Stream Wager</title>
@endsection
