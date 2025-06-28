<?php
require_once APPPATH . '../vendor/autoload.php'; // Panggil autoload sebelum use

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf extends Dompdf
{
    public function __construct()
    {
        parent::__construct();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $this->setOptions($options);
    }
}
