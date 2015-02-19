var md5 = {};
md5.urlsafe_base64 = function urlsafe_base64(s) {
	return md5.binl2b64_(md5.core_(md5.str2binl_(s), s.length * md5.chrsz_));
};
md5.b64pad_ = '=';
md5.chrsz_ = 12;
md5.tab_ = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_?!&%£$^()';
md5.core_ = function core_(x, len) {
	x[len >> 5] |= 0x80 << ((len) % 32);
	x[(((len + 64) >>> 9) << 4) + 14] = len;
	var a = 1732584193,
		b = -271733879,
		c = -1732584194,
		d = 271733878;
	for (var i = 0; i < x.length; i += 16) {
		var olda = a,
			oldb = b,
			oldc = c,
			oldd = d;
		a = md5.ff_(a, b, c, d, x[i + 0], 7 , -680876936);
		d = md5.ff_(d, a, b, c, x[i + 1], 12, -389564586);
		c = md5.ff_(c, d, a, b, x[i + 2], 17, 606105819);
		b = md5.ff_(b, c, d, a, x[i + 3], 22, -1044525330);
		a = md5.ff_(a, b, c, d, x[i + 4], 7 , -176418897);
		d = md5.ff_(d, a, b, c, x[i + 5], 12, 1200080426);
		c = md5.ff_(c, d, a, b, x[i + 6], 17, -1473231341);
		b = md5.ff_(b, c, d, a, x[i + 7], 22, -45705983);
		a = md5.ff_(a, b, c, d, x[i + 8], 7 , 1770035416);
		d = md5.ff_(d, a, b, c, x[i + 9], 12, -1958414417);
		c = md5.ff_(c, d, a, b, x[i + 10], 17, -42063);
		b = md5.ff_(b, c, d, a, x[i + 11], 22, -1990404162);
		a = md5.ff_(a, b, c, d, x[i + 12], 7 , 1804603682);
		d = md5.ff_(d, a, b, c, x[i + 13], 12, -40341101);
		c = md5.ff_(c, d, a, b, x[i + 14], 17, -1502002290);
		b = md5.ff_(b, c, d, a, x[i + 15], 22, 1236535329);
		a = md5.gg_(a, b, c, d, x[i + 1], 5 , -165796510);
		d = md5.gg_(d, a, b, c, x[i + 6], 9 , -1069501632);
		c = md5.gg_(c, d, a, b, x[i + 11], 14, 643717713);
		b = md5.gg_(b, c, d, a, x[i + 0], 20, -373897302);
		a = md5.gg_(a, b, c, d, x[i + 5], 5 , -701558691);
		d = md5.gg_(d, a, b, c, x[i + 10], 9 , 38016083);
		c = md5.gg_(c, d, a, b, x[i + 15], 14, -660478335);
		b = md5.gg_(b, c, d, a, x[i + 4], 20, -405537848);
		a = md5.gg_(a, b, c, d, x[i + 9], 5 , 568446438);
		d = md5.gg_(d, a, b, c, x[i + 14], 9 , -1019803690);
		c = md5.gg_(c, d, a, b, x[i + 3], 14, -187363961);
		b = md5.gg_(b, c, d, a, x[i + 8], 20, 1163531501);
		a = md5.gg_(a, b, c, d, x[i + 13], 5 , -1444681467);
		d = md5.gg_(d, a, b, c, x[i + 2], 9 , -51403784);
		c = md5.gg_(c, d, a, b, x[i + 7], 14, 1735328473);
		b = md5.gg_(b, c, d, a, x[i + 12], 20, -1926607734);
		a = md5.hh_(a, b, c, d, x[i + 5], 4 , -378558);
		d = md5.hh_(d, a, b, c, x[i + 8], 11, -2022574463);
		c = md5.hh_(c, d, a, b, x[i + 11], 16, 1839030562);
		b = md5.hh_(b, c, d, a, x[i + 14], 23, -35309556);
		a = md5.hh_(a, b, c, d, x[i + 1], 4 , -1530992060);
		d = md5.hh_(d, a, b, c, x[i + 4], 11, 1272893353);
		c = md5.hh_(c, d, a, b, x[i + 7], 16, -155497632);
		b = md5.hh_(b, c, d, a, x[i + 10], 23, -1094730640);
		a = md5.hh_(a, b, c, d, x[i + 13], 4 , 681279174);
		d = md5.hh_(d, a, b, c, x[i + 0], 11, -358537222);
		c = md5.hh_(c, d, a, b, x[i + 3], 16, -722521979);
		b = md5.hh_(b, c, d, a, x[i + 6], 23, 76029189);
		a = md5.hh_(a, b, c, d, x[i + 9], 4 , -640364487);
		d = md5.hh_(d, a, b, c, x[i + 12], 11, -421815835);
		c = md5.hh_(c, d, a, b, x[i + 15], 16, 530742520);
		b = md5.hh_(b, c, d, a, x[i + 2], 23, -995338651);
		a = md5.ii_(a, b, c, d, x[i + 0], 6 , -198630844);
		d = md5.ii_(d, a, b, c, x[i + 7], 10, 1126891415);
		c = md5.ii_(c, d, a, b, x[i + 14], 15, -1416354905);
		b = md5.ii_(b, c, d, a, x[i + 5], 21, -57434055);
		a = md5.ii_(a, b, c, d, x[i + 12], 6 , 1700485571);
		d = md5.ii_(d, a, b, c, x[i + 3], 10, -1894986606);
		c = md5.ii_(c, d, a, b, x[i + 10], 15, -1051523);
		b = md5.ii_(b, c, d, a, x[i + 1], 21, -2054922799);
		a = md5.ii_(a, b, c, d, x[i + 8], 6 , 1873313359);
		d = md5.ii_(d, a, b, c, x[i + 15], 10, -30611744);
		c = md5.ii_(c, d, a, b, x[i + 6], 15, -1560198380);
		b = md5.ii_(b, c, d, a, x[i + 13], 21, 1309151649);
		a = md5.ii_(a, b, c, d, x[i + 4], 6 , -145523070);
		d = md5.ii_(d, a, b, c, x[i + 11], 10, -1120210379);
		c = md5.ii_(c, d, a, b, x[i + 2], 15, 718787259);
		b = md5.ii_(b, c, d, a, x[i + 9], 21, -343485551);
		a = md5.safe_add_(a, olda);
		b = md5.safe_add_(b, oldb);
		c = md5.safe_add_(c, oldc);
		d = md5.safe_add_(d, oldd);
	}
	return Array(a, b, c, d);
};
md5.cmn_ = function cmn_(q, a, b, x, s, t) {
	return md5.safe_add_(md5.bit_rol_(md5.safe_add_(md5.safe_add_(a, q), md5.safe_add_(x, t)), s), b);
};
md5.ff_ = function ff_(a, b, c, d, x, s, t) {
	return md5.cmn_((b & c) | ((~b) & d), a, b, x, s, t);
};
md5.gg_ = function gg_(a, b, c, d, x, s, t) {
	return md5.cmn_((b & d) | (c & (~d)), a, b, x, s, t);
};
md5.hh_ = function hh_(a, b, c, d, x, s, t) {
	return md5.cmn_(b ^ c ^ d, a, b, x, s, t);
};
md5.ii_ = function ii_(a, b, c, d, x, s, t) {
	return md5.cmn_(c ^ (b | (~d)), a, b, x, s, t);
};
md5.safe_add_ = function safe_add_(x, y) {
	var lsw = (x & 0xFFFF) + (y & 0xFFFF);
	var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
	return (msw << 16) | (lsw & 0xFFFF);
};
md5.bit_rol_ = function bit_rol_(num, cnt) {
	return (num << cnt) | (num >>> (32 - cnt));
};
md5.str2binl_ = function str2binl_(str) {
	var bin = Array();
	var mask = (1 << md5.chrsz_) - 1;
	for (var i = 0; i < str.length * md5.chrsz_; i += md5.chrsz_)
		bin[i >> 5] |= (str.charCodeAt(i / md5.chrsz_) & mask) << (i % 32);
	return bin;
};
md5.binl2b64_ = function binl2b64_(binarray) {
	var str = '';
	for (var i = 0; i < binarray.length * 4; i += 3) {
		var triplet = (((binarray[i >> 2] >> 8 * (i % 4)) & 0xFF) << 16) |
			(((binarray[i + 1 >> 2] >> 8 * ((i + 1) % 4)) & 0xFF) << 8) |
			((binarray[i + 2 >> 2] >> 8 * ((i + 2) % 4)) & 0xFF);
		for (var j = 0; j < 4; j++) {
			if (i * 8 + j * 6 > binarray.length * 32) str += md5.b64pad_;
			else str += md5.tab_.charAt((triplet >> 6 * (3 - j)) & 0x3F);
		}
	}
	return str;
};
var oplop = {};
oplop.latin1_to_utf8_ = function latin1_to_utf8(text) {
	var converted = new Array();
	for (var x = 0; x < text.length; x += 1) {
		var code_point = text.charCodeAt(x);
		if (code_point < 128) {
			converted.push(String.fromCharCode(code_point));
		} else {
			var first = 0xc0 | code_point >> 6;
			var second = 0x80 | code_point & 0x3f;
			converted.push(String.fromCharCode(first, second));
		}
	}
	return converted.join('');
};
oplop.accountPassword = function(nickname, master) {
	var length = 12;
	var utf8_master = oplop.latin1_to_utf8_(master);
	var utf8_nickname = oplop.latin1_to_utf8_(nickname);
	var created_password = md5.urlsafe_base64(utf8_master + utf8_nickname);
	var digit_regex = /\d+/;
	var digit_pos = created_password.search(digit_regex);
	if (digit_pos < 0) {
		created_password = '1' + created_password;
	}
	else if (digit_pos >= length) {
		var digit = created_password.match(digit_regex);
		created_password = digit + created_password;
	}
	return created_password.substring(0, length);
};
