<div id="container">
    <div class="wrapper">
      <div id="breadcrumb"><a href="index.html">Главная</a> / <span class="active">Галереи</span></div>
      <div id="page"> 
        <!-- content -->
        <div id="content_g">
          <div class="region">
            <article class="node">
              <h2 class="title">Фото альбомы</h2>
              <div class="content block">
                <section class="about">
                  <article>
                   <?foreach($gallery_list as $list):?>
                     <div id="gallery_list">
                      <div class="photo"> <a href="index.php?c=gallery_page&id_g=<?=$list['id']?>"><img src="/v/gallery/282/<?=$list['title_image']?>" alt="Photo"/></a> </div>
                      <div class="details">
                        <h4 class="title"><a href="index.php?c=gallery_page&id_g=<?=$list['id']?>"><?=$list['name_gallery']?></a> <span class="photos">(<?=$count_fotos?> фото)</span></h4>
                        <p>
                          <time datetime="2012-01-24"><?=date("d.m.Y H:i",strtotime($list['create_at']))?></time>
                        <p><?=$list['description_gallery']?></p>
                      </div>
                    </div>
                    <?endforeach?>
                  </article>
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
                      <h4 class="title"><a href="index.php?c=post&id=<?=$pop['id']?>"><?=$pop['title']?></a></h4>
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
</div>
