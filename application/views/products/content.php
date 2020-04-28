<section class="htc__product__grid bg__white ptb--100">
            <div class="container">
            <?php if($this->session->flashdata('success-mg')){ ?>
            <div class="alert alert-info" role="alert"> บันทึกสำเร็จ </div>
        <?php} ?>
                <form method="get">
               <div class="row">
               <div class="col-md-2">
               <a hrel ="<?php echo base_url('products');?>" class="btn btn-info  btn-block "><i class="fas fa-plus-square "></i>สร้างสินค้า</a>
               </div>
                    <div class="col-md-5">
                    <div class="form-group">
                    <input type="text" name=" name" class="form-control" id="exampleFormControlInput1" placeholder="ค้นหา"
                    vaule ="<?php echo $nmae ?>">
                </div>
               </div>
               <div class="col-md-3">
                     <div class="form-group">
                        <select name="categories_id"  class="form-control">
                        <option value=" ">หมวดหมู่สินค้า</option>
                        <?php  foreach($categories  as $key =>$row) ?>
                        <option value="<?php echo $row['_id']?>"<?php echo ($categories_id==$row['_id'])?'selected':''; ?>><?php echo $row['name']?></option>
                        <?php } ?>
                        </select>
                   </div>
               </div>
               <div class="col-md-2">
               <button type="submit" name ="search" class="btn btn-primary  btn-block "value="search"><i class="fas fa-search"></i>ค้นหาสินค้า</button>
               </div>
            </div>
            </form>

            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ชื่อสินค้า</th>
                        <th scope="col">ราคา</th>
                        <th scope="col">หมวดหมู่</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($product  as $key =>$value){ ?>
                        <tr>
                        <th scope="row"><?php echo ($key +1)?></th>
                        <td><?php echo $row['name']?> </td>
                        <td><?php echo $row['price']?></td>
                        <td><?php echo getCategoriesNameFromId( $row['categories']['$oid'])?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    </table>
            </div>
            </div>

          </div>
</section>
                    