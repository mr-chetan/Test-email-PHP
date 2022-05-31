<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h3> Send From Server </h3>
                <form action="server-email-send.php" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="sender">From</label>
                            <input type="email" class="form-control" name="sender" id="sender" placeholder="From Email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="receiver">To</label>
                            <input type="email" class="form-control" id="receiver"  name="receiver" placeholder="To Email" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <div class="form-group col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 mt-4">
                <h3> Send From Client </h3>
                <form action="client-email-send.php" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="host">Host</label>
                            <input type="text" class="form-control" id="host" placeholder="Host" name="host" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="port">Port</label>
                            <input type="number" class="form-control" id="port" placeholder="Port" name="port" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" placeholder="Password" name="password" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="encryption">Encryption</label>
                            <select class="form-control" id="encryption" name="encryption" required>
                                <option value="null" selected>None</option>
                                <option value="tls" >TLS</option>
                                <option value="ssl" >SSL</option>
                            </select>
                        </div>

                        <hr class="mt-4">
                        <div class="form-group col-md-6">
                            <label for="sender">From</label>
                            <input type="email" class="form-control" name="sender" id="sender" placeholder="From Email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="receiver">To</label>
                            <input type="email" class="form-control" id="receiver"  name="receiver" placeholder="To Email" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <div class="form-group col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>