<div class="modal fade" id="addStudent">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adding or Updating Student Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <!-- Student info add or udpate-->
                <form id="addStudent" method="POST" enctype="multipart/form-body">
                    <!-- student name -->
                    <div class="form-group">
                        <label>Name:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-user-tie"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter student name ..." autocomplete="off" required="required" id="stu_name" name="stu_name">
                        </div>
                    </div>
                    <!-- student ID -->
                    <div class="form-group">
                        <label>Student Roll:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-user-tie"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter student's roll ..." autocomplete="off" required="required" id="stu_roll" name="stu_roll">
                        </div>
                    </div>
                    <!-- student designation -->
                    <div class="form-group">
                        <label>Designation:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-user-tie"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter student's Designation ..." autocomplete="off" required="required" id="stu_designation" name="stu_designation">
                        </div>
                    </div>
                    <!-- student Organization -->
                    <div class="form-group">
                        <label>Organization:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-user-tie"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter student's oaganization ..." autocomplete="off" required="required" id="stu_organization" name="stu_organization">
                        </div>
                    </div>
                    <!-- student email -->
                    <div class="form-group">
                        <label>E-mail:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fas fa-envelop-open text-light"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Enter student's e-mail ..." autocomplete="off" required="required" id="stu_email" name="stu_email">
                        </div>
                    </div>
                    <!-- student mobile -->
                    <div class="form-group">
                        <label>mobile:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fas fa-phonee text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter student's mobile ..." autocomplete="off" required="required" id="stu_mobile" name="stu_mobile">
                        </div>
                    </div>
                    <!-- student photo -->
                    <div class="form-group">
                        <label>image:</label>
                        <div class="input-group">
                            <label class="custom-file-labal" for="stu_image"></label>
                            <input type="file" class="custom-file-input" name="stu_image" id="stu_image">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-bg-dark">Submit</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>


                <!-- 2 input fields first for adding and next for updatin, deleting or viewing-->
                <input type="hidden" name="action" value="addStudent">
                <input type="hidden" name="stu_id" ID="stu_id" value="">

            </div>

            </form>
        </div>
    </div>
</div>