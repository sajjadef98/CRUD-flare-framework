
<div class="container">
    <br><br><br>
    <div class="row justify-content-center sa-ltr ">
        <div class="col-sm-11 col-lg-5 col-md-5">
            <?php
            dump($_POST);
            if(!empty($mas)){
                ?>
                <div class="alert alert-success" role="alert">
                    <?=$mas?>
                </div>
            <?php }
            if(!empty($mas2)){
                ?>
                <div class="alert alert-danger" role="alert">
                    <?=$mas2?>
                </div>
            <?php }
if (!empty($updateclass)){
    $value=$updateclass[0] ;
    dump($value)
            ?>
            <form name="hi" method="post" action="<?=$_ENV['URL']?>/all" >
                <div class="mb-3">
                    <label for="classname" class="form-label sa-rtl">class name </label>
                    <input type="text" class="form-control" id="classname"  name="classname" value="<?=$value['classname']?>" required >
                </div>
                <input type="hidden" name="updateid" value="<?=$value['id']?>">
                <div class="mb-3">
                    <label for="name" class="form-label sa-rtl">name </label>
                    <input type="text" class="form-control" id="name"  value="<?=$value['stu_name']?>" name="name" >
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label sa-rtl"> last name</label>
                    <input type="text" class="form-control" id="lastname" value="<?=$value['stu_lastname']?>" name="lastname"  >
                </div>
                <div class="mb-3 ">
                    <label for="m" class="form-label sa-rtl"> Male</label>
                    <input type="radio" class="" id="m" name="sex" value="M" <?php if ($value['sex']=='M')echo 'checked' ;?> required >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="f" class="form-label sa-rtl"> Female</label>
                    <input type="radio" class="" id="f" name="sex" value="F" <?php if ($value['sex']=='F')echo 'checked' ;?> required >
                </div>

                <div class="mb-3">
                    <label for="num1" class="form-label sa-rtl"> num1 </label>
                    <input type="number" class="form-control" id="num1" value="<?=$value['num1']?>" name="num1" >
                </div>
                <div class="mb-3">
                    <label for="num2" class="form-label sa-rtl"> num2 </label>
                    <input type="number" class="form-control" id="num2" value="<?=$value['num2']?>" name="num2" >
                </div>
                <div class="mb-3">
                    <label for="num3" class="form-label sa-rtl"> num3 </label>
                    <input type="number" class="form-control" id="num3" value="<?=$value['num3']?>" name="num3" >
                </div>
                <div class="mb-3">
                    <label for="num4" class="form-label sa-rtl"> num4 </label>
                    <input type="number" class="form-control" id="num4" value="<?=$value['num4']?>" name="num4" >
                </div>
                <button type="submit" name="submit-update" class="btn btn-primary">submit </button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?=$_ENV['URL']?>"> <button type="button" class="btn btn-info">New  </button> </a>
            </form>
            <br><br><br><br>


<?php };  foreach ($allclass as $key =>$items){?>
    </div>  <table class="table">
            <?=$items['classname'] ?>
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">classname</th>
                <th scope="col">stu name</th>
                <th scope="col">stu lastname</th>
                <th scope="col">sex</th>
                <th scope="col">num1</th>
                <th scope="col">num2</th>
                <th scope="col">num3</th>
                <th scope="col">num4</th>
                <th scope="col">created at</th>
                <th scope="col">update/delete</th>
            </tr>
            </thead>
            <tbody>
            <?php unset($items['classname'] );foreach ($items as $key2 =>$item){?>

            <tr>
                <td ><?=$item['id']?></td>
                <td><?=$item['classname']?> </td>
                <td><?=$item['stu_name']?> </td>
                <td><?=$item['stu_lastname']?> </td>
                <td><?=$item['sex']?> </td>
                <td><?=$item['num1']?> </td>
                <td><?=$item['num2']?> </td>
                <td><?=$item['num3']?> </td>
                <td><?=$item['num4']?> </td>
                <td><?=$item['created_at']?> </td>
                <td><a class="text-dark" href="<?=$_ENV['URL'].'/all/'.$item['id']?>">update </a> <a class="text-danger" href="<?=$_ENV['URL'].'/delete/'.$item['id']?>">delete </a>  </td>

            </tr>
            <?php }?>
            </tbody>
        </table>
    <br>
<?php }?>
