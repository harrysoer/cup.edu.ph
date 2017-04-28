<!DOCTYPE html>
<html>
<head>
    <title>Dean's Office</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <a href="<?=site_url('do/courses')?>">Courses</a>
    <a href="<?=site_url('do/schedules')?>">Class Schedules</a>
    <a href="<?=site_url('do/professors')?>"> Professors</a>
    <a href="<?=site_url('do/students')?>"> Students</a>
<br>
<h2>Upload Subjects</h2>

    <?php if (isset($error)) : ?>
        <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
        <H5>ERROR:</H5>
            <ul>
                <li><?= $error?></li>
            </ul>
        </div>
        </div>
    <?php endif; ?>
    <?=form_open_multipart('admin/admission/forms/submit')?>
        <div role="form" class="form-horizontal">
            <label><h4>File</h4></label>
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="file" name="userFile" class="form-control" accept="application/pdf, .pdf" required>
                </div>
            </div>
            <label><h4>File Description</h4></label>
            <div class="form-group">
                <div class="col-sm-7">
                    <input type="text" name="file_description" class="form-control" placeholder="File Description" required>  
                </div>
            </div>
        </div>
        <input class="btn btn-sm btn-primary" style="margin-top:1rem;" type="submit" name="submit" value="submit" />
    </form>
</body>
</html>