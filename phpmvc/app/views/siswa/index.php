<div class="container mt-5">
  
  <div class="row">
    <div class="col-6">
      <h3>Daftar Siswa</h3>
        
          <ul class="list-group">
          <?php foreach( $data['sis'] as $sis ) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-start"> 
              <?= $sis["nama"]; ?> 
              <a href="" class="badge bg-primary">detail</a>
            </li>
            <?php endforeach; ?>
          </ul>

    </div>
  </div>


</div>