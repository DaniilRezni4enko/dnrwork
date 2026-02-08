document.getElementById('Submit').onclick = Filter;
function Filter() {
    let search = document.getElementById("search").value
    let work_experience_list = document.getElementsByName("myfilter_radio");
    let work_experience = "";
    let work_schedule_list = document.getElementsByName("work_schedule");
    let work_schedule = "";
    let payment_type = document.getElementById("payment_type").value
    let sorted_by = document.getElementById("sorted_by").value
    let age = document.getElementById("age").value
    let min_pay = document.getElementById("min_pay").value
    let max_pay = document.getElementById("max_pay").value

    for(var i=0; i<work_experience_list.length; i++){
        if (work_experience_list[i].checked) {
            work_experience+=work_experience_list[i].value+" ";
        }
    }

    for (var i=0;i<work_schedule_list.length; i++) {
        if (work_schedule_list[i].checked) {
            work_schedule+=work_schedule_list[i].value+" ";

        }
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.post('/formProcessor');
    function Suc(data) {
        var arr = JSON.parse(data);
        document.getElementById('vacanc').innerHTML = '';
        for (i=0;i<arr.length;i++) {
            if (arr[i]['description'].length > 182) {
                arr[i]['description'] = arr[i]['description'].slice(0, 182) + '...'
            }
            let chat = document.createElement("div");
            chat.className = 'col-sm-6 col-md-4 product-item'
            chat.innerHTML =
                '        <div class="product-container">\n' +
                '            <div class="row">\n' +
                '                <div class="col-md-12">\n' +
                '                    <a class="product-image" href="#">\n' +
                '                        <img src="' + arr[i]['photo'] + '">\n' +
                '                    </a>\n' +
                '                </div>\n' +
                '            </div>\n' +
                '            <div class="row">\n' +
                '                <div class="col-8">\n' +
                '                    <h2>\n' +
                '                        <a href="#">' + arr[i]['title'] + '</a>\n' +
                '                    </h2>\n' +
                '                </div>\n' +
                '            </div>\n' +
                '            <div class="product-rating">\n' +
                '\n' +
                '                </i>\n' +
                '\n' + arr[i]['checks'] + ' просмотров' +
                '                <a class="small-text" href="#">\n' +
                '</a>\n' +
                '            </div>\n' +
                '            <div class="row">\n' +
                '                <div class="col-12">\n' +
                '                    <p class="product-description">' + arr[i]['description'] + '</p>\n' +
                '                    <div class="row">\n' +
                '                        <div class="col-6">\n' +
                '                            <button class="button btn btn-block btn-primary" type="button">Подробнее</button>\n' +
                '                        </div>\n' +
                '                        <div class="col-6">\n' +
                '                            <p class="product-price">₽'+ arr[i]['pay']+'</p>\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                </div>\n' +
                '            </div>\n' +
                '        </div>\n' +
                '    </div>'
            document.querySelector('#vacanc').append(chat);
        let count = document.getElementById('count')
        count.textContent = 'Найдено вакансий: ' + arr.length;

        }
    }
    function Bef() {
    }
    $.ajax ({
        url: "/search_vacancies_process",
        type: "POST",
        data: ({search: search, work_experience: work_experience, payment_type: payment_type, sorted_by: sorted_by, age: age, min_pay: min_pay, max_pay: max_pay, work_schedule: work_schedule}),
        dataType: "html",
        beforeSend: Bef,
        success: Suc,
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
}
