<?php

namespace App\Reporting\Format;

use Exception;
use App\Reporting\Report;

class HtmlFormatter implements FormatterInterface{

    public function format(Report $report){

        $contents = $report->getContents();

        $data = "";

        foreach ($contents['data'] as $value) {//on enleve le this ->data et on met contents puisque on le retrouve la function dans report
            $data .= "<li>$value</li>";
        }

        return "
            <h2>{$contents['data']}</h2>
            <em>Date : {$contents['data']}</em>
            <h4>Données : </h4>
            <ul>
                $data
            </ul>
        ";
    }

    //principe segregation interface
    // je n'en n'ai pas besoin car je respecte la regle du fait que les function quon utilise pas on est pas obliger d'utiliser meme si ya interface donc pour contrer sa on a implmenter deserialize interface
    // public function deserialize(string $str): Report
    // {
    //     throw new Exception("il est impossible de deserialiser du html");

    //     return new Report("", "", []);
    // }
}