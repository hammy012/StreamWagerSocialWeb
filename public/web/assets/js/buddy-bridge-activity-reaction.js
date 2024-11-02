"use strict";
!(function (t) {
  function a(t) {
    var a = t.match(/\d+/);
    return a ? parseInt(a[0], 10) : null;
  }
  t('#buddypress [data-bp-list="activity"]').on(
    "click",
    ".activity-item",
    function (e) {
      let i = t(e.target);
      if (
        (t(i).is(".react-to-activity > span") &&
          (i = t(i).closest(".react-to-activity")),
        i.attr("data-reaction-type")
          ? i.attr("data-reaction-type", "")
          : i.attr("data-reaction-type", "like"),
        t(i).is(".pick-reaction span.like") &&
          ((i = t(i).closest(".pick-reaction").prev(".react-to-activity")),
          i.attr("data-reaction-type", "like")),
        t(i).is(".pick-reaction span.love") &&
          ((i = t(i).closest(".pick-reaction").prev(".react-to-activity")),
          i.attr("data-reaction-type", "love")),
        t(i).is(".pick-reaction span.care") &&
          ((i = t(i).closest(".pick-reaction").prev(".react-to-activity")),
          i.attr("data-reaction-type", "care")),
        t(i).is(".pick-reaction span.haha") &&
          ((i = t(i).closest(".pick-reaction").prev(".react-to-activity")),
          i.attr("data-reaction-type", "haha")),
        t(i).is(".pick-reaction span.wow") &&
          ((i = t(i).closest(".pick-reaction").prev(".react-to-activity")),
          i.attr("data-reaction-type", "wow")),
        t(i).is(".pick-reaction span.sad") &&
          ((i = t(i).closest(".pick-reaction").prev(".react-to-activity")),
          i.attr("data-reaction-type", "sad")),
        t(i).is(".pick-reaction span.angry") &&
          ((i = t(i).closest(".pick-reaction").prev(".react-to-activity")),
          i.attr("data-reaction-type", "angry")),
        i.hasClass("react-to-activity"))
      ) {
        e.preventDefault();
        const c = a(i.closest(".activity-item").attr("id")),
          r = i.attr("data-reaction-type"),
          o = t(e.target).closest(".activity-item").find(".who-reacted"),
          s = i.closest(".activity-meta.action");
        if (!c) return;
        t.ajax({
          type: "POST",
          dataType: "json",
          url: Buddy_Bridge_Data.ajaxUrl,
          data: {
            action: "update_activity_reaction",
            id: c,
            type: r,
            security: Buddy_Bridge_Data.addActivityNonce,
          },
          success: function (t) {
            1 == t.success &&
              (o.length ? o.replaceWith(t.html) : s.before(t.html));
          },
          error: function () {
            alert(Buddy_Bridge_Data.errorTxt);
          },
        });
      }
    }
  ),
    t('#buddypress [data-bp-list="activity"]').on(
      "click",
      ".activity-item",
      function (e) {
        let i = t(e.target);
        if (
          ((t(i).is(".top-reactions") || t(i).is(".top-reactions span")) &&
            (i = t(i).closest(".who-reacted")),
          i.hasClass("who-reacted"))
        ) {
          t("body").append('<div class="activity-reactions-viewer"></div>');
          const e = t(".activity-reactions-viewer"),
            c = a(i.closest(".activity-item").attr("id"));
          if (!e.length || !c) return;
          const r = t.ajax({
            type: "POST",
            dataType: "json",
            url: Buddy_Bridge_Data.ajaxUrl,
            data: {
              action: "view_activity_reaction",
              id: c,
              security: Buddy_Bridge_Data.viewActivityNonce,
            },
            beforeSend: function () {
              e.addClass("loading"), e.length || r.abort();
            },
            success: function (t) {
              e.append(t);
            },
            error: function () {
              alert(Buddy_Bridge_Data.errorTxt);
            },
            complete: function () {
              e.removeClass("loading");
            },
          });
        }
      }
    ),
    t("body").on("click", ".activity-reactions-viewer", function (a) {
      let e = t(a.target);
      if (t(e).is(".activity-reactions-viewer")) return void e.remove();
      if (t(e).is("span.close"))
        return void e.closest(".activity-reactions-viewer").remove();
      t(e).is("span.reaction") && (e = t(e).closest(".item"));
      const i = e.attr("data-tab");
      e.addClass("active").siblings().removeClass("active"),
        e
          .closest(".reaction-tabs")
          .next(".reaction-tab-contents")
          .find("#" + i)
          .addClass("active")
          .siblings()
          .removeClass("active");
    });
})(jQuery);
