<?php

function changeDateFormat($date){
    dd(1);
    return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
}
