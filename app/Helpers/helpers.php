<?php

use App\File as File;
use App\Log as SenseiLogger;
use Auth as LaravelAuth;
use Illuminate\Support\Str as Str;

if (!function_exists('createLog')) {
    function createLog($action, $description)
    {
        SenseiLogger::create(
            [
                'action' => $action,
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'utilisateur' => getCurrentUser(),
                'description' => $description,
                'slug' => 'tmp_user_log_'
            ]
        );
    }
}


if (!function_exists('getIpAdress')) {
    function getIpAdress()
    {
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        }
    }
}

if (!function_exists('getCurrentUser')) {
    function getCurrentUser()
    {
        if (LaravelAuth::guard('web')->check()) {
            return Auth::user()->first_name . '  ' . Auth::user()->last_name;

        }

        return 'Visiteur';

    }
}

if (!function_exists('getLocation')) {
    function getLocation()
    {
        return '';
    }
}


if (!function_exists('sous_chaine')) {
    function sous_chaine($chaine,$debut,$fin)
    {
        return substr($chaine,$debut,$fin);
    }
}


if (!function_exists('str_randomize')) {
    function str_randomize($length)
    {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

}

if (!function_exists('file_manager')) {
    function file_manager()
    {
        $file = new File();
        return $file;
    }
}

if (!function_exists('name_generator')) {
    function name_generator($prefix, $length)
    {
        $generated = Str::random($length);

        return $prefix . '_' . $generated;
    }
}


if (!function_exists('number_randomize')) {
    function number_randomize($length)
    {

        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
