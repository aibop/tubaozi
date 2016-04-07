<?php

?>
<ul id="main-menu" class="main-menu">
    <li class="<?php if (Yii::$app->controller->id == 'site'){echo 'active';}?>">
        <a href="/site/index">
            <i class="linecons-cloud"></i>
            <span class="title">HOME</span>
        </a>
    </li>
    <?php $i=0;foreach (\mdm\admin\components\MenuHelper::getAssignedMenu(\Yii::$app->user->id) as $k=>$p_menu) {
        if(!empty($p_menu['items'])){
            $if_menu=0;
            $url=parse_url($_SERVER["REQUEST_URI"]);
            $url_arr =  array_filter(explode("/", $url['path']));
            $url_items=$item_arr=[];
            //根据URL判断显示
            foreach($p_menu['items'] as $val){
                if($val['url'][0]){
                    $item_arr = array_filter(explode("/", $val['url'][0]));
                }
                $url_items[]=$item_arr[1];
            }
            if(isset($url_arr[1]) && in_array($url_arr[1], $url_items)){
                $if_menu=1;
            }
            ?>
            <li <?php echo $if_menu==1?'class="active"':''; ?>>
                <a href="<?php echo $p_menu['url']; ?>">
                    <i class="<?php echo $linecons[$i];$i++; ?>"></i>
                    <span class="title"><?=$p_menu['label']?></span>
                </a>
                <?php if(!empty($p_menu['items'])){ ?>
                    <ul <?php echo $if_menu==1?'style="display: block;"':''; ?>>
                        <?php foreach ($p_menu['items'] as $c_menu) {?>
                            <li>
                                <a href="<?= $c_menu['url'][0] ?>">
                                    <span class="title"><?= $c_menu['label'] ?></span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
        <?php }else{ ?>
            <li>
                <a href="<?= $p_menu['url'][0] ?>"><i class="icon-bar-chart"></i><?=$p_menu['label']?></a>
            </li>
        <?php }} ?>
</ul>