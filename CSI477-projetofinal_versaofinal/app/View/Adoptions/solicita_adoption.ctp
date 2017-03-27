<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
    <div class="col-md-8 col-sm-offset-1">
        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              <th>ADOÇÃO</th>
              <th>VALOR</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($animals as $p): ?>
                <tr>
                  <td>
                    <center><a href=" <?php echo Router::url(array('controller' => 'adoptions', 'action' => 'salva_solicitacao', $p['Animal']['id'])); ?>" ><button class='btn btn-primary'>Solicitar</button></a></center>
                  </td>
                  <td>
                    <?php echo $p['Animal']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $p['Animal']['preco']; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

</div>
</body>
