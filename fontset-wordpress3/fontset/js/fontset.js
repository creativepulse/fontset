
/**
 * FontSet
 *
 * @version 1.3
 * @author Creative Pulse
 * @copyright Creative Pulse 2009-2014
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @link http://www.creativepulse.gr
 */


function wdg_fontset_cookie_set(nam, val) {
	document.cookie = nam  + "=" + encodeURIComponent(val);
}

function wdg_fontset_cookie_get(nam) {
	if (typeof nam == "undefined") {
		return false;
	}

	var result = "", nam = " " + nam + "=", len = nam.length;
	var cookies = document.cookie.split(";");
	for (var k in cookies) if (cookies.hasOwnProperty(k)) {
		var cookie = (cookies[k].substr(0,1) != " " ? " " : "") + cookies[k];
		if (cookie.substr(0, len) == nam) {
			return unescape(cookie.substr(len));
		}
	}
	return false;
}

function wdg_fontset_cookie_del(nam) {
	document.cookie = nam + "=stub;expires=" + new Date("January 1, 1970").toGMTString();
}

function wdg_fontset_size_set(increment) {
	var size = parseInt(wdg_fontset_cookie_get(document.wdg_fontset_cookie_name));
	if (isNaN(size)) {
		wdg_fontset_size_reset();
	}
	else {
		size += increment;
		document.body.style.fontSize = size + "px";
		wdg_fontset_cookie_set(document.wdg_fontset_cookie_name, size);
	}
}

function wdg_fontset_size_reset() {
	document.body.style.fontSize = document.wdg_fontset_base_size + "px";
	wdg_fontset_cookie_set(document.wdg_fontset_cookie_name, document.wdg_fontset_base_size);
}

function wdg_fontset_init() {
	var size = parseInt(wdg_fontset_cookie_get(document.wdg_fontset_cookie_name));
	if (isNaN(size)) {
		wdg_fontset_size_reset();
	}
	else {
		document.body.style.fontSize = size + "px";
	}
}

if (window.addEventListener) {
	window.addEventListener("load", wdg_fontset_init, false);
}
else if (window.attachEvent) {
	window.attachEvent("onload", wdg_fontset_init);
}