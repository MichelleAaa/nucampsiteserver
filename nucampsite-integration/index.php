<!DOCTYPE html>
<html  dir="ltr" lang="en-us" xml:lang="en-us">
<head>
    <title>nucamp: Log in to the site</title>
    <link rel="icon" href="https://learn.nucamp.co/pluginfile.php/1/theme_adaptable/favicon/1656873371/nucamp-brandmark-only-color-bitmapped-2000w.ico" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, nucamp: Log in to the site" />
<link rel="stylesheet" type="text/css" href="https://learn.nucamp.co/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://learn.nucamp.co/theme/styles.php/adaptable/1656873371_1620021743/all" />
<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/learn.nucamp.co","sesskey":"7W1S82m8Tn","sessiontimeout":"86400","sessiontimeoutwarning":1200,"themerev":"1656873371","slasharguments":1,"theme":"adaptable","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1656873371","admin":"admin","svgicons":true,"usertimezone":"America\/Los_Angeles","contextid":1,"langrev":1656873371,"templaterev":"1656873371"};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/learn.nucamp.co\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/learn.nucamp.co\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/learn.nucamp.co\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/learn.nucamp.co\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/learn.nucamp.co\/theme\/yui_combo.php?m\/1656873371\/","combine":true,"comboBase":"https:\/\/learn.nucamp.co\/theme\/yui_combo.php?","ext":false,"root":"m\/1656873371\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_password-form":{"requires":["base","node","event","event-valuechange","moodle-core_availability-form"]},"moodle-availability_password-popup":{"requires":["base","node","event","moodle-core-notification-dialogue","io-base"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-block_messageteacher-form":{"requires":["base","io","io-form","node","json","moodle-core-notification"]},"moodle-block_xp-filters":{"requires":["base","node","moodle-core-dragdrop","moodle-core-notification-confirm","moodle-block_xp-rulepicker"]},"moodle-block_xp-notification":{"requires":["base","node","handlebars","button-plugin","moodle-core-notification-dialogue"]},"moodle-block_xp-rulepicker":{"requires":["base","node","handlebars","moodle-core-notification-dialogue"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-beautify":{},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/learn.nucamp.co\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/learn.nucamp.co\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1656873371\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/learn.nucamp.co\/lib\/javascript.php\/1656873371\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/learn.nucamp.co\/lib\/javascript.php\/1656873371\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdn.jsdelivr.net\/npm\/mathjax@2.7.9\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="/nucamp/prism.js"></script>
<link rel="stylesheet" href="/nucamp/prism.css">
<link rel="stylesheet" href="/nucamp/nucamp.css"><meta name="robots" content="noindex" />    <!-- CSS print media -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">
    <meta name="twitter:site" value="nucamp" />
    <meta name="twitter:title" value="nucamp: Log in to the site" />

    <!-- Open Graph data -->
    <meta property="og:title" content="nucamp: Log in to the site" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta name="og:site_name" value="nucamp" />

    <!-- Chrome, Firefox OS and Opera on Android topbar color -->
    <meta name="theme-color" content="#A83EA2" />

    <!-- Windows Phone topbar color -->
    <meta name="msapplication-navbutton-color" content="#A83EA2" />

    <!-- iOS Safari topbar color -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#A83EA2" />

    <!-- Load Google Fonts --><link href="https://fonts.googleapis.com/css?family=Inter:400,400i" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Inter:400,400i" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Inter:400,400i" rel="stylesheet" type="text/css"></head>
<body  id="page-login-index" class="format-site  path-login chrome dir-ltr lang-en_us yui-skin-sam yui3-skin-sam learn-nucamp-co pagelayout-login course-1 context-1 notloggedin theme_adaptable two-column  header-style2 has-page-header  nomobilenavigation">

<div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script src="https://learn.nucamp.co/lib/javascript.php/1656873371/lib/babel-polyfill/polyfill.min.js"></script>
<script src="https://learn.nucamp.co/lib/javascript.php/1656873371/lib/polyfills/polyfill.js"></script>
<script src="https://learn.nucamp.co/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script src="https://learn.nucamp.co/theme/jquery.php/core/jquery-3.5.1.min.js"></script>
<script src="https://learn.nucamp.co/theme/jquery.php/theme_adaptable/pace-min.js"></script>
<script src="https://learn.nucamp.co/theme/jquery.php/theme_adaptable/jquery-flexslider-min.js"></script>
<script src="https://learn.nucamp.co/theme/jquery.php/theme_adaptable/tickerme.js"></script>
<script src="https://learn.nucamp.co/theme/jquery.php/theme_adaptable/jquery-easing-min.js"></script>
<script src="https://learn.nucamp.co/theme/jquery.php/theme_adaptable/adaptable_v2_1_1_2.js"></script>
<script src="https://learn.nucamp.co/lib/javascript.php/1656873371/lib/javascript-static.js"></script>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<div id="page-wrapper">
    <div id="page" class="fullin showblockicons standard">
    <header id="adaptable-page-header-wrapper" class="stickything">
    <div id="header2" class="container">
        <div class="row">
            <div class="d-none d-lg-block col-lg-9">
                <div class="d-flex justify-content-start bd-highlight">
                    <div class="p-2 bd-highlight d-none d-lg-block"><img src=//learn.nucamp.co/pluginfile.php/1/theme_adaptable/logo/1656873371/nucamp-logo-full-lockup-white-bitmapped-2000w.png id="logo" alt="Logo"></div>
                    
                    <div id="course-header">
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-3 p-0 my-auto">
                <nav class="navbar navbar-expand btco-hover-menu">

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item navbarsearchsocial mx-md-1 my-auto">
                                <div id="searchinput-navbar-62cafcfe135c762cafcfe11c812" class="simplesearchform">
    <div class="collapse" id="searchform-navbar">
        <form autocomplete="off" action="https://learn.nucamp.co/course/search.php" method="get" accept-charset="utf-8" class="mform form-inline searchform-navbar">
                <input type="hidden" name="context" value="1">
            <div class="input-group">
                <label for="searchinput-62cafcfe135c762cafcfe11c812">
                    <span class="sr-only">Course search</span>
                </label>
                    <input type="text"
                       id="searchinput-62cafcfe135c762cafcfe11c812"
                       class="form-control withclear"
                       placeholder="Course search"
                       aria-label="Course search"
                       name="q"
                       data-region="input"
                       autocomplete="off"
                    >
                    <a class="btn btn-close"
                        data-action="closesearch"
                        data-toggle="collapse"
                        href="#searchform-navbar"
                        role="button"
                    >
                        <i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">Close</span>
                    </a>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-submit" data-action="submit">
                        <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">Course search</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <a
        class="btn btn-open"
        data-toggle="collapse"
        data-action="opensearch"
        href="#searchform-navbar"
        role="button"
        aria-expanded="false"
        aria-controls="searchform-navbar"
    >
        <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
        <span class="sr-only">Toggle search input</span>
    </a>
</div>
                            </li>

                            <li class="my-auto m-1"></li>

                            <li class="pull-left mr-2 my-auto">
                                <ul class="navbar-nav mr-auto"></ul>
                            </li>


                                <div class="my-auto"></div>

                            
                            <li class="nav-item">
                                
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


</header><div class="container outercont">    <div id="page-content" class="row">
        <section id="region-main" class="col-12">
            <div role="main"><span id="maincontent"></span><div class="my-1 my-sm-5"></div>
<div class="row justify-content-center">
    <div class="col-xl-6 col-sm-8 ">
        <div class="card">
            <div class="card-block">
                    <h1 class="h2 card-header text-center" >
                        <span class="sr-only">nucamp: Log in</span>
                        <img src="https://learn.nucamp.co/pluginfile.php/1/core_admin/logo/0x200/1656873371/nucamp-logotype-only-color-bitmapped-1000w.png" class="img-fluid" alt=""/>
                    </h1>
                <div class="card-body">
                        <div class="sr-only">
                            <a href="https://learn.nucamp.co/login/signup.php">Skip to create new account</a>
                        </div>

                        <div class="loginerrors mt-3">
                            <a href="#" id="loginerrormessage" class="accesshide">Your session has timed out. Please log in again.</a>
                            <div class="alert alert-danger" role="alert" data-aria-autofocus="true">Your session has timed out. Please log in again.</div>
                        </div>

                    <div class="row justify-content-md-center">
                        <div>
                                <h2 class="mt-2">
                                    Students log in using:
                                </h2>
                                <div class="potentialidplist mt-3">
                                        <div class="potentialidp">
                                            <a href="https://learn.nucamp.co/auth/oauth2/login.php?id=1&amp;wantsurl=https%3A%2F%2Flearn.nucamp.co%2Fpluginfile.php%2F45776%2Fmod_book%2Fchapter%2F4541%2FnucampsiteClient-local.zip&amp;sesskey=7W1S82m8Tn" title="Google" class="btn btn-secondary btn-block">
                                                    <img src="https://www.google.com/favicon.ico" alt="" width="24" height="24"/>
                                                Google
                                            </a>
                                        </div>
                                        <div class="potentialidp">
                                            <a href="https://learn.nucamp.co/auth/oauth2/login.php?id=2&amp;wantsurl=https%3A%2F%2Flearn.nucamp.co%2Fpluginfile.php%2F45776%2Fmod_book%2Fchapter%2F4541%2FnucampsiteClient-local.zip&amp;sesskey=7W1S82m8Tn" title="Facebook" class="btn btn-secondary btn-block">
                                                    <img src="https://1000logos.net/wp-content/uploads/2016/11/FacebookPNG5.png" alt="" width="24" height="24"/>
                                                Facebook
                                            </a>
                                        </div>
                                        <div class="potentialidp">
                                            <a href="https://learn.nucamp.co/auth/oauth2/login.php?id=3&amp;wantsurl=https%3A%2F%2Flearn.nucamp.co%2Fpluginfile.php%2F45776%2Fmod_book%2Fchapter%2F4541%2FnucampsiteClient-local.zip&amp;sesskey=7W1S82m8Tn" title="Microsoft" class="btn btn-secondary btn-block">
                                                    <img src="https://www.microsoft.com/favicon.ico" alt="" width="24" height="24"/>
                                                Microsoft
                                            </a>
                                        </div>
                                        <div class="potentialidp">
                                            <a href="https://learn.nucamp.co/auth/oauth2/login.php?id=6&amp;wantsurl=https%3A%2F%2Flearn.nucamp.co%2Fpluginfile.php%2F45776%2Fmod_book%2Fchapter%2F4541%2FnucampsiteClient-local.zip&amp;sesskey=7W1S82m8Tn" title="Yahoo" class="btn btn-secondary btn-block">
                                                    <img src="https://cdn0.iconfinder.com/data/icons/most-usable-logos/120/Yahoo_Massanger-512.png" alt="" width="24" height="24"/>
                                                Yahoo
                                            </a>
                                        </div>
                                        <div class="potentialidp">
                                            <a href="https://learn.nucamp.co/auth/oauth2/login.php?id=7&amp;wantsurl=https%3A%2F%2Flearn.nucamp.co%2Fpluginfile.php%2F45776%2Fmod_book%2Fchapter%2F4541%2FnucampsiteClient-local.zip&amp;sesskey=7W1S82m8Tn" title="GitHub" class="btn btn-secondary btn-block">
                                                    <img src="https://api.github.com/favicon.ico" alt="" width="24" height="24"/>
                                                GitHub
                                            </a>
                                        </div>
                                    <div class="potentialidp">
                                        <form class="mt-3" action="https://learn.nucamp.co/login/signup.php" method="get" id="signup">
                                            <button type="submit" class="btn btn-secondary btn-block">Create new account</button>
                                        </form>
                                    </div>
                                </div>

                            <div class="mt-3">
                                Cookies must be enabled in your browser
                                <div><a class="btn btn-link p-0" role="button"
    data-container="body" data-toggle="popover"
    data-placement="right" data-content="&lt;div class=&quot;no-overflow&quot;&gt;&lt;p&gt;Two cookies are used on this site:&lt;/p&gt;

&lt;p&gt;The essential one is the session cookie, usually called MoodleSession. You must allow this cookie in your browser to provide continuity and to remain logged in when browsing the site. When you log out or close the browser, this cookie is destroyed (in your browser and on the server).&lt;/p&gt;

&lt;p&gt;The other cookie is purely for convenience, usually called MOODLEID or similar. It just remembers your username in the browser. This means that when you return to this site, the username field on the login page is already filled in for you. It is safe to refuse this cookie - you will just have to retype your username each time you log in.&lt;/p&gt;
&lt;/div&gt; "
    data-html="true" tabindex="0" data-trigger="focus">
  <i class="icon fa fa-question-circle text-info fa-fw "  title="Help with Cookies must be enabled in your browser" aria-label="Help with Cookies must be enabled in your browser"></i>
</a></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-md-center">
                        <div class="text-center">
                            <h2 class="h4 mt-2">Log in using a custom account:</h2>
                            <span style="font-style: italic; font-size: 10px">Only if you did not use one of the 3rd party login providers listed above initially.</span>
                            <form class="mt-3" action="https://learn.nucamp.co/login/index.php" method="post" id="login">
                                <input id="anchor" type="hidden" name="anchor" value="">
                                <script>document.getElementById('anchor').value = location.hash;</script>
                                <input type="hidden" name="logintoken" value="MHWFtqjGfmey6GhRVTKGKDM3zfJ8OzSb">
                                <div class="form-group">
                                    <label for="username" class="sr-only">
                                            Username / email
                                    </label>
                                    <input type="text" name="username" id="username"
                                        class="form-control"
                                        value=""
                                        placeholder="Username / email"
                                        autocomplete="username">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" value=""
                                        class="form-control"
                                        placeholder="Password"
                                        autocomplete="current-password">
                                </div>
                                    <div class="rememberpass mt-3">
                                        <input type="checkbox" name="rememberusername" id="rememberusername" value="1"  />
                                        <label for="rememberusername">Remember username</label>
                                    </div>

                                <button type="submit" class="btn btn-primary btn-block mt-3">Log in</button>
                            </form>
                            <div class="text-center forgetpass" style="padding-top: 16px">
                                <p><a href="https://learn.nucamp.co/login/forgot_password.php">Forgotten your username or password?</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 
    <div class="row justify-content-center mt-3">
        <div class="col-xl-6 col-sm-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>Is this your first time here?</h2>
                    </div>
                    <div>
                    For full access to this site, you first need to create an account.
                        <form class="mt-3" action="https://learn.nucamp.co/login/signup.php" method="get" id="signup">
                            <button type="submit" class="btn btn-secondary">Create new account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 --><!-- Navbuttons start --><!-- Front page --><!-- Navbuttons end --></div>        </section>
    </div>
</div>


<footer id="page-footer" class="d-none d-lg-block">

<div id="course-footer"></div><div class="container blockplace1"></div>    <div class="container">
        <div class="row">
            <div class="col-12 pagination-centered socialicons">
    <a target="_blank" title="Facebook" href="https://www.facebook.com/nucamp.co/"><i class="fa fa-facebook-square"></i></a><a target="_blank" title="LinkedIn" href="https://www.linkedin.com/school/nucamp/"><i class="fa fa-linkedin-square"></i></a><a target="_blank" title="Instagram" href="https://www.instagram.com/nucampcodingbootcamp/"><i class="fa fa-instagram"></i></a>            </div>
        </div>
    </div>
    <div class="info container2 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 my-md-0 my-2">
                    <div class="tool_usertours-resettourcontainer"></div>
                    </div>

                    <div class="col-md-4 my-md-0 my-2">
                    <div class="tool_dataprivacy"><a href="https://learn.nucamp.co/admin/tool/dataprivacy/summary.php">Data retention summary</a></div><a href="https://download.moodle.org/mobile?version=2021051704&amp;lang=en_us&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile">Get the mobile app</a>                </div>
            </div>
        </div>
    </div>
    </footer>

<div id="back-to-top"><i class="fa fa-angle-up "></i></div>

</div></div>
<script type="text/javascript" src="/nucamp/nucamp.js"></script>
<script>
//<![CDATA[
var require = {
    baseUrl : 'https://learn.nucamp.co/lib/requirejs.php/1656873371/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://learn.nucamp.co/lib/javascript.php/1656873371/lib/jquery/jquery-3.5.1.min',
        jqueryui: 'https://learn.nucamp.co/lib/javascript.php/1656873371/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://learn.nucamp.co/lib/javascript.php/1656873371/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script src="https://learn.nucamp.co/lib/javascript.php/1656873371/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");
require(['core/first'], function() {
require(['core/prefetch'])
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp('en');
});;
M.util.js_pending('theme_adaptable/adaptable'); require(['theme_adaptable/adaptable'], function(amd) {amd.init(); M.util.js_complete('theme_adaptable/adaptable');});;
M.util.js_pending('theme_adaptable/bsoptions'); require(['theme_adaptable/bsoptions'], function(amd) {amd.init({"stickynavbar":true}); M.util.js_complete('theme_adaptable/bsoptions');});;
M.util.js_pending('theme_adaptable/drawer'); require(['theme_adaptable/drawer'], function(amd) {amd.init(); M.util.js_complete('theme_adaptable/drawer');});;

require(
[
    'jquery',
],
function(
    $
) {
    var uniqid = "62cafcfe135c762cafcfe11c812";
    var container = $('#searchinput-navbar-' + uniqid);
    var opensearch = container.find('[data-action="opensearch"]');
    var input = container.find('[data-region="input"]');
    var submit = container.find('[data-action="submit"]');

    submit.on('click', function(e) {
        if (input.val() === '') {
            e.preventDefault();
        }
    });
    container.on('hidden.bs.collapse', function() {
        opensearch.removeClass('d-none');
        input.val('');
    });
    container.on('show.bs.collapse', function() {
        opensearch.addClass('d-none');
    });
    container.on('shown.bs.collapse', function() {
        input.focus();
    });
});
;

        require(['jquery'], function($) {
            $('#loginerrormessage').focus();
        });
;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(1, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});
    M.util.js_complete("core/first");
});
//]]>
</script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","cancel":"Cancel","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error","file":"File","url":"URL","collapseall":"Collapse all","expandall":"Expand all"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} links to this file","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"},"debug":{"debuginfo":"Debug info","line":"Line","stacktrace":"Stack trace"},"langconfig":{"labelsep":":"}};
//]]>
</script>
<script>
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"en"});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random62cafcfe11c813'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random62cafcfe11c813'); });
})();
//]]>
</script>
<script type="text/javascript">
    M.util.js_pending('theme_boost/loader');
        require(['theme_boost/loader'], function() {
        M.util.js_complete('theme_boost/loader');
    });
</script>
</body>
</html>
