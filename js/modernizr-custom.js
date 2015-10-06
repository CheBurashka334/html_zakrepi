/*! modernizr 3.0.0 (Custom Build) | MIT *
 * http://modernizr.com/download/?-csstransforms-csstransforms3d-csstransitions-domprefixes-prefixes-testallprops-testprop-teststyles !*/
!function(e,n,t){function s(e,n){return typeof e===n}function r(){var e,n,t,r,o,i,a;for(var f in C){if(e=[],n=C[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(r=s(n.fn,"function")?n.fn():n.fn,o=0;o<e.length;o++)i=e[o],a=i.split("."),1===a.length?Modernizr[a[0]]=r:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=r),y.push((r?"":"no-")+a.join("-"))}}function o(e){var n=b.className,t=Modernizr._config.classPrefix||"";if(P&&(n=n.baseVal),Modernizr._config.enableJSClass){var s=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(s,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),P?b.className.baseVal=n:b.className=n)}function i(e,n){return!!~(""+e).indexOf(n)}function a(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):P?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function f(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function l(){var e=n.body;return e||(e=a(P?"svg":"body"),e.fake=!0),e}function u(e,t,s,r){var o,i,f,u,p="modernizr",d=a("div"),c=l();if(parseInt(s,10))for(;s--;)f=a("div"),f.id=r?r[s]:p+(s+1),d.appendChild(f);return o=a("style"),o.type="text/css",o.id="s"+p,(c.fake?c:d).appendChild(o),c.appendChild(d),o.styleSheet?o.styleSheet.cssText=e:o.appendChild(n.createTextNode(e)),d.id=p,c.fake&&(c.style.background="",c.style.overflow="hidden",u=b.style.overflow,b.style.overflow="hidden",b.appendChild(c)),i=t(d,e),c.fake?(c.parentNode.removeChild(c),b.style.overflow=u,b.offsetHeight):d.parentNode.removeChild(d),!!i}function p(e,n){return function(){return e.apply(n,arguments)}}function d(e,n,t){var r;for(var o in e)if(e[o]in n)return t===!1?e[o]:(r=n[e[o]],s(r,"function")?p(r,t||n):r);return!1}function c(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function m(n,s){var r=n.length;if("CSS"in e&&"supports"in e.CSS){for(;r--;)if(e.CSS.supports(c(n[r]),s))return!0;return!1}if("CSSSupportsRule"in e){for(var o=[];r--;)o.push("("+c(n[r])+":"+s+")");return o=o.join(" or "),u("@supports ("+o+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function v(e,n,r,o){function l(){p&&(delete A.style,delete A.modElem)}if(o=s(o,"undefined")?!1:o,!s(r,"undefined")){var u=m(e,r);if(!s(u,"undefined"))return u}for(var p,d,c,v,g,h=["modernizr","tspan"];!A.style;)p=!0,A.modElem=a(h.shift()),A.style=A.modElem.style;for(c=e.length,d=0;c>d;d++)if(v=e[d],g=A.style[v],i(v,"-")&&(v=f(v)),A.style[v]!==t){if(o||s(r,"undefined"))return l(),"pfx"==n?v:!0;try{A.style[v]=r}catch(y){}if(A.style[v]!=g)return l(),"pfx"==n?v:!0}return l(),!1}function g(e,n,t,r,o){var i=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+E.join(i+" ")+i).split(" ");return s(n,"string")||s(n,"undefined")?v(a,n,r,o):(a=(e+" "+_.join(i+" ")+i).split(" "),d(a,n,t))}function h(e,n,s){return g(e,t,t,n,s)}var y=[],C=[],S={_version:"3.0.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){C.push({name:e,fn:n,options:t})},addAsyncTest:function(e){C.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=S,Modernizr=new Modernizr;var x=S._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):[];S._prefixes=x;var w="Moz O ms Webkit",_=S._config.usePrefixes?w.toLowerCase().split(" "):[];S._domPrefixes=_;var b=n.documentElement,P="svg"===b.nodeName.toLowerCase(),z="CSS"in e&&"supports"in e.CSS,T="supportsCSS"in e;Modernizr.addTest("supports",z||T);var E=S._config.usePrefixes?w.split(" "):[];S._cssomPrefixes=E;var k=S.testStyles=u,N={elem:a("modernizr")};Modernizr._q.push(function(){delete N.elem});var A={style:N.elem.style};Modernizr._q.unshift(function(){delete A.style});S.testProp=function(e,n,s){return v([e],t,n,s)};S.testAllProps=g,S.testAllProps=h,Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&h("transform","scale(1)",!0)}),Modernizr.addTest("csstransforms3d",function(){var e=!!h("perspective","1px",!0),n=Modernizr._config.usePrefixes;if(e&&(!n||"webkitPerspective"in b.style)){var t;Modernizr.supports?t="@supports (perspective: 1px)":(t="@media (transform-3d)",n&&(t+=",(-webkit-transform-3d)")),t+="{#modernizr{left:9px;position:absolute;height:5px;margin:0;padding:0;border:0}}",k(t,function(n){e=9===n.offsetLeft&&5===n.offsetHeight})}return e}),Modernizr.addTest("csstransitions",h("transition","all",!0)),r(),o(y),delete S.addTest,delete S.addAsyncTest;for(var j=0;j<Modernizr._q.length;j++)Modernizr._q[j]();e.Modernizr=Modernizr}(window,document);