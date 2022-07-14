<?php require 'layout/Header1-4.html'; ?>
<section id="content">
    <div class="body">
        <div class="message-box-header">
            <div class="message-box-header-top">
                <div class="title">Inbox Message</div>
                <button type="button" class="btn-trash"><i class="fa-solid fa-trash-can"></i></button>
            </div>
            <div class="message-box-header-tab">
                <div class="tab-item active">Primary</div>
                <div class="tab-item">Voucher</div>
            </div>
            <div class="message-box-header-search-box">
                <input type="text" placeholder="Search">
                <button class="btn-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
        <div class="message-box-content">
            <div class="message-box-content-item">
                <div class="left">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div class="right">
                    <div class="top">
                        <div class="title">Bank Account Changed</div>
                        <div class="time">22 Jun 2022</div>
                    </div>
                    <div class="desc">
                        Dear Member, bank account CIMB changed Dear Member, bank account CIMB changed Dear Member, bank
                        account CIMB changed
                    </div>
                </div>

            </div>
            <div class="message-box-content-item active">
                <div class="left">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div class="right">
                    <div class="top">
                        <div class="title">New Promotion</div>
                        <div class="time">18 Jun 2022</div>
                    </div>
                    <div class="desc">
                        You have received a new promo code. Use You have received a new promo code. Use
                    </div>
                </div>

            </div>
            <div class="message-box-content-item">
                <div class="left">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div class="right">
                    <div class="top">
                        <div class="title">New Promotion</div>
                        <div class="time">10 Jun 2022</div>
                    </div>
                    <div class="desc">
                        You have received a new promo code. Use You have received a new promo code. Use
                    </div>
                </div>

            </div>
            <div class="message-box-content-item active">
                <div class="left">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div class="right">
                    <div class="top">
                        <div class="title">New Promotion</div>
                        <div class="time">6 Jun 2022</div>
                    </div>
                    <div class="desc">
                        You have received a new promo code. Use You have received a new promo code. Use
                    </div>
                </div>

            </div>
            <div class="message-box-content-item active">
                <div class="left">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div class="right">
                    <div class="top">
                        <div class="title">Notice</div>
                        <div class="time">28 May 2022</div>
                    </div>
                    <div class="desc">
                        Live casino - Mircogaming is under service Live casino - Mircogaming is under service
                    </div>
                </div>

            </div>
            <div class="message-box-content-item">
                <div class="left">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div class="right">
                    <div class="top">
                        <div class="title">Welcome Bonus expire soon</div>
                        <div class="time">1 Apr 2022</div>
                    </div>
                    <div class="desc">
                        Welcome 2022 bonus special for you Welcome 2022 bonus special for you
                    </div>
                </div>

            </div>
            <div class="message-box-content-item">
                <div class="left">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div class="right">
                    <div class="top">
                        <div class="title">Welcome to Fa Shi Fu</div>
                        <div class="time">29 Mar 2022</div>
                    </div>
                    <div class="desc">
                        Dear member, welcome to Fa Shi Fu, claim Dear member, welcome to Fa Shi Fu, claim
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $(document).on("click", ".tab-item", function () {
            $(".tab-item").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>