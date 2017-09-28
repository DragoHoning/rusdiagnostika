<div id="product-detail-view" class="block-clear">{prod_pag id=$entry->id}
    <div class="col-xl-17">
        <div class="detail-view-content">
            <div class="product-name">{$entry->product_name}</div>
            {if $entry->fields['title']->value ne ''}<div class="product-namefull">{$entry->fields['title']->value}</div>{/if}
            <div class="product-text">{$entry->details}</div>
        </div>
        <div class="detail-view-image">
            <div class="detail-view-image block-clear">
                {capture assign='img'}uploads/_products/product_{$entry->id}/{$entry->fields['image']->value}{/capture}
                <a href="{CGSmartImage|strip src=$img notag=1 noembed=1 quality=85 filter_resizetofit='900,580,#ffffff'}" class="js-photobox-img"><span class="popup-view-img"><span class="popup-view-img-lefttop"></span><span class="popup-view-img-righttop"></span><span class="popup-view-img-leftbottom"></span><span class="popup-view-img-rightbottom"></span></span>
                    <img src="{CGSmartImage|strip src=$img notag=1 noembed=1 quality=85 filter_resizetofit='765,500,#f8f8fa'}" title="{$entry->product_name}" alt="{$entry->product_name}">
                </a>
            </div>
            <div class="detail-view-image-thumb block-clear">
                {capture assign='img'}uploads/_products/product_{$entry->id}/{$entry->fields['image']->value}{/capture}
                {if !empty($entry->fields['image']->value)}
                <div class="col-sm-8">
                    <div class="detail-image-thumb-item">
                        <img src="{CGSmartImage|strip src=$img notag=1 noembed=1 quality=85 filter_resizetofit='223,152,#f8f8fa'}" title="{$entry->product_name}" alt="{$entry->product_name}" data-fullimg="{CGSmartImage|strip src=$img notag=1 noembed=1 quality=85 filter_resizetofit='900,580,#ffffff'}" data-viewimg="{CGSmartImage|strip src=$img notag=1 noembed=1 quality=85 filter_resizetofit='765,500,#f8f8fa'}">
                    </div>
                </div>
                {/if}
                {capture assign='img'}uploads/_products/product_{$entry->id}/{$entry->fields['image2']->value}{/capture}
                {if !empty($entry->fields['image2']->value)}
                <div class="col-sm-8">
                    <div class="detail-image-thumb-item">
                        <img src="{CGSmartImage|strip src=$img notag=1 noembed=1 quality=85 filter_resizetofit='223,152,#f8f8fa'}" title="{$entry->product_name}" alt="{$entry->product_name}" data-fullimg="{CGSmartImage|strip src=$img notag=1 noembed=1 quality=85 filter_resizetofit='900,580,#ffffff'}" data-viewimg="{CGSmartImage|strip src=$img notag=1 noembed=1 quality=85 filter_resizetofit='765,500,#f8f8fa'}">
                    </div>
                </div>
                {/if}
                {capture assign='img'}uploads/_products/product_{$entry->id}/{$entry->fields['image3']->value}{/capture}
                {if !empty($entry->fields['image3']->value)}
                <div class="col-sm-8">
                    <div class="detail-image-thumb-item">
                        <img src="{CGSmartImage|strip src=$img notag=1 noembed=1 quality=85 filter_resizetofit='223,152,#f8f8fa'}" title="{$entry->product_name}" alt="{$entry->product_name}" data-fullimg="{CGSmartImage|strip src=$img notag=1 noembed=1 quality=85 filter_resizetofit='900,580,#ffffff'}" data-viewimg="{CGSmartImage|strip src=$img notag=1 noembed=1 quality=85 filter_resizetofit='765,500,#f8f8fa'}">
                    </div>
                </div>
                {/if}
            </div>
            <div class="detail-view-adv block-clear">
                <div class="col-xl-7"><span class="box-head-adv-item"><i class="icon-adv1"></i><span>Работаем от 1 станка <br>до завода под ключ</span></span></div><div class="col-xl-9"><span class="box-head-adv-item"><i class="icon-adv2"></i><span>Опыт работы с 2005 года <br>в области поставки, запуска <br>оборудования и целых производств.</span></span></div><div class="col-xl-8"><span class="box-head-adv-item"><i class="icon-adv3"></i><span>Гарантия 1 год и пост <br>гарантийное обслуживание</span></span></div>
            </div>
            <div class="detail-view-pricelist">
                <div class="box-catalog-dwl-link"><a href="uploads/catalog.pdf" target="_blank">Каталог продукции.pdf<span>24MB</span></a></div>
            </div>
        </div>
    </div>

    <div class="col-xl-7">
        <div id="claim-form-box">
            <div class="claim-form-box-inner">
                <div class="claim-form-prefix"><p><strong>Получить бесплатную <br>консультацию</strong></p></div>
                <div class="claim-form-content"><div class="ajax-form">
                        <span>Просто напишите, как с вами связаться</span>
                        {FormBuilder form='claimformthree'}
                    </div></div>
            </div>
        </div>
    </div>
</div>
<!--div id="claim-form-box-two" class="claim-form-box-two">
    <div class="container2">
        <div class="ajax-form">{*FormBuilder|strip form='claimform3'*}</div>
    </div>
</div-->

