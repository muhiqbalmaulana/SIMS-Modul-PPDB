$(document).ready(function(){
    window.onload = Loaddashboard();
    $("a#home").click(function(){
        Loaddashboard();
    });
    $("a#data").click(function(){
        Loaddata();
    });
    $("a#diterima").click(function(){
        Loadditerima();
    });
    $("a#gagal").click(function(){
        Loadgagal();
    });
    $("a#user").click(function(){
        Loaduser();
    });
});

function loading(){
    $("#halamannya").hide();
    $("#halamannya").fadeIn("slow");
};
function Loaddashboard(){
    loading();
    $("#halamannya").load("dashboard.php");
};
function Loaddata(){
    loading();
    $("#halamannya").load("data.php");
};
function Loadditerima(){
    loading();
    $("#halamannya").load("diterima.php");
};
function Loadgagal(){
    loading();
    $("#halamannya").load("gagal.php");
};
function Loaduser(){
    loading();
    $("#halamannya").load("user.php");
};

$(function(){
            $(document).on('click','.edit_modal',function(e){
                e.preventDefault();
                $("#updpegawai").modal('show');
                $.post('modalupdpegawai.php',
                    {id:$(this).attr('id')},
                    function(html){
                        $(".myForm4").html(html);
                    }   
                );
            });
        });


$(function() {

$(".myForm1").submit(function() {

    $.ajax({
        type: "POST",
        url: "validasi.php",
        data: $(this).serialize(),
        beforeSend:function(){
             $('#alert').text("Please Wait");
           },
        success: function(html) {
            $('#validasi').modal('hide');
            $('#halamannya').html(html);
        },
        error: function() {
            alert("Error");
        },
    });
    return false;
});
$(".check").click(function() {

    $.ajax({
        type: "POST",
        url: "check.php",
        data: {id:$('.check:checked').length},
        success: function(html) {
            $.post('data.php',
                    function(html){
                        $("#halamannya").html(html);
                    }   
                );
        },
        error: function() {
            alert("Error");
        },
    });
    return false;
});
});