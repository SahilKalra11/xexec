<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
     <title>Employee Recognition Programs | Xexec</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Xexec is an award winning reward &amp; recognition, employee benefits and customer loyalty solutions provider in the UK trusted by more than 1 million people.">
   
<meta name="robots" content="noindex, nofollow" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/style5.css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.png" type="image/png" />
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
var speedKit = {
  appName: 'fast-troll-36',
  whitelist: [
/* START Default Whitelist + Third Party Content */
    {
      host: [
        /xexec\.com$/,
        "ajax.googleapis.com",
        "fonts.googleapis.com",
        "js.hsforms.net",
        "fonts.gstatic.com",
        "player.h-cdn.com",
        "snap.licdn.com",
        "cdn.livechatinc.com",
        "js.hs-analytics.net",
        "js.hs-scripts.com",
        "js.hsleadflows.net",
        "perr.h-cdn.com"
      ]
    },
    {
      url: [
        "ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js",
        "snap.licdn.com/li.lms-analytics/insight.min.js",
        "www.google-analytics.com/analytics.js"
      ]
    }
/* END Default Whitelist */
  ],
  blacklist: [
/* START Default Blacklist */
    {
      url: [
        "forms.hsforms.com/embed/v3/form/2195820/41be3688-f412-4b5f-9b71-16c99eb63e64",
        "forms.hsforms.com/embed/v3/form/2195820/756eb05b-b167-4b43-bea0-73ed021c6d27",
        /[?&]_=\d{13,}/
      ]
    }
/* END Default Blacklist */
  ],
};
!function(e,n,t,r,i,o,a){"use strict";var s="baqend-speedkit",u=s+"-user-id",c=s+"-session-id",d=s+"-session-timestamp",p=s+"-group";function f(e,n,t,r){return Promise.resolve(e).then(function(e){return new Promise(function(i,o){var a=e.transaction(n,t),s=Promise.resolve(r(a.objectStore(n)));a.oncomplete=function(){return s.then(i)},a.onabort=a.onerror=function(){return o(a.error)}})})}function l(e,n,t){return f(e,n,"readwrite",t)}var v,h,m=function(){function e(){this.dbp=null,this.dbp=this.openDb()}return e.prototype.get=function(e){return(n=this.db(),t="baqend-speedkit-store",r=function(n){return n.get(e)},f(n,t,"readonly",r)).then(function(e){return e.result||null});var n,t,r},e.prototype.set=function(e,n){return l(this.db(),"baqend-speedkit-store",function(t){return t.put(n,e)&&void 0})},e.prototype.clear=function(){return Promise.all([(e=this.db(),n="baqend-speedkit-store",l(e,n,function(e){return e.clear()}).then(function(){}))]).then(function(){});var e,n},e.prototype.disconnect=function(){var e=this;return this.dbp?this.dbp.then(function(n){e.dbp=null,n.close()}):Promise.resolve()},e.prototype.db=function(){return this.dbp||(this.dbp=this.openDb()),this.dbp},e.prototype.openDb=function(){var e=this,n=indexedDB.open(s,1);return n.onupgradeneeded=function(e){var t=e.oldVersion,r=n.result;t<1&&r.createObjectStore("baqend-speedkit-store")},function(e){return new Promise(function(n,t){e.onsuccess=function(){return n(e.result)},e.onerror=function(){return t(e.error)}})}(n).then(function(n){return n.onclose=function(){e.dbp=null},n.onerror=function(){e.dbp=null},n.onversionchange=function(t){t.newVersion||(e.dbp=null,n.close())},n})},e}();!function(){function e(){this.map=new Map}e.prototype.get=function(e){return Promise.resolve(this.map.get(e)||null)},e.prototype.set=function(e,n){return this.map.set(e,n),Promise.resolve()},e.prototype.clear=function(){return this.map.clear(),Promise.resolve()}}();function g(n){"complete"!==e.readyState?window.addEventListener("load",n):n()}function w(n){var t=new RegExp(n+"=([^,;]*);"),r=e.cookie.match(t);if(r)return r[1];if("undefined"==typeof Storage)return null;try{return localStorage.getItem(n)}catch(i){return null}}function b(n,t){if(e.cookie=n+"="+t+"; path=/","undefined"!=typeof Storage)try{localStorage.setItem(n,t)}catch(r){}}function y(){if(null==r.split||r.split>=1)return"A";var e=w(p);if(e)return e;var n=Math.random()<r.split?"A":"B";return b(p,n),n}function P(e){return void 0===e&&(e=25),function(e){var n=[];n.length=e;var t=0;for(;t<e;)n[t]=0,t+=1;return n}(e).map(function(){return Math.floor(62*Math.random())}).map(function(e){return"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"[e]}).join("")}function S(){var e,n=(e=w(d))&&(Date.now()-parseInt(e,10))/1e3<=r.sessionLifetime?w(c):P();return b(c,n),b(d,Date.now().toString()),n}function k(){var e=w(u);if(e)return e;var n=P();return b(u,n),n}function I(e,t){if(n.sendBeacon)n.sendBeacon(e,t);else{var r=new XMLHttpRequest;r.open("POST",e,!0),r.send(t)}}function E(e){return fetch(r.appURL+"/config/VAPIDPublicKey").then(function(e){return e.arrayBuffer()}).then(function(e){return{applicationServerKey:e,userVisibleOnly:!0}}).then(function(n){return e.subscribe(n)}).then(function(e){var n={subscription:e,devicetype:"WebPush"};return fetch(r.appURL+"/db/Device/register",{method:"POST",credentials:"include",body:JSON.stringify(n),headers:{"Content-Type":"application/json"}})}).then(function(e){return 200===e.status},function(){return!1})}function C(n){var t,r,i;"complete"!==n.readyState&&(n.readyState="complete",t="speed-kit-completed",r=window,void 0===i&&(i={}),setTimeout(function(){var n;"function"==typeof CustomEvent?n=new CustomEvent(t,{detail:i}):(n=e.createEvent("CustomEvent")).initCustomEvent(t,!0,!0,i),r.dispatchEvent(n)}))}if(!window[i]){window[i]=!0,r.sessionLifetime=r.sessionLifetime||1800;var L=function(e){var t=e.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i)||[],r=null;if(/trident/i.test(t[1]))return r=/\brv[ :]+(\d+)/g.exec(e)||[],["IE",parseInt(r[1],10)||0];if("Chrome"===t[1]){if(null!=(r=e.match(/\bEdge\/(\d+)/)))return["Edge",parseInt(r[1],10)];if(null!=(r=e.match(/\bOPR\/(\d+)/)))return["Opera",parseInt(r[1],10)]}var i=t[2]?[t[1],parseInt(t[2],10)]:[n.appName,parseInt(n.appVersion,10)];return-1===e.indexOf("Android")&&null!=(r=e.match(/version\/(\d+)/i))&&i.splice(1,1,parseInt(r[1],10)),i}(n.userAgent),D=L[0],M=L[1],q={subscribe:function(){return"Notification"in window?Notification.requestPermission().then(function(e){return"denied"===e?"denied":"granted"!==e?"undecided":n[t].ready.then(function(e){var n=e.pushManager;return function(e){return e.getSubscription().then(function(e){return!!e})}(n).then(function(e){return!!e||E(n)})}).then(function(e){return e?"registered":"unregistered"})}):Promise.resolve("unsupported")},swSupported:!1,wasServed:!1,wasCacheHit:!1,lastNavigate:{browser:D,browserVersion:M,enabled:!1,served:!1,cacheHit:!1,cdnCacheHit:null,cdnBackendTime:null,cdnPoP:null,firstLoad:(v=null===w(u),h=n[t]&&n[t].controller,v&&!h)},readyState:"loading",userId:k(),sessionId:S(),group:y(),navigateId:"/db/speedKit.Metric/"+P(32),track:function(e,n,t){var i=new FormData;i.append("navigate",window.SpeedKit.navigateId),i.append("action",""+e),i.append("label",""+n),i.append("value",""+t),i.append("userId",""+k()),i.append("sessionId",""+S()),i.append("group",""+y()),I(r.appURL+"/db/speedKit.CustomEvent",i)}};if(window.SpeedKit=q,r.disabled=r.disabled||"B"===q.group,r.appURL="https://"+(r.appDomain||"{}.app.baqend.com".replace("{}",r.appName))+"/v1",n[t]){q.swSupported=!0;var T=new m;if(o=r.sw||"/sw.js",!r.disabled&&function(e,n){return"Chrome"===e?n>=61:"Firefox"!==e||59!==n}(D,M)){var R=n[t].controller;if(R)(function(e,n){return new Promise(function(t,r){var i=new MessageChannel,o=i.port1,a=i.port2;o.onmessage=function(e){return t(e.data)},o.onmessageerror=function(e){return r(e.data)},e.postMessage(n,[a])})})(R,{type:"get-navigate-info",clientURL:location.href}).then(function(e){if(C(q),e){if("wasCacheHit"in e)return q.wasServed=!0,void(q.wasCacheHit=e.wasCacheHit);q.wasServed=e.served,q.wasCacheHit=e.cacheHit,q.lastNavigate=e,q.lastNavigate.firstLoad=!1}}),setTimeout(function(){return C(q)},1e3),R.postMessage({type:"send-cookies",data:e.cookie,event:"load"});else C(q);Promise.resolve().then(function(){var n=window.devicePixelRatio,t=window.screen.width;return Promise.all([T.set("/com.baqend.speedkit.config",r),T.set("/com.baqend.speedkit.screen",{dpr:n,width:t}),T.set("/com.baqend.speedkit.cookie",{origins:[[location.origin,e.cookie]]}),void 0]).then(function(){return T.disconnect()})}).then(function(){n[t].register(o,{scope:r.scope||"/"}).then(function(n){window.addEventListener("unload",function(){n.active&&n.active.postMessage({type:"send-cookies",data:e.cookie,event:"unload"})}),g(function(){window.setTimeout(function(){var e=window.performance.getEntriesByType("resource").map(function(e){return{url:e.name,initiatorType:e.initiatorType}});n.active&&n.active.postMessage({type:"prewarm-fetch",data:e})},1e3)}),n.navigationPreload&&function(e){if(e.active)return Promise.resolve(e.active);var n=e.waiting||e.installing;return new Promise(function(e){return n.onstatechange=function(){"activated"===n.state&&e(n)}})}(n).then(function(){r.navigationPreload?n.navigationPreload.enable():n.navigationPreload.disable()})})})}else n[t].getRegistration(o).then(function(e){return!!e&&e.unregister()}),C(q)}else C(q)}}(document,navigator,"serviceWorker","undefined"!=typeof speedKit?speedKit:config,"SNIPPET_LOADED");
</script>

