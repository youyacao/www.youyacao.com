<?php echo'404';die();?>
{if $type!=='index'}</i><a href="{$host}" title="{$name}">首页</a> {if $type=='category'||$type=='article'}
{php}
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
{/php}{if $type=='article'}<i class="iconfont">&#xe6f1;</i>正文{/if}
{elseif $type=='page'}<i class="iconfont">&#xe6f1;</i>正文
{else} <i class="iconfont">&#xe6f1;</i>{$title}
{/if}

{/if}