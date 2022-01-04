<?php $data["title"] = "Thông tin chi tiết giáo viên"; ?>
<?php $body = 'timgiaovien' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="timgiaovien__section1 uk-section-xsmall uk-visible@m" uk-sticky="offset: 75">
    <div class="uk-container">
        <div class="uk-child-width-auto uk-grid-10 uk-grid-30-m" uk-grid>
            <div>
                <a href="" class="timgiaovien__section1__btn uk-button uk-button-default"><span>Quốc gia</span></a>
                <div class="timgiaovien__section1__dropdown" uk-dropdown="mode: click">
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
                    <div class="uk-grid-collapse" uk-grid>
                        <div class="timgiaovien__section1__dropdown__column uk-width-1-2">
                            <a href="" class="timgiaovien__section1__dropdown__btn uk-button uk-button-primary uk-width-1-1"><span>Xoá</span></a>
                        </div>
                        <div class="timgiaovien__section1__dropdown__column uk-width-expand">
                            <a href="" class="timgiaovien__section1__dropdown__btn uk-button uk-button-primary uk-width-1-1"><span>Áp dụng</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="" class="timgiaovien__section1__btn uk-button uk-button-default"><span>Khoảng giá</span></a>
                <div class="timgiaovien__section1__dropdown" uk-dropdown="mode: click">
                    <div class="timgiaovien__section1__dropdown__item">
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
                    <div class="uk-grid-collapse" uk-grid>
                        <div class="timgiaovien__section1__dropdown__column uk-width-expand">
                            <a href="" class="timgiaovien__section1__dropdown__btn uk-button uk-button-primary uk-width-1-1"><span>Áp dụng</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="" class="timgiaovien__section1__btn uk-button uk-button-default"><span>Loại giáo viên</span></a>
                <div class="timgiaovien__section1__dropdown" uk-dropdown="mode: click">
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
                    <div class="uk-grid-collapse" uk-grid>
                        <div class="timgiaovien__section1__dropdown__column uk-width-expand">
                            <a href="" class="timgiaovien__section1__dropdown__btn uk-button uk-button-primary uk-width-1-1"><span>Áp dụng</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="" class="timgiaovien__section1__btn uk-button uk-button-default"><span>Thể loại</span></a>
                <div class="timgiaovien__section1__dropdown" uk-dropdown="mode: click">
                    <div class="timgiaovien__section1__dropdown__item">
                        <label class="uk-grid-8" uk-grid>
                            <div class="uk-width-auto">
                                <input class="uk-checkbox dangnhap__checkbox" type="checkbox" checked>
                            </div>
                            <div class="uk-width-expand">
                                <div class="timgiaovien__section1__dropdown__label" style="margin-top: 4px;">Kinh doanh đàm phán</div>
                            </div>
                        </label>
                    </div>
                    <div class="timgiaovien__section1__dropdown__item">
                        <label class="uk-grid-8" uk-grid>
                            <div class="uk-width-auto">
                                <input class="uk-checkbox dangnhap__checkbox" type="checkbox" checked>
                            </div>
                            <div class="uk-width-expand">
                                <div class="timgiaovien__section1__dropdown__label" style="margin-top: 4px;">Luyện thi Toeic</div>
                            </div>
                        </label>
                    </div>
                    <div class="timgiaovien__section1__dropdown__item">
                        <label class="uk-grid-8" uk-grid>
                            <div class="uk-width-auto">
                                <input class="uk-checkbox dangnhap__checkbox" type="checkbox">
                            </div>
                            <div class="uk-width-expand">
                                <div class="timgiaovien__section1__dropdown__label" style="margin-top: 4px;">Luyện tập giao tiếp</div>
                            </div>
                        </label>
                    </div>
                    <div class="timgiaovien__section1__dropdown__item">
                        <label class="uk-grid-8" uk-grid>
                            <div class="uk-width-auto">
                                <input class="uk-checkbox dangnhap__checkbox" type="checkbox">
                            </div>
                            <div class="uk-width-expand">
                                <div class="timgiaovien__section1__dropdown__label" style="margin-top: 4px;">Kinh doanh đàm phán</div>
                            </div>
                        </label>
                    </div>
                    <div class="timgiaovien__section1__dropdown__item">
                        <label class="uk-grid-8" uk-grid>
                            <div class="uk-width-auto">
                                <input class="uk-checkbox dangnhap__checkbox" type="checkbox">
                            </div>
                            <div class="uk-width-expand">
                                <div class="timgiaovien__section1__dropdown__label" style="margin-top: 4px;">Luyện thi Toeic</div>
                            </div>
                        </label>
                    </div>
                    <div class="timgiaovien__section1__dropdown__item">
                        <label class="uk-grid-8" uk-grid>
                            <div class="uk-width-auto">
                                <input class="uk-checkbox dangnhap__checkbox" type="checkbox">
                            </div>
                            <div class="uk-width-expand">
                                <div class="timgiaovien__section1__dropdown__label" style="margin-top: 4px;">Luyện tập giao tiếp</div>
                            </div>
                        </label>
                    </div>
                    <div class="timgiaovien__section1__dropdown__item uk-text-center">
                        <a href="" class="timgiaovien__section1__dropdown__linkMore">Hiển thị thêm</a>
                    </div>
                    <div class="uk-grid-collapse" uk-grid>
                        <div class="timgiaovien__section1__dropdown__column uk-width-1-2">
                            <a href="" class="timgiaovien__section1__dropdown__btn uk-button uk-button-primary uk-width-1-1"><span>Xoá</span></a>
                        </div>
                        <div class="timgiaovien__section1__dropdown__column uk-width-expand">
                            <a href="" class="timgiaovien__section1__dropdown__btn uk-button uk-button-primary uk-width-1-1"><span>Áp dụng</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <form class="uk-search uk-search-default uk-width-1-1">
                    <span class="uk-search-icon-flip" uk-search-icon></span>
                    <input class="uk-search-input timgiaovien__section1__input" type="search" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="uk-overlay uk-overlay-primary mask_menu"></div>
