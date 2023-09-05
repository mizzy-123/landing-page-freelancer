const foto = document.getElementById('foto');
const previewContainer = document.getElementById('previewContainer');

foto.addEventListener('change', function(event){
    previewContainer.innerHTML = '';
    const fotos = event.target.files;
    for(let i=0; i< fotos.length; i++){
        const file = fotos[i];

        if(file.type.startsWith("image/")){
            const card = document.createElement("div");
            card.classList.add('card-preview');

            const image = document.createElement('img');
            image.src = URL.createObjectURL(file);
            image.classList.add('card-img');

            const fileName = document.createElement('p');
            fileName.textContent = file.name;

            card.appendChild(image);
            card.appendChild(fileName);

            previewContainer.appendChild(card);


        }

    }

});