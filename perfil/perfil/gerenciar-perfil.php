<?php $titulo_pagina = 'Editar Perfil';
include('../layout/header.php'); ?>

<?php
if(isset($_GET['idPerfil'])){
    $idclicado = $_GET['idPerfil'];
}
?>

<form action="../_api/api.php" method="post">
    <div class="form-row align-items-center">
        <div class="col-auto my-1">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Código do Perfil</div>
                </div>
                <input type="number" name="idPerfil" class="form-control" value="<?php echo $idclicado?>" placeholder="ID da perfil" required>
            </div>
        </div>
        <div class="col-auto my-1">
            <button type="submit" name='BuscarPerfil' class="btn btn-primary">Buscar</button>
        </div>
    </div>
</form>

<?php if (!empty($_SESSION['BuscarPerfil'])) { ?>

    <div class="card shadow-sm p-5">

        <form method="post" action="../_api/api.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" name="nome_perfil" class="form-control" placeholder="Nome" value="<?php echo $_SESSION['BuscarPerfil']['nome']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Apelido</label>
                    <input type="text" name="apelido_perfil" class="form-control" placeholder="Apelido" value="<?php echo $_SESSION['BuscarPerfil']['apelido']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">E-mail</label>
                    <input type="text" name="email_perfil" class="form-control" placeholder="E-mail" value="<?php echo $_SESSION['BuscarPerfil']['email']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Senha</label>
                    <input type="text" name="senha_perfil" class="form-control" placeholder="Senha" value="<?php echo $_SESSION['BuscarPerfil']['senha'];?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Foto</label>
                    <input type="text" name="foto_perfil" class="form-control" placeholder="Foto" value="<?php echo $_SESSION
                    ['BuscarPerfil']['foto']; ?>">
                </div>
            </div>
            
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" required>
                    <label class="form-check-label" for="gridCheck">
                        Concordo que esta mudança não terá volta
                    </label>
                </div>
            </div>
            <button type="submit" name="AtualizarPerfil" value="<?php echo $_SESSION['BuscarPerfil']['idusuario']?>" class="btn btn-primary">Atualizar Perfil</button>
            <button type="submit" name="ExcluirPerfil" value="<?php echo $_SESSION['BuscarPerfil']['idusuario']?>" class="btn btn-danger">Excluir Conta</button>
        </form>
        
        <!-- Form para inserir imagem -->
        <form method="POST" action="../_api/proc_upload.php" enctype="multipart/form-data">
            Imagem: <input name="arquivo" type="file">
            <input name="id" type="text" value="<?php echo $_SESSION['BuscarPerfil']['idusuario']?>" hidden><br><br>
            <input type="submit" value="Cadastrar">
        </form>

    </div>

<?php } ?>
<?php
if(isset($_SESSION['UserMsg'])) {?>

<script language='javascript'>
swal({
  title: "<?php echo $_SESSION['alerta'];?>",
  text: "<?php echo $_SESSION['UserMsg'];?>",
  icon: "<?php echo $_SESSION['opt'];?>",
  button: "ok!",
});
</script>

<?php } unset($_SESSION['UserMsg']); unset($_SESSION['opt']); unset($_SESSION['alerta']); unset($_SESSION['BuscarPerfil']); ?>

<?php include('../layout/footer.php') ?>