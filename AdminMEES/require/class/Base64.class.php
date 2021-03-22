<?php

class Base645 {

    public function base64($vlr, $tipo) {
        switch ($tipo) {
            case 1: $rst = base64_encode($vlr);
                break;
            case 2: $rst = base64_decode($vlr);
                break;
        }
        return $rst;
    }

    public function tratarcarater($vlr, $tipo) {
        switch ($tipo) {
            case 1: $rst = utf8_decode($vlr);
                break;
            case 2: $rst = htmlentities($vlr, ENT_QUOTES, "ISO-88591");
                break;
        }
        return $rst;
    }

    public function dataatual($tipo) {
        switch ($tipo) {
            case 1: $rst = date("y-m-d");
                break;
            case 2: $rst = date("y-m-d H:i:s");
                break;
            case 3: $rst = date("d/m/y");
                break;
        }
        return $rst;
    }

}
?>


