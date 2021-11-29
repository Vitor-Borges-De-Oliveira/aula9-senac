<?php

require_once('conexao.php');

$sql = "delete from tblaluno where idaluno=3";

$connect->query($sql);