<?php
class Main_Functions
{
    public $data = [];
    public $products = [];
    private  $conn;
    public $msg;
    public $edit_pro;
    function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=price_compare", "root", "");
        if (!$this->conn) {
            echo "Database problem";
            die();
        }
    }
    // Show message 
    public function show_msg()
    {
        return $this->msg;
    }
    //Create_users function
    function Create_users($name, $username, $password, $email, $redi = "", $role = 0)
    {
        $insert = "insert into users (name,username,password,email,role) values (?,?,?,?,?)";
        $create_user = $this->conn->prepare($insert);
        $check_email_query = "select * from user where email=?";
        $check_email = $this->conn->prepare($check_email_query);
        $check_email->execute([$email]);
        $e_mail = $check_email->fetch(PDO::FETCH_ASSOC);
        if ($e_mail["email"] != $email) {
            if ($create_user->execute([$name, $username, password_hash($password, PASSWORD_DEFAULT), $email, $role])) {
                $this->msg = "Data Create Successfully";
                if ($redi != "") {
                    header("location:$redi");
                }
            }
        } else {
            echo "This email is used";
        }
    }

    //Login function
    function Login($user_email, $user_password)
    {
        $show_query = "select * from users where email=?";
        $show = $this->conn->prepare($show_query);
        $show->bindParam(1, $user_email);
        $show->execute();
        if ($show->rowCount() > 0) {
            $data = $show->fetch(PDO::FETCH_ASSOC);
            if (password_verify($user_password, $data["password"])) {
                $this->msg = "Login successfully";
                $_SESSION['email_s'] = $data["email"];
                $_SESSION['user_role'] = $data["role"];
                $_SESSION['user_name'] = $data["name"];
                header("location:dashboard.php");
            } else {
                $this->msg = "Password not matching";
            }
        }
    }
    public function show_data($table)
    {
        $data_show_query = "SELECT * FROM $table";
        $data_show = $this->conn->prepare($data_show_query);
        $data_show->execute();
        $count_data = $data_show->rowCount();
        if ($count_data > 0) {
            $users = $data_show->fetchAll(PDO::FETCH_ASSOC);
            return $this->data = $users;
        } else {
            $this->msg = "No Data Found";
        }
    }
    public function delete_data($id, $table)
    {
        $delete_query = "DELETE FROM $table WHERE id=?";
        $delete_data = $this->conn->prepare($delete_query);
        if ($delete_data->execute([$id])) {
            $this->msg = "Delete Succfully";
        } else {
            $this->msg = "Delete Faild";
        }
    }
    public function add_product($table, $title, $price, $img)
    {
        $create_query = "INSERT INTO $table (title,price,img) VALUES (?,?,?)";
        $create_data = $this->conn->prepare($create_query);
        if ($create_data->execute([$title, $price, $img])) {
            $this->msg = "Product Create Succfully";
        } else {
            $this->msg = "Product Create Faild";
        }
    }
    public function show_product($table)
    {
        $show_query = "SELECT * FROM $table";
        $show_product = $this->conn->prepare($show_query);
        $show_product->execute();
        $product_count = $show_product->rowCount();
        if ($product_count > 0) {
            $all_product = $show_product->fetchAll(PDO::FETCH_ASSOC);
            return $this->products = $all_product;
        }
    }
    public function edit_product($id, $table)
    {
        $show_query = "SELECT * FROM $table WHERE id=$id";
        $show_product = $this->conn->prepare($show_query);
        $show_product->execute();
        $product_count = $show_product->rowCount();
        if ($product_count > 0) {
            $all_product = $show_product->fetch(PDO::FETCH_ASSOC);
            return $this->edit_pro = $all_product;
        }
    }
    public function update_product($table, $id, $title, $price, $img)
    {
        $create_query = "UPDATE $table SET title=?,price=?,img=? WHERE id=?";
        $create_data = $this->conn->prepare($create_query);
        if ($create_data->execute([$title, $price, $img, $id])) {
            $this->msg = "Product Update Succfully";
        } else {
            $this->msg = "Product Update Faild";
        }
    }
};