</head>

<body id="page-top" class="index">

    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
       
    
        <div class="container">
           
              <div class="headerinfo">
				  <a href="#requestdemo" class="page-scroll btn btn-xl4">Contact Us</a> <span class="yellow">US</span> +1 844 576 2457	&nbsp;&nbsp;&nbsp;<span class="yellow">EUROPE</span> +44 20 8201 6483
			  </div>
       			<div class="clearfix"></div>
          
          
           
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/xexec-logo-us.png" alt="Xexec in the US"></a>
            </div>

            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden"><a href="#page-top"></a> </li>
                    <li><a class="page-scroll" href="#services">Programs</a></li>
                    <li><a class="page-scroll" href="resources">Resources</a></li>
                    <li><a class="page-scroll" href="#testimonials">Clients</a></li>
                    <li><a href="https://blog.xexec.com/us" target="_blank">Blog</a></li>        
                    <li><a class="page-scroll" href="#requestdemo">Contact</a></li>  
                </ul>
            </div>
        </div>
    </nav>



  <header>
        <div class="embed-responsive embed-responsive-16by9">
        <div class="overlay">
        	 <div class="container">
          
         
   
           
            <div class="intro-text">
				<div class="intro-heading"><h1>Engagement and Employee <br>Recognition Programs</h1></div>
				<!--<div class="intro-heading"><h1>Employee Recognition <br>And Engagement</h1></div>-->
                <div class="intro-lead-in">Align your company culture and values to drive <br>employee engagement and fuel business performance. </div>
                <a href="#requestdemo" class="page-scroll btn btn-xl">Get a Demo</a>
            </div>
        </div>
        </div>
  <video autoplay loop class="embed-responsive-item">
  <source src="img/20161017_video_BG_variation_2_compressed_LQ.mp4" type="video/mp4" />
  </video>
