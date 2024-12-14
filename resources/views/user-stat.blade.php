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
                                                                <li class="tab friend-tab">
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

                                                                <li class="tab activity-tab">
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
                                                            <h2>{{ $user->first_name }}&rsquo;s Stats</h2>
                                                            <table class="table table-responsive mt-5">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Points</th>
                                                                        <th>Rebounds</th>
                                                                        <th>Assists</th>
                                                                        <th>Steals</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($stats as $stat)
                                                                        <tr>
                                                                            <td>{{ $stat->game_date }}</td>
                                                                            <td>{{ $stat->points }}</td>
                                                                            <td>{{ $stat->rebounds }}</td>
                                                                            <td>{{ $stat->assists }}</td>
                                                                            <td>{{ $stat->steals }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>

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
