<?
defined('C5_EXECUTE') or die("Access Denied.");

header('Content-type: text/javascript'); ?>

var ccmi18n = { 
	
	error: "<?=t('Error')?>",
	deleteBlock: "<?=t('Delete')?>",
	deleteBlockMsg: "<?=t('The block has been removed successfully.')?>",
	addBlock: "<?=t('Add Block')?>",
	addBlockNew: "<?=t('Add Block')?>",
	addBlockStack: "<?=t('Add Stack')?>",
	addBlockPaste: "<?=t('Paste from Clipboard')?>",
	changeAreaCSS: "<?=t('Design')?>",
	editAreaLayout: "<?=t('Edit Layout')?>",
	addAreaLayout: "<?=t('Add Layout')?>",
	moveLayoutUp: "<?=t('Move Up')?>",
	moveLayoutDown: "<?=t('Move Down')?>",
	moveLayoutAtBoundary: "<?=t('This layout section can not be moved further in this direction.')?>", 
	lockAreaLayout: "<?=t('Lock Layout')?>", 
	unlockAreaLayout: "<?=t('Unlock Layout')?>", 
	deleteLayout: "<?=t('Delete')?>",
	deleteLayoutOptsTitle: "<?=t('Delete Layout')?>", 
	confirmLayoutPresetDelete: "<?=t('Are you sure you want to delete this layout preset?')?>",
	setAreaPermissions: "<?=t('Set Permissions')?>",
	addBlockMsg: "<?=t('The block has been added successfully.')?>",
	updateBlock: "<?=t('Update Block')?>",
	updateBlockMsg: "<?=t('The block has been saved successfully.')?>",
	copyBlockToScrapbookMsg: "<?=t('The block has been added to your clipboard.')?>",
	closeWindow: "<?=t('Close')?>",
	editBlock: "<?=t('Edit')?>",
	editBlockWithName: "<?=tc('%s is a block type name', 'Edit %s')?>",
	setPermissionsDeferredMsg: "<?=t('Permission setting saved. You must complete the workflow before this change is active.')?>",
	editStackContents: "<?=t('Manage Stack Contents')?>",
	compareVersions: "<?=t('Compare Versions')?>",
	blockAreaMenu: "<?=t("Add Block")?>",
	arrangeBlock: "<?=t('Move')?>",
	arrangeBlockMsg: "<?=t('Blocks arranged successfully.')?>",
	copyBlockToScrapbook: "<?=t('Copy to Clipboard')?>",
	changeBlockTemplate: "<?=t('Custom Template')?>",
	changeBlockCSS: "<?=t("Design")?>",
	errorCustomStylePresetNoName: "<?=t('You must give your custom style preset a name.')?>",
	changeBlockBaseStyle: "<?=t("Set Block Styles")?>",
	confirmCssReset: "<?=t("Are you sure you want to remove all of these custom styles?")?>",
	confirmCssPresetDelete: "<?=t("Are you sure you want to delete this custom style preset?")?>",
	setBlockPermissions: "<?=t('Set Permissions')?>",
	setBlockAlias: "<?=t('Setup on Child Pages')?>",
	setBlockComposerSettings: "<?=t("Composer Settings")?>",
	themeBrowserTitle: "<?=t('Get More Themes')?>",
	themeBrowserLoading: "<?=t('Retrieving theme data from concrete5.org marketplace.')?>",
	addonBrowserLoading: "<?=t('Retrieving add-on data from concrete5.org marketplace.')?>",
	clear: "<?=t('Clear')?>",
	requestTimeout: "<?=t('This request took too long.')?>",
	generalRequestError: "<?=t('An unexpected error occurred.')?>",
	helpPopup: "<?=t('Help')?>",
	community: "<?=t('concrete5 Community')?>",
	communityCheckout: "<?=t('concrete5 Community - Purchase &amp; Checkout')?>",
	noIE6: "<?=t('concrete5 does not support Internet Explorer 6 in edit mode.')?>",
	helpPopupLoginMsg: "<?=t('Get more help on your question by posting it to the concrete5 help center on concrete5.org')?>",
	marketplaceErrorMsg: "<?=t('<p>You package could not be installed.  An unknown error occured.</p>')?>",
	marketplaceInstallMsg: "<?=t('<p>Your package will now be downloaded and installed.</p>')?>",
	marketplaceLoadingMsg: "<?=t('<p>Retrieving information from the concrete5 Marketplace.</p>')?>",
	marketplaceLoginMsg: "<?=t('<p>You must be logged into the concrete5 Marketplace to install add-ons and themes.  Please log in.</p>')?>",
	marketplaceLoginSuccessMsg: "<?=t('<p>You have successfully logged into the concrete5 Marketplace.</p>')?>",
	marketplaceLogoutSuccessMsg: "<?=t('<p>You are now logged out of concrete5 Marketplace.</p>')?>",
	deleteAttributeValue: "<?=t('Are you sure you want to remove this value?')?>",
	customizeSearch: "<?=t('Customize Search')?>",
	properties: "<?=t('Properties')?>",
	savePropertiesMsg: "<?=t('Page Properties saved.')?>",
	saveSpeedSettingsMsg: "<?=t("Full page caching settings saved.")?>",
	saveUserSettingsMsg: "<?=t("User Settings saved.")?>",
	ok: "<?=t('Ok')?>",
	scheduleGuestAccess: "<?=t('Schedule Guest Access')?>",
	scheduleGuestAccessSuccess: "<?=t('Timed Access for Guest Users Updated Successfully.')?>",
	newsflowLoading: "<?=t("Checking for updates.")?>",
	authoredBy: "<?=t('by')?>",
	x: "<?=t('x')?>",
	user_activate: "<?=t('Activate Users')?>",
	user_deactivate: "<?=t('Deactivate Users')?>",
	user_delete: "<?=t('Delete')?>",
	user_group_remove: "<?=t('Remove From Group')?>",
	user_group_add: "<?=t('Add to Group')?>"
}

