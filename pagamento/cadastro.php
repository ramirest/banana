<div align="center">
	<table border="0" width="690" cellpadding="0" style="border-collapse: collapse">
	<tr>
		<td>&nbsp;<?
###### Bloqueando o acesso direto a este arquivo #####
if (!preg_match("/index.php/i", $PHP_SELF))
        {
            die ("Voc� n�o tem permiss�o para acessar esse arquivo");
        }
######################################################
                         $cadastro = "";

if(!isset($_SESSION['aff'])) {
$conteudo=pagina_mensagem("<div align=\"justify\">Voc� est� acessando uma p�gina sem patrocinador.<br><br>
Nosso Sistema permite a ades�o a nossa oportunidade de neg�cios apenas
mediante ao convite de algum de nossos associados. Por favor, procure a
pessoa que lhe indicou esta oportunidade. Ou feche todas as p�ginas
abertas na internet e abra uma nova janela em seu navegador, digitando
corretamente o endere�o do website personalizado do seu patrocinador.</div>");
return false;
}

 else {
conecta();
$peganome = mysql_query("SELECT nome, sobrenome FROM uni_usuario WHERE usuario='$aff'");
$nome = @mysql_result($peganome, 0, nome);
$sobrenome = @mysql_result($peganome, 0, sobrenome);
$frase_grande = "Voc� est� se cadastrando como downline de $nome $sobrenome ($aff)";
$frase_patrocinio = "$aff";
}
##################################################

        carregar("templates/cadastro.htm",$cadastro);
        $cadastro=str_replace("{frase_patrocinio}",$frase_patrocinio,$cadastro);
        $cadastro=str_replace("{frase_grande}",$frase_grande,$cadastro);
        carregar("templates/main.htm",$conteudo);
        $conteudo=str_replace("{conteudo}",$cadastro,$conteudo);
?>
</td>
	</tr>
</table></div>
