<?php

  // load the XML
  $xml = new DOMDocument;
  $xml->load('data/feedbacks.xml');

  // load a XSL
  $xsl = new DOMDocument;
  $xsl->substitudeEntities = true;
  $xsl->load('feedbackDisplaySpecific.xsl');

  // process the XML with the XSL
  $proc = new XSLTProcessor;
  $proc->importStyleSheet($xsl); // process the XSL template

  echo $proc->transformToXML($xml);
?>