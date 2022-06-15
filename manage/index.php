<?php
//==================================================
/**
 * This's home page
 * getPageHead($pageId) [This page id is 1]
 *  
 * Need to:
 *      ./config/config.php             Priority: 0
 *      ./src/lib/database.php          Priority: 1
 *      ./manage/src/lib/header.php     Priority: +3
 *      ./manage/src/lib/footer.php     Priority: +3
 */
//==================================================

// Get header
include_once("./src/libs/header.php");
getPageHead(1, "لوحة التحكم");
?>
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
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                    <span class="avatar" style="background-image: url(./src/inc/static/avatars/calendar-event.png)"></span>
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
                                    <span class="avatar" style="background-image: url(./src/inc/static/avatars/calendar-event.png)"></span>
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
                                    <span class="avatar" style="background-image: url(./src/inc/static/avatars/user.png)"></span>
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
                                    <span class="avatar" style="background-image: url(./src/inc/static/avatars/000.jpg)"></span>
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

<?php

// Get footer
include_once("./src/libs/footer.php");

?>