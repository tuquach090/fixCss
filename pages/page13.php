<?php require 'layout/TheHeader.html'; ?>
<section id="content">
    <form action="">
        <div id="content-main">
            <section class="deposit">
                <div class="title ">
                    <h2>Deposit</h2>
                    <a href="#"><img src="assets/images/3585896.png" alt=""></a>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="note-deposit">Choose deposit account</p>
                    <a href="#" class="btn-help">Help</a>
                </div>

                <!-- Start bank -->
                <section class="deposit-bank">
                    <div class="title">
                        <h2>Deposit Bank</h2>
                    </div>
                    <select class="custom-select-lg custom-select mb-3 select-bank ">
                        <option selected>{Bank Name}</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </section>
                <!-- End bank -->
                <!-- Start account name -->
                <div class="accountNo">
                    <div class="title">
                        <h2>Account No.</h2>
                    </div>
                    <input type="number" class="form-control bg-light text-dark border-0 px-3 py-4"
                        placeholder="{Bank Number}">
                </div>
                <!-- End account name -->
                <!-- Start account name -->
                <section class="accountName">
                    <div class="title">
                        <h2>Account Name</h2>
                    </div>
                    <input type="text" class="form-control bg-light text-dark border-0 px-3 py-4"
                        placeholder="{Bank Account Name}">
                </section>
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

                <p class="count-balance">Dear members, When you transfer a deposit to {brand}, the name on the bank
                    account where the transfer is made must match your full name on i8. In case of discrepancy, the
                    deposit will not be accepted and the amount will be returned back to the said bank account.</p>


                <input type="submit" class="btn w-100 submit-withdraw" value="Deposit">
        </div>
    </form>
</section>