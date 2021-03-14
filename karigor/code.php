<?php
 include ("security.php");

//---Code for admin register
 if(isset($_POST['register_btn'])){
   $name       = $_POST['name'];
   $email      = $_POST['email']; 
   $password   = $_POST['password'];
   $c_password = $_POST['confirm_password'];
   if($password !== $c_password){
       $_SESSION['status']="Password does not match";
       header("Location:register.php");
   }else
   {
    $sql=" INSERT INTO register (username, email, password) VALUES ('$name ','$email ','$password')";

    $result=mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] ="New admin register complete";
        header("Location:register.php");    
    }
    else{
        $_SESSION['status'] ="Admin register not complete";
        header("Location:register.php");
    }
   }
 }
 //---Code for admin register



//---Code for update admin register
if(isset($_POST['register_Update_btn'])){
    $update_id = $_POST['update_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql =" UPDATE register SET username = '$name', email= '$email', password ='$password' where id ='$update_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $_SESSION['success'] ="Admin is updated";
        header("Location:register.php");
    }
    else{
        $_SESSION['status'] = "Admin is not updaed";
        header("Location:register.php");
    }
}
//---Code for update admin register




//---Code for Delete admin register
if(isset($_POST['register_delete_btn'])){
    $dlt_id = $_POST['register_delete_id'];
    $sql ="DELETE FROM register where id ='$dlt_id'";
    $result= mysqli_query($conn, $sql);
    if(!$result){
        $_SESSION['status'] ="Admin not deleted";
        header("Location:register.php");
    }
    else{
        $_SESSION['success'] ="Admin is deleted";
        header("Location:register.php");
    }

}
//---Code for Delete admin register




//-------Code for login page
if(isset($_POST['login_btn'])){

    $Login_email = $_POST['email'];

    $login_password = $_POST['password'];

    $sql = "SELECT * FROM register WHERE email ='$Login_email' AND password ='$login_password'";

    $result =  mysqli_query($conn,$sql);

    if($row = mysqli_fetch_assoc($result)){
            $_SESSION['userlogin'] = $Login_email;
            $_SESSION['username'] = $row['username'];
            header("Location:index.php");
        }
    else{
        $_SESSION['status'] ="Invalid email/password";
        header("Location:login.php");
    }

}
//-------Code for login page




//-------Code for logout  modal
if(isset($_POST['logout_btn'])){
    session_destroy();
    session_unset();
    header("Location:login.php");
}
//-------Code for logout  modal




//-------Code for add product page
if(isset($_POST['product_btn']) && isset($_FILES['product_image']['name'])){

    $name = $_POST['product_name'];
    $catagorie = $_POST['catagorie'];
    $product_link = $_POST['product_link'];
    $video_link = $_POST['video_link'];
    $price = $_POST['price'];
    $pros = $_POST['pros'];
    $cons = $_POST['cons'];
    $details = $_POST['detail'];
    $descriptions= $_POST['description'];
    //image section
    $img = $_FILES['product_image'];
    $imgName  = $img['name'];
    $imgSize  = $img['size'];
    $imgTmp   = $img['tmp_name'];
    $imgex    = explode(".",$imgName );
    $forntName = strtolower(current($imgex));
    $actualex = strtolower(end($imgex));
    $imgType   =  array("jpg","jpeg","png");
    $path     = "image/product/";
    $image    = $forntName.".".$actualex;

      if(!in_array($actualex,$imgType)){
        $_SESSION['status'] ="Only jpg, jpeg, and png are allowed";
        header("Location:addproduct.php");
        exit();
        }
        elseif($imgSize > 2000000 ){
            $_SESSION['status'] ="Image size should be less than 2 mb";
            header("Location:addproduct.php");
            exit();
            
        }
  
    else{
      $sql = "INSERT INTO product (name, ct_id, product_link, video_link, price, pros, cons, details, descriptions, img) 
      VALUES ('$name','$catagorie', '$product_link', '$video_link', '$price', '$pros', '$cons', '$details', '$descriptions', '$image');";
      move_uploaded_file($imgTmp,"image/product/".$image);
      $result = mysqli_query($conn,$sql);
      if($result){
        $_SESSION['success'] ="Product is added";
        header("Location:product.php");
      }
      else{
        $_SESSION['status'] ="Product is not added";
        header("Location:product.php");
      }
    }
}
//-------Code for add product page




//---Code for Update/Edit Product 

