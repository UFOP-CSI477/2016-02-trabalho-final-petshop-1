<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
      <div class="col-md-6 col-sm-offset-1">
        <h4><strong><center>Adoções Solicitadas</center></strong></h4><br/>
        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              <th>Nome</th>
              <th>Usuário</th>
              <th>Data</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($adoptions as $e): ?>
                <tr>
                  <td>
                    <center><a href=" <?php echo Router::url(array('controller' => 'adoptions', 'action' => 'delet', $e['Adoption']['id'])); ?>" >Excluir</a></center>
                  </td>
                  <td>
                    <?php echo $e['Animal']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $e['User']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $e['Adoption']['data']; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
          </tbody>
          </table>
      </div>
    </div>
</body>
