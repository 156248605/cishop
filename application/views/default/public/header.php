<div id="header">
    <h1><a href="./">瓢城Web俱乐部</a></h1>
</div>
<div id="nav">
    <ul>
        <?php if ($this->input->get('id')):?>
        <li><a href="./">首页</a></li>
        <?php else:?>
        <li><a href="./" class="strong">首页</a></li>
        <?php endif;?>
        <?php foreach ($FrontTenNav as $key=>$value):?>
        <?php if ($this->input->get('id')&&$FrontNav[0]['id']==$value['id']):?>
        <li><a href="/lists?id=<?=$value['id']?>" class="strong"><?=$value['name']?></a></li>
        <?php else:?>
        <li><a href="/lists?id=<?=$value['id']?>"><?=$value['name']?></a></li>
        <?php endif;?>
        <?php endforeach;?>
    </ul>
</div>
<div id="search">

</div>