<?php
// require_once('MoodleRest.php');
require_once '../vendor/autoload.php';

$MoodleRest = new MoodleRest('http://localhost/moodle/webservice/rest/server.php', '6afa5191157a88f3b812cc4fd93b803c');

$groups = $MoodleRest->request('core_course_search_courses');

print_r($groups);