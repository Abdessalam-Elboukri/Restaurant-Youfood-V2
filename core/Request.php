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
        if ($this->method() === 'post') {
            foreach ($_POST as $key => $value) {
                if ($this->method() === 'post') {
                    $_POST['image']  = null;
                    $_POST['image1'] = null;
                    $_POST['image2'] = null;
                    $_POST['image3'] = null;
                    foreach ($_POST as $key => $value) {

                        if (!empty($_FILES['image1']['name']) && $key === 'image1') {
                            $image_name = $_FILES['image1']['name'];
                            $image_file = $_FILES['image1']['tmp_name'];
                            $terget = "images/data/";
                            if (move_uploaded_file($image_file, $terget . $image_name)) {
                                $body[$key] = $image_file;
                            }
                        }
                        $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }

                return $body;
            }
        }
    }
}
