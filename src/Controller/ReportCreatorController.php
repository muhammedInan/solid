<?php

namespace App\Controller;

use App\Reporting\Report;
use App\Reporting\Format\CsvFormatter;
use App\Reporting\Format\HtmlFormatter;
use App\Reporting\Format\JsonFormatter;

class ReportCreatorController
{
    public function show()
    {
        require_once(TEMPLATES_DIR . 'report-creator/show.html.php');
    }

    public function execute()
    {
        // Extraction des données, on fait au plus simple / rapide mais ce serait à revoir
        $date = $_POST['date'];
        $title = $_POST['title'];
        $data = $_POST['data'];
        $format = $_POST['format'];

        // Début de l'algorithme
        $report = new Report($date, $title, $data);

       // $csvFormatter = new CsvFormatter();

        if ($format === "html") {
           $formatter == new HtmlFormatter(); //$reportResult = $report->formatToHTML();
           $reportResult = $formatter->formatToHtml($report);
        } else {
            $formatter = new JsonFormatter();//$reportResult = $report->formatToJSON();
            $reportResult = $formatter->formatToJson($report);
        }

        require_once(TEMPLATES_DIR . 'report-creator/result.html.php');
    }
}
