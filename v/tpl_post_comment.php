<h3 class="block_title"><?=$article['count_coments']?> <?=$description_count_com?></h3>
<ul>
    <?foreach($coments as $list):?>
        <div id="comm">
            <li>
                <div class="details">
                    <div class="photo"><a href="#"><img src="v/images/bg_user.png" alt="Photo"/></a></div>
                    <div class="name">
                        <h4 class="title"><a href="#" id="author_message"><?=$list['name']?></a></h4>
                        <p class="date">
                            <time datetime="2012-01-29"><?=date('d.m.Y H:i',strtotime($list['create_at']))?></time>
                        </p>
                    </div>
                </div>
                <div class="content">
                    <p><?=$list['text_coment']?></p>
                </div>
            </li>
        </div>
    <?endforeach?>
</ul>    