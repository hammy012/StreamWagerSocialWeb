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

        .schedule-tab {
            background-color: transparent;
            /* No background */
            color: black;
            border: 2px solid #555;
        }

        .schedule-tab a {
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

        @media (max-width: 768px) {
            .nav-container {
                flex-wrap: wrap;
                justify-content: center;
            }

            .tab {
                flex: 1 1 calc(25% - 10px);
                /* Each tab takes 25% width minus margin */
                margin: 5px;
                padding: 10px 5px;
                /* Smaller padding */
                font-size: 12px;
                /* Smaller font size */
            }

            .tab i {
                font-size: 12px;
                /* Smaller icon size */
                margin-bottom: 4px;
            }

            .tab a {
                font-size: 10px;
                /* Adjust text size inside links */
            }
        }
    </style>


    <style>
        /* Custom Modal Styles */
        .custom-modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            /* Background color with opacity */
            padding-top: 60px;
            /* Position the modal */
        }

        .modal-content {
            background-color: #fff;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            /* Adjust width for responsiveness */
            max-width: 500px;
            /* Maximum width for the modal */
        }

        .modal-header,
        .modal-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header .close-btn {
            font-size: 30px;
            cursor: pointer;
            color: #4B3649;
        }

        .modal-body {
            padding: 10px 0;
        }

        /* Responsive Design for Mobile */
        @media screen and (max-width: 768px) {
            .modal-content {
                width: 90%;
                padding: 15px;
            }

            .modal-header h5 {
                font-size: 18px;
            }

            .modal-footer button {
                padding: 8px 15px;
            }
        }

        /* Button Styles */
        .generic-button a {
            color: #4B3649;
            text-decoration: none;
        }

        .generic-button a i {
            font-size: 20px;
            margin-right: 8px;
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
                                                                        <a href="javascript:void(0)"
                                                                            id="profile-picture-link">
                                                                            <img loading="lazy" decoding="async"
                                                                                src="{{ asset($user->profile_picture) }}"
                                                                                class="avatar user-3-avatar avatar-200 photo"
                                                                                width="200" height="200"
                                                                                alt="Profile picture of Tum Yeto" />
                                                                        </a>

                                                                        <!-- Hidden file input -->
                                                                        <input type="file" id="profile-picture-input"
                                                                            style="display: none;" accept="image/*" />

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
                                                                    <div style="display: flex; justify-content:center;">
                                                                        <ul>
                                                                            <li class="generic-button">
                                                                                <a class="edit-profile" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#editProfileModal"
                                                                                    style="color: #4B3649">
                                                                                    <i class="fas fa-pen"></i> Edit Profile
                                                                                    & Bio
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <!-- Custom Modal -->
                                                                    <div id="editProfileModal" class="custom-modal">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <span class="close-btn">&times;</span>
                                                                                <h5 class="modal-title">Edit Profile</h5>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form id="updateProfileForm"
                                                                                    action="{{ route('profile.update') }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    @method('PUT')
                                                                                    <div class="mb-3"
                                                                                        style="text-align: left;">
                                                                                        <label for="first_name"
                                                                                            class="form-label">First
                                                                                            Name</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="first_name"
                                                                                            name="first_name"
                                                                                            value="{{ Auth::user()->first_name }}"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="mb-3"
                                                                                        style="text-align: left;">
                                                                                        <label for="last_name"
                                                                                            class="form-label">Last
                                                                                            Name</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="last_name" name="last_name"
                                                                                            value="{{ Auth::user()->last_name }}"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="mb-3"
                                                                                        style="text-align: left;">
                                                                                        <label for="username"
                                                                                            class="form-label">Username</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="username" name="username"
                                                                                            value="{{ Auth::user()->username }}"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="mb-3"
                                                                                        style="text-align: left;">
                                                                                        <label for="email"
                                                                                            class="form-label">Email</label>
                                                                                        <input type="email"
                                                                                            class="form-control"
                                                                                            id="email" name="email"
                                                                                            value="{{ Auth::user()->email }}"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="mb-3"
                                                                                        style="text-align: left;">
                                                                                        <label for="bio"
                                                                                            class="form-label">Bio</label>
                                                                                        <textarea type="text" style="height: 80px; border: 1px solid #4B3649; border-radius: 5px;" class="form-control"
                                                                                            id="bio" name="bio" maxlength="200" required>{{ Auth::user()->bio }}</textarea>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary close-btn">Close</button>
                                                                                <button type="submit"
                                                                                    form="updateProfileForm"
                                                                                    class="btn btn-primary">Update</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <script>
                                                                        // Get the modal
                                                                        var modal = document.getElementById("editProfileModal");

                                                                        // Get the button that opens the modal
                                                                        var btn = document.querySelector(".edit-profile");

                                                                        // Get the <span> element that closes the modal
                                                                        var closeBtns = document.querySelectorAll(".close-btn");

                                                                        // When the user clicks the button, open the modal
                                                                        btn.onclick = function(event) {
                                                                            event.preventDefault(); // Prevent default link action
                                                                            modal.style.display = "block";
                                                                        }

                                                                        // When the user clicks on <span> (x), close the modal
                                                                        closeBtns.forEach(function(btn) {
                                                                            btn.onclick = function() {
                                                                                modal.style.display = "none";
                                                                            }
                                                                        });

                                                                        // When the user clicks anywhere outside of the modal, close it
                                                                        window.onclick = function(event) {
                                                                            if (event.target === modal) {
                                                                                modal.style.display = "none";
                                                                            }
                                                                        }
                                                                    </script>




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
                                                                    <a href="{{ route('profile') }}"><i
                                                                            class="fa fa-chart-line"></i>Activity</a>
                                                                </li>
                                                                <li class="tab friend-tab">
                                                                    <a href="{{ route('your-friends') }}"><i
                                                                            class="fas fa-user-friends"></i>Friends</a>
                                                                </li>
                                                                <li class="tab friend-tab">
                                                                    <a href="{{ route('friend-requests') }}"><i
                                                                            class="fas fa-user-friends"></i>Ruquests</a>
                                                                </li>
                                                                @if ($user->type === 'player')
                                                                    <li class="tab schedule-tab">
                                                                        <a href="{{ route('schedule') }}"><i
                                                                                class="fas fa-user-friends"></i>Schedule</a>
                                                                    </li>
                                                                @endif
                                                                <li class="tab activity-tab">
                                                                    <a href="{{ route('stats') }}">
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
                                                                    <!-- My Photos Section -->
                                                                    <h5 class="widget-title">My Photos</h5>
                                                                    <ul class="member-photo-list" style="gap: 8px;">
                                                                        @foreach ($posts as $post)
                                                                            @php
                                                                                $media = App\Models\Media::where(
                                                                                    'post_id',
                                                                                    $post->id,
                                                                                )
                                                                                    ->where(
                                                                                        'media_type',
                                                                                        'like',
                                                                                        '%image%',
                                                                                    )
                                                                                    ->first();
                                                                            @endphp

                                                                            @if ($media)
                                                                                <div class="inner">
                                                                                    <img style="width: 60px; height: 60px; border-radius: 5px; margin-top: 8px;"
                                                                                        decoding="async"
                                                                                        src="{{ asset($media->media_url) }}"
                                                                                        alt="Photo" />
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                </div>

                                                                <div class="widget" style="margin-top: 20px;">
                                                                    <!-- My Videos Section -->
                                                                    <h5 class="widget-title">My Videos</h5>
                                                                    <ul class="member-photo-list" style="gap: 8px;">
                                                                        @foreach ($posts as $post)
                                                                            @php
                                                                                $media = App\Models\Media::where(
                                                                                    'post_id',
                                                                                    $post->id,
                                                                                )
                                                                                    ->where(
                                                                                        'media_type',
                                                                                        'like',
                                                                                        '%video%',
                                                                                    )
                                                                                    ->first();
                                                                            @endphp

                                                                            @if ($media)
                                                                                <div class="inner">
                                                                                    <video
                                                                                        style="width: 60px; height: 60px; border-radius: 5px; margin-top: 8px;"
                                                                                        controls>
                                                                                        <source
                                                                                            src="{{ asset($media->media_url) }}"
                                                                                            type="{{ $media->media_type }}">
                                                                                        Your browser does not support the
                                                                                        video tag.
                                                                                    </video>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                </div>

                                                            </aside>
                                                        </div>




                                                        <div class="col-lg-9 profile-col-main">

                                                            <div class="col-lg-9 profile-col-main">
                                                                <!-- Stats Input Form -->
                                                                <form action="{{ route('stats-store') }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <div class="form-group">
                                                                        <label for="points">Points</label>
                                                                        <input type="number" class="form-control"
                                                                            id="points" name="points" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="rebounds">Rebounds</label>
                                                                        <input type="number" class="form-control"
                                                                            id="rebounds" name="rebounds" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="assists">Assists</label>
                                                                        <input type="number" class="form-control"
                                                                            id="assists" name="assists" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="steals">Steals</label>
                                                                        <input type="number" class="form-control"
                                                                            id="steals" name="steals" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="game_date">Game Date</label>
                                                                        <input type="date" class="form-control"
                                                                            id="game_date" name="game_date" required>
                                                                    </div>

                                                                    <button type="submit"
                                                                        class="btn btn-primary mt-3">Submit
                                                                        Stats</button>
                                                                </form>

                                                                <!-- Stats Table -->
                                                                <table class="table table-responsive mt-5">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Date</th>
                                                                            <th>Points</th>
                                                                            <th>Rebounds</th>
                                                                            <th>Assists</th>
                                                                            <th>Steals</th>
                                                                            <th>Action</th>
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
                                                                                <td>
                                                                                    <!-- Delete button/form -->
                                                                                    <form
                                                                                        action="{{ route('stats.destroy', $stat->id) }}"
                                                                                        method="POST"
                                                                                        style="display:inline;">
                                                                                        @csrf
                                                                                        @method('DELETE')
                                                                                        <button type="submit"
                                                                                            class="btn btn-danger">
                                                                                            <i
                                                                                                class="fas fa-trash-alt"></i>
                                                                                            <!-- Font Awesome trash icon -->
                                                                                        </button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>

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
