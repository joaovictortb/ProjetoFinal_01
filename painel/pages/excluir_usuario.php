<?php

if(isset($_GET['excluir'])){
	$idExcluir = intval($_GET['excluir']);
	Painel::deletar('tb_site.depoimentos',$idExcluir);
}
$depoimentos = Painel::selectAll('tb_site.depoimentos');


?>


<div class="box-content">
	<h2><i class="fa fa-trash" aria-hidden="true"></i> Excluir Usuários</h2>

	<table>
		<tr>
			
			<td>Nome</td>
			<td>Data</td>
		    <td></td>
			<td></td>

		</tr>

<?php
         foreach ($depoimentos as $key => $value) {

		?>
		<tr>
			
			<td><?php echo $value['nome']; ?></td>
			<td><?php echo $value['data']; ?></td>
			<td><a class="btn edit" href=""><i class="fa fa-pencil" ></i> Editar </a></td>
			<td><a class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>excluir-usuario?excluir=<?php echo $value ['id']; ?>"><i class="fa fa-times" ></i> Excluir </a></td>
        </tr>
        

         <?php }   ?>


	</table>
</div><!--box-content-->
