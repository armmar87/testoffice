<?php

function changeDateFormat($date):object {
    return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
}
