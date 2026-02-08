<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\assertLessThan;

class MainController extends Controller
{
    public function ShowMainStr() {
        return view('main_user_str');
    }

    public function Search() {
        $id = DB::table('vacancies')->get();
        $mass_comp = [];
        $it = 0;
        foreach ($id as $vacans) {
            $mass_comp[$it] = [
                'id' => $vacans->id,
                'created_at' => $vacans->created_at,
                'updated_at' => $vacans->updated_at,
                'title' => $vacans->title,
                'specialization' => $vacans->specialization,
                'minimum_age' => $vacans->minimum_age,
                'maximum_age' => $vacans->maximum_age,
                'photo' => $vacans->photo,
                'type_of_payment' => $vacans->type_of_payment,
                'address' => $vacans->address,
                'town' => $vacans->town,
                'count_complete' => 0,
                'the_ability_of_work_remotely' => $vacans->the_ability_to_work_remotely,
                'description' => $vacans->description,
                'work_experience' => $vacans->work_experience,
                'work_schedule' => $vacans->work_schedule,
                'phone_number' => $vacans->phone_number,
                'telegram' => $vacans->telegram,
                'checks' => $vacans->checks,
                'pay' => (int)$vacans->pay];
            $it++;
        }
        return view('search_vacancies', ['vacancies' => $mass_comp]);
    }

    public function Test() {
        return view('card');
    }

    public function Process() {
        $data = [
            'search' => $_POST['search'],
            'work_experience' => $_POST['work_experience'],
            'work_schedule' => $_POST['work_schedule'],
            'payment_type' => $_POST['payment_type'],
            'sorted_by' => $_POST['sorted_by'],
            'age' => $_POST['age'],
            'min_pay' =>  $_POST['min_pay'],
            'max_pay' => $_POST['max_pay'],
        ];
        if ($data['max_pay'] == 0) {
            $data['max_pay'] = DB::table('vacancies')->max('pay')+100;
        }
        $work_schedule = explode(' ', $data['work_schedule']);
        if (count($work_schedule) == 1) {
            $work_schedule = ['shift_schedule', '8_hours_or_more', 'from_4_to_6_hours', 'Up_to_4_hours_a_day', 'one-time_part-time_job', 'all'];
        }
        if ($data['payment_type'] == 'all') {


        }
        $search = $data['search'];
        $tags = explode(' ', $search);
        $id = DB::table('vacancies')->
        whereBetween('pay', [$data['min_pay'], $data['max_pay']])->
        whereBetween('minimum_age', [0, $data['age']])->
        whereBetween('maximum_age', [$data['age'], 1000])->
        where('work_experience', $data['work_experience'])->get();
        $mass_comp = [];
        $it = 0;
        foreach ($id as $vacans) {
            $i = $vacans->id;
            $schedule = DB::table('vacancies')->where('id', $i)->value('work_schedule');
            if (in_array($schedule, $work_schedule)) {
                if ($data['payment_type'] == 'all') {
                    $flag = true;
                }
                else {
                    if ($data['payment_type'] == DB::table('vacancies')->where('id', $i)->value('type_of_payment')) {
                        $flag = true;
                    }
                    else {
                        $flag = false;
                    }
                }
                if ($flag) {
                    $mass_comp[$it] = [
                        'id' => $i,
                        'created_at' => $vacans->created_at,
                        'updated_at' => $vacans->updated_at,
                        'title' => $vacans->title,
                        'specialization' => $vacans->specialization,
                        'minimum_age' => $vacans->minimum_age,
                        'maximum_age' => $vacans->maximum_age,
                        'photo' => $vacans->photo,
                        'type_of_payment' => $vacans->type_of_payment,
                        'address' => $vacans->address,
                        'town' => $vacans->town,
                        'count_complete' => 0,
                        'the_ability_of_work_remotely' => $vacans->the_ability_to_work_remotely,
                        'description' => $vacans->description,
                        'work_experience' => $vacans->work_experience,
                        'work_schedule' => $vacans->work_schedule,
                        'phone_number' => $vacans->phone_number,
                        'telegram' => $vacans->telegram,
                        'checks' => $vacans->checks,
                        'pay' => (int)$vacans->pay
                    ];
                }
                $count_complete = 0;
                $tg = DB::table('vacancies')->where('id', $i)->value('description');
                $tg_mass = explode(' ', strtolower($tg));
                foreach ($tags as $tag) {
                    if (in_array(strtolower($tag), $tg_mass)) {
                        $count_complete ++;
                    }
                    if ($count_complete > 0) {
                        $mass_comp[$it]['count_complete'] = $count_complete;
                    }
                }
                $it ++;
            }
        }
        usort($mass_comp, function($a, $b) {
            return $a['count_complete'] - $b['count_complete'];
        });
        $mass_comp = array_reverse($mass_comp);
        $sorted_by = $data['sorted_by'];
        if ($sorted_by == 'date') {
            usort($mass_comp, function($a, $b) {
                return strtotime($a['created_at']) - strtotime($b['created_at']);
            });
        }
        if ($sorted_by == 'pay') {
            usort($mass_comp, function($a, $b) {
                return $a['pay'] - $b['pay'];
            });
        }
        if ($sorted_by == 'responses') {
            usort($mass_comp, function($a, $b) {
                return $a['checks'] - $b['checks'];
            });
        }
        $mass_comp = array_reverse($mass_comp);
        $ret = json_encode($mass_comp);
        echo $ret;

    }

    public function Chat() {
        return view('chat');
    }

    public function CreateMessage() {
        return view('create_vacancies');
    }

