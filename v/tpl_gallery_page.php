<div id="title_gallery">
    <?=$description['name_gallery']?>
</div>
<div id="description_gallery">
    <?=$description['description_gallery']?>
</div>
<div id="gall">
    <?foreach($foto as $list):?>
        <a href="v/gallery/618/<?=$list['name_foto']?>"  title="<?=$list['title_foto']?>" class="gall_images"><img  src="v/gallery/282/<?=$list['name_foto']?>" alt="image" class="tooltip" data-tooltip="Чтобы скрыть этот элемент нажмите Ecs"></a>
    <?endforeach?>
</div>