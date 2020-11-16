<?php $titulo_pagina = 'Perfil';
include('../layout/header.php');
$res = $pdo->query("SELECT * FROM tb_usuario");
$res->execute();
?>
<h1 class="h3 mb-2 text-gray-800">Todos os usuarios</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-primary btn-sm float-right" href="gerenciar-perfil.php">Gerenciar</a>
        <h6 class="font-weight-bold text-primary">Todos os perfis</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Apelido</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Apelido</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Foto</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php while ($linha = $res->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr onclick="document.location = 'gerenciar-perfil.php?idPerfil=' + <?php echo $linha['idusuario']; ?>" class="idtable">
                            <td><?php echo $linha['idusuario']; ?></td>
                            <td><?php echo $linha['nome']; ?></td>
                            <td><?php echo $linha['apelido']; ?></td>
                            <td><?php echo $linha['email']; ?></td>
                            <td><?php echo $linha['senha']; ?></td>
                            <td><?php echo $linha['foto']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../_api/api.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome</label>
                            <input type="text" name="nome_perfil" class="form-control" placeholder="Nome" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Apelido</label>
                            <input type="text" name="apelido_perfil" class="form-control" placeholder="Apelido" required>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputAddress">E-mail</label>
                        <input type="text" name="email_perfil" class="form-control" placeholder="Apelido" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Senha</label>
                        <input type="text" name="senha_perfil" class="form-control" placeholder="Senha" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Foto</label>
                        <input type="text" name="foto_perfil" class="form-control" placeholder="Foto" required>
                    </div>
                    </div>
                    
            </div>
            
            </form>
        </div>
    </div>
</div>

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

<?php } unset($_SESSION['UserMsg']); unset($_SESSION['opt']); unset($_SESSION['alerta']); ?>

<?php include('../layout/footer.php') ?>