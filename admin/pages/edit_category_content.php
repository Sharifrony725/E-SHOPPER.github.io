<?php
$category_id = $_GET['id'];
$query_result = $ob_sub_admin->select_category_info_by_id($category_id);
$category_info =  mysqli_fetch_assoc($query_result);
if (isset($_POST['btn'])) {
    $message = $ob_sub_admin->update_category_info($_POST);
}
?>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Category Form</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h2 style="color:green">
            <?php if (isset($message)) {
                echo $message;
                unset($message);
            }
            ?>
        </h2>

        <div class="box-content">
            <form name="edit_category_form" class="form-horizontal" action="" method="POST">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name </label>
                        <div class="controls">
                            <input value="<?php echo $category_info['category_name']; ?>" name="category_name" type="text" placeholder="enter category name">

                            <input value="<?php echo $category_info['category_id']; ?>" name="category_id" type="hidden">

                        </div>
                    </div>



                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Category Description</label>
                        <div class="controls">
                            <textarea name="category_description" class="cleditor" id="textarea2" rows="3"><?php echo $category_info['category_description']; ?></textarea>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status" id="">
                                <option> ---Select Publication Status--- </option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button name="btn" type="submit" class="btn btn-primary">Update Category Info</button>
                        <button type="reset" class="btn">Reset</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
<script>
    document.forms['edit_category_form'].elements['publication_status'].value = "<?php echo $category_info['publication_status']; ?>"
</script>