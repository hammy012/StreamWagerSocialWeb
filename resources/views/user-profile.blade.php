@extends('layouts.app')
@section('header', 'Page Heading')
@section('content')


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
            background-color: #4B3649;
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
                                                                        <a href="#" id="profile-picture-link">
                                                                            <img loading="lazy" decoding="async"
                                                                                src="{{ asset($user->profile_picture) }}"
                                                                                class="avatar user-3-avatar avatar-200 photo"
                                                                                style="width: 200px; height: 200px;"
                                                                                alt="Profile picture of Tum Yeto" />
                                                                        </a>
                                                                        <script>
                                                                            // JavaScript to trigger file input when profile picture is clicked
                                                                            document.getElementById('profile-picture-link').addEventListener('click', function() {
                                                                                document.getElementById('profile-picture-input').click();
                                                                            });

                                                                            // Handle file upload
                                                                            document.getElementById('profile-picture-input').addEventListener('change', function(event) {
                                                                                const file = event.target.files[0];
                                                                                if (file) {
                                                                                    const formData = new FormData();
                                                                                    formData.append('profile_picture', file);

                                                                                    fetch('{{ route('upload-profile-picture') }}', {
                                                                                            method: 'POST',
                                                                                            headers: {
                                                                                                'X-CSRF-TOKEN': '{{ csrf_token() }}', // CSRF token for Laravel
                                                                                            },
                                                                                            body: formData,
                                                                                        })
                                                                                        .then(response => response.json())
                                                                                        .then(data => {
                                                                                            if (data.success) {
                                                                                                alert('Profile picture updated successfully!');
                                                                                                // Update the profile picture preview
                                                                                                document.querySelector('#profile-picture-link img').src = data
                                                                                                    .new_profile_picture_url;
                                                                                            } else {
                                                                                                alert('Failed to upload profile picture.');
                                                                                            }
                                                                                        })
                                                                                        .catch(error => {
                                                                                            console.error('Error uploading profile picture:', error);
                                                                                            alert('An error occurred. Please try again.');
                                                                                        });
                                                                                }
                                                                            });
                                                                        </script>
                                                                    </div>
                                                                    <h3 class="profile-name">
                                                                        {{ $user->first_name . ' ' . $user->last_name }}
                                                                    </h3>
                                                                    <p style="margin:0; padding:0">{{ $user->type }}</p>
                                                                </div>
                                                                <!-- #item-header-avatar -->
                                                            </div>

                                                            <div class="col-lg-9">
                                                                <div>
                                                                    <h2 class="user-nicename">{{ $user->username }}</h2>
                                                                    <p class="mt-2">{{ $user->bio }}</p>

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
                                                                    <a
                                                                        href="{{ route('user-profile', ['id' => $user->id]) }}">
                                                                        <i class="fa fa-chart-line"></i>
                                                                        Activity
                                                                    </a>
                                                                </li>
                                                                @if ($user->type === 'player')


                                                                    @if (auth()->user()->type === 'coach')
                                                                        <li class="tab friend-tab">
                                                                            <a
                                                                                href="{{ route('user-schedule', ['id' => $user->id]) }}">
                                                                                <i class="fa fa-calendar"
                                                                                    aria-hidden="true"></i>
                                                                                Schedule
                                                                            </a>
                                                                        </li>
                                                                    @endif
                                                                @endif
                                                                <li class="tab friend-tab">
                                                                    <a
                                                                        href="{{ route('user-stats', ['id' => $user->id]) }}">
                                                                        <i class="fas fa-chart-line"></i>Stats
                                                                    </a>
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
                                                                            <span
                                                                                class="count">{{ \App\Models\FriendRequest::where(function ($query) use ($user) {
                                                                                    $query->where('sender_id', $user->id)->orWhere('receiver_id', $user->id);
                                                                                })->where('status', 'accepted')->count() }}</span>
                                                                            <p class="mute">Friends</p>
                                                                        </li>
                                                                        <li>
                                                                            <span class="count">
                                                                                {{ \App\Models\Post::where('user_id', $user->id)->count() }}
                                                                            </span>
                                                                            <p class="mute">Posts</p>
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

                                                            {{--  <button id="openModalBtn" style="width: 100%">Create a
                                                                Post</button>  --}}



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
                                                                            id="activity-{{ $post->id }}"
                                                                            data-bp-activity-id="{{ $post->id }}"
                                                                            data-bp-timestamp="{{ $post->created_at->timestamp }}">

                                                                            <!-- Avatar and other post details -->
                                                                            <div class="activity-avatar item-avatar">
                                                                                <a href="{{ route('profile') }}">
                                                                                    <img loading="lazy"
                                                                                        src="{{ asset($user->profile_picture) }}"
                                                                                        class="avatar user-3-avatar avatar-200 photo"
                                                                                        width="200" height="200"
                                                                                        alt="Profile picture of {{ $user->first_name }} {{ $user->last_name }}" />
                                                                                </a>
                                                                            </div>

                                                                            <div class="activity-content">
                                                                                <div class="activity-header">
                                                                                    <div class="posted-meta">
                                                                                        <p><a
                                                                                                href="{{ route('profile') }}">{{ $user->first_name }}
                                                                                                {{ $user->last_name }}</a>
                                                                                            posted</p>
                                                                                    </div>
                                                                                    <div class="date mute">
                                                                                        {{ $post->created_at->diffForHumans() }}
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
                                                                                                    @elseif(str_contains($media->media_type, 'video/mp4'))
                                                                                                        {{--  <div
                                                                                                            class="rtmedia-item-thumbnail">  --}}
                                                                                                        <video
                                                                                                            loading="lazy"
                                                                                                            controls>
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
                                                                                            class="button {{ Auth::user()->hasLiked($post->id) ? 'liked' : '' }}"
                                                                                            style="color: {{ Auth::user()->hasLiked($post->id) ? '#4B3649' : '#777' }}">
                                                                                            <i
                                                                                                class="fa fa-thumbs-up mr-2"></i>
                                                                                            {{ Auth::user()->hasLiked($post->id) ? 'Liked' : 'Like' }}
                                                                                            {{ $post->likes()->count() }}
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="generic-button">
                                                                                        <a id="acomment-comment-{{ $post->id }}"
                                                                                            class="button acomment-reply bp-primary-action bp-tooltip"
                                                                                            data-bp-tooltip="Comment"
                                                                                            aria-expanded="false"
                                                                                            href="javascript:void(0);"
                                                                                            role="button"
                                                                                            onclick="toggleCommentInput({{ $post->id }})">
                                                                                            <span
                                                                                                class="bp-screen-reader-text"
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
                                                                                                    {{ $comment->user->last_name }}
                                                                                                    : </strong></a>
                                                                                            <p>{{ $comment->content }}</p>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
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
