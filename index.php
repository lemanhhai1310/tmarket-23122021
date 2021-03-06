<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Cảm thấy yêu mến việc học,Chiến thắng được 3 tháng bài học!-->
<?php require "template-parts/layouts/block01.php"; ?>
<!--/Cảm thấy yêu mến việc học,Chiến thắng được 3 tháng bài học!-->

<!--Banner-->
<div class="uk-cover-container home__banner">
    <img src="images/img1.jpg" alt="" uk-cover="">
    <canvas width="1920" height="800"></canvas>
    <div class="uk-position-cover uk-flex uk-flex-middle">
        <div class="uk-width-1-1 uk-section">
            <div class="uk-container">
                <div uk-grid>
                    <div class="uk-width-2-5@m uk-width-2-3">
                        <div class="item__46">
                            <div class="item__38">
                                <div class="home__banner__title">Teach children English online</div>
                            </div>
                            <div class="item__38">
                                <div class="home__banner__desc">A rewarding job with flexablity and support.</div>
                            </div>
                        </div>
                        <div class="item__46">
                            <a href="" class="uk-button uk-button-primary home__banner__btn"><span>Tìm giáo viên</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Banner-->

<!--Hướng  dân sử dụng-->
<div class="uk-section home__block04">
    <div class="uk-container">
        <div class="item__40">
            <div class="item__60">
                <h3 class="uk-h3 home__title uk-text-center uk-text-uppercase">Trung tâm ngoại ngữ HP - HP english homestay</h3>
            </div>
            <div class="item__60">
                <div class="uk-child-width-expand uk-grid-collapse" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/Studying-rafiki1.png',
                            'txt' => 'Tiến Dũng và Đình Trọng trở lại trước bán kết lượt về',
                        ),
                        array(
                            'src' => 'images/Studying-amico1.png',
                            'txt' => 'Tuyển Việt Nam được động viên sau trận thua Thái Lan',
                        ),
                        array(
                            'src' => 'images/KidsStudyingfromHome-rafiki1.png',
                            'txt' => 'Ảnh vệ tinh cho thấy Nga tăng cường quân ở biên giới Ukraine',
                        ),
                        array(
                            'src' => 'images/Ecoeducation-amico1.png',
                            'txt' => 'Mang Thánh ca Giáng sinh đến khán giả ở TP.HCM',
                        ),
                        array(
                            'src' => 'images/DataTrends-rafiki1.png',
                            'txt' => 'Top 3 Miss World Việt Nam có thời gian đương nhiệm lâu nhất',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                    <div class="home__block04__column">
                        <div class="uk-text-center uk-flex uk-flex-column <?= ($k%2==0)?'':'uk-flex-column-reverse' ?>">
                            <div class="home__block04__box uk-flex uk-flex-center <?= ($k%2==0)?'uk-flex-bottom':'uk-flex-top' ?>">
                                <div class="uk-cover-container home__block04__boxBg uk-display-inline-block uk-border-circle" data-src="<?= $v['src'] ?>" uk-img>
                                    <canvas width="136" height="136"></canvas>
                                </div>
                            </div>
                            <div class="uk-position-relative">
                                <div class="home__block04__polygon"></div>
                                <div class="home__block04__box1 uk-position-cover"></div>
                            </div>
                            <div class="home__block04__box uk-flex <?= ($k%2==0)?'':'uk-flex-bottom' ?>">
                                <div class="uk-flex-center" uk-grid>
                                    <div class="uk-width-4-5@m">
                                        <div class="home__cauhoi__desc"><?= $v['txt'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="item__40">
            <div class="item__44">
                <h3 class="uk-h3 home__title uk-text-center uk-text-uppercase">Hướng  dân sử dụng</h3>
            </div>
            <div class="item__44">
                <div class="uk-child-width-1-2@m" uk-grid>
                    <div>
                        <div class="uk-text-center">
                            <div class="item__14">
                                <div class="item__9">
                                    <div class="home__block02__title">Dành cho học viên</div>
                                </div>
                                <div class="item__9">
                                    <div class="home__cauhoi__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>
                                </div>
                            </div>
                            <div class="item__14">
                                <div class="uk-grid-small uk-child-width-auto uk-flex-center" uk-grid>
                                    <div>
                                        <a href="huongdan.php" class="uk-button uk-button-default home__block02__btn home__block02__btn--c1"><span>Xem chi tiết </span></a>
                                    </div>
                                    <div>
                                        <a href="#modal-media-youtube" uk-toggle class="uk-button uk-button-primary home__block02__btn home__block02__btn--c2"><span>Xem video</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-text-center">
                            <div class="item__14">
                                <div class="item__9">
                                    <div class="home__block02__title">Dành cho giáo viên</div>
                                </div>
                                <div class="item__9">
                                    <div class="home__cauhoi__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>
                                </div>
                            </div>
                            <div class="item__14">
                                <div class="uk-grid-small uk-child-width-auto uk-flex-center" uk-grid>
                                    <div>
                                        <a href="huongdan.php" class="uk-button uk-button-default home__block02__btn home__block02__btn--c1"><span>Xem chi tiết </span></a>
                                    </div>
                                    <div>
                                        <a href="#modal-media-youtube" uk-toggle class="uk-button uk-button-primary home__block02__btn home__block02__btn--c2"><span>Xem video</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Hướng  dân sử dụng-->

<div id="modal-media-youtube" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-dialog-m1120 uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA" width="1920" height="1080" frameborder="0" uk-video uk-responsive></iframe>
    </div>
</div>

<!--Về chúng tôi-->
<div class="uk-section home__about home__bg">
    <div class="uk-container">
        <div class="item__100">
            <div class="item__36">
                <h3 class="uk-h3 home__title uk-text-center uk-text-uppercase">Về chúng tôi</h3>
            </div>
            <div class="item__36">
                <div class="uk-flex-center" uk-grid>
                    <div class="uk-width-4-5@m">
                        <div class="home__cauhoi__desc uk-text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__100">
            <div class="uk-child-width-auto uk-flex-center uk-grid-150-m" uk-grid>
                <div>
                    <div class="uk-text-center home__about__box1">
                        <div class="home__about__box1__txt1">40 000 +</div>
                        <div class="home__about__box1__txt2">Giáo viên</div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center home__about__box1">
                        <div class="home__about__box1__txt1">100 000 +</div>
                        <div class="home__about__box1__txt2">Học viên</div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center home__about__box1">
                        <div class="home__about__box1__txt1">4</div>
                        <div class="home__about__box1__txt2">CƠ sở</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Về chúng tôi-->

<!--Tôi muốn học ...-->
<div class="uk-section home__muonhoc">
    <div class="item__47">
        <div class="uk-container">
            <h3 class="uk-h3 home__title uk-text-center uk-text-uppercase">Tôi muốn học ...</h3>
        </div>
    </div>
    <div class="item__47">
        <div class="uk-container uk-padding-remove" hidden>
            <div class="home__muonhoc__overFlow">
                <div class="uk-child-width-1-4@m uk-child-width-auto uk-flex-nowrap uk-grid-match home__muonhoc__grid uk-grid-40-m uk-grid-small" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/img1.png',
                            'txt' => 'Tiếng anh giao tiếp trẻ em',
                        ),
                        array(
                            'src' => 'images/img2.png',
                            'txt' => 'Tiếng anh giao tiếp người lớn',
                        ),
                        array(
                            'src' => 'images/img3.png',
                            'txt' => 'Tiếng anh giao tiếp văn phòng',
                        ),
                        array(
                            'src' => 'images/img4.png',
                            'txt' => 'Khóa học phát âm',
                        ),
                    );
                    foreach ($data as $item): ?>
                    <div class="home__muonhoc__column">
                        <div class="uk-card uk-card-default home__muonhoc__card">
                            <div class="uk-grid-collapse uk-grid-match" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container">
                                        <img src="<?= $item['src'] ?>" alt="" uk-cover="">
                                        <canvas width="75" height="75"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-padding-small">
                                        <div class="home__muonhoc__card__txt"><?= $item['txt'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="uk-container">
            <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid-match uk-grid-40-m uk-grid-small" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/img1.png',
                        'txt' => 'Tiếng anh giao tiếp trẻ em',
                    ),
                    array(
                        'src' => 'images/img2.png',
                        'txt' => 'Tiếng anh giao tiếp người lớn',
                    ),
                    array(
                        'src' => 'images/img3.png',
                        'txt' => 'Tiếng anh giao tiếp văn phòng',
                    ),
                    array(
                        'src' => 'images/img4.png',
                        'txt' => 'Khóa học phát âm',
                    ),
                );
                foreach ($data as $item): ?>
                    <div class="">
                        <div class="uk-card uk-card-default home__muonhoc__card">
                            <div class="uk-grid-collapse uk-grid-match" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container">
                                        <img src="<?= $item['src'] ?>" alt="" uk-cover="">
                                        <canvas width="75" height="75"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-padding-small home__muonhoc__card__body">
                                        <div class="home__muonhoc__card__txt"><?= $item['txt'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Tôi muốn học ...-->
<!--Trở thành giáo viên-->
<div class="uk-section home__bg home__block01" uk-toggle="cls: uk-section-xlarge; mode: media; media: @m">
    <div class="uk-container">
        <div class="uk-grid-161-m" uk-grid>
            <div class="uk-width-expand">
                <div class="item__24">
                    <h3 class="uk-h3 home__title">Bài học 1 thầy kèm 1 trò trong hơn 150 ngôn ngữ</h3>
                </div>
                <div class="item__24">
                    <p class="home__cauhoi__desc">Học với những giáo viên được chứng nhận với các kinh nghiệm được chứng minh</p>
                    <p class="home__cauhoi__desc">Tìm giáo viên từ trên khắp thế giới chia sẻ ngôn ngữ, tiếng địa phương và văn hóa của họ</p>
                    <p class="home__cauhoi__desc">Học theo nhịp điệu của bạn mà không cần lo lắng gì về những lịch trình cứng nhắc và học phí cố định</p>
                    <div><a href="" class="home__bg__link">Trở thành giáo viên</a></div>
                </div>
            </div>
            <div class="uk-width-auto@m">
                <div class="uk-position-relative uk-visible@m">
                    <div class="uk-cover-container home__bg__box1">
                        <canvas width="506" height="477"></canvas>
                    </div>
                    <img class="home__bg__img" src="images/Rectangle8.png" alt="">
                </div>
                <div class="uk-hidden@m uk-position-relative home__block01__box3">
                    <div class="uk-cover-container home__block01__box1 uk-display-inline-block"></div>
                    <div class="home__block01__box2 uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/Rectangle8.png" uk-img></div>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-2@m uk-grid-161-m uk-flex-middle" uk-grid>
            <div>
                <div class="uk-cover-container uk-position-z-index">
                    <img src="images/Rectangle10.png" alt="" uk-cover="">
                    <canvas width="520" height="761"></canvas>
                </div>
            </div>
            <div>
                <div class="item__24">
                    <h3 class="uk-h3 home__title">Trở thành giáo viên</h3>
                </div>
                <div class="item__24">
                    <p class="home__cauhoi__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <p class="home__cauhoi__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <div><a href="" class="home__bg__link">Trở thành giáo viên</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Trở thành giáo viên-->
<!--Câu hỏi thường gặp-->
<div class="uk-section home__cauhoi">
    <div class="uk-container">
        <div class="item__35">
            <div class="item__20">
                <h3 class="uk-h3 home__title uk-text-center">Câu hỏi thường gặp</h3>
            </div>
            <div class="item__20">
                <div class="uk-flex-center" uk-grid>
                    <div class="uk-width-1-3@m">
                        <div class="uk-text-center home__cauhoi__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__35">
            <div class="uk-child-width-1-2@m" uk-grid>
                <?php for ($i=0;$i<=5;$i++): ?>
                <div>
                    <div class="home__cauhoi__box">
                        <div class="item__9">
                            <h4 class="uk-h4 home__cauhoi__box__title">Lorem Ipsum is simply dummy text?</h4>
                        </div>
                        <div class="item__9">
                            <div class="home__cauhoi__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<!--/Câu hỏi thường gặp-->

<!--Góp ý về chúng tôi-->
<div class="uk-section home__gopy uk-visible@m">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-65-m uk-flex-middle" uk-grid>
            <div class="uk-flex-last@m">
                <div class="uk-cover-container">
                    <img src="images/Rectangle232.png" alt="" uk-cover="">
                    <canvas width="988" height="1014"></canvas>
                </div>
            </div>
            <div>
                <div class="item__34">
                    <div class="item__28 uk-light">
                        <h3 class="uk-h3 home__title uk-text-center">Góp ý về chúng tôi</h3>
                    </div>
                    <div class="item__28">
                        <div class="item__20">
                            <input class="uk-input home__gopy__input" type="text" placeholder="Tên của bạn">
                        </div>
                        <div class="item__20">
                            <input class="uk-input home__gopy__input" type="text" placeholder="Số điện thoại">
                        </div>
                        <div class="item__20">
                            <input class="uk-input home__gopy__input" type="text" placeholder="Email">
                        </div>
                        <div class="item__20">
                            <input class="uk-input home__gopy__input" type="text" placeholder="Địa chỉ">
                        </div>
                        <div class="item__20">
                            <textarea class="uk-textarea home__gopy__input" rows="5" placeholder="Nội dung góp ý"></textarea>
                        </div>
                    </div>
                </div>
                <div class="item__34">
                    <div class="uk-text-center">
                        <button class="home__gopy__btnSend uk-button uk-button-primary"><span>Gửi góp ý</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Góp ý về chúng tôi-->
<?php require "template-parts/layouts/footer.php"; ?>