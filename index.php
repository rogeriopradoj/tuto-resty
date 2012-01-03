<?php
require 'vendor/.composer/autoload.php';
require "vendor/resty/resty/Resty.php";

$resty = new Resty();
$resty->debug(true);
$resty->setBaseURL('http://universidade.caixa/aplicacoes/trilhasDesenvolvimento/zUI/acesso_trilhas_ajax/');
$resp = $resty->get('?nu_trilha=332&acao=comparar&nu_usuario=C004397&data=01/01/2011');
var_dump($resp);