// mYm Functions v 1.41 - brent@mimoymima.com
// last edited: Feb 12, 2011


// DOCUMENT READY FUNCTION: uses noConflict to work with other libraries
jQuery.noConflict();
jQuery(document).ready(function($) {	
	
//Function: isiPad
var isiPad = navigator.userAgent.match(/iPad/i) != null;

//  // site preloader -- also uncomment the div in the header and the css style for #preloader
//  $(window).load(function(){
//  	$('#preloader').fadeOut('slow',function(){$(this).remove();});
//  });

//  // open all http links in a new window except for menu links
//  $('a[href^="http://"]').not('.menu a, .lightview')
//    .attr({
//      target: "_blank", 
//      title: "Opens in a new window"
//  });
	
//  //-----Select Linker -- To use, wrap your select and button HTML elements in a div with the class LinkSelect --by mimoYmima.com
//	$('.link-select button').click(function(){ 
//		var LinkTo = $('.link-select select').val()
//		top.location.href = LinkTo
//	});

//-----Show and Hide Stuff
	$(".toggle")
		.addClass('make-link') // make headings look like links
		.addClass('header-hidden')
		.click(function(){
	        var $this = $(this);
	        if( $this.is('.header-shown') ) {
	                $this.next().slideToggle('normal');
	                $this.removeClass('header-shown');
	                $this.addClass('header-hidden');
	        }
	        else {
	                $this.next().slideToggle('normal');
	                $this.removeClass('header-hidden');
	                $this.addClass('header-shown');
	        }
	        return false;
	});


//-----Make a link with the class of popup open in a new window
	$('.popup').attr('target', '_blank');


//  //-----Add a print link in the PageNav if there is a PageNav
//	$('#page-nav > :last').after("<a href='' id='print-link'>print</a>");
//	$('#print-link').click(function(){
//		window.print();
//		return false;
//	});

//  // to activate toggleval uncomment this stuff and the function under toggleval 3.0 below
//  // anything with the class of .toggle-val will use the toggle val script below
//  $(".toggle-val").toggleVal({
//    populateFrom: "label",
//    removeLabels: true
//  });
	
	
});//<--- this is the end of the document ready function don't delete it


// toggleval 3.0 -- http://jquery.kuzemchak.net/toggleval.php
//(function($){$.fn.toggleVal=function(theOptions){if(!theOptions||typeof theOptions=='object'){theOptions=$.extend({},$.fn.toggleVal.defaults,theOptions)}else if(typeof theOptions=='string'&&theOptions.toLowerCase()=='destroy'){var destroy=true}return this.each(function(){if(destroy){$(this).unbind('focus.toggleval').unbind('blur.toggleval').removeData('defText');return false}var defText='';switch(theOptions.populateFrom){case'title':if($(this).attr('title')){defText=$(this).attr('title');$(this).val(defText)}break;case'label':if($(this).attr('id')){defText=$('label[for="'+$(this).attr('id')+'"]').text();$(this).val(defText)}break;case'custom':defText=theOptions.text;$(this).val(defText);break;default:defText=$(this).val()}$(this).addClass('toggleval').data('defText',defText);if(theOptions.removeLabels==true&&$(this).attr('id')){$('label[for="'+$(this).attr('id')+'"]').remove()}$(this).bind('focus.toggleval',function(){if($(this).val()==$(this).data('defText')){$(this).val('')}$(this).addClass(theOptions.focusClass)}).bind('blur.toggleval',function(){if($(this).val()==''&&!theOptions.sticky){$(this).val($(this).data('defText'))}$(this).removeClass(theOptions.focusClass);if($(this).val()!=''&&$(this).val()!=$(this).data('defText')){$(this).addClass(theOptions.changedClass)}else{$(this).removeClass(theOptions.changedClass)}})})};$.fn.toggleVal.defaults={focusClass:'tv-focused',changedClass:'tv-changed',populateFrom:'default',text:null,removeLabels:false,sticky:false};$.extend($.expr[':'],{toggleval:function(elem){return $(elem).data('defText')||false},changed:function(elem){if($(elem).data('defText')&&$(elem).val()!=$(elem).data('defText')){return true}return false}})})(jQuery);


