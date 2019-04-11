<?php
$patternName = '%^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$%';
$patternMail = '/[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}/';
$patternAddress = '/^([0-9a-zA-Z\,.\'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,50})$/';
$patternPostalCode = '/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/';
$patternPhone = '/^(0|(\\\\+33)|(0033))[1-9][0-9]{8}$/';
$patternDate =  '#^([0-2][0-9]|3[0-1])/(0[1-9]|1[0-2])/[0-9]{4}$#';
$patternNumberOfBadge = '/^(100|\d{1,2})$/m';
$patternCodecademyLink = '/^https:\/\/[w-]+[w.-]+.[a-zA-Z]{2,6}/m';
$patternQuestion = '/^[a-zÀ-ÖØ-öø-ÿ -\'!?:A-Z0-9.#<>,;\-& \/]{5,100}$/';
$patternPoleEmploi = '/^[0-9]{7}[A-Z]{1}$/m';
?>

