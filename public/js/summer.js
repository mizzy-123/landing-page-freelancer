$(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            airmode:true,
            placeholder: 'Tulis di sini...',
        });

        // $('#saveButton').click(function(){
            
        // });

        
    });

var data_isi = document.getElementById("temp_isi");


$(document).ready(function() {
        $('#summernote_update').summernote({
            height: 300,
            airmode:true,
            placeholder: 'Tulis di sini...',
            
        });

        // $('#saveButton').click(function(){
            
        // });

        
    });

$(document).ready(function() {
        $('#summernote_update').summernote('code', data_isi.value);

        // $('#saveButton').click(function(){
            
        // });

        
    });

var form =  document.querySelector('form');
        form.addEventListener('submit', function(){
            var editorContent = $('#summernote').summernote('code');
            var content = editorContent;
            $.ajax({
                url: '/portofolio',
                method: 'POST',
                data:{
                    _token: '{{ csrf_token() }}',
                    editor_content: editorContent
                },
                success: function (response){
                    alert(response.message);
                }
            });
            
            var input = document.createElement('input');
            input.setAttribute('type', 'hidden');
            input.setAttribute('name', 'isi');
            input.setAttribute('value', content);
            form.appendChild(input);

        });

var form2 =  document.getElementById('form_update');
        form2.addEventListener('submit', function(){
            var editorContent = $('#summernote_update').summernote('code');
            var content = editorContent;
            $.ajax({
                url: '/portofolio',
                method: 'POST',
                data:{
                    _token: '{{ csrf_token() }}',
                    editor_content: editorContent
                },
                success: function (response){
                    alert(response.message);
                }
            });
            
            var input = document.createElement('input');
            input.setAttribute('type', 'hidden');
            input.setAttribute('name', 'isi_update');
            input.setAttribute('value', content);
            form2.appendChild(input);

        });



