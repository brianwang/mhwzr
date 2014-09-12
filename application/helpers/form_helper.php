<?php

class Form_helper {
    /*     * *
     * rule like array(
     *      'name'=> array(
     *          array('name1', 'required'),
     *          array('name2', array('min','required')),
     * 
     *      )
     * )
     *      /
     */

    function validate($rules = array()) {
        $result = array();
        $result['errors'] = array();
        $result['status'] = true;

        if (is_array($rules)) {
            foreach ($rules[$name] as $key => $value) {
                if (isset($_POST[$key])) {
                    $postval = $_POST[$key];
                    $params = array($postval);
                    //规则必须是string，并且以空格隔开
                    if (is_string($value)) {
                        $rule_items = explode(' ', $value);
                        $error = true;
                        foreach ($rule_items as $v) {
                            $key = strpos($v, '(');
                            if ($key > -1) {
                                $v = substr($string, $start, $key);
                                $keyend = strpos($v, '(');
                                if ($keyend > -1) {
                                    $pv = substr($string, $key, $keyend - $key);
                                    array_push($params, $pv);
                                }
                            }
                            $checkresult = call_user_method_array('check_' . $v, $this, $params);
                            if (!$checkresult) {
                                $error = false;
                                array_push($result['errors'], array('check ' . $key . ' is wrong'));
                            }
                        }
                        $result['status'] = $error;
                    } else {
                        throw new Exception("validation rule is error");
                    }
                }
            }
        } else {
            $result['status'] = true;
        }
        return $result;
    }

    private function check_required($value) {
        return $value != '' && !empty($value);
    }

    private function check_datetime($value) {
        $format = 'Y-m-d H:i:s';
        $d = DateTime::createFromFormat($format, $value);
        return $d && $d->format($format) == $date;
    }

    private function check_length($value, $length) {
        return $length >= mb_strlen($value);
    }

    private function check_numeric($value) {

        return is_numeric($value);
    }

}

?>