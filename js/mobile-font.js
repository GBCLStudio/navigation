'use strict';
(function (doc, win) {
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function () {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            docEl.style.fontSize = clientWidth / 2640 * 1 + "rem";
        };
    // 不支持addEventListener,返回
    if (!doc.addEventListener) return;
    // 监听事件，获取当前html标签的字体大小
    win.addEventListener(resizeEvt, recalc, false);
    // dom内容加在完成事件
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);