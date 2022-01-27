
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
                <div class="alert alert-success" role="alert">
                    <?=$mas2?>
                </div>
            <?php }
            ?>

            <form name="hi" method="post" >
                <div class="mb-3">
                    <label for="classname" class="form-label sa-rtl">class name </label>
                    <input type="text" class="form-control" id="classname"  name="classname" required >
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label sa-rtl">name </label>
                    <input type="text" class="form-control" id="name"  name="name" >
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label sa-rtl"> last name</label>
                    <input type="text" class="form-control" id="lastname"  name="lastname"  >
                </div>
                <div class="mb-3 ">
                    <label for="m" class="form-label sa-rtl"> Male</label>
                    <input type="radio" class="" id="m" name="sex" value="M" required >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="f" class="form-label sa-rtl"> Female</label>
                    <input type="radio" class="" id="f" name="sex" value="F" required >
                </div>

                <div class="mb-3">
                    <label for="num1" class="form-label sa-rtl"> num1 </label>
                    <input type="number" class="form-control" id="num1" name="num1" >
                </div>
                <div class="mb-3">
                    <label for="num2" class="form-label sa-rtl"> num2 </label>
                    <input type="number" class="form-control" id="num2" name="num2" >
                </div>
                <div class="mb-3">
                    <label for="num3" class="form-label sa-rtl"> num3 </label>
                    <input type="number" class="form-control" id="num3" name="num3" >
                </div>
                <div class="mb-3">
                    <label for="num4" class="form-label sa-rtl"> num4 </label>
                    <input type="number" class="form-control" id="num4" name="num4" >
                </div>
                <button type="submit" name="submit" class="btn btn-primary">submit </button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?=$_ENV['URL']?>/all"> <button type="button" class="btn btn-success">show all  </button> </a>
            </form>
            <br><br><br><br>
        </div>
