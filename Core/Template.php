<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core;


use Core\ModuleBase\ModelResult;

class Template extends Base {
    public function showTemplate(string $tempalteName, ModelResult $modelResult) {
        if (empty($modelResult->getModuleName())) {
            $data = $this->getBlock($modelResult->getView());
        } else {
            $data = $this->getView($modelResult->getView(), $modelResult->getModuleName(), $modelResult->getData());
        }
        $path = 'Templates/'.$tempalteName.'.php';
        $result='';
        if (!file_exists(ROOT_DIR . $path)) {
            Dev::sException(new \Exception('Не найден шаблон страницы ' . $path . ''));
        } else {
            ob_start();
            include ROOT_DIR . $path;
            $result = ob_get_clean();
        }
        return $result;
    }
    
    public function getView(string $name, string $moduleName, $data) {
        $path = 'Modules/' . $moduleName . '/Views/' . $moduleName . 'View' . $name . '.php';
        $result = '';
        if (!file_exists(ROOT_DIR . $path)) {
            Dev::sException(new \Exception('Не найден шаблон модуля ' . $path . ''));
        } else {
            ob_start();
            include ROOT_DIR . $path;
            $result = ob_get_clean();
        }
        return $result;
    }
    
    public function getBlock(string $name, $data=array()) {
        $path = 'Templates/Blocks/' . $name . '.php';
        $result = '';
        if (!file_exists(ROOT_DIR . $path)) {
            Dev::sException(new \Exception('Не найден шаблон блока ' . $path . ''));
        } else {
            ob_start();
            include ROOT_DIR . $path;
            $result = ob_get_clean();
        }
        return $result;
    }

    public function getTextInput($name, $type, $value, $title, $placeholder, $icon) {
        $var_array = array(
            "name" => $name,
            "type"  => $type,
            "icon" => $icon,
            "value" => $value,
            "title" => $title,
            "placeholder" => $placeholder,
        );
        return $this->getBlock('TextInput', $var_array);
    }

    public function getTextarea($name, $type, $value, $title, $placeholder, $icon) {
        $var_array = array(
            "name" => $name,
            "type"  => $type,
            "icon" => $icon,
            "value" => $value,
            "title" => $title,
            "placeholder" => $placeholder,
        );
        return $this->getBlock('Textarea', $var_array);
    }
    
    public function getSelect(string $name, $value, array $selects, string $title='', string $attributes='') {
        $var_array = array(
            "name" => $name,
            "value" => $value,
            "selects" => $selects,
            "title" => $title,
            "attributes" => $attributes,
        );
        return $this->getBlock('Select', $var_array);
    }
}