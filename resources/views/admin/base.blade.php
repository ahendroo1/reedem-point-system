
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
		Coupon Point | TraderHub - Admin control panel
    </title>
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	
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
			<i class="fa fa-bars" aria-hidden="true"></i>
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
		
	</div>
</header>





@yield('content')





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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
	<script>

        function deletecategory(data){

            $('.cname').text(data[1])
            $('.cicon').attr('src', data[2])
            $('.modal-delete-category').attr("href", "{{url('delete-category-coupon')}}"+'/'+ data[0])


            $('#delete-category').modal('show')
            console.log(data)
            // alert('asxasx')
        }

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
    

    @yield('jquery')


</body>
</html>


