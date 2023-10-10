<html>
<head>
    <title>Laravel Signature Pad Example - MyNotePaper.com</title>
    
    <x-bootstrap-package />
    <x-signature-pad-package />

    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Laravel 9.x Signature Pad</h5>
                    </div>
                    <div class="card-body">
                        <x-form-body />
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <x-signature-pad-js />
</body>
</html>
