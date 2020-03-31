
<!DOCTYPE html>
<html id="XF" lang="en-US" dir="LTR"
	class="has-no-js template-advertising_list" data-template="advertising_list"
	data-app="admin"
	data-cookie-prefix="xf_"
	data-csrf="1585630502,5960bd220dbeb2462c52dc5596743cdc"
	>
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

	<title>
		Advertising | TraderHub - Admin control panel
	</title>
	
	<link rel="preload" href="https://traderhub.id/styles/fonts/fa/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin="anonymous" />

	<link rel="preload" href="https://traderhub.id/styles/fonts/fa/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous" />

    <link rel="preload" href="https://traderhub.id/styles/fonts/fa/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous" />

	<link rel="stylesheet" href="https://traderhub.id/css.php?css=public%3Anormalize.css%2Cpublic%3Acore.less%2Cadmin%3Aapp.less&amp;s=0&amp;l=5&amp;d=1585286205&amp;k=0bcc922f44eb4da8723bfd3906da5d2faf017fab" />

	<link rel="stylesheet" href="https://traderhub.id/css.php?css=public%3Aextra.less&amp;s=0&amp;l=5&amp;d=1585286205&amp;k=6c612b26b503e4beb48f8bfbaa35f41ade1bd4f0" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

	<script src="https:/traderhub.id/js/xf/preamble.min.js?_v=1aa9b39f"></script>
	

</head>
<body>

<!-- HEADER -->

<header class="p-header">
	<div class="p-header-buttons p-header-buttons--main">
		<a class="p-header-button p-header-button--nav"
			data-xf-click="off-canvas"
			data-menu="#js-nav"
			role="button"
			tabindex="0"
			aria-label="Menu">
			<i class="fa--xf far fa-bars" aria-hidden="true"></i>
		</a>
		<a href="https://traderhub.id/admin.php" class="p-header-button" aria-label="Home"><i class="fa fa-home" aria-hidden="true"></i></a>
		<a href="index.php" class="p-header-button p-header-button--title" target="_blank">TraderHub</a>
	</div>

	<div class="p-header-buttons p-header-buttons--opposite">
		
			<a class="p-header-button" data-xf-key="o" data-xf-click="menu" role="button" tabindex="0"
				aria-label="Pilihan"
				aria-expanded="false"
				aria-haspopup="true">
				<i class="fa--xf far fa-cogs" aria-hidden="true"></i>
			</a>
			<div class="menu menu--structural menu--superWide" data-menu="menu" aria-hidden="true"
				data-href="https://traderhub.id/admin.php?options/menu"
				data-load-target=".js-optionGroupsMenuBody">
				<div class="menu-content js-optionGroupsMenuBody">
					<div class="menu-row">
						Loading...
					</div>
				</div>
			</div>
		
		<a class="p-header-button" data-xf-key="/" data-xf-click="menu" role="button" tabindex="0"
			aria-label="Cari"
			aria-expanded="false"
			aria-haspopup="true">
			<i class="fa--xf far fa-search" aria-hidden="true"></i>
		</a>
		<form action="/admin.php?search/search" class="menu menu--structural menu--veryWide" data-xf-init="admin-search" data-menu="menu" aria-hidden="true">
			<div class="menu-content">
				<h3 class="menu-header">Cari...</h3>
				<div class="menu-row">
					<input type="text" name="q" autocomplete="off" class="input js-adminSearchInput" data-menu-autofocus="" />
				</div>
				<div class="menu-scroller p-quickSearchResultsWrapper js-adminSearchResultsWrapper">
					<div class="p-quickSearchResults js-adminSearchResults"></div>
				</div>
			</div>
		</form>
	</div>
</header>

<!-- BODY -->

