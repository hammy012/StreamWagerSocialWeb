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
                                                            @php
                                                                $postUser = App\Models\User::where(
                                                                    'id',
                                                                    $post->user_id,
                                                                )->first();
                                                            @endphp
                                                            <li class="activity rtmedia_update activity-item has-comments animate-item slideInUp text-rendered"
                                                                id="activity-{{ $post->id }}"
                                                                data-bp-activity-id="{{ $post->id }}"
                                                                data-bp-timestamp="{{ $post->created_at->timestamp }}">

                                                                <!-- Avatar and other post details -->
                                                                <div class="activity-avatar item-avatar">
                                                                    <a
                                                                        href="{{ route('user-profile', ['id' => $postUser->id]) }}">
                                                                        <img loading="lazy"
                                                                            src="{{ asset($postUser->profile_picture) }}"
                                                                            class="avatar user-3-avatar avatar-200 photo"
                                                                            width="200" height="200"
                                                                            alt="Profile picture of {{ $postUser->first_name }} {{ $postUser->last_name }}" />
                                                                    </a>
                                                                </div>

                                                                <div class="activity-content">
                                                                    <div class="activity-header">
                                                                        <div class="posted-meta">
                                                                            <p><a
                                                                                    href="{{ route('user-profile', ['id' => $postUser->id]) }}">{{ $postUser->first_name }}
                                                                                    {{ $postUser->last_name }}</a> posted
                                                                            </p>
                                                                        </div>
                                                                        <div class="date mute">
                                                                            {{ $post->created_at->diffForHumans() }}
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
                                                                                        @elseif(str_contains($media->media_type, 'video/mp4'))
                                                                                            {{--  <div
                                                                                                class="rtmedia-item-thumbnail">  --}}
                                                                                            <video loading="lazy" controls>
                                                                                                <source
                                                                                                    src="{{ asset($media->media_url) }}"
                                                                                                    type="{{ $media->media_type }}">

                                                                                            </video>
                                                                                            {{--  </div>  --}}
                                                                                        @endif
                                                                                    @endif
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>


                                                                    <div class="activity-meta action">
                                                                        <div class="generic-button">
                                                                            <a href="javascript:void(0);"
                                                                                onclick="likePost({{ $post->id }})"
                                                                                id="like-button-{{ $post->id }}"
                                                                                class="button react-to-activity {{ Auth::user()->hasLiked($post->id) ? 'liked' : '' }}"
                                                                                style="color: {{ Auth::user()->hasLiked($post->id) ? '#4B3649' : '#777' }}">
                                                                                <i class="fa fa-thumbs-up mr-2"></i>
                                                                                {{ Auth::user()->hasLiked($post->id) ? 'Liked' : 'Like' }}
                                                                                {{ $post->likes()->count() }}
                                                                            </a>
                                                                        </div>
                                                                        <div class="generic-button">
                                                                            <a id="acomment-comment-{{ $post->id }}"
                                                                                class="button acomment-reply bp-primary-action bp-tooltip"
                                                                                data-bp-tooltip="Comment"
                                                                                aria-expanded="false"
                                                                                href="javascript:void(0);" role="button"
                                                                                onclick="toggleCommentInput({{ $post->id }})">
                                                                                <span class="bp-screen-reader-text"
                                                                                    style="display: block !important;">Comment</span>
                                                                                <span
                                                                                    class="comment-count">{{ $post->comments()->count() }}</span>
                                                                                <!-- Display comment count -->
                                                                            </a>
                                                                        </div>


                                                                    </div>

                                                                    <!-- Hidden comment input -->
                                                                    <div id="comment-input-{{ $post->id }}"
                                                                        style="display:none;">
                                                                        <textarea id="comment-text-{{ $post->id }}" placeholder="Write a comment..." rows="1"></textarea>
                                                                        <button style="margin-top: 14px;"
                                                                            onclick="postComment({{ $post->id }})">Post</button>
                                                                    </div>

                                                                    <!-- Display Comments under the post -->
                                                                    <div class="post-comments"
                                                                        id="comments-{{ $post->id }}">
                                                                        @foreach ($post->comments as $comment)
                                                                            @php($userComment = App\Models\User::where('id', $comment->user_id)->first())
                                                                            <div class="comment"
                                                                                style="display: flex; align-items:center; gap: 12px; margin-top: 12px; background: #eee; padding: 12px; border-radius: 25px;">
                                                                                <img src="{{ asset($userComment->profile_picture) }}"
                                                                                    style="width: 30px; height: 30px; border-radius: 50%"
                                                                                    alt="">
                                                                                <a href="{{ route('user-profile', ['id' => $userComment->id]) }}"
                                                                                    class="color-primary"><strong>{{ $comment->user->first_name }}
                                                                                        {{ $comment->user->last_name }} :
                                                                                    </strong></a>
                                                                                <p>{{ $comment->content }}</p>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
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
                                                    <a href="{{ route('user-profile', ['id' => $user->id]) }}"><img
                                                            loading="lazy" loading="lazy"
                                                            src="{{ asset($user->profile_picture) }}"
                                                            class="avatar user-3-avatar avatar-50 photo"
                                                            style="width: 50px; height: 40px;"
                                                            alt="Profile picture" /></a>
                                                </div>

                                                <div class="item">
                                                    <div class="item-title fn">
                                                        <a href="{{ route('user-profile', ['id' => $user->id]) }}">{{ $user->first_name }}
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
                                        {{--  <li id="menu-item-114"
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
                                        </li>  --}}
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

    <script>
        function likePost(postId) {
            // Send AJAX request to like/unlike the post
            fetch(`/like/${postId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        post_id: postId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    // Toggle the button text and color based on like status
                    const likeButton = document.getElementById(`like-button-${postId}`);
                    if (data.liked) {
                        likeButton.style.color = '#4B3649'; // Liked color
                        likeButton.textContent = 'Liked';
                    } else {
                        likeButton.style.color = '#777'; // Default color
                        likeButton.textContent = 'Like';
                    }
                });
        }
    </script>
    <script>
        function toggleCommentInput(postId) {
            var commentInput = document.getElementById('comment-input-' + postId);
            commentInput.style.display = (commentInput.style.display === 'none') ? 'block' : 'none';
        }

        // Post the comment using AJAX
        // Post the comment using AJAX
        function postComment(postId) {
            var commentText = document.getElementById('comment-text-' + postId).value;

            if (commentText.trim() === "") {
                alert("Please write a comment.");
                return;
            }

            var data = {
                post_id: postId,
                user_id: {{ auth()->user()->id }},
                content: commentText,
                _token: '{{ csrf_token() }}',
            };

            // Update this line to correctly include the postId in the route URL
            fetch("/post/" + postId + "/comment", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(data),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Comment posted successfully!");
                        location.reload(); // Reload to display the new comment
                    } else {
                        alert("Failed to post comment. Please try again.");
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("An error occurred. Please try again.");
                });
        }
    </script>


@endsection



@section('seo')
    <meta name="keywords" content="STREAM WAGER">
    <meta name="description" content="">
    <title>Stream Wager</title>
@endsection
