<?php

namespace Core;
use Core\Session;

class Validator
{
    public static function make(array $data, array $rules)
    {

        $errors = null;

        foreach ($rules as $ruleKey => $ruleValue) {

            if(strpos($ruleValue, ":")) {

                $items = explode(":", $ruleValue);

                foreach ($data as $dataKey => $dataValue) {

                    if ($ruleKey == $dataKey) {

                        switch ($items[0]) {


                            case 'min':

                                if (strlen($dataValue) < $items[1]) {

                                    $errors["$ruleKey"] = "o campo {$ruleKey} deve ter um minimo de {$items} caracteres";

                                    break;

                                }


                            case 'max':

                                if (strlen($dataValue) > $items[1]) {

                                    $errors["$ruleKey"] = "o campo {$ruleKey} deve ter um máximo de {$items} caracteres";

                                    break;

                                }


                        }

                    }
                }


            } else {
 
                foreach ($data as $dataKey => $dataValue) {

                    if ($ruleKey == $dataKey) {

                        switch ($ruleValue) {

                            case 'required' :

                                if ($dataValue == ' ' || empty($dataValue)) {

                                    $errors["$ruleKey"] = "o campo {$ruleKey} deve ser preenchido.";

                                    break;

                                }

                                

                            case 'email' :

                                if (!filter_var($dataValue, FILTER_VALIDATE_EMAIL)) {

                                    $errors["$ruleKey"] = "O campo {$ruleKey} não é valido.";

                                    break;
                                    
                                }

                                

                            case 'float' :

                                if (!filter_var($dataValue, FILTER_VALIDATE_FLOAT)) {

                                    $errors["$ruleKey"] = "O campo {$ruleKey} deve conter números decimal";

                                    break;

                                }

                               

                            case 'int' :

                                if (!filter_var($dataValue, FILTER_VALIDATE_INT)) {

                                    $errors["$ruleKey"] = "O campo {$ruleKey} deve conter número inteiro";

                                    break;

                                }

                                

                            default :

                                break;


                        }
                    }

                }

            }

        }


        if ($errors) {

            Session::set('errors', $errors);
            Session::set('inputs', $data);
            return true;

        } else {

            Session:destroy(['errors', 'inputs']);
            return false;

        }


    }
}