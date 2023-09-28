$(".p-contact__form .filelabel").on('change', function(e) {
    var labelVal = $(".title").text();
    var oldfileName = $(this).val();
    fileName = e.target.value.split('\\').pop();

    if (oldfileName == fileName) { return false; }
    var extension = fileName.split('.').pop();

    if ($.inArray(extension, ['jpg', 'jpeg', 'png']) >= 0) {
        $(".filelabel i").removeClass().addClass('fa fa-file-image-o');
        $(".filelabel i, .filelabel .title").css({ 'color': '#FFF' });
        $(".filelabel").css({ 'border': ' 1px solid #FFF' });
    } else if (extension == 'pdf') {
        $(".filelabel i").removeClass().addClass('fa fa-file-pdf-o');
        $(".filelabel i, .filelabel .title").css({ 'color': 'red' });
        $(".filelabel").css({ 'border': ' 2px solid red' });

    } else if (extension == 'doc' || extension == 'docx') {
        $(".filelabel i").removeClass().addClass('fa fa-file-word-o');
        $(".filelabel i, .filelabel .title").css({ 'color': '#fff' });
        $(".filelabel").css({ 'border': ' 1px solid #FFF' });
    } else {
        $(".filelabel i").removeClass().addClass('fa fa-file-o');
        $(".filelabel i, .filelabel .title").css({ 'color': '#fff' });
        $(".filelabel").css({ 'border': ' 1px solid #fff' });
    }

    if (fileName) {
        if (fileName.length > 35) {
            $(".filelabel .title").text(fileName.slice(0, 30) + '...' + extension);
        } else {
            $(".filelabel .title").text(fileName);
        }
    } else {
        $(".filelabel .title").text(labelVal);
    }
});


$("#contact-form").validate({
    rules: {
        fullname: "required",
        email: {
            required: true,
            email: true
        },
        username: {
            required: true,
            minlength: 2
        },
        password: {
            required: true,
            minlength: 5
        },
        confirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#password"
        },
        topic: {
            required: "#newsletter:checked",
            minlength: 2
        },
        agree: "required"
    },
    messages: {
        firstname: "Please enter your firstname",
        lastname: "Please enter your lastname",
        username: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
        },
        password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        },
        confirm_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
        },
        email: "Please enter a valid email address",
        agree: "Please accept our policy",
        topic: "Please select at least 2 topics"
    }
});