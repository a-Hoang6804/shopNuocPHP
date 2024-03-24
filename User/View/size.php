<div class="categories">
              <input type="hidden" name="size" id="size" value="0" />
              <h4>Kích Thước:</h4>
              <?php
              $size = $hh->getHangHoaSize($id);
              while ($set = $size->fetch()):
                ?>
                <input onclick="chonsize(<?php echo $set['tensize']; ?>)" type="input"
                  class="btn btn-default-hong bth-circle" id="hong" value="<?php echo $set['idsize']; ?>">
                  <?php echo $set['tensize']; ?>
                </input>
              <?php
              endwhile;
              ?>
              </br></br>
            </div>