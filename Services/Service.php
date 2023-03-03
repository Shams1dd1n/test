<?php

namespace App\Services;

use App\Contracts\GenInterface;
use App\Models\Link;
use Illuminate\Support\Facades\DB;

class Service implements GenInterface
{

    public function saveLink(string $link): Link
    {
        $code = '';
        $link = '';
        if ($link = $_GET['ln.kg']) {
            $code = $this->getCode();
            $save = Link::insert($link, $code);
            return $this->getLink($code);
        }

    }

    protected function getCode($length = 6)
    {
        $code = '';

        $dictionary = array(
            /*Словарь без цифр латинский алфавит
            только верхний и нижный регистр*/
            'f', 'g', 'h', 'l', 'm', 'n', 'p',
            'q', 's', 'u', 'v', 'w', 'z',

            'D', 'E', 'F', 'G', 'L', 'M', 'N', 'P',
            'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'Z',

        );


        for ($i = 0; $i < $length; $i++) {

            $code .= $dictionary[random_int(0, count($dictionary) - 1)];


        }

        return $code;

    }


    public function getLink(string $code): Link
    {
      $give = DB::select("SELECT 'link' FROM 'link' WHERE 'code' = '".$code."' ");
      return $give
    }
}
