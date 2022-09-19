@extends('app')
<script type="text/javascript">var _rollbarConfig = {"accessToken":"1b83889ddedb42f4b93c505d7a4530b7","captureUncaught":true,"captureUnhandledRejections":true,"server":{"root":"webpack:\/\/\/.\/"},"payload":{"environment":"production"}};!function(r){var e={};function o(n){if(e[n])return e[n].exports;var t=e[n]={i:n,l:!1,exports:{}};return r[n].call(t.exports,t,t.exports,o),t.l=!0,t.exports}o.m=r,o.c=e,o.d=function(r,e,n){o.o(r,e)||Object.defineProperty(r,e,{enumerable:!0,get:n})},o.r=function(r){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(r,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(r,"__esModule",{value:!0})},o.t=function(r,e){if(1&e&&(r=o(r)),8&e)return r;if(4&e&&"object"==typeof r&&r&&r.__esModule)return r;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:r}),2&e&&"string"!=typeof r)for(var t in r)o.d(n,t,function(e){return r[e]}.bind(null,t));return n},o.n=function(r){var e=r&&r.__esModule?function(){return r.default}:function(){return r};return o.d(e,"a",e),e},o.o=function(r,e){return Object.prototype.hasOwnProperty.call(r,e)},o.p="",o(o.s=0)}([function(r,e,o){"use strict";var n=o(1),t=o(4);_rollbarConfig=_rollbarConfig||{},_rollbarConfig.rollbarJsUrl=_rollbarConfig.rollbarJsUrl||"https://cdn.rollbar.com/rollbarjs/refs/tags/v2.17.0/rollbar.min.js",_rollbarConfig.async=void 0===_rollbarConfig.async||_rollbarConfig.async;var a=n.setupShim(window,_rollbarConfig),l=t(_rollbarConfig);window.rollbar=n.Rollbar,a.loadFull(window,document,!_rollbarConfig.async,_rollbarConfig,l)},function(r,e,o){"use strict";var n=o(2);function t(r){return function(){try{return r.apply(this,arguments)}catch(r){try{console.error("[Rollbar]: Internal error",r)}catch(r){}}}}var a=0;function l(r,e){this.options=r,this._rollbarOldOnError=null;var o=a++;this.shimId=function(){return o},"undefined"!=typeof window&&window._rollbarShims&&(window._rollbarShims[o]={handler:e,messages:[]})}var i=o(3),s=function(r,e){return new l(r,e)},d=function(r){return new i(s,r)};function c(r){return t((function(){var e=this,o=Array.prototype.slice.call(arguments,0),n={shim:e,method:r,args:o,ts:new Date};window._rollbarShims[this.shimId()].messages.push(n)}))}l.prototype.loadFull=function(r,e,o,n,a){var l=!1,i=e.createElement("script"),s=e.getElementsByTagName("script")[0],d=s.parentNode;i.crossOrigin="",i.src=n.rollbarJsUrl,o||(i.async=!0),i.onload=i.onreadystatechange=t((function(){if(!(l||this.readyState&&"loaded"!==this.readyState&&"complete"!==this.readyState)){i.onload=i.onreadystatechange=null;try{d.removeChild(i)}catch(r){}l=!0,function(){var e;if(void 0===r._rollbarDidLoad){e=new Error("rollbar.js did not load");for(var o,n,t,l,i=0;o=r._rollbarShims[i++];)for(o=o.messages||[];n=o.shift();)for(t=n.args||[],i=0;i<t.length;++i)if("function"==typeof(l=t[i])){l(e);break}}"function"==typeof a&&a(e)}()}})),d.insertBefore(i,s)},l.prototype.wrap=function(r,e,o){try{var n;if(n="function"==typeof e?e:function(){return e||{}},"function"!=typeof r)return r;if(r._isWrap)return r;if(!r._rollbar_wrapped&&(r._rollbar_wrapped=function(){o&&"function"==typeof o&&o.apply(this,arguments);try{return r.apply(this,arguments)}catch(o){var e=o;throw e&&("string"==typeof e&&(e=new String(e)),e._rollbarContext=n()||{},e._rollbarContext._wrappedSource=r.toString(),window._rollbarWrappedError=e),e}},r._rollbar_wrapped._isWrap=!0,r.hasOwnProperty))for(var t in r)r.hasOwnProperty(t)&&(r._rollbar_wrapped[t]=r[t]);return r._rollbar_wrapped}catch(e){return r}};for(var u="log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleAnonymousErrors,handleUnhandledRejection,captureEvent,captureDomContentLoaded,captureLoad".split(","),p=0;p<u.length;++p)l.prototype[u[p]]=c(u[p]);r.exports={setupShim:function(r,e){if(r){var o=e.globalAlias||"Rollbar";if("object"==typeof r[o])return r[o];r._rollbarShims={},r._rollbarWrappedError=null;var a=new d(e);return t((function(){e.captureUncaught&&(a._rollbarOldOnError=r.onerror,n.captureUncaughtExceptions(r,a,!0),e.wrapGlobalEventHandlers&&n.wrapGlobals(r,a,!0)),e.captureUnhandledRejections&&n.captureUnhandledRejections(r,a,!0);var t=e.autoInstrument;return!1!==e.enabled&&(void 0===t||!0===t||"object"==typeof t&&t.network)&&r.addEventListener&&(r.addEventListener("load",a.captureLoad.bind(a)),r.addEventListener("DOMContentLoaded",a.captureDomContentLoaded.bind(a))),r[o]=a,a}))()}},Rollbar:d}},function(r,e,o){"use strict";function n(r,e,o,n){r._rollbarWrappedError&&(n[4]||(n[4]=r._rollbarWrappedError),n[5]||(n[5]=r._rollbarWrappedError._rollbarContext),r._rollbarWrappedError=null);var t=e.handleUncaughtException.apply(e,n);o&&o.apply(r,n),"anonymous"===t&&(e.anonymousErrorsPending+=1)}function t(r,e,o){if(e.hasOwnProperty&&e.hasOwnProperty("addEventListener")){for(var n=e.addEventListener;n._rollbarOldAdd&&n.belongsToShim;)n=n._rollbarOldAdd;var t=function(e,o,t){n.call(this,e,r.wrap(o),t)};t._rollbarOldAdd=n,t.belongsToShim=o,e.addEventListener=t;for(var a=e.removeEventListener;a._rollbarOldRemove&&a.belongsToShim;)a=a._rollbarOldRemove;var l=function(r,e,o){a.call(this,r,e&&e._rollbar_wrapped||e,o)};l._rollbarOldRemove=a,l.belongsToShim=o,e.removeEventListener=l}}r.exports={captureUncaughtExceptions:function(r,e,o){if(r){var t;if("function"==typeof e._rollbarOldOnError)t=e._rollbarOldOnError;else if(r.onerror){for(t=r.onerror;t._rollbarOldOnError;)t=t._rollbarOldOnError;e._rollbarOldOnError=t}e.handleAnonymousErrors();var a=function(){var o=Array.prototype.slice.call(arguments,0);n(r,e,t,o)};o&&(a._rollbarOldOnError=t),r.onerror=a}},captureUnhandledRejections:function(r,e,o){if(r){"function"==typeof r._rollbarURH&&r._rollbarURH.belongsToShim&&r.removeEventListener("unhandledrejection",r._rollbarURH);var n=function(r){var o,n,t;try{o=r.reason}catch(r){o=void 0}try{n=r.promise}catch(r){n="[unhandledrejection] error getting `promise` from event"}try{t=r.detail,!o&&t&&(o=t.reason,n=t.promise)}catch(r){}o||(o="[unhandledrejection] error getting `reason` from event"),e&&e.handleUnhandledRejection&&e.handleUnhandledRejection(o,n)};n.belongsToShim=o,r._rollbarURH=n,r.addEventListener("unhandledrejection",n)}},wrapGlobals:function(r,e,o){if(r){var n,a,l="EventTarget,Window,Node,ApplicationCache,AudioTrackList,ChannelMergerNode,CryptoOperation,EventSource,FileReader,HTMLUnknownElement,IDBDatabase,IDBRequest,IDBTransaction,KeyOperation,MediaController,MessagePort,ModalWindow,Notification,SVGElementInstance,Screen,TextTrack,TextTrackCue,TextTrackList,WebSocket,WebSocketWorker,Worker,XMLHttpRequest,XMLHttpRequestEventTarget,XMLHttpRequestUpload".split(",");for(n=0;n<l.length;++n)r[a=l[n]]&&r[a].prototype&&t(e,r[a].prototype,o)}}}},function(r,e,o){"use strict";function n(r,e){this.impl=r(e,this),this.options=e,function(r){for(var e=function(r){return function(){var e=Array.prototype.slice.call(arguments,0);if(this.impl[r])return this.impl[r].apply(this.impl,e)}},o="log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleAnonymousErrors,handleUnhandledRejection,_createItem,wrap,loadFull,shimId,captureEvent,captureDomContentLoaded,captureLoad".split(","),n=0;n<o.length;n++)r[o[n]]=e(o[n])}(n.prototype)}n.prototype._swapAndProcessMessages=function(r,e){var o,n,t;for(this.impl=r(this.options);o=e.shift();)n=o.method,t=o.args,this[n]&&"function"==typeof this[n]&&("captureDomContentLoaded"===n||"captureLoad"===n?this[n].apply(this,[t[0],o.ts]):this[n].apply(this,t));return this},r.exports=n},function(r,e,o){"use strict";r.exports=function(r){return function(e){if(!e&&!window._rollbarInitialized){for(var o,n,t=(r=r||{}).globalAlias||"Rollbar",a=window.rollbar,l=function(r){return new a(r)},i=0;o=window._rollbarShims[i++];)n||(n=o.handler),o.handler._swapAndProcessMessages(l,o.messages);window[t]=n,window._rollbarInitialized=!0}}}}]);;</script> <script> Rollbar.configure( { checkIgnore: function(isUncaught, args, payload) { return !RegExp('/((CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS)[ +]+(13[_.]4|13[_.]7|14[_.]0|14[_.]3)(?:[_.]d+)?)|(Opera Mini(?:/att)?/?(d+)?(?:.d+)?(?:.d+)?)|(SamsungBrowser/13.0)|(Edge/(87|88)(?:.0)?)|((Chromium|Chrome)/8[6-9].0(?:.d+)?)|(Version/14.0(?:.d+)? Safari/)|(Firefox/(83|84).0.d+)|(Firefox/(83|84).0(pre|[ab]d+[a-z]*)?)/').test(payload.client.javascript.browser); } } ); </script>  <!-- Full page caching helper --> <script type="text/javascript"> /* Polyfill the CustomEvent object for IE9+ */ (function () { if ( typeof window.CustomEvent === "function" ) return false; function CustomEvent ( event, params ) { params = params || { bubbles: false, cancelable: false, detail: undefined }; var evt = document.createEvent( 'CustomEvent' ); evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail ); return evt; } CustomEvent.prototype = window.Event.prototype; window.CustomEvent = CustomEvent; })(); var Fupcah = { isLoaded:false, eventName: 'fupcah-loaded', /** * Initialize the fupcah object. * * Checks if there is a tracking cookie available. If this is not the * case it will attempt to load a 1px transparent gif including this * cookie. * * Once the cookie is loaded it will mark the Fupcah object as loaded, * as reflected in the isLoaded variable. * * @return void */ init: function(){ var self = this; if(document.cookie.search('StudyPortals-trck=') < 0){ var fupcah = new Image(); fupcah.onload = function(){ self.callback(); }; fupcah.src = 'https://www.mastersportal.com/Fupcah.php?t=' + Date.now(); document.head.appendChild(fupcah); if(fupcah.complete){ self.callback(); } } else{ self.callback(); } }, /** * Handles the image onload event. * * @return void */ callback: function(){ var event = new CustomEvent(this.eventName); document.dispatchEvent(event); this.isLoaded = true; }, /** * Event subscriber for the onload event of Fupcah. * * This function subscribes a specified callback to Fupcah. This * function will be called as soon as Fupcah is marked as loaded. * * @param {Function} callback * @return void */ onload: function(callback){ if(this.isLoaded){ callback(); } else{ document.addEventListener(this.eventName, callback); } } }; Fupcah.init(); </script> <!-- Mark the time at which the page loaded --> <script type="text/javascript"> if(window && window.performance && window.performance.mark){ performance.mark('page_load_start_mark'); } </script> <!-- Shortcut icons --> <!-- Shortcut icons --> <!-- Favicon --> <link rel="icon" type="image/png" href="//monet-prtl-co.imgix.net/Shared/Favicons/favicon-32x32.png" sizes="32x32"> <link rel="icon" type="image/png" href="//monet-prtl-co.imgix.net/Shared/Favicons/favicon-16x16.png" sizes="16x16"> <!-- Apple touch icons --> <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon.png" rel="apple-touch-icon" /> <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon-76x76.png" rel="apple-touch-icon" /> <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon-120x120.png" rel="apple-touch-icon" /> <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon-152x152.png" rel="apple-touch-icon" /> <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon-192x192.png" rel="apple-touch-icon" /> <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon-512x512.png" rel="apple-touch-icon" /> <!-- Theme color --> <meta name="theme-color" content="#247BA0"> <!-- Mobile viewport --> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Progressive Web App manifest --> <link rel="manifest" href="https://www.mastersportal.com/manifest.json"> <!-- Open Sans --> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet"> <!-- Linear icon font --> <link rel="preconnect" href="https://d1azc1qln24ryf.cloudfront.net" crossorigin>
<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/26905/Studyportalslineariconset/style-cf.css?tqtgr7">
<script> window.Meta = { reflector_url: 'https://reflector.prtl.co/', sl_external_url: 'https://sl.prtl.co/' }; </script> <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@studyportals/vue-config@3.0.0/dist/library.min.js"></script>  <link rel="canonical" href="https://www.mastersportal.com/universities/11733/hong-kong-university-of-science-and-technology.html">  <title> Hong Kong University of Science and Technology | University Info | 50 Masters in English - Mastersportal.com  </title> <link rel="stylesheet" href="https://www.mastersportal.com/dist/master/shared.2b3058c0fcc31b15d920.css"><link rel="stylesheet" href="https://www.mastersportal.com/dist/master/57bc88a53540236df9251e2358c7b683730eba77.f625451683a6b7ae591e.css"><script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-55961456-1', 'auto', {'allowLinker': true});
    ga('require', 'linker');
    ga('linker:autoLink', ['mastersportal.com']);
    ga('require', 'displayfeatures');

    if(typeof premiums != 'undefined'){

        if(premiums.indexOf('display_premium') !== -1){

            ga('set', 'contentGroup1', 'Premium');
        }
        else if(premiums.indexOf('display_regular') !== -1){

            ga('set', 'contentGroup1', 'Basic');
        }
        else{

            ga('set', 'contentGroup1', 'Other');
        }
    }

    if(window.location.href.indexOf('/search/') === -1){

        ga('send', 'pageview');
    }
