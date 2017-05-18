<?php
/**
 * Get Streaming Data Over Jquery Ajax. PHP response data after certain progress complete.
 *
 * @author: Sohel Rana (me.sohelrana@gmail.com)
 * @author url: https://blog.sohelrana.me/get-streaming-data-jquery-ajax/
 * @licence MIT
 */
set_time_limit(0);
ob_implicit_flush(true);
ob_end_flush();
for ($counter = 0; $counter < 10; $counter++) {
    //Hard work!
    sleep(1);
    $processed = ($counter + 1) * 10; //Progress
    $response = array('message' => $processed . '% complete. server time: ' . date("h:i:s", time()), 'progress' => $processed);
    echo json_encode($response);
}
sleep(1);
$response = array('message' => 'Complete', 'progress' => 100);
echo json_encode($response);