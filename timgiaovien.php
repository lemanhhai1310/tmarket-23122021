<?php $data["title"] = "Tìm giáo viên"; ?>
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
<div class="uk-section-xsmall timgiaovien__section2">
    <div class="uk-container">
        <div class="item__30">
            <div class="uk-grid-12" uk-grid>
                <div class="uk-width-1-1 uk-hidden@m">
                    <div class="uk-grid-11" uk-grid>
                        <div class="uk-width-auto">
                            <a href="" class="timgiaovien__section1__btn uk-button uk-button-default" uk-icon="settings"></a>
                        </div>
                        <div class="uk-width-expand">
                            <form class="uk-search uk-search-default uk-width-1-1">
                                <span class="uk-search-icon-flip" uk-search-icon></span>
                                <input class="uk-search-input timgiaovien__section1__input" type="search" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1">
                    <div class="item__23">
                        <div class="uk-grid-5 uk-child-width-auto@s uk-flex-middle" uk-grid>
                            <div>
                                <div class="timgiaovien__section2__title">Tìm giáo viên Tiếng Anh tốt nhất cho bạn.</div>
                            </div>
                            <div>
                                <div class="uk-button uk-button-secondary timgiaovien__section2__btnLabel">
                                    <span>5000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item__23">
                        <div class="timgiaovien__section2__box1 uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/MaskGrouptimgiaovien.png" uk-img>
                            <div class="timgiaovien__section2__box1__title">Lorem Ipsum is simply dummy text</div>
                            <div class="timgiaovien__section2__box1__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php for ($j=0;$j<=5;$j++): ?>
        <div class="item__30">
            <div class="timgiaovien__section2__card uk-card uk-card-default uk-card-body">
                <div class="uk-grid-divider uk-grid-small" uk-grid uk-toggle="cls: uk-grid-medium; mode: media; media: @m">
                    <div class="uk-width-2-5@m">
                        <div class="uk-grid-small uk-grid-20-m" uk-grid>
                            <div class="uk-width-auto">
                                <div class="timgiaovien__section2__giaovienLeft uk-text-center">
                                    <div class="item__10">
                                        <div class="item__9">
                                            <div class="uk-cover-container uk-border-circle">
                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                <canvas width="140" height="140"></canvas>
                                            </div>
                                        </div>
                                        <div class="item__9">
                                            <div class="timgiaovien__section2__giaovienLeft__txt">GMT +7</div>
                                        </div>
                                    </div>
                                    <div class="item__10">
                                        <div class="item__9">
                                            <a href="chitietgiaovien.php" class="uk-button uk-button-primary timgiaovien__section2__giaovienLeft__btn"><span>Đăng ký</span></a>
                                        </div>
                                        <div class="item__9 uk-hidden@m">
                                            <a href="chitietgiaovien.php" class="timgiaovien__section2__giaovienRight__linkhocthu">Học thử ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="timgiaovien__section2__giaovienRight">
                                    <div class="item__18">
                                        <div class="item__14">
                                            <div class="item__10 timgiaovien__section2__giaovienRight__name">Trương HUyền</div>
                                            <div class="item__10 timgiaovien__section2__giaovienRight__txt">Giáo viên chuyên nghiệp</div>
                                        </div>
                                        <div class="item__14">
                                            <div class="timgiaovien__section2__giaovienRight__divider"></div>
                                        </div>
                                        <div class="item__14">
                                            <div class="uk-grid-8 uk-child-width-auto uk-flex-middle" uk-grid>
                                                <div class="uk-flex uk-flex-middle">
                                                    <span class="timgiaovien__section2__giaovienRight__txt" style="position:relative;top: 3px;">5.0</span>
                                                </div>
                                                <div>
                                                    <div class="uk-grid-5 uk-child-width-auto uk-flex-top" uk-grid>
                                                        <div>
                                                            <img src="images/star.png" alt="">
                                                        </div>
                                                        <div>
                                                            <img src="images/star.png" alt="">
                                                        </div>
                                                        <div>
                                                            <img src="images/star.png" alt="">
                                                        </div>
                                                        <div>
                                                            <img src="images/star.png" alt="">
                                                        </div>
                                                        <div>
                                                            <img src="images/star.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item__18">
                                        <div class="uk-grid-10" uk-grid>
                                            <div class="uk-width-1-1">
                                                <div class="timgiaovien__section2__giaovienRight__label">Tổng thời gian giảng dạy</div>
                                                <div class="timgiaovien__section2__giaovienRight__value">15 000 h</div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="timgiaovien__section2__giaovienRight__label">Khoá học đang dạy</div>
                                                <div class="timgiaovien__section2__giaovienRight__value">15</div>
                                            </div>
                                            <div class="uk-width-auto@s">
                                                <div class="timgiaovien__section2__giaovienRight__label">Học viên</div>
                                                <div class="timgiaovien__section2__giaovienRight__value">150</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item__18 uk-visible@m">
                                        <a href="chitietgiaovien.php" class="timgiaovien__section2__giaovienRight__linkhocthu">Học thử ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <ul class="uk-subnav uk-subnav-pill timgiaovien__section2__tab uk-flex-center uk-flex-left@m" uk-switcher>
                            <li class="uk-active"><a href="#">Video tự giới thiệu</a></li>
                            <li><a href="#">Nội dung tự giới thiệu</a></li>
                            <li><a href="#">Lịch giảng dạy hiện tại</a></li>
                        </ul>

                        <ul class="uk-switcher uk-margin">
                            <li>
                                <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1262" height="480" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
                            </li>
                            <li>
                                <p class="timgiaovien__section2__contentTab__txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </li>
                            <li>
                                <div class="uk-overflow-auto">
                                    <table class="uk-table uk-table-small timgiaovien__section2__lichgiaovien">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>T5 - 30</th>
                                            <th>T6 - 01</th>
                                            <th>T7 - 02</th>
                                            <th>CN - 03</th>
                                            <th>T2 - 04</th>
                                            <th>T6 - 05</th>
                                            <th>T7 - 06</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>00 - 04</th>
                                            <?php for ($i=0;$i<=6;$i++): ?>
                                                <td class="<?= ($i==1)?'uk-active':'' ?>"></td>
                                            <?php endfor; ?>
                                        </tr>
                                        <tr>
                                            <th>04 - 08</th>
                                            <?php for ($i=0;$i<=6;$i++): ?>
                                                <td class="<?= ($i==2)?'uk-active':'' ?>"></td>
                                            <?php endfor; ?>
                                        </tr>
                                        <tr>
                                            <th>08 - 12</th>
                                            <?php for ($i=0;$i<=6;$i++): ?>
                                                <td class="<?= ($i==3)?'uk-active':'' ?>"></td>
                                            <?php endfor; ?>
                                        </tr>
                                        <tr>
                                            <th>12 - 16</th>
                                            <?php for ($i=0;$i<=6;$i++): ?>
                                                <td class="<?= ($i==4)?'uk-active':'' ?>"></td>
                                            <?php endfor; ?>
                                        </tr>
                                        <tr>
                                            <th>16 - 20</th>
                                            <?php for ($i=0;$i<=6;$i++): ?>
                                                <td class="<?= ($i==5)?'uk-active':'uk-active' ?>"></td>
                                            <?php endfor; ?>
                                        </tr>
                                        <tr>
                                            <th>20 - 24</th>
                                            <?php for ($i=0;$i<=6;$i++): ?>
                                                <td class="<?= ($i==4)?'':'' ?>"></td>
                                            <?php endfor; ?>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endfor; ?>
        <div class="item__30 uk-text-center">
            <a href="" class="uk-button uk-button-primary timgiaovien__section2__loadMoreBtn"><span>Hiển thị thêm</span></a>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>