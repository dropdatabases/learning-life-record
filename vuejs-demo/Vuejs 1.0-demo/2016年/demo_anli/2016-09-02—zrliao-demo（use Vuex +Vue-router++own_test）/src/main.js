import Vue from 'vue'
import App from './App'
import VueResource from 'vue-resource'
import VueRouter from 'vue-router'

import ConfigRouter from './router'

Vue.use(VueResource) 
Vue.use(VueRouter)

const router = new VueRouter({
  history:true   //这个是路由配置参数
})

//配置路由
ConfigRouter(router)

// 滚动到页面顶部 
router.beforeEach(function() { 
	window.scrollTo(0, 0) 
})

router.afterEach(function (transition) {
    // console.log(transition);
});

// router.redirect方法用于为路由器定义全局的重定向规则，全局的重定向会在匹配当前路径之前执行。

//全路径匹配，防止出现404
router.redirect({ '*': '/' })

//启动APP
router.start(App, '#app')
 
 