</div>
       
    </header>

   
    <section id="services">
        <div class="container">
         
            <div class="row text-center">
                <div class="col-sm-4">
                   
                   <div style="width:60%; margin:0 20%">
                   <div class="trigger"></div>
<svg version="1.1" id="tick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">
<path class="circ path" style="fill:none;stroke:#57595B;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;" d="
	M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.52z"
	/>
<polyline class="tick path" style="fill:none;stroke:#57595B;stroke-width:2;stroke-miterlimit:10;" points="
	11.6,20 15.9,24.2 26.4,13.8 "/>
</svg>
</div>

                   
           <h4 class="service-heading">Instant Recognition</h4>
                </div>
                <div class="col-sm-4">
                   
                   
                    <div style="width:60%; margin:0 20%">
                    
                    <i class="fa fa-spin fa-cog cogs" aria-hidden="true" style=""></i>
                    
                   <div class="trigger"></div>
<svg version="1.1" id="tick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">
<path class="circ path" style="fill:none;stroke:#57595B;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;;stroke-dasharray: 27" d="
	M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.52z"
	/>
	
	
<path class="tick  path" style="fill:none;stroke:#57595B;stroke-width:2;" d="M
	2,4 
	8.5,5
	8,12
	8.5,5z"/>
	
	<path class="tick  path" style="fill:none;stroke:#57595B;stroke-width:2;" d="M
	30,24 
	29,31.5
	36,31.5"/>
	

