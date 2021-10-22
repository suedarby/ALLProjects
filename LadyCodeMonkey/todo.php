<!doctype html>

<!--replaced with header.php-->
<?php include 'includes/header.php'?>
<!--replaced with topnav.php-->
<?php include 'includes/topnav.php' ?>
<!--MAIN PAGE CONTAINER-->
<div class="container-fluid">
    <div class="row">
        <!--replace with sidenav.php-->
        <?php include 'includes/sidenav.php' ?>

        <!--MAIN PAGE CONTAINER-->
        <!--ALL pages get this to here-->

        <div class="col-sm-8">
            <!--MAIN CONTENT ALL NON STATIC CONTENT GOES HERE-->
            <h1>My Task List</h1>
            <form>
                <input type="text" class="todo-input" />
                <button class="todo-button" type="submit"> <i class="fas fa-plus-square"></i></button>
                <div class="select">
                    <select name="todos" class="filter-todo">
                        <option value="all">All</option>
                        <option value="completed">Completed</option>
                        <option value="uncompleted">Uncompleted</option>
                    </select>
                </div>
            </form>
            <div class="todo-container">
                <ul class="todo-list"></ul>
            </div>
        </div>
        <!--END MAIN CONTENT-->
        <section class="container-fluid">
            <!-- Optional JavaScript -->
            <script src="app.js"></script>

            <!--All pages get from here down-->
            <!--FOOTER include-->
            <div>
                <?php include 'includes/footer.php' ?>
                <!--END FOOTER-->
            </div>
            <!--JavaScript include-->
            <div>
                <?php include 'includes/js.php' ?>
                <!--end javascript-->
            </div>
            <!--END CONTAINER-->
        </section>
    </div>
</div>

</body>

</html>