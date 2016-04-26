(function(w,d) {

    function init() {
        $(document).on('change','#pu-image-input', function() {
            readImageURL($(this)[0]);
        });



    };

    function readImageURL(img_input) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var image_data = e.target.result;

            $("#pu-crop-modal").modal();

            $(document).on('shown.bs.modal','#pu-crop-modal', function (e) {
                $("#pu-crop-modal-image").attr('src',image_data);
            });
            
        }
        reader.readAsDataURL(img_input.files[0]);

    };

    d.addEventListener('DOMContentLoaded', function() {
        init();
    });
})(window,document);