<div class="container mt-5">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <?php if( $this->session->flashdata('message') ) : ?>
                                    <?= $this->session->flashdata('message'); ?>
                                    </div>
                                <?php endif; ?>
                        <div class="col-lg">
                            <div class="p-5">
                                
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                                </div>

                                <form class="user" method="post" action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" autocomplete="off" autofocus id="username" name="username" placeholder="Enter Username...">
                                        
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-user btn-block" name="login">
                                        Login
                                    </button>


                                </form>
                               
                                <hr>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>