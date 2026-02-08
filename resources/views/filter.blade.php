<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<link rel="stylesheet" href="/resources/css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/resources/css/font-awesome.min.css">
<link rel="stylesheet" href="/resources/css/styles.min.css">
<!------ Include the above in your HEAD tag ---------->
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="/resources/css/filters.css">
<div class="container">
    <div class="row">
        <aside class="col-md-3">

            <div class="card">
                @csrf
                <article class="filter-group">
                    <header class="card-header">
                        <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                            <i class="icon-control fa fa-chevron-down"></i>
                            <h6 class="title">Вакансии</h6>
                        </a>
                    </header>
                    <div class="filter-content collapse show" id="collapse_1" style="">
                        <div class="card-body">
                            <form class="pb-3">
                                <div class="input-group">
                                    <input type="text" id="search" class="form-control" placeholder="Введите ключевые слова">
                                    <div class="input-group-append">
                                        <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>

                            <ul class="list-menu">

                            </ul>

                        </div> <!-- card-body.// -->
                    </div>
                </article> <!-- filter-group  .// -->
                <article class="filter-group">
                    <header class="card-header">
                        <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                            <i class="icon-control fa-chevron-down"></i>
                            <h6 class="title">Опыт работы </h6>
                        </a>
                    </header>
                    <div class="filter-content collapse show" id="collapse_2" style="">
                        <div class="card-body">
                            <label class="custom-control custom-radio">
                                <input type="radio"  name="myfilter_radio" value="none" class="custom-control-input">
                                <div class="custom-control-label">Не имеет значения</div>
                            </label>
                            <label id="work_experience" class="custom-control custom-radio">
                                <input type="radio" name="myfilter_radio" checked="" value="no" class="custom-control-input">
                                <div class="custom-control-label">Без опыта</div>
                            </label>
                            <label id="work_experience" class="custom-control custom-radio">
                                <input type="radio" name="myfilter_radio" value="1-3" class="custom-control-input">
                                <div class="custom-control-label">От 1 года до 3 лет</div>
                            </label>
                            <label id="work_experience" class="custom-control custom-radio">
                                <input type="radio" name="myfilter_radio" value="3-6" class="custom-control-input">
                                <div class="custom-control-label">От 3 до 6 лет</div>
                            </label>
                            <label id="work_experience" class="custom-control custom-radio">
                                <input type="radio" name="myfilter_radio" value="6-100" class="custom-control-input">
                                <div class="custom-control-label">Более 6 лет</div>
                            </label>
                        </div> <!-- card-body.// -->
                    </div>
                </article> <!-- filter-group .// -->
                <article class="filter-group">
                    <header class="card-header">
                        <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                            <i class="icon-control fa fa-chevron-down"></i>
                            <h6 class="title">Заработная плата</h6>
                        </a>
                    </header>
                    <div class="filter-content collapse show" id="collapse_3" style="">
                        <div class="card-body">
                            <input type="range" class="custom-range" min="0" max="100" name="">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Минимальная</label>
                                    <input class="form-control" id="min_pay" placeholder="$0" type="number">
                                </div>
                                <div class="form-group text-right col-md-6">
                                    <label>Максимальная</label>
                                    <input class="form-control" id="max_pay" placeholder="120000 руб." type="number">
                                </div>
                                <select id="payment_type" class="mr-2 form-control">
                                    <option value="all">--Тип оплаты труда--</option>
                                    <option value="month">Ежемесячная</option>
                                    <option value="week">Еженедельная</option>
                                    <option value="day">Ежедневная</option>
                                    <option value="to_fact">По факту выполнения</option>
                                </select>

                            </div> <!-- form-row.// -->
                        </div><!-- card-body.// -->
                    </div>
                    <header class="card-header">
                        <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                            <i class="icon-control fa fa-chevron-down"></i>
                            <h6 class="title">Возраст сотрудника</h6>
                        </a>
                    </header>
                    <div class="filter-content collapse show" id="collapse_3" style="">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input class="form-control" id="age" placeholder="18" type="number">
                                </div>
                            </div> <!-- form-row.// -->
                        </div><!-- card-body.// -->
                    </div>
                </article> <!-- filter-group .// -->
                <article class="filter-group">
                    <header class="card-header">
                        <a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" class="">
                            <i class="icon-control fa-chevron-down"></i>
                            <h6 class="title">График работы </h6>
                        </a>
                    </header>
                    <div class="filter-content collapse show" id="collapse_2" style="">
                        <div class="card-body">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" value="8_hours_or_more" name="work_schedule" class="custom-control-input">
                                <div class="custom-control-label">8 часов и более
                                    <b class="badge badge-pill badge-light float-right">120</b>  </div>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" value="shift_schedule" name="work_schedule" checked="" class="custom-control-input">
                                <div class="custom-control-label">Сменный график
                                    <b class="badge badge-pill badge-light float-right">15</b>  </div>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" value="from_4_to_6_hours" name="work_schedule" class="custom-control-input">
                                <div class="custom-control-label">от 4 до 6 часов
                                    <b class="badge badge-pill badge-light float-right">35</b> </div>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" value="Up_to_4_hours_a_day" name="work_schedule" class="custom-control-input">
                                <div class="custom-control-label">До 4 часов в день
                                    <b class="badge badge-pill badge-light float-right">89</b> </div>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" value="one-time_part-time_job" name="work_schedule" class="custom-control-input">
                                <div class="custom-control-label">Разовая подработка
                                    <b class="badge badge-pill badge-light float-right">30</b>  </div>
                            </label>
                        </div> <!-- card-body.// -->
                    </div>
                </article> <!-- filter-group .// -->
                <article class="filter-group">
                    <header class="card-header">
                        <a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" class="">
                            <i class="icon-control fa fa-chevron-down"></i>
                            <h6 class="title">More filter </h6>
                        </a>
                    </header>
                </article> <!-- filter-group .// -->
            </div> <!-- card.// -->
            <button id="Submit" class="btn btn-block btn-primary">Apply</button>

        </aside>
        <main class="col-md-9" id="main">

            <header class="border-bottom mb-4 pb-3">
                <div class="form-inline">
                    <span id="count" class="mr-md-auto">Найдено вакансий: {{count($vacancies)}}</span>
                    <select id="sorted_by" class="mr-2 form-control">
                        <option value="date">--Сортировка по--</option>
                        <option value="pay">--Заработной плате--</option>
                        <option value="date">--Дате публикации--</option>
                        <option value="responses">--Количеству откликов--</option>
                    </select>
                </div>
            </header><!-- sect-heading -->
            <div class="row product-list" id="vacanc">
                @foreach($vacancies as $vacanc)
                    <div class="col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="product-image" href="vacancies/{{$vacanc['id']}}">
                                        <img src="{{$vacanc['photo']}}">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2>
                                        <a href="#">{{$vacanc['title']}}</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="product-rating">
                                <a class="small-text" href="#">
                                    Просмотров: {{$vacanc['checks']}}</a>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">{{$vacanc['description']}}...</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-light" type="button">Подробнее</button>
                                        </div>
                                        <div class="col-6">
                                            <p class="product-price">₽{{$vacanc['pay']}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <nav class="mt-4" aria-label="Page navigation sample">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Страницы</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    @if(count($vacancies) > 25)
                        @for($i=50;$i<= count($vacancies); $i+=25)
                            <li class="page-item"><a class="page-link" href="#">{{$i / 25}}</a></li>
                        @endfor
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    @endif
                </ul>
            </nav>
        </main>
    </div>
</div>
<script src="/resources/js/search_vacancies.js" type="text/javascript"></script>
