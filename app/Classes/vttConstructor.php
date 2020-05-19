<?php
namespace App\Classes;
class vttConstructor 
{
    public static function constructVtt(Array $cues)
    {
        $implodedVtt = "WEBVTT \n\n";
        foreach ($cues as $block) {
            $implodedVtt .= (gmdate("H:i:s", $block["start"]) . ' ' . '-->' . ' ');
            $implodedVtt .= (gmdate("H:i:s", $block["end"]) . "\n");
            $implodedVtt .= ('<v ' . $block["voice"] . '>');
            $implodedVtt .= ($block["text"]);
            $implodedVtt .= ("\n");
        }
        return $implodedVtt;
    }
}
