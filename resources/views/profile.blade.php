<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="/resources/css/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/css/assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="/resources/css/assets/css/Profile-with-data-and-skills.css">
</head>

<body>
    <!-- Start: Profile with data and skills --><div class="container">
    <div class="main-body">

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
          </nav>
          <!-- /Breadcrumb -->

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{$information['photo']}}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{$information['name']}}</h4>
                      <p class="text-secondary mb-1">{{$information['specialization']}}</p>
                      <p class="text-muted font-size-sm"></p>
                      <button class="btn btn-primary">Посмотреть Резюме</button>
                      @if(isset($_COOKIE['auth']))
                            @if($information['login'] != $_COOKIE['auth'])
                                <button class="btn btn-outline-primary">Написать</button>
                            @endif
                        @else
                            <button class="btn btn-outline-primary">Написать</button>
                        @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Полное ФИО</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$information['fio']}}
                    </div>
                  </div>
                  <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Возраст</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$information['age']}}
                        </div>
                    </div>
                    <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                            @if(isset($_COOKIE['auth']))
                                {{$information['email']}}
                            @else
                                Зарегистрируйтесь чтобы видеть контактные данные пользователей
                            @endif
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Номер телефона</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        @if(isset($_COOKIE['auth']))
                            {{$information['phone_number']}}
                        @else
                            Зарегистрируйтесь чтобы видеть контактные данные пользователей
                        @endif
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telegram</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        @if(isset($_COOKIE['auth']))
                            {{$information['telegram']}}
                        @else
                            Зарегистрируйтесь чтобы видеть контактные данные пользователей
                        @endif
                    </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                        @if(isset($_COOKIE['auth']))
                            @if($information['login'] == $_COOKIE['auth'])
                                <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Редактировать данные</a>
                            @endif
                        @endif
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>

        </div>
    </div><!-- End: Profile with data and skills -->
    <script src="/resources/css/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
