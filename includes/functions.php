<?php

function get_user_by_id($conn, $id) {
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}

function get_offer_by_id($conn, $id) {
    $sql = "SELECT * FROM offers WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}

function get_student_applications($conn, $offer_id) {
    $sql = "SELECT * FROM applications WHERE offer_id = $offer_id";
    $result = mysqli_query($conn, $sql);
    $applications = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $student = get_user_by_id($conn, $row['student_id']);
        $row['student'] = $student;
        $applications[] = $row;
    }
    return $applications;
}

?>