<div class="p-body-container">
	<div class="p-body">
		<nav class="p-nav" id="js-nav" data-ocm-class="offCanvasMenu offCanvasMenu--adminNav" data-ocm-builder="acpNav">
			<div data-ocm-class="offCanvasMenu-backdrop" data-menu-close="true"></div>
			<div class="p-nav-inner" data-xf-init="admin-nav" data-ocm-class="offCanvasMenu-content">
				<div class="offCanvasMenu-shown offCanvasMenu-header">
					Menu
					<a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="Close"></a>
				</div>
				<div class="p-nav-content js-navSticky">
					
			<ul class="p-nav-listRoot" id="js-navAccordion">
		
		
			
	
		<li class="p-nav-section " data-navigation-id="setup">
			<div class="p-nav-sectionHeader">
				<a href="https://traderhub.id/admin.php?setup/" class="p-nav-sectionLink js-navSectionToggle">
					<i class="fa fa-trophy" aria-hidden="true"></i> Trophy
				</a>
				<a class="p-nav-sectionToggle js-navSectionToggle" role="button" tabindex="0" aria-label="Toggle expanded"></a>
			</div>
	

			<ul class="p-nav-listSection ">
                
                <li class="p-nav-el " data-navigation-id="options">
                    
                    <a href="https://traderhub.id/admin.php?options/">Bronze</a>

                </li>
                {{-- is-active --}}
                
                <li class="p-nav-el " data-navigation-id="options">
                    
                    <a href="https://traderhub.id/admin.php?options/">Silver</a>

                </li>
                    
                <li class="p-nav-el " data-navigation-id="options">
                    
                    <a href="https://traderhub.id/admin.php?options/">Gold</a>

                </li>
		    </ul>
        </li>


            <li class="p-nav-section" data-navigation-id="logs">
                <div class="p-nav-sectionHeader">
                    <a href="https://traderhub.id/admin.php?logs/" class="p-nav-sectionLink ">
                        <i class="fa fa-id-card" aria-hidden="true"></i> Coupon
                    </a>
                    <a class="p-nav-sectionToggle js-navSectionToggle" role="button" tabindex="0" aria-label="Toggle expanded"></a>
                </div>
            </li>
            <li class="p-nav-section" data-navigation-id="logs">
                <div class="p-nav-sectionHeader">
                    <a href="https://traderhub.id/admin.php" class="p-nav-sectionLink ">
                        <i class="fa fa-tint" aria-hidden="true"></i> go to Admin Pages
                    </a>
                    <a class="p-nav-sectionToggle js-navSectionToggle" role="button" tabindex="0" aria-label="Toggle expanded"></a>
                </div>
            </li>

		
		</ul>
	

				</div>
				<div class="p-nav-tester js-navTester"></div>
			</div>
		</nav>

		<div class="p-main">
			<main class="p-main-inner">

				<!--XF:EXTRA_OUTPUT-->

				
	<noscript><div class="blockMessage blockMessage--important blockMessage--iconic u-noJsOnly">JavaScript is disabled. For a better experience, please enable JavaScript in your browser before proceeding.</div></noscript>

				
	<!--[if lt IE 9]><div class="blockMessage blockMessage&#45;&#45;important blockMessage&#45;&#45;iconic">You are using an out of date browser. It  may not display this or other websites correctly.<br />You should upgrade or use an <a href="https://www.google.com/chrome/browser/" target="_blank">alternative browser</a>.</div><![endif]-->


				
					
	

				

				

				

				

				
					<ul class="p-breadcrumbs">
						
							<li><a href="https://traderhub.id/admin.php?setup/">Points</a></li>
						
					</ul>
				

				
					<div class="p-main-header">
					
						
							<div class="p-title ">
							
									<h1 class="p-title-value">
										Point System
									</h1>
								
								
									<div class="p-title-pageAction">
                                        <a href="https://traderhub.id/admin.php?advertising/add" class="button button--icon button--icon--add"><span class="button-text">Add advertisement</span></a>
                                    </div>
								
							
							</div>
						

						
					
					</div>
				

				<div class="p-content" id="content">
					
			<form action="/admin.php?advertising/toggle" method="post" class="block"
				 data-xf-init="ajax-submit"
			>
				
		<div class="block-outer">
			
	
	<div class="block-outer-opposite quickFilter u-jsOnly" data-xf-init="filter" data-key="advertising" data-ajax="">
		<div class="inputGroup inputGroup--inline inputGroup--joined">
			<input type="text" class="input js-filterInput" placeholder="Filter..." data-xf-key="f" />
			<span class="inputGroup-text">
				<label class="iconic"><input type="checkbox"  value="1" class="js-filterPrefix" /><i aria-hidden="true"></i><span class="iconic-label">Label</span></label>

			</span>
			<i class="inputGroup-text js-filterClear is-disabled" aria-hidden="true"></i>
		</div>
	</div>

		</div>
		<div class="block-container">
			<div class="block-body">
				
			<div class="dataList ">
			<table class="dataList-table">
				
					
						
					
						
							<tbody class="dataList-rowGroup">
								
			<tr class="dataList-row dataList-row--noHover dataList-row--subSection">
				<td class="dataList-cell dataList-cell--main" colspan="3"><div class="dataList-mainRow">Container breadcrumb (bottom): Below</div>
<div class="dataList-subRow">Inside the page container, directly below the bottom breadcrumb on every page.</div></td>
			</tr>
		
								
									
			<tr class="dataList-row">
				<td class="dataList-cell dataList-cell--link dataList-cell--main"><a href="https://traderhub.id/admin.php?advertising/ads-before-footer.1/edit" ><div class="dataList-mainRow">ads before footer</div></a></td>
