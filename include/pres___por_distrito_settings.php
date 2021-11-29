<?php
$tdatapres___por_distrito = array();
$tdatapres___por_distrito[".searchableFields"] = array();
$tdatapres___por_distrito[".ShortName"] = "pres___por_distrito";
$tdatapres___por_distrito[".OwnerID"] = "";
$tdatapres___por_distrito[".OriginalTable"] = "voto_presidente";


$tdatapres___por_distrito[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatapres___por_distrito[".originalPagesByType"] = $tdatapres___por_distrito[".pagesByType"];
$tdatapres___por_distrito[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatapres___por_distrito[".originalPages"] = $tdatapres___por_distrito[".pages"];
$tdatapres___por_distrito[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatapres___por_distrito[".originalDefaultPages"] = $tdatapres___por_distrito[".defaultPages"];

//	field labels
$fieldLabelspres___por_distrito = array();
$fieldToolTipspres___por_distrito = array();
$pageTitlespres___por_distrito = array();
$placeHolderspres___por_distrito = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspres___por_distrito["Spanish"] = array();
	$fieldToolTipspres___por_distrito["Spanish"] = array();
	$placeHolderspres___por_distrito["Spanish"] = array();
	$pageTitlespres___por_distrito["Spanish"] = array();
	$fieldLabelspres___por_distrito["Spanish"]["Validos"] = "Votos Validos";
	$fieldToolTipspres___por_distrito["Spanish"]["Validos"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Validos"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Blancos"] = "Votos En Blanco";
	$fieldToolTipspres___por_distrito["Spanish"]["Blancos"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Blancos"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Nulos"] = "Votos Nulos";
	$fieldToolTipspres___por_distrito["Spanish"]["Nulos"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Nulos"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Utilizados"] = "Votos Utilizados";
	$fieldToolTipspres___por_distrito["Spanish"]["Utilizados"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Utilizados"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["No_Utilizados"] = "Votos No Utilizados";
	$fieldToolTipspres___por_distrito["Spanish"]["No_Utilizados"] = "";
	$placeHolderspres___por_distrito["Spanish"]["No_Utilizados"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Total"] = "Total de Votos";
	$fieldToolTipspres___por_distrito["Spanish"]["Total"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Total"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["id_distrito"] = "Distrito";
	$fieldToolTipspres___por_distrito["Spanish"]["id_distrito"] = "";
	$placeHolderspres___por_distrito["Spanish"]["id_distrito"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["PAC"] = "PAC";
	$fieldToolTipspres___por_distrito["Spanish"]["PAC"] = "";
	$placeHolderspres___por_distrito["Spanish"]["PAC"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["FAPER"] = "FAPER";
	$fieldToolTipspres___por_distrito["Spanish"]["FAPER"] = "";
	$placeHolderspres___por_distrito["Spanish"]["FAPER"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["NUEVA_RUTA"] = "Nueva Ruta";
	$fieldToolTipspres___por_distrito["Spanish"]["NUEVA_RUTA"] = "";
	$placeHolderspres___por_distrito["Spanish"]["NUEVA_RUTA"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["ALIANZA_PAT"] = "Alianza Patriotica";
	$fieldToolTipspres___por_distrito["Spanish"]["ALIANZA_PAT"] = "";
	$placeHolderspres___por_distrito["Spanish"]["ALIANZA_PAT"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["MIDE"] = "MIDE";
	$fieldToolTipspres___por_distrito["Spanish"]["MIDE"] = "";
	$placeHolderspres___por_distrito["Spanish"]["MIDE"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["VAMOS"] = "VAMOS";
	$fieldToolTipspres___por_distrito["Spanish"]["VAMOS"] = "";
	$placeHolderspres___por_distrito["Spanish"]["VAMOS"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["LIBRE"] = "Libre";
	$fieldToolTipspres___por_distrito["Spanish"]["LIBRE"] = "";
	$placeHolderspres___por_distrito["Spanish"]["LIBRE"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["PSH"] = "PSH";
	$fieldToolTipspres___por_distrito["Spanish"]["PSH"] = "";
	$placeHolderspres___por_distrito["Spanish"]["PSH"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["LIDEHR"] = "LIDEHR";
	$fieldToolTipspres___por_distrito["Spanish"]["LIDEHR"] = "";
	$placeHolderspres___por_distrito["Spanish"]["LIDEHR"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["UD"] = "UD";
	$fieldToolTipspres___por_distrito["Spanish"]["UD"] = "";
	$placeHolderspres___por_distrito["Spanish"]["UD"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["DC"] = "DC";
	$fieldToolTipspres___por_distrito["Spanish"]["DC"] = "";
	$placeHolderspres___por_distrito["Spanish"]["DC"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["TSH"] = "TSH";
	$fieldToolTipspres___por_distrito["Spanish"]["TSH"] = "";
	$placeHolderspres___por_distrito["Spanish"]["TSH"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["HON_HUMANA"] = "Honduras Humana";
	$fieldToolTipspres___por_distrito["Spanish"]["HON_HUMANA"] = "";
	$placeHolderspres___por_distrito["Spanish"]["HON_HUMANA"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["LIBERAL"] = "Partido Liberal";
	$fieldToolTipspres___por_distrito["Spanish"]["LIBERAL"] = "";
	$placeHolderspres___por_distrito["Spanish"]["LIBERAL"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["NACIONAL"] = "Partido Nacional";
	$fieldToolTipspres___por_distrito["Spanish"]["NACIONAL"] = "";
	$placeHolderspres___por_distrito["Spanish"]["NACIONAL"] = "";
	if (count($fieldToolTipspres___por_distrito["Spanish"]))
		$tdatapres___por_distrito[".isUseToolTips"] = true;
}


	$tdatapres___por_distrito[".NCSearch"] = true;



$tdatapres___por_distrito[".shortTableName"] = "pres___por_distrito";
$tdatapres___por_distrito[".nSecOptions"] = 0;

$tdatapres___por_distrito[".mainTableOwnerID"] = "";
$tdatapres___por_distrito[".entityType"] = 2;
$tdatapres___por_distrito[".connId"] = "internas_new_at_localhost";


$tdatapres___por_distrito[".strOriginalTableName"] = "voto_presidente";

	



$tdatapres___por_distrito[".showAddInPopup"] = false;

$tdatapres___por_distrito[".showEditInPopup"] = false;

$tdatapres___por_distrito[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapres___por_distrito[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapres___por_distrito[".listAjax"] = false;
//	temporary
//$tdatapres___por_distrito[".listAjax"] = false;

	$tdatapres___por_distrito[".audit"] = false;

	$tdatapres___por_distrito[".locking"] = false;


$pages = $tdatapres___por_distrito[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapres___por_distrito[".edit"] = true;
	$tdatapres___por_distrito[".afterEditAction"] = 1;
	$tdatapres___por_distrito[".closePopupAfterEdit"] = 1;
	$tdatapres___por_distrito[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapres___por_distrito[".add"] = true;
$tdatapres___por_distrito[".afterAddAction"] = 1;
$tdatapres___por_distrito[".closePopupAfterAdd"] = 1;
$tdatapres___por_distrito[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapres___por_distrito[".list"] = true;
}



$tdatapres___por_distrito[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapres___por_distrito[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapres___por_distrito[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapres___por_distrito[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapres___por_distrito[".printFriendly"] = true;
}



$tdatapres___por_distrito[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapres___por_distrito[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapres___por_distrito[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapres___por_distrito[".isUseAjaxSuggest"] = true;






$tdatapres___por_distrito[".ajaxCodeSnippetAdded"] = false;

$tdatapres___por_distrito[".buttonsAdded"] = false;

$tdatapres___por_distrito[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapres___por_distrito[".isUseTimeForSearch"] = false;


$tdatapres___por_distrito[".badgeColor"] = "DC143C";


$tdatapres___por_distrito[".allSearchFields"] = array();
$tdatapres___por_distrito[".filterFields"] = array();
$tdatapres___por_distrito[".requiredSearchFields"] = array();

$tdatapres___por_distrito[".googleLikeFields"] = array();
$tdatapres___por_distrito[".googleLikeFields"][] = "id_distrito";
$tdatapres___por_distrito[".googleLikeFields"][] = "PAC";
$tdatapres___por_distrito[".googleLikeFields"][] = "FAPER";
$tdatapres___por_distrito[".googleLikeFields"][] = "NUEVA_RUTA";
$tdatapres___por_distrito[".googleLikeFields"][] = "ALIANZA_PAT";
$tdatapres___por_distrito[".googleLikeFields"][] = "MIDE";
$tdatapres___por_distrito[".googleLikeFields"][] = "VAMOS";
$tdatapres___por_distrito[".googleLikeFields"][] = "LIBRE";
$tdatapres___por_distrito[".googleLikeFields"][] = "PSH";
$tdatapres___por_distrito[".googleLikeFields"][] = "LIDEHR";
$tdatapres___por_distrito[".googleLikeFields"][] = "UD";
$tdatapres___por_distrito[".googleLikeFields"][] = "DC";
$tdatapres___por_distrito[".googleLikeFields"][] = "TSH";
$tdatapres___por_distrito[".googleLikeFields"][] = "HON_HUMANA";
$tdatapres___por_distrito[".googleLikeFields"][] = "LIBERAL";
$tdatapres___por_distrito[".googleLikeFields"][] = "NACIONAL";
$tdatapres___por_distrito[".googleLikeFields"][] = "Validos";
$tdatapres___por_distrito[".googleLikeFields"][] = "Blancos";
$tdatapres___por_distrito[".googleLikeFields"][] = "Nulos";
$tdatapres___por_distrito[".googleLikeFields"][] = "Utilizados";
$tdatapres___por_distrito[".googleLikeFields"][] = "No_Utilizados";
$tdatapres___por_distrito[".googleLikeFields"][] = "Total";



$tdatapres___por_distrito[".tableType"] = "report";

$tdatapres___por_distrito[".printerPageOrientation"] = 1;
$tdatapres___por_distrito[".nPrinterPageScale"] = 100;

$tdatapres___por_distrito[".nPrinterSplitRecords"] = 20;

$tdatapres___por_distrito[".geocodingEnabled"] = false;

//report settings
$tdatapres___por_distrito[".printReportLayout"] = 6;

$tdatapres___por_distrito[".reportPrintPartitionType"] = 1;
$tdatapres___por_distrito[".reportPrintGroupsPerPage"] = 20;
$tdatapres___por_distrito[".lowGroup"] = 0;



$tdatapres___por_distrito[".pageSize"] = 20;


$tdatapres___por_distrito[".isExistTotalFields"] = true;



$tdatapres___por_distrito[".reportGlobalSummary"] = true;

$tdatapres___por_distrito[".repShowDet"] = true;

$tdatapres___por_distrito[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "order by ur.id_distrito";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapres___por_distrito[".strOrderBy"] = $tstrOrderBy;

$tdatapres___por_distrito[".orderindexes"] = array();
	$tdatapres___por_distrito[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "ur.id_distrito");



$tdatapres___por_distrito[".sqlHead"] = "select ur.id_distrito,   (select concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as PAC,  (select concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as FAPER,  (select concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as NUEVA_RUTA,  (select concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as ALIANZA_PAT,  (select concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as MIDE,  (select concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as VAMOS,  (select concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as LIBRE,  (select concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as PSH,  (select concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as LIDEHR,  (select concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as UD,  (select concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as DC,  (select concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as TSH,  (select concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as HON_HUMANA,  (select concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as LIBERAL,  (select concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as NACIONAL,  (select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Validos,  (select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Blancos,  (select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Nulos,  (select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Utilizados,  (select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as No_Utilizados,  (select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Total";
$tdatapres___por_distrito[".sqlFrom"] = "from voto_presidente as vp  inner join urna as ur on vp.id_urna = ur.id_urna";
$tdatapres___por_distrito[".sqlWhereExpr"] = "";
$tdatapres___por_distrito[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapres___por_distrito[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapres___por_distrito[".arrGroupsPerPage"] = $arrGPP;

$tdatapres___por_distrito[".highlightSearchResults"] = true;

$tableKeyspres___por_distrito = array();
$tdatapres___por_distrito[".Keys"] = $tableKeyspres___por_distrito;


$tdatapres___por_distrito[".hideMobileList"] = array();




//	id_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_distrito";
	$fdata["GoodName"] = "id_distrito";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","id_distrito");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "id_distrito";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ur.id_distrito";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "distritos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_distrito";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_distrito";

	

	
	$edata["LookupOrderBy"] = "id_distrito";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["id_distrito"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "id_distrito";
//	PAC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PAC";
	$fdata["GoodName"] = "PAC";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","PAC");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "PAC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["PAC"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "PAC";
//	FAPER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FAPER";
	$fdata["GoodName"] = "FAPER";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","FAPER");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "FAPER";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["FAPER"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "FAPER";
//	NUEVA_RUTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NUEVA_RUTA";
	$fdata["GoodName"] = "NUEVA_RUTA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","NUEVA_RUTA");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "NUEVA_RUTA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["NUEVA_RUTA"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "NUEVA_RUTA";
//	ALIANZA_PAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ALIANZA_PAT";
	$fdata["GoodName"] = "ALIANZA_PAT";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","ALIANZA_PAT");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "ALIANZA_PAT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["ALIANZA_PAT"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "ALIANZA_PAT";
//	MIDE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MIDE";
	$fdata["GoodName"] = "MIDE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","MIDE");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "MIDE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["MIDE"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "MIDE";
//	VAMOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "VAMOS";
	$fdata["GoodName"] = "VAMOS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","VAMOS");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "VAMOS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["VAMOS"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "VAMOS";
//	LIBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LIBRE";
	$fdata["GoodName"] = "LIBRE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","LIBRE");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIBRE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["LIBRE"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "LIBRE";
//	PSH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PSH";
	$fdata["GoodName"] = "PSH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","PSH");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "PSH";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["PSH"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "PSH";
//	LIDEHR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LIDEHR";
	$fdata["GoodName"] = "LIDEHR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","LIDEHR");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIDEHR";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["LIDEHR"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "LIDEHR";
//	UD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UD";
	$fdata["GoodName"] = "UD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","UD");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "UD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["UD"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "UD";
//	DC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DC";
	$fdata["GoodName"] = "DC";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","DC");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "DC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["DC"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "DC";
//	TSH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TSH";
	$fdata["GoodName"] = "TSH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","TSH");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "TSH";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["TSH"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "TSH";
//	HON_HUMANA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "HON_HUMANA";
	$fdata["GoodName"] = "HON_HUMANA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","HON_HUMANA");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "HON_HUMANA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["HON_HUMANA"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "HON_HUMANA";
//	LIBERAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "LIBERAL";
	$fdata["GoodName"] = "LIBERAL";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","LIBERAL");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIBERAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["LIBERAL"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "LIBERAL";
//	NACIONAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "NACIONAL";
	$fdata["GoodName"] = "NACIONAL";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","NACIONAL");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "NACIONAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["NACIONAL"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "NACIONAL";
//	Validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Validos";
	$fdata["GoodName"] = "Validos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Validos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "validos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["Validos"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Validos";
//	Blancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Blancos";
	$fdata["GoodName"] = "Blancos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Blancos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "blancos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["Blancos"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Blancos";
//	Nulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Nulos";
	$fdata["GoodName"] = "Nulos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Nulos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "nulos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["Nulos"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Nulos";
//	Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Utilizados";
	$fdata["GoodName"] = "Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["Utilizados"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Utilizados";
//	No_Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "No_Utilizados";
	$fdata["GoodName"] = "No_Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","No_Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "no_utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["No_Utilizados"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "No_Utilizados";
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Total");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapres___por_distrito["Total"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Total";


$tables_data["Pres - Por Distrito"]=&$tdatapres___por_distrito;
$field_labels["Pres___Por_Distrito"] = &$fieldLabelspres___por_distrito;
$fieldToolTips["Pres___Por_Distrito"] = &$fieldToolTipspres___por_distrito;
$placeHolders["Pres___Por_Distrito"] = &$placeHolderspres___por_distrito;
$page_titles["Pres___Por_Distrito"] = &$pageTitlespres___por_distrito;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Pres - Por Distrito"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Pres - Por Distrito"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pres___por_distrito()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "ur.id_distrito,   (select concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as PAC,  (select concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as FAPER,  (select concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as NUEVA_RUTA,  (select concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as ALIANZA_PAT,  (select concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as MIDE,  (select concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as VAMOS,  (select concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as LIBRE,  (select concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as PSH,  (select concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as LIDEHR,  (select concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as UD,  (select concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as DC,  (select concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as TSH,  (select concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as HON_HUMANA,  (select concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as LIBERAL,  (select concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as NACIONAL,  (select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Validos,  (select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Blancos,  (select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Nulos,  (select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Utilizados,  (select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as No_Utilizados,  (select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Total";
$proto0["m_strFrom"] = "from voto_presidente as vp  inner join urna as ur on vp.id_urna = ur.id_urna";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by ur.id_distrito";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto6["m_sql"] = "ur.id_distrito";
$proto6["m_srcTableName"] = "Pres - Por Distrito";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_strHead"] = "select";
$proto9["m_strFieldList"] = "concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")";
$proto9["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto9["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto9["m_strOrderBy"] = "";
	
		;
			$proto9["cipherer"] = null;
$proto11=array();
$proto11["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "= ur.id_distrito";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_where"] = $obj;
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto9["m_having"] = $obj;
$proto9["m_fieldlist"] = array();
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_CUSTOM";
$proto16["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato1)"
));

$proto16["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto16["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND(((sum(p.candidato1))/(sum(validos))*100),1)"
));

$proto16["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")";
$proto15["m_srcTableName"] = "Pres - Por Distrito";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto9["m_fieldlist"][]=$obj;
$proto9["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "voto_presidente";
$proto22["m_srcTableName"] = "Pres - Por Distrito";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "elecciones";
$proto22["m_columns"][] = "id_urna";
$proto22["m_columns"][] = "candidato1";
$proto22["m_columns"][] = "candidato2";
$proto22["m_columns"][] = "candidato3";
$proto22["m_columns"][] = "candidato4";
$proto22["m_columns"][] = "candidato5";
$proto22["m_columns"][] = "candidato6";
$proto22["m_columns"][] = "candidato7";
$proto22["m_columns"][] = "candidato8";
$proto22["m_columns"][] = "candidato9";
$proto22["m_columns"][] = "candidato10";
$proto22["m_columns"][] = "candidato11";
$proto22["m_columns"][] = "candidato12";
$proto22["m_columns"][] = "candidato13";
$proto22["m_columns"][] = "candidato14";
$proto22["m_columns"][] = "candidato15";
$proto22["m_columns"][] = "validos";
$proto22["m_columns"][] = "blancos";
$proto22["m_columns"][] = "nulos";
$proto22["m_columns"][] = "utilizados";
$proto22["m_columns"][] = "no_utilizados";
$proto22["m_columns"][] = "total";
$proto22["m_columns"][] = "usuario";
$proto22["m_columns"][] = "fecha";
$proto22["m_columns"][] = "editado_por";
$proto22["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "voto_presidente as p";
$proto21["m_alias"] = "p";
$proto21["m_srcTableName"] = "Pres - Por Distrito";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto9["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_INNERJOIN";
			$proto26=array();
$proto26["m_strName"] = "urna";
$proto26["m_srcTableName"] = "Pres - Por Distrito";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id_distrito";
$proto26["m_columns"][] = "id_sector";
$proto26["m_columns"][] = "id_urna";
$proto26["m_columns"][] = "nombre_centro";
$proto26["m_columns"][] = "ubicación";
$proto26["m_columns"][] = "votantes";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto25["m_alias"] = "u";
$proto25["m_srcTableName"] = "Pres - Por Distrito";
$proto27=array();
$proto27["m_sql"] = "p.id_urna = u.id_urna";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= u.id_urna";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto9["m_fromlist"][]=$obj;
$proto9["m_groupby"] = array();
$proto9["m_orderby"] = array();
$proto9["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto9);

$proto8["m_sql"] = "(select concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto8["m_srcTableName"] = "Pres - Por Distrito";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "PAC";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_strHead"] = "select";
$proto30["m_strFieldList"] = "concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")";
$proto30["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto30["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto30["m_strOrderBy"] = "";
	
		;
			$proto30["cipherer"] = null;
$proto32=array();
$proto32["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= ur.id_distrito";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_where"] = $obj;
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto30["m_having"] = $obj;
$proto30["m_fieldlist"] = array();
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato2)"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato2)/(sum(validos))))*100),1)"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")";
$proto36["m_srcTableName"] = "Pres - Por Distrito";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto30["m_fieldlist"][]=$obj;
$proto30["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "voto_presidente";
$proto43["m_srcTableName"] = "Pres - Por Distrito";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "elecciones";
$proto43["m_columns"][] = "id_urna";
$proto43["m_columns"][] = "candidato1";
$proto43["m_columns"][] = "candidato2";
$proto43["m_columns"][] = "candidato3";
$proto43["m_columns"][] = "candidato4";
$proto43["m_columns"][] = "candidato5";
$proto43["m_columns"][] = "candidato6";
$proto43["m_columns"][] = "candidato7";
$proto43["m_columns"][] = "candidato8";
$proto43["m_columns"][] = "candidato9";
$proto43["m_columns"][] = "candidato10";
$proto43["m_columns"][] = "candidato11";
$proto43["m_columns"][] = "candidato12";
$proto43["m_columns"][] = "candidato13";
$proto43["m_columns"][] = "candidato14";
$proto43["m_columns"][] = "candidato15";
$proto43["m_columns"][] = "validos";
$proto43["m_columns"][] = "blancos";
$proto43["m_columns"][] = "nulos";
$proto43["m_columns"][] = "utilizados";
$proto43["m_columns"][] = "no_utilizados";
$proto43["m_columns"][] = "total";
$proto43["m_columns"][] = "usuario";
$proto43["m_columns"][] = "fecha";
$proto43["m_columns"][] = "editado_por";
$proto43["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "voto_presidente as p";
$proto42["m_alias"] = "p";
$proto42["m_srcTableName"] = "Pres - Por Distrito";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto30["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_INNERJOIN";
			$proto47=array();
$proto47["m_strName"] = "urna";
$proto47["m_srcTableName"] = "Pres - Por Distrito";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id_distrito";
$proto47["m_columns"][] = "id_sector";
$proto47["m_columns"][] = "id_urna";
$proto47["m_columns"][] = "nombre_centro";
$proto47["m_columns"][] = "ubicación";
$proto47["m_columns"][] = "votantes";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto46["m_alias"] = "u";
$proto46["m_srcTableName"] = "Pres - Por Distrito";
$proto48=array();
$proto48["m_sql"] = "p.id_urna = u.id_urna";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= u.id_urna";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto30["m_fromlist"][]=$obj;
$proto30["m_groupby"] = array();
$proto30["m_orderby"] = array();
$proto30["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto30);

$proto29["m_sql"] = "(select concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto29["m_srcTableName"] = "Pres - Por Distrito";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "FAPER";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$proto51=array();
$proto51["m_strHead"] = "select";
$proto51["m_strFieldList"] = "concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")";
$proto51["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto51["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto51["m_strOrderBy"] = "";
	
		;
			$proto51["cipherer"] = null;
$proto53=array();
$proto53["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= ur.id_distrito";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_where"] = $obj;
$proto55=array();
$proto55["m_sql"] = "";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto51["m_having"] = $obj;
$proto51["m_fieldlist"] = array();
						$proto57=array();
			$proto58=array();
$proto58["m_functiontype"] = "SQLF_CUSTOM";
$proto58["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato3)"
));

$proto58["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto58["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato3)/(sum(validos))))*100),1)"
));

$proto58["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto58["m_arguments"][]=$obj;
$proto58["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto58);

$proto57["m_sql"] = "concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")";
$proto57["m_srcTableName"] = "Pres - Por Distrito";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto51["m_fieldlist"][]=$obj;
$proto51["m_fromlist"] = array();
												$proto63=array();
$proto63["m_link"] = "SQLL_MAIN";
			$proto64=array();
$proto64["m_strName"] = "voto_presidente";
$proto64["m_srcTableName"] = "Pres - Por Distrito";
$proto64["m_columns"] = array();
$proto64["m_columns"][] = "elecciones";
$proto64["m_columns"][] = "id_urna";
$proto64["m_columns"][] = "candidato1";
$proto64["m_columns"][] = "candidato2";
$proto64["m_columns"][] = "candidato3";
$proto64["m_columns"][] = "candidato4";
$proto64["m_columns"][] = "candidato5";
$proto64["m_columns"][] = "candidato6";
$proto64["m_columns"][] = "candidato7";
$proto64["m_columns"][] = "candidato8";
$proto64["m_columns"][] = "candidato9";
$proto64["m_columns"][] = "candidato10";
$proto64["m_columns"][] = "candidato11";
$proto64["m_columns"][] = "candidato12";
$proto64["m_columns"][] = "candidato13";
$proto64["m_columns"][] = "candidato14";
$proto64["m_columns"][] = "candidato15";
$proto64["m_columns"][] = "validos";
$proto64["m_columns"][] = "blancos";
$proto64["m_columns"][] = "nulos";
$proto64["m_columns"][] = "utilizados";
$proto64["m_columns"][] = "no_utilizados";
$proto64["m_columns"][] = "total";
$proto64["m_columns"][] = "usuario";
$proto64["m_columns"][] = "fecha";
$proto64["m_columns"][] = "editado_por";
$proto64["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto64);

$proto63["m_table"] = $obj;
$proto63["m_sql"] = "voto_presidente as p";
$proto63["m_alias"] = "p";
$proto63["m_srcTableName"] = "Pres - Por Distrito";
$proto65=array();
$proto65["m_sql"] = "";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

$proto63["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto63);

$proto51["m_fromlist"][]=$obj;
												$proto67=array();
$proto67["m_link"] = "SQLL_INNERJOIN";
			$proto68=array();
$proto68["m_strName"] = "urna";
$proto68["m_srcTableName"] = "Pres - Por Distrito";
$proto68["m_columns"] = array();
$proto68["m_columns"][] = "id_distrito";
$proto68["m_columns"][] = "id_sector";
$proto68["m_columns"][] = "id_urna";
$proto68["m_columns"][] = "nombre_centro";
$proto68["m_columns"][] = "ubicación";
$proto68["m_columns"][] = "votantes";
$obj = new SQLTable($proto68);

$proto67["m_table"] = $obj;
$proto67["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto67["m_alias"] = "u";
$proto67["m_srcTableName"] = "Pres - Por Distrito";
$proto69=array();
$proto69["m_sql"] = "p.id_urna = u.id_urna";
$proto69["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
$proto69["m_strCase"] = "= u.id_urna";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = false;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

$proto67["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto67);

$proto51["m_fromlist"][]=$obj;
$proto51["m_groupby"] = array();
$proto51["m_orderby"] = array();
$proto51["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto51);

$proto50["m_sql"] = "(select concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto50["m_srcTableName"] = "Pres - Por Distrito";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "NUEVA_RUTA";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$proto72=array();
$proto72["m_strHead"] = "select";
$proto72["m_strFieldList"] = "concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")";
$proto72["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto72["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto72["m_strOrderBy"] = "";
	
		;
			$proto72["cipherer"] = null;
$proto74=array();
$proto74["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= ur.id_distrito";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_where"] = $obj;
$proto76=array();
$proto76["m_sql"] = "";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto72["m_having"] = $obj;
$proto72["m_fieldlist"] = array();
						$proto78=array();
			$proto79=array();
$proto79["m_functiontype"] = "SQLF_CUSTOM";
$proto79["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato4)"
));

$proto79["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto79["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato4)/(sum(validos))))*100),1)"
));

$proto79["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto79["m_arguments"][]=$obj;
$proto79["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto79);

$proto78["m_sql"] = "concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")";
$proto78["m_srcTableName"] = "Pres - Por Distrito";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto72["m_fieldlist"][]=$obj;
$proto72["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "voto_presidente";
$proto85["m_srcTableName"] = "Pres - Por Distrito";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "elecciones";
$proto85["m_columns"][] = "id_urna";
$proto85["m_columns"][] = "candidato1";
$proto85["m_columns"][] = "candidato2";
$proto85["m_columns"][] = "candidato3";
$proto85["m_columns"][] = "candidato4";
$proto85["m_columns"][] = "candidato5";
$proto85["m_columns"][] = "candidato6";
$proto85["m_columns"][] = "candidato7";
$proto85["m_columns"][] = "candidato8";
$proto85["m_columns"][] = "candidato9";
$proto85["m_columns"][] = "candidato10";
$proto85["m_columns"][] = "candidato11";
$proto85["m_columns"][] = "candidato12";
$proto85["m_columns"][] = "candidato13";
$proto85["m_columns"][] = "candidato14";
$proto85["m_columns"][] = "candidato15";
$proto85["m_columns"][] = "validos";
$proto85["m_columns"][] = "blancos";
$proto85["m_columns"][] = "nulos";
$proto85["m_columns"][] = "utilizados";
$proto85["m_columns"][] = "no_utilizados";
$proto85["m_columns"][] = "total";
$proto85["m_columns"][] = "usuario";
$proto85["m_columns"][] = "fecha";
$proto85["m_columns"][] = "editado_por";
$proto85["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "voto_presidente as p";
$proto84["m_alias"] = "p";
$proto84["m_srcTableName"] = "Pres - Por Distrito";
$proto86=array();
$proto86["m_sql"] = "";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto72["m_fromlist"][]=$obj;
												$proto88=array();
$proto88["m_link"] = "SQLL_INNERJOIN";
			$proto89=array();
$proto89["m_strName"] = "urna";
$proto89["m_srcTableName"] = "Pres - Por Distrito";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "id_distrito";
$proto89["m_columns"][] = "id_sector";
$proto89["m_columns"][] = "id_urna";
$proto89["m_columns"][] = "nombre_centro";
$proto89["m_columns"][] = "ubicación";
$proto89["m_columns"][] = "votantes";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto88["m_alias"] = "u";
$proto88["m_srcTableName"] = "Pres - Por Distrito";
$proto90=array();
$proto90["m_sql"] = "p.id_urna = u.id_urna";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "= u.id_urna";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto72["m_fromlist"][]=$obj;
$proto72["m_groupby"] = array();
$proto72["m_orderby"] = array();
$proto72["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto72);

$proto71["m_sql"] = "(select concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto71["m_srcTableName"] = "Pres - Por Distrito";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "ALIANZA_PAT";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$proto93=array();
$proto93["m_strHead"] = "select";
$proto93["m_strFieldList"] = "concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")";
$proto93["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto93["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto93["m_strOrderBy"] = "";
	
		;
			$proto93["cipherer"] = null;
$proto95=array();
$proto95["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto95["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto95["m_column"]=$obj;
$proto95["m_contained"] = array();
$proto95["m_strCase"] = "= ur.id_distrito";
$proto95["m_havingmode"] = false;
$proto95["m_inBrackets"] = false;
$proto95["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto95);

$proto93["m_where"] = $obj;
$proto97=array();
$proto97["m_sql"] = "";
$proto97["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto97["m_column"]=$obj;
$proto97["m_contained"] = array();
$proto97["m_strCase"] = "";
$proto97["m_havingmode"] = false;
$proto97["m_inBrackets"] = false;
$proto97["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto97);

$proto93["m_having"] = $obj;
$proto93["m_fieldlist"] = array();
						$proto99=array();
			$proto100=array();
$proto100["m_functiontype"] = "SQLF_CUSTOM";
$proto100["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato5)"
));

$proto100["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto100["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato5)/(sum(validos))))*100),1)"
));

$proto100["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto100["m_arguments"][]=$obj;
$proto100["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto100);

$proto99["m_sql"] = "concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")";
$proto99["m_srcTableName"] = "Pres - Por Distrito";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto93["m_fieldlist"][]=$obj;
$proto93["m_fromlist"] = array();
												$proto105=array();
$proto105["m_link"] = "SQLL_MAIN";
			$proto106=array();
$proto106["m_strName"] = "voto_presidente";
$proto106["m_srcTableName"] = "Pres - Por Distrito";
$proto106["m_columns"] = array();
$proto106["m_columns"][] = "elecciones";
$proto106["m_columns"][] = "id_urna";
$proto106["m_columns"][] = "candidato1";
$proto106["m_columns"][] = "candidato2";
$proto106["m_columns"][] = "candidato3";
$proto106["m_columns"][] = "candidato4";
$proto106["m_columns"][] = "candidato5";
$proto106["m_columns"][] = "candidato6";
$proto106["m_columns"][] = "candidato7";
$proto106["m_columns"][] = "candidato8";
$proto106["m_columns"][] = "candidato9";
$proto106["m_columns"][] = "candidato10";
$proto106["m_columns"][] = "candidato11";
$proto106["m_columns"][] = "candidato12";
$proto106["m_columns"][] = "candidato13";
$proto106["m_columns"][] = "candidato14";
$proto106["m_columns"][] = "candidato15";
$proto106["m_columns"][] = "validos";
$proto106["m_columns"][] = "blancos";
$proto106["m_columns"][] = "nulos";
$proto106["m_columns"][] = "utilizados";
$proto106["m_columns"][] = "no_utilizados";
$proto106["m_columns"][] = "total";
$proto106["m_columns"][] = "usuario";
$proto106["m_columns"][] = "fecha";
$proto106["m_columns"][] = "editado_por";
$proto106["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto106);

$proto105["m_table"] = $obj;
$proto105["m_sql"] = "voto_presidente as p";
$proto105["m_alias"] = "p";
$proto105["m_srcTableName"] = "Pres - Por Distrito";
$proto107=array();
$proto107["m_sql"] = "";
$proto107["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto107["m_column"]=$obj;
$proto107["m_contained"] = array();
$proto107["m_strCase"] = "";
$proto107["m_havingmode"] = false;
$proto107["m_inBrackets"] = false;
$proto107["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto107);

$proto105["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto105);

$proto93["m_fromlist"][]=$obj;
												$proto109=array();
$proto109["m_link"] = "SQLL_INNERJOIN";
			$proto110=array();
$proto110["m_strName"] = "urna";
$proto110["m_srcTableName"] = "Pres - Por Distrito";
$proto110["m_columns"] = array();
$proto110["m_columns"][] = "id_distrito";
$proto110["m_columns"][] = "id_sector";
$proto110["m_columns"][] = "id_urna";
$proto110["m_columns"][] = "nombre_centro";
$proto110["m_columns"][] = "ubicación";
$proto110["m_columns"][] = "votantes";
$obj = new SQLTable($proto110);

$proto109["m_table"] = $obj;
$proto109["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto109["m_alias"] = "u";
$proto109["m_srcTableName"] = "Pres - Por Distrito";
$proto111=array();
$proto111["m_sql"] = "p.id_urna = u.id_urna";
$proto111["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto111["m_column"]=$obj;
$proto111["m_contained"] = array();
$proto111["m_strCase"] = "= u.id_urna";
$proto111["m_havingmode"] = false;
$proto111["m_inBrackets"] = false;
$proto111["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto111);

$proto109["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto109);

$proto93["m_fromlist"][]=$obj;
$proto93["m_groupby"] = array();
$proto93["m_orderby"] = array();
$proto93["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto93);

$proto92["m_sql"] = "(select concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto92["m_srcTableName"] = "Pres - Por Distrito";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "MIDE";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$proto114=array();
$proto114["m_strHead"] = "select";
$proto114["m_strFieldList"] = "concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")";
$proto114["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto114["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto114["m_strOrderBy"] = "";
	
		;
			$proto114["cipherer"] = null;
$proto116=array();
$proto116["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "= ur.id_distrito";
$proto116["m_havingmode"] = false;
$proto116["m_inBrackets"] = false;
$proto116["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto116);

$proto114["m_where"] = $obj;
$proto118=array();
$proto118["m_sql"] = "";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto114["m_having"] = $obj;
$proto114["m_fieldlist"] = array();
						$proto120=array();
			$proto121=array();
$proto121["m_functiontype"] = "SQLF_CUSTOM";
$proto121["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato6)"
));

$proto121["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto121["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato6)/(sum(validos))))*100),1)"
));

$proto121["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto121["m_arguments"][]=$obj;
$proto121["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto121);

$proto120["m_sql"] = "concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")";
$proto120["m_srcTableName"] = "Pres - Por Distrito";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto114["m_fieldlist"][]=$obj;
$proto114["m_fromlist"] = array();
												$proto126=array();
$proto126["m_link"] = "SQLL_MAIN";
			$proto127=array();
$proto127["m_strName"] = "voto_presidente";
$proto127["m_srcTableName"] = "Pres - Por Distrito";
$proto127["m_columns"] = array();
$proto127["m_columns"][] = "elecciones";
$proto127["m_columns"][] = "id_urna";
$proto127["m_columns"][] = "candidato1";
$proto127["m_columns"][] = "candidato2";
$proto127["m_columns"][] = "candidato3";
$proto127["m_columns"][] = "candidato4";
$proto127["m_columns"][] = "candidato5";
$proto127["m_columns"][] = "candidato6";
$proto127["m_columns"][] = "candidato7";
$proto127["m_columns"][] = "candidato8";
$proto127["m_columns"][] = "candidato9";
$proto127["m_columns"][] = "candidato10";
$proto127["m_columns"][] = "candidato11";
$proto127["m_columns"][] = "candidato12";
$proto127["m_columns"][] = "candidato13";
$proto127["m_columns"][] = "candidato14";
$proto127["m_columns"][] = "candidato15";
$proto127["m_columns"][] = "validos";
$proto127["m_columns"][] = "blancos";
$proto127["m_columns"][] = "nulos";
$proto127["m_columns"][] = "utilizados";
$proto127["m_columns"][] = "no_utilizados";
$proto127["m_columns"][] = "total";
$proto127["m_columns"][] = "usuario";
$proto127["m_columns"][] = "fecha";
$proto127["m_columns"][] = "editado_por";
$proto127["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto127);

$proto126["m_table"] = $obj;
$proto126["m_sql"] = "voto_presidente as p";
$proto126["m_alias"] = "p";
$proto126["m_srcTableName"] = "Pres - Por Distrito";
$proto128=array();
$proto128["m_sql"] = "";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

$proto126["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto126);

$proto114["m_fromlist"][]=$obj;
												$proto130=array();
$proto130["m_link"] = "SQLL_INNERJOIN";
			$proto131=array();
$proto131["m_strName"] = "urna";
$proto131["m_srcTableName"] = "Pres - Por Distrito";
$proto131["m_columns"] = array();
$proto131["m_columns"][] = "id_distrito";
$proto131["m_columns"][] = "id_sector";
$proto131["m_columns"][] = "id_urna";
$proto131["m_columns"][] = "nombre_centro";
$proto131["m_columns"][] = "ubicación";
$proto131["m_columns"][] = "votantes";
$obj = new SQLTable($proto131);

$proto130["m_table"] = $obj;
$proto130["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto130["m_alias"] = "u";
$proto130["m_srcTableName"] = "Pres - Por Distrito";
$proto132=array();
$proto132["m_sql"] = "p.id_urna = u.id_urna";
$proto132["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto132["m_column"]=$obj;
$proto132["m_contained"] = array();
$proto132["m_strCase"] = "= u.id_urna";
$proto132["m_havingmode"] = false;
$proto132["m_inBrackets"] = false;
$proto132["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto132);

$proto130["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto130);

$proto114["m_fromlist"][]=$obj;
$proto114["m_groupby"] = array();
$proto114["m_orderby"] = array();
$proto114["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto114);

$proto113["m_sql"] = "(select concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto113["m_srcTableName"] = "Pres - Por Distrito";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "VAMOS";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$proto135=array();
$proto135["m_strHead"] = "select";
$proto135["m_strFieldList"] = "concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")";
$proto135["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto135["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto135["m_strOrderBy"] = "";
	
		;
			$proto135["cipherer"] = null;
$proto137=array();
$proto137["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto137["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto137["m_column"]=$obj;
$proto137["m_contained"] = array();
$proto137["m_strCase"] = "= ur.id_distrito";
$proto137["m_havingmode"] = false;
$proto137["m_inBrackets"] = false;
$proto137["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto137);

$proto135["m_where"] = $obj;
$proto139=array();
$proto139["m_sql"] = "";
$proto139["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto139["m_column"]=$obj;
$proto139["m_contained"] = array();
$proto139["m_strCase"] = "";
$proto139["m_havingmode"] = false;
$proto139["m_inBrackets"] = false;
$proto139["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto139);

$proto135["m_having"] = $obj;
$proto135["m_fieldlist"] = array();
						$proto141=array();
			$proto142=array();
$proto142["m_functiontype"] = "SQLF_CUSTOM";
$proto142["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato7)"
));

$proto142["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto142["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato7)/(sum(validos))))*100),1)"
));

$proto142["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto142["m_arguments"][]=$obj;
$proto142["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto142);

$proto141["m_sql"] = "concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")";
$proto141["m_srcTableName"] = "Pres - Por Distrito";
$proto141["m_expr"]=$obj;
$proto141["m_alias"] = "";
$obj = new SQLFieldListItem($proto141);

$proto135["m_fieldlist"][]=$obj;
$proto135["m_fromlist"] = array();
												$proto147=array();
$proto147["m_link"] = "SQLL_MAIN";
			$proto148=array();
$proto148["m_strName"] = "voto_presidente";
$proto148["m_srcTableName"] = "Pres - Por Distrito";
$proto148["m_columns"] = array();
$proto148["m_columns"][] = "elecciones";
$proto148["m_columns"][] = "id_urna";
$proto148["m_columns"][] = "candidato1";
$proto148["m_columns"][] = "candidato2";
$proto148["m_columns"][] = "candidato3";
$proto148["m_columns"][] = "candidato4";
$proto148["m_columns"][] = "candidato5";
$proto148["m_columns"][] = "candidato6";
$proto148["m_columns"][] = "candidato7";
$proto148["m_columns"][] = "candidato8";
$proto148["m_columns"][] = "candidato9";
$proto148["m_columns"][] = "candidato10";
$proto148["m_columns"][] = "candidato11";
$proto148["m_columns"][] = "candidato12";
$proto148["m_columns"][] = "candidato13";
$proto148["m_columns"][] = "candidato14";
$proto148["m_columns"][] = "candidato15";
$proto148["m_columns"][] = "validos";
$proto148["m_columns"][] = "blancos";
$proto148["m_columns"][] = "nulos";
$proto148["m_columns"][] = "utilizados";
$proto148["m_columns"][] = "no_utilizados";
$proto148["m_columns"][] = "total";
$proto148["m_columns"][] = "usuario";
$proto148["m_columns"][] = "fecha";
$proto148["m_columns"][] = "editado_por";
$proto148["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto148);

$proto147["m_table"] = $obj;
$proto147["m_sql"] = "voto_presidente as p";
$proto147["m_alias"] = "p";
$proto147["m_srcTableName"] = "Pres - Por Distrito";
$proto149=array();
$proto149["m_sql"] = "";
$proto149["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto149["m_column"]=$obj;
$proto149["m_contained"] = array();
$proto149["m_strCase"] = "";
$proto149["m_havingmode"] = false;
$proto149["m_inBrackets"] = false;
$proto149["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto149);

$proto147["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto147);

$proto135["m_fromlist"][]=$obj;
												$proto151=array();
$proto151["m_link"] = "SQLL_INNERJOIN";
			$proto152=array();
$proto152["m_strName"] = "urna";
$proto152["m_srcTableName"] = "Pres - Por Distrito";
$proto152["m_columns"] = array();
$proto152["m_columns"][] = "id_distrito";
$proto152["m_columns"][] = "id_sector";
$proto152["m_columns"][] = "id_urna";
$proto152["m_columns"][] = "nombre_centro";
$proto152["m_columns"][] = "ubicación";
$proto152["m_columns"][] = "votantes";
$obj = new SQLTable($proto152);

$proto151["m_table"] = $obj;
$proto151["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto151["m_alias"] = "u";
$proto151["m_srcTableName"] = "Pres - Por Distrito";
$proto153=array();
$proto153["m_sql"] = "p.id_urna = u.id_urna";
$proto153["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto153["m_column"]=$obj;
$proto153["m_contained"] = array();
$proto153["m_strCase"] = "= u.id_urna";
$proto153["m_havingmode"] = false;
$proto153["m_inBrackets"] = false;
$proto153["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto153);

$proto151["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto151);

$proto135["m_fromlist"][]=$obj;
$proto135["m_groupby"] = array();
$proto135["m_orderby"] = array();
$proto135["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto135);

$proto134["m_sql"] = "(select concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto134["m_srcTableName"] = "Pres - Por Distrito";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "LIBRE";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto155=array();
			$proto156=array();
$proto156["m_strHead"] = "select";
$proto156["m_strFieldList"] = "concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")";
$proto156["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto156["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto156["m_strOrderBy"] = "";
	
		;
			$proto156["cipherer"] = null;
$proto158=array();
$proto158["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto158["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto158["m_column"]=$obj;
$proto158["m_contained"] = array();
$proto158["m_strCase"] = "= ur.id_distrito";
$proto158["m_havingmode"] = false;
$proto158["m_inBrackets"] = false;
$proto158["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto158);

$proto156["m_where"] = $obj;
$proto160=array();
$proto160["m_sql"] = "";
$proto160["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto160["m_column"]=$obj;
$proto160["m_contained"] = array();
$proto160["m_strCase"] = "";
$proto160["m_havingmode"] = false;
$proto160["m_inBrackets"] = false;
$proto160["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto160);

$proto156["m_having"] = $obj;
$proto156["m_fieldlist"] = array();
						$proto162=array();
			$proto163=array();
$proto163["m_functiontype"] = "SQLF_CUSTOM";
$proto163["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato8)"
));

$proto163["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto163["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato8)/(sum(validos))))*100),1)"
));

$proto163["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto163["m_arguments"][]=$obj;
$proto163["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto163);

$proto162["m_sql"] = "concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")";
$proto162["m_srcTableName"] = "Pres - Por Distrito";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto156["m_fieldlist"][]=$obj;
$proto156["m_fromlist"] = array();
												$proto168=array();
$proto168["m_link"] = "SQLL_MAIN";
			$proto169=array();
$proto169["m_strName"] = "voto_presidente";
$proto169["m_srcTableName"] = "Pres - Por Distrito";
$proto169["m_columns"] = array();
$proto169["m_columns"][] = "elecciones";
$proto169["m_columns"][] = "id_urna";
$proto169["m_columns"][] = "candidato1";
$proto169["m_columns"][] = "candidato2";
$proto169["m_columns"][] = "candidato3";
$proto169["m_columns"][] = "candidato4";
$proto169["m_columns"][] = "candidato5";
$proto169["m_columns"][] = "candidato6";
$proto169["m_columns"][] = "candidato7";
$proto169["m_columns"][] = "candidato8";
$proto169["m_columns"][] = "candidato9";
$proto169["m_columns"][] = "candidato10";
$proto169["m_columns"][] = "candidato11";
$proto169["m_columns"][] = "candidato12";
$proto169["m_columns"][] = "candidato13";
$proto169["m_columns"][] = "candidato14";
$proto169["m_columns"][] = "candidato15";
$proto169["m_columns"][] = "validos";
$proto169["m_columns"][] = "blancos";
$proto169["m_columns"][] = "nulos";
$proto169["m_columns"][] = "utilizados";
$proto169["m_columns"][] = "no_utilizados";
$proto169["m_columns"][] = "total";
$proto169["m_columns"][] = "usuario";
$proto169["m_columns"][] = "fecha";
$proto169["m_columns"][] = "editado_por";
$proto169["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto169);

$proto168["m_table"] = $obj;
$proto168["m_sql"] = "voto_presidente as p";
$proto168["m_alias"] = "p";
$proto168["m_srcTableName"] = "Pres - Por Distrito";
$proto170=array();
$proto170["m_sql"] = "";
$proto170["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto170["m_column"]=$obj;
$proto170["m_contained"] = array();
$proto170["m_strCase"] = "";
$proto170["m_havingmode"] = false;
$proto170["m_inBrackets"] = false;
$proto170["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto170);

$proto168["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto168);

$proto156["m_fromlist"][]=$obj;
												$proto172=array();
$proto172["m_link"] = "SQLL_INNERJOIN";
			$proto173=array();
$proto173["m_strName"] = "urna";
$proto173["m_srcTableName"] = "Pres - Por Distrito";
$proto173["m_columns"] = array();
$proto173["m_columns"][] = "id_distrito";
$proto173["m_columns"][] = "id_sector";
$proto173["m_columns"][] = "id_urna";
$proto173["m_columns"][] = "nombre_centro";
$proto173["m_columns"][] = "ubicación";
$proto173["m_columns"][] = "votantes";
$obj = new SQLTable($proto173);

$proto172["m_table"] = $obj;
$proto172["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto172["m_alias"] = "u";
$proto172["m_srcTableName"] = "Pres - Por Distrito";
$proto174=array();
$proto174["m_sql"] = "p.id_urna = u.id_urna";
$proto174["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto174["m_column"]=$obj;
$proto174["m_contained"] = array();
$proto174["m_strCase"] = "= u.id_urna";
$proto174["m_havingmode"] = false;
$proto174["m_inBrackets"] = false;
$proto174["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto174);

$proto172["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto172);

$proto156["m_fromlist"][]=$obj;
$proto156["m_groupby"] = array();
$proto156["m_orderby"] = array();
$proto156["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto156);

$proto155["m_sql"] = "(select concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto155["m_srcTableName"] = "Pres - Por Distrito";
$proto155["m_expr"]=$obj;
$proto155["m_alias"] = "PSH";
$obj = new SQLFieldListItem($proto155);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$proto177=array();
$proto177["m_strHead"] = "select";
$proto177["m_strFieldList"] = "concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")";
$proto177["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto177["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto177["m_strOrderBy"] = "";
	
		;
			$proto177["cipherer"] = null;
$proto179=array();
$proto179["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto179["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto179["m_column"]=$obj;
$proto179["m_contained"] = array();
$proto179["m_strCase"] = "= ur.id_distrito";
$proto179["m_havingmode"] = false;
$proto179["m_inBrackets"] = false;
$proto179["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto179);

$proto177["m_where"] = $obj;
$proto181=array();
$proto181["m_sql"] = "";
$proto181["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto181["m_column"]=$obj;
$proto181["m_contained"] = array();
$proto181["m_strCase"] = "";
$proto181["m_havingmode"] = false;
$proto181["m_inBrackets"] = false;
$proto181["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto181);

$proto177["m_having"] = $obj;
$proto177["m_fieldlist"] = array();
						$proto183=array();
			$proto184=array();
$proto184["m_functiontype"] = "SQLF_CUSTOM";
$proto184["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato9)"
));

$proto184["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto184["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato9)/(sum(validos))))*100),1)"
));

$proto184["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto184["m_arguments"][]=$obj;
$proto184["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto184);

$proto183["m_sql"] = "concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")";
$proto183["m_srcTableName"] = "Pres - Por Distrito";
$proto183["m_expr"]=$obj;
$proto183["m_alias"] = "";
$obj = new SQLFieldListItem($proto183);

$proto177["m_fieldlist"][]=$obj;
$proto177["m_fromlist"] = array();
												$proto189=array();
$proto189["m_link"] = "SQLL_MAIN";
			$proto190=array();
$proto190["m_strName"] = "voto_presidente";
$proto190["m_srcTableName"] = "Pres - Por Distrito";
$proto190["m_columns"] = array();
$proto190["m_columns"][] = "elecciones";
$proto190["m_columns"][] = "id_urna";
$proto190["m_columns"][] = "candidato1";
$proto190["m_columns"][] = "candidato2";
$proto190["m_columns"][] = "candidato3";
$proto190["m_columns"][] = "candidato4";
$proto190["m_columns"][] = "candidato5";
$proto190["m_columns"][] = "candidato6";
$proto190["m_columns"][] = "candidato7";
$proto190["m_columns"][] = "candidato8";
$proto190["m_columns"][] = "candidato9";
$proto190["m_columns"][] = "candidato10";
$proto190["m_columns"][] = "candidato11";
$proto190["m_columns"][] = "candidato12";
$proto190["m_columns"][] = "candidato13";
$proto190["m_columns"][] = "candidato14";
$proto190["m_columns"][] = "candidato15";
$proto190["m_columns"][] = "validos";
$proto190["m_columns"][] = "blancos";
$proto190["m_columns"][] = "nulos";
$proto190["m_columns"][] = "utilizados";
$proto190["m_columns"][] = "no_utilizados";
$proto190["m_columns"][] = "total";
$proto190["m_columns"][] = "usuario";
$proto190["m_columns"][] = "fecha";
$proto190["m_columns"][] = "editado_por";
$proto190["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto190);

$proto189["m_table"] = $obj;
$proto189["m_sql"] = "voto_presidente as p";
$proto189["m_alias"] = "p";
$proto189["m_srcTableName"] = "Pres - Por Distrito";
$proto191=array();
$proto191["m_sql"] = "";
$proto191["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto191["m_column"]=$obj;
$proto191["m_contained"] = array();
$proto191["m_strCase"] = "";
$proto191["m_havingmode"] = false;
$proto191["m_inBrackets"] = false;
$proto191["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto191);

$proto189["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto189);

$proto177["m_fromlist"][]=$obj;
												$proto193=array();
$proto193["m_link"] = "SQLL_INNERJOIN";
			$proto194=array();
$proto194["m_strName"] = "urna";
$proto194["m_srcTableName"] = "Pres - Por Distrito";
$proto194["m_columns"] = array();
$proto194["m_columns"][] = "id_distrito";
$proto194["m_columns"][] = "id_sector";
$proto194["m_columns"][] = "id_urna";
$proto194["m_columns"][] = "nombre_centro";
$proto194["m_columns"][] = "ubicación";
$proto194["m_columns"][] = "votantes";
$obj = new SQLTable($proto194);

$proto193["m_table"] = $obj;
$proto193["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto193["m_alias"] = "u";
$proto193["m_srcTableName"] = "Pres - Por Distrito";
$proto195=array();
$proto195["m_sql"] = "p.id_urna = u.id_urna";
$proto195["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto195["m_column"]=$obj;
$proto195["m_contained"] = array();
$proto195["m_strCase"] = "= u.id_urna";
$proto195["m_havingmode"] = false;
$proto195["m_inBrackets"] = false;
$proto195["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto195);

$proto193["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto193);

$proto177["m_fromlist"][]=$obj;
$proto177["m_groupby"] = array();
$proto177["m_orderby"] = array();
$proto177["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto177);

$proto176["m_sql"] = "(select concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto176["m_srcTableName"] = "Pres - Por Distrito";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "LIDEHR";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto197=array();
			$proto198=array();
$proto198["m_strHead"] = "select";
$proto198["m_strFieldList"] = "concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")";
$proto198["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto198["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto198["m_strOrderBy"] = "";
	
		;
			$proto198["cipherer"] = null;
$proto200=array();
$proto200["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto200["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto200["m_column"]=$obj;
$proto200["m_contained"] = array();
$proto200["m_strCase"] = "= ur.id_distrito";
$proto200["m_havingmode"] = false;
$proto200["m_inBrackets"] = false;
$proto200["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto200);

$proto198["m_where"] = $obj;
$proto202=array();
$proto202["m_sql"] = "";
$proto202["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto202["m_column"]=$obj;
$proto202["m_contained"] = array();
$proto202["m_strCase"] = "";
$proto202["m_havingmode"] = false;
$proto202["m_inBrackets"] = false;
$proto202["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto202);

$proto198["m_having"] = $obj;
$proto198["m_fieldlist"] = array();
						$proto204=array();
			$proto205=array();
$proto205["m_functiontype"] = "SQLF_CUSTOM";
$proto205["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato10)"
));

$proto205["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto205["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato10)/(sum(validos))))*100),1)"
));

$proto205["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto205["m_arguments"][]=$obj;
$proto205["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto205);

$proto204["m_sql"] = "concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")";
$proto204["m_srcTableName"] = "Pres - Por Distrito";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto198["m_fieldlist"][]=$obj;
$proto198["m_fromlist"] = array();
												$proto210=array();
$proto210["m_link"] = "SQLL_MAIN";
			$proto211=array();
$proto211["m_strName"] = "voto_presidente";
$proto211["m_srcTableName"] = "Pres - Por Distrito";
$proto211["m_columns"] = array();
$proto211["m_columns"][] = "elecciones";
$proto211["m_columns"][] = "id_urna";
$proto211["m_columns"][] = "candidato1";
$proto211["m_columns"][] = "candidato2";
$proto211["m_columns"][] = "candidato3";
$proto211["m_columns"][] = "candidato4";
$proto211["m_columns"][] = "candidato5";
$proto211["m_columns"][] = "candidato6";
$proto211["m_columns"][] = "candidato7";
$proto211["m_columns"][] = "candidato8";
$proto211["m_columns"][] = "candidato9";
$proto211["m_columns"][] = "candidato10";
$proto211["m_columns"][] = "candidato11";
$proto211["m_columns"][] = "candidato12";
$proto211["m_columns"][] = "candidato13";
$proto211["m_columns"][] = "candidato14";
$proto211["m_columns"][] = "candidato15";
$proto211["m_columns"][] = "validos";
$proto211["m_columns"][] = "blancos";
$proto211["m_columns"][] = "nulos";
$proto211["m_columns"][] = "utilizados";
$proto211["m_columns"][] = "no_utilizados";
$proto211["m_columns"][] = "total";
$proto211["m_columns"][] = "usuario";
$proto211["m_columns"][] = "fecha";
$proto211["m_columns"][] = "editado_por";
$proto211["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto211);

$proto210["m_table"] = $obj;
$proto210["m_sql"] = "voto_presidente as p";
$proto210["m_alias"] = "p";
$proto210["m_srcTableName"] = "Pres - Por Distrito";
$proto212=array();
$proto212["m_sql"] = "";
$proto212["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto212["m_column"]=$obj;
$proto212["m_contained"] = array();
$proto212["m_strCase"] = "";
$proto212["m_havingmode"] = false;
$proto212["m_inBrackets"] = false;
$proto212["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto212);

$proto210["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto210);

$proto198["m_fromlist"][]=$obj;
												$proto214=array();
$proto214["m_link"] = "SQLL_INNERJOIN";
			$proto215=array();
$proto215["m_strName"] = "urna";
$proto215["m_srcTableName"] = "Pres - Por Distrito";
$proto215["m_columns"] = array();
$proto215["m_columns"][] = "id_distrito";
$proto215["m_columns"][] = "id_sector";
$proto215["m_columns"][] = "id_urna";
$proto215["m_columns"][] = "nombre_centro";
$proto215["m_columns"][] = "ubicación";
$proto215["m_columns"][] = "votantes";
$obj = new SQLTable($proto215);

$proto214["m_table"] = $obj;
$proto214["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto214["m_alias"] = "u";
$proto214["m_srcTableName"] = "Pres - Por Distrito";
$proto216=array();
$proto216["m_sql"] = "p.id_urna = u.id_urna";
$proto216["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto216["m_column"]=$obj;
$proto216["m_contained"] = array();
$proto216["m_strCase"] = "= u.id_urna";
$proto216["m_havingmode"] = false;
$proto216["m_inBrackets"] = false;
$proto216["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto216);

$proto214["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto214);

$proto198["m_fromlist"][]=$obj;
$proto198["m_groupby"] = array();
$proto198["m_orderby"] = array();
$proto198["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto198);

$proto197["m_sql"] = "(select concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto197["m_srcTableName"] = "Pres - Por Distrito";
$proto197["m_expr"]=$obj;
$proto197["m_alias"] = "UD";
$obj = new SQLFieldListItem($proto197);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$proto219=array();
$proto219["m_strHead"] = "select";
$proto219["m_strFieldList"] = "concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")";
$proto219["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto219["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto219["m_strOrderBy"] = "";
	
		;
			$proto219["cipherer"] = null;
$proto221=array();
$proto221["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto221["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto221["m_column"]=$obj;
$proto221["m_contained"] = array();
$proto221["m_strCase"] = "= ur.id_distrito";
$proto221["m_havingmode"] = false;
$proto221["m_inBrackets"] = false;
$proto221["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto221);

$proto219["m_where"] = $obj;
$proto223=array();
$proto223["m_sql"] = "";
$proto223["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto223["m_column"]=$obj;
$proto223["m_contained"] = array();
$proto223["m_strCase"] = "";
$proto223["m_havingmode"] = false;
$proto223["m_inBrackets"] = false;
$proto223["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto223);

$proto219["m_having"] = $obj;
$proto219["m_fieldlist"] = array();
						$proto225=array();
			$proto226=array();
$proto226["m_functiontype"] = "SQLF_CUSTOM";
$proto226["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato11)"
));

$proto226["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto226["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato11)/(sum(validos))))*100),1)"
));

$proto226["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto226["m_arguments"][]=$obj;
$proto226["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto226);

$proto225["m_sql"] = "concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")";
$proto225["m_srcTableName"] = "Pres - Por Distrito";
$proto225["m_expr"]=$obj;
$proto225["m_alias"] = "";
$obj = new SQLFieldListItem($proto225);

$proto219["m_fieldlist"][]=$obj;
$proto219["m_fromlist"] = array();
												$proto231=array();
$proto231["m_link"] = "SQLL_MAIN";
			$proto232=array();
$proto232["m_strName"] = "voto_presidente";
$proto232["m_srcTableName"] = "Pres - Por Distrito";
$proto232["m_columns"] = array();
$proto232["m_columns"][] = "elecciones";
$proto232["m_columns"][] = "id_urna";
$proto232["m_columns"][] = "candidato1";
$proto232["m_columns"][] = "candidato2";
$proto232["m_columns"][] = "candidato3";
$proto232["m_columns"][] = "candidato4";
$proto232["m_columns"][] = "candidato5";
$proto232["m_columns"][] = "candidato6";
$proto232["m_columns"][] = "candidato7";
$proto232["m_columns"][] = "candidato8";
$proto232["m_columns"][] = "candidato9";
$proto232["m_columns"][] = "candidato10";
$proto232["m_columns"][] = "candidato11";
$proto232["m_columns"][] = "candidato12";
$proto232["m_columns"][] = "candidato13";
$proto232["m_columns"][] = "candidato14";
$proto232["m_columns"][] = "candidato15";
$proto232["m_columns"][] = "validos";
$proto232["m_columns"][] = "blancos";
$proto232["m_columns"][] = "nulos";
$proto232["m_columns"][] = "utilizados";
$proto232["m_columns"][] = "no_utilizados";
$proto232["m_columns"][] = "total";
$proto232["m_columns"][] = "usuario";
$proto232["m_columns"][] = "fecha";
$proto232["m_columns"][] = "editado_por";
$proto232["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto232);

$proto231["m_table"] = $obj;
$proto231["m_sql"] = "voto_presidente as p";
$proto231["m_alias"] = "p";
$proto231["m_srcTableName"] = "Pres - Por Distrito";
$proto233=array();
$proto233["m_sql"] = "";
$proto233["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto233["m_column"]=$obj;
$proto233["m_contained"] = array();
$proto233["m_strCase"] = "";
$proto233["m_havingmode"] = false;
$proto233["m_inBrackets"] = false;
$proto233["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto233);

$proto231["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto231);

$proto219["m_fromlist"][]=$obj;
												$proto235=array();
$proto235["m_link"] = "SQLL_INNERJOIN";
			$proto236=array();
$proto236["m_strName"] = "urna";
$proto236["m_srcTableName"] = "Pres - Por Distrito";
$proto236["m_columns"] = array();
$proto236["m_columns"][] = "id_distrito";
$proto236["m_columns"][] = "id_sector";
$proto236["m_columns"][] = "id_urna";
$proto236["m_columns"][] = "nombre_centro";
$proto236["m_columns"][] = "ubicación";
$proto236["m_columns"][] = "votantes";
$obj = new SQLTable($proto236);

$proto235["m_table"] = $obj;
$proto235["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto235["m_alias"] = "u";
$proto235["m_srcTableName"] = "Pres - Por Distrito";
$proto237=array();
$proto237["m_sql"] = "p.id_urna = u.id_urna";
$proto237["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto237["m_column"]=$obj;
$proto237["m_contained"] = array();
$proto237["m_strCase"] = "= u.id_urna";
$proto237["m_havingmode"] = false;
$proto237["m_inBrackets"] = false;
$proto237["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto237);

$proto235["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto235);

$proto219["m_fromlist"][]=$obj;
$proto219["m_groupby"] = array();
$proto219["m_orderby"] = array();
$proto219["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto219);

$proto218["m_sql"] = "(select concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto218["m_srcTableName"] = "Pres - Por Distrito";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "DC";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto239=array();
			$proto240=array();
$proto240["m_strHead"] = "select";
$proto240["m_strFieldList"] = "concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")";
$proto240["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto240["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto240["m_strOrderBy"] = "";
	
		;
			$proto240["cipherer"] = null;
$proto242=array();
$proto242["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto242["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto242["m_column"]=$obj;
$proto242["m_contained"] = array();
$proto242["m_strCase"] = "= ur.id_distrito";
$proto242["m_havingmode"] = false;
$proto242["m_inBrackets"] = false;
$proto242["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto242);

$proto240["m_where"] = $obj;
$proto244=array();
$proto244["m_sql"] = "";
$proto244["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto244["m_column"]=$obj;
$proto244["m_contained"] = array();
$proto244["m_strCase"] = "";
$proto244["m_havingmode"] = false;
$proto244["m_inBrackets"] = false;
$proto244["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto244);

$proto240["m_having"] = $obj;
$proto240["m_fieldlist"] = array();
						$proto246=array();
			$proto247=array();
$proto247["m_functiontype"] = "SQLF_CUSTOM";
$proto247["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato12)"
));

$proto247["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto247["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato12)/(sum(validos))))*100),1)"
));

$proto247["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto247["m_arguments"][]=$obj;
$proto247["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto247);

$proto246["m_sql"] = "concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")";
$proto246["m_srcTableName"] = "Pres - Por Distrito";
$proto246["m_expr"]=$obj;
$proto246["m_alias"] = "";
$obj = new SQLFieldListItem($proto246);

$proto240["m_fieldlist"][]=$obj;
$proto240["m_fromlist"] = array();
												$proto252=array();
$proto252["m_link"] = "SQLL_MAIN";
			$proto253=array();
$proto253["m_strName"] = "voto_presidente";
$proto253["m_srcTableName"] = "Pres - Por Distrito";
$proto253["m_columns"] = array();
$proto253["m_columns"][] = "elecciones";
$proto253["m_columns"][] = "id_urna";
$proto253["m_columns"][] = "candidato1";
$proto253["m_columns"][] = "candidato2";
$proto253["m_columns"][] = "candidato3";
$proto253["m_columns"][] = "candidato4";
$proto253["m_columns"][] = "candidato5";
$proto253["m_columns"][] = "candidato6";
$proto253["m_columns"][] = "candidato7";
$proto253["m_columns"][] = "candidato8";
$proto253["m_columns"][] = "candidato9";
$proto253["m_columns"][] = "candidato10";
$proto253["m_columns"][] = "candidato11";
$proto253["m_columns"][] = "candidato12";
$proto253["m_columns"][] = "candidato13";
$proto253["m_columns"][] = "candidato14";
$proto253["m_columns"][] = "candidato15";
$proto253["m_columns"][] = "validos";
$proto253["m_columns"][] = "blancos";
$proto253["m_columns"][] = "nulos";
$proto253["m_columns"][] = "utilizados";
$proto253["m_columns"][] = "no_utilizados";
$proto253["m_columns"][] = "total";
$proto253["m_columns"][] = "usuario";
$proto253["m_columns"][] = "fecha";
$proto253["m_columns"][] = "editado_por";
$proto253["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto253);

$proto252["m_table"] = $obj;
$proto252["m_sql"] = "voto_presidente as p";
$proto252["m_alias"] = "p";
$proto252["m_srcTableName"] = "Pres - Por Distrito";
$proto254=array();
$proto254["m_sql"] = "";
$proto254["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto254["m_column"]=$obj;
$proto254["m_contained"] = array();
$proto254["m_strCase"] = "";
$proto254["m_havingmode"] = false;
$proto254["m_inBrackets"] = false;
$proto254["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto254);

$proto252["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto252);

$proto240["m_fromlist"][]=$obj;
												$proto256=array();
$proto256["m_link"] = "SQLL_INNERJOIN";
			$proto257=array();
$proto257["m_strName"] = "urna";
$proto257["m_srcTableName"] = "Pres - Por Distrito";
$proto257["m_columns"] = array();
$proto257["m_columns"][] = "id_distrito";
$proto257["m_columns"][] = "id_sector";
$proto257["m_columns"][] = "id_urna";
$proto257["m_columns"][] = "nombre_centro";
$proto257["m_columns"][] = "ubicación";
$proto257["m_columns"][] = "votantes";
$obj = new SQLTable($proto257);

$proto256["m_table"] = $obj;
$proto256["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto256["m_alias"] = "u";
$proto256["m_srcTableName"] = "Pres - Por Distrito";
$proto258=array();
$proto258["m_sql"] = "p.id_urna = u.id_urna";
$proto258["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto258["m_column"]=$obj;
$proto258["m_contained"] = array();
$proto258["m_strCase"] = "= u.id_urna";
$proto258["m_havingmode"] = false;
$proto258["m_inBrackets"] = false;
$proto258["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto258);

$proto256["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto256);

$proto240["m_fromlist"][]=$obj;
$proto240["m_groupby"] = array();
$proto240["m_orderby"] = array();
$proto240["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto240);

$proto239["m_sql"] = "(select concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto239["m_srcTableName"] = "Pres - Por Distrito";
$proto239["m_expr"]=$obj;
$proto239["m_alias"] = "TSH";
$obj = new SQLFieldListItem($proto239);

$proto0["m_fieldlist"][]=$obj;
						$proto260=array();
			$proto261=array();
$proto261["m_strHead"] = "select";
$proto261["m_strFieldList"] = "concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")";
$proto261["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto261["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto261["m_strOrderBy"] = "";
	
		;
			$proto261["cipherer"] = null;
$proto263=array();
$proto263["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto263["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto263["m_column"]=$obj;
$proto263["m_contained"] = array();
$proto263["m_strCase"] = "= ur.id_distrito";
$proto263["m_havingmode"] = false;
$proto263["m_inBrackets"] = false;
$proto263["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto263);

$proto261["m_where"] = $obj;
$proto265=array();
$proto265["m_sql"] = "";
$proto265["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto265["m_column"]=$obj;
$proto265["m_contained"] = array();
$proto265["m_strCase"] = "";
$proto265["m_havingmode"] = false;
$proto265["m_inBrackets"] = false;
$proto265["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto265);

$proto261["m_having"] = $obj;
$proto261["m_fieldlist"] = array();
						$proto267=array();
			$proto268=array();
$proto268["m_functiontype"] = "SQLF_CUSTOM";
$proto268["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato13)"
));

$proto268["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto268["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato13)/(sum(validos))))*100),1)"
));

$proto268["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto268["m_arguments"][]=$obj;
$proto268["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto268);

$proto267["m_sql"] = "concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")";
$proto267["m_srcTableName"] = "Pres - Por Distrito";
$proto267["m_expr"]=$obj;
$proto267["m_alias"] = "";
$obj = new SQLFieldListItem($proto267);

$proto261["m_fieldlist"][]=$obj;
$proto261["m_fromlist"] = array();
												$proto273=array();
$proto273["m_link"] = "SQLL_MAIN";
			$proto274=array();
$proto274["m_strName"] = "voto_presidente";
$proto274["m_srcTableName"] = "Pres - Por Distrito";
$proto274["m_columns"] = array();
$proto274["m_columns"][] = "elecciones";
$proto274["m_columns"][] = "id_urna";
$proto274["m_columns"][] = "candidato1";
$proto274["m_columns"][] = "candidato2";
$proto274["m_columns"][] = "candidato3";
$proto274["m_columns"][] = "candidato4";
$proto274["m_columns"][] = "candidato5";
$proto274["m_columns"][] = "candidato6";
$proto274["m_columns"][] = "candidato7";
$proto274["m_columns"][] = "candidato8";
$proto274["m_columns"][] = "candidato9";
$proto274["m_columns"][] = "candidato10";
$proto274["m_columns"][] = "candidato11";
$proto274["m_columns"][] = "candidato12";
$proto274["m_columns"][] = "candidato13";
$proto274["m_columns"][] = "candidato14";
$proto274["m_columns"][] = "candidato15";
$proto274["m_columns"][] = "validos";
$proto274["m_columns"][] = "blancos";
$proto274["m_columns"][] = "nulos";
$proto274["m_columns"][] = "utilizados";
$proto274["m_columns"][] = "no_utilizados";
$proto274["m_columns"][] = "total";
$proto274["m_columns"][] = "usuario";
$proto274["m_columns"][] = "fecha";
$proto274["m_columns"][] = "editado_por";
$proto274["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto274);

$proto273["m_table"] = $obj;
$proto273["m_sql"] = "voto_presidente as p";
$proto273["m_alias"] = "p";
$proto273["m_srcTableName"] = "Pres - Por Distrito";
$proto275=array();
$proto275["m_sql"] = "";
$proto275["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto275["m_column"]=$obj;
$proto275["m_contained"] = array();
$proto275["m_strCase"] = "";
$proto275["m_havingmode"] = false;
$proto275["m_inBrackets"] = false;
$proto275["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto275);

$proto273["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto273);

$proto261["m_fromlist"][]=$obj;
												$proto277=array();
$proto277["m_link"] = "SQLL_INNERJOIN";
			$proto278=array();
$proto278["m_strName"] = "urna";
$proto278["m_srcTableName"] = "Pres - Por Distrito";
$proto278["m_columns"] = array();
$proto278["m_columns"][] = "id_distrito";
$proto278["m_columns"][] = "id_sector";
$proto278["m_columns"][] = "id_urna";
$proto278["m_columns"][] = "nombre_centro";
$proto278["m_columns"][] = "ubicación";
$proto278["m_columns"][] = "votantes";
$obj = new SQLTable($proto278);

$proto277["m_table"] = $obj;
$proto277["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto277["m_alias"] = "u";
$proto277["m_srcTableName"] = "Pres - Por Distrito";
$proto279=array();
$proto279["m_sql"] = "p.id_urna = u.id_urna";
$proto279["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto279["m_column"]=$obj;
$proto279["m_contained"] = array();
$proto279["m_strCase"] = "= u.id_urna";
$proto279["m_havingmode"] = false;
$proto279["m_inBrackets"] = false;
$proto279["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto279);

$proto277["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto277);

$proto261["m_fromlist"][]=$obj;
$proto261["m_groupby"] = array();
$proto261["m_orderby"] = array();
$proto261["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto261);

$proto260["m_sql"] = "(select concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto260["m_srcTableName"] = "Pres - Por Distrito";
$proto260["m_expr"]=$obj;
$proto260["m_alias"] = "HON_HUMANA";
$obj = new SQLFieldListItem($proto260);

$proto0["m_fieldlist"][]=$obj;
						$proto281=array();
			$proto282=array();
$proto282["m_strHead"] = "select";
$proto282["m_strFieldList"] = "concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")";
$proto282["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto282["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto282["m_strOrderBy"] = "";
	
		;
			$proto282["cipherer"] = null;
$proto284=array();
$proto284["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto284["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto284["m_column"]=$obj;
$proto284["m_contained"] = array();
$proto284["m_strCase"] = "= ur.id_distrito";
$proto284["m_havingmode"] = false;
$proto284["m_inBrackets"] = false;
$proto284["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto284);

$proto282["m_where"] = $obj;
$proto286=array();
$proto286["m_sql"] = "";
$proto286["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto286["m_column"]=$obj;
$proto286["m_contained"] = array();
$proto286["m_strCase"] = "";
$proto286["m_havingmode"] = false;
$proto286["m_inBrackets"] = false;
$proto286["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto286);

$proto282["m_having"] = $obj;
$proto282["m_fieldlist"] = array();
						$proto288=array();
			$proto289=array();
$proto289["m_functiontype"] = "SQLF_CUSTOM";
$proto289["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato14)"
));

$proto289["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto289["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato14)/(sum(validos))))*100),1)"
));

$proto289["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto289["m_arguments"][]=$obj;
$proto289["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto289);

$proto288["m_sql"] = "concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")";
$proto288["m_srcTableName"] = "Pres - Por Distrito";
$proto288["m_expr"]=$obj;
$proto288["m_alias"] = "";
$obj = new SQLFieldListItem($proto288);

$proto282["m_fieldlist"][]=$obj;
$proto282["m_fromlist"] = array();
												$proto294=array();
$proto294["m_link"] = "SQLL_MAIN";
			$proto295=array();
$proto295["m_strName"] = "voto_presidente";
$proto295["m_srcTableName"] = "Pres - Por Distrito";
$proto295["m_columns"] = array();
$proto295["m_columns"][] = "elecciones";
$proto295["m_columns"][] = "id_urna";
$proto295["m_columns"][] = "candidato1";
$proto295["m_columns"][] = "candidato2";
$proto295["m_columns"][] = "candidato3";
$proto295["m_columns"][] = "candidato4";
$proto295["m_columns"][] = "candidato5";
$proto295["m_columns"][] = "candidato6";
$proto295["m_columns"][] = "candidato7";
$proto295["m_columns"][] = "candidato8";
$proto295["m_columns"][] = "candidato9";
$proto295["m_columns"][] = "candidato10";
$proto295["m_columns"][] = "candidato11";
$proto295["m_columns"][] = "candidato12";
$proto295["m_columns"][] = "candidato13";
$proto295["m_columns"][] = "candidato14";
$proto295["m_columns"][] = "candidato15";
$proto295["m_columns"][] = "validos";
$proto295["m_columns"][] = "blancos";
$proto295["m_columns"][] = "nulos";
$proto295["m_columns"][] = "utilizados";
$proto295["m_columns"][] = "no_utilizados";
$proto295["m_columns"][] = "total";
$proto295["m_columns"][] = "usuario";
$proto295["m_columns"][] = "fecha";
$proto295["m_columns"][] = "editado_por";
$proto295["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto295);

$proto294["m_table"] = $obj;
$proto294["m_sql"] = "voto_presidente as p";
$proto294["m_alias"] = "p";
$proto294["m_srcTableName"] = "Pres - Por Distrito";
$proto296=array();
$proto296["m_sql"] = "";
$proto296["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto296["m_column"]=$obj;
$proto296["m_contained"] = array();
$proto296["m_strCase"] = "";
$proto296["m_havingmode"] = false;
$proto296["m_inBrackets"] = false;
$proto296["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto296);

$proto294["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto294);

$proto282["m_fromlist"][]=$obj;
												$proto298=array();
$proto298["m_link"] = "SQLL_INNERJOIN";
			$proto299=array();
$proto299["m_strName"] = "urna";
$proto299["m_srcTableName"] = "Pres - Por Distrito";
$proto299["m_columns"] = array();
$proto299["m_columns"][] = "id_distrito";
$proto299["m_columns"][] = "id_sector";
$proto299["m_columns"][] = "id_urna";
$proto299["m_columns"][] = "nombre_centro";
$proto299["m_columns"][] = "ubicación";
$proto299["m_columns"][] = "votantes";
$obj = new SQLTable($proto299);

$proto298["m_table"] = $obj;
$proto298["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto298["m_alias"] = "u";
$proto298["m_srcTableName"] = "Pres - Por Distrito";
$proto300=array();
$proto300["m_sql"] = "p.id_urna = u.id_urna";
$proto300["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto300["m_column"]=$obj;
$proto300["m_contained"] = array();
$proto300["m_strCase"] = "= u.id_urna";
$proto300["m_havingmode"] = false;
$proto300["m_inBrackets"] = false;
$proto300["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto300);

$proto298["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto298);

$proto282["m_fromlist"][]=$obj;
$proto282["m_groupby"] = array();
$proto282["m_orderby"] = array();
$proto282["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto282);

$proto281["m_sql"] = "(select concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto281["m_srcTableName"] = "Pres - Por Distrito";
$proto281["m_expr"]=$obj;
$proto281["m_alias"] = "LIBERAL";
$obj = new SQLFieldListItem($proto281);

$proto0["m_fieldlist"][]=$obj;
						$proto302=array();
			$proto303=array();
$proto303["m_strHead"] = "select";
$proto303["m_strFieldList"] = "concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")";
$proto303["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto303["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto303["m_strOrderBy"] = "";
	
		;
			$proto303["cipherer"] = null;
$proto305=array();
$proto305["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto305["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto305["m_column"]=$obj;
$proto305["m_contained"] = array();
$proto305["m_strCase"] = "= ur.id_distrito";
$proto305["m_havingmode"] = false;
$proto305["m_inBrackets"] = false;
$proto305["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto305);

$proto303["m_where"] = $obj;
$proto307=array();
$proto307["m_sql"] = "";
$proto307["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto307["m_column"]=$obj;
$proto307["m_contained"] = array();
$proto307["m_strCase"] = "";
$proto307["m_havingmode"] = false;
$proto307["m_inBrackets"] = false;
$proto307["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto307);

$proto303["m_having"] = $obj;
$proto303["m_fieldlist"] = array();
						$proto309=array();
			$proto310=array();
$proto310["m_functiontype"] = "SQLF_CUSTOM";
$proto310["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato15)"
));

$proto310["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto310["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato15)/(sum(validos))))*100),1)"
));

$proto310["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto310["m_arguments"][]=$obj;
$proto310["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto310);

$proto309["m_sql"] = "concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")";
$proto309["m_srcTableName"] = "Pres - Por Distrito";
$proto309["m_expr"]=$obj;
$proto309["m_alias"] = "";
$obj = new SQLFieldListItem($proto309);

$proto303["m_fieldlist"][]=$obj;
$proto303["m_fromlist"] = array();
												$proto315=array();
$proto315["m_link"] = "SQLL_MAIN";
			$proto316=array();
$proto316["m_strName"] = "voto_presidente";
$proto316["m_srcTableName"] = "Pres - Por Distrito";
$proto316["m_columns"] = array();
$proto316["m_columns"][] = "elecciones";
$proto316["m_columns"][] = "id_urna";
$proto316["m_columns"][] = "candidato1";
$proto316["m_columns"][] = "candidato2";
$proto316["m_columns"][] = "candidato3";
$proto316["m_columns"][] = "candidato4";
$proto316["m_columns"][] = "candidato5";
$proto316["m_columns"][] = "candidato6";
$proto316["m_columns"][] = "candidato7";
$proto316["m_columns"][] = "candidato8";
$proto316["m_columns"][] = "candidato9";
$proto316["m_columns"][] = "candidato10";
$proto316["m_columns"][] = "candidato11";
$proto316["m_columns"][] = "candidato12";
$proto316["m_columns"][] = "candidato13";
$proto316["m_columns"][] = "candidato14";
$proto316["m_columns"][] = "candidato15";
$proto316["m_columns"][] = "validos";
$proto316["m_columns"][] = "blancos";
$proto316["m_columns"][] = "nulos";
$proto316["m_columns"][] = "utilizados";
$proto316["m_columns"][] = "no_utilizados";
$proto316["m_columns"][] = "total";
$proto316["m_columns"][] = "usuario";
$proto316["m_columns"][] = "fecha";
$proto316["m_columns"][] = "editado_por";
$proto316["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto316);

$proto315["m_table"] = $obj;
$proto315["m_sql"] = "voto_presidente as p";
$proto315["m_alias"] = "p";
$proto315["m_srcTableName"] = "Pres - Por Distrito";
$proto317=array();
$proto317["m_sql"] = "";
$proto317["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto317["m_column"]=$obj;
$proto317["m_contained"] = array();
$proto317["m_strCase"] = "";
$proto317["m_havingmode"] = false;
$proto317["m_inBrackets"] = false;
$proto317["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto317);

$proto315["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto315);

$proto303["m_fromlist"][]=$obj;
												$proto319=array();
$proto319["m_link"] = "SQLL_INNERJOIN";
			$proto320=array();
$proto320["m_strName"] = "urna";
$proto320["m_srcTableName"] = "Pres - Por Distrito";
$proto320["m_columns"] = array();
$proto320["m_columns"][] = "id_distrito";
$proto320["m_columns"][] = "id_sector";
$proto320["m_columns"][] = "id_urna";
$proto320["m_columns"][] = "nombre_centro";
$proto320["m_columns"][] = "ubicación";
$proto320["m_columns"][] = "votantes";
$obj = new SQLTable($proto320);

$proto319["m_table"] = $obj;
$proto319["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto319["m_alias"] = "u";
$proto319["m_srcTableName"] = "Pres - Por Distrito";
$proto321=array();
$proto321["m_sql"] = "p.id_urna = u.id_urna";
$proto321["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto321["m_column"]=$obj;
$proto321["m_contained"] = array();
$proto321["m_strCase"] = "= u.id_urna";
$proto321["m_havingmode"] = false;
$proto321["m_inBrackets"] = false;
$proto321["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto321);

$proto319["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto319);

$proto303["m_fromlist"][]=$obj;
$proto303["m_groupby"] = array();
$proto303["m_orderby"] = array();
$proto303["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto303);

$proto302["m_sql"] = "(select concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto302["m_srcTableName"] = "Pres - Por Distrito";
$proto302["m_expr"]=$obj;
$proto302["m_alias"] = "NACIONAL";
$obj = new SQLFieldListItem($proto302);

$proto0["m_fieldlist"][]=$obj;
						$proto323=array();
			$proto324=array();
$proto324["m_strHead"] = "select";
$proto324["m_strFieldList"] = "sum(p.validos)";
$proto324["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto324["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto324["m_strOrderBy"] = "";
	
		;
			$proto324["cipherer"] = null;
$proto326=array();
$proto326["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto326["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto326["m_column"]=$obj;
$proto326["m_contained"] = array();
$proto326["m_strCase"] = "= ur.id_distrito";
$proto326["m_havingmode"] = false;
$proto326["m_inBrackets"] = false;
$proto326["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto326);

$proto324["m_where"] = $obj;
$proto328=array();
$proto328["m_sql"] = "";
$proto328["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto328["m_column"]=$obj;
$proto328["m_contained"] = array();
$proto328["m_strCase"] = "";
$proto328["m_havingmode"] = false;
$proto328["m_inBrackets"] = false;
$proto328["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto328);

$proto324["m_having"] = $obj;
$proto324["m_fieldlist"] = array();
						$proto330=array();
			$proto331=array();
$proto331["m_functiontype"] = "SQLF_SUM";
$proto331["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto331["m_arguments"][]=$obj;
$proto331["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto331);

$proto330["m_sql"] = "sum(p.validos)";
$proto330["m_srcTableName"] = "Pres - Por Distrito";
$proto330["m_expr"]=$obj;
$proto330["m_alias"] = "";
$obj = new SQLFieldListItem($proto330);

$proto324["m_fieldlist"][]=$obj;
$proto324["m_fromlist"] = array();
												$proto333=array();
$proto333["m_link"] = "SQLL_MAIN";
			$proto334=array();
$proto334["m_strName"] = "voto_presidente";
$proto334["m_srcTableName"] = "Pres - Por Distrito";
$proto334["m_columns"] = array();
$proto334["m_columns"][] = "elecciones";
$proto334["m_columns"][] = "id_urna";
$proto334["m_columns"][] = "candidato1";
$proto334["m_columns"][] = "candidato2";
$proto334["m_columns"][] = "candidato3";
$proto334["m_columns"][] = "candidato4";
$proto334["m_columns"][] = "candidato5";
$proto334["m_columns"][] = "candidato6";
$proto334["m_columns"][] = "candidato7";
$proto334["m_columns"][] = "candidato8";
$proto334["m_columns"][] = "candidato9";
$proto334["m_columns"][] = "candidato10";
$proto334["m_columns"][] = "candidato11";
$proto334["m_columns"][] = "candidato12";
$proto334["m_columns"][] = "candidato13";
$proto334["m_columns"][] = "candidato14";
$proto334["m_columns"][] = "candidato15";
$proto334["m_columns"][] = "validos";
$proto334["m_columns"][] = "blancos";
$proto334["m_columns"][] = "nulos";
$proto334["m_columns"][] = "utilizados";
$proto334["m_columns"][] = "no_utilizados";
$proto334["m_columns"][] = "total";
$proto334["m_columns"][] = "usuario";
$proto334["m_columns"][] = "fecha";
$proto334["m_columns"][] = "editado_por";
$proto334["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto334);

$proto333["m_table"] = $obj;
$proto333["m_sql"] = "voto_presidente as p";
$proto333["m_alias"] = "p";
$proto333["m_srcTableName"] = "Pres - Por Distrito";
$proto335=array();
$proto335["m_sql"] = "";
$proto335["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto335["m_column"]=$obj;
$proto335["m_contained"] = array();
$proto335["m_strCase"] = "";
$proto335["m_havingmode"] = false;
$proto335["m_inBrackets"] = false;
$proto335["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto335);

$proto333["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto333);

$proto324["m_fromlist"][]=$obj;
												$proto337=array();
$proto337["m_link"] = "SQLL_INNERJOIN";
			$proto338=array();
$proto338["m_strName"] = "urna";
$proto338["m_srcTableName"] = "Pres - Por Distrito";
$proto338["m_columns"] = array();
$proto338["m_columns"][] = "id_distrito";
$proto338["m_columns"][] = "id_sector";
$proto338["m_columns"][] = "id_urna";
$proto338["m_columns"][] = "nombre_centro";
$proto338["m_columns"][] = "ubicación";
$proto338["m_columns"][] = "votantes";
$obj = new SQLTable($proto338);

$proto337["m_table"] = $obj;
$proto337["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto337["m_alias"] = "u";
$proto337["m_srcTableName"] = "Pres - Por Distrito";
$proto339=array();
$proto339["m_sql"] = "p.id_urna = u.id_urna";
$proto339["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto339["m_column"]=$obj;
$proto339["m_contained"] = array();
$proto339["m_strCase"] = "= u.id_urna";
$proto339["m_havingmode"] = false;
$proto339["m_inBrackets"] = false;
$proto339["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto339);

$proto337["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto337);

$proto324["m_fromlist"][]=$obj;
$proto324["m_groupby"] = array();
$proto324["m_orderby"] = array();
$proto324["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto324);

$proto323["m_sql"] = "(select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto323["m_srcTableName"] = "Pres - Por Distrito";
$proto323["m_expr"]=$obj;
$proto323["m_alias"] = "Validos";
$obj = new SQLFieldListItem($proto323);

$proto0["m_fieldlist"][]=$obj;
						$proto341=array();
			$proto342=array();
$proto342["m_strHead"] = "select";
$proto342["m_strFieldList"] = "sum(p.blancos)";
$proto342["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto342["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto342["m_strOrderBy"] = "";
	
		;
			$proto342["cipherer"] = null;
$proto344=array();
$proto344["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto344["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto344["m_column"]=$obj;
$proto344["m_contained"] = array();
$proto344["m_strCase"] = "= ur.id_distrito";
$proto344["m_havingmode"] = false;
$proto344["m_inBrackets"] = false;
$proto344["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto344);

$proto342["m_where"] = $obj;
$proto346=array();
$proto346["m_sql"] = "";
$proto346["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto346["m_column"]=$obj;
$proto346["m_contained"] = array();
$proto346["m_strCase"] = "";
$proto346["m_havingmode"] = false;
$proto346["m_inBrackets"] = false;
$proto346["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto346);

$proto342["m_having"] = $obj;
$proto342["m_fieldlist"] = array();
						$proto348=array();
			$proto349=array();
$proto349["m_functiontype"] = "SQLF_SUM";
$proto349["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto349["m_arguments"][]=$obj;
$proto349["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto349);

$proto348["m_sql"] = "sum(p.blancos)";
$proto348["m_srcTableName"] = "Pres - Por Distrito";
$proto348["m_expr"]=$obj;
$proto348["m_alias"] = "";
$obj = new SQLFieldListItem($proto348);

$proto342["m_fieldlist"][]=$obj;
$proto342["m_fromlist"] = array();
												$proto351=array();
$proto351["m_link"] = "SQLL_MAIN";
			$proto352=array();
$proto352["m_strName"] = "voto_presidente";
$proto352["m_srcTableName"] = "Pres - Por Distrito";
$proto352["m_columns"] = array();
$proto352["m_columns"][] = "elecciones";
$proto352["m_columns"][] = "id_urna";
$proto352["m_columns"][] = "candidato1";
$proto352["m_columns"][] = "candidato2";
$proto352["m_columns"][] = "candidato3";
$proto352["m_columns"][] = "candidato4";
$proto352["m_columns"][] = "candidato5";
$proto352["m_columns"][] = "candidato6";
$proto352["m_columns"][] = "candidato7";
$proto352["m_columns"][] = "candidato8";
$proto352["m_columns"][] = "candidato9";
$proto352["m_columns"][] = "candidato10";
$proto352["m_columns"][] = "candidato11";
$proto352["m_columns"][] = "candidato12";
$proto352["m_columns"][] = "candidato13";
$proto352["m_columns"][] = "candidato14";
$proto352["m_columns"][] = "candidato15";
$proto352["m_columns"][] = "validos";
$proto352["m_columns"][] = "blancos";
$proto352["m_columns"][] = "nulos";
$proto352["m_columns"][] = "utilizados";
$proto352["m_columns"][] = "no_utilizados";
$proto352["m_columns"][] = "total";
$proto352["m_columns"][] = "usuario";
$proto352["m_columns"][] = "fecha";
$proto352["m_columns"][] = "editado_por";
$proto352["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto352);

$proto351["m_table"] = $obj;
$proto351["m_sql"] = "voto_presidente as p";
$proto351["m_alias"] = "p";
$proto351["m_srcTableName"] = "Pres - Por Distrito";
$proto353=array();
$proto353["m_sql"] = "";
$proto353["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto353["m_column"]=$obj;
$proto353["m_contained"] = array();
$proto353["m_strCase"] = "";
$proto353["m_havingmode"] = false;
$proto353["m_inBrackets"] = false;
$proto353["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto353);

$proto351["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto351);

$proto342["m_fromlist"][]=$obj;
												$proto355=array();
$proto355["m_link"] = "SQLL_INNERJOIN";
			$proto356=array();
$proto356["m_strName"] = "urna";
$proto356["m_srcTableName"] = "Pres - Por Distrito";
$proto356["m_columns"] = array();
$proto356["m_columns"][] = "id_distrito";
$proto356["m_columns"][] = "id_sector";
$proto356["m_columns"][] = "id_urna";
$proto356["m_columns"][] = "nombre_centro";
$proto356["m_columns"][] = "ubicación";
$proto356["m_columns"][] = "votantes";
$obj = new SQLTable($proto356);

$proto355["m_table"] = $obj;
$proto355["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto355["m_alias"] = "u";
$proto355["m_srcTableName"] = "Pres - Por Distrito";
$proto357=array();
$proto357["m_sql"] = "p.id_urna = u.id_urna";
$proto357["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto357["m_column"]=$obj;
$proto357["m_contained"] = array();
$proto357["m_strCase"] = "= u.id_urna";
$proto357["m_havingmode"] = false;
$proto357["m_inBrackets"] = false;
$proto357["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto357);

$proto355["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto355);

$proto342["m_fromlist"][]=$obj;
$proto342["m_groupby"] = array();
$proto342["m_orderby"] = array();
$proto342["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto342);

$proto341["m_sql"] = "(select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto341["m_srcTableName"] = "Pres - Por Distrito";
$proto341["m_expr"]=$obj;
$proto341["m_alias"] = "Blancos";
$obj = new SQLFieldListItem($proto341);

$proto0["m_fieldlist"][]=$obj;
						$proto359=array();
			$proto360=array();
$proto360["m_strHead"] = "select";
$proto360["m_strFieldList"] = "sum(p.nulos)";
$proto360["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto360["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto360["m_strOrderBy"] = "";
	
		;
			$proto360["cipherer"] = null;
$proto362=array();
$proto362["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto362["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto362["m_column"]=$obj;
$proto362["m_contained"] = array();
$proto362["m_strCase"] = "= ur.id_distrito";
$proto362["m_havingmode"] = false;
$proto362["m_inBrackets"] = false;
$proto362["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto362);

$proto360["m_where"] = $obj;
$proto364=array();
$proto364["m_sql"] = "";
$proto364["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto364["m_column"]=$obj;
$proto364["m_contained"] = array();
$proto364["m_strCase"] = "";
$proto364["m_havingmode"] = false;
$proto364["m_inBrackets"] = false;
$proto364["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto364);

$proto360["m_having"] = $obj;
$proto360["m_fieldlist"] = array();
						$proto366=array();
			$proto367=array();
$proto367["m_functiontype"] = "SQLF_SUM";
$proto367["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto367["m_arguments"][]=$obj;
$proto367["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto367);

$proto366["m_sql"] = "sum(p.nulos)";
$proto366["m_srcTableName"] = "Pres - Por Distrito";
$proto366["m_expr"]=$obj;
$proto366["m_alias"] = "";
$obj = new SQLFieldListItem($proto366);

$proto360["m_fieldlist"][]=$obj;
$proto360["m_fromlist"] = array();
												$proto369=array();
$proto369["m_link"] = "SQLL_MAIN";
			$proto370=array();
$proto370["m_strName"] = "voto_presidente";
$proto370["m_srcTableName"] = "Pres - Por Distrito";
$proto370["m_columns"] = array();
$proto370["m_columns"][] = "elecciones";
$proto370["m_columns"][] = "id_urna";
$proto370["m_columns"][] = "candidato1";
$proto370["m_columns"][] = "candidato2";
$proto370["m_columns"][] = "candidato3";
$proto370["m_columns"][] = "candidato4";
$proto370["m_columns"][] = "candidato5";
$proto370["m_columns"][] = "candidato6";
$proto370["m_columns"][] = "candidato7";
$proto370["m_columns"][] = "candidato8";
$proto370["m_columns"][] = "candidato9";
$proto370["m_columns"][] = "candidato10";
$proto370["m_columns"][] = "candidato11";
$proto370["m_columns"][] = "candidato12";
$proto370["m_columns"][] = "candidato13";
$proto370["m_columns"][] = "candidato14";
$proto370["m_columns"][] = "candidato15";
$proto370["m_columns"][] = "validos";
$proto370["m_columns"][] = "blancos";
$proto370["m_columns"][] = "nulos";
$proto370["m_columns"][] = "utilizados";
$proto370["m_columns"][] = "no_utilizados";
$proto370["m_columns"][] = "total";
$proto370["m_columns"][] = "usuario";
$proto370["m_columns"][] = "fecha";
$proto370["m_columns"][] = "editado_por";
$proto370["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto370);

$proto369["m_table"] = $obj;
$proto369["m_sql"] = "voto_presidente as p";
$proto369["m_alias"] = "p";
$proto369["m_srcTableName"] = "Pres - Por Distrito";
$proto371=array();
$proto371["m_sql"] = "";
$proto371["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto371["m_column"]=$obj;
$proto371["m_contained"] = array();
$proto371["m_strCase"] = "";
$proto371["m_havingmode"] = false;
$proto371["m_inBrackets"] = false;
$proto371["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto371);

$proto369["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto369);

$proto360["m_fromlist"][]=$obj;
												$proto373=array();
$proto373["m_link"] = "SQLL_INNERJOIN";
			$proto374=array();
$proto374["m_strName"] = "urna";
$proto374["m_srcTableName"] = "Pres - Por Distrito";
$proto374["m_columns"] = array();
$proto374["m_columns"][] = "id_distrito";
$proto374["m_columns"][] = "id_sector";
$proto374["m_columns"][] = "id_urna";
$proto374["m_columns"][] = "nombre_centro";
$proto374["m_columns"][] = "ubicación";
$proto374["m_columns"][] = "votantes";
$obj = new SQLTable($proto374);

$proto373["m_table"] = $obj;
$proto373["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto373["m_alias"] = "u";
$proto373["m_srcTableName"] = "Pres - Por Distrito";
$proto375=array();
$proto375["m_sql"] = "p.id_urna = u.id_urna";
$proto375["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto375["m_column"]=$obj;
$proto375["m_contained"] = array();
$proto375["m_strCase"] = "= u.id_urna";
$proto375["m_havingmode"] = false;
$proto375["m_inBrackets"] = false;
$proto375["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto375);

$proto373["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto373);

$proto360["m_fromlist"][]=$obj;
$proto360["m_groupby"] = array();
$proto360["m_orderby"] = array();
$proto360["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto360);

$proto359["m_sql"] = "(select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto359["m_srcTableName"] = "Pres - Por Distrito";
$proto359["m_expr"]=$obj;
$proto359["m_alias"] = "Nulos";
$obj = new SQLFieldListItem($proto359);

$proto0["m_fieldlist"][]=$obj;
						$proto377=array();
			$proto378=array();
$proto378["m_strHead"] = "select";
$proto378["m_strFieldList"] = "sum(p.utilizados)";
$proto378["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto378["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto378["m_strOrderBy"] = "";
	
		;
			$proto378["cipherer"] = null;
$proto380=array();
$proto380["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto380["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto380["m_column"]=$obj;
$proto380["m_contained"] = array();
$proto380["m_strCase"] = "= ur.id_distrito";
$proto380["m_havingmode"] = false;
$proto380["m_inBrackets"] = false;
$proto380["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto380);

$proto378["m_where"] = $obj;
$proto382=array();
$proto382["m_sql"] = "";
$proto382["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto382["m_column"]=$obj;
$proto382["m_contained"] = array();
$proto382["m_strCase"] = "";
$proto382["m_havingmode"] = false;
$proto382["m_inBrackets"] = false;
$proto382["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto382);

$proto378["m_having"] = $obj;
$proto378["m_fieldlist"] = array();
						$proto384=array();
			$proto385=array();
$proto385["m_functiontype"] = "SQLF_SUM";
$proto385["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto385["m_arguments"][]=$obj;
$proto385["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto385);

$proto384["m_sql"] = "sum(p.utilizados)";
$proto384["m_srcTableName"] = "Pres - Por Distrito";
$proto384["m_expr"]=$obj;
$proto384["m_alias"] = "";
$obj = new SQLFieldListItem($proto384);

$proto378["m_fieldlist"][]=$obj;
$proto378["m_fromlist"] = array();
												$proto387=array();
$proto387["m_link"] = "SQLL_MAIN";
			$proto388=array();
$proto388["m_strName"] = "voto_presidente";
$proto388["m_srcTableName"] = "Pres - Por Distrito";
$proto388["m_columns"] = array();
$proto388["m_columns"][] = "elecciones";
$proto388["m_columns"][] = "id_urna";
$proto388["m_columns"][] = "candidato1";
$proto388["m_columns"][] = "candidato2";
$proto388["m_columns"][] = "candidato3";
$proto388["m_columns"][] = "candidato4";
$proto388["m_columns"][] = "candidato5";
$proto388["m_columns"][] = "candidato6";
$proto388["m_columns"][] = "candidato7";
$proto388["m_columns"][] = "candidato8";
$proto388["m_columns"][] = "candidato9";
$proto388["m_columns"][] = "candidato10";
$proto388["m_columns"][] = "candidato11";
$proto388["m_columns"][] = "candidato12";
$proto388["m_columns"][] = "candidato13";
$proto388["m_columns"][] = "candidato14";
$proto388["m_columns"][] = "candidato15";
$proto388["m_columns"][] = "validos";
$proto388["m_columns"][] = "blancos";
$proto388["m_columns"][] = "nulos";
$proto388["m_columns"][] = "utilizados";
$proto388["m_columns"][] = "no_utilizados";
$proto388["m_columns"][] = "total";
$proto388["m_columns"][] = "usuario";
$proto388["m_columns"][] = "fecha";
$proto388["m_columns"][] = "editado_por";
$proto388["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto388);

$proto387["m_table"] = $obj;
$proto387["m_sql"] = "voto_presidente as p";
$proto387["m_alias"] = "p";
$proto387["m_srcTableName"] = "Pres - Por Distrito";
$proto389=array();
$proto389["m_sql"] = "";
$proto389["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto389["m_column"]=$obj;
$proto389["m_contained"] = array();
$proto389["m_strCase"] = "";
$proto389["m_havingmode"] = false;
$proto389["m_inBrackets"] = false;
$proto389["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto389);

$proto387["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto387);

$proto378["m_fromlist"][]=$obj;
												$proto391=array();
$proto391["m_link"] = "SQLL_INNERJOIN";
			$proto392=array();
$proto392["m_strName"] = "urna";
$proto392["m_srcTableName"] = "Pres - Por Distrito";
$proto392["m_columns"] = array();
$proto392["m_columns"][] = "id_distrito";
$proto392["m_columns"][] = "id_sector";
$proto392["m_columns"][] = "id_urna";
$proto392["m_columns"][] = "nombre_centro";
$proto392["m_columns"][] = "ubicación";
$proto392["m_columns"][] = "votantes";
$obj = new SQLTable($proto392);

$proto391["m_table"] = $obj;
$proto391["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto391["m_alias"] = "u";
$proto391["m_srcTableName"] = "Pres - Por Distrito";
$proto393=array();
$proto393["m_sql"] = "p.id_urna = u.id_urna";
$proto393["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto393["m_column"]=$obj;
$proto393["m_contained"] = array();
$proto393["m_strCase"] = "= u.id_urna";
$proto393["m_havingmode"] = false;
$proto393["m_inBrackets"] = false;
$proto393["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto393);

$proto391["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto391);

$proto378["m_fromlist"][]=$obj;
$proto378["m_groupby"] = array();
$proto378["m_orderby"] = array();
$proto378["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto378);

$proto377["m_sql"] = "(select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto377["m_srcTableName"] = "Pres - Por Distrito";
$proto377["m_expr"]=$obj;
$proto377["m_alias"] = "Utilizados";
$obj = new SQLFieldListItem($proto377);

$proto0["m_fieldlist"][]=$obj;
						$proto395=array();
			$proto396=array();
$proto396["m_strHead"] = "select";
$proto396["m_strFieldList"] = "sum(p.no_utilizados)";
$proto396["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto396["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto396["m_strOrderBy"] = "";
	
		;
			$proto396["cipherer"] = null;
$proto398=array();
$proto398["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto398["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto398["m_column"]=$obj;
$proto398["m_contained"] = array();
$proto398["m_strCase"] = "= ur.id_distrito";
$proto398["m_havingmode"] = false;
$proto398["m_inBrackets"] = false;
$proto398["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto398);

$proto396["m_where"] = $obj;
$proto400=array();
$proto400["m_sql"] = "";
$proto400["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto400["m_column"]=$obj;
$proto400["m_contained"] = array();
$proto400["m_strCase"] = "";
$proto400["m_havingmode"] = false;
$proto400["m_inBrackets"] = false;
$proto400["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto400);

$proto396["m_having"] = $obj;
$proto396["m_fieldlist"] = array();
						$proto402=array();
			$proto403=array();
$proto403["m_functiontype"] = "SQLF_SUM";
$proto403["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto403["m_arguments"][]=$obj;
$proto403["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto403);

$proto402["m_sql"] = "sum(p.no_utilizados)";
$proto402["m_srcTableName"] = "Pres - Por Distrito";
$proto402["m_expr"]=$obj;
$proto402["m_alias"] = "";
$obj = new SQLFieldListItem($proto402);

$proto396["m_fieldlist"][]=$obj;
$proto396["m_fromlist"] = array();
												$proto405=array();
$proto405["m_link"] = "SQLL_MAIN";
			$proto406=array();
$proto406["m_strName"] = "voto_presidente";
$proto406["m_srcTableName"] = "Pres - Por Distrito";
$proto406["m_columns"] = array();
$proto406["m_columns"][] = "elecciones";
$proto406["m_columns"][] = "id_urna";
$proto406["m_columns"][] = "candidato1";
$proto406["m_columns"][] = "candidato2";
$proto406["m_columns"][] = "candidato3";
$proto406["m_columns"][] = "candidato4";
$proto406["m_columns"][] = "candidato5";
$proto406["m_columns"][] = "candidato6";
$proto406["m_columns"][] = "candidato7";
$proto406["m_columns"][] = "candidato8";
$proto406["m_columns"][] = "candidato9";
$proto406["m_columns"][] = "candidato10";
$proto406["m_columns"][] = "candidato11";
$proto406["m_columns"][] = "candidato12";
$proto406["m_columns"][] = "candidato13";
$proto406["m_columns"][] = "candidato14";
$proto406["m_columns"][] = "candidato15";
$proto406["m_columns"][] = "validos";
$proto406["m_columns"][] = "blancos";
$proto406["m_columns"][] = "nulos";
$proto406["m_columns"][] = "utilizados";
$proto406["m_columns"][] = "no_utilizados";
$proto406["m_columns"][] = "total";
$proto406["m_columns"][] = "usuario";
$proto406["m_columns"][] = "fecha";
$proto406["m_columns"][] = "editado_por";
$proto406["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto406);

$proto405["m_table"] = $obj;
$proto405["m_sql"] = "voto_presidente as p";
$proto405["m_alias"] = "p";
$proto405["m_srcTableName"] = "Pres - Por Distrito";
$proto407=array();
$proto407["m_sql"] = "";
$proto407["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto407["m_column"]=$obj;
$proto407["m_contained"] = array();
$proto407["m_strCase"] = "";
$proto407["m_havingmode"] = false;
$proto407["m_inBrackets"] = false;
$proto407["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto407);

$proto405["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto405);

$proto396["m_fromlist"][]=$obj;
												$proto409=array();
$proto409["m_link"] = "SQLL_INNERJOIN";
			$proto410=array();
$proto410["m_strName"] = "urna";
$proto410["m_srcTableName"] = "Pres - Por Distrito";
$proto410["m_columns"] = array();
$proto410["m_columns"][] = "id_distrito";
$proto410["m_columns"][] = "id_sector";
$proto410["m_columns"][] = "id_urna";
$proto410["m_columns"][] = "nombre_centro";
$proto410["m_columns"][] = "ubicación";
$proto410["m_columns"][] = "votantes";
$obj = new SQLTable($proto410);

$proto409["m_table"] = $obj;
$proto409["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto409["m_alias"] = "u";
$proto409["m_srcTableName"] = "Pres - Por Distrito";
$proto411=array();
$proto411["m_sql"] = "p.id_urna = u.id_urna";
$proto411["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto411["m_column"]=$obj;
$proto411["m_contained"] = array();
$proto411["m_strCase"] = "= u.id_urna";
$proto411["m_havingmode"] = false;
$proto411["m_inBrackets"] = false;
$proto411["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto411);

$proto409["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto409);

$proto396["m_fromlist"][]=$obj;
$proto396["m_groupby"] = array();
$proto396["m_orderby"] = array();
$proto396["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto396);

$proto395["m_sql"] = "(select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto395["m_srcTableName"] = "Pres - Por Distrito";
$proto395["m_expr"]=$obj;
$proto395["m_alias"] = "No_Utilizados";
$obj = new SQLFieldListItem($proto395);

$proto0["m_fieldlist"][]=$obj;
						$proto413=array();
			$proto414=array();
$proto414["m_strHead"] = "select";
$proto414["m_strFieldList"] = "sum(p.total)";
$proto414["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto414["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto414["m_strOrderBy"] = "";
	
		;
			$proto414["cipherer"] = null;
$proto416=array();
$proto416["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto416["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto416["m_column"]=$obj;
$proto416["m_contained"] = array();
$proto416["m_strCase"] = "= ur.id_distrito";
$proto416["m_havingmode"] = false;
$proto416["m_inBrackets"] = false;
$proto416["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto416);

$proto414["m_where"] = $obj;
$proto418=array();
$proto418["m_sql"] = "";
$proto418["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto418["m_column"]=$obj;
$proto418["m_contained"] = array();
$proto418["m_strCase"] = "";
$proto418["m_havingmode"] = false;
$proto418["m_inBrackets"] = false;
$proto418["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto418);

$proto414["m_having"] = $obj;
$proto414["m_fieldlist"] = array();
						$proto420=array();
			$proto421=array();
$proto421["m_functiontype"] = "SQLF_SUM";
$proto421["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto421["m_arguments"][]=$obj;
$proto421["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto421);

$proto420["m_sql"] = "sum(p.total)";
$proto420["m_srcTableName"] = "Pres - Por Distrito";
$proto420["m_expr"]=$obj;
$proto420["m_alias"] = "";
$obj = new SQLFieldListItem($proto420);

$proto414["m_fieldlist"][]=$obj;
$proto414["m_fromlist"] = array();
												$proto423=array();
$proto423["m_link"] = "SQLL_MAIN";
			$proto424=array();
$proto424["m_strName"] = "voto_presidente";
$proto424["m_srcTableName"] = "Pres - Por Distrito";
$proto424["m_columns"] = array();
$proto424["m_columns"][] = "elecciones";
$proto424["m_columns"][] = "id_urna";
$proto424["m_columns"][] = "candidato1";
$proto424["m_columns"][] = "candidato2";
$proto424["m_columns"][] = "candidato3";
$proto424["m_columns"][] = "candidato4";
$proto424["m_columns"][] = "candidato5";
$proto424["m_columns"][] = "candidato6";
$proto424["m_columns"][] = "candidato7";
$proto424["m_columns"][] = "candidato8";
$proto424["m_columns"][] = "candidato9";
$proto424["m_columns"][] = "candidato10";
$proto424["m_columns"][] = "candidato11";
$proto424["m_columns"][] = "candidato12";
$proto424["m_columns"][] = "candidato13";
$proto424["m_columns"][] = "candidato14";
$proto424["m_columns"][] = "candidato15";
$proto424["m_columns"][] = "validos";
$proto424["m_columns"][] = "blancos";
$proto424["m_columns"][] = "nulos";
$proto424["m_columns"][] = "utilizados";
$proto424["m_columns"][] = "no_utilizados";
$proto424["m_columns"][] = "total";
$proto424["m_columns"][] = "usuario";
$proto424["m_columns"][] = "fecha";
$proto424["m_columns"][] = "editado_por";
$proto424["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto424);

$proto423["m_table"] = $obj;
$proto423["m_sql"] = "voto_presidente as p";
$proto423["m_alias"] = "p";
$proto423["m_srcTableName"] = "Pres - Por Distrito";
$proto425=array();
$proto425["m_sql"] = "";
$proto425["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto425["m_column"]=$obj;
$proto425["m_contained"] = array();
$proto425["m_strCase"] = "";
$proto425["m_havingmode"] = false;
$proto425["m_inBrackets"] = false;
$proto425["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto425);

$proto423["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto423);

$proto414["m_fromlist"][]=$obj;
												$proto427=array();
$proto427["m_link"] = "SQLL_INNERJOIN";
			$proto428=array();
$proto428["m_strName"] = "urna";
$proto428["m_srcTableName"] = "Pres - Por Distrito";
$proto428["m_columns"] = array();
$proto428["m_columns"][] = "id_distrito";
$proto428["m_columns"][] = "id_sector";
$proto428["m_columns"][] = "id_urna";
$proto428["m_columns"][] = "nombre_centro";
$proto428["m_columns"][] = "ubicación";
$proto428["m_columns"][] = "votantes";
$obj = new SQLTable($proto428);

$proto427["m_table"] = $obj;
$proto427["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto427["m_alias"] = "u";
$proto427["m_srcTableName"] = "Pres - Por Distrito";
$proto429=array();
$proto429["m_sql"] = "p.id_urna = u.id_urna";
$proto429["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto429["m_column"]=$obj;
$proto429["m_contained"] = array();
$proto429["m_strCase"] = "= u.id_urna";
$proto429["m_havingmode"] = false;
$proto429["m_inBrackets"] = false;
$proto429["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto429);

$proto427["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto427);

$proto414["m_fromlist"][]=$obj;
$proto414["m_groupby"] = array();
$proto414["m_orderby"] = array();
$proto414["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto414);

$proto413["m_sql"] = "(select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto413["m_srcTableName"] = "Pres - Por Distrito";
$proto413["m_expr"]=$obj;
$proto413["m_alias"] = "Total";
$obj = new SQLFieldListItem($proto413);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto431=array();
$proto431["m_link"] = "SQLL_MAIN";
			$proto432=array();
$proto432["m_strName"] = "voto_presidente";
$proto432["m_srcTableName"] = "Pres - Por Distrito";
$proto432["m_columns"] = array();
$proto432["m_columns"][] = "elecciones";
$proto432["m_columns"][] = "id_urna";
$proto432["m_columns"][] = "candidato1";
$proto432["m_columns"][] = "candidato2";
$proto432["m_columns"][] = "candidato3";
$proto432["m_columns"][] = "candidato4";
$proto432["m_columns"][] = "candidato5";
$proto432["m_columns"][] = "candidato6";
$proto432["m_columns"][] = "candidato7";
$proto432["m_columns"][] = "candidato8";
$proto432["m_columns"][] = "candidato9";
$proto432["m_columns"][] = "candidato10";
$proto432["m_columns"][] = "candidato11";
$proto432["m_columns"][] = "candidato12";
$proto432["m_columns"][] = "candidato13";
$proto432["m_columns"][] = "candidato14";
$proto432["m_columns"][] = "candidato15";
$proto432["m_columns"][] = "validos";
$proto432["m_columns"][] = "blancos";
$proto432["m_columns"][] = "nulos";
$proto432["m_columns"][] = "utilizados";
$proto432["m_columns"][] = "no_utilizados";
$proto432["m_columns"][] = "total";
$proto432["m_columns"][] = "usuario";
$proto432["m_columns"][] = "fecha";
$proto432["m_columns"][] = "editado_por";
$proto432["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto432);

$proto431["m_table"] = $obj;
$proto431["m_sql"] = "voto_presidente as vp";
$proto431["m_alias"] = "vp";
$proto431["m_srcTableName"] = "Pres - Por Distrito";
$proto433=array();
$proto433["m_sql"] = "";
$proto433["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto433["m_column"]=$obj;
$proto433["m_contained"] = array();
$proto433["m_strCase"] = "";
$proto433["m_havingmode"] = false;
$proto433["m_inBrackets"] = false;
$proto433["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto433);

$proto431["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto431);

$proto0["m_fromlist"][]=$obj;
												$proto435=array();
$proto435["m_link"] = "SQLL_INNERJOIN";
			$proto436=array();
$proto436["m_strName"] = "urna";
$proto436["m_srcTableName"] = "Pres - Por Distrito";
$proto436["m_columns"] = array();
$proto436["m_columns"][] = "id_distrito";
$proto436["m_columns"][] = "id_sector";
$proto436["m_columns"][] = "id_urna";
$proto436["m_columns"][] = "nombre_centro";
$proto436["m_columns"][] = "ubicación";
$proto436["m_columns"][] = "votantes";
$obj = new SQLTable($proto436);

$proto435["m_table"] = $obj;
$proto435["m_sql"] = "inner join urna as ur on vp.id_urna = ur.id_urna";
$proto435["m_alias"] = "ur";
$proto435["m_srcTableName"] = "Pres - Por Distrito";
$proto437=array();
$proto437["m_sql"] = "vp.id_urna = ur.id_urna";
$proto437["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "vp",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto437["m_column"]=$obj;
$proto437["m_contained"] = array();
$proto437["m_strCase"] = "= ur.id_urna";
$proto437["m_havingmode"] = false;
$proto437["m_inBrackets"] = false;
$proto437["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto437);

$proto435["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto435);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto439=array();
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto439["m_column"]=$obj;
$obj = new SQLGroupByItem($proto439);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto441=array();
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto441["m_column"]=$obj;
$proto441["m_bAsc"] = 1;
$proto441["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto441);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pres___por_distrito = createSqlQuery_pres___por_distrito();


	
		;

																						

$tdatapres___por_distrito[".sqlquery"] = $queryData_pres___por_distrito;



include_once(getabspath("include/pres___por_distrito_events.php"));
$tableEvents["Pres - Por Distrito"] = new eventclass_pres___por_distrito;
$tdatapres___por_distrito[".hasEvents"] = true;

$query = &$queryData_pres___por_distrito;
$table = "Pres - Por Distrito";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.

$can1_por = DBlookup("select round(((sum(candidato1)/sum(validos))*100),1) from voto_presidente");
$can2_por = DBlookup("select round(((sum(candidato2)/sum(validos))*100),1) from voto_presidente");
$can3_por = DBlookup("select round(((sum(candidato3)/sum(validos))*100),1) from voto_presidente");
$can4_por = DBlookup("select round(((sum(candidato4)/sum(validos))*100),1) from voto_presidente");
$can5_por = DBlookup("select round(((sum(candidato5)/sum(validos))*100),1) from voto_presidente");
$can6_por = DBlookup("select round(((sum(candidato6)/sum(validos))*100),1) from voto_presidente");
$can7_por = DBlookup("select round(((sum(candidato7)/sum(validos))*100),1) from voto_presidente");
$can8_por = DBlookup("select round(((sum(candidato8)/sum(validos))*100),1) from voto_presidente");
$can9_por = DBlookup("select round(((sum(candidato9)/sum(validos))*100),1) from voto_presidente");
$can10_por = DBlookup("select round(((sum(candidato10)/sum(validos))*100),1) from voto_presidente");
$can11_por = DBlookup("select round(((sum(candidato11)/sum(validos))*100),1) from voto_presidente");
$can12_por = DBlookup("select round(((sum(candidato12)/sum(validos))*100),1) from voto_presidente");
$can13_por = DBlookup("select round(((sum(candidato13)/sum(validos))*100),1) from voto_presidente");
$can14_por = DBlookup("select round(((sum(candidato14)/sum(validos))*100),1) from voto_presidente");
$can15_por = DBlookup("select round(((sum(candidato15)/sum(validos))*100),1) from voto_presidente");
$otros_por = DBlookup("select round(((((sum(candidato1))+(sum(candidato2))+(sum(candidato3))+(sum(candidato4))+(sum(candidato5))
+(sum(candidato6))+(sum(candidato8))+(sum(candidato9))+(sum(candidato10))+(sum(candidato11))+(sum(candidato12))+(sum(candidato13)))/sum(validos))*100),1) from voto_presidente");

$_SESSION["can1"] = $can1_por;
$_SESSION["can2"] = $can2_por;
$_SESSION["can3"] = $can3_por;
$_SESSION["can4"] = $can4_por;
$_SESSION["can5"] = $can5_por;
$_SESSION["can6"] = $can6_por;
$_SESSION["can7"] = $can7_por;
$_SESSION["can8"] = $can8_por;
$_SESSION["can9"] = $can9_por;
$_SESSION["can10"] = $can10_por;
$_SESSION["can11"] = $can11_por;
$_SESSION["can12"] = $can12_por;
$_SESSION["can13"] = $can13_por;
$_SESSION["can14"] = $can14_por;
$_SESSION["can15"] = $can15_por;
$_SESSION["otros"] = $otros_por;
;
unset($query);
?>