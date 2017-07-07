<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<!--======================================================== HEAD=========================================================-->
<?php $this->load->view("head"); ?>

<body>
    <!-- The Main Wrapper -->
    <div class="page">
        <link rel="stylesheet" href="<?php echo site_url('static/plan/css/plan.css');?>" type="text/css">
        <!--======================================================== HEADER =========================================================-->
        <?php $this->load->view("header_secundary"); ?>
        <!--======================================================== CONTENT =========================================================-->
        <main class="page-content">
            <!-- Products -->
            <section class="well-md well-md-inset-1 bg-primary text-center">
                <div class="container wow fadeInUp">
                    <div class="container wow fadeInUp">
                        <h1>
                            <?php echo replace_vocales_voculeshtml("PLAN DE COMPENSACIÓN");?>
                        </h1>
                        <div class="row"> </div>
                    </div>
                    <script type="text/javascript">
                        (function(g, h, c, j, e, k, l) { /*! Jssor */
                            new(function() {});
                            var f = {
                                    mc: function(a) {
                                        return -c.cos(a * c.PI) / 2 + .5
                                    },
                                    Oc: function(a) {
                                        return a
                                    },
                                    Pc: function(a) {
                                        return -a * (a - 2)
                                    },
                                    Be: function(a) {
                                        return a * a * a
                                    },
                                    Ke: function(a) {
                                        return a == 0 ? 0 : c.pow(2, 10 * (a - 1))
                                    }
                                },
                                d = {
                                    W: f.mc,
                                    C: f.Oc,
                                    Rb: f.Pc,
                                    q: f.Be,
                                    s: f.Ke
                                };
                            var b = new function() {
                                var d = this,
                                    Ab = /\S+/g,
                                    F = 1,
                                    yb = 2,
                                    fb = 3,
                                    eb = 4,
                                    jb = 5,
                                    G, r = 0,
                                    i = 0,
                                    s = 0,
                                    X = 0,
                                    z = 0,
                                    I = navigator,
                                    ob = I.appName,
                                    o = I.userAgent,
                                    p = parseFloat;

                                function Ib() {
                                    if (!G) {
                                        G = {
                                            Ze: "ontouchstart" in g || "createTouch" in h
                                        };
                                        var a;
                                        if (I.pointerEnabled || (a = I.msPointerEnabled)) G.Kd = a ? "msTouchAction" : "touchAction"
                                    }
                                    return G
                                }

                                function v(j) {
                                    if (!r) {
                                        r = -1;
                                        if (ob == "Microsoft Internet Explorer" && !!g.attachEvent && !!g.ActiveXObject) {
                                            var e = o.indexOf("MSIE");
                                            r = F;
                                            s = p(o.substring(e + 5, o.indexOf(";", e))); /*@cc_on X=@_jscript_version@*/ ;
                                            i = h.documentMode || s
                                        } else if (ob == "Netscape" && !!g.addEventListener) {
                                            var d = o.indexOf("Firefox"),
                                                b = o.indexOf("Safari"),
                                                f = o.indexOf("Chrome"),
                                                c = o.indexOf("AppleWebKit");
                                            if (d >= 0) {
                                                r = yb;
                                                i = p(o.substring(d + 8))
                                            } else if (b >= 0) {
                                                var k = o.substring(0, b).lastIndexOf("/");
                                                r = f >= 0 ? eb : fb;
                                                i = p(o.substring(k + 1, b))
                                            } else {
                                                var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);
                                                if (a) {
                                                    r = F;
                                                    i = s = p(a[1])
                                                }
                                            }
                                            if (c >= 0) z = p(o.substring(c + 12))
                                        } else {
                                            var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);
                                            if (a) {
                                                r = jb;
                                                i = p(a[2])
                                            }
                                        }
                                    }
                                    return j == r
                                }

                                function q() {
                                    return v(F)
                                }

                                function Q() {
                                    return q() && (i < 6 || h.compatMode == "BackCompat")
                                }

                                function db() {
                                    return v(fb)
                                }

                                function ib() {
                                    return v(jb)
                                }

                                function vb() {
                                    return db() && z > 534 && z < 535
                                }

                                function J() {
                                    v();
                                    return z > 537 || i > 42 || r == F && i >= 11
                                }

                                function O() {
                                    return q() && i < 9
                                }

                                function wb(a) {
                                    var b, c;
                                    return function(f) {
                                        if (!b) {
                                            b = e;
                                            var d = a.substr(0, 1).toUpperCase() + a.substr(1);
                                            n([a].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function(g, e) {
                                                var b = a;
                                                if (e) b = g + d;
                                                if (f.style[b] != l) return c = b
                                            })
                                        }
                                        return c
                                    }
                                }

                                function ub(b) {
                                    var a;
                                    return function(c) {
                                        a = a || wb(b)(c) || b;
                                        return a
                                    }
                                }
                                var K = ub("transform");

                                function nb(a) {
                                    return {}.toString.call(a)
                                }
                                var kb = {};
                                n(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function(a) {
                                    kb["[object " + a + "]"] = a.toLowerCase()
                                });

                                function n(b, d) {
                                    var a, c;
                                    if (nb(b) == "[object Array]") {
                                        for (a = 0; a < b.length; a++)
                                            if (c = d(b[a], a, b)) return c
                                    } else
                                        for (a in b)
                                            if (c = d(b[a], a, b)) return c
                                }

                                function C(a) {
                                    return a == j ? String(a) : kb[nb(a)] || "object"
                                }

                                function lb(a) {
                                    for (var b in a) return e
                                }

                                function A(a) {
                                    try {
                                        return C(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf"))
                                    } catch (b) {}
                                }

                                function u(a, b) {
                                    return {
                                        x: a,
                                        y: b
                                    }
                                }

                                function rb(b, a) {
                                    setTimeout(b, a || 0)
                                }

                                function H(b, d, c) {
                                    var a = !b || b == "inherit" ? "" : b;
                                    n(d, function(c) {
                                        var b = c.exec(a);
                                        if (b) {
                                            var d = a.substr(0, b.index),
                                                e = a.substr(b.index + b[0].length + 1, a.length - 1);
                                            a = d + e
                                        }
                                    });
                                    a = c + (!a.indexOf(" ") ? "" : " ") + a;
                                    return a
                                }

                                function tb(b, a) {
                                    if (i < 9) b.style.filter = a
                                }
                                d.We = Ib;
                                d.Md = q;
                                d.rf = db;
                                d.Id = ib;
                                d.Af = J;
                                d.tb = O;
                                wb("transform");
                                d.Ad = function() {
                                    return i
                                };
                                d.xf = function() {
                                    v();
                                    return z
                                };
                                d.Qb = rb;

                                function Y(a) {
                                    a.constructor === Y.caller && a.sd && a.sd.apply(a, Y.caller.arguments)
                                }
                                d.sd = Y;
                                d.Ab = function(a) {
                                    if (d.vf(a)) a = h.getElementById(a);
                                    return a
                                };

                                function t(a) {
                                    return a || g.event
                                }
                                d.Bd = t;
                                d.qc = function(b) {
                                    b = t(b);
                                    var a = b.target || b.srcElement || h;
                                    if (a.nodeType == 3) a = d.Cd(a);
                                    return a
                                };
                                d.wd = function(a) {
                                    a = t(a);
                                    return {
                                        x: a.pageX || a.clientX || 0,
                                        y: a.pageY || a.clientY || 0
                                    }
                                };

                                function D(c, d, a) {
                                    if (a !== l) c.style[d] = a == l ? "" : a;
                                    else {
                                        var b = c.currentStyle || c.style;
                                        a = b[d];
                                        if (a == "" && g.getComputedStyle) {
                                            b = c.ownerDocument.defaultView.getComputedStyle(c, j);
                                            b && (a = b.getPropertyValue(d) || b[d])
                                        }
                                        return a
                                    }
                                }

                                function ab(b, c, a, d) {
                                    if (a !== l) {
                                        if (a == j) a = "";
                                        else d && (a += "px");
                                        D(b, c, a)
                                    } else return p(D(b, c))
                                }

                                function m(c, a) {
                                    var d = a ? ab : D,
                                        b;
                                    if (a & 4) b = ub(c);
                                    return function(e, f) {
                                        return d(e, b ? b(e) : c, f, a & 2)
                                    }
                                }

                                function Db(b) {
                                    if (q() && s < 9) {
                                        var a = /opacity=([^)]*)/.exec(b.style.filter || "");
                                        return a ? p(a[1]) / 100 : 1
                                    } else return p(b.style.opacity || "1")
                                }

                                function Fb(b, a, f) {
                                    if (q() && s < 9) {
                                        var h = b.style.filter || "",
                                            i = new RegExp(/[\s]*alpha\([^\)]*\)/g),
                                            e = c.round(100 * a),
                                            d = "";
                                        if (e < 100 || f) d = "alpha(opacity=" + e + ") ";
                                        var g = H(h, [i], d);
                                        tb(b, g)
                                    } else b.style.opacity = a == 1 ? "" : c.round(a * 100) / 100
                                }
                                var L = {
                                    a: ["rotate"],
                                    fb: ["rotateX"],
                                    db: ["rotateY"],
                                    cc: ["skewX"],
                                    dc: ["skewY"]
                                };
                                if (!J()) L = B(L, {
                                    D: ["scaleX", 2],
                                    J: ["scaleY", 2],
                                    ib: ["translateZ", 1]
                                });

                                function M(d, a) {
                                    var c = "";
                                    if (a) {
                                        if (q() && i && i < 10) {
                                            delete a.fb;
                                            delete a.db;
                                            delete a.ib
                                        }
                                        b.j(a, function(d, b) {
                                            var a = L[b];
                                            if (a) {
                                                var e = a[1] || 0;
                                                if (N[b] != d) c += " " + a[0] + "(" + d + (["deg", "px", ""])[e] + ")"
                                            }
                                        });
                                        if (J()) {
                                            if (a.xb || a.nb || a.ib) c += " translate3d(" + (a.xb || 0) + "px," + (a.nb || 0) + "px," + (a.ib || 0) + "px)";
                                            if (a.D == l) a.D = 1;
                                            if (a.J == l) a.J = 1;
                                            if (a.D != 1 || a.J != 1) c += " scale3d(" + a.D + ", " + a.J + ", 1)"
                                        }
                                    }
                                    d.style[K(d)] = c
                                }
                                d.Ld = m("transformOrigin", 4);
                                d.of = m("backfaceVisibility", 4);
                                d.nf = m("transformStyle", 4);
                                d.Xe = m("perspective", 6);
                                d.le = m("perspectiveOrigin", 4);
                                d.Ye = function(a, b) {
                                    if (q() && s < 9 || s < 10 && Q()) a.style.zoom = b == 1 ? "" : b;
                                    else {
                                        var c = K(a),
                                            f = "scale(" + b + ")",
                                            e = a.style[c],
                                            g = new RegExp(/[\s]*scale\(.*?\)/g),
                                            d = H(e, [g], f);
                                        a.style[c] = d
                                    }
                                };
                                d.gc = function(b, a) {
                                    return function(c) {
                                        c = t(c);
                                        var f = c.type,
                                            e = c.relatedTarget || (f == "mouseout" ? c.toElement : c.fromElement);
                                        (!e || e !== a && !d.pf(a, e)) && b(c)
                                    }
                                };
                                d.g = function(a, e, b, c) {
                                    a = d.Ab(a);
                                    if (a.addEventListener) {
                                        e == "mousewheel" && a.addEventListener("DOMMouseScroll", b, c);
                                        a.addEventListener(e, b, c)
                                    } else if (a.attachEvent) {
                                        a.attachEvent("on" + e, b);
                                        c && a.setCapture && a.setCapture()
                                    }
                                };
                                d.T = function(a, c, e, b) {
                                    a = d.Ab(a);
                                    if (a.removeEventListener) {
                                        c == "mousewheel" && a.removeEventListener("DOMMouseScroll", e, b);
                                        a.removeEventListener(c, e, b)
                                    } else if (a.detachEvent) {
                                        a.detachEvent("on" + c, e);
                                        b && a.releaseCapture && a.releaseCapture()
                                    }
                                };
                                d.ac = function(a) {
                                    a = t(a);
                                    a.preventDefault && a.preventDefault();
                                    a.cancel = e;
                                    a.returnValue = k
                                };
                                d.bf = function(a) {
                                    a = t(a);
                                    a.stopPropagation && a.stopPropagation();
                                    a.cancelBubble = e
                                };
                                d.R = function(d, c) {
                                    var a = [].slice.call(arguments, 2),
                                        b = function() {
                                            var b = a.concat([].slice.call(arguments, 0));
                                            return c.apply(d, b)
                                        };
                                    return b
                                };
                                d.Ub = function(d, c) {
                                    for (var b = [], a = d.firstChild; a; a = a.nextSibling)(c || a.nodeType == 1) && b.push(a);
                                    return b
                                };

                                function mb(a, c, e, b) {
                                    b = b || "u";
                                    for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                                        if (a.nodeType == 1) {
                                            if (U(a, b) == c) return a;
                                            if (!e) {
                                                var d = mb(a, c, e, b);
                                                if (d) return d
                                            }
                                        }
                                }
                                d.E = mb;

                                function S(a, d, f, b) {
                                    b = b || "u";
                                    var c = [];
                                    for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                                        if (a.nodeType == 1) {
                                            U(a, b) == d && c.push(a);
                                            if (!f) {
                                                var e = S(a, d, f, b);
                                                if (e.length) c = c.concat(e)
                                            }
                                        }
                                    return c
                                }

                                function gb(a, c, d) {
                                    for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                                        if (a.nodeType == 1) {
                                            if (a.tagName == c) return a;
                                            if (!d) {
                                                var b = gb(a, c, d);
                                                if (b) return b
                                            }
                                        }
                                }
                                d.gf = gb;

                                function xb(a, c, e) {
                                    var b = [];
                                    for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                                        if (a.nodeType == 1) {
                                            (!c || a.tagName == c) && b.push(a);
                                            if (!e) {
                                                var d = xb(a, c, e);
                                                if (d.length) b = b.concat(d)
                                            }
                                        }
                                    return b
                                }
                                d.hf = xb;
                                d.jf = function(b, a) {
                                    return b.getElementsByTagName(a)
                                };

                                function B() {
                                    var e = arguments,
                                        d, c, b, a, g = 1 & e[0],
                                        f = 1 + g;
                                    d = e[f - 1] || {};
                                    for (; f < e.length; f++)
                                        if (c = e[f])
                                            for (b in c) {
                                                a = c[b];
                                                if (a !== l) {
                                                    a = c[b];
                                                    var h = d[b];
                                                    d[b] = g && (A(h) || A(a)) ? B(g, {}, h, a) : a
                                                }
                                            }
                                    return d
                                }
                                d.G = B;

                                function Z(f, g) {
                                    var d = {},
                                        c, a, b;
                                    for (c in f) {
                                        a = f[c];
                                        b = g[c];
                                        if (a !== b) {
                                            var e;
                                            if (A(a) && A(b)) {
                                                a = Z(a, b);
                                                e = !lb(a)
                                            }!e && (d[c] = a)
                                        }
                                    }
                                    return d
                                }
                                d.ld = function(a) {
                                    return C(a) == "function"
                                };
                                d.vf = function(a) {
                                    return C(a) == "string"
                                };
                                d.jd = function(a) {
                                    return !isNaN(p(a)) && isFinite(a)
                                };
                                d.j = n;
                                d.lf = A;

                                function R(a) {
                                    return h.createElement(a)
                                }
                                d.rb = function() {
                                    return R("DIV")
                                };
                                d.dd = function() {};

                                function V(b, c, a) {
                                    if (a == l) return b.getAttribute(c);
                                    b.setAttribute(c, a)
                                }

                                function U(a, b) {
                                    return V(a, b) || V(a, "data-" + b)
                                }
                                d.L = V;
                                d.p = U;

                                function x(b, a) {
                                    if (a == l) return b.className;
                                    b.className = a
                                }
                                d.ad = x;

                                function qb(b) {
                                    var a = {};
                                    n(b, function(b) {
                                        a[b] = b
                                    });
                                    return a
                                }

                                function sb(b, a) {
                                    return b.match(a || Ab)
                                }

                                function P(b, a) {
                                    return qb(sb(b || "", a))
                                }
                                d.me = sb;

                                function bb(b, c) {
                                    var a = "";
                                    n(c, function(c) {
                                        a && (a += b);
                                        a += c
                                    });
                                    return a
                                }

                                function E(a, c, b) {
                                    x(a, bb(" ", B(Z(P(x(a)), P(c)), P(b))))
                                }
                                d.Cd = function(a) {
                                    return a.parentNode
                                };
                                d.V = function(a) {
                                    d.kb(a, "none")
                                };
                                d.H = function(a, b) {
                                    d.kb(a, b ? "none" : "")
                                };
                                d.Ud = function(b, a) {
                                    b.removeAttribute(a)
                                };
                                d.ge = function() {
                                    return q() && i < 10
                                };
                                d.ee = function(d, a) {
                                    if (a) d.style.clip = "rect(" + c.round(a.k || a.I || 0) + "px " + c.round(a.v) + "px " + c.round(a.z) + "px " + c.round(a.f || a.F || 0) + "px)";
                                    else if (a !== l) {
                                        var g = d.style.cssText,
                                            f = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)],
                                            e = H(g, f, "");
                                        b.Yb(d, e)
                                    }
                                };
                                d.ab = function() {
                                    return +new Date
                                };
                                d.N = function(b, a) {
                                    b.appendChild(a)
                                };
                                d.Wb = function(b, a, c) {
                                    (c || a.parentNode).insertBefore(b, a)
                                };
                                d.Xb = function(b, a) {
                                    a = a || b.parentNode;
                                    a && a.removeChild(b)
                                };
                                d.fe = function(a, b) {
                                    n(a, function(a) {
                                        d.Xb(a, b)
                                    })
                                };
                                d.Kc = function(a) {
                                    d.fe(d.Ub(a, e), a)
                                };
                                d.Rd = function(a, b) {
                                    var c = d.Cd(a);
                                    b & 1 && d.P(a, (d.r(c) - d.r(a)) / 2);
                                    b & 2 && d.O(a, (d.u(c) - d.u(a)) / 2)
                                };
                                d.Nd = function(b, a) {
                                    return parseInt(b, a || 10)
                                };
                                d.ke = p;
                                d.pf = function(b, a) {
                                    var c = h.body;
                                    while (a && b !== a && c !== a) try {
                                        a = a.parentNode
                                    } catch (d) {
                                        return k
                                    }
                                    return b === a
                                };

                                function W(e, c, b) {
                                    var a = e.cloneNode(!c);
                                    !b && d.Ud(a, "id");
                                    return a
                                }
                                d.jb = W;
                                d.Eb = function(f, g) {
                                    var a = new Image;

                                    function b(f, e) {
                                        d.T(a, "load", b);
                                        d.T(a, "abort", c);
                                        d.T(a, "error", c);
                                        g && g(a, e)
                                    }

                                    function c(a) {
                                        b(a, e)
                                    }
                                    if (ib() && i < 11.6 || !f) b(!f);
                                    else {
                                        d.g(a, "load", b);
                                        d.g(a, "abort", c);
                                        d.g(a, "error", c);
                                        a.src = f
                                    }
                                };
                                d.be = function(e, a, f) {
                                    var c = e.length + 1;

                                    function b(b) {
                                        c--;
                                        if (a && b && b.src == a.src) a = b;
                                        !c && f && f(a)
                                    }
                                    n(e, function(a) {
                                        d.Eb(a.src, b)
                                    });
                                    b()
                                };
                                d.Wd = function(a, g, i, h) {
                                    if (h) a = W(a);
                                    var c = S(a, g);
                                    if (!c.length) c = b.jf(a, g);
                                    for (var f = c.length - 1; f > -1; f--) {
                                        var d = c[f],
                                            e = W(i);
                                        x(e, x(d));
                                        b.Yb(e, d.style.cssText);
                                        b.Wb(e, d);
                                        b.Xb(d)
                                    }
                                    return a
                                };

                                function Gb(a) {
                                    var k = this,
                                        p = "",
                                        r = ["av", "pv", "ds", "dn"],
                                        f = [],
                                        q, j = 0,
                                        g = 0,
                                        e = 0;

                                    function i() {
                                        E(a, q, f[e || j || g & 2 || g]);
                                        b.lb(a, "pointer-events", e ? "none" : "")
                                    }

                                    function c() {
                                        j = 0;
                                        i();
                                        d.T(h, "mouseup", c);
                                        d.T(h, "touchend", c);
                                        d.T(h, "touchcancel", c)
                                    }

                                    function o(a) {
                                        if (e) d.ac(a);
                                        else {
                                            j = 4;
                                            i();
                                            d.g(h, "mouseup", c);
                                            d.g(h, "touchend", c);
                                            d.g(h, "touchcancel", c)
                                        }
                                    }
                                    k.de = function(a) {
                                        if (a === l) return g;
                                        g = a & 2 || a & 1;
                                        i()
                                    };
                                    k.Mc = function(a) {
                                        if (a === l) return !e;
                                        e = a ? 0 : 3;
                                        i()
                                    };
                                    k.ub = a = d.Ab(a);
                                    var m = b.me(x(a));
                                    if (m) p = m.shift();
                                    n(r, function(a) {
                                        f.push(p + a)
                                    });
                                    q = bb(" ", f);
                                    f.unshift("");
                                    d.g(a, "mousedown", o);
                                    d.g(a, "touchstart", o)
                                }
                                d.fc = function(a) {
                                    return new Gb(a)
                                };
                                d.lb = D;
                                d.mb = m("overflow");
                                d.O = m("top", 2);
                                d.P = m("left", 2);
                                d.r = m("width", 2);
                                d.u = m("height", 2);
                                d.ae = m("marginLeft", 2);
                                d.Qd = m("marginTop", 2);
                                d.B = m("position");
                                d.kb = m("display");
                                d.Q = m("zIndex", 1);
                                d.Db = function(b, a, c) {
                                    if (a != l) Fb(b, a, c);
                                    else return Db(b)
                                };
                                d.Yb = function(a, b) {
                                    if (b != l) a.style.cssText = b;
                                    else return a.style.cssText
                                };
                                var T = {
                                    e: d.Db,
                                    k: d.O,
                                    f: d.P,
                                    hb: d.r,
                                    bb: d.u,
                                    zb: d.B,
                                    Kf: d.kb,
                                    X: d.Q
                                };

                                function w(g, k) {
                                    var f = O(),
                                        b = J(),
                                        e = vb(),
                                        h = K(g);

                                    function i(b, d, a) {
                                        var e = b.sb(u(-d / 2, -a / 2)),
                                            f = b.sb(u(d / 2, -a / 2)),
                                            g = b.sb(u(d / 2, a / 2)),
                                            h = b.sb(u(-d / 2, a / 2));
                                        b.sb(u(300, 300));
                                        return u(c.min(e.x, f.x, g.x, h.x) + d / 2, c.min(e.y, f.y, g.y, h.y) + a / 2)
                                    }

                                    function a(e, a) {
                                        a = a || {};
                                        var n = a.ib || 0,
                                            p = (a.fb || 0) % 360,
                                            q = (a.db || 0) % 360,
                                            u = (a.a || 0) % 360,
                                            k = a.D,
                                            m = a.J,
                                            g = a.Lf;
                                        if (k == l) k = 1;
                                        if (m == l) m = 1;
                                        if (g == l) g = 1;
                                        if (f) {
                                            n = 0;
                                            p = 0;
                                            q = 0;
                                            g = 0
                                        }
                                        var c = new Cb(a.xb, a.nb, n);
                                        c.fb(p);
                                        c.db(q);
                                        c.je(u);
                                        c.ce(a.cc, a.dc);
                                        c.Cc(k, m, g);
                                        if (b) {
                                            c.ob(a.F, a.I);
                                            e.style[h] = c.Zd()
                                        } else if (!X || X < 9) {
                                            var o = "",
                                                j = {
                                                    x: 0,
                                                    y: 0
                                                };
                                            if (a.eb) j = i(c, a.eb, a.pb);
                                            d.Qd(e, j.y);
                                            d.ae(e, j.x);
                                            o = c.Yd();
                                            var s = e.style.filter,
                                                t = new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),
                                                r = H(s, [t], o);
                                            tb(e, r)
                                        }
                                    }
                                    w = function(f, c) {
                                        c = c || {};
                                        var h = c.F,
                                            i = c.I,
                                            g;
                                        n(T, function(a, b) {
                                            g = c[b];
                                            g !== l && a(f, g)
                                        });
                                        d.ee(f, c.i);
                                        if (!b) {
                                            h != l && d.P(f, (c.Tc || 0) + h);
                                            i != l && d.O(f, (c.Rc || 0) + i)
                                        }
                                        if (c.Xd)
                                            if (e) rb(d.R(j, M, f, c));
                                            else a(f, c)
                                    };
                                    d.Jb = M;
                                    if (e) d.Jb = w;
                                    if (f) d.Jb = a;
                                    else if (!b) a = M;
                                    d.M = w;
                                    w(g, k)
                                }
                                d.Jb = w;
                                d.M = w;

                                function Cb(i, k, o) {
                                    var d = this,
                                        b = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, i || 0, k || 0, o || 0, 1],
                                        h = c.sin,
                                        g = c.cos,
                                        l = c.tan;

                                    function f(a) {
                                        return a * c.PI / 180
                                    }

                                    function n(a, b) {
                                        return {
                                            x: a,
                                            y: b
                                        }
                                    }

                                    function m(c, e, l, m, o, r, t, u, w, z, A, C, E, b, f, k, a, g, i, n, p, q, s, v, x, y, B, D, F, d, h, j) {
                                        return [c * a + e * p + l * x + m * F, c * g + e * q + l * y + m * d, c * i + e * s + l * B + m * h, c * n + e * v + l * D + m * j, o * a + r * p + t * x + u * F, o * g + r * q + t * y + u * d, o * i + r * s + t * B + u * h, o * n + r * v + t * D + u * j, w * a + z * p + A * x + C * F, w * g + z * q + A * y + C * d, w * i + z * s + A * B + C * h, w * n + z * v + A * D + C * j, E * a + b * p + f * x + k * F, E * g + b * q + f * y + k * d, E * i + b * s + f * B + k * h, E * n + b * v + f * D + k * j]
                                    }

                                    function e(c, a) {
                                        return m.apply(j, (a || b).concat(c))
                                    }
                                    d.Cc = function(a, c, d) {
                                        if (a != 1 || c != 1 || d != 1) b = e([a, 0, 0, 0, 0, c, 0, 0, 0, 0, d, 0, 0, 0, 0, 1])
                                    };
                                    d.ob = function(a, c, d) {
                                        b[12] += a || 0;
                                        b[13] += c || 0;
                                        b[14] += d || 0
                                    };
                                    d.fb = function(c) {
                                        if (c) {
                                            a = f(c);
                                            var d = g(a),
                                                i = h(a);
                                            b = e([1, 0, 0, 0, 0, d, i, 0, 0, -i, d, 0, 0, 0, 0, 1])
                                        }
                                    };
                                    d.db = function(c) {
                                        if (c) {
                                            a = f(c);
                                            var d = g(a),
                                                i = h(a);
                                            b = e([d, 0, -i, 0, 0, 1, 0, 0, i, 0, d, 0, 0, 0, 0, 1])
                                        }
                                    };
                                    d.je = function(c) {
                                        if (c) {
                                            a = f(c);
                                            var d = g(a),
                                                i = h(a);
                                            b = e([d, i, 0, 0, -i, d, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                                        }
                                    };
                                    d.ce = function(a, c) {
                                        if (a || c) {
                                            i = f(a);
                                            k = f(c);
                                            b = e([1, l(k), 0, 0, l(i), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                                        }
                                    };
                                    d.sb = function(c) {
                                        var a = e(b, [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, c.x, c.y, 0, 1]);
                                        return n(a[12], a[13])
                                    };
                                    d.Zd = function() {
                                        return "matrix3d(" + b.join(",") + ")"
                                    };
                                    d.Yd = function() {
                                        return "progid:DXImageTransform.Microsoft.Matrix(M11=" + b[0] + ", M12=" + b[4] + ", M21=" + b[1] + ", M22=" + b[5] + ", SizingMethod='auto expand')"
                                    }
                                }
                                new function() {
                                    var a = this;

                                    function b(d, g) {
                                        for (var j = d[0].length, i = d.length, h = g[0].length, f = [], c = 0; c < i; c++)
                                            for (var k = f[c] = [], b = 0; b < h; b++) {
                                                for (var e = 0, a = 0; a < j; a++) e += d[c][a] * g[a][b];
                                                k[b] = e
                                            }
                                        return f
                                    }
                                    a.D = function(b, c) {
                                        return a.Uc(b, c, 0)
                                    };
                                    a.J = function(b, c) {
                                        return a.Uc(b, 0, c)
                                    };
                                    a.Uc = function(a, c, d) {
                                        return b(a, [
                                            [c, 0],
                                            [0, d]
                                        ])
                                    };
                                    a.sb = function(d, c) {
                                        var a = b(d, [
                                            [c.x],
                                            [c.y]
                                        ]);
                                        return u(a[0][0], a[1][0])
                                    }
                                };
                                var N = {
                                    Tc: 0,
                                    Rc: 0,
                                    F: 0,
                                    I: 0,
                                    c: 1,
                                    D: 1,
                                    J: 1,
                                    a: 0,
                                    fb: 0,
                                    db: 0,
                                    xb: 0,
                                    nb: 0,
                                    ib: 0,
                                    cc: 0,
                                    dc: 0
                                };
                                d.Lc = function(a) {
                                    var c = a || {};
                                    if (a)
                                        if (b.ld(a)) c = {
                                            zc: c
                                        };
                                        else if (b.ld(a.i)) c.i = {
                                        zc: a.i
                                    };
                                    return c
                                };
                                d.Hc = function(k, m, x, q, z, A, n) {
                                    var a = m;
                                    if (k) {
                                        a = {};
                                        for (var g in m) {
                                            var B = A[g] || 1,
                                                w = z[g] || [0, 1],
                                                d = (x - w[0]) / w[1];
                                            d = c.min(c.max(d, 0), 1);
                                            d = d * B;
                                            var u = c.floor(d);
                                            if (d != u) d -= u;
                                            var h = q.zc || f.mc,
                                                i, C = k[g],
                                                o = m[g];
                                            if (b.jd(o)) {
                                                h = q[g] || h;
                                                var y = h(d);
                                                i = C + o * y
                                            } else {
                                                i = b.G({
                                                    Pb: {}
                                                }, k[g]);
                                                var v = q[g] || {};
                                                b.j(o.Pb || o, function(e, a) {
                                                    h = v[a] || v.zc || h;
                                                    var c = h(d),
                                                        b = e * c;
                                                    i.Pb[a] = b;
                                                    i[a] += b
                                                })
                                            }
                                            a[g] = i
                                        }
                                        var t = b.j(m, function(b, a) {
                                            return N[a] != l
                                        });
                                        t && b.j(N, function(c, b) {
                                            if (a[b] == l && k[b] !== l) a[b] = k[b]
                                        });
                                        if (t) {
                                            if (a.c) a.D = a.J = a.c;
                                            a.eb = n.eb;
                                            a.pb = n.pb;
                                            a.Xd = e
                                        }
                                    }
                                    if (m.i && n.ob) {
                                        var p = a.i.Pb,
                                            s = (p.k || 0) + (p.z || 0),
                                            r = (p.f || 0) + (p.v || 0);
                                        a.f = (a.f || 0) + r;
                                        a.k = (a.k || 0) + s;
                                        a.i.f -= r;
                                        a.i.v -= r;
                                        a.i.k -= s;
                                        a.i.z -= s
                                    }
                                    if (a.i && b.ge() && !a.i.k && !a.i.f && !a.i.I && !a.i.F && a.i.v == n.eb && a.i.z == n.pb) a.i = j;
                                    return a
                                }
                            };

                            function n() {
                                var a = this,
                                    d = [];

                                function i(a, b) {
                                    d.push({
                                        xc: a,
                                        wc: b
                                    })
                                }

                                function h(a, c) {
                                    b.j(d, function(b, e) {
                                        b.xc == a && b.wc === c && d.splice(e, 1)
                                    })
                                }
                                a.Hb = a.addEventListener = i;
                                a.removeEventListener = h;
                                a.n = function(a) {
                                    var c = [].slice.call(arguments, 1);
                                    b.j(d, function(b) {
                                        b.xc == a && b.wc.apply(g, c)
                                    })
                                }
                            }
                            var m = function(z, C, i, J, M, L) {
                                z = z || 0;
                                var a = this,
                                    q, n, o, u, A = 0,
                                    G, H, F, B, y = 0,
                                    h = 0,
                                    m = 0,
                                    D, l, f, d, p, w = [],
                                    x;

                                function O(a) {
                                    f += a;
                                    d += a;
                                    l += a;
                                    h += a;
                                    m += a;
                                    y += a
                                }

                                function t(o) {
                                    var g = o;
                                    if (p && (g >= d || g <= f)) g = ((g - f) % p + p) % p + f;
                                    if (!D || u || h != g) {
                                        var j = c.min(g, d);
                                        j = c.max(j, f);
                                        if (!D || u || j != m) {
                                            if (L) {
                                                var k = (j - l) / (C || 1);
                                                if (i.gd) k = 1 - k;
                                                var n = b.Hc(M, L, k, G, F, H, i);
                                                if (x) b.j(n, function(b, a) {
                                                    x[a] && x[a](J, b)
                                                });
                                                else b.M(J, n)
                                            }
                                            a.uc(m - l, j - l);
                                            m = j;
                                            b.j(w, function(b, c) {
                                                var a = o < h ? w[w.length - c - 1] : b;
                                                a.cb(m - y)
                                            });
                                            var r = h,
                                                q = m;
                                            h = g;
                                            D = e;
                                            a.bc(r, q)
                                        }
                                    }
                                }

                                function E(a, b, e) {
                                    b && a.ec(d);
                                    if (!e) {
                                        f = c.min(f, a.td() + y);
                                        d = c.max(d, a.Dc() + y)
                                    }
                                    w.push(a)
                                }
                                var r = g.requestAnimationFrame || g.webkitRequestAnimationFrame || g.mozRequestAnimationFrame || g.msRequestAnimationFrame;
                                if (b.rf() && b.Ad() < 7) r = j;
                                r = r || function(a) {
                                    b.Qb(a, i.gb)
                                };

                                function I() {
                                    if (q) {
                                        var d = b.ab(),
                                            e = c.min(d - A, i.Qc),
                                            a = h + e * o;
                                        A = d;
                                        if (a * o >= n * o) a = n;
                                        t(a);
                                        if (!u && a * o >= n * o) K(B);
                                        else r(I)
                                    }
                                }

                                function s(g, i, j) {
                                    if (!q) {
                                        q = e;
                                        u = j;
                                        B = i;
                                        g = c.max(g, f);
                                        g = c.min(g, d);
                                        n = g;
                                        o = n < h ? -1 : 1;
                                        a.pd();
                                        A = b.ab();
                                        r(I)
                                    }
                                }

                                function K(b) {
                                    if (q) {
                                        u = q = B = k;
                                        a.qd();
                                        b && b()
                                    }
                                }
                                a.yd = function(a, b, c) {
                                    s(a ? h + a : d, b, c)
                                };
                                a.xd = s;
                                a.wb = K;
                                a.Vd = function(a) {
                                    s(a)
                                };
                                a.Z = function() {
                                    return h
                                };
                                a.Wc = function() {
                                    return n
                                };
                                a.Lb = function() {
                                    return m
                                };
                                a.cb = t;
                                a.ob = function(a) {
                                    t(h + a)
                                };
                                a.bd = function() {
                                    return q
                                };
                                a.Pd = function(a) {
                                    p = a
                                };
                                a.ec = O;
                                a.nd = function(a, b) {
                                    E(a, 0, b)
                                };
                                a.Fc = function(a) {
                                    E(a, 1)
                                };
                                a.td = function() {
                                    return f
                                };
                                a.Dc = function() {
                                    return d
                                };
                                a.bc = a.pd = a.qd = a.uc = b.dd;
                                a.hc = b.ab();
                                i = b.G({
                                    gb: 16,
                                    Qc: 50
                                }, i);
                                p = i.hd;
                                x = i.he;
                                f = l = z;
                                d = z + C;
                                H = i.A || {};
                                F = i.Bb || {};
                                G = b.Lc(i.l)
                            };
                            var p = new function() {
                                    var h = this;

                                    function g(b, a, c) {
                                        c.push(a);
                                        b[a] = b[a] || [];
                                        b[a].push(c)
                                    }
                                    h.Sd = function(d) {
                                        for (var e = [], a, b = 0; b < d.U; b++)
                                            for (a = 0; a < d.m; a++) g(e, c.ceil(1e5 * c.random()) % 13, [b, a]);
                                        return e
                                    }
                                },
                                s = function(l, s, q, u, z) {
                                    var d = this,
                                        v, g, a, y = 0,
                                        x = u.ie,
                                        r, h = 8;

                                    function t(a) {
                                        if (a.k) a.I = a.k;
                                        if (a.f) a.F = a.f;
                                        b.j(a, function(a) {
                                            b.lf(a) && t(a)
                                        })
                                    }

                                    function i(g, d) {
                                        var a = {
                                            gb: d,
                                            o: 1,
                                            Qb: 0,
                                            m: 1,
                                            U: 1,
                                            e: 0,
                                            c: 0,
                                            i: 0,
                                            ob: k,
                                            K: k,
                                            gd: k,
                                            Od: p.Sd,
                                            Y: {
                                                vb: 0,
                                                Zc: 0
                                            },
                                            l: f.mc,
                                            A: {},
                                            Tb: [],
                                            Bb: {}
                                        };
                                        b.G(a, g);
                                        t(a);
                                        a.l = b.Lc(a.l);
                                        a.mf = c.ceil(a.o / a.gb);
                                        a.kf = function(c, b) {
                                            c /= a.m;
                                            b /= a.U;
                                            var f = c + "x" + b;
                                            if (!a.Tb[f]) {
                                                a.Tb[f] = {
                                                    hb: c,
                                                    bb: b
                                                };
                                                for (var d = 0; d < a.m; d++)
                                                    for (var e = 0; e < a.U; e++) a.Tb[f][e + "," + d] = {
                                                        k: e * b,
                                                        v: d * c + c,
                                                        z: e * b + b,
                                                        f: d * c
                                                    }
                                            }
                                            return a.Tb[f]
                                        };
                                        if (a.kc) {
                                            a.kc = i(a.kc, d);
                                            a.K = e
                                        }
                                        return a
                                    }

                                    function o(B, h, a, w, o, m) {
                                        var z = this,
                                            u, v = {},
                                            i = {},
                                            n = [],
                                            f, d, s, q = a.Y.vb || 0,
                                            r = a.Y.Zc || 0,
                                            g = a.kf(o, m),
                                            p = C(a),
                                            D = p.length - 1,
                                            t = a.o + a.Qb * D,
                                            x = w + t,
                                            l = a.K,
                                            y;
                                        x += 50;

                                        function C(a) {
                                            var b = a.Od(a);
                                            return a.gd ? b.reverse() : b
                                        }
                                        z.kd = x;
                                        z.Ob = function(d) {
                                            d -= w;
                                            var e = d < t;
                                            if (e || y) {
                                                y = e;
                                                if (!l) d = t - d;
                                                var f = c.ceil(d / a.gb);
                                                b.j(i, function(a, e) {
                                                    var d = c.max(f, a.ff);
                                                    d = c.min(d, a.length - 1);
                                                    if (a.Vc != d) {
                                                        if (!a.Vc && !l) b.H(n[e]);
                                                        else d == a.ef && l && b.V(n[e]);
                                                        a.Vc = d;
                                                        b.M(n[e], a[d])
                                                    }
                                                })
                                            }
                                        };
                                        h = b.jb(h);
                                        b.Jb(h, j);
                                        if (b.tb()) {
                                            var E = !h["no-image"],
                                                A = b.hf(h);
                                            b.j(A, function(a) {
                                                (E || a["jssor-slider"]) && b.Db(a, b.Db(a), e)
                                            })
                                        }
                                        b.j(p, function(h, j) {
                                            b.j(h, function(G) {
                                                var K = G[0],
                                                    J = G[1],
                                                    t = K + "," + J,
                                                    n = k,
                                                    p = k,
                                                    x = k;
                                                if (q && J % 2) {
                                                    if (q & 3) n = !n;
                                                    if (q & 12) p = !p;
                                                    if (q & 16) x = !x
                                                }
                                                if (r && K % 2) {
                                                    if (r & 3) n = !n;
                                                    if (r & 12) p = !p;
                                                    if (r & 16) x = !x
                                                }
                                                a.k = a.k || a.i & 4;
                                                a.z = a.z || a.i & 8;
                                                a.f = a.f || a.i & 1;
                                                a.v = a.v || a.i & 2;
                                                var E = p ? a.z : a.k,
                                                    B = p ? a.k : a.z,
                                                    D = n ? a.v : a.f,
                                                    C = n ? a.f : a.v;
                                                a.i = E || B || D || C;
                                                s = {};
                                                d = {
                                                    I: 0,
                                                    F: 0,
                                                    e: 1,
                                                    hb: o,
                                                    bb: m
                                                };
                                                f = b.G({}, d);
                                                u = b.G({}, g[t]);
                                                if (a.e) d.e = 2 - a.e;
                                                if (a.X) {
                                                    d.X = a.X;
                                                    f.X = 0
                                                }
                                                var I = a.m * a.U > 1 || a.i;
                                                if (a.c || a.a) {
                                                    var H = e;
                                                    if (b.tb())
                                                        if (a.m * a.U > 1) H = k;
                                                        else I = k;
                                                    if (H) {
                                                        d.c = a.c ? a.c - 1 : 1;
                                                        f.c = 1;
                                                        if (b.tb() || b.Id()) d.c = c.min(d.c, 2);
                                                        var N = a.a || 0;
                                                        d.a = N * 360 * (x ? -1 : 1);
                                                        f.a = 0
                                                    }
                                                }
                                                if (I) {
                                                    var h = u.Pb = {};
                                                    if (a.i) {
                                                        var w = a.If || 1;
                                                        if (E && B) {
                                                            h.k = g.bb / 2 * w;
                                                            h.z = -h.k
                                                        } else if (E) h.z = -g.bb * w;
                                                        else if (B) h.k = g.bb * w;
                                                        if (D && C) {
                                                            h.f = g.hb / 2 * w;
                                                            h.v = -h.f
                                                        } else if (D) h.v = -g.hb * w;
                                                        else if (C) h.f = g.hb * w
                                                    }
                                                    s.i = u;
                                                    f.i = g[t]
                                                }
                                                var L = n ? 1 : -1,
                                                    M = p ? 1 : -1;
                                                if (a.x) d.F += o * a.x * L;
                                                if (a.y) d.I += m * a.y * M;
                                                b.j(d, function(a, c) {
                                                    if (b.jd(a))
                                                        if (a != f[c]) s[c] = a - f[c]
                                                });
                                                v[t] = l ? f : d;
                                                var F = a.mf,
                                                    A = c.round(j * a.Qb / a.gb);
                                                i[t] = new Array(A);
                                                i[t].ff = A;
                                                i[t].ef = A + F - 1;
                                                for (var z = 0; z <= F; z++) {
                                                    var y = b.Hc(f, s, z / F, a.l, a.Bb, a.A, {
                                                        ob: a.ob,
                                                        eb: o,
                                                        pb: m
                                                    });
                                                    y.X = y.X || 1;
                                                    i[t].push(y)
                                                }
                                            })
                                        });
                                        p.reverse();
                                        b.j(p, function(a) {
                                            b.j(a, function(c) {
                                                var f = c[0],
                                                    e = c[1],
                                                    d = f + "," + e,
                                                    a = h;
                                                if (e || f) a = b.jb(h);
                                                b.M(a, v[d]);
                                                b.mb(a, "hidden");
                                                b.B(a, "absolute");
                                                B.df(a);
                                                n[d] = a;
                                                b.H(a, !l)
                                            })
                                        })
                                    }

                                    function w() {
                                        var b = this,
                                            c = 0;
                                        m.call(b, 0, v);
                                        b.bc = function(d, b) {
                                            if (b - c > h) {
                                                c = b;
                                                a && a.Ob(b);
                                                g && g.Ob(b)
                                            }
                                        };
                                        b.Ic = r
                                    }
                                    d.cf = function() {
                                        var a = 0,
                                            b = u.Gb,
                                            d = b.length;
                                        if (x) a = y++ % d;
                                        else a = c.floor(c.random() * d);
                                        b[a] && (b[a].qb = a);
                                        return b[a]
                                    };
                                    d.af = function(w, x, k, m, b) {
                                        r = b;
                                        b = i(b, h);
                                        var j = m.Sc,
                                            f = k.Sc;
                                        j["no-image"] = !m.Zb;
                                        f["no-image"] = !k.Zb;
                                        var n = j,
                                            p = f,
                                            u = b,
                                            e = b.kc || i({}, h);
                                        if (!b.K) {
                                            n = f;
                                            p = j
                                        }
                                        var t = e.ec || 0;
                                        g = new o(l, p, e, c.max(t - e.gb, 0), s, q);
                                        a = new o(l, n, u, c.max(e.gb - t, 0), s, q);
                                        g.Ob(0);
                                        a.Ob(0);
                                        v = c.max(g.kd, a.kd);
                                        d.qb = w
                                    };
                                    d.yb = function() {
                                        l.yb();
                                        g = j;
                                        a = j
                                    };
                                    d.tf = function() {
                                        var b = j;
                                        if (a) b = new w;
                                        return b
                                    };
                                    if (b.tb() || b.Id() || z && b.xf() < 537) h = 16;
                                    n.call(d);
                                    m.call(d, -1e7, 1e7)
                                },
                                i = function(p, fc) {
                                    var d = this;

                                    function Bc() {
                                        var a = this;
                                        m.call(a, -1e8, 2e8);
                                        a.wf = function() {
                                            var b = a.Lb(),
                                                d = c.floor(b),
                                                f = t(d),
                                                e = b - c.floor(b);
                                            return {
                                                qb: f,
                                                qf: d,
                                                zb: e
                                            }
                                        };
                                        a.bc = function(b, a) {
                                            var f = c.floor(a);
                                            if (f != a && a > b) f++;
                                            Tb(f, e);
                                            d.n(i.yf, t(a), t(b), a, b)
                                        }
                                    }

                                    function Ac() {
                                        var a = this;
                                        m.call(a, 0, 0, {
                                            hd: q
                                        });
                                        b.j(C, function(b) {
                                            D & 1 && b.Pd(q);
                                            a.Fc(b);
                                            b.ec(kb / bc)
                                        })
                                    }

                                    function zc() {
                                        var a = this,
                                            b = Ub.ub;
                                        m.call(a, -1, 2, {
                                            l: f.Oc,
                                            he: {
                                                zb: Zb
                                            },
                                            hd: q
                                        }, b, {
                                            zb: 1
                                        }, {
                                            zb: -2
                                        });
                                        a.Nb = b
                                    }

                                    function mc(o, n) {
                                        var b = this,
                                            f, g, h, l, c;
                                        m.call(b, -1e8, 2e8, {
                                            Qc: 100
                                        });
                                        b.pd = function() {
                                            M = e;
                                            R = j;
                                            d.n(i.zf, t(w.Z()), w.Z())
                                        };
                                        b.qd = function() {
                                            M = k;
                                            l = k;
                                            var a = w.wf();
                                            d.n(i.uf, t(w.Z()), w.Z());
                                            !a.zb && Dc(a.qf, s)
                                        };
                                        b.bc = function(i, e) {
                                            var b;
                                            if (l) b = c;
                                            else {
                                                b = g;
                                                if (h) {
                                                    var d = e / h;
                                                    b = a.sf(d) * (g - f) + f
                                                }
                                            }
                                            w.cb(b)
                                        };
                                        b.Sb = function(a, d, c, e) {
                                            f = a;
                                            g = d;
                                            h = c;
                                            w.cb(a);
                                            b.cb(0);
                                            b.xd(c, e)
                                        };
                                        b.Ue = function(a) {
                                            l = e;
                                            c = a;
                                            b.yd(a, j, e)
                                        };
                                        b.Te = function(a) {
                                            c = a
                                        };
                                        w = new Bc;
                                        w.nd(o);
                                        w.nd(n)
                                    }

                                    function oc() {
                                        var c = this,
                                            a = Xb();
                                        b.Q(a, 0);
                                        b.lb(a, "pointerEvents", "none");
                                        c.ub = a;
                                        c.df = function(c) {
                                            b.N(a, c);
                                            b.H(a)
                                        };
                                        c.yb = function() {
                                            b.V(a);
                                            b.Kc(a)
                                        }
                                    }

                                    function xc(o, g) {
                                        var f = this,
                                            r, M, v, l, y = [],
                                            x, B, W, H, S, F, h, w, p;
                                        m.call(f, -u, u + 1, {});

                                        function E(a) {
                                            r && r.Yc();
                                            T(o, a, 0);
                                            F = e;
                                            r = new I.S(o, I, b.ke(b.p(o, "idle")) || lc);
                                            r.cb(0)
                                        }

                                        function Z() {
                                            r.hc < I.hc && E()
                                        }

                                        function O(p, r, o) {
                                            if (!H) {
                                                H = e;
                                                if (l && o) {
                                                    var h = o.width,
                                                        c = o.height,
                                                        n = h,
                                                        m = c;
                                                    if (h && c && a.Fb) {
                                                        if (a.Fb & 3 && (!(a.Fb & 4) || h > K || c > J)) {
                                                            var j = k,
                                                                q = K / J * c / h;
                                                            if (a.Fb & 1) j = q > 1;
                                                            else if (a.Fb & 2) j = q < 1;
                                                            n = j ? h * J / c : K;
                                                            m = j ? J : c * K / h
                                                        }
                                                        b.r(l, n);
                                                        b.u(l, m);
                                                        b.O(l, (J - m) / 2);
                                                        b.P(l, (K - n) / 2)
                                                    }
                                                    b.B(l, "absolute");
                                                    d.n(i.ze, g)
                                                }
                                            }
                                            b.V(r);
                                            p && p(f)
                                        }

                                        function Y(b, c, d, e) {
                                            if (e == R && s == g && N)
                                                if (!Cc) {
                                                    var a = t(b);
                                                    A.af(a, g, c, f, d);
                                                    c.Ve();
                                                    U.ec(a - U.td() - 1);
                                                    U.cb(a);
                                                    z.Sb(b, b, 0)
                                                }
                                        }

                                        function bb(b) {
                                            if (b == R && s == g) {
                                                if (!h) {
                                                    var a = j;
                                                    if (A)
                                                        if (A.qb == g) a = A.tf();
                                                        else A.yb();
                                                    Z();
                                                    h = new vc(o, g, a, r);
                                                    h.fd(p)
                                                }!h.bd() && h.Gc()
                                            }
                                        }

                                        function G(d, e, l) {
                                            if (d == g) {
                                                if (d != e) C[e] && C[e].Jc();
                                                else !l && h && h.ye();
                                                p && p.Mc();
                                                var m = R = b.ab();
                                                f.Eb(b.R(j, bb, m))
                                            } else {
                                                var k = c.min(g, d),
                                                    i = c.max(g, d),
                                                    o = c.min(i - k, k + q - i),
                                                    n = u + a.xe - 1;
                                                (!S || o <= n) && f.Eb()
                                            }
                                        }

                                        function db() {
                                            if (s == g && h) {
                                                h.wb();
                                                p && p.we();
                                                p && p.ve();
                                                h.Fd()
                                            }
                                        }

                                        function eb() {
                                            s == g && h && h.wb()
                                        }

                                        function ab(a) {
                                            !P && d.n(i.ue, g, a)
                                        }

                                        function Q() {
                                            p = w.pInstance;
                                            h && h.fd(p)
                                        }
                                        f.Eb = function(c, a) {
                                            a = a || v;
                                            if (y.length && !H) {
                                                b.H(a);
                                                if (!W) {
                                                    W = e;
                                                    d.n(i.se, g);
                                                    b.j(y, function(a) {
                                                        if (!b.L(a, "src")) {
                                                            a.src = b.p(a, "src2");
                                                            b.kb(a, a["display-origin"])
                                                        }
                                                    })
                                                }
                                                b.be(y, l, b.R(j, O, c, a))
                                            } else O(c, a)
                                        };
                                        f.re = function() {
                                            var i = g;
                                            if (a.vd < 0) i -= q;
                                            var d = i + a.vd * tc;
                                            if (D & 2) d = t(d);
                                            if (!(D & 1) && !ib) d = c.max(0, c.min(d, q - u));
                                            if (d != g) {
                                                if (A) {
                                                    var e = A.cf(q);
                                                    if (e) {
                                                        var k = R = b.ab(),
                                                            h = C[t(d)];
                                                        return h.Eb(b.R(j, Y, d, h, e, k), v)
                                                    }
                                                }
                                                cb(d)
                                            } else if (a.Cb) {
                                                f.Jc();
                                                G(g, g)
                                            }
                                        };
                                        f.Ec = function() {
                                            G(g, g, e)
                                        };
                                        f.Jc = function() {
                                            p && p.we();
                                            p && p.ve();
                                            f.rd();
                                            h && h.qe();
                                            h = j;
                                            E()
                                        };
                                        f.Ve = function() {
                                            b.V(o)
                                        };
                                        f.rd = function() {
                                            b.H(o)
                                        };
                                        f.pe = function() {
                                            p && p.Mc()
                                        };

                                        function T(a, c, d) {
                                            if (b.L(a, "jssor-slider")) return;
                                            if (!F) {
                                                if (a.tagName == "IMG") {
                                                    y.push(a);
                                                    if (!b.L(a, "src")) {
                                                        S = e;
                                                        a["display-origin"] = b.kb(a);
                                                        b.V(a)
                                                    }
                                                }
                                                b.tb() && b.Q(a, (b.Q(a) || 0) + 1)
                                            }
                                            var f = b.Ub(a);
                                            b.j(f, function(f) {
                                                var h = f.tagName,
                                                    i = b.p(f, "u");
                                                if (i == "player" && !w) {
                                                    w = f;
                                                    if (w.pInstance) Q();
                                                    else b.g(w, "dataavailable", Q)
                                                }
                                                if (i == "caption") {
                                                    if (c) {
                                                        b.Ld(f, b.p(f, "to"));
                                                        b.of(f, b.p(f, "bf"));
                                                        b.p(f, "3d") && b.nf(f, "preserve-3d")
                                                    } else if (!b.Md()) {
                                                        var g = b.jb(f, k, e);
                                                        b.Wb(g, f, a);
                                                        b.Xb(f, a);
                                                        f = g;
                                                        c = e
                                                    }
                                                } else if (!F && !d && !l) {
                                                    if (h == "A") {
                                                        if (b.p(f, "u") == "image") l = b.gf(f, "IMG");
                                                        else l = b.E(f, "image", e);
                                                        if (l) {
                                                            x = f;
                                                            b.kb(x, "block");
                                                            b.M(x, V);
                                                            B = b.jb(x, e);
                                                            b.B(x, "relative");
                                                            b.Db(B, 0);
                                                            b.lb(B, "backgroundColor", "#000")
                                                        }
                                                    } else if (h == "IMG" && b.p(f, "u") == "image") l = f;
                                                    if (l) {
                                                        l.border = 0;
                                                        b.M(l, V)
                                                    }
                                                }
                                                T(f, c, d + 1)
                                            })
                                        }
                                        f.uc = function(c, b) {
                                            var a = u - b;
                                            Zb(M, a)
                                        };
                                        f.qb = g;
                                        n.call(f);
                                        b.Xe(o, b.p(o, "p"));
                                        b.le(o, b.p(o, "po"));
                                        var L = b.E(o, "thumb", e);
                                        if (L) {
                                            f.ne = b.jb(L);
                                            b.V(L)
                                        }
                                        b.H(o);
                                        v = b.jb(gb);
                                        b.Q(v, 1e3);
                                        b.g(o, "click", ab);
                                        E(e);
                                        f.Zb = l;
                                        f.ud = B;
                                        f.Sc = o;
                                        f.Nb = M = o;
                                        b.N(M, v);
                                        d.Hb(203, G);
                                        d.Hb(28, eb);
                                        d.Hb(24, db)
                                    }

                                    function vc(y, g, p, q) {
                                        var a = this,
                                            n = 0,
                                            u = 0,
                                            h, j, f, c, l, t, r, o = C[g];
                                        m.call(a, 0, 0);

                                        function v() {
                                            b.Kc(L);
                                            cc && l && o.ud && b.N(L, o.ud);
                                            b.H(L, !l && o.Zb)
                                        }

                                        function w() {
                                            a.Gc()
                                        }

                                        function x(b) {
                                            r = b;
                                            a.wb();
                                            a.Gc()
                                        }
                                        a.Gc = function() {
                                            var b = a.Lb();
                                            if (!B && !M && !r && s == g) {
                                                if (!b) {
                                                    if (h && !l) {
                                                        l = e;
                                                        a.Fd(e);
                                                        d.n(i.Ce, g, n, u, h, c)
                                                    }
                                                    v()
                                                }
                                                var k, p = i.zd;
                                                if (b != c)
                                                    if (b == f) k = c;
                                                    else if (b == j) k = f;
                                                else if (!b) k = j;
                                                else k = a.Wc();
                                                d.n(p, g, b, n, j, f, c);
                                                var m = N && (!E || F);
                                                if (b == c)(f != c && !(E & 12) || m) && o.re();
                                                else(m || b != f) && a.xd(k, w)
                                            }
                                        };
                                        a.ye = function() {
                                            f == c && f == a.Lb() && a.cb(j)
                                        };
                                        a.qe = function() {
                                            A && A.qb == g && A.yb();
                                            var b = a.Lb();
                                            b < c && d.n(i.zd, g, -b - 1, n, j, f, c)
                                        };
                                        a.Fd = function(a) {
                                            p && b.mb(lb, a && p.Ic.Hf ? "" : "hidden")
                                        };
                                        a.uc = function(b, a) {
                                            if (l && a >= h) {
                                                l = k;
                                                v();
                                                o.rd();
                                                A.yb();
                                                d.n(i.De, g, n, u, h, c)
                                            }
                                            d.n(i.Se, g, a, n, j, f, c)
                                        };
                                        a.fd = function(a) {
                                            if (a && !t) {
                                                t = a;
                                                a.Hb($JssorPlayer$.Td, x)
                                            }
                                        };
                                        p && a.Fc(p);
                                        h = a.Dc();
                                        a.Fc(q);
                                        j = h + q.Dd;
                                        f = h + q.Ed;
                                        c = a.Dc()
                                    }

                                    function Kb(a, c, d) {
                                        b.P(a, c);
                                        b.O(a, d)
                                    }

                                    function Zb(c, b) {
                                        var a = x > 0 ? x : fb,
                                            d = zb * b * (a & 1),
                                            e = Ab * b * (a >> 1 & 1);
                                        Kb(c, d, e)
                                    }

                                    function Pb() {
                                        qb = M;
                                        Ib = z.Wc();
                                        G = w.Z()
                                    }

                                    function gc() {
                                        Pb();
                                        if (B || !F && E & 12) {
                                            z.wb();
                                            d.n(i.Re)
                                        }
                                    }

                                    function ec(f) {
                                        if (!B && (F || !(E & 12)) && !z.bd()) {
                                            var d = w.Z(),
                                                b = c.ceil(G);
                                            if (f && c.abs(H) >= a.Hd) {
                                                b = c.ceil(d);
                                                b += jb
                                            }
                                            if (!(D & 1)) b = c.min(q - u, c.max(b, 0));
                                            var e = c.abs(b - d);
                                            e = 1 - c.pow(1 - e, 5);
                                            if (!P && qb) z.Vd(Ib);
                                            else if (d == b) {
                                                tb.pe();
                                                tb.Ec()
                                            } else z.Sb(d, b, e * Vb)
                                        }
                                    }

                                    function Hb(a) {
                                        !b.p(b.qc(a), "nodrag") && b.ac(a)
                                    }

                                    function rc(a) {
                                        Yb(a, 1)
                                    }

                                    function Yb(a, c) {
                                        a = b.Bd(a);
                                        var l = b.qc(a);
                                        if (!O && !b.p(l, "nodrag") && sc() && (!c || a.touches.length == 1)) {
                                            B = e;
                                            yb = k;
                                            R = j;
                                            b.g(h, c ? "touchmove" : "mousemove", Bb);
                                            b.ab();
                                            P = 0;
                                            gc();
                                            if (!qb) x = 0;
                                            if (c) {
                                                var g = a.touches[0];
                                                ub = g.clientX;
                                                vb = g.clientY
                                            } else {
                                                var f = b.wd(a);
                                                ub = f.x;
                                                vb = f.y
                                            }
                                            H = 0;
                                            hb = 0;
                                            jb = 0;
                                            d.n(i.Qe, t(G), G, a)
                                        }
                                    }

                                    function Bb(d) {
                                        if (B) {
                                            d = b.Bd(d);
                                            var f;
                                            if (d.type != "mousemove") {
                                                var l = d.touches[0];
                                                f = {
                                                    x: l.clientX,
                                                    y: l.clientY
                                                }
                                            } else f = b.wd(d);
                                            if (f) {
                                                var j = f.x - ub,
                                                    k = f.y - vb;
                                                if (c.floor(G) != G) x = x || fb & O;
                                                if ((j || k) && !x) {
                                                    if (O == 3)
                                                        if (c.abs(k) > c.abs(j)) x = 2;
                                                        else x = 1;
                                                    else x = O;
                                                    if (ob && x == 1 && c.abs(k) - c.abs(j) > 3) yb = e
                                                }
                                                if (x) {
                                                    var a = k,
                                                        i = Ab;
                                                    if (x == 1) {
                                                        a = j;
                                                        i = zb
                                                    }
                                                    if (!(D & 1)) {
                                                        if (a > 0) {
                                                            var g = i * s,
                                                                h = a - g;
                                                            if (h > 0) a = g + c.sqrt(h) * 5
                                                        }
                                                        if (a < 0) {
                                                            var g = i * (q - u - s),
                                                                h = -a - g;
                                                            if (h > 0) a = -g - c.sqrt(h) * 5
                                                        }
                                                    }
                                                    if (H - hb < -2) jb = 0;
                                                    else if (H - hb > 2) jb = -1;
                                                    hb = H;
                                                    H = a;
                                                    sb = G - H / i / (Y || 1);
                                                    if (H && x && !yb) {
                                                        b.ac(d);
                                                        if (!M) z.Ue(sb);
                                                        else z.Te(sb)
                                                    }
                                                }
                                            }
                                        }
                                    }

                                    function bb() {
                                        qc();
                                        if (B) {
                                            B = k;
                                            b.ab();
                                            b.T(h, "mousemove", Bb);
                                            b.T(h, "touchmove", Bb);
                                            P = H;
                                            z.wb();
                                            var a = w.Z();
                                            d.n(i.Pe, t(a), a, t(G), G);
                                            E & 12 && Pb();
                                            ec(e)
                                        }
                                    }

                                    function jc(c) {
                                        if (P) {
                                            b.bf(c);
                                            var a = b.qc(c);
                                            while (a && v !== a) {
                                                a.tagName == "A" && b.ac(c);
                                                try {
                                                    a = a.parentNode
                                                } catch (d) {
                                                    break
                                                }
                                            }
                                        }
                                    }

                                    function Jb(a) {
                                        C[s];
                                        s = t(a);
                                        tb = C[s];
                                        Tb(a);
                                        return s
                                    }

                                    function Dc(a, b) {
                                        x = 0;
                                        Jb(a);
                                        d.n(i.Oe, t(a), b)
                                    }

                                    function Tb(a, c) {
                                        wb = a;
                                        b.j(S, function(b) {
                                            b.Bc(t(a), a, c)
                                        })
                                    }

                                    function sc() {
                                        var b = i.Jd || 0,
                                            a = X;
                                        if (ob) a & 1 && (a &= 1);
                                        i.Jd |= a;
                                        return O = a & ~b
                                    }

                                    function qc() {
                                        if (O) {
                                            i.Jd &= ~X;
                                            O = 0
                                        }
                                    }

                                    function Xb() {
                                        var a = b.rb();
                                        b.M(a, V);
                                        b.B(a, "absolute");
                                        return a
                                    }

                                    function t(a) {
                                        return (a % q + q) % q
                                    }

                                    function kc(b, d) {
                                        if (d)
                                            if (!D) {
                                                b = c.min(c.max(b + wb, 0), q - u);
                                                d = k
                                            } else if (D & 2) {
                                            b = t(b + wb);
                                            d = k
                                        }
                                        cb(b, a.Ac, d)
                                    }

                                    function xb() {
                                        b.j(S, function(a) {
                                            a.sc(a.Vb.Jf <= F)
                                        })
                                    }

                                    function hc() {
                                        if (!F) {
                                            F = 1;
                                            xb();
                                            if (!B) {
                                                E & 12 && ec();
                                                E & 3 && C[s].Ec()
                                            }
                                        }
                                    }

                                    function Ec() {
                                        if (F) {
                                            F = 0;
                                            xb();
                                            B || !(E & 12) || gc()
                                        }
                                    }

                                    function ic() {
                                        V = {
                                            hb: K,
                                            bb: J,
                                            k: 0,
                                            f: 0
                                        };
                                        b.j(T, function(a) {
                                            b.M(a, V);
                                            b.B(a, "absolute");
                                            b.mb(a, "hidden");
                                            b.V(a)
                                        });
                                        b.M(gb, V)
                                    }

                                    function ab(b, a) {
                                        cb(b, a, e)
                                    }

                                    function cb(g, f, j) {
                                        if (Rb && (!B && (F || !(E & 12)) || a.od)) {
                                            M = e;
                                            B = k;
                                            z.wb();
                                            if (f == l) f = Vb;
                                            var d = Cb.Lb(),
                                                b = g;
                                            if (j) {
                                                b = d + g;
                                                if (g > 0) b = c.ceil(b);
                                                else b = c.floor(b)
                                            }
                                            if (D & 2) b = t(b);
                                            if (!(D & 1)) b = c.max(0, c.min(b, q - u));
                                            var i = (b - d) % q;
                                            b = d + i;
                                            var h = d == b ? 0 : f * c.abs(i);
                                            h = c.min(h, f * u * 1.5);
                                            z.Sb(d, b, h || 1)
                                        }
                                    }
                                    d.Me = cb;
                                    d.yd = function() {
                                        if (!N) {
                                            N = e;
                                            C[s] && C[s].Ec()
                                        }
                                    };
                                    d.Ee = function() {
                                        return P
                                    };

                                    function W() {
                                        return b.r(y || p)
                                    }

                                    function nb() {
                                        return b.u(y || p)
                                    }
                                    d.eb = W;
                                    d.pb = nb;

                                    function Eb(c, d) {
                                        if (c == l) return b.r(p);
                                        if (!y) {
                                            var a = b.rb(h);
                                            b.ad(a, b.ad(p));
                                            b.Yb(a, b.Yb(p));
                                            b.kb(a, "block");
                                            b.B(a, "relative");
                                            b.O(a, 0);
                                            b.P(a, 0);
                                            b.mb(a, "visible");
                                            y = b.rb(h);
                                            b.B(y, "absolute");
                                            b.O(y, 0);
                                            b.P(y, 0);
                                            b.r(y, b.r(p));
                                            b.u(y, b.u(p));
                                            b.Ld(y, "0 0");
                                            b.N(y, a);
                                            var g = b.Ub(p);
                                            b.N(p, y);
                                            b.lb(p, "backgroundImage", "");
                                            b.j(g, function(c) {
                                                b.N(b.p(c, "noscale") ? p : a, c);
                                                b.p(c, "autocenter") && Lb.push(c)
                                            })
                                        }
                                        Y = c / (d ? b.u : b.r)(y);
                                        b.Ye(y, Y);
                                        var f = d ? Y * W() : c,
                                            e = d ? c : Y * nb();
                                        b.r(p, f);
                                        b.u(p, e);
                                        b.j(Lb, function(a) {
                                            var c = b.Nd(b.p(a, "autocenter"));
                                            b.Rd(a, c)
                                        })
                                    }
                                    d.Fe = Eb;
                                    d.ed = function(a) {
                                        var d = c.ceil(t(kb / bc)),
                                            b = t(a - s + d);
                                        if (b > u) {
                                            if (a - s > q / 2) a -= q;
                                            else if (a - s <= -q / 2) a += q
                                        } else a = s + b - d;
                                        return a
                                    };
                                    n.call(d);
                                    d.ub = p = b.Ab(p);
                                    var a = b.G({
                                        Fb: 0,
                                        xe: 1,
                                        tc: 1,
                                        rc: 0,
                                        ic: k,
                                        Cb: 1,
                                        Mb: e,
                                        od: e,
                                        vd: 1,
                                        id: 3e3,
                                        md: 1,
                                        Ac: 500,
                                        sf: f.Pc,
                                        Hd: 20,
                                        Xc: 0,
                                        m: 1,
                                        vc: 0,
                                        Ge: 1,
                                        yc: 1,
                                        Nc: 1
                                    }, fc);
                                    a.Mb = a.Mb && b.Af();
                                    if (a.He != l) a.id = a.He;
                                    if (a.Ie != l) a.vc = a.Ie;
                                    var fb = a.yc & 3,
                                        tc = (a.yc & 4) / -4 || 1,
                                        mb = a.Je,
                                        I = b.G({
                                            S: r,
                                            Mb: a.Mb
                                        }, a.Df);
                                    I.Gb = I.Gb || I.Bf;
                                    var Fb = a.Ef,
                                        Z = a.Le,
                                        eb = a.Ne,
                                        Q = !a.Ge,
                                        y, v = b.E(p, "slides", Q),
                                        gb = b.E(p, "loading", Q) || b.rb(h),
                                        Nb = b.E(p, "navigator", Q),
                                        dc = b.E(p, "arrowleft", Q),
                                        ac = b.E(p, "arrowright", Q),
                                        Mb = b.E(p, "thumbnavigator", Q),
                                        pc = b.r(v),
                                        nc = b.u(v),
                                        V, T = [],
                                        uc = b.Ub(v);
                                    b.j(uc, function(a) {
                                        if (a.tagName == "DIV" && !b.p(a, "u")) T.push(a);
                                        else b.tb() && b.Q(a, (b.Q(a) || 0) + 1)
                                    });
                                    var s = -1,
                                        wb, tb, q = T.length,
                                        K = a.te || pc,
                                        J = a.oe || nc,
                                        Wb = a.Xc,
                                        zb = K + Wb,
                                        Ab = J + Wb,
                                        bc = fb & 1 ? zb : Ab,
                                        u = c.min(a.m, q),
                                        lb, x, O, yb, S = [],
                                        Qb, Sb, Ob, cc, Cc, N, E = a.md,
                                        lc = a.id,
                                        Vb = a.Ac,
                                        rb, ib, kb, Rb = u < q,
                                        D = Rb ? a.Cb : 0,
                                        X, P, F = 1,
                                        M, B, R, ub = 0,
                                        vb = 0,
                                        H, hb, jb, Cb, w, U, z, Ub = new oc,
                                        Y, Lb = [];
                                    if (q) {
                                        if (a.Mb) Kb = function(a, c, d) {
                                            b.Jb(a, {
                                                xb: c,
                                                nb: d
                                            })
                                        };
                                        N = a.ic;
                                        d.Vb = fc;
                                        ic();
                                        b.L(p, "jssor-slider", e);
                                        b.Q(v, b.Q(v) || 0);
                                        b.B(v, "absolute");
                                        lb = b.jb(v, e);
                                        b.Wb(lb, v);
                                        if (mb) {
                                            cc = mb.Gf;
                                            rb = mb.S;
                                            ib = u == 1 && q > 1 && rb && (!b.Md() || b.Ad() >= 8)
                                        }
                                        kb = ib || u >= q || !(D & 1) ? 0 : a.vc;
                                        X = (u > 1 || kb ? fb : -1) & a.Nc;
                                        var Gb = v,
                                            C = [],
                                            A, L, Db = b.We(),
                                            ob = Db.Ze,
                                            G, qb, Ib, sb;
                                        Db.Kd && b.lb(Gb, Db.Kd, ([j, "pan-y", "pan-x", "none"])[X] || "");
                                        U = new zc;
                                        if (ib) A = new rb(Ub, K, J, mb, ob);
                                        b.N(lb, U.Nb);
                                        b.mb(v, "hidden");
                                        L = Xb();
                                        b.lb(L, "backgroundColor", "#000");
                                        b.Db(L, 0);
                                        b.Wb(L, Gb.firstChild, Gb);
                                        for (var db = 0; db < T.length; db++) {
                                            var wc = T[db],
                                                yc = new xc(wc, db);
                                            C.push(yc)
                                        }
                                        b.V(gb);
                                        Cb = new Ac;
                                        z = new mc(Cb, U);
                                        b.g(v, "click", jc, e);
                                        b.g(p, "mouseout", b.gc(hc, p));
                                        b.g(p, "mouseover", b.gc(Ec, p));
                                        if (X) {
                                            b.g(v, "mousedown", Yb);
                                            b.g(v, "touchstart", rc);
                                            b.g(v, "dragstart", Hb);
                                            b.g(v, "selectstart", Hb);
                                            b.g(h, "mouseup", bb);
                                            b.g(h, "touchend", bb);
                                            b.g(h, "touchcancel", bb);
                                            b.g(g, "blur", bb)
                                        }
                                        E &= ob ? 10 : 5;
                                        if (Nb && Fb) {
                                            Qb = new Fb.S(Nb, Fb, W(), nb());
                                            S.push(Qb)
                                        }
                                        if (Z && dc && ac) {
                                            Z.Cb = D;
                                            Z.m = u;
                                            Sb = new Z.S(dc, ac, Z, W(), nb());
                                            S.push(Sb)
                                        }
                                        if (Mb && eb) {
                                            eb.rc = a.rc;
                                            Ob = new eb.S(Mb, eb);
                                            S.push(Ob)
                                        }
                                        b.j(S, function(a) {
                                            a.jc(q, C, gb);
                                            a.Hb(o.pc, kc)
                                        });
                                        b.lb(p, "visibility", "visible");
                                        Eb(W());
                                        xb();
                                        a.tc && b.g(h, "keydown", function(b) {
                                            if (b.keyCode == 37) ab(-a.tc);
                                            else b.keyCode == 39 && ab(a.tc)
                                        });
                                        var pb = a.rc;
                                        if (!(D & 1)) pb = c.max(0, c.min(pb, q - u));
                                        z.Sb(pb, pb, 0)
                                    }
                                };
                            i.ue = 21;
                            i.Qe = 22;
                            i.Pe = 23;
                            i.zf = 24;
                            i.uf = 25;
                            i.se = 26;
                            i.ze = 27;
                            i.Re = 28;
                            i.yf = 202;
                            i.Oe = 203;
                            i.Ce = 206;
                            i.De = 207;
                            i.Se = 208;
                            i.zd = 209;
                            var o = {
                                pc: 1
                            };
                            var t = function(a, g, h) {
                                    var c = this;
                                    n.call(c);
                                    var r, q, d, f, i;
                                    b.r(a);
                                    b.u(a);

                                    function l(a) {
                                        c.n(o.pc, a, e)
                                    }

                                    function p(c) {
                                        b.H(a, c || !h.Cb && d == 0);
                                        b.H(g, c || !h.Cb && d >= q - h.m);
                                        r = c
                                    }
                                    c.Bc = function(b, a, c) {
                                        if (c) d = a;
                                        else {
                                            d = b;
                                            p(r)
                                        }
                                    };
                                    c.sc = p;
                                    var m;
                                    c.jc = function(c) {
                                        q = c;
                                        d = 0;
                                        if (!m) {
                                            b.g(a, "click", b.R(j, l, -i));
                                            b.g(g, "click", b.R(j, l, i));
                                            b.fc(a);
                                            b.fc(g);
                                            m = e
                                        }
                                    };
                                    c.Vb = f = b.G({
                                        Ae: 1
                                    }, h);
                                    i = f.Ae;
                                    if (f.Cc == k) {
                                        b.L(a, "noscale", e);
                                        b.L(g, "noscale", e)
                                    }
                                    if (f.Kb) {
                                        b.L(a, "autocenter", f.Kb);
                                        b.L(g, "autocenter", f.Kb)
                                    }
                                },
                                q = function(g, B) {
                                    var h = this,
                                        z, p, a, v = [],
                                        x, w, d, q, r, u, t, m, s, f, l;
                                    n.call(h);
                                    g = b.Ab(g);

                                    function A(n, f) {
                                        var g = this,
                                            c, m, k;

                                        function q() {
                                            m.de(p == f)
                                        }

                                        function i(e) {
                                            if (e || !s.Ee()) {
                                                var a = d - f % d,
                                                    b = s.ed((f + a) / d - 1),
                                                    c = b * d + d - a;
                                                h.n(o.pc, c)
                                            }
                                        }
                                        g.qb = f;
                                        g.cd = q;
                                        k = n.ne || n.Zb || b.rb();
                                        g.Nb = c = b.Wd(l, "thumbnailtemplate", k, e);
                                        m = b.fc(c);
                                        a.oc & 1 && b.g(c, "click", b.R(j, i, 0));
                                        a.oc & 2 && b.g(c, "mouseover", b.gc(b.R(j, i, 1), c))
                                    }
                                    h.Bc = function(b, e, f) {
                                        var a = p;
                                        p = b;
                                        a != -1 && v[a].cd();
                                        v[b].cd();
                                        !f && s.Me(s.ed(c.floor(e / d)))
                                    };
                                    h.sc = function(a) {
                                        b.H(g, a)
                                    };
                                    var y;
                                    h.jc = function(D, C) {
                                        if (!y) {
                                            z = D;
                                            c.ceil(z / d);
                                            p = -1;
                                            m = c.min(m, C.length);
                                            var h = a.Ib & 1,
                                                n = u + (u + q) * (d - 1) * (1 - h),
                                                l = t + (t + r) * (d - 1) * h,
                                                B = n + (n + q) * (m - 1) * h,
                                                o = l + (l + r) * (m - 1) * (1 - h);
                                            b.B(f, "absolute");
                                            b.mb(f, "hidden");
                                            a.Kb & 1 && b.P(f, (x - B) / 2);
                                            a.Kb & 2 && b.O(f, (w - o) / 2);
                                            b.r(f, B);
                                            b.u(f, o);
                                            var j = [];
                                            b.j(C, function(l, g) {
                                                var i = new A(l, g),
                                                    e = i.Nb,
                                                    a = c.floor(g / d),
                                                    k = g % d;
                                                b.P(e, (u + q) * k * (1 - h));
                                                b.O(e, (t + r) * k * h);
                                                if (!j[a]) {
                                                    j[a] = b.rb();
                                                    b.N(f, j[a])
                                                }
                                                b.N(j[a], e);
                                                v.push(i)
                                            });
                                            var E = b.G({
                                                ic: k,
                                                od: k,
                                                te: n,
                                                oe: l,
                                                Xc: q * h + r * (1 - h),
                                                Hd: 12,
                                                Ac: 200,
                                                md: 1,
                                                yc: a.Ib,
                                                Nc: a.Ff || a.Cf ? 0 : a.Ib
                                            }, a);
                                            s = new i(g, E);
                                            y = e
                                        }
                                    };
                                    h.Vb = a = b.G({
                                        lc: 0,
                                        nc: 0,
                                        m: 1,
                                        Ib: 1,
                                        Kb: 3,
                                        oc: 1
                                    }, B);
                                    x = b.r(g);
                                    w = b.u(g);
                                    f = b.E(g, "slides", e);
                                    l = b.E(f, "prototype");
                                    u = b.r(l);
                                    t = b.u(l);
                                    b.Xb(l, f);
                                    d = a.U || 1;
                                    q = a.lc;
                                    r = a.nc;
                                    m = a.m;
                                    a.Cc == k && b.L(g, "noscale", e)
                                };

                            function r(e, d, c) {
                                var a = this;
                                m.call(a, 0, c);
                                a.Yc = b.dd;
                                a.Dd = 0;
                                a.Ed = c
                            }
                            jssor_1_slider_init = function() {
                                var h = [{
                                        o: 1200,
                                        c: 1,
                                        l: {
                                            c: d.q,
                                            e: d.Rb
                                        },
                                        e: 2
                                    }, {
                                        o: 1e3,
                                        c: 11,
                                        K: e,
                                        l: {
                                            c: d.s,
                                            e: d.C
                                        },
                                        e: 2
                                    }, {
                                        o: 1200,
                                        c: 1,
                                        a: 1,
                                        Bb: {
                                            c: [.2, .8],
                                            a: [.2, .8]
                                        },
                                        l: {
                                            c: d.W,
                                            e: d.C,
                                            a: d.W
                                        },
                                        e: 2,
                                        A: {
                                            a: .5
                                        }
                                    }, {
                                        o: 1e3,
                                        c: 11,
                                        a: 1,
                                        K: e,
                                        l: {
                                            c: d.s,
                                            e: d.C,
                                            a: d.s
                                        },
                                        e: 2,
                                        A: {
                                            a: .8
                                        }
                                    }, {
                                        o: 1200,
                                        x: .5,
                                        m: 2,
                                        c: 1,
                                        Y: {
                                            vb: 15
                                        },
                                        l: {
                                            f: d.q,
                                            c: d.q,
                                            e: d.C
                                        },
                                        e: 2
                                    }, {
                                        o: 1200,
                                        x: 4,
                                        m: 2,
                                        c: 11,
                                        K: e,
                                        Y: {
                                            vb: 15
                                        },
                                        l: {
                                            f: d.s,
                                            c: d.s,
                                            e: d.C
                                        },
                                        e: 2
                                    }, {
                                        o: 1200,
                                        x: .6,
                                        c: 1,
                                        a: 1,
                                        Bb: {
                                            f: [.2, .8],
                                            c: [.2, .8],
                                            a: [.2, .8]
                                        },
                                        l: {
                                            f: d.W,
                                            c: d.W,
                                            e: d.C,
                                            a: d.W
                                        },
                                        e: 2,
                                        A: {
                                            a: .5
                                        }
                                    }, {
                                        o: 1e3,
                                        x: -4,
                                        c: 11,
                                        a: 1,
                                        K: e,
                                        l: {
                                            f: d.s,
                                            c: d.s,
                                            e: d.C,
                                            a: d.s
                                        },
                                        e: 2,
                                        A: {
                                            a: .8
                                        }
                                    }, {
                                        o: 1200,
                                        x: -.6,
                                        c: 1,
                                        a: 1,
                                        Bb: {
                                            f: [.2, .8],
                                            c: [.2, .8],
                                            a: [.2, .8]
                                        },
                                        l: {
                                            f: d.W,
                                            c: d.W,
                                            e: d.C,
                                            a: d.W
                                        },
                                        e: 2,
                                        A: {
                                            a: .5
                                        }
                                    }, {
                                        o: 1e3,
                                        x: 4,
                                        c: 11,
                                        a: 1,
                                        K: e,
                                        l: {
                                            f: d.s,
                                            c: d.s,
                                            e: d.C,
                                            a: d.s
                                        },
                                        e: 2,
                                        A: {
                                            a: .8
                                        }
                                    }, {
                                        o: 1200,
                                        x: .5,
                                        y: .3,
                                        m: 2,
                                        c: 1,
                                        a: 1,
                                        Y: {
                                            vb: 15
                                        },
                                        l: {
                                            f: d.q,
                                            k: d.q,
                                            c: d.q,
                                            e: d.Rb,
                                            a: d.q
                                        },
                                        e: 2,
                                        A: {
                                            a: .7
                                        }
                                    }, {
                                        o: 1e3,
                                        x: .5,
                                        y: .3,
                                        m: 2,
                                        c: 1,
                                        a: 1,
                                        K: e,
                                        Y: {
                                            vb: 15
                                        },
                                        l: {
                                            f: d.s,
                                            k: d.s,
                                            c: d.s,
                                            e: d.C,
                                            a: d.s
                                        },
                                        e: 2,
                                        A: {
                                            a: .7
                                        }
                                    }, {
                                        o: 1200,
                                        x: -4,
                                        y: 2,
                                        U: 2,
                                        c: 11,
                                        a: 1,
                                        Y: {
                                            Zc: 28
                                        },
                                        l: {
                                            f: d.q,
                                            k: d.q,
                                            c: d.q,
                                            e: d.Rb,
                                            a: d.q
                                        },
                                        e: 2,
                                        A: {
                                            a: .7
                                        }
                                    }, {
                                        o: 1200,
                                        x: 1,
                                        y: 2,
                                        m: 2,
                                        c: 11,
                                        a: 1,
                                        Y: {
                                            vb: 19
                                        },
                                        l: {
                                            f: d.q,
                                            k: d.q,
                                            c: d.q,
                                            e: d.Rb,
                                            a: d.q
                                        },
                                        e: 2,
                                        A: {
                                            a: .8
                                        }
                                    }],
                                    j = {
                                        ic: e,
                                        Je: {
                                            S: s,
                                            Gb: h,
                                            ie: 1
                                        },
                                        Le: {
                                            S: t
                                        },
                                        Ne: {
                                            S: q,
                                            U: 2,
                                            m: 6,
                                            lc: 14,
                                            nc: 12,
                                            Ib: 2,
                                            vc: 156
                                        }
                                    },
                                    f = new i("jssor_1", j);

                                function a() {
                                    var b = f.ub.parentNode.clientWidth;
                                    if (b) {
                                        b = c.min(b, 960);
                                        b = c.max(b, 300);
                                        f.Fe(b)
                                    } else g.setTimeout(a, 30)
                                }
                                a();
                                b.g(g, "load", a);
                                b.g(g, "resize", a);
                                b.g(g, "orientationchange", a)
                            }
                        })(window, document, Math, null, true, false)
                    </script>
                    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                        <!-- Loading Screen -->
                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block;background:url('static/plan/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
                            <div data-p="150.00"> <img data-u="image" src="<?php echo site_url().'static/plan/images/inicio-1.jpg'?>" alt="inicio" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/nuevo_concepto.jpg'?>" alt="nuevo_concepto" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/bitcoin-2.jpg'?>" alt="bitcoin" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/bitcoin-3-historias.jpg'?>" alt="historia btc" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/bitcoin-empresas5.jpg'?>" alt="empresas que usan btc" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/bancos6.jpg'?>" alt="bancos que usan btc" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/el_oro.jpg'?>" alt="oro" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/el_oro_importancia.jpg'?>" alt="importancia del oro" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/bitcoin-que_es7.jpg'?>" alt="que es bitshare" /> </div>
                            <!--<div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php // echo site_url().'static/plan/images/silene_rolando.jpg'?>" alt="dueños" /> </div>-->
                            <!--<div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php// echo site_url().'static/plan/images/carlos_gomez.jpg'?>" alt="dueños" /> </div>-->
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/bitcoin-como_funciona8.jpg'?>" alt="como funciona" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/bitcoin-como_cuentas9.jpg'?>" alt="cuentas" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/bitcoin-rendimiento_diario10.jpg'?>" alt="usufructo diario" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/bitcoin-directo12.jpg'?>" alt="pago por directo" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/bitcoin-rendimiento_renovacion11.jpg'?>" alt="bono renovacion" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/bitcoin-binario13.jpg'?>" alt="bono binario" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/cobros15.jpg'?>" alt="cobros" /> </div>
                            <div data-p="150.00" style="display: none;"> <img data-u="image" src="<?php echo site_url().'static/plan/images/gracias-ultimo14.jpg'?>" alt="gracias" /> </div>
                        </div>
                        <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
                            <!-- Thumbnail Item Skin Begin -->
                            <div data-u="slides" style="cursor: default;">
                                <div data-u="prototype" class="p">
                                    <div class="w">
                                        <div data-u="thumbnailtemplate" class="t"></div>
                                    </div>
                                    <div class="c"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!-- Arrow Navigator --><span data-u="arrowleft" class="jssora05l" style="top:0px;left:248px;width:40px;height:40px;" data-autocenter="2"></span> <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span> </div>
                    <script type="text/javascript">
                        jssor_1_slider_init();
                    </script>
                </div>
            </section>
            <!-- END Products-->
            <section class="well-md text-center">
                <!--<div class="container wow fadeInUp">-->
                <div class="container wow fadeInUp">
                    <ul class="index-list row">
                        <li class="col-md-4">
                            <div class="box">
                                <div class="box__body"> <img style="margin-left:60px" src="<?php echo site_url().'static/plan/files/pdf_file.png';?>" width="150" alt="archivo pdf"><br> <a href="<?php echo site_url().'static/plan/document/presentacion-bitshares.pdf';?>" class="btn btn-primary btn-md" download="presentacion_pdf_es">Descargar Presentacion PDF</a> </div>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="box">
                                <div class="box__body"> <img style="margin-left:60px" src="<?php echo site_url().'static/plan/files/ppt-file.png';?>" width="150" alt="archivo ppt"><br> <a href="<?php echo site_url().'static/plan/document/presentacion-bitshares.pptx';?>" class="btn btn-primary btn-md" download="presentacion_ppt_es">Descargar Presentacion PPT</a> </div>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="box">
                                <div class="box__body"> <img style="margin-left:35px" src="<?php echo site_url().'static/plan/files/jpg_file.jpg';?>" width="150" alt="archivo rar"><br> <a href="<?php echo site_url().'static/plan/files/imagenes_bitshare.rar';?>" class="btn btn-primary btn-md" download="presentacion_imagenes">Descargar Imagenes</a> </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--</div>-->
            </section>
        </main>
        <!--======================================================== FOOTER ==========================================================-->
        <?php $this->load->view("footer");?>
    </div>
    <!--<LINK rel="stylesheet" href="<?php echo site_url('static/plan/css/plan.css');?>" type="text/css">-->
    <!-- Core Scripts -->
    <script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
    <!-- Additional Functionality Scripts -->
    <script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
    <!-- Login Backoffice-->
    <script src="static/page_front/js/login.js"></script>
    <!-- End Login-->
</body>
<!-- Google Tag Manager -->

</html>