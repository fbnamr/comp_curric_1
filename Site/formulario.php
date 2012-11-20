<?php




if(isset($_POST["pagina"])&& $_POST["pagina"] =="contato"){
	//se for enviado um post e a varialvel não é vazia 
//enTão mostrar os dados
echo $_POST["nome"]."<br>";
echo $_POST["email"]."<br>";
echo $_POST["mensagem"];
} else{

//senão
//redirecionar para a página de contato
header("Location: contato.php");

}


?>