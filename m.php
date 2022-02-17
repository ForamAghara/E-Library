<?php
	// Load the XML source
	$xml = new DOMDocument;
	$xml->load('C:\xampp\htdocs\xmll\1.xml');
	// Load XSLT stylesheet
	$xsl = new DOMDocument;
	$xsl->load('C:\xampp\htdocs\xmll\2.xsl');
	// Configure the transformer
	$proc = new XSLTProcessor;
	$proc->importStyleSheet($xsl); // attach the xsl rules
	$transformed = $proc->transformToXML($xml);
	// determining if output is html document
	$html = $transformed;
	
	// splitting up html document at doctype and doc
	$html_array = explode("\n",$html,15);
	
	$html_doc = array_pop($html_array);
	
	$html_doctype = implode("\n",$html_array);
	
	// convert XHTML syntax to HTML5
	// <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	// <!DOCTYPE html>
	
	
	$html_doctype = preg_replace("/<!DOCTYPE [^>]+>/", "<!DOCTYPE html>", $html_doctype);
	
	// <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	// <html lang="en">
	
	
	$html_doctype = preg_replace('/ xmlns=\"http:\/\/www.w3.org\/1999\/xhtml\"| xml:lang="[^\"]*\"/', '', $html_doctype);
	
	
	// <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	// to this --> <meta charset="utf-8" />
	
	$html_doctype = preg_replace('/<meta http-equiv=\"Content-Type\" content=\"text\/html; charset=(.*[a-z0-9-])\" \/>/i', '<meta charset="\1" />', $html_doctype);
	$html = $html_doctype . "\n" . $html_doc;
	echo $html;
?> 