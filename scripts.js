/**
 * Created by josh on 11/24/16.
 */
function onLoad() {
    var href = window.location.href;
    if(!href.includes("mobile")) {
        var w = window.innerWidth;
        var h = window.innerHeight;
        if(href.includes("?")) {
            const regex = /\?.+/g;
            href = href.replace(regex, '');
            var mobile;
            if(w < h) {
                mobile = true;
            } else {
                mobile = false;
            }
            href = href + "?mobile=" + mobile + "&w=" + w + "&h=" + h;
            window.location.href = href;
        } else {
            var mobile;
            if(w < h) {
                mobile = true;
            } else {
                mobile = false;
            }
            href = href + "?mobile=" + mobile + "&w=" + w + "&h=" + h;
            window.location.href = href;
        }
    }
}