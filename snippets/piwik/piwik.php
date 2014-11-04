<?php list($name, $siteid, $servername) = $yellow->getSnippetArgs() ?>
<?php if(!$servername) $servername = $yellow->config->get("serverName") ?>
<script type="text/javascript">
var _paq = _paq || [];
(function(){ var u=(("https:" == document.location.protocol) ? "https" : "http") + "://<?php echo $servername ?>/";
 _paq.push(['setSiteId', '<?php echo $siteid ?>']);
 _paq.push(['setTrackerUrl', u+'piwik.php']);
 _paq.push(['trackPageView']);
 _paq.push(['enableLinkTracking']);
 var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript'; g.defer=true; g.async=true; g.src=u+'piwik.js';
 s.parentNode.insertBefore(g,s); })();
</script>
