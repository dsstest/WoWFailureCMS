<?php
require_once("configs.php");
$page_cat = "services";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb">
<head>
<title>Search - <?php echo $website['title']; ?></title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="http://eu.battle.net/wow/static/local-common/images/favicons/wow.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie.css?v35" /><![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie6.css?v35" /><![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie7.css?v35" /><![endif]-->
<link title="World of Warcraft - News" href="feed/newshtml.html" type="application/atom+xml" rel="alternate"/>
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow.css" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/cms/search.css" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/search.css" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie.css?v18" /><![endif]--><!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie6.css?v18" /><![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie7.css?v18" /><![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/core.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.staticUrl = '/wow/static';
Core.sharedStaticUrl= '/wow/static/local-common';
Core.baseUrl = '/wow/en';
Core.projectUrl = '/wow';
Core.cdnUrl = 'http://eu.media.blizzard.com';
Core.supportUrl = 'http://eu.battle.net/support/';
Core.secureSupportUrl= 'https://eu.battle.net/support/';
Core.project = 'wow';
Core.locale = 'en-gb';
Core.language = 'en';
Core.buildRegion = 'eu';
Core.region = 'eu';
Core.shortDateFormat= 'dd/MM/yyyy';
Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
Core.loggedIn = false;
Flash.videoPlayer = 'http://eu.media.blizzard.com/global-video-player/themes/wow/video-player.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/wow/media/videos';
Flash.ratingImage = 'http://eu.media.blizzard.com/global-video-player/ratings/wow/rating-pegi.jpg';
Flash.expressInstall= 'http://eu.media.blizzard.com/global-video-player/expressInstall.swf';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_setDomainName', '.battle.net']);
_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);
//]]>
</script>
</head>
<body class="en-gb search-win">
	<div id="wrapper">
	<?php include("header.php"); ?>
	<div id="content">
	<div class="content-top">
	<div class="content-trail">
	<ol class="ui-breadcrumb">
	<li>
	<a href="index.php" rel="np">World of Warcraft</a>
	</li>
	<li>
	<a href="services.php" rel="np">Services</a>
	</li>
	<li class="last">
	<a href="search.php" rel="np">Search</a>
	</li>
	</ol>
	</div>
	<div class="content-bot">
	<div class="search">
	<div class="search-right">
	<div class="search-header">
	<form action="" method="post" class="search-form">
	<div>
	<input id="search-page-field" type="text" name="search" maxlength="200" tabindex="2" value="" />
	<button
	class="ui-button button1 "
	type="submit">
	<span>
	<span>Search</span>
	</span>
	</button>
	</div>
	</form>
	</div>
	<div class="helpers">
	<h3 class="subheader ">Summary of results for <span>name</span></h3>
	</div>
	<div class="summary">
	<div class="results results-grid wow-results">
	<h3 class="category "><a href="">Characters</a>(NUMBER)</h3>
	<div class="grid">
	<div class="wowcharacter">
	<a href="" class="icon-frame frame-56 thumbnail">
	<img src="images/postavatar.jpg" alt="" width="56" height="56" /></a>
	<a href="" class="color-c2">
	<strong>NAME</strong></a><br /><font color="#FEF084">LEVEL RACE CLASS<br />REALM</font>
	<span class="clear"><!-- --></span>
	</div>
	</div>
	<div class="grid">
	<div class="wowcharacter">
	<a href="" class="icon-frame frame-56 thumbnail">
	<img src="images/postavatar.jpg" alt="" width="56" height="56" /></a>
	<a href="" class="color-c7">
	<strong>NAME</strong></a><br /><font color="#FEF084">LEVEL RACE CLASS<br />REALM</font>
	<span class="clear"><!-- --></span>
	</div>
	</div>
	<div class="grid">
	<div class="wowcharacter">
	<a href="" class="icon-frame frame-56 thumbnail">
	<img src="images/postavatar.jpg" alt="" width="56" height="56" /></a>
	<a href="" class="color-c11">
	<strong>NAME</strong></a><br/><font color="#FEF084">LEVEL RACE CLASS<br/>REALM</font>
	<span class="clear"><!-- --></span>
	</div>
	</div>
	<span class="clear"><!-- --></span>
	</div>
	<div class="results results-grid wow-results">
	<div class="grid">
	<h4 class="subcategory "><a href="?q=primo&amp;f=wowguild">Guilds</a>(number)</h4>
	<div class="wowguild">
	<canvas id="tabard-3125133" class="thumbnail" width="32" height="32"></canvas>
	<a href="" class="sublink">
	<strong>NAME</strong>
	</a><font color="#FEF084">- FACTION</font><br />
	<span data-tooltip="REALM NAME"><font color="#FEF084">REALM NAME</font></span>
	<script type="text/javascript">
	//<![CDATA[
	$(function(){
	var tabard3125133 = new GuildTabard('tabard-3125133', {
	ring: 'alliance', bg: [ 0, '45' ], border: [ '2', '15' ], emblem: [ '38', '14' ]});});
	//]]>
    </script>
	<span class="clear"><!-- --></span>
	</div>
	</div>
	<span class="clear"><!-- --></span>
	</div>
	</div>
	</div>
	<div class="search-left">
	<div class="search-header">
	<h2 class="header ">Search</h2>
	</div>
	<ul class="dynamic-menu" id="menu-search">
	<li class="item-active">
	<a href="">
	<span class="arrow">Summary</span>
	</a>
	</li>
	<li>
	<a href=""><span class="arrow">Characters<span> (number)</span></span>
	</a>
	</li>
	<li>
	<a href="">
	<span class="arrow">Guilds<span></span></span>
	</a>
	</li>
	<li>
	<a href="">
	<span class="arrow">Arena Teams<span></span></span>
	</a>
	</li>
	</ul>
    </div>
	<span class="clear"><!-- --></span>
	</div>
	</div>
	</div>
	</div>
	<?php include("footer.php"); ?>
<script type="text/javascript">
//<![CDATA[
var xsToken = '';
var Msg = {
support: {
ticketNew: 'Ticket {0} was created.',
ticketStatus: 'Ticket {0}’s status changed to {1}.',
ticketOpen: 'Open',
ticketAnswered: 'Answered',
ticketResolved: 'Resolved',
ticketCanceled: 'Cancelled',
ticketArchived: 'Archived',
ticketInfo: 'Need Info',
ticketAll: 'View All Tickets'
},
cms: {
requestError: 'Your request cannot be completed.',
ignoreNot: 'Not ignoring this user',
ignoreAlready: 'Already ignoring this user',
stickyRequested: 'Sticky requested',
stickyHasBeenRequested: 'You have already sent a sticky request for this topic.',
postAdded: 'Post added to tracker',
postRemoved: 'Post removed from tracker',
userAdded: 'User added to tracker',
userRemoved: 'User removed from tracker',
validationError: 'A required field is incomplete',
characterExceed: 'The post body exceeds XXXXXX characters.',
searchFor: "Search for",
searchTags: "Articles tagged:",
characterAjaxError: "You may have become logged out. Please refresh the page and try again.",
ilvl: "Level {0}",
shortQuery: "Search requests must be at least three characters long."
},
bml: {
bold: 'Bold',
italics: 'Italics',
underline: 'Underline',
list: 'Unordered List',
listItem: 'List Item',
quote: 'Quote',
quoteBy: 'Posted by {0}',
unformat: 'Remove Formating',
cleanup: 'Fix Linebreaks',
code: 'Code Blocks',
item: 'WoW Item',
itemPrompt: 'Item ID:',
url: 'URL',
urlPrompt: 'URL Address:'
},
ui: {
submit: 'Submit',
cancel: 'Cancel',
reset: 'Reset',
viewInGallery: 'View in gallery',
loading: 'Loading…',
unexpectedError: 'An error has occurred',
fansiteFind: 'Find this on…',
fansiteFindType: 'Find {0} on…',
fansiteNone: 'No fansites available.'
},
grammar: {
colon: '{0}:',
first: 'First',
last: 'Last'
},
fansite: {
achievement: 'achievement',
character: 'character',
faction: 'faction',
'class': 'class',
object: 'object',
talentcalc: 'talents',
skill: 'profession',
quest: 'quest',
spell: 'spell',
event: 'event',
title: 'title',
arena: 'arena team',
guild: 'guild',
zone: 'zone',
item: 'item',
race: 'race',
npc: 'NPC',
pet: 'pet'
},
search: {
kb: 'Support',
post: 'Forums',
article: 'Blog Articles',
static: 'General Content',
wowcharacter: 'Characters',
wowitem: 'Items',
wowguild: 'Guilds',
wowarenateam: 'Arena Teams',
other: 'Other'
}
};
//]]>
</script>
<script type="text/javascript" src="/wow/static/local-common/js/menu.js?v35"></script>
<script type="text/javascript" src="/wow/static/js/wow.js?v18"></script>
<script type="text/javascript">
//<![CDATA[
$(function(){
Menu.initialize('/data/menu.json');
Search.initialize('/ta/lookup');
});
//]]>
</script>
<script type="text/javascript" src="/wow/static/local-common/js/utility/dynamic-menu.js?v35"></script>
<script type="text/javascript" src="/wow/static/js/character/guild-tabard.js?v18"></script>
<script type="text/javascript" src="/wow/static/js/character/arena-flag.js?v18"></script>
<script type="text/javascript">
//<![CDATA[
Core.load("/wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v35");
Core.load("/wow/static/local-common/js/search.js?v35");
Core.load("/wow/static/local-common/js/login.js?v35", false, function() {
if (typeof Login !== 'undefined') {
Login.embeddedUrl = 'https://eu.battle.net/login/login.frag';
}
});
//]]>
</script>
<!--[if lt IE 8]> <script type="text/javascript" src="/wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v35"></script>
<script type="text/javascript">
//<![CDATA[
$('.png-fix').pngFix(); //]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
(function() {
var ga = document.createElement('script');
var src = "https://ssl.google-analytics.com/ga.js";
if ('http:' == document.location.protocol) {
src = "http://www.google-analytics.com/ga.js";
}
ga.type = 'text/javascript';
ga.setAttribute('async', 'true');
ga.src = src;
var s = document.getElementsByTagName('script');
s = s[s.length-1];
s.parentNode.insertBefore(ga, s.nextSibling);
})();
//]]>
</script>
</body>
</html>