</svg>
</div>
                   
                   
                 <h4 class="service-heading">Automated Rewards</h4>
                </div>
                <div class="col-sm-4">
                   
                   
                                   <div style="width:60%; margin:0 20%">
                   <div class="trigger"></div>
                   
<svg version="1.1" id="tick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">
	<path class="circ path" style="fill:none;stroke:#57595B;stroke-width:2;stroke-miterlimit:5;stroke-dasharray: 0,0" d="	M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.52z"/>
	<polyline class="tick path" style="bottom:0%;stroke:#57595B;stroke-width:5;" points="12,27  12,10 "/>
	<polyline class="tick path" style="stroke:#57595B;stroke-width:5;" 			points="18.5,27  18.5,15 "/>
<polyline class="tick path" style="stroke:#57595B;stroke-width:5;" 				points="25,27  25,20 "/>
	
	
</svg>

</div>

                   
       <h4 class="service-heading">Performance Data</h4>
                </div>
                
                
            </div>
        </div>
    </section>
    
    
    <!-- About Section -->
    <section id="demo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Recognition that’s personal to your organization with your values at its core.</h2>
                    <p>Reward and recognition strategy is unique to every organization, Xexec can help you build an employee recognition program centered around your company culture and core values.</p>
                       <a href="#requestdemo" class="page-scroll btn btn-xl2">Learn More</a>
                </div>
            </div>
           
        </div>
    </section>
    
      
    <!-- About Section -->
    <section id="ebook">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Give your employees the tools to recognize achievements and celebrate success.</h2>
                     <a href="https://info.xexec.com/us/employee-recognition-strategy-e-book" class="page-scroll btn btn-xl" target="_blank">Download e-book</a>
                </div>
            </div>
           
        </div>
    </section>
    
    

    <section id="praise">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">The Power of Employee Praise</h2>
                </div>
            </div>
               <div class="form-group">&nbsp;</div>
              <div class="row text-center">
              
              
            <div class="col-md-4 col-sm-6 px-20">
               <div class="col-md-12">
                
                   
				<div style="position:relative;width:92%; margin:0px 4% 30px;float:left;">
				<canvas id="myChart1" width="288" height="212"></canvas>
					<div style="position:absolute; top:37%; left:0;right:0%; font-size:40px; font-weight:700; color:#FFCC33; "><span id="firstCounter"></span>%</div>
				</div>
                <p>Recognizing employee performance can turbocharge employee engagement by as much as 60%</p>
                <p><strong>Towers Watson</strong></p>
              </div>
              </div>
              
              
              
              
            <div class="col-md-4 col-sm-6">
                <div class="col-md-12">
                <div style="position:relative;width:92%; margin:0px 4% 30px;float:left;">
				<canvas id="myChart2" width="288" height="212"></canvas>
				<div style="position:absolute; top:37%; left:0;right:0%; font-size:40px; font-weight:700; color:#FFCC33; "><span id="secondCounter"></span>%</div>
				</div>
                <p>Companies with strategic recognition reported employee turnover rate 24% lower than those without</p>
                <p><strong>SHRM</strong></p>
              </div>
              </div>
            <div class="col-md-4 col-sm-6">
                <div class="col-md-12">
                <div style="position:relative;width:92%; margin:0px 4% 30px;float:left;">
				<canvas id="myChart3" width="288" height="212"></canvas>
				<div style="position:absolute; top:37%; left:0;right:0%; font-size:40px; font-weight:700; color:#FFCC33; "><span id="thirdCounter"></span>%</div>
				</div>
                <p>Xexec's average employee adoption rate across our recognition programs is 80%</p>
                <p><strong>Xexec</strong></p>
              </div>
              </div>
          
          
          </div>
        </div>
    </section>


   
   
   
   
   
   
   
    <section id="crowdsourced">
        <div class="container">
            <div class="row">
              
                <div class="col-md-6 text-center"><img src="img/crowdsourced-mi-data2.png" width="100%"/></div>
                
                  <div class="col-md-6 text-center">
                    <h2 class="section-heading">Crowdsourced<br>MI and Data</h2>
                    <p>The richest source of crowdsourced  performance review data imaginable. There is no better way to discover the  hidden gems within the organization than through peer to peer recognition.</p>
                    <a href="#contact" class="page-scroll btn btn-xl">Get a Demo</a>
                </div>
            </div>
           
        </div>
    </section>
    
    
    
    
    
    
   
    <section id="global">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   <!--<h2 class="section-heading">Global employee recognition <br>with local rewards</h2>-->
					<h2 class="section-heading">Global employee recognition <br>programs with local rewards</h2>
                    <p>Recognize your people wherever they’re based.</p>
        
                     
                     <img src="img/global-map.jpg" width="100%"/>
                     
                      <a href="https://www.xexec.com/case-studies"  target="_blank"class="page-scroll btn btn-xl2">Case Studies</a>
                </div>
            </div>
           
        </div>
    </section>
    
    
    
    
    
    
    
    
        <section id="testimonials">
        <div class="container">
        
                   
                    
                         <div class="col-lg-12 text-center">  
                               <h2 class="section-heading ">Happy Customers</h2>
			</div>
                      <div class="form-group">&nbsp;</div>
                       <div class="row form-group">
							
								<div class="col-sm-3"><img src="img/hilton.jpg" class="img-responsive center-block"/></div>
								<div class="col-sm-3"><img src="img/t-mobile.jpg" class="img-responsive center-block"></div>
								<div class="col-sm-3"><img src="img/hp-logo.jpg" class="img-responsive center-block"/></div>
                       			<div class="col-sm-3"><img src="img/visa.jpg" class="img-responsive center-block"/></div>
                        </div>
                        <div class="form-group">&nbsp;</div>
						   <div class="row"></div>
                             <div class="row form-group">
                             
								
								<div class="col-sm-3"><img src="img/ihop-logo.jpg" class="img-responsive center-block"/></div>
								<div class="col-sm-3"><img src="img/citibank.jpg" class="img-responsive center-block"/></div>
								<div class="col-sm-3"><img src="img/bank-of-america.jpg" class="img-responsive center-block"/></div>
								<div class="col-sm-3"><img src="img/applebees.jpg" class="img-responsive center-block"></div>
                       
								
                        </div>
                        
                         <div class="row">
                <div class="col-lg-12 text-center">   
                    
                    
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <div class="carousel-inner" role="listbox">

      <div class="item active">
			<p>&ldquo;We were looking for a high quality, easy to use website to give employees access to a wide range of exclusive offers and discounts. Xexec offered precisely that and in partnership we launched the Sytner Employee Benefit Website in February. Uptake has been good, with a large number of employees using the service and employee feedback has been really positive. It is really great to be able to offer our employees such a comprehensive range of products with the support of Xexec.&rdquo;</p>
			<p><strong>Mel Rogers, Director of Human Resources, Sytner Group</strong></p>
			<p><img src="img/sytner-logo.jpg"/></p>
      </div>

      <div class="item">
			<p>&ldquo; We have been overwhelmed by the uptake of and engagement with our new Reward &amp; Recognition platform. In the first week alone we have had over 200 individual awards and 15 team nominations. Xexec’s platform has been a wonderful addition by enabling our colleagues to easily recognise and reward each other’s contributions, making each individual feel like they are part of the team and appreciated in the workplace. Xexec has to take a lot of credit for the success we have already seen in early adoption.&rdquo;</p>
			<p><strong>Sally Purbrick, Head of Reward at Anglian Water</strong></p>
			<p><img src="img/anglian-water.jpg"/></p>
      </div>
      
		<div class="item">
			<p>&ldquo;To help us achieve our goals we must be able to recognise, reward and celebrate our colleagues’ success. Xexec’s understanding of our organisation and ability to create our bespoke branded engagement portal has been a key reason for us moving over to their platform. We have been really happy with the results and the way our teams have embraced it. It has not only enabled us to demonstrate that we appreciate all our employees’ hard work but it has made every member of the team feel part of our special community.&rdquo;</p>
			<p><strong>Robin Takoor, Reward Specialist</strong></p>
			<p><img src="img/cancer-research.jpg"/></p>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
                   
                   
                   
                                      
                </div>
        
           
        </div>
    </section>
    
    
    
    
    <section id="requestdemo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Get in Touch</h2>
              
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                       
                           
                         <div class="row">
                            
                               <div class="col-md-6 form-group">
                                    <label for="firstname" class="control-label">First Name</label><p class="help-block text-danger"></p>
                                    <input type="text" class="form-control"  id="firstname" required data-validation-required-message="Enter your name.">
                            </div>
                              
                               <div class="col-md-6 form-group">
                                    <label for="lastname" class="control-label">Last Name</label> <p class="help-block text-danger"></p>
                                    <input type="text" class="form-control"  id="lastname" required data-validation-required-message="Enter your last name.">
                            </div>
                              
						</div>
                              
                        <div class="row">
                             
                             
                             <div class="col-md-4 form-group">
                                     <label for="company" class="control-label">Company Name</label> <p class="help-block text-danger"></p>
                                    <input type="text" class="form-control" id="company" required data-validation-required-message="Enter your company name.">
                            </div>
                              
                              <div class="col-md-4 form-group">
                                     <label for="jobtitle" class="control-label">Job Title</label> <p class="help-block text-danger"></p>
                                    <input type="text" class="form-control" id="jobtitle" required data-validation-required-message="Enter your job title.">
                            </div>
                            <div class="col-md-4 form-group">
                                     <label for="employees" class="control-label">Number of Employees</label> <p class="help-block text-danger"></p>
                                   <!-- <input type="text" class="form-control"  id="employees" required data-validation-required-message="Enter the number of employees.">-->
								<select class="form-control"  id="employees" required data-validation-required-message="Enter the number of employees.">
									<option value="" selected="true" disabled="disabled">Please Choose</option>
									<option value="0-250">0-250</option>
									<option value="250-1000">250-1000</option>
									<option value="1000-5000">1000-5000</option>
									<option value="5000-10,000">5000-10,000</option>
									<option value="10,000+">10,000+</option>
								</select>
                            </div>
                        </div>
                               
                           <div class="row">
                            
                                <div class="col-md-6 form-group">
                                     <label for="phonenumber" class="control-label">Phone Number</label> <p class="help-block text-danger"></p>
                                    <input type="tel" class="form-control"  id="phonenumber" required data-validation-required-message="Enter your phone number.">
                            </div>
                              
                                <div class="col-md-6 form-group">
                                     <label for="email" class="control-label">Email</label> <p class="help-block text-danger"></p>
                                    <input type="email" class="form-control"  id="email" required data-validation-required-message="Enter your email address.">
                            </div>
                              
						</div>    
                                  
                            
                            
                            
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

   
   
   <footer id="contact">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-sm-2">
                       <img src="img/xexec-logo-us.png" width="100%"/>
                    </div>
                    <div class="footer-col col-md-1">&nbsp;</div>
                    <div class="footer-col col-md-4">
                        <h3>Contact Information</h3>
						<p>Xexec Inc.<br>
						330W 42nd Street, 23rd Floor, <br>New York, NY 10036 <br>
						<a href="mailto:recognition@xexec.com">recognition@xexec.com</a><br>
							+1 844 576 2457</p>
                    </div>
                    
					
                    <div class="footer-col col-md-5">
                        <h3>Sign up to receive our newsletter</h3>
                        
                  <form name="sentMessage" id="contactForm" novalidate>
                       
                           
                         <div class="row">
                            
                               <div class="col-md-6 form-group">
                                    <label for="name" class="control-label">First Name</label><p class="help-block text-danger"></p>
                                    <input type="text" class="form-control"  id="name" required data-validation-required-message="Enter your name.">
                            </div>
                              
                               <div class="col-md-6 form-group">
                                    <label for="email" class="control-label">Email</label> <p class="help-block text-danger"></p>
                                    <input type="email" class="form-control"  id="email" required data-validation-required-message="Enter your email.">
                            </div>
                              
						</div>
            
                            <div class="clearfix"></div>
                       
                                <div id="success"></div>
                                <button type="submit" class="btn btn-block btn-xl3">Submit</button>
                          
                        </div>
                    </form>
                   
                   
                   
                   
                   
                   
                   
                   
                   
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       <div class="pull-left">
                        &copy; Xexec <?php echo date("Y"); ?> 
						</div>
                        <div class="pull-right">
                         <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/xexeccorporate/" target="_blank"><span class="sr-only">Facebook</span><i class="fa fa-2x fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/1356795/" target="_blank"><span class="sr-only">LinkedIn</span><i class="fa fa-2x fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/xexec_corporate/" target="_blank"><span class="sr-only">Instagram</span><i class="fa fa-2x fa-instagram"></i></a>
                            </li>
                            
                            <li>
                                <a href="https://twitter.com/Xexec_Corporate" target="_blank"><span class="sr-only">Twitter</span><i class="fa fa-2x fa-twitter"></i></a>
                            </li>
                        </ul>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.0.1/Chart.bundle.min.js"></script> 


