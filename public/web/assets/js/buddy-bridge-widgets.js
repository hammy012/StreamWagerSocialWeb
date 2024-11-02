function member_widget_click_handler() {
  jQuery(".widget div#buddy-bridge-members-list-options a").on(
    "click",
    function () {
      var e = this;
      return (
        jQuery(e).addClass("loading"),
        jQuery(".widget div#buddy-bridge-members-list-options a").removeClass(
          "selected"
        ),
        jQuery(this).addClass("selected"),
        jQuery.post(
          ajaxurl,
          {
            action: "members_widget",
            cookie: encodeURIComponent(document.cookie),
            _wpnonce: jQuery("input#_wpnonce-members").val(),
            "max-members": jQuery("input#members_widget_max").val(),
            filter: jQuery(this).attr("id"),
          },
          function (i) {
            jQuery(e).removeClass("loading"), member_widget_response(i);
          }
        ),
        !1
      );
    }
  );
}
function member_widget_response(e) {
  "-1" !== (e = (e = e.substr(0, e.length - 1)).split("[[SPLIT]]"))[0]
    ? jQuery(".widget ul#buddy-bridge-members-list").fadeOut(200, function () {
        jQuery(".widget ul#buddy-bridge-members-list").html(e[1]),
          jQuery(".widget ul#buddy-bridge-members-list").fadeIn(200);
      })
    : jQuery(".widget ul#buddy-bridge-members-list").fadeOut(200, function () {
        var i = "<p>" + e[1] + "</p>";
        jQuery(".widget ul#buddy-bridge-members-list").html(i),
          jQuery(".widget ul#buddy-bridge-members-list").fadeIn(200);
      });
}
function groups_widget_click_handler() {
  jQuery(".widget div#buddy-bridge-groups-list-options a").on(
    "click",
    function () {
      var e = this;
      return (
        jQuery(e).addClass("loading"),
        jQuery(".widget div#buddy-bridge-groups-list-options a").removeClass(
          "selected"
        ),
        jQuery(this).addClass("selected"),
        jQuery.post(
          ajaxurl,
          {
            action: "groups_widget",
            cookie: encodeURIComponent(document.cookie),
            _wpnonce: jQuery("input#_wpnonce-groups").val(),
            max_groups: jQuery("input#groups_widget_max").val(),
            filter: jQuery(this).attr("id"),
          },
          function (i) {
            jQuery(e).removeClass("loading"), groups_widget_response(i);
          }
        ),
        !1
      );
    }
  );
}
function groups_widget_response(e) {
  "-1" !== (e = (e = e.substr(0, e.length - 1)).split("[[SPLIT]]"))[0]
    ? jQuery(".widget ul#buddy-bridge-groups-list").fadeOut(200, function () {
        jQuery(".widget ul#buddy-bridge-groups-list").html(e[1]),
          jQuery(".widget ul#buddy-bridge-groups-list").fadeIn(200);
      })
    : jQuery(".widget ul#buddy-bridge-groups-list").fadeOut(200, function () {
        var i = "<p>" + e[1] + "</p>";
        jQuery(".widget ul#buddy-bridge-groups-list").html(i),
          jQuery(".widget ul#buddy-bridge-groups-list").fadeIn(200);
      });
}
jQuery(function () {
  member_widget_click_handler(),
    groups_widget_click_handler(),
    "undefined" != typeof wp &&
      wp.customize &&
      wp.customize.selectiveRefresh &&
      wp.customize.selectiveRefresh.bind(
        "partial-content-rendered",
        function () {
          member_widget_click_handler(), groups_widget_click_handler();
        }
      );
});
