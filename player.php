<head><script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>

</head><script async defer data-domain="gitlin.me" src="https://plausible.io/js/plausible.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div id="player"></div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div id="oper"></div>
<div id="vid"></div>
<script>
 player = new Clappr.Player({
  source: 'https://rtmpstream-inct.streaming.media.azure.net/ed0834e2-b9f7-4b1f-8ec0-563d10de9cfe/858a74db-8223-447b-9ba5-f06dce142ecc.ism/manifest(format=m3u8-aapl)',
  mimeType: "application/vnd.apple.mpegurl",
 autoPlay: true, 
 height: "100%",
 width: "100%",
 plugins: {"core": [LevelSelector]}, 
 parentId: "#vid"});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179030159-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179030159-1');
</script>
