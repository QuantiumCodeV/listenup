/*! jQuery v3.6.0 | (c) OpenJS Foundation and other contributors | jquery.org/license */
!function(e,t){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=e.document?t(e,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return t(e)}:t(e)}("undefined"!=typeof window?window:this,function(C,e){"use strict";var t=[],r=Object.getPrototypeOf,s=t.slice,g=t.flat?function(e){return t.flat.call(e)}:function(e){return t.concat.apply([],e)},u=t.push,i=t.indexOf,n={},o=n.toString,v=n.hasOwnProperty,a=v.toString,l=a.call(Object),y={},m=function(e){return"function"==typeof e&&"number"!=typeof e.nodeType&&"function"!=typeof e.item},x=function(e){return null!=e&&e===e.window},E=C.document,c={type:!0,src:!0,nonce:!0,noModule:!0};function b(e,t,n){var r,i,o=(n=n||E).createElement("script");if(o.text=e,t)for(r in c)(i=t[r]||t.getAttribute&&t.getAttribute(r))&&o.setAttribute(r,i);n.head.appendChild(o).parentNode.removeChild(o)}function w(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?n[o.call(e)]||"object":typeof e}var f="3.6.0",S=function(e,t){return new S.fn.init(e,t)};function p(e){var t=!!e&&"length"in e&&e.length,n=w(e);return!m(e)&&!x(e)&&("array"===n||0===t||"number"==typeof t&&0<t&&t-1 in e)}S.fn=S.prototype={jquery:f,constructor:S,length:0,toArray:function(){return s.call(this)},get:function(e){return null==e?s.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=S.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return S.each(this,e)},map:function(n){return this.pushStack(S.map(this,function(e,t){return n.call(e,t,e)}))},slice:function(){return this.pushStack(s.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},even:function(){return this.pushStack(S.grep(this,function(e,t){return(t+1)%2}))},odd:function(){return this.pushStack(S.grep(this,function(e,t){return t%2}))},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(0<=n&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:u,sort:t.sort,splice:t.splice},S.extend=S.fn.extend=function(){var e,t,n,r,i,o,a=arguments[0]||{},s=1,u=arguments.length,l=!1;for("boolean"==typeof a&&(l=a,a=arguments[s]||{},s++),"object"==typeof a||m(a)||(a={}),s===u&&(a=this,s--);s<u;s++)if(null!=(e=arguments[s]))for(t in e)r=e[t],"__proto__"!==t&&a!==r&&(l&&r&&(S.isPlainObject(r)||(i=Array.isArray(r)))?(n=a[t],o=i&&!Array.isArray(n)?[]:i||S.isPlainObject(n)?n:{},i=!1,a[t]=S.extend(l,o,r)):void 0!==r&&(a[t]=r));return a},S.extend({expando:"jQuery"+(f+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==o.call(e))&&(!(t=r(e))||"function"==typeof(n=v.call(t,"constructor")&&t.constructor)&&a.call(n)===l)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e,t,n){b(e,{nonce:t&&t.nonce},n)},each:function(e,t){var n,r=0;if(p(e)){for(n=e.length;r<n;r++)if(!1===t.call(e[r],r,e[r]))break}else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},makeArray:function(e,t){var n=t||[];return null!=e&&(p(Object(e))?S.merge(n,"string"==typeof e?[e]:e):u.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:i.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r=[],i=0,o=e.length,a=!n;i<o;i++)!t(e[i],i)!==a&&r.push(e[i]);return r},map:function(e,t,n){var r,i,o=0,a=[];if(p(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&a.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&a.push(i);return g(a)},guid:1,support:y}),"function"==typeof Symbol&&(S.fn[Symbol.iterator]=t[Symbol.iterator]),S.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){n["[object "+t+"]"]=t.toLowerCase()});var d=function(n){var e,d,b,o,i,h,f,g,w,u,l,T,C,a,E,v,s,c,y,S="sizzle"+1*new Date,p=n.document,k=0,r=0,m=ue(),x=ue(),A=ue(),N=ue(),j=function(e,t){return e===t&&(l=!0),0},D={}.hasOwnProperty,t=[],q=t.pop,L=t.push,H=t.push,O=t.slice,P=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},R="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",I="(?:\\\\[\\da-fA-F]{1,6}"+M+"?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",W="\\["+M+"*("+I+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+I+"))|)"+M+"*\\]",F=":("+I+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+W+")*)|.*)\\)|)",B=new RegExp(M+"+","g"),$=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),_=new RegExp("^"+M+"*,"+M+"*"),z=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),U=new RegExp(M+"|>"),X=new RegExp(F),V=new RegExp("^"+I+"$"),G={ID:new RegExp("^#("+I+")"),CLASS:new RegExp("^\\.("+I+")"),TAG:new RegExp("^("+I+"|[*])"),ATTR:new RegExp("^"+W),PSEUDO:new RegExp("^"+F),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+R+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},Y=/HTML$/i,Q=/^(?:input|select|textarea|button)$/i,J=/^h\d$/i,K=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ee=/[+~]/,te=new RegExp("\\\\[\\da-fA-F]{1,6}"+M+"?|\\\\([^\\r\\n\\f])","g"),ne=function(e,t){var n="0x"+e.slice(1)-65536;return t||(n<0?String.fromCharCode(n+65536):String.fromCharCode(n>>10|55296,1023&n|56320))},re=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ie=function(e,t){return t?"\0"===e?"\ufffd":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},oe=function(){T()},ae=be(function(e){return!0===e.disabled&&"fieldset"===e.nodeName.toLowerCase()},{dir:"parentNode",next:"legend"});try{H.apply(t=O.call(p.childNodes),p.childNodes),t[p.childNodes.length].nodeType}catch(e){H={apply:t.length?function(e,t){L.apply(e,O.call(t))}:function(e,t){var n=e.length,r=0;while(e[n++]=t[r++]);e.length=n-1}}}function se(t,e,n,r){var i,o,a,s,u,l,c,f=e&&e.ownerDocument,p=e?e.nodeType:9;if(n=n||[],"string"!=typeof t||!t||1!==p&&9!==p&&11!==p)return n;if(!r&&(T(e),e=e||C,E)){if(11!==p&&(u=Z.exec(t)))if(i=u[1]){if(9===p){if(!(a=e.getElementById(i)))return n;if(a.id===i)return n.push(a),n}else if(f&&(a=f.getElementById(i))&&y(e,a)&&a.id===i)return n.push(a),n}else{if(u[2])return H.apply(n,e.getElementsByTagName(t)),n;if((i=u[3])&&d.getElementsByClassName&&e.getElementsByClassName)return H.apply(n,e.getElementsByClassName(i)),n}if(d.qsa&&!N[t+" "]&&(!v||!v.test(t))&&(1!==p||"object"!==e.nodeName.toLowerCase())){if(c=t,f=e,1===p&&(U.test(t)||z.test(t))){(f=ee.test(t)&&ye(e.parentNode)||e)===e&&d.scope||((s=e.getAttribute("id"))?s=s.replace(re,ie):e.setAttribute("id",s=S)),o=(l=h(t)).length;while(o--)l[o]=(s?"#"+s:":scope")+" "+xe(l[o]);c=l.join(",")}try{return H.apply(n,f.querySelectorAll(c)),n}catch(e){N(t,!0)}finally{s===S&&e.removeAttribute("id")}}}return g(t.replace($,"$1"),e,n,r)}function ue(){var r=[];return function e(t,n){return r.push(t+" ")>b.cacheLength&&delete e[r.shift()],e[t+" "]=n}}function le(e){return e[S]=!0,e}function ce(e){var t=C.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function fe(e,t){var n=e.split("|"),r=n.length;while(r--)b.attrHandle[n[r]]=t}function pe(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)while(n=n.nextSibling)if(n===t)return-1;return e?1:-1}function de(t){return function(e){return"input"===e.nodeName.toLowerCase()&&e.type===t}}function he(n){return function(e){var t=e.nodeName.toLowerCase();return("input"===t||"button"===t)&&e.type===n}}function ge(t){return function(e){return"form"in e?e.parentNode&&!1===e.disabled?"label"in e?"label"in e.parentNode?e.parentNode.disabled===t:e.disabled===t:e.isDisabled===t||e.isDisabled!==!t&&ae(e)===t:e.disabled===t:"label"in e&&e.disabled===t}}function ve(a){return le(function(o){return o=+o,le(function(e,t){var n,r=a([],e.length,o),i=r.length;while(i--)e[n=r[i]]&&(e[n]=!(t[n]=e[n]))})})}function ye(e){return e&&"undefined"!=typeof e.getElementsByTagName&&e}for(e in d=se.support={},i=se.isXML=function(e){var t=e&&e.namespaceURI,n=e&&(e.ownerDocument||e).documentElement;return!Y.test(t||n&&n.nodeName||"HTML")},T=se.setDocument=function(e){var t,n,r=e?e.ownerDocument||e:p;return r!=C&&9===r.nodeType&&r.documentElement&&(a=(C=r).documentElement,E=!i(C),p!=C&&(n=C.defaultView)&&n.top!==n&&(n.addEventListener?n.addEventListener("unload",oe,!1):n.attachEvent&&n.attachEvent("onunload",oe)),d.scope=ce(function(e){return a.appendChild(e).appendChild(C.createElement("div")),"undefined"!=typeof e.querySelectorAll&&!e.querySelectorAll(":scope fieldset div").length}),d.attributes=ce(function(e){return e.className="i",!e.getAttribute("className")}),d.getElementsByTagName=ce(function(e){return e.appendChild(C.createComment("")),!e.getElementsByTagName("*").length}),d.getElementsByClassName=K.test(C.getElementsByClassName),d.getById=ce(function(e){return a.appendChild(e).id=S,!C.getElementsByName||!C.getElementsByName(S).length}),d.getById?(b.filter.ID=function(e){var t=e.replace(te,ne);return function(e){return e.getAttribute("id")===t}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&E){var n=t.getElementById(e);return n?[n]:[]}}):(b.filter.ID=function(e){var n=e.replace(te,ne);return function(e){var t="undefined"!=typeof e.getAttributeNode&&e.getAttributeNode("id");return t&&t.value===n}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&E){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];i=t.getElementsByName(e),r=0;while(o=i[r++])if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),b.find.TAG=d.getElementsByTagName?function(e,t){return"undefined"!=typeof t.getElementsByTagName?t.getElementsByTagName(e):d.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){while(n=o[i++])1===n.nodeType&&r.push(n);return r}return o},b.find.CLASS=d.getElementsByClassName&&function(e,t){if("undefined"!=typeof t.getElementsByClassName&&E)return t.getElementsByClassName(e)},s=[],v=[],(d.qsa=K.test(C.querySelectorAll))&&(ce(function(e){var t;a.appendChild(e).innerHTML="<a id='"+S+"'></a><select id='"+S+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&v.push("[*^$]="+M+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||v.push("\\["+M+"*(?:value|"+R+")"),e.querySelectorAll("[id~="+S+"-]").length||v.push("~="),(t=C.createElement("input")).setAttribute("name",""),e.appendChild(t),e.querySelectorAll("[name='']").length||v.push("\\["+M+"*name"+M+"*="+M+"*(?:''|\"\")"),e.querySelectorAll(":checked").length||v.push(":checked"),e.querySelectorAll("a#"+S+"+*").length||v.push(".#.+[+~]"),e.querySelectorAll("\\\f"),v.push("[\\r\\n\\f]")}),ce(function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=C.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&v.push("name"+M+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&v.push(":enabled",":disabled"),a.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&v.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),v.push(",.*:")})),(d.matchesSelector=K.test(c=a.matches||a.webkitMatchesSelector||a.mozMatchesSelector||a.oMatchesSelector||a.msMatchesSelector))&&ce(function(e){d.disconnectedMatch=c.call(e,"*"),c.call(e,"[s!='']:x"),s.push("!=",F)}),v=v.length&&new RegExp(v.join("|")),s=s.length&&new RegExp(s.join("|")),t=K.test(a.compareDocumentPosition),y=t||K.test(a.contains)?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)while(t=t.parentNode)if(t===e)return!0;return!1},j=t?function(e,t){if(e===t)return l=!0,0;var n=!e.compareDocumentPosition-!t.compareDocumentPosition;return n||(1&(n=(e.ownerDocument||e)==(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!d.sortDetached&&t.compareDocumentPosition(e)===n?e==C||e.ownerDocument==p&&y(p,e)?-1:t==C||t.ownerDocument==p&&y(p,t)?1:u?P(u,e)-P(u,t):0:4&n?-1:1)}:function(e,t){if(e===t)return l=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,a=[e],s=[t];if(!i||!o)return e==C?-1:t==C?1:i?-1:o?1:u?P(u,e)-P(u,t):0;if(i===o)return pe(e,t);n=e;while(n=n.parentNode)a.unshift(n);n=t;while(n=n.parentNode)s.unshift(n);while(a[r]===s[r])r++;return r?pe(a[r],s[r]):a[r]==p?-1:s[r]==p?1:0}),C},se.matches=function(e,t){return se(e,null,null,t)},se.matchesSelector=function(e,t){if(T(e),d.matchesSelector&&E&&!N[t+" "]&&(!s||!s.test(t))&&(!v||!v.test(t)))try{var n=c.call(e,t);if(n||d.disconnectedMatch||e.document&&11!==e.document.nodeType)return n}catch(e){N(t,!0)}return 0<se(t,C,null,[e]).length},se.contains=function(e,t){return(e.ownerDocument||e)!=C&&T(e),y(e,t)},se.attr=function(e,t){(e.ownerDocument||e)!=C&&T(e);var n=b.attrHandle[t.toLowerCase()],r=n&&D.call(b.attrHandle,t.toLowerCase())?n(e,t,!E):void 0;return void 0!==r?r:d.attributes||!E?e.getAttribute(t):(r=e.getAttributeNode(t))&&r.specified?r.value:null},se.escape=function(e){return(e+"").replace(re,ie)},se.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},se.uniqueSort=function(e){var t,n=[],r=0,i=0;if(l=!d.detectDuplicates,u=!d.sortStable&&e.slice(0),e.sort(j),l){while(t=e[i++])t===e[i]&&(r=n.push(i));while(r--)e.splice(n[r],1)}return u=null,e},o=se.getText=function(e){var t,n="",r=0,i=e.nodeType;if(i){if(1===i||9===i||11===i){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=o(e)}else if(3===i||4===i)return e.nodeValue}else while(t=e[r++])n+=o(t);return n},(b=se.selectors={cacheLength:50,createPseudo:le,match:G,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(te,ne),e[3]=(e[3]||e[4]||e[5]||"").replace(te,ne),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||se.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&se.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return G.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&X.test(n)&&(t=h(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(te,ne).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=m[e+" "];return t||(t=new RegExp("(^|"+M+")"+e+"("+M+"|$)"))&&m(e,function(e){return t.test("string"==typeof e.className&&e.className||"undefined"!=typeof e.getAttribute&&e.getAttribute("class")||"")})},ATTR:function(n,r,i){return function(e){var t=se.attr(e,n);return null==t?"!="===r:!r||(t+="","="===r?t===i:"!="===r?t!==i:"^="===r?i&&0===t.indexOf(i):"*="===r?i&&-1<t.indexOf(i):"$="===r?i&&t.slice(-i.length)===i:"~="===r?-1<(" "+t.replace(B," ")+" ").indexOf(i):"|="===r&&(t===i||t.slice(0,i.length+1)===i+"-"))}},CHILD:function(h,e,t,g,v){var y="nth"!==h.slice(0,3),m="last"!==h.slice(-4),x="of-type"===e;return 1===g&&0===v?function(e){return!!e.parentNode}:function(e,t,n){var r,i,o,a,s,u,l=y!==m?"nextSibling":"previousSibling",c=e.parentNode,f=x&&e.nodeName.toLowerCase(),p=!n&&!x,d=!1;if(c){if(y){while(l){a=e;while(a=a[l])if(x?a.nodeName.toLowerCase()===f:1===a.nodeType)return!1;u=l="only"===h&&!u&&"nextSibling"}return!0}if(u=[m?c.firstChild:c.lastChild],m&&p){d=(s=(r=(i=(o=(a=c)[S]||(a[S]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===k&&r[1])&&r[2],a=s&&c.childNodes[s];while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if(1===a.nodeType&&++d&&a===e){i[h]=[k,s,d];break}}else if(p&&(d=s=(r=(i=(o=(a=e)[S]||(a[S]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===k&&r[1]),!1===d)while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if((x?a.nodeName.toLowerCase()===f:1===a.nodeType)&&++d&&(p&&((i=(o=a[S]||(a[S]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]=[k,d]),a===e))break;return(d-=v)===g||d%g==0&&0<=d/g}}},PSEUDO:function(e,o){var t,a=b.pseudos[e]||b.setFilters[e.toLowerCase()]||se.error("unsupported pseudo: "+e);return a[S]?a(o):1<a.length?(t=[e,e,"",o],b.setFilters.hasOwnProperty(e.toLowerCase())?le(function(e,t){var n,r=a(e,o),i=r.length;while(i--)e[n=P(e,r[i])]=!(t[n]=r[i])}):function(e){return a(e,0,t)}):a}},pseudos:{not:le(function(e){var r=[],i=[],s=f(e.replace($,"$1"));return s[S]?le(function(e,t,n,r){var i,o=s(e,null,r,[]),a=e.length;while(a--)(i=o[a])&&(e[a]=!(t[a]=i))}):function(e,t,n){return r[0]=e,s(r,null,n,i),r[0]=null,!i.pop()}}),has:le(function(t){return function(e){return 0<se(t,e).length}}),contains:le(function(t){return t=t.replace(te,ne),function(e){return-1<(e.textContent||o(e)).indexOf(t)}}),lang:le(function(n){return V.test(n||"")||se.error("unsupported lang: "+n),n=n.replace(te,ne).toLowerCase(),function(e){var t;do{if(t=E?e.lang:e.getAttribute("xml:lang")||e.getAttribute("lang"))return(t=t.toLowerCase())===n||0===t.indexOf(n+"-")}while((e=e.parentNode)&&1===e.nodeType);return!1}}),target:function(e){var t=n.location&&n.location.hash;return t&&t.slice(1)===e.id},root:function(e){return e===a},focus:function(e){return e===C.activeElement&&(!C.hasFocus||C.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:ge(!1),disabled:ge(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!b.pseudos.empty(e)},header:function(e){return J.test(e.nodeName)},input:function(e){return Q.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:ve(function(){return[0]}),last:ve(function(e,t){return[t-1]}),eq:ve(function(e,t,n){return[n<0?n+t:n]}),even:ve(function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e}),odd:ve(function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e}),lt:ve(function(e,t,n){for(var r=n<0?n+t:t<n?t:n;0<=--r;)e.push(r);return e}),gt:ve(function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e})}}).pseudos.nth=b.pseudos.eq,{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})b.pseudos[e]=de(e);for(e in{submit:!0,reset:!0})b.pseudos[e]=he(e);function me(){}function xe(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function be(s,e,t){var u=e.dir,l=e.next,c=l||u,f=t&&"parentNode"===c,p=r++;return e.first?function(e,t,n){while(e=e[u])if(1===e.nodeType||f)return s(e,t,n);return!1}:function(e,t,n){var r,i,o,a=[k,p];if(n){while(e=e[u])if((1===e.nodeType||f)&&s(e,t,n))return!0}else while(e=e[u])if(1===e.nodeType||f)if(i=(o=e[S]||(e[S]={}))[e.uniqueID]||(o[e.uniqueID]={}),l&&l===e.nodeName.toLowerCase())e=e[u]||e;else{if((r=i[c])&&r[0]===k&&r[1]===p)return a[2]=r[2];if((i[c]=a)[2]=s(e,t,n))return!0}return!1}}function we(i){return 1<i.length?function(e,t,n){var r=i.length;while(r--)if(!i[r](e,t,n))return!1;return!0}:i[0]}function Te(e,t,n,r,i){for(var o,a=[],s=0,u=e.length,l=null!=t;s<u;s++)(o=e[s])&&(n&&!n(o,r,i)||(a.push(o),l&&t.push(s)));return a}function Ce(d,h,g,v,y,e){return v&&!v[S]&&(v=Ce(v)),y&&!y[S]&&(y=Ce(y,e)),le(function(e,t,n,r){var i,o,a,s=[],u=[],l=t.length,c=e||function(e,t,n){for(var r=0,i=t.length;r<i;r++)se(e,t[r],n);return n}(h||"*",n.nodeType?[n]:n,[]),f=!d||!e&&h?c:Te(c,s,d,n,r),p=g?y||(e?d:l||v)?[]:t:f;if(g&&g(f,p,n,r),v){i=Te(p,u),v(i,[],n,r),o=i.length;while(o--)(a=i[o])&&(p[u[o]]=!(f[u[o]]=a))}if(e){if(y||d){if(y){i=[],o=p.length;while(o--)(a=p[o])&&i.push(f[o]=a);y(null,p=[],i,r)}o=p.length;while(o--)(a=p[o])&&-1<(i=y?P(e,a):s[o])&&(e[i]=!(t[i]=a))}}else p=Te(p===t?p.splice(l,p.length):p),y?y(null,t,p,r):H.apply(t,p)})}function Ee(e){for(var i,t,n,r=e.length,o=b.relative[e[0].type],a=o||b.relative[" "],s=o?1:0,u=be(function(e){return e===i},a,!0),l=be(function(e){return-1<P(i,e)},a,!0),c=[function(e,t,n){var r=!o&&(n||t!==w)||((i=t).nodeType?u(e,t,n):l(e,t,n));return i=null,r}];s<r;s++)if(t=b.relative[e[s].type])c=[be(we(c),t)];else{if((t=b.filter[e[s].type].apply(null,e[s].matches))[S]){for(n=++s;n<r;n++)if(b.relative[e[n].type])break;return Ce(1<s&&we(c),1<s&&xe(e.slice(0,s-1).concat({value:" "===e[s-2].type?"*":""})).replace($,"$1"),t,s<n&&Ee(e.slice(s,n)),n<r&&Ee(e=e.slice(n)),n<r&&xe(e))}c.push(t)}return we(c)}return me.prototype=b.filters=b.pseudos,b.setFilters=new me,h=se.tokenize=function(e,t){var n,r,i,o,a,s,u,l=x[e+" "];if(l)return t?0:l.slice(0);a=e,s=[],u=b.preFilter;while(a){for(o in n&&!(r=_.exec(a))||(r&&(a=a.slice(r[0].length)||a),s.push(i=[])),n=!1,(r=z.exec(a))&&(n=r.shift(),i.push({value:n,type:r[0].replace($," ")}),a=a.slice(n.length)),b.filter)!(r=G[o].exec(a))||u[o]&&!(r=u[o](r))||(n=r.shift(),i.push({value:n,type:o,matches:r}),a=a.slice(n.length));if(!n)break}return t?a.length:a?se.error(e):x(e,s).slice(0)},f=se.compile=function(e,t){var n,v,y,m,x,r,i=[],o=[],a=A[e+" "];if(!a){t||(t=h(e)),n=t.length;while(n--)(a=Ee(t[n]))[S]?i.push(a):o.push(a);(a=A(e,(v=o,m=0<(y=i).length,x=0<v.length,r=function(e,t,n,r,i){var o,a,s,u=0,l="0",c=e&&[],f=[],p=w,d=e||x&&b.find.TAG("*",i),h=k+=null==p?1:Math.random()||.1,g=d.length;for(i&&(w=t==C||t||i);l!==g&&null!=(o=d[l]);l++){if(x&&o){a=0,t||o.ownerDocument==C||(T(o),n=!E);while(s=v[a++])if(s(o,t||C,n)){r.push(o);break}i&&(k=h)}m&&((o=!s&&o)&&u--,e&&c.push(o))}if(u+=l,m&&l!==u){a=0;while(s=y[a++])s(c,f,t,n);if(e){if(0<u)while(l--)c[l]||f[l]||(f[l]=q.call(r));f=Te(f)}H.apply(r,f),i&&!e&&0<f.length&&1<u+y.length&&se.uniqueSort(r)}return i&&(k=h,w=p),c},m?le(r):r))).selector=e}return a},g=se.select=function(e,t,n,r){var i,o,a,s,u,l="function"==typeof e&&e,c=!r&&h(e=l.selector||e);if(n=n||[],1===c.length){if(2<(o=c[0]=c[0].slice(0)).length&&"ID"===(a=o[0]).type&&9===t.nodeType&&E&&b.relative[o[1].type]){if(!(t=(b.find.ID(a.matches[0].replace(te,ne),t)||[])[0]))return n;l&&(t=t.parentNode),e=e.slice(o.shift().value.length)}i=G.needsContext.test(e)?0:o.length;while(i--){if(a=o[i],b.relative[s=a.type])break;if((u=b.find[s])&&(r=u(a.matches[0].replace(te,ne),ee.test(o[0].type)&&ye(t.parentNode)||t))){if(o.splice(i,1),!(e=r.length&&xe(o)))return H.apply(n,r),n;break}}}return(l||f(e,c))(r,t,!E,n,!t||ee.test(e)&&ye(t.parentNode)||t),n},d.sortStable=S.split("").sort(j).join("")===S,d.detectDuplicates=!!l,T(),d.sortDetached=ce(function(e){return 1&e.compareDocumentPosition(C.createElement("fieldset"))}),ce(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||fe("type|href|height|width",function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)}),d.attributes&&ce(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||fe("value",function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue}),ce(function(e){return null==e.getAttribute("disabled")})||fe(R,function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null}),se}(C);S.find=d,S.expr=d.selectors,S.expr[":"]=S.expr.pseudos,S.uniqueSort=S.unique=d.uniqueSort,S.text=d.getText,S.isXMLDoc=d.isXML,S.contains=d.contains,S.escapeSelector=d.escape;var h=function(e,t,n){var r=[],i=void 0!==n;while((e=e[t])&&9!==e.nodeType)if(1===e.nodeType){if(i&&S(e).is(n))break;r.push(e)}return r},T=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},k=S.expr.match.needsContext;function A(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var N=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function j(e,n,r){return m(n)?S.grep(e,function(e,t){return!!n.call(e,t,e)!==r}):n.nodeType?S.grep(e,function(e){return e===n!==r}):"string"!=typeof n?S.grep(e,function(e){return-1<i.call(n,e)!==r}):S.filter(n,e,r)}S.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?S.find.matchesSelector(r,e)?[r]:[]:S.find.matches(e,S.grep(t,function(e){return 1===e.nodeType}))},S.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(S(e).filter(function(){for(t=0;t<r;t++)if(S.contains(i[t],this))return!0}));for(n=this.pushStack([]),t=0;t<r;t++)S.find(e,i[t],n);return 1<r?S.uniqueSort(n):n},filter:function(e){return this.pushStack(j(this,e||[],!1))},not:function(e){return this.pushStack(j(this,e||[],!0))},is:function(e){return!!j(this,"string"==typeof e&&k.test(e)?S(e):e||[],!1).length}});var D,q=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(S.fn.init=function(e,t,n){var r,i;if(!e)return this;if(n=n||D,"string"==typeof e){if(!(r="<"===e[0]&&">"===e[e.length-1]&&3<=e.length?[null,e,null]:q.exec(e))||!r[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(r[1]){if(t=t instanceof S?t[0]:t,S.merge(this,S.parseHTML(r[1],t&&t.nodeType?t.ownerDocument||t:E,!0)),N.test(r[1])&&S.isPlainObject(t))for(r in t)m(this[r])?this[r](t[r]):this.attr(r,t[r]);return this}return(i=E.getElementById(r[2]))&&(this[0]=i,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):m(e)?void 0!==n.ready?n.ready(e):e(S):S.makeArray(e,this)}).prototype=S.fn,D=S(E);var L=/^(?:parents|prev(?:Until|All))/,H={children:!0,contents:!0,next:!0,prev:!0};function O(e,t){while((e=e[t])&&1!==e.nodeType);return e}S.fn.extend({has:function(e){var t=S(e,this),n=t.length;return this.filter(function(){for(var e=0;e<n;e++)if(S.contains(this,t[e]))return!0})},closest:function(e,t){var n,r=0,i=this.length,o=[],a="string"!=typeof e&&S(e);if(!k.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(a?-1<a.index(n):1===n.nodeType&&S.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(1<o.length?S.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?i.call(S(e),this[0]):i.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(S.uniqueSort(S.merge(this.get(),S(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}}),S.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return h(e,"parentNode")},parentsUntil:function(e,t,n){return h(e,"parentNode",n)},next:function(e){return O(e,"nextSibling")},prev:function(e){return O(e,"previousSibling")},nextAll:function(e){return h(e,"nextSibling")},prevAll:function(e){return h(e,"previousSibling")},nextUntil:function(e,t,n){return h(e,"nextSibling",n)},prevUntil:function(e,t,n){return h(e,"previousSibling",n)},siblings:function(e){return T((e.parentNode||{}).firstChild,e)},children:function(e){return T(e.firstChild)},contents:function(e){return null!=e.contentDocument&&r(e.contentDocument)?e.contentDocument:(A(e,"template")&&(e=e.content||e),S.merge([],e.childNodes))}},function(r,i){S.fn[r]=function(e,t){var n=S.map(this,i,e);return"Until"!==r.slice(-5)&&(t=e),t&&"string"==typeof t&&(n=S.filter(t,n)),1<this.length&&(H[r]||S.uniqueSort(n),L.test(r)&&n.reverse()),this.pushStack(n)}});var P=/[^\x20\t\r\n\f]+/g;function R(e){return e}function M(e){throw e}function I(e,t,n,r){var i;try{e&&m(i=e.promise)?i.call(e).done(t).fail(n):e&&m(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}S.Callbacks=function(r){var e,n;r="string"==typeof r?(e=r,n={},S.each(e.match(P)||[],function(e,t){n[t]=!0}),n):S.extend({},r);var i,t,o,a,s=[],u=[],l=-1,c=function(){for(a=a||r.once,o=i=!0;u.length;l=-1){t=u.shift();while(++l<s.length)!1===s[l].apply(t[0],t[1])&&r.stopOnFalse&&(l=s.length,t=!1)}r.memory||(t=!1),i=!1,a&&(s=t?[]:"")},f={add:function(){return s&&(t&&!i&&(l=s.length-1,u.push(t)),function n(e){S.each(e,function(e,t){m(t)?r.unique&&f.has(t)||s.push(t):t&&t.length&&"string"!==w(t)&&n(t)})}(arguments),t&&!i&&c()),this},remove:function(){return S.each(arguments,function(e,t){var n;while(-1<(n=S.inArray(t,s,n)))s.splice(n,1),n<=l&&l--}),this},has:function(e){return e?-1<S.inArray(e,s):0<s.length},empty:function(){return s&&(s=[]),this},disable:function(){return a=u=[],s=t="",this},disabled:function(){return!s},lock:function(){return a=u=[],t||i||(s=t=""),this},locked:function(){return!!a},fireWith:function(e,t){return a||(t=[e,(t=t||[]).slice?t.slice():t],u.push(t),i||c()),this},fire:function(){return f.fireWith(this,arguments),this},fired:function(){return!!o}};return f},S.extend({Deferred:function(e){var o=[["notify","progress",S.Callbacks("memory"),S.Callbacks("memory"),2],["resolve","done",S.Callbacks("once memory"),S.Callbacks("once memory"),0,"resolved"],["reject","fail",S.Callbacks("once memory"),S.Callbacks("once memory"),1,"rejected"]],i="pending",a={state:function(){return i},always:function(){return s.done(arguments).fail(arguments),this},"catch":function(e){return a.then(null,e)},pipe:function(){var i=arguments;return S.Deferred(function(r){S.each(o,function(e,t){var n=m(i[t[4]])&&i[t[4]];s[t[1]](function(){var e=n&&n.apply(this,arguments);e&&m(e.promise)?e.promise().progress(r.notify).done(r.resolve).fail(r.reject):r[t[0]+"With"](this,n?[e]:arguments)})}),i=null}).promise()},then:function(t,n,r){var u=0;function l(i,o,a,s){return function(){var n=this,r=arguments,e=function(){var e,t;if(!(i<u)){if((e=a.apply(n,r))===o.promise())throw new TypeError("Thenable self-resolution");t=e&&("object"==typeof e||"function"==typeof e)&&e.then,m(t)?s?t.call(e,l(u,o,R,s),l(u,o,M,s)):(u++,t.call(e,l(u,o,R,s),l(u,o,M,s),l(u,o,R,o.notifyWith))):(a!==R&&(n=void 0,r=[e]),(s||o.resolveWith)(n,r))}},t=s?e:function(){try{e()}catch(e){S.Deferred.exceptionHook&&S.Deferred.exceptionHook(e,t.stackTrace),u<=i+1&&(a!==M&&(n=void 0,r=[e]),o.rejectWith(n,r))}};i?t():(S.Deferred.getStackHook&&(t.stackTrace=S.Deferred.getStackHook()),C.setTimeout(t))}}return S.Deferred(function(e){o[0][3].add(l(0,e,m(r)?r:R,e.notifyWith)),o[1][3].add(l(0,e,m(t)?t:R)),o[2][3].add(l(0,e,m(n)?n:M))}).promise()},promise:function(e){return null!=e?S.extend(e,a):a}},s={};return S.each(o,function(e,t){var n=t[2],r=t[5];a[t[1]]=n.add,r&&n.add(function(){i=r},o[3-e][2].disable,o[3-e][3].disable,o[0][2].lock,o[0][3].lock),n.add(t[3].fire),s[t[0]]=function(){return s[t[0]+"With"](this===s?void 0:this,arguments),this},s[t[0]+"With"]=n.fireWith}),a.promise(s),e&&e.call(s,s),s},when:function(e){var n=arguments.length,t=n,r=Array(t),i=s.call(arguments),o=S.Deferred(),a=function(t){return function(e){r[t]=this,i[t]=1<arguments.length?s.call(arguments):e,--n||o.resolveWith(r,i)}};if(n<=1&&(I(e,o.done(a(t)).resolve,o.reject,!n),"pending"===o.state()||m(i[t]&&i[t].then)))return o.then();while(t--)I(i[t],a(t),o.reject);return o.promise()}});var W=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;S.Deferred.exceptionHook=function(e,t){C.console&&C.console.warn&&e&&W.test(e.name)&&C.console.warn("jQuery.Deferred exception: "+e.message,e.stack,t)},S.readyException=function(e){C.setTimeout(function(){throw e})};var F=S.Deferred();function B(){E.removeEventListener("DOMContentLoaded",B),C.removeEventListener("load",B),S.ready()}S.fn.ready=function(e){return F.then(e)["catch"](function(e){S.readyException(e)}),this},S.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--S.readyWait:S.isReady)||(S.isReady=!0)!==e&&0<--S.readyWait||F.resolveWith(E,[S])}}),S.ready.then=F.then,"complete"===E.readyState||"loading"!==E.readyState&&!E.documentElement.doScroll?C.setTimeout(S.ready):(E.addEventListener("DOMContentLoaded",B),C.addEventListener("load",B));var $=function(e,t,n,r,i,o,a){var s=0,u=e.length,l=null==n;if("object"===w(n))for(s in i=!0,n)$(e,t,s,n[s],!0,o,a);else if(void 0!==r&&(i=!0,m(r)||(a=!0),l&&(a?(t.call(e,r),t=null):(l=t,t=function(e,t,n){return l.call(S(e),n)})),t))for(;s<u;s++)t(e[s],n,a?r:r.call(e[s],s,t(e[s],n)));return i?e:l?t.call(e):u?t(e[0],n):o},_=/^-ms-/,z=/-([a-z])/g;function U(e,t){return t.toUpperCase()}function X(e){return e.replace(_,"ms-").replace(z,U)}var V=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function G(){this.expando=S.expando+G.uid++}G.uid=1,G.prototype={cache:function(e){var t=e[this.expando];return t||(t={},V(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[X(t)]=n;else for(r in t)i[X(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][X(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(X):(t=X(t))in r?[t]:t.match(P)||[]).length;while(n--)delete r[t[n]]}(void 0===t||S.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!S.isEmptyObject(t)}};var Y=new G,Q=new G,J=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,K=/[A-Z]/g;function Z(e,t,n){var r,i;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(K,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n="true"===(i=n)||"false"!==i&&("null"===i?null:i===+i+""?+i:J.test(i)?JSON.parse(i):i)}catch(e){}Q.set(e,t,n)}else n=void 0;return n}S.extend({hasData:function(e){return Q.hasData(e)||Y.hasData(e)},data:function(e,t,n){return Q.access(e,t,n)},removeData:function(e,t){Q.remove(e,t)},_data:function(e,t,n){return Y.access(e,t,n)},_removeData:function(e,t){Y.remove(e,t)}}),S.fn.extend({data:function(n,e){var t,r,i,o=this[0],a=o&&o.attributes;if(void 0===n){if(this.length&&(i=Q.get(o),1===o.nodeType&&!Y.get(o,"hasDataAttrs"))){t=a.length;while(t--)a[t]&&0===(r=a[t].name).indexOf("data-")&&(r=X(r.slice(5)),Z(o,r,i[r]));Y.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof n?this.each(function(){Q.set(this,n)}):$(this,function(e){var t;if(o&&void 0===e)return void 0!==(t=Q.get(o,n))?t:void 0!==(t=Z(o,n))?t:void 0;this.each(function(){Q.set(this,n,e)})},null,e,1<arguments.length,null,!0)},removeData:function(e){return this.each(function(){Q.remove(this,e)})}}),S.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=Y.get(e,t),n&&(!r||Array.isArray(n)?r=Y.access(e,t,S.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=S.queue(e,t),r=n.length,i=n.shift(),o=S._queueHooks(e,t);"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,function(){S.dequeue(e,t)},o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return Y.get(e,n)||Y.access(e,n,{empty:S.Callbacks("once memory").add(function(){Y.remove(e,[t+"queue",n])})})}}),S.fn.extend({queue:function(t,n){var e=2;return"string"!=typeof t&&(n=t,t="fx",e--),arguments.length<e?S.queue(this[0],t):void 0===n?this:this.each(function(){var e=S.queue(this,t,n);S._queueHooks(this,t),"fx"===t&&"inprogress"!==e[0]&&S.dequeue(this,t)})},dequeue:function(e){return this.each(function(){S.dequeue(this,e)})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=S.Deferred(),o=this,a=this.length,s=function(){--r||i.resolveWith(o,[o])};"string"!=typeof e&&(t=e,e=void 0),e=e||"fx";while(a--)(n=Y.get(o[a],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(s));return s(),i.promise(t)}});var ee=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,te=new RegExp("^(?:([+-])=|)("+ee+")([a-z%]*)$","i"),ne=["Top","Right","Bottom","Left"],re=E.documentElement,ie=function(e){return S.contains(e.ownerDocument,e)},oe={composed:!0};re.getRootNode&&(ie=function(e){return S.contains(e.ownerDocument,e)||e.getRootNode(oe)===e.ownerDocument});var ae=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&ie(e)&&"none"===S.css(e,"display")};function se(e,t,n,r){var i,o,a=20,s=r?function(){return r.cur()}:function(){return S.css(e,t,"")},u=s(),l=n&&n[3]||(S.cssNumber[t]?"":"px"),c=e.nodeType&&(S.cssNumber[t]||"px"!==l&&+u)&&te.exec(S.css(e,t));if(c&&c[3]!==l){u/=2,l=l||c[3],c=+u||1;while(a--)S.style(e,t,c+l),(1-o)*(1-(o=s()/u||.5))<=0&&(a=0),c/=o;c*=2,S.style(e,t,c+l),n=n||[]}return n&&(c=+c||+u||0,i=n[1]?c+(n[1]+1)*n[2]:+n[2],r&&(r.unit=l,r.start=c,r.end=i)),i}var ue={};function le(e,t){for(var n,r,i,o,a,s,u,l=[],c=0,f=e.length;c<f;c++)(r=e[c]).style&&(n=r.style.display,t?("none"===n&&(l[c]=Y.get(r,"display")||null,l[c]||(r.style.display="")),""===r.style.display&&ae(r)&&(l[c]=(u=a=o=void 0,a=(i=r).ownerDocument,s=i.nodeName,(u=ue[s])||(o=a.body.appendChild(a.createElement(s)),u=S.css(o,"display"),o.parentNode.removeChild(o),"none"===u&&(u="block"),ue[s]=u)))):"none"!==n&&(l[c]="none",Y.set(r,"display",n)));for(c=0;c<f;c++)null!=l[c]&&(e[c].style.display=l[c]);return e}S.fn.extend({show:function(){return le(this,!0)},hide:function(){return le(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){ae(this)?S(this).show():S(this).hide()})}});var ce,fe,pe=/^(?:checkbox|radio)$/i,de=/<([a-z][^\/\0>\x20\t\r\n\f]*)/i,he=/^$|^module$|\/(?:java|ecma)script/i;ce=E.createDocumentFragment().appendChild(E.createElement("div")),(fe=E.createElement("input")).setAttribute("type","radio"),fe.setAttribute("checked","checked"),fe.setAttribute("name","t"),ce.appendChild(fe),y.checkClone=ce.cloneNode(!0).cloneNode(!0).lastChild.checked,ce.innerHTML="<textarea>x</textarea>",y.noCloneChecked=!!ce.cloneNode(!0).lastChild.defaultValue,ce.innerHTML="<option></option>",y.option=!!ce.lastChild;var ge={thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};function ve(e,t){var n;return n="undefined"!=typeof e.getElementsByTagName?e.getElementsByTagName(t||"*"):"undefined"!=typeof e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&A(e,t)?S.merge([e],n):n}function ye(e,t){for(var n=0,r=e.length;n<r;n++)Y.set(e[n],"globalEval",!t||Y.get(t[n],"globalEval"))}ge.tbody=ge.tfoot=ge.colgroup=ge.caption=ge.thead,ge.th=ge.td,y.option||(ge.optgroup=ge.option=[1,"<select multiple='multiple'>","</select>"]);var me=/<|&#?\w+;/;function xe(e,t,n,r,i){for(var o,a,s,u,l,c,f=t.createDocumentFragment(),p=[],d=0,h=e.length;d<h;d++)if((o=e[d])||0===o)if("object"===w(o))S.merge(p,o.nodeType?[o]:o);else if(me.test(o)){a=a||f.appendChild(t.createElement("div")),s=(de.exec(o)||["",""])[1].toLowerCase(),u=ge[s]||ge._default,a.innerHTML=u[1]+S.htmlPrefilter(o)+u[2],c=u[0];while(c--)a=a.lastChild;S.merge(p,a.childNodes),(a=f.firstChild).textContent=""}else p.push(t.createTextNode(o));f.textContent="",d=0;while(o=p[d++])if(r&&-1<S.inArray(o,r))i&&i.push(o);else if(l=ie(o),a=ve(f.appendChild(o),"script"),l&&ye(a),n){c=0;while(o=a[c++])he.test(o.type||"")&&n.push(o)}return f}var be=/^([^.]*)(?:\.(.+)|)/;function we(){return!0}function Te(){return!1}function Ce(e,t){return e===function(){try{return E.activeElement}catch(e){}}()==("focus"===t)}function Ee(e,t,n,r,i,o){var a,s;if("object"==typeof t){for(s in"string"!=typeof n&&(r=r||n,n=void 0),t)Ee(e,s,n,r,t[s],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=Te;else if(!i)return e;return 1===o&&(a=i,(i=function(e){return S().off(e),a.apply(this,arguments)}).guid=a.guid||(a.guid=S.guid++)),e.each(function(){S.event.add(this,t,i,r,n)})}function Se(e,i,o){o?(Y.set(e,i,!1),S.event.add(e,i,{namespace:!1,handler:function(e){var t,n,r=Y.get(this,i);if(1&e.isTrigger&&this[i]){if(r.length)(S.event.special[i]||{}).delegateType&&e.stopPropagation();else if(r=s.call(arguments),Y.set(this,i,r),t=o(this,i),this[i](),r!==(n=Y.get(this,i))||t?Y.set(this,i,!1):n={},r!==n)return e.stopImmediatePropagation(),e.preventDefault(),n&&n.value}else r.length&&(Y.set(this,i,{value:S.event.trigger(S.extend(r[0],S.Event.prototype),r.slice(1),this)}),e.stopImmediatePropagation())}})):void 0===Y.get(e,i)&&S.event.add(e,i,we)}S.event={global:{},add:function(t,e,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,v=Y.get(t);if(V(t)){n.handler&&(n=(o=n).handler,i=o.selector),i&&S.find.matchesSelector(re,i),n.guid||(n.guid=S.guid++),(u=v.events)||(u=v.events=Object.create(null)),(a=v.handle)||(a=v.handle=function(e){return"undefined"!=typeof S&&S.event.triggered!==e.type?S.event.dispatch.apply(t,arguments):void 0}),l=(e=(e||"").match(P)||[""]).length;while(l--)d=g=(s=be.exec(e[l])||[])[1],h=(s[2]||"").split(".").sort(),d&&(f=S.event.special[d]||{},d=(i?f.delegateType:f.bindType)||d,f=S.event.special[d]||{},c=S.extend({type:d,origType:g,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&S.expr.match.needsContext.test(i),namespace:h.join(".")},o),(p=u[d])||((p=u[d]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(t,r,h,a)||t.addEventListener&&t.addEventListener(d,a)),f.add&&(f.add.call(t,c),c.handler.guid||(c.handler.guid=n.guid)),i?p.splice(p.delegateCount++,0,c):p.push(c),S.event.global[d]=!0)}},remove:function(e,t,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,v=Y.hasData(e)&&Y.get(e);if(v&&(u=v.events)){l=(t=(t||"").match(P)||[""]).length;while(l--)if(d=g=(s=be.exec(t[l])||[])[1],h=(s[2]||"").split(".").sort(),d){f=S.event.special[d]||{},p=u[d=(r?f.delegateType:f.bindType)||d]||[],s=s[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),a=o=p.length;while(o--)c=p[o],!i&&g!==c.origType||n&&n.guid!==c.guid||s&&!s.test(c.namespace)||r&&r!==c.selector&&("**"!==r||!c.selector)||(p.splice(o,1),c.selector&&p.delegateCount--,f.remove&&f.remove.call(e,c));a&&!p.length&&(f.teardown&&!1!==f.teardown.call(e,h,v.handle)||S.removeEvent(e,d,v.handle),delete u[d])}else for(d in u)S.event.remove(e,d+t[l],n,r,!0);S.isEmptyObject(u)&&Y.remove(e,"handle events")}},dispatch:function(e){var t,n,r,i,o,a,s=new Array(arguments.length),u=S.event.fix(e),l=(Y.get(this,"events")||Object.create(null))[u.type]||[],c=S.event.special[u.type]||{};for(s[0]=u,t=1;t<arguments.length;t++)s[t]=arguments[t];if(u.delegateTarget=this,!c.preDispatch||!1!==c.preDispatch.call(this,u)){a=S.event.handlers.call(this,u,l),t=0;while((i=a[t++])&&!u.isPropagationStopped()){u.currentTarget=i.elem,n=0;while((o=i.handlers[n++])&&!u.isImmediatePropagationStopped())u.rnamespace&&!1!==o.namespace&&!u.rnamespace.test(o.namespace)||(u.handleObj=o,u.data=o.data,void 0!==(r=((S.event.special[o.origType]||{}).handle||o.handler).apply(i.elem,s))&&!1===(u.result=r)&&(u.preventDefault(),u.stopPropagation()))}return c.postDispatch&&c.postDispatch.call(this,u),u.result}},handlers:function(e,t){var n,r,i,o,a,s=[],u=t.delegateCount,l=e.target;if(u&&l.nodeType&&!("click"===e.type&&1<=e.button))for(;l!==this;l=l.parentNode||this)if(1===l.nodeType&&("click"!==e.type||!0!==l.disabled)){for(o=[],a={},n=0;n<u;n++)void 0===a[i=(r=t[n]).selector+" "]&&(a[i]=r.needsContext?-1<S(i,this).index(l):S.find(i,this,null,[l]).length),a[i]&&o.push(r);o.length&&s.push({elem:l,handlers:o})}return l=this,u<t.length&&s.push({elem:l,handlers:t.slice(u)}),s},addProp:function(t,e){Object.defineProperty(S.Event.prototype,t,{enumerable:!0,configurable:!0,get:m(e)?function(){if(this.originalEvent)return e(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[t]},set:function(e){Object.defineProperty(this,t,{enumerable:!0,configurable:!0,writable:!0,value:e})}})},fix:function(e){return e[S.expando]?e:new S.Event(e)},special:{load:{noBubble:!0},click:{setup:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&Se(t,"click",we),!1},trigger:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&Se(t,"click"),!0},_default:function(e){var t=e.target;return pe.test(t.type)&&t.click&&A(t,"input")&&Y.get(t,"click")||A(t,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},S.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},S.Event=function(e,t){if(!(this instanceof S.Event))return new S.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?we:Te,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&S.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[S.expando]=!0},S.Event.prototype={constructor:S.Event,isDefaultPrevented:Te,isPropagationStopped:Te,isImmediatePropagationStopped:Te,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=we,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=we,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=we,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},S.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,"char":!0,code:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:!0},S.event.addProp),S.each({focus:"focusin",blur:"focusout"},function(e,t){S.event.special[e]={setup:function(){return Se(this,e,Ce),!1},trigger:function(){return Se(this,e),!0},_default:function(){return!0},delegateType:t}}),S.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(e,i){S.event.special[e]={delegateType:i,bindType:i,handle:function(e){var t,n=e.relatedTarget,r=e.handleObj;return n&&(n===this||S.contains(this,n))||(e.type=r.origType,t=r.handler.apply(this,arguments),e.type=i),t}}}),S.fn.extend({on:function(e,t,n,r){return Ee(this,e,t,n,r)},one:function(e,t,n,r){return Ee(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,S(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=Te),this.each(function(){S.event.remove(this,e,n,t)})}});var ke=/<script|<style|<link/i,Ae=/checked\s*(?:[^=]|=\s*.checked.)/i,Ne=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function je(e,t){return A(e,"table")&&A(11!==t.nodeType?t:t.firstChild,"tr")&&S(e).children("tbody")[0]||e}function De(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function qe(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Le(e,t){var n,r,i,o,a,s;if(1===t.nodeType){if(Y.hasData(e)&&(s=Y.get(e).events))for(i in Y.remove(t,"handle events"),s)for(n=0,r=s[i].length;n<r;n++)S.event.add(t,i,s[i][n]);Q.hasData(e)&&(o=Q.access(e),a=S.extend({},o),Q.set(t,a))}}function He(n,r,i,o){r=g(r);var e,t,a,s,u,l,c=0,f=n.length,p=f-1,d=r[0],h=m(d);if(h||1<f&&"string"==typeof d&&!y.checkClone&&Ae.test(d))return n.each(function(e){var t=n.eq(e);h&&(r[0]=d.call(this,e,t.html())),He(t,r,i,o)});if(f&&(t=(e=xe(r,n[0].ownerDocument,!1,n,o)).firstChild,1===e.childNodes.length&&(e=t),t||o)){for(s=(a=S.map(ve(e,"script"),De)).length;c<f;c++)u=e,c!==p&&(u=S.clone(u,!0,!0),s&&S.merge(a,ve(u,"script"))),i.call(n[c],u,c);if(s)for(l=a[a.length-1].ownerDocument,S.map(a,qe),c=0;c<s;c++)u=a[c],he.test(u.type||"")&&!Y.access(u,"globalEval")&&S.contains(l,u)&&(u.src&&"module"!==(u.type||"").toLowerCase()?S._evalUrl&&!u.noModule&&S._evalUrl(u.src,{nonce:u.nonce||u.getAttribute("nonce")},l):b(u.textContent.replace(Ne,""),u,l))}return n}function Oe(e,t,n){for(var r,i=t?S.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||S.cleanData(ve(r)),r.parentNode&&(n&&ie(r)&&ye(ve(r,"script")),r.parentNode.removeChild(r));return e}S.extend({htmlPrefilter:function(e){return e},clone:function(e,t,n){var r,i,o,a,s,u,l,c=e.cloneNode(!0),f=ie(e);if(!(y.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||S.isXMLDoc(e)))for(a=ve(c),r=0,i=(o=ve(e)).length;r<i;r++)s=o[r],u=a[r],void 0,"input"===(l=u.nodeName.toLowerCase())&&pe.test(s.type)?u.checked=s.checked:"input"!==l&&"textarea"!==l||(u.defaultValue=s.defaultValue);if(t)if(n)for(o=o||ve(e),a=a||ve(c),r=0,i=o.length;r<i;r++)Le(o[r],a[r]);else Le(e,c);return 0<(a=ve(c,"script")).length&&ye(a,!f&&ve(e,"script")),c},cleanData:function(e){for(var t,n,r,i=S.event.special,o=0;void 0!==(n=e[o]);o++)if(V(n)){if(t=n[Y.expando]){if(t.events)for(r in t.events)i[r]?S.event.remove(n,r):S.removeEvent(n,r,t.handle);n[Y.expando]=void 0}n[Q.expando]&&(n[Q.expando]=void 0)}}}),S.fn.extend({detach:function(e){return Oe(this,e,!0)},remove:function(e){return Oe(this,e)},text:function(e){return $(this,function(e){return void 0===e?S.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)})},null,e,arguments.length)},append:function(){return He(this,arguments,function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||je(this,e).appendChild(e)})},prepend:function(){return He(this,arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=je(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return He(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return He(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(S.cleanData(ve(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map(function(){return S.clone(this,e,t)})},html:function(e){return $(this,function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!ke.test(e)&&!ge[(de.exec(e)||["",""])[1].toLowerCase()]){e=S.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(S.cleanData(ve(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var n=[];return He(this,arguments,function(e){var t=this.parentNode;S.inArray(this,n)<0&&(S.cleanData(ve(this)),t&&t.replaceChild(e,this))},n)}}),S.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,a){S.fn[e]=function(e){for(var t,n=[],r=S(e),i=r.length-1,o=0;o<=i;o++)t=o===i?this:this.clone(!0),S(r[o])[a](t),u.apply(n,t.get());return this.pushStack(n)}});var Pe=new RegExp("^("+ee+")(?!px)[a-z%]+$","i"),Re=function(e){var t=e.ownerDocument.defaultView;return t&&t.opener||(t=C),t.getComputedStyle(e)},Me=function(e,t,n){var r,i,o={};for(i in t)o[i]=e.style[i],e.style[i]=t[i];for(i in r=n.call(e),t)e.style[i]=o[i];return r},Ie=new RegExp(ne.join("|"),"i");function We(e,t,n){var r,i,o,a,s=e.style;return(n=n||Re(e))&&(""!==(a=n.getPropertyValue(t)||n[t])||ie(e)||(a=S.style(e,t)),!y.pixelBoxStyles()&&Pe.test(a)&&Ie.test(t)&&(r=s.width,i=s.minWidth,o=s.maxWidth,s.minWidth=s.maxWidth=s.width=a,a=n.width,s.width=r,s.minWidth=i,s.maxWidth=o)),void 0!==a?a+"":a}function Fe(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}!function(){function e(){if(l){u.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",l.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",re.appendChild(u).appendChild(l);var e=C.getComputedStyle(l);n="1%"!==e.top,s=12===t(e.marginLeft),l.style.right="60%",o=36===t(e.right),r=36===t(e.width),l.style.position="absolute",i=12===t(l.offsetWidth/3),re.removeChild(u),l=null}}function t(e){return Math.round(parseFloat(e))}var n,r,i,o,a,s,u=E.createElement("div"),l=E.createElement("div");l.style&&(l.style.backgroundClip="content-box",l.cloneNode(!0).style.backgroundClip="",y.clearCloneStyle="content-box"===l.style.backgroundClip,S.extend(y,{boxSizingReliable:function(){return e(),r},pixelBoxStyles:function(){return e(),o},pixelPosition:function(){return e(),n},reliableMarginLeft:function(){return e(),s},scrollboxSize:function(){return e(),i},reliableTrDimensions:function(){var e,t,n,r;return null==a&&(e=E.createElement("table"),t=E.createElement("tr"),n=E.createElement("div"),e.style.cssText="position:absolute;left:-11111px;border-collapse:separate",t.style.cssText="border:1px solid",t.style.height="1px",n.style.height="9px",n.style.display="block",re.appendChild(e).appendChild(t).appendChild(n),r=C.getComputedStyle(t),a=parseInt(r.height,10)+parseInt(r.borderTopWidth,10)+parseInt(r.borderBottomWidth,10)===t.offsetHeight,re.removeChild(e)),a}}))}();var Be=["Webkit","Moz","ms"],$e=E.createElement("div").style,_e={};function ze(e){var t=S.cssProps[e]||_e[e];return t||(e in $e?e:_e[e]=function(e){var t=e[0].toUpperCase()+e.slice(1),n=Be.length;while(n--)if((e=Be[n]+t)in $e)return e}(e)||e)}var Ue=/^(none|table(?!-c[ea]).+)/,Xe=/^--/,Ve={position:"absolute",visibility:"hidden",display:"block"},Ge={letterSpacing:"0",fontWeight:"400"};function Ye(e,t,n){var r=te.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function Qe(e,t,n,r,i,o){var a="width"===t?1:0,s=0,u=0;if(n===(r?"border":"content"))return 0;for(;a<4;a+=2)"margin"===n&&(u+=S.css(e,n+ne[a],!0,i)),r?("content"===n&&(u-=S.css(e,"padding"+ne[a],!0,i)),"margin"!==n&&(u-=S.css(e,"border"+ne[a]+"Width",!0,i))):(u+=S.css(e,"padding"+ne[a],!0,i),"padding"!==n?u+=S.css(e,"border"+ne[a]+"Width",!0,i):s+=S.css(e,"border"+ne[a]+"Width",!0,i));return!r&&0<=o&&(u+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-u-s-.5))||0),u}function Je(e,t,n){var r=Re(e),i=(!y.boxSizingReliable()||n)&&"border-box"===S.css(e,"boxSizing",!1,r),o=i,a=We(e,t,r),s="offset"+t[0].toUpperCase()+t.slice(1);if(Pe.test(a)){if(!n)return a;a="auto"}return(!y.boxSizingReliable()&&i||!y.reliableTrDimensions()&&A(e,"tr")||"auto"===a||!parseFloat(a)&&"inline"===S.css(e,"display",!1,r))&&e.getClientRects().length&&(i="border-box"===S.css(e,"boxSizing",!1,r),(o=s in e)&&(a=e[s])),(a=parseFloat(a)||0)+Qe(e,t,n||(i?"border":"content"),o,r,a)+"px"}function Ke(e,t,n,r,i){return new Ke.prototype.init(e,t,n,r,i)}S.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=We(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,gridArea:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnStart:!0,gridRow:!0,gridRowEnd:!0,gridRowStart:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,a,s=X(t),u=Xe.test(t),l=e.style;if(u||(t=ze(s)),a=S.cssHooks[t]||S.cssHooks[s],void 0===n)return a&&"get"in a&&void 0!==(i=a.get(e,!1,r))?i:l[t];"string"===(o=typeof n)&&(i=te.exec(n))&&i[1]&&(n=se(e,t,i),o="number"),null!=n&&n==n&&("number"!==o||u||(n+=i&&i[3]||(S.cssNumber[s]?"":"px")),y.clearCloneStyle||""!==n||0!==t.indexOf("background")||(l[t]="inherit"),a&&"set"in a&&void 0===(n=a.set(e,n,r))||(u?l.setProperty(t,n):l[t]=n))}},css:function(e,t,n,r){var i,o,a,s=X(t);return Xe.test(t)||(t=ze(s)),(a=S.cssHooks[t]||S.cssHooks[s])&&"get"in a&&(i=a.get(e,!0,n)),void 0===i&&(i=We(e,t,r)),"normal"===i&&t in Ge&&(i=Ge[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),S.each(["height","width"],function(e,u){S.cssHooks[u]={get:function(e,t,n){if(t)return!Ue.test(S.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?Je(e,u,n):Me(e,Ve,function(){return Je(e,u,n)})},set:function(e,t,n){var r,i=Re(e),o=!y.scrollboxSize()&&"absolute"===i.position,a=(o||n)&&"border-box"===S.css(e,"boxSizing",!1,i),s=n?Qe(e,u,n,a,i):0;return a&&o&&(s-=Math.ceil(e["offset"+u[0].toUpperCase()+u.slice(1)]-parseFloat(i[u])-Qe(e,u,"border",!1,i)-.5)),s&&(r=te.exec(t))&&"px"!==(r[3]||"px")&&(e.style[u]=t,t=S.css(e,u)),Ye(0,t,s)}}}),S.cssHooks.marginLeft=Fe(y.reliableMarginLeft,function(e,t){if(t)return(parseFloat(We(e,"marginLeft"))||e.getBoundingClientRect().left-Me(e,{marginLeft:0},function(){return e.getBoundingClientRect().left}))+"px"}),S.each({margin:"",padding:"",border:"Width"},function(i,o){S.cssHooks[i+o]={expand:function(e){for(var t=0,n={},r="string"==typeof e?e.split(" "):[e];t<4;t++)n[i+ne[t]+o]=r[t]||r[t-2]||r[0];return n}},"margin"!==i&&(S.cssHooks[i+o].set=Ye)}),S.fn.extend({css:function(e,t){return $(this,function(e,t,n){var r,i,o={},a=0;if(Array.isArray(t)){for(r=Re(e),i=t.length;a<i;a++)o[t[a]]=S.css(e,t[a],!1,r);return o}return void 0!==n?S.style(e,t,n):S.css(e,t)},e,t,1<arguments.length)}}),((S.Tween=Ke).prototype={constructor:Ke,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||S.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(S.cssNumber[n]?"":"px")},cur:function(){var e=Ke.propHooks[this.prop];return e&&e.get?e.get(this):Ke.propHooks._default.get(this)},run:function(e){var t,n=Ke.propHooks[this.prop];return this.options.duration?this.pos=t=S.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):Ke.propHooks._default.set(this),this}}).init.prototype=Ke.prototype,(Ke.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=S.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){S.fx.step[e.prop]?S.fx.step[e.prop](e):1!==e.elem.nodeType||!S.cssHooks[e.prop]&&null==e.elem.style[ze(e.prop)]?e.elem[e.prop]=e.now:S.style(e.elem,e.prop,e.now+e.unit)}}}).scrollTop=Ke.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},S.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},S.fx=Ke.prototype.init,S.fx.step={};var Ze,et,tt,nt,rt=/^(?:toggle|show|hide)$/,it=/queueHooks$/;function ot(){et&&(!1===E.hidden&&C.requestAnimationFrame?C.requestAnimationFrame(ot):C.setTimeout(ot,S.fx.interval),S.fx.tick())}function at(){return C.setTimeout(function(){Ze=void 0}),Ze=Date.now()}function st(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=ne[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function ut(e,t,n){for(var r,i=(lt.tweeners[t]||[]).concat(lt.tweeners["*"]),o=0,a=i.length;o<a;o++)if(r=i[o].call(n,t,e))return r}function lt(o,e,t){var n,a,r=0,i=lt.prefilters.length,s=S.Deferred().always(function(){delete u.elem}),u=function(){if(a)return!1;for(var e=Ze||at(),t=Math.max(0,l.startTime+l.duration-e),n=1-(t/l.duration||0),r=0,i=l.tweens.length;r<i;r++)l.tweens[r].run(n);return s.notifyWith(o,[l,n,t]),n<1&&i?t:(i||s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l]),!1)},l=s.promise({elem:o,props:S.extend({},e),opts:S.extend(!0,{specialEasing:{},easing:S.easing._default},t),originalProperties:e,originalOptions:t,startTime:Ze||at(),duration:t.duration,tweens:[],createTween:function(e,t){var n=S.Tween(o,l.opts,e,t,l.opts.specialEasing[e]||l.opts.easing);return l.tweens.push(n),n},stop:function(e){var t=0,n=e?l.tweens.length:0;if(a)return this;for(a=!0;t<n;t++)l.tweens[t].run(1);return e?(s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l,e])):s.rejectWith(o,[l,e]),this}}),c=l.props;for(!function(e,t){var n,r,i,o,a;for(n in e)if(i=t[r=X(n)],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(a=S.cssHooks[r])&&"expand"in a)for(n in o=a.expand(o),delete e[r],o)n in e||(e[n]=o[n],t[n]=i);else t[r]=i}(c,l.opts.specialEasing);r<i;r++)if(n=lt.prefilters[r].call(l,o,c,l.opts))return m(n.stop)&&(S._queueHooks(l.elem,l.opts.queue).stop=n.stop.bind(n)),n;return S.map(c,ut,l),m(l.opts.start)&&l.opts.start.call(o,l),l.progress(l.opts.progress).done(l.opts.done,l.opts.complete).fail(l.opts.fail).always(l.opts.always),S.fx.timer(S.extend(u,{elem:o,anim:l,queue:l.opts.queue})),l}S.Animation=S.extend(lt,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return se(n.elem,e,te.exec(t),n),n}]},tweener:function(e,t){m(e)?(t=e,e=["*"]):e=e.match(P);for(var n,r=0,i=e.length;r<i;r++)n=e[r],lt.tweeners[n]=lt.tweeners[n]||[],lt.tweeners[n].unshift(t)},prefilters:[function(e,t,n){var r,i,o,a,s,u,l,c,f="width"in t||"height"in t,p=this,d={},h=e.style,g=e.nodeType&&ae(e),v=Y.get(e,"fxshow");for(r in n.queue||(null==(a=S._queueHooks(e,"fx")).unqueued&&(a.unqueued=0,s=a.empty.fire,a.empty.fire=function(){a.unqueued||s()}),a.unqueued++,p.always(function(){p.always(function(){a.unqueued--,S.queue(e,"fx").length||a.empty.fire()})})),t)if(i=t[r],rt.test(i)){if(delete t[r],o=o||"toggle"===i,i===(g?"hide":"show")){if("show"!==i||!v||void 0===v[r])continue;g=!0}d[r]=v&&v[r]||S.style(e,r)}if((u=!S.isEmptyObject(t))||!S.isEmptyObject(d))for(r in f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(l=v&&v.display)&&(l=Y.get(e,"display")),"none"===(c=S.css(e,"display"))&&(l?c=l:(le([e],!0),l=e.style.display||l,c=S.css(e,"display"),le([e]))),("inline"===c||"inline-block"===c&&null!=l)&&"none"===S.css(e,"float")&&(u||(p.done(function(){h.display=l}),null==l&&(c=h.display,l="none"===c?"":c)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",p.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),u=!1,d)u||(v?"hidden"in v&&(g=v.hidden):v=Y.access(e,"fxshow",{display:l}),o&&(v.hidden=!g),g&&le([e],!0),p.done(function(){for(r in g||le([e]),Y.remove(e,"fxshow"),d)S.style(e,r,d[r])})),u=ut(g?v[r]:0,r,p),r in v||(v[r]=u.start,g&&(u.end=u.start,u.start=0))}],prefilter:function(e,t){t?lt.prefilters.unshift(e):lt.prefilters.push(e)}}),S.speed=function(e,t,n){var r=e&&"object"==typeof e?S.extend({},e):{complete:n||!n&&t||m(e)&&e,duration:e,easing:n&&t||t&&!m(t)&&t};return S.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in S.fx.speeds?r.duration=S.fx.speeds[r.duration]:r.duration=S.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){m(r.old)&&r.old.call(this),r.queue&&S.dequeue(this,r.queue)},r},S.fn.extend({fadeTo:function(e,t,n,r){return this.filter(ae).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(t,e,n,r){var i=S.isEmptyObject(t),o=S.speed(e,n,r),a=function(){var e=lt(this,S.extend({},t),o);(i||Y.get(this,"finish"))&&e.stop(!0)};return a.finish=a,i||!1===o.queue?this.each(a):this.queue(o.queue,a)},stop:function(i,e,o){var a=function(e){var t=e.stop;delete e.stop,t(o)};return"string"!=typeof i&&(o=e,e=i,i=void 0),e&&this.queue(i||"fx",[]),this.each(function(){var e=!0,t=null!=i&&i+"queueHooks",n=S.timers,r=Y.get(this);if(t)r[t]&&r[t].stop&&a(r[t]);else for(t in r)r[t]&&r[t].stop&&it.test(t)&&a(r[t]);for(t=n.length;t--;)n[t].elem!==this||null!=i&&n[t].queue!==i||(n[t].anim.stop(o),e=!1,n.splice(t,1));!e&&o||S.dequeue(this,i)})},finish:function(a){return!1!==a&&(a=a||"fx"),this.each(function(){var e,t=Y.get(this),n=t[a+"queue"],r=t[a+"queueHooks"],i=S.timers,o=n?n.length:0;for(t.finish=!0,S.queue(this,a,[]),r&&r.stop&&r.stop.call(this,!0),e=i.length;e--;)i[e].elem===this&&i[e].queue===a&&(i[e].anim.stop(!0),i.splice(e,1));for(e=0;e<o;e++)n[e]&&n[e].finish&&n[e].finish.call(this);delete t.finish})}}),S.each(["toggle","show","hide"],function(e,r){var i=S.fn[r];S.fn[r]=function(e,t,n){return null==e||"boolean"==typeof e?i.apply(this,arguments):this.animate(st(r,!0),e,t,n)}}),S.each({slideDown:st("show"),slideUp:st("hide"),slideToggle:st("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,r){S.fn[e]=function(e,t,n){return this.animate(r,e,t,n)}}),S.timers=[],S.fx.tick=function(){var e,t=0,n=S.timers;for(Ze=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||S.fx.stop(),Ze=void 0},S.fx.timer=function(e){S.timers.push(e),S.fx.start()},S.fx.interval=13,S.fx.start=function(){et||(et=!0,ot())},S.fx.stop=function(){et=null},S.fx.speeds={slow:600,fast:200,_default:400},S.fn.delay=function(r,e){return r=S.fx&&S.fx.speeds[r]||r,e=e||"fx",this.queue(e,function(e,t){var n=C.setTimeout(e,r);t.stop=function(){C.clearTimeout(n)}})},tt=E.createElement("input"),nt=E.createElement("select").appendChild(E.createElement("option")),tt.type="checkbox",y.checkOn=""!==tt.value,y.optSelected=nt.selected,(tt=E.createElement("input")).value="t",tt.type="radio",y.radioValue="t"===tt.value;var ct,ft=S.expr.attrHandle;S.fn.extend({attr:function(e,t){return $(this,S.attr,e,t,1<arguments.length)},removeAttr:function(e){return this.each(function(){S.removeAttr(this,e)})}}),S.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return"undefined"==typeof e.getAttribute?S.prop(e,t,n):(1===o&&S.isXMLDoc(e)||(i=S.attrHooks[t.toLowerCase()]||(S.expr.match.bool.test(t)?ct:void 0)),void 0!==n?null===n?void S.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=S.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!y.radioValue&&"radio"===t&&A(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(P);if(i&&1===e.nodeType)while(n=i[r++])e.removeAttribute(n)}}),ct={set:function(e,t,n){return!1===t?S.removeAttr(e,n):e.setAttribute(n,n),n}},S.each(S.expr.match.bool.source.match(/\w+/g),function(e,t){var a=ft[t]||S.find.attr;ft[t]=function(e,t,n){var r,i,o=t.toLowerCase();return n||(i=ft[o],ft[o]=r,r=null!=a(e,t,n)?o:null,ft[o]=i),r}});var pt=/^(?:input|select|textarea|button)$/i,dt=/^(?:a|area)$/i;function ht(e){return(e.match(P)||[]).join(" ")}function gt(e){return e.getAttribute&&e.getAttribute("class")||""}function vt(e){return Array.isArray(e)?e:"string"==typeof e&&e.match(P)||[]}S.fn.extend({prop:function(e,t){return $(this,S.prop,e,t,1<arguments.length)},removeProp:function(e){return this.each(function(){delete this[S.propFix[e]||e]})}}),S.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&S.isXMLDoc(e)||(t=S.propFix[t]||t,i=S.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=S.find.attr(e,"tabindex");return t?parseInt(t,10):pt.test(e.nodeName)||dt.test(e.nodeName)&&e.href?0:-1}}},propFix:{"for":"htmlFor","class":"className"}}),y.optSelected||(S.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),S.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){S.propFix[this.toLowerCase()]=this}),S.fn.extend({addClass:function(t){var e,n,r,i,o,a,s,u=0;if(m(t))return this.each(function(e){S(this).addClass(t.call(this,e,gt(this)))});if((e=vt(t)).length)while(n=this[u++])if(i=gt(n),r=1===n.nodeType&&" "+ht(i)+" "){a=0;while(o=e[a++])r.indexOf(" "+o+" ")<0&&(r+=o+" ");i!==(s=ht(r))&&n.setAttribute("class",s)}return this},removeClass:function(t){var e,n,r,i,o,a,s,u=0;if(m(t))return this.each(function(e){S(this).removeClass(t.call(this,e,gt(this)))});if(!arguments.length)return this.attr("class","");if((e=vt(t)).length)while(n=this[u++])if(i=gt(n),r=1===n.nodeType&&" "+ht(i)+" "){a=0;while(o=e[a++])while(-1<r.indexOf(" "+o+" "))r=r.replace(" "+o+" "," ");i!==(s=ht(r))&&n.setAttribute("class",s)}return this},toggleClass:function(i,t){var o=typeof i,a="string"===o||Array.isArray(i);return"boolean"==typeof t&&a?t?this.addClass(i):this.removeClass(i):m(i)?this.each(function(e){S(this).toggleClass(i.call(this,e,gt(this),t),t)}):this.each(function(){var e,t,n,r;if(a){t=0,n=S(this),r=vt(i);while(e=r[t++])n.hasClass(e)?n.removeClass(e):n.addClass(e)}else void 0!==i&&"boolean"!==o||((e=gt(this))&&Y.set(this,"__className__",e),this.setAttribute&&this.setAttribute("class",e||!1===i?"":Y.get(this,"__className__")||""))})},hasClass:function(e){var t,n,r=0;t=" "+e+" ";while(n=this[r++])if(1===n.nodeType&&-1<(" "+ht(gt(n))+" ").indexOf(t))return!0;return!1}});var yt=/\r/g;S.fn.extend({val:function(n){var r,e,i,t=this[0];return arguments.length?(i=m(n),this.each(function(e){var t;1===this.nodeType&&(null==(t=i?n.call(this,e,S(this).val()):n)?t="":"number"==typeof t?t+="":Array.isArray(t)&&(t=S.map(t,function(e){return null==e?"":e+""})),(r=S.valHooks[this.type]||S.valHooks[this.nodeName.toLowerCase()])&&"set"in r&&void 0!==r.set(this,t,"value")||(this.value=t))})):t?(r=S.valHooks[t.type]||S.valHooks[t.nodeName.toLowerCase()])&&"get"in r&&void 0!==(e=r.get(t,"value"))?e:"string"==typeof(e=t.value)?e.replace(yt,""):null==e?"":e:void 0}}),S.extend({valHooks:{option:{get:function(e){var t=S.find.attr(e,"value");return null!=t?t:ht(S.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,a="select-one"===e.type,s=a?null:[],u=a?o+1:i.length;for(r=o<0?u:a?o:0;r<u;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!A(n.parentNode,"optgroup"))){if(t=S(n).val(),a)return t;s.push(t)}return s},set:function(e,t){var n,r,i=e.options,o=S.makeArray(t),a=i.length;while(a--)((r=i[a]).selected=-1<S.inArray(S.valHooks.option.get(r),o))&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),S.each(["radio","checkbox"],function(){S.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=-1<S.inArray(S(e).val(),t)}},y.checkOn||(S.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})}),y.focusin="onfocusin"in C;var mt=/^(?:focusinfocus|focusoutblur)$/,xt=function(e){e.stopPropagation()};S.extend(S.event,{trigger:function(e,t,n,r){var i,o,a,s,u,l,c,f,p=[n||E],d=v.call(e,"type")?e.type:e,h=v.call(e,"namespace")?e.namespace.split("."):[];if(o=f=a=n=n||E,3!==n.nodeType&&8!==n.nodeType&&!mt.test(d+S.event.triggered)&&(-1<d.indexOf(".")&&(d=(h=d.split(".")).shift(),h.sort()),u=d.indexOf(":")<0&&"on"+d,(e=e[S.expando]?e:new S.Event(d,"object"==typeof e&&e)).isTrigger=r?2:3,e.namespace=h.join("."),e.rnamespace=e.namespace?new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,e.result=void 0,e.target||(e.target=n),t=null==t?[e]:S.makeArray(t,[e]),c=S.event.special[d]||{},r||!c.trigger||!1!==c.trigger.apply(n,t))){if(!r&&!c.noBubble&&!x(n)){for(s=c.delegateType||d,mt.test(s+d)||(o=o.parentNode);o;o=o.parentNode)p.push(o),a=o;a===(n.ownerDocument||E)&&p.push(a.defaultView||a.parentWindow||C)}i=0;while((o=p[i++])&&!e.isPropagationStopped())f=o,e.type=1<i?s:c.bindType||d,(l=(Y.get(o,"events")||Object.create(null))[e.type]&&Y.get(o,"handle"))&&l.apply(o,t),(l=u&&o[u])&&l.apply&&V(o)&&(e.result=l.apply(o,t),!1===e.result&&e.preventDefault());return e.type=d,r||e.isDefaultPrevented()||c._default&&!1!==c._default.apply(p.pop(),t)||!V(n)||u&&m(n[d])&&!x(n)&&((a=n[u])&&(n[u]=null),S.event.triggered=d,e.isPropagationStopped()&&f.addEventListener(d,xt),n[d](),e.isPropagationStopped()&&f.removeEventListener(d,xt),S.event.triggered=void 0,a&&(n[u]=a)),e.result}},simulate:function(e,t,n){var r=S.extend(new S.Event,n,{type:e,isSimulated:!0});S.event.trigger(r,null,t)}}),S.fn.extend({trigger:function(e,t){return this.each(function(){S.event.trigger(e,t,this)})},triggerHandler:function(e,t){var n=this[0];if(n)return S.event.trigger(e,t,n,!0)}}),y.focusin||S.each({focus:"focusin",blur:"focusout"},function(n,r){var i=function(e){S.event.simulate(r,e.target,S.event.fix(e))};S.event.special[r]={setup:function(){var e=this.ownerDocument||this.document||this,t=Y.access(e,r);t||e.addEventListener(n,i,!0),Y.access(e,r,(t||0)+1)},teardown:function(){var e=this.ownerDocument||this.document||this,t=Y.access(e,r)-1;t?Y.access(e,r,t):(e.removeEventListener(n,i,!0),Y.remove(e,r))}}});var bt=C.location,wt={guid:Date.now()},Tt=/\?/;S.parseXML=function(e){var t,n;if(!e||"string"!=typeof e)return null;try{t=(new C.DOMParser).parseFromString(e,"text/xml")}catch(e){}return n=t&&t.getElementsByTagName("parsererror")[0],t&&!n||S.error("Invalid XML: "+(n?S.map(n.childNodes,function(e){return e.textContent}).join("\n"):e)),t};var Ct=/\[\]$/,Et=/\r?\n/g,St=/^(?:submit|button|image|reset|file)$/i,kt=/^(?:input|select|textarea|keygen)/i;function At(n,e,r,i){var t;if(Array.isArray(e))S.each(e,function(e,t){r||Ct.test(n)?i(n,t):At(n+"["+("object"==typeof t&&null!=t?e:"")+"]",t,r,i)});else if(r||"object"!==w(e))i(n,e);else for(t in e)At(n+"["+t+"]",e[t],r,i)}S.param=function(e,t){var n,r=[],i=function(e,t){var n=m(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(null==e)return"";if(Array.isArray(e)||e.jquery&&!S.isPlainObject(e))S.each(e,function(){i(this.name,this.value)});else for(n in e)At(n,e[n],t,i);return r.join("&")},S.fn.extend({serialize:function(){return S.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=S.prop(this,"elements");return e?S.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!S(this).is(":disabled")&&kt.test(this.nodeName)&&!St.test(e)&&(this.checked||!pe.test(e))}).map(function(e,t){var n=S(this).val();return null==n?null:Array.isArray(n)?S.map(n,function(e){return{name:t.name,value:e.replace(Et,"\r\n")}}):{name:t.name,value:n.replace(Et,"\r\n")}}).get()}});var Nt=/%20/g,jt=/#.*$/,Dt=/([?&])_=[^&]*/,qt=/^(.*?):[ \t]*([^\r\n]*)$/gm,Lt=/^(?:GET|HEAD)$/,Ht=/^\/\//,Ot={},Pt={},Rt="*/".concat("*"),Mt=E.createElement("a");function It(o){return function(e,t){"string"!=typeof e&&(t=e,e="*");var n,r=0,i=e.toLowerCase().match(P)||[];if(m(t))while(n=i[r++])"+"===n[0]?(n=n.slice(1)||"*",(o[n]=o[n]||[]).unshift(t)):(o[n]=o[n]||[]).push(t)}}function Wt(t,i,o,a){var s={},u=t===Pt;function l(e){var r;return s[e]=!0,S.each(t[e]||[],function(e,t){var n=t(i,o,a);return"string"!=typeof n||u||s[n]?u?!(r=n):void 0:(i.dataTypes.unshift(n),l(n),!1)}),r}return l(i.dataTypes[0])||!s["*"]&&l("*")}function Ft(e,t){var n,r,i=S.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&S.extend(!0,e,r),e}Mt.href=bt.href,S.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:bt.href,type:"GET",isLocal:/^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(bt.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Rt,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":S.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?Ft(Ft(e,S.ajaxSettings),t):Ft(S.ajaxSettings,e)},ajaxPrefilter:It(Ot),ajaxTransport:It(Pt),ajax:function(e,t){"object"==typeof e&&(t=e,e=void 0),t=t||{};var c,f,p,n,d,r,h,g,i,o,v=S.ajaxSetup({},t),y=v.context||v,m=v.context&&(y.nodeType||y.jquery)?S(y):S.event,x=S.Deferred(),b=S.Callbacks("once memory"),w=v.statusCode||{},a={},s={},u="canceled",T={readyState:0,getResponseHeader:function(e){var t;if(h){if(!n){n={};while(t=qt.exec(p))n[t[1].toLowerCase()+" "]=(n[t[1].toLowerCase()+" "]||[]).concat(t[2])}t=n[e.toLowerCase()+" "]}return null==t?null:t.join(", ")},getAllResponseHeaders:function(){return h?p:null},setRequestHeader:function(e,t){return null==h&&(e=s[e.toLowerCase()]=s[e.toLowerCase()]||e,a[e]=t),this},overrideMimeType:function(e){return null==h&&(v.mimeType=e),this},statusCode:function(e){var t;if(e)if(h)T.always(e[T.status]);else for(t in e)w[t]=[w[t],e[t]];return this},abort:function(e){var t=e||u;return c&&c.abort(t),l(0,t),this}};if(x.promise(T),v.url=((e||v.url||bt.href)+"").replace(Ht,bt.protocol+"//"),v.type=t.method||t.type||v.method||v.type,v.dataTypes=(v.dataType||"*").toLowerCase().match(P)||[""],null==v.crossDomain){r=E.createElement("a");try{r.href=v.url,r.href=r.href,v.crossDomain=Mt.protocol+"//"+Mt.host!=r.protocol+"//"+r.host}catch(e){v.crossDomain=!0}}if(v.data&&v.processData&&"string"!=typeof v.data&&(v.data=S.param(v.data,v.traditional)),Wt(Ot,v,t,T),h)return T;for(i in(g=S.event&&v.global)&&0==S.active++&&S.event.trigger("ajaxStart"),v.type=v.type.toUpperCase(),v.hasContent=!Lt.test(v.type),f=v.url.replace(jt,""),v.hasContent?v.data&&v.processData&&0===(v.contentType||"").indexOf("application/x-www-form-urlencoded")&&(v.data=v.data.replace(Nt,"+")):(o=v.url.slice(f.length),v.data&&(v.processData||"string"==typeof v.data)&&(f+=(Tt.test(f)?"&":"?")+v.data,delete v.data),!1===v.cache&&(f=f.replace(Dt,"$1"),o=(Tt.test(f)?"&":"?")+"_="+wt.guid+++o),v.url=f+o),v.ifModified&&(S.lastModified[f]&&T.setRequestHeader("If-Modified-Since",S.lastModified[f]),S.etag[f]&&T.setRequestHeader("If-None-Match",S.etag[f])),(v.data&&v.hasContent&&!1!==v.contentType||t.contentType)&&T.setRequestHeader("Content-Type",v.contentType),T.setRequestHeader("Accept",v.dataTypes[0]&&v.accepts[v.dataTypes[0]]?v.accepts[v.dataTypes[0]]+("*"!==v.dataTypes[0]?", "+Rt+"; q=0.01":""):v.accepts["*"]),v.headers)T.setRequestHeader(i,v.headers[i]);if(v.beforeSend&&(!1===v.beforeSend.call(y,T,v)||h))return T.abort();if(u="abort",b.add(v.complete),T.done(v.success),T.fail(v.error),c=Wt(Pt,v,t,T)){if(T.readyState=1,g&&m.trigger("ajaxSend",[T,v]),h)return T;v.async&&0<v.timeout&&(d=C.setTimeout(function(){T.abort("timeout")},v.timeout));try{h=!1,c.send(a,l)}catch(e){if(h)throw e;l(-1,e)}}else l(-1,"No Transport");function l(e,t,n,r){var i,o,a,s,u,l=t;h||(h=!0,d&&C.clearTimeout(d),c=void 0,p=r||"",T.readyState=0<e?4:0,i=200<=e&&e<300||304===e,n&&(s=function(e,t,n){var r,i,o,a,s=e.contents,u=e.dataTypes;while("*"===u[0])u.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in s)if(s[i]&&s[i].test(r)){u.unshift(i);break}if(u[0]in n)o=u[0];else{for(i in n){if(!u[0]||e.converters[i+" "+u[0]]){o=i;break}a||(a=i)}o=o||a}if(o)return o!==u[0]&&u.unshift(o),n[o]}(v,T,n)),!i&&-1<S.inArray("script",v.dataTypes)&&S.inArray("json",v.dataTypes)<0&&(v.converters["text script"]=function(){}),s=function(e,t,n,r){var i,o,a,s,u,l={},c=e.dataTypes.slice();if(c[1])for(a in e.converters)l[a.toLowerCase()]=e.converters[a];o=c.shift();while(o)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!u&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u=o,o=c.shift())if("*"===o)o=u;else if("*"!==u&&u!==o){if(!(a=l[u+" "+o]||l["* "+o]))for(i in l)if((s=i.split(" "))[1]===o&&(a=l[u+" "+s[0]]||l["* "+s[0]])){!0===a?a=l[i]:!0!==l[i]&&(o=s[0],c.unshift(s[1]));break}if(!0!==a)if(a&&e["throws"])t=a(t);else try{t=a(t)}catch(e){return{state:"parsererror",error:a?e:"No conversion from "+u+" to "+o}}}return{state:"success",data:t}}(v,s,T,i),i?(v.ifModified&&((u=T.getResponseHeader("Last-Modified"))&&(S.lastModified[f]=u),(u=T.getResponseHeader("etag"))&&(S.etag[f]=u)),204===e||"HEAD"===v.type?l="nocontent":304===e?l="notmodified":(l=s.state,o=s.data,i=!(a=s.error))):(a=l,!e&&l||(l="error",e<0&&(e=0))),T.status=e,T.statusText=(t||l)+"",i?x.resolveWith(y,[o,l,T]):x.rejectWith(y,[T,l,a]),T.statusCode(w),w=void 0,g&&m.trigger(i?"ajaxSuccess":"ajaxError",[T,v,i?o:a]),b.fireWith(y,[T,l]),g&&(m.trigger("ajaxComplete",[T,v]),--S.active||S.event.trigger("ajaxStop")))}return T},getJSON:function(e,t,n){return S.get(e,t,n,"json")},getScript:function(e,t){return S.get(e,void 0,t,"script")}}),S.each(["get","post"],function(e,i){S[i]=function(e,t,n,r){return m(t)&&(r=r||n,n=t,t=void 0),S.ajax(S.extend({url:e,type:i,dataType:r,data:t,success:n},S.isPlainObject(e)&&e))}}),S.ajaxPrefilter(function(e){var t;for(t in e.headers)"content-type"===t.toLowerCase()&&(e.contentType=e.headers[t]||"")}),S._evalUrl=function(e,t,n){return S.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,converters:{"text script":function(){}},dataFilter:function(e){S.globalEval(e,t,n)}})},S.fn.extend({wrapAll:function(e){var t;return this[0]&&(m(e)&&(e=e.call(this[0])),t=S(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstElementChild)e=e.firstElementChild;return e}).append(this)),this},wrapInner:function(n){return m(n)?this.each(function(e){S(this).wrapInner(n.call(this,e))}):this.each(function(){var e=S(this),t=e.contents();t.length?t.wrapAll(n):e.append(n)})},wrap:function(t){var n=m(t);return this.each(function(e){S(this).wrapAll(n?t.call(this,e):t)})},unwrap:function(e){return this.parent(e).not("body").each(function(){S(this).replaceWith(this.childNodes)}),this}}),S.expr.pseudos.hidden=function(e){return!S.expr.pseudos.visible(e)},S.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},S.ajaxSettings.xhr=function(){try{return new C.XMLHttpRequest}catch(e){}};var Bt={0:200,1223:204},$t=S.ajaxSettings.xhr();y.cors=!!$t&&"withCredentials"in $t,y.ajax=$t=!!$t,S.ajaxTransport(function(i){var o,a;if(y.cors||$t&&!i.crossDomain)return{send:function(e,t){var n,r=i.xhr();if(r.open(i.type,i.url,i.async,i.username,i.password),i.xhrFields)for(n in i.xhrFields)r[n]=i.xhrFields[n];for(n in i.mimeType&&r.overrideMimeType&&r.overrideMimeType(i.mimeType),i.crossDomain||e["X-Requested-With"]||(e["X-Requested-With"]="XMLHttpRequest"),e)r.setRequestHeader(n,e[n]);o=function(e){return function(){o&&(o=a=r.onload=r.onerror=r.onabort=r.ontimeout=r.onreadystatechange=null,"abort"===e?r.abort():"error"===e?"number"!=typeof r.status?t(0,"error"):t(r.status,r.statusText):t(Bt[r.status]||r.status,r.statusText,"text"!==(r.responseType||"text")||"string"!=typeof r.responseText?{binary:r.response}:{text:r.responseText},r.getAllResponseHeaders()))}},r.onload=o(),a=r.onerror=r.ontimeout=o("error"),void 0!==r.onabort?r.onabort=a:r.onreadystatechange=function(){4===r.readyState&&C.setTimeout(function(){o&&a()})},o=o("abort");try{r.send(i.hasContent&&i.data||null)}catch(e){if(o)throw e}},abort:function(){o&&o()}}}),S.ajaxPrefilter(function(e){e.crossDomain&&(e.contents.script=!1)}),S.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return S.globalEval(e),e}}}),S.ajaxPrefilter("script",function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")}),S.ajaxTransport("script",function(n){var r,i;if(n.crossDomain||n.scriptAttrs)return{send:function(e,t){r=S("<script>").attr(n.scriptAttrs||{}).prop({charset:n.scriptCharset,src:n.url}).on("load error",i=function(e){r.remove(),i=null,e&&t("error"===e.type?404:200,e.type)}),E.head.appendChild(r[0])},abort:function(){i&&i()}}});var _t,zt=[],Ut=/(=)\?(?=&|$)|\?\?/;S.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=zt.pop()||S.expando+"_"+wt.guid++;return this[e]=!0,e}}),S.ajaxPrefilter("json jsonp",function(e,t,n){var r,i,o,a=!1!==e.jsonp&&(Ut.test(e.url)?"url":"string"==typeof e.data&&0===(e.contentType||"").indexOf("application/x-www-form-urlencoded")&&Ut.test(e.data)&&"data");if(a||"jsonp"===e.dataTypes[0])return r=e.jsonpCallback=m(e.jsonpCallback)?e.jsonpCallback():e.jsonpCallback,a?e[a]=e[a].replace(Ut,"$1"+r):!1!==e.jsonp&&(e.url+=(Tt.test(e.url)?"&":"?")+e.jsonp+"="+r),e.converters["script json"]=function(){return o||S.error(r+" was not called"),o[0]},e.dataTypes[0]="json",i=C[r],C[r]=function(){o=arguments},n.always(function(){void 0===i?S(C).removeProp(r):C[r]=i,e[r]&&(e.jsonpCallback=t.jsonpCallback,zt.push(r)),o&&m(i)&&i(o[0]),o=i=void 0}),"script"}),y.createHTMLDocument=((_t=E.implementation.createHTMLDocument("").body).innerHTML="<form></form><form></form>",2===_t.childNodes.length),S.parseHTML=function(e,t,n){return"string"!=typeof e?[]:("boolean"==typeof t&&(n=t,t=!1),t||(y.createHTMLDocument?((r=(t=E.implementation.createHTMLDocument("")).createElement("base")).href=E.location.href,t.head.appendChild(r)):t=E),o=!n&&[],(i=N.exec(e))?[t.createElement(i[1])]:(i=xe([e],t,o),o&&o.length&&S(o).remove(),S.merge([],i.childNodes)));var r,i,o},S.fn.load=function(e,t,n){var r,i,o,a=this,s=e.indexOf(" ");return-1<s&&(r=ht(e.slice(s)),e=e.slice(0,s)),m(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),0<a.length&&S.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done(function(e){o=arguments,a.html(r?S("<div>").append(S.parseHTML(e)).find(r):e)}).always(n&&function(e,t){a.each(function(){n.apply(this,o||[e.responseText,t,e])})}),this},S.expr.pseudos.animated=function(t){return S.grep(S.timers,function(e){return t===e.elem}).length},S.offset={setOffset:function(e,t,n){var r,i,o,a,s,u,l=S.css(e,"position"),c=S(e),f={};"static"===l&&(e.style.position="relative"),s=c.offset(),o=S.css(e,"top"),u=S.css(e,"left"),("absolute"===l||"fixed"===l)&&-1<(o+u).indexOf("auto")?(a=(r=c.position()).top,i=r.left):(a=parseFloat(o)||0,i=parseFloat(u)||0),m(t)&&(t=t.call(e,n,S.extend({},s))),null!=t.top&&(f.top=t.top-s.top+a),null!=t.left&&(f.left=t.left-s.left+i),"using"in t?t.using.call(e,f):c.css(f)}},S.fn.extend({offset:function(t){if(arguments.length)return void 0===t?this:this.each(function(e){S.offset.setOffset(this,t,e)});var e,n,r=this[0];return r?r.getClientRects().length?(e=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:e.top+n.pageYOffset,left:e.left+n.pageXOffset}):{top:0,left:0}:void 0},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===S.css(r,"position"))t=r.getBoundingClientRect();else{t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;while(e&&(e===n.body||e===n.documentElement)&&"static"===S.css(e,"position"))e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=S(e).offset()).top+=S.css(e,"borderTopWidth",!0),i.left+=S.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-S.css(r,"marginTop",!0),left:t.left-i.left-S.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var e=this.offsetParent;while(e&&"static"===S.css(e,"position"))e=e.offsetParent;return e||re})}}),S.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(t,i){var o="pageYOffset"===i;S.fn[t]=function(e){return $(this,function(e,t,n){var r;if(x(e)?r=e:9===e.nodeType&&(r=e.defaultView),void 0===n)return r?r[i]:e[t];r?r.scrollTo(o?r.pageXOffset:n,o?n:r.pageYOffset):e[t]=n},t,e,arguments.length)}}),S.each(["top","left"],function(e,n){S.cssHooks[n]=Fe(y.pixelPosition,function(e,t){if(t)return t=We(e,n),Pe.test(t)?S(e).position()[n]+"px":t})}),S.each({Height:"height",Width:"width"},function(a,s){S.each({padding:"inner"+a,content:s,"":"outer"+a},function(r,o){S.fn[o]=function(e,t){var n=arguments.length&&(r||"boolean"!=typeof e),i=r||(!0===e||!0===t?"margin":"border");return $(this,function(e,t,n){var r;return x(e)?0===o.indexOf("outer")?e["inner"+a]:e.document.documentElement["client"+a]:9===e.nodeType?(r=e.documentElement,Math.max(e.body["scroll"+a],r["scroll"+a],e.body["offset"+a],r["offset"+a],r["client"+a])):void 0===n?S.css(e,t,i):S.style(e,t,n,i)},s,n?e:void 0,n)}})}),S.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){S.fn[t]=function(e){return this.on(t,e)}}),S.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)},hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),S.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(e,n){S.fn[n]=function(e,t){return 0<arguments.length?this.on(n,null,e,t):this.trigger(n)}});var Xt=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;S.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),m(e))return r=s.call(arguments,2),(i=function(){return e.apply(t||this,r.concat(s.call(arguments)))}).guid=e.guid=e.guid||S.guid++,i},S.holdReady=function(e){e?S.readyWait++:S.ready(!0)},S.isArray=Array.isArray,S.parseJSON=JSON.parse,S.nodeName=A,S.isFunction=m,S.isWindow=x,S.camelCase=X,S.type=w,S.now=Date.now,S.isNumeric=function(e){var t=S.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},S.trim=function(e){return null==e?"":(e+"").replace(Xt,"")},"function"==typeof define&&define.amd&&define("jquery",[],function(){return S});var Vt=C.jQuery,Gt=C.$;return S.noConflict=function(e){return C.$===S&&(C.$=Gt),e&&C.jQuery===S&&(C.jQuery=Vt),S},"undefined"==typeof e&&(C.jQuery=C.$=S),S});
if(typeof JSON!=="object"){JSON={}}(function(){function f(n){return n<10?"0"+n:n}if(typeof Date.prototype.toJSON!=="function"){Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null};String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(){return this.valueOf()}}var cx,escapable,gap,indent,meta,rep;function quote(string){escapable.lastIndex=0;return escapable.test(string)?'"'+string.replace(escapable,function(a){var c=meta[a];return typeof c==="string"?c:"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+string+'"'}function str(key,holder){var i,k,v,length,mind=gap,partial,value=holder[key];if(value&&typeof value==="object"&&typeof value.toJSON==="function"){value=value.toJSON(key)}if(typeof rep==="function"){value=rep.call(holder,key,value)}switch(typeof value){case"string":return quote(value);case"number":return isFinite(value)?String(value):"null";case"boolean":case"null":return String(value);case"object":if(!value){return"null"}gap+=indent;partial=[];if(Object.prototype.toString.apply(value)==="[object Array]"){length=value.length;for(i=0;i<length;i+=1){partial[i]=str(i,value)||"null"}v=partial.length===0?"[]":gap?"[\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"]":"["+partial.join(",")+"]";gap=mind;return v}if(rep&&typeof rep==="object"){length=rep.length;for(i=0;i<length;i+=1){if(typeof rep[i]==="string"){k=rep[i];v=str(k,value);if(v){partial.push(quote(k)+(gap?": ":":")+v)}}}}else{for(k in value){if(Object.prototype.hasOwnProperty.call(value,k)){v=str(k,value);if(v){partial.push(quote(k)+(gap?": ":":")+v)}}}}v=partial.length===0?"{}":gap?"{\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"}":"{"+partial.join(",")+"}";gap=mind;return v}}if(typeof JSON.stringify!=="function"){escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g;meta={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};JSON.stringify=function(value,replacer,space){var i;gap="";indent="";if(typeof space==="number"){for(i=0;i<space;i+=1){indent+=" "}}else{if(typeof space==="string"){indent=space}}rep=replacer;if(replacer&&typeof replacer!=="function"&&(typeof replacer!=="object"||typeof replacer.length!=="number")){throw new Error("JSON.stringify")}return str("",{"":value})}}if(typeof JSON.parse!=="function"){cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g;JSON.parse=function(text,reviver){var j;function walk(holder,key){var k,v,value=holder[key];if(value&&typeof value==="object"){for(k in value){if(Object.prototype.hasOwnProperty.call(value,k)){v=walk(value,k);if(v!==undefined){value[k]=v}else{delete value[k]}}}}return reviver.call(holder,key,value)}text=String(text);cx.lastIndex=0;if(cx.test(text)){text=text.replace(cx,function(a){return"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})}if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){j=eval("("+text+")");return typeof reviver==="function"?walk({"":j},""):j}throw new SyntaxError("JSON.parse")}}}());
(function(d){var f=Array.prototype.slice;var e={dict:null,load:function(a){if(this.dict!==null){d.extend(this.dict,a)}else{this.dict=a}},get:function(a){dict=this.dict;if(dict&&dict.hasOwnProperty(a)){a=dict[a]}if(arguments.length==1){return a}args=f.call(arguments);args[0]=a;return this.printf.apply(this,args)},printf:function(a,b){if(arguments.length<2){return a}b=Array.isArray(b)?b:f.call(arguments,1);return a.replace(/\{(\d+)\}/g,function(c,i,j){if(b[parseInt(i)]!==undefined){return b[parseInt(i)]}return c})}};d.i18n=e})(jQuery);
(function(a){a.caretTo=function(d,c){if(d.createTextRange){var b=d.createTextRange();b.move("character",c);b.select()}else{if(d.selectionStart!=null){d.focus();d.setSelectionRange(c,c)}}};a.caretPos=function(c){if("selection" in document){var b=c.createTextRange();try{b.setEndPoint("EndToStart",document.selection.createRange())}catch(d){return 0}return b.text.length}else{if(c.selectionStart!=null){return c.selectionStart}}};a.fn.caret=function(b,c){if(typeof(b)==="undefined"){return a.caretPos(this.get(0))}return this.queue(function(e){if(isNaN(b)){var d=a(this).val().indexOf(b);if(c===true){d+=b.length}else{if(typeof(c)!=="undefined"){d+=c}}a.caretTo(this,d)}else{a.caretTo(this,b)}e()})};a.fn.caretToStart=function(){return this.caret(0)};a.fn.caretToEnd=function(){return this.queue(function(b){a.caretTo(this,a(this).val().length);b()})}}(jQuery));
jQuery.cookie=function(b,j,m){if(typeof j!="undefined"){m=m||{};if(j===null){j="";m.expires=-1}var e="";if(m.expires&&(typeof m.expires=="number"||m.expires.toUTCString)){var f;if(typeof m.expires=="number"){f=new Date();f.setTime(f.getTime()+(m.expires*24*60*60*1000))}else{f=m.expires}e="; expires="+f.toUTCString()}var l=m.path?"; path="+(m.path):"";var g=m.domain?"; domain="+(m.domain):"";var a=m.secure?"; secure":"";document.cookie=[b,"=",encodeURIComponent(j),e,l,g,a].join("")}else{var d=null;if(document.cookie&&document.cookie!=""){var k=document.cookie.split(";");for(var h=0;h<k.length;h++){var c=k[h].trim();if(c.substring(0,b.length+1)==(b+"=")){d=decodeURIComponent(c.substring(b.length+1));break}}}return d}};

/*!
 * Bootstrap v3.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under the MIT license
 */

if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

+function ($) {
  'use strict';
  var version = $.fn.jquery.split(' ')[0].split('.')
  if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1) || (version[0] > 3)) {
    throw new Error('Bootstrap\'s JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4')
  }
}(jQuery);

/* ========================================================================
 * Bootstrap: transition.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#transitions
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // CSS TRANSITION SUPPORT (Shoutout: https://modernizr.com/)
  // ============================================================

  function transitionEnd() {
    var el = document.createElement('bootstrap')

    var transEndEventNames = {
      WebkitTransition : 'webkitTransitionEnd',
      MozTransition    : 'transitionend',
      OTransition      : 'oTransitionEnd otransitionend',
      transition       : 'transitionend'
    }

    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return { end: transEndEventNames[name] }
      }
    }

    return false // explicit for ie8 (  ._.)
  }

  // https://blog.alexmaccaw.com/css-transitions
  $.fn.emulateTransitionEnd = function (duration) {
    var called = false
    var $el = this
    $(this).one('bsTransitionEnd', function () { called = true })
    var callback = function () { if (!called) $($el).trigger($.support.transition.end) }
    setTimeout(callback, duration)
    return this
  }

  $(function () {
    $.support.transition = transitionEnd()

    if (!$.support.transition) return

    $.event.special.bsTransitionEnd = {
      bindType: $.support.transition.end,
      delegateType: $.support.transition.end,
      handle: function (e) {
        if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
      }
    }
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: alert.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#alerts
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // ALERT CLASS DEFINITION
  // ======================

  var dismiss = '[data-dismiss="alert"]'
  var Alert   = function (el) {
    $(el).on('click', dismiss, this.close)
  }

  Alert.VERSION = '3.4.1'

  Alert.TRANSITION_DURATION = 150

  Alert.prototype.close = function (e) {
    var $this    = $(this)
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    selector    = selector === '#' ? [] : selector
    var $parent = $(document).find(selector)

    if (e) e.preventDefault()

    if (!$parent.length) {
      $parent = $this.closest('.alert')
    }

    $parent.trigger(e = $.Event('close.bs.alert'))

    if (e.isDefaultPrevented()) return

    $parent.removeClass('in')

    function removeElement() {
      // detach from parent, fire event then clean up data
      $parent.detach().trigger('closed.bs.alert').remove()
    }

    $.support.transition && $parent.hasClass('fade') ?
      $parent
        .one('bsTransitionEnd', removeElement)
        .emulateTransitionEnd(Alert.TRANSITION_DURATION) :
      removeElement()
  }


  // ALERT PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.alert')

      if (!data) $this.data('bs.alert', (data = new Alert(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.alert

  $.fn.alert             = Plugin
  $.fn.alert.Constructor = Alert


  // ALERT NO CONFLICT
  // =================

  $.fn.alert.noConflict = function () {
    $.fn.alert = old
    return this
  }


  // ALERT DATA-API
  // ==============

  $(document).on('click.bs.alert.data-api', dismiss, Alert.prototype.close)

}(jQuery);

/* ========================================================================
 * Bootstrap: button.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#buttons
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // BUTTON PUBLIC CLASS DEFINITION
  // ==============================

  var Button = function (element, options) {
    this.$element  = $(element)
    this.options   = $.extend({}, Button.DEFAULTS, options)
    this.isLoading = false
  }

  Button.VERSION  = '3.4.1'

  Button.DEFAULTS = {
    loadingText: 'loading...'
  }

  Button.prototype.setState = function (state) {
    var d    = 'disabled'
    var $el  = this.$element
    var val  = $el.is('input') ? 'val' : 'html'
    var data = $el.data()

    state += 'Text'

    if (data.resetText == null) $el.data('resetText', $el[val]())

    // push to event loop to allow forms to submit
    setTimeout($.proxy(function () {
      $el[val](data[state] == null ? this.options[state] : data[state])

      if (state == 'loadingText') {
        this.isLoading = true
        $el.addClass(d).attr(d, d).prop(d, true)
      } else if (this.isLoading) {
        this.isLoading = false
        $el.removeClass(d).removeAttr(d).prop(d, false)
      }
    }, this), 0)
  }

  Button.prototype.toggle = function () {
    var changed = true
    var $parent = this.$element.closest('[data-toggle="buttons"]')

    if ($parent.length) {
      var $input = this.$element.find('input')
      if ($input.prop('type') == 'radio') {
        if ($input.prop('checked')) changed = false
        $parent.find('.active').removeClass('active')
        this.$element.addClass('active')
      } else if ($input.prop('type') == 'checkbox') {
        if (($input.prop('checked')) !== this.$element.hasClass('active')) changed = false
        this.$element.toggleClass('active')
      }
      $input.prop('checked', this.$element.hasClass('active'))
      if (changed) $input.trigger('change')
    } else {
      this.$element.attr('aria-pressed', !this.$element.hasClass('active'))
      this.$element.toggleClass('active')
    }
  }


  // BUTTON PLUGIN DEFINITION
  // ========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.button')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.button', (data = new Button(this, options)))

      if (option == 'toggle') data.toggle()
      else if (option) data.setState(option)
    })
  }

  var old = $.fn.button

  $.fn.button             = Plugin
  $.fn.button.Constructor = Button


  // BUTTON NO CONFLICT
  // ==================

  $.fn.button.noConflict = function () {
    $.fn.button = old
    return this
  }


  // BUTTON DATA-API
  // ===============

  $(document)
    .on('click.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      var $btn = $(e.target).closest('.btn')
      Plugin.call($btn, 'toggle')
      if (!($(e.target).is('input[type="radio"], input[type="checkbox"]'))) {
        // Prevent double click on radios, and the double selections (so cancellation) on checkboxes
        e.preventDefault()
        // The target component still receive the focus
        if ($btn.is('input,button')) $btn.trigger('focus')
        else $btn.find('input:visible,button:visible').first().trigger('focus')
      }
    })
    .on('focus.bs.button.data-api blur.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      $(e.target).closest('.btn').toggleClass('focus', /^focus(in)?$/.test(e.type))
    })

}(jQuery);

/* ========================================================================
 * Bootstrap: carousel.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#carousel
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // CAROUSEL CLASS DEFINITION
  // =========================

  var Carousel = function (element, options) {
    this.$element    = $(element)
    this.$indicators = this.$element.find('.carousel-indicators')
    this.options     = options
    this.paused      = null
    this.sliding     = null
    this.interval    = null
    this.$active     = null
    this.$items      = null

    this.options.keyboard && this.$element.on('keydown.bs.carousel', $.proxy(this.keydown, this))

    this.options.pause == 'hover' && !('ontouchstart' in document.documentElement) && this.$element
      .on('mouseenter.bs.carousel', $.proxy(this.pause, this))
      .on('mouseleave.bs.carousel', $.proxy(this.cycle, this))
  }

  Carousel.VERSION  = '3.4.1'

  Carousel.TRANSITION_DURATION = 600

  Carousel.DEFAULTS = {
    interval: 5000,
    pause: 'hover',
    wrap: true,
    keyboard: true
  }

  Carousel.prototype.keydown = function (e) {
    if (/input|textarea/i.test(e.target.tagName)) return
    switch (e.which) {
      case 37: this.prev(); break
      case 39: this.next(); break
      default: return
    }

    e.preventDefault()
  }

  Carousel.prototype.cycle = function (e) {
    e || (this.paused = false)

    this.interval && clearInterval(this.interval)

    this.options.interval
      && !this.paused
      && (this.interval = setInterval($.proxy(this.next, this), this.options.interval))

    return this
  }

  Carousel.prototype.getItemIndex = function (item) {
    this.$items = item.parent().children('.item')
    return this.$items.index(item || this.$active)
  }

  Carousel.prototype.getItemForDirection = function (direction, active) {
    var activeIndex = this.getItemIndex(active)
    var willWrap = (direction == 'prev' && activeIndex === 0)
                || (direction == 'next' && activeIndex == (this.$items.length - 1))
    if (willWrap && !this.options.wrap) return active
    var delta = direction == 'prev' ? -1 : 1
    var itemIndex = (activeIndex + delta) % this.$items.length
    return this.$items.eq(itemIndex)
  }

  Carousel.prototype.to = function (pos) {
    var that        = this
    var activeIndex = this.getItemIndex(this.$active = this.$element.find('.item.active'))

    if (pos > (this.$items.length - 1) || pos < 0) return

    if (this.sliding)       return this.$element.one('slid.bs.carousel', function () { that.to(pos) }) // yes, "slid"
    if (activeIndex == pos) return this.pause().cycle()

    return this.slide(pos > activeIndex ? 'next' : 'prev', this.$items.eq(pos))
  }

  Carousel.prototype.pause = function (e) {
    e || (this.paused = true)

    if (this.$element.find('.next, .prev').length && $.support.transition) {
      this.$element.trigger($.support.transition.end)
      this.cycle(true)
    }

    this.interval = clearInterval(this.interval)

    return this
  }

  Carousel.prototype.next = function () {
    if (this.sliding) return
    return this.slide('next')
  }

  Carousel.prototype.prev = function () {
    if (this.sliding) return
    return this.slide('prev')
  }

  Carousel.prototype.slide = function (type, next) {
    var $active   = this.$element.find('.item.active')
    var $next     = next || this.getItemForDirection(type, $active)
    var isCycling = this.interval
    var direction = type == 'next' ? 'left' : 'right'
    var that      = this

    if ($next.hasClass('active')) return (this.sliding = false)

    var relatedTarget = $next[0]
    var slideEvent = $.Event('slide.bs.carousel', {
      relatedTarget: relatedTarget,
      direction: direction
    })
    this.$element.trigger(slideEvent)
    if (slideEvent.isDefaultPrevented()) return

    this.sliding = true

    isCycling && this.pause()

    if (this.$indicators.length) {
      this.$indicators.find('.active').removeClass('active')
      var $nextIndicator = $(this.$indicators.children()[this.getItemIndex($next)])
      $nextIndicator && $nextIndicator.addClass('active')
    }

    var slidEvent = $.Event('slid.bs.carousel', { relatedTarget: relatedTarget, direction: direction }) // yes, "slid"
    if ($.support.transition && this.$element.hasClass('slide')) {
      $next.addClass(type)
      if (typeof $next === 'object' && $next.length) {
        $next[0].offsetWidth // force reflow
      }
      $active.addClass(direction)
      $next.addClass(direction)
      $active
        .one('bsTransitionEnd', function () {
          $next.removeClass([type, direction].join(' ')).addClass('active')
          $active.removeClass(['active', direction].join(' '))
          that.sliding = false
          setTimeout(function () {
            that.$element.trigger(slidEvent)
          }, 0)
        })
        .emulateTransitionEnd(Carousel.TRANSITION_DURATION)
    } else {
      $active.removeClass('active')
      $next.addClass('active')
      this.sliding = false
      this.$element.trigger(slidEvent)
    }

    isCycling && this.cycle()

    return this
  }


  // CAROUSEL PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.carousel')
      var options = $.extend({}, Carousel.DEFAULTS, $this.data(), typeof option == 'object' && option)
      var action  = typeof option == 'string' ? option : options.slide

      if (!data) $this.data('bs.carousel', (data = new Carousel(this, options)))
      if (typeof option == 'number') data.to(option)
      else if (action) data[action]()
      else if (options.interval) data.pause().cycle()
    })
  }

  var old = $.fn.carousel

  $.fn.carousel             = Plugin
  $.fn.carousel.Constructor = Carousel


  // CAROUSEL NO CONFLICT
  // ====================

  $.fn.carousel.noConflict = function () {
    $.fn.carousel = old
    return this
  }


  // CAROUSEL DATA-API
  // =================

  var clickHandler = function (e) {
    var $this   = $(this)
    var href    = $this.attr('href')
    if (href) {
      href = href.replace(/.*(?=#[^\s]+$)/, '') // strip for ie7
    }

    var target  = $this.attr('data-target') || href
    var $target = $(document).find(target)

    if (!$target.hasClass('carousel')) return

    var options = $.extend({}, $target.data(), $this.data())
    var slideIndex = $this.attr('data-slide-to')
    if (slideIndex) options.interval = false

    Plugin.call($target, options)

    if (slideIndex) {
      $target.data('bs.carousel').to(slideIndex)
    }

    e.preventDefault()
  }

  $(document)
    .on('click.bs.carousel.data-api', '[data-slide]', clickHandler)
    .on('click.bs.carousel.data-api', '[data-slide-to]', clickHandler)

  $(window).on('load', function () {
    $('[data-ride="carousel"]').each(function () {
      var $carousel = $(this)
      Plugin.call($carousel, $carousel.data())
    })
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: collapse.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#collapse
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

/* jshint latedef: false */

+function ($) {
  'use strict';

  // COLLAPSE PUBLIC CLASS DEFINITION
  // ================================

  var Collapse = function (element, options) {
    this.$element      = $(element)
    this.options       = $.extend({}, Collapse.DEFAULTS, options)
    this.$trigger      = $('[data-toggle="collapse"][href="#' + element.id + '"],' +
                           '[data-toggle="collapse"][data-target="#' + element.id + '"]')
    this.transitioning = null

    if (this.options.parent) {
      this.$parent = this.getParent()
    } else {
      this.addAriaAndCollapsedClass(this.$element, this.$trigger)
    }

    if (this.options.toggle) this.toggle()
  }

  Collapse.VERSION  = '3.4.1'

  Collapse.TRANSITION_DURATION = 350

  Collapse.DEFAULTS = {
    toggle: true
  }

  Collapse.prototype.dimension = function () {
    var hasWidth = this.$element.hasClass('width')
    return hasWidth ? 'width' : 'height'
  }

  Collapse.prototype.show = function () {
    if (this.transitioning || this.$element.hasClass('in')) return

    var activesData
    var actives = this.$parent && this.$parent.children('.panel').children('.in, .collapsing')

    if (actives && actives.length) {
      activesData = actives.data('bs.collapse')
      if (activesData && activesData.transitioning) return
    }

    var startEvent = $.Event('show.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    if (actives && actives.length) {
      Plugin.call(actives, 'hide')
      activesData || actives.data('bs.collapse', null)
    }

    var dimension = this.dimension()

    this.$element
      .removeClass('collapse')
      .addClass('collapsing')[dimension](0)
      .attr('aria-expanded', true)

    this.$trigger
      .removeClass('collapsed')
      .attr('aria-expanded', true)

    this.transitioning = 1

    var complete = function () {
      this.$element
        .removeClass('collapsing')
        .addClass('collapse in')[dimension]('')
      this.transitioning = 0
      this.$element
        .trigger('shown.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    var scrollSize = $.camelCase(['scroll', dimension].join('-'))

    this.$element
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)[dimension](this.$element[0][scrollSize])
  }

  Collapse.prototype.hide = function () {
    if (this.transitioning || !this.$element.hasClass('in')) return

    var startEvent = $.Event('hide.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    var dimension = this.dimension()

    this.$element[dimension](this.$element[dimension]())[0].offsetHeight

    this.$element
      .addClass('collapsing')
      .removeClass('collapse in')
      .attr('aria-expanded', false)

    this.$trigger
      .addClass('collapsed')
      .attr('aria-expanded', false)

    this.transitioning = 1

    var complete = function () {
      this.transitioning = 0
      this.$element
        .removeClass('collapsing')
        .addClass('collapse')
        .trigger('hidden.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    this.$element
      [dimension](0)
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)
  }

  Collapse.prototype.toggle = function () {
    this[this.$element.hasClass('in') ? 'hide' : 'show']()
  }

  Collapse.prototype.getParent = function () {
    return $(document).find(this.options.parent)
      .find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]')
      .each($.proxy(function (i, element) {
        var $element = $(element)
        this.addAriaAndCollapsedClass(getTargetFromTrigger($element), $element)
      }, this))
      .end()
  }

  Collapse.prototype.addAriaAndCollapsedClass = function ($element, $trigger) {
    var isOpen = $element.hasClass('in')

    $element.attr('aria-expanded', isOpen)
    $trigger
      .toggleClass('collapsed', !isOpen)
      .attr('aria-expanded', isOpen)
  }

  function getTargetFromTrigger($trigger) {
    var href
    var target = $trigger.attr('data-target')
      || (href = $trigger.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') // strip for ie7

    return $(document).find(target)
  }


  // COLLAPSE PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.collapse')
      var options = $.extend({}, Collapse.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data && options.toggle && /show|hide/.test(option)) options.toggle = false
      if (!data) $this.data('bs.collapse', (data = new Collapse(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.collapse

  $.fn.collapse             = Plugin
  $.fn.collapse.Constructor = Collapse


  // COLLAPSE NO CONFLICT
  // ====================

  $.fn.collapse.noConflict = function () {
    $.fn.collapse = old
    return this
  }


  // COLLAPSE DATA-API
  // =================

  $(document).on('click.bs.collapse.data-api', '[data-toggle="collapse"]', function (e) {
    var $this   = $(this)

    if (!$this.attr('data-target')) e.preventDefault()

    var $target = getTargetFromTrigger($this)
    var data    = $target.data('bs.collapse')
    var option  = data ? 'toggle' : $this.data()

    Plugin.call($target, option)
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: dropdown.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#dropdowns
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // DROPDOWN CLASS DEFINITION
  // =========================

  var backdrop = '.dropdown-backdrop'
  var toggle   = '[data-toggle="dropdown"]'
  var Dropdown = function (element) {
    $(element).on('click.bs.dropdown', this.toggle)
  }

  Dropdown.VERSION = '3.4.1'

  function getParent($this) {
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = selector !== '#' ? $(document).find(selector) : null

    return $parent && $parent.length ? $parent : $this.parent()
  }

  function clearMenus(e) {
    if (e && e.which === 3) return
    $(backdrop).remove()
    $(toggle).each(function () {
      var $this         = $(this)
      var $parent       = getParent($this)
      var relatedTarget = { relatedTarget: this }

      if (!$parent.hasClass('open')) return

      if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return

      $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this.attr('aria-expanded', 'false')
      $parent.removeClass('open').trigger($.Event('hidden.bs.dropdown', relatedTarget))
    })
  }

  Dropdown.prototype.toggle = function (e) {
    var $this = $(this)

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    clearMenus()

    if (!isActive) {
      if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
        // if mobile we use a backdrop because click events don't delegate
        $(document.createElement('div'))
          .addClass('dropdown-backdrop')
          .insertAfter($(this))
          .on('click', clearMenus)
      }

      var relatedTarget = { relatedTarget: this }
      $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this
        .trigger('focus')
        .attr('aria-expanded', 'true')

      $parent
        .toggleClass('open')
        .trigger($.Event('shown.bs.dropdown', relatedTarget))
    }

    return false
  }

  Dropdown.prototype.keydown = function (e) {
    if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return

    var $this = $(this)

    e.preventDefault()
    e.stopPropagation()

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    if (!isActive && e.which != 27 || isActive && e.which == 27) {
      if (e.which == 27) $parent.find(toggle).trigger('focus')
      return $this.trigger('click')
    }

    var desc = ' li:not(.disabled):visible a'
    var $items = $parent.find('.dropdown-menu' + desc)

    if (!$items.length) return

    var index = $items.index(e.target)

    if (e.which == 38 && index > 0)                 index--         // up
    if (e.which == 40 && index < $items.length - 1) index++         // down
    if (!~index)                                    index = 0

    $items.eq(index).trigger('focus')
  }


  // DROPDOWN PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.dropdown')

      if (!data) $this.data('bs.dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.dropdown

  $.fn.dropdown             = Plugin
  $.fn.dropdown.Constructor = Dropdown


  // DROPDOWN NO CONFLICT
  // ====================

  $.fn.dropdown.noConflict = function () {
    $.fn.dropdown = old
    return this
  }


  // APPLY TO STANDARD DROPDOWN ELEMENTS
  // ===================================

  $(document)
    .on('click.bs.dropdown.data-api', clearMenus)
    .on('click.bs.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
    .on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle)
    .on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown)
    .on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown)

}(jQuery);

/* ========================================================================
 * Bootstrap: modal.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#modals
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // MODAL CLASS DEFINITION
  // ======================

  var Modal = function (element, options) {
    this.options = options
    this.$body = $(document.body)
    this.$element = $(element)
    this.$dialog = this.$element.find('.modal-dialog')
    this.$backdrop = null
    this.isShown = null
    this.originalBodyPad = null
    this.scrollbarWidth = 0
    this.ignoreBackdropClick = false
    this.fixedContent = '.navbar-fixed-top, .navbar-fixed-bottom'

    if (this.options.remote) {
      this.$element
        .find('.modal-content')
        .load(this.options.remote, $.proxy(function () {
          this.$element.trigger('loaded.bs.modal')
        }, this))
    }
  }

  Modal.VERSION = '3.4.1'

  Modal.TRANSITION_DURATION = 300
  Modal.BACKDROP_TRANSITION_DURATION = 150

  Modal.DEFAULTS = {
    backdrop: true,
    keyboard: true,
    show: true
  }

  Modal.prototype.toggle = function (_relatedTarget) {
    return this.isShown ? this.hide() : this.show(_relatedTarget)
  }

  Modal.prototype.show = function (_relatedTarget) {
    var that = this
    var e = $.Event('show.bs.modal', { relatedTarget: _relatedTarget })

    this.$element.trigger(e)

    if (this.isShown || e.isDefaultPrevented()) return

    this.isShown = true

    this.checkScrollbar()
    this.setScrollbar()
    this.$body.addClass('modal-open')

    this.escape()
    this.resize()

    this.$element.on('click.dismiss.bs.modal', '[data-dismiss="modal"]', $.proxy(this.hide, this))

    this.$dialog.on('mousedown.dismiss.bs.modal', function () {
      that.$element.one('mouseup.dismiss.bs.modal', function (e) {
        if ($(e.target).is(that.$element)) that.ignoreBackdropClick = true
      })
    })

    this.backdrop(function () {
      var transition = $.support.transition && that.$element.hasClass('fade')

      if (!that.$element.parent().length) {
        that.$element.appendTo(that.$body) // don't move modals dom position
      }

      that.$element
        .show()
        .scrollTop(0)

      that.adjustDialog()

      if (transition) {
        that.$element[0].offsetWidth // force reflow
      }

      that.$element.addClass('in')

      that.enforceFocus()

      var e = $.Event('shown.bs.modal', { relatedTarget: _relatedTarget })

      transition ?
        that.$dialog // wait for modal to slide in
          .one('bsTransitionEnd', function () {
            that.$element.trigger('focus').trigger(e)
          })
          .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
        that.$element.trigger('focus').trigger(e)
    })
  }

  Modal.prototype.hide = function (e) {
    if (e) e.preventDefault()

    e = $.Event('hide.bs.modal')

    this.$element.trigger(e)

    if (!this.isShown || e.isDefaultPrevented()) return

    this.isShown = false

    this.escape()
    this.resize()

    $(document).off('focusin.bs.modal')

    this.$element
      .removeClass('in')
      .off('click.dismiss.bs.modal')
      .off('mouseup.dismiss.bs.modal')

    this.$dialog.off('mousedown.dismiss.bs.modal')

    $.support.transition && this.$element.hasClass('fade') ?
      this.$element
        .one('bsTransitionEnd', $.proxy(this.hideModal, this))
        .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
      this.hideModal()
  }

  Modal.prototype.enforceFocus = function () {
    $(document)
      .off('focusin.bs.modal') // guard against infinite focus loop
      .on('focusin.bs.modal', $.proxy(function (e) {
        if (document !== e.target &&
          this.$element[0] !== e.target &&
          !this.$element.has(e.target).length) {
          this.$element.trigger('focus')
        }
      }, this))
  }

  Modal.prototype.escape = function () {
    if (this.isShown && this.options.keyboard) {
      this.$element.on('keydown.dismiss.bs.modal', $.proxy(function (e) {
        e.which == 27 && this.hide()
      }, this))
    } else if (!this.isShown) {
      this.$element.off('keydown.dismiss.bs.modal')
    }
  }

  Modal.prototype.resize = function () {
    if (this.isShown) {
      $(window).on('resize.bs.modal', $.proxy(this.handleUpdate, this))
    } else {
      $(window).off('resize.bs.modal')
    }
  }

  Modal.prototype.hideModal = function () {
    var that = this
    this.$element.hide()
    this.backdrop(function () {
      that.$body.removeClass('modal-open')
      that.resetAdjustments()
      that.resetScrollbar()
      that.$element.trigger('hidden.bs.modal')
    })
  }

  Modal.prototype.removeBackdrop = function () {
    this.$backdrop && this.$backdrop.remove()
    this.$backdrop = null
  }

  Modal.prototype.backdrop = function (callback) {
    var that = this
    var animate = this.$element.hasClass('fade') ? 'fade' : ''

    if (this.isShown && this.options.backdrop) {
      var doAnimate = $.support.transition && animate

      this.$backdrop = $(document.createElement('div'))
        .addClass('modal-backdrop ' + animate)
        .appendTo(this.$body)

      this.$element.on('click.dismiss.bs.modal', $.proxy(function (e) {
        if (this.ignoreBackdropClick) {
          this.ignoreBackdropClick = false
          return
        }
        if (e.target !== e.currentTarget) return
        this.options.backdrop == 'static'
          ? this.$element[0].focus()
          : this.hide()
      }, this))

      if (doAnimate) this.$backdrop[0].offsetWidth // force reflow

      this.$backdrop.addClass('in')

      if (!callback) return

      doAnimate ?
        this.$backdrop
          .one('bsTransitionEnd', callback)
          .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
        callback()

    } else if (!this.isShown && this.$backdrop) {
      this.$backdrop.removeClass('in')

      var callbackRemove = function () {
        that.removeBackdrop()
        callback && callback()
      }
      $.support.transition && this.$element.hasClass('fade') ?
        this.$backdrop
          .one('bsTransitionEnd', callbackRemove)
          .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
        callbackRemove()

    } else if (callback) {
      callback()
    }
  }

  // these following methods are used to handle overflowing modals

  Modal.prototype.handleUpdate = function () {
    this.adjustDialog()
  }

  Modal.prototype.adjustDialog = function () {
    var modalIsOverflowing = this.$element[0].scrollHeight > document.documentElement.clientHeight

    this.$element.css({
      paddingLeft: !this.bodyIsOverflowing && modalIsOverflowing ? this.scrollbarWidth : '',
      paddingRight: this.bodyIsOverflowing && !modalIsOverflowing ? this.scrollbarWidth : ''
    })
  }

  Modal.prototype.resetAdjustments = function () {
    this.$element.css({
      paddingLeft: '',
      paddingRight: ''
    })
  }

  Modal.prototype.checkScrollbar = function () {
    var fullWindowWidth = window.innerWidth
    if (!fullWindowWidth) { // workaround for missing window.innerWidth in IE8
      var documentElementRect = document.documentElement.getBoundingClientRect()
      fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left)
    }
    this.bodyIsOverflowing = document.body.clientWidth < fullWindowWidth
    this.scrollbarWidth = this.measureScrollbar()
  }

  Modal.prototype.setScrollbar = function () {
    var bodyPad = parseInt((this.$body.css('padding-right') || 0), 10)
    this.originalBodyPad = document.body.style.paddingRight || ''
    var scrollbarWidth = this.scrollbarWidth
    if (this.bodyIsOverflowing) {
      this.$body.css('padding-right', bodyPad + scrollbarWidth)
      $(this.fixedContent).each(function (index, element) {
        var actualPadding = element.style.paddingRight
        var calculatedPadding = $(element).css('padding-right')
        $(element)
          .data('padding-right', actualPadding)
          .css('padding-right', parseFloat(calculatedPadding) + scrollbarWidth + 'px')
      })
    }
  }

  Modal.prototype.resetScrollbar = function () {
    this.$body.css('padding-right', this.originalBodyPad)
    $(this.fixedContent).each(function (index, element) {
      var padding = $(element).data('padding-right')
      $(element).removeData('padding-right')
      element.style.paddingRight = padding ? padding : ''
    })
  }

  Modal.prototype.measureScrollbar = function () { // thx walsh
    var scrollDiv = document.createElement('div')
    scrollDiv.className = 'modal-scrollbar-measure'
    this.$body.append(scrollDiv)
    var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth
    this.$body[0].removeChild(scrollDiv)
    return scrollbarWidth
  }


  // MODAL PLUGIN DEFINITION
  // =======================

  function Plugin(option, _relatedTarget) {
    return this.each(function () {
      var $this = $(this)
      var data = $this.data('bs.modal')
      var options = $.extend({}, Modal.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data) $this.data('bs.modal', (data = new Modal(this, options)))
      if (typeof option == 'string') data[option](_relatedTarget)
      else if (options.show) data.show(_relatedTarget)
    })
  }

  var old = $.fn.modal

  $.fn.modal = Plugin
  $.fn.modal.Constructor = Modal


  // MODAL NO CONFLICT
  // =================

  $.fn.modal.noConflict = function () {
    $.fn.modal = old
    return this
  }


  // MODAL DATA-API
  // ==============

  $(document).on('click.bs.modal.data-api', '[data-toggle="modal"]', function (e) {
    var $this = $(this)
    var href = $this.attr('href')
    var target = $this.attr('data-target') ||
      (href && href.replace(/.*(?=#[^\s]+$)/, '')) // strip for ie7

    var $target = $(document).find(target)
    var option = $target.data('bs.modal') ? 'toggle' : $.extend({ remote: !/#/.test(href) && href }, $target.data(), $this.data())

    if ($this.is('a')) e.preventDefault()

    $target.one('show.bs.modal', function (showEvent) {
      if (showEvent.isDefaultPrevented()) return // only register focus restorer if modal will actually get shown
      $target.one('hidden.bs.modal', function () {
        $this.is(':visible') && $this.trigger('focus')
      })
    })
    Plugin.call($target, option, this)
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: tooltip.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#tooltip
 * Inspired by the original jQuery.tipsy by Jason Frame
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  var DISALLOWED_ATTRIBUTES = ['sanitize', 'whiteList', 'sanitizeFn']

  var uriAttrs = [
    'background',
    'cite',
    'href',
    'itemtype',
    'longdesc',
    'poster',
    'src',
    'xlink:href'
  ]

  var ARIA_ATTRIBUTE_PATTERN = /^aria-[\w-]*$/i

  var DefaultWhitelist = {
    // Global attributes allowed on any supplied element below.
    '*': ['class', 'dir', 'id', 'lang', 'role', ARIA_ATTRIBUTE_PATTERN],
    a: ['target', 'href', 'title', 'rel'],
    area: [],
    b: [],
    br: [],
    col: [],
    code: [],
    div: [],
    em: [],
    hr: [],
    h1: [],
    h2: [],
    h3: [],
    h4: [],
    h5: [],
    h6: [],
    i: [],
    img: ['src', 'alt', 'title', 'width', 'height'],
    li: [],
    ol: [],
    p: [],
    pre: [],
    s: [],
    small: [],
    span: [],
    sub: [],
    sup: [],
    strong: [],
    u: [],
    ul: []
  }

  /**
   * A pattern that recognizes a commonly useful subset of URLs that are safe.
   *
   * Shoutout to Angular 7 https://github.com/angular/angular/blob/7.2.4/packages/core/src/sanitization/url_sanitizer.ts
   */
  var SAFE_URL_PATTERN = /^(?:(?:https?|mailto|ftp|tel|file):|[^&:/?#]*(?:[/?#]|$))/gi

  /**
   * A pattern that matches safe data URLs. Only matches image, video and audio types.
   *
   * Shoutout to Angular 7 https://github.com/angular/angular/blob/7.2.4/packages/core/src/sanitization/url_sanitizer.ts
   */
  var DATA_URL_PATTERN = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[a-z0-9+/]+=*$/i

  function allowedAttribute(attr, allowedAttributeList) {
    var attrName = attr.nodeName.toLowerCase()

    if ($.inArray(attrName, allowedAttributeList) !== -1) {
      if ($.inArray(attrName, uriAttrs) !== -1) {
        return Boolean(attr.nodeValue.match(SAFE_URL_PATTERN) || attr.nodeValue.match(DATA_URL_PATTERN))
      }

      return true
    }

    var regExp = $(allowedAttributeList).filter(function (index, value) {
      return value instanceof RegExp
    })

    // Check if a regular expression validates the attribute.
    for (var i = 0, l = regExp.length; i < l; i++) {
      if (attrName.match(regExp[i])) {
        return true
      }
    }

    return false
  }

  function sanitizeHtml(unsafeHtml, whiteList, sanitizeFn) {
    if (unsafeHtml.length === 0) {
      return unsafeHtml
    }

    if (sanitizeFn && typeof sanitizeFn === 'function') {
      return sanitizeFn(unsafeHtml)
    }

    // IE 8 and below don't support createHTMLDocument
    if (!document.implementation || !document.implementation.createHTMLDocument) {
      return unsafeHtml
    }

    var createdDocument = document.implementation.createHTMLDocument('sanitization')
    createdDocument.body.innerHTML = unsafeHtml

    var whitelistKeys = $.map(whiteList, function (el, i) { return i })
    var elements = $(createdDocument.body).find('*')

    for (var i = 0, len = elements.length; i < len; i++) {
      var el = elements[i]
      var elName = el.nodeName.toLowerCase()

      if ($.inArray(elName, whitelistKeys) === -1) {
        el.parentNode.removeChild(el)

        continue
      }

      var attributeList = $.map(el.attributes, function (el) { return el })
      var whitelistedAttributes = [].concat(whiteList['*'] || [], whiteList[elName] || [])

      for (var j = 0, len2 = attributeList.length; j < len2; j++) {
        if (!allowedAttribute(attributeList[j], whitelistedAttributes)) {
          el.removeAttribute(attributeList[j].nodeName)
        }
      }
    }

    return createdDocument.body.innerHTML
  }

  // TOOLTIP PUBLIC CLASS DEFINITION
  // ===============================

  var Tooltip = function (element, options) {
    this.type       = null
    this.options    = null
    this.enabled    = null
    this.timeout    = null
    this.hoverState = null
    this.$element   = null
    this.inState    = null

    this.init('tooltip', element, options)
  }

  Tooltip.VERSION  = '3.4.1'

  Tooltip.TRANSITION_DURATION = 150

  Tooltip.DEFAULTS = {
    animation: true,
    placement: 'top',
    selector: false,
    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
    trigger: 'hover focus',
    title: '',
    delay: 0,
    html: false,
    container: false,
    viewport: {
      selector: 'body',
      padding: 0
    },
    sanitize : true,
    sanitizeFn : null,
    whiteList : DefaultWhitelist
  }

  Tooltip.prototype.init = function (type, element, options) {
    this.enabled   = true
    this.type      = type
    this.$element  = $(element)
    this.options   = this.getOptions(options)
    this.$viewport = this.options.viewport && $(document).find($.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : (this.options.viewport.selector || this.options.viewport))
    this.inState   = { click: false, hover: false, focus: false }

    if (this.$element[0] instanceof document.constructor && !this.options.selector) {
      throw new Error('`selector` option must be specified when initializing ' + this.type + ' on the window.document object!')
    }

    var triggers = this.options.trigger.split(' ')

    for (var i = triggers.length; i--;) {
      var trigger = triggers[i]

      if (trigger == 'click') {
        this.$element.on('click.' + this.type, this.options.selector, $.proxy(this.toggle, this))
      } else if (trigger != 'manual') {
        var eventIn  = trigger == 'hover' ? 'mouseenter' : 'focusin'
        var eventOut = trigger == 'hover' ? 'mouseleave' : 'focusout'

        this.$element.on(eventIn  + '.' + this.type, this.options.selector, $.proxy(this.enter, this))
        this.$element.on(eventOut + '.' + this.type, this.options.selector, $.proxy(this.leave, this))
      }
    }

    this.options.selector ?
      (this._options = $.extend({}, this.options, { trigger: 'manual', selector: '' })) :
      this.fixTitle()
  }

  Tooltip.prototype.getDefaults = function () {
    return Tooltip.DEFAULTS
  }

  Tooltip.prototype.getOptions = function (options) {
    var dataAttributes = this.$element.data()

    for (var dataAttr in dataAttributes) {
      if (dataAttributes.hasOwnProperty(dataAttr) && $.inArray(dataAttr, DISALLOWED_ATTRIBUTES) !== -1) {
        delete dataAttributes[dataAttr]
      }
    }

    options = $.extend({}, this.getDefaults(), dataAttributes, options)

    if (options.delay && typeof options.delay == 'number') {
      options.delay = {
        show: options.delay,
        hide: options.delay
      }
    }

    if (options.sanitize) {
      options.template = sanitizeHtml(options.template, options.whiteList, options.sanitizeFn)
    }

    return options
  }

  Tooltip.prototype.getDelegateOptions = function () {
    var options  = {}
    var defaults = this.getDefaults()

    this._options && $.each(this._options, function (key, value) {
      if (defaults[key] != value) options[key] = value
    })

    return options
  }

  Tooltip.prototype.enter = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $(obj.currentTarget).data('bs.' + this.type)

    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
      $(obj.currentTarget).data('bs.' + this.type, self)
    }

    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusin' ? 'focus' : 'hover'] = true
    }

    if (self.tip().hasClass('in') || self.hoverState == 'in') {
      self.hoverState = 'in'
      return
    }

    clearTimeout(self.timeout)

    self.hoverState = 'in'

    if (!self.options.delay || !self.options.delay.show) return self.show()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'in') self.show()
    }, self.options.delay.show)
  }

  Tooltip.prototype.isInStateTrue = function () {
    for (var key in this.inState) {
      if (this.inState[key]) return true
    }

    return false
  }

  Tooltip.prototype.leave = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $(obj.currentTarget).data('bs.' + this.type)

    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
      $(obj.currentTarget).data('bs.' + this.type, self)
    }

    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusout' ? 'focus' : 'hover'] = false
    }

    if (self.isInStateTrue()) return

    clearTimeout(self.timeout)

    self.hoverState = 'out'

    if (!self.options.delay || !self.options.delay.hide) return self.hide()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'out') self.hide()
    }, self.options.delay.hide)
  }

  Tooltip.prototype.show = function () {
    var e = $.Event('show.bs.' + this.type)

    if (this.hasContent() && this.enabled) {
      this.$element.trigger(e)

      var inDom = $.contains(this.$element[0].ownerDocument.documentElement, this.$element[0])
      if (e.isDefaultPrevented() || !inDom) return
      var that = this

      var $tip = this.tip()

      var tipId = this.getUID(this.type)

      this.setContent()
      $tip.attr('id', tipId)
      this.$element.attr('aria-describedby', tipId)

      if (this.options.animation) $tip.addClass('fade')

      var placement = typeof this.options.placement == 'function' ?
        this.options.placement.call(this, $tip[0], this.$element[0]) :
        this.options.placement

      var autoToken = /\s?auto?\s?/i
      var autoPlace = autoToken.test(placement)
      if (autoPlace) placement = placement.replace(autoToken, '') || 'top'

      $tip
        .detach()
        .css({ top: 0, left: 0, display: 'block' })
        .addClass(placement)
        .data('bs.' + this.type, this)

      this.options.container ? $tip.appendTo($(document).find(this.options.container)) : $tip.insertAfter(this.$element)
      this.$element.trigger('inserted.bs.' + this.type)

      var pos          = this.getPosition()
      var actualWidth  = $tip[0].offsetWidth
      var actualHeight = $tip[0].offsetHeight

      if (autoPlace) {
        var orgPlacement = placement
        var viewportDim = this.getPosition(this.$viewport)

        placement = placement == 'bottom' && pos.bottom + actualHeight > viewportDim.bottom ? 'top'    :
                    placement == 'top'    && pos.top    - actualHeight < viewportDim.top    ? 'bottom' :
                    placement == 'right'  && pos.right  + actualWidth  > viewportDim.width  ? 'left'   :
                    placement == 'left'   && pos.left   - actualWidth  < viewportDim.left   ? 'right'  :
                    placement

        $tip
          .removeClass(orgPlacement)
          .addClass(placement)
      }

      var calculatedOffset = this.getCalculatedOffset(placement, pos, actualWidth, actualHeight)

      this.applyPlacement(calculatedOffset, placement)

      var complete = function () {
        var prevHoverState = that.hoverState
        that.$element.trigger('shown.bs.' + that.type)
        that.hoverState = null

        if (prevHoverState == 'out') that.leave(that)
      }

      $.support.transition && this.$tip.hasClass('fade') ?
        $tip
          .one('bsTransitionEnd', complete)
          .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
        complete()
    }
  }

  Tooltip.prototype.applyPlacement = function (offset, placement) {
    var $tip   = this.tip()
    var width  = $tip[0].offsetWidth
    var height = $tip[0].offsetHeight

    // manually read margins because getBoundingClientRect includes difference
    var marginTop = parseInt($tip.css('margin-top'), 10)
    var marginLeft = parseInt($tip.css('margin-left'), 10)

    // we must check for NaN for ie 8/9
    if (isNaN(marginTop))  marginTop  = 0
    if (isNaN(marginLeft)) marginLeft = 0

    offset.top  += marginTop
    offset.left += marginLeft

    // $.fn.offset doesn't round pixel values
    // so we use setOffset directly with our own function B-0
    $.offset.setOffset($tip[0], $.extend({
      using: function (props) {
        $tip.css({
          top: Math.round(props.top),
          left: Math.round(props.left)
        })
      }
    }, offset), 0)

    $tip.addClass('in')

    // check to see if placing tip in new offset caused the tip to resize itself
    var actualWidth  = $tip[0].offsetWidth
    var actualHeight = $tip[0].offsetHeight

    if (placement == 'top' && actualHeight != height) {
      offset.top = offset.top + height - actualHeight
    }

    var delta = this.getViewportAdjustedDelta(placement, offset, actualWidth, actualHeight)

    if (delta.left) offset.left += delta.left
    else offset.top += delta.top

    var isVertical          = /top|bottom/.test(placement)
    var arrowDelta          = isVertical ? delta.left * 2 - width + actualWidth : delta.top * 2 - height + actualHeight
    var arrowOffsetPosition = isVertical ? 'offsetWidth' : 'offsetHeight'

    $tip.offset(offset)
    this.replaceArrow(arrowDelta, $tip[0][arrowOffsetPosition], isVertical)
  }

  Tooltip.prototype.replaceArrow = function (delta, dimension, isVertical) {
    this.arrow()
      .css(isVertical ? 'left' : 'top', 50 * (1 - delta / dimension) + '%')
      .css(isVertical ? 'top' : 'left', '')
  }

  Tooltip.prototype.setContent = function () {
    var $tip  = this.tip()
    var title = this.getTitle()

    if (this.options.html) {
      if (this.options.sanitize) {
        title = sanitizeHtml(title, this.options.whiteList, this.options.sanitizeFn)
      }

      $tip.find('.tooltip-inner').html(title)
    } else {
      $tip.find('.tooltip-inner').text(title)
    }

    $tip.removeClass('fade in top bottom left right')
  }

  Tooltip.prototype.hide = function (callback) {
    var that = this
    var $tip = $(this.$tip)
    var e    = $.Event('hide.bs.' + this.type)

    function complete() {
      if (that.hoverState != 'in') $tip.detach()
      if (that.$element) { // TODO: Check whether guarding this code with this `if` is really necessary.
        that.$element
          .removeAttr('aria-describedby')
          .trigger('hidden.bs.' + that.type)
      }
      callback && callback()
    }

    this.$element.trigger(e)

    if (e.isDefaultPrevented()) return

    $tip.removeClass('in')

    $.support.transition && $tip.hasClass('fade') ?
      $tip
        .one('bsTransitionEnd', complete)
        .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
      complete()

    this.hoverState = null

    return this
  }

  Tooltip.prototype.fixTitle = function () {
    var $e = this.$element
    if ($e.attr('title') || typeof $e.attr('data-original-title') != 'string') {
      $e.attr('data-original-title', $e.attr('title') || '').attr('title', '')
    }
  }

  Tooltip.prototype.hasContent = function () {
    return this.getTitle()
  }

  Tooltip.prototype.getPosition = function ($element) {
    $element   = $element || this.$element

    var el     = $element[0]
    var isBody = el.tagName == 'BODY'

    var elRect    = el.getBoundingClientRect()
    if (elRect.width == null) {
      // width and height are missing in IE8, so compute them manually; see https://github.com/twbs/bootstrap/issues/14093
      elRect = $.extend({}, elRect, { width: elRect.right - elRect.left, height: elRect.bottom - elRect.top })
    }
    var isSvg = window.SVGElement && el instanceof window.SVGElement
    // Avoid using $.offset() on SVGs since it gives incorrect results in jQuery 3.
    // See https://github.com/twbs/bootstrap/issues/20280
    var elOffset  = isBody ? { top: 0, left: 0 } : (isSvg ? null : $element.offset())
    var scroll    = { scroll: isBody ? document.documentElement.scrollTop || document.body.scrollTop : $element.scrollTop() }
    var outerDims = isBody ? { width: $(window).width(), height: $(window).height() } : null

    return $.extend({}, elRect, scroll, outerDims, elOffset)
  }

  Tooltip.prototype.getCalculatedOffset = function (placement, pos, actualWidth, actualHeight) {
    return placement == 'bottom' ? { top: pos.top + pos.height,   left: pos.left + pos.width / 2 - actualWidth / 2 } :
           placement == 'top'    ? { top: pos.top - actualHeight, left: pos.left + pos.width / 2 - actualWidth / 2 } :
           placement == 'left'   ? { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth } :
        /* placement == 'right' */ { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width }

  }

  Tooltip.prototype.getViewportAdjustedDelta = function (placement, pos, actualWidth, actualHeight) {
    var delta = { top: 0, left: 0 }
    if (!this.$viewport) return delta

    var viewportPadding = this.options.viewport && this.options.viewport.padding || 0
    var viewportDimensions = this.getPosition(this.$viewport)

    if (/right|left/.test(placement)) {
      var topEdgeOffset    = pos.top - viewportPadding - viewportDimensions.scroll
      var bottomEdgeOffset = pos.top + viewportPadding - viewportDimensions.scroll + actualHeight
      if (topEdgeOffset < viewportDimensions.top) { // top overflow
        delta.top = viewportDimensions.top - topEdgeOffset
      } else if (bottomEdgeOffset > viewportDimensions.top + viewportDimensions.height) { // bottom overflow
        delta.top = viewportDimensions.top + viewportDimensions.height - bottomEdgeOffset
      }
    } else {
      var leftEdgeOffset  = pos.left - viewportPadding
      var rightEdgeOffset = pos.left + viewportPadding + actualWidth
      if (leftEdgeOffset < viewportDimensions.left) { // left overflow
        delta.left = viewportDimensions.left - leftEdgeOffset
      } else if (rightEdgeOffset > viewportDimensions.right) { // right overflow
        delta.left = viewportDimensions.left + viewportDimensions.width - rightEdgeOffset
      }
    }

    return delta
  }

  Tooltip.prototype.getTitle = function () {
    var title
    var $e = this.$element
    var o  = this.options

    title = $e.attr('data-original-title')
      || (typeof o.title == 'function' ? o.title.call($e[0]) :  o.title)

    return title
  }

  Tooltip.prototype.getUID = function (prefix) {
    do prefix += ~~(Math.random() * 1000000)
    while (document.getElementById(prefix))
    return prefix
  }

  Tooltip.prototype.tip = function () {
    if (!this.$tip) {
      this.$tip = $(this.options.template)
      if (this.$tip.length != 1) {
        throw new Error(this.type + ' `template` option must consist of exactly 1 top-level element!')
      }
    }
    return this.$tip
  }

  Tooltip.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find('.tooltip-arrow'))
  }

  Tooltip.prototype.enable = function () {
    this.enabled = true
  }

  Tooltip.prototype.disable = function () {
    this.enabled = false
  }

  Tooltip.prototype.toggleEnabled = function () {
    this.enabled = !this.enabled
  }

  Tooltip.prototype.toggle = function (e) {
    var self = this
    if (e) {
      self = $(e.currentTarget).data('bs.' + this.type)
      if (!self) {
        self = new this.constructor(e.currentTarget, this.getDelegateOptions())
        $(e.currentTarget).data('bs.' + this.type, self)
      }
    }

    if (e) {
      self.inState.click = !self.inState.click
      if (self.isInStateTrue()) self.enter(self)
      else self.leave(self)
    } else {
      self.tip().hasClass('in') ? self.leave(self) : self.enter(self)
    }
  }

  Tooltip.prototype.destroy = function () {
    var that = this
    clearTimeout(this.timeout)
    this.hide(function () {
      that.$element.off('.' + that.type).removeData('bs.' + that.type)
      if (that.$tip) {
        that.$tip.detach()
      }
      that.$tip = null
      that.$arrow = null
      that.$viewport = null
      that.$element = null
    })
  }

  Tooltip.prototype.sanitizeHtml = function (unsafeHtml) {
    return sanitizeHtml(unsafeHtml, this.options.whiteList, this.options.sanitizeFn)
  }

  // TOOLTIP PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.tooltip')
      var options = typeof option == 'object' && option

      if (!data && /destroy|hide/.test(option)) return
      if (!data) $this.data('bs.tooltip', (data = new Tooltip(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.tooltip

  $.fn.tooltip             = Plugin
  $.fn.tooltip.Constructor = Tooltip


  // TOOLTIP NO CONFLICT
  // ===================

  $.fn.tooltip.noConflict = function () {
    $.fn.tooltip = old
    return this
  }

}(jQuery);

/* ========================================================================
 * Bootstrap: popover.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#popovers
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // POPOVER PUBLIC CLASS DEFINITION
  // ===============================

  var Popover = function (element, options) {
    this.init('popover', element, options)
  }

  if (!$.fn.tooltip) throw new Error('Popover requires tooltip.js')

  Popover.VERSION  = '3.4.1'

  Popover.DEFAULTS = $.extend({}, $.fn.tooltip.Constructor.DEFAULTS, {
    placement: 'right',
    trigger: 'click',
    content: '',
    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
  })


  // NOTE: POPOVER EXTENDS tooltip.js
  // ================================

  Popover.prototype = $.extend({}, $.fn.tooltip.Constructor.prototype)

  Popover.prototype.constructor = Popover

  Popover.prototype.getDefaults = function () {
    return Popover.DEFAULTS
  }

  Popover.prototype.setContent = function () {
    var $tip    = this.tip()
    var title   = this.getTitle()
    var content = this.getContent()

    if (this.options.html) {
      var typeContent = typeof content

      if (this.options.sanitize) {
        title = this.sanitizeHtml(title)

        if (typeContent === 'string') {
          content = this.sanitizeHtml(content)
        }
      }

      $tip.find('.popover-title').html(title)
      $tip.find('.popover-content').children().detach().end()[
        typeContent === 'string' ? 'html' : 'append'
      ](content)
    } else {
      $tip.find('.popover-title').text(title)
      $tip.find('.popover-content').children().detach().end().text(content)
    }

    $tip.removeClass('fade top bottom left right in')

    // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
    // this manually by checking the contents.
    if (!$tip.find('.popover-title').html()) $tip.find('.popover-title').hide()
  }

  Popover.prototype.hasContent = function () {
    return this.getTitle() || this.getContent()
  }

  Popover.prototype.getContent = function () {
    var $e = this.$element
    var o  = this.options

    return $e.attr('data-content')
      || (typeof o.content == 'function' ?
        o.content.call($e[0]) :
        o.content)
  }

  Popover.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find('.arrow'))
  }


  // POPOVER PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.popover')
      var options = typeof option == 'object' && option

      if (!data && /destroy|hide/.test(option)) return
      if (!data) $this.data('bs.popover', (data = new Popover(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.popover

  $.fn.popover             = Plugin
  $.fn.popover.Constructor = Popover


  // POPOVER NO CONFLICT
  // ===================

  $.fn.popover.noConflict = function () {
    $.fn.popover = old
    return this
  }

}(jQuery);

/* ========================================================================
 * Bootstrap: scrollspy.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#scrollspy
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // SCROLLSPY CLASS DEFINITION
  // ==========================

  function ScrollSpy(element, options) {
    this.$body          = $(document.body)
    this.$scrollElement = $(element).is(document.body) ? $(window) : $(element)
    this.options        = $.extend({}, ScrollSpy.DEFAULTS, options)
    this.selector       = (this.options.target || '') + ' .nav li > a'
    this.offsets        = []
    this.targets        = []
    this.activeTarget   = null
    this.scrollHeight   = 0

    this.$scrollElement.on('scroll.bs.scrollspy', $.proxy(this.process, this))
    this.refresh()
    this.process()
  }

  ScrollSpy.VERSION  = '3.4.1'

  ScrollSpy.DEFAULTS = {
    offset: 10
  }

  ScrollSpy.prototype.getScrollHeight = function () {
    return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
  }

  ScrollSpy.prototype.refresh = function () {
    var that          = this
    var offsetMethod  = 'offset'
    var offsetBase    = 0

    this.offsets      = []
    this.targets      = []
    this.scrollHeight = this.getScrollHeight()

    if (!$.isWindow(this.$scrollElement[0])) {
      offsetMethod = 'position'
      offsetBase   = this.$scrollElement.scrollTop()
    }

    this.$body
      .find(this.selector)
      .map(function () {
        var $el   = $(this)
        var href  = $el.data('target') || $el.attr('href')
        var $href = /^#./.test(href) && $(href)

        return ($href
          && $href.length
          && $href.is(':visible')
          && [[$href[offsetMethod]().top + offsetBase, href]]) || null
      })
      .sort(function (a, b) { return a[0] - b[0] })
      .each(function () {
        that.offsets.push(this[0])
        that.targets.push(this[1])
      })
  }

  ScrollSpy.prototype.process = function () {
    var scrollTop    = this.$scrollElement.scrollTop() + this.options.offset
    var scrollHeight = this.getScrollHeight()
    var maxScroll    = this.options.offset + scrollHeight - this.$scrollElement.height()
    var offsets      = this.offsets
    var targets      = this.targets
    var activeTarget = this.activeTarget
    var i

    if (this.scrollHeight != scrollHeight) {
      this.refresh()
    }

    if (scrollTop >= maxScroll) {
      return activeTarget != (i = targets[targets.length - 1]) && this.activate(i)
    }

    if (activeTarget && scrollTop < offsets[0]) {
      this.activeTarget = null
      return this.clear()
    }

    for (i = offsets.length; i--;) {
      activeTarget != targets[i]
        && scrollTop >= offsets[i]
        && (offsets[i + 1] === undefined || scrollTop < offsets[i + 1])
        && this.activate(targets[i])
    }
  }

  ScrollSpy.prototype.activate = function (target) {
    this.activeTarget = target

    this.clear()

    var selector = this.selector +
      '[data-target="' + target + '"],' +
      this.selector + '[href="' + target + '"]'

    var active = $(selector)
      .parents('li')
      .addClass('active')

    if (active.parent('.dropdown-menu').length) {
      active = active
        .closest('li.dropdown')
        .addClass('active')
    }

    active.trigger('activate.bs.scrollspy')
  }

  ScrollSpy.prototype.clear = function () {
    $(this.selector)
      .parentsUntil(this.options.target, '.active')
      .removeClass('active')
  }


  // SCROLLSPY PLUGIN DEFINITION
  // ===========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.scrollspy')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.scrollspy', (data = new ScrollSpy(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.scrollspy

  $.fn.scrollspy             = Plugin
  $.fn.scrollspy.Constructor = ScrollSpy


  // SCROLLSPY NO CONFLICT
  // =====================

  $.fn.scrollspy.noConflict = function () {
    $.fn.scrollspy = old
    return this
  }


  // SCROLLSPY DATA-API
  // ==================

  $(window).on('load.bs.scrollspy.data-api', function () {
    $('[data-spy="scroll"]').each(function () {
      var $spy = $(this)
      Plugin.call($spy, $spy.data())
    })
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: tab.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#tabs
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // TAB CLASS DEFINITION
  // ====================

  var Tab = function (element) {
    // jscs:disable requireDollarBeforejQueryAssignment
    this.element = $(element)
    // jscs:enable requireDollarBeforejQueryAssignment
  }

  Tab.VERSION = '3.4.1'

  Tab.TRANSITION_DURATION = 150

  Tab.prototype.show = function () {
    var $this    = this.element
    var $ul      = $this.closest('ul:not(.dropdown-menu)')
    var selector = $this.data('target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    if ($this.parent('li').hasClass('active')) return

    var $previous = $ul.find('.active:last a')
    var hideEvent = $.Event('hide.bs.tab', {
      relatedTarget: $this[0]
    })
    var showEvent = $.Event('show.bs.tab', {
      relatedTarget: $previous[0]
    })

    $previous.trigger(hideEvent)
    $this.trigger(showEvent)

    if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return

    var $target = $(document).find(selector)

    this.activate($this.closest('li'), $ul)
    this.activate($target, $target.parent(), function () {
      $previous.trigger({
        type: 'hidden.bs.tab',
        relatedTarget: $this[0]
      })
      $this.trigger({
        type: 'shown.bs.tab',
        relatedTarget: $previous[0]
      })
    })
  }

  Tab.prototype.activate = function (element, container, callback) {
    var $active    = container.find('> .active')
    var transition = callback
      && $.support.transition
      && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length)

    function next() {
      $active
        .removeClass('active')
        .find('> .dropdown-menu > .active')
        .removeClass('active')
        .end()
        .find('[data-toggle="tab"]')
        .attr('aria-expanded', false)

      element
        .addClass('active')
        .find('[data-toggle="tab"]')
        .attr('aria-expanded', true)

      if (transition) {
        element[0].offsetWidth // reflow for transition
        element.addClass('in')
      } else {
        element.removeClass('fade')
      }

      if (element.parent('.dropdown-menu').length) {
        element
          .closest('li.dropdown')
          .addClass('active')
          .end()
          .find('[data-toggle="tab"]')
          .attr('aria-expanded', true)
      }

      callback && callback()
    }

    $active.length && transition ?
      $active
        .one('bsTransitionEnd', next)
        .emulateTransitionEnd(Tab.TRANSITION_DURATION) :
      next()

    $active.removeClass('in')
  }


  // TAB PLUGIN DEFINITION
  // =====================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.tab')

      if (!data) $this.data('bs.tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.tab

  $.fn.tab             = Plugin
  $.fn.tab.Constructor = Tab


  // TAB NO CONFLICT
  // ===============

  $.fn.tab.noConflict = function () {
    $.fn.tab = old
    return this
  }


  // TAB DATA-API
  // ============

  var clickHandler = function (e) {
    e.preventDefault()
    Plugin.call($(this), 'show')
  }

  $(document)
    .on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler)
    .on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)

}(jQuery);

/* ========================================================================
 * Bootstrap: affix.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#affix
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // AFFIX CLASS DEFINITION
  // ======================

  var Affix = function (element, options) {
    this.options = $.extend({}, Affix.DEFAULTS, options)

    var target = this.options.target === Affix.DEFAULTS.target ? $(this.options.target) : $(document).find(this.options.target)

    this.$target = target
      .on('scroll.bs.affix.data-api', $.proxy(this.checkPosition, this))
      .on('click.bs.affix.data-api',  $.proxy(this.checkPositionWithEventLoop, this))

    this.$element     = $(element)
    this.affixed      = null
    this.unpin        = null
    this.pinnedOffset = null

    this.checkPosition()
  }

  Affix.VERSION  = '3.4.1'

  Affix.RESET    = 'affix affix-top affix-bottom'

  Affix.DEFAULTS = {
    offset: 0,
    target: window
  }

  Affix.prototype.getState = function (scrollHeight, height, offsetTop, offsetBottom) {
    var scrollTop    = this.$target.scrollTop()
    var position     = this.$element.offset()
    var targetHeight = this.$target.height()

    if (offsetTop != null && this.affixed == 'top') return scrollTop < offsetTop ? 'top' : false

    if (this.affixed == 'bottom') {
      if (offsetTop != null) return (scrollTop + this.unpin <= position.top) ? false : 'bottom'
      return (scrollTop + targetHeight <= scrollHeight - offsetBottom) ? false : 'bottom'
    }

    var initializing   = this.affixed == null
    var colliderTop    = initializing ? scrollTop : position.top
    var colliderHeight = initializing ? targetHeight : height

    if (offsetTop != null && scrollTop <= offsetTop) return 'top'
    if (offsetBottom != null && (colliderTop + colliderHeight >= scrollHeight - offsetBottom)) return 'bottom'

    return false
  }

  Affix.prototype.getPinnedOffset = function () {
    if (this.pinnedOffset) return this.pinnedOffset
    this.$element.removeClass(Affix.RESET).addClass('affix')
    var scrollTop = this.$target.scrollTop()
    var position  = this.$element.offset()
    return (this.pinnedOffset = position.top - scrollTop)
  }

  Affix.prototype.checkPositionWithEventLoop = function () {
    setTimeout($.proxy(this.checkPosition, this), 1)
  }

  Affix.prototype.checkPosition = function () {
    if (!this.$element.is(':visible')) return

    var height       = this.$element.height()
    var offset       = this.options.offset
    var offsetTop    = offset.top
    var offsetBottom = offset.bottom
    var scrollHeight = Math.max($(document).height(), $(document.body).height())

    if (typeof offset != 'object')         offsetBottom = offsetTop = offset
    if (typeof offsetTop == 'function')    offsetTop    = offset.top(this.$element)
    if (typeof offsetBottom == 'function') offsetBottom = offset.bottom(this.$element)

    var affix = this.getState(scrollHeight, height, offsetTop, offsetBottom)

    if (this.affixed != affix) {
      if (this.unpin != null) this.$element.css('top', '')

      var affixType = 'affix' + (affix ? '-' + affix : '')
      var e         = $.Event(affixType + '.bs.affix')

      this.$element.trigger(e)

      if (e.isDefaultPrevented()) return

      this.affixed = affix
      this.unpin = affix == 'bottom' ? this.getPinnedOffset() : null

      this.$element
        .removeClass(Affix.RESET)
        .addClass(affixType)
        .trigger(affixType.replace('affix', 'affixed') + '.bs.affix')
    }

    if (affix == 'bottom') {
      this.$element.offset({
        top: scrollHeight - height - offsetBottom
      })
    }
  }


  // AFFIX PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.affix')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.affix', (data = new Affix(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.affix

  $.fn.affix             = Plugin
  $.fn.affix.Constructor = Affix


  // AFFIX NO CONFLICT
  // =================

  $.fn.affix.noConflict = function () {
    $.fn.affix = old
    return this
  }


  // AFFIX DATA-API
  // ==============

  $(window).on('load', function () {
    $('[data-spy="affix"]').each(function () {
      var $spy = $(this)
      var data = $spy.data()

      data.offset = data.offset || {}

      if (data.offsetBottom != null) data.offset.bottom = data.offsetBottom
      if (data.offsetTop    != null) data.offset.top    = data.offsetTop

      Plugin.call($spy, data)
    })
  })

}(jQuery);

  /*!
   * jQuery Validation Plugin 1.11.1
   *
   * http://bassistance.de/jquery-plugins/jquery-plugin-validation/
   * http://docs.jquery.com/Plugins/Validation
   *
   * Copyright 2013 JÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¶rn Zaefferer
   * Released under the MIT license:
   *   http://www.opensource.org/licenses/mit-license.php
   */
  ; (function (a) {
    a.extend(a.fn, {
      validate: function (b) {
        if (!this.length) {
          if (b && b.debug && window.console) {
            console.warn("Nothing selected, can't validate, returning nothing.")
          }
          return
        }
        var c = a.data(this[0], 'validator')
        if (c) {
          return c
        }
        this.attr('novalidate', 'novalidate')
        c = new a.validator(b, this[0])
        a.data(this[0], 'validator', c)
        if (c.settings.onsubmit) {
          this.validateDelegate(':submit', 'click', function (d) {
            if (c.settings.submitHandler) {
              c.submitButton = d.target
            }
            if (a(d.target).hasClass('cancel')) {
              c.cancelSubmit = true
            }
            if (a(d.target).attr('formnovalidate') !== undefined) {
              c.cancelSubmit = true
            }
          })
          this.submit(function (d) {
            if (c.settings.debug) {
              d.preventDefault()
            }
            function e() {
              var f
              if (c.settings.submitHandler) {
                if (c.submitButton) {
                  f = a("<input type='hidden'/>")
                    .attr('name', c.submitButton.name)
                    .val(a(c.submitButton).val())
                    .appendTo(c.currentForm)
                }
                c.settings.submitHandler.call(c, c.currentForm, d)
                if (c.submitButton) {
                  f.remove()
                }
                return false
              }
              return true
            }
            if (c.cancelSubmit) {
              c.cancelSubmit = false
              return e()
            }
            if (c.form()) {
              if (c.pendingRequest) {
                c.formSubmitted = true
                return false
              }
              return e()
            } else {
              c.focusInvalid()
              return false
            }
          })
        }
        return c
      },
      valid: function () {
        if (a(this[0]).is('form')) {
          return this.validate().form()
        } else {
          var c = true
          var b = a(this[0].form).validate()
          this.each(function () {
            c = c && b.element(this)
          })
          return c
        }
      },
      removeAttrs: function (d) {
        var b = {},
          c = this
        a.each(d.split(/\s/), function (e, f) {
          b[f] = c.attr(f)
          c.removeAttr(f)
        })
        return b
      },
      rules: function (e, b) {
        var g = this[0]
        if (e) {
          var d = a.data(g.form, 'validator').settings
          var i = d.rules
          var j = a.validator.staticRules(g)
          switch (e) {
            case 'add':
              a.extend(j, a.validator.normalizeRule(b))
              delete j.messages
              i[g.name] = j
              if (b.messages) {
                d.messages[g.name] = a.extend(d.messages[g.name], b.messages)
              }
              break
            case 'remove':
              if (!b) {
                delete i[g.name]
                return j
              }
              var h = {}
              a.each(b.split(/\s/), function (k, l) {
                h[l] = j[l]
                delete j[l]
              })
              return h
          }
        }
        var f = a.validator.normalizeRules(
          a.extend(
            {},
            a.validator.classRules(g),
            a.validator.attributeRules(g),
            a.validator.dataRules(g),
            a.validator.staticRules(g)
          ),
          g
        )
        if (f.required) {
          var c = f.required
          delete f.required
          f = a.extend({ required: c }, f)
        }
        return f
      },
    })
    a.extend(a.expr[':'], {
      blank: function (b) {
        return !a.trim('' + a(b).val())
      },
      filled: function (b) {
        return !!a.trim('' + a(b).val())
      },
      unchecked: function (b) {
        return !a(b).prop('checked')
      },
    })
    a.validator = function (b, c) {
      this.settings = a.extend(true, {}, a.validator.defaults, b)
      this.currentForm = c
      this.init()
    }
    a.validator.format = function (b, c) {
      if (arguments.length === 1) {
        return function () {
          var d = a.makeArray(arguments)
          d.unshift(b)
          return a.validator.format.apply(this, d)
        }
      }
      if (arguments.length > 2 && c.constructor !== Array) {
        c = a.makeArray(arguments).slice(1)
      }
      if (c.constructor !== Array) {
        c = [c]
      }
      a.each(c, function (d, e) {
        b = b.replace(new RegExp('\\{' + d + '\\}', 'g'), function () {
          return e
        })
      })
      return b
    }
    a.extend(a.validator, {
      defaults: {
        messages: {},
        groups: {},
        rules: {},
        errorClass: 'error',
        validClass: 'valid',
        errorElement: 'label',
        focusInvalid: true,
        errorContainer: a([]),
        errorLabelContainer: a([]),
        onsubmit: true,
        ignore: ':hidden',
        ignoreTitle: false,
        onfocusin: function (b, c) {
          this.lastActive = b
          if (this.settings.focusCleanup && !this.blockFocusCleanup) {
            if (this.settings.unhighlight) {
              this.settings.unhighlight.call(
                this,
                b,
                this.settings.errorClass,
                this.settings.validClass
              )
            }
            this.addWrapper(this.errorsFor(b)).hide()
          }
        },
        onfocusout: function (b, c) {
          if (
            !this.checkable(b) &&
            (b.name in this.submitted || !this.optional(b))
          ) {
            this.element(b)
          }
        },
        onkeyup: function (b, c) {
          if (c.which === 9 && this.elementValue(b) === '') {
            return
          } else {
            if (b.name in this.submitted || b === this.lastElement) {
              this.element(b)
            }
          }
        },
        onclick: function (b, c) {
          if (b.name in this.submitted) {
            this.element(b)
          } else {
            if (b.parentNode.name in this.submitted) {
              this.element(b.parentNode)
            }
          }
        },
        highlight: function (d, b, c) {
          if (d.type === 'radio') {
            this.findByName(d.name).addClass(b).removeClass(c)
          } else {
            a(d).addClass(b).removeClass(c)
          }
        },
        unhighlight: function (d, b, c) {
          if (d.type === 'radio') {
            this.findByName(d.name).removeClass(b).addClass(c)
          } else {
            a(d).removeClass(b).addClass(c)
          }
        },
      },
      setDefaults: function (b) {
        a.extend(a.validator.defaults, b)
      },
      messages: {
        required: 'This field is required.',
        remote: 'Please fix this field.',
        email: 'Please enter a valid email address.',
        url: 'Please enter a valid URL.',
        date: 'Please enter a valid date.',
        dateISO: 'Please enter a valid date (ISO).',
        number: 'Please enter a valid number.',
        digits: 'Please enter only digits.',
        creditcard: 'Please enter a valid credit card number.',
        equalTo: 'Please enter the same value again.',
        maxlength: a.validator.format(
          'Please enter no more than {0} characters.'
        ),
        minlength: a.validator.format('Please enter at least {0} characters.'),
        rangelength: a.validator.format(
          'Please enter a value between {0} and {1} characters long.'
        ),
        range: a.validator.format('Please enter a value between {0} and {1}.'),
        max: a.validator.format(
          'Please enter a value less than or equal to {0}.'
        ),
        min: a.validator.format(
          'Please enter a value greater than or equal to {0}.'
        ),
      },
      autoCreateRanges: false,
      prototype: {
        init: function () {
          this.labelContainer = a(this.settings.errorLabelContainer)
          this.errorContext =
            (this.labelContainer.length && this.labelContainer) ||
            a(this.currentForm)
          this.containers = a(this.settings.errorContainer).add(
            this.settings.errorLabelContainer
          )
          this.submitted = {}
          this.valueCache = {}
          this.pendingRequest = 0
          this.pending = {}
          this.invalid = {}
          this.reset()
          var b = (this.groups = {})
          a.each(this.settings.groups, function (e, f) {
            if (typeof f === 'string') {
              f = f.split(/\s/)
            }
            a.each(f, function (h, g) {
              b[g] = e
            })
          })
          var d = this.settings.rules
          a.each(d, function (e, f) {
            d[e] = a.validator.normalizeRule(f)
          })
          function c(g) {
            var f = a.data(this[0].form, 'validator'),
              e = 'on' + g.type.replace(/^validate/, '')
            if (f.settings[e]) {
              f.settings[e].call(f, this[0], g)
            }
          }
          a(this.currentForm)
            .validateDelegate(
              ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'] ,[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'] ",
              'focusin focusout keyup',
              c
            )
            .validateDelegate(
              "[type='radio'], [type='checkbox'], select, option",
              'click',
              c
            )
          if (this.settings.invalidHandler) {
            a(this.currentForm).bind(
              'invalid-form.validate',
              this.settings.invalidHandler
            )
          }
        },
        form: function () {
          this.checkForm()
          a.extend(this.submitted, this.errorMap)
          this.invalid = a.extend({}, this.errorMap)
          if (!this.valid()) {
            a(this.currentForm).triggerHandler('invalid-form', [this])
          }
          this.showErrors()
          return this.valid()
        },
        checkForm: function () {
          this.prepareForm()
          for (
            var b = 0, c = (this.currentElements = this.elements());
            c[b];
            b++
          ) {
            this.check(c[b])
          }
          return this.valid()
        },
        element: function (c) {
          c = this.validationTargetFor(this.clean(c))
          this.lastElement = c
          this.prepareElement(c)
          this.currentElements = a(c)
          var b = this.check(c) !== false
          if (b) {
            delete this.invalid[c.name]
          } else {
            this.invalid[c.name] = true
          }
          if (!this.numberOfInvalids()) {
            this.toHide = this.toHide.add(this.containers)
          }
          this.showErrors()
          return b
        },
        showErrors: function (c) {
          if (c) {
            a.extend(this.errorMap, c)
            this.errorList = []
            for (var b in c) {
              this.errorList.push({
                message: c[b],
                element: this.findByName(b)[0],
              })
            }
            this.successList = a.grep(this.successList, function (d) {
              return !(d.name in c)
            })
          }
          if (this.settings.showErrors) {
            this.settings.showErrors.call(this, this.errorMap, this.errorList)
          } else {
            this.defaultShowErrors()
          }
        },
        resetForm: function () {
          if (a.fn.resetForm) {
            a(this.currentForm).resetForm()
          }
          this.submitted = {}
          this.lastElement = null
          this.prepareForm()
          this.hideErrors()
          this.elements()
            .removeClass(this.settings.errorClass)
            .removeData('previousValue')
        },
        numberOfInvalids: function () {
          return this.objectLength(this.invalid)
        },
        objectLength: function (d) {
          var c = 0
          for (var b in d) {
            c++
          }
          return c
        },
        hideErrors: function () {
          this.addWrapper(this.toHide).hide()
        },
        valid: function () {
          return this.size() === 0
        },
        size: function () {
          return this.errorList.length
        },
        focusInvalid: function () {
          if (this.settings.focusInvalid) {
            try {
              a(
                this.findLastActive() ||
                (this.errorList.length && this.errorList[0].element) ||
                []
              )
                .filter(':visible')
                .focus()
                .trigger('focusin')
            } catch (b) { }
          }
        },
        findLastActive: function () {
          var b = this.lastActive
          return (
            b &&
            a.grep(this.errorList, function (c) {
              return c.element.name === b.name
            }).length === 1 &&
            b
          )
        },
        elements: function () {
          var c = this,
            b = {}
          return a(this.currentForm)
            .find('input, select, textarea')
            .not(':submit, :reset, :image, [disabled]')
            .not(this.settings.ignore)
            .filter(function () {
              if (!this.name && c.settings.debug && window.console) {
                console.error('%o has no name assigned', this)
              }
              if (this.name in b || !c.objectLength(a(this).rules())) {
                return false
              }
              b[this.name] = true
              return true
            })
        },
        clean: function (b) {
          return a(b)[0]
        },
        errors: function () {
          var b = this.settings.errorClass.replace(' ', '.')
          return a(this.settings.errorElement + '.' + b, this.errorContext)
        },
        reset: function () {
          this.successList = []
          this.errorList = []
          this.errorMap = {}
          this.toShow = a([])
          this.toHide = a([])
          this.currentElements = a([])
        },
        prepareForm: function () {
          this.reset()
          this.toHide = this.errors().add(this.containers)
        },
        prepareElement: function (b) {
          this.reset()
          this.toHide = this.errorsFor(b)
        },
        elementValue: function (b) {
          var c = a(b).attr('type'),
            d = a(b).val()
          if (c === 'radio' || c === 'checkbox') {
            return a("input[name='" + a(b).attr('name') + "']:checked").val()
          }
          if (typeof d === 'string') {
            return d.replace(/\r/g, '')
          }
          return d
        },
        check: function (c) {
          c = this.validationTargetFor(this.clean(c))
          var i = a(c).rules()
          var d = false
          var h = this.elementValue(c)
          var b
          for (var j in i) {
            var g = { method: j, parameters: i[j] }
            try {
              b = a.validator.methods[j].call(this, h, c, g.parameters)
              if (b === 'dependency-mismatch') {
                d = true
                continue
              }
              d = false
              if (b === 'pending') {
                this.toHide = this.toHide.not(this.errorsFor(c))
                return
              }
              if (!b) {
                this.formatAndAdd(c, g)
                return false
              }
            } catch (f) {
              if (this.settings.debug && window.console) {
                console.log(
                  'Exception occurred when checking element ' +
                  c.id +
                  ", check the '" +
                  g.method +
                  "' method.",
                  f
                )
              }
              throw f
            }
          }
          if (d) {
            return
          }
          if (this.objectLength(i)) {
            this.successList.push(c)
          }
          return true
        },
        customDataMessage: function (b, c) {
          return (
            a(b).data('msg-' + c.toLowerCase()) ||
            (b.attributes && a(b).attr('data-msg-' + c.toLowerCase()))
          )
        },
        customMessage: function (c, d) {
          var b = this.settings.messages[c]
          return b && (b.constructor === String ? b : b[d])
        },
        findDefined: function () {
          for (var b = 0; b < arguments.length; b++) {
            if (arguments[b] !== undefined) {
              return arguments[b]
            }
          }
          return undefined
        },
        defaultMessage: function (b, c) {
          return this.findDefined(
            this.customMessage(b.name, c),
            this.customDataMessage(b, c),
            (!this.settings.ignoreTitle && b.title) || undefined,
            a.validator.messages[c],
            '<strong>Warning: No message defined for ' + b.name + '</strong>'
          )
        },
        formatAndAdd: function (c, e) {
          var d = this.defaultMessage(c, e.method),
            b = /\$?\{(\d+)\}/g
          if (typeof d === 'function') {
            d = d.call(this, e.parameters, c)
          } else {
            if (b.test(d)) {
              d = a.validator.format(d.replace(b, '{$1}'), e.parameters)
            }
          }
          this.errorList.push({ message: d, element: c })
          this.errorMap[c.name] = d
          this.submitted[c.name] = d
        },
        addWrapper: function (b) {
          if (this.settings.wrapper) {
            b = b.add(b.parent(this.settings.wrapper))
          }
          return b
        },
        defaultShowErrors: function () {
          var c, d
          for (c = 0; this.errorList[c]; c++) {
            var b = this.errorList[c]
            if (this.settings.highlight) {
              this.settings.highlight.call(
                this,
                b.element,
                this.settings.errorClass,
                this.settings.validClass
              )
            }
            this.showLabel(b.element, b.message)
          }
          if (this.errorList.length) {
            this.toShow = this.toShow.add(this.containers)
          }
          if (this.settings.success) {
            for (c = 0; this.successList[c]; c++) {
              this.showLabel(this.successList[c])
            }
          }
          if (this.settings.unhighlight) {
            for (c = 0, d = this.validElements(); d[c]; c++) {
              this.settings.unhighlight.call(
                this,
                d[c],
                this.settings.errorClass,
                this.settings.validClass
              )
            }
          }
          this.toHide = this.toHide.not(this.toShow)
          this.hideErrors()
          this.addWrapper(this.toShow).show()
        },
        validElements: function () {
          return this.currentElements.not(this.invalidElements())
        },
        invalidElements: function () {
          return a(this.errorList).map(function () {
            return this.element
          })
        },
        showLabel: function (c, d) {
          var b = this.errorsFor(c)
          if (b.length) {
            b.removeClass(this.settings.validClass).addClass(
              this.settings.errorClass
            )
            b.html(d)
          } else {
            b = a('<' + this.settings.errorElement + '>')
              .attr('for', this.idOrName(c))
              .addClass(this.settings.errorClass)
              .html(d || '')
            if (this.settings.wrapper) {
              b = b
                .hide()
                .show()
                .wrap('<' + this.settings.wrapper + '/>')
                .parent()
            }
            if (!this.labelContainer.append(b).length) {
              if (this.settings.errorPlacement) {
                this.settings.errorPlacement(b, a(c))
              } else {
                b.insertAfter(c)
              }
            }
          }
          if (!d && this.settings.success) {
            b.text('')
            if (typeof this.settings.success === 'string') {
              b.addClass(this.settings.success)
            } else {
              this.settings.success(b, c)
            }
          }
          this.toShow = this.toShow.add(b)
        },
        errorsFor: function (c) {
          var b = this.idOrName(c)
          return this.errors().filter(function () {
            return a(this).attr('for') === b
          })
        },
        idOrName: function (b) {
          return (
            this.groups[b.name] || (this.checkable(b) ? b.name : b.id || b.name)
          )
        },
        validationTargetFor: function (b) {
          if (this.checkable(b)) {
            b = this.findByName(b.name).not(this.settings.ignore)[0]
          }
          return b
        },
        checkable: function (b) {
          return /radio|checkbox/i.test(b.type)
        },
        findByName: function (b) {
          return a(this.currentForm).find("[name='" + b + "']")
        },
        getLength: function (c, b) {
          switch (b.nodeName.toLowerCase()) {
            case 'select':
              return a('option:selected', b).length
            case 'input':
              if (this.checkable(b)) {
                return this.findByName(b.name).filter(':checked').length
              }
          }
          return c.length
        },
        depend: function (c, b) {
          return this.dependTypes[typeof c]
            ? this.dependTypes[typeof c](c, b)
            : true
        },
        dependTypes: {
          boolean: function (c, b) {
            return c
          },
          string: function (c, b) {
            return !!a(c, b.form).length
          },
          function: function (c, b) {
            return c(b)
          },
        },
        optional: function (b) {
          var c = this.elementValue(b)
          return (
            !a.validator.methods.required.call(this, c, b) &&
            'dependency-mismatch'
          )
        },
        startRequest: function (b) {
          if (!this.pending[b.name]) {
            this.pendingRequest++
            this.pending[b.name] = true
          }
        },
        stopRequest: function (b, c) {
          this.pendingRequest--
          if (this.pendingRequest < 0) {
            this.pendingRequest = 0
          }
          delete this.pending[b.name]
          if (
            c &&
            this.pendingRequest === 0 &&
            this.formSubmitted &&
            this.form()
          ) {
            a(this.currentForm).submit()
            this.formSubmitted = false
          } else {
            if (!c && this.pendingRequest === 0 && this.formSubmitted) {
              a(this.currentForm).triggerHandler('invalid-form', [this])
              this.formSubmitted = false
            }
          }
        },
        previousValue: function (b) {
          return (
            a.data(b, 'previousValue') ||
            a.data(b, 'previousValue', {
              old: null,
              valid: true,
              message: this.defaultMessage(b, 'remote'),
            })
          )
        },
      },
      classRuleSettings: {
        required: { required: true },
        email: { email: true },
        url: { url: true },
        date: { date: true },
        dateISO: { dateISO: true },
        number: { number: true },
        digits: { digits: true },
        creditcard: { creditcard: true },
      },
      addClassRules: function (b, c) {
        if (b.constructor === String) {
          this.classRuleSettings[b] = c
        } else {
          a.extend(this.classRuleSettings, b)
        }
      },
      classRules: function (c) {
        var d = {}
        var b = a(c).attr('class')
        if (b) {
          a.each(b.split(' '), function () {
            if (this in a.validator.classRuleSettings) {
              a.extend(d, a.validator.classRuleSettings[this])
            }
          })
        }
        return d
      },
      attributeRules: function (c) {
        var f = {}
        var b = a(c)
        var d = b[0].getAttribute('type')
        for (var g in a.validator.methods) {
          var e
          if (g === 'required') {
            e = b.get(0).getAttribute(g)
            if (e === '') {
              e = true
            }
            e = !!e
          } else {
            e = b.attr(g)
          }
          if (/min|max/.test(g) && (d === null || /number|range|text/.test(d))) {
            e = Number(e)
          }
          if (e) {
            f[g] = e
          } else {
            if (d === g && d !== 'range') {
              f[g] = true
            }
          }
        }
        if (f.maxlength && /-1|2147483647|524288/.test(f.maxlength)) {
          delete f.maxlength
        }
        return f
      },
      dataRules: function (c) {
        var f,
          d,
          e = {},
          b = a(c)
        for (f in a.validator.methods) {
          d = b.data('rule-' + f.toLowerCase())
          if (d !== undefined) {
            e[f] = d
          }
        }
        return e
      },
      staticRules: function (c) {
        var d = {}
        var b = a.data(c.form, 'validator')
        if (b.settings.rules) {
          d = a.validator.normalizeRule(b.settings.rules[c.name]) || {}
        }
        return d
      },
      normalizeRules: function (c, b) {
        a.each(c, function (f, e) {
          if (e === false) {
            delete c[f]
            return
          }
          if (e.param || e.depends) {
            var d = true
            switch (typeof e.depends) {
              case 'string':
                d = !!a(e.depends, b.form).length
                break
              case 'function':
                d = e.depends.call(b, b)
                break
            }
            if (d) {
              c[f] = e.param !== undefined ? e.param : true
            } else {
              delete c[f]
            }
          }
        })
        a.each(c, function (d, e) {
          c[d] = a.isFunction(e) ? e(b) : e
        })
        a.each(['minlength', 'maxlength'], function () {
          if (c[this]) {
            c[this] = Number(c[this])
          }
        })
        a.each(['rangelength', 'range'], function () {
          var d
          if (c[this]) {
            if (a.isArray(c[this])) {
              c[this] = [Number(c[this][0]), Number(c[this][1])]
            } else {
              if (typeof c[this] === 'string') {
                d = c[this].split(/[\s,]+/)
                c[this] = [Number(d[0]), Number(d[1])]
              }
            }
          }
        })
        if (a.validator.autoCreateRanges) {
          if (c.min && c.max) {
            c.range = [c.min, c.max]
            delete c.min
            delete c.max
          }
          if (c.minlength && c.maxlength) {
            c.rangelength = [c.minlength, c.maxlength]
            delete c.minlength
            delete c.maxlength
          }
        }
        return c
      },
      normalizeRule: function (c) {
        if (typeof c === 'string') {
          var b = {}
          a.each(c.split(/\s/), function () {
            b[this] = true
          })
          c = b
        }
        return c
      },
      addMethod: function (b, d, c) {
        a.validator.methods[b] = d
        a.validator.messages[b] = c !== undefined ? c : a.validator.messages[b]
        if (d.length < 3) {
          a.validator.addClassRules(b, a.validator.normalizeRule(b))
        }
      },
      methods: {
        required: function (c, b, e) {
          if (!this.depend(e, b)) {
            return 'dependency-mismatch'
          }
          if (b.nodeName.toLowerCase() === 'select') {
            var d = a(b).val()
            return d && d.length > 0
          }
          if (this.checkable(b)) {
            return this.getLength(c, b) > 0
          }
          return a.trim(c).length > 0
        },
        email: function (c, b) {
          return (
            this.optional(b) ||
            /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(
              c
            )
          )
        },
        url: function (c, b) {
          return (
            this.optional(b) ||
            /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(
              c
            )
          )
        },
        date: function (c, b) {
          return this.optional(b) || !/Invalid|NaN/.test(new Date(c).toString())
        },
        dateISO: function (c, b) {
          return this.optional(b) || /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(c)
        },
        number: function (c, b) {
          return (
            this.optional(b) ||
            /^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(c)
          )
        },
        digits: function (c, b) {
          return this.optional(b) || /^\d+$/.test(c)
        },
        creditcard: function (f, c) {
          if (this.optional(c)) {
            return 'dependency-mismatch'
          }
          if (/[^0-9 \-]+/.test(f)) {
            return false
          }
          var g = 0,
            e = 0,
            b = false
          f = f.replace(/\D/g, '')
          for (var h = f.length - 1; h >= 0; h--) {
            var d = f.charAt(h)
            e = parseInt(d, 10)
            if (b) {
              if ((e *= 2) > 9) {
                e -= 9
              }
            }
            g += e
            b = !b
          }
          return g % 10 === 0
        },
        minlength: function (d, b, e) {
          var c = a.isArray(d) ? d.length : this.getLength(a.trim(d), b)
          return this.optional(b) || c >= e
        },
        maxlength: function (d, b, e) {
          var c = a.isArray(d) ? d.length : this.getLength(a.trim(d), b)
          return this.optional(b) || c <= e
        },
        rangelength: function (d, b, e) {
          var c = a.isArray(d) ? d.length : this.getLength(a.trim(d), b)
          return this.optional(b) || (c >= e[0] && c <= e[1])
        },
        min: function (c, b, d) {
          return this.optional(b) || c >= d
        },
        max: function (c, b, d) {
          return this.optional(b) || c <= d
        },
        range: function (c, b, d) {
          return this.optional(b) || (c >= d[0] && c <= d[1])
        },
        equalTo: function (c, b, e) {
          var d = a(e)
          if (this.settings.onfocusout) {
            d.unbind('.validate-equalTo').bind(
              'blur.validate-equalTo',
              function () {
                a(b).valid()
              }
            )
          }
          return c === d.val()
        },
        remote: function (f, c, g) {
          if (this.optional(c)) {
            return 'dependency-mismatch'
          }
          var d = this.previousValue(c)
          if (!this.settings.messages[c.name]) {
            this.settings.messages[c.name] = {}
          }
          d.originalMessage = this.settings.messages[c.name].remote
          this.settings.messages[c.name].remote = d.message
          g = (typeof g === 'string' && { url: g }) || g
          if (d.old === f) {
            return d.valid
          }
          d.old = f
          var b = this
          this.startRequest(c)
          var e = {}
          e[c.name] = f
          a.ajax(
            a.extend(
              true,
              {
                url: g,
                mode: 'abort',
                port: 'validate' + c.name,
                dataType: 'json',
                data: e,
                success: function (i) {
                  b.settings.messages[c.name].remote = d.originalMessage
                  var k = i === true || i === 'true'
                  if (k) {
                    var h = b.formSubmitted
                    b.prepareElement(c)
                    b.formSubmitted = h
                    b.successList.push(c)
                    delete b.invalid[c.name]
                    b.showErrors()
                  } else {
                    var l = {}
                    var j = i || b.defaultMessage(c, 'remote')
                    l[c.name] = d.message = a.isFunction(j) ? j(f) : j
                    b.invalid[c.name] = true
                    b.showErrors(l)
                  }
                  d.valid = k
                  b.stopRequest(c, k)
                },
              },
              g
            )
          )
          return 'pending'
        },
      },
    })
    a.format = a.validator.format
  })(jQuery)
  ; (function (c) {
    var a = {}
    if (c.ajaxPrefilter) {
      c.ajaxPrefilter(function (f, e, g) {
        var d = f.port
        if (f.mode === 'abort') {
          if (a[d]) {
            a[d].abort()
          }
          a[d] = g
        }
      })
    } else {
      var b = c.ajax
      c.ajax = function (e) {
        var f = ('mode' in e ? e : c.ajaxSettings).mode,
          d = ('port' in e ? e : c.ajaxSettings).port
        if (f === 'abort') {
          if (a[d]) {
            a[d].abort()
          }
          a[d] = b.apply(this, arguments)
          return a[d]
        }
        return b.apply(this, arguments)
      }
    }
  })(jQuery)
  ; (function (a) {
    a.extend(a.fn, {
      validateDelegate: function (d, c, b) {
        return this.bind(c, function (e) {
          var f = a(e.target)
          if (f.is(d)) {
            return b.apply(f, arguments)
          }
        })
      },
    })
  })(jQuery)
  /*! http://mths.be/placeholder v2.0.8 by @mathias */
  ; (function (i, k, f) {
    var b = Object.prototype.toString.call(i.operamini) == '[object OperaMini]'
    var a = 'placeholder' in k.createElement('input') && !b
    var g = 'placeholder' in k.createElement('textarea') && !b
    var l = f.fn
    var e = f.valHooks
    var c = f.propHooks
    var n
    var m
    if (a && g) {
      m = l.placeholder = function () {
        return this
      }
      m.input = m.textarea = true
    } else {
      m = l.placeholder = function () {
        var p = this
        p.filter((a ? 'textarea' : ':input') + '[placeholder]')
          .not('.placeholder')
          .bind({ 'focus.placeholder': d, 'blur.placeholder': h })
          .data('placeholder-enabled', true)
          .trigger('blur.placeholder')
        return p
      }
      m.input = a
      m.textarea = g
      n = {
        get: function (q) {
          var p = f(q)
          var r = p.data('placeholder-password')
          if (r) {
            return r[0].value
          }
          return p.data('placeholder-enabled') && p.hasClass('placeholder')
            ? ''
            : q.value
        },
        set: function (q, s) {
          var p = f(q)
          var r = p.data('placeholder-password')
          if (r) {
            return (r[0].value = s)
          }
          if (!p.data('placeholder-enabled')) {
            return (q.value = s)
          }
          if (s == '') {
            q.value = s
            if (q != o()) {
              h.call(q)
            }
          } else {
            if (p.hasClass('placeholder')) {
              d.call(q, true, s) || (q.value = s)
            } else {
              q.value = s
            }
          }
          return p
        },
      }
      if (!a) {
        e.input = n
        c.value = n
      }
      if (!g) {
        e.textarea = n
        c.value = n
      }
      f(function () {
        f(k).delegate('form', 'submit.placeholder', function () {
          var p = f('.placeholder', this).each(d)
          setTimeout(function () {
            p.each(h)
          }, 10)
        })
      })
      f(i).bind('beforeunload.placeholder', function () {
        f('.placeholder').each(function () {
          this.value = ''
        })
      })
    }
    function j(q) {
      var p = {}
      var r = /^jQuery\d+$/
      f.each(q.attributes, function (t, s) {
        if (s.specified && !r.test(s.name)) {
          p[s.name] = s.value
        }
      })
      return p
    }
    function d(q, r) {
      var p = this
      var s = f(p)
      if (p.value == s.attr('placeholder') && s.hasClass('placeholder')) {
        if (s.data('placeholder-password')) {
          s = s
            .hide()
            .next()
            .show()
            .attr('id', s.removeAttr('id').data('placeholder-id'))
          if (q === true) {
            return (s[0].value = r)
          }
          s.focus()
        } else {
          p.value = ''
          s.removeClass('placeholder')
          p == o() && p.select()
        }
      }
    }
    function h() {
      var t
      var p = this
      var s = f(p)
      var r = this.id
      if (p.value == '') {
        if (p.type == 'password') {
          if (!s.data('placeholder-textinput')) {
            try {
              t = s.clone().attr({ type: 'text' })
            } catch (q) {
              t = f('<input>').attr(f.extend(j(this), { type: 'text' }))
            }
            t.removeAttr('name')
              .data({ 'placeholder-password': s, 'placeholder-id': r })
              .bind('focus.placeholder', d)
            s.data({ 'placeholder-textinput': t, 'placeholder-id': r }).before(t)
          }
          s = s.removeAttr('id').hide().prev().attr('id', r).show()
        }
        s.addClass('placeholder')
        s[0].value = s.attr('placeholder')
      } else {
        s.removeClass('placeholder')
      }
    }
    function o() {
      try {
        return k.activeElement
      } catch (p) { }
    }
  })(this, document, jQuery)
  ; (function (a) {
    if (typeof define === 'function' && define.amd) {
      define(['jquery'], a)
    } else {
      a(jQuery)
    }
  })(function (e) {
    var h = [],
      f = e(document),
      c = navigator.userAgent.toLowerCase(),
      g = e(window),
      a = []
    var b = {
      ieQuirks: null,
      msie: /msie/.test(c) && !/opera/.test(c),
      opera: /opera/.test(c),
    }
    b.ie6 =
      b.msie && /msie 6./.test(c) && typeof window.XMLHttpRequest !== 'object'
    b.ie7 = b.msie && /msie 7.0/.test(c)
    b.boxModel = document.compatMode === 'CSS1Compat'
    e.modal = function (i, d) {
      return e.modal.impl.init(i, d)
    }
    e.modal.close = function () {
      e.modal.impl.close()
    }
    e.modal.focus = function (d) {
      e.modal.impl.focus(d)
    }
    e.modal.setContainerDimensions = function () {
      e.modal.impl.setContainerDimensions()
    }
    e.modal.setPosition = function () {
      e.modal.impl.setPosition()
    }
    e.modal.update = function (d, i) {
      e.modal.impl.update(d, i)
    }
    e.fn.modal = function (d) {
      return e.modal.impl.init(this, d)
    }
    e.modal.defaults = {
      appendTo: 'body',
      focus: true,
      opacity: 50,
      overlayId: 'simplemodal-overlay',
      overlayCss: {},
      containerId: 'simplemodal-container',
      containerCss: {},
      dataId: 'simplemodal-data',
      dataCss: {},
      minHeight: null,
      minWidth: null,
      maxHeight: null,
      maxWidth: null,
      autoResize: false,
      autoPosition: true,
      zIndex: 1000,
      close: true,
      closeHTML: '<a class="modalCloseImg" title="Close"></a>',
      closeClass: 'simplemodal-close',
      escClose: true,
      overlayClose: false,
      fixed: true,
      position: null,
      persist: false,
      modal: true,
      onOpen: null,
      onShow: null,
      onClose: null,
    }
    e.modal.impl = {
      d: {},
      init: function (j, d) {
        var i = this
        if (i.d.data) {
          return false
        }
        b.ieQuirks = b.msie && !b.boxModel
        i.o = e.extend({}, e.modal.defaults, d)
        i.zIndex = i.o.zIndex
        i.occb = false
        if (typeof j === 'object') {
          j = j instanceof e ? j : e(j)
          i.d.placeholder = false
          if (j.parent().parent().length > 0) {
            j.before(
              e('<span></span>')
                .attr('id', 'simplemodal-placeholder')
                .css({ display: 'none' })
            )
            i.d.placeholder = true
            i.display = j.css('display')
            if (!i.o.persist) {
              i.d.orig = j.clone(true)
            }
          }
        } else {
          if (typeof j === 'string' || typeof j === 'number') {
            j = e('<div></div>').html(j)
          } else {
            alert('SimpleModal Error: Unsupported data type: ' + typeof j)
            return i
          }
        }
        i.create(j)
        j = null
        i.open()
        if (e.isFunction(i.o.onShow)) {
          i.o.onShow.apply(i, [i.d])
        }
        return i
      },
      create: function (i) {
        var d = this
        d.getDimensions()
        if (d.o.modal && b.ie6) {
          d.d.iframe = e('<iframe src="javascript:false;"></iframe>')
            .css(
              e.extend(d.o.iframeCss, {
                display: 'none',
                opacity: 0,
                position: 'fixed',
                height: a[0],
                width: a[1],
                zIndex: d.o.zIndex,
                top: 0,
                left: 0,
              })
            )
            .appendTo(d.o.appendTo)
        }
        d.d.overlay = e('<div></div>')
          .attr('id', d.o.overlayId)
          .addClass('simplemodal-overlay')
          .css(
            e.extend(d.o.overlayCss, {
              display: 'none',
              opacity: d.o.opacity / 100,
              height: d.o.modal ? h[0] : 0,
              width: d.o.modal ? h[1] : 0,
              position: 'fixed',
              left: 0,
              top: 0,
              zIndex: d.o.zIndex + 1,
            })
          )
          .appendTo(d.o.appendTo)
        d.d.container = e('<div></div>')
          .attr('id', d.o.containerId)
          .attr('role', 'alertdialog')
          .addClass('simplemodal-container')
          .css(
            e.extend(
              { position: d.o.fixed ? 'fixed' : 'absolute' },
              d.o.containerCss,
              { display: 'none', zIndex: d.o.zIndex + 2 }
            )
          )
          .append(
            d.o.close && d.o.closeHTML
              ? e(d.o.closeHTML).addClass(d.o.closeClass)
              : ''
          )
          .appendTo(d.o.appendTo)
        d.d.wrap = e('<div></div>')
          .attr('tabIndex', -1)
          .addClass('simplemodal-wrap')
          .css({ height: '100%', outline: 0, width: '100%' })
          .appendTo(d.d.container)
        d.d.data = i
          .attr('id', i.attr('id') || d.o.dataId)
          .addClass('simplemodal-data')
          .css(e.extend(d.o.dataCss, { display: 'none' }))
          .appendTo('body')
        i = null
        d.setContainerDimensions()
        d.d.data.appendTo(d.d.wrap)
        if (b.ie6 || b.ieQuirks) {
          d.fixIE()
        }
      },
      bindEvents: function () {
        var d = this
        e('.' + d.o.closeClass).bind('click.simplemodal', function (i) {
          i.preventDefault()
          d.close()
        })
        if (d.o.modal && d.o.close && d.o.overlayClose) {
          d.d.overlay.bind('click.simplemodal', function (i) {
            i.preventDefault()
            d.close()
          })
        }
        f.bind('keydown.simplemodal', function (i) {
          if (d.o.modal && i.keyCode === 9) {
            d.watchTab(i)
          } else {
            if (d.o.close && d.o.escClose && i.keyCode === 27) {
              i.preventDefault()
              d.close()
            }
          }
        })
        g.bind('resize.simplemodal orientationchange.simplemodal', function () {
          d.getDimensions()
          d.o.autoResize
            ? d.setContainerDimensions()
            : d.o.autoPosition && d.setPosition()
          if (b.ie6 || b.ieQuirks) {
            d.fixIE()
          } else {
            if (d.o.modal) {
              d.d.iframe && d.d.iframe.css({ height: a[0], width: a[1] })
              d.d.overlay.css({ height: h[0], width: h[1] })
            }
          }
        })
      },
      unbindEvents: function () {
        e('.' + this.o.closeClass).unbind('click.simplemodal')
        f.unbind('keydown.simplemodal')
        g.unbind('.simplemodal')
        this.d.overlay.unbind('click.simplemodal')
      },
      fixIE: function () {
        var d = this,
          i = d.o.position
        e.each(
          [
            d.d.iframe || null,
            !d.o.modal ? null : d.d.overlay,
            d.d.container.css('position') === 'fixed' ? d.d.container : null,
          ],
          function (u, m) {
            if (m) {
              var r = 'document.body.clientHeight',
                w = 'document.body.clientWidth',
                y = 'document.body.scrollHeight',
                v = 'document.body.scrollLeft',
                p = 'document.body.scrollTop',
                l = 'document.body.scrollWidth',
                k = 'document.documentElement.clientHeight',
                t = 'document.documentElement.clientWidth',
                q = 'document.documentElement.scrollLeft',
                z = 'document.documentElement.scrollTop',
                A = m[0].style
              A.position = 'absolute'
              if (u < 2) {
                A.removeExpression('height')
                A.removeExpression('width')
                A.setExpression(
                  'height',
                  '' + y + ' > ' + r + ' ? ' + y + ' : ' + r + ' + "px"'
                )
                A.setExpression(
                  'width',
                  '' + l + ' > ' + w + ' ? ' + l + ' : ' + w + ' + "px"'
                )
              } else {
                var o, j
                if (i && i.constructor === Array) {
                  var x = i[0]
                    ? typeof i[0] === 'number'
                      ? i[0].toString()
                      : i[0].replace(/px/, '')
                    : m.css('top').replace(/px/, '')
                  o =
                    x.indexOf('%') === -1
                      ? x + ' + (t = ' + z + ' ? ' + z + ' : ' + p + ') + "px"'
                      : parseInt(x.replace(/%/, '')) +
                      ' * ((' +
                      k +
                      ' || ' +
                      r +
                      ') / 100) + (t = ' +
                      z +
                      ' ? ' +
                      z +
                      ' : ' +
                      p +
                      ') + "px"'
                  if (i[1]) {
                    var n =
                      typeof i[1] === 'number'
                        ? i[1].toString()
                        : i[1].replace(/px/, '')
                    j =
                      n.indexOf('%') === -1
                        ? n + ' + (t = ' + q + ' ? ' + q + ' : ' + v + ') + "px"'
                        : parseInt(n.replace(/%/, '')) +
                        ' * ((' +
                        t +
                        ' || ' +
                        w +
                        ') / 100) + (t = ' +
                        q +
                        ' ? ' +
                        q +
                        ' : ' +
                        v +
                        ') + "px"'
                  }
                } else {
                  o =
                    '(' +
                    k +
                    ' || ' +
                    r +
                    ') / 2 - (this.offsetHeight / 2) + (t = ' +
                    z +
                    ' ? ' +
                    z +
                    ' : ' +
                    p +
                    ') + "px"'
                  j =
                    '(' +
                    t +
                    ' || ' +
                    w +
                    ') / 2 - (this.offsetWidth / 2) + (t = ' +
                    q +
                    ' ? ' +
                    q +
                    ' : ' +
                    v +
                    ') + "px"'
                }
                A.removeExpression('top')
                A.removeExpression('left')
                A.setExpression('top', o)
                A.setExpression('left', j)
              }
            }
          }
        )
      },
      focus: function (k) {
        var i = this,
          j = k && e.inArray(k, ['first', 'last']) !== -1 ? k : 'first'
        var d = e(':input:enabled:visible:' + j, i.d.wrap)
        setTimeout(function () {
          d.length > 0 ? d.focus() : i.d.wrap.focus()
        }, 10)
      },
      getDimensions: function () {
        var i = this,
          d =
            typeof window.innerHeight === 'undefined'
              ? g.height()
              : window.innerHeight
        h = [f.height(), f.width()]
        a = [d, g.width()]
      },
      getVal: function (i, j) {
        return i
          ? typeof i === 'number'
            ? i
            : i === 'auto'
              ? 0
              : i.indexOf('%') > 0
                ? (parseInt(i.replace(/%/, '')) / 100) * (j === 'h' ? a[0] : a[1])
                : parseInt(i.replace(/px/, ''))
          : null
      },
      update: function (d, j) {
        var i = this
        if (!i.d.data) {
          return false
        }
        i.d.origHeight = i.getVal(d, 'h')
        i.d.origWidth = i.getVal(j, 'w')
        i.d.data.hide()
        d && i.d.container.css('height', d)
        j && i.d.container.css('width', j)
        i.setContainerDimensions()
        i.d.data.show()
        i.o.focus && i.focus()
        i.unbindEvents()
        i.bindEvents()
      },
      setContainerDimensions: function () {
        var t = this,
          k = b.ie6 || b.ie7
        var d = t.d.origHeight
          ? t.d.origHeight
          : b.opera
            ? t.d.container.height()
            : t.getVal(
              k
                ? t.d.container[0].currentStyle.height
                : t.d.container.css('height'),
              'h'
            ),
          j = t.d.origWidth
            ? t.d.origWidth
            : b.opera
              ? t.d.container.width()
              : t.getVal(
                k
                  ? t.d.container[0].currentStyle.width
                  : t.d.container.css('width'),
                'w'
              ),
          o = t.d.data.outerHeight(true),
          i = t.d.data.outerWidth(true)
        t.d.origHeight = t.d.origHeight || d
        t.d.origWidth = t.d.origWidth || j
        var l = t.o.maxHeight ? t.getVal(t.o.maxHeight, 'h') : null,
          p = t.o.maxWidth ? t.getVal(t.o.maxWidth, 'w') : null,
          n = l && l < a[0] ? l : a[0],
          r = p && p < a[1] ? p : a[1]
        var m = t.o.minHeight ? t.getVal(t.o.minHeight, 'h') : 'auto'
        if (!d) {
          if (!o) {
            d = m
          } else {
            if (o > n) {
              d = n
            } else {
              if (t.o.minHeight && m !== 'auto' && o < m) {
                d = m
              } else {
                d = o
              }
            }
          }
        } else {
          d = t.o.autoResize && d > n ? n : d < m ? m : d
        }
        var q = t.o.minWidth ? t.getVal(t.o.minWidth, 'w') : 'auto'
        if (!j) {
          if (!i) {
            j = q
          } else {
            if (i > r) {
              j = r
            } else {
              if (t.o.minWidth && q !== 'auto' && i < q) {
                j = q
              } else {
                j = i
              }
            }
          }
        } else {
          j = t.o.autoResize && j > r ? r : j < q ? q : j
        }
        t.d.genWidth = j
        t.d.container.css({ height: d, width: j })
        t.d.wrap.css({ overflow: 'visible' })
        t.o.autoPosition && t.setPosition()
      },
      setPosition: function () {
        var i = parseInt(e(document.body).outerWidth(true))
        var o = this.d.container.outerWidth(true)
        if (i < 768) {
          o = i * 0.95
          this.d.container.css({ width: o })
        } else {
          this.d.container.css({ width: this.d.genWidth })
        }
        var k = this,
          m,
          l,
          n = a[0] / 2 - k.d.container.outerHeight(true) / 2,
          j = a[1] / 2 - o / 2,
          d = k.d.container.css('position') !== 'fixed' ? g.scrollTop() : 0
        if (
          k.o.position &&
          Object.prototype.toString.call(k.o.position) === '[object Array]'
        ) {
          m = d + (k.o.position[0] || n)
          l = k.o.position[1] || j
        } else {
          m = d + n
          l = j
        }
        k.d.container.css({ left: l, top: m })
      },
      watchTab: function (i) {
        var d = this
        if (e(i.target).parents('.simplemodal-container').length > 0) {
          d.inputs = e(
            ':input:enabled:visible:first, :input:enabled:visible:last',
            d.d.data[0]
          )
          if (
            (!i.shiftKey && i.target === d.inputs[d.inputs.length - 1]) ||
            (i.shiftKey && i.target === d.inputs[0]) ||
            d.inputs.length === 0
          ) {
            i.preventDefault()
            var j = i.shiftKey ? 'last' : 'first'
            d.focus(j)
          }
        } else {
          i.preventDefault()
          d.focus()
        }
      },
      open: function () {
        var d = this
        d.d.iframe && d.d.iframe.show()
        if (e.isFunction(d.o.onOpen)) {
          d.o.onOpen.apply(d, [d.d])
        } else {
          d.d.overlay.show()
          d.d.container.show()
          d.d.data.show()
        }
        d.o.focus && d.focus()
        d.bindEvents()
      },
      close: function () {
        var d = this
        if (!d.d.data) {
          return false
        }
        d.unbindEvents()
        if (e.isFunction(d.o.onClose) && !d.occb) {
          d.occb = true
          d.o.onClose.apply(d, [d.d])
        } else {
          if (d.d.placeholder) {
            var i = e('#simplemodal-placeholder')
            if (d.o.persist) {
              i.replaceWith(
                d.d.data.removeClass('simplemodal-data').css('display', d.display)
              )
            } else {
              d.d.data.hide().remove()
              i.replaceWith(d.d.orig)
            }
          } else {
            d.d.data.hide().remove()
          }
          d.d.container.hide().remove()
          d.d.overlay.hide()
          d.d.iframe && d.d.iframe.hide().remove()
          d.d.overlay.remove()
          d.d = {}
        }
      },
    }
  })
  /*! JsRender v1.0pre: http://github.com/BorisMoore/jsrender */
  ; (function (b, v, m) {
    if ((v && v.views) || b.jsviews) {
      return
    }
    var Z = 'v1.0pre',
      G,
      q,
      w,
      s,
      k = '{',
      j = '{',
      f = '}',
      e = '}',
      o = '!',
      O = {},
      U = false,
      C = true,
      y = /^(?:null|true|false|\d[\d.]*|([\w$]+|~([\w$]+)|#(view|([\w$]+))?)([\w$.]*?)(?:[.[]([\w$]+)\]?)?|(['"]).*\8)$/g,
      Q = /(\()(?=|\s*\()|(?:([([])\s*)?(?:([#~]?[\w$.]+)?\s*((\+\+|--)|\+|-|&&|\|\||===|!==|==|!=|<=|>=|[<>%*!:?\/]|(=))\s*|([#~]?[\w$.]+)([([])?)|(,\s*)|(\(?)\\?(?:(')|("))|(?:\s*([)\]])([([]?))|(\s+)/g,
      M = /\r?\n/g,
      d = /\\(['"])/g,
      Y = /\\?(['"])/g,
      l = /\x08(~)?([^\x08]+)\x08/g,
      aa = 0,
      R = { '&': '&amp;', '<': '&lt;', '>': '&gt;' },
      N = 'data-jsv-tmpl',
      V = 'var j=j||' + (v ? 'jQuery.' : 'js') + 'views,',
      x = /[\x00"&'<>]/g,
      p = Array.prototype.slice,
      J = {},
      H = {
        jsviews: Z,
        sub: O,
        debugMode: C,
        render: J,
        templates: E,
        tags: F,
        helpers: X,
        converters: a,
        delimiters: t,
        View: W,
        _convert: L,
        _err: function (ab) {
          return H.debugMode ? 'Error: ' + (ab.message || ab) + '. ' : ''
        },
        _tmplFn: A,
        _tag: c,
        error: D,
        Error: B,
      }
    function B(ab) {
      ; (this.name = 'JsRender Error'), (this.message = ab || 'JsRender error')
    }
    ; (B.prototype = new Error()).constructor = B
    function t(ab, ac, ad) {
      if (!H.rTag || arguments.length) {
        k = ab ? '\\' + ab.charAt(0) : k
        j = ab ? '\\' + ab.charAt(1) : j
        f = ac ? '\\' + ac.charAt(0) : f
        e = ac ? '\\' + ac.charAt(0) : e
        ad = ad ? '\\' + ad : o
        H.rTag = q =
          '(\\w*' +
          ad +
          ')?(?:(?:(\\w+(?=[\\/\\s' +
          f +
          ']))|(?:(\\w+)?(:)|(>)|(\\*)))\\s*((?:[^' +
          f +
          ']|' +
          f +
          '(?!' +
          e +
          '))*?)'
        q = new RegExp(k + j + q + '(\\/)?|(?:\\/(\\w+)))' + f + e, 'g')
        w = new RegExp('<.*>|([^\\\\]|^)[{}]|' + k + j + '.*' + f + e)
      }
      return [k, j, f, e, o]
    }
    function P(ac) {
      var ab = this,
        ad = ab.tmpl.helpers || {}
      ac = (ab.dynCtx && ab.dynCtx[ac] !== m
        ? ab.dynCtx
        : ab.ctx[ac] !== m
          ? ab.ctx
          : ad[ac] !== m
            ? ad
            : X[ac] !== m
              ? X
              : {})[ac]
      return typeof ac !== 'function'
        ? ac
        : function () {
          return ac.apply(ab, arguments)
        }
    }
    function L(af, ad, ae, ag) {
      var ac = (!ae.markup && ae) || m,
        ab = ad.tmpl.converters
      ab = (ab && ab[af]) || a[af]
      return ab
        ? ab.call(ad, ag, ac)
        : (D('Unknown converter: {{' + af + ':'), ag)
    }
    function c(ao, al, am, ag, af) {
      var ah,
        ad = !am.markup && am,
        an = ad ? ad.view.tmpl : am,
        ae = an.tags,
        ac = an.templates,
        aj = (af.props = af.props || {}),
        ak = aj.tmpl,
        ai = arguments.length > 5 ? p.call(arguments, 5) : [],
        ab = (ae && ae[ao]) || F[ao]
      if (!ab) {
        D('Unknown tag: {{' + ao + '}}')
        return ''
      }
      ag = ag && an.tmpls[ag - 1]
      ak = ak || ag || ab.template || m
      af.view = al
      ak = af.tmpl = '' + ak === ak ? (ac && ac[ak]) || E[ak] || E(ak) : ak
      af.attr = am.attr = am.attr || ab.attr
      af.tagName = ao
      af.renderContent = i
      if (ad) {
        ad.tagCtx = { args: ai, props: aj, path: af.path, tag: ab }
      }
      if (ab.render) {
        ah = ab.render.apply(af, ai)
      }
      return (
        ah ||
        (ah == m ? (ak ? af.renderContent(ai[0], m, al) : '') : ah.toString())
      )
    }
    function W(ab, aj, ai, ac, ae, af, ak, ad) {
      var ag,
        ah = {
          data: ac,
          tmpl: ae,
          views: ad ? [] : {},
          parent: ai,
          ctx: ab,
          path: aj,
          _useKey: ad ? 0 : 1,
          _onRender: ak,
          _hlp: P,
          renderLink: function (al) {
            var am = this.tmpl.tmpls[al]
            return am.render(ac, ab, this)
          },
        }
      if (ai) {
        ag = ai.views
        if (ai._useKey) {
          ag[(ah.key = '_' + ai._useKey++)] = ah
          ah.index = ai.index
        } else {
          ag.splice((ah.key = ah.index = af !== m ? af : ag.length), 0, ah)
        }
      }
      return ah
    }
    function T(ac, ab, ad, ag, ah) {
      var ae, af
      if (ad && typeof ad === 'object' && !ad.nodeType) {
        for (ae in ad) {
          ab(ae, ad[ae])
        }
        return ac
      }
      if (ag === m) {
        ag = ad
        ad = m
      }
      if ((af = O.onBeforeStoreItem)) {
        ah = af(ab, ad, ag, ah) || ah
      }
      if (!ad) {
        ag = ah ? ah(ag) : ag
      } else {
        if ('' + ad === ad) {
          if (ag === null) {
            delete ab[ad]
          } else {
            ab[ad] = ah ? (ag = ah(ag, ad)) : ag
          }
        }
      }
      if ((af = O.onStoreItem)) {
        af(ab, ad, ag, ah)
      }
      return ag
    }
    function n(ac, ab) {
      ac = typeof ac === 'function' ? { render: ac } : ac
      ac.name = ab
      ac.is = 'tag'
      return ac
    }
    function E(ac, ab) {
      return T(this, E, ac, ab, h)
    }
    function F(ac, ab) {
      return T(this, F, ac, ab, n)
    }
    function X(ab, ac) {
      return T(this, X, ab, ac)
    }
    function a(ac, ab) {
      return T(this, a, ac, ab)
    }
    function i(av, ab, ad, aw, ai, ap, af) {
      var ar,
        aq,
        ak,
        au,
        an,
        ag,
        aj,
        ac,
        am,
        at,
        ae,
        ah,
        ao = this,
        al = ''
      if (aw === C) {
        am = C
        aw = 0
      }
      if (ao.tagName) {
        aj = ao.tmpl
        if (ab || ao.ctx) {
          at = {}
          if (ao.ctx) {
            s(at, ao.ctx)
          }
          if (ab) {
            s(at, ab)
          }
        }
        ab = at
        ac = ao.props
        if (ac && ac.link === U) {
          ab = ab || {}
          ab.link = U
        }
        ad = ad || ao.view
        ap = ap || ao.path
        aw = aw || ao.key
        af = ad && ad._onRender
      } else {
        aj =
          (ao.jquery &&
            (ao[0] || D('Unknown template: "' + ao.selector + '"'))) ||
          ao
        af = af || (ad && ad._onRender)
      }
      if (aj) {
        if (ad) {
          ag = ad.ctx
          ae = ad.dynCtx
          if (av === ad) {
            av = ad.data
            ai = C
          }
        } else {
          ag = X
        }
        ah = ab && ab !== ag
        if (ae || ah) {
          ag = s({}, ag)
          if (ah) {
            s(ag, ab)
          }
          if (ae) {
            s(ag, ae)
          }
        }
        ab = ag
        if (!aj.fn) {
          aj = E[aj] || E(aj)
        }
        if (aj) {
          af = ab.link !== U && af
          if (G.isArray(av) && !ai) {
            au = am ? ad : (aw !== m && ad) || W(ab, ap, ad, av, aj, aw, af, C)
            for (ar = 0, aq = av.length; ar < aq; ar++) {
              ak = av[ar]
              an = aj.fn(ak, W(ab, ap, au, ak, aj, (aw || 0) + ar, af), H)
              al += af ? af(an, aj, ac) : an
            }
          } else {
            au = am ? ad : W(ab, ap, ad, av, aj, aw, af)
            au._onRender = af
            al += aj.fn(av, au, H, r)
          }
          return af ? af(al, aj, ac, au.key, ap) : al
        }
      }
      D('No template found')
      return ''
    }
    function r(ab) {
      return ab
    }
    function D(ab) {
      if (H.debugMode) {
        throw new H.Error(ab)
      }
    }
    function K(ab) {
      D('Syntax error\n' + ab)
    }
    function A(an, ak, ai) {
      var al,
        ad = ak && ak.allowCode,
        ac = [],
        af = 0,
        aj = [],
        ah = ac,
        ag = [, , , ac]
      function ae(ao) {
        ao -= af
        if (ao) {
          ah.push(an.substr(af, ao).replace(M, '\\n'))
        }
      }
      function am(ao) {
        ao && K('Unmatched or missing tag: "{{/' + ao + '}}" in template:\n' + an)
      }
      function ab(aC, ao, ar, at, az, ay, aq, av, aw, ap, aA) {
        if (ay) {
          az = ':'
          at = 'html'
        }
        var aD,
          ax = '',
          aB = '',
          au = !aw && !az && !ai
        ar = ar || az
        ae(aA)
        af = aA + aC.length
        if (aq) {
          if (ad) {
            ah.push(['*', av.replace(d, '$1')])
          }
        } else {
          if (ar) {
            if (ar === 'else') {
              ag[5] = an.substring(ag[5], aA)
              ag = aj.pop()
              ah = ag[3]
              au = C
            } else {
              if (ao) {
                aj.push(ag)
                ag = ['!', , , [], , aA]
                ah.push(ag)
                ah = ag[3]
              }
            }
            av = av
              ? u(av, ai, ao).replace(l, function (aE, aF, aG) {
                if (aF) {
                  aB += aG + ','
                } else {
                  ax += aG + ','
                }
                return ''
              })
              : ''
            ax = ax.slice(0, -1)
            av = av.slice(0, -1)
            al = [
              ar,
              at || '',
              av,
              au && [],
              '{' +
              (ax ? 'props:{' + ax + '},' : '') +
              'data: data' +
              (aB ? ',ctx:{' + aB.slice(0, -1) + '}' : '') +
              '}',
            ]
            ah.push(al)
            if (au) {
              aj.push(ag)
              ag = al
              ag[5] = af
            } else {
              if (ao) {
                ag[5] = an.substring(ag[5], af)
                ag = aj.pop()
              }
            }
          } else {
            if (ap) {
              aD = ag[0]
              am(ap !== aD && !(ap === 'if' && aD === 'else') && aD)
              ag[5] = an.substring(ag[5], aA)
              if (aD === '!') {
                ag[5] = an.substring(ag[5], af)
                ag = aj.pop()
              }
              ag = aj.pop()
            }
          }
        }
        am(!ag && ap)
        ah = ag[3]
      }
      an = an.replace(Y, '\\$1')
      am(aj[0] && aj[0][3].pop()[0])
      an.replace(q, ab)
      ae(an.length)
      return z(ac, ak)
    }
    function z(ai, al) {
      var an,
        aq,
        ao,
        ac,
        ay,
        ab,
        ad,
        af,
        ah,
        ax,
        av,
        au,
        ae,
        ag,
        aw,
        ap,
        am,
        at,
        ak = al ? { allowCode: (aw = al.allowCode), debug: al.debug } : {},
        aj = al && al.tmpls
      ao = ai.length
      ac = ao ? '' : '"";'
      for (aq = 0; aq < ao; aq++) {
        an = ai[aq]
        if ('' + an === an) {
          ac += '"' + an + '"+'
        } else {
          ax = an[0]
          if (ax === '*') {
            ac =
              ac.slice(0, aq ? -1 : -3) +
              ';' +
              an[1] +
              (aq + 1 < ao ? 'ret+=' : '')
          } else {
            av = an[1]
            au = an[2]
            ap = an[3]
            ae = an[4]
            markup = an[5]
            if (ax.slice(-1) === '!') {
              ag = g(markup, ak, al, aj.length)
              z(ap, ag)
              if ((am = /\s+[\w-]*\s*\=\s*\\['"]$/.exec(ai[aq - 1]))) {
                D(
                  "'{{!' in attribute:\n..." +
                  ai[aq - 1] +
                  '{{!...\nUse data-link'
                )
              }
              ac += 'view.renderLink(' + aj.length + ')+'
              ag.bound = C
              ag.fn.attr = am || 'leaf'
              aj.push(ag)
            } else {
              if (ap) {
                ag = g(markup, ak, al, aj.length)
                z(ap, ag)
                aj.push(ag)
              }
              ah = ah || ae.indexOf('view') > -1
              ac +=
                (ax === ':'
                  ? av === 'html'
                    ? ((ab = C), 'h(' + au)
                    : av
                      ? ((af = C), 'c("' + av + '",view,this,' + au)
                      : ((ad = C), '((v=' + au + ')!=u?v:""')
                  : ((ay = C),
                    't("' +
                    ax +
                    '",view,this,' +
                    (ap ? aj.length : '""') +
                    ',' +
                    ae +
                    (au ? ',' : '') +
                    au)) + ')+'
            }
          }
        }
      }
      ac =
        V +
        (ad ? 'v,' : '') +
        (ay ? 't=j._tag,' : '') +
        (af ? 'c=j._convert,' : '') +
        (ab ? 'h=j.converters.html,' : '') +
        'ret; try{\n\n' +
        (ak.debug ? 'debugger;' : '') +
        (aw ? 'ret=' : 'return ') +
        ac.slice(0, -1) +
        ';\n\n' +
        (aw ? 'return ret;' : '') +
        '}catch(e){return j._err(e);}'
      try {
        ac = new Function('data, view, j, b, u', ac)
      } catch (ar) {
        K('Compiled template code:\n\n' + ac, ar)
      }
      if (al) {
        al.fn = ac
      }
      return ac
    }
    function u(af, ai, ab) {
      var ag,
        ac = {},
        ad = 0,
        ae = U,
        ah = U
      function aj(
        al,
        aB,
        an,
        at,
        aq,
        ao,
        aC,
        ak,
        ar,
        aA,
        az,
        av,
        ay,
        ap,
        am,
        ax
      ) {
        aq = aq || ''
        an = an || aB || az
        at = at || ak
        ar = ar || am || ''
        aq = aq || ''
        var aw = (ai || ab) && ar !== '('
        function au(aL, aE, aD, aK, aI, aF, aG) {
          if (aE) {
            var aJ,
              aH =
                (aD ? 'view._hlp("' + aD + '")' : aK ? 'view' : 'data') +
                (aG
                  ? (aI ? '.' + aI : aD ? '' : aK ? '' : '.' + aE) + (aF || '')
                  : ((aG = aD ? '' : aK ? aI || '' : aE), ''))
            aJ = aG ? '.' + aG : ''
            if (!aw) {
              aH = aH + aJ
            }
            aH = aH.slice(0, 9) === 'view.data' ? aH.slice(5) : aH
            if (aw) {
              aH = 'b(' + aH + ',"' + aG + '")' + aJ
            }
            return aH
          }
          return aL
        }
        if (ao) {
          K(af)
        } else {
          return ah
            ? ((ah = !av), ah ? al : '"')
            : ae
              ? ((ae = !ay), ae ? al : '"')
              : (an ? (ad++, an) : '') +
              (ax
                ? ad
                  ? ''
                  : ag
                    ? ((ag = U), '\b')
                    : ','
                : aC
                  ? (ad && K(af), (ag = C), '\b' + at + ':')
                  : at
                    ? at.replace(y, au) + (ar ? ((ac[++ad] = C), ar) : aq)
                    : aq
                      ? aq
                      : ap
                        ? ((ac[ad--] = U), ap) + (ar ? ((ac[++ad] = C), ar) : '')
                        : aA
                          ? (ac[ad] || K(af), ',')
                          : aB
                            ? ''
                            : ((ah = av), (ae = ay), '"'))
        }
      }
      af = (af + ' ').replace(Q, aj)
      return af
    }
    function S(ab, af, ac) {
      var ad, ae
      if (ab) {
        for (ad in ab) {
          ae = ab[ad]
          if (!ae.is) {
            ab[ad] = af(ae, ad, ac)
          }
        }
      }
    }
    function h(ab, ad, ae, ac) {
      var ag, af
      function ah(ai) {
        if ('' + ai === ai || ai.nodeType > 0) {
          try {
            af = ai.nodeType > 0 ? ai : !w.test(ai) && v && v(ai)[0]
          } catch (aj) { }
          if (af) {
            ai = E[af.getAttribute(N)]
            if (!ai) {
              ad = ad || '_' + aa++
              af.setAttribute(N, ad)
              ai = h(af.innerHTML, ad, ae, ac)
              E[ad] = ai
            }
          }
          return ai
        }
      }
      ab = ab || ''
      ag = ah(ab)
      ac = ac || (ab.markup ? ab : {})
      ac.name = ad
      ac.is = 'tmpl'
      if (!ag && ab.markup && (ag = ah(ab.markup))) {
        if (ag.fn && (ag.debug !== ab.debug || ag.allowCode !== ab.allowCode)) {
          ag = ag.markup
        }
      }
      if (ag !== m) {
        if (ad && !ae) {
          J[ad] = function () {
            return ab.render.apply(ab, arguments)
          }
        }
        if (ag.fn || ab.fn) {
          if (ag.fn) {
            if (ad && ad !== ag.name) {
              ab = s(s({}, ag), ac)
            } else {
              ab = ag
            }
          }
        } else {
          ab = g(ag, ac, ae, 0)
          A(ag, ab)
        }
        S(ac.templates, h, ab)
        S(ac.tags, n)
        return ab
      }
    }
    function g(ac, ad, af, ae) {
      function ag(ah) {
        if (af[ah]) {
          ab[ah] = s(s({}, af[ah]), ad[ah])
        }
      }
      ad = ad || {}
      var ab = { markup: ac, tmpls: [], links: [], render: i }
      if (af) {
        if (af.templates) {
          ab.templates = s(s({}, af.templates), ad.templates)
        }
        ab.parent = af
        ab.name = af.name + '[' + ae + ']'
        ab.key = ae
      }
      s(ab, ad)
      if (af) {
        ag('templates')
        ag('tags')
        ag('helpers')
        ag('converters')
      }
      return ab
    }
    if (v) {
      G = v
      G.templates = E
      G.render = J
      G.views = H
      G.fn.render = i
    } else {
      G = b.jsviews = H
      G.extend = function (ad, ac) {
        var ab
        ad = ad || {}
        for (ab in ac) {
          ad[ab] = ac[ab]
        }
        return ad
      }
      G.isArray =
        (Array && Array.isArray) ||
        function (ab) {
          return Object.prototype.toString.call(ab) === '[object Array]'
        }
    }
    s = G.extend
    function I(ab) {
      return R[ab] || (R[ab] = '&#' + ab.charCodeAt(0) + ';')
    }
    F({
      if: function () {
        var ac = this,
          ab = ac.view
        ab.onElse = function (ag, ae) {
          var af = 0,
            ad = ae.length
          while (ad && !ae[af++]) {
            if (af === ad) {
              return ''
            }
          }
          ab.onElse = m
          ag.path = ''
          return ag.renderContent(ab)
        }
        return ab.onElse(this, arguments)
      },
      else: function () {
        var ab = this.view
        return ab.onElse ? ab.onElse(this, arguments) : ''
      },
      for: function () {
        var af,
          ad = this,
          ab = '',
          ae = arguments,
          ac = ae.length
        if (ac === 0) {
          ac = 1
        }
        for (af = 0; af < ac; af++) {
          ab += ad.renderContent(ae[af])
        }
        return ab
      },
      '*': function (ab) {
        return ab
      },
    })
    a({
      html: function (ab) {
        return ab != m ? String(ab).replace(x, I) : ''
      },
    })
    t()
  })(this, this.jQuery)
jQuery.easing.jswing = jQuery.easing.swing
jQuery.extend(jQuery.easing, {
  def: 'easeOutQuad',
  swing: function (e, f, a, h, g) {
    return jQuery.easing[jQuery.easing.def](e, f, a, h, g)
  },
  easeInQuad: function (e, f, a, h, g) {
    return h * (f /= g) * f + a
  },
  easeOutQuad: function (e, f, a, h, g) {
    return -h * (f /= g) * (f - 2) + a
  },
  easeInOutQuad: function (e, f, a, h, g) {
    if ((f /= g / 2) < 1) {
      return (h / 2) * f * f + a
    }
    return (-h / 2) * (--f * (f - 2) - 1) + a
  },
  easeInCubic: function (e, f, a, h, g) {
    return h * (f /= g) * f * f + a
  },
  easeOutCubic: function (e, f, a, h, g) {
    return h * ((f = f / g - 1) * f * f + 1) + a
  },
  easeInOutCubic: function (e, f, a, h, g) {
    if ((f /= g / 2) < 1) {
      return (h / 2) * f * f * f + a
    }
    return (h / 2) * ((f -= 2) * f * f + 2) + a
  },
  easeInQuart: function (e, f, a, h, g) {
    return h * (f /= g) * f * f * f + a
  },
  easeOutQuart: function (e, f, a, h, g) {
    return -h * ((f = f / g - 1) * f * f * f - 1) + a
  },
  easeInOutQuart: function (e, f, a, h, g) {
    if ((f /= g / 2) < 1) {
      return (h / 2) * f * f * f * f + a
    }
    return (-h / 2) * ((f -= 2) * f * f * f - 2) + a
  },
  easeInQuint: function (e, f, a, h, g) {
    return h * (f /= g) * f * f * f * f + a
  },
  easeOutQuint: function (e, f, a, h, g) {
    return h * ((f = f / g - 1) * f * f * f * f + 1) + a
  },
  easeInOutQuint: function (e, f, a, h, g) {
    if ((f /= g / 2) < 1) {
      return (h / 2) * f * f * f * f * f + a
    }
    return (h / 2) * ((f -= 2) * f * f * f * f + 2) + a
  },
  easeInSine: function (e, f, a, h, g) {
    return -h * Math.cos((f / g) * (Math.PI / 2)) + h + a
  },
  easeOutSine: function (e, f, a, h, g) {
    return h * Math.sin((f / g) * (Math.PI / 2)) + a
  },
  easeInOutSine: function (e, f, a, h, g) {
    return (-h / 2) * (Math.cos((Math.PI * f) / g) - 1) + a
  },
  easeInExpo: function (e, f, a, h, g) {
    return f == 0 ? a : h * Math.pow(2, 10 * (f / g - 1)) + a
  },
  easeOutExpo: function (e, f, a, h, g) {
    return f == g ? a + h : h * (-Math.pow(2, (-10 * f) / g) + 1) + a
  },
  easeInOutExpo: function (e, f, a, h, g) {
    if (f == 0) {
      return a
    }
    if (f == g) {
      return a + h
    }
    if ((f /= g / 2) < 1) {
      return (h / 2) * Math.pow(2, 10 * (f - 1)) + a
    }
    return (h / 2) * (-Math.pow(2, -10 * --f) + 2) + a
  },
  easeInCirc: function (e, f, a, h, g) {
    return -h * (Math.sqrt(1 - (f /= g) * f) - 1) + a
  },
  easeOutCirc: function (e, f, a, h, g) {
    return h * Math.sqrt(1 - (f = f / g - 1) * f) + a
  },
  easeInOutCirc: function (e, f, a, h, g) {
    if ((f /= g / 2) < 1) {
      return (-h / 2) * (Math.sqrt(1 - f * f) - 1) + a
    }
    return (h / 2) * (Math.sqrt(1 - (f -= 2) * f) + 1) + a
  },
  easeInElastic: function (f, h, e, l, k) {
    var i = 1.70158
    var j = 0
    var g = l
    if (h == 0) {
      return e
    }
    if ((h /= k) == 1) {
      return e + l
    }
    if (!j) {
      j = k * 0.3
    }
    if (g < Math.abs(l)) {
      g = l
      var i = j / 4
    } else {
      var i = (j / (2 * Math.PI)) * Math.asin(l / g)
    }
    return (
      -(
        g *
        Math.pow(2, 10 * (h -= 1)) *
        Math.sin(((h * k - i) * (2 * Math.PI)) / j)
      ) + e
    )
  },
  easeOutElastic: function (f, h, e, l, k) {
    var i = 1.70158
    var j = 0
    var g = l
    if (h == 0) {
      return e
    }
    if ((h /= k) == 1) {
      return e + l
    }
    if (!j) {
      j = k * 0.3
    }
    if (g < Math.abs(l)) {
      g = l
      var i = j / 4
    } else {
      var i = (j / (2 * Math.PI)) * Math.asin(l / g)
    }
    return (
      g * Math.pow(2, -10 * h) * Math.sin(((h * k - i) * (2 * Math.PI)) / j) +
      l +
      e
    )
  },
  easeInOutElastic: function (f, h, e, l, k) {
    var i = 1.70158
    var j = 0
    var g = l
    if (h == 0) {
      return e
    }
    if ((h /= k / 2) == 2) {
      return e + l
    }
    if (!j) {
      j = k * (0.3 * 1.5)
    }
    if (g < Math.abs(l)) {
      g = l
      var i = j / 4
    } else {
      var i = (j / (2 * Math.PI)) * Math.asin(l / g)
    }
    if (h < 1) {
      return (
        -0.5 *
        (g *
          Math.pow(2, 10 * (h -= 1)) *
          Math.sin(((h * k - i) * (2 * Math.PI)) / j)) +
        e
      )
    }
    return (
      g *
      Math.pow(2, -10 * (h -= 1)) *
      Math.sin(((h * k - i) * (2 * Math.PI)) / j) *
      0.5 +
      l +
      e
    )
  },
  easeInBack: function (e, f, a, i, h, g) {
    if (g == undefined) {
      g = 1.70158
    }
    return i * (f /= h) * f * ((g + 1) * f - g) + a
  },
  easeOutBack: function (e, f, a, i, h, g) {
    if (g == undefined) {
      g = 1.70158
    }
    return i * ((f = f / h - 1) * f * ((g + 1) * f + g) + 1) + a
  },
  easeInOutBack: function (e, f, a, i, h, g) {
    if (g == undefined) {
      g = 1.70158
    }
    if ((f /= h / 2) < 1) {
      return (i / 2) * (f * f * (((g *= 1.525) + 1) * f - g)) + a
    }
    return (i / 2) * ((f -= 2) * f * (((g *= 1.525) + 1) * f + g) + 2) + a
  },
  easeInBounce: function (e, f, a, h, g) {
    return h - jQuery.easing.easeOutBounce(e, g - f, 0, h, g) + a
  },
  easeOutBounce: function (e, f, a, h, g) {
    if ((f /= g) < 1 / 2.75) {
      return h * (7.5625 * f * f) + a
    } else {
      if (f < 2 / 2.75) {
        return h * (7.5625 * (f -= 1.5 / 2.75) * f + 0.75) + a
      } else {
        if (f < 2.5 / 2.75) {
          return h * (7.5625 * (f -= 2.25 / 2.75) * f + 0.9375) + a
        } else {
          return h * (7.5625 * (f -= 2.625 / 2.75) * f + 0.984375) + a
        }
      }
    }
  },
  easeInOutBounce: function (e, f, a, h, g) {
    if (f < g / 2) {
      return jQuery.easing.easeInBounce(e, f * 2, 0, h, g) * 0.5 + a
    }
    return (
      jQuery.easing.easeOutBounce(e, f * 2 - g, 0, h, g) * 0.5 + h * 0.5 + a
    )
  },
})
  ; (function () {
    var a = {
      type: 'POST',
      contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
      dataType: 'json',
      error: function (v, t, u) {
        if (typeof console !== 'undefined') {
          console.debug(u)
        }
      },
    }
    if (typeof String.prototype.trim !== 'function') {
      String.prototype.trim = function () {
        return $.trim(this)
      }
    }
    var s = navigator.userAgent.toLowerCase()
    var g = /windows/.test(s)
    var n = /ipad/.test(s)
    var p = !n && /(iphone|ipod)/.test(s)
    var f = !n && !p && /macintosh/.test(s)
    var q = /android/.test(s)
    var h = !q && /linux (i686|x86_64)/.test(s)
    var c = /cros/.test(s)
    var d = /firefox/.test(s)
    var r = /opera|opr\/[\d]+/.test(s)
    var k = !r && /(msie|trident)/.test(s)
    var e = /edge\/(\d+)/.test(s)
    var b = !r && !e && /chrome/.test(s) && /webkit/.test(s)
    var o = !r && !e && !b && /safari/.test(s)
    var j = k && /(msie 8)/.test(s)
    var l = /x64|win64|amd64|x86_64/.test(s)
    var i = $('body').attr('data-cd')
    if (!i) {
      i = '.zoom.us'
    }
    var m = {
      closeClass: 'simplemodal-close',
      closeHTML: null,
      minHeight: 171,
      opacity: 65,
      close: true,
      overlayClose: false,
      escClose: true,
      persist: false,
      modal: true,
      fixed: false,
      onClose: function (t) {
        t.container.fadeOut('fast', function () {
          t.overlay.fadeOut('fast', function () {
            $.modal.close()
          })
        })
      },
    }
    if (!n) {
      $.extend(m, {
        onOpen: function (t) {
          t.overlay.fadeIn('fast', function () {
            t.container.show()
            t.data.fadeIn('fast')
          })
        },
      })
    }
    $.extend(SB, {
      isWin: g,
      isMac: f,
      isIPad: n,
      isIPhone: p,
      isAndroid: q,
      isLinux: h,
      isChromeOS: c,
      isIE: k,
      isIE8: j,
      isEdge: e,
      isFirefox: d,
      isChrome: b,
      isOpera: r,
      isSafari: o,
      isBrowser64: l,
      cookieDomain: i,
      MODAL_DEFAULTS: m,
      jump: function (t, u) {
        if (u) {
          top.location.href = SB.baseUrl + SB.contextPath + t
        } else {
          window.location.href = SB.baseUrl + SB.contextPath + t
        }
      },
      ajax: function (t) {
        return $.ajax($.extend({}, a, t))
      },
      postForm: function (w, z, v) {
        var y = 'sb_post_form_'
        if (v && v.postActionName) {
          y = y + v.postActionName
        }
        var t = $('<form>', {
          id: y,
          name: y,
          style: 'display:none;',
          method: 'POST',
          action: w,
        })
        if (z) {
          for (var x in z) {
            t.append($('<input>', { type: 'hidden', name: x, value: z[x] }))
          }
        }
        if (v && v.userIframe === true) {
          var u = 'sb_post_iframe_'
          if (v && v.postActionName) {
            u = u + v.postActionName
          }
          var A = $('<iframe>', {
            id: u,
            name: u,
            style: 'display:none;',
            src: '',
          })
          t.attr('target', u)
          $(document.body).append(A).append(t)
        } else {
          $(document.body).append(t)
        }
        t.trigger('submit')
      },
      clearPostForm: function (t) {
        $('#sb_post_iframe_' + t).remove()
        $('#sb_post_form_' + t).remove()
      },
      post: function (v, w, x, u, t) {
        if (typeof w === 'function') {
          t = u
          u = x
          x = w
          w = {}
        }
        return SB.ajax({
          url: SB.contextPath + v,
          data: w,
          success: x,
          error: u,
          complete: t,
        })
      },
      post3: function (v) {
        var u,
          w,
          t = true,
          y = true,
          x
        if (v.errorNode) {
          u = v.errorNode
        } else {
          u = v.error
        }
        if (v.btnContainer) {
          w = v.btnContainer
        } else {
          w = v.btn
        }
        if (typeof v.showBusy == 'boolean') {
          t = v.showBusy
        }
        if (typeof v.showBusyAfter == 'boolean') {
          y = v.showBusyAfter
        }
        if (v.busyNode) {
          x = v.busyNode
        }
        return SB.post2(v.url, v.data, v.success, u, w, t, y, x, v)
      },
      post2: function (t, y, E, B, u, x, C, A, F) {
        var z = SB.getI18nText('Unknown Error!', 'common.unknown_error')
        var w = SB.getI18nText('Error', 'common.error')
        var v = $(),
          D
        if (typeof B === 'function') {
          if (B && B.jquery) {
            D = B
          } else {
            D = $('#error_msg')
          }
          B = function (H, I, G) {
            if (H) {
              if (typeof I === 'undefined') {
                I = z
              }
              D.text(I).show()
              if (F.errorCallBack && typeof F.errorCallBack === 'function') {
                F.errorCallBack(I)
              }
            } else {
              D.empty().hide()
            }
          }
        }
        if (u) {
          u = $(u)
          if (u.is('a') || u.is('button') || u.is('input') || u.is('li')) {
            v = u
          } else {
            v = u.find('button[type=submit],input[type=submit],.submit')
          }
        }
        v.disableBtn()
        if (x) {
          if (A) {
            $(A).show()
          } else {
            if (C) {
              v.busy()
            } else {
              v.busyBefore()
            }
          }
        }
        B(false)
        return SB.ajax({
          url: SB.contextPath + t,
          data: y,
          dataType: F.dataType ? F.dataType : 'json',
          headers: F.headers,
          success: function (G, I, H) {
            if (typeof G.status === 'boolean') {
              if (G.status) {
                E(G, I, H)
              } else {
                if (G.errorCode === 201) {
                  SB.jump('/signin')
                } else {
                  B(true, G.errorMessage ? G.errorMessage : z, G.errorCode)
                }
              }
            } else {
              if (G.error) {
                B(true, G.error.message ? G.error.message : z, G.errorCode)
              } else {
                E(G, I, H)
              }
            }
          },
          error: function (H, J, I) {
            var G = I.message
              ? I.message
              : H
                ? (J ? J : w) + ': Http ' + H.status + ' ' + H.statusText
                : z
            B(true, G)
          },
          complete: function (G, H) {
            v.enableBtnDelay()
            if (x) {
              if (A) {
                $(A).hide()
              } else {
                if (C) {
                  v.removeBusy()
                } else {
                  v.removeBusyBefore()
                }
              }
            }
            if (F.complete && typeof F.complete === 'function') {
              F.complete(G, H)
            }
          },
        })
      },
      buildUrl: function (t) {
        return SB.contextPath + t
      },
      initBtn: function (t) {
        if (!t) {
          t = window.body
        }
        $('.btn', t).on('click', function (u) {
          if ($(this).hasClass('disabled')) {
            u.preventDefault()
            u.stopImmediatePropagation()
          }
        })
      },
      toISOString: function (u) {
        function t(v) {
          return v < 10 ? '0' + v : v
        }
        return (
          u.getUTCFullYear() +
          '-' +
          t(u.getUTCMonth() + 1) +
          '-' +
          t(u.getUTCDate()) +
          'T' +
          t(u.getUTCHours()) +
          ':' +
          t(u.getUTCMinutes()) +
          ':' +
          t(u.getUTCSeconds()) +
          'Z'
        )
      },
      checkPlatform: function () {
        var t = $('#__platformCheck').val()
        if (t == 'os' || t == 'version') {
          SB.jump('/error/os')
          return false
        }
        return true
      },
      alert: function (x, u) {
        var t = SB.getI18nText('Prompt', 'common.title.prompt')
        var w = SB.getI18nText('Close', 'common.btn_close')
        var v = $(
          '<div id="alert-dialog" class="modaldialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header clearfix"><button class="close simplemodal-close">&times;</button><h3>' +
          t +
          '</h3></div><div class="modal-body"><p></p></div><div class="modal-footer"><button class="btn btn-default simplemodal-close">' +
          w +
          '</button></div></div></div></div>'
        )
        v.find('.modal-body p').text(x)
        $.modal(
          v,
          $.extend({}, m, {
            overlayId: 'alert-overlay',
            containerId: 'alert-container',
            minHeight: 171,
            onClose: function (y) {
              y.container.fadeOut('fast', function () {
                y.overlay.fadeOut('fast', function () {
                  $.modal.close()
                  if (typeof u == 'function') {
                    setTimeout(function () {
                      u()
                    }, 10)
                  }
                })
              })
            },
          })
        )
      },
      confirm: function (E) {
        var u,
          t,
          A,
          B = 171,
          D
        var C = SB.getI18nText('Yes', 'common.btn_yes')
        var v = SB.getI18nText('No', 'common.btn_no')
        var w = SB.getI18nText('Confirmation', 'common.title.confirmation')
        var z = ''
        if (typeof E === 'string') {
          u = arguments[0]
          t = arguments[1]
          A = arguments[2]
        } else {
          u = E.msg
          t = E.yes
          A = E.no
          if (E.yesText) {
            C = E.yesText
          }
          if (E.noText) {
            v = E.noText
          }
          if (E.minHeight) {
            B = E.minHeight
          }
          if (E.beforeRender) {
            D = E.beforeRender
          }
          if (E.confirmation) {
            w = E.confirmation
          }
          if (E.css) {
            z = E.css
          }
        }
        var y = $(
          '<div id="confirm-dialog" class="modaldialog ' +
          z +
          ' "><div class="modal-dialog"><div class="modal-content"><div class="modal-header clearfix"><button class="close simplemodal-close">&times;</button><h3>' +
          w +
          '</h3></div><div class="modal-body"><p></p></div><div class="modal-footer"><a role="button" href="javascript:;" class="btn btn-primary yes">' +
          C +
          '</a><a role="button" href="javascript:;" class="btn btn-default simplemodal-close no">' +
          v +
          '</a></div></div></div></div>'
        )
        y.find('.modal-body p').html(u)
        if (D) {
          D(y)
        }
        var x = false
        $.modal(
          y,
          $.extend({}, m, {
            overlayId: 'confirm-overlay',
            containerId: 'confirm-container',
            minHeight: B,
            onShow: function (F) {
              F.data.find('a.yes').click(function () {
                x = true
                $.modal.close()
              })
            },
            onClose: function (F) {
              F.container.fadeOut('fast', function () {
                F.overlay.fadeOut('fast', function () {
                  if (x) {
                    if ($.isFunction(t)) {
                      t()
                    }
                  } else {
                    if (typeof A === 'function') {
                      A()
                    }
                  }
                  $.modal.close()
                })
              })
            },
          })
        )
      },
      replaceUrl: function (v, w, u) {
        if (typeof u == 'undefined') {
          u = window.location.href
        }
        var t = u
        if (v.test(u)) {
          t = u.replace(v, w)
        } else {
          if (u.indexOf('?') >= 0) {
            t = u + '&' + w
          } else {
            t = u + '?' + w
          }
        }
        return t
      },
      saveSuccessCookie: function (t, w, v, u) {
        $.cookie('__lsc', JSON.stringify(arguments), { path: '/' })
      },
      getSuccessCookie: function (t) {
        var u = $.cookie('__lsc')
        if (typeof u !== 'undefined') {
          if (!t) {
            SB.clearSuccessCookie()
          }
          return JSON.parse(u)
        }
        return null
      },
      clearSuccessCookie: function () {
        $.cookie('__lsc', null, { path: '/' })
      },
      showSuccessMsg: function (w, t, u, v) {
        v = v || false
        t = t || $('#content_success_msg')
        u = u || 5000
        if (v) {
          t.html(w)
        } else {
          t.text(w)
        }
        if (t[0] === $('#content_success_msg')[0]) {
          t.css('margin-left', -t.width() / 2)
        }
        if (SB.showSuccessTimer) {
          window.clearTimeout(SB.showSuccessTimer)
        }
        t.fadeIn('slow')
        SB.showSuccessTimer = window.setTimeout(function () {
          t.fadeOut('slow')
        }, u)
      },
      validatePassword: function (x, v) {
        var E = x.val()
        var z = E.length
        var B = 0,
          w = 0,
          D,
          C,
          u,
          y
        if (z < 6) {
          w += 0
        } else {
          if (z < 8) {
            w += 5
          } else {
            if (z < 16) {
              w += 10
            } else {
              w += 15
            }
          }
          C = E.match(/[a-z]/g)
          if (C) {
            w += 1
          }
          D = E.match(/[A-Z]/g)
          if (D) {
            w += 5
          }
          if (D && C) {
            w += 2
          }
          u = E.match(/\d/g)
          if (u && u.length > 1) {
            w += 5
          }
          y = E.match(/\W/g)
          if (y) {
            w += y.length > 1 ? 15 : 10
          }
          if (D && C && u && y) {
            w += 15
          }
          if (E.match(/\s/)) {
            w += 10
          }
        }
        if (w > 1 && w < 15) {
          B = 1
        }
        if (w >= 15 && w < 20) {
          B = 2
        }
        if (w >= 20 && w < 35) {
          B = 3
        }
        if (w >= 35) {
          B = 4
        }
        var t = SB.isOrderlyString(E) || SB.isSameString(E)
        if (B > 0 && !t) {
          v.find('span').css({ 'background-color': 'transparent' })
          for (var A = 1; A <= B; A++) {
            v.find('#meter' + A).css({ 'background-color': 'rgb(74, 232, 23)' })
          }
        } else {
          v.find('span').css({ 'background-color': 'transparent' })
          v.find('#meter1').css({ 'background-color': 'red' })
        }
      },
      validateOneRepeatRule: function (u, v) {
        var t = u.val()
        if (SB.isSameString(t)) {
          v.removeClass('success').addClass('error')
        } else {
          v.removeClass('error').addClass('success')
        }
      },
      validateConsecutiveRule: function (u, v) {
        var t = u.val()
        if (SB.isOrderlyString(t)) {
          v.removeClass('success').addClass('error')
        } else {
          v.removeClass('error').addClass('success')
        }
      },
      validateLengthRule: function (w, x, v) {
        var u = w.val()
        var t = u.length
        if (t < v) {
          x.removeClass('success').addClass('error')
        } else {
          x.removeClass('error').addClass('success')
        }
      },
      validateAlpabetRule: function (u, v) {
        var t = u.val()
        if (!t.match(/[a-zA-Z]/g)) {
          v.removeClass('success').addClass('error')
        } else {
          v.removeClass('error').addClass('success')
        }
      },
      validateNumberRule: function (u, v) {
        var t = u.val()
        if (!t.match(/\d/g)) {
          v.removeClass('success').addClass('error')
        } else {
          v.removeClass('error').addClass('success')
        }
      },
      validateSpeicalRule: function (u, v) {
        var t = u.val()
        if (/^([a-zA-Z0-9]{1,})$/.test(t) || t == '') {
          v.removeClass('success').addClass('error')
        } else {
          v.removeClass('error').addClass('success')
        }
      },
      validateCombineRule: function (u, v) {
        var t = u.val()
        if (t.match(/[a-z]/g) && t.match(/[A-Z]/g)) {
          v.removeClass('error').addClass('success')
        } else {
          v.removeClass('success').addClass('error')
        }
      },
      isOrderlyString: function (x) {
        var w = true
        for (var t = 0; t < x.length - 1; t++) {
          var v = x.charCodeAt(t)
          var u = x.charCodeAt(t + 1)
          if (isNaN(u) || isNaN(v)) {
            continue
          } else {
            if (
              Math.abs(v - u) != 1 ||
              v == 47 ||
              v == 57 ||
              v == 64 ||
              v == 90 ||
              v == 96 ||
              v > 122
            ) {
              w = false
              break
            }
          }
        }
        return w
      },
      isSameString: function (x) {
        var w = true
        for (var t = 0; t < x.length - 1; t++) {
          var v = x.charCodeAt(t)
          var u = x.charCodeAt(t + 1)
          if (isNaN(u) || isNaN(v)) {
            continue
          } else {
            if (Math.abs(v - u) != 0) {
              w = false
              break
            }
          }
        }
        return w
      },
      formatCurrency: function (u) {
        var t = '$'
        if (u < 0) {
          u = 0 - u
          t = '-$'
        }
        return t + (u / 100).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')
      },
      formatNumber: function (t) {
        return t.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',')
      },
      htmlEncode: function (t) {
        return $('<div/>').text(t).html()
      },
      htmlDecode: function (t) {
        return $('<div/>').html(t).text()
      },
      hideHeader: function () {
        $('#header_container').hide()
        $('#content_container').removeClass('zoom-newcontent')
      },
      formatConfNo: function (v, w, u) {
        w = w || ' '
        u = u || 11
        v = $.trim(v).replace(/[^\d]/g, '')
        if (v.length > u) {
          v = v.substr(0, u)
        }
        var t = v.substr(0, 3)
        if (v.length == 11) {
          t += w + v.substr(3, 4) + w + v.substr(7)
        } else {
          if (v.length >= 3) {
            t += w + v.substr(3, 3)
          }
          if (v.length >= 6) {
            t += w + v.substr(6)
          }
        }
        return t
      },
      initConfInput: function (u, v, x, t) {
        t = t || 11
        var w = u.attr('confno')
        if (w) {
          u.val(SB.formatConfNo(w, x, t))
        }
        u.keyup(function (A) {
          var y = $(this)
          var z = y.val()
          if (z.length > 0) {
            window.setTimeout(function () {
              var B = y.caret()
              var C = SB.formatConfNo(z, x, t)
              if (B === 3 || B === 7) {
                if (A.keyCode == 8) {
                  B--
                  C = SB.formatConfNo(C.substr(0, B) + C.substr(B + 2), x, t)
                } else {
                  B++
                }
              }
              if (z !== C) {
                if (v) {
                  v.hide()
                }
                y.removeClass('error')
                y.val(C)
                y.caret(B)
              }
            }, 10)
          }
          return false
        }).keypress(function (A) {
          if (A.ctrlKey || A.altKey || A.metaKey || A.which < 32) {
            return true
          }
          if (
            A.keyCode == 8 ||
            A.keyCode == 46 ||
            A.keyCode == 35 ||
            A.keyCode == 36 ||
            A.keyCode == 37 ||
            A.keyCode == 39 ||
            A.keyCode == 144
          ) {
            return true
          }
          if (!/[0-9]/.test(String.fromCharCode(A.which))) {
            return false
          }
          var z = $(this)
          var y = z.caret()
          var B = z.val()
          if (B.length === t + 2 && y === t + 2) {
            return false
          }
        })
      },
      isDigit: function (t) {
        return t >= '0' && t <= '9'
      },
      initNoAndUrlInput: function (u, v) {
        var t = 11
        var w = ' '
        u.keyup(function (z) {
          var x = $(this)
          var y = x.val()
          if (y.length > 0) {
            if (SB.isDigit(y.charAt(0))) {
              window.setTimeout(function () {
                var B = x.caret()
                var C = SB.formatConfNo(y, w, t)
                if (B === 3 || B === 7) {
                  if (z.keyCode == 8) {
                    B--
                    C = SB.formatConfNo(C.substr(0, B) + C.substr(B + 2), w, t)
                  } else {
                    B++
                  }
                }
                if (y !== C) {
                  if (v) {
                    v.hide()
                  }
                  x.removeClass('error')
                  x.val(C)
                  x.caret(B)
                }
              }, 10)
            } else {
              var A = $.trim(y)
                .replace(/^\./, '')
                .replace(/[^A-Za-z0-9\.]/g, '')
                .toLowerCase()
              if (v) {
                v.hide()
              }
              x.removeClass('error')
              if (y !== A) {
                x.val(A)
              }
            }
            return false
          }
        }).keypress(function (z) {
          if (z.ctrlKey || z.altKey || z.metaKey || z.which < 32) {
            return true
          }
          if (
            z.keyCode == 8 ||
            z.keyCode == 46 ||
            z.keyCode == 35 ||
            z.keyCode == 36 ||
            z.keyCode == 37 ||
            z.keyCode == 39 ||
            z.keyCode == 144
          ) {
            return true
          }
          var y = $(this)
          var x = y.caret()
          var A = y.val()
          if (A.length == 0 || !SB.isDigit(A.charAt(0))) {
            if (!/[A-Za-z0-9\.]/.test(String.fromCharCode(z.which))) {
              return false
            }
          } else {
            if (!/[0-9]/.test(String.fromCharCode(z.which))) {
              return false
            }
            if (A.length === t + 2 && x === t + 2) {
              return false
            }
          }
        })
      },
      initLimitInput: function (u, t, v, w) {
        u.keyup(function (z) {
          if (z.ctrlKey || z.altKey || z.metaKey || z.which < 32) {
            return true
          }
          if (
            z.keyCode == 8 ||
            z.keyCode == 46 ||
            z.keyCode == 35 ||
            z.keyCode == 36 ||
            z.keyCode == 37 ||
            z.keyCode == 39 ||
            z.keyCode == 144 ||
            z.keyCode == 38 ||
            z.keyCode == 40
          ) {
            return true
          }
          var x = $(this)
          var y = x.val()
          if (y.length > 0) {
            window.setTimeout(function () {
              var A = x.caret()
              if (z.keyCode == 8) {
                A--
              }
              var B = $.trim(y).replace(t, '').toLowerCase()
              if (w) {
                B = B.toLowerCase()
              }
              x.val(B)
              x.caret(A)
            }, 10)
          }
          if (v) {
            v.hide()
          }
          u.removeClass('error')
          return true
        })
      },
      playVideo: function (v, w, t) {
        var u = $('#video_dialog')
        var x = u.find('.modal-header .modal-title')
        u.find('.modal-body-container').html(
          '<div class="youtube-video-container"><iframe src="' +
          v +
          '" frameborder="0" title="Video Frame" allowfullscreen></iframe></div>'
        )
        if (w && t) {
          x.html('<a href="' + t + '" target="_blank">' + w + '</a>')
        } else {
          if (w) {
            x.html(w)
          } else {
            x.html('')
          }
        }
        $.modal(
          u,
          $.extend({}, SB.MODAL_DEFAULTS, {
            overlayId: 'video-dialog-overlay',
            containerId: 'video-dialog-container',
            persist: true,
            minHeight: u.outerHeight(),
            overlayClose: true,
            onShow: function () { },
            onClose: function () {
              $.modal.close()
              u.find('.modal-body-container').html('')
            },
          })
        )
      },
      isNotValidPicFile: function (w, y, v, x) {
        var u = 0
        var t = false
        x = x || /.*\.(gif|jpe?g|png)$/i
        v = v || 2 * 1024 * 1024
        if (!x.test(w.name)) {
          u = 1
          t = true
        }
        if (w.size && w.size > v) {
          u = 2
          t = true
        }
        y(u, v)
        return t
      },
      isNotValidAudioFile: function (w, y, v, x) {
        var u = 0
        var t = false
        x = x || /.*\.wav$/i
        v = v || 2 * 1024 * 1024
        if (!x.test(w.name)) {
          u = 1
          t = true
        }
        if (w.size && w.size > v) {
          u = 2
          t = true
        }
        y(u, v)
        return t
      },
      sendJMF: function (t, u, w, x, y) {
        var v = {
          time: new Date().getTime(),
          mn: t,
          mi: u,
          id: w,
          reason: x,
          msg: y,
          ua: navigator.userAgent,
        }
        SB.post('/wjmf', { msg: JSON.stringify(v) }, function (z) { })
      },
      getI18nText: function (t, u, w) {
        if (typeof $.i18n == 'undefined') {
          return !!t ? t : u
        }
        var v = $.i18n.get(u, w)
        if (!!v) {
          if (v != u) {
            return v
          }
        }
        return !!t ? t : u
      },
      showPastDueMessage: function () {
        var t = $.cookie('_pastdue_msg_close')
        if (t && t == 'true') {
        } else {
          SB.post('/past_due_message', {}, function (v) {
            if (v.status) {
              var y = $('#pastdue_msg')
              var u = $('#pastdue_msg_content')
              if (v.result && v.result != undefined) {
                var x = JSON.parse(v.result)
                if (typeof x != 'undefined') {
                  if (x.show_pastdue_msg && x.show_pastdue_msg == 'true') {
                    u.empty()
                    var w =
                      '<h4 class="alert-heading">' +
                      $.i18n.get('billing.pastdue.notice') +
                      '</h4>'
                    w =
                      w +
                      $.i18n.get(
                        'billing.pastdue.balance_new',
                        x.currency_flag,
                        x.pastdue_balance
                      )
                    if (
                      x.pastdue_date_show &&
                      x.pastdue_date_show == 'true' &&
                      x.pastdue_terminate_date
                    ) {
                      w =
                        w +
                        ' ' +
                        $.i18n.get(
                          'billing.pastdue.terminate_time',
                          x.pastdue_terminate_date
                        )
                    } else {
                      w = w + ' ' + $.i18n.get('billing.pastdue.terminate_soon')
                    }
                    w = w + ' ' + $.i18n.get('billing.pastdue.this_means')
                    if (x.pastdue_autopay && x.pastdue_autopay == 'true') {
                      w = w + ' ' + $.i18n.get('billing.pastdue.pay_online')
                    } else {
                      w = w + ' ' + $.i18n.get('billing.pastdue.contact_sales')
                    }
                    u.html(w)
                    y.removeClass('hideme')
                    y.removeAttr('style')
                  }
                }
              }
            }
          })
        }
      },
      sendUserBehavior: function (u) {
        var t = {}
        if (u != null) {
          t = { html_object_id: u.prop('id'), html_class: u.prop('class') }
        }
        SB.post(
          '/sendUserBehavior',
          t,
          function () { },
          function () { },
          function () { }
        )
      },
      getFirstLanguage: function () {
        var v = window.navigator,
          t = ['language', 'browserLanguage', 'systemLanguage', 'userLanguage'],
          u,
          w = null
        if (Array.isArray(v.languages)) {
          for (u = 0; u < v.languages.length; u++) {
            w = v.languages[u]
            if (w && w.indexOf('-') != -1) {
              return w
            }
          }
        }
        for (u = 0; u < t.length; u++) {
          w = v[t[u]]
          if (w && w.indexOf('-') != -1) {
            return w
          }
        }
        if (w == null) {
          return 'en-US'
        }
      },
      getDefCountry: function () {
        var u = 'US'
        var t = SB.getFirstLanguage()
        if (t && t.indexOf('-') > 0) {
          u = t.split('-')[1]
        }
        return u.toUpperCase()
      },
      getDefLanguage: function () {
        var u = 'en'
        var t = SB.getFirstLanguage()
        if (t && t.indexOf('-') > 0) {
          u = t.split('-')[0]
        }
        return u
      },
      sortObject: function (t) {
        return function (x, w) {
          var v, u
          if (typeof x === 'object' && typeof w === 'object' && x && w) {
            v = x[t]
            u = w[t]
            if (v === u) {
              return 0
            }
            if (typeof v === typeof u) {
              return v < u ? -1 : 1
            }
            return typeof v < typeof u ? -1 : 1
          } else {
            return 0
          }
        }
      },
      loadScript: function (u, v) {
        var t = document.createElement('script')
        t.type = 'text/javascript'
        if (t.readyState) {
          t.onreadystatechange = function () {
            if (t.readyState == 'loaded' || t.readyState == 'complete') {
              t.onreadystatechange = null
              if (typeof v === 'function') {
                v()
              }
            }
          }
        } else {
          t.onload = function () {
            if (typeof v === 'function') {
              v()
            }
          }
        }
        t.src = u
        document.getElementsByTagName('head')[0].appendChild(t)
      },
      sendSearchEmailCookie: function (t) {
        $.cookie('zm_search_key', t, { path: '/' })
      },
    })
    $.validator.setDefaults({
      errorClass: 'help-block',
      errorElement: 'span',
      errorClass: 'has-error',
      highlight: function (u, t) {
        $(u).parents('div.form-group').addClass('has-error')
      },
      unhighlight: function (u, t) {
        $(u).parents('div.form-group').removeClass('has-error')
      },
      errorPlacement: function (u, t) {
        u.addClass('help-block').insertAfter(t)
        u.attr('role', 'alert').attr('aria-live', 'assertive')
      },
    })
    jQuery.validator.addMethod(
      'time12hNB',
      function (u, t) {
        return this.optional(t) || /^((0?[1-9]|1[012])(:[0-5]\d){1,2})$/i.test(u)
      },
      function () {
        return SB.getI18nText(
          'Please enter a valid time in 12-hour',
          'common.enter_time_in_12_hour'
        )
      }
    )
    $.fn.busy = function () {
      return this.each(function () {
        var t = $(this).next()
        if (!t.is('i.busy')) {
          $(this).after('<i class="busy busy24"></i>')
        }
      })
    }
    $.fn.removeBusy = function () {
      return this.each(function () {
        var t = $(this).next()
        if (t.is('i.busy')) {
          t.remove()
        }
      })
    }
    $.fn.busyBefore = function () {
      return this.each(function () {
        var t = $(this).prev()
        if (!t.is('i.busy')) {
          $(this).before('<i class="busy busy24"></i>')
        }
      })
    }
    $.fn.removeBusyBefore = function () {
      return this.each(function () {
        var t = $(this).prev()
        if (t.is('i.busy')) {
          t.remove()
        }
      })
    }
    $.fn.disableBtn = function () {
      return this.each(function () {
        $(this).addClass('disabled').attr('disabled', 'disabled')
      })
    }
    $.fn.enableBtn = function () {
      return this.each(function () {
        var t = $(this)
        t.removeClass('disabled').removeAttr('disabled')
      })
    }
    $.fn.enableBtnDelay = function () {
      return this.each(function () {
        var t = $(this)
        window.setTimeout(function () {
          t.enableBtn()
        }, 3000)
      })
    }
    $(function () {
      $('[placeholder]').placeholder()
      if (typeof ga == 'undefined') {
        ga = function () { }
      }
      function Y() {
        return 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'.replace(/[xy]/g, function (ad) {
          var ac = (Math.random() * 16) | 0,
            ab = ad == 'x' ? ac : (ac & 3) | 8
          return ab.toString(16)
        })
      }
      $('.home-video-link').on('click', function (ac) {
        var ad = $(this)
        var ab = ad.attr('href')
        SB.playVideo(ab)
        ac.preventDefault()
      })
      SB.initBtn()
      $('form .submit').on('click', function () {
        if (!$(this).hasClass('disabled')) {
          $(this).parents('form').submit()
        }
        return false
      })
      $('#btnLogout').on('click', function () {
        if (!SB.loggedIn) {
          return
        }
        if (SB.stype == 0) {
          if (SB.token == 'FAKE_TK' || SB.token == '') {
            SB.jump('/logout')
          } else {
            window.location.href =
              'https://www.facebook.com/logout.php?access_token=' +
              SB.token +
              '&next=' +
              SB.baseUrl +
              SB.contextPath +
              '/logout'
          }
        } else {
          if (SB.stype == 1) {
            if (SB.token == 'FAKE_TK') {
              SB.jump('/logout')
            } else {
              var ab = $(
                '<iframe src="https://accounts.google.com/Logout" frameborder="0" width="1" height="1"></iframe>'
              )
              ab.load(function () {
                SB.jump('/logout')
              })
              $(document.body).append(ab)
            }
          } else {
            if (SB.stype == 101) {
              SB.jump('/saml/logout')
            } else {
              SB.jump('/logout')
            }
          }
        }
      })
      $('#btnOauth2NotMe').on('click', function () {
        if (!SB.loggedIn) {
          return
        }
        if (SB.stype == 0) {
          if (SB.token == 'FAKE_TK') {
            SB.jump('/logout?type=notme')
          } else {
            window.location.href =
              'https://www.facebook.com/logout.php?access_token=' +
              SB.token +
              '&next=' +
              SB.baseUrl +
              SB.contextPath +
              encodeURIComponent('/logout?type=notme')
          }
        } else {
          if (SB.stype == 1) {
            if (SB.token == 'FAKE_TK') {
              SB.jump('/logout?type=notme')
            } else {
              var ab = $(
                '<iframe src="https://accounts.google.com/Logout" frameborder="0" width="1" height="1"></iframe>'
              )
              ab.load(function () {
                SB.jump('/logout?type=notme')
              })
              $(document.body).append(ab)
            }
          } else {
            if (SB.stype == 101) {
              SB.jump('/saml/logout')
            } else {
              SB.jump('/logout?type=notme')
            }
          }
        }
      })
      $('#btnDevLogout').on('click', function () {
        if (!SB.loggedIn) {
          return
        }
        if (SB.stype == 0) {
          if (SB.token == 'FAKE_TK') {
            SB.jump('/developer/logout')
          } else {
            window.location.href =
              'https://www.facebook.com/logout.php?access_token=' +
              SB.token +
              '&next=' +
              SB.baseUrl +
              SB.contextPath +
              '/developer/logout'
          }
        } else {
          if (SB.stype == 1) {
            if (SB.token == 'FAKE_TK') {
              SB.jump('/developer/logout')
            } else {
              var ab = $(
                '<iframe src="https://accounts.google.com/Logout" frameborder="0" width="1" height="1"></iframe>'
              )
              ab.load(function () {
                SB.jump('/developer/logout')
              })
              $(document.body).append(ab)
            }
          } else {
            if (SB.stype == 101) {
              SB.jump('/saml/logout')
            } else {
              SB.jump('/developer/logout')
            }
          }
        }
      })
      $('#footerDownload').on('click', function () {
        if (!SB.checkPlatform()) {
          return false
        }
      })
      $('.adv-pagination input[name=page_input]').on('keypress', function (ac) {
        var ae = $(this)
        if (ac.which === 13) {
          var ad = parseInt(ae.val())
          if (!isNaN(ad) && ad > 0) {
            var ab = parseInt(ae.attr('data-total'))
            if (ad > ab) {
              ad = ab
            }
            ae.val(ad)
            if (
              typeof beforePaginationFunc != 'undefined' &&
              beforePaginationFunc instanceof Function
            ) {
              beforePaginationFunc()
            }
            window.location.href = SB.replaceUrl(/p=\d+/gi, 'p=' + ad)
          }
          ac.preventDefault()
        } else {
          if (
            !(
              ac.which === 8 ||
              ac.which === 0 ||
              (ac.shiftKey === false && ac.which > 47 && ac.which < 58)
            )
          ) {
            ac.preventDefault()
          }
        }
      })
      $('.adv-pagination ul').on('click', 'a', function () {
        var ab = $(this).parent()
        if (ab.hasClass('disabled') || ab.hasClass('active')) {
          return false
        }
        console.log('before in')
        var ac = parseInt($(this).attr('p'), 10)
        if (
          typeof beforePaginationFunc != 'undefined' &&
          beforePaginationFunc instanceof Function
        ) {
          console.log('come in')
          beforePaginationFunc()
        }
        window.location.href = SB.replaceUrl(/p=\d+/gi, 'p=' + ac)
        return false
      })
      function F(ab) {
        var ac = ab.val()
        var ad = ab.data('cookie')
        $.cookie(ad, ac, { expires: 365, path: '/' })
        location.reload(true)
      }
      $('.adv-pagination input[name=page_size_input]').each(function () {
        var ab = $(this)
        new ComboBox(ab.attr('id'), {
          onChange: function () {
            F(ab)
          },
        })
        ab.on('change', function () {
          F(ab)
        })
      })
      $('body').on('click', '[ui-cmd]', function () {
        var ac = $(this)
        if (!ac.hasClass('disabled') && !ac.data('ui-cmd-sending')) {
          var ad = ac.attr('ui-cmd')
          var ab = ac.attr('ui-cat')
          SB.post('/wlog', { node: ad, cat: ab }, function (ae) { })
          ac.data('ui-cmd-sending', 1)
          window.setTimeout(function () {
            ac.removeData('ui-cmd-sending')
          }, 5000)
        }
      })
      if ($('#navbar ul.navbar-right').length > 0) {
        $('#navbar ul.navbar-right').append(
          $('#header_outer #header_login>ul').children()
        )
      } else {
        $('#header_login').removeClass('hideme').show()
      }
      var t = $('ul.zm-sidenav')
      t.find('li:last').addClass('last')
      t.parents('.row').css(
        'min-height',
        '' + t.parents('.nav-menu').height() + 'px'
      )
      var B = $('.sidebar-menu a>span')
      B.text(t.find('li.active a').text().trim())
      var Q = $('.category .itext')
      Q.text(Q.parents('.category').find('li.active a').text().trim())
      var u = $('#btnHostMeeting')
      var M = $('#btnMutipleJoinMeeting')
      var E = $('#btnSolutions')
      var O = $('#solutionsDropdown')
      var A = $('#btnResouces')
      var L = $('#resourcesDropdown')
      var aa = $('#hostMeetingDropdown')
      var y = $('#joinmeetingDropdown')
      if (aa.length && !('ontouchstart' in document.documentElement)) {
        var V = { x: 0, y: 0 }
        $(document).on('mousemove', function (ab) {
          V.x = ab.pageX
          V.y = ab.pageY
        })
        function D(ab) {
          var ac = ab.offset()
          if (
            V.x > ac.left &&
            V.x < ac.left + ab.outerWidth() &&
            V.y > ac.top &&
            V.y < ac.top + ab.outerHeight()
          ) {
            return true
          }
          return false
        }
        function z(ac, ab) {
          window.setTimeout(function () {
            if (D(ac) || D(ab)) {
              return
            }
            ac.parent().removeClass('open')
          }, 500)
        }
        function P(ab) {
          ab.parent().removeClass('open')
        }
        u.on(
          'mouseenter',
          function () {
            P(M)
            u.parent().addClass('open')
          },
          function () {
            z(u, aa)
          }
        )
        M.on(
          'mouseenter',
          function () {
            P(u)
            M.parent().addClass('open')
          },
          function () {
            z(M, y)
          }
        )
        aa.on('mouseleave', function () {
          z(u, aa)
        })
        y.on('mouseleave', function () {
          z(M, y)
        })
      }
      if (O.length && !('ontouchstart' in document.documentElement)) {
        var V = { x: 0, y: 0 }
        $(document).on('mousemove', function (ab) {
          V.x = ab.pageX
          V.y = ab.pageY
        })
        function D(ab) {
          var ac = ab.offset()
          if (
            V.x > ac.left &&
            V.x < ac.left + ab.outerWidth() &&
            V.y > ac.top &&
            V.y < ac.top + ab.outerHeight()
          ) {
            return true
          }
          return false
        }
        function z() {
          window.setTimeout(function () {
            if (D(E) || D(O)) {
              return
            }
            E.parent().removeClass('open')
          }, 500)
        }
        E.on(
          'mouseenter',
          function () {
            E.parent().addClass('open')
          },
          function () {
            z()
          }
        )
        O.on('mouseleave', function () {
          z()
        })
      }
      if (L.length && !('ontouchstart' in document.documentElement)) {
        var V = { x: 0, y: 0 }
        $(document).on('mousemove', function (ab) {
          V.x = ab.pageX
          V.y = ab.pageY
        })
        function D(ab) {
          var ac = ab.offset()
          if (
            V.x > ac.left &&
            V.x < ac.left + ab.outerWidth() &&
            V.y > ac.top &&
            V.y < ac.top + ab.outerHeight()
          ) {
            return true
          }
          return false
        }
        function z() {
          window.setTimeout(function () {
            if (D(A) || D(L)) {
              return
            }
            A.parent().removeClass('open')
          }, 500)
        }
        A.on(
          'mouseenter',
          function () {
            A.parent().addClass('open')
          },
          function () {
            z()
          }
        )
        L.on('mouseleave', function () {
          z()
        })
      }
      var H = $('div.lanuages')
      H.on('click', 'a', function () {
        var ab = $(this)
        $.cookie('_zm_lang', ab.attr('data-lang'), {
          expires: 365,
          path: '/',
          domain: i,
          secure: true,
        })
        location.reload(true)
      })
      var C = new RegExp('(^|&)MKTID=([^&]*)(&|$)')
      var N = window.location.search.substr(1).match(C)
      var Z = /^\d*$/
      var U = $.cookie('MKTID1')
      if (N != null && Z.test(N[2])) {
        if (U == '' || U == null) {
          $.cookie('MKTID1', decodeURIComponent(N[2]), { expires: 30, path: '/' })
          $.cookie('MKTID2', decodeURIComponent(N[2]), { expires: 30, path: '/' })
        } else {
          $.cookie('MKTID1', U, { expires: 30, path: '/' })
          $.cookie('MKTID2', decodeURIComponent(N[2]), { expires: 30, path: '/' })
        }
      }
      var T = new RegExp('(^|&)utm_medium=([^&]*)(&|$)')
      var K = window.location.search.substr(1).match(T)
      if (K != null) {
        $.cookie('cj_utm_medium', decodeURIComponent(K[2]), {
          expires: 1,
          path: '/',
        })
      }
      var I = new RegExp('(^|&)utm_term=([^&]*)(&|$)')
      var S = new RegExp('(^|&)utm_content=([^&]*)(&|$)')
      var G = new RegExp('(^|&)SID=([^&]*)(&|$)')
      var X = window.location.search.substr(1).match(I)
      var R = window.location.search.substr(1).match(S)
      var x = window.location.search.substr(1).match(G)
      var w = {}
      if (X != null) {
        w.aid = decodeURIComponent(X[2])
      }
      if (R != null) {
        w.pid = decodeURIComponent(R[2])
      }
      if (x != null) {
        w.sid = decodeURIComponent(x[2])
      }
      if (jQuery.isEmptyObject(w)) {
      } else {
        $.cookie('_zm_cj_options', JSON.stringify(w), { expires: 1, path: '/' })
      }
      $('.dropdown-language').on('click', '.dropdown-menu a', function (ab) {
        var aa = $(this)
        if (aa.data('locale') != '') {
          $.cookie('_zm_lang', aa.data('locale'), {
            expires: 365,
            path: '/',
            domain: i,
            secure: true,
          })
          var targetLang = aa.data('locale') || 'en-US'
          var langCodeArray = {
            'en-US': 'en',
            'es-ES': 'es',
            'de-DE': 'de',
            'zh-CN': 'zh-cn',
            'zh-TW': 'zh-tw',
            'fr-FR': 'fr',
            'pt-PT': 'pt',
            'jp-JP': 'ja',
            'ru-RU': 'ru',
            'ko-KO': 'ko',
            'it-IT': 'it',
            'vi-VN': 'vi',
          }
          var zmLangCode = langCodeArray[targetLang] || 'en'
          var pName = location.pathname
            .replace(/^\/docs/, '')
            .replace(/.html$/, '') //      "/docs/en/team.html" => /en/team
          var pageURL = 'https://' + location.hostname //		"https://zoom.us"

          pName = pName.replace(
            /^\/(en-us|es-es|de-de|zh-cn|zh-tw|fr-fr|pt-pt|jp-jp|ru-ru|ko-ko|it-it|vi-vn|en|es|de|fr|pt|ja|ru|ko|it|vi)\//,
            '/'
          )
          if (zmLangCode === 'en') {
          } else {
            if (zmLangCode === 'de') {
              pName = '/de-de' + pName + '.html'
            } else {
              pName = '/' + zmLangCode + pName + '.html'
            }
          }
          pageURL = pageURL + pName
          var pageParameter = location.search
          if (pageParameter.length > 0) {
            pageURL = pageURL + pageParameter
          }
          location.replace(pageURL)
        }
      })
      $('#past_due_msg_close').on('click', function () {
        $.cookie('_pastdue_msg_close', 'true', { expires: 1, path: '/' })
      })
      var W = $.cookie('_zm_mtk_guid')
      if (!(W && '' != W)) {
        $.cookie('_zm_mtk_guid', Y(), {
          expires: 365,
          path: '/',
          domain: i,
          secure: true,
        })
      }
    
      var vg = $.cookie('_zm_visitor_guid')
      if (!(vg && '' != vg)) {
        $.cookie('_zm_visitor_guid', Y(), {
          expires: 365,
          path: '/',
          domain: i,
          secure: true,
        })
      }

      function tg_function() {
        return 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'.replace(/[xy]/g, function (ad) {
          var ac = (Math.random() * 16) | 0,
            ab = ad == 'x' ? ac : (ac & 3) | 8
          return ab.toString(16)
        })
      }
      
      var oactiveGroups = (window.OnetrustActiveGroups || '').split(',');
      oactiveGroups = oactiveGroups.filter(function (v) {
      return v !== '';
      });
      
      var tg = $.cookie('_zm_tracking_guid')
      if (!(tg && '' != tg)) {
        if (oactiveGroups.indexOf('C0002') > -1){
            $.cookie('_zm_tracking_guid', tg_function(), {
            expires: 365,
            path: '/',
            domain: i,
            secure: true,
            })
        }
      }

      var J = window.location.search
        .substr(1)
        .match(new RegExp('(^|&)zcid=([^&]*)(&|$)'))
      if (J != null && '' != J[2]) {
        SB.post3({
          url: '/market_mapping',
          data: { url: window.location.href, campaignid: J[2] },
          success: function (ab) { },
        })
      }
      function v(ab) {
        if (!ab.data('user-behavior-clicked')) {
          //SB.sendUserBehavior(ab)
          ab.data('user-behavior-clicked', 1)
          window.setTimeout(function () {
            ab.removeData('user-behavior-clicked')
          }, 3000)
        }
      }
      $(document).on(
        'click',
        'a,button,input[type=button],input[type=submit]',
        function () {
          v($(this))
        }
      )
      $('a,button,input[type=button],input[type=submit]').on(
        'click',
        function () {
          v($(this))
        }
      )
    })
  })()