                  <div class="col-xs-10">
                    <select name="pegawai" class="form-control pegawai" id="pegawai">
                      <option>Pegawai</option> 
                      <?php
                      include("koneksi.php");
                        $sql=mysql_query("SELECT * FROM pegawai"); 
                        while($data2=mysql_fetch_array($sql))
                         {
                          echo '<option value="'.$data2['nip'].'">'.$data2['nama'].'</option>';
                         }
                      ?>
                    </select>
                  </div>