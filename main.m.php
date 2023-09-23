<?php
function pixels($value)
{
    return $value . 'px';
}
class Colors
{
    public const blue = "blue";
    public const red = "red";
    public const yellow = "yellow";
    public const green = "green";
    public const pink = "pink";
    public const gray95 = "#f2f2f2";
    public static function custom(string $color)
    {
        return $color;
    }
}

class Align
{
    public const left = "left";
    public const center = "center";
    public const right = "right";
}

class Method
{
    public const get = 'GET';
    public const post  = 'POST';
    public const put = 'PUT';
    public const delete = 'DELETE';
}

class Styles
{
    public static function from($styles_obj)
    {
        $styles = '';
        $keys = array_keys($styles_obj);
        $arr_len = count($keys);
        for ($i = 0; $i < $arr_len; $i++) {
            $styles .= "{$keys[$i]}: {$styles_obj[$keys[$i]]};";
        }
        return $styles;
    }

    public static function width($size)
    {
        return "width: $size;";
    }
    public static function margin($value)
    {
        return "margin:$value;";
    }
    public static function marginY($value)
    {
        return "margin:$value 0;";
    }
    public static function marginX($value)
    {
        return "margin:0 $value;";
    }
    public static function marginLeft($value)
    {
        return "margin-left:$value;";
    }
    public static function marginRight($value)
    {
        return "margin-right:$value;";
    }
    public static function marginTop($value)
    {
        return "margin-top:$value;";
    }
    public static function marginBottom($value)
    {
        return "margin-bottom: $value;";
    }
}

class Padding
{
    public static function all($value)
    {
        return "padding:$value;";
    }
    public static function Y($value)
    {
        return "padding:$value 0;";
    }
    public static function X($value)
    {
        return "padding:0 $value;";
    }
    public static function Left($value)
    {
        return "padding-left:$value;";
    }
    public static function Right($value)
    {
        return "padding-right:$value;";
    }
    public static function Top($value)
    {
        return "padding-top:$value;";
    }
    public static function Bottom($value)
    {
        return "padding-bottom: $value;";
    }
}

function Container($child, $padding = '', $align = "left", $class = "", $id = "", $style = "", $background = "", $width = "", $height = "")
{
    return <<<HTML
    <div class="{$class}" id="{$id}" style="{$padding}text-align:{$align};background-color:{$background};height:{$height};width:{$width};{$style}">
        {$child}
    </div>
    HTML;
}

function Text($text, $color = "black", $fontSize = 16, $class = "", $id = "", $style = "")
{
    return <<<HTML
    <span id="{$id}" style="font-size: {$fontSize}px;color: {$color};{$style}">{$text}</span>
    HTML;
}

function Colum(array $childrens, $class = "", $id = "", $style = "", $padding = '')
{
    $child = "";
    foreach ($childrens as $c) {
        $child .= $c;
    }
    return <<<HTML
    <div class="{$class}" id="{$id}" style="{$padding}{$style}">
        {$child}
    </div>
    HTML;
}

function Row(array $childrens, $class = "", $id = "", $style = "")
{
    $child = "";
    foreach ($childrens as $c) {
        $child .= $c;
    }
    return <<<HTML
    <div class="{$class}" id="{$id}" style="display:flex;{$style}">
        {$child}
    </div>
    HTML;
}

function Form($child, $action, $method = 'get', $align = "left", $class = "", $id = "", $style = "", $background = "", $width = "", $height = "")
{
    return <<<HTML
    <form action="{$action}" method="{$method}" class="{$class}" id="{$id}" style="text-align:{$align};background-color:{$background};height:{$height};width:{$width};{$style}">
        {$child}
    </form>
    HTML;
}

function Label($child, $align = "left", $class = "", $id = "", $style = "", $background = "", $width = "", $height = "")
{
    return <<<HTML
    <label class="{$class}" id="{$id}" style="text-align:{$align};background-color:{$background};height:{$height};width:{$width};{$style}">
        {$child}
    </label>
    HTML;
}

class InputType
{
    public const button = 'button';
    public const checkbox = 'checkbox';
    public const color = 'color';
    public const date = 'date';
    public const email = 'email';
    public const file = 'file';
    public const hidden = 'hidden';
    public const image = 'image';
    public const month = 'month';
    public const number = 'number';
    public const password = 'password';
    public const radio = 'radio';
    public const range = 'range';
    public const reset = 'reset';
    public const search = 'search';
    public const submit = 'submit';
    public const tel = 'tel';
    public const text = 'text';
    public const time = 'time';
    public const url = 'url';
    public const week = 'week';
}

function Input($type = 'text', $name, $value = '', $class = "", $id = "", $style = "", $background = "", $width = "", $height = "")
{
    return <<<HTML
    <input type="{$type}" name="{$name}" value="{$value}" class="{$class}" id="{$id}" style="background-color:{$background};height:{$height};width:{$width};{$style}" />
    HTML;
}

function Button($text, $type = 'submit', $name = '', $value = '', $align = "left", $class = "", $id = "", $style = "", $background = "", $width = "", $height = "")
{
    return <<<HTML
    <button class="{$class}" type="{$type}" name="{$name}" value="{$value}" id="{$id}" style="text-align:{$align};background-color:{$background};height:{$height};width:{$width};{$style}">
        {$text}
    </button>
    HTML;
}
