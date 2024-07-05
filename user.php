<?php
class User {
    private $conn;

    public $first_name;
    public $last_name;
    public $nickname;
    public $nationality;
    public $ethnicity;
    public $religion;
    public $marital_status;
    public $date_of_birth;
    public $birth_day;
    public $height;
    public $gender;
    public $residence;
    public $current_address;
    public $phone;
    public $email;
    public $father_name;
    public $father_occupation;
    public $mother_name;
    public $mother_occupation;
    public $special_skills;
    public $hobbies;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getUserById($user_id) {
        $stmt = $this->conn->prepare("SELECT * FROM Users WHERE user_id = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>