</script><!-- This loads the snowplow tracking script -->

<script>

    !function(e,o,n,a,s,l,t){e[s]||(e.GlobalSnowplowNamespace=e.GlobalSnowplowNamespace||[],e.GlobalSnowplowNamespace.push(s),e[s]=function(){
            (e[s].q=e[s].q||[]).push(arguments)},e[s].q=e[s].q||[],l=o.createElement(n),
            t=o.getElementsByTagName(n)[0],l.async=1,l.src=a,t.parentNode.insertBefore(l,t)
    )}(window,document,"script","//snow.prtl.co/2-17-3.js","snowplow");

</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@studyportals/modal-dll@1.1.8/dist/modal.min.css"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@studyportals/multiselect-dll@1.1.0/dist/multiselect.min.css"><link rel="preload" href="https://auth.prtl.co/dist/style.f92bdd7749d8cca5a78b.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="stylesheet" href="https://auth.prtl.co/dist/style.f92bdd7749d8cca5a78b.css"><link rel="stylesheet" href="https://reviews-frontend.prtl.co/static/css/app.3d1e3daa94abf676ae1198ac1de63f64.css"><link rel="preload" href="https://decisionmakingservice.prtl.co/dist/style.679db5ec9c17472ba976.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="stylesheet" href="https://decisionmakingservice.prtl.co/dist/style.679db5ec9c17472ba976.css"><link rel="preload" href="https://wishlistbutton.prtl.co/dist/style.c1a530c7f718fb1b815a.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="stylesheet" href="https://wishlistbutton.prtl.co/dist/style.c1a530c7f718fb1b815a.css"><link rel="preload" href="https://profile-questionnaires.prtl.co/dist/style.67c569e5a7ed997a5351.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="stylesheet" href="https://profile-questionnaires.prtl.co/dist/style.67c569e5a7ed997a5351.css">

