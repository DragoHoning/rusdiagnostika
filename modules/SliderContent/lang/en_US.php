<?php
$lang['PageExtContent'] = 'Блоки текста (дополнительные)';
$lang['ID_page'] = 'ID Page';
$lang['use_wysiwyg'] = 'Использовать визуальный редактор WYSIWYG';
$lang['editblock'] = 'Редактировать';
$lang['warn_fesubmit_deprecated'] = 'Frontend submission functionality is officially deprecated.  Please find another solution for this functionality.';
$lang['fesubmit_allowed'] = 'Allow Frontend Article Submission';
$lang['help_idlist'] = 'Applicable only to the default action (summary view).  This parameter accepts a comma separated list of numeric article ids and allows further filtering articles to only the article ids specified.  The actual list of articles output is still subject to article status, expiry date, and other parameters.';
$lang['error_nooptions'] = 'No options specified for field definition';
$lang['dropdown'] = 'Dropdown';
$lang['info_public'] = 'Only Public fields are available for frontend editing, or for display in summary or detail views.';
$lang['info_expired_viewable'] = 'If enabled, expired articles can be viewed in detail mode (this is reproducing older functionality).  the showall parameter can be used on the URL (when not using pretty urls) to also indicate that expired articles can be viewed';
$lang['expired_viewable'] = 'Expired articles can be viewed in the detail view';
$lang['error_insufficientparams'] = 'Insufficient (or empty) parameters';
$lang['error_duplicatename'] = 'An item with that name already exists';
$lang['detail_page'] = 'Detail Page';
$lang['detail_template'] = 'Detail Template';
$lang['warning_preview'] = 'Warning: This preview panel behaves much like a browser window allowing you to navigate away from the initially previewed page. However, if you do that, you may experience unexpected behaviour.  Navigating away from the initial page and returning will not give the expected results.<br/><strong>Note:</strong> The preview does not upload files you may have selected for upload.';
$lang['article'] = 'Article';
$lang['preview'] = 'Preview';
$lang['info_detail_returnid'] = 'This preference is used to determine a page (and therefore a template) to use to view detail pages.  Individualized News Detail URLS will not work if this parameter is not set to a valid page.  Additionally, if this preference is set, and no detailpage parameter is provided on the news tag, then this value will be used for detail links';
$lang['title_detail_returnid'] = 'Default page to use for detail views';
$lang['title_submission_settings'] = 'News Submission Settings';
$lang['title_fesubmit_settings'] = 'Frontend Submit Settings';
$lang['title_notification_settings'] = 'Notification Settings';
$lang['title_detail_settings'] = 'Detail View Settings';
$lang['error_invalidurl'] = 'Invalid URL <em>(maybe it is already used, or there are invalid characters)</em>';
$lang['url'] = 'URL';
$lang['expired_searchable'] = 'Expired articles can appear in search results';
$lang['helpshowall'] = 'Show all articles, irrespective of end date';
$lang['error_invaliddates'] = 'One or more of the dates entered were invalid';
$lang['notify_n_draft_items_sub'] = '%d News article(s)';
$lang['notify_n_draft_items'] = 'You have %s that is/are not published';
$lang['unlimited'] = 'Unlimited';
$lang['none'] = 'None';
$lang['anonymous'] = 'Anonymous';
$lang['unknown'] = 'Unknown';
$lang['fesubmit_redirect'] = 'PageID or alias to redirect to after a news article has been submitted via the fesubmit action';
$lang['allow_summary_wysiwyg'] = 'Allow using a WYSIWYG editor on the summary field';
$lang['title_browsecat_template'] = 'Browse Category Template Editor';
$lang['title_browsecat_sysdefault'] = 'Default Browse category Template';
$lang['browsecattemplate'] = 'Browse Category Templates';
$lang['error_filesize'] = 'An uploaded file exceeded the maximum allowed size';
$lang['post_date_desc'] = 'Post Date Descending';
$lang['post_date_asc'] = 'Post Date Ascending';
$lang['expiry_date_desc'] = 'Expiry Date Descending';
$lang['expiry_date_asc'] = 'Expiry Date Ascending';
$lang['title_desc'] = 'Title Descending';
$lang['title_asc'] = 'Title Ascending';
$lang['status_desc'] = 'Status Descending';
$lang['status_asc'] = 'Status Ascending';
$lang['fesubmit_status'] = 'The status of news articles submitted via the frontend';
$lang['error_invalidfiletype'] = 'Cannot upload this type of file';
$lang['error_upload'] = 'Problem occurred uploading a file';
$lang['error_movefile'] = 'Could not create file: %s';
$lang['error_mkdir'] = 'Could not create directory: %s';
$lang['expiry_interval'] = 'The number of days (by default) before an article expires (if expiry is selected)';
$lang['removed'] = 'Removed';
$lang['msg_contenttype_removed'] = <<<EOT
The news content type has been removed.  Please place {news} tags with appropriate parameters into your page template or into your page content to replace this functionality.
EOT;
$lang['delete_selected'] = 'Delete Selected Articles';
$lang['areyousure_deletemultiple'] = 'Are you sure you want to delete all of these news articles?\nThis action cannot be undone!';
$lang['error_templatenamexists'] = 'A template by that name already exists';
$lang['error_noarticlesselected'] = 'No Articles Were Selected';
$lang['reassign_category'] = 'Change Category To';
$lang['select'] = 'Select';
$lang['approve'] = 'Set Status to \'Published\'';
$lang['revert'] = 'Set Status to \'Draft\'';
$lang['hide_summary_field'] = 'Hide the summary field when adding or editing articles';
$lang['textbox'] = 'Text Input';
$lang['checkbox'] = 'Checkbox';
$lang['textarea'] = 'Text Area';
$lang['file'] = 'File';
$lang['auto_create_thumbnails'] = 'Automatically create thumbnail files for files with these extensions';
$lang['allowed_upload_types'] = 'Allow only files with these extensions to be uploaded';
$lang['fielddefupdated'] = 'Field Definition Updated';
$lang['editfielddef'] = 'Edit Field Definition';
$lang['up'] = 'Up';
$lang['down'] = 'Down';
$lang['fielddefdeleted'] = 'Field Definition Deleted';
$lang['nameexists'] = 'A field by that name already exists';
$lang['notanumber'] = 'Maximum Length is Not a Number';
$lang['fielddef'] = 'Field Definition';
$lang['fielddefadded'] = 'Field Definition Successfully Added';
$lang['public'] = 'Public';
$lang['type'] = 'Type';
$lang['info_maxlength'] = 'The maximum length only applies to text input fields.';
$lang['maxlength'] = 'Maximum Length';
$lang['addfielddef'] = 'Add Field Definition';
$lang['customfields'] = 'Field Definitions';
$lang['deprecated'] = 'unsupported';
$lang['subject_newnews'] = 'A new News article has been posted';
$lang['email_subject'] = 'The Subject of the outgoing email';
$lang['email_template'] = 'The format of the email message';
$lang['formsubmit_emailaddress'] = 'Email address to receive notification of news submission';
$lang['extra'] = 'Extra';
$lang['uploadscategory'] = 'Uploads Category';
$lang['title_available_templates'] = 'Available Templates';
$lang['resettodefault'] = 'Reset to Factory Defaults';
$lang['title_form_template'] = 'Form Template Editor';
$lang['title_detail_template'] = 'Detail Template Editor';
$lang['title_summary_template'] = 'Summary Template Editor';
$lang['prompt_templatename'] = 'Template Name';
$lang['prompt_template'] = 'Template Source';
$lang['title_form_sysdefault'] = 'Default Form Template';
$lang['title_summary_sysdefault'] = 'Default Summary Template';
$lang['title_detail_sysdefault'] = 'Default Detail Template';
$lang['info_sysdefault2'] = '<strong>Note:</strong> This tab contains text areas to allow you to edit a set of templates that are displayed when you create a \'new\' summary, detail, or form template.  Changing content in this tab, and clicking \'submit\' will <strong>not effect any current displays</strong>.';
$lang['info_sysdefault'] = '(the content used by default when a new template is created)';
$lang['template'] = 'Template';
$lang['prompt_name'] = 'Name';
$lang['prompt_default'] = 'Default';
$lang['prompt_newtemplate'] = 'Create A New Template';
$lang['help_pagelimit'] = 'Maximum number of items to display (per page).  If this parameter is not supplied all matching items will be displayed.  If it is, and there are more items available than specified in the parameter, text and links will be supplied to allow scrolling through the results';
$lang['prompt_page'] = 'Page';
$lang['firstpage'] = '&lt;&lt;';
$lang['prevpage'] = '&lt;';
$lang['nextpage'] = '&gt;';
$lang['lastpage'] = '&gt;&gt;';
$lang['prompt_of'] = 'of';
$lang['prompt_pagelimit'] = 'Page Limit';
$lang['prompt_sorting'] = 'Sort By';
$lang['title_filter'] = 'Filters';
$lang['published'] = 'Published';
$lang['draft'] = 'Draft';
$lang['expired'] = 'Expired';
$lang['author'] = 'Author';
$lang['sysdefaults'] = 'Restore to defaults';
$lang['restoretodefaultsmsg'] = 'This operation will restore the template contents to their system defaults.  Are you sure you want to proceed?';
$lang['addarticle'] = 'Add Article';
$lang['articleadded'] = 'The article was successfully added.';
$lang['articleupdated'] = 'The article was successfully updated.';
$lang['articledeleted'] = 'The article was successfully deleted.';
$lang['articlesubmitted'] = 'The article was successfully submitted.';
$lang['addcategory'] = 'Add Category';
$lang['categoryadded'] = 'The category was successfully added.';
$lang['categoryupdated'] = 'The category was successfully updated.';
$lang['categorydeleted'] = 'The category was successfully deleted.';
$lang['addnewsitem'] = 'Add News Item';
$lang['allcategories'] = 'All Categories';
$lang['allentries'] = 'All Entries';
$lang['areyousure'] = 'Are you sure you want to delete?';
$lang['articles'] = 'Articles';
$lang['cancel'] = 'Cancel';
$lang['category'] = 'Category';
$lang['categories'] = 'Categories';
$lang['default_category'] = 'Default Category';
$lang['content'] = 'Content';
$lang['dateformat'] = '%s not in a valid yyyy-mm-dd hh:mm:ss format';
$lang['delete'] = 'Delete';
$lang['description'] = 'Add, edit and remove News entries';
$lang['formtemplate'] = 'Form Templates';
$lang['detailtemplate'] = 'Detail Templates';
$lang['default_templates'] = 'Default Templates';
$lang['detailtemplateupdated'] = 'The updated Detail Template was successfully saved to the database.';
$lang['displaytemplate'] = 'Display Template';
$lang['edit'] = 'Edit';
$lang['enddate'] = 'End Date';
$lang['endrequiresstart'] = 'Entering an end date requires a start date also';
$lang['entries'] = '%s Entries';
$lang['status'] = 'Status';
$lang['expiry'] = 'Expiry';
$lang['filter'] = 'Filter';
$lang['more'] = 'More';
$lang['category_label'] = 'Category:';
$lang['author_label'] = 'Posted by:';
$lang['extra_label'] = 'Extra:';
$lang['moretext'] = 'More Text';
$lang['name'] = 'Name';
$lang['news'] = 'Метки на карте';
$lang['news_return'] = 'Return';
$lang['newcategory'] = 'New Category';
$lang['needpermission'] = 'You need the \'%s\' permission to perform that function.';
$lang['nocategorygiven'] = 'No Category Given';
$lang['startdatetoolate'] = 'The Start Date is too late (after end date?)';
$lang['nocontentgiven'] = 'No Content Given';
$lang['noitemsfound'] = '<strong>No</strong> items found for category: %s';
$lang['nopostdategiven'] = 'No Post Date Given';
$lang['note'] = '<em>Note:</em> Dates must be in a \'yyyy-mm-dd hh:mm:ss\' format.';
$lang['notitlegiven'] = 'No Title Given';
$lang['nonamegiven'] = 'No Name Given';
$lang['numbertodisplay'] = 'Number to Display (empty shows all records)';
$lang['print'] = 'Print';
$lang['postdate'] = 'Post Date';
$lang['postinstall'] = 'Make sure to set the "Modify PageExtContent" permission on users who will be administering News items.';
$lang['selectcategory'] = 'Select Category';
$lang['showchildcategories'] = 'Show Child Categories';
$lang['sortascending'] = 'Sort Ascending';
$lang['startdate'] = 'Start Date';
$lang['startoffset'] = 'Start displaying at the nth item';
$lang['startrequiresend'] = 'Entering a start date requires an end date also';
$lang['apply'] = 'Apply';
$lang['submit'] = 'Submit';
$lang['summary'] = 'Summary';
$lang['summarytemplate'] = 'Summary Templates';
$lang['summarytemplateupdated'] = 'The News Summary Template was successfully updated.';
$lang['title'] = 'Title';
$lang['options'] = 'Options';
$lang['optionsupdated'] = 'The options were successfully updated.';
$lang['useexpiration'] = 'Use Expiration Date';
$lang['eventdesc-NewsArticleAdded'] = 'Sent when an article is added.';

?>