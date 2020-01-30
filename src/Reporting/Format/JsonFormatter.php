<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

class JsonFormatter implements FormatterInterface, DeserializerInterface {

    public function format(Report $report): string{ 
        return json_encode($report->getContents()); // on remplace this par report
    }

    public function deserialize(string $str): Report
    {
        // {"title": "Mon titre", "date":2019-01-01", "data": [5,6] } //str
        $contents = json_decode($str);

        return new Report($contents['date'], $contents['title'], $contents['data']);
    }
}