if(isset($_POST['product_update_btn']) && isset( $_POST['product_update_id'])){

    $update_id = $_POST['product_update_id'];

    $name = $_POST['product_name'];
    $catagorie = $_POST['catagorie'];
    $product_link = $_POST['product_link'];
    $video_link = $_POST['video_link'];
    $price = $_POST['price'];
    $pros = $_POST['pros'];
    $cons = $_POST['cons'];
    $details = $_POST['detail'];
    $descriptions= $_POST['description'];
    //image section
    $img = $_FILES['update_image'];
    $imgName  = $img['name'];
    $imgSize  = $img['size'];
    $imgTmp   = $img['tmp_name'];
    $imgex    = explode(".",$imgName );
    $forntName = strtolower(current($imgex));
    $actualex = strtolower(end($imgex));
    $imgType   =  array("jpg","jpeg","png");
    $path     = "image/product/";
    $image    = $forntName.".".$actualex;

    if(!empty($imgName)){
        if(!in_array($actualex,$imgType)){
            $_SESSION['status'] ="Only jpg, jpeg, and png are allowed";
             header("Location:product.php");
          }
          elseif($imgSize>2000000){
              $_SESSION['status'] ="Image size should be less than 2 mb";
              header("Location:product.php");
          }
          else{

            $query =  "SELECT img FROM product WHERE id='$update_id'";
            $ans = mysqli_query($conn,$query);
            foreach($ans as $ex){
                unlink("image/product/".$ex['img']);

            }
            move_uploaded_file($imgTmp,"image/product/".$image);
            $sql = " UPDATE  product SET name ='$name', ct_id = '$catagorie', product_link = '$product_link', video_link='$video_link', price ='$price', pros='$pros', cons ='$cons', details ='$details', descriptions='$descriptions', img='$image' WHERE id ='$update_id';";
            $result = mysqli_query($conn,$sql);
            if($result){
                $_SESSION['success'] = "Product is updated";
                header("Location:product.php");
            
            }
            else{
                $_SESSION['status'] = "Product is not updated";
                header("Location:product.php");
            }

          }
    }
    else{
        $query = " UPDATE  product SET name ='$name', ct_id = '$catagorie', product_link = '$product_link', video_link='$video_link', price ='$price', pros='$pros', cons ='$cons', details ='$details', descriptions='$descriptions' WHERE id ='$update_id';";
        $ans = mysqli_query($conn,$query);
        if($ans){
            $_SESSION['success'] = "Product is updated";
            header("Location:product.php");
    }
    else{
        $_SESSION['status'] = "Product is not updated";
        header("Location:product.php");
    }
}

  
}
//---Code for Update/Edit Product 



//---Code for delete product
if(isset($_POST['product_delete_btn'])){

    $id = $_POST['product_delete_id'];

    $query = "SELECT * FROM product WHERE id = '$id'";
    $ans = mysqli_query($conn,$query);
    while($ex = mysqli_fetch_assoc($ans)){

     unlink ("image/product/".$ex['img']);

    }

    $sql = "DELETE FROM product WHERE id = '$id';";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['status'] = "Product is deleted";
        header("Location:product.php");
    }
    
}
//---Code for delete product



//---Code for add Blog
if(isset($_POST['add_blog_btn'])){

    $name = $_POST['blog_name'];
    $title_one = $_POST['blog_title_one'];
    $title_two = $_POST['blog_title_two'];
    $des_one = $_POST['blog_des_one'];
    $des_two = $_POST['blog_des_two'];
    $des_three = $_POST['blog_des_three'];
    //image section
    $imgOne = $_FILES['blogImageOne'];
    $imgOneName = $_FILES['blogImageOne']['name'];
    $imgOneSize = $_FILES['blogImageOne']['size'];
    $imgOneTmp = $_FILES['blogImageOne']['tmp_name'];
    $imgOneExt = pathinfo($imgOneName,PATHINFO_EXTENSION);
    $img_one   = rand(10000,99999).".".$imgOneExt;

    $imgTwo = $_FILES['blogImageTwo'];
    $imgtwoName = $_FILES['blogImageTwo']['name'];
    $imgtwoSize = $_FILES['blogImageTwo']['size'];
    $imgtwoTmp = $_FILES['blogImageTwo']['tmp_name'];
    $imgtwoExt = pathinfo($imgOneName,PATHINFO_EXTENSION);
    $img_two   = rand(10000,99999).".".$imgtwoExt;
    $imgType   =  array("jpg","jpeg","png");
    
    if(!in_array($imgOneExt,$imgType) || !in_array($imgtwoExt,$imgType)){
        $_SESSION['status'] ="Only jpg, jpeg, and png are allowed";
        header("Location:addblog.php");
        }
        elseif($imgOneSize>2000000 || $imgtwoSize >2000000 ){
            $_SESSION['status'] ="Image size should be less than 2 mb";
            header("Location:addblog.php");
        }
        else{
        move_uploaded_file( $imgOneTmp,"image/blog/". $img_one);
        move_uploaded_file( $imgtwoTmp,"image/blog/".$img_two);
        $sql = "INSERT INTO blog (name, title_one, title_two, des_one, des_two, des_three, image_one, image_two) VALUES ('$name', '$title_one','$title_two','$des_one',' $des_two','$des_three','$img_one','$img_two');";
        $result = mysqli_query($conn,$sql);
        $_SESSION['success'] = "New blog is added";
        header("Location:blog.php");
        }

}
//---Code for add Blog



