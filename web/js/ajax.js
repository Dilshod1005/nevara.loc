$(function(){

    $('.clicked').click(function (e){
        e.preventDefault();
        var href=$(this).attr('href');
        $.ajax({
            type:'GET',
            url: href,
            success:function (res){
                if(!res) return false;
                $('#loading').html(res);
            }
        });
        $('#modal_one').modal('show').find('#loading').load();
    });

    $('.modal-one').click(function(e){
        e.preventDefault();
        let id=$(this).data('id');
        $.ajax({
            data:{id:id},
            url:'main/data_one',
            type:'GET',
            success:function (res){
                if (!res) return false;
                $('#loading').html(res);
            },
            error:function (){
                console.log('Xatolik mavjud');
            }
        });
        $('#modal_one').modal('show').find('#loading').load();
    })
})