<script>
	






</script>
<script src="https://use.typekit.net/guq0reu.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js"></script>  
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/agency.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    
    <script type="text/javascript" src="js/countUp.js"></script> 
    
    <script>
	$( document ).ready(function() {
	 
		
		$('#services').waypoint(function(direction) {
	
			$(".trigger").toggleClass("drawn");
			$(".fa-cog").fadeIn(3000);

			 setTimeout(function(){
			   $(".fa-cog").removeClass("fa-spin");
			}, 2500);
			this.destroy();
		},{
		  offset:'90%'
		});
		
		
		
		
var inView1 = false;
var inView2 = false;
var inView3 = false;
		
		
function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemTop <= docViewBottom) && (elemBottom >= docViewTop));
}
		

$(window).scroll(function() {
   
	
	if (isScrolledIntoView('#myChart1')) {
        if (inView1) { return; }
        inView1 = true;

		var options = {	useEasing : true, 	useGrouping : false, 	separator : ',', 	decimal : '.', 	prefix : '', 	suffix : '' 	};
		var firstcount = new CountUp("firstCounter", 0, 60, 0, 3, options);

		firstcount.start();

		var myChart1 = new Chart(document.getElementById("myChart1"), {
			type: 'doughnut',
		   data: { labels: ["",""],datasets: [{ data: [60, 40],  backgroundColor: ["#FFCC33","#395269"]  }]},
			responsive : true,
			options: {
				tooltips: {	enabled:false,  },	cutoutPercentage:  70 ,	legend: {display:0        },
				elements: { arc: {  borderColor: "#395269",borderWidth: 0    }   },
				 animation: {duration: 2000,easing: 'linear',			}
			},

		});

    } else {
        inView1 = false;  
    }
	
	
	
	
	
	
	
	 if (isScrolledIntoView('#myChart2')) {
        if (inView2) { return; }
        inView2 = true;

		var options = {	useEasing : true, 	useGrouping : false, 	separator : ',', 	decimal : '.', 	prefix : '', 	suffix : '' 	};
		var secondcount = new CountUp("secondCounter", 0, 24, 0, 3, options);
		secondcount.start();

		var myChart2 = new Chart(document.getElementById("myChart2"), {
			type: 'doughnut',
		   data: { labels: ["",""],datasets: [{ data: [24, 76],  backgroundColor: ["#FFCC33","#395269"]  }]},
			responsive : true,
			options: {
				tooltips: {	enabled:false,  },	cutoutPercentage:  70 ,	legend: {display:0        },
				elements: { arc: {  borderColor: "#395269",borderWidth: 0    }   },
				 animation: {duration: 2000,easing: 'linear',			}
			}
		});

    } else {
        inView2 = false;  
    }

	
	
	
	 if (isScrolledIntoView('#myChart3')) {
        if (inView3) { return; }
        inView3 = true;

		var options = {	useEasing : true, 	useGrouping : false, 	separator : ',', 	decimal : '.', 	prefix : '', 	suffix : '' 	};
		var thirdcount = new CountUp("thirdCounter", 0, 80, 0, 3, options);
		thirdcount.start();

		var myChart3 = new Chart(document.getElementById("myChart3"), {
			type: 'doughnut',
		   data: { labels: ["",""],datasets: [{ data: [80, 20],  backgroundColor: ["#FFCC33","#395269"]  }]},
			responsive : true,
			options: {
				tooltips: {	enabled:false,  },	cutoutPercentage:  70 ,	legend: {display:0        },
				elements: { arc: {  borderColor: "#395269",borderWidth: 0    }   },
				 animation: {duration: 2000,easing: 'linear',			}
			}
		});

    } else {
        inView3 = false;  
    }
	
	
});		
	
	
	
	
		
	
		
		

		
	});


</script>

</body>

</html>
