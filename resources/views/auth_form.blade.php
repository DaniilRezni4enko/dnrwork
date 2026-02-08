<!DOCTYPE html>
<html data-bs-theme="light" lang="en" style="background: url('/storage/app/public/cropped-cropped-6307a0f4db412399098419.jpeg-1.jpg') center / cover no-repeat;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="/resources/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/css/form.css">
</head>
<body style="background: rgba(255,255,255,0);">
<!-- Start: Pretty Registration Form -->
<div class="row register-form">
    <div class="col-md-8 offset-md-2">
        <form class="custom-form" method="post" action="{{route('auth_process')}}">
            @csrf
            <h1 style="border-color: rgb(242, 101, 89);border-top-color: rgb(242,;border-right-color: 101,;border-bottom-color: 89);border-left-color: 101,;">Авторизация</h1>
            <div class="row form-group">
                <div class="col-sm-4 label-column">
                    <label class="col-form-label" for="repeat-pawssword-input-field">Логин</label>
                </div><div class="col-sm-6 input-column">
                    <input class="form-control" name="login" type="text">
                </div></div><div class="row form-group">
                <div class="col-sm-4 label-column">
                    <label class="col-form-label" for="repeat-pawssword-input-field">Пароль</label>
                </div><div class="col-sm-6 input-column">
                    <input class="form-control" name="password" type="password"></div></div><div class="form-check">
                <input class="form-check-input" type="checkbox" id="formCheck-3">
                <label class="form-check-label" for="formCheck-3">Я соглашаюсь с условиями использования и политикой конфиденциальности.</label>
            </div><input class="btn btn-light submit-button" type="submit" style="background: rgb(242,101,89);"></form></div></div><!-- End: Pretty Registration Form -->
<script src="/resources/css/bootstrap/js/bootstrap.min.js"></script></body></html>
