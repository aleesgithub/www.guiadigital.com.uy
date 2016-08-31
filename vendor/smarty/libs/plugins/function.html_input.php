<?php

function smarty_function_html_input($params, $template)
{
    require_once(SMARTY_PLUGINS_DIR . 'shared.escape_special_chars.php');

    $name   = null;
    $values = null;
    $id     = null;
    $class  = null;
    $extra  =null;

    foreach ($params as $_key => $_val) {
        switch ($_key) {
            case 'name':
                $$_key = (string) $_val;
                break;
            case 'class':
               // $$_key=(string)$_val;
            case 'id':
                //$$_key = (string) $_val;
                //break;
            case 'values':
                //$$_key = (string) $_val;
               // break;
            default:
                if (!is_array($_val)) {
                    $extra .= ' ' . $_key . '="' . smarty_function_escape_special_chars($_val) . '"';
                } else {
                    trigger_error("html_options: extra attribute '$_key' cannot be an array", E_USER_NOTICE);
                }
                break;
        }
    }

   

    $_html_result = '';
    $_idx = 0;

   
    if (!empty($name)) {
        $_html_class = !empty($class) ? ' class="'.$class.'"' : '';
        $_html_id = !empty($id) ? ' id="'.$id.'"' : '';
        $_html_result = '<input name="' . $name . '"' . $_html_class . $_html_id . $extra . '>' . "\n" . $_html_result . '</select>' . "\n";
    }

    return $_html_result;
}


