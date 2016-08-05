 <!-- content top -->
  <div id="content_top">
    <div class="region">
      <aside id="block_breaking_news" class="block">
        <h3 class="block_title">Braking:</h3>
        <div class="content">
          <ul>
            <?foreach($list_laitest_news as $list):?>
              <li><a href="index.php?c=post&id=<?=$list['id']?>"><?=date("H:i",strtotime($list['create_at']))." "?><?=$list['title']?></a></li>
            <?endforeach?>
          </ul>
        </div>
      </aside>
      <aside id="block_front_slider" class="block">
        <div id="l_news">
          <?foreach($one_latest_news as $list):?>
            <a href="index.php?c=post&id=<?=$list['id']?>"><img id="l_news_img" src="/v/content_Images/images/458/<?=$list['image']?>" alt=""></a>
            <div id="l_news_description">
                <a href="index.php?c=post&id=<?=$list['id']?>">
                    <p id="main_n_text"><?=$list['title']?></p> 
                </a> 
          <?endforeach?>        
            </div>
        </div>
      </aside>
      <aside id="block_latest_headlines" class="block">
        <h3 class="block_title">Свежие заголовки</h3>
        <div class="content">
          <ul>
            <?foreach($list_laitest_news as $list):?>
              <li><a href="index.php?c=post&id=<?=$list['id']?>"><?=date("H:i",strtotime($list['create_at']))." "?><?=$list['title']?></a></li>
            <?endforeach?>
          </ul>
        </div>   
      </aside>
      <div id="block_content_top_tabs" class="block">
        <h3 class="block_title">Репортаж</h3>
        <div class="tabslide">
          <div class="tabs">
            <?foreach($rep as $list):?>
              <span class="tab" data-id="<?=$list['data-id']?>"><img src="/v/content_Images/images/65/<?=$list['image']?>" alt="Photo"/></span>
            <?endforeach?>    
          </div>
              <div class="pointer"><div id="pointer"></div></div>
              <div class="slider">
                  <div id="slider">
                  <?foreach($rep as $list):?>
                    <div>
                      <a href="index.php?c=post&id=<?=$list['id']?>"><img style="width: 99%; height: 220px;" src="/v/content_Images/images/618/<?=$list['image']?>" alt="Photo"/></a>
                      <div class="description_s" id="desc">
                        <p><?=$list['title']?></p>
                      </div>
                    </div>
                  <?endforeach?>     
              </div>
              </div>
          </div>
      </div>
      <section id="block_editors_choice" class="block">
        <h3 class="block_title">Выбор Редактора</h3>
        <div class="content">
          <ul>
            <?foreach($editor_choise as $list):?>
            <li>
              <div class="editors_inner2">
                <article class="editors_inner">
                  <div class="editors_left"><img src="/v/content_Images/images/120/<?=$list['image']?>" alt="Photo"/></div>
                  <div class="editors_right">
                    <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                    <p class="date">
                      <time datetime="2012-01-24"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                      <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                  </div>
                </article>
              </div>
            </li>
            <?endforeach?>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- end content top -->
  <div id="container">
    <div class="wrapper">
      <div id="page"> 
        <!-- left sidebar -->
        <div id="left_sidebar">
          <div class="region">
            <section id="block_left" class="block">
              <h3 class="block_title">Украина</h3>
              <div class="content">
                <ul>
                <?foreach($ukraine as $list):?>
                  <li class="first">
                    <article>
                      <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                      <p class="date">
                        <time datetime="2012-01-29"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                        <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                      <p><?$text = explode(".", $list['content']); echo $text[0].".";?></p>
                    </article>
                  </li>
                  <?endforeach?>
                </ul>
                <p><a href="#" class="view_all"><span><span>Больше</span></span></a></p>
              </div>
            </section>
          </div>
        </div>
        <!-- end left sidebar --> 
        <!-- content -->
        <div id="content">
          <div class="region">
            <section id="block_world_news" class="block">
              <h3 class="block_title_black">Мир<a href="index.php?c=categories&id_category=world" class="view_all"><span><span>Все новости</span></span></a></h3>
              <div class="content">
                <div class="left">
                  <article>
                  <?foreach($world as $list):?>
                    <p><img src="/v/content_Images/images/216/<?=$list['image']?>" alt="World News"/></p>
                    <hgroup>
                      <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                    </hgroup>
                    <p class="date">
                      <time datetime="2012-01-26"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                      <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                    <p><?$text = explode(".", $list['content']); echo $text[0].".";?></p>
                    <?endforeach?>
                  </article>
                </div>
                <div class="right">
                  <ul>
                    <?foreach($world_list as $list):?>
                    <li class="first">
                      <article>
                        <hgroup>
                          <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                        </hgroup>
                        <p class="date">
                          <time datetime="2012-01-18"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                          <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                        <p><?$text = explode(".", $list['content']); echo $text[0].".";?></p>
                      </article>
                    </li>
                    <?endforeach?>
                  </ul>
                </div>
              </div>
            </section>
            <section id="block_business_news" class="block">
              <h3 class="block_title_black">Бизнес<a href="index.php?c=categories&id_category=bisness" class="view_all"><span><span>Все новости</span></span></a></h3>
              <div class="content">
                <div class="left">
                  <article>
                    <?foreach($bisness as $list):?>
                    <p><img src="/v/content_Images/images/216/<?=$list['image']?>" alt="World News"/></p>
                    <hgroup>
                      <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                    </hgroup>
                    <p class="date">
                      <time datetime="2012-01-24"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                      <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                    <p><?$text = explode(".", $list['content']); echo $text[0].".";?></p>
                    <?endforeach?>
                  </article>
                </div>
                <div class="right">
                  <ul>
                    <?foreach($bisness_list as $list):?>
                    <li class="first">
                      <article>
                        <hgroup>
                          <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                        </hgroup>
                        <p class="date">
                          <time datetime="2012-01-21"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                          <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                        <p><?$text = explode(".", $list['content']); echo $text[0].".";?></p>
                      </article>
                    <?endforeach?>  
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!-- end content --> 
        <!-- content bottom -->
        <div id="content_bottom">
          <div class="region">
            <aside id="block_sports" class="block one_fourth">
              <h3 class="block_title">Спорт</h3>
              <div class="content">
                <ul>
                  <?foreach($sport as $list):?>
                  <li class="first"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></li>
                  <?endforeach?>
                </ul>
                <p><a href="index.php?c=categories&id_category=sport" class="view_all"><span><span>Больше</span></span></a></p>
              </div>
            </aside>
            <aside id="block_entertainment" class="block one_fourth">
              <h3 class="block_title">Развлечения</h3>
              <div class="content">
                <ul>
                  <?foreach($intertaiment as $list):?>
                  <li class="first"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></li>
                  <?endforeach?>
                </ul>
                <p><a href="index.php?c=categories&id_category=intertaiment" class="view_all"><span><span>Больше</span></span></a></p>
              </div>
            </aside>
            <aside id="block_health" class="block one_fourth">
              <h3 class="block_title">Здоровье</h3>
              <div class="content">
                <ul>
                  <?foreach($helth as $list):?>
                  <li class="first"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></li>
                  <?endforeach?>
                </ul>
                <p><a href="index.php?c=categories&id_category=helth" class="view_all"><span><span>Больше</span></span></a></p>
              </div>
            </aside>
            <aside id="block_tech" class="block last one_fourth">
              <h3 class="block_title">Техно</h3>
              <div class="content">
                <ul>
                  <?foreach($tech as $list):?>
                  <li class="first"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></li>
                  <?endforeach?>
                </ul>
                <p><a href="index.php?c=categories&id_category=tech" class="view_all"><span><span>Больше</span></span></a></p>
              </div>
            </aside>
          </div>
        </div>
        <!-- end content bottom --> 
      </div>
      <!-- right sidebar -->
      <div id="right_sidebar">
        <div class="region">
          <aside id="block_in_pictures" class="block">
            <h3 class="block_title">Фото</h3>
            <div class="content">
              <ul>
                <li>
                  <?foreach($in_foto as $list):?>
                    <div class="item"><a href="v/gallery/618/<?=$list['name_foto']?>" title="<?=$list['title_foto']?>"><img src="v/gallery/96/<?=$list['name_foto']?>" alt="" /></a></div>
                  <?endforeach?>
                </li>
              </ul>
              <p><a href="index.php?c=gallery_list" class="view_all"><span><span>Все Фото</span></span></a></p>
            </div>
          </aside>
          <div id="block_sidebar_tabs" class="block">
            <ul>
              <li><a href="#block_popular"><span class="bg">Популярное</span></a></li>
              <li><a href="#block_comments"><span class="bg">Коментарии</span></a></li>
            </ul>
            <aside id="block_popular" class="content">
              <ul>
                <?foreach($pop_articles as $list):?>
                <li>
                  <article>
                    <div class="photo"><a href="index.php?c=post&id=<?=$list['id']?>"><img src="v/content_Images/images/86/<?=$list['image']?>" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                      <p class="date">
                        <time datetime="2012-01-21"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                        <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                    </div>
                  </article>
                </li>
                <?endforeach?>
              </ul>
            </aside>
            <aside id="block_comments" class="content">
              <ul>
                <?foreach($laitest_coments as $list):?>
                <li>
                  <article>
                    <div class="photo"><a href="#"><img src="v/images/bg_user.png" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><?=$list['name']?> on <a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                      <p class="date">
                        <time datetime="2012-01-29"><?=$list['create_at']?></time>
                      </p>
                    </div>
                    <p class="text"><?=$list['text_coment']?></p>
                  </article>
                </li>
                <?endforeach?>
              </ul>
            </aside>
          </div>
        </div>
      </div>
      <!-- end right sidebar --> 
    </div>
  </div>
  <div id="scroll_to_top_wrapper">
    <div class="wrapper"><a href="#" id="scroll_to_top">Scroll To Top</a></div>
  </div>