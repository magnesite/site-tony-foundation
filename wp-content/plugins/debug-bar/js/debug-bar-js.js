! function() {
  var e, i, t, r = 0,
    n = [];
  window.onerror = function(e, i, r) {
    document.getElementById("debug-bar-js-error-count") ? t(e, i, r) : n[n.length] = [e, i, r]
  }, jQuery(function() {
    for (err in n) t(n[err][0], n[err][1], n[err][2])
  }), t = function(t, n, a) {
    var s, o, u, d;
    if (r++, e || (e = document.getElementById("debug-bar-js-error-count")), i || (i = document.getElementById("debug-bar-js-errors")), e && i) {
      if (1 == r) {
        if (u = document.getElementById("wp-admin-bar-debug-bar"), !u) return; - 1 === u.className.indexOf("debug-bar-php-warning-summary") && (u.className = u.className + " debug-bar-php-warning-summary"), ["debug-menu-link-Debug_Bar_JS", "wp-admin-bar-debug-bar-Debug_Bar_JS"].map(function(e) {
          d = document.getElementById(e), d && (d.style.display = "block")
        })
      }
      e.textContent = r, s = document.createElement("li"), s.className = "debug-bar-js-error", s.textContent = t, o = document.createElement("span"), o.textContent = n + " line " + a, s.appendChild(o), i.appendChild(s)
    }
  }
}();
