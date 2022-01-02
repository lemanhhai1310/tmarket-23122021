<?php $data["title"] = "Đăng nhập"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Cảm thấy yêu mến việc học,Chiến thắng được 3 tháng bài học!-->
<?php require "template-parts/layouts/block01.php"; ?>
<!--/Cảm thấy yêu mến việc học,Chiến thắng được 3 tháng bài học!-->
<div class="uk-flex uk-flex-middle" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-section-small uk-width-1-1">
        <div class="uk-container">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-card-body dangnhap__card uk-flex uk-flex-column">
                        <div class="uk-flex-auto item__53">
                            <div class="item__30">
                                <div class="dangnhap__title">Đăng nhập</div>
                            </div>
                            <div class="item__30">
                                <div class="item__20">
                                    <input class="uk-input dangnhap__input" type="text" placeholder="Số điện thoại">
                                </div>
                                <div class="item__20">
                                    <input class="uk-input dangnhap__input" type="text" placeholder="Mật khẩu">
                                </div>
                                <div class="item__20">
                                    <div class="uk-grid-5 uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                                <label><input class="uk-checkbox dangnhap__checkbox" type="checkbox"> <span class="dangnhap__txt1">Duy trì đăng nhập</span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <a href="" class="dangnhap__link">Quên mật khẩu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item__30">
                                <div class="item__28">
                                    <button class="dangnhap__btn uk-button uk-button-primary uk-width-1-1"><span>Đăng nhập</span></button>
                                </div>
                                <div class="item__28">
                                    <div class="uk-text-center">
                                        <span class="dangnhap__txt1 dangnhap__boxLine">Hoặc đăng nhập bằng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__30">
                                <div class="uk-child-width-auto@s uk-flex-center uk-grid-25-m uk-grid-small" uk-grid>
                                    <div>
                                        <a href="" class="dangnhap__btnSocial dangnhap__btnSocial--fb uk-button uk-button-default"><span>Facebook</span></a>
                                    </div>
                                    <div>
                                        <a href="" class="dangnhap__btnSocial dangnhap__btnSocial--google uk-button uk-button-default"><span>Google</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item__53">
                            <div class="uk-text-center dangnhap__txt1">Chưa có tài khoản? <a href="dangky.php" class="dangnhap__link dangnhap__link--underline">Đăng ký</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>