<?php $data["title"] = "Chọn đối tượng"; ?>
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
                                <div class="dangnhap__title">Chọn đối tượng</div>
                            </div>
                            <div class="item__30">
                                <div class="uk-child-width-1-2 uk-grid-small uk-grid-20-m" uk-grid>
                                    <label>
                                        <input class="uk-radio chondoituong__radio" type="radio" name="radio2" checked>
                                        <div class="chondoituong__card uk-card uk-card-default uk-card-body uk-text-center">
                                            <div class="uk-text-center item__12">
                                                <div class="uk-cover-container uk-display-inline-block">
                                                    <img src="images/giaovien.png" alt="" uk-cover="">
                                                    <canvas width="90" height="90"></canvas>
                                                </div>
                                            </div>
                                            <div class="chondoituong__name item__12">Giáo viên</div>
                                        </div>
                                    </label>
                                    <label>
                                        <input class="uk-radio chondoituong__radio" type="radio" name="radio2">
                                        <div class="chondoituong__card uk-card uk-card-default uk-card-body uk-text-center">
                                            <div class="uk-text-center item__12">
                                                <div class="uk-cover-container uk-display-inline-block">
                                                    <img src="images/hocvien.png" alt="" uk-cover="">
                                                    <canvas width="90" height="90"></canvas>
                                                </div>
                                            </div>
                                            <div class="chondoituong__name item__12">Học viên</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="item__30">
                                <div class="item__20">
                                    <button class="dangnhap__btn uk-button uk-button-primary uk-width-1-1"><span>Tiếp theo</span></button>
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