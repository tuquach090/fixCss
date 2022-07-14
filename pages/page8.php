<?php require 'layout/Header5-9.html'; ?>
<div id="main">
    <div class="container-fluid">
        <div class="d-flex justify-content-between mt-4 align-items-center">
            <div class="title">
                <span class="text-password">Change Password</span>
            </div>
            <div class="icon">
                <i class="fa-solid fa-arrow-rotate-left icon-arrow"></i>
            </div>
        </div>
        <div class="mt-5">
            <form>
                <div class="form-group">
                    <label for="oldpassword" class="mb-2">Old PassWord</label>
                    <input type="password" class="form-control" id="oldpassword" aria-describedby="emailHelp"
                        placeholder="Enter your last password">
                </div>
                <div class="form-group">
                    <label for="newpass" class="mb-2">New Password</label>
                    <input type="password" class="form-control" id="newpass"
                        placeholder="Must have at least 8 characters">
                </div>

                <div class="form-group">
                    <label for="cfpass" class="mb-2">Confirmed Password</label>
                    <input type="password" class="form-control" id="cfpass" placeholder="Retype your new password">
                </div>
                <div class="wrap-btn">
                    <button type="submit" class="btn btn-danger mt-5 btn-submit">Confirm</button>
                </div>
            </form>
        </div>

    </div>
</div>