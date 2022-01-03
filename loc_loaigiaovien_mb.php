<?php $data["title"] = "Loc Loại giáo viên"; ?>
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
            <div class="loc_mb__navbar__txt">Loại giáo viên</div>
        </div>
    </div>
    <div class="uk-navbar-right">
        <a href="" class="uk-navbar-toggle loc_mb__navbar__close" uk-icon="icon: close"></a>
    </div>
</nav>
<div class="loc_mb__section uk-flex uk-flex-column" uk-height-viewport="offset-top: true">
    <div class="loc_mb__section__box1 uk-flex-auto uk-section-xsmall">
        <div class="uk-container">
            <div class="timgiaovien__section1__dropdown__item">
                <label class="uk-grid-8" uk-grid>
                    <div class="uk-width-auto">
                        <input class="uk-checkbox dangnhap__checkbox" type="checkbox" checked>
                    </div>
                    <div class="uk-width-expand">
                        <div class="timgiaovien__section1__dropdown__label item__7">Giáo viên chuyên nghiệp</div>
                        <div class="timgiaovien__section1__dropdown__txt item__7">Các chuyên gia được chứng nhận đều giàu kỹ năng về nghệ thuật giảng dạy ngoại ngữ.</div>
                    </div>
                </label>
            </div>
            <div class="timgiaovien__section1__dropdown__item">
                <label class="uk-grid-8" uk-grid>
                    <div class="uk-width-auto">
                        <input class="uk-checkbox dangnhap__checkbox" type="checkbox">
                    </div>
                    <div class="uk-width-expand">
                        <div class="timgiaovien__section1__dropdown__label item__7">Gia sư cộng đồng</div>
                        <div class="timgiaovien__section1__dropdown__txt item__7">Người bản ngữ hoặc người có trình độ nâng cao có thể giúp bạn thông qua hoạt động dạy kèm hoặc luyện nói không chính thức.</div>
                    </div>
                </label>
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