    public function CreateVacanciesProcess() {
//        $data = [
//            'coordinates' => $_POST['coordinates'],
//            'address' => $_POST['adres'],
//            'specialization' => $_POST['post'],
//            'title' => $_POST['title'],
//            'email' => $_POST['email'],
//            'telegram' => '',
//            'work_schedule' => $_POST['work_schedule'],
//            'type_of_payment' => $_POST['type_of_payment'],
//            'work_experience' => $_POST['work_experience'],
//            'description' => $_POST['description'],
//            'the_ability_to_work_remotely' => $_POST['for_ability_to_work_remotely'],
//            'pay' => (int)$_POST['pay'],
//            'photo' => '',
//            'town' => '',
//            'phone_number' => '',
//            'checks' => 0,
//            'minimum_age' => 18,
//            'maximum_age' => 50
//        ];
        $mass_address = explode(',', $_POST['adres']);
        $town = $mass_address[0];
        $data = [
          'title' => $_POST['title'],
          'specialization' => $_POST['post'],
          'minimum_age' => '',
          'maximum_age' => '',
          'photo' => '',
          'type_of_payment' => $_POST['type_of_payment'],
          'address' => $_POST['adres'],
          'town' => $town,
          'the_ability_to_work_remotely' => $_POST['for_ability_to_work_remotely'],
          'description' => $_POST['description'],
          'work_experience' => $_POST['work_experience'],
          'work_schedule' => $_POST['work_schedule'],
          'phone_number' => $_POST['phone'],
          'telegram' => $_POST['telegram'],
          'pay' => $_POST['pay'],
          'checks' => 0,
          'coordinates' => $_POST['coordinates'],
          'files' => ''
        ];

        $select = DB::table('vacancies')->insertGetId($data);
        echo $select;
    }

    public function UploadFiles() {
        $input_name = 'file';

// Разрешенные расширения файлов.
        $allow = array();

// Запрещенные расширения файлов.
        $deny = array(
            'phtml', 'php', 'php3', 'php4', 'php5', 'php6', 'php7', 'phps', 'cgi', 'pl', 'asp',
            'aspx', 'shtml', 'shtm', 'htaccess', 'htpasswd', 'ini', 'log', 'sh', 'js', 'html',
            'htm', 'css', 'sql', 'spl', 'scgi', 'fcgi', 'exe'
        );

// Директория куда будут загружаться файлы.
        $path = $_SERVER['DOCUMENT_ROOT'] . '/';

        $data = array();
//
        if (!isset($_FILES[$input_name])) {
            $error = 'Файлы не загружены.';
        } else {
            // Преобразуем массив $_FILES в удобный вид для перебора в foreach.
            $files = array();
            $diff = count($_FILES[$input_name]) - count($_FILES[$input_name], COUNT_RECURSIVE);
            if ($diff == 0) {
                $files = array($_FILES[$input_name]);
            } else {
                foreach($_FILES[$input_name] as $k => $l) {
                    foreach($l as $i => $v) {
                        $files[$i][$k] = $v;
                    }
                }
            }
            $a = '123';
            $id = '';
            $files_string = 'aaa';
            foreach ($files as $file) {
                $error = $success = '';
                // Проверим на ошибки загрузки.
                if (!empty($file['error']) || empty($file['tmp_name'])) {
                    $error = 'Не удалось загрузить файл.';


                } elseif ($file['tmp_name'] == 'none' || !is_uploaded_file($file['tmp_name'])) {
                } else {

                    // Оставляем в имени файла только буквы, цифры и некоторые символы.
                    $filename = $file['name'];
                    $filename_mass = explode('_', $file['name']);
                    $path = $path . 'storage/app/public/' . $filename_mass[0] . '/';
                    $id = $filename_mass[0];
                    if (!is_dir($path)) {
                        mkdir($path, 0777, True);
                    }
                    $pattern = "[^a-zа-яё0-9,~!@#%^-_\$\?\(\)\{\}\[\]\.]";
                    $name = mb_eregi_replace($pattern, '-', $file['name']);
                    $name = mb_ereg_replace('[-]+', '-', $name);
                    $parts = pathinfo($name);
                    if (empty($name) || empty($parts['extension'])) {

                    } elseif (!empty($allow) && !in_array(strtolower($parts['extension']), $allow)) {

                    } elseif (!empty($deny) && in_array(strtolower($parts['extension']), $deny)) {
                    } else {
                        // Перемещаем файл в директорию.
                        if (move_uploaded_file($file['tmp_name'], $path . $name)) {
                            // Далее можно сохранить название файла в БД и т.п.
                            $files_string = $files_string . $path . $name . ',';
                        } else {
                            echo $files_string;
                        }
                    }
                }
            }
            }}


    public function ShowProfileStr() {
        $url = $_SERVER['REQUEST_URI'];
        $url_mass = explode('/', $url);
        $login = $url_mass[2];
        $user_dann = DB::table('users')->where('login', $login)->get();
        $massive = [];
        foreach ($user_dann as $user){
            $massive = [
                'id' => $user->id,
                'name' => $user->name,
                'surname' => $user->surname,
                'patronymic' => $user->patronymic,
                'fio' => $user->surname . ' ' . $user->name . ' ' . $user->patronymic,
                'login' => $login,
                'email' => $user->email,
                'age' => $user->age,
                'work_experience' => $user->work_experience,
                'photo' => '/storage/app/public/user_images/' . $user->photo,
                'phone_number' => $user->phone_number,
                'specialization' => $user->specialization,
                'favourites' => $user->favourites,
                'telegram' => $user->telegram
            ];
        }
        return view('profile', ['information' => $massive]);
    }
}
