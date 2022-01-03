<?php $data["title"] = "Loc Khoảng giá"; ?>
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
            <div class="loc_mb__navbar__txt">Khoảng giá</div>
        </div>
    </div>
    <div class="uk-navbar-right">
        <a href="" class="uk-navbar-toggle loc_mb__navbar__close" uk-icon="icon: close"></a>
    </div>
</nav>
<div class="loc_mb__section uk-flex uk-flex-column" uk-height-viewport="offset-top: true">
    <div class="loc_mb__section__box1 uk-flex-auto uk-section-xsmall">
        <div class="uk-container">
            <div class="item__10 js-output__d1">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="timgiaovien__section1__dropdown__label">45.000 Vnđ</div>
                    </div>
                    <div class="uk-width-auto">
                        <div class="timgiaovien__section1__dropdown__label">55.000 Vnđ</div>
                    </div>
                </div>
            </div>
            <div class="item__10 boloc__ranger">
                <input type="text" class="js-range-slider" name="my_range" value="" />
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