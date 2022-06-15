<?php
//==================================================
/**
 * This's subject page, you can add, change and delete subjects
 *  
 * Need to:
 *      ./config/config.php             Priority: 0
 *      ./src/lib/database.php          Priority: 1
 */
//==================================================

// Get header
include_once("./src/libs/header.php");
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

         <!-- Display all subjects-->
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">مواد تخصص الاحصاء</h3>
               </div>
               <div class="card-body border-bottom py-3">
                  <div class="d-flex">
                     <div class="text-muted">

                        <div class="mx-2 d-inline-block">
                           <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="subjects count" hidden>
                        </div>

                        <!-- TODO: Remove this -->
                        <div id="ss123"></div>
                     </div>
                     <div class="ms-auto text-muted">
                        بحث:
                        <div class="ms-2 d-inline-block">
                           <!-- TODO: Do not forget to change onchange() -->
                           <input type="text" id="search_input" class="form-control form-control-sm" aria-label="Search subject" onchange="document.getElementById('ss123').innerHTML = document.getElementById('search_input').value;">
                        </div>
                     </div>
                  </div>
               </div>

               <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap datatable">
                     <thead>
                        <tr>
                           <th class="w-1">#
                              <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <polyline points="6 15 12 9 18 15"></polyline>
                              </svg>
                           </th>
                           <th>اسم المادة</th>
                           <th>رمز المادة</th>
                           <th>القسم</th>
                           <th>المستوى</th>
                           <th>عدد الساعات</th>
                           <th>نوع المادة</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td><span class="text-muted">1</span></td>
                           <td><a href="invoice.html" class="text-reset" tabindex="-1">نماذج خطية معممة</a></td>
                           <td>
                              احص 335
                           </td>
                           <td>
                              قسم الاحصاء وبحوث العمليات
                           </td>
                           <td>
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                 <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                 <line x1="3" y1="6" x2="3" y2="19"></line>
                                 <line x1="12" y1="6" x2="12" y2="19"></line>
                                 <line x1="21" y1="6" x2="21" y2="19"></line>
                              </svg>
                              المستوى السادس
                           </td>
                           <td>
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <circle cx="12" cy="12" r="9"></circle>
                                 <polyline points="12 7 12 12 15 15"></polyline>
                              </svg>
                              3 ساعات
                           </td>
                           <td>
                              اجبارية
                           </td>
                           <td class="text-end">
                              <span class="dropdown">
                                 <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                       <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                       <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                 </button>
                                 <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">
                                       تعديل
                                    </a>
                                    <a class="dropdown-item" href="#">
                                       حذف
                                    </a>
                                 </div>
                              </span>
                           </td>
                        </tr>

                        <tr>
                           <td><span class="text-muted">2</span></td>
                           <td><a href="invoice.html" class="text-reset" tabindex="-1">تصميم وتحليل التجارب</a></td>
                           <td>
                              احص 337
                           </td>
                           <td>
                              قسم الاحصاء وبحوث العمليات
                           </td>
                           <td>
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                 <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                 <line x1="3" y1="6" x2="3" y2="19"></line>
                                 <line x1="12" y1="6" x2="12" y2="19"></line>
                                 <line x1="21" y1="6" x2="21" y2="19"></line>
                              </svg>
                              المستوى السادس
                           </td>
                           <td>
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <circle cx="12" cy="12" r="9"></circle>
                                 <polyline points="12 7 12 12 15 15"></polyline>
                              </svg>
                              3 ساعات
                           </td>
                           <td>
                              اجبارية
                           </td>
                           <td class="text-end">
                              <span class="dropdown">
                                 <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                       <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                       <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                 </button>
                                 <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">
                                       تعديل
                                    </a>
                                    <a class="dropdown-item" href="#">
                                       حذف
                                    </a>
                                 </div>
                              </span>
                           </td>
                        </tr>

                        <tr>
                           <td><span class="text-muted">2</span></td>
                           <td><a href="invoice.html" class="text-reset" tabindex="-1">البرمجة الخطية</a></td>
                           <td>
                              بحث 215
                           </td>
                           <td>
                              قسم الاحصاء وبحوث العمليات
                           </td>
                           <td>
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                 <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                 <line x1="3" y1="6" x2="3" y2="19"></line>
                                 <line x1="12" y1="6" x2="12" y2="19"></line>
                                 <line x1="21" y1="6" x2="21" y2="19"></line>
                              </svg>
                              المستوى الرابع
                           </td>
                           <td>
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <circle cx="12" cy="12" r="9"></circle>
                                 <polyline points="12 7 12 12 15 15"></polyline>
                              </svg>
                              4 ساعات
                           </td>
                           <td>
                              اختيارية
                           </td>
                           <td class="text-end">
                              <span class="dropdown">
                                 <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                       <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                       <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                 </button>
                                 <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">
                                       تعديل
                                    </a>
                                    <a class="dropdown-item" href="#">
                                       حذف
                                    </a>
                                 </div>
                              </span>
                           </td>
                        </tr>

                     </tbody>
                  </table>
               </div>
               <div class="card-footer d-flex align-items-center">
                  <p class="m-0 text-muted">عرض <span>1</span> الى <span>3</span> من <span>23</span> مادة</p>
                  <ul class="pagination m-0 ms-auto">

                     <!-- Prev -->
                     <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                           السابق
                           <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <polyline points="9 6 15 12 9 18"></polyline>
                           </svg>
                        </a>
                     </li>

                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item active"><a class="page-link" href="#">2</a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item"><a class="page-link" href="#">4</a></li>

                     <!-- Next -->
                     <li class="page-item">
                        <a class="page-link" href="#">
                           <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <polyline points="15 6 9 12 15 18"></polyline>
                           </svg>
                           التالي
                        </a>
                     </li>

                  </ul>
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