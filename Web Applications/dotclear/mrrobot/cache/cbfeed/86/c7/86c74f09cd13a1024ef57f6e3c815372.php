O:10:"feedParser":7:{s:9:"feed_type";s:8:"atom 1.0";s:5:"title";s:20:"Dotclear News - News";s:4:"link";s:26:"https://dotclear.org/blog/";s:11:"description";s:25:"Blog management made easy";s:7:"pubdate";s:25:"2018-10-01T02:30:12+02:00";s:9:"generator";s:8:"Dotclear";s:5:"items";a:20:{i:0;O:8:"stdClass":8:{s:4:"link";s:57:"https://dotclear.org/blog/post/2018/09/26/Dotclear-2.14.3";s:5:"title";s:15:"Dotclear 2.14.3";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:182:"    <p>A little update which fix a configuration problem, experienced at least on some 1&amp;1 servers, with a <code>memory_limit</code> value (in PHP.ini) set to -1 (unlimited).</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2018-09-26T11:26:00+02:00";s:2:"TS";i:1537953960;}i:1;O:8:"stdClass":8:{s:4:"link";s:57:"https://dotclear.org/blog/post/2018/09/04/Dotclear-2.14.2";s:5:"title";s:15:"Dotclear 2.14.2";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:408:"    <p>A little update which fixes some problems as:</p>

<ul>
<li>Security (two minor vulnerabilities)</li>
<li>Syntax coloration with the theme editor</li>
<li>Template filters attributes</li>
</ul>

<p>Note: Some web browser extensions, as ad blocker, may block some features of the backend of your installation, as the wysiwyg editors. You should use their white list of those extension is this case.</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2018-09-04T15:26:00+02:00";s:2:"TS";i:1536067560;}i:2;O:8:"stdClass":8:{s:4:"link";s:57:"https://dotclear.org/blog/post/2018/08/17/Dotclear-2.14.1";s:5:"title";s:15:"Dotclear 2.14.1";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:198:"    <p>A little update which fixes some problems as:</p>

<ul>
<li>The wizard installation script</li>
<li>The default font size in user preferences</li>
<li>The compression of js scripts</li>
</ul>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2018-08-17T09:43:00+02:00";s:2:"TS";i:1534491780;}i:3;O:8:"stdClass":8:{s:4:"link";s:71:"https://dotclear.org/blog/post/2018/08/14/Dotclear-2.14-and-PHP-version";s:5:"title";s:29:"Dotclear 2.14 and PHP version";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:223:"    <p>Some of you reported me some problems with this new release of Dotclear on servers running PHP 5.5 (which is obsolete).</p>


<p>So I recommend to switch to the 5.6 version of PHP or even better to the 7.1 or 7.2</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2018-08-14T10:01:00+02:00";s:2:"TS";i:1534233660;}i:4;O:8:"stdClass":8:{s:4:"link";s:55:"https://dotclear.org/blog/post/2018/08/13/Dotclear-2.14";s:5:"title";s:13:"Dotclear 2.14";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:446:"    <p>Codename: <strong>Dark Crystal</strong></p>


<p><strong>Crystal</strong> because it's today the 15th anniversary of Dotclear which run on the best servers on this planet!</p>


<p><strong>Dark</strong> because there is a new dark mode in the administration interface!</p>


<p><strong>Dark Crystal</strong> because I do like this animation movie published 35 years ago :-)</p>


<p>Otherwise, it's business as usual…</p>


<p>Enjoy!</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2018-08-13T10:07:00+02:00";s:2:"TS";i:1534147620;}i:5;O:8:"stdClass":8:{s:4:"link";s:57:"https://dotclear.org/blog/post/2018/01/27/Dotclear-2.13.1";s:5:"title";s:15:"Dotclear 2.13.1";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:167:"    <p>A small update that fixes two annoying bugs in the theme editor (when syntax coloration is enabled) and with the traditional Dotclear editor, in XHTML mode.</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2018-01-27T07:48:00+01:00";s:2:"TS";i:1517035680;}i:6;O:8:"stdClass":8:{s:4:"link";s:55:"https://dotclear.org/blog/post/2018/01/13/Dotclear-2.13";s:5:"title";s:13:"Dotclear 2.13";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:1805:"    <p>Some few words:</p>

<ul>
<li><strong>PHP 5.5+ mandatory</strong> as a more secure system has been implemented for passwords stored in the database, system which needs at least this version of PHP</li>
<li>Informations displayed on dashboard, as Dotclear updates or news, are now fetch from Dotclear server in <strong>asynchronous</strong> way, so no more dashboard blocked by a ghost server!</li>
<li>A new driver for MySQL databases encoded with <strong>UTF8-mb4</strong></li>
<li>Some bugs fixed</li>
<li>Some refinements in administrative UX</li>
</ul>

<p>Enjoy!</p>


<hr />


<h3>Note for users and administrator:</h3>


<p>The new encryption system for password <strong>does not require</strong> any migration procedure. This will be done only once at the very next user authentication.</p>


<h3>Notes for developers:</h3>


<p>The new password system implies two backward incompatibilities:</p>

<ol>
<li>The function <strong>checkPassword()</strong> (/inc/core/class.dc.auth.php) requires now a <strong>non encrypted password</strong> (usually form field contents) rather than an encrypted form.<br />So you now have to use <code>$core-&gt;auth-&gt;checkPassword($_POST['your_pwd'])</code> rather than <code>$core-&gt;auth-&gt;checkPassword($core-&gt;auth-&gt;crypt($_POST['your_pwd']))</code>.<br /><br /></li>
<li>The function <strong>crypt()</strong> (/inc/core/class.dc.auth.php) no more give the same results with the same parameter. If you need an "old fashion" encrypted password, you have to use <strong>cryptLegacy()</strong> function (same file).</li>
</ol>

<p>If you need a <strong>unique UID/key</strong>, use <code>http::browserUID(DC_MASTER_KEY.$core-&gt;auth-&gt;userID().$core-&gt;auth-&gt;cryptLegacy($core-&gt;auth-&gt;userID()))</code> (may be refined in future).</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2018-01-13T12:08:00+01:00";s:2:"TS";i:1515841680;}i:7;O:8:"stdClass":8:{s:4:"link";s:57:"https://dotclear.org/blog/post/2017/08/13/Dotclear-2.12.1";s:5:"title";s:15:"Dotclear 2.12.1";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:465:"    <p>A little update to fix a bug with the mustek default template set, used by a lot of themes. This release fixes also a small bug with media title during upload.</p>


<p>Do not forget to empty the cache of the templates (Maintenance plugin) as well as the cache of your browser after having made an update. In case you have opted for a manual update, do not forget to disconnect and reconnect, some updates (concerning the database) are made at this time.</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2017-08-13T04:49:00+02:00";s:2:"TS";i:1502592540;}i:8;O:8:"stdClass":8:{s:4:"link";s:55:"https://dotclear.org/blog/post/2017/07/27/Dotclear-2.12";s:5:"title";s:13:"Dotclear 2.12";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:1583:"    <p>Tiny but eventually not so tiny update as the <a href="https://hg.dotclear.org/dotclear/rev/91681075f2d0">CHANGELOG</a> shows. Anyway there is no new functionality, only improvements and bug fixes.</p>


<p>As the team is reduced since a lot of months/years, I decided to reduced the scope in terms of development as I'm the only dev still in activity and I have not more much courage to start (relatively) big projects<sup>[<a href="https://dotclear.org/blog/post/2017/07/27/Dotclear-2.12#pnote-1065-1" id="rev-pnote-1065-1">1</a>]</sup> — yes, we have a <a href="https://en.wikipedia.org/wiki/Bus_factor">bus factor</a> of 1 in Dotclear.</p>


<p>So exit the REST API I wish to develop — but a third party plugin is in development to provide this feature —, exit also the integration of the Twig template engine, exit also a lot of <a href="https://dev.dotclear.org/2.0/report/1">tickets</a> which stayed opened without anybody to take care of them.</p>


<p>I will continue to maintain Dotclear, indeed, in order to add some tiny missing features as UTF8-MB4 support for MySQL, a more robust password management and this will be included in the next 2.13 release which will need, at least, PHP 5.5 version — it's time to forget the older PHP 5.3 not more maintained now.</p>
<div class="footnotes"><h4 class="footnotes-title">Note</h4>
<p>[<a href="https://dotclear.org/blog/post/2017/07/27/Dotclear-2.12#rev-pnote-1065-1" id="pnote-1065-1">1</a>] First it's not funny at all to develop alone, second the lack of code review is as far as I know dangerous</p></div>
";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2017-07-27T10:38:00+02:00";s:2:"TS";i:1501144680;}i:9;O:8:"stdClass":8:{s:4:"link";s:57:"https://dotclear.org/blog/post/2016/12/29/Dotclear-2.11.2";s:5:"title";s:15:"Dotclear 2.11.2";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:461:"    <p>A new small update today that fixes some annoying bugs with PHP 5.3 and PHP 5.4; It also solves the problem of previewing the posts and pages being edited.</p>


<p>Do not forget to empty the cache of the templates (Maintenance plugin) as well as the cache of your browser after having made an update. In case you have opted for a manual update, do not forget to disconnect and reconnect, some updates (concerning the database) are made at this time.</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2016-12-29T15:30:00+01:00";s:2:"TS";i:1483021800;}i:10;O:8:"stdClass":8:{s:4:"link";s:57:"https://dotclear.org/blog/post/2016/12/28/Dotclear-2.11.1";s:5:"title";s:15:"Dotclear 2.11.1";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:232:"    <p>A small update that fixes a problem when using a version of PHP earlier than 5.5.</p>


<p>This problem prevents the administration menu (left column) from being displayed with most plugins, or even prevents their access.</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2016-12-28T14:21:00+01:00";s:2:"TS";i:1482931260;}i:11;O:8:"stdClass":8:{s:4:"link";s:55:"https://dotclear.org/blog/post/2016/12/28/Dotclear-2.11";s:5:"title";s:13:"Dotclear 2.11";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:5243:"    <p>A new version that deviates from our habits, since it is not published a <strong>13</strong>, and ahead of schedule, since it was planned <strong>mid-February 2017</strong>. It also derogates with the habit of having a copious <a href="https://hg.dotclear.org/dotclear/rev/712559193a6e">CHANGELOG</a> (list of modifications / corrections).</p>


<p>Indeed, this version does not bring anything extraordinary except that it facilitates the use of Dotclear, and it corrects some bugs sometimes annoying on a daily basis:</p>

<ul>
<li>Easier access to plugin settings,</li>
<li>A more advanced customization (text size, display or not of additional information, ...),</li>
<li>Some additional attributes for theme developers / hackers,</li>
<li>The <a href="https://www.w3.org/TR/webmention/">webmentions</a> which are added to the existing trackbacks and <a href="https://en.wikipedia.org/wiki/Pingback">pingbacks</a>,</li>
<li>The <strong>Berlin</strong> theme is now based on the template set <strong>dotty</strong>, which exploits at best <strong>HTML5</strong>,</li>
<li>...</li>
</ul>

<p>The general aspect of the administration also changes because the 2.11 uses the system font available on your machine rather than the usual Helvetica Neue. It also changes because it implements a font size that fits, between two thresholds, the space available on your screen. You can change the general font size in your preferences (3 settings are available).</p>


<p>Note that we have dropped the support of old browsers, especially old versions of Internet Explorer, up to version 9 included; It makes it possible to use a little more easily some innovations of CSS 3, in particular the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Using_CSS_flexible_boxes">flex</a> system.</p>


<p>But I let you discover this at home, once you have made the awaited update!</p>


<p>PS: This version requires <strong>PHP 5.3</strong> a minimum, but I advise you to use <strong>PHP 5.6</strong> or even <strong>PHP 7</strong> without waiting - the latter offers a speed gain very appreciable. It is quite possible that the next version of Dotclear requires a newer version than the already obsolete 5.3.</p>


<hr />


<p>Some technical details for plugin developers and blog administrators:</p>


<h3>Plugin settings</h3>


<p>The new version 2.11 introduces a new system that allows to define and find the different places where a plugin may have settings.</p>


<h4>Definitions</h4>


<p>It is necessary to define in the file _define.php of the plugin an additional property, named <strong>settings</strong> and which is constructed in the following way:</p>

<pre>
'settings' =&gt; array (
    'self' =&gt; '',
    'blog' =&gt; '#params.id',
    'pref' =&gt; '#user-options.id'
)
</pre>


<p>The line with 'self' indicates that there are settings on the main page of the plugin (that is, for developers, in the index.php file).</p>


<p>The line with 'blog' indicates that there are settings in the blog settings, normally on the 'Settings' tab (#params is used for this) and at the first item id equal to the plugin id (you can for example position this id on the title element, h4 or h5, which precedes the options of the plugin).</p>


<p>The line with 'pref' indicates that there are settings in the user preferences, normally on the 'My options' tab (the #user-options is used for this) and at the first item id equal to the plugin id.</p>


<p>You can, and even must, specify only the lines that are relevant.</p>


<p>It is not obligatory to specify the id, in this case it is enough to simply specify the tab. It is also not necessary to specify the tab, in this case simply leave an empty string (").</p>


<p>The links will be displayed in the order in which they are defined in the 'settings' property.</p>


<p>Note: To this link list will be added first, if it exists, the link to the plugin's _config.php file.</p>


<h5>Examples of definitions</h5>


<p>Antispam plugin</p>

<pre>
'settings' =&gt; array (
    'self' =&gt; '',
    'blog' =&gt; '#params.antispam_params'
)
</pre>

<ul>
<li>self → access to main plugin settings on its own page (index.php)</li>
<li>blog → access to secondary settings in blog settings</li>
</ul>

<p>Tags plugin</p>

<pre>
'settings' =&gt; array (
    'pref' =&gt; '#user-options.tags_prefs'
)
</pre>

<ul>
<li>pref → access to keyword list format setting in user preferences</li>
</ul>

<p>Maintenance plugin</p>

<pre>
'settings' =&gt; array (
    'self' =&gt; '#settings'
)
</pre>

<ul>
<li>self → access to the "Settings" tab of the plugin's own page (index.php)</li>
</ul>

<h4>Display</h4>


<p>The setting URLs are displayed in two places:</p>

<ul>
<li>On the plugin management page, by unfolding the additional info (just click on the name of the plugin to get them)</li>
<li>On each of the main pages of the plugins, provided you have the rights to access them</li>
</ul>

<hr />


<p>If you need more information on these technical developments, use the <a href="https: //forum.dotclear.org/">forum</a> and/or <a href="http://ml.dotclear.org/Listinfo/dev">development mailing list</a>, or even the IRC channel #dotclear (irc.freenode.net) ...</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2016-12-28T10:00:00+01:00";s:2:"TS";i:1482915600;}i:12;O:8:"stdClass":8:{s:4:"link";s:57:"https://dotclear.org/blog/post/2016/11/02/Dotclear-2.10.4";s:5:"title";s:15:"Dotclear 2.10.4";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:1970:"    <p>A tiny update which fixes a database connection problem for installation using <strong>PostgreSQL lower than 9.1</strong></p>


<p>If you are <strong>not</strong> in this case, the automatic update will run as usual.</p>


<p>If you are <strong>in this case</strong>, in order to do this very next automatic update, you have to follow this procedure:</p>

<ol>
<li>Open the file /inc/libs/clearbricks/dblayer/class.pgsql.php</li>
<li>Insert a new line before the line number 103 and put the following code in this line, then save the file:</li>
</ol>
<pre>
return;
</pre>


<p>You should have something like that:</p>

<pre>
		/** @ignore */
		private function db_post_connect($handle,$database)
		{
return;
			$result = $this-&gt;db_query($handle,&quot;SELECT * FROM pg_collation WHERE (collcollate LIKE '%.utf8')&quot;);
			if($this-&gt;db_num_rows($result) &gt; 0) {
				$this-&gt;db_result_seek($result, 0);
				$row = $this-&gt;db_fetch_assoc($result);
				$this-&gt;utf8_unicode_ci = '&quot;'.$row['collname'].'&quot;';
			}
		}
</pre>


<p>This modification will give you again access to your installation.</p>


<p>In order to apply the automatic update, you will have, first, to install a specific plugin, FakeMeUp (<a href="http://plugins.dotaddict.org/dc2/details/fakemeup">available on the DotAddict website</a>), which allow to bypass the control of modified files before update.</p>


<p>Once this plugin installed, make the update and when finished, disable or uninstall the FakeMeUp plugin, as you wish.</p>


<p>Your dashboard should also offer you to upgrade your installation today or tomorrow (depending on your settings). There's also a <a href="http://download.dotclear.org/patches/2.10.3-2.10.4.diff.gz">patch</a> for the developers who prefer this method.</p>


<hr />


<p>CHANGELOG of this release&nbsp;:</p>

<pre>
Dotclear 2.10.4 - 2016-11-02
===========================================================
* PostgreSQL &lt; 9.1 fix
</pre>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2016-11-02T10:53:00+01:00";s:2:"TS";i:1478080380;}i:13;O:8:"stdClass":8:{s:4:"link";s:57:"https://dotclear.org/blog/post/2016/11/01/Dotclear-2.10.3";s:5:"title";s:15:"Dotclear 2.10.3";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:1206:"    <p>A tiny update to fix two minor security vulnerabilities and to allow some specific proxy/ssl server configuration.</p>


<p>Your dashboard should also offer you to upgrade your installation today or tomorrow (depending on your settings). There's also a <a href="http://download.dotclear.org/patches/2.10.2-2.10.3.diff.gz">patch</a> for the developers who prefer this method.</p>


<hr />


<p>CHANGELOG of this release&nbsp;:</p>

<pre>
Dotclear 2.10.3 - 2016-11-01
===========================================================
* Security: Fix CVE-2016-7903: Password Reset Address Spoof — Thank's Hongkun Zeng for report
* Security: Fix CVE-2016-7902: Media Manager, unrestricted File Upload — Thank's Hongkun Zeng for report
* CSP: Cope with external sources used in editor's iframe to preview public external content
* Fix: Cope with post.post_position field during flat import
* Fix: Prevents precondition failed during currently activated theme update
* Fix: Remove unecessary header (cope by dotclear) in page plugin
* Fix: Let some proxies playing with standard http and https ports
* Fix: Let SSL runs through a proxy, it may be ok, sometimes
* 🐛 → Various bugs and typos fixed
</pre>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2016-11-01T15:26:00+01:00";s:2:"TS";i:1478010360;}i:14;O:8:"stdClass":8:{s:4:"link";s:57:"https://dotclear.org/blog/post/2016/08/17/Dotclear-2.10.2";s:5:"title";s:15:"Dotclear 2.10.2";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:386:"    <p>A tiny update to fix a problem which prevents correct update on installations using the PostgreSQL database system.</p>


<p>Your dashboard should also offer you to upgrade your installation today or tomorrow (depending on your settings). There's also a <a href="http://download.dotclear.org/patches/2.10.1-2.10.2.diff.gz">patch</a> for the developers who prefer this method.</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2016-08-17T10:23:00+02:00";s:2:"TS";i:1471422180;}i:15;O:8:"stdClass":8:{s:4:"link";s:57:"https://dotclear.org/blog/post/2016/08/15/Dotclear-2.10.1";s:5:"title";s:15:"Dotclear 2.10.1";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:548:"    <p>A tiny update to fix a problem which prevents the backend for new installation from correctly displaying (updates are not concerned). A too strict application of the CSP (Content-Security-Policies) is the cause of it. It also demonstrates that this protection might be efficient!</p>


<p>Your dashboard should also offer you to upgrade your installation today or tomorrow (depending on your settings). There's also a <a href="http://download.dotclear.org/patches/2.10-2.10.1.diff.gz">patch</a> for the developers who prefer this method.</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2016-08-15T09:19:00+02:00";s:2:"TS";i:1471245540;}i:16;O:8:"stdClass":8:{s:4:"link";s:70:"https://dotclear.org/blog/post/2016/08/14/Dotclear-2.10-%3A-warning%21";s:5:"title";s:24:"Dotclear 2.10 : warning!";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:581:"    <p>I've just been informed about a problem that prevents CSS stylesheets and Javascript scripts from being loaded in the backend of Dotclear, but <strong>only</strong> for the <strong>fresh new installation</strong>.</p>


<p>If you are concerned by this problem, download the <a href="https://download.dotclear.org/attic/dotclear-2.9.1.zip">2.9.1 release</a> instead, install it, and then do the upgrade to the 2.10 proposed on your dashboard. The upgrade is not concerned by this bug.</p>


<p>You may also wait tomorrow to download the future 2.10.1 which will fix that.</p>";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2016-08-14T10:30:00+02:00";s:2:"TS";i:1471163400;}i:17;O:8:"stdClass":8:{s:4:"link";s:55:"https://dotclear.org/blog/post/2016/08/13/Dotclear-2.10";s:5:"title";s:13:"Dotclear 2.10";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:6869:"    <p>We should celebrate the 13th anniversary of Dotclear today so here it is, the 2.10 release is available now and very soon on your dashboard<sup>[<a href="https://dotclear.org/blog/post/2016/08/13/Dotclear-2.10#pnote-1045-1" id="rev-pnote-1045-1">1</a>]</sup>!</p>


<p>The menu of this release (non exhaustive list, see <a href="https://hg.dotclear.org/dotclear/file/18dc878c1178/CHANGELOG" hreflang="en">CHANGELOG</a> for further details)&nbsp;:</p>

<ul>
<li>Some vulnerabilities have been fixed</li>
<li>Lot of bugs killed (some may still remain)</li>
<li>A new template-set, named <strong>dotty</strong>, using as far as possible the new HTML5 semantic tags</li>
<li>New options to customize and improve the use your Dotclear backend (favorites folders in media manager, optional columns for posts and pages lists, …)</li>
<li>Implementation of the <a href="https://developer.mozilla.org/en-US/docs/Web/Security/CSP">Content-Security-Policies</a> for the backend, prelude to an implementation in public side (blogs) for the future 2.11 release<sup>[<a href="https://dotclear.org/blog/post/2016/08/13/Dotclear-2.10#pnote-1045-2" id="rev-pnote-1045-2">2</a>]</sup></li>
<li>New facilities and opportunities for plugins developers (they are detailed below)</li>
<li>Some javascript libraries have been updated (CKEditor, Codemirror, …)</li>
</ul>

<p>Not a revolution but developments for a more secure and  robust application&nbsp;; and finally, <strong>happy birthday Dotclear \o/</strong></p>


<p>PS&nbsp;: This release requires PHP 5.3 at least but I would strongly advise you to switch to PHP 5.6 or PHP 7 without delay — this last one offers a very welcome increase in speed. Anyway, the next version of Dotclear might require a newer version than the already obsolete 5.3.</p>


<hr />


<p>Some technical details for plugins (and themes) developers and for blogs administrators:</p>


<h3>CSP, aka Content-Security-Policies</h3>


<blockquote><p>Content Security Policy (CSP) is a computer security standard introduced to prevent cross-site scripting (XSS), clickjacking and other code injection attacks resulting from execution of malicious content in the trusted web page context.</p></blockquote>


<p>[ Wikipedia «&nbsp;<a href="https://en.wikipedia.org/wiki/Content_Security_Policy">Content Security Policy</a>&nbsp;» ]</p>


<p>The parameters used (activation and directives) are available via the <strong>about:config</strong> module (<strong>System settings</strong> menu, see “system” part)&nbsp;; these parameters are:</p>

<ul>
<li>csp_admin_on&nbsp;: activation/deactivation</li>
<li>csp_admin_default&nbsp;: <strong>default-src</strong> CSP directive</li>
<li>csp_admin_img&nbsp;: <strong>img-src</strong> CSP directive</li>
<li>csp_admin_script&nbsp;: <strong>script-src</strong> CSP directive</li>
<li>csp_admin_style&nbsp;: <strong>style-src</strong> CSP directive</li>
</ul>

<p>A 3rd party plugin needing some external services may complete one or many of these directives using the <em>behavior</em> <strong>adminPageHTTPHeaderCSP</strong> which provides as parameter an key-indexed array. Each of these keys refers to the according CSP directive (see list above), its value giving the list of authorized sources (separated by space).</p>


<p>Example&nbsp;:</p>


<p>Imagine a plugin using the Google Maps API (for scripts), it should add the corresponding Google server by this way:</p>

<pre>
$core-&gt;addBehavior('adminPageHTTPHeaderCSP',array('myAdminBehaviors','adminPageHTTPHeaderCSP'));

class myAdminBehaviors
{
	public static function adminPageHTMLHead($csp)
	{
		if (isset($csp['script-src'])) {
			$csp['script-src'] .= ' maps.googleapis.com';
		} else {
			$csp['script-src'] = 'maps.googleapis.com';
		}
	}
}
</pre>


<h3>Private folder <strong>/var</strong></h3>


<p>A new folder, named <strong>var</strong>, has been created with the 2.10 release of Dotclear. It is at the main level (as the cache folder is) and should be used for local storage that should normally not be set in <strong>cache</strong> folder. Note that this cache folder may be deleted at every moment without any negative consequences for the installation.</p>


<p>A new constant, <strong>DC_VAR</strong>, is available and may be customized in the <strong>config.php</strong> file in order to build paths. Two new functions are also available to retrieve URLs:</p>

<ul>
<li>dcPage::getVF() for an URL based on the backend root URL of the installation</li>
<li>dcBlog::getVF() for a public URL (based on the public URL of the blog)</li>
</ul>

<p>Plugin developers are encouraged to create their own directory within this directory <strong> /var</strong> to maintain a semblance of order.</p>


<h3>Code highlighting with Codemirror</h3>


<p>The Codemirror library, used by the theme editor, is now available (in the backend) for every plugin. Two functions are available to load and run this library&nbsp;:</p>

<ul>
<li>dcPage::jsLoadCodeMirror() for loading</li>
<li>dcPage::jsRunCodeMirror() for running</li>
</ul>

<p>Example for CSS code&nbsp;:</p>

<pre>
# Get interface setting
$core-&gt;auth-&gt;user_prefs-&gt;addWorkspace('interface');
$user_ui_colorsyntax = $core-&gt;auth-&gt;user_prefs-&gt;interface-&gt;colorsyntax;
$user_ui_colorsyntax_theme = $core-&gt;auth-&gt;user_prefs-&gt;interface-&gt;colorsyntax_theme;

# in &lt;head&gt;
if ($user_ui_colorsyntax) {
	echo dcPage::jsLoadCodeMirror($user_ui_colorsyntax_theme,false,array('css'));
}

# in &lt;body&gt;
if ($user_ui_colorsyntax) {
	echo dcPage::jsRunCodeMirror('editor_css','css_content','css',$user_ui_colorsyntax_theme);
}
</pre>


<p>Turning on (or off) syntax highlighting and choosing the theme to use (among the forty+ proposed) are in "My Preferences", "My options" tab.</p>


<hr />


<p>If you need more information about the technical stuff, use <a href="https://forum.dotclear.org/">the forum</a> and/or <a href="http://ml.dotclear.org/listinfo/dev">the development mailing-list</a>, or also the #dotclear IRC channel (irc.freenode.net) where some of us sometimes hang…</p>
<div class="footnotes"><h4 class="footnotes-title">Notes</h4>
<p>[<a href="https://dotclear.org/blog/post/2016/08/13/Dotclear-2.10#rev-pnote-1045-1" id="pnote-1045-1">1</a>] <a href="http://download.dotclear.org/patches/2.9.1-2.10.diff.gz">A patch </a> is also available for the developers who prefer this method.</p>
<p>[<a href="https://dotclear.org/blog/post/2016/08/13/Dotclear-2.10#rev-pnote-1045-2" id="pnote-1045-2">2</a>] The implementation of CSP has been inspired by a presentation I attended, given by <a href="http://www.nicolas-hoffmann.net/content-security-policy-parisweb-2015/#/">Nicolas Hoffmann</a> on this particular topic, at the <a href="https://www.paris-web.fr/2015/conferences/csp-content-security-policy.php">Paris-Web event in 2015</a>.</p></div>
";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2016-08-13T13:13:00+02:00";s:2:"TS";i:1471086780;}i:18;O:8:"stdClass":8:{s:4:"link";s:56:"https://dotclear.org/blog/post/2016/03/27/Dotclear-2.9.1";s:5:"title";s:14:"Dotclear 2.9.1";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:1003:"    <p>A new maintenance release which fixes several bugs of the previous 2.9. I remind you that Dotclear is fully compatible with the new PHP 7 (it's performances are highly improved comparing with PHP 5.n)<sup>[<a href="https://dotclear.org/blog/post/2016/03/27/Dotclear-2.9.1#pnote-1043-1" id="rev-pnote-1043-1">1</a>]</sup>.</p>


<p>Your dashboard should also offer you to upgrade your installation today or tomorrow (depending on your settings). There's also a <a href="http://download.dotclear.org/patches/2.9-2.9.1.diff.gz">patch</a> for the developers who prefer this method.</p>
<div class="footnotes"><h4 class="footnotes-title">Note</h4>
<p>[<a href="https://dotclear.org/blog/post/2016/03/27/Dotclear-2.9.1#rev-pnote-1043-1" id="pnote-1043-1">1</a>] If you use MySQL for your database, take care to use the <strong>mysqli</strong> driver rather than the old <strong>mysql</strong> which is not more supported by PHP 7 (see in your configuration file <code>inc/config.php</code>).</p></div>
";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2016-03-27T11:16:00+02:00";s:2:"TS";i:1459070160;}i:19;O:8:"stdClass":8:{s:4:"link";s:54:"https://dotclear.org/blog/post/2016/02/29/Dotclear-2.9";s:5:"title";s:12:"Dotclear 2.9";s:7:"creator";s:6:"Franck";s:11:"description";s:0:"";s:7:"content";s:2426:"    <blockquote><p>My lambs, it's time to update, the new 2.9 version awaits you!</p>
<p>
<em>Fédor Balanovitch</em> (coming out of the bus, almost) — Zazie in the metro, R. Queneau</p></blockquote>


<p>On the menu of this version essentially what make life a little easier for those who spend time on the side of the administration of their(s) blog(s). A search and last visited folders available in the media manager, better sorted menus and lists some more filterable, some welcome updates for the javascript libraries used<sup>[<a href="https://dotclear.org/blog/post/2016/02/29/Dotclear-2.9#pnote-1041-1" id="rev-pnote-1041-1">1</a>]</sup>.</p>


<p>And then we also need to make Dotclear run properly with the new version 7 of PHP, quite impressive release in terms of speed gain, and you will note in passing that the minimum required version of PHP 5.3, as it is had announced at the time of the release of <a href="https://dotclear.org/blog/post/2015/08/13/Dotclear-2.8">the release of the version 2.8</a><sup>[<a href="https://dotclear.org/blog/post/2016/02/29/Dotclear-2.9#pnote-1041-2" id="rev-pnote-1041-2">2</a>]</sup>.</p>


<p>A lot of bugs were eradicated, a few new opportunities have been implemented for developers of plugins and theme designers, and finally a more robust application for everyone.</p>


<p>The future version 2.10 will be mainly focused on two aspects. First an "overhaul" of JavaScript scripts used in the administration od Dotclear, as we have some old stuff in our "collection", and second, a "soft" migration to more HTML5 / CSS3 templates and themes side. But tell us if you'd prefer something else!</p>


<p>The updated proposal of your installation should appear on your dashboard today or tomorrow (depending on the settings of your accommodation) and a <a href="http://download.dotclear.org/patches/2.8.2-2.9.diff.gz">patch</a> is available to developers preferring to apply this method.</p>
<div class="footnotes"><h4 class="footnotes-title">Notes</h4>
<p>[<a href="https://dotclear.org/blog/post/2016/02/29/Dotclear-2.9#rev-pnote-1041-1" id="pnote-1041-1">1</a>] The jQuery 2.2.0 version is now available for the public side of your blogs, if necessary.</p>
<p>[<a href="https://dotclear.org/blog/post/2016/02/29/Dotclear-2.9#rev-pnote-1041-2" id="pnote-1041-2">2</a>] Hosting services with less than 5.3 version of PHP begins hard to find, and it's a good news.</p></div>
";s:7:"subject";a:1:{i:0;s:4:"News";}s:7:"pubdate";s:25:"2016-02-29T13:17:00+01:00";s:2:"TS";i:1456748220;}}}