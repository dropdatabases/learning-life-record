/*

*  b.js

*  创建一个名为“b”的模块，同时使用依赖require、exports和名为“a”的模块：

*/
// 假若这个依赖还需要其他依赖的写法 （如还需要 a.js这个依赖）
define('b', ['require', 'exports', 'a'], function(require, exports, a) {
    exports.test = function() {
        return {

            now: a.getTime()

        };

    }

});

// 假若这个依赖不需要其他依赖的写法 ，只是涉及到  b.js 这个 自身依赖 的写法

// define([], function () {
//     return b = {
//         test: function(){
//            alert(111)
//            return 1111
//         }
//     }
// });	

 