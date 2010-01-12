<?php
/************************************************************************/
/* ATutor																*/
/************************************************************************/
/* Copyright (c) 2002-2008 by Greg Gay, Joel Kronenberg & Heidi Hazelton*/
/* Adaptive Technology Resource Centre / University of Toronto			*/
/* http://atutor.ca														*/
/*																		*/
/* This program is free software. You can redistribute it and/or		*/
/* modify it under the terms of the GNU General Public License			*/
/* as published by the Free Software Foundation.						*/
/************************************************************************/
// $Id$
define('AT_INCLUDE_PATH', '../../include/');
require(AT_INCLUDE_PATH.'vitals.inc.php');
require(AT_INCLUDE_PATH.'classes/testQuestions.class.php');

authenticate(AT_PRIV_TESTS);

if (isset($_GET['submit_create'])) {
	header('Location: create_question_'.$_GET['question_type'].'.php');
	exit;
}

$_pages['tools/tests/questions.php?tid='.$_GET['tid']]['title_var']    = 'questions';
$_pages['tools/tests/questions.php?tid='.$_GET['tid']]['parent']   = 'tools/tests/index.php';
$_pages['tools/tests/questions.php?tid='.$_GET['tid']]['children'] = array('tools/tests/add_test_questions.php');

$_pages['tools/tests/add_test_questions.php']['title_var']    = 'add_questions';
$_pages['tools/tests/add_test_questions.php']['parent']   = 'tools/tests/questions.php?tid='.$_GET['tid'];

require(AT_INCLUDE_PATH.'header.inc.php');
?>

<?php $tid = intval($_GET['tid']); ?>

<?php require(AT_INCLUDE_PATH.'html/tests_questions.inc.php'); ?>

<?php require(AT_INCLUDE_PATH.'footer.inc.php'); ?>