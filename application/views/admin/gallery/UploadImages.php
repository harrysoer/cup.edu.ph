<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Upload Images</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=site_url('admin/gallery/albums/list')?>">Albums</a></li>
                        <li class="">Create</li>
                        <li class="active">Upload</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Add Album</h3></div>
                        <div class="panel-body"> 
                           	<div class="dropzone"  style="margin-top:-0.5rem;">
								<div class="dz-message">
                                    <h3> Drag and Drop your files here Or Click here to upload</h3>
                                    <h3>for <?=$album_name?> album</h3>
								</div>
							</div>

                        </div>
                    </div>
                </div>
            </div> <!-- End row -->
            
        </div> <!-- container -->
                   
    </div> <!-- content -->


    <script type="text/javascript">

		Dropzone.autoDiscover = true;
		var file= new Dropzone(".dropzone",{
			url: "<?=site_url('admin/upload_images')?>",
			maxFilesize: 100000,  // maximum size to uplaod 
            dictFileTooBig: "file is too big",
			method:"post",
			 acceptedFiles:"image/*", // allow only images
			paramName:"userfile",
			dictInvalidFileType:"Image files are only allowed", // error message for other files on image only restriction 
			addRemoveLinks:true,
			autoProcessQueue: true	
		});
		

//Upload file onchange 

file.on("sending",function(a,b,c){
    a.album_name = " <?=$album_name?> "; 
    c.append("album_name",a.album_name);
});


// delete on upload 

file.on("removedfile",function(a){
	var token=a.token;
	$.ajax({
		type:"post",
		data:{token:token},
		url: "<?=site_url('admin/delete_uploaded_images')?>",
		cache:false,
		dataType: 'json',
		success: function(res){
			// alert('Selected file removed !');			

		}

	});
});


</script>


</div>