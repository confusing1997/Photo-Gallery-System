<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php 

                // $result = User::find_all_users();

                // while($row = mysqli_fetch_assoc($result)) {

                //     echo $row['last_name']. " ";

                // }

                $result = User::find_user_id(2);

                $user = new User();

                $user->id = $result['id'];
                $user->username = $result['username'];
                $user->password = $result['password'];
                $user->first_name = $result['first_name'];
                $user->last_name = $result['last_name'];

                echo $user->first_name;

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