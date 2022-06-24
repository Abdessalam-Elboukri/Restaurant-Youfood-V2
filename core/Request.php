<?php

namespace app\core;

class Request
{

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');

        if ($position === false) {
            return $path;
        }

        return $path = substr($path, 0, $position);
    }

    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isGet()
    {
        return $this->method() === 'get';
    }

    public function isPost()
    {
        return $this->method() === 'post';
    }

    public function getBody()
    {
        $body = [];

        //secure doby data
        if ($this->method() === 'get') {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        // if ($this->method() === 'post') {
        //     foreach ($_POST as $key => $value) {
        //         if ($this->method() === 'post') {

        //             $_POST['img_plat']  = null;

        //             if (!empty($_FILES['img_plat']['name']) && $key === 'img_plat') {
        //                 $image_name = $_FILES['img_plat']['name'];
        //                 $image_file = $_FILES['img_plat']['tmp_name'];
        //                 $terget = "images/";
        //                 if (move_uploaded_file($image_file, $terget . $image_name)) {
        //                     $body[$key] = $image_file;
        //                 }
        //             } else {
        //                 $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        //             }   
        //         }
        //         return $body;
        //     }
        if ($this->method() === 'post')
        {
            $_POST['img_plat'] = $_FILES['img_plat']['name'] ?? '';
            foreach($_POST as $key => $value)
            {
                if(!empty($_FILES['img_plat']['name']) && $key === 'img_plat') {
                    $filename = $_FILES['img_plat']['name'];
                    $filetmpname = $_FILES['img_plat']['tmp_name'];
                    $folder = "images/data/".basename($filename);
                    if(move_uploaded_file($filetmpname, $folder . $filename))
                    {

                        $body[$key] = $filename;
                        // var_dump($filename);exit;
                    }
                } else {
                    $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                }
                
            }
            return $body;
        }
    }
}
