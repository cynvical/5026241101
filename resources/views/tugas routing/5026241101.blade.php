<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
  font-family:'Lato', sans-serif;

            color: #777777;
        }
        .popular-card{
  margin-top:-10px;
}
.other-card{
  margin-top:40px;
}
    </style>
</head>

<body style="background-color:#F2F2F2;">

    <div class="container">
    <div class="jumbotron text-center px-2 py-5" style="background-color:#FFFF;">
        <h1>Choose Your Plan</h1>
        <p>Pick the plan that fits your needs. You can upgrade or cancel anytime.</p>
    </div>
</div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-deck ">
                <div class="card other-card rounded-0 bg-#FDFFF9">
                    <div class="card-header text-center rounded-0" style="background-color:#FCCB46; color:#FDFFF9;">
                        <strong>PERSONAL</strong>
                    </div>
                    <div class="card-body text-center">

                        <p class="card-text">
                        <h3>$50 / mo</h3>
                        </p>
                        <p class="card-text"><b>1</b> user account</p>
                        <hr>
                        <p class="card-text"><b>5GB</b> storage</p>
                        <hr>
                        <p class="card-text"><b>Basic</b> analytics</p>
                        <hr>
                        <p class="card-text"><b>E-mail</b> support</p>
                        <hr>
                        <p class="card-text">Access to <b>basic features</b></p>
                        <a href="#" class="btn rounded-0 btn-block"
                            style="background-color:#EAEAEA; color:#A3A3A3; border:none;">
                            YOUR PLAN
                        </a>
                    </div>
                </div>
                <div class="card popular-card bg-#FDFFF9 rounded-0">
                     <div class="card-header text-center rounded-0" style="background-color:#A9DBA8; color:#FDFFF9;">
                        <strong>POPULAR</strong>
                    </div>
                    <div class="card-header text-center" style="background-color:#73BF9C; color:#FDFFF9;">
                        <strong>PROFESSIONAL</strong>
                    </div>
                    <div class="card-body text-center">

                        <p class="card-text">
                        <h3>$100 / mo</h3>
                        </p>
                        <p class="card-text"><b>5</b> user accounts</p>
                        <hr>
                        <p class="card-text"><b>50GB</b> storage</p>
                        <hr>
                        <p class="card-text"><b>Advanced</b> analytics</p>
                        <hr>
                        <p class="card-text"><b>Priority</b> email support</p>
                        <hr>
                        <p class="card-text">Access to <b>all core features</b> </p>
                        <a href="#" class="btn rounded-0 btn-block"
                            style="background-color:#FCCB46; color:#FDFFF9; border:none;">
                            UPGRADE
                        </a>
                    </div>
                </div>
                <div class="card other-card bg-#FDFFF9 rounded-0">
                    <div class="card-header text-center rounded-0" style="background-color:#FCCB46; color:#FDFFF9;">
                        <strong>BUSINESS</strong>
                    </div>
                    <div class="card-body text-center">

                        <p class="card-text">
                        <h3>$225 / mo</h3>
                        </p>
                        <p class="card-text"><b>Unlimited</b> users</p>
                        <hr>
                        <p class="card-text"><b>200GB</b> storage</p>
                        <hr>
                        <p class="card-text"><b>Full</b> analytics dashboard</p>
                        <hr>
                        <p class="card-text"><b>24/7</b> priority support</p>
                        <hr>
                        <p class="card-text"><b>Early feature access</b></p>
                        <a href="#" class="btn rounded-0 btn-block"
                            style="background-color:#FCCB46; color:#FDFFF9; border:none;">
                            UPGRADE
                        </a>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
