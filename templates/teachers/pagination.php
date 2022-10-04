<?php

require_once "../../connect.php";

$record_per_page = 5;
$page = '';
$output = '';

if (isset($_POST["page"])) {
    $page = $_POST["page"];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $record_per_page;

$query = "SELECT * FROM teachers LIMIT $start_from, $record_per_page";

$result = mysqli_query($link, $query);

$output .= "
<table class='table_blur'>
    <tr>
         <th>ФИО</th>
         <th>Должность</th>
         <th></th>
    </tr>
";

while ($row = mysqli_fetch_array($result)) {
    $output .= "
        <tr>
            <td>" . $row["FIO"] . "</td>
            <td>" . $row["position"] . "</td>
            <td style='display: flex; justify-content: space-around'>
                <a href='../../vendor/teachers/delete.php?id=" . $row['id'] . "'>
                    <button style='background-color: red; width: 30px'>
                        ✖
                    </button>
                </a>
                <a href='update_teachers.php?id=" . $row["id"] . "'>
                    <button style='background-color: #0ca5de; width: 30px'>
                        ✎
                    </button>
                </a>
                <a href='read_teacher_info.php?id=" . $row['id'] . "'>
                    <button style='background-color: #75f155; width: 30px'>
                        🛈
                    </button>
                </a>
            </td>
        </tr>
    ";
}

$output .= '</table><div style="display: flex; justify-content: center;">';
$page_query = "SELECT * FROM teachers ORDER BY id DESC";
$page_result = mysqli_query($link, $page_query);
$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records / $record_per_page);
for ($i = 1; $i <= $total_pages; $i++) {
    if ($total_pages == 1) {
        break;
    }
    $output .= "<span class='pagination_link' style='margin: 0 0.5% 1% 0.5%; cursor: pointer; padding: 6px 12px; border: 1px solid #000;' id=" . $i . ">$i</span>";
}
$output .="</div>";

echo $output;