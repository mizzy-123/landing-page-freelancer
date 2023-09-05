
    // window.onload = function () {
    //     OpenBootstrapPopup();
    //     // alert(content);      

    // };

    function OpenCategoryUpdate() {
        $("#updateCategoryModal").modal('show');
    }

    function openCategoryModal(){
        var btn = document.getElementById("button_update");
        btn.addEventListener('click', function(){
            OpenCategoryUpdate();
        });
    }

