
<body background="../img/fundoazul.jpg" bgproperties="fixed" width=100% height=100% >

<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
      <div class="col-md-6 col-sm-offset-1">
        <h4><strong><center>Usuários</center></strong></h4><br/>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>id</th>
              <th>Nome</th>
              <th>Login</th>
              <th>Senha</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($users as $p): ?>
                <tr>
                  <td>
                    <?php echo $p['User']['id']; ?>
                  </td>
                  <td>
                    <?php echo $p['User']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $p['User']['telefone']; ?>
                  </td>
                  <td>
                    <?php echo $p['User']['endereco']; ?>
                  </td>
                  <td>
                    <?php echo $p['User']['email']; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
          </tbody>
          </table>
      </div>
    </div>
</boby>
