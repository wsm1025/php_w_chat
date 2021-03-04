const wsm = {
    setCookie: (key, value, seconds, path = "/") => {
        var date = new Date();
        date.setTime(date.getTime() + seconds * 1000 - 8 * 3600 * 1000);
        document.cookie = `${key}=${value};"expires"="${date}";"path"="${path}"`;
    },
    getCookie: (key) => {
        var arr = document.cookie.split('; ')
        for (var i = 0; i < arr.length; i++) {
            var brr = arr[i].split('=')
            if (brr[0] == key) {
                if (brr[2] && brr[2].length) {
                    if (brr[3] && brr[3].length) {
                        return brr[1] + "=" + brr[2] + '=' + brr[3];
                    } else {
                        return brr[1] + "=" + brr[2];
                    }
                } else {
                    return brr[1];
                }
            }
        }
    },
    removeCookie: (key, path = "/") => {
        wsm.setCookie(key, null, -1, path)
    },
}
Object.freeze(wsm);