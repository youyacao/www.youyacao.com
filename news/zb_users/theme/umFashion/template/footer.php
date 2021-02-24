{* Template Name:公共底部 *}
</section><div class="clear"></div>
<div id="divBottom">
    <div class="text"><h4 id="BlogPowerBy">Powered By zblog</h4><span>&nbsp;主题：优美尚品模版开发</span></div>
    <div class="text"><h3 id="BlogCopyRight">{$copyright}</h3>{if $zbp->Config('umFashion')->beian}&nbsp;<span>{$zbp->Config('umFashion')->beian}</span>{/if}</div>
</div>
{$zbp->Config('umFashion')->ftcode}
{$footer}
<div class="mask"></div>
</body>
</html>