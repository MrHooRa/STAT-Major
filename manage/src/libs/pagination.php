<?php

//==================================================
/**
 * This page for pagination.
 *  
 * Priority: 4*
 * 
 * Used in:
 *      ./manage/subjects.php
 * 
 * Need to:
 *      ./config/config.php             Priority: 0
 *      ./src/lib/database.php          Priority: 1
 *      ./manage/subjects.php           Priority: 2
 *      ./manage/src/lib/header.php     Priority: 3*
 */
//==================================================

include_once("../../../config/config.php");
include_once("../../../src/libs/database.php");


function format($row)
{
    $subject_credits = $row["subject_credits"];
    $subject_level = $row["subject_level"];

    if ($subject_credits == 1)
        $subject_credits = "ساعة";
    else if ($subject_credits == 2)
        $subject_credits = "ساعتان";
    else
        $subject_credits = $subject_credits . " ساعات";

    if ($subject_level == 1)
        $subject_level = "المستوى الاول";
    else if ($subject_level == 2)
        $subject_level = "المستوى الثاني";
    else if ($subject_level == 3)
        $subject_level = "المستوى الثالث";
    else if ($subject_level == 4)
        $subject_level = "المستوى الرابع";
    else if ($subject_level == 5)
        $subject_level = "المستوى الخامس";
    else if ($subject_level == 6)
        $subject_level = "المستوى السادس";
    else if ($subject_level == 7)
        $subject_level = "المستوى السابع";
    else if ($subject_level == 8)
        $subject_level = "المستوى الثامن";
    else if ($subject_level == 9)
        $subject_level = "المستوى التاسع";
    else if ($subject_level == 10)
        $subject_level = "المستوى العاشر";
    else
        $subject_level = "غير معروف";
    return [
        "subject_credits" => $subject_credits,
        "subject_level" => $subject_level
    ];
}


