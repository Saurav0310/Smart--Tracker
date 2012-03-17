<?php
    /**
     * Export all member records in .xls format
     * with the help of the xlsHelper
     */

	//input the export file name
	$this->xls->setHeader('Call_'.date('Y_m_d'));
	
    $this->xls->addXmlHeader();
    $this->xls->setWorkSheetName('Call');
    
    //1st row for columns name
    $this->xls->openRow();
    $this->xls->writeString('id');
    $this->xls->writeString('Activity Type');
    $this->xls->writeString('Done By');
    $this->xls->writeString('Recieved on');
    $this->xls->writeString('Shift');
    $this->xls->writeString('Report');
    $this->xls->closeRow();
    
    //rows for data
    foreach ($calls as $call):
    	$this->xls->openRow();
	    $this->xls->writeNumber($call['Call']['id']);
	    $this->xls->writeString($call['ActivityType']['name']);
	    $this->xls->writeString($call['User']['username']);
	    $this->xls->writeString($call['RecievedOn']['name']);
	    $this->xls->writeString($call['Shift']['name']);
	    $this->xls->writeNumber($call['Call']['report_number']);
	    $this->xls->closeRow();
    endforeach;
   
    $this->xls->addXmlFooter();
    exit();
?> 
