<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Signature Pad</title>
  
  <x-bootstrap-package />
  <x-signature-pad-package />

  <style>
    .kbw-signature {
      width: 100%;
      height: auto; /* Allow the height to adjust based on aspect ratio */
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
            @if (session('success'))
              <div class="alert alert-success">
                <span>{{ session('success') }}</span>
              </div>
            @endif

            <form method="POST" action="{{ route('signpad.save') }}">
              @csrf
              <div class="form-group">
                <label class="" for="">Name:</label>
                <input type="text" name="name" class="form-control" value="">
              </div>        
              <div class="form-group">
                <label>Signature:</label>
                <div>
                  <canvas id="sig" class="kbw-signature"></canvas>
                </div>
                <textarea id="signature64" class="form-control" name="signed" style="display: none"></textarea>
              </div>
              <div class="form-group">
                <button id="clear" class="btn btn-danger">Clear</button>
                <button class="btn btn-primary">Save</button>
              </div>
            </form>
            <a href="{{ route('signpad.list') }}" class="btn btn-link" style="font-size: 20px; text-decoration:underline">View Signature List</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
  <script type="text/javascript">
    var canvas = document.getElementById('sig');
    var signaturePad = new SignaturePad(canvas, {
      backgroundColor: 'rgb(255, 255, 255)',
      penColor: 'rgb(0, 0, 0)',
      minWidth: 2,
      maxWidth: 4,
    });

    // Dynamically adjust canvas dimensions based on device pixel ratio
    var adjustCanvasSize = function () {
      var rect = canvas.getBoundingClientRect();
      var ratio = Math.max(window.devicePixelRatio || 1, 1);
      canvas.width = rect.width * ratio;
      canvas.height = rect.height * ratio;
      canvas.getContext('2d').scale(ratio, ratio);
      signaturePad.clear(); // Clear the signature when canvas size changes
    };

    // Handle window resize for canvas adjustment
    window.addEventListener('resize', adjustCanvasSize);
    adjustCanvasSize(); // Call initially to set canvas size

    // $('#clear').click(function (e) {
    //   e.preventDefault();
    //   signaturePad.clear();
    //   $("#signature64").val('');
    // });
  </script>
</body>
</html>
