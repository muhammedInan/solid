<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

class CsvFormatter {
    public function formatToCsv(Report $report){
        $contents = $report->getContents();

        $data = implode(";",$contents['data']);//extraire la data dans notre rapport 

        unset($contents['data']);// supprimer dans le content le tableau data

        return implode(";", $contents) . ";" . $data;
    }
}

