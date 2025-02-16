<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Setting </title>
    <?php require('inc/links.php');?>

    <style>
        .col-height {
            height: 100%; /* Adjust as needed */
            position: fixed; 
        }
    </style>
</head>
<body class="bg-light">
    
        <?php require('inc/header.php'); ?>

        
            <div class="container-fluid" id="main-content">
                <div class="row">
                     <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                        <h3 class="mb-4">SETTING</h3>

                        <!-- General Setting section -->

                        <div class="card" style="width: 100rem;">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5 class="card-title m-0">General Setting</h5>
                                <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square">Edit</i>
                                </button>
                            </div>
                            <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                            <p class="card-text" id="site_title">Content</p>
                            <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                            <p class="card-text" id="site_about">Content</p>
                        </div>
                        </div>
                     </div>

                     <!-- General setting modal -->

                     
                    <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form>
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">General Setting</h5>
                        </div>
                        <div class="modal-body">
                        <div class="mb-3">
                        <label class="form-label">Nama-subtitle</label>
                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none ">
                        </div>
                        <div class="mb-3">
                            <label for="form-label">About Us</label>
                            <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="1"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn -secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                            <button type="Submit" onclick="upd_general(site_title.value,site_about.value)" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </form>
                    </div>
                    </div>

                </div>
        </div>

<?php require('inc/script.php'); ?>

<script>
    let general_data;

    function get_general()
    {
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');


        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/setting_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-wwww-form-urlencoded');

        xhr.onload = function(){
            general_data = JSON.parse(this.responseText);


            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;

            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;
        }

        xhr.send('get_general');

    }

    function upd_general(site_title_val_site_about_val)
    {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/setting_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-wwww-form-urlencoded');

        xhr.onload = function(){

            var myModal = document.getElementById('general-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

           if(this.responseText == 1)
           {
            alert('success','Changes saved!');
            get_general();
           }
           else
           {
            alert('error','No changes made!');
           }
        }

        xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
    }

    window.onload = function(){
        get_general();
    }




</script>
</body>
</html>
