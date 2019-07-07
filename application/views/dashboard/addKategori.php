  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Kategori</h1>
      </div>

      
      <?php
      // arahkan form submit ke kontroller 'book/insert' 
      echo form_open_multipart('book/insertKategori'); 
      ?>

          <div class="form-group row">
              <label for="judul" class="col-sm-2 col-form-label">Kategori Buku</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="kategori" placeholder="Masukkan judul Kategori">
              </div>
          </div>


          <div class="form-group row">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mb-2">Submit Kategori Buku</button>      
              </div>
          </div>
        </main>
        <main role ="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Kategori</h1>
      </div>
    
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th> Nama Kategori</th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach ($kategori as $kategori_item) :

              ?>
            <tr>
              <td><?php echo $kategori_item['kategori']?></td>
              <td>
              <?php echo anchor ('Book/editKategori/'.$kategori_item['idkategori'],'Edit', 'Edit'); ?> |
              <?php echo anchor ('Book/deleteKategori/'.$kategori_item['idkategori'],'Del', 'Hapus'); ?>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>

          
      
</div>
    </main>
  
  