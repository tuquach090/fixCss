<?php require 'layout/Header5-9.html'; ?>
<div id="main">
    <div class="container-fluid">
        <div class="d-flex justify-content-between mt-4 align-items-center">
            <div class="title">
                <span class="text-history">History</span>
            </div>
            <div class="icon">
                <i class="fa-solid fa-arrow-rotate-left icon-arrow"></i>
            </div>
        </div>
        <div class="d-flex mt-4 align-items-center wrap-action">
            <div class="item-action">
                <button class="btn btn-action bg-white">Transfer</button>
            </div>
            <div class="item-action ">
                <button class="btn btn-action active-action bg-white">Betting Summary</button>
            </div class="item-action">
            <div class="item-action">
                <button class="btn btn-action bg-white">Withdrawal / Deposit</button>
            </div>
            <div class="item-action">
                <button class="btn btn-action bg-white">Promotion Apply</button>
            </div>
            <div class="item-action">
                <button class="btn btn-action bg-white">Rebate / Cashback</button>
            </div>
        </div>
        <form class="mt-4">
            <div class="form-row">
                <div class="form-group month-form">
                    <select id="inputState" class="form-control">
                        <option selected>This month</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
        </form>
        <div class="wrap-date">
            <div class="date">
                <p class="title-date mb-2">Date</p>
                <form action="#">
                    <p class="mb-20">
                        <input type="radio" id="test1" name="radio-group" checked>
                        <label for="test1">This Month</label>
                    </p>
                    <p class="mb-20">
                        <input type="radio" id="test2" name="radio-group">
                        <label for="test2">Last Month</label>
                    </p>
                    <p class="mb-20">
                        <input type="radio" id="test3" name="radio-group">
                        <label for="test3">Last 90 Days</label>
                    </p>
                    <p class="mb-20">
                        <input type="radio" id="test3" name="radio-group">
                        <label for="test3">This Year</label>
                    </p>
                </form>
            </div>
            <div class="date-range mt-4">
                <div class="wrap-date-range">
                    <p class="title-date mb-2">Choose Date Range</p>
                </div>
            </div>
            <span class="datepicker-container">
                <input type="date" class="datepicker-input" name="send" value="2021-08-31">
            </span>

            <span class="datepicker-container">
                <input type="date" class="datepicker-input-end" name="send" value="2021-08-31">
            </span>
        </div>

    </div>
</div>