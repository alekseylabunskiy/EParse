<!--[if lte IE 8]><div id="ie_message"><div class="wrapper"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="images/banner_ie.png" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/></a></div></div><![endif]-->
<div id="wrapper"> 
  <div id="container">
    <div class="wrapper">
      <div id="breadcrumb"><a href="index.php">Главная</a> / <span><?=$bcamp['description']?></span>/<span class="active"><?=$article['title']?></span></div>
      <div id="page"> 
        <!-- content -->
        <div id="content_page">
          <div class="region">
            <article class="node">
              <h2 class="title"><?=$article['title']?></h2>
              <div class="content block">
                <p class="date date_main">
                  <time datetime="2012-01-24"><?=date('d.m.Y H:i',strtotime($article['create_at']))?></time>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style "> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_counter addthis_pill_style"></a> </div>
                <script type="text/javascript" src="../../s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f3c188f442f3bf2"></script> 
                <!-- AddThis Button END -->
                <section class="content">
                  <p><img src="/v/content_Images/images/282/<?=$article['image']?>" alt="Photo" class="align_left"/></p>
                  <?=$article['content']?>
                  <p>По материалам: <a href="<?=$author?>" target="_blank"><?=$article['author']?></a></p>
                </section>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style " style="margin-bottom:12px;"> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_counter addthis_pill_style"></a> <span class="email_print_pdf"><a href="#" class="email"></a><a href="#" class="print"></a><a href="#" class="pdf"></a></span>
                </div>
                <script type="text/javascript" src="../../s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f3c188f442f3bf2"></script> 
                <!-- AddThis Button END -->
                <p><a href="#comment_form" class="view_all"><span><span>Оставить комментарий</span></span></a></p>
                <section class="related">
                  <h3 class="block_title_black">Статьи из рубрики</h3>
                  <ul>
                    <?foreach($related as $list):?>
                    <li class="last_related">
                      <article>
                        <div class="photo"><a href="index.php?c=post&id=<?=$list['id']?>"><img src="/v/content_Images/images/86/<?=$list['image']?>" alt="Photo"/></a></div>
                        <div class="details">
                          <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                          <p class="date">
                            <time datetime="2012-01-21"><?=date('d.m.Y',strtotime($list['create_at']))?></time>
                        </div>
                      </article>
                    </li>
                    <?endforeach?>
                  </ul>
                </section>
                <section id="comments">
                  <div id="div_com"></div>
                  <div id="old_com">
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
                  </div>
                </section>
                <div id="comment_form">
                  <h3 class="block_title">Оставить коментарий</h3>
                  <form action="index.php?c=post&id=<?=$get?>" method="post" id="comment_form">
                    <div class="form-item">
                      <textarea placeholder="<?=$alert?>" class="form-textarea" id="edit-submitted-message" name="submitted_comment" rows="5" cols="60"></textarea>
                    </div>
                    <div id="edit-actions">
                      <button type="submit" name="sub_coment" id="add_com"><span class="view_all_medium"><span><span>Опубликовать</span></span></span></button>
                    </div>
                  </form>
                </div>
              </div>
            </article>
  </div>
        </div>
        <!-- end content --> 
      </div>
      <!-- right sidebar -->
      <div id="right_sidebar">
        <div class="region">
          <aside id="block_in_pictures" class="block">
            <h3 class="block_title">В фото</h3>
            <div class="content">
              <ul>
                <li>
                  <?foreach($in_foto as $list):?>
                    <div class="item"><a href="v/gallery/618/<?=$list['name_foto']?>" title="<?=$list['title_foto']?>"><img src="v/gallery/96/<?=$list['name_foto']?>" alt="" /></a></div>
                  <?endforeach?>
                </li>
              </ul>
              <p><a href="index.php?c=gallery_list" class="view_all"><span><span>Все фото</span></span></a></p>
            </div>
          </aside>
        </div>
      </div>
      <!-- end right sidebar --> 
    </div>
  </div>
  <div id="scroll_to_top_wrapper">
    <div class="wrapper"><a href="#" id="scroll_to_top">Scroll To Top</a></div>
  </div>
</div>
</body>
