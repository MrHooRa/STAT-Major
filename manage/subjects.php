<?php
//==================================================
/**
 * This's subject page, you can add, change and delete subjects.
 * getPageHead($pageId) [This page id is 3]
 *  
 * Need to:
 *      ./config/config.php             Priority: 0
 *      ./src/lib/database.php          Priority: 1
 *      ./src/lib/subjectsFun.php       Priority: 2
 *      ./manage/src/lib/header.php     Priority: 3*
 *      ./manage/src/lib/footer.php     Priority: 3*
 */
//==================================================

include_once("../config/config.php");
include_once("../src/libs/database.php");
include_once("../manage/src/libs/subjectsFun.php");
include_once("./src/libs/header.php");

getPageHead(3, "لوحة التحكم");
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
                           <div class="col-12 col-sm-12 col-md-12 col-xl mb-12">
                              <a href="#" class="btn btn-primary w-100">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                 </svg>
                                 مادة جديدة
                              </a>
                           </div>
                        </div>

                     </div>
                     <div class="ms-auto text-muted">
                        بحث:
                        <div class="ms-2 d-inline-block">
                           <input type="text" id="search_input" class="form-control form-control-sm" aria-label="Search subject" onkeyup="load_data(this.value);">
                        </div>
                     </div>
                  </div>
               </div>

               <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap datatable">
                     <thead>
                        <tr>
                           <th width="5%">#</th>
                           <th width="30%">اسم المادة</th>
                           <th width="10%">رمز المادة</th>
                           <th width="25%">المستوى</th>
                           <th width="20%">عدد الساعات</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody id="post_data"></tbody>
                  </table>
               </div>
               <div class="card-footer d-flex align-items-center">
                  <p class="m-0 text-muted">مجموع البيانات - <span id="total_data"></span></p>
                  <ul class="pagination m-0 ms-auto" id="pagination_link"></ul>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>

<script>
   // First time load data
   load_data();

   function load_data(query = '', page_number = 1) {
      var form_data = new FormData();

      form_data.append('query', query);
      form_data.append('page', page_number);

      var ajax_request = new XMLHttpRequest();

      ajax_request.open('POST', 'src/libs/pagination.php');
      ajax_request.send(form_data);
      ajax_request.onreadystatechange = function() {
         if (ajax_request.readyState == 4 && ajax_request.status == 200) {
            var response = JSON.parse(ajax_request.responseText);
            var html = '';
            var serial_no = 1;

            if (response.data.length > 0) {
               for (var count = 0; count < response.data.length; count++) {
                  html += '<tr>';
                  html += '<td><span class="text-muted">' + response.data[count].subject_id + '</span></td>';
                  html += '<td>' + response.data[count].subject_name + '</td>';
                  html += '<td>' + response.data[count].subject_code + '</td>';
                  html += '<td><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path><path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path><line x1="3" y1="6" x2="3" y2="19"></line><line x1="12" y1="6" x2="12" y2="19"></line><line x1="21" y1="6" x2="21" y2="19"></line></svg> ';
                  html += response.data[count].subject_level + '</td>';
                  html += '<td><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg> ';
                  html += response.data[count].subject_credits + '</td>';
                  html += '<td class="text-end"><span class="dropdown"><button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path><circle cx="12" cy="12" r="3"></circle></svg></button><div class="dropdown-menu dropdown-menu-end">';
                  // TODO: Add page to edit subject
                  html += '<a class="dropdown-item" href="######">تعديل</a>';
                  // TODO: Add page to delete subject
                  html += '<a class="dropdown-item" href="#">حذف</a>';
                  html += '</div></span></td></tr>';
                  serial_no++;
               }
            } else {
               html += '<tr><td colspan="12" class="text-center">لم يتم العثور على بيانات</td></tr>';
            }

            document.getElementById('post_data').innerHTML = html;
            document.getElementById('total_data').innerHTML = response.total_data;
            document.getElementById('pagination_link').innerHTML = response.pagination;
         }
      }
   }
</script>
<?php

// Get footer
include_once("./src/libs/footer.php");

?>