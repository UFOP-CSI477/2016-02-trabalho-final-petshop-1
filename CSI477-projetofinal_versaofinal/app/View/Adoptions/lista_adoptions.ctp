<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
      <div class="col-md-6 col-sm-offset-1">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Usuário</th>
              <th>Data</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($adoptions as $e): ?>
                <tr>
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
