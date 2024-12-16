function fb_share(e, o) {
    return u = o, t = e, window.open("http://www.facebook.com/sharer.php?u=" + encodeURIComponent(u) + "&t=" + encodeURIComponent(t), "sharer", "toolbar=0,status=0,width=626,height=436"), !1
}

function twitter_share(t) {
    return u = t, window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(u), "sharer", "toolbar=0,status=0,width=626,height=436"), !1
}

function telegram_share(e, o, x) {
    return u = o, t = e, window.open("https://t.me/share/url?url=" + encodeURIComponent(u) + "&text=" + encodeURIComponent(t) + x, "sharer", "toolbar=0,status=0,width=626,height=436"), !1
}

function whatsapp_share(e, o) {
    return u = o, t = e, window.open("https://wa.me/?text=" + encodeURIComponent(u) + " - " + encodeURIComponent(t), "sharer", "toolbar=0,status=0,width=626,height=436"), !1
}