<td class="dataList-cell dataList-cell--separated dataList-cell--iconic"><input type="hidden" name="active[1]" value="0" /><label class="iconic iconic--toggle" data-xf-init="tooltip" title="Enable / disable &#039;ads before footer&#039;" data-xf-click="submit"><input type="checkbox" name="active[1]" value="1" checked="checked" /><i aria-hidden="true"></i></label></td>
<td class="dataList-cell dataList-cell--iconic dataList-cell--alt dataList-cell--action"><a href="https://traderhub.id/admin.php?advertising/ads-before-footer.1/delete" class="iconic iconic--delete dataList-delete" data-xf-init="tooltip" title="Hapus" data-xf-click="overlay"><i aria-hidden="true"></i></a></td>
			</tr>
		
								
							</tbody>
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
				
			</table>
			</div>
		
				<div class="block-footer">
					<span class="block-footer-counter"><span class="js-displayTotals" data-count="1" data-total="1" data-xf-init="tooltip" title="There are 1 items in total">Showing all items</span></span>
				</div>
			</div>
		</div>
	
				<input type="hidden" name="_xfToken" value="1585630502,5960bd220dbeb2462c52dc5596743cdc" />
				
			</form>
		




	

	
		
			<form action="/admin.php?options/update" method="post" class="block"
				 data-xf-init="ajax-submit"
			>
				
			<div class="block-container">
				
				<div class="block-body">
					

						

						
	

	
	
	
	

	<span class="u-anchorTarget" id="adsDisallowedTemplates"></span>

	
		
			<dl class="formRow formRow--input">
				<dt>
					<div class="formRow-labelWrapper">
					<label class="formRow-label" for="_xfUid-1-1585630502">Prevent ads showing in these templates</label></div>
				</dt>
				<dd>
					<textarea class="input input--fitHeight" name="options[adsDisallowedTemplates]" rows="3" id="_xfUid-1-1585630502" data-xf-init="textarea-handler">error
login
login_password_confirm
login_two_step
message_page
register_complete
register_connected_account
register_confirm
register_form</textarea>
					<div class="formRow-explain">You may want to prevent all ads from showing within certain templates, such as errors or other pages that may be against your ad provider's ToS. List them above.</div>
					<input type="hidden" name="options_listed[]" value="adsDisallowedTemplates" />
				</dd>
			</dl>
		
	

					
				</div>
				
			<dl class="formRow formSubmitRow formSubmitRow--sticky" data-xf-init="form-submit-row">
				<dt></dt>
				<dd>
					<div class="formSubmitRow-main">
						<div class="formSubmitRow-bar"></div>
						<div class="formSubmitRow-controls"><button type="submit" class="button--primary button button--icon button--icon--save"><span class="button-text">Simpan</span></button></div>
					</div>
				</dd>
			</dl>
		
			</div>
		
				<input type="hidden" name="_xfToken" value="1585630502,5960bd220dbeb2462c52dc5596743cdc" />
				
			</form>
		
	

				</div>
			</main>
		</div>
	</div>
</div>

<footer class="p-footer">
	<div class="p-footer-row">
		<div class="p-footer-row-main">
			<a href="https://traderhub.id/admin.php?login/logout&amp;t=1585630502%2C5960bd220dbeb2462c52dc5596743cdc">Keluar</a>
		</div>

		<div class="p-footer-row-opposite">
			<span class="p-footer-version">v2.1.6 Patch 1</span>
			
				<a href="https://traderhub.id/admin.php?languages/admin" data-xf-click="overlay" data-xf-init="tooltip" title="Language chooser">
					<i class="fa--xf far fa-globe" aria-hidden="true"></i> Bahasa
				</a>
			
		</div>
	</div>

	
		<div class="p-footer-copyright">
		
			<a href="https://xenforo.com" class="u-concealed" dir="ltr" target="_blank">Forum software by XenForo<sup>&reg;</sup> <span class="copyright">&copy; 2010-2019 XenForo Ltd.</span></a>
			
		
		</div>
	

	
</footer>

<div class="u-bottomFixer js-bottomFixTarget"></div>


	
	<script src="https:/traderhub.id/js/vendor/jquery/jquery-3.3.1.min.js?_v=1aa9b39f"></script>
	<script src="https:/traderhub.id/js/vendor/vendor-compiled.js?_v=1aa9b39f"></script>
	<script src="https:/traderhub.id/js/xf/core-compiled.js?_v=1aa9b39f"></script>
	<script src="https:/traderhub.id/js/xf/filter.min.js?_v=1aa9b39f"></script>
