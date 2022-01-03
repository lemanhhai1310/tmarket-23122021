<?php $data["title"] = "Loc quốc gia"; ?>
<?php $body = '' ?>
<?php $hidden = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="uk-navbar-container uk-navbar-transparent loc_mb__navbar" uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <a href="" class="uk-navbar-item">
            <div class="loc_mb__navbar__txt">Xoá</div>
        </a>
    </div>
    <div class="uk-navbar-center">
        <div class="uk-navbar-item">
            <div class="loc_mb__navbar__txt">Quốc gia</div>
        </div>
    </div>
    <div class="uk-navbar-right">
        <a href="" class="uk-navbar-toggle loc_mb__navbar__close" uk-icon="icon: close"></a>
    </div>
</nav>
<div class="loc_mb__section uk-flex uk-flex-column" uk-height-viewport="offset-top: true">
    <div class="loc_mb__section__box1 uk-flex-auto uk-section-xsmall">
        <div class="uk-container">
            <?php for ($i=0;$i<=5;$i++): ?>
                <div class="timgiaovien__section1__dropdown__item">
                    <label class="uk-grid-8" uk-grid>
                        <div class="uk-width-auto">
                            <input class="uk-checkbox dangnhap__checkbox" type="checkbox" <?= ($i<=1)?'checked':'' ?>>
                        </div>
                        <div class="uk-width-expand">
                            <div class="timgiaovien__section1__dropdown__label" style="margin-top: 4px;">Việt Nam</div>
                        </div>
                    </label>
                </div>
            <?php endfor; ?>
            <div class="timgiaovien__section1__dropdown__item uk-text-center">
                <a href="" class="timgiaovien__section1__dropdown__linkMore">Hiển thị thêm</a>
            </div>
        </div>
    </div>
    <div class="loc_mb__section__box2 uk-section-xsmall">
        <div class="uk-container">
            <a href="" class="loc_mb__section__btn uk-button uk-button-primary uk-width-1-1"><span>Áp dụng</span></a>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>