<?php require 'layout/Header1-4.html'; ?>
<section id="content" style="margin-top: 65px;">
    <div class="body">
        <div class="infomations">
            <div class="breadcrumb-custom">
                Transfer / Promotions
            </div>
            <div class="infomation-detail wallet">
                <div class="infomation-wallet">
                    <h4>Main Wallet</h4>
                    <div class="infomation-wallet-amount">
                        <div class="amount">
                            89,120,367.90
                        </div>
                        <a href="" class="icon">
                            <i class="fa-solid fa-arrow-rotate-right"></i>
                        </a>
                    </div>
                    <button type="button" class="btn btn-light btn-sm btn-restore">
                        Restore All
                    </button>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="wallet-voucher">
                <a href="" class="wallet-voucher-item">
                    <div class="wallet-voucher-item-icon">
                        <img src="assets/images/transfer/transfer-3x.png" alt="">
                    </div>
                    <div class="wallet-voucher-item-info">
                        <h4>Transfer</h4>
                    </div>
                </a>
                <div class="wallet-voucher-line"></div>
                <a href="" class="wallet-voucher-item">
                    <div class="wallet-voucher-item-icon">
                        <img src="assets/images/deposit/deposit-3x.png" alt="">
                    </div>
                    <div class="wallet-voucher-item-info">
                        <h4>Deposit</h4>
                    </div>
                </a>
            </div>
            <div class="wp-widget-slider">
                <div class="widget-slider">
                    <div class="widget-slider-item">
                        <div class="title">
                            Sports Wallet
                        </div>
                        <div class="desc">
                            <div class="amount">1,000.0</div>
                            <div class="icon">
                                <img src="assets/images/arrow-bottom/arrow-bottom-3x.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="widget-slider-item">
                        <div class="title">
                            Live Wallet
                        </div>
                        <div class="desc">
                            <div class="amount">36,800.00</div>
                            <div class="icon">
                                <img src="assets/images/arrow-bottom/arrow-bottom-3x.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="widget-slider-item">
                        <div class="title">
                            Sports Wallet
                        </div>
                        <div class="desc">
                            <div class="amount">1,000.0</div>
                            <div class="icon">
                                <img src="assets/images/arrow-bottom/arrow-bottom-3x.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="widget-slider-item">
                        <div class="title">
                            Live Wallet
                        </div>
                        <div class="desc">
                            <div class="amount">36,800.00</div>
                            <div class="icon">
                                <img src="assets/images/arrow-bottom/arrow-bottom-3x.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="widget-slider-item">
                        <div class="title">
                            Sports Wallet
                        </div>
                        <div class="desc">
                            <div class="amount">1,000.0</div>
                            <div class="icon">
                                <img src="assets/images/arrow-bottom/arrow-bottom-3x.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="widget-slider-item">
                        <div class="title">
                            Live Wallet
                        </div>
                        <div class="desc">
                            <div class="amount">36,800.00</div>
                            <div class="icon">
                                <img src="assets/images/arrow-bottom/arrow-bottom-3x.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-slider-detail">
                    <div class="detail-item highlight">
                        <div class="text">Sports Wallet</div>
                        <div class="amount">1,000.00</div>
                    </div>
                    <hr>
                    <div class="detail-item">
                        <div class="text">CMD Sports</div>
                        <div class="amount">800.00</div>
                    </div>
                    <div class="detail-item">
                        <div class="text">M8</div>
                        <div class="amount">100.00</div>
                    </div>
                    <div class="detail-item">
                        <div class="text">United Gaming</div>
                        <div class="amount">100.00</div>
                    </div>
                </div>
            </div>

            <div class="widgets-form">
                <div class="widget-form-item">
                    <div class="title">Amount</div>
                    <input type="text" class="form-item" placeholder="300.00 / Max 300,000.00">
                    <div class="input-select">
                        <button type="button" class="input-select-item">300</button>
                        <button type="button" class="input-select-item">500</button>
                        <button type="button" class="input-select-item">1,000</button>
                    </div>
                </div>
                <div class="widget-form-item">
                    <div class="title">Transfer From</div>
                    <select name="" class="form-item place-center">
                        <option value="">- Select transfer to -</option>
                        <option value="">Value 1</option>
                        <option value="">Value 2</option>
                        <option value="">Value 3</option>
                    </select>
                </div>
                <div class="widget-form-item">
                    <div class="title">Special Code</div>
                    <input type="text" class="form-item place-center" placeholder="Insert Spectial Code">
                </div>
                <div class="widget-form-item">
                    <div class="title">Promotion</div>
                    <select name="" class="form-item place-center">
                        <option value="">- Select promotion to apply -</option>
                        <option value="">Value 1</option>
                        <option value="">Value 2</option>
                        <option value="">Value 3</option>
                    </select>
                </div>
                <button type="button" class="btn-widget-form-transfer">Transfer</button>
            </div>
        </div>
    </div>

    <script>
        
        $(document).ready(function () {
            $(".widget-slider .widget-slider-item .desc .icon").addClass("arrow-up");
                $(".widget-slider .widget-slider-item .desc .icon").find("img").attr("src", "assets/images/arrow-up/arrow-up-3x.png");
                $(".widget-slider-detail").slideDown("slow");
            $(document).on("click", ".widget-slider .widget-slider-item .desc .icon", function () {
                $(this).addClass("arrow-up");
                $(this).find("img").attr("src", "assets/images/arrow-up/arrow-up-3x.png");
                $(".widget-slider-detail").slideDown("slow");
            });
            $(document).on("click", ".arrow-up", function () {
                $(this).removeClass("arrow-up");
                $(this).find("img").attr("src", "assets/images/arrow-bottom/arrow-bottom-3x.png");
                $(".widget-slider-detail").slideUp("slow");
            });
        });
    </script>
</section>