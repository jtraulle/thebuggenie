<?php 

	/**
	 * Main action components
	 */
	class i18nHelperActionComponents extends TBGActionComponent
	{
        public function componentI18nHelper()
        {
        }	
        
        public function componentModifyStrings()
        {
            ExtTBGI18n::modifyStrings();
        }
	}