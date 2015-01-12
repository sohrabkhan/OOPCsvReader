<?php

class ReportControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the Report Controller's generate action
     */
    public function testGenerateAction()
    {
        $report = new ReportController();

        ob_start();
        $report->generateAction("data.csv", 2);

        $this->assertContains("[2 : 01/05/2010 : USD 66.10]", ob_get_clean());
    }
}