//--code for Updated blog


if(isset($_POST['blog_update_btn'])){



    $id  = $_POST['blog_update_id'];
    $name = $_POST['blog_name'];
    $title_one = $_POST['title_one'];
    $title_two = $_POST['title_two'];
    $des_one = $_POST['des_one'];
    $des_two = $_POST['des_two'];
    $des_three = $_POST['des_three'];

    //image section
    $imgOne = $_FILES['image_one'];
    $imgOneName = $_FILES['image_one']['name'];
    $imgOneSize = $_FILES['image_one']['size'];
    $imgOneTmp = $_FILES['image_one']['tmp_name'];
    $imgOneExt = pathinfo($imgOneName,PATHINFO_EXTENSION);
    $img_one   = rand(10000,99999).".".$imgOneExt;

    $imgTwo = $_FILES['image_two'];
    $imgtwoName = $_FILES['image_two']['name'];
    $imgtwoSize = $_FILES['image_two']['size'];
    $imgtwoTmp = $_FILES['image_two']['tmp_name'];
    $imgtwoExt = pathinfo($imgOneName,PATHINFO_EXTENSION);
    $img_two   = rand(10000,99999).".".$imgtwoExt;
    $imgType   =  array("jpg","jpeg","png");



   if(!empty($imgOneName) and !empty($imgtwoName)){

    if(!in_array($imgOneExt,$imgType) || !in_array($imgtwoExt,$imgType)){
        $_SESSION['status'] ="Only jpg, jpeg, and png are allowed";
        header("Location:addblog.php");
        }
        elseif($imgOneSize>2000000 && $imgtwoSize >2000000 ){
            $_SESSION['status'] ="Image size should be less than 2 mb";
            header("Location:addblog.php");
        }else{

            $query =  "SELECT image_one,image_two FROM blog WHERE id='$id'";
            $ans = mysqli_query($conn,$query);
            foreach($ans as $ex){
                unlink("image/blog/".$ex['image_one']);
                unlink("image/blog/".$ex['image_two']);
            }
            move_uploaded_file( $imgOneTmp,"image/blog/". $img_one);
            move_uploaded_file( $imgtwoTmp,"image/blog/".$img_two);
            $sql = "UPDATE blog SET name ='$name', title_one ='$title_one', title_two='$title_two', des_one ='$des_one', des_two='$des_two', des_three='$des_three', image_one ='$img_one', image_two ='$img_two'
            WHERE id ='$id';";
            $result = mysqli_query($conn,$sql);
            if($result){
                $_SESSION['success'] = "Blog is updated";
                header("Location:blog.php");
            }
            else{
                $_SESSION['status'] = "Blog is not updated";
                header("Location:blog.php");
            }
        
        

        }
   }
   else{

    $sql = "UPDATE blog SET name ='$name', title_one ='$title_one', title_two='$title_two', des_one ='$des_one', des_two='$des_two', des_three='$des_three'
    WHERE id ='$id';";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = "Blog is updated";
        header("Location:blog.php");
    }
    else{
        $_SESSION['status'] = "Blog is not updated";
        header("Location:blog.php");
    }

   }


}


//--code for Updated blog 



//---code for delete blog

if(isset($_POST['blog_delete_btn'])){
    $id = $_POST['blog_delete_id'];

    $query = "SELECT * FROM blog WHERE id = '$id'";
    $ans = mysqli_query($conn,$query);
    while($ex = mysqli_fetch_assoc($ans)){

        unlink("image/blog/".$ex['image_one']);
        unlink("image/blog/".$ex['image_two']);

    }

    $sql = "DELETE FROM blog WHERE id ='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Blog is deleted';
        header("Location:blog.php");
    }
    else{
        $_SESSION['status'] ="Blog is not deleted";
        header("Location:blog.php");
    }

}

//---code for delete blog