<script type="text/javascript" src="https://studentjs.studyportals.com/bundle.js?version=15" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://anonymous-student.prtl.co/dist/bundle.js?version=3" crossorigin="anonymous"></script>


@section('content')
    <section id="HeroContainer" class="Variation3 ContainerStudyCoverImg"> <div class="HeroContainerHelper"> <span class="HeroImage js-heroImage" style="background-image: url(&quot;https://storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=480&amp;fit=crop&amp;w=1920&amp;auto=format,compress&amp;q=40&quot;);"></span> <span class="HeroImage HeroImagePlaceholder js-heroImageLowResPlaceholder is-loaded" style="background-image: url(&quot;https://storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=100&amp;w=240&amp;fit=crop&amp;q=100&amp;blur=100&amp;auto=format,compress&amp;q=40&quot;);"></span> <span class="HeroOverlay"></span> <div class="HeroContentWrapper">  <div data-module="" class="Module HeroContentModule StudyPortals_Shared_Modules_OrganisationModule StudyPortals_Shared_Modules_Organisation_Header_HeaderCover_HeaderCover"> <section class="HeroBackground"></section>
                    <section class="HeroContent"> <div class="HeroImageSources js-heroImageSources">  <picture class="js-coverImage"> <source media="all and (max-width: 480px)" srcset="//storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=200&amp;fit=crop&amp;w=480&amp;auto=format,compress&amp;q=40" data-srcset="//storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=200&amp;fit=crop&amp;w=480&amp;auto=format,compress&amp;q=40"> <source media="all and (min-width: 481px) and (max-width: 768px)" srcset="//storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=200&amp;fit=crop&amp;w=768&amp;auto=format,compress&amp;q=40" data-srcset="//storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=200&amp;fit=crop&amp;w=768&amp;auto=format,compress&amp;q=40"> <source media="all and (min-width: 769px) and (max-width: 1024px)" srcset="//storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=480&amp;fit=crop&amp;w=1024&amp;auto=format,compress&amp;q=40" data-srcset="//storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=480&amp;fit=crop&amp;w=1024&amp;auto=format,compress&amp;q=40"> <source media="all and (min-width: 1025px)" srcset="//storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=480&amp;fit=crop&amp;w=1920&amp;auto=format,compress&amp;q=40" data-srcset="//storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=480&amp;fit=crop&amp;w=1920&amp;auto=format,compress&amp;q=40"> <img src="//storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=480&amp;w=1920&amp;fit=crop&amp;auto=format,compress&amp;q=40" data-src="//storage-prtl-co.imgix.net/endor/organisations/11733/covers/1604359809_hkust_0_0-1.jpg?h=480&amp;w=1920&amp;fit=crop&amp;auto=format,compress&amp;q=40" alt="Hong Kong University of Science and Technology"> </picture>  </div>
                        <div class="HeroTextContent"><section id="OrganisationCoverImage" data-premium="1" data-organisation_id="11733"> <article> <header> <h1><span class="OrganisationTitle"> {{$uniData->organization}} </span></h1> </header> </article> </section>
                            <div class="js-variation" data-variation="3"></div> </div> </section>  </div>
                <div id="BreadcrumbRow"> <div class="col1 no-vertical-padding"> <div class="no-vertical-margin">  </div> </div> <div class="col1 no-vertical-padding wrapped"> <div class="BreadcrumbContainer colblock no-vertical-margin">  <div data-module="" class="Module StudyPortals_Shared_Modules_LinkTrailRR_LinkTrailRR"> <nav id="LinkTrail"> <ul class="LinkTrail"> <li> <a href="https://www.mastersportal.com/" title="Home">Home</a> </li>  <li>  <a href="https://www.mastersportal.com/countries/" title="Countries">Countries</a>  </li>  <li>  <a href="{{$uniData->website}}" title="{{$uniData->country}}">{{$uniData->country}}</a>  </li>  <li> {{$uniData->organization}} </li>  </ul> </nav> </div>  </div> </div> </div> </div> </div> </section>

    <div id="Wrapper"> <div id="OrganisationHeaderContainer"> <section class="col1 wrapped no-vertical-padding"> <div class="colblock no-vertical-margin">  <div data-module="" class="Module StudyPortals_Shared_Modules_OrganisationModule StudyPortals_Shared_Modules_Organisation_Header_KeyFacts_KeyFacts"> <section id="OrganisationHeader" data-premium="1" data-organisation_id="11733"> <article class="KeyFactsWrapper">
                                <figure id="StudyLogo">  <a class="Logo HomePage TrackingExternalLink" href="{{$uniData->website}}" title="Visit University Website" data-ga-tracking="{&quot;category&quot;:&quot;Organisation&quot;,&quot;action&quot;:&quot;Premium Click&quot;,&quot;label&quot;:&quot;11733&quot;,&quot;event&quot;:&quot;click&quot;}" target="mp_external_1815568" data-action="clic" data-type="link" data-id="1815568" data-description="" data-label="revenue" data-extra="{&quot;pt&quot;:&quot;p&quot;}" data-ga-parsed="true">  <img src="{{URL::to($uniData->university_logo)}}" alt="{{$uniData->organization}}" width="222" height="96" loading="lazy">  </a>  </figure>  <div class="OrganisationInfo HasLogo "> <div class="OrganisationDetails">  <span class="ReviewWrapper"> <section id="ReviewsGlimpse" class="ReviewsWidget ReviewsAllPopup"><div class="ReviewsRatingWrapper"><div class="ReviewsRating"><span class="ReviewsRatingLabel">
				Rating for
			</span> <div class="ReviewsRatingStarsContainer"><span data-v-63f3d04c="" data-rating="4.1087" class="ReviewsRatingStars"><i data-v-63f3d04c="" class="ReviewRatingStar lnr-star-full"><i data-v-63f3d04c="" class="ReviewRatingStarActive lnr-star-full" style="width: 100%;"></i></i><i data-v-63f3d04c="" class="ReviewRatingStar lnr-star-full"><i data-v-63f3d04c="" class="ReviewRatingStarActive lnr-star-full" style="width: 100%;"></i></i><i data-v-63f3d04c="" class="ReviewRatingStar lnr-star-full"><i data-v-63f3d04c="" class="ReviewRatingStarActive lnr-star-full" style="width: 100%;"></i></i><i data-v-63f3d04c="" class="ReviewRatingStar lnr-star-full"><i data-v-63f3d04c="" class="ReviewRatingStarActive lnr-star-full" style="width: 100%;"></i></i><i data-v-63f3d04c="" class="ReviewRatingStar lnr-star-full"><i data-v-63f3d04c="" class="ReviewRatingStarActive lnr-star-full" style="width: 11%;"></i></i></span> <!----></div> <span class="ReviewsRatingValue">
					4.1
				</span></div> <div data-v-a1b6924e="" class="RatingsQuantity"><span data-v-a1b6924e="" class="RatingsQuantityValueWrapper"><span data-v-a1b6924e="" class="RatingsQuantityValue">
			23
		</span></span> <span data-v-a1b6924e="" class="RatingsQuantityLabel"> ratings</span></div> <div data-v-57e5d8fe="" class="ReviewsQuantity"><span data-v-57e5d8fe="" class="ReviewsQuantityValueWrapper"><span data-v-57e5d8fe="" data-quantity="20" class="ReviewsQuantityValue">
			Read 20 reviews
		</span></span></div></div></section> </span>  <span class="OrganisationLocation  UnderReview " title="{{$uniData->country}}"> <i class="lnr-map-marker"></i> <span> <a href="{{URL::to('/search-country/'.$uniData->country)}}" title="Hong Kong">{{$uniData->provience}}</a>,  <a href="{{URL::to('/search-country/'.$uniData->country)}}" title="">{{$uniData->country}}</a> </span> </span>  </div> </div> <section class="MainWrapper"> <div id="ShortDescription"> Today, {{$uniData->organization}} has risen through the ranks and become a global powerhouse in tertiary education as a result of our continuous pursuit of excellence in everything we do, leaving its mark in life science, engineering, business education, humanities and social science, and much more.&nbsp; </div> <ul id="QuickFacts">  <li class="js-scrollTo" data-target="OrganisationRanking"> <a class="QuickFactLink" href="#OrganisationRanking" title="QS World University Rankings-TopUniversities: #27"> <i class="lnr-podium QuickFactIcon"></i> <span class="QuickFactText Figure ">#{{$rank->topuni}}</span> <span class="QuickFactText FigureType">Ranking</span> </a> </li>
                                        <li class="js-scrollTo" data-target="StudyListing">
                                            <a class="QuickFactLink" href="#StudyListing" title="Number of studies">
                                                <i class="lnr-book QuickFactIcon"></i> <span class="QuickFactText Figure">{{$count}}</span> <span class="QuickFactText FigureType"> Masters </span> </a> </li>  <li class="js-scrollTo" data-target="StudentLife"> <a class="QuickFactLink" href="#StudentLife" title="16054&nbsp;Students"> <i class="lnr-graduation-hat QuickFactIcon"></i>  <span class="QuickFactText Figure">16054</span> <span class="QuickFactText FigureType">Students</span>  </a> </li>  </ul> </section> </article> </section> <div style="display:none" class="TrackingLocation TrackingEvent" data-action="view" data-type="org" data-id="11733" data-description="Hong Kong University of Science and Technology" data-label="premium"> </div>  </div>  </div> </section> </div> <section id="MainInfoContainer" class="col2-left wrapped no-vertical-padding"> <div id="OrganisationMain" class="colblock">  <div data-module="" class="Module StudyPortals_Shared_Modules_Organisation_TopReasons_TopReasons">
                    <section id="TopReasonsSection"> <h2>Top reasons to study here</h2>
                        <div class="RightColumn OffSet">
                            <ul>
                                @foreach($reason as $dat)
                                <li>
                                    <i class="lnr-check ReasonCheck"></i>
                                    {{$dat}}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                </div>
                <div data-module="" class="Module StudyPortals_Shared_Modules_OrganisationModule StudyPortals_Shared_Modules_OrganisationStudiesCards_OrganisationStudiesCards">
                    <div id="StudyListing" class="StudyListing" data-hash="StudyListing">
                        <h2> Programmes </h2>
                        <div id="accordion">
                            @foreach($data as $product)

                                <div class=" tr-search">
                                    <div class=" AccordionFold" id="heading-{{$product->discipline}}">
                                            <a class="" onclick="event.preventDefault()"
                                               data-toggle="collapse" data-target="#collapse-{{$product->discipline}}"
                                               @if($loop->first) aria-expanded="true"
                                               @endif  aria-controls="collapse-{{$product->discipline}}">
                                                <strong class="FoldTitle">
                                                    <i class="lnr-rulers StudyIcon"><span style="font-weight: lighter; font-size: 1rem;">{{$product->discipline}}</span></i>
                                                    <i class="FoldIcon lnr-chevron-down"></i>
                                                </strong>

                                            </a>
                                        <span class="ml-auto"> </span>
                                    </div>

                                    <div id="collapse-{{$product->discipline}}" class="collapse"
                                         aria-labelledby="heading-{{$product->discipline}}"
                                         data-parent="#accordion">
                                        <div class="" style="background-color: #EDF3F6;">
                                            <ul class="">
                                                @foreach($program as $data)
                                                    @if($product->discipline==$data->discipline)
                                                        <li class="card-body online StudyCard" style="list-style-type:none; background-color: white; height: 140px; display: inline-block; vertical-align: top; position: relative; margin: .5rem 0; width: calc(33.33333% - 3px - .4rem);">
                                                            <div class="StudyInfo">

                                                                    <div class="Degree master distance_learning">M.Sc.</div>
                                                                    <div><a href="{{URL::to('/program-details/'.$data->id)}}" title="Accountancy (iMSA), M.Sc."> {{$data->course}} </a></div>

                                                            </div>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>

                                        </div>
                                    </div>
                                </div>


                            @endforeach

                        </div>


                    </div>
                </div>
                <div data-module="" class="Module StudyPortals_Shared_Modules_OrganisationModule StudyPortals_Shared_Modules_OrganisationStudiesCards_OrganisationStudiesCards StudyPortals_Shared_Modules_OrganisationStudiesCards_OrganisationPreparationStudiesCards EmptyModule">  </div>  <div data-module="" class="Module StudyPortals_Shared_Modules_Organisation_OrganisationInfo_InfoBase StudyPortals_Shared_Modules_Organisation_OrganisationInfo_AboutUni"> <section class="UniInfoSection" id="About"> <h2>About</h2>
                        <div class="RowWrapper">
                            <div class="LeftColumn">
                                <h3>History</h3>
                            </div>
                            <div class="RightColumn NotVisible">
                                <div class="FieldContent">
                                    <p></p>
                                    <p>{{$uniData->history}}</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="RowWrapper">
                            <div class="LeftColumn">
                                <h3>Education</h3>
                            </div>
                            <div class="RightColumn">
                                <div class="FieldContent">
                                    <p></p>
                                    <p>{{$uniData->education}}</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="RowWrapper">
                            <div class="LeftColumn">
                                <h3>Research</h3>
                            </div>
                            <div class="RightColumn">
                                <div class="FieldContent">
                                    <p></p>
                                    <p>{{$uniData->research}}</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="RowWrapper">
                            <div class="LeftColumn">
                                <h3>Career</h3> </div>
                            <div class="RightColumn NotVisible">
                                <div class="FieldContent">
                                    <p></p>
                                    <p>{{$uniData->career}}</p>
                                    <p></p>
                                </div>
                            </div>
                            </div>
                    </section>
                </div>
                <div data-module="MediaGallery:MediaGallery" class="Module StudyPortals_Shared_Modules_MediaGallery_MediaGallery EmptyModule">  </div>
                <div data-module="organisation:gssabadges" class="Module StudyPortals_Shared_Modules_GSSA_GSSABadges_GSSABadges">
                    <section id="GSSABadgesSection">
                        <h2 class="DesktopOnlyBlock">Global Student Satisfaction Awards 2019</h2> <h2 class="MobileOnlyBlock">GSSA 2019</h2> <div class="GSSABadgesWrapper"> <div class="GSSABadgesContent"> <p> The Global Student Satisfaction Awards empower students across the globe to determine the best universities of 2019. By rating institutions on a scale from 1 to 5, on multiple studies-related questions, we found the top educators in the world. </p> <section id="PortalBadges"></section> <a class="HelperButton" target="_blank" href="//www.mastersportal.com/articles/2721/what-are-the-global-student-satisfaction-awards-and-why-they-matter.html?utm_source=core&amp;utm_medium=section&amp;utm_campaign=gssa">Learn more about the Global Student Satisfaction Awards</a> </div> </div> </section> </div>  <div data-module="MediaThumbnails:media_thumbnails" class="Module StudyPortals_Shared_Modules_MediaThumbnails_MediaThumbnails"> <aside id="MediaThumbnails"> <div class="Main">  <picture class="ImagePlaceholder"> <source srcset="//storage-prtl-co.imgix.net/mp/b77c4258.jpg?max-w=550&amp;max-h=400&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 1281px)"> <source srcset="//storage-prtl-co.imgix.net/mp/b77c4258.jpg?max-w=490&amp;max-h=300&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 1025px) and (max-width: 1280px)"> <source srcset="//storage-prtl-co.imgix.net/mp/b77c4258.jpg?max-w=430&amp;max-h=300&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 768px) and (max-width: 1024px)"> <source srcset="//storage-prtl-co.imgix.net/mp/b77c4258.jpg?max-w=490&amp;max-h=250&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 480px) and (max-width: 767px)"> <source srcset="//storage-prtl-co.imgix.net/mp/b77c4258.jpg?max-w=320&amp;max-h=200&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40"> <img src="//storage-prtl-co.imgix.net/mp/b77c4258.jpg?max-w=550&amp;max-h=400&amp;fit=crop&amp;auto=format&amp;q=40" alt="55f6c319bb2fc.jpg" title="View " class="LightBox Thumbnail " data-id="21304" loading="lazy">  </picture>  </div> <div class="Side">  <div class="ImageWrapper"> <picture class="ImagePlaceholder"> <source srcset="//storage-prtl-co.imgix.net/mp/aa6cbaef.jpg?max-w=270&amp;max-h=200&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 1281px)"> <source srcset="//storage-prtl-co.imgix.net/mp/aa6cbaef.jpg?max-w=250&amp;max-h=150&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 1025px) and (max-width: 1280px)"> <source srcset="//storage-prtl-co.imgix.net/mp/aa6cbaef.jpg?max-w=210&amp;max-h=150&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 768px) and (max-width: 1024px)"> <source srcset="//storage-prtl-co.imgix.net/mp/aa6cbaef.jpg?max-w=250&amp;max-h=125&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 480px) and (max-width: 767px)"> <source srcset="//storage-prtl-co.imgix.net/mp/aa6cbaef.jpg?max-w=130&amp;max-h=100&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40">  <img src="//storage-prtl-co.imgix.net/mp/aa6cbaef.jpg?max-w=270&amp;max-h=200&amp;fit=crop&amp;auto=format&amp;q=40" alt="55f6c30bb5ffe.jpg" title="View " class="LightBox Thumbnail " data-id="21303" loading="lazy">  </picture> </div>  <div class="ImageWrapper"> <picture class="ImagePlaceholder"> <source srcset="//storage-prtl-co.imgix.net/mp/104ccb70.jpg?max-w=270&amp;max-h=200&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 1281px)"> <source srcset="//storage-prtl-co.imgix.net/mp/104ccb70.jpg?max-w=250&amp;max-h=150&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 1025px) and (max-width: 1280px)"> <source srcset="//storage-prtl-co.imgix.net/mp/104ccb70.jpg?max-w=210&amp;max-h=150&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 768px) and (max-width: 1024px)"> <source srcset="//storage-prtl-co.imgix.net/mp/104ccb70.jpg?max-w=250&amp;max-h=125&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40" media="(min-width: 480px) and (max-width: 767px)"> <source srcset="//storage-prtl-co.imgix.net/mp/104ccb70.jpg?max-w=130&amp;max-h=100&amp;fit=crop&amp;crop=entropy&amp;auto=format&amp;q=40">  <img src="//storage-prtl-co.imgix.net/mp/104ccb70.jpg?max-w=270&amp;max-h=200&amp;fit=crop&amp;auto=format&amp;q=40" alt="55f6c3a08c2ae.jpg" title="View " class="Thumbnail " data-id="21307" loading="lazy"> </picture> <div class="Overlay LightBox" data-id="21307"> <p class="OverlayText"> View all </p> </div> </div>  </div> </aside>  </div>  <div data-module="" class="Module StudyPortals_Shared_Modules_Organisation_Ranking_Ranking"> <article id="OrganisationRanking"> <h2>University Ranking</h2>  <div class="Ranking"> <div class="RankingName"> <a href="https://www.mastersportal.com/rankings/3/qs-world-university-rankings-topuniversities.html" title="QS World University Rankings">QS World University Rankings</a> <span class="RankingPublisher">by TopUniversities</span> </div> <div class="Years">  <div class="RankingPosition"> <div class="Year">2021</div> <div class="Position"> {{$rank->topuni}} <i class="lnr-arrow-up Up"></i> <span class="AbsValue Up">5</span>  </div> </div>  <div class="RankingPosition"> <div class="Year">2020</div> <div class="Position"> {{$rankprev->topuni}} <i class="lnr-arrow-up Up"></i> <span class="AbsValue Up">5</span>  </div> </div>  <div class="RankingPosition"> <div class="Year">2019</div> <div class="Position"> 37 </div> </div>  </div> <div class="Explanation">  QS World University Rankings is one of the top international rankings measuring the popularity and performance of universities all over the world. <button class="Textlink ReadMore">Read more</button> <span class="TextFade Hidden"> They measure university reputation based on the impressions of higher education experts, companies who hire graduates, and teaching quality. QS also considers the ratio of international teachers and students present at universities, as well as the times research papers were mentioned by researchers. After calculating and comparing these criteria, QS ranks the universities accordingly. </span> <button class="Textlink ReadLess Hidden">Read less</button>  </div> </div>  <div class="Ranking"> <div class="RankingName"> <a href="https://www.mastersportal.com/rankings/1/world-university-rankings-times-higher-education.html" title="World University Rankings">World University Rankings</a> <span class="RankingPublisher">by Times Higher Education</span> </div> <div class="Years">  <div class="RankingPosition"> <div class="Year">2021</div> <div class="Position"> {{$rank->timesrnk}} <i class="lnr-arrow-down Down"></i> <span class="AbsValue Down">9</span>  </div> </div>  <div class="RankingPosition"> <div class="Year">2020</div> <div class="Position"> {{$rankprev->timesrnk}} <i class="lnr-arrow-down Down"></i> <span class="AbsValue Down">1</span>  </div> </div>  <div class="RankingPosition"> <div class="Year">2019</div> <div class="Position"> 46 </div> </div>  </div> <div class="Explanation">  World University Rankings is a vital resource that provides the definitive list of the world's best universities. <button class="Textlink ReadMore">Read more</button> <span class="TextFade Hidden"> They look at how often they're producing new ideas, what their reputation is around the world, and how much they're contributing to science and academic fields. After calculating and comparing these criteria, THE ranks the universities accordingly. </span> <button class="Textlink ReadLess Hidden">Read less</button>  </div> </div>  <div class="Ranking"> <div class="RankingName"> <a href="https://www.mastersportal.com/rankings/4/best-global-universities-rankings-us-news-world-report.html" title="Best Global Universities Rankings">Best Global Universities Rankings</a> <span class="RankingPublisher">by U.S. News &amp; World Report</span> </div> <div class="Years">  <div class="RankingPosition"> <div class="Year">2021</div> <div class="Position"> {{$rank->usrank}} <i class="lnr-arrow-up Up"></i> <span class="AbsValue Up">13</span>  </div> </div>  <div class="RankingPosition"> <div class="Year">2020</div> <div class="Position"> {{$rankprev->usrank}} <i class="lnr-arrow-up Up"></i> <span class="AbsValue Up">13</span>  </div> </div>  <div class="RankingPosition"> <div class="Year">2019</div> <div class="Position"> 135 </div> </div>  </div> <div class="Explanation">  Best Global Universities Rankings by U.S. News &amp; World Report presents all the top universities from the U.S. and 60 other countries around the world. <button class="Textlink ReadMore">Read more</button> <span class="TextFade Hidden"> They measure the rate of students going to their second year of studies, as well as the rate of students who graduate. It also asks university representatives on the performance of universities, and evaluates university resources, teacher salaries, graduation rates, student academic achievements and satisfaction. After calculating and comparing these criteria, U.S. News ranks the top international universities accordingly. </span> <button class="Textlink ReadLess Hidden">Read less</button>  </div> </div>  <div class="Ranking"> <div class="RankingName"> <a href="https://www.mastersportal.com/rankings/2/academic-ranking-of-world-universities-shanghai-jiao-tong-university.html" title="Academic Ranking of World Universities">Academic Ranking of World Universities</a> <span class="RankingPublisher">by Shanghai Jiao Tong University</span> </div> <div class="Years">  <div class="RankingPosition"> <div class="Year">2020</div> <div class="Position"> {{$rank->shanghairank}} <i class="lnr-arrow-down Down"></i> <span class="AbsValue Down">100</span>  </div> </div>  <div class="RankingPosition"> <div class="Year">2019</div> <div class="Position"> {{$rankprev->shanghairank}} </div> </div>  <div class="RankingPosition"> <div class="Year">2018</div> <div class="Position"> 201 </div> </div>  </div> <div class="Explanation">  ARWU World University rankings is the first world university ranking. It ranks the world's top 1000 colleges and universities based on objective indicator. <button class="Textlink ReadMore">Read more</button> <span class="TextFade Hidden"> They look at the number of award-winning (Fields Medals and Nobel Prize) scientists who are located there, how much of their research is cited and referenced around the world, and how much they've contributed to different academic fields. After calculating and comparing these criteria, ARWU ranks the universities accordingly. </span> <button class="Textlink ReadLess Hidden">Read less</button>  </div> </div>  </article> </div>  <div data-module="" class="Module StudyPortals_Shared_Modules_Organisation_OrganisationInfo_InfoBase StudyPortals_Shared_Modules_Organisation_OrganisationInfo_UniServices">
                    <section class="UniInfoSection" id="Services"> <h2>Services</h2>
                        <div class="RowWrapper">
                            <div class="LeftColumn">
                                <h3>Student services</h3>
                            </div>
                            <div class="RightColumn">
                                <div class="FieldContent">
                                    <p></p>
                                    <p>{{$uniData->StService}}</p>
                                    <p></p>
                                </div>
                            </div>
                            </div>
                        <div class="RowWrapper">
                            <div class="LeftColumn">
                                <h3>Housing services</h3>
                            </div>
                            <div class="RightColumn NotVisible">
                                <div class="FieldContent">
                                    <p></p>
                                    <p>{{$uniData->HousingService}}</p>
                                    <p></p>
                                </div>
                            </div> </div>  <div class="RowWrapper">
                            <div class="LeftColumn">
                                <h3>Library services</h3>
                            </div>
                            <div class="RightColumn">
                                <div class="FieldContent">
                                    <p></p>
                                    <p>{{$uniData->LibraryService}}</p>
                                    <p></p>
                                </div>
                            </div>
                            </div>
                    </section>
                </div>
                <div data-module="" class="Module StudyPortals_Shared_Modules_Organisation_OrganisationInfo_InfoBase StudyPortals_Shared_Modules_Organisation_OrganisationInfo_UniStudentLife">
                    <section class="UniInfoSection" id="StudentLife">
                        <h2>Student Life</h2>
                        <div class="RowWrapper">
                            <div class="LeftColumn">
                                <h3>Campus life</h3>
                            </div>
                            <div class="RightColumn NotVisible">
                                <div class="FieldContent">
                                    <p></p>
                                    <p>{{$uniData->CampusLife}}</p>
                                    <p></p>
                                </div>
                            </div>
                            </div>
                        <div class="RowWrapper">
                            <div class="LeftColumn">
                                <h3>Sports facilities</h3>
                            </div>
                            <div class="RightColumn NotVisible">
                                <div class="FieldContent">
                                    <p></p>
                                    <p>{{$uniData->SportsFacilities}}</p>
                                    <p></p>
                                </div>
                            </div>
                            </div>  <div class="RowWrapper">
                            <div class="LeftColumn">
                                <h3>Student clubs</h3>
                            </div>
                            <div class="RightColumn NotVisible">
                                <div class="FieldContent">
                                    <p></p>
                                    <p>{{$uniData->StudentClub}}</p>
                                    <p></p>
                                </div>
                            </div>
                            </div>  </section> </div>  <div data-module="" class="Module StudyPortals_Shared_Modules_Organisation_OrganisationInfo_InfoBase StudyPortals_Shared_Modules_Organisation_OrganisationInfo_UniAccreditation EmptyModule">  </div>
                <div data-module="SPScholarships" class="Module StudyPortals_Shared_Modules_SPScholarships_SPScholarships StudyPortals_Shared_Modules_SPScholarships_SPScholarshipsOrganisation">
                    <aside id="SPScholarships">
                        <div class="ContentCard">
                            <div class="SPScholarshipsContent">
                                <h2>Win a Scholarship from {{$uniData->organization}}!</h2>
                                <p> Apply for the Studyportals Scholarship and win up to €<span class="LocaleNumber">10,000</span> to cover your tuition fees. Follow your dream of studying abroad with the help of our scholarship. </p>
                                <a class="NavigatorButton js-scholarshipsButton" href="{{URL::to('/university-scholarship/'.$uniData->organization)}}" target="_blank" title="Apply for scholarship"> View University scholarship </a>
                            </div>
                        </div>
                    </aside>
                </div>
                <div data-module="" class="Module StudyPortals_Shared_Modules_Organisation_TOEFL_TOEFL EmptyModule">  </div>  <div data-module="" class="Module StudyPortals_Shared_Modules_Organisation_IELTSNew_IELTSNew"> <aside id="OrganisationIELTS"> <h2> IELTS <span class="Featured"> Featured <i class="InfoIcon InfoIconFeatured lnr-info" data-tooltip-text="This organisation partners with us to deliver valuable education-related content that is relevant for students like you."></i> </span> </h2> <div class="ContentContainer"> <p> Do you wish to become an international student next year? Demonstrate your English skills with IELTS. </p> </div> <div class="ButtonContainer"> <a href="https://link.studyportals.com/ieltstextad" title="Start practicing IELTS today!" target="_blank" rel="nofollow" data-ga-tracking="{&quot;category&quot;:&quot;Banners&quot;,&quot;action&quot;:&quot;Text banner click&quot;,&quot;label&quot;:&quot;IELTS_organisation&quot;}" class="DriverButton" data-ga-parsed="true"> Start practicing IELTS today! </a> </div> <!--ClickMeter.com page views tracking: IELTS Textad Pixel --> <script type="text/javascript"> var ClickMeter_pixel_url = '//pixel.watch/1op6'; </script> <script type="text/javascript" src="https://d37pm50nqrir4c.cloudfront.net/pixelNew.js" defer=""></script> </aside>  </div>
                 <div data-module="" class="Module StudyPortals_Shared_Modules_OrganisationModule StudyPortals_Shared_Modules_Organisation_OrganisationProgrammes_OrganisationProgrammes"> <section id="OrganisationProgrammes"> <h2>Other programmes from this university</h2> <ul class="OrganisationProgrammesList">  <li class="OrganisationProgram" data-clickable="clickable"> <a href="https://www.bachelorsportal.com/universities/11733/hong-kong-university-of-science-and-technology.html#StudyListing" title=" Bachelorsportal has 42 available programmes" target="_blank" data-portal-type="bachelor"> <span class="Total bachelor">42</span> <span class="OrganisationProgramTitle"> (Pre-)Bachelors </span> </a> </li>  </ul> </section>  </div>
                <div data-module="" class="Module StudyPortals_Shared_Modules_Organisation_SearchConversion_SearchConversion"> <section class="SearchConversion"> <a href="https://www.mastersportal.com/search/#q=lv-master|oi-11733" title=" Masters " class="DriverButton"> <span class="CTAWithIcon FloatedSpan"> <i class="lnr-magnifier CTAIcon"></i> <span class="Prefix">Find </span> More  Masters  </span> </a> </section>  </div>  </div> </section>
         </div>

@endsection

