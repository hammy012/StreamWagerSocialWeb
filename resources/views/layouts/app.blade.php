<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HoopXRecruit</title>
    @yield('seo')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="alternate" type="application/rss+xml" title="Beehive Preview | Site Wide Activity RSS Feed"
        href="https://mythemestore.com/beehive-preview/activity/feed/" />
    <meta name="robots" content="max-image-preview:large" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="alternate" type="application/rss+xml" title="Beehive Preview &raquo; Feed"
        href="https://mythemestore.com/beehive-preview/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Beehive Preview &raquo; Comments Feed"
        href="https://mythemestore.com/beehive-preview/comments/feed/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style id="wp-emoji-styles-inline-css" type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <style id="bp-login-form-style-inline-css" type="text/css">
        .widget_bp_core_login_widget .bp-login-widget-user-avatar {
            float: left;
        }

        .widget_bp_core_login_widget .bp-login-widget-user-links {
            margin-left: 70px;
        }

        #bp-login-widget-form label {
            display: block;
            font-weight: 600;
            margin: 15px 0 5px;
            width: auto;
        }

        #bp-login-widget-form input[type="password"],
        #bp-login-widget-form input[type="text"] {
            background-color: #fafafa;
            border: 1px solid #d6d6d6;
            border-radius: 0;
            font: inherit;
            font-size: 100%;
            padding: 0.5em;
            width: 100%;
        }

        #bp-login-widget-form .bp-login-widget-register-link,
        #bp-login-widget-form .login-submit {
            display: inline;
            width: -moz-fit-content;
            width: fit-content;
        }

        #bp-login-widget-form .bp-login-widget-register-link {
            margin-left: 1em;
        }

        #bp-login-widget-form .bp-login-widget-register-link a {
            filter: invert(1);
        }

        #bp-login-widget-form .bp-login-widget-pwd-link {
            font-size: 80%;
        }
    </style>
    <style id="bp-primary-nav-style-inline-css" type="text/css">
        .buddypress_object_nav .bp-navs {
            background: #0000;
            clear: both;
            overflow: hidden;
        }

        .buddypress_object_nav .bp-navs ul {
            margin: 0;
            padding: 0;
        }

        .buddypress_object_nav .bp-navs ul li {
            list-style: none;
            margin: 0;
        }

        .buddypress_object_nav .bp-navs ul li a,
        .buddypress_object_nav .bp-navs ul li span {
            border: 0;
            display: block;
            padding: 5px 10px;
            text-decoration: none;
        }

        .buddypress_object_nav .bp-navs ul li .count {
            background: #eaeaea;
            border: 1px solid #ccc;
            border-radius: 50%;
            color: #555;
            display: inline-block;
            font-size: 12px;
            margin-left: 2px;
            padding: 3px 6px;
            text-align: center;
            vertical-align: middle;
        }

        .buddypress_object_nav .bp-navs ul li a .count:empty {
            display: none;
        }

        .buddypress_object_nav .bp-navs ul li.last select {
            max-width: 185px;
        }

        .buddypress_object_nav .bp-navs ul li.current a,
        .buddypress_object_nav .bp-navs ul li.selected a {
            color: #333;
            opacity: 1;
        }

        .buddypress_object_nav .bp-navs ul li.current a .count,
        .buddypress_object_nav .bp-navs ul li.selected a .count {
            background-color: #fff;
        }

        .buddypress_object_nav .bp-navs ul li.dynamic a .count,
        .buddypress_object_nav .bp-navs ul li.dynamic.current a .count,
        .buddypress_object_nav .bp-navs ul li.dynamic.selected a .count {
            background-color: #5087e5;
            border: 0;
            color: #fafafa;
        }

        .buddypress_object_nav .bp-navs ul li.dynamic a:hover .count {
            background-color: #5087e5;
            border: 0;
            color: #fff;
        }

        .buddypress_object_nav .main-navs.dir-navs {
            margin-bottom: 20px;
        }

        .buddypress_object_nav .bp-navs.group-create-links ul li.current a {
            text-align: center;
        }

        .buddypress_object_nav .bp-navs.group-create-links ul li:not(.current),
        .buddypress_object_nav .bp-navs.group-create-links ul li:not(.current) a {
            color: #767676;
        }

        .buddypress_object_nav .bp-navs.group-create-links ul li:not(.current) a:focus,
        .buddypress_object_nav .bp-navs.group-create-links ul li:not(.current) a:hover {
            background: none;
            color: #555;
        }

        .buddypress_object_nav .bp-navs.group-create-links ul li:not(.current) a[disabled]:focus,
        .buddypress_object_nav .bp-navs.group-create-links ul li:not(.current) a[disabled]:hover {
            color: #767676;
        }
    </style>
    <style id="bp-member-style-inline-css" type="text/css">
        [data-type="bp/member"] input.components-placeholder__input {
            border: 1px solid #757575;
            border-radius: 2px;
            flex: 1 1 auto;
            padding: 6px 8px;
        }

        .bp-block-member {
            position: relative;
        }

        .bp-block-member .member-content {
            display: flex;
        }

        .bp-block-member .user-nicename {
            display: block;
        }

        .bp-block-member .user-nicename a {
            border: none;
            color: currentColor;
            text-decoration: none;
        }

        .bp-block-member .bp-profile-button {
            width: 100%;
        }

        .bp-block-member .bp-profile-button a.button {
            bottom: 10px;
            display: inline-block;
            margin: 18px 0 0;
            position: absolute;
            right: 0;
        }

        .bp-block-member.has-cover .item-header-avatar,
        .bp-block-member.has-cover .member-content,
        .bp-block-member.has-cover .member-description {
            z-index: 2;
        }

        .bp-block-member.has-cover .member-content,
        .bp-block-member.has-cover .member-description {
            padding-top: 75px;
        }

        .bp-block-member.has-cover .bp-member-cover-image {
            background-color: #c5c5c5;
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
            border: 0;
            display: block;
            height: 150px;
            left: 0;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .bp-block-member img.avatar {
            height: auto;
            width: auto;
        }

        .bp-block-member.avatar-none .item-header-avatar {
            display: none;
        }

        .bp-block-member.avatar-none.has-cover {
            min-height: 200px;
        }

        .bp-block-member.avatar-full {
            min-height: 150px;
        }

        .bp-block-member.avatar-full .item-header-avatar {
            width: 180px;
        }

        .bp-block-member.avatar-thumb .member-content {
            align-items: center;
            min-height: 50px;
        }

        .bp-block-member.avatar-thumb .item-header-avatar {
            width: 70px;
        }

        .bp-block-member.avatar-full.has-cover {
            min-height: 300px;
        }

        .bp-block-member.avatar-full.has-cover .item-header-avatar {
            width: 200px;
        }

        .bp-block-member.avatar-full.has-cover img.avatar {
            background: #fffc;
            border: 2px solid #fff;
            margin-left: 20px;
        }

        .bp-block-member.avatar-thumb.has-cover .item-header-avatar {
            padding-top: 75px;
        }

        .entry .entry-content .bp-block-member .user-nicename a {
            border: none;
            color: currentColor;
            text-decoration: none;
        }
    </style>
    <style id="bp-members-style-inline-css" type="text/css">
        [data-type="bp/members"] .components-placeholder.is-appender {
            min-height: 0;
        }

        [data-type="bp/members"] .components-placeholder.is-appender .components-placeholder__label:empty {
            display: none;
        }

        [data-type="bp/members"] .components-placeholder input.components-placeholder__input {
            border: 1px solid #757575;
            border-radius: 2px;
            flex: 1 1 auto;
            padding: 6px 8px;
        }

        [data-type="bp/members"].avatar-none .member-description {
            width: calc(100% - 44px);
        }

        [data-type="bp/members"].avatar-full .member-description {
            width: calc(100% - 224px);
        }

        [data-type="bp/members"].avatar-thumb .member-description {
            width: calc(100% - 114px);
        }

        [data-type="bp/members"] .member-content {
            position: relative;
        }

        [data-type="bp/members"] .member-content .is-right {
            position: absolute;
            right: 2px;
            top: 2px;
        }

        [data-type="bp/members"] .columns-2 .member-content .member-description,
        [data-type="bp/members"] .columns-3 .member-content .member-description,
        [data-type="bp/members"] .columns-4 .member-content .member-description {
            padding-left: 44px;
            width: calc(100% - 44px);
        }

        [data-type="bp/members"] .columns-3 .is-right {
            right: -10px;
        }

        [data-type="bp/members"] .columns-4 .is-right {
            right: -50px;
        }

        .bp-block-members.is-grid {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
        }

        .bp-block-members.is-grid .member-content {
            margin: 0 1.25em 1.25em 0;
            width: 100%;
        }

        @media (min-width: 600px) {
            .bp-block-members.columns-2 .member-content {
                width: calc(50% - 0.625em);
            }

            .bp-block-members.columns-2 .member-content:nth-child(2n) {
                margin-right: 0;
            }

            .bp-block-members.columns-3 .member-content {
                width: calc(33.33333% - 0.83333em);
            }

            .bp-block-members.columns-3 .member-content:nth-child(3n) {
                margin-right: 0;
            }

            .bp-block-members.columns-4 .member-content {
                width: calc(25% - 0.9375em);
            }

            .bp-block-members.columns-4 .member-content:nth-child(4n) {
                margin-right: 0;
            }
        }

        .bp-block-members .member-content {
            display: flex;
            flex-direction: column;
            padding-bottom: 1em;
            text-align: center;
        }

        .bp-block-members .member-content .item-header-avatar,
        .bp-block-members .member-content .member-description {
            width: 100%;
        }

        .bp-block-members .member-content .item-header-avatar {
            margin: 0 auto;
        }

        .bp-block-members .member-content .item-header-avatar img.avatar {
            display: inline-block;
        }

        @media (min-width: 600px) {
            .bp-block-members .member-content {
                flex-direction: row;
                text-align: left;
            }

            .bp-block-members .member-content .item-header-avatar,
            .bp-block-members .member-content .member-description {
                width: auto;
            }

            .bp-block-members .member-content .item-header-avatar {
                margin: 0;
            }
        }

        .bp-block-members .member-content .user-nicename {
            display: block;
        }

        .bp-block-members .member-content .user-nicename a {
            border: none;
            color: currentColor;
            text-decoration: none;
        }

        .bp-block-members .member-content time {
            color: #767676;
            display: block;
            font-size: 80%;
        }

        .bp-block-members.avatar-none .item-header-avatar {
            display: none;
        }

        .bp-block-members.avatar-full {
            min-height: 190px;
        }

        .bp-block-members.avatar-full .item-header-avatar {
            width: 180px;
        }

        .bp-block-members.avatar-thumb .member-content {
            min-height: 80px;
        }

        .bp-block-members.avatar-thumb .item-header-avatar {
            width: 70px;
        }

        .bp-block-members.columns-2 .member-content,
        .bp-block-members.columns-3 .member-content,
        .bp-block-members.columns-4 .member-content {
            display: block;
            text-align: center;
        }

        .bp-block-members.columns-2 .member-content .item-header-avatar,
        .bp-block-members.columns-3 .member-content .item-header-avatar,
        .bp-block-members.columns-4 .member-content .item-header-avatar {
            margin: 0 auto;
        }

        .bp-block-members img.avatar {
            height: auto;
            max-width: -moz-fit-content;
            max-width: fit-content;
            width: auto;
        }

        .bp-block-members .member-content.has-activity {
            align-items: center;
        }

        .bp-block-members .member-content.has-activity .item-header-avatar {
            padding-right: 1em;
        }

        .bp-block-members .member-content.has-activity .wp-block-quote {
            margin-bottom: 0;
            text-align: left;
        }

        .bp-block-members .member-content.has-activity .wp-block-quote cite a,
        .entry .entry-content .bp-block-members .user-nicename a {
            border: none;
            color: currentColor;
            text-decoration: none;
        }
    </style>
    <style id="bp-dynamic-members-style-inline-css" type="text/css">
        .bp-dynamic-block-container .item-options {
            font-size: 0.5em;
            margin: 0 0 1em;
            padding: 1em 0;
        }

        .bp-dynamic-block-container .item-options a.selected {
            font-weight: 600;
        }

        .bp-dynamic-block-container ul.item-list {
            list-style: none;
            margin: 1em 0;
            padding-left: 0;
        }

        .bp-dynamic-block-container ul.item-list li {
            margin-bottom: 1em;
        }

        .bp-dynamic-block-container ul.item-list li:after,
        .bp-dynamic-block-container ul.item-list li:before {
            content: " ";
            display: table;
        }

        .bp-dynamic-block-container ul.item-list li:after {
            clear: both;
        }

        .bp-dynamic-block-container ul.item-list li .item-avatar {
            float: left;
            width: 60px;
        }

        .bp-dynamic-block-container ul.item-list li .item {
            margin-left: 70px;
        }
    </style>
    <style id="bp-online-members-style-inline-css" type="text/css">
        .widget_bp_core_whos_online_widget .avatar-block,
        [data-type="bp/online-members"] .avatar-block {
            display: flex;
            flex-flow: row wrap;
        }

        .widget_bp_core_whos_online_widget .avatar-block img,
        [data-type="bp/online-members"] .avatar-block img {
            margin: 0.5em;
        }
    </style>
    <style id="bp-active-members-style-inline-css" type="text/css">
        .widget_bp_core_recently_active_widget .avatar-block,
        [data-type="bp/active-members"] .avatar-block {
            display: flex;
            flex-flow: row wrap;
        }

        .widget_bp_core_recently_active_widget .avatar-block img,
        [data-type="bp/active-members"] .avatar-block img {
            margin: 0.5em;
        }
    </style>
    <style id="bp-latest-activities-style-inline-css" type="text/css">
        .bp-latest-activities .components-flex.components-select-control select[multiple] {
            height: auto;
            padding: 0 8px;
        }

        .bp-latest-activities .components-flex.components-select-control select[multiple]+.components-input-control__suffix svg {
            display: none;
        }

        .bp-latest-activities-block a,
        .entry .entry-content .bp-latest-activities-block a {
            border: none;
            text-decoration: none;
        }

        .bp-latest-activities-block .activity-list.item-list blockquote {
            border: none;
            padding: 0;
        }

        .bp-latest-activities-block .activity-list.item-list blockquote .activity-item:not(.mini) {
            box-shadow: 1px 0 4px #00000026;
            padding: 0 1em;
            position: relative;
        }

        .bp-latest-activities-block .activity-list.item-list blockquote .activity-item:not(.mini):after,
        .bp-latest-activities-block .activity-list.item-list blockquote .activity-item:not(.mini):before {
            border-color: #0000;
            border-style: solid;
            content: "";
            display: block;
            height: 0;
            left: 15px;
            position: absolute;
            width: 0;
        }

        .bp-latest-activities-block .activity-list.item-list blockquote .activity-item:not(.mini):before {
            border-top-color: #00000026;
            border-width: 9px;
            bottom: -18px;
            left: 14px;
        }

        .bp-latest-activities-block .activity-list.item-list blockquote .activity-item:not(.mini):after {
            border-top-color: #fff;
            border-width: 8px;
            bottom: -16px;
        }

        .bp-latest-activities-block .activity-list.item-list blockquote .activity-item.mini .avatar {
            display: inline-block;
            height: 20px;
            margin-right: 2px;
            vertical-align: middle;
            width: 20px;
        }

        .bp-latest-activities-block .activity-list.item-list footer {
            align-items: center;
            display: flex;
        }

        .bp-latest-activities-block .activity-list.item-list footer img.avatar {
            border: none;
            display: inline-block;
            margin-right: 0.5em;
        }

        .bp-latest-activities-block .activity-list.item-list footer .activity-time-since {
            font-size: 90%;
        }

        .bp-latest-activities-block .widget-error {
            border-left: 4px solid #0b80a4;
            box-shadow: 1px 0 4px #00000026;
        }

        .bp-latest-activities-block .widget-error p {
            padding: 0 1em;
        }
    </style>
    <style id="bp-friends-style-inline-css" type="text/css">
        .bp-dynamic-block-container .item-options {
            font-size: 0.5em;
            margin: 0 0 1em;
            padding: 1em 0;
        }

        .bp-dynamic-block-container .item-options a.selected {
            font-weight: 600;
        }

        .bp-dynamic-block-container ul.item-list {
            list-style: none;
            margin: 1em 0;
            padding-left: 0;
        }

        .bp-dynamic-block-container ul.item-list li {
            margin-bottom: 1em;
        }

        .bp-dynamic-block-container ul.item-list li:after,
        .bp-dynamic-block-container ul.item-list li:before {
            content: " ";
            display: table;
        }

        .bp-dynamic-block-container ul.item-list li:after {
            clear: both;
        }

        .bp-dynamic-block-container ul.item-list li .item-avatar {
            float: left;
            width: 60px;
        }

        .bp-dynamic-block-container ul.item-list li .item {
            margin-left: 70px;
        }
    </style>
    <style id="bp-group-style-inline-css" type="text/css">
        [data-type="bp/group"] input.components-placeholder__input {
            border: 1px solid #757575;
            border-radius: 2px;
            flex: 1 1 auto;
            padding: 6px 8px;
        }

        .bp-block-group {
            position: relative;
        }

        .bp-block-group .group-content {
            display: flex;
        }

        .bp-block-group .group-description {
            width: 100%;
        }

        .bp-block-group .group-description-content {
            margin-bottom: 18px;
            width: 100%;
        }

        .bp-block-group .bp-profile-button {
            overflow: hidden;
            width: 100%;
        }

        .bp-block-group .bp-profile-button a.button {
            margin: 18px 0 0;
        }

        .bp-block-group.has-cover .group-content,
        .bp-block-group.has-cover .group-description,
        .bp-block-group.has-cover .item-header-avatar {
            z-index: 2;
        }

        .bp-block-group.has-cover .group-content,
        .bp-block-group.has-cover .group-description {
            padding-top: 75px;
        }

        .bp-block-group.has-cover .bp-group-cover-image {
            background-color: #c5c5c5;
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
            border: 0;
            display: block;
            height: 150px;
            left: 0;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .bp-block-group img.avatar {
            height: auto;
            width: auto;
        }

        .bp-block-group.avatar-none .item-header-avatar {
            display: none;
        }

        .bp-block-group.avatar-full {
            min-height: 150px;
        }

        .bp-block-group.avatar-full .item-header-avatar {
            width: 180px;
        }

        .bp-block-group.avatar-full .group-description {
            padding-left: 35px;
        }

        .bp-block-group.avatar-thumb .item-header-avatar {
            width: 70px;
        }

        .bp-block-group.avatar-thumb .item-header-avatar img.avatar {
            margin-top: 15px;
        }

        .bp-block-group.avatar-none.has-cover {
            min-height: 200px;
        }

        .bp-block-group.avatar-none.has-cover .item-header-avatar {
            padding-top: 75px;
        }

        .bp-block-group.avatar-full.has-cover {
            min-height: 300px;
        }

        .bp-block-group.avatar-full.has-cover .item-header-avatar {
            width: 200px;
        }

        .bp-block-group.avatar-full.has-cover img.avatar {
            background: #fffc;
            border: 2px solid #fff;
            margin-left: 20px;
        }

        .bp-block-group.avatar-thumb:not(.has-description) .group-content {
            align-items: center;
            min-height: 50px;
        }

        .bp-block-group.avatar-thumb.has-cover .item-header-avatar {
            padding-top: 75px;
        }

        .bp-block-group.has-description .bp-profile-button a.button {
            display: block;
            float: right;
        }
    </style>
    <style id="bp-groups-style-inline-css" type="text/css">
        [data-type="bp/groups"] .components-placeholder.is-appender {
            min-height: 0;
        }

        [data-type="bp/groups"] .components-placeholder.is-appender .components-placeholder__label:empty {
            display: none;
        }

        [data-type="bp/groups"] .components-placeholder input.components-placeholder__input {
            border: 1px solid #757575;
            border-radius: 2px;
            flex: 1 1 auto;
            padding: 6px 8px;
        }

        [data-type="bp/groups"].avatar-none .group-description {
            width: calc(100% - 44px);
        }

        [data-type="bp/groups"].avatar-full .group-description {
            width: calc(100% - 224px);
        }

        [data-type="bp/groups"].avatar-thumb .group-description {
            width: calc(100% - 114px);
        }

        [data-type="bp/groups"] .group-content {
            position: relative;
        }

        [data-type="bp/groups"] .group-content .is-right {
            position: absolute;
            right: 2px;
            top: 2px;
        }

        [data-type="bp/groups"] .columns-2 .group-content .group-description,
        [data-type="bp/groups"] .columns-3 .group-content .group-description,
        [data-type="bp/groups"] .columns-4 .group-content .group-description {
            padding-left: 44px;
            width: calc(100% - 44px);
        }

        [data-type="bp/groups"] .columns-3 .is-right {
            right: -10px;
        }

        [data-type="bp/groups"] .columns-4 .is-right {
            right: -50px;
        }

        .bp-block-groups.is-grid {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
        }

        .bp-block-groups.is-grid .group-content {
            margin: 0 1.25em 1.25em 0;
            width: 100%;
        }

        @media (min-width: 600px) {
            .bp-block-groups.columns-2 .group-content {
                width: calc(50% - 0.625em);
            }

            .bp-block-groups.columns-2 .group-content:nth-child(2n) {
                margin-right: 0;
            }

            .bp-block-groups.columns-3 .group-content {
                width: calc(33.33333% - 0.83333em);
            }

            .bp-block-groups.columns-3 .group-content:nth-child(3n) {
                margin-right: 0;
            }

            .bp-block-groups.columns-4 .group-content {
                width: calc(25% - 0.9375em);
            }

            .bp-block-groups.columns-4 .group-content:nth-child(4n) {
                margin-right: 0;
            }
        }

        .bp-block-groups .group-content {
            display: flex;
            flex-direction: column;
            padding-bottom: 1em;
            text-align: center;
        }

        .bp-block-groups .group-content .group-description,
        .bp-block-groups .group-content .item-header-avatar {
            width: 100%;
        }

        .bp-block-groups .group-content .item-header-avatar {
            margin: 0 auto;
        }

        .bp-block-groups .group-content .item-header-avatar img.avatar {
            display: inline-block;
        }

        @media (min-width: 600px) {
            .bp-block-groups .group-content {
                flex-direction: row;
                text-align: left;
            }

            .bp-block-groups .group-content .group-description,
            .bp-block-groups .group-content .item-header-avatar {
                width: auto;
            }

            .bp-block-groups .group-content .item-header-avatar {
                margin: 0;
            }
        }

        .bp-block-groups .group-content time {
            color: #767676;
            display: block;
            font-size: 80%;
        }

        .bp-block-groups.avatar-none .item-header-avatar {
            display: none;
        }

        .bp-block-groups.avatar-full {
            min-height: 190px;
        }

        .bp-block-groups.avatar-full .item-header-avatar {
            width: 180px;
        }

        .bp-block-groups.avatar-thumb .group-content {
            min-height: 80px;
        }

        .bp-block-groups.avatar-thumb .item-header-avatar {
            width: 70px;
        }

        .bp-block-groups.columns-2 .group-content,
        .bp-block-groups.columns-3 .group-content,
        .bp-block-groups.columns-4 .group-content {
            display: block;
            text-align: center;
        }

        .bp-block-groups.columns-2 .group-content .item-header-avatar,
        .bp-block-groups.columns-3 .group-content .item-header-avatar,
        .bp-block-groups.columns-4 .group-content .item-header-avatar {
            margin: 0 auto;
        }

        .bp-block-groups img.avatar {
            height: auto;
            max-width: -moz-fit-content;
            max-width: fit-content;
            width: auto;
        }

        .bp-block-groups .member-content.has-description {
            align-items: center;
        }

        .bp-block-groups .member-content.has-description .item-header-avatar {
            padding-right: 1em;
        }

        .bp-block-groups .member-content.has-description .group-description-content {
            margin-bottom: 0;
            text-align: left;
        }
    </style>
    <style id="bp-dynamic-groups-style-inline-css" type="text/css">
        .bp-dynamic-block-container .item-options {
            font-size: 0.5em;
            margin: 0 0 1em;
            padding: 1em 0;
        }

        .bp-dynamic-block-container .item-options a.selected {
            font-weight: 600;
        }

        .bp-dynamic-block-container ul.item-list {
            list-style: none;
            margin: 1em 0;
            padding-left: 0;
        }

        .bp-dynamic-block-container ul.item-list li {
            margin-bottom: 1em;
        }

        .bp-dynamic-block-container ul.item-list li:after,
        .bp-dynamic-block-container ul.item-list li:before {
            content: " ";
            display: table;
        }

        .bp-dynamic-block-container ul.item-list li:after {
            clear: both;
        }

        .bp-dynamic-block-container ul.item-list li .item-avatar {
            float: left;
            width: 60px;
        }

        .bp-dynamic-block-container ul.item-list li .item {
            margin-left: 70px;
        }
    </style>
    <style id="bp-sitewide-notices-style-inline-css" type="text/css">
        .bp-sitewide-notice-block .bp-screen-reader-text,
        [data-type="bp/sitewide-notices"] .bp-screen-reader-text {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important;
        }

        .bp-sitewide-notice-block [data-bp-tooltip]:after,
        [data-type="bp/sitewide-notices"] [data-bp-tooltip]:after {
            background-color: #fff;
            border: 1px solid #737373;
            border-radius: 1px;
            box-shadow: 4px 4px 8px #0003;
            color: #333;
            content: attr(data-bp-tooltip);
            display: none;
            font-family: Helvetica Neue, Helvetica, Arial, san-serif;
            font-size: 12px;
            font-weight: 400;
            letter-spacing: normal;
            line-height: 1.25;
            max-width: 200px;
            opacity: 0;
            padding: 5px 8px;
            pointer-events: none;
            position: absolute;
            text-shadow: none;
            text-transform: none;
            transform: translateZ(0);
            transition: all 1.5s ease;
            visibility: hidden;
            white-space: nowrap;
            word-wrap: break-word;
            z-index: 100000;
        }

        .bp-sitewide-notice-block .bp-tooltip:after,
        [data-type="bp/sitewide-notices"] .bp-tooltip:after {
            left: 50%;
            margin-top: 7px;
            top: 110%;
            transform: translate(-50%);
        }

        .bp-sitewide-notice-block {
            border-left: 4px solid #ff853c;
            padding-left: 1em;
            position: relative;
        }

        .bp-sitewide-notice-block h2:before {
            background: none;
            border: none;
        }

        .bp-sitewide-notice-block .dismiss-notice {
            background-color: #0000;
            border: 1px solid #ff853c;
            color: #ff853c;
            display: block;
            padding: 0.2em 0.5em;
            position: absolute;
            right: 0.5em;
            top: 0.5em;
            width: -moz-fit-content;
            width: fit-content;
        }

        .bp-sitewide-notice-block .dismiss-notice:hover {
            background-color: #ff853c;
            color: #fff;
        }
    </style>
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em;
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none;
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #63435f;
            --wp--preset--color--primary-color: #4B3649;
            --wp--preset--color--very-light-gray: #eeeeee;
            --wp--preset--color--very-dark-gray: #313131;
            --wp--preset--color--white-color: #ffffff;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                    rgba(6, 147, 227, 1) 0%,
                    rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                    rgb(122, 220, 180) 0%,
                    rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                    rgba(252, 185, 0, 1) 0%,
                    rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                    rgba(255, 105, 0, 1) 0%,
                    rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                    rgb(238, 238, 238) 0%,
                    rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                    rgb(74, 234, 220) 0%,
                    rgb(151, 120, 209) 20%,
                    rgb(207, 42, 186) 40%,
                    rgb(238, 44, 130) 60%,
                    rgb(251, 105, 98) 80%,
                    rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                    rgb(255, 206, 236) 0%,
                    rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                    rgb(254, 205, 165) 0%,
                    rgb(254, 45, 45) 50%,
                    rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                    rgb(255, 203, 112) 0%,
                    rgb(199, 81, 192) 50%,
                    rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                    rgb(255, 245, 203) 0%,
                    rgb(182, 227, 212) 50%,
                    rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                    rgb(202, 248, 128) 0%,
                    rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg,
                    rgb(2, 3, 129) 0%,
                    rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 16px;
            --wp--preset--font-size--large: 24px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--normal: 14px;
            --wp--preset--font-size--huge: 32px;
            --wp--preset--font-family--inter: "Inter", sans-serif;
            --wp--preset--font-family--cardo: Cardo;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
                6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>

    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>

    <style id="beehive-inline-css" type="text/css">
        :root {
            --theme-body-font-family: Nunito Sans;
            --theme-body-font-size: 14px;
            --theme-body-font-weight: 400;
            --theme-body-line-height: 26px;
            --theme-heading-font-family: Quicksand;
            --theme-heading-font-weight: 700;
            --theme-color-primary: #4B3649;
            --theme-color-primary-rgb: 130, 36, 227;
            --theme-color-primary-lightened: #4B3649;
            --theme-color-primary-darkened: #4B3649;
            --theme-color-text: #626276;
            --theme-color-textmute-half: #838397;
            --theme-color-textmute: #bbbbcf;
            --theme-color-heading: #4f515b;
            --theme-color-anchor: #29292d;
            --theme-background-color-primary: #4B3649;
            --theme-color-border: #e7edf2;
            --theme-color-info: #4B3649;
            --theme-color-info-rgb: 130, 36, 227;
            --theme-color-info-lightened: #4B3649;
            --theme-color-success: #2ed573;
            --theme-color-success-rgb: 46, 213, 115;
            --theme-color-success-lightened: #48ef8d;
            --theme-color-warn: #ffa500;
            --theme-color-warn-rgb: 255, 165, 0;
            --theme-color-warn-lightened: #ffcb26;
            --theme-color-error: #ff0000;
            --theme-color-error-rgb: 255, 0, 0;
            --theme-color-error-lightened: #ff2626;
            --social-template-top-bg: #383a45;
            --social-template-top-bg--lightened: #52545f;
        }
    </style>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('web/assets/css/style.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="bbp-default-css" href="{{ asset('web/assets/css/bbpress.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="buddycommerce-core-css" href="{{ asset('web/assets/css/buddycommerce.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="dashicons-css" href="{{ asset('web/assets/css/dashicons.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="bp-tooltips-css" href="{{ asset('web/assets/css/tooltips.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="bp-nouveau-css" href="{{ asset('web/assets/css/buddypress.min.css') }}"
        type="text/css" media="screen" />
    <link rel="stylesheet" id="bp-mentions-css-css" href="{{ asset('web/assets/css/mentions.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('web/assets/css/styles.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="buddy-bridge-css" href="{{ asset('web/assets/css/brigde-public.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="buddy-chat_main-css" href="{{ asset('web/assets/css/buddychat.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="beehive-fonts-css"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans%3A300%2C400%2C600%2C700%2C300italic%2C400italic%2C600italic%2C700italic%7CQuicksand%3A700&#038;ver=1.6#038;subset"
        type="text/css" media="all" />
    <link rel="stylesheet" id="bootstrap-css" href="{{ asset('web/assets/css/bootstrap.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="ionicons-css" href="{{ asset('web/assets/css/ionicons.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="unicons-css" href="{{ asset('web/assets/css/unicons.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="mscrollbar-css" href="{{ asset('web/assets/css/mscrollbar.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="swiper-css" href="{{ asset('web/assets/css/swiper.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="animate-css" href="{{ asset('web/assets/css/animate.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="hiraku-css" href="{{ asset('web/assets/css/hiraku.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="beehive-job-manager-css" href="{{ asset('web/assets/css/job-manger.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="beehive-media-css" href="{{ asset('web/assets/css/rtmedia.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="beehive-adverts-css" href="{{ asset('web/assets/css/frontend.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="beehive-woocommerce-css" href="{{ asset('web/assets/css/woocommerce.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="beehive-woocommerce-layout-css" href="{{ asset('web/assets/css/layout.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('web/assets/css/front.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-icons-css" href="{{ asset('web/assets/css/elementor-icons.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="beehive-css" href="{{ asset('web/assets/css/beehive.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="beehive-child-css" href="{{ asset('web/assets/css/style2.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="rt-mediaelement-css" href="{{ asset('web/assets/css/legacy.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="rt-mediaelement-wp-css" href="{{ asset('web/assets/css/element.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="rtmedia-upload-terms-main-css" href="{{ asset('web/assets/css/terms.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="wc-blocks-style-css" href="{{ asset('web/assets/css/block.css') }}" type="text/css"
        media="all" />

    <script type="text/javascript" src="{{ asset('web/assets/js/moxie.min.js') }}" id="moxiejs-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/plupload.min.js') }}" id="plupload-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/jquery.min.js') }}" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/jquery-migrate.min.js') }}" id="jquery-migrate-js">
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/jquery-query.min.js') }}" id="bp-jquery-query-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/jquery-cookie.min.js') }}" id="bp-jquery-cookie-js">
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/jquery-scroll-to.min.js') }}" id="bp-jquery-scroll-to-js">
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/jquery.blockUI.min.js') }}" id="jquery-blockui-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            ajax_url: "\/beehive-preview\/wp-admin\/admin-ajax.php",
            wc_ajax_url: "\/beehive-preview\/?wc-ajax=%%endpoint%%",
            i18n_view_cart: "View cart",
            cart_url: "https:\/\/mythemestore.com\/beehive-preview\/cart\/",
            is_cart: "",
            cart_redirect_after_add: "no",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/add-to-cart.min.js') }}" id="wc-add-to-cart-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/cookie.min.js') }}" id="js-cookie-js" defer="defer"
        data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            ajax_url: "\/beehive-preview\/wp-admin\/admin-ajax.php",
            wc_ajax_url: "\/beehive-preview\/?wc-ajax=%%endpoint%%",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/woocommerce.min.js') }}" id="woocommerce-js" defer="defer"
        data-wp-strategy="defer"></script>
    <link rel="https://api.w.org/" href="https://mythemestore.com/beehive-preview/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://mythemestore.com/beehive-preview/wp-json/wp/v2/buddypress/371" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://mythemestore.com/beehive-preview/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.6.2" />
    <meta name="generator" content="WooCommerce 9.2.3" />
    <link rel="shortlink" href="https://mythemestore.com/beehive-preview/?p=371" />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://mythemestore.com/beehive-preview/wp-json/oembed/1.0/embed?url" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://mythemestore.com/beehive-preview/wp-json/oembed/1.0/embed?url&#038;format=xml" />
    <meta name="framework" content="Redux 4.1.24" />
    <script type="text/javascript">
        var ajaxurl =
            "https://mythemestore.com/beehive-preview/wp-admin/admin-ajax.php";
    </script>

    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto" />
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <link rel="alternate" type="application/rss+xml" title="Beehive Preview | Site Wide Activity RSS Feed"
        href="" />

    <link rel="canonical" href="" />
    <style id="wp-fonts-local" type="text/css">
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url("https://mythemestore.com/beehive-preview/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2") format("woff2");
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url("https://mythemestore.com/beehive-preview/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2") format("woff2");
        }
    </style>
    <link rel="icon"
        href="https://mythemestore.com/beehive-preview/wp-content/uploads/2020/01/cropped-site-icon-32x32.png"
        sizes="32x32" />
    <link rel="icon"
        href="https://mythemestore.com/beehive-preview/wp-content/uploads/2020/01/cropped-site-icon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://mythemestore.com/beehive-preview/wp-content/uploads/2020/01/cropped-site-icon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://mythemestore.com/beehive-preview/wp-content/uploads/2020/01/cropped-site-icon-270x270.png" />


</head>

<body
    class="
    @if (request()->is('profile*') || request()->is('user-friends*') || request()->is('your-friends*') || request()->is('user-profile*') || request()->is('friend-requests*') || request()->is('schedule*') || request()->is('user-schedule*') || request()->is('stats*') || request()->is('user-stats*')) activity bp-user my-activity my-account just-me buddypress bp-nouveau bbp-user-page single singular bbpress buddypress-template-default page page-id-371 logged-in wp-embed-responsive theme-beehive woocommerce-no-js beehive beehive-user buddychat-is-active bp-is-my-profile beehive-child elementor-default elementor-kit-588 title-bar-active beehive-social-layout panel-collapsed no-sidebar
    @elseif (request()->is('about*')) bp-nouveau page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-101 wp-embed-responsive theme-beehive woocommerce-no-js beehive beehive-guest-user beehive-child elementor-default elementor-kit-588 elementor-page elementor-page-101 full-width
    @else
        directory activity buddypress bp-nouveau buddypress-template-default page page-id-370 wp-embed-responsive theme-beehive woocommerce-no-js beehive beehive-guest-user beehive-child elementor-default elementor-kit-588 title-bar-active beehive-social-layout panel-expanded has-page-sidebar @endif
    ">

    <style>
        .newImageLogo{
            width: 100px;
        }
    </style>


    <div id="beehive-social-panel" class="beehive-social-panel">
        <div class="inner-panel ass-scrollbar">
            <div class="panel-block dark">
                <a href="/" class="">
                    <img class="newImageLogo" src="{{ asset('assets/img/logo.jpg') }}"
                        alt="Beehive Preview" />
                </a>
                @if (Auth::guard('web')->check())
                    @php($user = App\Models\User::where('id', Auth::guard('web')->user()->id)->first())
                    <div class="my-card item">
                        <div class="info">
                            <a href="{{ route('profile') }}" class="profile-avatar">
                                <img src="{{ asset($user->profile_picture) }}" alt="User Image"
                                    class="avatar mCS_img_loaded">
                            </a>
                            <div class="profile-name">
                                <a href="{{ route('profile') }}" class="name ellipsis">{{ $user->first_name }}
                                    {{ $user->last_name }}</a>
                                <small style="text-transform: capitalize">{{ $user->type }}</small>

                            </div>
                        </div>
                        <ul class="connections">
                            @php($posts = App\Models\Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->get())
                            <li><span class="count">1</span>
                                <p class="mute">Friends</p>
                            </li>
                            <li><span class="count">{{ $posts->count() }}</span>
                                <p class="mute">Posts</p>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="my-card item">
                        <h4 class="form-title">Login Now</h4>
                        <form method="POST" class="beehive-login-form panel-login" action="{{ route('login') }}"
                            name="panel-login">
                            @csrf
                            <div class="form-group">
                                <div class="user-name">
                                    <label class="screen-reader-text">Email</label>
                                    <span class="icon"></span>
                                    <input type="text" id="email" class="email-control" required
                                        name="email" value="" placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="pass">
                                    <label class="screen-reader-text">Password</label>
                                    <span class="icon"></span>
                                    <input type="password" id="password" class="password-control" required
                                        name="password" value="" placeholder="Password" />
                                </div>
                            </div>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <div class="submit">
                                <button type="submit" id="login_submit" class="submit-login" name="wp-submit">
                                    Log In
                                </button>
                            </div>
                            <div class="register-link">
                                <a href="/register" class="color-primary">Signup</a>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
            <div class="panel-block light">
                <div class="panel-menu item">
                    <ul id="menu-dashboard-menu" class="navbar-panel">
                        <li id="menu-item-74"
                            class="menu-item menu-item-type-post_type menu-item-object-buddypress current-menu-item menu-item-74">
                            <a href="{{ route('profile') }}" aria-current="page">
                                <i class="fas fa-tasks"></i> <!-- Activity icon -->
                                <span class="nav-link-text">Activity</span>
                            </a>
                        </li>
                        <li id="menu-item-80"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80">
                            <a href="{{ route('profile') }}">
                                <i class="fas fa-camera"></i> <!-- Photos icon -->
                                <span class="nav-link-text">Photos</span>
                            </a>
                        </li>
                        <li id="menu-item-82"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82">
                            <a href="{{ route('your-friends') }}">
                                <i class="fas fa-user-friends"></i> <!-- Friends icon -->
                                <span class="nav-link-text">Friends</span>
                            </a>
                        </li>
                        <li id="menu-item-83"
                            class="menu-item menu-item-type-post_type menu-item-object-buddypress menu-item-83">
                            <a href="{{ route('find-people') }}">
                                <i class="fas fa-users"></i> <!-- Find People icon -->
                                <span class="nav-link-text">Find People</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="beehive-page" class="site">

        @include('layouts.navbar')

        @yield('content')

    </div>


    <div class="modal fade login-modal" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="inner">
                        <img src="https://mythemestore.com/beehive-preview/wp-content/uploads/2020/10/avatar.png"
                            alt="Guest" class="avatar guest-avatar" />
                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Log into your account</h4>
                    <form action="https://mythemestore.com/beehive-preview/wp-login.php" method="post"
                        id="modal-login-form" class="beehive-login-form modal-login-form" name="modal-login-form">
                        <div class="form-group">
                            <div class="user-name">
                                <label class="screen-reader-text">Email/username</label>
                                <span class="icon"><i class="uil-user"></i></span>
                                <input type="text" id="modal-username" class="username-control" required
                                    name="log" value="" placeholder="Email or username" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="pass">
                                <label class="screen-reader-text">Password</label>
                                <span class="icon"><i class="uil-key-skeleton-alt"></i></span>
                                <input type="password" id="modal-password" class="password-control" required
                                    name="pwd" value="" placeholder="Password" />
                            </div>
                        </div>
                        <div class="modal-options">
                            <div class="row">
                                <div class="col-6">
                                    <div class="forgetmenot">
                                        <label for="modal-rememberme">
                                            <input id="modal-rememberme" name="rememberme" type="checkbox"
                                                value="forever" />
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password">
                                        <a href="https://mythemestore.com/beehive-preview/my-account/lost-password/">
                                            Lost Password?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="beehive-login-result"></div>
                        <div class="submit">
                            <button type="submit" id="modal_login_submit" class="submit-login" name="wp-submit">
                                Log Into Your Account
                            </button>
                        </div>
                        <input type="hidden" id="modal-login-security" name="modal-login-security"
                            value="b26eb70368" /><input type="hidden" name="_wp_http_referer"
                            value="/beehive-preview/activity/" />
                        <div class="register-link">
                            <p class="color-primary">Signup is disabled</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="icon ion-close-round"></i>
        </button>
    </div>




    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}"
            });
        </script>
    @elseif (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

    <script type="text/javascript" src="{{ asset('web/assets/js/editor.min.js') }}" id="bbpress-editor-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/underscrore.min.js') }}" id="underscore-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/backbone.min.js') }}" id="backbone-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/mediaelement.min.js') }}" id="rt-mediaelement-wp-js">
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/emojipicker.min.js') }}" id="rtmedia-emoji-picker-js">
    </script>
    <script type="text/javascript" id="rtmedia-main-js-extra">
        /* <![CDATA[ */
        var rtmedia_bp = {
            bp_template_pack: "nouveau"
        };
        var RTMedia_Main_JS = {
            media_delete_confirmation: "Are you sure you want to delete this media?",
            rtmedia_ajaxurl: "https:\/\/mythemestore.com\/beehive-preview\/wp-admin\/admin-ajax.php",
            media_delete_success: "Media file deleted successfully.",
        };
        var rtmedia_main_js_strings = {
            rtmedia_albums: "Albums",
            privacy_update_success: "Privacy updated successfully.",
            privacy_update_error: "Couldn't change privacy, please try again.",
        };
        var rtmedia_media_size_config = {
            photo: {
                thumb: {
                    width: "250",
                    height: "250",
                    crop: "1"
                },
                medium: {
                    width: "450",
                    height: "320",
                    crop: "1"
                },
                large: {
                    width: "800",
                    height: "0",
                    crop: "1"
                },
            },
            video: {
                activity_media: {
                    width: "320",
                    height: "240"
                },
                single_media: {
                    width: "640",
                    height: "480"
                },
            },
            music: {
                activity_media: {
                    width: "320"
                },
                single_media: {
                    width: "640"
                },
            },
            featured: {
                default: {
                    width: "100",
                    height: "100",
                    crop: "1"
                }
            },
        };
        var rtmedia_main = {
            rtmedia_ajax_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-admin\/admin-ajax.php",
            rtmedia_media_slug: "media",
            rtmedia_lightbox_enabled: "1",
            rtmedia_direct_upload_enabled: "0",
            rtmedia_gallery_reload_on_upload: "1",
            rtmedia_empty_activity_msg: "Please enter some content to post.",
            rtmedia_empty_comment_msg: "Empty comment is not allowed.",
            rtmedia_media_delete_confirmation: "Are you sure you want to delete this media?",
            rtmedia_media_comment_delete_confirmation: "Are you sure you want to delete this comment?",
            rtmedia_album_delete_confirmation: "Are you sure you want to delete this Album?",
            rtmedia_drop_media_msg: "Drop files here",
            rtmedia_album_created_msg: " album created successfully.",
            rtmedia_something_wrong_msg: "Something went wrong. Please try again.",
            rtmedia_empty_album_name_msg: "Enter an album name.",
            rtmedia_max_file_msg: "Max file Size Limit: ",
            rtmedia_allowed_file_formats: "Allowed File Formats",
            rtmedia_select_all_visible: "Select All Visible",
            rtmedia_unselect_all_visible: "Unselect All Visible",
            rtmedia_no_media_selected: "Please select some media.",
            rtmedia_selected_media_delete_confirmation: "Are you sure you want to delete the selected media?",
            rtmedia_selected_media_move_confirmation: "Are you sure you want to move the selected media?",
            rtmedia_waiting_msg: "Waiting",
            rtmedia_uploaded_msg: "Uploaded",
            rtmedia_uploading_msg: "Uploading",
            rtmedia_upload_failed_msg: "Failed",
            rtmedia_close: "Close",
            rtmedia_edit: "Edit",
            rtmedia_delete: "Delete",
            rtmedia_edit_media: "Edit Media",
            rtmedia_remove_from_queue: "Remove from queue",
            rtmedia_add_more_files_msg: "Add more files",
            rtmedia_file_extension_error_msg: "File not supported",
            rtmedia_more: "more",
            rtmedia_less: "less",
            rtmedia_read_more: "Read more",
            rtmedia__show_less: "Show less",
            rtmedia_activity_text_with_attachment: "disable",
            rtmedia_delete_uploaded_media: "This media is uploaded. Are you sure you want to delete this media?",
            rtm_wp_version: "6.6.2",
            rtmedia_masonry_layout: "false",
            rtmedia_disable_media_in_commented_media: "1",
            rtmedia_disable_media_in_commented_media_text: "Adding media in Comments is not allowed",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/rtmedia.min.js') }}" id="rtmedia-main-js"></script>
    <script type="text/javascript" id="rtmedia-backbone-js-extra">
        /* <![CDATA[ */
        var rtmedia_template = {
            template_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-admin\/admin-ajax.php?action=rtmedia_get_template&template=media-gallery-item",
        };
        var rtMedia_plupload = {
            rtMedia_plupload_config: {
                url: "\/beehive-preview\/activity\/upload\/",
                runtimes: "html5,flash,html4",
                browse_button: "rtMedia-upload-button",
                container: "rtmedia-upload-container",
                drop_element: "drag-drop-area",
                filters: [{
                    title: "Media Files",
                    extensions: "jpg,jpeg,png,gif,mp4,mov,m4v,m2v,avi,mpg,flv,wmv,mkv,webm,ogv,mxf,asf,vob,mts,qt,mpeg,x-msvideo,3gp,mp3,wma,ogg,wav,m4a",
                }, ],
                max_file_size: "1536M",
                multipart: true,
                urlstream_upload: true,
                flash_swf_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-includes\/js\/plupload\/plupload.flash.swf",
                silverlight_xap_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-includes\/js\/plupload\/plupload.silverlight.xap",
                file_data_name: "rtmedia_file",
                multi_selection: true,
                multipart_params: {
                    redirect: "no",
                    redirection: "false",
                    action: "wp_handle_upload",
                    _wp_http_referer: "\/beehive-preview\/activity\/",
                    mode: "file_upload",
                    rtmedia_upload_nonce: "2c4e38bca1",
                },
                max_file_size_msg: "1536M",
            },
        };
        var rtmedia_media_thumbs = {
            photo: "https:\/\/mythemestore.com\/beehive-preview\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/image_thumb.png",
            video: "https:\/\/mythemestore.com\/beehive-preview\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/video_thumb.png",
            music: "https:\/\/mythemestore.com\/beehive-preview\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/audio_thumb.png",
        };
        var rtmedia_edit_media_info_upload = {
            title: "Title:",
            description: "Description:",
        };
        var rtmedia_bp = {
            bp_template_pack: "nouveau"
        };
        var rtmedia_backbone_strings = {
            rtm_edit_file_name: "Edit File Name"
        };
        var rtmedia_exteansions = {
            photo: ["jpg", "jpeg", "png", "gif"],
            video: [
                "mp4",
                "mov",
                "m4v",
                "m2v",
                "avi",
                "mpg",
                "flv",
                "wmv",
                "mkv",
                "webm",
                "ogv",
                "mxf",
                "asf",
                "vob",
                "mts",
                "qt",
                "mpeg",
                "x-msvideo",
                "3gp",
            ],
            music: ["mp3", "wma", "ogg", "wav", "m4a"],
        };
        var rtMedia_update_plupload_comment = {
            url: "\/beehive-preview\/activity\/upload\/",
            runtimes: "html5,flash,html4",
            browse_button: "rtmedia-comment-media-upload",
            container: "rtmedia-comment-media-upload-container",
            filters: [{
                title: "Media Files",
                extensions: "jpg,jpeg,png,gif,mp4,mov,m4v,m2v,avi,mpg,flv,wmv,mkv,webm,ogv,mxf,asf,vob,mts,qt,mpeg,x-msvideo,3gp,mp3,wma,ogg,wav,m4a",
            }, ],
            max_file_size: "1536M",
            multipart: "1",
            urlstream_upload: "1",
            flash_swf_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-includes\/js\/plupload\/plupload.flash.swf",
            silverlight_xap_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-includes\/js\/plupload\/plupload.silverlight.xap",
            file_data_name: "rtmedia_file",
            multi_selection: "",
            multipart_params: {
                redirect: "no",
                redirection: "false",
                action: "wp_handle_upload",
                _wp_http_referer: "\/beehive-preview\/activity\/",
                mode: "file_upload",
                rtmedia_upload_nonce: "2c4e38bca1",
            },
            max_file_size_msg: "1536M",
        };
        var rtmedia_backbone = {
            rMedia_loading_media: "https:\/\/mythemestore.com\/beehive-preview\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/boxspinner.gif",
            rtmedia_set_featured_image_msg: "Featured media set successfully.",
            rtmedia_unset_featured_image_msg: "Featured media removed successfully.",
            rtmedia_no_media_found: "Oops !! There's no media found for the request !!",
            rtmedia_load_more_or_pagination: "load_more",
            rtmedia_bp_enable_activity: "1",
            rtmedia_upload_progress_error_message: "There are some uploads in progress. Do you want to cancel them?",
            rtmedia_media_disabled_error_message: "Media upload is disabled. Please Enable at least one media type to proceed.",
            rMedia_loading_file: "https:\/\/mythemestore.com\/beehive-preview\/wp-admin\/images\/loading.gif",
        };
        var rtMedia_activity = {
            is_album: "",
            is_edit_allowed: ""
        };
        var rtMedia_update_plupload_config = {
            url: "\/beehive-preview\/activity\/upload\/",
            runtimes: "html5,flash,html4",
            browse_button: "rtmedia-add-media-button-post-update",
            container: "rtmedia-whts-new-upload-container",
            drop_element: "whats-new-textarea",
            filters: [{
                title: "Media Files",
                extensions: "jpg,jpeg,png,gif,mp4,mov,m4v,m2v,avi,mpg,flv,wmv,mkv,webm,ogv,mxf,asf,vob,mts,qt,mpeg,x-msvideo,3gp,mp3,wma,ogg,wav,m4a",
            }, ],
            max_file_size: "1536M",
            multipart: "1",
            urlstream_upload: "1",
            flash_swf_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-includes\/js\/plupload\/plupload.flash.swf",
            silverlight_xap_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-includes\/js\/plupload\/plupload.silverlight.xap",
            file_data_name: "rtmedia_file",
            multi_selection: "1",
            multipart_params: {
                redirect: "no",
                redirection: "false",
                rtmedia_update: "true",
                action: "wp_handle_upload",
                _wp_http_referer: "\/beehive-preview\/activity\/",
                mode: "file_upload",
                rtmedia_upload_nonce: "2c4e38bca1",
            },
            max_file_size_msg: "1536M",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/rtMedia.backbone.js') }}" id="rtmedia-backbone-js">
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/moment.min.js') }}" id="moment-js"></script>
    <script type="text/javascript" id="moment-js-after">
        /* <![CDATA[ */
        moment.updateLocale("en_US", {
            months: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ],
            monthsShort: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            weekdays: [
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
            ],
            weekdaysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            week: {
                dow: 1
            },
            longDateFormat: {
                LT: "g:i a",
                LTS: null,
                L: null,
                LL: "d M, Y",
                LLL: "F j, Y g:i a",
                LLLL: null,
            },
        });
        moment.updateLocale("en_US", {
            relativeTime: {
                future: "in %s",
                past: "%s ago",
                s: "a few seconds",
                m: "a minute",
                mm: "%d minutes",
                h: "an hour",
                hh: "%d hours",
                d: "a day",
                dd: "%d days",
                M: "a month",
                MM: "%d months",
                y: "a year",
                yy: "%d years",
            },
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/livestamp.min.js') }}" id="bp-livestamp-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/hooks.min.js') }}" id="wp-hooks-js"></script>
    <script type="text/javascript" id="heartbeat-js-extra">
        /* <![CDATA[ */
        var heartbeatSettings = {
            ajaxurl: "\/beehive-preview\/wp-admin\/admin-ajax.php",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/heartbeat.min.js') }}" id="heartbeat-js"></script>
    <script type="text/javascript" id="bp-nouveau-js-extra">
        /* <![CDATA[ */
        var BP_Nouveau = {
            ajaxurl: "https:\/\/mythemestore.com\/beehive-preview\/wp-admin\/admin-ajax.php",
            confirm: "Are you sure?",
            show_x_comments: "Show all %d comments",
            unsaved_changes: "Your profile has unsaved changes. If you leave the page, the changes will be lost.",
            object_nav_parent: "#buddypress",
            objects: [
                "activity",
                "members",
                "groups",
                "xprofile",
                "friends",
                "messages",
                "settings",
                "notifications",
                "group_members",
                "group_requests",
            ],
            nonces: {
                activity: "6c6c9791bc",
                members: "43a7f7ef43",
                groups: "6735d3252b",
                xprofile: "4fdc46e8f4",
                friends: "2a47527b3c",
                messages: "031f29cc27",
                settings: "6f9a1a11a2",
                notifications: "ed5ef9149b",
            },
            newest: "Load Newest",
            pulse: "15",
            activity: {
                params: {
                    user_id: 0,
                    object: "user",
                    backcompat: {
                        before_post_form: false,
                        post_form_options: false
                    },
                    post_nonce: "8b6aa75ab2",
                    avatar_url: false,
                    avatar_width: 50,
                    avatar_height: 50,
                    user_domain: "",
                    avatar_alt: "Profile photo of ",
                    objects: {
                        profile: {
                            text: "Post in: Profile",
                            autocomplete_placeholder: "",
                            priority: 5,
                        },
                        group: {
                            text: "Post in: Group",
                            autocomplete_placeholder: "Start typing the group name...",
                            priority: 10,
                        },
                    },
                },
                strings: {
                    whatsnewPlaceholder: "What's new, ?",
                    whatsnewLabel: "Post what's new",
                    whatsnewpostinLabel: "Post in",
                    postUpdateButton: "Post Update",
                    cancelButton: "Cancel",
                },
            },
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/buddypress-nouveau.min.js') }}" id="bp-nouveau-js">
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/buddypress-activity.min.js') }}"
        id="bp-nouveau-activity-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/jquery.caret.min.js') }}" id="jquery-caret-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/jquery.atwho.min.js') }}" id="jquery-atwho-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/mentions.min.js') }}" id="bp-mentions-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            apiSettings: {
                root: "https:\/\/mythemestore.com\/beehive-preview\/wp-json\/contact-form-7\/v1",
                namespace: "contact-form-7\/v1",
            },
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/script.js') }}" id="contact-form-7-js"></script>
    <script type="text/javascript" id="buddy-bridge-js-extra">
        /* <![CDATA[ */
        var Buddy_Bridge_Data = {
            ajaxUrl: "https:\/\/mythemestore.com\/beehive-preview\/wp-admin\/admin-ajax.php",
            errorTxt: "Something weng wrong! Please try again later.",
            addActivityNonce: "efa2c088d7",
            viewActivityNonce: "b487793178",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/buddy-bridge-public.js') }}" id="buddy-bridge-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/buddy-bridge-widgets.js') }}" id="buddy-bridge-widgets-js">
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/buddy-bridge-activity-share.js') }}"
        id="buddy-bridge-activity-share-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/buddy-bridge-activity-reaction.js') }}"
        id="buddy-bridge-activity-reaction-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/buddy-chat-public.js') }}" id="buddy-chat-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/popper.min.js') }}" id="popper-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/bootstrap.min.js') }}" id="bootstrap-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/mscrollbar.min.js') }}" id="mscrollbar-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/wow.min.js') }}" id="wow-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/hiraku.min.js') }}" id="hiraku-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/shorten.min.js') }}" id="shorten-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/jquery.fitvids.min.js') }}" id="fitvids-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/flexmenu.min.js') }}" id="flexmenu-js"></script>
    <script type="text/javascript" id="beehive-bp-js-extra">
        /* <![CDATA[ */
        var beehive_data = {
            ajaxurl: "https:\/\/mythemestore.com\/beehive-preview\/wp-admin\/admin-ajax.php",
            beehive_search_nonce: "8c670a19aa",
            avatar: "<img alt='' src='https:\/\/secure.gravatar.com\/avatar\/?s=24&d=mm&r=g' srcset='https:\/\/secure.gravatar.com\/avatar\/?s=48&d=mm&r=g 2x' class='avatar avatar-24 photo avatar-default' height='24' width='24' decoding='async'\/>",
            mobile_logo_url: null,
            fire_login_modal: "",
            user_nav: "1",
            stick_offset: "90",
            more_text: "More",
            read_more: "Read more",
            read_close: "Close",
            like_msg: "Like this",
            unlike_msg: "Unlike this",
            attachment_text: "Attach media",
            error_txt: "Something went wrong!",
            activity_max: "3000",
            bp_is_active: "1",
            icon_logo_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-content\/themes\/beehive\/assets\/images\/logo-icon.svg",
            rtm_is_masonry: "",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/beehive-bp.min.js') }}" id="beehive-bp-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/swiper.min.js') }}" id="swiper-js"></script>
    <script type="text/javascript" id="beehive-bp-activity-view-js-extra">
        /* <![CDATA[ */
        var beehive_data = {
            ajaxurl: "https:\/\/mythemestore.com\/beehive-preview\/wp-admin\/admin-ajax.php",
            beehive_search_nonce: "8c670a19aa",
            avatar: "<img alt='' src='https:\/\/secure.gravatar.com\/avatar\/?s=24&d=mm&r=g' srcset='https:\/\/secure.gravatar.com\/avatar\/?s=48&d=mm&r=g 2x' class='avatar avatar-24 photo avatar-default' height='24' width='24' decoding='async'\/>",
            mobile_logo_url: null,
            fire_login_modal: "",
            user_nav: "1",
            stick_offset: "90",
            more_text: "More",
            read_more: "Read more",
            read_close: "Close",
            like_msg: "Like this",
            unlike_msg: "Unlike this",
            attachment_text: "Attach media",
            error_txt: "Something went wrong!",
            activity_max: "3000",
            bp_is_active: "1",
            icon_logo_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-content\/themes\/beehive\/assets\/images\/logo-icon.svg",
            rtm_is_masonry: "",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/beehive-bp-activity-view.min.js') }}"
        id="beehive-bp-activity-view-js"></script>
    <script type="text/javascript" id="beehive-login-js-extra">
        /* <![CDATA[ */
        var beehive_data = {
            ajaxurl: "https:\/\/mythemestore.com\/beehive-preview\/wp-admin\/admin-ajax.php",
            beehive_search_nonce: "8c670a19aa",
            avatar: "<img alt='' src='https:\/\/secure.gravatar.com\/avatar\/?s=24&d=mm&r=g' srcset='https:\/\/secure.gravatar.com\/avatar\/?s=48&d=mm&r=g 2x' class='avatar avatar-24 photo avatar-default' height='24' width='24' decoding='async'\/>",
            mobile_logo_url: null,
            fire_login_modal: "",
            user_nav: "1",
            stick_offset: "90",
            more_text: "More",
            read_more: "Read more",
            read_close: "Close",
            like_msg: "Like this",
            unlike_msg: "Unlike this",
            attachment_text: "Attach media",
            error_txt: "Something went wrong!",
            activity_max: "3000",
            bp_is_active: "1",
            icon_logo_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-content\/themes\/beehive\/assets\/images\/logo-icon.svg",
            rtm_is_masonry: "",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/beehive-login.min.js') }}" id="beehive-login-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/sticky-kit.min.js') }}" id="sticky-kit-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/imagesloaded.min.js') }}" id="imagesloaded-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/masonry.min.js') }}" id="masonry-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/comment-reply.min.js') }}V" id="comment-reply-js"
        async="async" data-wp-strategy="async"></script>
    <script type="text/javascript" id="beehive-js-extra">
        /* <![CDATA[ */
        var beehive_data = {
            ajaxurl: "https:\/\/mythemestore.com\/beehive-preview\/wp-admin\/admin-ajax.php",
            beehive_search_nonce: "8c670a19aa",
            avatar: "<img alt='' src='https:\/\/secure.gravatar.com\/avatar\/?s=24&d=mm&r=g' srcset='https:\/\/secure.gravatar.com\/avatar\/?s=48&d=mm&r=g 2x' class='avatar avatar-24 photo avatar-default' height='24' width='24' decoding='async'\/>",
            mobile_logo_url: null,
            fire_login_modal: "",
            user_nav: "1",
            stick_offset: "90",
            more_text: "More",
            read_more: "Read more",
            read_close: "Close",
            like_msg: "Like this",
            unlike_msg: "Unlike this",
            attachment_text: "Attach media",
            error_txt: "Something went wrong!",
            activity_max: "3000",
            bp_is_active: "1",
            icon_logo_url: "https:\/\/mythemestore.com\/beehive-preview\/wp-content\/themes\/beehive\/assets\/images\/logo-icon.svg",
            rtm_is_masonry: "",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/beehive.min.js') }}" id="beehive-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/sourcebuster.min.js') }}" id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            params: {
                lifetime: 1.0e-5,
                session: 30,
                base64: false,
                ajaxurl: "https:\/\/mythemestore.com\/beehive-preview\/wp-admin\/admin-ajax.php",
                prefix: "wc_order_attribution_",
                allowTracking: true,
            },
            fields: {
                source_type: "current.typ",
                referrer: "current_add.rf",
                utm_campaign: "current.cmp",
                utm_source: "current.src",
                utm_medium: "current.mdm",
                utm_content: "current.cnt",
                utm_id: "current.id",
                utm_term: "current.trm",
                utm_source_platform: "current.plt",
                utm_creative_format: "current.fmt",
                utm_marketing_tactic: "current.tct",
                session_entry: "current_add.ep",
                session_start_time: "current_add.fd",
                session_pages: "session.pgs",
                session_count: "udata.vst",
                user_agent: "udata.uag",
            },
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://mythemestore.com/beehive-preview/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.2.3"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript"
        src="https://mythemestore.com/beehive-preview/wp-content/plugins/buddypress-media/lib/media-element/mediaelement-and-player.min.js?ver=4.6.20"
        id="rt-mediaelement-js"></script>
    <script type="text/javascript"
        src="https://mythemestore.com/beehive-preview/wp-content/plugins/buddypress-media/lib/touchswipe/jquery.touchSwipe.min.js?ver=4.6.20"
        id="rtmedia-touchswipe-js"></script>
    <script type="text/javascript"
        src="https://mythemestore.com/beehive-preview/wp-content/plugins/buddypress-media/app/assets/js/rtMedia.activity.js?ver=4.6.20"
        id="rtmedia-activity-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/order-attribution.min.js') }}"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/media-element/mediaelement-and-player.min.js') }}"
        id="rt-mediaelement-js"></script>
    <script type="text/javascript" src="{{ asset('web/assets/js/jquery.touchSwipe.min.js') }}" id="rtmedia-touchswipe-js">
    </script>
    <script type="text/javascript" src="{{ asset('web/assets/js/rtMedia.activity.js') }}" id="rtmedia-activity-js">
    </script>




</body>

</html>
