var quill = new Quill('#editor', {
    theme: 'snow'
  });

 
  
var form =  document.querySelector('form');
form.addEventListener('submit', function(){
    var content = quill.root.innerHTML;
    var input = document.createElement('input');
    input.setAttribute('type', 'hidden');
    input.setAttribute('name', 'isi');
    input.setAttribute('value', content);
    form.appendChild(input);

});

    
