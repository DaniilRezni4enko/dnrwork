<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Form v2 (Modal &amp; Full) with Google Map</title>
    <link rel="stylesheet" href="/resources/css/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/css/assets/fonts/font-awesome.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=c2e5ce31-7c30-40b9-929d-26be9befc46e" type="text/javascript"></script>
</head>

<body>
<div>
    <div class="container-fluid">
        <form id="contactForm" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
            <div class="form-row">
                <div class="col-md-6">
                    <div id="successfail"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 col-md-6" id="message">
                    <h2 class="h4"><i class="fa fa-file-text-o"></i>Необходимые данные<small></small></h2>
                    <div class="form-group"><label for="from-name">Название вакансии</label><span class="required-input">*</span>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-pencil"></i></span></div><input class="form-control" type="text" id="title" name="name" required="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group"><label for="from-email">Должность</label><span class="required-input">*</span>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-id-card"></i></span></div><input class="form-control" type="text" id="post" name="email" required="" placeholder="Введите точное название должности">
                        </div>
                    </div>
                    <div class="form-group"><label for="from-email">Оплата</label><span class="required-input">*</span>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-rouble"></i></span></div><input class="form-control" type="number" id="pay" name="email" required="" placeholder="Введите сумму">
                        </div>
                    </div>
                    <div class="form-group"><label for="from-email">Контактные данные</label><span class="required-input">*</span>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" id="email" name="email" required="" placeholder="Электронный адрес">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" id="phone" name="email" required="" placeholder="Номер телефона">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-telegram"></i></span></div><input class="form-control" type="text" id="telegram" name="email" required="" placeholder="Телеграм (Не обязательно для заполнения)">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                            <div class="form-group"><label for="from-phone">График работы</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><select class="form-control" id="work_schedule" name="call time">
                                        <optgroup id="work_schedule" label="Выберите график работы">
                                            <option value="8_hours_or_more" selected="">8 часов и более</option>
                                            <option value="shift_schedule">Сменный график</option>
                                            <option value="from_4_to_6_hours">от 4 до 6 часов</option>
                                            <option value="Up_to_4_hours_a_day">До 4 часов в день</option>
                                            <option value="one-time_part-time_job">Разовая подработка</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                            <div class="form-group"><label for="from-phone">Тип оплаты труда</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-credit-card-alt"></i></span></div><select class="form-control" id="type_of_payment" name="call time">
                                        <optgroup id="type_of_payment" label="Выберите тип оплаты труда">
                                            <option value="Morning" selected="">Ежемесячная</option>
                                            <option value="Afternoon">Еженедельная</option>
                                            <option value="Evening">Ежедневная</option>
                                            <option value="Evening">По факту выполнения</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                            <div class="form-group"><label for="from-phone">Возможность дистанционной работы</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><select class="form-control" id="for_ability_to_work_remotely" name="call time">
                                        <optgroup id="for_ability_to_work_remotely" label="Выберите график работы">
                                            <option value="yes" selected="">Возможна</option>
                                            <option value="no">Не возможна</option>
                                            <option value="partly">Частично возможна</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                            <div class="form-group"><label for="from-calltime">Опыт работы</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-briefcase"></i></span></div><select class="form-control" id="work_experience" name="call time">
                                        <optgroup label="Опыт работы">
                                            <option value="no" selected="">Без опыта</option>
                                            <option value="1-3">От 1 года до 3 лет</option>
                                            <option value="3-6">От 3 до 6 лет</option>
                                            <option value="6-10">Более 6 лет</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><label for="from-comments">Описание вакансии</label><textarea class="form-control" id="description" name="comments" placeholder="" rows="5"></textarea>
                        <div class="custom-file"><input id="input_file" class="form-control-file custom-file-input files" multiple type="file"><label class="custom-file-label">Upload File</label></div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                            <div class="col"><button id="create" class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                        </div>
                    </div>
                    <hr class="d-flex d-md-none">
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="h4"><i class="fa fa-location-arrow"></i>&nbsp;Местонахождение</h2>
                    <script src="/jquery.min.js"></script>
                    <script type="text/javascript">
                        ymaps.ready(init);
                        var myMap,
                            myPlacemark;
                        var coords;
                        var adress;
                        var flag = false;
                        function init(){
                            myMap = new ymaps.Map("map", {
                                center: [48.021139, 37.810107],
                                zoom: 16,
                                controls: ['zoomControl', 'fullscreenControl', 'typeSelector', 'rulerControl', 'searchControl']
                            });

                            myMap.events.add('click', function (e) {
                                coords = e.get('coords');
                                flag = true;

                                // Если метка уже создана – просто передвигаем ее.
                                if (myPlacemark) {
                                    myPlacemark.geometry.setCoordinates(coords);
                                }
                                // Если нет – создаем.
                                else {
                                    myPlacemark = createPlacemark(coords);
                                    myMap.geoObjects.add(myPlacemark);
                                    // Слушаем событие окончания перетаскивания на метке.
                                    myPlacemark.events.add('dragend', function () {
                                        myPlacemark.geometry.getCoordinates();
                                    });
                                }
                            });

                            // Создание метки.
                            function createPlacemark(coords) {
                                return new ymaps.Placemark(coords, {

                                }, {
                                    preset: 'islands#violetDotIconWithCaption',
                                    draggable: true
                                });
                            }
                        }
                        document.getElementById('create').onclick = CreateVacancies;

                        function Before() {

                        }
                        function Success(data) {
                                if (window.FormData === undefined){
                                    alert('В вашем браузере FormData не поддерживается')
                                } else {
                                    var formData = new FormData();
                                    var count = 0
                                    $.each($("#input_file")[0].files,function(key, input){
                                        let filename = input['name'];
                                        count++
                                        var filename_massive = filename.split('.')
                                        var new_filename = String(data) + '_' + String(count) + '_' + filename;
                                        formData.append('file[]', input, new_filename);
                                    });
                                    $.ajax({
                                        type: "POST",
                                        url: '/upload_files',
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        data: formData,
                                        dataType : 'json',
                                        success: function(data){
                                            console.log(data)
                                        }
                                    });
                                }
                        }

                        function CreateVacancies() {
                            if (flag) {
                                let coordinates = coords[0] + ',' + coords[1]
                                var adres;
                                var myReverseGeocoder = ymaps.geocode([coords[0],coords[1]]);
                                myReverseGeocoder.then(function (res) {
                                    window.global = res.geoObjects.get(0).properties.get('text');
                                });
                                adres = global;
                                let post = document.getElementById("post").value;
                                let pay = document.getElementById("pay").value;
                                let title = document.getElementById("title").value;
                                let email = document.getElementById("email").value;
                                let phone = document.getElementById("phone").value;
                                let telegram = document.getElementById("telegram").value;
                                let description = document.getElementById("description").value;
                                let work_schedule = document.getElementById("work_schedule").value
                                let type_of_payment = document.getElementById("type_of_payment").value
                                let work_experience = document.getElementById('work_experience').value
                                let for_ability_to_work_remotely = document.getElementById('for_ability_to_work_remotely').value
                                $.ajax ({
                                    url: "/create_vacancies_process",
                                    type: "POST",
                                    data: ({phone: phone, coordinates: coordinates, description: description, work_experience: work_experience,pay: pay, adres: adres, post: post, title: title, email: email, work_schedule: work_schedule, type_of_payment: type_of_payment, for_ability_to_work_remotely: for_ability_to_work_remotely, telegram: telegram}),
                                    dataType: "html",
                                    beforeSend: Before,
                                    success: Success,
                                    error: function (jqXHR, exception) {
                                        if (jqXHR.status === 0) {
                                            alert('Not connect. Verify Network.');
                                        } else if (jqXHR.status == 404) {
                                            alert('Requested page not found (404).');
                                        } else if (jqXHR.status == 500) {
                                            alert('Internal Server Error (500).');
                                        } else if (exception === 'parsererror') {
                                            alert('Requested JSON parse failed.');
                                        } else if (exception === 'timeout') {
                                            alert('Time out error.');
                                        } else if (exception === 'abort') {
                                            alert('Ajax request aborted.');
                                        } else {
                                            alert('Uncaught Error. ' + jqXHR.responseText);
                                        }
                                    }
                                })

                            }}
                    </script>

                    <div id="map" style="width: 100%; height: 95%"></div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Contact Information</h4><button class="close" type="button" aria-label="Close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/resources/css/assets/js/jquery.min.js"></script>
<script src="/resources/css/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/resources/css/assets/js/Contact-Form-v2-Modal--Full-with-Google-Map-scripts.js"></script>
</body>
</html>
