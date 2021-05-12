<?php include_once('shared/header.php'); ?>
    <div class="pb-2 mt-4 mb-2 border-bottom">
        <h1>Enquiry Form</h1>
    </div>

    <form action="" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" required="required">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" required="required">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required="required">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Contact No</label>
                    <input type="text" name="contact_no" class="form-control" required="required">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Interested Code</label>
                    <select name="course_id" class="form-control" required="required">
                        <option value="">Select Interested Course</option>
                        <?php
                            $db = connect();
            
                            $sql = "select * from courses";
                            $query = query($db, $sql);
                    
                            while($row = fetch_record($query)){
                        ?>
                            <option value="<?=$row['id'];?>"><?=$row['course_name'];?></option>
                        <?php
                            }
                    
                            close($db);
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Preferred Timing</label>
                    <input type="text" name="preferred_timing" class="form-control" required="required">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>Message (If Any)</label>
                    <textarea name="message" class="form-control" style="height:150px"></textarea>
                </div>
            </div>            
        </div>

        <button type="submit" class="btn btn-primary">Send</button>
    </form>

<?php include_once('shared/footer.php'); ?>