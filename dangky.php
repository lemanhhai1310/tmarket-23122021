<?php $data["title"] = "Đăng ký"; ?>
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
                                <div class="dangnhap__title">Đăng ký</div>
                            </div>
                            <div class="item__30">
                                <div class="item__20">
                                    <input class="uk-input dangnhap__input" type="text" placeholder="Email hoặc số điện thoại">
                                </div>
                                <div class="item__20">
                                    <input class="uk-input dangnhap__input" type="text" placeholder="Mật khẩu">
                                </div>
                                <div class="item__20">
                                    <input class="uk-input dangnhap__input" type="text" placeholder="Nhập lại mật khẩu">
                                </div>
                                <div class="item__20">
                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">Chọn đối tượng</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                        <button class="dangky__btnSelect uk-width-1-1 uk-button uk-button-default uk-position-relative" type="button" tabindex="-1">
                                            <span></span>
                                            <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item__30">
                                <div class="item__28">
                                    <button class="dangnhap__btn uk-button uk-button-primary uk-width-1-1"><span>Đăng ký</span></button>
                                </div>
                                <div class="item__28">
                                    <div class="uk-text-center">
                                        <div class="dangky__line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item__53">
                            <div class="uk-text-center dangnhap__txt1">Đã có tài khoản? <a href="dangnhap.php" class="dangnhap__link dangnhap__link--underline">Đăng nhập</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>