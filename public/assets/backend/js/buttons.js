!function () {
    "use strict";
    var d, l, s, e, t, o, p = window.document, n = p.location, h = window.encodeURIComponent,
        c = window.decodeURIComponent, r = window.Math, u = function (e) {
            return p.createElement(e)
        };
    l = "github-button", d = (/^http:/.test(n) ? "http" : "https") + "://buttons.github.io", s = "/buttons.html", e = function (e) {
        d = e
    }, t = "currentScript", o = !{}.hasOwnProperty.call(p, t) && p[t] && delete p[t] && p[t] ? p[t].src : void 0;
    var f, g, a;
    f = function (e, t, o) {
        e.addEventListener ? e.addEventListener("" + t, o) : e.attachEvent("on" + t, o)
    }, g = function (t, o, n) {
        var r;
        f(t, o, r = function (e) {
            return t.removeEventListener ? t.removeEventListener("" + o, r) : t.detachEvent("on" + o, r), n(e)
        })
    }, a = function (e) {
        var t, o;
        /m/.test(p.readyState) || !/g/.test(p.readyState) && !p.documentElement.doScroll ? setTimeout(e) : p.addEventListener ? (o = 0, g(p, "DOMContentLoaded", t = function () {
            !o && (o = 1) && e()
        }), g(window, "load", t)) : (t = function () {
            /m/.test(p.readyState) && (p.detachEvent("onreadystatechange", t), e())
        }, p.attachEvent("onreadystatechange", t))
    };
    var m, w, b, v, x, i, C, y, F, k,
        z = "body{margin:0}a{color:#24292e;text-decoration:none;outline:0}.widget{display:inline-block;overflow:hidden;font-family:-apple-system, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";font-size:0;white-space:nowrap;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.btn,.social-count{display:inline-block;font-weight:600;vertical-align:bottom;cursor:pointer;border:1px solid #d1d2d3;border-radius:0.25em}.btn:focus,.social-count:focus{border-color:#c8e1ff}.btn{background-color:#eff3f6;background-image:-webkit-linear-gradient(top, #fafbfc, #e4ebf0);background-image:-moz-linear-gradient(top, #fafbfc, #e4ebf0);background-image:linear-gradient(to bottom, #fafbfc, #e4ebf0);background-repeat:repeat-x;background-size:110% 110%;-ms-filter:\"progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFAFBFC', endColorstr='#FFE4EBF0')\";*filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFAFBFC', endColorstr='#FFE4EBF0')}.btn:active{background-color:#e9ecef;background-image:none;border-color:#afb1b2;box-shadow:inset 0 0.15em 0.3em rgba(27,31,35,0.15)}.btn:hover{background-color:#e6ebf1;background-image:-webkit-linear-gradient(top, #f0f3f6, #dce3ec);background-image:-moz-linear-gradient(top, #f0f3f6, #dce3ec);background-image:linear-gradient(to bottom, #f0f3f6, #dce3ec);border-color:#afb1b2;-ms-filter:\"progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFF0F3F6', endColorstr='#FFDCE3EC')\";*filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFF0F3F6', endColorstr='#FFDCE3EC')}.social-count{position:relative;background-color:#fff}.social-count:hover{color:#0366d6}.octicon{position:relative;display:inline-block;vertical-align:top;fill:currentColor}.btn,.social-count{height:18px;padding:0 5px;line-height:18px}.btn{font-size:11px}.social-count{margin-left:5px;font-size:10px}.octicon{height:14px;top:2px}.large .btn,.large .social-count{height:26px;line-height:26px}.large .btn{padding:0 10px;font-size:12px}.large .social-count{padding:0 7px;margin-left:7px;font-size:11px}.large .octicon{height:18px;top:4px}.social-count b,.social-count i{position:absolute;top:50%;left:0;display:block;width:0;height:0;margin:-4px 0 0 -4px;_font-size:0;_line-height:0;border:solid transparent;border-width:4px 4px 4px 0}.social-count b{border-right-color:#d1d2d3}.social-count:focus b{border-right-color:#c8e1ff}.social-count i{margin-left:-3px;border-right-color:#fff}.social-count b,.social-count i{_border-top-color:red !important;_border-bottom-color:red !important;_border-left-color:red !important;_filter:chroma(color=red)}.large .social-count b,.large .social-count i{margin:-5px 0 0 -5px;border-width:5px 5px 5px 0}.large .social-count i{margin-left:-4px}\n",
        E = {
            "mark-github": {
                width: 16,
                height: 16,
                path: '<path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>'
            },
            eye: {
                width: 16,
                height: 16,
                path: '<path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/>'
            },
            star: {
                width: 14,
                height: 16,
                path: '<path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74L14 6z"/>'
            },
            "repo-forked": {
                width: 10,
                height: 16,
                path: '<path fill-rule="evenodd" d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/>'
            },
            "issue-opened": {
                width: 14,
                height: 16,
                path: '<path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"/>'
            },
            "cloud-download": {
                width: 16,
                height: 16,
                path: '<path fill-rule="evenodd" d="M9 12h2l-3 3-3-3h2V7h2v5zm3-8c0-.44-.91-3-4.5-3C5.08 1 3 2.92 3 5 1.02 5 0 6.52 0 8c0 1.53 1 3 3 3h3V9.7H3C1.38 9.7 1.3 8.28 1.3 8c0-.17.05-1.7 1.7-1.7h1.3V5c0-1.39 1.56-2.7 3.2-2.7 2.55 0 3.13 1.55 3.2 1.8v1.2H12c.81 0 2.7.22 2.7 2.2 0 2.09-2.25 2.2-2.7 2.2h-2V11h2c2.08 0 4-1.16 4-3.5C16 5.06 14.08 4 12 4z"/>'
            }
        };
    m = function (e, t) {
        return e = ("" + e).toLowerCase().replace(/^octicon-/, ""), E.hasOwnProperty(e) || (e = "mark-github"), '<svg version="1.1" width="' + t * E[e].width / E[e].height + '" height="' + t + '" viewBox="0 0 ' + E[e].width + " " + E[e].height + '" class="octicon octicon-' + e + '" aria-hidden="true">' + E[e].path + "</svg>"
    }, b = {}, w = function (e, t) {
        var o, n, r, a, i, l, c, d;
        1 < (l = b[e] || (b[e] = [])).push(t) || (a = 0, n = function () {
            if (!a && (a = 1)) for (delete b[e]; t = l.shift();) t.apply(null, arguments)
        }, (o = window.XMLHttpRequest) && "withCredentials" in o.prototype ? (d = new o, f(d, "abort", n), f(d, "error", n), f(d, "load", function () {
            n(200 !== d.status, function () {
                try {
                    return JSON.parse(d.responseText)
                } catch (e) {
                }
            }())
        }), d.open("GET", e), d.send()) : ((r = this || window)._ = function (e) {
            r._ = null, n(200 !== e.meta.status, e.data)
        }, (c = r.document.createElement("script")).async = !0, c.src = e + (/\?/.test(e) ? "&" : "?") + "callback=_", f(c, "error", i = function () {
            r._ && r._({meta: {}})
        }), c.readyState && f(c, "readystatechange", function () {
            "loaded" === c.readyState && i()
        }), r.document.getElementsByTagName("head")[0].appendChild(c)))
    }, v = function (e, t, o) {
        var r, a, n, i, l, c, d, s, p, h, u, f, g, b;
        t && (n = this, c = e.ownerDocument, l = function (e) {
            return c.createTextNode(e)
        }, (d = (i = function (e) {
            return c.createElement(e)
        })("style")).type = "text/css", e.appendChild(d), d.styleSheet ? d.styleSheet.cssText = z : d.appendChild(l(z)), (s = e.appendChild(i("div"))).className = "widget" + (/^large$/i.test(t["data-size"]) ? " large" : ""), a = function () {
            o && o(s)
        }, (p = i("a")).href = t.href, p.target = "_blank", /\.github\.com$/.test("." + p.hostname) ? /^https?:\/\/((gist\.)?github\.com\/[^\/?#]+\/[^\/?#]+\/archive\/|github\.com\/[^\/?#]+\/[^\/?#]+\/releases\/download\/|codeload\.github\.com\/)/.test(p.href) && (p.target = "_top") : (p.href = "#", p.target = "_self"), p.className = "btn", (h = t["aria-label"]) && p.setAttribute("aria-label", h), p.innerHTML = m(t["data-icon"], /^large$/i.test(t["data-size"]) ? 16 : 14), p.appendChild(l(" ")), p.appendChild(i("span")).appendChild(l(t["data-text"] || "")), r = s.appendChild(p), /^(true|1)$/i.test(t["data-show-count"]) && "github.com" === r.hostname ? !(g = r.pathname.replace(/^(?!\/)/, "/").match(/^\/([^\/?#]+)(?:\/([^\/?#]+)(?:\/(?:(subscription)|(fork)|(issues)|([^\/?#]+)))?)?(?:[\/?#]|$)/)) || g[6] ? a() : (f = g[2] ? (u = "/repos/" + g[1] + "/" + g[2], g[3] ? (b = "subscribers_count", "watchers") : g[4] ? (b = "forks_count", "network") : g[5] ? (b = "open_issues_count", "issues") : (b = "stargazers_count", "stargazers")) : (u = "/users/" + g[1], b = "followers"), w.call(n, "https://api.github.com" + u, function (e, t) {
            var o, n;
            e || (n = t[b], (o = i("a")).href = t.html_url + "/" + f, o.target = "_blank", o.className = "social-count", o.setAttribute("aria-label", n + " " + b.replace(/_count$/, "").replace("_", " ") + " on GitHub"), o.appendChild(i("b")), o.appendChild(i("i")), o.appendChild(i("span")).appendChild(c.createTextNode(("" + n).replace(/\B(?=(\d{3})+(?!\d))/g, ","))), r.parentNode.insertBefore(o, r.nextSibling)), a()
        })) : a())
    }, x = function () {
        var e, t, o, n, r, a, i;
        if (t = [], p.querySelectorAll) t = p.querySelectorAll("a." + l); else for (o = 0, r = (i = p.getElementsByTagName("a")).length; o < r; o++) ~(" " + (e = i[o]).className + " ").replace(/[ \t\n\f\r]+/g, " ").indexOf(" " + l + " ") && t.push(e);
        for (n = 0, a = t.length; n < a; n++) e = t[n], k(e)
    }, C = window.devicePixelRatio || 1, i = function (e) {
        return (1 < C ? r.ceil(r.round(e * C) / C * 2) / 2 : r.ceil(e)) || 0
    }, y = function (e) {
        var t, o, n;
        return n = e.scrollWidth, o = e.scrollHeight, e.getBoundingClientRect && (t = e.getBoundingClientRect(), n = r.max(n, i(t.width || t.right - t.left)), o = r.max(o, i(t.height || t.bottom - t.top))), [n, o]
    }, F = function (e, t) {
        e.style.width = t[0] + "px", e.style.height = t[1] + "px"
    }, k = function (o, n) {
        var e, t, r, a, i, l, c;
        if (null == o) return x();
        if (null == n && (n = function (e) {
            var t, o, n, r, a;
            for (r = {
                href: e.href,
                title: e.title,
                "aria-label": e.getAttribute("aria-label")
            }, o = 0, n = (a = ["icon", "text", "size", "show-count"]).length; o < n; o++) r[t = "data-" + (t = a[o])] = e.getAttribute(t);
            return null == r["data-text"] && (r["data-text"] = e.textContent || e.innerText), r
        }(o)), (e = window.HTMLElement) && e.prototype.attachShadow && !e.prototype.attachShadow.prototype) t = u("span"), (l = n.title) && (t.title = l), v(t.attachShadow({mode: "closed"}), n, function () {
            o.parentNode.replaceChild(t, o)
        }); else {
            for (a in r = u("iframe"), i = {
                allowtransparency: !0,
                scrolling: "no",
                frameBorder: 0
            }) c = i[a], r.setAttribute(a, c);
            F(r, [1, 0]), r.style.border = "none", r.src = "javascript:0", g(r, "load", function () {
                var e;
                e = r.contentWindow, v.call(e, e.document.body, n, function (e) {
                    var t;
                    t = y(e), r.parentNode.removeChild(r), g(r, "load", function () {
                        F(r, t)
                    }), r.src = d + s + "#" + function (e) {
                        var t, o, n;
                        for (t in o = [], e) null != (n = e[t]) && o.push(h(t) + "=" + h(n));
                        return o.join("&")
                    }(n), (l = n.title) && (r.title = l), o.parentNode.replaceChild(r, o)
                })
            }), p.body.appendChild(r)
        }
    }, "function" == typeof define && define.amd ? define([], {render: k}) : "object" == typeof exports && "string" != typeof exports.nodeName ? exports.render = k : (o && e(o.replace(/\/[^\/]*([?#].*)?$/, "")), n.protocol + "//" + n.host + n.pathname === d + s ? v(p.body, function (e) {
        var t, o, n, r, a, i;
        for (r = {}, t = 0, o = (i = e.split("&")).length; t < o; t++) "" !== (n = i[t]) && (a = n.split("="), r[c(a[0])] = null != a[1] ? c(a.slice(1).join("=")) : void 0);
        return r
    }(n.hash.replace(/^#/, ""))) : a(x))
}();