<!--Cảm thấy yêu mến việc học,Chiến thắng được 3 tháng bài học!-->
<?php require "template-parts/layouts/block01.php"; ?>
<!--/Cảm thấy yêu mến việc học,Chiến thắng được 3 tháng bài học!-->
<div class="uk-section-xsmall timgiaovien__section2 chitietgiaovien__section">
    <div class="uk-container">
        <div class="uk-grid-10" uk-grid>
            <div class="uk-width-expand">
                <div class="item__15">
                    <div class="uk-cover-container chitietgiaovien__section__boxVideo">
                        <iframe class="" src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1480" height="610" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
                    </div>
                </div>
                <div class="item__15">
                    <div class="uk-card uk-card-default chitietgiaovien__section__card1">
                        <div class="chitietgiaovien__section__card1__header">
                            <div class="uk-grid-20-m uk-grid-small" uk-grid uk-toggle="cls: uk-flex-middle; mode: media; media: (max-width: 959.8px)">
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container uk-border-circle">
                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                        <canvas width="140" height="140"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-grid-10" uk-grid>
                                        <div class="uk-width-expand">
                                            <h1 class="uk-h1 chitietgiaovien__section__card1__name">Trương HUyền</h1>
                                            <div class="chitietgiaovien__section__card1__giaovien">Giáo viên chuyên nghiệp</div>
                                        </div>
                                        <div class="uk-width-auto@m">
                                            <div class="uk-grid-10 uk-flex-middle uk-grid-15-m" uk-grid>
                                                <div class="uk-width-expand">
                                                    <a href="" class="chitietgiaovien__section__card1__btnrate uk-button uk-button-default uk-button-small"><span>Viết đánh giá</span></a>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <a href="" class="chitietgiaovien__section__card1__iconshare"></a>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <a href="" class="chitietgiaovien__section__card1__iconwishlist"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-child-width-1-3@m" uk-grid>
                                        <div>
                                            <div>Tổng thời gian giảng dạy</div>
                                            <div>15 000 h</div>
                                        </div>
                                        <div>

                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chitietgiaovien__section__card1__body">

                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-3@m">

            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>