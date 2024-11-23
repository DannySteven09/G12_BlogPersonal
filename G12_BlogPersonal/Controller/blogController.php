<?php
require_once('../Model/blogModel.php');

class blogController {
    public static function ctl_intoBlogs($data) {
        try {
            blogModel::into_blog($data);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function ctl_getBlogs() {
        try {
            return blogModel::get_blogs();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
