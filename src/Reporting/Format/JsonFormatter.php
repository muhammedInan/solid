<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

class JsonFormatter {
    public function formatToJSON(Report $report){ 
        return json_encode($report->getContents()); // on remplace this par report
    }
}