<section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <h2>สรา้งสินค้า</h2><hr>
                <form method="post" action=" <?php  echo base_url('products/save'); ?>" >  
                <div class="row">
                    <div class="col-md-12"> 
                    <div class="form-group">
                        <label >ชื่อสินค้า</label> 
                        <input type="text" class="form-control" nmae ="name" placeholder="ชื่อสินค้า" required>
                    </div>

                    </div>

                  </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>ราคา/ชื่อ</label>
                        <input type="number" class="form-control" name="price"  placeholder="ราคา/ชิ้น" min = "10" required>
                    
                    </div>

                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                            <label >หมวดหมู่</label>
                            <select class="form-control" name="categories" required>
                            <option value =" ">เลือกหมวดหมู่ </option><span class="text-danger">*</span>
                            <?php  foreach($categories  as $key =>$row) ?>
                        <option value="<?php echo $row['_id']?>"><?php echo $row['name']?></option>
                        <?php } ?>
                           
                            </select>
                        </div>
                    </div>

               <p class="text-center"><button type="submit" class="btn btn-primary">บันทึก</button></p>
                
               </form>  
        </div>
</section>
                    