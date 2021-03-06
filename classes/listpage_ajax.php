<?php
/**
 * Class for list page with mode ajax
 *
 */
class ListPage_Ajax extends ListPage_Simple
{
	/**
	 * Constructor, set initial params
	 *
	 * @param array $params
	 */
	function __construct(&$params)
	{
		// call parent constructor
		ListPage::__construct($params);
	}
	/**
	 * Add common assign for ajax mode on list page
	 */
	function commonAssign()
	{
		parent::commonAssign();

		$this->xt->assign("filterPanelStateClass", "filter-ajaxReloaded");
	}

	/**
	 * Add common html code for ajax mode on list page
	 */
	function addCommonHtml()
	{
		return true;
	}

	/**
	 * Add common javascript code for ajax mode on list page
	 */
	function addCommonJs()
	{
		$this->addJsForGrid();
	}

	/**
	 * Show page method
	 */
	function showPage()
	{
		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();
		
		if( $this->isPD() ) {
			$this->showPDPage();
			return;
		}
		
		$this->BeforeShowList();
		$bricksExcept = array("details_found", "page_of", "recsperpage", "vrecsperpage", "vdetails_found", "vpage_of", "grid");
		$bricksExcept[] = "pagination";
		$bricksExcept[] = "reorder_records";
		$bricksExcept[] = "search_saving_buttons";
		$bricksExcept[] = "filterpanel";
		$bricksExcept[] = "message";
		$bricksExcept[] = "recordcontrol";
		$bricksExcept[] = "bsgrid_tabs";
		
		if ( $this->isBootstrap() )
			$bricksExcept[]= "morebutton";

		$this->xt->hideAllBricksExcept($bricksExcept);
		$this->xt->prepare_template($this->templatefile);
		
		$this->xt->assign("header","");
		$this->xt->assign("footer","");
		
		global $pagesData;
		$returnJSON["pagesData"] = $pagesData;
		
		$returnJSON = array();
		$returnJSON["success"] = true;
		$returnJSON["idStartFrom"] = $this->flyId;
	
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsMap;
		$returnJSON['settings'] = $this->jsSettings;
		$returnJSON['cellStyles'] = $this->row_css_rules.$this->cell_css_rules."\n".$this->mobile_css_rules;
		$returnJSON['numberOfRecs'] = $this->numRowsFromSQL;
		$returnJSON['recPerPage'] = $this->pageSize;
		
		$returnJSON["html"] = $this->xt->fetch_loaded("body");

		if( $this->deleteMessage != '' )
			$returnJSON["usermessage"] = true;

		echo printJSON( $returnJSON );
		exit();
	}
	
	function showPDPage() {
		global $pagesData;
		
		$this->xt->load_template( $this->templatefile );
		
		$returnJSON = array();
		$returnJSON["success"] = true;
		$returnJSON["idStartFrom"] = $this->flyId;
		$returnJSON["pagesData"] = $pagesData;
	
		$returnJSON["controlsMap"] = $this->controlsHTMLMap;
		$returnJSON["viewControlsMap"] = $this->viewControlsMap;
		$returnJSON["settings"] = $this->jsSettings;
		$returnJSON["cellStyles"] = $this->row_css_rules.$this->cell_css_rules."\n".$this->mobile_css_rules;
		$returnJSON["numberOfRecs"] = $this->numRowsFromSQL;
		$returnJSON["recPerPage"] = $this->pageSize;
		
		if( $this->deleteMessage != '' )
			$returnJSON["usermessage"] = true;

		$returnJSON["html"] = $this->xt->fetch_loaded("body");
		
		echo printJSON( $returnJSON );
		exit();			
	}

	/**
	 * A stub
	 */
	function rulePRG() {
	}
}
?>