"use strict";
!(function (t) {
  t('#buddypress [data-bp-list="activity"]').on(
    "click",
    ".activity-item",
    function (e) {
      let a = t(e.target);
      t(a).is("span") && (a = t(a).closest("a")),
        a.hasClass("share-activity") &&
          (e.preventDefault(), a.next(".share-activity-options").toggle());
    }
  ),
    t(document).on("click", function (e) {
      let a = e.target;
      t(a).is(".share-activity > span") &&
        (a = t(a).closest(".share-activity")),
        t(a).closest(".share-activity-options").length ||
          t(a).is(".share-activity") ||
          t(".share-activity-options").hide();
    }),
    t('#buddypress [data-bp-list="activity"]').on(
      "click",
      ".activity-item",
      function (e) {
        let a = t(e.target);
        if (a.hasClass("share-on-activity")) {
          e.preventDefault();
          const i = a.data("share-id"),
            s = a
              .closest(".share-activity-options")
              .siblings(".share-activity");
          t.ajax({
            type: "POST",
            datatype: "json",
            url: Buddy_Bridge_Data.ajaxUrl,
            data: { action: "add_shared_activity", id: i },
            beforeSend: function () {
              s.prepend('<span class="bb-loading-ring"></span>');
            },
            success: function (t) {
              t.shared
                ? (s.prepend('<span class="uil-check color-primary"></span>'),
                  s.children(".bp-screen-reader-text").text(t.message),
                  a.remove())
                : alert(t.message);
            },
            error: function () {
              alert(Buddy_Bridge_Data.errorTxt);
            },
            complete: function () {
              s.children(".bb-loading-ring").remove();
            },
          });
        }
      }
    );
})(jQuery);
