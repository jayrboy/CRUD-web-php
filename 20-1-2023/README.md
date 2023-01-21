# verify.php
![image](https://user-images.githubusercontent.com/73011056/213868918-5a48abc5-119c-4e66-a507-92d32b9901e8.png)

# index.php
![image](https://user-images.githubusercontent.com/73011056/213869133-ac499360-5861-4f61-ba5a-29b2d992c8a4.png)
![image](https://user-images.githubusercontent.com/73011056/213868936-9d8e0848-9ede-4de5-a466-6baea5499762.png)
![image](https://user-images.githubusercontent.com/73011056/213869839-947d6ab8-18c6-40c4-9f00-665e5c5a6da2.png)



# logout.php
      <?php
        session_start();
        session_destroy();
        header("location: login.php")
      ?>

# delete.php
![image](https://user-images.githubusercontent.com/73011056/213868989-6fa13715-3816-42c1-b55b-a9414b0d90c7.png)

      <?php
        session_start();
        if ($_SESSION['role'] != 'a') {
            header("location: index.php");
            die();
        } else {
            echo "Delete 'กระทู้ที่ $_GET[id]'";
        }
      ?>

# newpost.php
![image](https://user-images.githubusercontent.com/73011056/213870739-ef6a9620-4394-4c6f-a7b1-985c7bda5570.png)


   
