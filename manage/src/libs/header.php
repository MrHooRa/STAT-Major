<?php

//==================================================
/**
 * This is defualt header for all manage pages
 * 
 * Priority: +3
 * 
 * Used in:
 *      ./manage/index.php             # Home page.
 * 
 * Need to:
 *      ./config/config.php             Priority: 0
 *      ./src/lib/database.php          Priority: 1
 */
//==================================================

?>
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
   <link href="./src/inc/dist/css/tabler.rtl.min.css" rel="stylesheet" />
   <link href="./src/inc/dist/css/tabler-flags.rtl.min.css" rel="stylesheet" />
   <link href="./src/inc/dist/css/tabler-payments.rtl.min.css" rel="stylesheet" />
   <link href="./src/inc/dist/css/tabler-vendors.rtl.min.css" rel="stylesheet" />
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
               <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="الوضع الداكن" data-bs-toggle="tooltip" data-bs-placement="bottom">
                  <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                     <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                  </svg>
               </a>
               <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="الوضع النهاري" data-bs-toggle="tooltip" data-bs-placement="bottom">
                  <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                     <circle cx="12" cy="12" r="4" />
                     <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                  </svg>
               </a>
               <div class="nav-item dropdown d-none d-md-flex me-3">
                  <!-- NULL -->
               </div>
               <div class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                     <!-- {REPLACE:ACCOUNT_PHOTO[url]} -->
                     <span class="avatar avatar-sm" style="background-image: url(./src/inc/static/avatars/user.png)"></span>
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
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
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
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                     <span class="avatar avatar-md" style="background-image: url(./src/inc/static/avatars/user.png)"></span>
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
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#new-event">
                           <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                           <!-- SVG icon code -->
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <line x1="12" y1="5" x2="12" y2="19"></line>
                              <line x1="5" y1="12" x2="19" y2="12"></line>
                           </svg>
                           فعالية جديدة
                        </a>
                        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#new-event" aria-label="New event">
                           <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                           <!-- SVG icon code -->
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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