<?php

//include      -> dá um aviso e continua o programa
//include_once -> apenas uma vez
//require      -> mata o programa
//require_once -> apenas uma vez

require_once('conexao.php');

$aluno = "Igor";
$turma = "3001";
$mensal = 499.99;

$sql = "insert into tblaluno (aluno,turma,mensal)
        values ('$aluno','$turma','$mensal')";

//conexao->query(comando sql);
$connect->query($sql);