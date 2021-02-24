<?php  /* Template Name:当前位置 */  ?>
<div class="breadcrumb">
<?php if ($type!=='index') { ?><a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>">首页</a><?php if ($type=='category'||$type=='article') { ?>
<?php 
$html='';
function navcate($id){
        global $html;
        $cate = new Category;
        $cate->LoadInfoByID($id);
        $html ='<i class="iconfont">&#xe6f1;</i><a href="' .$cate->Url.'" title="' .$cate->Name. '">' .$cate->Name. '</a>'.$html;
        if(($cate->ParentID)>0){navcate($cate->ParentID);}
}
if($type=='category'){navcate($category->ID);}else{navcate($article->Category->ID);}
global $html;
echo $html;
 ?>
<?php if ($type=='article') { ?><i class="iconfont">&#xe6f1;</i><?php if ($category->Metas->liststyle =='4') { ?>正文<?php }else{  ?>详情页<?php } ?><?php } ?>
<?php }elseif($type=='page') {  ?><i class="iconfont">&#xe6f1;</i>正文
<?php }else{  ?><i class="iconfont">&#xe6f1;</i>关键词：<?php  echo $title;  ?>
<?php } ?>
<?php } ?>
</div>