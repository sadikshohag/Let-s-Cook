<?php

namespace App;

use PDO;

class cmsArticle {

    public $conn;
    public $dbUser = 'root';
    public $dbPass = '';
    public $id = '';
    public $username = '';
    public $fname = '';
    public $lname = '';
    public $email = '';
    public $password = '';
    public $image = '';
    public $imageExtention = '';
    public $imageSize = '';
    public $pno = '';
    public $hno = '';
    public $ono = '';
    public $title = '';
    public $htmlSummary = '';
    public $htmlDetails = '';
    public $subTitle = '';
    public $cAddress = '';
    public $pAddress = '';
    public $flag = '';
    public $category = '';
    public $articleID = '';

    public function __construct() {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=brighter2morrow', $this->dbUser, $this->dbPass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function setFlag($data = '') {
        $this->flag = $data;
        return $this;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setValues($data = array()) {
        $this->email = $data['email'];
        $this->password = $data['password'];
        if (isset($data['username'])) {
            $this->username = $data['username'];
        }
        return $this;
    }

    public function setArticlevalues($data = array()) {
        $this->title = $data['title'];
        $this->subTitle = $data['subtitle'];
        $this->htmlSummary = $data['summary'];
        $this->htmlDetails = $data['description'];
        $this->category = $data['category'];
        if (isset($data['image']) && !empty($data['image'])) {
            $this->image = $data['image'];
            $this->imageExtention = $data['extention'];
            $this->imageSize = $data['size'];
        }
        return $this;
    }

    public function setProfileValues($data = array()) {
        $this->fname = $data['fname'];
        $this->lname = $data['lname'];
        $this->pno = $data['pno'];
        $this->hno = $data['hno'];
        $this->ono = $data['ono'];
        $this->cAddress = $data['cAddress'];
        $this->pAddress = $data['pAddress'];
        if (isset($data['image']) && !empty($data['image'])) {
            $this->image = $data['image'];
            $this->imageExtention = $data['extention'];
            $this->imageSize = $data['size'];
        }
    }

    public function logIn() {
        $statement = $this->conn->prepare("SELECT * FROM `users` WHERE `email` = :email");
        try {
            $statement->execute(array(':email' => "$this->email"));
            return $statement->fetch();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function registration() {
        $query = "INSERT INTO `brighter2morrow`.`users` (`id`, `unique_id`, `username`, `password`, `email`, `created_at`, `is_active`) "
                . "VALUES (NULL, '" . uniqid() . "', :username, :password, :email, '" . date("Y-m-d h:i:s") . "',  NULL)";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute(
                    array(
                        ':username' => "$this->username",
                        ':password' => "$this->password",
                        ':email' => "$this->email"
                    )
            );
            header('location:login.php');
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function addPost() {
        $query = "SELECT `id` FROM `users` WHERE `email`='" . $this->email . "'";
        $stm1 = $this->conn->prepare($query);
        $stm1->execute();
        $idData = $stm1->fetch();
        $this->id = $idData['id'];
        $query1 = "INSERT INTO `brighter2morrow`.`articles` (`id`, `users_id`, `title`, `sub_title`, `html_summary`, `html_details`, `created_at`) "
                . "VALUES (NULL, :id, :title, :subTitle, :htmlSummary, :htmlDetails, '" . date("Y-m-d h:i:s") . "')";
        try {
            $stmt = $this->conn->prepare($query1);
            $stmt->execute(
                    array(
                        ':id' => "$this->id",
                        ':title' => "$this->title",
                        ':subTitle' => "$this->subTitle",
                        ':htmlSummary' => "$this->htmlSummary",
                        ':htmlDetails' => "$this->htmlDetails"
                    )
            );
//            header('location:createArticle.php');
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

        $queryArticleID = "SELECT`id` FROM `articles` WHERE `users_id` = '" . $this->id . "' ORDER BY `id` DESC";
        $statement = $this->conn->prepare($queryArticleID);
        try {
            $statement->execute();
            $recentArticleId = $statement->fetch();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->articleID = $recentArticleId['id'];

        $queryInsertCategory = "INSERT INTO `articles_categories_mapping` (`id`, `article_id`, `category_id`, `created_at`) "
                . "VALUES (NULL, :articleID, :categoryID, '" . date("Y-m-d h:i:s") . "')";
        try {
            $stmt = $this->conn->prepare($queryInsertCategory);
            $stmt->execute(
                    array(
                        ':articleID' => "$this->articleID",
                        ':categoryID' => "$this->category"
                    )
            );
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

        if (isset($this->image) && !empty($this->image)) {
            $queryImage = "UPDATE `images` SET `image_name`=:image ,`extention`=:extension,`size`=:size,`modified_at`='" . date("Y-m-d h:i:s") . "' WHERE `images`.`user_id` = :id";
            $stm1 = $this->conn->prepare($queryImage);
            $stm1->execute(
                    array(
                        ':id' => "$this->id",
                        ':image' => "$this->image",
                        ':extension' => "$this->imageExtention",
                        ':size' => "$this->imageSize"
                    )
            );
            $queryImageID = "SELECT `id` FROM `images` WHERE `user_id` = '" . $this->id . "' ORDER BY `id` DESC ";
            $statement = $this->conn->prepare($queryImageID);
            try {
                $statement->execute();
                $recentImageId = $statement->fetch();
            } catch (PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
            $imageID = $recentImageId['id'];

            $queryImageMapping = "INSERT INTO `articles_images_mapping` (`id`, `articles_id`, `images_id`, `created_at`) "
                    . "VALUES (NULL, :articleID, :imageID, '" . date("Y-m-d h:i:s") . "')";
            try {
                $stmt = $this->conn->prepare($queryImageMapping);
                $stmt->execute(
                        array(
                            ':articleID' => "$this->articleID",
                            ':imageID' => "$imageID"
                        )
                );
                header('location:createArticle.php');
            } catch (PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }

        header('location:createArticle.php');
    }

    public function getArticle() {
        $query = "SELECT * FROM `articles`, `users` WHERE `articles`.`users_id` = `users`.`id`  ORDER BY `articles`.`id` DESC";
        $stmt = $this->conn->prepare($query);
        try {
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getProfileArtcile() {
        $query = "SELECT COUNT(`users_id`) AS id FROM `articles` WHERE `users_id` = :id ";
        $stmt = $this->conn->prepare($query);
        try {
            $stmt->execute(
                    array(
                        ':id' => "$this->id"
                    )
            );
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function profile() {
        $query = "SELECT * FROM `profiles`,`users` WHERE profiles.user_id = users.id AND users.email =:email ";
        $stmt = $this->conn->prepare($query);
        try {
            $stmt->execute(
                    array(
                        ':email' => "$this->email"
                    )
            );
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getImage() {
        $query = "SELECT * FROM `images` WHERE `user_id` IN (SELECT id FROM users WHERE users.email = :email) AND images.`id` NOT IN (SELECT articles_images_mapping.`images_id` FROM `articles_images_mapping`)";
        $stmt = $this->conn->prepare($query);
        try {
            $stmt->execute(
                    array(
                        ':email' => "$this->email"
                    )
            );
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getPostDetails() {
        $query = "SELECT * FROM `articles` WHERE `id` = :id";
        $stmt = $this->conn->prepare($query);
        try {
            $stmt->execute(
                    array(
                        ':id' => "$this->id"
                    )
            );
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function userList() {
        $query = "SELECT * FROM `users` WHERE `deleted_at` is null and `email` != :email ORDER BY `id` DESC";
        $stm1 = $this->conn->prepare($query);
        $stm1->execute(
                array(
                    ':email' => "$this->email"
                )
        );
        $allData = $stm1->fetchAll();
        return $allData;
    }

    public function isActive() {
        $query = "SELECT * FROM `users` WHERE `email`= '" . $this->email . "' ";
        $stm1 = $this->conn->prepare($query);
        $stm1->execute(
        );
        $data = $stm1->fetch();
//        print_r($data);
//        die();
        if ($data['is_active'] == 0) {
            $query = "UPDATE `brighter2morrow`.`users` SET `is_active` = '1' WHERE `email` = :email";
            $stm1 = $this->conn->prepare($query);
            $stm1->execute(
                    array(
                        ':email' => "$this->email"
                    )
            );
        } else {
            $query = "UPDATE `brighter2morrow`.`users` SET `is_active` = 0 WHERE `email` = :email";
            $stm1 = $this->conn->prepare($query);
            $stm1->execute(
                    array(
                        ':email' => "$this->email"
                    )
            );
        }
        header('location:../admin/userlist.php');
    }

    public function update() {
        if ($this->flag == 'Update Profile') {
//            if (!empty($this->image)) {
//                $query = "UPDATE `images` SET `image_name`=:image ,`extention`=:extension,`size`=:size,`modified_at`='" . date("Y-m-d h:i:s") . "' WHERE `images`.`user_id` = :id";
//                $stm1 = $this->conn->prepare($query);
//                $stm1->execute(
//                        array(
//                            ':id' => "$this->id",
//                            ':image' => "$this->image",
//                            ':extension' => "$this->imageExtention",
//                            ':size' => "$this->imageSize"
//                        )
//                );
//            }
            if (isset($this->image) && !empty($this->image)) {
                $query = "UPDATE `profiles` SET `first_name`=:fname,`last_name`=:lname,`personal_phone`=:pno,`home_phone`=:hno,`office_phone`=:ono,`current_address`=:cAddress,`permanent_address`=:pAddress,`modified_at`='" . date("Y-m-d h:i:s") . "',`profile_pic` = '" . $this->image . "' WHERE `user_id` = :id";
            } else {
                $query = "UPDATE `profiles` SET `first_name`=:fname,`last_name`=:lname,`personal_phone`=:pno,`home_phone`=:hno,`office_phone`=:ono,`current_address`=:cAddress,`permanent_address`=:pAddress,`modified_at`='" . date("Y-m-d h:i:s") . "' WHERE `user_id` = :id";
            }
            $statement = $this->conn->prepare($query);
            $statement->execute(
                    array(
                        ':id' => "$this->id",
                        ':fname' => "$this->fname",
                        ':lname' => "$this->lname",
                        ':pno' => "$this->pno",
                        ':hno' => "$this->hno",
                        ':ono' => "$this->ono",
                        ':cAddress' => "$this->cAddress",
                        ':pAddress' => "$this->pAddress"
                    )
            );
            header("location:profile.php");
        } else {
            $query = "UPDATE `users` SET `password`=:password,`email`=:email,`modified_at`= '" . date("Y-m-d h:i:s") . "' WHERE `id`=:id ";
            $statement = $this->conn->prepare($query);
            $statement->execute(
                    array(
                        ':id' => "$this->id",
                        ':email' => "$this->email",
                        ':password' => "$this->password"
                    )
            );
            header("location:profile.php");
        }
    }

    public function stroe() {
        $query = "SELECT `id` FROM `users` WHERE `email`='" . $this->email . "'";
        $stm1 = $this->conn->prepare($query);
        $stm1->execute();
        $this->id = $stm1->fetch()['id'];
//        $queryImage = "INSERT INTO `images` (`id`, `user_id`, `image_name`, `extention`, `size`, `created_at`) "
//                . "VALUES (NULL, :id, :image, :extension, :size, '" . date("Y-m-d h:i:s") . "')";
//        $stmt = $this->conn->prepare($queryImage);
//        try {
//            $stmt->execute(
//                    array(
//                        ':id' => "$this->id",
//                        ':image' => "$this->image",
//                        ':extension' => "$this->imageExtention",
//                        ':size' => "$this->imageSize"
//                    )
//            );
//        } catch (PDOException $e) {
//            echo 'ERROR: ' . $e->getMessage();
//        }
        if (isset($this->image) && !empty($this->image)) {
            $sql = "INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `personal_phone`, `home_phone`, `office_phone`, `current_address`, `permanent_address`, `profile_pic`, `created_at`) "
                    . "VALUES (NULL, :id, :fname, :lname, :pno, :hno, :ono, :cAddress, :pAddress, '" . $this->image . "', '" . date("Y-m-d h:i:s") . "')";
        } else {
            $sql = "INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `personal_phone`, `home_phone`, `office_phone`, `current_address`, `permanent_address`, `created_at`) "
                    . "VALUES (NULL, :id, :fname, :lname, :pno, :hno, :ono, :cAddress, :pAddress, '" . date("Y-m-d h:i:s") . "')";
        }
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(
                    array(
                        ':id' => "$this->id",
                        ':fname' => "$this->fname",
                        ':lname' => "$this->lname",
                        ':pno' => "$this->pno",
                        ':hno' => "$this->hno",
                        ':ono' => "$this->ono",
                        ':cAddress' => "$this->cAddress",
                        ':pAddress' => "$this->pAddress"
                    )
            );
            header('location:profile.php');
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getCategory() {
        $query = "SELECT * FROM `categories` WHERE `parent_id` = 0 ";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $exc) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getPendingUser() {
        $query = "SELECT COUNT(`id`) AS ID FROM `users` WHERE `is_active` = 0";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $exc) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getPostDetailsImage() {
        $query = "SELECT * FROM `articles_images_mapping`,images WHERE articles_images_mapping.images_id = images.id AND articles_images_mapping.articles_id = " . $this->id;
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $exc) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function addCategory($data = array()) {
        if (isset($data['category']) && !empty($data['category'])) {
            $query = "INSERT INTO `categories` (`id`, `title`, `parent_id`, `created_at`) "
                    . "VALUES (NULL, '" . $data['newCategory'] . "', '" . $data['category'] . "', '" . date("Y-m-d h:i:s") . "')";
        } else {
            $query = "INSERT INTO `categories` (`id`, `title`, `created_at`) "
                    . "VALUES (NULL, '" . $data['newCategory'] . "',  '" . date("Y-m-d h:i:s") . "')";
        }

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            header("location:http://localhost/brighter2morrow/views/common/category.php");
        } catch (PDOException $exc) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function countArticle() {
        $query = "SELECT COUNT(`id`) FROM `articles` ";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $exc) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function countNewUser() {
        $query = "SELECT * FROM `users` WHERE 1 ORDER BY `id` DESC  ";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $exc) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

}
