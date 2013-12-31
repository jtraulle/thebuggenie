<?php 

class ExtTBGI18n extends TBGI18n{
    public static function modifyStrings()
    {
        foreach (TBGContext::getI18n()->_strings as $k => $v) {
            TBGContext::getI18n()->_strings[$k] = "tx/".$k;
        };
    }
}