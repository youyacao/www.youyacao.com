
<?php  /* Template Name:搜索和Banner */  ?>
<div id="search">
	<div class="search-content">
		<form name="search" method="post" class="s-form" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search">
			<input name="q" size="11" autocomplete="off" id="edtSearch" type="text" class="s-key" placeholder="请输入关键词，回车即可搜索。" style="border:0"/>
			<ul id="search-result" data-reusltnum="8"></ul>
			<input value="搜 索" id="btnPost" type="submit"  class="s-sub tra"  style="display:none"/>
		</form>
	</div>
	<div class="search-bg"></div>
</div>
<?php if ($zbp->Config('Lucky')->bg=='a') { ?>
	<div id="img_url"></div>
	<div id="img_holder" class="loadit"></div>
<?php } ?>