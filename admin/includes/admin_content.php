<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php 

                $user = User::find_all_users();

                foreach ($user as $user) {

                    echo $user->last_name . " ";

                }

                // while($row = mysqli_fetch_assoc($result)) {

                //     echo $row['last_name']. " ";

                // }

                // $result = User::find_user_id(2);

                // $user = User::instantiation($result);
                
                //echo $user->last_name;

            ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->