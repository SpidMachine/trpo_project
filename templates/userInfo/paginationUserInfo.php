<?php

require_once "../../connect.php";

$record_per_page = 3;
$page = '';
$output = '';

if (isset($_POST["page"])) {
    $page = $_POST["page"];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $record_per_page;

$query = "SELECT * FROM disciplina LIMIT $start_from, $record_per_page";

$result = mysqli_query($link, $query);

$output .= "
<table class='table_blur'>
    <tr>
         <th>Название дисциплины</th>
         <th>Для какой специальности</th>
         <th>Кол-во часов</th>
    </tr>
";

while ($row = mysqli_fetch_array($result)) {
    $output .= "
        <tr>
            <td>" . $row["name"] . "</td>
            <td>" . $row["speciality"] . "</td>
            <td>" . $row["hours"] . "</td>
        </tr>
    ";
}

$output .= '</table><div style="display: flex; justify-content: center;">';
$page_query = "SELECT * FROM disciplina ORDER BY id DESC";
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