//---code for add table data
if(isset($_POST['add_table_btn'])){

    $name = $_POST['product_name'];
    $type = $_POST['type'];
    $catagorie = $_POST['catagorie'];
    $link = $_POST['link'];
    $feature = $_POST['feature'];
    $product_img =  $_FILES['product_img']['name'];
    $brand_img = $_FILES['brand_img']['name'];
    $price_img = $_FILES['price_img']['name'];

    $sql = "INSERT INTO compare_table (name,type,catagorie,link,feature,product_img,brand_img,price_img) VALUES ('$name','$type','$catagorie', '$link','$feature','$product_img','$brand_img','$price_img');";
    $result = mysqli_query($conn,$sql);

    if($result){
        move_uploaded_file($_FILES['product_img']['tmp_name'],"image/table/".$product_img);
        move_uploaded_file($_FILES['brand_img']['tmp_name'],"image/table/".$brand_img);
        move_uploaded_file($_FILES['price_img']['tmp_name'],"image/table/".$price_img);
        $_SESSION['success'] ="Table data is created";
        header("Location:table.php");
    }
    else{
        $_SESSION['status'] ="Table data is not created";
        header("Location:table.php");
    }
    

}

//---code for add table data

//---code for update table data

if(isset($_POST['table_update_btn'])){

    $id = $_POST['table_update_id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $catagorie = $_POST['catagorie'];
    $link = $_POST['link'];
    $feature = $_POST['feature'];

    $product_img =  $_FILES['product_img']['name'];
    $brand_img = $_FILES['brand_img']['name'];
    $price_img = $_FILES['price_img']['name'];


    $sql = "UPDATE compare_table SET name ='$name', type ='$type', catagorie='$catagorie',link ='$link', feature='$feature', product_img='$product_img', brand_img ='$brand_img', price_img ='$price_img' WHERE id ='$id';";

    $result = mysqli_query($conn,$sql);

    if($result){
        move_uploaded_file($_FILES['product_img']['tmp_name'],"image/table/".$product_img);
        move_uploaded_file($_FILES['brand_img']['tmp_name'],"image/table/".$brand_img);
        move_uploaded_file($_FILES['price_img']['tmp_name'],"image/table/".$price_img);
        $_SESSION['success'] ="Table data is updated";
        header("Location:table.php");
    }
    else{
        $_SESSION['status'] ="Table data is not updated";
        header("Location:table.php");
    }

}

//---code for update table data


//---code for delete table data



if(isset($_POST['table_delete_btn'])){
    $id = $_POST['table_delete_id'];
    $sql = "DELETE FROM compare_table WHERE id ='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Table row is deleted';
        header("Location:table.php");
    }
    else{
        $_SESSION['status'] ="Table row is not deleted";
        header("Location:table.php");
    }



}

//Code for edit catagory Table

if(isset($_POST['catagory_update_btn'])){



    $id  = $_POST['catagory_update_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $keyword = $_POST['keyword'];
    $description = $_POST['description'];
    $intro       = $_POST['intro'];
    $conclu      = $_POST['conclu'];
   

    //image section
    $img = $_FILES['image'];
    $imgName  = $img['name'];
    $imgSize  = $img['size'];
    $imgTmp   = $img['tmp_name'];
    $imgExt   = pathinfo($imgName,PATHINFO_EXTENSION);
    $image   = rand(10000,99999).".".$imgExt;
    $imgType   =  array("jpg","jpeg","png");



   if(!empty($imgName)){

    if(!in_array($imgExt,$imgType)){
        $_SESSION['status'] ="Only jpg, jpeg, and png are allowed";
        header("Location:editCatagory.php");
        }
        elseif($imgOneSize>1000000 ){
            $_SESSION['status'] ="Image size should be less than 1 mb";
            header("Location:editCatagory.php");
        }else{

            $query =  "SELECT avatar_img FROM catagory WHERE id='$id'";
            $ans = mysqli_query($conn,$query);
            foreach($ans as $ex){
                unlink("image/avatar/".$ex['avatar_img']);
            }
            move_uploaded_file( $imgTmp,"image/avatar/". $image);
            $sql = "UPDATE catagory SET title ='$title', introduction = '$intro', conclusion = '$conclu', m_keyword ='$keyword', m_description='$description', author='$author', avatar_img ='$image' WHERE id ='$id';";
            $result = mysqli_query($conn,$sql);
            if($result){
                $_SESSION['success'] = "Catagory is updated";
                header("Location:catagory.php");
            }
            else{
                $_SESSION['status'] = "Catagory is not updated";
                header("Location:catagory.php");
            }
        
        

        }
   }
   else{

    $sql = "UPDATE catagory SET title ='$title', introduction = '$intro', conclusion = '$conclu', m_keyword ='$keyword', m_description='$description', author='$author' WHERE id ='$id';";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = "Catagory is updated";
        header("Location:catagory.php");
    }
    else{
        $_SESSION['status'] = "Catagory is not updated";
        header("Location:catagory.php");
    }
   }


}
















