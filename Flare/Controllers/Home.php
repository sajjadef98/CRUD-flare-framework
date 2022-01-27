<?php
namespace Controllers;
use allclasses;
use Buki\Router\Http\Controller;
class  Home extends Controller
{
      public function index()
      {
          $data=[];
             $Allclasses =new Allclasses ;
            if (isset($_POST['classname'])){
                $Allclasses->classname = $_POST['classname'];
                $Allclasses->stu_name = $_POST['name'];
                $Allclasses->stu_lastname = $_POST['lastname'];
                $Allclasses->sex = $_POST['sex'];
                $Allclasses->num1 = $_POST['num1'];
                $Allclasses->num2 = $_POST['num2'];
                $Allclasses->num3 = $_POST['num3'];
                $Allclasses->num4 = $_POST['num4'];
                $id = $Allclasses->save();
                if ($id)
                    $data['mas'] = "user created with id = " . $id;
            }
             View2('header') ;
             View2('home',$data) ;
             View2('footer') ;
     }
    public function all($x=null)
    {
        global $db ;
        $data=[];
       $AllclassesPage =new Allclasses() ;
        if (isset($_POST['submit-update'])){
            $data =[
            'classname' =>  $_POST['classname'],
            'stu_name'      => $_POST['name'] ,
            'stu_lastname'  => $_POST['lastname'] ,
            'sex'       => $_POST['sex'] ,
            'num1'      => $_POST['num1'] ,
            'num2'      => $_POST['num2'] ,
            'num3'      => $_POST['num3'] ,
            'num4'      => $_POST['num4'],

            ];
            $db->where ('id',$_POST['updateid']);
            if ($db->update ('allclasses', $data))
                $data['mas'] = " update with id = " .$_POST['updateid'] .'and name'.$_POST['name'];
            else
                $data['mas2'] ='update failed: ' . $db->getLastError();

        }
        if (isset($x)){
            $db->where('id',$x) ;
            $data['updateclass'] = $db->get('allclasses') ;
        }

        $classnames  = $db->rawQuery('SELECT DISTINCT classname from allclasses ');
        $n=0 ;
        foreach ($classnames as $classname) {
            $db->where('classname',$classname['classname']) ;
            $data['allclass'][$n] = $db->get('allclasses') ;
            $data['allclass'][$n] ['classname'] = $classname['classname'] ;
            $n++ ;
        }
        View2('header') ;
        View2('all',$data) ;
        View2('footer') ;
    }
    public function delete($x=null){
         global $db ;
        $db->where('id', $x);
        if($db->delete('allclasses')) {
            echo 'successfully deleted';
        }
        echo '<a href="'.$_ENV['URL'].'/all'.'">'.'back'.'</a>' ;
    }

}
