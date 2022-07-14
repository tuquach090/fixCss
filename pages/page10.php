<?php require 'layout/TheHeader.html'; ?>
<section id="content">
    <!--Start info user -->
    <section class="info-user">
        <h2 class="font-weight-bold" style="font-size: 20px;">Welcome,</h2>
        <div class="info">
            <!-- Name -->
            <div class="name">
                <img src="assets/images/vip.png" alt="" width="50px" height="50px" />
                <div>
                    <div class="name-user font-weight-bold">{Username}</div>
                    <div class="vip-user">(VIP level)</div>
                </div>
            </div>
            <!-- Transfer -->
            <div class="transfer">
                <label class="switch">
                    <input type="checkbox" checked />
                    <span class="slider round"></span>
                </label>
                <p>Auto Transfer</p>
            </div>
        </div>

        <div class="additional">
            <div class="wallet">
                <img src="assets/images/2657042.png" alt="" width="50px" height="50px" />
                <div class="name">
                    <p>All Wallet</p>
                    <span>1,350,700.90</span>
                </div>
            </div>
            <div class="voucher">
                <img src="assets/images/7632188.png" alt="" width="50px" height="50px" />
                <div class="name">
                    <p>Voucher</p>
                    <span>promotions</span>
                </div>
            </div>
        </div>
    </section>
    <!-- End info user  -->

    <div id="content-main">
        <form action="">
            <!-- Start withdrawal  -->
            <section class="withdrawal">
                <div class="title">
                    <h2>Withdrawal</h2>
                    <a href="#"><img src="assets/images/3585896.png" alt=""></a>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-white w-100" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <div>
                                        <h3 class="font-weight-bold">Withdrawal Condition</h3>
                                        <p>Current turnover/ Target Turnover</p>
                                        <span>100/ 1,000</span>
                                    </div>
                                    <img src="assets/images/271220-1.png" alt="">
                                </button>
                            </h5>
                        </div>

                    </div>
                    <div id="collapseOne" class="collapse show mt-3 " aria-labelledby="headingOne"
                        data-parent="#accordion">
                        <div class="card-body text-primary ">
                            <div class="promotion">
                                <p>{Promotion name here} Welcome Bonus</p>
                                <span>100/ 1,000</span>
                            </div>
                            <div class="promotion">
                                <p>{Promotion name here} Welcome Bonus</p>
                                <span>800/ 1,000</span>
                            </div>
                            <div class="promotion">
                                <p>{Promotion name here} Welcome Bonus</p>
                                <span>2,800/ 8,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End  withdrawal -->

            <!-- Start bank -->
            <section class="bank">
                <div class="title">
                    <h2>Bank</h2>
                </div>
                <select class="custom-select-lg custom-select mb-3 select-bank text-center">
                    <option selected>-Select Bank-</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </section>
            <!-- End bank -->
            <!-- Start account name -->
            <section class="accountName">
                <div class="title">
                    <h2>Account Name</h2>
                </div>
                <input type="text" class="form-control bg-dark text-light border-0 px-3 py-4" placeholder="Johnny Depp">
            </section>
            <!-- End account name -->

            <!-- Start account name -->
            <div class="accountNo">
                <div class="title">
                    <h2>Account No.</h2>
                </div>
                <input type="number" class="form-control bg-dark text-light border-0 px-3 py-4"
                    placeholder="Account Number">
            </div>
            <!-- End account name -->
            <!-- Start account name -->
            <div class="amount">
                <div class="title">
                    <h2>Amount</h2>
                </div>
                <input type="text" class="form-control bg-white text-black border-0 px-3 py-4"
                    placeholder="Min. 300.00/ Max 300,000.00">
                <div class="estimates">
                    <button>300</button>
                    <button>500</button>
                    <button>1,000</button>
                </div>

            </div>
            <!-- End account name -->
            
            <p class="limit-balance">Daily Limit Balance: <span>300,000.00</span></p>
            <p class="count-balance">Daily Limit Balance: <span>Unlimited</span></p>


            <input type="submit" class="btn w-100 submit-withdraw" value="Withdraw">
        </form>

    </div>
</section>