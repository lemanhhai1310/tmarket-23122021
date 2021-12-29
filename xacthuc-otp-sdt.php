<?php $data["title"] = "Xác thực OTp - sđt"; ?>
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
                                <div class="dangnhap__title">Xác thực tài khoản</div>
                            </div>
                            <div class="item__30">
                                <div class="item__20">
                                    <div class="uk-text-center dangnhap__txt1">Nhập mã xác thực OTP được gửi đến số điện thoại: <a href="" class="dangnhap__link">0966 123 456</a></div>
                                </div>
                                <div class="item__20">
                                    <input class="uk-input dangnhap__input" type="text" placeholder="Nhập mã">
                                </div>
                            </div>
                            <div class="item__30">
                                <div class="item__20">
                                    <button class="dangnhap__btn uk-button uk-button-primary uk-width-1-1"><span>Đồng ý</span></button>
                                </div>
                                <div class="item__20">
                                    <div class="item__8">
                                        <div class="uk-text-center dangnhap__txt1">Bạn không nhận được mã?</div>
                                    </div>
                                    <div class="item__8">
                                        <div class="uk-text-center dangnhap__txt1"><a href="#" class="dangnhap__link dangnhap__link--underline">Gửi lại (00:59)</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item__53">
                            <div class="item__27">
                                <div class="uk-text-center">
                                    <div class="dangky__line"></div>
                                </div>
                            </div>
                            <div class="item__27">
                                <div class="uk-text-center dangnhap__txt1">Đã có tài khoản? <a href="dangnhap.php" class="dangnhap__link dangnhap__link--underline">Đăng nhập</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>