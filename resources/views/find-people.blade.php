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

                                <article id="post-0" class="post-0 page type-page status-publish hentry beehive-post">
                                    <div class="entry-content clearfix">
                                        <div id="buddypress" class="buddypress-wrap beehive bp-dir-hori-nav alignwide">
                                            <nav class="members-type-navs main-navs bp-navs dir-navs" role="navigation"
                                                aria-label="Directory menu">
                                                <ul class="component-navigation members-nav">
                                                    <li id="members-all" class="" data-bp-scope="all"
                                                        data-bp-object="members">
                                                        <a href="#">
                                                            All Members
                                                            <span class="count">{{ $search_users->count() }}</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- .component-navigation -->
                                            </nav>
                                            <!-- .bp-navs -->

                                            <div class="screen-content">

                                                <div id="members-dir-list" class="members dir-list" data-bp-list="members"
                                                    style="">
                                                    <ul id="members-list" class="item-list members-list bp-list grid two">
                                                        @forelse ($search_users as $user)
                                                            <li class="item-entryanimate-itemslideInUp odd is-online is-current-user"
                                                                data-bp-item-id="{{ $user->id }}"
                                                                data-bp-item-component="members">
                                                                <div class="list-wrap">
                                                                    <div class="item-avatar">
                                                                        <a href="{{ route('user-profile', ['id' => $user->id]) }}">
                                                                            <img loading="lazy"
                                                                                src="{{ asset($user->profile_picture ?? 'default-avatar.jpg') }}"
                                                                                class="avatar user-avatar avatar-200 photo"
                                                                                style="width: 150px; height: 150px;"
                                                                                alt="Profile picture of {{ $user->first_name }} {{ $user->last_name }}" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-block">
                                                                            <h4 class="list-title member-name">
                                                                                <a href="{{ route('user-profile', ['id' => $user->id]) }}">{{ $user->first_name }}
                                                                                    {{ $user->last_name }}</a>
                                                                            </h4>
                                                                            <p class="item-meta last-activity mute">Last
                                                                                Active:
                                                                                {{ $user->updated_at->diffForHumans() }}</p>
                                                                            <ul class="connections">
                                                                                <li>
                                                                                    <span class="count">0</span>
                                                                                    <p class="mute">Friends</p>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="count">5</span>
                                                                                    <p class="mute">Posts</p>
                                                                                </li>
                                                                            </ul>
                                                                            <ul class="members-meta action">
                                                                                <li class="generic-button">
                                                                                    <a href="#">My Profile</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @empty
                                                            <p>No users found matching your search criteria.</p>
                                                        @endforelse
                                                    </ul>

                                                    <div class="bp-pagination bottom" data-bp-pagination="upage">
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
                            <aside id="buddypress_sidebar" class="widget-area sidebar-widget-area sticky-sidebar">
                                <div id="buddy_bridge_members_widget-3"
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
                                                    <a href=""><img
                                                            loading="lazy" loading="lazy"
                                                            src="{{ asset($user->profile_picture) }}"
                                                            class="avatar user-3-avatar avatar-50 photo" style="width: 50px; height: 40px;" alt="Profile picture" /></a>
                                                </div>

                                                <div class="item">
                                                    <div class="item-title fn">
                                                        <a href="">{{ $user->first_name }}
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
                                        value="51de541be9" />
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