if (isset($_POST["query"])) {
    $connect = new PDO("mysql:host=" . $dbHost . "; dbname=" . $dbName . "", $dbUser, $dbPass);

    $data = array();

    $limit = 5;

    $page = 1;

    if ($_POST["page"] > 1) {
        $start = (($_POST["page"] - 1) * $limit);

        $page = $_POST["page"];
    } else {
        $start = 0;
    }

    if ($_POST["query"] != '') {

        $condition = preg_replace('/[^A-Za-z0-9-أa-ي\ ]/', '', $_POST["query"]);

        $condition = trim($condition);

        $condition = str_replace(" ", "%", $condition);

        $sample_data = array(
            ':subject_name' =>  '%' . $condition . '%',
            ':subject_code' =>  '%' . $condition . '%'
        );

        $query = "
		SELECT id, subject_name, subject_code, subject_level, subject_credits
		FROM subjects 
		WHERE subject_name LIKE :subject_name 
		OR subject_code LIKE :subject_code 
		ORDER BY id ASC
		";

        $filter_query = $query . ' LIMIT ' . $start . ', ' . $limit . '';

        $statement = $connect->prepare($query);

        $statement->execute($sample_data);

        $total_data = $statement->rowCount();

        $statement = $connect->prepare($filter_query);

        $statement->execute($sample_data);

        $result = $statement->fetchAll();

        $replace_array_1 = explode('%', $condition);

        foreach ($replace_array_1 as $row_data) {
            $replace_array_2[] = '<span class="bg-orange-lt"> ' . $row_data . '</span>';
        }

        foreach ($result as $row) {
            $format_string = format($row);
            $subject_credits = $format_string["subject_credits"];
            $subject_level = $format_string["subject_level"];

            $data[] = array(
                'subject_id'    =>  $row["id"],
                'subject_name'  =>  str_ireplace($replace_array_1, $replace_array_2, $row["subject_name"]),
                'subject_code'  =>  str_ireplace($replace_array_1, $replace_array_2, $row["subject_code"]),
                'subject_level'  => $subject_level,
                'subject_credits'  =>   $subject_credits
            );
        }
    } else {

        $query = "
		SELECT id, subject_name, subject_code, subject_level, subject_credits
		FROM subjects 
		ORDER BY id ASC
		";

        $filter_query = $query . ' LIMIT ' . $start . ', ' . $limit . '';

        $statement = $connect->prepare($query);

        $statement->execute();

        $total_data = $statement->rowCount();

        $statement = $connect->prepare($filter_query);

        $statement->execute();

        $result = $statement->fetchAll();

        foreach ($result as $row) {
            $format_string = format($row);
            $subject_credits = $format_string["subject_credits"];
            $subject_level = $format_string["subject_level"];
            
            $data[] = array(
                'subject_id'    =>  $row["id"],
                'subject_name'  =>  $row["subject_name"],
                'subject_code'  =>  $row["subject_code"],
                'subject_level'  =>  $subject_level,
                'subject_credits'  =>  $subject_credits
            );
        }
    }

    $pagination_html = '<ul class="pagination m-0 ms-auto">';

    $total_links = ceil($total_data / $limit);

    $previous_link = '';

    $next_link = '';

    $page_link = '';

    if ($total_links > 4) {
        if ($page < 5) {
            for ($count = 1; $count <= 5; $count++) {
                $page_array[] = $count;
            }
            $page_array[] = '...';
            $page_array[] = $total_links;
        } else {
            $end_limit = $total_links - 5;

            if ($page > $end_limit) {
                $page_array[] = 1;

                $page_array[] = '...';

                for ($count = $end_limit; $count <= $total_links; $count++) {
                    $page_array[] = $count;
                }
            } else {
                $page_array[] = 1;

                $page_array[] = '...';

                for ($count = $page - 1; $count <= $page + 1; $count++) {
                    $page_array[] = $count;
                }

                $page_array[] = '...';

                $page_array[] = $total_links;
            }
        }
    } else {
        for ($count = 1; $count <= $total_links; $count++) {
            $page_array[] = $count;
        }
    }

    for ($count = 0; $count < count($page_array); $count++) {
        if ($page == $page_array[$count]) {
            $page_link .= '
            <li class="page-item active">
                <a class="page-link" href="#">' . $page_array[$count] . '</a>
            </li>
			';

            $previous_id = $page_array[$count] - 1;

            if ($previous_id > 0) {
                $previous_link = '
                <li class="page-item">
                        <a class="page-link" href="javascript:load_data(`' . $_POST["query"] . '`, ' . $previous_id . ')" tabindex="-1">
                           السابق
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <polyline points="9 6 15 12 9 18"></polyline>
                           </svg>
                        </a>
                     </li>';
                // $previous_link = '<li class="page-item"><a class="page-link" href="javascript:load_data(`' . $_POST["query"] . '`, ' . $previous_id . ')">السابق</a></li>';
            } else {
                $previous_link = '
                <li class="page-item disabled">
                        <a class="page-link" href="#">
                           السابق
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <polyline points="9 6 15 12 9 18"></polyline>
                           </svg>
                        </a>
                     </li>';
            }

            $next_id = $page_array[$count] + 1;

            if ($next_id >= $total_links) {
                $next_link = '
				<li class="page-item" disabled>
                        <a class="page-link" href="#" aria-disabled="true">
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <polyline points="15 6 9 12 15 18"></polyline>
                           </svg>
                           التالي
                        </a>
                     </li>
				';
            } else {
                $next_link = '
                <li class="page-item">
                <a class="page-link" href="javascript:load_data(`' . $_POST["query"] . '`, ' . $next_id . ')>
                   <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <polyline points="15 6 9 12 15 18"></polyline>
                   </svg>
                   التالي
                </a>
             </li>';
            }
        } else {
            if ($page_array[$count] == '...') {
                $page_link .= '
                <li class="page-item disabled"><a class="page-link" href="#" aria-disabled="true">...</a></li>
				<li class="page-item disabled">
	          		<a class="page-link" href="#">...</a>
	      		</li>
				';
            } else {
                $page_link .= '
                <li class="page-item">
                    <a class="page-link" href="javascript:load_data(`' . $_POST["query"] . '`, ' . $page_array[$count] . ')">' . $page_array[$count] . '</a>
                </li>';
            }
        }
    }

    $pagination_html .= $previous_link . $page_link . $next_link;


    $pagination_html .= '</ul>';

    $output = array(
        'data'                =>    $data,
        'pagination'        =>    $pagination_html,
        'total_data'        =>    $total_data
    );

    echo json_encode($output);
}
