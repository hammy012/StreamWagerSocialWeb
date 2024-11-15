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

                                <article id="post-0"
                                    class="bp_activity type-bp_activity post-0 page type-page status-publish hentry beehive-post">
                                    <div class="entry-content clearfix">
                                        <div id="buddypress" class="buddypress-wrap beehive bp-dir-hori-nav alignwide">
                                            <nav class="activity-type-navs main-navs bp-navs dir-navs" role="navigation"
                                                aria-label="Directory menu">
                                                <ul class="component-navigation activity-nav">
                                                    <li id="activity-all" class="dynamic" data-bp-scope="all"
                                                        data-bp-object="activity">
                                                        <a href="https://mythemestore.com/beehive-preview/activity/">
                                                            Recent Activity
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- .component-navigation -->
                                            </nav>
                                            <!-- .bp-navs -->
                                            <div class="screen-content hide-filter">
                                                <div class="subnav-filters filters no-ajax" id="subnav-filters">
                                                    <div class="subnav-search clearfix">
                                                        <div id="activity-rss-feed" class="feed">
                                                            <a href="https://mythemestore.com/beehive-preview/activity/feed/"
                                                                class="bp-tooltip" data-bp-tooltip="RSS Feed">
                                                                <span class="bp-screen-reader-text">RSS Feed</span>
                                                            </a>
                                                        </div>

                                                        <div class="dir-search activity-search bp-search"
                                                            data-bp-search="activity">
                                                            <form action="" method="get" class="bp-dir-search-form"
                                                                id="dir-activity-search-form" role="search">
                                                                <label for="dir-activity-search"
                                                                    class="bp-screen-reader-text">Search Activity...</label>

                                                                <input id="dir-activity-search" name="activity_search"
                                                                    type="search" placeholder="Search Activity..." />

                                                                <button type="submit" id="dir-activity-search-submit"
                                                                    class="nouveau-search-submit"
                                                                    name="dir_activity_search_submit">
                                                                    <span class="dashicons dashicons-search"
                                                                        aria-hidden="true"></span>
                                                                    <span id="button-text"
                                                                        class="bp-screen-reader-text">Search</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div id="dir-filters" class="component-filters clearfix">
                                                        <div id="activity-filter-select" class="last filter">
                                                            <label class="bp-screen-reader-text" for="activity-filter-by">
                                                                <span>Show:</span>
                                                            </label>
                                                            <div class="select-wrap">
                                                                <select id="activity-filter-by" data-bp-filter="activity">
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
                                                                    <option value="friendship_accepted,friendship_created">
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
                                                                <span class="select-arrow" aria-hidden="true"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- search & filters -->

                                                <div id="activity-stream" class="activity" data-bp-list="activity"
                                                    style="">
                                                    <ul class="activity-list item-list bp-list">
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
                                                                                <a href="{{ route('profile') }}">{{ $user->first_name }}
                                                                                    {{ $user->last_name }}</a>
                                                                                posted
                                                                            </p>
                                                                        </div>

                                                                        <div class="date mute">
                                                                            {{ $post->created_at->diffForHumans() }}
                                                                        </div>

                                                                        <div class="activity-options dropleft">
                                                                            <a class="dropdown-toggle" href="#"
                                                                                role="button"
                                                                                id="activity-action-dropdown-16180"
                                                                                data-toggle="dropdown"
                                                                                aria-expanded="false"><i
                                                                                    class="fa fa-ellipsis-h"></i></a>
                                                                            <div class="dropdown-menu"
                                                                                aria-labelledby="activity-action-dropdown-16180">
                                                                                <div class="activity-meta action">
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
                                                                                                <video loading="lazy"
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
                                                                                href="https://mythemestore.com/beehive-preview/activity/?ac=16180/#ac-form-16180"
                                                                                role="button"><span
                                                                                    class="bp-screen-reader-text">Comment</span>
                                                                                <span class="comment-count">1</span></a>
                                                                        </div>
                                                                        <div class="generic-button reactions">
                                                                            <a href="#" data-reaction-type="like"
                                                                                class="button react-to-activity"><span
                                                                                    class="bp-screen-reader-text">Like</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="activity-comments">
                                                                    <ul>
                                                                        <li id="acomment-16181" class="comment-item"
                                                                            data-bp-activity-comment-id="16181">
                                                                            <div class="acomment-avatar item-avatar">
                                                                                <a
                                                                                    href="https://mythemestore.com/beehive-preview/members/user/">
                                                                                    <img loading="lazy"
                                                                                        src="https://mythemestore.com/beehive-preview/wp-content/uploads/avatars/3/1730269944-bpthumb.jpg"
                                                                                        class="avatar user-3-avatar avatar-50 photo"
                                                                                        width="50" height="50"
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
                                                                                <div class="rtmedia-activity-container">
                                                                                    <div class="rtmedia-activity-text">
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
                                                                            <input type="hidden" name="comment_form_id"
                                                                                value="16180" />

                                                                            <input type="submit" name="ac_form_submit"
                                                                                value="Post" /><input type="hidden"
                                                                                id="_wpnonce_new_activity_comment_16180"
                                                                                name="_wpnonce_new_activity_comment_16180"
                                                                                value="b7ba7da908" /><input type="hidden"
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
                            <aside id="activity_sidebar" class="widget-area sidebar-widget-area sticky-sidebar">
                                <div id="buddy_bridge_members_widget-2"
                                    class="widget buddy-bridge-dynamic-members-list buddypress">
                                    <h5 class="widget-title">Members</h5>

                                    <div class="item-options" id="buddy-bridge-members-list-options">
                                        <a href="#" id="buddy-bridge-newest-members">Newest</a>
                                    </div>

                                    <ul id="buddy-bridge-members-list" class="item-list" aria-live="polite"
                                        aria-relevant="all" aria-atomic="true">
                                        @foreach ($all_users as $user)
                                            <li class="vcard">
                                                <div class="item-avatar">
                                                    <a href="https://mythemestore.com/beehive-preview/members/user/"><img
                                                            loading="lazy" loading="lazy"
                                                            src="{{ asset($user->profile_picture) }}"
                                                            class="avatar user-3-avatar avatar-50 photo" width="50"
                                                            height="50" alt="Profile picture" /></a>
                                                </div>

                                                <div class="item">
                                                    <div class="item-title fn">
                                                        <a href="https://mythemestore.com/beehive-preview/members/user/">{{ $user->first_name }}
                                                            {{ $user->last_name }}</a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <span class="">{{ $user->type }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <input type="hidden" id="_wpnonce-members" name="_wpnonce-members"
                                        value="485486bda4" />
                                    <input type="hidden" name="members_widget_max" id="members_widget_max"
                                        value="7" />
                                </div>

                                <nav class="sidebar-nav-menu">
                                    <ul id="menu-sidebar-menu" class="aside-navbar">
                                        <li id="menu-item-115"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-115">
                                            <a href="/">Home</a>
                                        </li>
                                        <li id="menu-item-114"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114">
                                            <a href="{{ route('about') }}">About Us</a>
                                        </li>
                                        <li id="menu-item-113"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113">
                                            <a href="{{ route('faq') }}">FAQs</a>
                                        </li>
                                        <li id="menu-item-112"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112">
                                            <a href="{{ route('contact') }}">Contact</a>
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
    <meta name="keywords" content="STREAM WAGER">
    <meta name="description" content="">
    <title>Stream Wager</title>
@endsection