<script src="https:/traderhub.id/js/xf/admin.min.js?_v=1aa9b39f"></script>

	<script>
		jQuery.extend(true, XF.config, {
			// 
			userId: 9,
			enablePush: false,
xs_TypeEditor: 'text',
			pushAppServerKey: '',
			url: {
				fullBase: 'http://trader.hub/',
				basePath: '/',
				css: '/css.php?css=__SENTINEL__&s=0&l=5&d=1585286205',
				keepAlive: '/admin.php?login/keep-alive'
			},
			cookie: {
				path: '/',
				domain: '',
				prefix: 'xf_',
				secure: false
			},
			csrf: '1585630502,5960bd220dbeb2462c52dc5596743cdc',
			js: {"\/js\/xf\/filter.min.js?_v=1aa9b39f":true,"\/js\/xf\/admin.min.js?_v=1aa9b39f":true},
			css: {"public:extra.less":true},
			time: {
				now: 1585630502,
				today: 1585609200,
				todayDow: 2,
				tomorrow: 1585695600,
				yesterday: 1585522800,
				week: 1585094400
			},
			borderSizeFeature: '3px',
			fontAwesomeWeight: 'r',
			enableRtnProtect: true,
			enableFormSubmitSticky: true,
			uploadMaxFilesize: 2097152,
			allowedVideoExtensions: ["m4v","mov","mp4","mp4v","mpeg","mpg","ogv","webm"],
			shortcodeToEmoji: true,
			visitorCounts: {
				conversations_unread: '0',
				alerts_unread: '0',
				total_unread: '0',
				title_count: true,
				icon_indicator: true
			},
			jsState: {},
			publicMetadataLogoUrl: '',
			publicPushBadgeUrl: 'http://trader.hub/styles/default/xenforo/bell.png'
		});

		jQuery.extend(XF.phrases, {
			// 
			date_x_at_time_y: "{date} at {time}",
			day_x_at_time_y:  "{day} at {time}",
			yesterday_at_x:   "Kemarin {time}",
			x_minutes_ago:    "{minutes} minutes ago",
			one_minute_ago:   "1 minute ago",
			a_moment_ago:     "Sesaat lalu",
			today_at_x:       "Hari ini {time}",
			in_a_moment:      "In a moment",
			in_a_minute:      "In a minute",
			in_x_minutes:     "In {minutes} minutes",
			later_today_at_x: "Later today at {time}",
			tomorrow_at_x:    "Tomorrow at {time}",

			day0: "Minggu",
			day1: "Senin",
			day2: "Selasa",
			day3: "Rabu",
			day4: "Kamis",
			day5: "Jum\'at",
			day6: "Sabtu",

			dayShort0: "Sun",
			dayShort1: "Mon",
			dayShort2: "Tue",
			dayShort3: "Wed",
			dayShort4: "Thu",
			dayShort5: "Fri",
			dayShort6: "Sat",

			month0: "Januari",
			month1: "Februari",
			month2: "Maret",
			month3: "April",
			month4: "Mei",
			month5: "Juni",
			month6: "Juli",
			month7: "Agustus",
			month8: "September",
			month9: "Oktober",
			month10: "November",
			month11: "Desember",

			active_user_changed_reload_page: "The active user has changed. Reload the page for the latest version.",
			server_did_not_respond_in_time_try_again: "The server did not respond in time. Please try again.",
			oops_we_ran_into_some_problems: "Ups!  Kami mengalami beberapa masalah.",
			oops_we_ran_into_some_problems_more_details_console: "Oops! We ran into some problems. Please try again later. More error details may be in the browser console.",
			file_too_large_to_upload: "The file is too large to be uploaded.",
			uploaded_file_is_too_large_for_server_to_process: "The uploaded file is too large for the server to process.",
			files_being_uploaded_are_you_sure: "Files are still being uploaded. Are you sure you want to submit this form?",
			attach: "Lampirkan File",
			rich_text_box: "Rich text box",
			close: "Close",
			link_copied_to_clipboard: "Link copied to clipboard.",
			text_copied_to_clipboard: "Text copied to clipboard.",
			loading: "Loading...",

			processing: "Processing",
			'processing...': "Processing...",

			showing_x_of_y_items: "Showing {count} of {total} items",
			showing_all_items: "Showing all items",
			no_items_to_display: "No items to display",

			push_enable_notification_title: "Push notifications enabled successfully at TraderHub",
			push_enable_notification_body: "Thank you for enabling push notifications!"
		});
	</script>

	<form style="display:none" hidden="hidden">
		<input type="text" name="_xfClientLoadTime" value="" id="_xfClientLoadTime" title="_xfClientLoadTime" tabindex="-1" />
	</form>

	

	
	<script>
		jQuery.extend(true, XF.config, {
			job: {
				manualUrl: "/admin.php?tools/run-job"
			},
			visitorCounts: null
		});
		jQuery.extend(XF.phrases, {
			cancel: "Cancel",
			cancelling: "Cancelling",
			no_items_matched_your_filter: "No items matched your filter."
		});
	</script>


</body>
</html>


