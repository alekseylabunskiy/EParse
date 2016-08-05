  <div id="container">
    <div class="wrapper">
      <div id="breadcrumb"><a href="index.php">Главная</a> / <span class="active"><?=$main_title?></span></div>
      <div id="page"> 
        <!-- content -->
        <div id="content_b">
          <div class="region">
            <article class="node">
              <h2 class="title"><?=$main_title?></h2>
              <div class="content block">
                <section class="about">
                <?foreach($main_article as $list):?>
                  <article>
                    <div class="photo"> <a href="index.php?c=post&id=<?=$list['id']?>"><img src="/v/content_Images/images/282/<?=$list['image']?>" alt="Photo"/></a> </div>
                    <div class="details">
                      <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                      <p class="date">
                        <time datetime="2012-01-24"><?=date('d-m-Y H:i',strtotime($list['create_at']))?></time>
                        <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>#comment_form"><?=$list['count_coments']?></a></span></p>
                      <p><?php $string = explode('.', $list['content']); echo $string[0].'.';?></p>
                      <p><a href="index.php?c=post&id=<?=$list['id']?>" class="view_all"><span><span>Больше</span></span></a></p>
                    </div>
                  </article>
                  <?endforeach?>
                </section>
                <section>
                  <ul class="blog_list">
                  <?foreach($list_articles as $list):?>
                    <li>
                      <article>
                        <div class="photo"><a href="blog_post.html"><img src="/v/content_Images/images/120/<?=$list['image']?>" alt="Photo"/></a></div>
                        <div class="details">
                          <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?php $string = explode('.', $list['title']); echo $string[0].'.';?></a></h4>
                          <p class="date">
                            <time datetime="2012-01-24"><?=date('d-m-Y H:i',strtotime($list['create_at']))?></time>
                            <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>#comment_form"><?=$list['count_coments']?></a></span></p>
                          <p><?php $string = explode('.', $list['content']); echo $string[0].'.';?></p>
                        </div>
                      </article>
                    </li>
                   <?endforeach?> 
                  </ul>
                </section>
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
                    <div class="item"><a href="v/gallery/618/<?=$list['name_foto']?>" title="Photo 1"><img src="v/gallery/96/<?=$list['name_foto']?>" alt="" /></a></div>
                  <?endforeach?>
                </li>
              </ul>
              <p><a href="/index.php?c=gallery_4columns" class="view_all"><span><span>Все галлереи</span></span></a></p>
            </div>
          </aside>
          <div id="block_sidebar_tabs" class="block">
            <ul>
              <li><a href="#block_popular"><span class="bg">Популярное</span></a></li>
              <li><a href="#block_comments"><span class="bg">Коментарии</span></a></li>
            </ul>
            <aside id="block_popular" class="content">
              <ul>
              <?foreach($pop_articles as $pop):?>
                <li>
                  <article>
                    <div class="photo"><a href="index.php?c=post&id=<?=$pop['id']?>"><img src="v/content_Images/images/86/<?=$pop['image']?>" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><a href="index.php?c=post&=<?=$pop['id']?>"><?=$pop['title']?></a></h4>
                      <p class="date">
                        <time datetime="2012-01-21"><?=date("d-m-Y H:i",strtotime($pop['create_at']))?></time>
                    </div>
                  </article>
                </li>
                <?endforeach?>
              </ul>
            </aside>
            <aside id="block_comments" class="content">
              <ul>
                <?foreach($laitest_coments as $pop_c):?>
                  <li>
                    <article>
                      <div class="photo"><a href="#"><img src="v/images/bg_user.png" alt="Photo"/></a></div>
                      <div class="details">
                        <h4 class="title"><a href="#"><?=$pop_c['name']?></a> в <a href="#"><?=$pop_c['title']?></a></h4>
                      </div>
                      <p class="text"><?=$pop_c['text_coment']?></p>
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
