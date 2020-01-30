<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

class HtmlFormatter{
    public function formatToHtml(Report $report){

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

}