<?php

namespace App\Reporting;

use App\Reporting\Format\HtmlFormatter;
use App\Reporting\Format\JsonFormatter;
use App\Reporting\Format\HtmlSpecialFormatter;

class ReportExtractor
{

    /**
     * Doit afficher l'ensemble des formats possibles pour un rapport en se servant
     * des formatters ajoutés dans le tableau
     *
     * @param Report $report 
     *
     * @return array
     */
    public function process(Report $report): array
    {
        $results = [];

        $htmlFormatter = new HtmlFormatter();
        $htmlSpecialFormatter = new HtmlSpecialFormatter();
        $jsonFormatter = new JsonFormatter();

        $results[] = $htmlFormatter->formatToHTML($report);
        $results[] = $jsonFormatter->formatToJSON($report);
        $results[] = $htmlSpecialFormatter->formatToHtml($report);

        return $results;
    }
}
