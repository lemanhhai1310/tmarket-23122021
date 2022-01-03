<?php $data["title"] = "Loc"; ?>
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
            <div class="loc_mb__navbar__txt">Lọc tìm kiếm</div>
        </div>
    </div>
    <div class="uk-navbar-right">
        <a href="" class="uk-navbar-toggle loc_mb__navbar__close" uk-icon="icon: close"></a>
    </div>
</nav>
<div class="loc_mb__section uk-flex uk-flex-column" uk-height-viewport="offset-top: true">
    <div class="loc_mb__section__box1 uk-flex-auto uk-section-xsmall">
        <div class="uk-container">
            <form class="uk-search uk-search-default uk-width-1-1 uk-margin-small">
                <span class="uk-search-icon-flip" uk-search-icon></span>
                <input class="uk-search-input timgiaovien__section1__input" type="search" placeholder="Search">
            </form>
            <div>
                <a class="loc_mb__section__item">Quốc gia</a>
                <a class="loc_mb__section__item">Khoảng giá</a>
                <a class="loc_mb__section__item">Loại giáo viên</a>
                <a class="loc_mb__section__item">Thể loại</a>
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