<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 5</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <link rel="stylesheet" href="{{ url('summernote/summernote-bs4.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('summernote/summernote-lite.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    {{-- <script src="{{ asset('summernote/summernote-bs4.min.js') }}"></script> --}}
    <script src="{{ asset('summernote/summernote-lite.js') }}"></script>
    <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body>
    
      <form method="post">
        <div id="summernote" name="editor"></div>
      </form>
    

  </body>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            airmode:true,
            placeholder: 'Tulis di sini...',
        });
    });
</script>
</html>