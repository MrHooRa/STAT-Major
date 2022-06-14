<!-- Main page -->
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta6
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en" dir="rtl">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>لوحة التحكم</title>
	<!-- CSS files -->
	<link href="./dist/css/tabler.rtl.min.css" rel="stylesheet" />
	<link href="./dist/css/tabler-flags.rtl.min.css" rel="stylesheet" />
	<link href="./dist/css/tabler-payments.rtl.min.css" rel="stylesheet" />
	<link href="./dist/css/tabler-vendors.rtl.min.css" rel="stylesheet" />
</head>

<body>
	<div class="page">
		<header class="navbar navbar-expand-md navbar-light d-print-none">
			<div class="container-xl">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
					<a href=".">
						<!-- {REPLACE:WEBSITE_LOGO[src, alt]} -->
						<img src="../media/dashboardLogo6.png" width="110" height="32" alt="STAT-MAJOR" class="navbar-brand-image">
					</a>
				</h1>
				<div class="navbar-nav flex-row order-md-last">
					<a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="الوضع الداكن" data-bs-toggle="tooltip"
						data-bs-placement="bottom">
						<!-- Download SVG icon from http://tabler-icons.io/i/moon -->
						<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
							stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
						</svg>
					</a>
					<a href="?theme=light" class="nav-link px-0 hide-theme-light" title="الوضع النهاري" data-bs-toggle="tooltip"
						data-bs-placement="bottom">
						<!-- Download SVG icon from http://tabler-icons.io/i/sun -->
						<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
							stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<circle cx="12" cy="12" r="4" />
							<path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
						</svg>
					</a>
					<div class="nav-item dropdown d-none d-md-flex me-3">
						<!-- NULL -->
					</div>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
							aria-label="Open user menu">
							<!-- {REPLACE:ACCOUNT_PHOTO[url]} -->
							<span class="avatar avatar-sm" style="background-image: url(./src/static/avatars/user.png)"></span>
							<div class="d-none d-xl-block ps-2">
								<div>{REPLACE:USERNAME}</div>
								<div class="mt-1 small text-muted">{REPLACE:ACCOUNT_ROLE}</div>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="#" class="dropdown-item">حسابي</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">الإعدادات</a>
							<a href="#" class="dropdown-item">تسجيل الخروج</a>
						</div>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="navbar-menu">
					<div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
						<ul class="navbar-nav">

							<!-- Home page - Active -->
							<li class="nav-item active">
								<a class="nav-link" href="#">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<!-- Download SVG icon from http://tabler-icons.io/i/home -->
										<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
											stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<polyline points="5 12 3 12 12 3 21 12 19 12" />
											<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
											<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
										</svg>
									</span>
									<span class="nav-link-title">
										الرئيسية
									</span>
								</a>
							</li>

							<!-- Website settings - Not active -->
							<li class="nav-item">
								<a class="nav-link" href="./index.php">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<!-- Download SVG icon from http://tabler-icons.io/i/home -->
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24"
											height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
											stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
											<path
												d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
											</path>
											<circle cx="12" cy="12" r="3"></circle>
										</svg>
									</span>
									<span class="nav-link-title">
										إعدادات الموقع
									</span>
								</a>
							</li>

							<!-- Subject manage - Not active -->
							<li class="nav-item">
								<a class="nav-link" href="./subjects.php">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<!-- Download SVG icon from http://tabler-icons.io/i/home -->
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book-2" width="24"
											height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
											stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
											<path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path>
											<path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
											<path d="M9 8h6"></path>
										</svg>
									</span>
									<span class="nav-link-title">
										المواد
									</span>
								</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</header>
		<div class="page-wrapper">
			<div class="container-xl">
				<!-- Page title -->

				<div class="page-header">
					<div class="row align-items-center">
						<div class="col-auto">
							<!-- {REPLACE:ACCOUNT_PHOTO[url]} -->
							<span class="avatar avatar-md" style="background-image: url(./src/static/avatars/user.png)"></span>
						</div>
						<div class="col">
							<h2 class="page-title">{REPLACE:NICKNAME}</h2>
							<div class="page-subtitle">
								<div class="row">
									<div class="col-auto">
										<!-- TODO: Replace this link to something else -->
										<a href="javascript:void(0)" class="text-reset">{REPLACE:USER_SCORE} نقطة</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Side button (For new event) -->
						<div class="col-auto ms-auto">
							<div class="btn-list">
								<a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
									data-bs-target="#new-event">
									<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
									<!-- SVG icon code -->
									<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24"
										height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
										stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
									فعالية جديدة
								</a>
								<a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
									data-bs-target="#new-event" aria-label="New event">
									<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
									<!-- SVG icon code -->
									<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24"
										height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
										stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
								</a>
							</div>
						</div>

					</div>
				</div>

			</div>
			<div class="page-body">
				<div class="container-xl">
					<div class="row row-deck row-cards">

						<div class="col-12">
							<div class="row row-cards">
								<div class="col-sm-6 col-lg-12">
									<hr>
								</div>
							</div>
						</div>

						<!-- First row (For admin only!)-->
						<!-- TODO: This section for admin only! -->
						<div class="col-12">
							<div class="row row-cards">

								<div class="col-sm-6 col-lg-6">
									<div class="card card-md">
										<div class="card-body">
											<p>أهلا وسهلا بك، من خلال هذه الصفحة بإمكانك إدارة الموقع، الأعضاء، الفعاليات وأيضاً
												مواد الخطة
												الدراسية للإحصاء والكثير.</p>
										</div>
									</div>
								</div>

								<!-- Members -->
								<div class="col-sm-6 col-lg-3">
									<div class="card card-sm">
										<div class="card-body">
											<div class="row align-items-center">
												<div class="col-auto">
													<span class="bg-blue text-white avatar">
														<!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
														<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
															width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
															fill="none" stroke-linecap="round" stroke-linejoin="round">
															<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
															<circle cx="9" cy="7" r="4"></circle>
															<path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
															<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
															<path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
														</svg>
													</span>
												</div>
												<div class="col">
													<div class="font-weight-medium">
														عدد الأعضاء المتفاعلين: {REPLACE:ACTIVE_MEMBERS}
													</div>
													<div class="text-muted">
														عدد أعضاء النادي: {REPLACE:NUMBER_OF_MEMBERS}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Events -->
								<div class="col-sm-6 col-lg-3">
									<div class="card card-sm">
										<div class="card-body">
											<div class="row align-items-center">
												<div class="col-auto">
													<span class="bg-red text-white avatar">
														<!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
														<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event"
															width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
															fill="none" stroke-linecap="round" stroke-linejoin="round">
															<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
															<rect x="4" y="5" width="16" height="16" rx="2"></rect>
															<line x1="16" y1="3" x2="16" y2="7"></line>
															<line x1="8" y1="3" x2="8" y2="7"></line>
															<line x1="4" y1="11" x2="20" y2="11"></line>
															<rect x="8" y="15" width="2" height="2"></rect>
														</svg>
													</span>
												</div>
												<div class="col">
													<div class="font-weight-medium">
														عدد الفعاليات الفعالة: {REPLACE:ACTIVE_EVENTS}
													</div>
													<div class="text-muted">
														مجموع الفعاليات: {REPLACE:NUMBER_OF_EVENTS}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- End of admin section -->

						<!-- Second row -->
						<div class="col-12">
							<div class="row row-cards">

								<!-- Events -->
								<div class="col-sm-6 col-lg-6">
									<div class="card">

										<div class="card-header">
											<h3 class="card-title">الفعاليات</h3>
										</div>

										<div class="list-group list-group-flush overflow-auto" style="max-height: 35rem">

											<!-- Active events -->
											<div class="list-group-header sticky-top text-center">الفعاليات الحالية</div>

											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<!-- {REPLACE:USER_AVATAR[with_image]} -->
															<span class="avatar"
																style="background-image: url(./src/static/avatars/calendar-event.png)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">فعالية ترتيب المقر</a>
														<div class="text-muted text-truncate mt-n1">نحتاج 3 اشخاص لترتيب المقر</div>
													</div>
												</div>
											</div>
											<!-- If there is no image -->
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<!-- {REPLACE:USER_AVATAR[with_text]} -->
															<span class="avatar">AR</span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">{REPLACE:EVENT_NAME}</a>
														<div class="text-muted text-truncate mt-n1">{REPLACE:EVENT_DESCRIPTION}</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<!-- {REPLACE:USER_AVATAR[with_text]} -->
															<span class="avatar"
																style="background-image: url(./src/static/avatars/calendar-event.png)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">{REPLACE:EVENT_NAME}</a>
														<div class="text-muted text-truncate mt-n1">{REPLACE:EVENT_DESCRIPTION}</div>
													</div>
												</div>
											</div>

											<!-- Old events -->
											<div class="list-group-header sticky-top text-center">الفعاليات السابقة</div>

											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar" style="background-image: url(./static/avatars/039m.jpg)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">4# Virgil Archbutt</a>
														<div class="text-muted text-truncate mt-n1">Regenerate package-lock.json
															(#29730)</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar" style="background-image: url(./static/avatars/033m.jpg)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">5# Guthry Arlott</a>
														<div class="text-muted text-truncate mt-n1">Some minor text tweaks</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar">AA</span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">6# Arlie Armstead</a>
														<div class="text-muted text-truncate mt-n1">Link to versioned docs</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar" style="background-image: url(./static/avatars/062m.jpg)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">7# Ashton Arndell</a>
														<div class="text-muted text-truncate mt-n1">Copywriting edits</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar" style="background-image: url(./static/avatars/062f.jpg)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">8# Kass Aspinal</a>
														<div class="text-muted text-truncate mt-n1">Enable RFS for font resizing</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar" style="background-image: url(./static/avatars/043m.jpg)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">9# Rabi Attle</a>
														<div class="text-muted text-truncate mt-n1">Compressed Sass output support
															(#29702)</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

								<!-- Scoreboard -->
								<div class="col-sm-6 col-lg-6">
									<div class="card">

										<div class="card-header">
											<h3 class="card-title">النقاط</h3>
										</div>

										<div class="list-group list-group-flush overflow-auto" style="max-height: 35rem">

											<!-- If there is image -->
											<div class="list-group-header sticky-top text-center">المراكز الثلاث الأولى</div>

											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<!-- {REPLACE:USER_AVATAR[with_image]} -->
															<span class="avatar" style="background-image: url(./src/static/avatars/user.png)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">{REPLACE:USER_NICKNAME}</a>
														<div class="text-muted text-truncate mt-n1">{REPLACE:USER_POINTS} نقطة -
															{REPLACE:USER_RANK}
														</div>
													</div>
												</div>
											</div>
											<!-- If there is no image -->
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<!-- {REPLACE:USER_AVATAR[with_text]} -->
															<span class="avatar">AR</span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">{REPLACE:USER_NICKNAME}</a>
														<div class="text-muted text-truncate mt-n1">{REPLACE:USER_POINTS} نقطة -
															{REPLACE:USER_RANK}
														</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<!-- {REPLACE:USER_AVATAR[with_text]} -->
															<span class="avatar" style="background-image: url(./src/static/avatars/000.jpg)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">سلمان منصور</a>
														<div class="text-muted text-truncate mt-n1">120 نقطة - المركز الثالث</div>
													</div>
												</div>
											</div>

											<!-- All members -->
											<div class="list-group-header sticky-top"></div>

											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar" style="background-image: url(./static/avatars/039m.jpg)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">4# Virgil Archbutt</a>
														<div class="text-muted text-truncate mt-n1">Regenerate package-lock.json
															(#29730)</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar" style="background-image: url(./static/avatars/033m.jpg)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">5# Guthry Arlott</a>
														<div class="text-muted text-truncate mt-n1">Some minor text tweaks</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar">AA</span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">6# Arlie Armstead</a>
														<div class="text-muted text-truncate mt-n1">Link to versioned docs</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar" style="background-image: url(./static/avatars/062m.jpg)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">7# Ashton Arndell</a>
														<div class="text-muted text-truncate mt-n1">Copywriting edits</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar" style="background-image: url(./static/avatars/062f.jpg)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">8# Kass Aspinal</a>
														<div class="text-muted text-truncate mt-n1">Enable RFS for font resizing</div>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="row">
													<div class="col-auto">
														<a href="#">
															<span class="avatar" style="background-image: url(./static/avatars/043m.jpg)"></span>
														</a>
													</div>
													<div class="col text-truncate">
														<a href="#" class="text-body d-block">9# Rabi Attle</a>
														<div class="text-muted text-truncate mt-n1">Compressed Sass output support
															(#29702)</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
			<footer class="footer footer-transparent d-print-none">
				<div class="container-xl">
					<div class="row text-center align-items-center flex-row-reverse">
						<div class="col-lg-auto ms-lg-auto">
							<ul class="list-inline list-inline-dots mb-0">

							</ul>
						</div>
						<div class="col-12 col-lg-auto mt-3 mt-lg-0">

						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<!-- New event -->
	<div class="modal modal-blur fade" id="new-event" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">

				<!-- Form for create new event -->
				<!-- TODO: Replace name of all inputs -->
				<form action="#" method="post" class="needs-validation" novalidate>
					<div class="modal-header">
						<h5 class="modal-title">فعالية جديدة</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label class="form-label required">اسم الفعالية</label>
							<input type="text" class="form-control" name="example-text-input" placeholder="حط اسم الفعالية هنا"
								required>
						</div>
						<label class="form-label">نوع الفعالية</label>
						<div class="form-selectgroup-boxes row mb-3">
							<div class="col-lg-6">
								<label class="form-selectgroup-item">
									<input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
									<span class="form-selectgroup-label d-flex align-items-center p-3">
										<span class="me-3">
											<span class="form-selectgroup-check"></span>
										</span>
										<span class="form-selectgroup-label-content">
											<span class="form-selectgroup-title strong mb-1">عامة</span>
											<span class="d-block text-muted">بإمكان أي شخص التسجيل وحضور الفعالية</span>
										</span>
									</span>
								</label>
							</div>
							<div class="col-lg-6">
								<label class="form-selectgroup-item">
									<input type="radio" name="report-type" value="1" class="form-selectgroup-input">
									<span class="form-selectgroup-label d-flex align-items-center p-3">
										<span class="me-3">
											<span class="form-selectgroup-check"></span>
										</span>
										<span class="form-selectgroup-label-content">
											<span class="form-selectgroup-title strong mb-1">خاصة لأعضاء النادي</span>
											<span class="d-block text-muted">الفعالية حصرية فقط لأعضاء النادي</span>
										</span>
									</span>
								</label>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8">
								<div class="mb-3">
									<label class="form-label">رابط قروب الواتس (إختياري)</label>
									<div class="input-group input-group-flat">
										<input type="text" class="form-control ps-0" autocomplete="off" style="direction: ltr;"
											placeholder="https://chat.whatsapp.com/XXXXXXX">
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="mb-3">
									<label class="form-label">مكان الفعالية</label>
									<select class="form-select">
										<option value="1" selected>في مقر النادي</option>
										<option value="2">عن بعد (زووم، دسكور أو غيرها)</option>
										<option value="3">مكان آخر</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="mb-3">
									<label class="form-label required">اسم مقدم الفعالية</label>
									<input type="text" class="form-control" placeholder="(إذا أنت مقدم الفعالية، اكتب اسمك)">
								</div>
							</div>
							<div class="col-lg-12">
								<div>
									<label class="form-label required">شرح فكرة الفعالية</label>
									<textarea class="form-control" rows="3"
										placeholder="أكتب كل شيء يخص الفعالية بالتفصيل الممل D:"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="mb-3">
									<label class="form-label"><br>يرجى العلم بأن الفعالية لن تظهر الا بعد موافقة لجنة
										الجودة!</label>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
							إلغاء
						</a>

						<button type="submit" class="btn btn-primary ms-auto">
							<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
								stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<line x1="12" y1="5" x2="12" y2="19" />
								<line x1="5" y1="12" x2="19" y2="12" />
							</svg>
							إنشاء فعالية جديدة
						</button>

					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Libs JS -->
	<script src="./dist/libs/apexcharts/dist/apexcharts.min.js"></script>
	<script src="./dist/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
	<script src="./dist/libs/jsvectormap/dist/maps/world.js"></script>
	<!-- Tabler Core -->
	<script src="./dist/js/tabler.min.js"></script>
	<script src="./dist/js/demo.min.js"></script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
				chart: {
					type: "area",
					fontFamily: 'inherit',
					height: 40.0,
					sparkline: {
						enabled: true
					},
					animations: {
						enabled: false
					},
				},
				dataLabels: {
					enabled: false,
				},
				fill: {
					opacity: .16,
					type: 'solid'
				},
				stroke: {
					width: 2,
					lineCap: "round",
					curve: "smooth",
				},
				series: [{
					name: "Profits",
					data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
				}],
				grid: {
					strokeDashArray: 4,
				},
				xaxis: {
					labels: {
						padding: 0,
					},
					tooltip: {
						enabled: false
					},
					axisBorder: {
						show: false,
					},
					type: 'datetime',
				},
				yaxis: {
					labels: {
						padding: 4
					},
				},
				labels: [
					'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
				],
				colors: ["#206bc4"],
				legend: {
					show: false,
				},
			})).render();
		});
      // @formatter:on
	</script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 40.0,
					sparkline: {
						enabled: true
					},
					animations: {
						enabled: false
					},
				},
				fill: {
					opacity: 1,
				},
				stroke: {
					width: [2, 1],
					dashArray: [0, 3],
					lineCap: "round",
					curve: "smooth",
				},
				series: [{
					name: "May",
					data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67]
				}, {
					name: "April",
					data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37]
				}],
				grid: {
					strokeDashArray: 4,
				},
				xaxis: {
					labels: {
						padding: 0,
					},
					tooltip: {
						enabled: false
					},
					type: 'datetime',
				},
				yaxis: {
					labels: {
						padding: 4
					},
				},
				labels: [
					'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
				],
				colors: ["#206bc4", "#a8aeb7"],
				legend: {
					show: false,
				},
			})).render();
		});
      // @formatter:on
	</script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
				chart: {
					type: "bar",
					fontFamily: 'inherit',
					height: 40.0,
					sparkline: {
						enabled: true
					},
					animations: {
						enabled: false
					},
				},
				plotOptions: {
					bar: {
						columnWidth: '50%',
					}
				},
				dataLabels: {
					enabled: false,
				},
				fill: {
					opacity: 1,
				},
				series: [{
					name: "Profits",
					data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
				}],
				grid: {
					strokeDashArray: 4,
				},
				xaxis: {
					labels: {
						padding: 0,
					},
					tooltip: {
						enabled: false
					},
					axisBorder: {
						show: false,
					},
					type: 'datetime',
				},
				yaxis: {
					labels: {
						padding: 4
					},
				},
				labels: [
					'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
				],
				colors: ["#206bc4"],
				legend: {
					show: false,
				},
			})).render();
		});
      // @formatter:on
	</script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
				chart: {
					type: "bar",
					fontFamily: 'inherit',
					height: 240,
					parentHeightOffset: 0,
					toolbar: {
						show: false,
					},
					animations: {
						enabled: false
					},
					stacked: true,
				},
				plotOptions: {
					bar: {
						columnWidth: '50%',
					}
				},
				dataLabels: {
					enabled: false,
				},
				fill: {
					opacity: 1,
				},
				series: [{
					name: "Web",
					data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6]
				}, {
					name: "Social",
					data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0]
				}, {
					name: "Other",
					data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6]
				}],
				grid: {
					padding: {
						top: -20,
						right: 0,
						left: -4,
						bottom: -4
					},
					strokeDashArray: 4,
					xaxis: {
						lines: {
							show: true
						}
					},
				},
				xaxis: {
					labels: {
						padding: 0,
					},
					tooltip: {
						enabled: false
					},
					axisBorder: {
						show: false,
					},
					type: 'datetime',
				},
				yaxis: {
					labels: {
						padding: 4
					},
				},
				labels: [
					'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26'
				],
				colors: ["#206bc4", "#79a6dc", "#bfe399"],
				legend: {
					show: false,
				},
			})).render();
		});
      // @formatter:on
	</script>
	<script>
		// @formatter:on
		document.addEventListener("DOMContentLoaded", function () {
			new jsVectorMap({
				selector: '#map-world',
				map: 'world',
				backgroundColor: 'transparent',
				regionStyle: {
					initial: {
						fill: '#F8FAFC',
						stroke: '#dae1e7',
						strokeWidth: 1,
					}
				},
				zoomOnScroll: false,
				zoomButtons: false,
				// -------- Series --------
				visualizeData: {
					scale: ['#F8FAFC', '#206bc4'],
					values: { "AF": 16, "AL": 11, "DZ": 158, "AO": 85, "AG": 1, "AR": 351, "AM": 8, "AU": 1219, "AT": 366, "AZ": 52, "BS": 7, "BH": 21, "BD": 105, "BB": 3, "BY": 52, "BE": 461, "BZ": 1, "BJ": 6, "BT": 1, "BO": 19, "BA": 16, "BW": 12, "BR": 2023, "BN": 11, "BG": 44, "BF": 8, "BI": 1, "KH": 11, "CM": 21, "CA": 1563, "CV": 1, "CF": 2, "TD": 7, "CL": 199, "CN": 5745, "CO": 283, "KM": 0, "CD": 12, "CG": 11, "CR": 35, "CI": 22, "HR": 59, "CY": 22, "CZ": 195, "DK": 304, "DJ": 1, "DM": 0, "DO": 50, "EC": 61, "EG": 216, "SV": 21, "GQ": 14, "ER": 2, "EE": 19, "ET": 30, "FJ": 3, "FI": 231, "FR": 2555, "GA": 12, "GM": 1, "GE": 11, "DE": 3305, "GH": 18, "GR": 305, "GD": 0, "GT": 40, "GN": 4, "GW": 0, "GY": 2, "HT": 6, "HN": 15, "HK": 226, "HU": 132, "IS": 12, "IN": 1430, "ID": 695, "IR": 337, "IQ": 84, "IE": 204, "IL": 201, "IT": 2036, "JM": 13, "JP": 5390, "JO": 27, "KZ": 129, "KE": 32, "KI": 0, "KR": 986, "KW": 117, "KG": 4, "LA": 6, "LV": 23, "LB": 39, "LS": 1, "LR": 0, "LY": 77, "LT": 35, "LU": 52, "MK": 9, "MG": 8, "MW": 5, "MY": 218, "MV": 1, "ML": 9, "MT": 7, "MR": 3, "MU": 9, "MX": 1004, "MD": 5, "MN": 5, "ME": 3, "MA": 91, "MZ": 10, "MM": 35, "NA": 11, "NP": 15, "NL": 770, "NZ": 138, "NI": 6, "NE": 5, "NG": 206, "NO": 413, "OM": 53, "PK": 174, "PA": 27, "PG": 8, "PY": 17, "PE": 153, "PH": 189, "PL": 438, "PT": 223, "QA": 126, "RO": 158, "RU": 1476, "RW": 5, "WS": 0, "ST": 0, "SA": 434, "SN": 12, "RS": 38, "SC": 0, "SL": 1, "SG": 217, "SK": 86, "SI": 46, "SB": 0, "ZA": 354, "ES": 1374, "LK": 48, "KN": 0, "LC": 1, "VC": 0, "SD": 65, "SR": 3, "SZ": 3, "SE": 444, "CH": 522, "SY": 59, "TW": 426, "TJ": 5, "TZ": 22, "TH": 312, "TL": 0, "TG": 3, "TO": 0, "TT": 21, "TN": 43, "TR": 729, "TM": 0, "UG": 17, "UA": 136, "AE": 239, "GB": 2258, "US": 4624, "UY": 40, "UZ": 37, "VU": 0, "VE": 285, "VN": 101, "YE": 30, "ZM": 15, "ZW": 5 },
				},
			});
		});
      // @formatter:off
	</script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
				chart: {
					type: "radialBar",
					fontFamily: 'inherit',
					height: 40,
					width: 40,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				plotOptions: {
					radialBar: {
						hollow: {
							margin: 0,
							size: '75%'
						},
						track: {
							margin: 0
						},
						dataLabels: {
							show: false
						}
					}
				},
				colors: ["#206bc4"],
				series: [35],
			})).render();
		});
      // @formatter:on
	</script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
				chart: {
					type: "area",
					fontFamily: 'inherit',
					height: 192,
					sparkline: {
						enabled: true
					},
					animations: {
						enabled: false
					},
				},
				dataLabels: {
					enabled: false,
				},
				fill: {
					opacity: .16,
					type: 'solid'
				},
				stroke: {
					width: 2,
					lineCap: "round",
					curve: "smooth",
				},
				series: [{
					name: "Purchases",
					data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
				}],
				grid: {
					strokeDashArray: 4,
				},
				xaxis: {
					labels: {
						padding: 0,
					},
					tooltip: {
						enabled: false
					},
					axisBorder: {
						show: false,
					},
					type: 'datetime',
				},
				yaxis: {
					labels: {
						padding: 4
					},
				},
				labels: [
					'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
				],
				colors: ["#206bc4"],
				legend: {
					show: false,
				},
				point: {
					show: false
				},
			})).render();
		});
      // @formatter:on
	</script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
				}],
			})).render();
		});
      // @formatter:on
	</script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
				}],
			})).render();
		});
      // @formatter:on
	</script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
				}],
			})).render();
		});
      // @formatter:on
	</script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
				}],
			})).render();
		});
      // @formatter:on
	</script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
				}],
			})).render();
		});
      // @formatter:on
	</script>
	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function () {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
				}],
			})).render();
		});
      // @formatter:on
	</script>
</body>

</html>