
<?php if ($type=='article') { ?>
<title><?php if ($article->Metas->hyarticletitle) { ?><?php  echo $article->Metas->hyarticletitle;  ?><?php }else{  ?><?php  echo $title;  ?>_<?php  echo $article->Category->Name;  ?>_<?php  echo $name;  ?><?php } ?></title>
<?php 
$aryTags = array();
foreach($article->Tags as $key){$aryTags[] = $key->Name;}
if(count($aryTags)>0){$keywords = implode(',',$aryTags);} else {$keywords = $zbp->name;}
$description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...';
 ?>
<meta name="keywords" content="<?php if ($article->Metas->hyarticlekeywords) { ?><?php  echo $article->Metas->hyarticlekeywords;  ?><?php }else{  ?><?php  echo $keywords;  ?><?php } ?>" />
<meta name="description" content="<?php if ($article->Metas->hyarticledescription) { ?><?php  echo $article->Metas->hyarticledescription;  ?><?php }else{  ?><?php  echo $description;  ?><?php } ?>" />
<meta name="author" content="<?php  echo $article->Author->StaticName;  ?>" />
<?php if ($article->Prev) { ?>
<link rel="prev" title="<?php  echo $article->Prev->Title;  ?>" href="<?php  echo $article->Prev->Url;  ?>"/>
<?php } ?>
<?php if ($article->Next) { ?>
<link rel="next" title="<?php  echo $article->Next->Title;  ?>" href="<?php  echo $article->Next->Url;  ?>"/>
<?php } ?>
<link rel="canonical" href="<?php  echo $article->Url;  ?>"/>
<?php }elseif($type=='page') {  ?>
<title><?php  echo $title;  ?>_<?php  echo $name;  ?>_<?php  echo $subname;  ?></title>
<meta name="keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>" />
<?php 
$description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...';
 ?>
<meta name="description" content="<?php  echo $description;  ?>" />
<meta name="author" content="<?php  echo $article->Author->StaticName;  ?>" />
<?php }elseif($type=='index') {  ?>
<title><?php if ($zbp->Config('hnysweb')->seo_title&&$page=='1') { ?><?php  echo $zbp->Config('hnysweb')->seo_title;  ?><?php }else{  ?><?php  echo $name;  ?><?php if ($page>'1') { ?>_第<?php  echo $pagebar->PageNow;  ?>页<?php } ?>_<?php  echo $subname;  ?><?php } ?></title>
<?php if ($zbp->Config('hnysweb')->seo_keywords) { ?>
<meta name="Keywords" content="<?php  echo $zbp->Config('hnysweb')->seo_keywords;  ?>" />
<?php } ?>
<?php if ($zbp->Config('hnysweb')->seo_Description) { ?>
<meta name="description" content="<?php  echo $zbp->Config('hnysweb')->seo_Description;  ?>" />
<?php } ?>
<meta name="author" content="<?php  echo $zbp->members[1]->StaticName;  ?>" />
<?php }elseif($type=='tag') {  ?>
<title><?php if ($tag->Metas->hytagtitle) { ?><?php  echo $tag->Metas->hytagtitle;  ?><?php if ($page>'1') { ?>_第<?php  echo $pagebar->PageNow;  ?>页<?php } ?><?php }else{  ?><?php  echo $tag->Name;  ?>_<?php  echo $name;  ?><?php if ($page>'1') { ?>_第<?php  echo $pagebar->PageNow;  ?>页<?php } ?>_<?php  echo $subname;  ?><?php } ?></title>
<meta name="Keywords" content="<?php if ($tag->Metas->hytagkeywords) { ?><?php  echo $tag->Metas->hytagkeywords;  ?><?php }else{  ?><?php  echo $tag->Name;  ?><?php } ?>">
<?php if ($tag->Intro || $tag->Metas->hytagdescription) { ?>
<meta name="description" content="<?php if ($tag->Metas->hytagdescription) { ?><?php  echo $tag->Metas->hytagdescription;  ?><?php }else{  ?><?php  echo $tag->Intro;  ?><?php } ?>">
<?php } ?>
<?php }elseif($type=='category') {  ?>
<title><?php if ($category->Metas->hycatetitle) { ?><?php  echo $category->Metas->hycatetitle;  ?><?php if ($page>'1') { ?>_第<?php  echo $pagebar->PageNow;  ?>页<?php } ?><?php }else{  ?><?php  echo $title;  ?>_<?php  echo $name;  ?><?php } ?></title>
<meta name="Keywords" content="<?php if ($category->Metas->hycatekeywords) { ?><?php  echo $category->Metas->hycatekeywords;  ?><?php }else{  ?><?php  echo $title;  ?>,<?php  echo $name;  ?><?php } ?>" />
<meta name="description" content="<?php if ($category->Metas->hycatedescription) { ?><?php  echo $category->Metas->hycatedescription;  ?><?php }else{  ?><?php  echo $title;  ?>_<?php  echo $name;  ?><?php } ?>" />
<?php }else{  ?>
<title><?php  echo $title;  ?>_<?php  echo $name;  ?></title>
<meta name="Keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>" />
<meta name="description" content="<?php  echo $title;  ?>_<?php  echo $name;  ?><?php if ($page>'1') { ?>_当前是第<?php  echo $pagebar->PageNow;  ?>页<?php } ?>" />
<?php } ?>