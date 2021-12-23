<?php $data["title"] = "Trang chủ"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Góp ý về chúng tôi-->
<div class="uk-section home__gopy">
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