var ccmi18n_sitemap = {

	visitExternalLink: "<?=t('Visit')?>",
	editExternalLink: "<?=t('Edit External Link')?>",
	deleteExternalLink: "<?=t('Delete')?>",
	copyProgressTitle: "<?=t('Copy Progress')?>",
	addExternalLink: "<?=t('Add External Link')?>",
	sendToTop: "<?=t('Send To Top')?>",
	sendToBottom: "<?=t('Send To Bottom')?>",
	emptyTrash: "<?=t('Empty Trash')?>", 
	restorePage: "<?=t('Restore Page')?>", 
	deletePageForever: "<?=t('Delete Forever')?>", 
	previewPage: "<?=t('Preview')?>", 
	visitPage: "<?=t('Visit')?>",
	pageProperties: "<?=t('Properties')?>",
	speedSettings: "<?=t('Full Page Caching')?>",
	speedSettingsTitle: "<?=t('Full Page Caching')?>",
	pagePropertiesTitle: "<?=t('Page Properties')?>",
	pagePermissionsTitle: "<?=t('Page Permissions')?>",
	setPagePermissions: "<?=t('Set Permissions')?>",
	setPagePermissionsMsg: "<?=t('Page permissions updated successfully.')?>",
	pageDesignMsg: "<?=t('Theme and page type updated successfully.')?>",
	pageDesign: "<?=t('Design')?>",
	pageVersions: "<?=t('Versions')?>",
	deletePage: "<?=t('Delete')?>",
	deletePages: "<?=t('Delete Pages')?>",
	deletePageSuccessMsg: "<?=t('The page has been removed successfully.')?>",
	deletePageSuccessDeferredMsg: "<?=t('Delete request saved. You must complete the workflow before the page is fully removed.')?>",
	addPage: "<?=t('Add Page')?>",
	moveCopyPage: "<?=t('Move/Copy')?>",
	reorderPage: "<?=t('Change Page Order')?>",
	reorderPageMessage: "<?=t('Move or reorder pages by dragging their icons.')?>",
	moveCopyPageMessage: "<?=t('Choose a new parent page from the sitemap.')?>",
	editInComposer: "<?=t('Edit in Composer')?>",
	
	searchPages: "<?=t('Search Pages')?>",
	explorePages: "<?=t('Flat View')?>",
	backToSitemap: "<?=t('Back to Sitemap')?>",
	searchResults: "<?=t('Search Results')?>",
	createdBy: "<?=t('Created By')?>",
	choosePage: "<?=t('Choose a Page')?>",
	viewing: "<?=t('Viewing')?>",
	results: "<?=t('Result(s)')?>",
	max: "<?=t('max')?>",
	noResults: "<?=t('No results found.')?>",
	areYouSure: "<?=t('Are you sure?')?>",
	loadError: "<?=t('Unable to load sitemap data. Response received: ')?>",
	loadErrorTitle: "<?=t('Unable to load sitemap data.')?>",
	on: "<?=t('on')?>"	
	
}

var ccmi18n_spellchecker = {

	resumeEditing: "<?=t('Resume Editing')?>",
	noSuggestions: "<?=t('No Suggestions')?>"
	
}

var ccmi18n_filemanager = {
	
	view: "<?=t('View')?>",
	download: "<?=t('Download')?>",
	select: "<?=t('Choose')?>",
	duplicateFile: "<?=t('Copy File')?>",
	clear: "<?=t('Clear')?>",
	edit: "<?=t('Edit')?>",
	replace: "<?=t('Replace')?>",
	duplicate: "<?=t('Copy')?>",
	chooseNew: "<?=t('Choose New File')?>",
	sets: "<?=t('Sets')?>",
	permissions: "<?=t('Access & Permissions')?>",
	properties: "<?=t('Properties')?>",
	deleteFile: "<?=t('Delete')?>",
	title: "<?=t('File Manager')?>",
	uploadErrorChooseFile: "<?=t('You must choose a file.')?>",
	rescan: "<?=t('Rescan')?>",
	pending: "<?=t('Pending')?>",
	uploadComplete: "<?=t('Upload Complete')?>",

	PTYPE_CUSTOM: "<?//=FilePermissions::PTYPE_CUSTOM?>",
	PTYPE_NONE: "<?//=FilePermissions::PTYPE_NONE?>",
	PTYPE_ALL: "<?//=FilePermissions::PTYPE_ALL?>",

	FTYPE_IMAGE: "<?=FileType::T_IMAGE?>",	
	FTYPE_VIDEO: "<?=FileType::T_VIDEO?>",	
	FTYPE_TEXT: "<?=FileType::T_TEXT?>",	
	FTYPE_AUDIO: "<?=FileType::T_AUDIO?>",	
	FTYPE_DOCUMENT: "<?=FileType::T_DOCUMENT?>",	
	FTYPE_APPLICATION: "<?=FileType::T_APPLICATION?>"
	
}

var ccmi18n_chosen = {

	placeholder_text_multiple: "<?=t('Select Some Options')?>",
	placeholder_text_single: "<?=t('Select an Option')?>",
	no_results_text: "<?=t(/*i18n After this text we have a search criteria: for instance 'No results match "Criteria"'*/'No results match')?>"

};