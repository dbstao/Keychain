// jQuery(document).ready(function($) {
//     // 判断是否是根域名且没有菜单
//     if (window.location.pathname === '/' && $('#adminmenu')) {
//         // $('#wpadminbar').hide();
//     }
// });

//
document.addEventListener("DOMContentLoaded", function () {
  // (编号：001)
  if (
    parseInt(window.getComputedStyle(document.documentElement).marginTop) > 0
  ) {
    const styleSheet = document.createElement("style");
    styleSheet.innerText = "html { margin-top: 0 !important; }";
    document.head.appendChild(styleSheet);
  }

  // (编号：002) 给菜单添加预获取
  var selectors = ["nav a", ".menu a", ".nav-menu a", ".menu-item a"];
  selectors.forEach(function (selector) {
    var links = document.querySelectorAll(selector);
    links.forEach(function (link) {
      link.setAttribute("rel", "prefetch");
    });
  });
});