/*
 * Modernizr v1.6
 * http://www.modernizr.com
 *
 * Developed by: 
 * - Faruk Ates  http://farukat.es/
 * - Paul Irish  http://paulirish.com/
 *
 * Copyright (c) 2009-2010
 * Dual-licensed under the BSD or MIT licenses.
 * http://www.modernizr.com/license/
 */
window.Modernizr=function(i,e,u){function s(a,b){return(""+a).indexOf(b)!==-1}function D(a,b){for(var c in a)if(j[a[c]]!==u&&(!b||b(a[c],E)))return true}function n(a,b){var c=a.charAt(0).toUpperCase()+a.substr(1);c=(a+" "+F.join(c+" ")+c).split(" ");return!!D(c,b)}function S(){f.input=function(a){for(var b=0,c=a.length;b<c;b++)L[a[b]]=!!(a[b]in h);return L}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" "));f.inputtypes=function(a){for(var b=0,c,k=a.length;b<
k;b++){h.setAttribute("type",a[b]);if(c=h.type!=="text"){h.value=M;if(/^range$/.test(h.type)&&h.style.WebkitAppearance!==u){l.appendChild(h);c=e.defaultView;c=c.getComputedStyle&&c.getComputedStyle(h,null).WebkitAppearance!=="textfield"&&h.offsetHeight!==0;l.removeChild(h)}else/^(search|tel)$/.test(h.type)||(c=/^(url|email)$/.test(h.type)?h.checkValidity&&h.checkValidity()===false:h.value!=M)}N[a[b]]=!!c}return N}("search tel url email datetime date month week time datetime-local number range color".split(" "))}
var f={},l=e.documentElement,E=e.createElement("modernizr"),j=E.style,h=e.createElement("input"),M=":)",O=Object.prototype.toString,q=" -webkit- -moz- -o- -ms- -khtml- ".split(" "),F="Webkit Moz O ms Khtml".split(" "),v={svg:"http://www.w3.org/2000/svg"},d={},N={},L={},P=[],w,Q=function(a){var b=document.createElement("style"),c=e.createElement("div");b.textContent=a+"{#modernizr{height:3px}}";(e.head||e.getElementsByTagName("head")[0]).appendChild(b);c.id="modernizr";l.appendChild(c);a=c.offsetHeight===
3;b.parentNode.removeChild(b);c.parentNode.removeChild(c);return!!a},o=function(){var a={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return function(b,c){c=c||document.createElement(a[b]||"div");b="on"+b;var k=b in c;if(!k){c.setAttribute||(c=document.createElement("div"));if(c.setAttribute&&c.removeAttribute){c.setAttribute(b,"");k=typeof c[b]=="function";if(typeof c[b]!="undefined")c[b]=u;c.removeAttribute(b)}}return k}}(),G={}.hasOwnProperty,R;R=
typeof G!=="undefined"&&typeof G.call!=="undefined"?function(a,b){return G.call(a,b)}:function(a,b){return b in a&&typeof a.constructor.prototype[b]==="undefined"};d.flexbox=function(){var a=e.createElement("div"),b=e.createElement("div");(function(k,g,r,x){g+=":";k.style.cssText=(g+q.join(r+";"+g)).slice(0,-g.length)+(x||"")})(a,"display","box","width:42px;padding:0;");b.style.cssText=q.join("box-flex:1;")+"width:10px;";a.appendChild(b);l.appendChild(a);var c=b.offsetWidth===42;a.removeChild(b);
l.removeChild(a);return c};d.canvas=function(){var a=e.createElement("canvas");return!!(a.getContext&&a.getContext("2d"))};d.canvastext=function(){return!!(f.canvas&&typeof e.createElement("canvas").getContext("2d").fillText=="function")};d.webgl=function(){var a=e.createElement("canvas");try{if(a.getContext("webgl"))return true}catch(b){}try{if(a.getContext("experimental-webgl"))return true}catch(c){}return false};d.touch=function(){return"ontouchstart"in i||Q("@media ("+q.join("touch-enabled),(")+
"modernizr)")};d.geolocation=function(){return!!navigator.geolocation};d.postmessage=function(){return!!i.postMessage};d.websqldatabase=function(){return!!i.openDatabase};d.indexedDB=function(){for(var a=-1,b=F.length;++a<b;){var c=F[a].toLowerCase();if(i[c+"_indexedDB"]||i[c+"IndexedDB"])return true}return false};d.hashchange=function(){return o("hashchange",i)&&(document.documentMode===u||document.documentMode>7)};d.history=function(){return!!(i.history&&history.pushState)};d.draganddrop=function(){return o("drag")&&
o("dragstart")&&o("dragenter")&&o("dragover")&&o("dragleave")&&o("dragend")&&o("drop")};d.websockets=function(){return"WebSocket"in i};d.rgba=function(){j.cssText="background-color:rgba(150,255,150,.5)";return s(j.backgroundColor,"rgba")};d.hsla=function(){j.cssText="background-color:hsla(120,40%,100%,.5)";return s(j.backgroundColor,"rgba")||s(j.backgroundColor,"hsla")};d.multiplebgs=function(){j.cssText="background:url(//:),url(//:),red url(//:)";return/(url\s*\(.*?){3}/.test(j.background)};d.backgroundsize=
function(){return n("backgroundSize")};d.borderimage=function(){return n("borderImage")};d.borderradius=function(){return n("borderRadius","",function(a){return s(a,"orderRadius")})};d.boxshadow=function(){return n("boxShadow")};d.textshadow=function(){return e.createElement("div").style.textShadow===""};d.opacity=function(){var a=q.join("opacity:.5;")+"";j.cssText=a;return s(j.opacity,"0.5")};d.cssanimations=function(){return n("animationName")};d.csscolumns=function(){return n("columnCount")};d.cssgradients=
function(){var a=("background-image:"+q.join("gradient(linear,left top,right bottom,from(#9f9),to(white));background-image:")+q.join("linear-gradient(left top,#9f9, white);background-image:")).slice(0,-17);j.cssText=a;return s(j.backgroundImage,"gradient")};d.cssreflections=function(){return n("boxReflect")};d.csstransforms=function(){return!!D(["transformProperty","WebkitTransform","MozTransform","OTransform","msTransform"])};d.csstransforms3d=function(){var a=!!D(["perspectiveProperty","WebkitPerspective",
"MozPerspective","OPerspective","msPerspective"]);if(a)a=Q("@media ("+q.join("transform-3d),(")+"modernizr)");return a};d.csstransitions=function(){return n("transitionProperty")};d.fontface=function(){var a,b=e.head||e.getElementsByTagName("head")[0]||l,c=e.createElement("style"),k=e.implementation||{hasFeature:function(){return false}};c.type="text/css";b.insertBefore(c,b.firstChild);a=c.sheet||c.styleSheet;b=k.hasFeature("CSS2","")?function(g){if(!(a&&g))return false;var r=false;try{a.insertRule(g,
0);r=!/unknown/i.test(a.cssRules[0].cssText);a.deleteRule(a.cssRules.length-1)}catch(x){}return r}:function(g){if(!(a&&g))return false;a.cssText=g;return a.cssText.length!==0&&!/unknown/i.test(a.cssText)&&a.cssText.replace(/\r+|\n+/g,"").indexOf(g.split(" ")[0])===0};f._fontfaceready=function(g){g(f.fontface)};return b('@font-face { font-family: "font"; src: "font.ttf"; }')};d.video=function(){var a=e.createElement("video"),b=!!a.canPlayType;if(b){b=new Boolean(b);b.ogg=a.canPlayType('video/ogg; codecs="theora"');
b.h264=a.canPlayType('video/mp4; codecs="avc1.42E01E"')||a.canPlayType('video/mp4; codecs="avc1.42E01E, mp4a.40.2"');b.webm=a.canPlayType('video/webm; codecs="vp8, vorbis"')}return b};d.audio=function(){var a=e.createElement("audio"),b=!!a.canPlayType;if(b){b=new Boolean(b);b.ogg=a.canPlayType('audio/ogg; codecs="vorbis"');b.mp3=a.canPlayType("audio/mpeg;");b.wav=a.canPlayType('audio/wav; codecs="1"');b.m4a=a.canPlayType("audio/x-m4a;")||a.canPlayType("audio/aac;")}return b};d.localstorage=function(){try{return"localStorage"in
i&&i.localStorage!==null}catch(a){return false}};d.sessionstorage=function(){try{return"sessionStorage"in i&&i.sessionStorage!==null}catch(a){return false}};d.webWorkers=function(){return!!i.Worker};d.applicationcache=function(){return!!i.applicationCache};d.svg=function(){return!!e.createElementNS&&!!e.createElementNS(v.svg,"svg").createSVGRect};d.inlinesvg=function(){var a=document.createElement("div");a.innerHTML="<svg/>";return(a.firstChild&&a.firstChild.namespaceURI)==v.svg};d.smil=function(){return!!e.createElementNS&&
/SVG/.test(O.call(e.createElementNS(v.svg,"animate")))};d.svgclippaths=function(){return!!e.createElementNS&&/SVG/.test(O.call(e.createElementNS(v.svg,"clipPath")))};for(var H in d)if(R(d,H)){w=H.toLowerCase();f[w]=d[H]();P.push((f[w]?"":"no-")+w)}f.input||S();f.crosswindowmessaging=f.postmessage;f.historymanagement=f.history;f.addTest=function(a,b){a=a.toLowerCase();if(!f[a]){b=!!b();l.className+=" "+(b?"":"no-")+a;f[a]=b;return f}};j.cssText="";E=h=null;i.attachEvent&&function(){var a=e.createElement("div");
a.innerHTML="<elem></elem>";return a.childNodes.length!==1}()&&function(a,b){function c(p){for(var m=-1;++m<r;)p.createElement(g[m])}function k(p,m){for(var I=p.length,t=-1,y,J=[];++t<I;){y=p[t];m=y.media||m;J.push(k(y.imports,m));J.push(y.cssText)}return J.join("")}var g="abbr|article|aside|audio|canvas|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video".split("|"),r=g.length,x=RegExp("<(/*)(abbr|article|aside|audio|canvas|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video)",
"gi"),T=RegExp("\\b(abbr|article|aside|audio|canvas|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video)\\b(?!.*[;}])","gi"),z=b.createDocumentFragment(),A=b.documentElement,K=A.firstChild,B=b.createElement("style"),C=b.createElement("body");B.media="all";c(b);c(z);a.attachEvent("onbeforeprint",function(){for(var p=-1;++p<r;)for(var m=b.getElementsByTagName(g[p]),I=m.length,t=-1;++t<I;)if(m[t].className.indexOf("iepp_")<0)m[t].className+=" iepp_"+
g[p];K.insertBefore(B,K.firstChild);B.styleSheet.cssText=k(b.styleSheets,"all").replace(T,".iepp_$1");z.appendChild(b.body);A.appendChild(C);C.innerHTML=z.firstChild.innerHTML.replace(x,"<$1bdo")});a.attachEvent("onafterprint",function(){C.innerHTML="";A.removeChild(C);K.removeChild(B);A.appendChild(z.firstChild)})}(this,document);f._enableHTML5=true;f._version="1.6";l.className=l.className.replace(/\bno-js\b/,"")+" js";l.className+=" "+P.join(" ");return f}(this,this.document);