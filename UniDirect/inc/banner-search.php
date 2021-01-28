<div class="banner banner-top">
    <div class="banner-title ">
        <p class="title"><b>Courses in Australia</b></p>
        <h2 class="sub-title hidden-sm-down">Search for accredited courses offered by Australian universities,courses and private colleges.</h2>
    </div>


    <div class="input-form">
        <ul class="nav">
            <li class="nav-item nav-item-search">
                <a class="nav-link <?= (!isset($_GET['search-course']) && !isset($_GET['course_only']))?'active':''?> <?= (isset($_GET['search-course']))?'active':''?>" data-toggle="tab" href="#Universities">Universities</a>
            </li>
            <li class="nav-item nav-item-search">
                <a class="nav-link <?= (isset($_GET['course_only']))?'active':''?>" data-toggle="tab" href="#Course">Courses</a>
            </li>
            <li class="nav-item nav-item-search">
                <a class="nav-link" data-toggle="tab" href="#Language">Language</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane <?= (!isset($_GET['search-course']) && !isset($_GET['course_only']))?'active':''?> <?= (isset($_GET['search-course']))?'active':''?>" id="Universities">
                <form action="search.php" method="get">
                    <div class="input-group">
                        <label for="Universities" class="form-top-labels form-top-labels-1">University</label>
                        <select id="Universities" name="university_id" class="form-control form-control-lg couse-inputs">
                            <option selected disabled> Select University</option>
                            <?php
                            $query_unis = "Select * from university where status='Approved'";
                            $query_unis_res = mysqli_query($admin_con,$query_unis);
                            if (mysqli_num_rows($query_unis_res) > 0){
                                if (isset($_GET['university_id'])){

                                while ($row_single = mysqli_fetch_assoc($query_unis_res)){

                                    ?>
                                    <option <?= ($_GET['university_id'] == $row_single['id'])?'selected':''?> value="<?= $row_single['id'];?>"><?= $row_single['name'];?></option>
                                    <?php
                                }
                                }
                                else{
                                    while ($row_single = mysqli_fetch_assoc($query_unis_res)){

                                        ?>
                                        <option value="<?= $row_single['id'];?>"><?= $row_single['name'];?></option>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </select>


                        <label for="Education" class="form-top-labels form-top-labels-2">Education</label>
                        <?php
                            if (isset($_GET['education'])){
                        ?>
                        <select id="Education" name="education" class="form-control form-control-lg couse-inputs">
                            <option <?= ($_GET['education'] == 'Deploma')?'selected':''?> value="Deploma">Diploma</option>
                            <option <?= ($_GET['education'] == 'Master')?'selected':''?> value="Master">Master</option>
                            <option <?= ($_GET['education'] == 'Phd')?'selected':''?> value="Phd">Phd</option>
                        </select>
                        <?php
                            }
                            else{
                                ?>
                                <select id="Education" name="education" class="form-control form-control-lg couse-inputs">
                                    <option value="Deploma">Diploma</option>
                                    <option value="Master">Master</option>
                                    <option value="Phd">Phd</option>
                                </select>
                        <?php
                            }
                        ?>

                        <?php
                            if (isset($_GET['course'])){
                        ?>

                        <label for="course" class="form-top-labels form-top-labels-3">Course</label>
                        <select id="course" name="course" class="form-control form-control-lg couse-inputs">
                            <option <?= ($_GET['course'] == 'ICT')?'selected':''?> value="ICT">ICT</option>
                            <option <?= ($_GET['course'] == 'Marketing')?'selected':''?> value="Marketing">Marketing</option>
                            <option <?= ($_GET['course'] == 'Accounting')?'selected':''?> value="Accounting">Accounting</option>
                        </select>
                        <?php
                            }
                            else{
                                ?>
                                <label for="course" class="form-top-labels form-top-labels-3">Course</label>
                                <select id="course" name="course" class="form-control form-control-lg couse-inputs">
                                    <option value="ICT">ICT</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Accounting">Accounting</option>
                                </select>
                        <?php
                            }

                        ?>
                        <div class="input-group-append">
                            <button type="submit" name="search_course" class="btn search-btn">
                                <span class="fa fa-search"></span>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
            <div class="tab-pane <?= (isset($_GET['course_only']))?'active':''?>" id="Course">
                <form action="search.php" method="get">
                    <div class="input-group">
                        <?php
                        if (isset($_GET['course'])){
                            ?>
                            <select id="course" name="course" class="form-control form-control-lg couse-inputs">
                                <option <?= ($_GET['course'] == 'ICT')?'selected':''?> value="ICT">ICT</option>
                                <option <?= ($_GET['course'] == 'Marketing')?'selected':''?> value="Marketing">Marketing</option>
                                <option <?= ($_GET['course'] == 'Accounting')?'selected':''?> value="Accounting">Accounting</option>
                            </select>
                            <?php
                        }
                        else{
                            ?>
                            <select id="course" name="course" class="form-control form-control-lg couse-inputs">
                                <option value="ICT">ICT</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Accounting">Accounting</option>
                            </select>
                            <?php
                        }

                        ?>
<!--                        <input class="form-control form-control-lg search-input" name="course" type="text" placeholder="Find Course">-->
                        <div class="input-group-append">
                            <button name="course_only" type="submit" class="btn search-btn">
                                <span class="fa fa-search"></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="Language">
                <form action="" method="">
                    <div class="input-group">
                        <input class="form-control  form-control-lg search-input" type="text" placeholder="Find College..">
                        <div class="input-group-append">
                            <button type="submit" class="btn search-btn">
                                <span class="fa fa-search"></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>